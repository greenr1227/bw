
<!-- ***************************************************

HOME PAGE

***************************************************

-->

<!-- <!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>home</title>
      <link rel="stylesheet" href="http://beth.dev/wp-content/themes/webb/style.css">

   </head>
   <body>
     <header class="main-header">
        <div class="inner-wrap">
           <h1 class="site-title">
              <a href="" class="logo">
              <img src="http://beth.dev/wp-content/themes/webb/dist/images/BethWebb-Logo.svg" alt="Beth Webb" >
              </a>
           </h1>
           <div id="hamburger">
              <span></span>
              <span></span>
              <span></span>
           </div>
           <div id="primary-nav" class="menu">
              <ul>
	             <li class="page_item page-item-20"><a href="http://beth.dev/index.php/">Home</a></li>
	             <li class="page_item page-item-18"><a href="http://beth.dev/index.php/portfolio/">Portfolio</a></li>
	             <li class="page_item page-item-20"><a href="http://beth.dev/index.php/media/book">Book</a></li>
	             <li class="page_item page-item-16"><a href="http://beth.dev/index.php/meet-beth/">Meet Beth</a></li>
                 <li class="page_item page-item-20"><a href="http://beth.dev/index.php/media/">As Seen In</a></li>
                 <li class="page_item page-item-22"><a href="http://beth.dev/index.php/social/">Social</a></li>
                 <li class="page_item page-item-24"><a href="http://beth.dev/index.php/contact/">Contact</a></li>
              </ul>
           </div>
        </div>
     </header>
     <section class="carousel">
     	<div class="slide">
	     	<a href="" class="slider-link">
	     		<picture class="hero-picture">
				  <source media="(max-width: 48rem)" srcset="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideSquare1.jpg 1x">

				  <source media="(min-width: 48.0625rem)" srcset="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide1.jpg 1x,
				  http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide1.jpg 2x,">

				  <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide1.jpg" alt="temp image" class="hero-image"> 
				</picture>
	     	</a>
     	</div>
     	<div class="slide">
	     	<a href="" class="slider-link">
	     		<picture class="hero-picture">
				  <source media="(max-width: 48rem)" srcset="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideSquare2.jpg 1x">

				  <source media="(min-width: 48.0625rem)" srcset="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide2.jpg 1x,
				  http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide2.jpg 2x,">

				  <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide2.jpg" alt="temp image" class="hero-image"> 
				</picture>
			</a>
     	</div>
     	<div class="slide">
	     	<a href="" class="slider-link">
	     		<picture class="hero-picture">
				  <source media="(max-width: 48rem)" srcset="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideSquare3.jpg 1x">

				  <source media="(min-width: 48.0625rem)" srcset="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide3.jpg 1x,
				  http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide3.jpg 2x,">

				  <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide3.jpg" alt="temp image" class="hero-image"> 
				</picture>
			</a>
     	</div>
     </section>

     <section class="book-promo">
     	<div class="large-inner-wrap">
     		<div class="two-book-tall">
				<img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-BookBarTall.jpg" alt="" class="book-image">
				<img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-BookBarTall.jpg" alt="" class="book-image">
     		</div>
     		<div class="book-information">
     			<div class="book-title">
     				<h2>Beth Webb</h2>
     				<h3>An Eye for Beauty</h3>
     				<p>Rooms That Speak to the Senses</p>
     			</div>
     			<div class="other-info">
     				<p class="release-date">September 19, 2017</p>
	     			<img src="http://beth.dev/wp-content/themes/webb/dist/images/rizzoli-ny-logo.png" alt="Rizzoli" class="book-logo">
	     			<a href="" class="button">Pre-order Now</a>
     			</div>
     		</div>
     		<div class="book-bar-wide">
     			<img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-BookBarWide.jpg" alt="" class="large-book-image">
     		</div>
     	</div>
     </section>
      <footer class="main-footer">
         <div class="inner-wrap">
            <h4 class="with-border">Share</h4>
            <ul class="social">
               <li><a href="" class="icon icon-facebook"></a></li>
               <li><a href="" class="icon icon-instagram"></a></li>
               <li><a href="" class="icon icon-twitter"></a></li>
               <li><a href="" class="icon icon-pinterest"></a></li>
            </ul>
            <span class="copyright"><sup>&copy;</sup> 2017 Beth Webb Interiors. All Rights Reserved.</span>       
         </div>
      </footer>
      <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
      <script>
        $(document).ready(function() {
            $("#hamburger").click(
                function() {
                    $("#hamburger").toggleClass("open");


                    $('#primary-nav').toggleClass('open');
                }
            );

            $(".js-print").click(function() {
                window.print();
            });

            $(".js-social-share").click(function() {
                $(".social-list").stop().slideToggle("slow");

            });

            $('.carousel, .small-carousel').slick({
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 5000,
                dots: false,
                infinite: true,
                speed: 300,
                fade: true,
                prevArrow: null,
                nextArrow: null,
            });
            
              $('.inner-wrap').each(function(i) {
                $(this).hide().delay(i * 500).fadeIn(1000);
          });

        });


        $(function() {
            $(window).scroll(function() {
                var winTop = $(window).scrollTop();
                if (winTop >= 30) {
                    $("body").addClass("sticky-header");
                } else {
                    $("body").removeClass("sticky-header");
                }
            });
        });

        
    </script>
   </body>
</html>  -->



<!-- ***************************************************

PORTFOLIO PAGE

***************************************************

 -->

