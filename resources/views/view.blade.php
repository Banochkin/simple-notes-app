@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">{{$note->title}}</h1>
        <div>
            <p>Description:</p>
            <p class="description">{{$note->description}}</p>
            <p><a href="{{ route('notes.index')}}">Back</a></p>
        </div>
    </div>
</div>
@endsection