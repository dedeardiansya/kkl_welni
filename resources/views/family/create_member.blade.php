@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
      Tambah Anggota Keluarga
      <a href="{{ route('family.show', $family->id) }}" class="btn btn-primary float-end">Batal</a>
    </div>
    <nav class="nav nav-pills nav-justified p-3 bg-light">
      <a class="nav-link" href="{{ route('family.show', $family->id) }}">Edit</a>
      <a class="nav-link" href="{{ route('family.members', $family->id) }}">Anggota</a>
      <a class="nav-link active">Tambah anggota</a>
    </nav>
    <div class="card-body">
      <form action="{{ route('family.member.store', $family->id) }}" method="POST">
        @csrf
        <div class="form-group mb-3">
          <label for="nik">Nomor Induk Kependudukan (NIK)</label>
          <input type="text" class="form-control  @error('nik') is-invalid @enderror" value="{{old('nik')}}" id="nik" name="nik" placeholder="Nomor Induk Kependudukan (NIK)">
          @error('nik')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="form-group mb-3">
          <label for="nama">Nama</label>
          <input type="text" class="form-control  @error('nama') is-invalid @enderror" value="{{old('nama')}}" id="nama" name="nama" placeholder="Nama">
          @error('nama')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="form-group mb-3">
          <label for="tempat_lahir">Tempat Lahir</label>
          <input type="text" class="form-control  @error('tempat_lahir') is-invalid @enderror" value="{{old('tempat_lahir')}}" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
          @error('tempat_lahir')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="form-group mb-3">
          <label for="tanggal_lahir">Tanggal Lahir</label>
          <input type="text" class="form-control  @error('tanggal_lahir') is-invalid @enderror" value="{{old('tanggal_lahir')}}" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
          @error('tanggal_lahir')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>


        <div class="form-group mb-3">
          <label for="jenis_kelamin">Jenis Kelamin</label>
          <select class="form-control  @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin">
            <option value="laki-laki" @if(old('jenis_kelamin')=='laki-laki' ) selected @endif>laki-laki</option>
            <option value="perempuan" @if(old('jenis_kelamin')=='perempuan' ) selected @endif>perempuan</option>
          </select>
          @error('jenis_kelamin')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="form-group mb-3">
          <label for="agama">Agama</label>
          <select class="form-control  @error('agama') is-invalid @enderror" id="agama" name="agama">
            <option value="islam" @if(old('agama')=='islam' ) selected @endif>islam</option>
            <option value="kristen protestan" @if(old('agama')=='kristen protestan' ) selected @endif>kristen protestan</option>
            <option value="kristen katolik" @if(old('agama')=='kristen katolik' ) selected @endif>kristen katolik</option>
            <option value="hindu" @if(old('agama')=='hindu' ) selected @endif>hindu</option>
            <option value="budha" @if(old('agama')=='budha' ) selected @endif>budha</option>
          </select>
          @error('agama')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection