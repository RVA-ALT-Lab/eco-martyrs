<?php /*Template Name: Show All */ ?>
<?php get_header(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
<!-- Load FontAwesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<div class="ecoImage">
    <img src="getImage()">
</div>

<div class="stats_and_player">
<div class="ecoStats">
    <h3>Ecomartyr Name</h3>
    <h3>Country</h3>
    <h3>Date of Death</h3>
    <h3>Portrait Artist</h3>
    <h3>Sound Artists</h3>
    <h3>Ecomartyr Bio</h3>
    <h3>Links for further reading</h3>
</div>


<div class="player">
	<!-- Define the section for displaying details 
	<div class="details">
	<div class="now-playing"></div>
	<div class="track-art"></div>
	<div class="track-name"></div>
	<div class="track-artist"></div>
	</div>-->

	<!-- Define the section for displaying play button -->	
	<div class="playpause-track" onclick="playpauseTrack()">
		<i class="fa fa-play-circle fa-5x"></i>
	</div>


	<!-- Define the section for displaying the seek slider-->
	<div class="slider_container">
	<div class="current-time">00:00</div>
	<input type="range" min="1" max="100"
		value="0" class="seek_slider" onchange="seekTo()">
	<div class="total-duration">00:00</div>
	</div>

	<!-- Define the section for displaying the volume slider-->
	<div class="slider_container">
	<i class="fa fa-volume-down"></i>
	<input type="range" min="1" max="100"
		value="99" class="volume_slider" onchange="setVolume()">
	<i class="fa fa-volume-up"></i>
	</div>
</div>
</div>


<?php get_footer(); ?>

<script src="/wp-content/themes/eco-martyrs/src/js/slideshow.js"></script>
<script src="/wp-content/themes/eco-martyrs/src/js/audioPlayer.js"></script>

<style>
body {
background-color: #1e2d32;
color: #fff;

/* Smoothly transition the background color */
transition: background-color .5s;
}

/* Using flex with the column direction to
align items in a vertical direction */
.player {
height: 95vh;
display: flex;
align-items: center;
flex-direction: column;
justify-content: center;
}

.details {
display: flex;
align-items: center;
flex-direction: column;
justify-content: center;
margin-top: 25px;
}

.track-art {
margin: 25px;
height: 250px;
width: 250px;
background-size: cover;
background-position: center;
border-radius: 15%;
}

/* Changing the font sizes to suitable ones */
.now-playing {
font-size: 1rem;
}

.track-name {
font-size: 3rem;
}

.track-artist {
font-size: 1.5rem;
}

/* Using flex with the row direction to
align items in a horizontal direction */
.buttons {
display: flex;
flex-direction: row;
align-items: center;
}

.playpause-track,
.prev-track,
.next-track {
padding: 25px;
opacity: 0.8;

/* Smoothly transition the opacity */
transition: opacity .2s;
}

/* Change the opacity when mouse is hovered */
.playpause-track:hover,
.prev-track:hover,
.next-track:hover {
opacity: 1.0;
}

/* Define the slider width so that it scales properly */
.slider_container {
width: 75%;
max-width: 400px;
display: flex;
justify-content: center;
align-items: center;
}

/* Modify the appearance of the slider */
.seek_slider, .volume_slider {
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
height: 5px;
background: black;
opacity: 0.7;
-webkit-transition: .2s;
transition: opacity .2s;
}

/* Modify the appearance of the slider thumb */
.seek_slider::-webkit-slider-thumb,
.volume_slider::-webkit-slider-thumb {
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
width: 15px;
height: 15px;
background: white;
cursor: pointer;
border-radius: 50%;
}

/* Change the opacity when mouse is hovered */
.seek_slider:hover,
.volume_slider:hover {
opacity: 1.0;
}

.seek_slider {
width: 60%;
}

.volume_slider {
width: 30%;
}

.current-time,
.total-duration {
padding: 10px;
}

i.fa-volume-down,
i.fa-volume-up {
padding: 10px;
}

/* Change the mouse cursor to a pointer
when hovered over */
i.fa-play-circle,
i.fa-pause-circle,
i.fa-step-forward,
i.fa-step-backward {
cursor: pointer;
}

.ecoImage{
    float: right;
}
</style>

