@extends('layouts.app')
@section('content')


<form action="{{ route('store_form_path') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" required>

    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" name="password" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </div>
</form>
@endsection
