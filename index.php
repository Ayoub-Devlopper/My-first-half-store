<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="vars/fco.css">
    <link rel="stylesheet" href="right_fonts/stylesheet.css">
<!--    <link rel="stylesheet" href="vars/gall.css"/>-->
    <?php
    $doc_title="espace of admin";
    include("doc.php"); ?>
    
    <link rel="stylesheet" href="style.css"/>
    
</head>
<body>
    <!--
    <div class="nav"><img src="vars/newlogo.png" style="float:left;width: 140px"> <a>CONTACT-US &nbsp;</a><a href="#">SERVICES</a><a href="#">GALLERY</a><a href="#">HOME</a></div>-->
    
    
<!--    /////////////////////////////////////////-->
    <div class="cust-header">
    <h1>Man Women Kid whatever, An owesome T-shurt is all what you need. </h1>
    <div class="font-left">
        <p>
        
        &nbsp;&nbsp;What have you been ,An owesome T-shurt is all what you need h have you been ,An owesome T-shurt is all what you ne have you been ,An owesome T-shurt is all what you need   have you been ,An owesome T-shurt is all what you need edave you been ,An owesome T-shurt is all what you owesome T-shurt is a ll need.
        </p></div>
    </div>
    
    
   <!--<br><br><br><br> --><br><br><br><br><br>
    <header>
    
    <div class="header-one">
        <div class="header-two"><img src="vars/tablesetting2.jpg" width="100%" height="100%"/></div>
     <div class="header-nav">
<a href="javascript:void(0)" class="tablinks active" onclick="openCity(event, &#39;London&#39;)"  id="defaultOpen">Cups</a>
<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, &#39;Paris&#39;)">T-shurt</a>
<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, &#39;Tokyo&#39;)">Other</a>
        <div class="all-rows">
        <div class="rows tabcontent" id="London" style="display: block;">
            <h1>Magic Cups Are good for happy moment </h1>
            <p>Delight and blow your prospects away with visually-enticing infographics, which can be presented on slideshows with our Presentation Mode.</p> 
            <img src="vars/hand-painted-blue-men-s-clothing_23-2147522288.jpg"><img src="vars/1024px-Baabe.JPG" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="start-but" style="position:absolute" href="gallery.php?product=cup">Get it Now!</a>
            </div>
        <div class="rows tabcontent" id="Paris" style="display:none">
            <h1>An Custom T-Shurt is GOOD for You</h1>
            <p>Delight and blow your prospects away with visually-enticing infographics, which can be presented on slideshows with our Presentation Mode.</p>
            <img src="vars/09.jpg" width="120">
            <img src="vars/images%20(13).jpg" width="120"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="start-but" style="position:absolute" href="gallery.php?product=t-s">Get Your  Now!</a>
            </div>
        <div class="rows tabcontent" id="Tokyo" style="display:none">
            <h1>Anythink what you want to make-up it</h1>
            <p>:;dkfnd sklnff kldsn </p>
            <img src="" width="120"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="start-but" style="position:absolute" href="gallery.php?product=ather">Get Your  Now!</a>
            </div>
 <!--        
<div id="London" class="tabcontent" style="display: block;">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent" style="display: none;">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent" style="display: none;">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>-->
         </div>
        </div>
        
    </div>
        
        <script>
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
document.getElementById("defaultOpen").click();
</script>
<!--
        <div class="div5"></div>
        <div class="div4" style="
    background: #018aff;
    width: 100%;
    height: 120px;
    transform-origin: left;
    transform: rotate(69deg) skew(-11deg);
    z-index: 1;
    top: 178px;
"></div>
        <div class="div3"></div>
        <div class= "div2"></div>
        <div class="div1"></div>-->
<!--
        <div class="header-left"><h1>DO YOU WANT to Get an Awesome <span style="white-space: nowrap">T-short</span> To Your Friends ...</h1><hr>
        <p style="text-align: justify;font-size: 20px"> &nbsp;
           Now ,Internet is the Most media importante.And the best way to marketing <font style="font-weight: 600;text-decoration: underline;color: #fff">Any project </font>That's why we offer our Services to you to become successful.</p> 
        <button href="#down" class="start-but" style="margin: 0">Get It Now!</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button href="#down" class="tour-but" style="margin: 0">Let's take a tour</button>
        </div>
