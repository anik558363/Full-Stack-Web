<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->orderBy('id', 'desc')->paginate(5);

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $imagePath = null;
        $title = $request->title;
        $description = $request->desc;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('tasks/test', 'public');
        }

        DB::table('tasks')->insert([
            'title' => $title,
            'description' => $description,
            'image' => $imagePath,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function edit($id)
    {
        $tasks = DB::table('tasks')->where('id', $id)->first();

        return view('tasks.edit', ['tasks' => $tasks]);
    }

    public function update(Request $request, $id)
    {
        $title = $request->title;
        $description = $request->desc;

        $taskOld = DB::table('tasks')->where('id', $id)->first();
        $imagePath =  $taskOld->image;


        if ($request->hasFile('image')) {
            if ($imagePath && Storage::disk('public')->exists($imagePath)) {
                //Delete old image file if exists
                Storage::disk('public')->delete($imagePath);
            }
            //Store new image
            $imagePath = $request->file('image')->store('tasks/test', 'public');
        }

        DB::table('tasks')->where('id', $id)->update([
            'title' => $title,
            'description' => $description,
            'image' => $imagePath,
            'updated_at' => now()

        ]);
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }


    public function destroy($id)
    {
        $taskOld = DB::table('tasks')->where('id', $id)->first();
        $imagePath =  $taskOld->image;

        if ($imagePath && Storage::disk('public')->exists($imagePath)) {
            //Delete old image file if exists
            Storage::disk('public')->delete($imagePath);
        }

        DB::table('tasks')->where('id', $id)->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
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