<!-- <!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>home</title>
      <link rel="stylesheet" href="http://beth.dev/wp-content/themes/webb/style.css">

   </head>
   <body>
     <header class="main-header">
        <div class="inner-wrap">
           <h1 class="site-title">
              <a href="" class="logo">
              <img src="http://beth.dev/wp-content/themes/webb/dist/images/BethWebb-Logo.svg" alt="Beth Webb" >
              </a>
           </h1>
           <div id="hamburger">
              <span></span>
              <span></span>
              <span></span>
           </div>
           <div id="primary-nav" class="menu">
              <ul>
               <li class="page_item page-item-20"><a href="http://beth.dev/index.php/">Home</a></li>
               <li class="page_item page-item-18"><a href="http://beth.dev/index.php/portfolio/">Portfolio</a></li>
               <li class="page_item page-item-20"><a href="http://beth.dev/index.php/media/book">Book</a></li>
               <li class="page_item page-item-16"><a href="http://beth.dev/index.php/meet-beth/">Meet Beth</a></li>
                 <li class="page_item page-item-20"><a href="http://beth.dev/index.php/media/">As Seen In</a></li>
                 <li class="page_item page-item-22"><a href="http://beth.dev/index.php/social/">Social</a></li>
                 <li class="page_item page-item-24"><a href="http://beth.dev/index.php/contact/">Contact</a></li>
              </ul>
           </div>
        </div>
     </header>
     <div class="inner-wrap">
      <h2 class="page-title">Portfolio</h2>

      <section class="project-img">
        <a href="" class="project-link">
          <picture class="project-picture">
            <source media="(max-width: 48rem)" srcset="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideSquare1.jpg 1x">

            <source media="(min-width: 48.0625rem)" srcset="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide1.jpg 1x,
            http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide1.jpg 2x,">

            <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide1.jpg" alt="temp image" class="project-image"> 
          </picture>
          <h2 class="project-name">Costa Rica</h2>
        </a>
      </section>

       <section class="project-img">
        <a href="" class="project-link">
          <picture class="project-picture">
            <source media="(max-width: 48rem)" srcset="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideSquare1.jpg 1x">

            <source media="(min-width: 48.0625rem)" srcset="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide1.jpg 1x,
            http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide1.jpg 2x,">

            <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide1.jpg" alt="temp image" class="project-image"> 
          </picture>
          <h2 class="project-name">Lake Oconee</h2>
        </a>
      </section>
       <section class="project-img">
        <a href="" class="project-link">
          <picture class="project-picture">
            <source media="(max-width: 48rem)" srcset="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideSquare1.jpg 1x">

            <source media="(min-width: 48.0625rem)" srcset="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide1.jpg 1x,
            http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide1.jpg 2x,">

            <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide1.jpg" alt="temp image" class="project-image"> 
          </picture>
          <h2 class="project-name">Muscogee</h2>
        </a>
      </section>
     </div>
      <footer class="main-footer">
         <div class="inner-wrap">
            <h4 class="with-border">Share</h4>
            <ul class="social">
               <li><a href="" class="icon icon-facebook"></a></li>
               <li><a href="" class="icon icon-instagram"></a></li>
               <li><a href="" class="icon icon-twitter"></a></li>
               <li><a href="" class="icon icon-pinterest"></a></li>
            </ul>
            <span class="copyright"><sup>&copy;</sup> 2017 Beth Webb Interiors. All Rights Reserved.</span>       
         </div>
      </footer>
      <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
      <script>
        $(document).ready(function() {
            $("#hamburger").click(
                function() {
                    $("#hamburger").toggleClass("open");


                    $('#primary-nav').toggleClass('open');
                }
            );

            $(".js-print").click(function() {
                window.print();
            });

            $(".js-social-share").click(function() {
                $(".social-list").stop().slideToggle("slow");

            });

            $('.carousel, .small-carousel').slick({
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 5000,
                dots: false,
                infinite: true,
                speed: 300,
                fade: true,
                prevArrow: null,
                nextArrow: null,
            });

              $('.inner-wrap').each(function(i) {
                $(this).hide().delay(i * 500).fadeIn(1000);
          });

        });


        $(function() {
            $(window).scroll(function() {
                var winTop = $(window).scrollTop();
                if (winTop >= 30) {
                    $("body").addClass("sticky-header");
                } else {
                    $("body").removeClass("sticky-header");
                }
            });
        });

    </script>
   </body>
</html> -->




<!-- 
***************************************************

PROJECT PAGE

***************************************************

-->

