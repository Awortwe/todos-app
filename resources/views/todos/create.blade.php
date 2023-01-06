@extends('layout.app')

@section('title', 'Create Todo')

@section('content')
    <h1 class="text-center my-4">Create Todo</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    Create new todo
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
                    <form action="{{ route('todos.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" placeholder="Name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <textarea name="description" placeholder="Description" cols="5" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="mb-3 text-center">
                            <button class="btn btn-success" type="submit">Create Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
