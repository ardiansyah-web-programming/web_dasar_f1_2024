<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        /* 
        CLASS .
        ID #
        
        */
        .tengah{
            text-align: center;
        }
        .container {
            margin: 50px;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 style="color: blue" class="tengah">Halaman Home</h1>
    <h4 class="kanan">Nama saya adalah {{ $nama }}</h4>

    {{-- TABLE --}}
    <div class="container">
    <table border="1" style="border-collapse: collapse; text-align: center">
        <thead style="background-color: yellow">
            <tr>
                <th>Nama Mahasiswa</th>
                <th>NPM</th>
                <th colspan="2">TTL</th>
            </tr>    
        </thead>
        <tbody>
            <tr>
                <td>FULAN</td>
                <td>123</td>
                <td rowspan="2">21/10/2000</td>
                <td rowspan="2">Medan</td>
            </tr>
            <tr>
                <td>FULANAH</td>
                <td>124</td>
            </tr>
        </tbody>
    </table>
    </div>

</body>
</html>