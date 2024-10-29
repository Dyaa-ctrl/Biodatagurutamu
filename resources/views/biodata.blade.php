<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

    body{
      background-color: aqua;
      
    }

    .bio {
      text-align: center;
      margin-top: 10%;
      
    }

    
  </style>
</head>
<body>
  <div class="bio">
  <h1>BIODATA SAYA</h1>
  <br>
<h2>Nama    : {{ $Nama }} </h2>
<br>
<h2>Kelas   : {{ $Kelas }} </h2>
<br>
<h2>Sekolah : {{ $Sekolah }} </h2>
<br>
<h2>Alamat  : {{ $Alamat }} </h2>
<br>
<h2>Hobi    : {{ $Hobi }} </h2>
</div>
</body>
</html>