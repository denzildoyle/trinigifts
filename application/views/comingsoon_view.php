<!doctype html>
<html lang="en">
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">

<head>
  <meta charset="utf-8"/>
  <title>TriniGIFTS - Coming Soon</title>
  
  <link rel="stylesheet" type="text/css" href="<?=base_url(). "public/" ?>css/comingsoon/styles.css" media="screen" />
  <meta name="viewport" content="width=device-width, maximun-scale=1.0, initial-scale=1.0"/>
  <!--[if lt IE 9]>
    <script src="js/css3-mediaqueries.js"></script>
  <![endif]-->

  <meta name="author" content="TriniGifts.com"><!-- I think this could read e-Animate -->
  <meta name="description" content="TriniGifts.com provides a central marketplace for businesses, shops and retailers to sell Gift Certificates, provide exclusive Discounts or Coupons, and showcase new products or promotions.">
  <meta name="keywords" content="trinigifts,trinidad giftcards, trinidad loyalty cards, gift cards" />
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow" />  
  <meta name="bingbot" content="index, follow" />
  <meta name="yahoo-verticalcrawler" content="index, follow" />
  <meta name="yahoo! slurp" content="index, follow" />
  <meta name="msnbot" content="index, follow" />
  <meta name="scooter" content="index, follow" />
  <meta name="boitho.com-dc" content="index, follow" />
  <meta name="sohu-search" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1"/> 

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript">
    function thebackground() {
      $('div.background img').css({opacity: 0.0});
      $('div.background img:first').css({opacity: 1.0});
      setInterval('change()',5000);
    }

    function change() {
      var current = ($('div.background img.show')? $('div.background img.show') : $('div.background img:first'));
      if ( current.length == 0 ) current = $('div.background img:first');
      var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div.background img:first') :current.next()) : $('div.background img:first'));
      next.css({opacity: 0.0})
      .addClass('show')
      .animate({opacity: 1.0}, 2000);
      current.animate({opacity: 0.0}, 2000)
      .removeClass('show');
    };

    $(document).ready(function() {
      thebackground();  
      $('div.background').fadeIn(2000); // works for all the browsers other than IE
      $('div.background img').fadeIn(2000); // IE tweak
    });
  </script>
</head>
  <body>
    <div class="top">
      <div class="container">
        <h1>Trini<span>GIFTS</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed neque et augue placerat consectetur. Fusce sodales est vel risus pellentesque tristique. Phasellus consequat laoreet magna non convallis.</p>
        <p>Enter email address below to recieve a notification when the site is officially launched.</p>        
        <form id="form" action="insert.php" method="post">
          <input id="email" type="email" name="email" autocomplete="off" required="required">
          <input type="submit" value="Send" id="submit">
        </form>
        <div><p id="msg"></p></div>
      </div>

      <div class="ban">
        <div class="left">
          <h6>Trini<span>GIFTS</span></h6>
        </div>    
        <div class="right">
          <ul>
            <li><a class="facebook" href="https://www.facebook.com/Trinigifts">Facebook</a></li>
            <li><a class="twitter" href="https://twitter.com/TriniGifts">Twitter</a></li>
            <li><a class="contactus" href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="clear"></div>
      </div>  
    </div>

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="js/insert.js"></script>
  </body>
</html>
