@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Add New Task</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf <div class="mb-3">
                        <label for="title" class="form-label">Task Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="What needs to be done?" required>
                    </div>

                    <div class="mb-3">
                        <label for="priority" class="form-label">Priority Level</label>
                        <select name="priority" id="priority" class="form-select">
                            <option value="Low">Low</option>
                            <option value="Medium" selected>Medium</option>
                            <option value="High">High</option>
                        </select>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success">Save Task</button>
                        <a href="{{ route('tasks.index') }}" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection