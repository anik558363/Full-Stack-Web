<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatchController extends Controller
{

    public function editPatch($id)
    {
        $tasks = DB::table('tasks')->where('id',$id)->first();

        return view('tasks.editPatch',['tasks'=>$tasks]);
    }
    public function updatePatch(Request $request, $id)
    {
        $updateData = [];
        if ($request->has('title')) {
            $updateData['title'] = $request->title;
        }
        if ($request->has('desc')){
            $updateData['description'] = $request->desc;
        }

        DB::table('tasks')->where('id',$id)->update($updateData);
        return redirect()->route('tasks.index')->with('success','Task updated successfully.');

    }
}
