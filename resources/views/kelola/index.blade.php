@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-end">
            <form class="d-flex me-3" action="#" method="GET">
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
                <input type="text" name="cari" placeholder="Cari Nama Akun..." class="form-control me-2">
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>

            <a href="{{ Route('user.create') }}" class="btn btn-success">+ Tambah</a>
        </div>

        @if (Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <table class="table table-stripped table-bordered mt-3 text-center">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                {{-- $users : dari compact controller nya, diakses dengan loop karna data $users banyak (array) --}}
                @php
                    $no = 1;
                @endphp
                @foreach ($users as $index => $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['role'] }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('user.edit', $item['id']) }}" class="btn btn-primary me-2">Edit</a>
                            <form action="{{ route('user.delete', $item['id']) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- memanggil pagination --}}
        {{-- <div class="d-flex justify-content-end my-3">
            {{ $users->links() }}
        </div> --}}
        {{-- modal hapus --}}
        {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content" method="POST" action=""> --}}
                    {{-- action kosong,diisi melalui js karna id dikirim ke js nya --}}
                    {{-- @csrf --}}
                    {{-- menimpa method="POST" jadi DELETE sesuai web.php http method --}}
                    {{-- @method('DELETE')
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">HAPUS DATA OBAT</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"> --}}
                        {{-- Konten dinamis pada teks ini bagian nama akun, sehingga nama akunnya disediakan tempat penyimpanan (tag b) --}}
                        {{-- Apakah anda yakin ingin menghapung data akun ini? <b id="nama_akun"></b>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div> --}}
    </div>
@endsection

{{-- @push('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        function showModalDelete(id, name) {
            //memasukan teks dari parameter ke html bagian id="nama_akun"
            $("#nama_akun").text(name);
            //memanggil route hapus
            let url = "{{ route('kelola_akun.hapus', ':id') }}";

            //isi path dinamis :id dari data parameter id
            url = url.replace(':id', id);

            //action="" di form diisi dengan url di atas
            $("form").attr('action', url);

            //memunculkan modal dengan id="exampleModal"
            $("#exampleModal").modal('show');
        }
    </script>
@endpush --}}
