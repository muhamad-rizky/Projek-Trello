@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-end">
            <form class="d-flex me-3" action="{{ route('pets.index') }}" method="GET">
                {{-- 1. tag form harus ada action sama method
                    2. value method GET/POST
                        - GET : form yg fungsinya untuk mencari
                        - POST : form yg fungsinya untuk menambah/menghapus/mengubah
                    3. input harus ada attr name, name => mengambil data dr isian input agar bisa di proses di controller
                    4. ada button/input yg type="submit"
                    5. action
                        - form untuk mencari : action ambil route yg menampilkan halaman blade ini (return view blade ini)
                        - form bukan mencari : action terpisah dengan route return view bladenya
                 --}}
                @if (Request::get('sort_stock') == 'stock')
                    <input type="hidden" name="sort_stock" value="stock">
                @endif
                <input type="text" name="cari" placeholder="Cari Nama Kucing..." class="form-control me-2">
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
            <form action="{{ route('pets.index') }}" method="GET" class="me-2">
                <input type="hidden" name="sort_stock" value="stock">
                <button type="submit" class="btn btn-primary">Urutkan Stok</button>
            </form>
            {{-- <button class="btn btn-success">+ Tambah</button> --}}

            <a href="{{ route('pets.tambah')}}" class="btn btn-success">+ Tambah</a>
        </div>

    @if (Session('success'))
        <div class="alert alert-success">
            {{ Session('success') }}
        </div>
    @endif
    @if (Session('delete'))
        <div class="alert alert-danger">
            {{ Session('delete') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Nama Pemilik</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($pets as $pet)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $pet->nama }}</td>
                    <td>{{ $pet->jenis }}</td>
                    <td>{{ $pet->pemilik }}</td>
                    <td>
                        <a href="{{ route('pets.edit', $pet->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pets.delete', $pet->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
