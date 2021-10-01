//song list
let All_song = [
    {
      name: "sent",
      path: "music/song1.mp3",
      img: "logo nobg.png.svg",
      singer: "angelacencia"
    },
    {
        name: "emotional",
        path: "music/song2.mp3",
        img: "logo nobg.png.svg",
        singer: "youngfisa"
      },
      
];

//tracks
let tracks = document.querySelector('.tracks');
//generating html
for (let i =0; i<All_song.length; i++){

    let html = `<div class="song">
        <img src ="${All_song[i].img}"/>
       </div> 
       <div class="more">
       <audio src="${All_song[i].path}" id="music"></audio>
       <div class="song_info">
        <p id="song_info">
        <p id="title">${All_song[i].name}</>
        <p>${All_song[i].singer}</p>
        </div>
        <button id"play_btn"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
        </div>
      </div>`;
      tracks.insertAdjacentHTML("beforeend", html);
};