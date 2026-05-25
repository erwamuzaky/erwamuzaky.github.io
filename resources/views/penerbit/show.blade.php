@extends('layout.app')

@section('content')

<div class="content-card">

    <h3>Detail Penerbit</h3>

    <table class="detail-table">

        <tbody>

            <tr>

                <td width="200px">
                    Nama Penerbit
                </td>

                <td width="10px">
                    :
                </td>

                <td>
                    {{ $penerbit->nama_penerbit }}
                </td>

            </tr>

        </tbody>

    </table>

    <br>

    <a href="{{ route('penerbit.index') }}"
       class="tombol">

        Kembali

    </a>

</div>

@endsection