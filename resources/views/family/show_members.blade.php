@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
      Daftar anggota
      <a href="{{ route('home') }}" class="btn btn-primary float-end">Home</a>
    </div>
    <nav class="nav nav-pills nav-justified p-3 bg-light">
      <a class="nav-link" href="{{ route('family.show', $family->id) }}">Edit</a>
      <a class="nav-link active">Anggota</a>
      <a class="nav-link" href="{{ route('family.member.create', $family->id) }}">Tambah anggota</a>
    </nav>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">NIK</th>
            <th scope="col">Nama</th>
            <th scope="col">TTG</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($family->members as $member)
          <tr>
            <td>{{$member->nik}}</td>
            <td>{{$member->nama}}</td>
            <td>{{$member->tempat_lahir}}, {{$member->tanggal_lahir}}</td>
            <td>{{$member->jenis_kelamin}}</td>
            <td>{{$member->agama}}</td>
            <td>
              <form action="{{route('family.member.delete', [$family->id, $member->id])}}" method="post" class="d-inline-block">@csrf @method("DELETE")<button type="submit" class="text-danger btn p-0">Hapus</button></form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection