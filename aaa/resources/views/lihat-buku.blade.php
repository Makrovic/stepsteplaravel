@extends('layout.base')
@section('title', 'perpustakaan')
    @section('content')
        <h1>Perpustakaan Mekar</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Kode Buku</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tahun Terbit</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($bukus as $buku)
              <tr>
                <th scope="row">{{$buku->kode_buku}}</th>
                <td>{{$buku->judul_buku}}</td>
                <td>{{$buku->penulis}}</td>
                <td>{{$buku->penerbit}}</td>
                <td>{{$buku->tahun_terbit}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
@endsection