<!-- <!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>home</title>
      <link rel="stylesheet" href="http://beth.dev/wp-content/themes/webb/style.css">
   </head>
   <body>
      <header class="main-header">
         <div class="inner-wrap">
            <h1 class="site-title">
               <a href="" class="logo">
               <img src="http://beth.dev/wp-content/themes/webb/dist/images/BethWebb-Logo.svg" alt="Beth Webb" >
               </a>
            </h1>
            <div id="hamburger">
               <span></span>
               <span></span>
               <span></span>
            </div>
            <div id="primary-nav" class="menu">
               <ul>
                  <li class="page_item page-item-20"><a href="http://beth.dev/index.php/">Home</a></li>
                  <li class="page_item page-item-18"><a href="http://beth.dev/index.php/portfolio/">Portfolio</a></li>
                  <li class="page_item page-item-20"><a href="http://beth.dev/index.php/media/book">Book</a></li>
                  <li class="page_item page-item-16"><a href="http://beth.dev/index.php/meet-beth/">Meet Beth</a></li>
                  <li class="page_item page-item-20"><a href="http://beth.dev/index.php/media/">As Seen In</a></li>
                  <li class="page_item page-item-22"><a href="http://beth.dev/index.php/social/">Social</a></li>
                  <li class="page_item page-item-24"><a href="http://beth.dev/index.php/contact/">Contact</a></li>
               </ul>
            </div>
         </div>
      </header>
      <div class="inner-wrap">
         <h2 class="page-title">Portfolio</h2>
         <section class="project-img project-page">
            <picture class="project-picture">
               <source media="(max-width: 48rem)" srcset="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideSquare1.jpg 1x">
               <source media="(min-width: 48.0625rem)" srcset="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide1.jpg 1x,
                  http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide1.jpg 2x,">
               <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Home-SlideWide1.jpg" alt="temp image" class="project-image"> 
            </picture>
            <h2 class="project-name">Costa Rica</h2>
         </section>
         <section class="profile-post-navigation">
          <div class="inner-wrap">
            <a href="" class="prev-post">&lt; Previous</a>
            <a href="" class="next-post">Next &gt;</a>
            <div class="share-print">
              <a class="js-social-share" href="javascript:void(0)">Share</a> | <a class="js-print" href="javascript:void(0)">Print</a>
              <div class="social-list">
                 <a class="icon icon-facebook" href="" target="_blank"></a>
                 <a class="icon icon-instagram" href="" target="_blank"></a>
                 <a class="icon icon-twitter" href="" target="_blank"></a>
                 <a class="icon icon-pinterest" href="" target="_blank"></a>
              </div>
           </div>
         </div>
         </section>

        <div class="row-large">
          <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Portfolio-IndivWide.jpg" alt="">
        </div>

         <div class="row-two-col">
          <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Portfolio-IndivTall.jpg" alt="">
          <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Portfolio-IndivTall.jpg" alt="">
         </div>


        <div class="row-large">
          <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Portfolio-IndivWide.jpg" alt="">
        </div>

        <section class="centered-content">
          <div class="inner-wrap">
            <p>The best way to design a home in COSTA RICA is to weave the outdoor living seamlessly into every are of the house. Porches and courtyrds become the central gathering areas for family. Open air living is essential to the island lifestyle and natural colors and patterns accent the breezy, fresh feel of the interiors. At night, everyone sits on the porch for sunset - it’s pure magic and the best seats in the house.</p>
          </div>
        </section>

      <div class="row-two-col">
          <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Portfolio-IndivTall.jpg" alt="">
          <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Portfolio-IndivTall.jpg" alt="">
         </div>


        <div class="row-large">
          <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Portfolio-IndivWide.jpg" alt="">
        </div>

        <section class="content-data centered-content">
          <div class="inner-wrap">
            <p class="architect">Architect: Sam Wilson</p>
            <p class="locale">Locale: LAS CATALINAS IN THE GUANACASTE PROVINCE OF NORTHWEST COSTA RICA</p>
          </div>
        </section>
      </div>


      <footer class="main-footer">
         <div class="inner-wrap">
            <h4 class="with-border">Share</h4>
            <ul class="social">
               <li><a href="" class="icon icon-facebook"></a></li>
               <li><a href="" class="icon icon-instagram"></a></li>
               <li><a href="" class="icon icon-twitter"></a></li>
               <li><a href="" class="icon icon-pinterest"></a></li>
            </ul>
            <span class="copyright"><sup>&copy;</sup> 2017 Beth Webb Interiors. All Rights Reserved.</span>       
         </div>
      </footer>
      <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
      <script>
        $(document).ready(function() {
            $("#hamburger").click(
                function() {
                    $("#hamburger").toggleClass("open");


                    $('#primary-nav').toggleClass('open');
                }
            );

            $(".js-print").click(function() {
                window.print();
            });

            $(".js-social-share").click(function() {
                $(".social-list").stop().slideToggle("slow");

            });

            $('.carousel, .small-carousel').slick({
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 5000,
                dots: false,
                infinite: true,
                speed: 300,
                fade: true,
                prevArrow: null,
                nextArrow: null,
            });

              $('.inner-wrap').each(function(i) {
                $(this).hide().delay(i * 500).fadeIn(1000);
          });

        });


        $(function() {
            $(window).scroll(function() {
                var winTop = $(window).scrollTop();
                if (winTop >= 30) {
                    $("body").addClass("sticky-header");
                } else {
                    $("body").removeClass("sticky-header");
                }
            });
        });

    </script>
   </body>
</html> 
 -->

<!-- 
***************************************************

MEET BETH PAGE

***************************************************

-->

<!-- <!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>home</title>
      <link rel="stylesheet" href="http://beth.dev/wp-content/themes/webb/style.css">
   </head>
   <body>
      <header class="main-header">
         <div class="inner-wrap">
            <h1 class="site-title">
               <a href="" class="logo">
               <img src="http://beth.dev/wp-content/themes/webb/dist/images/BethWebb-Logo.svg" alt="Beth Webb" >
               </a>
            </h1>
            <div id="hamburger">
               <span></span>
               <span></span>
               <span></span>
            </div>
            <div id="primary-nav" class="menu">
               <ul>
                  <li class="page_item page-item-20"><a href="http://beth.dev/index.php/">Home</a></li>
                  <li class="page_item page-item-18"><a href="http://beth.dev/index.php/portfolio/">Portfolio</a></li>
                  <li class="page_item page-item-20"><a href="http://beth.dev/index.php/media/book">Book</a></li>
                  <li class="page_item page-item-16"><a href="http://beth.dev/index.php/meet-beth/">Meet Beth</a></li>
                  <li class="page_item page-item-20"><a href="http://beth.dev/index.php/media/">As Seen In</a></li>
                  <li class="page_item page-item-22"><a href="http://beth.dev/index.php/social/">Social</a></li>
                  <li class="page_item page-item-24"><a href="http://beth.dev/index.php/contact/">Contact</a></li>
               </ul>
            </div>
         </div>
      </header>
      <div class="inner-wrap">
        <h2 class="page-title">Meet Beth</h2>

        <section class="two-col">
        <div class="two-one-col">
          <div class="text-left large-lead">
            <p>Through her sensory driven design approach, Beth Webb creates style sanctuaries—natural compositions that provide equal parts lasting well-being and transformative physical beauty. Known for incorporating classic proportions and iconic design details into uplifting light filled spaces, Beth’s design philosophy demonstrates how our 
            five senses transport the instinctive process of design into the tangible.</p>
            <p>With a Master’s degree from Sotheby’s in London, Beth’s gateway to her career in interior design began as an art dealer. Today as founder and Creative Director of Atlanta based Beth Webb Interiors, Beth has completed projects throughout the Southeast as well as residences 
            in California, Connecticut, Michigan the Bahamas and Costa Rica.</p>
            <p>As a noted industry ambassador and style influencer, Beth’s work is often featured in Elle Décor, Veranda House Beautiful, Traditional Home, Luxe, Milieu, 
            Southern Accents and Atlanta Homes & Lifestyles.</p>
            <p>In 2015 Beth won the Southeast Designer of the Year Award, Atlanta Home’s and Lifestyles Bath of the Year Award and was included in the prestigious Luxe 
            Magazine Gold List in 2017.</p>
            <p>Beth’s first book, AN EYE FOR BEAUTY, (Rizzoli), gives her design audience insight into her intuitive design process, 
            celebrating interior that “speak to the senses.”</p>
          </div>
        </div>
        <div class="two-one-col">
          <div class="small-carousel">
            <div class="slide">
              <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-MeetBeth-Slide1.jpg" alt="">
            </div>
            <div class="slide">
              <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-MeetBeth-Slide2.jpg" alt="">
            </div>
            <div class="slide">
              <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-MeetBeth-Slide3.jpg" alt="">
            </div>
          </div>

        <div class="quote">
          <blockquote>
            <p>Every home begins as a blank canvas,a plan, a way and a structure to encapsulate life. Only through its materials, furnishings and details does it become beautiful, comfortable and personal.</p> 
          </blockquote>
        </div>
        </div>
        </section>
      </div>


      <footer class="main-footer">
         <div class="inner-wrap">
            <h4 class="with-border">Share</h4>
            <ul class="social">
               <li><a href="" class="icon icon-facebook"></a></li>
               <li><a href="" class="icon icon-instagram"></a></li>
               <li><a href="" class="icon icon-twitter"></a></li>
               <li><a href="" class="icon icon-pinterest"></a></li>
            </ul>
            <span class="copyright"><sup>&copy;</sup> 2017 Beth Webb Interiors. All Rights Reserved.</span>       
         </div>
      </footer>
      <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
      <script>
        $(document).ready(function() {
            $("#hamburger").click(
                function() {
                    $("#hamburger").toggleClass("open");


                    $('#primary-nav').toggleClass('open');
                }
            );

            $(".js-print").click(function() {
                window.print();
            });

            $(".js-social-share").click(function() {
                $(".social-list").stop().slideToggle("slow");

            });

            $('.carousel, .small-carousel').slick({
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 5000,
                dots: false,
                infinite: true,
                speed: 300,
                fade: true,
                prevArrow: null,
                nextArrow: null,
            });


        });


        $(function() {
            $(window).scroll(function() {
                var winTop = $(window).scrollTop();
                if (winTop >= 30) {
                    $("body").addClass("sticky-header");
                } else {
                    $("body").removeClass("sticky-header");
                }
            });
        });
    </script>
   </body>
