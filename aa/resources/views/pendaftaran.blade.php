@extends('layout.base')
@section('title','lks-andalusia')
@section('content')
<div class="container">
    
<h1>Pendaftaran</h1>   
  <form method="post" action="/pendaftaran/store">
    @csrf
    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Nama</label>
      <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      <div id="emailHelp" class="form-text">Wajib memasukkan nama</div>
    </div>
   <div class="mb-3">
      <label fo r="exampleInputAddres" class="form-label">Asal Sekolah</label>
        <input type="text" name="asal_sekolah" class="form-control" id="exampleInputAddres" required>
      </div>
<div class="mb-3">
    <label for="exampleInputName" class="form-label">Kompetensi Keahlian</label>
      <select class="form-select" name="kompetensi_keahlian" aria-label="Default select example" required>
        <option value="rpl">Rekayasa Perangkat Lunak</option>
        <option value="akl">Akuntansi</option>
        <option value="tbsm">Teknik Bisnis Sepeda Motor</option>
      </select>
</div>
      <div class="mb-3">
        <label for="exampleInputName" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" required></textarea>
    </div>
     
    <button type="submit" class="btn btn-primary">Daftar</button>
  </form>
</div>

@endsection