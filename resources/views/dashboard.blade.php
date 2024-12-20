@extends('template')
@section('judul', 'Dashboard')
@section('isi')
  <section id="navigasi">
    <ul>
      <li><a href="">Home</a> </li>
      <li><a href="">Jabatan</a> </li>
      <li><a href="">Karyawan</a></li>
    </ul>
  </section>
  <div id="hakim">
    <div id="zakiah">
      <h2 class="judul">Absensi Karyawan</h2>
      <p class="sub-judul">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aliquid dolore aliquam necessitatibus tempora quibusdam porro non fugiat neque ratione, minus, nihil adipisci harum nisi inventore tempore sapiente illo debitis repellendus ipsum corporis officiis vitae reiciendis? Mollitia magnam nulla repellat, sequi sunt fuga numquam distinctio possimus dignissimos eius debitis dolore.</p>

    </div>
    <div id="adinda">
      <img width="400" src="{{ asset('gambar.svg') }}" alt="">
    </div>
  </div>
@endsection