</html> -->



<!-- 
***************************************************

AS SEEN IN PAGE

***************************************************

-->
<!-- <!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>home</title>
      <link rel="stylesheet" href="http://beth.dev/wp-content/themes/webb/style.css">
   </head>
   <body>
      <header class="main-header">
         <div class="inner-wrap">
            <h1 class="site-title">
               <a href="" class="logo">
               <img src="http://beth.dev/wp-content/themes/webb/dist/images/BethWebb-Logo.svg" alt="Beth Webb" >
               </a>
            </h1>
            <div id="hamburger">
               <span></span>
               <span></span>
               <span></span>
            </div>
            <div id="primary-nav" class="menu">
               <ul>
                  <li class="page_item page-item-20"><a href="http://beth.dev/index.php/">Home</a></li>
                  <li class="page_item page-item-18"><a href="http://beth.dev/index.php/portfolio/">Portfolio</a></li>
                  <li class="page_item page-item-20"><a href="http://beth.dev/index.php/media/book">Book</a></li>
                  <li class="page_item page-item-16"><a href="http://beth.dev/index.php/meet-beth/">Meet Beth</a></li>
                  <li class="page_item page-item-20"><a href="http://beth.dev/index.php/media/">As Seen In</a></li>
                  <li class="page_item page-item-22"><a href="http://beth.dev/index.php/social/">Social</a></li>
                  <li class="page_item page-item-24"><a href="http://beth.dev/index.php/contact/">Contact</a></li>
               </ul>
            </div>
         </div>
      </header>
      <div class="inner-wrap">
        <h2 class="page-title">As Seen In</h2>
  
        <div class="inner-wrap">
          <section class="press-items">
            <div class="press-item">
              <div class="press-image">
                <a href="" class="press-link" target="_blank">
                  <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Press-CoverImage.jpg" alt="" class="press-image">
                  <h4 class="press-title">Magazine o1</h4>
                  <h4 class="press-date">January 2017</h4>
                </a>
              </div>
            </div>
            <div class="press-item">
              <div class="press-image">
                <a href="" class="press-link" target="_blank">
                  <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Press-CoverImage.jpg" alt="" class="press-image">
                  <h4 class="press-title">Long Magazine Title o5</h4>
                  <h4 class="press-date">January 2017</h4>                
                </a>
              </div>
            </div>
            <div class="press-item">
              <div class="press-image">
                <a href="" class="press-link" target="_blank">
                  <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Press-CoverImage.jpg" alt="" class="press-image">
                  <h4 class="press-title">EXTRA-LONG MAGAZINE TITLE o6</h4>
                  <h4 class="press-date">January 2017</h4>                
                </a>
              </div>
            </div>
            <div class="press-item">
              <div class="press-image">
                <a href="" class="press-link" target="_blank">
                  <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Press-CoverImage.jpg" alt="" class="press-image">
                  <h4 class="press-title">Magazine o1</h4>
                  <h4 class="press-date">January 2017</h4>                
                </a>
              </div>

            </div>
            <div class="press-item">
              <div class="press-image">
                <a href="" class="press-link" target="_blank">
                  <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Press-CoverImage.jpg" alt="" class="press-image">
                  <h4 class="press-title">Magazine o1</h4>
                  <h4 class="press-date">January 2017</h4>
                </a>
              </div>
            </div>
          </section>
          <section class="blog-block-items">
          <div class="blog-block-item">
            <div class="blog-block-image">
              <a href="" class="blog-block-link">
                <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Press-BlogImage.jpg" alt="" class="blog-block-item-image">
                <h4 class="blog-block-item-title">Blog Title o1</h4>
                <h4 class="blog-block-item-date">January 2017</h4>
              </a>
            </div>
          </div>
          <div class="blog-block-item">
            <div class="blog-block-image">
              <a href="" class="blog-block-link">
                <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Press-BlogImage.jpg" alt="" class="blog-block-item-image">
                <h4 class="blog-block-item-title">Blog Title o1</h4>
                <h4 class="blog-block-item-date">January 2017</h4>
              </a>
            </div>
          </div>
          <div class="blog-block-item">
            <div class="blog-block-image">
              <a href="" class="blog-block-link">
                <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Press-BlogImage.jpg" alt="" class="blog-block-item-image">
                <h4 class="blog-block-item-title">Blog Title o1</h4>
                <h4 class="blog-block-item-date">January 2017</h4>
              </a>
            </div>
          </div>
          <div class="blog-block-item">
            <div class="blog-block-image">
              <a href="" class="blog-block-link">
                <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Press-BlogImage.jpg" alt="" class="blog-block-item-image">
                <h4 class="blog-block-item-title">Blog Title o1</h4>
                <h4 class="blog-block-item-date">January 2017</h4>
              </a>
            </div>
          </div>
          <div class="blog-block-item">
            <div class="blog-block-image">
              <a href="" class="blog-block-link">
                <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Press-BlogImage.jpg" alt="" class="blog-block-item-image">
                <h4 class="blog-block-item-title">Blog Title o1</h4>
                <h4 class="blog-block-item-date">January 2017</h4>
              </a>
            </div>
          </div>
        </div>
        </section>


      </div>
      <footer class="main-footer">
         <div class="inner-wrap">
            <h4 class="with-border">Share</h4>
            <ul class="social">
               <li><a href="" class="icon icon-facebook"></a></li>
               <li><a href="" class="icon icon-instagram"></a></li>
               <li><a href="" class="icon icon-twitter"></a></li>
               <li><a href="" class="icon icon-pinterest"></a></li>
            </ul>
            <span class="copyright"><sup>&copy;</sup> 2017 Beth Webb Interiors. All Rights Reserved.</span>       
         </div>
      </footer>
      <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
      <script>
        $(document).ready(function() {
            $("#hamburger").click(
                function() {
                    $("#hamburger").toggleClass("open");


                    $('#primary-nav').toggleClass('open');
                }
            );

            $(".js-print").click(function() {
                window.print();
            });

            $(".js-social-share").click(function() {
                $(".social-list").stop().slideToggle("slow");

            });

            $('.carousel, .small-carousel').slick({
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 5000,
                dots: false,
                infinite: true,
                speed: 300,
                fade: true,
                prevArrow: null,
                nextArrow: null,
            });

              $('.inner-wrap').each(function(i) {
                $(this).hide().delay(i * 500).fadeIn(1000);
          });

        });


        $(function() {
            $(window).scroll(function() {
                var winTop = $(window).scrollTop();
                if (winTop >= 30) {
                    $("body").addClass("sticky-header");
                } else {
                    $("body").removeClass("sticky-header");
                }
            });
        });

        
    </script>
   </body>
