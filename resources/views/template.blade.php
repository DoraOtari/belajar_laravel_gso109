<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>
    <style>
        #hakim {
            background-color: greenyellow;
            height: 200px;
            display: grid;
            grid-template-columns: auto auto;
        }
        #zakiah {
            background-color: pink;
        }
        #adinda {
            background-color: plum;
        }
    </style>
</head>
<body>
@yield('isi')
</body>
</html>
