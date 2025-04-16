@extends('layout.main')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="m-0 font-weight-bold text-primary"> Edit Data Pasien</h4>
            <a href="{{ route('index.index') }}" class="d-none d-sm-inline-block btn btn-secondary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Kembali</span>
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Edit data
            </div>
            <div class="card-body">
                <form action="{{route('pasien.update', $id->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $id->nama }}">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea class="form-control" id="alamat" name="alamat">{{ $id->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_telepon">Nomor Telepon:</label>
                        <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" name="no_telepon" value="{{ $id->no_telepon }}">
                        @error('no_telepon')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin:</label>
                        <input type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin" value="{{ $id->jenis_kelamin }}">
                        @error('jenis_kelamin')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto:</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                        <br>
                        @if (isset($id->foto) && !empty($id->foto))
                            <img src="{{url('images')}}/{{$id->foto}}" alt="project-image" class="rounded" style="width: 100%; max-width: 100px; height: auto;">
                        @else
                            <img src="{{url('images/user.png')}}" alt="project-image" class="rounded" style="width: 100%; max-width: 100px; height: auto;">
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
