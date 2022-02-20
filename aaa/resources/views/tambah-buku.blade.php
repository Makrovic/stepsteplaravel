@extends('layout.base')
@section('title', 'perpustakaan')
    @section('content')
        <h1>Perpustakaan Mekar</h1>
        <h2>Menambahkan Buku</h2>
        <form method="post" action="/tambah_buku/store">
          @csrf
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Kode Buku</label>
          <input type="text" name="kode_buku" class="form-control" id="exampleFormControlInput1" placeholder="masukkan kode buku">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Judul Buku</label>
          <textarea name="judul_buku" class= "form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
        </div>
        <div class="col-auto">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" id="exampleFormControlInput1" placeholder=>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Penulis</label>
            <input type="text" name="penulis" class="form-control" id="exampleFormControlInput1" placeholder=>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" class="form-control" id="exampleFormControlInput1" placeholder=>
          </div>
          <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
        </form>
@endsection
