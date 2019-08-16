@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 card p-3 ">
            @if (session('status'))
            <div class="alert alert-success">
                <strong>{{ session('status') }}</strong>
            </div>
            @endif
            <form action="{{ route('add-task') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="task">Task</label>
                    <input type="text" class="form-control" id="task" name="task">
                    @if ($errors->first('task'))
                    <p class="text-danger">{{ $errors->first('task') }}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Add task</button>
            </form>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 offset-1 card p-3">
            <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Task</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $task->name }}</td>
                    <form action="{{ route('delete-task') }}" method="post">
                        @csrf
                        <td><button type="submit" value="{{ $task->id }}" name="id" class="btn btn-danger">Delete</button></td>
                    </form>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
