<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
  <html>
    <head>
      
        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
            
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>

#maincard{
  left:35%;
  background-color: black;
}
.container{

  padding-top: 2%;
}
.row{
  padding-top: -10%;
}
#profilepic{
  width: 40%;
  height: 40%;
}
body{
  background-color: white;
}
input{
  color:white;
}
#mainform{
  width:57%;
}
#row1, #row2, #row3{
  padding-left:10%;
}
.nav-wrapper{
  background-color:#333944;
  color:gray;
}
@media (max-width: 500px){
#mainform{
  width:100%;}
#maincard{
  left:0%;
}
}


/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}

</style>
<script>
      /* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
    </script>
  </head>

  <body class="center-align">
      <nav>
    <div class="nav-wrapper">
      <a href="<?php echo site_url() ?>" class="brand-logo center">e-WAYS</a>


      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="<?php echo site_url() ?>">Home</a></li>
        <li><a href="<?php echo site_url() ?>/list_of_courses">Courses</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
  </nav>
<div>
  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="https://materializecss.com/images/office.jpg">
      </div>
      <a href="#user"><img class="circle" src="https://i.imgur.com/Oo385f0.png"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
</div>   

    <div class="container">
        <form id=mainform>
          <div class="card z-depth-5 col s12 m12 l3" id="maincard">

          <div class="row">
            <div class="col s12 m12 l12" style="padding-top:2.5%">
            <img id="profilepic" src="https://i.imgur.com/Oo385f0.png" alt="" class="circle responsive-img hoverable">
          </div>
        </div>
        <div class="row" id="row1">
        <div class="input-field col s5 m5 l5">
          <input id="first_name" type="text" class="">
          <label for="name">Name</label>
      </div>
        <div class="input-field col s5 m5 l5">
          <input id="surname" type="text" class="">
          <label for="surname">Surname</label>
        </div>
      </div>
      <div class="row"  id="row2">
        <div class="input-field col s5 m5 l5">
          <input id="tel" type="text" class="">
          <label for="tel">Tel.</label>
        </div>
        <div class="input-field col s5 m5 l5">
          <input id="address" type="text" class="">
          <label for="address">Address</label>
        </div>
      </div>
<div class="row"  id="row3">
    <div class="input-field col s5 m5 l5">
      <select class=browser-default>
    <option value="" disabled selected>Choose Campus</option>
    <option value="George">George Campus</option>
    <option value="Missionvale">Missionvale Campus</option>
    <option value="North">North Campus</option>
    <option value="South">South Campus</option>
  </select>
    </div>
    <div class="input-field col s5 m5 l5">
      <input id="study_area" type="text" class="">
      <label for="study_area">Study Area</label>
    </div>
  </div>
<div class="row">
</div>
<div class="row">
  <div class="col offset-s4 offset-m6 offset-l7">
    <button class="btn waves-effect" style="margin-bottom: 10%;" type="submit" name="action">Save Changes&nbsp;
<i class="mdi-content-send"></i>
</button>
    </div>
      </div>
        </div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
    $('select').material_select();
  });
    </script>
          <!--JavaScript at end of body for optimized loading-->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
          <!-- Compiled and minified JavaScript -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>


    <script>
      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

    var instance = M.Sidenav.getInstance(elem);

  /* jQuery Method Calls
    You can still use the old jQuery plugin method calls.
    But you won't be able to access instance properties.

    $('.sidenav').sidenav('methodName');
    $('.sidenav').sidenav('methodName', paramName);
  */
    </script>
  </body>
</html>
