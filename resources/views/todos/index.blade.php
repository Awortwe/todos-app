@extends('layout.app')

@section('title', 'All Todos')

@section('content')
   <div class="container">
    <h1 class="text-center my-3">Todos Page</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    Todos
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($todos as $todo)
                            <li class="list-group-item">
                                {{ $todo->name }}
                                @if (!($todo->completed == true))
                                <a href="/todos/{{ $todo->id }}/complete" class="btn btn-warning btn-sm mr-2" style="float: right">Completed</a>
                                @endif
                                <a href="{{ route('todos.show', $todo->id) }}" class="btn btn-primary btn-sm " style="float: right; margin-right:5px">View</a>

                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection
