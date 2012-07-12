<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>About sailing holidays in Turkey</title>

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

<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include("header.php"); ?>

<div style="clear:both;"></div>
<div id="content">

<div class="infobox">
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td><h1>About Serts Yachting</h1></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="68%" align="left" valign="top"><div>
      <p><span id="internal-source-marker_0.6878857291303575">We are an English / Turkish family run business. Our Gulet &lsquo;His&rsquo; (pronounced 'hiss', which in Turkish means good feeling), is a traditional, wooden, two masted sailing yacht. She is 18 metres in length, fully air conditioned with six en-suite double cabins.</span></p>
      <p><span> There is a large decking area perfect for soaking up the Mediterranean sun and a  spacious shaded seating area in which to enjoy cocktails, nibbles and that all important afternoon siesta.</span></p>
    </div></td>
    <td width="16%"><img src="content/img/karen.png" width="150" height="98"></td>
    <td width="16%"><img src="content/img/mainsale.png" width="150" height="98"></td>
  </tr>
  <tr>
    <td align="left" valign="top"><h2>&nbsp;</h2></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><div>
      <div>
        <h2>          Boat Information        </h2>
        <div dir="ltr">
          <table width="100%" cellpadding="5" cellspacing="5">
            <colgroup>
              <col width="169">
              <col width="80">
              </colgroup>
            <tbody>
              <tr>
                <td><strong>LENGTH</strong></td>
                <td><strong>18 Meters</strong></td>
              </tr>
              <tr>
                <td><strong>MASTS</strong></td>
                <td><strong>2</strong></td>
              </tr>
              <tr>
                <td><strong>ENGINE</strong></td>
                <td><strong>165hp Ford</strong></td>
              </tr>
              <tr>
                <td><strong>AIR CON</strong></td>
                <td><strong>Full air con</strong></td>
              </tr>
              <tr>
                <td><strong>GENERATOR</strong></td>
                <td><strong>220volts</strong></td>
              </tr>
              <tr>
                <td><strong>FRESH WATER TANK CAPACITY</strong></td>
                <td><strong>2 tonnes </strong></td>
              </tr>
              <tr>
                <td><strong>WASTE WATER TANK CAPACITY</strong></td>
                <td><strong>272 gallons </strong></td>
              </tr>
            </tbody>
          </table>
    </div>
      </div>
<p><br>
      </p>
    </div></td>
    <td align="left" valign="top"><img src="content/img/burn-karen.png" width="150" height="98"><br>
      <br></td>
    <td align="center" valign="top"><img src="content/img/oz.png" width="150" height="98"><br>
      <br>      <a href="http://www.facebook.com/pages/Serts-Yachting/158652700888125" target="_blank"><img src="grx/facebook.jpg" width="133" height="40" border="0"></a></td>
  </tr>
</table>
<div style="clear:both;"></div>
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