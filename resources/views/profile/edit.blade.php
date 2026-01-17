@extends('layouts.app')
@section('title', 'Profil Saya')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <x-breadcrumb :items="['Dashboard' => route('dashboard'), 'Profil' => route('profile.edit')]" />

        <div class="row g-4 justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="avatar avatar-xl mx-auto mb-3">
                            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="avatar"
                                class="rounded-circle w-px-100 h-px-100 object-fit-cover">
                        </div>
                        <h4 class="mt-5 mb-1">{{ $user->name }}</h4>
                        <span class="badge bg-label-primary text-uppercase">{{ $user->role ?? 'User' }}</span>
                        <p class="text-muted mt-3 mb-0">
                            Bergabung sejak {{ $user->created_at?->format('d M Y') }}
                        </p>
                    </div>
                    <div class="card-footer text-muted small">
                        Terakhir diperbarui {{ $user->updated_at?->diffForHumans() }}
                    </div>
                </div>
            </div>

            <div class="col-xl-8 col-lg-7">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Detail Akun</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <small class="text-muted d-block">Nama Lengkap</small>
                                <p class="fw-semibold mb-0">{{ $user->name }}</p>
                            </div>
                            <div class="col-md-6">
                                <small class="text-muted d-block">Email</small>
                                <p class="fw-semibold mb-0">{{ $user->email }}</p>
                            </div>
                            <div class="col-md-6">
                                <small class="text-muted d-block">Alamat</small>
                                <p class="fw-semibold mb-0">{{ $user->alamat ?? '-' }}</p>
                            </div>
                            <div class="col-md-6">
                                <small class="text-muted d-block">Nomor Telepon</small>
                                <p class="fw-semibold mb-0">{{ $user->telepon ?? '-' }}</p>
                            </div>
                            <div class="col-md-6">
                                <small class="text-muted d-block">Status Email</small>
                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                    <span class="badge bg-label-warning">Belum terverifikasi</span>
                                @else
                                    <span class="badge bg-label-success">Terverifikasi</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <small class="text-muted d-block">Role</small>
                                <p class="fw-semibold mb-0 text-capitalize">{{ $user->role ?? '-' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
