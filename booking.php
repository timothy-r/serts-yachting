<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Sailing Holiday Availability | Serts Yachting</title>

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

<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include("header.php"); ?>
<div style="clear:both;"></div>
<div id="content">
  <div class="infobox">
  <table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="68%" height="39"><h1>Mediterranian Cruise availability</h1></td>
    <td width="32%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top"><iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=500&amp;wkst=1&amp;bgcolor=%23f9f9f9&amp;src=eprcoocrb55o73fk05enq51o5k%40group.calendar.google.com&amp;color=%23125A12&amp;ctz=Europe%2FIstanbul" style=" border-width:0 " width="920" height="500" frameborder="0" scrolling="no"></iframe></td>
    
    </td>
    </tr>
  <tr>
    <td colspan="2" align="left" valign="top">&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top"><p><strong>Destination gocek and fethiye bay </strong></p>
      <p>To book your cruise holiday you need to provide a deposit of a third of the total value. Please contact us for information on how to pay.</p>
      <table width="100%" border="0" cellspacing="5" cellpadding="5">
        <tr>
          <td width="53%"> <p> <strong>Mid season; beginning of may, end of june</strong>
              <br>
              £2400 (&euro;2800) per week (deposit £800)<br>
              daily price £375  (&euro;440)</p></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="5" cellpadding="5">
        <tr>
          <td width="53%"><strong>High season; beginning of July- August September 15th </strong><br>
            weekly price; £2900  (&euro;3380) per week (deposit £950)<br>
Daily price £450  (&euro;525))</td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="5" cellpadding="5">
        <tr>
          <td width="53%"><strong>Mid season; September 15th,-October 15th</strong><br>
            Weekly price; £2400  (&euro;2800) per week (deposit £800)<br>
            Daily price £375  (&euro;440)</td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="5" cellpadding="5">
        <tr>
          <td width="53%"><strong>Low season October 15th-November 15th</strong><br>
Weekly Price £2000  (&euro;2330) per week (deposit £650)<br>
Daily price £325 (&euro;380)</td>
        </tr>
      </table>
      <p> Other routes such as Marmaris,Bodrum,Kas,Antalya etc.will be priced according to distance.</p></td>
    <td>  
  </tr>
  </table>
</div>
</div>

<div style="clear:both;"></div>
<div id="info" style="background-image:url(img/top-bkg.jpg); background-repeat:no-repeat;">
  <p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</body>
</html>
