@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
      Buat keluarga
      <a href="{{ route('home') }}" class="btn btn-primary float-end">Batal</a>
    </div>
    <div class="card-body">
      <form action="{{ route('family.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
          <label for="name">Nomor kartu keluarga</label>
          <input type="text" class="form-control  @error('no') is-invalid @enderror" value="{{old('no')}}" id="no" name="no" placeholder="Nomor kartu keluarga">
          @error('no')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label for="name">Alamat</label>
          <input type="text" class="form-control  @error('alamat') is-invalid @enderror" value="{{old('alamat')}}" id="alamat" name="alamat" placeholder="Alamat">
          @error('alamat')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label for="name">RT/RW</label>
          <input type="text" class="form-control  @error('rt_rw') is-invalid @enderror" value="{{old('rt_rw')}}" id="rt/rw" name="rt_rw" placeholder="RT/RW">
          @error('rt_rw')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label for="name">Kelurahan</label>
          <input type="text" class="form-control  @error('kelurahan') is-invalid @enderror" value="{{old('kelurahan')}}" id="kelurahan" name="kelurahan" placeholder="Kelurahan">
          @error('kelurahan')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label for="name">Kecamatan</label>
          <input type="text" class="form-control  @error('kecamatan') is-invalid @enderror" value="{{old('kecamatan')}}" id="kecamatan" name="kecamatan" placeholder="Kecamatan">
          @error('kecamatan')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label for="name">Kabupaten</label>
          <input type="text" class="form-control  @error('kabupaten') is-invalid @enderror" value="{{old('kabupaten')}}" id="kabupaten" name="kabupaten" placeholder="Kabupaten">
          @error('kabupaten')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label for="name">Provinsi</label>
          <input type="text" class="form-control  @error('provinsi') is-invalid @enderror" value="{{old('provinsi')}}" id="provinsi" name="provinsi" placeholder="Provinsi">
          @error('provinsi')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label for="name">Kode Pos</label>
          <input type="text" class="form-control  @error('kode_pos') is-invalid @enderror" value="{{old('kode_pos')}}" id="kode_pos" name="kode_pos" placeholder="Kode Pos">
          @error('kode_pos')
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