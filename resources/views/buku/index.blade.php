@extends('layout.app')

@section('content')

<div class="content-card">

    <div class="page-header">

        <h3>Data Buku</h3>

        <a href="{{ route('buku.create') }}"
           class="tombol">

            + Tambah Buku

        </a>

    </div>

    <table>

        <thead>

            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun</th>
                <th>Penerbit</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>

        </thead>

        <tbody>

            @foreach ($allbuku as $key => $r)

            <tr>

                <td>{{ $key + 1 }}</td>

                <td>{{ $r->judul_buku }}</td>

                <td>{{ $r->pengarang }}</td>

                <td>{{ $r->tahun_terbit }}</td>

                <td>{{ $r->penerbit->nama_penerbit }}</td>

                <td>{{ $r->kategori->nama_kategori }}</td>

                <td>

                    <div class="aksi">

                        <a href="{{ route('buku.show', $r->id) }}"
                           class="tombol">

                            Detail

                        </a>

                        <a href="{{ route('buku.edit', $r->id) }}"
                           class="tombol">

                            Edit

                        </a>

                        <form action="{{ route('buku.destroy', $r->id) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="tombol hapus"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')">

                                Hapus

                            </button>

                        </form>

                    </div>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection