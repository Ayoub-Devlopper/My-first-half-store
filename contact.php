<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="vars/fco.css">
    <link rel="stylesheet" href="right_fonts/stylesheet.css">
    
    <?php
    $doc_title="espace of admin";
    include("doc.php"); ?>
    
    </head>
    <title>Contact-us</title>
    <body>
        
        
    <?php
        if($_POST['submit']){
    //////
$conect=mysqli_connect("localhost","root","rootroot","bob");
  
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$package=$_POST['package'];
$title=$_POST['title'];
$msg=$_POST['msg'];

            
        $sqli="INSERT INTO contact(name,phone,email,package,title,msg) VALUES ('$name','$phone','$email','$package','$title','$msg')";
//     $sqli="INSERT INTO gallery(name,price,desc,type) VALUES ('$name','$price','$desc','$type')";
        $query=mysqli_query($conect,$sqli);
    
//        mysqli_close($conect);
    if($query){
        echo "query is ok";
    }else{
        echo "query is not ok";
    }

}else{
        ?>
        <div class="contact" style="position:fixed;padding:100px;width: 100%;height: 100%;top:0;left:0;right:0;bottom:0;">
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
        </select>
        <br> 
        
        <div style="position: absolute;float: right;top: 39%;width: 600px;right: 0px">
        <input style="" name="title" type="text" placeholder="Title of Msg..." onkeyup=""><br>
<textarea name="msg" type="text" style="resize: vertical;padding: 19px;font-size: 18px;border-radius: 13px;height: 300px;width: 55%" placeholder="Votre message ..." onkeyup=""></textarea>
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
        <?php    
        
        }
        ?>
    </body>
</html>