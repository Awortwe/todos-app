@extends('layout.app')

@section('title', 'Update Todo')

@section('content')
    <h1 class="text-center my-4">Update Todo</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    Edit todo
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach ($errors->all() as $error)
                                    <li class="list-group-item">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('todos.update', $todo->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name"  value="{{ $todo->name }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <textarea name="description"  cols="5" rows="5" class="form-control">{{ $todo->description }}</textarea>
                        </div>
                        <div class="mb-3 text-center">
                            <button class="btn btn-success" type="submit">Update Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
