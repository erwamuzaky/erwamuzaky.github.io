@extends('layout.app')

@section('content')

{{-- ======================
   HEADER CARD
====================== --}}
<div class="hero-card">

    <div>

        <h1>
            Dashboard Buku 📚
        </h1>

        <p>
            Bacalah Buku, Temukan Dunia
        </p>

    </div>

    <div class="hero-badge">
        🚀 Online
    </div>

</div>

{{-- ======================
   STATISTIK
====================== --}}
<div class="stats-grid">

    <div class="stat-card blue">

        <div class="stat-info">

            <h4>Total Buku</h4>

            <h2>{{ $totalBuku }}</h2>

        </div>

        <div class="stat-big-icon">
            📚
        </div>

    </div>

    <div class="stat-card yellow">

        <div class="stat-info">

            <h4>Total Kategori</h4>

            <h2>{{ $totalKategori }}</h2>

        </div>

        <div class="stat-big-icon">
            📂
        </div>

    </div>

    <div class="stat-card green">

        <div class="stat-info">

            <h4>Total Penerbit</h4>

            <h2>{{ $totalPenerbit }}</h2>

        </div>

        <div class="stat-big-icon">
            🏢
        </div>

    </div>

</div>

{{-- ======================
   QUICK ACTION
====================== --}}
<div class="quick-grid">

    <a href="/buku/create" class="quick-card">

        <div class="quick-icon">
            ➕
        </div>

        <h3>Tambah Buku</h3>

        <p>
            Tambahkan data buku baru
        </p>

    </a>

    <a href="/kategori/create" class="quick-card">

        <div class="quick-icon">
            📂
        </div>

        <h3>Tambah Kategori</h3>

        <p>
            Tambahkan kategori baru
        </p>

    </a>

    <a href="/penerbit/create" class="quick-card">

        <div class="quick-icon">
            🏢
        </div>

        <h3>Tambah Penerbit</h3>

        <p>
            Tambahkan penerbit baru
        </p>

    </a>

</div>

{{-- ======================
   ACTIVITY
====================== --}}
<div class="content-card">

    <div class="page-header">

        <h3>
            Aktivitas Terbaru
        </h3>

    </div>

    <table>

        <thead>

            <tr>
                <th>Aktivitas</th>
                <th>Status</th>
            </tr>

        </thead>

        <tbody>

            <tr>

                <td>
                    Dashboard berhasil dimuat
                </td>

                <td>
                    <span class="badge badge-success">
                        Online
                    </span>
                </td>

            </tr>

            <tr>

                <td>
                    Sistem database aktif
                </td>

                <td>
                    <span class="badge badge-info">
                        Aktif
                    </span>
                </td>

            </tr>

        </tbody>

    </table>

</div>

@endsection