
<!DOCTYPE html>
<html lang="en">
	<head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jcarousel/0.3.7/jquery.jcarousel.min.js"></script>
        <!--
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jcarousel/0.3.7/jquery.jcarousel-scrollintoview.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jcarousel/0.3.7/jquery.jcarousel-pagination.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jcarousel/0.3.7/jquery.jcarousel-core.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jcarousel/0.3.7/jquery.jcarousel-control.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jcarousel/0.3.7/jquery.jcarousel-autoscroll.min.js"></script>
        -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

*, *:after, *:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
	padding: 0;
	z-index: 2;
}

body {
	margin: 20px;
	height: 100%;
	font-family: 'Open Sans';
	background: #5cffbd;
}

.float-r { float: right; }
.float-l { float: left; }

div.container {
	width: 310px;
	height: 480px;
	margin: 5% auto 0;
  position: relative;
  background: #333;
	box-shadow: 0 8px 17px 0 rgba(0,0,0,.2),0 6px 20px 0 rgba(0,0,0,.19);
	overflow: hidden;
}

div.top {
	height: 30px;
	background: #EAEAEA;
	padding: 7px;
	z-index: 9999;
}

div.menu a {
	display: inline-block;
	margin: 2px 2px 2px 2px;
	height: 12px;
	width: 12px;
	border-radius: 12px;
}
div.menu a:nth-child(1) { background: #2ecc71; }
div.menu a:nth-child(2) { background: #f1c40f; }
div.menu a:nth-child(3) { background: #e74c3c; }

div.side-menu {
	width: 100%;
	height: 100%;
	position: absolute;
	background: #333;
	z-index: 98;
	margin-left: -310px;
}

div.side-menu-background {
	width: 100%;
	height: 100%;
	top: 0;
	position: absolute;
	/*
    background: url('http://cdn.postgradproblems.com/wp-content/uploads/2013/08/8c7b216218c104dd0b2cd5a39626351c.jpg') no-repeat 10% 0%;
	*/
    background: #a0a;
    background-size: auto 100%;
	opacity: .07;
	z-index: 95;
}

div.side-menu a.close {
	position: absolute;
	right: 20px;
	top: 18px;
	font-size: 25px;
	color: #FFF;
	z-index: 100;
}

div.side-menu ul {
	margin: 25px 0 0 0;
	z-index: 99 !important;
	position: relative;
}

div.side-menu li {
	color: #AAA;
	padding: 16px 0 13px 28px;
	z-index: 99;
}

div.side-menu li.active {
	color: #FFF;
}

div.side-menu li a {
	color: inherit;
	text-decoration: none;
	font-size: 20px;
	font-weight: 400;
	z-index: 100;
}

div.side-menu li a i {
	margin-right: 7px;
}

div.overlay-image {
	position: absolute;
	width: 100%;
	height: 100%;
	opacity: .6;
	top: 0;
	z-index: -2 !important;
	filter: blur(4px);
}

div.overlay-image.the-nights.active {
	animation: fadeIn 0.8s;
	background: url('https://upload.wikimedia.org/wikipedia/en/6/64/The-Days-Nights-EP-by-Avicii.jpg') no-repeat 45% 20%;
	background-size: 200% auto;
}

div.overlay-image.dont-look-down.active {
	animation: fadeIn 0.8s;
	background: url('https://i1.sndcdn.com/artworks-000110285449-17viu6-t500x500.jpg') no-repeat 45% 20%;
	background-size: 200% auto;
}

div.overlay-image.avalanche.active {
	animation: fadeIn 0.8s;
	background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/bmth-tts.jpg') no-repeat 45% 20%;
	background-size: 200% auto;
}

div.overlay {
	position: absolute;
  top: 0;
  z-index: -1 !important;
  width: 100%;
	height: 100%;
	background: -moz-linear-gradient(top,rgba(51,51,51,0.65) 0,rgba(51,51,51,1) 100%);
  background: -webkit-gradient(linear,left top,left bottom,color-stop(0%,rgba(51,51,51,0.5)),color-stop(100%,rgba(51,51,51,1)));
  background: -webkit-linear-gradient(top,rgba(51,51,51,0.65) 0,rgba(51,51,51,1) 100%);
  background: -o-linear-gradient(top,rgba(51,51,51,0.65) 0,rgba(51,51,51,1) 100%);
  background: -ms-linear-gradient(top,rgba(51,51,51,0.65) 0,rgba(51,51,51,1) 100%);
  background: linear-gradient(to bottom,rgba(51,51,51,0.65) 0,rgba(51,51,51,1) 100%);
}

div.nav {
	width: 270px;
	margin: 20px auto 0 auto;
}

div.nav a {
	color: #FFF;
	font-size: 24px;
}

div.cover {
	width: 100%;
	margin: 15px auto 20px auto;
}

div.cover img {
	height: 180px;
	width: 180px;
	box-shadow: 0 3px 15px 0 rgba(0,0,0,.2),0 6px 20px 0 rgba(0,0,0,.19);
}

.jcarousel {
		width: 310px;
    position: relative;
    overflow: hidden;
}

.jcarousel ul {
    width: 20000em;
    position: relative;
    list-style: none;
    margin: 0;
    padding: 0;
}

.jcarousel li {
    float: left;
		width: 310px;
		height: 180px;
		margin-left: 65px;
}

.jcarousel-pagination {
	display: none;
}

div.info {
	text-align: center;
	color: #fff;
}

div.info h3 {
	font-weight: 600;
	font-size: 14px;
}

div.info p {
	font-size: 12px;
	color: #999;
	margin: 7px 0;
}

div.action {
	text-align: center;
	margin: 20px 0;
}

div.action .previous, div.action .next {
	font-size: 26px;
	margin: 0 10px;
	color: #FFF;
}

div.action .play {
	font-size: 40px;
	margin: 0 25px;
	color: #FFF;
}

div.options {
	text-align: center;
	margin: 25px 0 35px 0;
	display: block;
}

div.options a {
	color: #999;
	margin: 0 15px;
}

div.options a.active {
	color: #e74c3c;
}

div.volume-slider {
	text-align: center;
	margin-top: 0px;
	display: block;
	height: 140px;
	background: #303030;
	position: absolute;
	z-index: 97;
	width: 100%;
}

div.volume-slider-inner {
	padding: 60px 0 0 0;
}

div.volume-slider div.volume-slider-inner i {
	color: #666;
	padding: 0 6px;
}

div.length input[type=range]::-webkit-slider-thumb {
  -webkit-appearance: none;
  height: 8px;
  width: 8px;
  border-radius: 10px;
  background: #ffffff;
  cursor: pointer;
}

div.volume-slider input[type='range'] {
	height: 2px;
	width: 180px;
	background: #999;
	-webkit-appearance: none;
	border: none;
	outline: 0;
}

div.volume-slider input[type=range]::-webkit-slider-thumb {
  -webkit-appearance: none;
  height: 15px;
  width: 15px;
  border-radius: 30px;
  background: #ffffff;
  cursor: pointer;
}

div.volume-slider a.close {
	position: absolute;
	color: #DDD;
	right: 14px;
	top: 10px;
	font-size: 18px;
}

div.length {
	width: 280px;
	margin: 20px auto;
	color: #999;
	font-size: 10px;
}

div.length label, div.length output {
	position: absolute;
	margin-top: -5px;
}

div.length output {
	margin-left: -26px;
}

div.length label {
	margin-left: 15px;
}

div.length input[type="range"] {
	width: 250px;
	margin-left: 14px;
	-webkit-appearance: none;
	background-color: #999;
	height:2px;
	border: none;
	outline: 0;
}

::-moz-selection { /* Code for Firefox */
    color: rgba(255, 255, 255, 1);
    background: rgba(255, 255, 255, .0);
}

::selection {
    color: rgba(255, 255, 255, 1);
    background: rgba(255, 255, 255, .0);
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 0.6;
  }
}
</style>
</head>
<body>

<div class="container">
	<div class="top">
		<div class="menu float-r">
			<a href="#"><span></span></a>
			<a href="#"><span></span></a>
			<a href="#"><span></span></a>
		</div>
	</div>
	<div class="side-menu">
			<a href="#" class="close"><i class="fa fa-angle-left"></i></a>
			<ul>
				<li><a href="#" class="side-search"><i class="fa fa-search fa-fw"></i> Search</a></li>
				<li class="active"><a href="#" class="side-currently-playing"><i class="fa fa-headphones fa-fw"></i> Currently Playing</a></li>
				<li><a href="#" class="side-popular-music"><i class="fa fa-list-ol fa-fw"></i> Popular Music</a></li>
				<li><a href="#" class="side-your-playlist"><i class="fa fa-music fa-fw"></i> Your Playlists</a></li>
				<li><a href="#" class="side-your-profile"><i class="fa fa-user fa-fw"></i> Your Profile</a></li>
				<li><a href="#" class="side-settings"><i class="fa fa-cog fa-fw"></i> Settings</a></li>
			</ul>
		<div class="side-menu-background"></div>
	</div>
	<div class="center">
		<div class="nav">
		<a href="#" class="side-menu-trigger"><i class="fa fa-bars"></i></a>
		</div>
		<div class="cover">
			<div class="jcarousel">
				<ul>
        	<li><img src="https://upload.wikimedia.org/wikipedia/en/6/64/The-Days-Nights-EP-by-Avicii.jpg" alt="" /></li>
        	<li><img src="https://i1.sndcdn.com/artworks-000110285449-17viu6-t500x500.jpg" alt="" /></li>
					<li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/bmth-tts.jpg" alt="" /></li>
    		</ul>
			</div>
			
			<!--<img src="https://upload.wikimedia.org/wikipedia/en/6/64/The-Days-Nights-EP-by-Avicii.jpg" alt="" />-->
		</div>
		<ul class="jcarousel-pagination"></ul>
		<div class="info">
			<div class="name">
				<h3 class="song">The Nights</h3>
				<p class="artist">Avicii</p>
			</div>
		</div>
	</div>
	<div class="bottom">
		<div class="action">
			<a href="#" class="previous jcarousel-prev"><i class="fa fa-step-backward"></i></a>
			<a href="#" class="play"><i class="fa fa-play fa-fw"></i></a>
			<a href="#" class="next jcarousel-next"><i class="fa fa-step-forward"></i></a>
		</div>
		<div class="length">
			<label for="fader">1:00</label>
			<input type="range" min="0" max="100" value="40" id="fader" step="1">
			<output for="fader" class="duration"></output>
		</div>
		<div class="options">
			<a href="#" class="shuffle active"><i class="fa fa-random"></i></a>
			<a href="#" class="replay"><i class="fa fa-refresh"></i></a>
			<a href="#" class="volume"><i class="fa fa-volume-up"></i></a>
			<a href="#" class="favorite active"><i class="fa fa-heart"></i></a>
		</div>
		<div class="volume-slider">
			<a href="#" class="close"><i class="fa fa-chevron-down"></i></a>
			<div class="volume-slider-inner">
				<i class="fa fa-volume-down"></i>
				<input class="volume-slider" type=range min=0 max=100 value=0 id=fader step=1 oninput="outputUpdate(value)">
				<i class="fa fa-volume-up"></i>
			</div>
		</div>
	</div>
	<div class="overlay-image the-nights active"></div>
	<div class="overlay-image dont-look-down"></div>
	<div class="overlay-image avalanche"></div>
	<div class="overlay"></div>
</div>

<audio class="audio-avalanche" src="http://emilcarlsson.se/assets/bring-me-the-horizon-avalanche.mp3" type="audio/mpeg"> 
 Your browser does not support the audio tag!
</audio>

<audio class="audio-dont-look-down" src="http://emilcarlsson.se/assets/Martin Garrix feat. Usher - Don't Look Down (Lyric Video).mp3" type="audio/mpeg"> 
 Your browser does not support the audio tag!
</audio>

<audio class="audio-the-nights" src="http://emilcarlsson.se/assets/Avicii - The Nights.mp3" type="audio/mpeg"> 
 Your browser does not support the audio tag!
</audio>

<script>
$(function() {
    $('.jcarousel').jcarousel({
			wrap: 'circular'
    });
	
		$('.jcarousel-pagination').jcarouselPagination({
        item: function(page) {
            return '<li id="jcarousel-item' + page + '"><a href="#' + page + '">' + page + '</a></li>';
        }
    });
	
		$('#jcarousel-item1').addClass('active');
	
		$('.jcarousel-pagination')
    .on('jcarouselpagination:active', 'li', function() {
        $(this).addClass('active');
    })
    .on('jcarouselpagination:inactive', 'li', function() {
        $(this).removeClass('active');
    });
});

$('.jcarousel-prev').click(function() {
    $('.jcarousel').jcarousel('scroll', '-=1');
	
		$(".audio-avalanche")[0].pause();
		$(".audio-the-nights")[0].pause();
		$(".audio-dont-look-down")[0].pause();
		$(".play i").removeClass("fa-pause").addClass("fa-play");
		$(".play").removeClass("active")
	
		if ($('#jcarousel-item1').hasClass('active')) {
		$('.dont-look-down, .avalanche').removeClass('active');
		$('.the-nights').addClass('active');
		$(".song").html("The Nights");
		$(".artist").html("Avicii");
		$(".duration").html($(".audio-the-nights").duration);
	};
	
	if ($('#jcarousel-item2').hasClass('active')) {
		$('.the-nights, .avalanche').removeClass('active');
		$('.dont-look-down').addClass('active');
		$(".song").text("Don't Look Down");
		$(".artist").text("Martin Garrix");
	};
	
	if ($('#jcarousel-item3').hasClass('active')) {
		$('.the-nights, .dont-look-down').removeClass('active');
		$('.avalanche').addClass('active');
		$(".song").html("Avalanche");
		$(".artist").html("Bring Me The Horizon");
	};
});

$('.jcarousel-next').click(function() {
    $('.jcarousel').jcarousel('scroll', '+=1');
	
		$(".audio-avalanche")[0].pause();
		$(".audio-the-nights")[0].pause();
		$(".audio-dont-look-down")[0].pause();
		$(".play i").removeClass("fa-pause").addClass("fa-play");
		$(".play").removeClass("active")
	
				if ($('#jcarousel-item1').hasClass('active')) {
		$('.dont-look-down, .avalanche').removeClass('active');
		$('.the-nights').addClass('active');
		$(".song").html("The Nights");
		$(".artist").html("Avicii");
	};
	
	if ($('#jcarousel-item2').hasClass('active')) {
		$('.the-nights, .avalanche').removeClass('active');
		$('.dont-look-down').addClass('active');
		$(".song").html("Don't Look Down");
		$(".artist").html("Martin Garrix");
	};
	
	if ($('#jcarousel-item3').hasClass('active')) {
		$('.the-nights, .dont-look-down').removeClass('active');
		$('.avalanche').addClass('active');
		$(".song").html("Avalanche");
		$(".artist").html("Bring Me The Horizon");
	};
});

$(".options a").click(function() {
	$(this).toggleClass("active");
});

$(".favorite").click(function() {
	if($(".options .favorite i").hasClass("fa-heart")) {
		$(".options .favorite i").removeClass("fa-heart").addClass("fa-heart-o");
	}
	else {
		$(".options .favorite i").removeClass("fa-heart-o").addClass("fa-heart");
	}
});

$(".play").click(function() {
	$(".play").toggleClass("active");
	if($(".play i").hasClass("fa-play")) {
		$(".play i").removeClass("fa-play").addClass("fa-pause");
	}
	else {
		$(".play i").removeClass("fa-pause").addClass("fa-play");
	}
	
	if($(".play").hasClass("active") && $("#jcarousel-item3").hasClass("active")) {
		var audio = $(".audio-avalanche")[0];
    audio.play();
	} else {
    var audio = $(".audio-avalanche")[0];
    audio.pause();
    }
	
	if($(".play").hasClass("active") && $("#jcarousel-item2").hasClass("active")) {
		var audio = $(".audio-dont-look-down")[0];
    audio.play();
	} else {
    var audio = $(".audio-dont-look-down")[0];
    audio.pause();
    }
	
	if($(".play").hasClass("active") && $("#jcarousel-item1").hasClass("active")) {
		var audio = $(".audio-the-nights")[0];
    audio.play();
	} else {
    var audio = $(".audio-the-nights")[0];
    audio.pause();
    }
});

$(".volume").click(function(){
		$(".volume").removeClass("active");
		$(".volume-slider").animate({marginTop: '-150px'}, 500);
});

$(".volume-slider .close").click(function(){
		$(".volume-slider").animate({marginTop: '0px'}, 500);
})

$(".side-menu-trigger").click(function(){
    $(".side-menu").animate({marginLeft: '0px'});
		$(".volume-slider").animate({marginTop: '0px'}, 500);
}); 

$(".side-menu li a, .side-menu .close").click(function(){
    $(".side-menu").animate({marginLeft: '-310px'});
}); 

$('.volume-slider input[type="range"]').on('input', function () {
            var percent = Math.ceil(((this.value - this.min) / (this.max - this.min)) * 100);
            console.log(this.min);
            $(this).css('background', '-webkit-linear-gradient(left, #e74c3c 0%, #e74c3c ' + percent + '%, #999 ' + percent + '%)');
        });

$(".volume-slider").slider({
    min: 0,
    max: 100,
    value: 0,
		range: "min",
		animate: true,
    slide: function(event, ui) {
      setVolume((ui.value) / 100);
    }
});

function setVolume(myVolume) {
    var myMedia = document.getElementByClass('audio-avalanche');
    myMedia.volume = myVolume;
}
</script>

</body>
</html>