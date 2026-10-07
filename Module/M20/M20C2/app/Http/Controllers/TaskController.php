<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditTaskRequest;
use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('id', 'desc')->paginate(5);

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(StoreTaskRequest $request)
    {
        // Validated data
        $validateData = $request->validated();


        try {


            $imagePath = null;

            // Upload image
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')
                    ->store('tasks/test', 'public');
            }

            // Create task
            $task = new Task();

            $task->title = $validateData['title'];
            $task->description = $validateData['description'];
            $task->image = $imagePath;

            $task->save();

            Log::info('Task Craeted', [
                'task_id' => $task->id,
                'title' => $task->title
            ]);

            return redirect()
                ->route('tasks.index')
                ->with('success', 'Task created successfully.');
        } catch (Exception $e) {

            Log::error('Task Creation Failed', [
                'error_message' => $e->getMessage(),
                'time' => $e->getLine()
            ]);

            return back()
                ->withInput()
                ->with('error', 'Something went wrong');
        }
    }

    public function edit($id)
    {
        $tasks = Task::findOrFail($id);

        return view('tasks.edit', ['tasks' => $tasks]);
    }

    public function update(EditTaskRequest $request, $id)
    {
        // Get validated data
        $validateData = $request->validated();

        // Find task
        $taskOld = Task::findOrFail($id);

        // Keep old image
        $imagePath = $taskOld->image;

        // If new image uploaded
        if ($request->hasFile('image')) {

            // Delete old image
            if ($imagePath && Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }

            // Store new image
            $imagePath = $request->file('image')
                ->store('tasks/test', 'public');
        }

        // Update task
        $taskOld->update([
            'title' => $validateData['title'],
            'description' => $validateData['description'],
            'image' => $imagePath,
        ]);

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task updated successfully.');
    }

    public function destroy($id)
    {
        $taskOld = Task::findOrFail($id);

        $imagePath = $taskOld->image;

        // Delete image
        if ($imagePath && Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath);
        }

        // Delete task
        $taskOld->delete();

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task deleted successfully.');
    }

    public function test()
    {
        $title = 'Sobuj';
        $description = 'Sobuj test';

        DB::table('tasks')->insert([
            'title' => $title,
            'description' => $description,
        ]);
    }

    public function testAgain()
    {
        $name = 'Rahim';

        echo $name;

        $name = 'Sobuj';
    }
}
