@extends('layouts.app')

@section('content')
    <h1>Tambah Hewan Peliharaan</h1>

    <form action="{{ route('user.store') }}" method="POST">

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
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
            <label for="email"  class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password"  class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="role"  class="form-label">Role</label>
            <select class="form-select" name="role" id="role">
                <option selected disabled hidden>Pilih</option>
                <option value="admin" {{ old('role') == "admin" ? 'selected' : '' }}>admin</option>
                <option value="user" {{  old('role') == "user"? 'selected' : ''}}>User</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
