<!DOCTYPE html>
<html>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="This is the official Center of the World website. Located in Felicity, CA, it is host to a number of attractions such as The Museum of History in Granite and the Church on the Hill.">
  <meta name="keywords" content="museum, granite, Felicity, center, world, maze, honor">
  <title><?php pageTitle(); ?> | <?php siteName(); ?>&reg;</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <head>
    <style>
    html {border: #674d3c 5px solid;}
    body {background-color: lightgoldenrodyellow;position: relative;}
    section.splash {
      background-image: url('./content/assets/images/DPP07DA0C0D152627.jpg');
      background-position: center;
      background-repeat: no-repeat;
      background-size: auto;
    }
    header { padding: 20px;}
    figure img {max-width: 350px;width: 100%;}
    #mazeImg,
    #hillImg {max-width: 200px;}
    .center { text-align: center;}
    .center img {margin: auto;}
    .rounded { border-radius: 50%;}
    .top {margin-top: 0;padding: 0;}
    hr {border-bottom: 3px solid navy;}
    #hohWall {width: 135px;height: 250px;}
    h1,h2,h3,h4,h5,h6{ font-family: new times;}
    img#tl {-webkit-transform: scaleY(-1);
      transform: scaleY(-1);margin: -140px auto -60px;
      max-width:500px;width: 100%;}
    div.modal-content, div.modal-content img { max-width: 732px;width: 100%;}
    header h1 {
      font-size:4.5vw; font-family:new times;margin-bottom:20px;color:navy;border-bottom:3px solid navy;
    }
    @media only screen and (max-width: 917px) {
      header h1 { font-size: 6vw;}
    }
    @media only screen and (max-width: 545px) {
      img#tl { margin-top: -130px; }
      header h1 { font-size: 8.5vw;}
      #navbar-example2 .navbar-brand{ display: none;}
      #title { font-size: 20px;}
      #navbar-example2 a {
        font-size: 15px;
      }
    }
    @media only screen and (max-width: 500px) {
      img#tl { margin-top: -120px; }
    }
    @media only screen and (max-width: 460px) {
      img#tl { margin-top: -100px; }
    }
    #navbar-example2 {
      overflow: hidden;
      margin: 0 auto 45px;
      z-index: 999999;
      height: 50px;
      background-color: #674d3c;
      font-family: new times;
      border:1px solid #674d3c;
    }
    #navbar-example2 a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px;
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
    h4 {margin-bottom: 200px;}
    .gmap_canvas iframe {
      max-width:787;
      width: 100%;
      max-height:315px;
      height: 100%;
    }
    h3#title { margin-bottom: -80px;}
    #quoteSection2 { margin-top: -40px;}
    </style>
  </head>
  <body data-spy="scroll" data-target="#navbar-example2">

    <!-- Site Title -->
    <header>
      <!-- <p class="center" style="margin-bottom:-5px;">Welcome to</p> -->
      <h1 class="center" style="">Center of the World
        <span style="font-size:2.5vw">&reg;</span>
      </h1>
    </header>

    <!-- Top Splash Page Section -->
    <section  id="Photos"class="container center" style="margin-top:-20px;">
      <!-- <figure> -->
        <!-- <figcaption> -->
          <blockquote cite="http://">
            <b>"... no digital images could have prepared me for the tranquil, lofty sensation <br> of standing amoung the monuments..." <i><small>Elizabeth Starr McClintock</small> </i></b>
          </blockquote>
          <h3  id="title">Museum of History in Granite</h3>

        <!-- </figcaption> -->
        <!-- <a href="./content/assets/images/DPP07DA0C0D152627.jpg" target="_blank"> -->

          <!-- <img class="asyncImage img-fluid" src="./content/assets/DPP07DA0C0D152627.jpg" data-src="./content/assets/images/DPP07DA0C0D152627.jpg" style=" max-width:700px ;width:100%;border:1.5px solid navy" alt=""> -->
        <!-- </a> -->
      <!-- </figure> -->
      <!-- Quotes -->
      <!-- Photos -->
      <!-- <br id="Photos"> -->
      <!-- <hr > -->
      <div class="center" style="max-width:750px;margin: 90px auto 50px;width:100%;">
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
    <div id="Home" style=" text-align: center;margin: 35px auto;"></div>

    <!-- Navbar -->
    <nav id="navbar-example2" class="navbar mr-auto navbar-light">
      <a class="navbar-brand" href="#"><b>Center of The World &reg;</b> </a>
      <ul class="nav nav-pills ">
        <!-- <li class="nav-item">
          <a class="nav-link" href="#Photos">Photos</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="#Home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Directions">Directions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.mazeofhonor.com/about-us/" target="_blank">Our Story</a>
        </li>
      </ul>
    </nav>

    <!-- MAIN SITE CONTENT -->
    <main class="container center content">
      <section class="center row">
        <style media="screen">
          #certifImg,#markImg, #pymImg,#ctwImg {transition: all .3s ease-out;opacity: .7}
          #certifImg:hover,
          #pymImg:hover,
          #markImg:hover,
          #ctwImg:hover {
            box-shadow: 5px 5px 12px grey;opacity: 1;border: 2px solid #666;
          }
          #clk1, #clk2, #clk3, #clk4 {display: none;}

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

          /* #pymImg:hover, */
          /* #markImg:hover, */
          /* #ctwImg:hover  */
        </style>
        <!-- RIGHT SIDE -->
        <article class="col-md-6">
          <!-- Setting Center The World Page -->
          <section id="ctw-page" class="pdfImg btn1">
            <a href="#" data-toggle="modal" data-target="#settingCTWModal" class="modal-launcher">
                <b>Setting The Official <br>Center of The World </b><br>
              <img id="ctwImg"src="./content/assets/home/page.jpg" alt="Image of typed paper about the Center of The World" height="160px">
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
          <section id="pyImg" class="pyImg btn1">
            <a href="http://www.felicity.us/home.html" target="_blank" data-toggle="" data-target="" class="modal-launcher">
              <b>Town of Felicity </b><br>
              <img id="pymImg" src="./content/assets/home/pyramid.jpg" alt="Image of pyramid in town of Felicity." height="120px">
            </a>
            <br> <p id="clk2">click Here</p>
          </section>
          <hr>
          <!-- About The Pyramid Page -->
          <section id="markerImg" class="markerImg btn1">
            <a href="#" data-toggle="modal" data-target="#markerCTWModal" class="modal-launcher">
              <b>Official Center of The World <br>set by United States and International Law </b><br>
              <img id="markImg"src="./content/assets/home/dot.jpg" alt="Image of bronze plaque on ground marking center of world inside the pyramid." height="80px" style="margin:10px auto;">
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
          <section id="certImg" class="certImg btn1">
            <a href="#" data-toggle="modal" data-target="#certCTWModal" class="modal-launcher">
              <b>Certificate </b><br>
              <img id="certifImg"src="./content/assets/home/cert.jpg" height="160" >
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
                    <button type="button" class="btn" data-dismiss="modal">Close</button>
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
            #hohWall,#mazeImg, #hillImg {transition: all .3s ease-out;opacity: .7; margin-bottom:20px;}
            #hohWall:hover,
            #hillImg:hover,
            #mazeImg:hover {
              box-shadow: 5px 5px 12px grey;opacity: 1;border: 2px solid #666;
            }
            #clk5, #clk6, #clk7 {display: none; margin-top: ;}
            a p {text-decoration: none}
            a#hWall:hover p#clk5,
            a#mzlink:hover p#clk6,
            a#chrhlink:hover p#clk7 {display: block;color:red;}
            a#dirLink img {
              border: 2px solid #666;
            }
            a#dirLink:hover img {
              opacity: 1;
              box-shadow: 5px 5px 12px grey;
            }
          </style>
          <!-- Museum History In Granite -->
          <section>
            <a style="text-decoration:none;"id="hWall"href="http://museumforever.org" class="" target="_blank">
                <b>Museum of <br>History in Granite</b><br>
              <img id="hohWall" src="./content/assets/home/overview.jpg" alt="History of Humanity wall">
              <p id="clk5">click Here</p>
            </a>
            <br>
          </section>
          <br>
          <!-- Maze Of Honor -->
          <section>
            <a style="text-decoration:none;" id="mzlink"href="http://mazeofhonor.com" target="_blank">
                <b>Maze of Honor &reg;</b><br>
                <img id="mazeImg" src="./content/assets/home/maze.jpg" alt="">
                <br> <p id="clk6">click Here</p>
            </a>

          </section>
          <br>
          <!-- Church on Hill -->
          <section>
            <a id="chrhlink" style="text-decoration:none;" href="http://www.parafame.org/church_on_the_hill_at_felicity.htm" target="_blank">
                <b>Church on the Hill at Felicity</b><br>
                <img id="hillImg" src="./content/assets/home/church.jpg" alt="">
                <br> <p id="clk7">click Here</p>
            </a>

          </section>
          <br id="Directions">
          <!-- Directions Link -->
          <!-- <section >
            <a id="dirLink"href="#Directions" style="text-decoration:none; ">

              <b>Directions</b><br>
              <img src="./content/assets/images/findus.jpg" alt="Image of map location of Felicity, CA." style="width:150px;">
            </a>
          </section> -->
        </article>
      </section>


      <hr >
      <br>
      <!-- Directions -->
      <section class="center">
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

            <!-- <iframe  id="gmap_canvas" style="border:1px solid navy;" src="https://maps.google.com/maps?q=felicity&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> -->
            <!-- <a href="https://www.pureblack.de/webdesign-wiesbaden/"></a> -->
          </div>
          <style>.mapouter{margin:auto;text-align:center;max-height:315px;height: 100%; max-width:787px; width:100%;}.gmap_canvas {margin:auto;overflow:hidden;background:none!important;max-height:315px;height: 100%; max-width:787px; width:100%;}</style>
        </div>
      </section>
    </main>
    <br><br>

    <div class="center footer">
      <footer><small>&copy;<?php echo date('Y'); ?> <?php siteName(); ?>.<br><?php siteVersion(); ?></small></footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">
    $('.carousel').carousel({
      interval: 2000
    });
    $('.carousel').on('mouseover', function(){
      $('.carousel').carousel({
        pause: true,
        interval: false
      });
    })
    $('body').scrollspy({ target: '#navbar-example2' });
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    // Get the navbar
    var navbar = document.getElementById("navbar-example2");

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
