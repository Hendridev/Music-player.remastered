<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elohymn</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Chivo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="lineicon/WebFont/font-css/LineIcons.css">
    <link rel="stylesheet" href="css/display.css">

</head>
<body>
    <header>
        <div class="header">
            <h1>Elohymn</h1>
            <span><img src="asset/logo.svg" alt="" class="max-4"></span>
        </div>
        <div class="search">
            <form action="" method="post">
                <input class="four-px" type="text" name="search" placeholder="find your music.">
                <button class="btn four-px"><i class="lni lni-magnifier max-3"></i></button>
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
                <i class="lni lni-pointer max-4"></i>
                    <h3>Discover </h3>
                </div>
                <div class="favorite menu">
                    <i class="lni lni-heart max-4"></i>
                    <h3>Favorite</h3>
                </div>
                <div class="playlist menu">
                <i class="lni lni-layers max-4"></i>
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
                <div class="album-rule">
                    <div class="album-title">New release</div>
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
                    <div class="reverse py">
                        <ini class="lni lni-backward"></ini>
                    </div>
                    <div class="status py">
                        <ini class="lni lni-play"></ini>
                        <ini class="lni lni-pause"></ini>
                    </div>
                    <div class="next py">
                        <ini class="lni lni-forward"></ini>
                    </div>
                </div>
                <div class="timeline">
                        <div class="song-title">
                            <p class="st">Dummy music -Ye Xiu</p>
                        </div>
                        <div class="time">
                            <p class="currentTime"></p>
                            <input type="range" value="0" name="track" id="" class="slider">
                            <p class="duration"></p>
                        </div>
                </div>
                <div class="option">
                    <div class="like">
                        <i class="lni lni-heart"></i>
                    </div>
                    <div class="add-playlist">
                        <i class="lni lni-layers"></i>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <script src="js/script.js"></script>
</body>
</html>