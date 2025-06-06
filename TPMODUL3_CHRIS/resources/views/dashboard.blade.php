@extends('app')

@section('title', 'Student Dashboard')

@section('content')
    <div class="row justify-content-center mt-5 mt-lg-7">
        <div class="col-xl-10">
            <div class="bg-white rounded-4 shadow p-5 d-flex flex-column flex-lg-row align-items-center">
                <!-- Icon -->
                <div class="bg-grey rounded-circle d-flex align-items-center justify-content-center me-lg-5 mb-4 mb-lg-0 shadow" style="width: 200px; height: 200px; overflow: hidden;">
                    <!-- ==================4================== -->
                    <!-- Display the profile logo -->
                    <img src="{{ asset('images/logo-ead.png') }}" alt="Logo EAD" style="max-width: 80%; max-height: 80%;">
                </div>
                <!-- Text Content -->
                <div class="text-center text-lg-start">
                    <!-- ==================5================== -->
                    <!-- Display the greeting and name -->
                    <h1 class="fw-bold display-5 mb-2">{{ $greeting }}, <span class="text-primary">{{ $name }}</span>!</h1>
                    <p class="lead text-muted mb-4">Welcome to your Student Dashboard</p>

                    <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-lg-start gap-4 fs-5 text-muted">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-clock me-2 text-primary"></i>
                            <!-- ==================6================== -->
                            <!-- Display the Time -->
                            <span>Access Time: <strong class="text-dark">{{ $time }}</strong></span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-event me-2 text-primary"></i>
                            <!-- ==================7================== -->
                            <!-- Display the Date -->
                            <span>Access Date: <strong class="text-dark">{{ $date }}</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection