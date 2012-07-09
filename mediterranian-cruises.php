<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Serts Yachting, Mediterranian Gulet Sailing Holidays</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
<script type="text/javascript">

function slideSwitch() {
    var $active = $('#slideshow a.active');

    if ( $active.length == 0 ) $active = $('#slideshow a:last');

        var $next =  $active.next().length ? $active.next()
        : $('#slideshow a:first');

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

<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include("header.php"); ?>
<div style="clear:both;"></div>
<div id="content">
<div style="border:1px solid #efefef;"/>
<iframe width="960" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="http://maps.google.co.uk/?ie=UTF8&amp;ll=36.780692,28.958588&amp;spn=0.779831,1.454315&amp;t=m&amp;z=10&amp;vpsrc=6&amp;output=embed"></iframe><br /><small><a href="http://maps.google.co.uk/?ie=UTF8&amp;ll=36.780692,28.958588&amp;spn=0.779831,1.454315&amp;t=m&amp;z=10&amp;vpsrc=6&amp;source=embed" style="color:#0000FF;text-align:left; ">View Larger Map</a></small>
</div>

<div class="infobox" style="background-color:#fff;">


<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td>
      <h1><img src="grx/map.jpg" width="549" height="228" alt="Turkish History" style="float:right; margin:5px;">Historical Cruises </h1>
      <p>Turkey is a unique country, often referred to as the place where east meets west. Its 3000 year old history spans the ancient Greek, Persian, Roman and Byzantine empires which have all contributed to the uniqueness and beauty of this vast country. </p>
      <p>The beautiful architecture of this country can be seen in its mosques, temples, amphitheatres, and traditional villages. </p>
      <p><br>
        There are more than 40,000 historical sites in Turkey; of these, only  300 have been excavated thus far. There are more Greek classical remains in good condition than there are in Greece, and more good Roman classical remains in Turkey than there are in Italy!</p>
      <p>        It's food is a fusion of tastes, although often described as a Mediterranean menu the influence of the east is evident in it's dishes.</p>
      <h2>        Geography of mugla region</h2>
      <p>        Three percent of Turkey lies in Europe; with the other ninety seven percent  (Anatolia) lies in Asia. </p>
      <p>Turkey is bordered on three sides by seas: to the north by the Black Sea, in the west by the Aegean Sea, and on the south by the Mediterranean Sea. Eight countries border Turkey: Bulgaria to the northwest; Greece to the west; Georgia to the northeast; Armenia, Azerbaijan  and Iran to the east; and Iraq and Syria to the southeast</p></td>
    </tr>
  </table>
</div>
<div class="infobox">

  <table width="100%" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td colspan="6">  <h1>Photo Gallery</h1></td>
      </tr>
    <tr>
      <td><img src="old/oz.png" width="150" height="98"></td>
      <td><img src="old/table2.png" width="150" height="98"></td>
      <td><img src="old/karen.png" width="150" height="98"></td>
      <td><img src="old/mainsale.png" width="150" height="98"></td>
      <td><img src="old/burn-karen.png" width="150" height="98"></td>
      <td><img src="old/table.png" width="150" height="98"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td align="right"><a href="http://www.facebook.com/pages/Serts-Yachting/158652700888125" target="_blank"><img src="grx/facebook.jpg" width="133" height="40" border="0"></a></td>
    </tr>
  </table>
</div>
</div>








<div style="clear:both;"></div>
<div id="info" style="background-image:url(grx/top-bkg.jpg); background-repeat:no-repeat;">
  <p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</body>
</html>
