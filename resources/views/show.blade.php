@extends('layouts.app')
@section('title',"todo:" . $todos -> todo_name)
@section('content')
            <div class="card-header"><h1 class="text-center">Name: {{ $todos -> todo_name }}</h1></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10">
                            <h5>Desciption:</h5>
                        </div>
                        <div class="col-lg-2">
                            <span class="badge bg-warning">{{ boolval($todos -> completed) ? "completed":"not completed"  }}</span>
                        </div>
                    </div>
                    <div class="row bt-1">
                        <p class="text-muted pt-4">
                            {{ $todos -> description }}
                        </p>
                    </div>
                </div>
                <a href="{{ route('home') }}" class="btn btn-primary w-25 mb-3"> back</a>
@endsection
