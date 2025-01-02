<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>
    <style>
        .tabel {
            border: 1px solid black;
            border-collapse: collapse;
           
        }
        .tabel thead tr th {
            border: 1px solid black;
            padding: 10px;
            background-color: salmon;
            color: whitesmoke;
        }
        .tabel tbody tr td {
            border: 1px solid black;
            padding: 10px;
        }
        .kartu {
            border: 1px solid grey;
            border-radius: 8px;
            width: fit-content;
            padding: 10px 15px;
            margin: 15px auto;
        }
        .tombol {
            border: 1px solid grey;
            padding: 10px 20px;
            background-color: salmon;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        #navigasi ul {
            background-color: slategray;
            margin: 0;
            list-style-type: none;
            overflow: hidden;
        }

        #navigasi ul li {
            float: left;
        }

        #navigasi ul li a {
            display: block;
            text-align:center;
            padding: 14px 16px;
            text-decoration: none;
            color: white;
        }
        #hakim {
            height: 200px;
            display: grid;
            grid-template-columns: 40% 40%;
            justify-content: center;
        }

        .judul {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 64px;
            margin-bottom: 0;
        }

        .sub-judul {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 18px;
        }

        .aktif {
           background-color: salmon; 
        }
    </style>
</head>
<body>
    <section id="navigasi">
        <ul>
          <li><a class="{{ Request::is('dashboard') ? 'aktif' : '' }}" href="{{ url('/dashboard') }}">Dashboard</a> </li>
          <li><a class="{{ Request::is('jabatan') ? 'aktif' : '' }}" href="{{ url('/jabatan') }}">Jabatan</a> </li>
          <li><a href="">Karyawan</a></li>
          <li style="float:right;">
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button style="background-color: salmon;color: white;border: none;display: block;padding: 15px;">Logout</button>
            </form>
          </li>
        </ul>
      </section>
@yield('isi')
</body>
</html>
