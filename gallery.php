<html>
<head>
    <link rel="stylesheet" href="vars/fco.css"/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="right_fonts/stylesheet.css"/>
    <?php
    $doc_title="espace of admin";
    include("doc.php"); ?>
    
    </head>
    <body>
    
        <style type="text/css">
            .activei{
                border-bottom: 2px solid orange;
            }
            .gallery img{
                height: auto !important;
            }
    </style>
         
        <script>
function openprduct(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontento");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" activei", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " activei";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaul").click();
</script>
     <div class="gallery">
        <h1 style="font-family:\'changaextralight\' ;letter-spacing: 2.8px;">Latest Designs </h1>
         <table class="type">
<td><a href="javascript:void(0)" class="tablink activei" onclick="openprduct(event, &#39;all&#39;)" id="default">all</a></td>
<td><a  href="javascript:void(0)" class="tablink" onclick="openprduct(event, &#39;ts&#39;)">T-short</a></td>
<td><a  href="javascript:void(0)" class="tablink" onclick="openprduct(event, &#39;cup&#39;)">Cup</a></td>
<td><a  href="javascript:void(0)" class="tablink" onclick="openprduct(event, &#39;unt&#39;)">awani</a></td>
<td><a  href="javascript:void(0)" class="tablink" onclick="openprduct(event, &#39;other&#39;)">Other</a></td></table>
         
<div class="rowi tabcontento" id="all" style="display: block;">
    <?php $where=" "; $targetpage = "index.php"; include('configi.php');  ?></div>  
         
<div class="rowi tabcontento" id="ts" style="display: none;">
    <?php $where=" WHERE type='t-s' "; $targetpage = "gallery.php"; include('configi.php');  ?></div>
         
<div class="rowi tabcontento" id="cup" style="display: none;">
    <?php $where=" WHERE type='cup' "; $targetpage = "gallery.php"; include('configi.php');  ?></div>
         
<div class="rowi tabcontento" id="unt" style="display: none;">
    <?php $where=" WHERE type='ut' "; $targetpage = "gallery.php"; include('configi.php');
    ?></div>
         
<div class="rowi tabcontento" id="other" style="display: none;"><?php $where=" WHERE type='oth' "; $targetpage="gallery.php" ;include('configi.php');  ?></div>
         
          <div style="clear:both"></div>
<!--<div class="display-gall"><a href="gallery.php" style="float: right;text-decoration: none;color: azure;">Show More in Gallery... </a></div>
	-->

    </div>

              <script>/*
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();*/
</script>
    </body>
</html>

	
