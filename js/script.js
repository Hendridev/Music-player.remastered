// toggle play
const body = document.querySelector('body');
const btn = document.querySelector('.status');
const play = document.querySelector('.play');
let url = ['upload_music/Alessia Cara - Seventeen.mp3'];
let newtrack = document.createElement('audio');
newtrack.src = url[0];

function minTommss(minutes) {
    var sign = minutes < 0 ? "-" : "";
    var min = Math.floor(Math.abs(minutes))
    var sec = Math.floor((Math.abs(minutes) * 60) % 60);
    return sign + (min < 10 ? "0" : "") + min + ":" + (sec < 10 ? "0" : "") + sec;
}

function autoStop() {
    if (newtrack.currentTime == newtrack.duration) {
        play.classList.remove('play-toggle');
    }
}

function playMusic() {
    body.append(newtrack);
    newtrack.play();
    document.querySelector('.duration').textContent = minTommss(newtrack.duration / 60);
    let track = document.querySelector('.slider').max = Math.floor(newtrack.duration);
    setInterval(() => {
        let dur = minTommss(newtrack.currentTime / 60);
        document.querySelector('.slider').value = newtrack.currentTime;
        document.querySelector('.currentTime').textContent = dur;
        autoStop();
    }, 1000);
}

document.querySelector('.slider').addEventListener('change', () => {
    newtrack.currentTime = document.querySelector('.slider').value;
});

function stopMusic() {
    newtrack.pause();
}

btn.addEventListener('click', () => {
    play.classList.toggle('play-toggle');
    play.classList.contains('play-toggle') ? playMusic() : stopMusic();
});



// genre interface
const genre = document.querySelectorAll('.genre');
var color = ['linear-gradient(to right, #8a2387, #e94057, #f27121)', 'linear-gradient(to right, #fdc830, #f37335)', 'linear-gradient(to right, #ed213a, #93291e)', 'linear-gradient(to right, #4e54c8, #8f94fb)', ' linear-gradient(to right, #11998e, #38ef7d)'];
for (let i = 0; i < genre.length; i++) {
    genre[i].style.background = color[i];
}