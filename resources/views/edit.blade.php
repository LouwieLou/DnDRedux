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
    Edit & Update
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
      <form method="post" action="{{ route('characters.update', $character->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $character->name }}"/>
          </div>
          <div class="form-group">
              <label for="race">Race</label>
              <input type="text" class="form-control" name="race" value="{{ $character->race }}"/>
          </div>
          <div class="form-group">
             <label for="class">Class</label>
              <input type="text" class="form-control" name="class" value="{{ $character->class }}"/>
          </div>
          <div class="form-group">
              <label for="level">Level</label>
              <input type="text" class="form-control" name="level" name="level" value="{{ $character->level }}"/>
              </div>
              <div class="form-group">
              <label for="hp">Health Points</label>
              <input type="text" class="form-control" name="hp" name="hp" value="{{ $character->hp }}"/>
              </div>
              <div class="form-group">
              <label for="skills">Skills</label>
              <input type="text" class="form-control" name="skills" name="skills" value="{{ $character->skills }}"/>
              </div>
              <div class="form-group">
              <label for="equipment">Equipment</label>
              <input type="text" class="form-control" name="equipment" value="{{ $character->equipment }}"/>
              </div>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update Character</button>
      </form>
  </div>
</div>
@endsection
