@extends('layouts.app')


@section('content')


<form action="{{ route('pets.update', $petshop['id']) }}" method="POST" class="card p-5">
    @csrf
    @method('PATCH')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Nama : </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $petshop['nama'] }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="type" class="col-sm-2 col-form-label">Jenis : </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $petshop['jenis'] }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="pemilik" class="col-sm-2 col-form-label">Nama Pemilik: </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="pemilik" name="pemilik" value="{{ $petshop['pemilik'] }}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Kirim</button>
</form>
@endsection
