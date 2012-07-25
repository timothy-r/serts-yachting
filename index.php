<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Serts Yachting, Mediterranian Gulet Sailing Holidays</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
<script type="text/javascript">

function slideSwitch() {
    var $active = $('#slideshow a.active');

    if ( $active.length == 0 ) {
		$active = $('#slideshow a:last');
	}

    var $next =  $active.next().length ? $active.next() : $('#slideshow a:first');

    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 5000 );
});

</script>

<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include("header.php"); ?>
<div style="clear:both;"></div>
<div id="content">
<div id="slideshow">

<a href="" onClick="javascript: return false;"><img src="img/home2.jpg" alt=""border="0" /></a>
<a href="" onClick="javascript: return false;"><img src="img/home3.jpg" alt=""border="0" /></a>
<a href="" onClick="javascript: return false;"><img src="img/home1.jpg" alt=""border="0" /></a>
</div>
<div class="infobox">
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="68%" align="left" valign="top">
      <h1>Sail the Mediterranian </h1>
      <p>Serts Yachting offers luxurious blue cruises in the Göcek region of Turkey.</p>
      <p>The coastline of the southwest corner of Turkey is one of the most beautiful cruising grounds in the world, an environment rich in both natural and historical sites.</p>
  <p>We will sail you and your guests through clear unpolluted waters to beautiful secluded bays and idyllic anchorages; you’ll visit blue lagoons, ruins of ancient baths, traditional Turkish villages and historical sites; many not accessible by road.</p>
      <p>Perhaps shopping in old bazaars, dining along the coast and dancing under the stars is more your thing, if so your captain will happily guide you in the right direction. You can also arrange your own itinerary with freedom and guidance from our captain and crew.</p>
      <p>Your traditional wooden two masted yacht is 18 metres in length with a spacious decking area perfect for soaking up the Mediterranian sun with a cooling ocean breeze; a  spacious shaded seating area in which to enjoy cocktails, nibbles and that all important afternoon siesta.</p>
      <p>If spending your days swimming in warm seas,  being pampered by your crew, followed by nights anchored in protected coves under a brilliant Milky Way is the holiday you have been dreaming of then please get in touch.</p></td>
    <td width="32%" align="left" valign="top">
  <iframe width="300" height="290" src="http://www.youtube.com/embed/lbbm5qakEg8" frameborder="0" allowfullscreen></iframe>
    <br>
<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=290&amp;wkst=1&amp;bgcolor=%23f9f9f9&amp;src=eprcoocrb55o73fk05enq51o5k%40group.calendar.google.com&amp;color=%23125A12&amp;ctz=Europe%2FIstanbul" style=" border-width:0 " width="300" height="290" frameborder="0" scrolling="no"></iframe>    </td>
  </tr>
  </table>
</div>
<div class="infobox">

  <table width="100%" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td colspan="6">  <h1>Photo Gallery</h1></td>
      </tr>
    <tr>
      <td><a target="_blank" href="https://www.facebook.com/media/set/?set=a.166410883445640.44196.158652700888125&type=3">
      	<img src="content/img/oz.png" width="150" height="98" border="0">
      	</a>
      	</td>
      <td>
      	<a target="_blank"  href="https://www.facebook.com/media/set/?set=a.166410883445640.44196.158652700888125&type=3">
      	<img src="content/img/table2.png" width="150" height="98" border="0">
      	</a>
      
      <td>
      	<a target="_blank"  href="https://www.facebook.com/media/set/?set=a.166410883445640.44196.158652700888125&type=3">
      	<img src="content/img/karen.png" width="150" height="98" border="0">
      	</a>
    
      <td>
      	<a  target="_blank" href="https://www.facebook.com/media/set/?set=a.166410883445640.44196.158652700888125&type=3">
      	<img src="content/img/mainsale.png" width="150" height="98" border="0">
      	</a>

      <td>
      	<a  target="_blank" href="https://www.facebook.com/media/set/?set=a.166410883445640.44196.158652700888125&type=3">
      	<img src="content/img/burn-karen.png" width="150" height="98" border="0">
      	</a>

      <td>
      	<a  target="_blank" href="https://www.facebook.com/media/set/?set=a.166410883445640.44196.158652700888125&type=3">
      	<img src="content/img/table.png" width="150" height="98" border="0">
      	</a>
    
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td align="right"><a href="http://www.facebook.com/pages/Serts-Yachting/158652700888125" target="_blank"><img src="img/facebook.jpg" width="133" height="40" border="0"></a></td>
    </tr>
  </table>
</div>
</div>

<div style="clear:both;"></div>
<div id="info" style="background-image:url(img/top-bkg.jpg); background-repeat:no-repeat;"></div>
</body>
</html>
