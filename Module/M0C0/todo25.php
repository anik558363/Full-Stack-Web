<?php


define("TASKS_FILE", 'tasks.json');


function saveTasks(array $tasks): void
{
    file_put_contents(TASKS_FILE, json_encode($tasks, JSON_PRETTY_PRINT));
}



function loadTasks()
{
    if (!file_exists(TASKS_FILE)) {
        return [];
    }

    $data = file_get_contents(TASKS_FILE);

    return $data ? json_decode($data, true) : [];
}



// At the very top
$tasks = loadTasks();

// Handle POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["task"]) && !empty(trim($_POST['task']))) {
        $tasks[] = [
            'task' => htmlspecialchars(trim($_POST["task"])),
            "done" => false
        ];
        saveTasks($tasks);
        header("Location:" . $_SERVER["PHP_SELF"]);
        exit();
    } elseif (isset($_POST["delete"])) {
        $index = $_POST["delete"];
        if (isset($tasks[$index])) {
            unset($tasks[$index]);
            $tasks = array_values($tasks); // Reindex array
            saveTasks($tasks);
        }
        header("Location:" . $_SERVER["PHP_SELF"]);
        exit();
    } elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["toggle"])) {
            $index = $_POST["toggle"];
            if (isset($tasks[$index])) {
                $tasks[$index]['done'] = !$tasks[$index]['done'];
                saveTasks($tasks);
            }
            header("Location: " . $_SERVER["PHP_SELF"]);
            exit();
        }
    }
}





?>


<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>To-Do App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body class="bg-white p-8">
    <div class="max-w-6xl mx-auto bg-white rounded-md shadow-sm p-8">
        <h1 class="text-4xl font-light text-gray-700 mb-6">To-Do App</h1>

        <!-- add task form -->
        <form class="flex gap-6 mb-10" method="POST">
            <input
                type="text"
                placeholder="Enter a new task"
                class="flex-grow border border-gray-300 rounded-md px-4 py-2 text-gray-600 text-sm focus:outline-none focus:ring-2 focus:ring-purple-600" name="task" require />
            <button
                type="submit"
                class="bg-purple-700 text-white font-semibold text-sm uppercase px-6 py-2 rounded-md hover:bg-purple-800">
                Add Task
            </button>
        </form>

        <section>

            <!-- task list -->
            <h2 class="text-3xl font-light text-gray-700 mb-6">Task List</h2>
            <?php if (empty($tasks)) : ?>
                <p class="text-gray-500 mb-6">No tasks yet. Add one above!</p>
            <?php else : ?>
                <div class="flex items-center justify-between">
                    <!-- Task List -->
                    <div class="flex flex-col gap-4">
                        <?php foreach ($tasks as $key => $task) : ?>
                            <form method="POST">
                                <input type="hidden" name="toggle" value="<?= $key ?>">
                                <button type="submit" class="text-sm font-semibold text-gray-600 uppercase tracking-wider" style="font-size: 17px;">
                                    <span style="<?= $task['done'] ? 'text-decoration: line-through;' : '' ?>">
                                        <?= htmlspecialchars($task['task']) ?>
                                    </span>
                                </button>
                            </form>
                        <?php endforeach; ?>

                    </div>


                    <div class="flex flex-col gap-4">
                        <?php foreach ($tasks as $key => $task) : ?>
                            <form method="POST">
                                <input type="hidden" name="delete" value="<?= $key ?>">
                                <button class="border border-purple-600 text-purple-600 text-xs font-semibold uppercase tracking-wider rounded-md px-6 py-2 hover:bg-purple-50" type="submit">Delete</button>
                            </form>
                        <?php endforeach; ?>

                    </div>


                </div>
            <?php endif; ?>

    </div>
    </section>
    </div>
</body>

</html>