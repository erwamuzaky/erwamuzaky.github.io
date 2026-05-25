@extends('layout.app')

@section('content')

    <div class="content-card">

        <h3>Buat Penerbit</h3>

        <form action="{{ route('penerbit.store') }}" method="POST">

            @csrf

            <div class="form-group">

                <label for="nama_penerbit">
                    Nama Penerbit:
                </label>

                <input type="text" name="nama_penerbit" id="nama_penerbit" placeholder="Masukan nama penerbit">

            </div>

        
            <div class="form-action">

                <button type="submit" class="tombol">
                    Simpan
                </button>

                <a href="{{ route('penerbit.index') }}" class="btn-kembali">

                    ← Kembali

                </a>

            </div>
        </form>

    </div>

@endsection