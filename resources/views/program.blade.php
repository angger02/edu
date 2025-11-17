@extends('layouts.main')

@section('title', 'Program')

@section('content')

<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Program Kami</h1>
            <p class="lead fw-normal text-white-50 mb-0">Daftar program yang sedang berjalan</p>
        </div>
    </div>
</header>

<!-- Program Section -->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">

            <!-- Card 1 -->
            <div class="col-md-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="{{ asset('assets/program1.jpg') }}" alt="Program 1">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">Program Pelatihan</h5>
                        <p class="card-text text-muted">
                            Program peningkatan skill untuk mahasiswa yang ingin berkembang.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="{{ route('program.detail', 1) }}" class="btn btn-primary w-100">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="{{ asset('assets/program2.jpg') }}" alt="Program 2">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">Program Magang</h5>
                        <p class="card-text text-muted">
                            Kesempatan belajar langsung di dunia kerja dan industri.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="{{ route('program.detail', 2) }}" class="btn btn-primary w-100">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="{{ asset('assets/program3.jpg') }}" alt="Program 3">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">Program Komunitas</h5>
                        <p class="card-text text-muted">
                            Kegiatan kolaborasi dan pengembangan komunitas lokal.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="{{ route('program.detail', 3) }}" class="btn btn-primary w-100">Lihat Detail</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
