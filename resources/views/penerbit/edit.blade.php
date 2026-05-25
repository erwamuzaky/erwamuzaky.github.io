@extends('layout.app')

@section('content')

    <div class="content-card">

        <h3>Edit Penerbit</h3>

        <form action="{{ route('penerbit.update', $penerbit->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">

                <label for="nama_penerbit">
                    Nama Penerbit:
                </label>

                <input type="text" name="nama_penerbit" id="nama_penerbit" value="{{ $penerbit->nama_penerbit }}" required>

            </div>

            <div class="form-action">

                <button type="submit" class="tombol">
                    Update
                </button>

                <a href="{{ route('penerbit.index') }}" class="btn-kembali">

                    ← Kembali

                </a>

            </div>
        </form>

    </div>

@endsection