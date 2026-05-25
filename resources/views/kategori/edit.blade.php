@extends('layout.app')

@section('content')

    <div class="content-card">

        <h3>Edit Kategori</h3>

        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">

                <label for="nama_kategori">
                    Nama Kategori:
                </label>

                <input type="text" name="nama_kategori" id="nama_kategori" value="{{ $kategori->nama_kategori }}" required>

            </div>

          
            <div class="form-action">

                <button type="submit" class="tombol">
                    Update
                </button>

                <a href="{{ route('kategori.index') }}" class="btn-kembali">

                    ← Kembali

                </a>

            </div>
        </form>

    </div>

@endsection