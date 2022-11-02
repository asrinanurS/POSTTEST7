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
    <link rel="script.js" href="stylesheet">
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
    <div class="Menu"><br>
        <h2 class="menu-title">MENU</h3>
            <div class="container">
            <img src="Alfredo Sauce.png" width="265px" height="250px">
            <p>Alfredo Sauce</p>
        </div>
            <div class="container">
            <img src="Kentang Goreng.png" width="265px" height="250px">
            <p>Kentang Goreng</p> 
        </div>
            <div class="container">
            <img src="Teriyaki Chiken Rice Bowl.png" width="265px" height="250px">
            <p>Teriyaki Chiken Rice Bowl</p>
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