-->
<!--<div class="center"> <h1 style="font-size: 42px;color: beige">This is new feature</h1><hr style="margin-top: -26px"><p style="text-align: justify"> &nbsp;
           Now ,Internet is the Most media importante.And the best way to marketing <font style="font-weight: 600;text-decoration: underline;color: #fff">Any project </font><br>That's why we offer our Services to you to become successful.</p>
        <button class="start-but" style="margin: 0">Lets take atour</button>
        </div>-->
    
    </header>
       <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("sldot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length} ;
  for (i = 0; i < slides.length; i++) {
     slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].classList.remove("slideractive");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].classList.add("slideractive");
}

    </script>
    <div class="slideshow-container">
  <div class="mySlides fade" style="display:block">
    <div class="numbertext">1 / 3</div>
    <img src="vars/11488971127335-Roadster-Men-Pack-of-2-T-shirts-7891488971127204-1_mini.jpg" style="width:40%" style="float:left;" height="550">
   <div class="contr-text"> <div class="text"><h1>Caption Text</h1><hr class="hr"></div>
      </div>
  </div>

  <div class="mySlides fade" style="display:none">
    <div class="numbertext">2 / 3</div>
    <img src="vars/mosaic-background-1.jpg" style="width:40%" style="float:left;" height="550">
    <div class="text"><h1>hhdhdh kdpcj</h1><hr class="hr"></div>
  </div>

  <div class="mySlides fade" style="display:none">
    <div class="numbertext">3 / 3</div>
    <img src="vars/1024px-Breege-Denkmal-110511-053.JPG" height="550" style="width:40%" style="float:left;">
    <div class="text"><h1>Caption Three</h1><hr class="hr"></div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
             

</div>
<img src="vars/Nouvel%2520onglet_files/images654.jpg">
<!--
<div style="text-align:center;">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
-->
     <div class="loog">
        <div>+13<br>Projects Done</div><div>+89<br>Meetings</div><div>+43<br>Happy Clients</div><div>+14<br>Company Give confident</div>
    </div>
<!--
    <h1 style="text-align: center;text"><span  class="colori4">Why </span><span class="colori2"> Choose </span><span class="colori1">AJAXINE  </span><span class="colori3">?</span>   </h1>
    <div class="define contr">
    <img src="vars/newlogo.png" width="344" height="244" style="float: left">
        
        <p >
        lorem about your team /societe lorem about your team /societe lorem about your team /societelorem about your team /societe lorem about your team /societe  lorem about your team /societe...
        </p>
    </div>
-->
  <!--   <a href="javascript:void(0)" class="tablinks active" onclick="openCity(event, &#39;London&#39;)" id="defaultOpen">Cups</a>
