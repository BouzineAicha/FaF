<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>FaF</title>
</head>
<body>
<div id="navbar">
        <a href="javascript:void(0)">Home</a>
        <a href="javascript:void(0)">Products</a>
        <a href="javascript:void(0)">Ingredients</a>
        <a href="#"><img src="image/logo_light.png" class="logo" height="60px"></img></a>
        <a href="javascript:void(0)">About Us</a>
        <a href="javascript:void(0)">Contact</a>
        <a href="#"><img src="image/bag.png" class="bag" height="20px"></a>
        <a href="javascript:void(0)">Login</a>
    </div>
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

                document.getElementById("navbar").style.background = "#501e27";
            } else {

                document.getElementById("navbar").style.background = "none";
            }
        }
    </script>
    <header>
     
    </header>
</body>
</html>