@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Daftar keluarga
            <a href="{{ route('family.create') }}" class="btn btn-primary float-end">Tambah Keluarga</a>
        </div>
        <div class="p-3 bg-light">
            <form class="input-group mb-0">
                <input type="text" name="search" class="form-control" value="{{ request()->query('search') }}" placeholder="CARI NO KK">
                <button class="btn btn-outline-secondary" type="submit">Cari</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No KK</th>
                        <th scope="col">rt/rw</th>
                        <th scope="col">kelurahan</th>
                        <th scope="col">kecamatan</th>
                        <th scope="col">kabupaten</th>
                        <th scope="col">provinsi</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($families as $family)
                    <tr>
                        <td>{{$family->no}}</td>
                        <td>{{$family->rt_rw}}</td>
                        <td>{{$family->kelurahan}}</td>
                        <td>{{$family->kecamatan}}</td>
                        <td>{{$family->kabupaten}}</td>
                        <td>{{$family->provinsi}}</td>
                        <td><a href="{{route('family.show', $family->id)}}">Lihat</a> | <form action="{{route('family.delete', $family->id)}}" method="post" class="d-inline-block">@csrf @method("DELETE")<button type="submit" class="text-danger btn p-0">Hapus</button></form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$families->links()}}
        </div>
    </div>
</div>
@endsection