</html>   -->


<!-- 
***************************************************

AS SEEN IN DETAIL PAGE

***************************************************

-->

<!-- 
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>home</title>
      <link rel="stylesheet" href="http://beth.dev/wp-content/themes/webb/style.css">
   </head>
   <body>
      <header class="main-header">
         <div class="inner-wrap">
            <h1 class="site-title">
               <a href="" class="logo">
               <img src="http://beth.dev/wp-content/themes/webb/dist/images/BethWebb-Logo.svg" alt="Beth Webb" >
               </a>
            </h1>
            <div id="hamburger">
               <span></span>
               <span></span>
               <span></span>
            </div>
            <div id="primary-nav" class="menu">
               <ul>
                  <li class="page_item page-item-20"><a href="http://beth.dev/index.php/">Home</a></li>
                  <li class="page_item page-item-18"><a href="http://beth.dev/index.php/portfolio/">Portfolio</a></li>
                  <li class="page_item page-item-20"><a href="http://beth.dev/index.php/media/book">Book</a></li>
                  <li class="page_item page-item-16"><a href="http://beth.dev/index.php/meet-beth/">Meet Beth</a></li>
                  <li class="page_item page-item-20"><a href="http://beth.dev/index.php/media/">As Seen In</a></li>
                  <li class="page_item page-item-22"><a href="http://beth.dev/index.php/social/">Social</a></li>
                  <li class="page_item page-item-24"><a href="http://beth.dev/index.php/contact/">Contact</a></li>
               </ul>
            </div>
         </div>
      </header>
      <div class="inner-wrap">
        <h2 class="page-title">As Seen In</h2>
  
        <div class="inner-wrap">
          <section class="featured-press-item">
            <div class="featured-press-item-image">
              <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Press-CoverImage.jpg" alt="">
              <h4 class="press-title">Long Magazine Title o5</h4>
               <h4 class="press-date">January 2017</h4> 
            </div>         
          </section>
        <section class="press-item-navigation">
          <div class="inner-wrap">
            <a href="" class="prev-post">&lt; Previous</a>
            <a href="" class="next-post">Next &gt;</a>
            <div class="share-print">
              <a class="js-social-share" href="javascript:void(0)">Share</a> | <a class="js-print-pdf" href="PDF">Print</a>
              <div class="social-list">
                 <a class="icon icon-facebook" href="" target="_blank"></a>
                 <a class="icon icon-instagram" href="" target="_blank"></a>
                 <a class="icon icon-twitter" href="" target="_blank"></a>
                 <a class="icon icon-pinterest" href="" target="_blank"></a>
              </div>
           </div>
         </div>
         </section>
         <section class="featured-press-item-details inner-wrap">
           <div class="featured-press-item-large-image">
             <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Press-IndivSpread.jpg" alt="">
           </div>
           <div class="featured-press-item-large-image">
             <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Press-IndivSpread.jpg" alt="">
           </div>
           <div class="featured-press-item-large-image">
             <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Press-IndivSpread.jpg" alt="">
           </div>
           <div class="featured-press-item-large-image">
             <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Press-IndivSpread.jpg" alt="">
           </div>
           <div class="featured-press-item-large-image">
             <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Press-IndivSpread.jpg" alt="">
           </div>
         </section>
        </div>
      <footer class="main-footer">
         <div class="inner-wrap">
            <h4 class="with-border">Share</h4>
            <ul class="social">
               <li><a href="" class="icon icon-facebook"></a></li>
               <li><a href="" class="icon icon-instagram"></a></li>
               <li><a href="" class="icon icon-twitter"></a></li>
               <li><a href="" class="icon icon-pinterest"></a></li>
            </ul>
            <span class="copyright"><sup>&copy;</sup> 2017 Beth Webb Interiors. All Rights Reserved.</span>       
         </div>
      </footer>
      <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
      <script>
        $(document).ready(function() {
            $("#hamburger").click(
                function() {
                    $("#hamburger").toggleClass("open");


                    $('#primary-nav').toggleClass('open');
                }
            );

            $(".js-print").click(function() {
                window.print();
            });

            $(".js-social-share").click(function() {
                $(".social-list").stop().slideToggle("slow");

            });

            $('.carousel, .small-carousel').slick({
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 5000,
                dots: false,
                infinite: true,
                speed: 300,
                fade: true,
                prevArrow: null,
                nextArrow: null,
            });

              $('.inner-wrap').each(function(i) {
                $(this).hide().delay(i * 500).fadeIn(1000);
          });

        });


        $(function() {
            $(window).scroll(function() {
                var winTop = $(window).scrollTop();
                if (winTop >= 30) {
                    $("body").addClass("sticky-header");
                } else {
                    $("body").removeClass("sticky-header");
                }
            });
        });

        
    </script>
   </body>
