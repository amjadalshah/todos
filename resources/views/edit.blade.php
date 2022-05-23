@extends('layouts.app')
@section('title',"Edit-" . $todos -> todo_name)
@section('content')

<form action="../{{ $todos->id }}" method="post">
    @csrf
    <div class="card">
        <div class="card-header">
        <h5 class="card-title">Edit Todo</h5>
        </div>
        <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Todo Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ $todos -> todo_name }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Todo Description</label>
                    <input type="text" class="form-control" name="description" value="{{ $todos -> description }}">
                </div>
        </div>
        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</form>


@endsection
