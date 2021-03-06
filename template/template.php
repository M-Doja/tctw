<!--


-->
<!DOCTYPE html>
<html>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Welcome to the official Center of the World website. Located in Felicity, CA, the Center of The World has a number of attractions such as The Museum of History in Granite and the Church on the Hill."T
  <meta name="keywords" content="museum, granite, Felicity, center, world, maze, honor">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title><?php pageTitle(); ?> | <?php siteName(); ?>&reg;</title>
  <head>
    <style>

    body {background-color: lightgoldenrodyellow;position: relative;}
    .center { text-align: center;}
    .center img {margin: auto;}
    .rounded { border-radius: 50%;}
    .top {margin-top: 0;padding: 0;}

    /* SITE TITLE */
    #navbar-main {
      overflow: hidden;
      z-index: 999999;
      height: 35px;
      background-color: #674d3c;
      font-family: new times;
      border:1px solid #674d3c;
      margin-bottom:15px;
      height:65px;
    }
    #navbar-main a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 10px;
      text-decoration: none;
    }
    .content {
      padding: 16px;
    }
    /* The sticky class is added to the navbar with JS when it reaches its scroll position */
    .sticky {
      position: fixed;
      top: 0;
      left:0;
      width: 100%;
    }
    /* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
    .sticky + .content {
      padding-top: 60px;
    }
    header {
      margin-top: 37px;
    }
    header h1 {
      color:navy;
      border-bottom:3px solid navy;
      font-size:30px;
      margin:-5px auto 20px;
      text-align:center;
    }
    header h1 span {
      display:inline-block;
    }
    header a {
      text-decoration:none;
    }
    header span.one{
      border:2px solid black;font-size:20px;display:inline-block;margin:10px auto;padding:5px;
    }
    header span.two{
      font-size:15px;color:red;
    }

    /* PHOTO CAROUSEL SECTION */
    #Photos {
      margin-top:-15px;
    }
    #Photos > div {
      max-width:750px;margin: 50px auto;width:100%;
    }

    /* MAIN CONTENT AREA */
    #quoteSection2 { margin-top: -40px;}
    #certifImg,#markImg, #pymImg,#ctwImg {transition: all .3s ease-out;opacity: .7}
    #certifImg:hover,
    #pymImg:hover,
    #markImg:hover,
    #ctwImg:hover {
      box-shadow: 5px 5px 12px grey;opacity: 1;border: 2px solid #666;
    }
    #clk1, #clk2, #clk3, #clk4, #clk5, #clk6, #clk7 {display: none;}
    #ctw-page:hover #clk1,
    #certImg:hover #clk4,
    #pyImg:hover #clk2,
    #markerImg:hover #clk3 {display: inline-block;color:red;}
    .modal-footer button {
      background-color: #674d3c;
      color: #fff;
      font-weight: bold;
      font-family: new times;
    }
    #mazeImg,
    #hillImg {max-width: 200px;}
    #hohWall {width: 135px;height: 250px;}
    div.modal-content, div.modal-content img { max-width: 732px;width: 100%;}
    #mazelogo,#mazeImg {height: 165px;width: 200px; margin-bottom:0;display: block}
    #hohWall,#mazeImg, #hillImg {transition: all .3s ease-out;opacity: .7; margin-bottom:20px;}
    #hohWall:hover,
    #hillImg:hover,
    #mzlink:hover img {
      box-shadow: 5px 5px 12px grey;opacity: 1;border: 2px solid #666;
    }
    #mzlink:hover #mazeImg {
      border-top: none;
    }
    #mzlink:hover #mazelogo {
      border-bottom: none;
    }
    a p {text-decoration: none}
    a#hWall:hover p#clk5,
    a#mzlink:hover p#clk6,
    a#chrhlink:hover p#clk7 {display: block;color:red;margin-top:-20px;}
    a#dirLink img {
      border: 2px solid #666;
    }
    a#dirLink:hover img {
      opacity: 1;
      box-shadow: 5px 5px 12px grey;
    }

    /* MAP STYLES */
    .gmap_canvas iframe {
      max-width:787;
      width: 100%;
      max-height:315px;
      height: 100%;
    }

    /*********** MOBILE STYLING ******** */
    /* ********************************* */
    #space {display: none;}
    @media only screen and (max-width: 917px) {
      header h1 { font-size: 6vw;}
    }
    @media only screen and (max-width: 545px) {
      header h1 { font-size: 8.5vw;}
      #navbar-main .navbar-brand{ display: none;}
      #navbar-main a {
        font-size: 15px;
      }
      #space {display: block;}
    }


    </style>
  </head>
  <body  data-spy="scroll" data-target="#navbar-main">
    <!-- TOP NAVIGATION BAR -->
    <nav id="navbar-main" class="navbar mr-auto navbar-light">
      <a id="Home"class="navbar-brand" href="#">
        <b>Center of The World &reg;</b>
      </a>
      <ul class="nav nav-pills " style="margin-top:-15px;">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.mazeofhonor.com/about-us/" target="_blank">Our Story</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Directions">Directions</a>
        </li>
      </ul>
    </nav>

    <div style="height:40px;"id="Home"></div> <!-- Link Top Of Page -->

    <!-- Site Title -->
    <header class="container">
        <h1 class="center"> <span>Center of the World &reg; </span>
          <a href="#" data-toggle="modal" data-target="#settingCTWModal" class="modal-launcher">
            <span class="one">  How & Why? <span class="two"> click </span> </span><br>
          </a>
        </h1>
    </header>


    <!-- Top Splash Page Section -->
    <section id="Photos"class="container center">
      <blockquote cite="http://">
        <b>"... no digital images could have prepared me for the tranquil, lofty sensation <br> of standing amoung the monuments..." <i><small>Elizabeth Starr McClintock</small> </i></b>
      </blockquote>

      <div class="center">
        <?php include './content/partials/pixCar.php'; ?>
      </div>

      <section class="row center" id="quoteSection2">
        <section class="col-md-6">
          <blockquote cite="http://">
            <b>"meticulously researched"<i><small> Los Angeles Times</small> </i></b>
          </blockquote>
        </section>
        <section class="col-md-6">
          <blockquote cite="http://">
            <b>"design worth the trip" <i><small>Time Magazine</small> </i></b>
          </blockquote>
        </section>
      </section>
    </section>

    <!-- MAIN SITE CONTENT -->
    <main class="container center content">
      <section class="center row">
        <style media="screen">


        </style>
        <!-- RIGHT SIDE -->
        <article class="col-md-6">
          <!-- Setting Center The World Page -->
          <section id="ctw-page" class="pdfImg btn1">
            <a href="#" data-toggle="modal" data-target="#settingCTWModal" class="modal-launcher">
                <b>Setting The Official <br>Center of The World </b><br>
              <img class="lazy" id="ctwImg"src="./content/assets/home/page.jpg" alt="Image of typed paper about the Center of The World" height="160px">
            </a>
            <!-- Modal -->
            <div class="modal fade" style="margin-top:75px;" id="settingCTWModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document" style="max-width:732px; width:100%;">
                <div class="modal-content" >
                  <div class="modal-body">
                    <img id="" src="./content/assets/images/bg-page.jpg"  />
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <br> <p id="clk1">click Here</p>
          </div>
          </section>
          <hr>
          <!-- Link To Felicity Now Page -->
          <br>
          <section id="pyImg" class="pyImg btn1">
            <a href="http://www.felicity.us/home.html" target="_blank" data-toggle="" data-target="" class="modal-launcher">
              <b>Town of Felicity </b><br>
              <img id="pymImg" class="lazy" src="./content/assets/home/pyramid.jpg" alt="Image of pyramid in town of Felicity." height="120px">
            </a>
            <br> <p id="clk2">click Here</p>
          </section>
          <hr>
          <!-- About The Pyramid Page -->
          <br>
          <section id="markerImg" class="markerImg btn1">
            <a href="#" data-toggle="modal" data-target="#markerCTWModal" class="modal-launcher">
              <b>Official Center of The World <br>set by United States and International Law </b><br>
              <img class="lazy" id="markImg"src="./content/assets/home/dot.jpg" alt="Image of bronze plaque on ground marking center of world inside the pyramid." height="80px" style="margin:10px auto;">
              <br> <caption><b>found inside the pyramid</b> </caption>
            </a>
            <br> <p id="clk3">click Here</p>

            <!-- Modal -->
            <div class="modal fade" style="margin-top:75px;"id="markerCTWModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document" style="max-width:732px; width:100%;">
                <div class="modal-content" >
                  <div class="modal-body">
                    <img src="./content/assets/images/Plaque Center.jpg" alt="Image of bronze plaque on ground marking center of world inside the pyramid." style="width:200px;border:2px solid #777;">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </section>
          <hr>
          <!-- Getting Certified Page -->
          <br>
          <section id="certImg" class="certImg btn1">
            <a href="#" data-toggle="modal" data-target="#certCTWModal" class="modal-launcher">
              <b>Certificate </b><br>
              <img id="certifImg" class="lazy" src="./content/assets/home/cert.jpg" height="160" >
            </a>
            <br> <p id="clk4">click Here</p>

            <!-- Modal -->
            <div class="modal fade" style="margin-top:75px;" id="certCTWModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document" style="max-width:732px; width:100%;">
                <div class="modal-content" >
                  <div class="modal-body">
                    <img src="./content/assets/images/cert-edit.jpg" height="200" style="height:100%;" >
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btnit sta" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </section>
          <!-- Mobile View Spacing -->
          <br><br><br>
        </article>

        <!-- LEFT SIDE -->
        <article class="col-md-6">
          <style media="screen">

          </style>
          <!-- Museum History In Granite -->
          <section>
            <a style="text-decoration:none;"id="hWall"href="http://museumforever.org" class="" target="_blank">
                <b>Museum of <br>History in Granite</b><br>
              <img id="hohWall" class="lazy" src="./content/assets/home/overview.jpg" alt="History of Humanity wall">
              <p id="clk5">click Here</p>
            </a>
            <br>
          </section>
          <br>
          <!-- Maze Of Honor  -->
          <section>
            <a style="text-decoration:none;" id="mzlink" href="http://mazeofhonor.com"target="_blank">
                <b>Maze of Honor &reg;</b><br>
                <!-- <div class="loader"></div> -->
                <img id="mazelogo" class="lazy" src="./content/assets/Maze logo.jpg" alt="">
                <img id="mazeImg" class="lazy" src="./content/assets/home/maze.jpg" alt="">
                <br> <p id="clk6">click Here</p>
            </a>

          </section>
          <br>
          <!-- Church on Hill -->
          <section>
            <a id="chrhlink" style="text-decoration:none;" href="http://www.parafame.org/church_on_the_hill_at_felicity.htm" target="_blank">
                <b>Church on the Hill at Felicity</b><br>
                <!-- <div class="loader"></div> -->
                <img class="lazy" id="hillImg" src="./content/assets/home/church.jpg" alt="">
                <br> <p id="clk7">click Here</p>
            </a>

          </section>
          <br id="Directions">
        </article>
      </section>


      <!-- <hr > -->
      <br id="space">
      <br>
      <!-- Directions -->
      <section class="center" style="border-top:navy 2px solid;padding-top:15px;">
        <h2 style="color:navy;">Directions</h2>
        <p class="center">
          <b>One Center of the World Plaza <br> Felicity, CA 92283-7777 USA<br>

            <div style="border-bottom:1px solid #000;height:1px;width:200px;margin:5px auto;"></div>
          Phone:	(760) 572-0100 <br>
          Email:	museumforever@gmail.com</b><br><br>
          <p>Interstate 8 exit 164 <br>Center of the World Drive is frontage road on North side (Historic Note: old US 80)
          </p>
       </p>

       <!-- Map -->
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe  id="gmap_canvas" style="border:1px solid navy;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3355.5807326435865!2d-114.76767332125831!3d32.750321981073206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d6fbcdaeba9197%3A0xa31d304ac96df130!2sMuseum+of+History+In+Granite!5e0!3m2!1sen!2sus!4v1544491962256" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

          </div>
          <style>.mapouter{margin:auto;text-align:center;max-height:315px;height: 100%; max-width:787px; width:100%;}.gmap_canvas {margin:auto;overflow:hidden;background:none!important;max-height:315px;height: 100%; max-width:787px; width:100%;}</style>
        </div>
      </section>
    </main>
    <br><br>

    <div class="center footer">
      <footer><small>&copy;<?php echo date('Y'); ?> <?php siteName(); ?></small></footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@10.19.0/dist/lazyload.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">
    var myLazyLoad = new LazyLoad({elements_selector: ".lazy"});

    $(window).on('load', function() {
      if (document.readyState == 'complete') {
        $(".loader").fadeOut("slow");
      }
    });

    $('.carousel').carousel({interval: 2000});
    $('.carousel').on('mouseover', function(){
      $('.carousel').carousel({
        pause: true,
        interval: false
      });
    });
    $('body').scrollspy({ target: '#navbar-main' });
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    // Get the navbar
    var navbar = document.getElementById("navbar-main");

    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }

    (() => {
      'use strict';
      // Page is loaded
      const objects = document.getElementsByClassName('asyncImage');
      Array.from(objects).map((item) => {
        // Start loading image
        const img = new Image();
        img.src = item.dataset.src;
        // Once image is loaded replace the src of the HTML element
        img.onload = () => {
          item.classList.remove('asyncImage');
          return item.nodeName === 'IMG' ?
            item.src = item.dataset.src :
            item.style.backgroundImage = `url(${item.dataset.src})`;
        };
      });
    })();
    </script>
  </body>
</html>
