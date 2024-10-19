@extends('layouts.app')

@section('content')
    <h1>Tambah Hewan Peliharaan</h1>

    <form action="{{ route('pets.tambah.proses') }}" method="POST">

        @csrf
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success')}}
        </div>
    @endif
        <div class="mb-3">
            <label for="name"  class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="type"  class="form-label">Jenis</label>
            <input type="text" name="jenis" class="form-control" id="type" name="type" required>
        </div>
        <div class="mb-3">
            <label for="owner_name"  class="form-label">Nama Pemilik</label>
            <input type="text" name="pemilik" class="form-control" id="owner_name" name="owner_name" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
