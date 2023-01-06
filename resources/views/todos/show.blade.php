@extends('layout.app')

@section('title',  "Todo Item" )

@section('content')
    <div class="container">
        <h1 class="text-center my-5">
            {{ $todo->name }}
        </h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        Details
                    </div>

                    <div class="card-body">
                        {{ $todo->description }}
                    </div>
                </div>
                <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-info btn-sm my-3">Edit</a>
                <form action="{{ route('todos.destroy', $todo->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