<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, &#39;Paris&#39;)">T-shurt</a>
<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, &#39;Tokyo&#39;)">Other</a>-->
     
          
<!--<img src="dmn/img.php?im_id=<?=$dd;?>">-->

	
        <style type="text/css">
            .activei{
                border-bottom: 2px solid orange;
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
    <?php $where=" WHERE type='t-s' "; $targetpage = "index.php"; include('configi.php');  ?></div>
         
<div class="rowi tabcontento" id="cup" style="display: none;">
    <?php $where=" WHERE type='cup' "; $targetpage = "index.php"; include('configi.php');  ?></div>
         
<div class="rowi tabcontento" id="unt" style="display: none;">
    <?php $where=" WHERE type='ut' "; $targetpage = "index.php"; include('configi.php');
    ?></div>
         
<div class="rowi tabcontento" id="other" style="display: none;"><?php $where=" WHERE type='oth' "; $targetpage="index.php" ;include('configi.php');  ?></div>
          <div style="clear:both"></div><div class="display-gall"><a href="gallery.php" style="float: right;text-decoration: none;color: azure;">Show More in Gallery... </a></div>
	

    </div>
         
   
      

   
<!--
    <div class="caract contr">
        <h1></h1>
        <div><img src="vars/png/piggy-bank-1.png" width="180" height='180'><h2>Save Your Mony</h2><p>Dont spend your mony
         Fco-uS is the best solution for you to start your project(small,or big)    </p></div>
        <div><img src="vars/png/responsive1.png" width="200" height='180'><h2>Responsive Design</h2><p>fco-us is brilliantly responsive with any template, effect, options you choose. No matter what device people access your site from, the slider will look consistently perfect.It will be created responsively and will work on all different screens such as Android, iPad, computer, etc.</p></div>
        <div><img src="vars/png/settings.png" width="180" height='180'><h2>Highly Customizable</h2><p>Everythink parameter can be easily customized to fit your web site design and your needs. Enjoy features like: navigation control text descriptions, hide/show controls or stop on mouseover, image and thumbnail size, slide delay, speed and much more!</p></div>
        <div><img src="vars/png/search.png" width="180" height='180'><h2> SEO Friendlly and faster to Find</h2><p>it easy for search engines to efficiently crawl the site, while still looking really cool. This gives you the ability to not only please the search engines from sites like Google, but your site will be pleasing to customers as well, all at the same time.</p></div>
        <div><img src="vars/png/stopwatch.png" width="180" height='180'><h2>Fast to Display</h2><p>Everythink parameter can be easily customized to fit your web site design and your needs. Enjoy features like: navigation control text descriptions, hide/show controls or stop on mouseover, image and thumbnail size, slide delay, speed and much more!</p></div>
        <div><img src="vars/png/rocket.png" width="180" height='180'><h2>Strong Script</h2><p>Everythink parameter can be easily customized to fit your web site design and your needs. Enjoy features like: navigation control text descriptions, hide/show controls or stop on mouseover, image and thumbnail size, slide delay, speed and much more!</p></div>
        
    </div>
-->
    <div style="position: relative;overflow: hidden;"><h1 style="margin: 30px auto;width: 30%;font-family: cursive">Don't Be Wrong!</h1>
    <div class="contr why">
        <h1 style="color: #d4a56d;border: 1px solid">Our PRICIPALES  </h1>
     <ul>
 
 <li>&nbsp; Experience</li>
 <li>&nbsp;Creativity</li>
 <li>&nbsp;Quality</li>
 <li>&nbsp;Secretariat</li>
 </ul>
    </div>
        <br><br>
    </div>
 <div class="contr" style="height:auto;background-image:  linear-gradient(to right top, rgb(225, 155, 207), rgb(0, 103, 163));height: 510px">
        <img src="vars/images(368).jfif" width="44%" height="600px" style="float: right;position: relative;filter: blur();top: -56px;right: -20px;border: .4px solid #ccc">
        <div class="center-div">
            <h1>The Package Of Business and Comercial usage</h1>
            
            <i>Be Smart and Get 50 pieces</i><br>
            
            <p style="font-weight: 500">We also offer Our sercvices to the usage commercial or one-clothes by pay less Price ....
                
                <!--
                Everythink parameter can be easily customized to fit your web site design and your needs. Enjoy features like: navigation control text descriptions, hide/show controls or stop on mouseover, image and thumbnail size, slide delay, speed and more -->.</p><button class="start-but" href="get.php">Get now!</button></div>
    
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////////////////////     -->
    
   
    <!--<div class="contr-pad">
    <video style="" width="" height=""  controls>
    <source src="vars/solo_edit.mp4" type="video/mp4">
    </video>
    </div>--><br><br><br><br>
    <div class="users">
       
    
    </div>
    <div class="pricing">
         <h1 style="text-align: center;color: cadetblue;font-family: 'abel';">Pricing</h1><br>
    <div class="in-pricing basic">
        <div style="background: #00ceca">Basic Package</div><ul>
        <li><b>Less</b> Thant <b>10</b> piece</li>
        <li>6$ per piece</li>
        <li>Good Quality</li>
        <li></li>
        <li><button style="background:#00ceca">I am Basic!</button></li>
        </ul>
        </div>
    <div class="in-pricing pro">
        <div style="background: #17af3c;height: 100px;font-size: 53px">Pro Package</div><ul>
        <li><b>More</b> Than <b>10</b> piece</li>
        <li>5$ per piece</li>
        <li>best Quality</li>
        <li><img src="vars/print_package.jpg" id="print-ar"></li>
        <li><button style="background:#17af3c">I am Pro!</button></li>
        </ul>
        </div>
    <div class="in-pricing premium">
        <div style="background: #ded700">PREMIUM Package</div><ul>
<!--        <li><img src="vars/stars.jpg"></li>-->
        <li><b>More</b> Than <b>50</b> piece</li>
        <li><b>4</b>$ per piece</li>
        <li>Super Quality</li>
        <li><img src="vars/print_package.jpg" id="print-ar"></li>
        <li><button style="background:#d4ce02">I am Premium!</button></li>
        </ul>
        </div>
    </div>
    
    <div class="servs contr"><h1 style="border-bottom: 1.6px solid #fff ;padding-bottom: 12px;width: 54%;margin: auto">How to Bay Somethink From Us ?</h1>
        <br>
        <div>4 .<img src="vars/png/like.png" width="180" height='180'>
            <h2> Get YOUR Product <b style="text-decoration: underline;color: #00d08a">  </b></h2>
<p>Get Our Product &#8212;&gt; Enjoy It &#8212;&gt; Be <b style="color: #00c0ff">Happy</b></p></div>
        
        <div>3 .<img src="vars/png/time-passing.png" width="180" height='180'>
            <h2>Wite Few days<b style="text-decoration: underline;color: #00d08a">  </b></h2>
<p>just Wite Some  Time <br>(between 5days to 10days) </p></div>
        <div>2 .<img src="vars/png/chat.png" style="" width="190" height='180'>
            <h2>Contact Us</h2>
<p style="">It's Easy to contact us->send your pics->use phone or email</p></div>
        <div>1 .<img src="vars/png/magic-wand.png" width="180" height='180'>
            <h2>Choose</h2>
<p>Between hunderds of our template, Chouse your own, or send us your style </p></div>
        </div>
    <div class="contact">
       <h1 style=";text-align: center; font-size: 55px;font-family: 'abel';"><!--<img src="vars/png/announcement.png"  width="102">-->CONTACT US</h1>
        <p><!--<img src="vars/png/201553.png" style="float: left;position: relative"/>-->Always AJAXINE on Your Services if You have Some SEGGUTION or some custome order, contact us </p>
    <form action="contact.php" method="post"> 
<input name="name" type="text" placeholder="Votre nom ..." onkeyup="">
        <!--<span id="name"></span>-->
        <br><input name="email" type="email"  placeholder="Votre email ..." onkeyup="">
        <!--<span id="email"></span>-->
        <br> <input name="phone" type="number"  placeholder="Votre phone ..." onkeyup="">
        <!--<span id="phone"></span>-->
        <br>
        <select name="package" style="width: 35%;height: 50px;border-radius: 4px;">
        <option value="not selected">Choose Your Package...</option>
        <option value="pro" style="background: #17af3c;color:white;">I am Pro!</option>
        <option value="basic" style="background: #00ceca;color:white;">I am Basic!</option>
        <option value="premium" style="background: #d4ce02;color:white;">I am Premium!</option>
        </select><i style="font-size:10px;">(optional)</i>
        <br> 
        
        <div style="position: absolute;top: 34%;width: 44%;right: 10px">
        <input style="width:80%" name="title" type="text" placeholder="Title of Msg..." onkeyup=""><br>
<textarea name="msg" type="text" style="resize: vertical;padding: 19px;font-size: 18px;border-radius: 13px;height: 300px;width: 87%;" placeholder="Votre message ..." onkeyup=""></textarea>
            <!--<span id="msg"></span>-->
 
        </div>
        
        <input type="submit" name="submit" value="Make My Day Better" id="subcont"/>
</form>
        <div class="facesmall"><svg class="version" viewBox="0 0 480 520">
            <g>
                <path d="M26.55,302.65 C4.63,311.21 -2.20,345.88 29.49,358.68 C14.87,383.59 22.25,398.89 54.48,407.25 C43.36,416.36 52.20,451.61 83.48,451.61 C79.25,468.00 91.71,495.93 126.54,482.94 C123.09,507.62 155.72,524.39 176.66,498.02 C179.98,517.56 210.61,530.04 229.5,507.62 C246.69,524.49 271.67,520.54 279.95,498.02 C305.14,526.81 335.92,506.14 335.92,482.94 C346.86,493.32 383.09,483.46 375.37,448.53 C399.29,452.21 411.99,430.50 407.51,407.25 C416.11,407.25 442.56,401.69 432.97,358.68 C455.37,353.11 462.73,315.11 432.97,300.44 C436.26,286.30 438,271.59 438,256.5 C438,237.85 435.35,219.80 430.40,202.67 C454.32,152.63 449.37,116.06 387.62,92.56 C397.94,72.67 387.62,36.88 348.21,43.26 C335.92,-13.58 279.95,12.02 272.09,26.41 C261.87,-4.25 209.08,-11.59 191.37,26.41 C176.66,10.83 126.54,10.77 120.87,59.98 C56.84,33.93 43.82,80.96 52.40,101.45 C-29.42,128.91 5.29,189.80 27.07,208.26 C23.10,223.71 21,239.86 21,256.5 C21,272.38 22.92,287.83 26.55,302.65 Z M282.53,351 C277.25,375.58 255.51,394 229.5,394 C203.48,394 181.74,375.58 176.46,351 L282.53,351 Z M400.68,266.86 C400.68,275.29 400.08,283.58 398.91,291.69 C393.90,285.77 386.43,282.01 378.09,282.01 C364.32,282.01 352.92,292.26 351.03,305.58 C346.05,300.39 339.07,297.16 331.33,297.16 C323.11,297.16 315.74,300.81 310.73,306.58 C305.72,300.81 298.34,297.16 290.12,297.16 C281.68,297.16 274.14,301.00 269.12,307.05 C264.11,301.00 256.56,297.16 248.12,297.16 C240.53,297.16 233.66,300.27 228.70,305.30 C223.75,300.27 216.88,297.16 209.29,297.16 C200.85,297.16 193.30,301.00 188.28,307.05 C183.27,301.00 175.72,297.16 167.28,297.16 C159.06,297.16 151.69,300.81 146.68,306.58 C141.66,300.81 134.29,297.16 126.07,297.16 C118.34,297.16 111.35,300.39 106.38,305.58 C104.48,292.26 93.09,282.01 79.31,282.01 C71.70,282.01 64.82,285.14 59.87,290.18 C58.84,282.56 58.31,274.77 58.31,266.86 C58.31,232.60 68.26,200.67 85.41,173.84 C109.56,172.10 140.65,165.07 173.36,153.10 C215.99,137.49 251.14,117.22 269.31,99.36 C269.76,99.46 270.20,99.57 270.64,99.68 C277.66,109.77 289.30,116.37 302.47,116.37 C305.41,116.37 308.27,116.04 311.02,115.42 C364.42,144.57 400.68,201.46 400.68,266.86 Z"></path>
                <ellipse cx="290.06" cy="218" rx="26.50" ry="26.50"></ellipse>
                <ellipse cx="169.93" cy="218" rx="26.50" ry="26.50"></ellipse>
            </g>
            </svg>
    </div>
        
    </div>
    <footer>
        <ul>
        <li><b>jhdbsfdhb</b></li>
            <li>  <a href="">Home</a></li>
            <li><a href="">Gallery</a></li>
            <li><a href="">Teams</a></li>
            <li><a href="designer.htm">About Designer</a></li>
            <li><a href="">Promote your content</a></li>
            <li><a href="">FAQ</a></li>
            <li><a href="">Login</a></li>
            <li><a href="">Sign-up</a> </li>
        </ul>
        <section style="float: right;font-size: 23px">Powered By <a href="https://www.fiverr.com/ayoub_devlopper">AYOUB_Devlopper</a></section>
    </footer>
    
</body></html>