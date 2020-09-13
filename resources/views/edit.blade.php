@extends('layouts.app')

@section('content')
    <h2>Edit Item</h2>
<form action="/request/{{ $item->id }}" method="POST">
        <div class="form-group">
            @csrf
            @method('PUT')
            <label for="text">Text</label>
        <input type="text" class="form-control" id="text" name="text"  placeholder="Enter text" value=" {{ $item->text }}">
          </div>
          <div class="form-group">
            <label for="body">Body</label>
          <input type="text" class="form-control" id="body" name="body"  placeholder="Enter text" value="{{ $item->body }}">
          </div>
        <button type="submit" name="button" class="btn btn-primary">Submit</button>
    </form>
@endsection
