@extends('layouts.app')

@section('content')
<header class="bg-success text-white text-center py-5">
    <h1>Selamat Datang di RstorePet</h1>
    <p>Solusi Produk Berkualitas Hanya Disini</p>
    <p></p>
    <a href="#products" class="btn btn-light mt-3">Lihat Produk</a>
</header>

<!-- About Section -->
<section class="container mt-5">
    <h2 class="text-center">Tentang Kami</h2>
    <p class="text-center">Disini kami menjual berbagai Macam Kucing.</p>
</section>

<!-- Products Section -->
<section id="products" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center">Produk Unggulan Kami</h2>
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Kucing Anggora</h5>
                        <p class="card-text">Kucing anggora berkualitas memiliki bulu halus dan lebat.</p>
                        <a href="#" class="btn btn-success">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Kucing Anggora</h5>
                        <p class="card-text">Kucing anggora berkualitas memiliki bulu halus dan lebat.</p>
                        <a href="#" class="btn btn-success">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Kucing Anggora</h5>
                        <p class="card-text">Kucing anggora berkualitas memiliki bulu halus dan lebat.</p>
                        <a href="#" class="btn btn-success">Beli Sekarang</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Kucing Anggora</h5>
                        <p class="card-text">Kucing anggora berkualitas memiliki bulu halus dan lebat.</p>
                        <a href="#" class="btn btn-success">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Kucing Anggora</h5>
                        <p class="card-text">Kucing anggora berkualitas memiliki bulu halus dan lebat.</p>
                        <a href="#" class="btn btn-success">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Kucing Anggora</h5>
                        <p class="card-text">Kucing anggora berkualitas memiliki bulu halus dan lebat.</p>
                        <a href="#" class="btn btn-success">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="container py-5">
    <h2 class="text-center">Masukan Data Diri untuk Melanjutkan</h2>
    <form action="#" method="post">
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" placeholder="Nama Anda">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email Anda">
        </div>
        <button type="submit" class="btn btn-success">Kirim Pesan</button>
    </form>
</section>

<!-- Footer -->
<footer class="bg-success text-white text-center py-3">
    <p style="font-size: 16px; font-weight: bold;">RstorePet</p>
    <p>Jl. Petshope No. 123, Kota Bandung, 12345</p>
    <p>Telepon: (021) 123-4567 | WhatsApp: 0812-3456-7890</p>
    <p>Jam Operasional: Senin - Minggu, 08.00 - 22.00 WIB</p>
    <p>Website: <a href="http://www.RstorePet.com" target="_blank">www.RstorePet.com</a> |
       Email: <a href="mailto:info@RstorePet.com">info@RstorePet.com</a></p>
    <p style="font-style: italic;">"Kucing Berkualitas memiliki harga yang terjangkau!"</p>
    <p>&copy; 2024 RstorePet. All Rights Reserved.</p>

</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

@endsection
