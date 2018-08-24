
<style>
    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: #EEAE2C;
        color: white;
        cursor: pointer;
        width:50px;
        height: 50px;
        padding: 15px;
        border-radius: 10px;
    }

    #myBtn:hover {
        background-color: #555;
    }

body {
  font-family: Arial;
  margin: 0;
  padding-top: 50px;
  padding-bottom: 50px;
  background-color: #F5F5F5
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.4;
}

.active,
.demo:hover {
  opacity: 1;
}


/*////---------------------button enable-----------------///////////*/
#wrapper {
  text-align:center;
  border:1px solid #7F7F7F;
  width:150px;
  margin:25px auto;
  padding:25px;
  background-color:#E3E4E4;
}

#myTimer {
  font:64px Tahoma bold;
  padding:20px;
  display:block;
}

button {
  width:125px;
  padding:10px;
}

.btnEnable {
  background-color:#E6F9D2;
  border:1px solid #97DE4C;
  color:#232323;
  cursor:pointer;
}

.btnDisable {
  background-color:#FCBABA;
  border:1px solid #DD3939;
  color:#232323;
  cursor:wait;
}
/*Styling for making button aligned in the middle*/
.wrapper {
    text-align: center;
}

.button {
    position: absolute;
    top: 50%;
}
.scrollmenu { overflow: auto;
    white-space: nowrap;}
</style>
<br>
<h2 style="text-align:center">Goals Settings</h2>
<div class="container">
  <div class="mySlides">
    <div style="color: black" class="numbertext">1 / 9</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/slide1.jpg" style="width:100%;">
  </div>

  <div class="mySlides">
    <div style="color: black" class="numbertext">2 / 9</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/slide2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div style="color: black" class="numbertext">3 / 9</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/slide3.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div style="color: black" class="numbertext">4 / 9</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/slide4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div style="color: black" class="numbertext">5 / 9</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/slide5.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div style="color: black" class="numbertext">6 / 9</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/slide6.jpg" style="width:100%">
  </div>
    <div class="mySlides">
    <div style="color: black" class="numbertext">7 / 9</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/slide7.jpg" style="width:100%">
  </div>
    <div class="mySlides">
    <div style="color: black" class="numbertext">8 / 9</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/slide8.jpg" style="width:100%">
  </div>
    <div class="mySlides">
    <div style="color: black" class="numbertext">9 / 9</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/slide9.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
  <br>
  <div class="row scrollmenu">
    <div class="column">
        <img class="demo cursor" src="<?php echo base_url() ?>assets/images/topics/time_management/slide1.jpg" style="width:100%" onclick="currentSlide(1)">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php echo base_url() ?>assets/images/topics/time_management/slide2.jpg" style="width:100%" onclick="currentSlide(2)">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php echo base_url() ?>assets/images/topics/time_management/slide3.jpg" style="width:100%" onclick="currentSlide(3)">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php echo base_url() ?>assets/images/topics/time_management/slide4.jpg" style="width:100%" onclick="currentSlide(4)">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php echo base_url() ?>assets/images/topics/time_management/slide5.jpg" style="width:100%" onclick="currentSlide(5)">
    </div>    
    <div class="column">
      <img class="demo cursor" src="<?php echo base_url() ?>assets/images/topics/time_management/slide6.jpg" style="width:100%" onclick="currentSlide(6)">
    </div>
      <div class="column">
      <img class="demo cursor" src="<?php echo base_url() ?>assets/images/topics/time_management/slide7.jpg" style="width:100%" onclick="currentSlide(7)">
    </div>
      <div class="column">
      <img class="demo cursor" src="<?php echo base_url() ?>assets/images/topics/time_management/slide8.jpg" style="width:100%" onclick="currentSlide(8)">
    </div>
      <div class="column">
      <img class="demo cursor" src="<?php echo base_url() ?>assets/images/topics/time_management/slide9.jpg" style="width:100%" onclick="currentSlide(9)">
    </div>
  </div>
</div>
<br>
<div class="wrapper">
    <div class="timer-container" id="#run-the-timer">
This button will be enabled in <span class="minute">10</span>:<span class="second">00</span>&nbsp;&nbsp;&nbsp;<input title="button will be enable soon" id="mybutton" disabled type="button" onclick="location.href='<?php echo site_url() ?>/goals_setting_feedback_'" target="_blank" value=" Finish "/>
</div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">&nbsp;<i style="color:black"class="fa fa-angle-double-up"></i>&nbsp;</button>
<br>
<div align="center">
    <i>“If you want to be happy, set a goal that commands your thoughts, liberates your energy and inspires your hopes”.
    </i><br>
    - <b>Andrew Carnegie</b>
</div>
<!--Start script for button timer-->
<script>
    window.onload = function () {

        var fragmentTime;

        jQuery('.timeout_message_show').hide();

        var minutes = jQuery('span.minute').text();

        var seconds = jQuery('span.second').text();

        minutes = parseInt(minutes);

        seconds = parseInt(seconds);

        if (isNaN(minutes)) {

            minutes = 00;

        }

        if (isNaN(seconds)) {

            seconds = 00;

        }

        if (minutes === 60) {

            minutes = 59;

        }

        if (seconds === 60) {

            seconds = 59;

        }

        fragmentTime = (60 * minutes) + (seconds);

        displayMinute = document.querySelector('span.minute');

        displaySecond = document.querySelector('span.second');

        startTimer(fragmentTime, displayMinute, displaySecond);

    };

    function startTimer(duration, displayMinute, displaySecond) {

        var timer = duration,
                displayMinute, displaySecond;

        var timeIntervalID = setInterval(function () {

            minutes = parseInt(timer / 60, 10);

            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;

            seconds = seconds < 10 ? "0" + seconds : seconds;

            displayMinute.textContent = minutes;

            displaySecond.textContent = seconds;

            if (--timer < 0) {

                timer = 0;

                if (timer === 0) {

                    clearInterval(timeIntervalID);

//alert(jQuery('.timeout_message_show').text());

                }

            }

        }, 1000);

    }
</script>
<script>
   function enable()
{
var x = document.getElementById("mybutton");

x.removeAttribute("disabled");
}

setTimeout("enable()", 6000);
    </script>
    <!--End script for button timer-->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1;}
  if (n < 1) {slideIndex = slides.length;}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction();
        };

        function scrollFunction()
        {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction()
        {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
