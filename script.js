console.log("Welcome to M-music");

//Initialize the Variables
let songIndex = 0;
let audioElement = new Audio('music/1.mp3');
let masterPlay = document.getElementById('masterPlay');
let myProgressBar = document.getElementById('myProgressBar');
let gif = document.getElementById('gif');
let masterSongName = document.getElementById('masterSongName');
let songItems = Array.from(document.getElementsByClassName('songItem'));
let songs = [
    {songName: "Jay-Jay-Shivshankar", filepath:"music/1.mp3", coverPath:"covers/images1.jpg"},
    {songName: "Thodi-jagah-dede", filepath:"music/2.mp3", coverPath:"covers/images2.jpg"},
    {songName: "Deva-Shree-Ganesha", filepath:"music/3.mp3", coverPath:"covers/images3.jpg"},
    {songName: "Chennai-Express", filepath:"music/4.mp3", coverPath:"covers/images4.jpg"},
    {songName: "Dekhnewalo-Ne", filepath:"music/5.mp3", coverPath:"covers/images5.jpg"},
    {songName: "Dil-kya-kare", filepath:"music/6.mp3", coverPath:"covers/images6.jpg"},
    {songName: "Is-Qudar-Tumse", filepath:"music/7.mp3", coverPath:"covers/images7.jpg"},
    {songName: "Kinaa-Sona", filepath:"music/8.mp3", coverPath:"covers/images8.jpg"},
    {songName: "Lagi-Meri-Shankara", filepath:"music/9.mp3", coverPath:"covers/images9.jpg"},
    {songName: "Nainowale-Ne", filepath:"music/10.mp3", coverPath:"covers/images10.jpg"},
    {songName: "Lut-Gaye", filepath:"music/11.mp3", coverPath:"covers/images11.jpg"},
    {songName: "Shyam-vi-Khubhai", filepath:"music/12.mp3", coverPath:"covers/images12.jpg"},
    {songName: "First-class", filepath:"music/13.mp3", coverPath:"covers/images13.jpg"},
   
]


songItems.forEach((element, i)=>{
    element.getElementsByTagName("img")[0].src = songs[i].coverPath;
    element.getElementsByClassName("songName")[0].innerText = songs[i].songName;
})

// audioElement.play();

//Handel play/pause Click
masterPlay.addEventListener('click', ()=>{
    if(audioElement.paused || audioElement.currentTime<=0){
       audioElement.play();
       masterPlay.classList.remove('fa-play-circle');
       masterPlay.classList.add('fa-pause-circle');
       gif.style.opacity = 1;
    }
    else{
        audioElement.pause();
        masterPlay.classList.remove('fa-pause-circle');
        masterPlay.classList.add('fa-play-circle');
        gif.style.opacity = 0;
    }
})
// Listen to Events
audioElement.addEventListener('timeupdate', ()=>{
    // Update Seekbar
    progress = parseInt((audioElement.currentTime/audioElement.duration)* 100);
    myProgressBar.value = progress;
})

myProgressBar.addEventListener('change', ()=>{
    audioElement.currentTime = myProgressBar.value * audioElement.duration/100;
})

const makeAllPlays = ()=>{
    Array.from(document.getElementsByClassName('songItemPlay')).forEach((element)=>{
        element.classList.remove('fa-pause-circle');
        element.classList.add('fa-play-circle');
    })
}

Array.from(document.getElementsByClassName('songItemPlay')).forEach((element)=>{
    element.addEventListener('click',(e)=>{
    makeAllPlays();
    songIndex = parseInt(e.target.id);
    e.target.classList.remove('fa-play-circle');
    e.target.classList.add('fa-pause-circle');
    audioElement.src = `music/${songIndex+1}.mp3`;
    masterSongName.innerText = songs[songIndex].songName;
    audioElement.currentTime = 0;
    audioElement.play();
    gif.style.opacity = 1;
    masterPlay.classList.remove('fa-play-circle');
    masterPlay.classList.add('fa-pause-circle');
    })
})

document.getElementById('next').addEventListener('click',()=>{
    if(songIndex>=12){
        songIndex = 0
    }
    else{
        songIndex += 1;
    }
    audioElement.src = `music/${songIndex+1}.mp3`;
    masterSongName.innerText = songs[songIndex].songName;
    audioElement.currentTime = 0;
    audioElement.play();
    masterPlay.classList.remove('fa-play-circle');
    masterPlay.classList.add('fa-pause-circle');
})

document.getElementById('previous').addEventListener('click',()=>{
    if(songIndex<=0){
        songIndex = 0
    }
    else{
        songIndex -= 1;
    }
    audioElement.src = `music/${songIndex+1}.mp3`;
    masterSongName.innerText = songs[songIndex].songName;
    audioElement.currentTime = 0;
    audioElement.play();
    masterPlay.classList.remove('fa-play-circle');
    masterPlay.classList.add('fa-pause-circle');
})

