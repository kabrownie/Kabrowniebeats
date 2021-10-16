<!DOCTYPE html>
<html>
<head>
<title>
kabrownie Made The Beat!
</title>
<!--meta-->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="beats, music, kabrownie, kabrownie beats, beatstar, beatstore, freebeats, youtube, buy beats, producer, music production, drill beats, hiphop beats, kenyandrill, ukdrill, trapbeat, popsmoke typebeat, typebeat, youngthug typebeat, magix enga, vince onthe beat, gunna type beats, lilbaby type beat, dababy type beat, freebeats chicago drill typebeat, free instrumental, beats2020, beats2021, beats2022, beats2023, beats2024, buy beats,typebeat website, kenyan producer, github">
<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="black.png" sizes="16x16" sizes="32x32"/>                                                                         
<!--font awsome-->
   <script src="https://kit.fontawesome.com/c4b1e869c9.js" crossorigin="anonymous"></script>
</head>

<body>
   <!--header-->
   <header>
      <div class="header">
         <div class="logo">
            <img  src="logo nobg.png.svg" />
            Kabrownie Music
         </div>
         <button class="nav-toggle" aria-label="toggle navigation">
            <span class="lines"></span>
            <span class="lines"></span>
            <span class="lines"></span>
         </button>       
           
         <a class="header-link" href="#contact"><i class="fas fa-phone"></i>Contact Us</a>
         <a class="header-link" href="#about">About Us</a>
         <a class="header-link" target="youtube" href="https://www.youtube.com/channel/UCHiKxFauLQlPYLsKcjxcP-g "><i class="fas fa-youtube"></i>Watch </a>
         <a class="header-link" target="soundclick" href="https://www.soundclick.com/kabrowniebeats"><i class="fas fa-shopping-cart"></i>Cart</a>
        
         <nav class="nav">
           <ul class="nav-list" >
            
               <li ><a class="nav-link" href="#contact"><i class="fas fa-phone"></i>Contact Us</a></li>
               <li><a class="nav-link" href="#about">About Us</a></li>
               <li ><a class="nav-link" target="youtube" href="https://www.youtube.com/channel/UCHiKxFauLQlPYLsKcjxcP-g "><i class="fas fa-youtube"></i>Watch </a></li>
               <li><a  class="nav-link" target="soundclick" href="https://www.soundclick.com/kabrowniebeatss"><i class="fas fa-shopping-cart"></i>Cart</a></li>
          </ul>
       </nav>
               
   </div>
   </header>
   <akuna class="nyuma"><div class="logo">
            <img  src="logo nobg.png.svg" />
            Kabrownie Music
         </div></akuna>

  
   </body>

   <!--home-->
<main>
   <!--slide show-->
    <div class = "cover">          
            <div class="slideshow-container">
               <div class="mySlides fade">
                 <img src="bbubles.png" style="width:100%">
               </div>
               
               <div class="mySlides fade">
                 <img src="cover.png" style="width:100%">
               </div>
                              
               </div>
                            
               <div style="text-align:center">
                 <span class="dot"></span> 
                 <span class="dot"></span> 
                 
              
              
         </div>

<!--play list--> 

   
<div class="main">
    <!-- top section -->
    <div class="top_section">
  		<h5>Tracks</h5>
  	</div>


  <div class="tracks">
    
    <!-- list of song will add here from 'song_list.js' file -->

    <!-- small music player -->
    <div class="small_music_player">
    	<div class="s_player_img">
    		<div class="playing_img">
    			<img src="images/1.jpg" alt="">
    		</div>
    	
           <!-- wave animation part -->
    	   <div class="wave_animation">
			 <li></li>
			 <li></li>
			 <li></li>
			 <li></li>
			 <li></li>
	       </div>
	    </div>

    	<div class="song_detail">
    		<p id="song_name">Make Me Move</p>
    		<p id="artist_name">NoCopyrightSounds [NCS]</p>
    	</div>
    	<i class="fa fa-chevron-up" aria-hidden="true" id="up_player"></i>
    </div>


    <!--  popup music player part -->
    <div class="popup_music_player">
         <div class="top">
    	    <p>Now Playing</p>
    	    <i class="fa fa-chevron-down" aria-hidden="true" id="down_player"></i>
        </div>
        
       <div class="song_img">
          <img src="images/1.jpg" alt="">
       </div>

       <div class="song_description">
          <h3 id="current_track_name">Make Me Move</h3>
          <p id="current_singer_name">NoCopyrightSounds [NCS]</p>
       </div>

       <div class="controlls">
    	 <div class="progress_part">
    		<input type="range" min="0" max="100" value="0" id="slider" onchange="change_duration()">
    		<div class="durations">
    			<p id="current_duration">0:00</p>
    		    <p id="total_duration">0:00</p>
    		</div>

       </div>
    		
        <!-- controlls btn's -->
        <div class="controlls_btns">
			<button id="backward_btn"><i class="fa fa-step-backward" aria-hidden="true"></i></button>
			<button id="play_pause_btn"><i class="fa fa-play" aria-hidden="true"></i></button>
			<button id="forward_btn"><i class="fa fa-step-forward" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
</div>



</main> 

   <!--footer-->
<footer>
   <div id="contact">
       <!--Call us :  <a href="phone">  +254792705424</a><br>
       email us : <a href="email"> kabrowmiebeats@gmail.com </a><br> --> |
       <a href="  https://soundclick.com/kabrowniebeats"> <i class="fa-solid fa-cart-shopping"></i> </a>  |

      <a href="  https://m.soundcloud.com/kabrownie-music"><i class="fab fa-soundcloud"></i></a> |

     <a href=" https://www.instagram.com/kabrownie_beats/ "><i class="fab fa-instagram"></i></a> |
      <a href="https://mobile.facebook.com/kabrowniebeats/?_rdc=1&_rdr"><i class="fab fa-facebook"></i></a>  |
     <a href="https://github.com/Ka-ra-nja"><i class="fab fa-github"></i></a>
|<br>

© 2021
   </div>
</footer>
<!-- song list file -->
<script src="song_list.js"></script>
<!-- javascript -->
<script src="main.js"></script>
    <script src="script.js"></script>
</body>

</html>