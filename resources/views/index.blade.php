@extends('layout')
@section('content')
<style>
  .push-top {
    margin-top: 50px;
  }
</style>
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  
  <h1 class="display-3">Characters</h1> 
      <div>
    <a style="margin: 19px;" href="{{ route('characters.create')}}" class="btn btn-primary">New Character</a>
    </div>  
  <table class="table table-striped">
    <thead>
        <tr class="table-danger">
          <td>ID</td>
          <td>Name</td>
          <td>Race</td>
          <td>Class</td>
          <td>Level</td>
          <td>Health Points</td>
          <td>Skills</td>
          <td>Equipment</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($character as $characters)
        <tr>
            <td>{{$characters->id}}</td>
            <td>{{$characters->name}}</td>
            <td>{{$characters->race}}</td>
            <td>{{$characters->class}}</td>
            <td>{{$characters->level}}</td>
            <td>{{$characters->hp}}</td>
            <td>{{$characters->skills}}</td>
            <td>{{$characters->equipment}}</td>
            <td class="text-center">
                <a href="{{ route('characters.edit', $characters->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                <form action="{{ route('characters.destroy', $characters->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
