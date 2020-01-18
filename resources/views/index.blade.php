@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Notes</h1>
    @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div>
    @endif
    <a href="{{ route('notes.create')}}" class="mb-3 btn btn-primary">New note</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Title</td>
          <td>Description</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($notes as $note)
        <tr>
            <td>{{$note->id}}</td>
            <td><a href="{{ route('notes.show',$note->id)}}">{{$note->title}}</a></td>
            <td class="description">{{$note->description}}</td>
            <td>
                <a href="{{ route('notes.edit',$note->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('notes.destroy', $note->id)}}" method="post">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection