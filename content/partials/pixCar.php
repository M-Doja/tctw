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
</style>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <!-- History of Humanity -->
    <div class="carousel-item active">
      <img class="d-block w-100" src="./IMAGESDUMP/History of Humanity monuments 3.jpg" alt='The eight monuments of the <b>"History of Humanity"'>

        <p style="font-family: new times;">The eight monuments of the <b>"History of Humanity".</b> </p>
    </div>
    <!-- Sun dial -->
    <div class="carousel-item" style="height:100%;">
      <img class="d-block w-100" src="./content/assets/images/COW arm of God sundial 2.JPG" alt='Image of a sculpture of "Arm of God", by Michelango, as a sundial.'>

      <p style="font-family: new times;"><b>The Felicity sundial</b>.<br> The gnomon, pointing to the Church on the Hill, is a sculpture of <br> Michelango's "Arm of God"  painted in the Sistine Chapel, Rome.</p>
    </div>
    <!-- Felicity Stone -->
    <div class="carousel-item">
      <img class="d-block w-100" src="./content/assets/images/1P4A9317.jpg" alt="Image of Felicity Stone&trade;">
      <p><b> Felicity Stone&trade;</b><br> At the center of the eight <b>"History of Humanity"</b> monuments, is a Rosetta Stone for scholars and visitors of a distant future should the English language be forgotten.</p>
    </div>
    <!-- Last Invastion -->
    <div class="carousel-item" style="padding:20px;">
      <img style="margin-bottom:5px;" class="d-block w-100" src="./IMAGESDUMP/A historic monument is Dedicated on 9 March 2018 - Copy - Copy - Copy - Copy.JPG" alt="Image of panel depicting text regarding last known U.S. invasion.">

      <p style="display:block; margin:-5px auto 5px;"><b>Last Invasion of The United States</b> <br>The President of France sent his Consul to the 9 March 2018 Dedication. </p>
    </div>
    <!-- Logo -->
    <div class="carousel-item" style="padding:20px;">
      <img  class="d-block w-100" src="./content/assets/images/HFP Museum LOGO.jpg" alt="eighth slide">

      <p style="display:block; margin:3px auto;">Logo of the <b>Museum of History in Granite.</b> </p>
    </div>
    <!-- Monument Wall -->
    <div class="carousel-item">
      <img class="d-block w-100" src="./content/assets/images/1P4A9601.jpg" alt="Image of 100ft. granite monument wall.">
      <p>100ft. monuments are designed for four thousand years. <b>No gurantees</b>.</p>
    </div>
    <!-- Eiffel Tower Plaque -->
    <!-- <div class="carousel-item">
      <img class="d-block w-100" src="./content/assets/images/EiffelTowerPlaque.jpg" alt="Eiffel Tower plaque">
    </div> -->
    <!-- Church -->
    <div class="carousel-item">
      <img class="d-block w-100" src="./content/assets/images/DPP07DA0C09150651 copy.jpg" alt="Seventh slide">
      <p><b>The Church on the Hill at Felicity</b> <br> was dedicated in 2008 by Monsignor Richard W. O'Keeffe, E.V. and <br>The Reverend Arthur P. Stanley, Chaplain of the Her Britannic Majesty's Forces. </p>
    </div>
    <!-- Granite Panel -->
    <div class="carousel-item">
      <img class="d-block img-fluid" src="./content/assets/images/History_of_Humanity_02_13 copie.jpg" alt="Fourth slide">

      <p>Hundreds of panels of history are engraved in granite in this museum.</p>
    </div>
    <!-- Felicity CA -->
    <div class="carousel-item">
      <img class="d-block w-100" src="./content/assets/images/DJI_0038 - Copy (4).JPG" alt="nineth slide">
      <p><b>Felicity, California, USA</b></p>
    </div>
    <!-- Maze of Honor -->
    <div class="carousel-item">
      <img class="d-block w-100" src="./content/assets/images/DJI_0105.JPG" alt="tenth slide">
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
