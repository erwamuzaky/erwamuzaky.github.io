@extends('layout.app')

@section('content')

    <div class="content-card">

        <h3>Edit Buku</h3>

        <form action="{{ route('buku.update', $Buku->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">

                <label for="judul_buku">
                    Judul Buku:
                </label>

                <input type="text" name="judul_buku" id="judul_buku" value="{{ $Buku->judul_buku }}" required>

            </div>

            <div class="form-group">

                <label for="pengarang">
                    Pengarang:
                </label>

                <input type="text" name="pengarang" id="pengarang" value="{{ $Buku->pengarang }}" required>

            </div>

            <div class="form-group">

                <label for="tahun_terbit">
                    Tahun Terbit:
                </label>

                <input type="text" name="tahun_terbit" id="tahun_terbit" value="{{ $Buku->tahun_terbit }}" required>

            </div>

            <div class="form-group">

                <label for="penerbit_id">
                    Penerbit:
                </label>

                <select name="penerbit_id" id="penerbit_id">

                    @foreach ($penerbit as $item)

                        <option value="{{ $item->id }}" {{ $Buku->penerbit_id == $item->id ? 'selected' : '' }}>

                            {{ $item->nama_penerbit }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">

                <label for="kategori_id">
                    Kategori:
                </label>

                <select name="kategori_id" id="kategori_id">

                    @foreach ($kategori as $item)

                        <option value="{{ $item->id }}" {{ $Buku->kategori_id == $item->id ? 'selected' : '' }}>

                            {{ $item->nama_kategori }}

                        </option>

                    @endforeach

                </select>

            </div>

            
            <div class="form-action">

                <button type="submit" class="tombol">
                    Update
                </button>

                <a href="{{ route('buku.index') }}" class="btn-kembali">

                    ← Kembali

                </a>

            </div>
        </form>

    </div>

@endsection