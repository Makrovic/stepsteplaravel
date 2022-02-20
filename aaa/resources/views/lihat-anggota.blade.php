@extends('layout.base')
@section('title', 'perpustakaan')
    @section('content')
        <h1>Perpustakaan Mekar</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($anggotas as $anggota)  
                <tr>
                <th scope="row">{{$anggota->nomor_anggota}}</th>
                <td>{{$anggota->nama_anggota}}</td>
                <td>{{$anggota->alamat}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
@endsection
