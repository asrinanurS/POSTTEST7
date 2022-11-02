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
        <img src="Logo.png" class="logo" width="150px" height="120px">
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="menu.html">MENU</a></li>
            <li><a href="about.html">ABOUT ME</a></li> 
        </ul>
        <input type="checkbox" onclick="ubahMode()">
    </nav>
</div> 

    <div class="header">
        <h2>Enjoy Our Delicious Meal</h2>
        <p>Food Is A Symbol Of Love When Words Are Not Enough</p>
        <a href="menu.html">Find Your Menu</a>
    </div>

    <div class="contents">
        <h3 class="contents-title"></h3>
    <div class="contents-item">
        <img src="Food.jpg" width="265px" height="340px">
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