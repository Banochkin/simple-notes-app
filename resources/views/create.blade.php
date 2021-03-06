@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Add note</h1>
        <div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="post" action="{{ route('notes.store') }}">
                @csrf
                <div class="form-group">    
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title"/>
                </div>
                <div class="form-group">    
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" name="description"/>
                </div>
                <button type="submit" class="btn btn-primary">Add note</button>
            </form>

        </div>
    </div>
</div>
@endsection