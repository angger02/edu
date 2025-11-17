@extends('layouts.main')

@section('title', 'Contact')

@section('content')

<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Hubungi Kami</h1>
            <p class="lead fw-normal text-white-50 mb-0">Kami siap membantu kapanpun kamu butuh</p>
        </div>
    </div>
</header>

<section class="py-5">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">

            <div class="col-lg-6">
                <div class="card shadow border-0 p-4">

                    <h3 class="text-center mb-4 fw-bold">Form Kontak</h3>

                    <form action="#" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama kamu">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email</label>
                            <input type="email" class="form-control" placeholder="email@example.com">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Pesan</label>
                            <textarea class="form-control" rows="5" placeholder="Tulis pesan kamu di sini..."></textarea>
                        </div>

                        <button class="btn btn-primary w-100 py-2">Kirim Pesan</button>
                    </form>

                </div>
            </div>

            <div class="col-lg-5 mt-5 mt-lg-0">
                <div class="card shadow border-0 p-4">
                    <h4 class="fw-bold mb-3">Informasi Kontak</h4>

                    <p class="mb-2"><i class="bi bi-geo-alt-fill me-2"></i>Alamat: Jakarta / Bandung / Online</p>
                    <p class="mb-2"><i class="bi bi-envelope-fill me-2"></i>Email: support@example.com</p>
                    <p class="mb-2"><i class="bi bi-telephone-fill me-2"></i>Telepon: +62 812-3456-7890</p>

                    <hr>

                    <h5 class="fw-bold">Media Sosial</h5>
                    <p><i class="bi bi-instagram me-2"></i>@yourinstagram</p>
                    <p><i class="bi bi-github me-2"></i>github.com/yourusername</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

