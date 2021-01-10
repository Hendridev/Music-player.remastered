<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kurale&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/display.css">

</head>
<body>
    <header>
        <div class="header">
            <h1>Suround.in</h1>
        </div>
        <div class="search">
            <form action="" method="post">
                <input class="four-px" type="text" name="search">
                <button class="btn four-px"> <img src="asset/icon-find.svg" alt="" class="max-3"> </button>
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
                <div class="discover menu">
                    <img class="max-4" src="asset/icon-explore.svg" alt="">
                    <h3>Discover </h3>
                </div>
                <div class="favorite menu">
                    <img src="asset/heart.svg" alt="" class="max-4">
                    <h3>Favorite</h3>
                </div>
                <div class="playlist menu">
                    <img src="asset/icon-playlist.svg" alt="" class="max-4">
                    <h3>Playlist</h3>
                </div>
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
        <footer>
            <div class="playing-status">
                <div class="play">

                </div>
                <div class="timeline">
                    
                </div>
            </div>
        </footer>
    </section>
    <script src="js/script.js"></script>
</body>
</html>