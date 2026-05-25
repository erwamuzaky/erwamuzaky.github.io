@extends('layout.app')

@section('content')

    <div class="content-card">

        <h3>Buat Kategori</h3>

        <form action="{{ route('kategori.store') }}" method="POST">

            @csrf

            <div class="form-group">

                <label for="nama_kategori">
                    Nama Kategori:
                </label>

                <input type="text" name="nama_kategori" id="nama_kategori" placeholder="Masukan nama kategori">

            </div>

            
            <div class="form-action">

                <button type="submit" class="tombol">
                    Simpan
                </button>

                <a href="{{ route('kategori.index') }}" class="btn-kembali">

                    ← Kembali

                </a>

            </div>
        </form>

    </div>

@endsection