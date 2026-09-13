<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
   public function index()
{
    $tasks = Task::latest()->paginate(5);

    return view('tasks.index', compact('tasks'));
}


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')
                ->store('tasks', 'public');
        }

        Task::create($data);

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task created successfully.');
    }


    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {

            if ($task->image) {
                Storage::disk('public')->delete($task->image);
            }

            $data['image'] = $request->file('image')
                ->store('tasks', 'public');
        }

        $task->update($data);

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task updated successfully.');
    }


    public function destroy(Task $task)
    {
        if ($task->image) {
            Storage::disk('public')->delete($task->image);
        }

        $task->delete();

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task deleted successfully.');
    }

public function updateStatus(Request $request, Task $task)
{
    $request->validate([
        'status' => 'required|in:active,inactive',
    ]);

    $task->update([
        'status' => $request->status,
    ]);

    return redirect()
        ->route('tasks.index')
        ->with('success', 'Task status updated successfully.');
}

}
