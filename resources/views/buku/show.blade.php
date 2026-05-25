@extends('layout.app')

@section('content')

<div class="content-card">

    <h3>Detail Buku</h3>

    <table class="detail-table">

        <tbody>

            <tr>

                <td width="200px">
                    Judul Buku
                </td>

                <td width="10px">
                    :
                </td>

                <td>
                    {{ $Buku->judul_buku }}
                </td>

            </tr>

            <tr>

                <td>
                    Pengarang
                </td>

                <td>
                    :
                </td>

                <td>
                    {{ $Buku->pengarang }}
                </td>

            </tr>

            <tr>

                <td>
                    Tahun Terbit
                </td>

                <td>
                    :
                </td>

                <td>
                    {{ $Buku->tahun_terbit }}
                </td>

            </tr>

            <tr>

                <td>
                    Penerbit
                </td>

                <td>
                    :
                </td>

                <td>
                    {{ $Buku->penerbit->nama_penerbit }}
                </td>

            </tr>

            <tr>

                <td>
                    Kategori
                </td>

                <td>
                    :
                </td>

                <td>
                    {{ $Buku->kategori->nama_kategori }}
                </td>

            </tr>

        </tbody>

    </table>

    <br>

    <a href="{{ route('buku.index') }}"
       class="tombol">

        Kembali

    </a>

</div>

@endsection