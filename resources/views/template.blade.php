<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>
    <style>
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
        #zakiah {
          
        }
        #adinda {
           
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
    </style>
</head>
<body>
@yield('isi')
</body>
</html>
