@extends('layouts.app')

@section('title', 'Tasks')

@section('content')

    <style>
        .action-class {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
        }
    </style>

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>Task Management</h2>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createTaskModal">

            + Create Task

        </button>

    </div>


    {{-- Success Message --}}

    @if (session('success'))
        <div class="alert alert-success">

            {{ session('success') }}

        </div>
    @endif


    {{-- Validation Error --}}

    @if ($errors->any())

        <div class="alert alert-danger">

            <ul class="mb-0">

                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif


    {{-- Task Table --}}

    <div class="card">

        <div class="card-body">

            <table class="table table-bordered table-hover">

                <thead>

                    <tr>

                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th width="150">Action</th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($tasks as $task)
                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>


                            <td>

                                @if ($task->image)
                                    <img src="{{ asset('storage/' . $task->image) }}" width="70" height="70"
                                        class="rounded">
                                @else
                                    No Image
                                @endif

                            </td>


                            <td>
                                {{ $task->title }}
                            </td>


                            <td>
                                {{ $task->description }}
                            </td>

                            <td>

                                @if ($task->status === 'active')
                                    <span class="badge bg-success">
                                        Active
                                    </span>
                                @else
                                    <span class="badge bg-secondary">
                                        Inactive
                                    </span>
                                @endif

                            </td>



                            <td>
                                <form action="{{ route('tasks.updateStatus', $task->id) }}" method="POST">

                                    @csrf
                                    @method('PUT')

                                    <select name="status" class="form-select form-select-sm" onchange="this.form.submit()">

                                        <option value="inactive" {{ $task->status === 'inactive' ? 'selected' : '' }}>
                                            Inactive
                                        </option>

                                        <option value="active" {{ $task->status === 'active' ? 'selected' : '' }}>
                                            Active
                                        </option>

                                    </select>

                                </form>


                                <div class="action-class">

                                    {{-- Edit --}}

                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editTask{{ $task->id }}">

                                        Edit

                                    </button>


                                    {{-- Delete --}}

                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">

                                        @csrf

                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure?')">

                                            Delete

                                        </button>

                                    </form>
                                </div>



                            </td>

                        </tr>


                        {{-- Edit Modal --}}

                        <div class="modal fade" id="editTask{{ $task->id }}" tabindex="-1">

                            <div class="modal-dialog">

                                <div class="modal-content">

                                    <form action="{{ route('tasks.update', $task->id) }}" method="POST"
                                        enctype="multipart/form-data">

                                        @csrf

                                        @method('PUT')


                                        <div class="modal-header">

                                            <h5 class="modal-title">
                                                Edit Task
                                            </h5>

                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                            </button>

                                        </div>


                                        <div class="modal-body">

                                            <div class="mb-3">

                                                <label class="form-label">
                                                    Title
                                                </label>

                                                <input type="text" name="title" class="form-control"
                                                    value="{{ $task->title }}" required>

                                            </div>


                                            <div class="mb-3">

                                                <label class="form-label">
                                                    Description
                                                </label>

                                                <textarea name="description" class="form-control" rows="4">{{ $task->description }}</textarea>

                                            </div>


                                            <div class="mb-3">

                                                <label class="form-label">
                                                    Image
                                                </label>

                                                <input type="file" name="image" class="form-control">

                                            </div>


                                            @if ($task->image)
                                                <img src="{{ asset('storage/' . $task->image) }}" width="80">
                                            @endif

                                        </div>


                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">

                                                Close

                                            </button>

                                            <button type="submit" class="btn btn-primary">

                                                Update Task

                                            </button>

                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>

                    @empty

                        <tr>

                            <td colspan="5" class="text-center">

                                No tasks found.

                            </td>

                        </tr>
                    @endforelse

                </tbody>

            </table>
            <div class="d-flex justify-content-center mt-4">

                {{ $tasks->links() }}

            </div>


        </div>

    </div>


    {{-- Create Modal --}}

    <div class="modal fade" id="createTaskModal" tabindex="-1">

        <div class="modal-dialog">

            <div class="modal-content">

                <form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf


                    <div class="modal-header">

                        <h5 class="modal-title">
                            Create Task
                        </h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>

                    </div>


                    <div class="modal-body">

                        <div class="mb-3">

                            <label class="form-label">
                                Title
                            </label>

                            <input type="text" name="title" class="form-control" placeholder="Enter title" required>

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Description
                            </label>

                            <textarea name="description" class="form-control" rows="4" placeholder="Enter description"></textarea>

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Image
                            </label>

                            <input type="file" name="image" class="form-control">

                        </div>

                    </div>


                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">

                            Close

                        </button>

                        <button type="submit" class="btn btn-primary">

                            Save Task

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection
