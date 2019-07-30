@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 card p-3 ">
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
