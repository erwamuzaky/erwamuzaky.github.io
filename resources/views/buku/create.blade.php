@extends('layout.app')

@section('content')

    <div class="content-card">

        <h3>Buat Buku</h3>

        <form action="{{ route('buku.store') }}" method="POST">

            @csrf

            <div class="form-group">

                <label for="judul_buku">
                    Judul Buku:
                </label>

                <input type="text" name="judul_buku" id="judul_buku" placeholder="Masukan judul buku">

            </div>

            <div class="form-group">

                <label for="pengarang">
                    Pengarang:
                </label>

                <input type="text" name="pengarang" id="pengarang" placeholder="Masukan nama pengarang">

            </div>

            <div class="form-group">

                <label for="tahun_terbit">
                    Tahun Terbit:
                </label>

                <input type="text" name="tahun_terbit" id="tahun_terbit" placeholder="Masukan tahun terbit">

            </div>

            <div class="form-group">

                <label for="penerbit_id">
                    Penerbit:
                </label>

                <select name="penerbit_id" id="penerbit_id">

                    @foreach ($penerbit as $item)

                        <option value="{{ $item->id }}">

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

                        <option value="{{ $item->id }}">

                            {{ $item->nama_kategori }}

                        </option>

                    @endforeach

                </select>

            </div>

        
            <div class="form-action">

                <button type="submit" class="tombol">
                    Simpan
                </button>

                <a href="{{ route('buku.index') }}" class="btn-kembali">

                    ← Kembali

                </a>

            </div>
        </form>

    </div>

@endsection