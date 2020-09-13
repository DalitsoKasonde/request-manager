@extends('layouts.app')

@section('content')
    <h2>Insert new Item</h2>
    <form action="/request" method="POST">
        <div class="form-group">
            @csrf
            <label for="text">Text</label>
            <input type="text" class="form-control" id="text" name="text"  placeholder="Enter text">
          </div>
          <div class="form-group">
            <label for="body">Body</label>
            <input type="text" class="form-control" id="body" name="body"  placeholder="Enter text">
          </div>
        <button type="submit" name="button" class="btn btn-primary">Submit</button>
    </form>
@endsection
