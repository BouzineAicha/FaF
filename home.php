<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>FaF</title>
</head>

<body>
    <div id="navbar">
        <a href="javascript:void(0)" id="A">Home</a>
        <a href="javascript:void(0)" id="B">Products</a>
        <a href="javascript:void(0)" id="C">Ingredients</a>
        <a href="#" id="logo"><img src="image/logo_light.png" class="logo" height="60px" id="logo"></img></a>
        <a href="#" id="logoo"><img src="image/logo.png" class="logo" height="80px" id="logoo"></img></a>
        <a href="javascript:void(0)" id="D">About Us</a>
        <a href="javascript:void(0)" id="E">Contact</a>
        <a href="#" id="bag"><img src="image/bag.png" class="bag" height="20px"></a>
        <a href="#" id="bagblack"><img src="image/bagblack.png" class="bag" height="20px"></a>
        <a href="javascript:void(0)" id="F">Login</a>
    </div>
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

                document.getElementById("logo").style.display = "none";
                document.getElementById("logoo").style.display = "";
                document.getElementById("bag").style.display = "none";
                document.getElementById("bagblack").style.display = "";
                document.getElementById("navbar").style.background = "linear-gradient(#CFCEDC, white)";
                document.getElementById("A").style.color = "black";
                document.getElementById("B").style.color = "black";
                document.getElementById("C").style.color = "black";
                document.getElementById("D").style.color = "black";
                document.getElementById("E").style.color = "black";
                document.getElementById("F").style.color = "black";


            } else {
                document.getElementById("logo").style.display = "";
                document.getElementById("logoo").style.display = "none";
                document.getElementById("bagblack").style.display = "none";
                document.getElementById("bag").style.display = "";
                document.getElementById("navbar").style.background = "none";
                document.getElementById("A").style.color = "white";
                document.getElementById("B").style.color = "white";
                document.getElementById("C").style.color = "white";
                document.getElementById("D").style.color = "white";
                document.getElementById("E").style.color = "white";
                document.getElementById("F").style.color = "white";
            }
        }
    </script>
    <header>

        <div id="header" class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white" style="background-image: url('image/header.jpg') ;height:100vh ;background-size: cover  ; background-repeat: no-repeat";
 ;><div>
            <h1 class="headerp"> Discover our awesome range <br> of beauty products</h1>
            <button  class="header">Shop Now</button>
            </div>
        </div>

    </header>
    <div class="content" style="margin-left: 70px;">
        <div>
            <div class="col-xs-15" id="rabbit">
                <img src="image/icons8-rabbit-64.png " style="margin-left: 30% ; margin-top:30% " width="80px">
            </div>
            <p style="margin-left: 10px;">Vegan & cruelty-free</p>
        </div>
        <div>
            <div id="natur" class="col-sm-15">
                <img src="image/icons8-natural-food-50.png" style="margin-left: 35% ; margin-top:30% " width="80px">
            </div>
            <p style="margin-right: 30px;">Naturally derived ingredients</p>
        </div>
        <div>
            <div id="heart" class="col-md-15">
                <img src="image/icons8-hearts-64.png" style="margin-left: 30% ; margin-top:35%">
            </div>
            <p style="margin-left: 10px;">Made with love </p>
        </div>
        <div>
            <div id="love" class="col-lg-15">
                <img src="image/icons8-love-potion-64 2.png" style="margin-left: 20% ; margin-top:20%">
            </div>
            <p style="margin-left: 30px;">Strong formulations </p>
        </div>

    </div>
    <main>
        <div class="Ingredients">
            <div>
                <img src="image/nnnn 1.png" width="300px" style="margin-left: 100px; margin-top:50px">
            </div>
            <div class="ing">
                <h1 style=" margin-top:50px; margin-left:100px ">Ingredients</h1>
                <p style=" margin-top:50px ; margin-right:200px">We are going back to basics by<br> using ingredients everyone understands. Our formulations<br> have proven efficacy and have never been tested on animals.<br> Our beauty experts came up with a limited product range for<br> higher quality of each products.</p>
            </div>
        </div>
        <div class="ing">
            <h1 style="text-align: center;margin-top:50px">From FAF</h1>
            <p style="text-align: center;margin-top:50px">“For a long time we have been looking to create a new different beauty brand.<br> Our beauticians use effective ingredients that everyone<br> understands ...”</p>
            <h1 style="text-align: center;margin-top:50px">Our bestseller</h1>
        </div>
        <form>

        </form>
        <button class="see-all">See All</button>
    </main>
</body>
<form>
    <?php include "footer.php"
    ?>
</form>

</html>