@extends('layout.app')

@section('content')

<div class="content-card">

    <div class="page-header">

        <h3>Data Penerbit</h3>

        <a href="{{ route('penerbit.create') }}"
           class="tombol">

            + Tambah Penerbit

        </a>

    </div>

    <table>

        <thead>

            <tr>
                <th>No</th>
                <th>Nama Penerbit</th>
                <th>Aksi</th>
            </tr>

        </thead>

        <tbody>

            @foreach ($allpenerbit as $key => $r)

            <tr>

                <td>{{ $key + 1 }}</td>

                <td>{{ $r->nama_penerbit }}</td>

                <td>

                    <div class="aksi">

                        <a href="{{ route('penerbit.show', $r->id) }}"
                           class="tombol">

                            Detail

                        </a>

                        <a href="{{ route('penerbit.edit', $r->id) }}"
                           class="tombol">

                            Edit

                        </a>

                        <form action="{{ route('penerbit.destroy', $r->id) }}"
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