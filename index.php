<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/display.css">

</head>
<body>
    <header>
        <div class="header">
            <h1>Music player</h1>
        </div>
        <div class="search">
            <form action="" method="post">
                <input type="text" name="search">
                <button class="btn">find</button>
            </form>
        </div>
        <div class="navigation">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Album</a></li>
                <li><a href="">Favorite</a></li>
                <li><a href="">Upload<a></li>
                <li><a href="">Profile</a></li>
            </ul>
        </div>
    </header>
    <section class="hero">
        <div class="left-display">
            <div class="left-header">
                <h3>discover</h3>
                <h3>favorite</h3>
                <h3></h3>
            </div>
        </div>
        <div class="right-display">
            <div class="center">
                <div class="album-rule">
                    <div class="album-title">Only for u</div>
                    <div class="album-wrapper">
                        <div class="box album"></div>
                        <div class="box album"></div>
                        <div class="box album"></div>
                        <div class="box album"></div>
                        <div class="box album"></div>
                    </div>
                </div>
                <div class="album-rule">
                    <div class="album-title">Discover more</div>
                    <div class="album-wrapper">
                        <div class="box album"></div>
                        <div class="box album"></div>
                        <div class="box album"></div>
                        <div class="box album"></div>
                        <div class="box album"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>
</html>