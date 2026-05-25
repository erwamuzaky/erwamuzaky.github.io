@extends('layout.app')

@section('content')

<div class="content-card">

    <h3>Detail Kategori</h3>

    <table class="detail-table">

        <tbody>

            <tr>

                <td width="200px">
                    Nama Kategori
                </td>

                <td width="10px">
                    :
                </td>

                <td>
                    {{ $kategori->nama_kategori }}
                </td>

            </tr>

        </tbody>

    </table>

    <br>

    <a href="{{ route('kategori.index') }}"
       class="tombol">

        Kembali

    </a>

</div>

@endsection