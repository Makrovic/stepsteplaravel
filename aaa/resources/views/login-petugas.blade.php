@extends('layout.base')
@section('title', 'perpustakaan')
 @section('content')
<h1>Perpustakaan Mekar</h1>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Username</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email/number phone">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Password</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
        </div>
    @endsection