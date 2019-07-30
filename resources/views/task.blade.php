@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 card p-3 ">
<<<<<<< HEAD
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
                    <th>Task</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->name }}</td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
=======
            <form action="/action_page.php">
              <div class="form-group">
                <label for="task">Task</label>
                <input type="text" class="form-control" id="task" name="task">
            </div>
            <button type="submit" class="btn btn-primary">Add task</button>
        </form>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 offset-1 card p-3">
        <table class="table">
            <thead>
              <tr>
                <th>Task</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
          <tr>
            <td>task1</td>
            <td><a href="#" class="btn btn-danger">Delete</a></td>

        </tr>

    </tbody>
</table>
</div>
@endsection
>>>>>>> 133044b... them view tasks
