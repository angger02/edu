@extends('layouts.main')

@section('title', 'Team')

@section('content')

<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Tim Kami</h1>
            <p class="lead fw-normal text-white-50 mb-0">Orang-orang hebat di balik project ini</p>
        </div>
    </div>
</header>

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">

            <!-- Member 1 -->
            <div class="col-md-4 mb-5">
                <div class="card h-100 shadow border-0 text-center">
                    <img class="card-img-top rounded-circle p-3"
                         src="{{ asset('assets/team1.jpg') }}"
                         alt="Team Member 1"
                         style="width: 200px; height: 200px; object-fit: cover; margin: auto;">
                    <div class="card-body">
                        <h5 class="fw-bold">Angger Hidayat</h5>
                        <p class="text-muted">Project Lead</p>
                        <p>Memimpin jalannya project dan memastikan semua bagian berjalan lancar.</p>
                    </div>
                </div>
            </div>

            <!-- Member 2 -->
            <div class="col-md-4 mb-5">
                <div class="card h-100 shadow border-0 text-center">
                    <img class="card-img-top rounded-circle p-3"
                         src="{{ asset('assets/team2.jpg') }}"
                         alt="Team Member 2"
                         style="width: 200px; height: 200px; object-fit: cover; margin: auto;">
                    <div class="card-body">
                        <h5 class="fw-bold">Nana</h5>
                        <p class="text-muted">UI/UX Designer</p>
                        <p>Mendesain tampilan yang nyaman dan mudah digunakan oleh pengguna.</p>
                    </div>
                </div>
            </div>

            <!-- Member 3 -->
            <div class="col-md-4 mb-5">
                <div class="card h-100 shadow border-0 text-center">
                    <img class="card-img-top rounded-circle p-3"
                         src="{{ asset('assets/team3.jpg') }}"
                         alt="Team Member 3"
                         style="width: 200px; height: 200px; object-fit: cover; margin: auto;">
                    <div class="card-body">
                        <h5 class="fw-bold">Bintang</h5>
                        <p class="text-muted">Backend Developer</p>
                        <p>Membangun logika aplikasi dan memastikan sistem berjalan optimal.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
