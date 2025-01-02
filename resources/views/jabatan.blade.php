@extends('template')
@section('judul','Jabatan')
@section('isi')
    <div class="kartu">
        <h2>Data Jabatan</h2>
        <table class="tabel">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jabatan</th>
                    <th>Gaji Jabatan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Direktur</td>
                    <td>Rp. 15.000.000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Manager</td>
                    <td>Rp. 10.000.000</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection