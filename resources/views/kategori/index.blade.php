@extends('layout.app')

@section('content')

<div class="content-card">

    <div class="page-header">

        <h3>Data Kategori</h3>

        <a href="{{ route('kategori.create') }}"
           class="tombol">

            + Tambah Kategori

        </a>

    </div>

    <table>

        <thead>

            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>

        </thead>

        <tbody>

            @foreach ($allkategori as $key => $r)

            <tr>

                <td>{{ $key + 1 }}</td>

                <td>{{ $r->nama_kategori }}</td>

                <td>

                    <div class="aksi">

                        <a href="{{ route('kategori.show', $r->id) }}"
                           class="tombol">

                            Detail

                        </a>

                        <a href="{{ route('kategori.edit', $r->id) }}"
                           class="tombol">

                            Edit

                        </a>

                        <form action="{{ route('kategori.destroy', $r->id) }}"
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