@extends('layout')
@section('content')
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="card push-top">
  <div class="card-header">
    Create a Character
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('characters.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="race">Race</label>
              <input type="text" class="form-control" name="race"/>
          </div>
          <div class="form-group">
              <label for="class">Class</label>
              <input type="text" class="form-control" name="class"/>
          </div>
          <div class="form-group">
              <label for="level">Level</label>
              <input type="text" class="form-control" name="level"/>
          </div>
          <div class="form-group">
              <label for="hp">Health Points</label>
              <input type="text" class="form-control" name="hp"/>
          </div>
          <div class="form-group">
              <label for="skills">Skills</label>
              <input type="text" class="form-control" name="skills"/>
          </div>
          <div class="form-group">
              <label for="equipment">Equipment</label>
              <input type="text" class="form-control" name="equipment"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create Character!</button>
      </form>
  </div>
</div>
@endsection
