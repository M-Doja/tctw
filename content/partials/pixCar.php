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
</style>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <style media="screen">
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
      /* margin-bottom: 10px; */
    }

    .carousel-caption.nine {
      margin-bottom:170px;
    }
    .carousel-caption.seven {
      margin-bottom:10px;
    }
  </style>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./IMAGESDUMP/History of Humanity monuments 3.jpg" alt="First slide">

      <!-- <img class="d-block w-100" src="./content/assets/images/History of Humanity monuments 2 - Copy.jpg" alt="First slide"> -->

      <a href="http://historyingranite.org" target="_blank">
        <p style="font-family: new times;"><b>History of Humanity Monuments</b> </p>
      </a>
    </div>
    <div class="carousel-item" style="height:100%;">
      <img class="d-block w-100" src="./content/assets/images/COW arm of God sundial 2.JPG" alt="Second slide">

      <a style="height:200px;" href="#">
        <p style="font-family: new times;"><b>The Felicity sundial</b>.<br> Michelango's "Arm of God", pointing to the Church on the Hill, is a sculpture in the Sistine Chapel at Rome.</p>
      </a>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./content/assets/images/1P4A9317.jpg" alt="Third slide">
      <a href="#">
        <p><b> The Felicity Stone&trade;</b> at center of the eight Humanity Monuments is a Rosetta Stone for scholors and visitors of a distant future when the English language may be forgotten.</p>
      </a>
    </div>
    <div class="carousel-item" style="padding:20px;">
      <img  class="d-block w-100" src="./IMAGESDUMP/A historic monument is Dedicated on 9 March 2018 - Copy - Copy - Copy - Copy.JPG" alt="eighth slide">

      <a href="#">
        <p style="display:block; margin:-5px auto 5px;"><b>Last Invasion of The United States</b> <br>The President of France sent the Council for the 9 March 2018 Dedication </p>
      </a>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./content/assets/images/1P4A9601.jpg" alt="Fifth slide">
      <a href="#">
        <p>100ft. monuments are designed for <b>four thousand years</b>. No gurantees.</p>
      </a>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./content/assets/images/EiffelTowerPlaque.jpg" alt="Sixth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./content/assets/images/DPP07DA0C09150651 copy.jpg" alt="Seventh slide">
      <a href="#">
        <p><b>The Church on the Hill</b> at Felicity<br> was dedicated in 2008 by Monsignor Richard W. O'Keeffe, E.V. and The Reverend Arthur P. Stanley, Chaplain of the Her Britannic Majesty's Forces. </p>
      </a>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="./content/assets/images/History_of_Humanity_02_13 copie.jpg" alt="Fourth slide">

      <a href="#">
        <p>Among <b>hundreds</b> of panels of history engraved in granite at this museum.</p>
      </a>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./content/assets/images/DJI_0038 - Copy (4).JPG" alt="nineth slide">
      <a href="#">
        <p><b>Felicity, California, USA in 2018</b></p>
      </a>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./content/assets/images/DJI_0105.JPG" alt="tenth slide">
      <a href="#">
        <p><b>Maze of Honor&reg;</b> holds personal memories and photos lasered in granite for the ages.</p>
      </a>
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