</html>   -->


<!-- 
***************************************************

CONTACT PAGE

***************************************************

-->
<!-- 
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>home</title>
      <link rel="stylesheet" href="http://beth.dev/wp-content/themes/webb/style.css">
   </head>
   <body>
      <header class="main-header">
         <div class="inner-wrap">
            <h1 class="site-title">
               <a href="" class="logo">
               <img src="http://beth.dev/wp-content/themes/webb/dist/images/BethWebb-Logo.svg" alt="Beth Webb" >
               </a>
            </h1>
            <div id="hamburger">
               <span></span>
               <span></span>
               <span></span>
            </div>
            <div id="primary-nav" class="menu">
               <ul>
                  <li class="page_item page-item-20"><a href="http://beth.dev/index.php/">Home</a></li>
                  <li class="page_item page-item-18"><a href="http://beth.dev/index.php/portfolio/">Portfolio</a></li>
                  <li class="page_item page-item-20"><a href="http://beth.dev/index.php/media/book">Book</a></li>
                  <li class="page_item page-item-16"><a href="http://beth.dev/index.php/meet-beth/">Meet Beth</a></li>
                  <li class="page_item page-item-20"><a href="http://beth.dev/index.php/media/">As Seen In</a></li>
                  <li class="page_item page-item-22"><a href="http://beth.dev/index.php/social/">Social</a></li>
                  <li class="page_item page-item-24"><a href="http://beth.dev/index.php/contact/">Contact</a></li>
               </ul>
            </div>
         </div>
      </header>
      <div class="inner-wrap">
         <h2 class="page-title">Contact</h2>
         <div class="inner-wrap">
            <section class="two-col contact">
               <div class="two-one-col">
                  <div class="contact-info">
                     <h3>Office:</h3>
                     <p>425 Peachtree Hills Avenue</p>
                     <p>Suite 11B - 4</p>
                     <p>Atlanta, Georgia 30305</p>
                     <a href="tel:4048696367" class="phone">404.869.6367</a>
                     <a href="mailto:hello@bethwebb.com">Hello@Bethwebb.com</a>
                     <h3>Social:</h3>
                     <p>@BETHWEBB</p>
                     <h3>Media Inquiries</h3>
                     <a href="mailto:media@bethwebb.com">Media@bethwebb.com</a>
                  </div>
                  <div class="mailing-list">
                     <h3>Mailing List</h3>
                     <form action="" method="post" name="subscribe-form" class="validate subscribe-form" target="_blank" novalidate="">
                        <input type="email" value="" name="EMAIL" placeholder="Enter E-mail" class="required email key-color-border"><input type="submit" value="Join" name="subscribe" class="button key-color-border key-color-background">
                        <div id="mce-responses" class="clear">
                           <div class="response" id="error-response" style="display:none"></div>
                           <div class="response" id="success-response" style="display:none"></div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="two-one-col">
                  <div class="small-carousel">
                     <div class="slide">
                        <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-MeetBeth-Slide1.jpg" alt="">
                     </div>
                     <div class="slide">
                        <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-MeetBeth-Slide2.jpg" alt="">
                     </div>
                     <div class="slide">
                        <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-MeetBeth-Slide3.jpg" alt="">
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </div>
      <footer class="main-footer">
         <div class="inner-wrap">
            <h4 class="with-border">Share</h4>
            <ul class="social">
               <li><a href="" class="icon icon-facebook"></a></li>
               <li><a href="" class="icon icon-instagram"></a></li>
               <li><a href="" class="icon icon-twitter"></a></li>
               <li><a href="" class="icon icon-pinterest"></a></li>
            </ul>
            <span class="copyright"><sup>&copy;</sup> 2017 Beth Webb Interiors. All Rights Reserved.</span>       
         </div>
      </footer>
      <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
      <script>
         $(document).ready(function() {
             $("#hamburger").click(
                 function() {
                     $("#hamburger").toggleClass("open");
         
         
                     $('#primary-nav').toggleClass('open');
                 }
             );
         
             $(".js-print").click(function() {
                 window.print();
             });
         
             $(".js-social-share").click(function() {
                 $(".social-list").stop().slideToggle("slow");
         
             });
         
             $('.carousel, .small-carousel').slick({
                 slidesToShow: 1,
                 autoplay: true,
                 autoplaySpeed: 2500,
                 dots: false,
                 infinite: true,
                 speed: 500,
                 fade: true,
                 prevArrow: null,
                 nextArrow: null,
             });
         
               $('.inner-wrap').each(function(i) {
                 $(this).hide().delay(i * 500).fadeIn(1000);
           });
         
         });
         
         
         $(function() {
             $(window).scroll(function() {
                 var winTop = $(window).scrollTop();
                 if (winTop >= 30) {
                     $("body").addClass("sticky-header");
                 } else {
                     $("body").removeClass("sticky-header");
                 }
             });
         });
         
         
      </script>
   </body>
</html> -->

<!-- 
***************************************************

BOOK PAGE

***************************************************

