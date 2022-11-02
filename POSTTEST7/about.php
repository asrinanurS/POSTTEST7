<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTTEST 4</title>
    <link rel="stylesheet" href="style.css">
    <link rel="https://fonts.googleapis.com/css?family-great+vibes" href="stylesheet" type="text/cs">
    <link rel="https://fonts.googleapis.com/css?family-great-raleway" href="stylesheet">
</head>
<body>
   <div class="nav">
    <nav>
        <img src="Logo.png" class="logo" width="150px" height="130px">
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="menu.html">MENU</a></li>
            <li><a href="about.html">ABOUT ME</a></li> 
        </ul>
        <input type="checkbox" onclick="ubahMode()">
    </nav>
</div> 
<div class="About Me"><br>
    <h2 class="about-title">PROFIL</h3>
        <div class="foto">
            <img src="Foto Profil.jpg" width="250px" height="285px">
    </div>
    <div class="informasi">
        <p>Nama             : Asrina Nur Syahbani</p><br>
        <p>NIM              : 2009106131</p><br>
        <p>Program Studi    : Informatika</p><br>
</div>
</div>

<script>
    function ubahMode(){
        const ubah = document.body;
        ubah.classList.toggle("dark");
    }
</script>

</body>
</html>