<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Book your Turkish Sailing Holiday </title>

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
    <td colspan="2"><h1>Contact Information</h1></td>
    </tr>
  <tr>
    <td width="49%" align="left" valign="top"><p>&nbsp;</p>
      <p>Send an E-mail to : <a href="mailto:info@sertsyachting.com">info@sertsyachting.com</a></p>
      <p>Message us on <a href="http://www.facebook.com/pages/Serts-Yachting/158652700888125">Facebook</a></p>
      <h2><strong>Call (UK) : 0044 7926 332 980</strong></h2>
       <h2><strong>Call (Turkey) : 0090 542 206 9810</strong></h2></td>
    <td width="51%" align="left" valign="top"><table border="0" cellspacing="2" cellpadding="2">
      <tr>
        <td><img src="img/oz.png" width="150" height="98"></td>
        <td><img src="old/table2.png" width="150" height="98"></td>
        <td><img src="img/karen.png" width="150" height="98"></td>
      </tr>
      <tr>
        <td><img src="old/mainsale.png" width="150" height="98"></td>
        <td><img src="old/burn-karen.png" width="150" height="98"></td>
        <td><img src="old/table.png" width="150" height="98"></td>
        </tr>
    </table>      <p><a href="http://www.facebook.com/pages/Serts-Yachting/158652700888125" target="_blank"><img src="grx/facebook.jpg" width="133" height="40" border="0"></a></p></td>
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