-->

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>home</title>
      <link rel="stylesheet" href="http://beth.dev/wp-content/themes/webb/style.css">
   </head>
   <body>
      <header class="main-header">
         <div class="inner-wrap">
            <h1 class="site-title">
               <a href="" class="logo">
               <img src="http://beth.dev/wp-content/themes/webb/dist/images/BethWebb-Logo.svg" alt="Beth Webb" >
               </a>
            </h1>
            <div id="hamburger">
               <span></span>
               <span></span>
               <span></span>
            </div>
            <div id="primary-nav" class="menu">
               <ul>
                  <li class="page_item page-item-20"><a href="http://beth.dev/index.php/">Home</a></li>
                  <li class="page_item page-item-18"><a href="http://beth.dev/index.php/portfolio/">Portfolio</a></li>
                  <li class="page_item page-item-20"><a href="http://beth.dev/index.php/media/book">Book</a></li>
                  <li class="page_item page-item-16"><a href="http://beth.dev/index.php/meet-beth/">Meet Beth</a></li>
                  <li class="page_item page-item-20"><a href="http://beth.dev/index.php/media/">As Seen In</a></li>
                  <li class="page_item page-item-22"><a href="http://beth.dev/index.php/social/">Social</a></li>
                  <li class="page_item page-item-24"><a href="http://beth.dev/index.php/contact/">Contact</a></li>
               </ul>
            </div>
         </div>
      </header>
      <div class="inner-wrap">
         <h2 class="page-title">Book</h2>
         <div class="inner-wrap">
          <div class="book-tour">
            <section class="two-col">
               <div class="two-one-col">
                  <div class="book-information">
                    <div class="book-title">
                      <h2>Beth Webb</h2>
                      <h3>An Eye for Beauty</h3>
                      <p>Rooms That Speak to the Senses</p>
                    </div>
                    <div class="book-image">
                      <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Book-Cover.jpg" alt="">
                    </div>
                    <p class="release-date">September 19, 2017</p>
                  </div>
               </div>
               <div class="two-one-col">
                  <div class="pre-order-button">
                    <a href="" class="button dark">Pre-Order Now</a>
                  </div>
                  <div class="small-carousel">
                     <div class="slide">
                        <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Book-Slide1.jpg" alt="">
                     </div>
                     <div class="slide">
                        <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Book-Slide2.jpg" alt="">
                     </div>
                  </div>
                  <p class="content">foreward by VERANDA Editor-in-Chief CLINTON SMITH</p>
               </div>

            </section>
            <div class="quote">
              <blockquote>
                <p>Every home begins as a blank canvas,a plan, a way and a structure to encapsulate life. Only through its materials, furnishings and details does it become beautiful, comfortable and personal.</p> 
                <p class="cite">- Clinton Smith</p>
              </blockquote>
          </div>

          <h2 class="page-title alt">Book Tour</h2>

          <section class="tour-dates-container">
            <div class="next-tour-date">
              <h3>- Next Stop -</h3>

              <div class="three-col next-date">
                <div class="three-one-col">
                  <div class="book-tour-image">
                    <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Book-TourImg.jpg" alt="">
                  </div>
                </div>
                <div class="three-one-col">
                  <div class="book-tour-information">
                    <div class="tour-location">
                      <h2 class="tour-city-state">Atlanta, GA</h2>
                      <h3 class="tour-date">Saturday <span class="tour-month">August</span> 7, 2017</h3>
                      <p class="tour-time-range">12:00 - 5:00 PM</p>
                    </div>
                    <div class="venue-name">
                      <p class="tour-location-one">Location Line 1</p>
                      <p class="tour-location-two">Location Line 2</p>
                      <p class="tour-location-three">Location Line 3</p>
                    </div>
                    <div class="venue-address">
                      <p class="tour-address-street">625 E Main St No. 101</p>
                      <p class="tour-address-city-zip">Aspen, CO 81611</p>
                      <p class="tour-address-phone">(970) 544-2055</p>
                    </div>
                    <div class="rsvp-block">
                      <p class="rsvp-date">R.S.V.P by June 30th to</p>
                      <a href="mailto:" class="rsvp-email">rsvp@aspendesignroom.com</a>
                    </div>
                  </div>
                </div>
                <div class="three-one-col">
                  <div class="book-tour-image">
                    <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Book-TourImg.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>

            <div class="upcoming-dates">
              <h3>- Upcoming -</h3>

              <div class="three-col">
                <div class="three-one-col">
                  <div class="book-tour-image">
                    <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Book-TourImg.jpg" alt="">
                  </div>
                </div>
                <div class="three-one-col">
                  <div class="book-tour-information">
                    <div class="tour-location">
                      <h2 class="tour-city-state">Atlanta, GA</h2>
                      <h3 class="tour-date">Saturday <span class="tour-month">August</span> 7, 2017</h3>
                      <p class="tour-time-range">12:00 - 5:00 PM</p>
                    </div>
                    <div class="venue-name">
                      <p class="tour-location-one">Location Line 1</p>
                      <p class="tour-location-two">Location Line 2</p>
                      <p class="tour-location-three">Location Line 3</p>
                    </div>
                    <div class="venue-address">
                      <p class="tour-address-street">625 E Main St No. 101</p>
                      <p class="tour-address-city-zip">Aspen, CO 81611</p>
                      <p class="tour-address-phone">(970) 544-2055</p>
                    </div>
                    <div class="rsvp-block">
                      <p class="rsvp-date">R.S.V.P by June 30th to</p>
                      <a href="mailto:" class="rsvp-email">rsvp@aspendesignroom.com</a>
                    </div>
                  </div>
                </div>
                <div class="three-one-col">
                  <div class="book-tour-image">
                    <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Book-TourImg.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="three-col">
                <div class="three-one-col">
                  <div class="book-tour-image">
                    <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Book-TourImg.jpg" alt="">
                  </div>
                </div>
                <div class="three-one-col">
                  <div class="book-tour-information">
                    <div class="tour-location">
                      <h2 class="tour-city-state">Atlanta, GA</h2>
                      <h3 class="tour-date">Saturday <span class="tour-month">August</span> 7, 2017</h3>
                      <p class="tour-time-range">12:00 - 5:00 PM</p>
                    </div>
                    <div class="venue-name">
                      <p class="tour-location-one">Location Line 1</p>
                      <p class="tour-location-two">Location Line 2</p>
                      <p class="tour-location-three">Location Line 3</p>
                    </div>
                    <div class="venue-address">
                      <p class="tour-address-street">625 E Main St No. 101</p>
                      <p class="tour-address-city-zip">Aspen, CO 81611</p>
                      <p class="tour-address-phone">(970) 544-2055</p>
                    </div>
                    <div class="rsvp-block">
                      <p class="rsvp-date">R.S.V.P by June 30th to</p>
                      <a href="mailto:" class="rsvp-email">rsvp@aspendesignroom.com</a>
                    </div>
                  </div>
                </div>
                <div class="three-one-col">
                  <div class="book-tour-image">
                    <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Book-TourImg.jpg" alt="">
                  </div>
                </div>
              </div>
                            <div class="three-col">
                <div class="three-one-col">
                  <div class="book-tour-image">
                    <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Book-TourImg.jpg" alt="">
                  </div>
                </div>
                <div class="three-one-col">
                  <div class="book-tour-information">
                    <div class="tour-location">
                      <h2 class="tour-city-state">Atlanta, GA</h2>
                      <h3 class="tour-date">Saturday <span class="tour-month">August</span> 7, 2017</h3>
                      <p class="tour-time-range">12:00 - 5:00 PM</p>
                    </div>
                    <div class="venue-name">
                      <p class="tour-location-one">Location Line 1</p>
                      <p class="tour-location-two">Location Line 2</p>
                      <p class="tour-location-three">Location Line 3</p>
                    </div>
                    <div class="venue-address">
                      <p class="tour-address-street">625 E Main St No. 101</p>
                      <p class="tour-address-city-zip">Aspen, CO 81611</p>
                      <p class="tour-address-phone">(970) 544-2055</p>
                    </div>
                    <div class="rsvp-block">
                      <p class="rsvp-date">R.S.V.P by June 30th to</p>
                      <a href="mailto:" class="rsvp-email">rsvp@aspendesignroom.com</a>
                    </div>
                  </div>
                </div>
                <div class="three-one-col">
                  <div class="book-tour-image">
                    <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Book-TourImg.jpg" alt="">
                  </div>
                </div>
              </div>
                            <div class="three-col">
                <div class="three-one-col">
                  <div class="book-tour-image">
                    <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Book-TourImg.jpg" alt="">
                  </div>
                </div>
                <div class="three-one-col">
                  <div class="book-tour-information">
                    <div class="tour-location">
                      <h2 class="tour-city-state">Atlanta, GA</h2>
                      <h3 class="tour-date">Saturday <span class="tour-month">August</span> 7, 2017</h3>
                      <p class="tour-time-range">12:00 - 5:00 PM</p>
                    </div>
                    <div class="venue-name">
                      <p class="tour-location-one">Location Line 1</p>
                      <p class="tour-location-two">Location Line 2</p>
                      <p class="tour-location-three">Location Line 3</p>
                    </div>
                    <div class="venue-address">
                      <p class="tour-address-street">625 E Main St No. 101</p>
                      <p class="tour-address-city-zip">Aspen, CO 81611</p>
                      <p class="tour-address-phone">(970) 544-2055</p>
                    </div>
                    <div class="rsvp-block">
                      <p class="rsvp-date">R.S.V.P by June 30th to</p>
                      <a href="mailto:" class="rsvp-email">rsvp@aspendesignroom.com</a>
                    </div>
                  </div>
                </div>
                <div class="three-one-col">
                  <div class="book-tour-image">
                    <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Book-TourImg.jpg" alt="">
                  </div>
                </div>
              </div>
                            <div class="three-col">
                <div class="three-one-col">
                  <div class="book-tour-image">
                    <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Book-TourImg.jpg" alt="">
                  </div>
                </div>
                <div class="three-one-col">
                  <div class="book-tour-information">
                    <div class="tour-location">
                      <h2 class="tour-city-state">Atlanta, GA</h2>
                      <h3 class="tour-date">Saturday <span class="tour-month">August</span> 7, 2017</h3>
                      <p class="tour-time-range">12:00 - 5:00 PM</p>
                    </div>
                    <div class="venue-name">
                      <p class="tour-location-one">Location Line 1</p>
                      <p class="tour-location-two">Location Line 2</p>
                      <p class="tour-location-three">Location Line 3</p>
                    </div>
                    <div class="venue-address">
                      <p class="tour-address-street">625 E Main St No. 101</p>
                      <p class="tour-address-city-zip">Aspen, CO 81611</p>
                      <p class="tour-address-phone">(970) 544-2055</p>
                    </div>
                    <div class="rsvp-block">
                      <p class="rsvp-date">R.S.V.P by June 30th to</p>
                      <a href="mailto:" class="rsvp-email">rsvp@aspendesignroom.com</a>
                    </div>
                  </div>
                </div>
                <div class="three-one-col">
                  <div class="book-tour-image">
                    <img src="http://beth.dev/wp-content/themes/webb/dist/images/Temp-Book-TourImg.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </section>
          </div>
         </div>
      </div>
      <footer class="main-footer">
         <div class="inner-wrap">
            <h4 class="with-border">Share</h4>
            <ul class="social">
               <li><a href="" class="icon icon-facebook"></a></li>
               <li><a href="" class="icon icon-instagram"></a></li>
               <li><a href="" class="icon icon-twitter"></a></li>
               <li><a href="" class="icon icon-pinterest"></a></li>
            </ul>
            <span class="copyright"><sup>&copy;</sup> 2017 Beth Webb Interiors. All Rights Reserved.</span>       
         </div>
      </footer>
      <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
      <script>
         $(document).ready(function() {
             $("#hamburger").click(
                 function() {
                     $("#hamburger").toggleClass("open");
         
         
                     $('#primary-nav').toggleClass('open');
                 }
             );
         
             $(".js-print").click(function() {
                 window.print();
             });
         
             $(".js-social-share").click(function() {
                 $(".social-list").stop().slideToggle("slow");
         
             });
         
             $('.carousel, .small-carousel').slick({
                 slidesToShow: 1,
                 autoplay: true,
                 autoplaySpeed: 2500,
                 dots: false,
                 infinite: true,
                 speed: 500,
                 fade: true,
                 prevArrow: null,
                 nextArrow: null,
             });
         
               $('.inner-wrap').each(function(i) {
                 $(this).hide().delay(i * 500).fadeIn(1000);
           });
         
         });
         
         
         $(function() {
             $(window).scroll(function() {
                 var winTop = $(window).scrollTop();
                 if (winTop >= 30) {
                     $("body").addClass("sticky-header");
                 } else {
                     $("body").removeClass("sticky-header");
                 }
             });
         });
         
         
      </script>
   </body>
</html>