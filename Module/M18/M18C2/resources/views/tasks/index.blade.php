@extends('layouts.app')
@section('content')
    <h2>Task List</h2>

    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif

    <a href="{{ route('tasks.create') }}" class="btn btn-success mb-2">Add Task</a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description }}</td>
            <td>
                @if($task->image)
                    <img style="width: 60px" src="{{ asset('storage/'.$task->image) }}">
                @else
                    N/A
                @endif
            </td>
            <td>
                <a href="{{route('tasks.edit',$task->id)}}" class="btn btn-primary">EDIT</a>
                <a href="{{route('tasks.editPatch',$task->id)}}" class="btn btn-secondary">EDIT PARTIAL</a>

                <form action="{{route('tasks.delete',$task->id)}}" method="POST" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you wanna delete ?')">DELETE</button>
                </form>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $tasks->links('pagination::bootstrap-5') }}
@endsection
