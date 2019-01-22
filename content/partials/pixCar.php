<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function showCarousalImage($imgName){
  $dir  = "content/assets/images/";
  if ($opendir = opendir($dir)) {
    // read dir
    while (($file = readdir($opendir)) != false) {
      if ($file != '.' && $file != '..' ) {
        if ($file == $imgName) {
         echo '<br><img style="border:5px solid #000;height:310px;"class="imgs" data-u="image" src="content/assets/images/'.$file.'" width="600px" ><br>';
        }
      }
    }
  }
}
?>
<style media="screen">
  .carousel {margin-top: -35px;}
  .carousel-indicators { padding-top: 50px; }
  .carousel-item a  {
    color: #674d3c;
  }
  .carousel-inner  {
    max-height: 477px;
    height: 100%;
    overflow-y: hidden;
  }
  .carousel-inner img {border-left: 5px solid #000;border-right: 5px solid #000; max-height: 400px; height: 100%;}
  .carousel-caption {
    display: inline-block;
    margin-bottom:100px;
    background-color: rgba(0, 0, 0, 0.5);
  }
  .carousel-caption.nine {
    margin-bottom:170px;
  }
  .carousel-caption.seven {
    margin-bottom:10px;
  }
  .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('./content/assets/loading.gif') 50% 50% no-repeat;
    /* opacity: .8; */
}
</style>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <!-- Felicity CA -->
    <div class="carousel-item active">
      <img class="lazy d-block w-100 asyncImage" data-src="./content/assets/2000/felicity.jpg" src="./content/assets/2000/felicity.jpg" alt="Felicity, California, USA in year 2018">
      <div class="loader"></div>
      <p><b>Felicity, California, USA in year 2018</b></p>
    </div>
    <!-- History of Humanity -->
    <div class="carousel-item ">
      <img class="lazy d-block w-100 asyncImage" data-src="./content/assets/2000/eightwalls.jpg" src="./content/assets/2000/eightwalls.jpg" alt='The eight monuments of the "History of Humanity"'>
      <div class="loader"></div>

        <p style="font-family: new times;">The eight monuments of the <b>"History of Humanity".</b> </p>
    </div>
    <!-- Felicity Stone -->
    <div class="carousel-item">
      <img class="d-block w-100 asyncImage" data-src="./content/assets/2000/felicitystone.jpg" src="./content/assets/2000/felicitystone.jpg" alt="Image of Felicity Stone&trade;">
      <div class="loader"></div>
      <p><b> Felicity Stone&trade;</b><br> At the center of the eight <b>"History of Humanity"</b> monuments, is a Rosetta Stone for scholars and visitors of a distant future should the English language be forgotten.</p>
    </div>
    <!-- Monument Wall -->
    <div class="carousel-item">
      <img class="d-block w-100 asyncImage" data-src="./content/assets/2000/wall.jpg" src="./content/assets/2000/wall.jpg" alt="Image of 100ft. granite monument wall.">
      <div class="loader"></div>
      <p>100ft. monuments are designed for four thousand years. <b>No guarantees</b>.</p>
    </div>
    <!-- Logo -->
    <div class="carousel-item" style="padding:20px;">
      <img  class="d-block w-100 asyncImage" data-src="./content/assets/2000/logo.jpg" src="./content/assets/2000/logo.jpg" alt="Logo of the Museum of History in Granite.">
      <div class="loader"></div>
      <p style="display:block; margin:3px auto;">Logo of the <b>Museum of History in Granite.</b> </p>
    </div>
    <!-- Granite Panel -->
    <div class="carousel-item">
      <img class="d-block img-fluid asyncImage" data-src="./content/assets/2000/panel.jpg" src="./content/assets/2000/panel.jpg" alt="Image of one of the hundreds of panels of history that are engraved in granite.">
      <div class="loader"></div>
      <p>Hundreds of panels of history are engraved in granite in this museum.</p>
    </div>
    <!-- Last Invastion -->
    <!-- <div class="carousel-item" style="padding:20px;">
      <img style="margin-bottom:5px;" class="d-block w-100 asyncImage" data-src="./content/assets/2000/invasion.jpg" src="./content/assets/2000/invasion.jpg" alt="Image of panel depicting text regarding last known U.S. invasion.">
      <div class="loader"></div>
      <p style="display:block; margin:-5px auto 5px;"><b>Last Invasion of The United States</b> <br>The President of France sent his Consul to the 9 March 2018 Dedication. </p>
    </div> -->
    <!-- Sun dial -->
    <div class="carousel-item" style="height:100%;">
      <img class="d-block w-100 asyncImage" data-src="./content/assets/2000/sundial.jpg" src="./content/assets/2000/sundial.jpg" alt='Image of a sculpture of "Arm of God", by Michelango, as a sundial.'>
      <div class="loader"></div>
      <p style="font-family: new times;"><b>The Felicity sundial</b>.<br> The gnomon, pointing to the Church on the Hill, is a sculpture of <br> Michelango's "Arm of God"  painted in the Sistine Chapel, Rome.</p>
    </div>
    <!-- Church -->
    <div class="carousel-item">
      <img class="d-block w-100 asyncImage" data-src="./content/assets/2000/church.jpg" src="./content/assets/2000/church.jpg" alt="Church on the Hill at Felicity">
      <div class="loader"></div>
      <p><b>The Church on the Hill at Felicity</b> <br> was dedicated in 2008 by Monsignor Richard W. O'Keeffe, E.V. and <br>The Reverend Arthur P. Stanley, Chaplain of the Her Britannic Majesty's Forces. </p>
    </div>
    <!-- Eiffel Tower -->
    <div class="carousel-item">
      <img class="d-block w-100 asyncImage" data-src="./content/assets/2000/tower.jpg" src="./content/assets/2000/tower.jpg" alt="Eiffel Tower staircase section number 12.">
      <div class="loader"></div>
      <p>Section number 12 of the original staircase of the <b>Eiffel Tower</b>. <br>The heavy 1869 steel staircase later caused the tower to sway. <br>500 feet were replaced in 1983 and sold as 20 certified sections. </p>
    </div>
    <!-- Maze of Honor -->
    <div class="carousel-item asyncImage">
      <img class="d-block w-100" data-src="./content/assets/2000/maze.jpg" src="./content/assets/2000/maze.jpg" alt="Overview image of the Maze Of Honor&reg;">
      <div class="loader"></div>
      <p>The <b>Maze of Honor&reg;<br> </b> Personal memories and photos are preserved in granite for the ages.</p>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
