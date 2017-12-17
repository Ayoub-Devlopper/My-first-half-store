<!DOCTYPE htmL>
<html>
<head>
    <link rel="stylesheet" href="vars/that.css"/>
    <link rel="stylesheet" href="right_fonts/stylesheet.css"/>
    <?php
    $doc_title="espace of admin";
    $doc_icon="";
    include("doc.php"); ?>
    
    </head>
    <body>
<?php
 
$id_mg=(int)$_GET['im_id'];
$co=mysqli_connect("localhost","root","rootroot","bob");
$sqli1="SELECT * FROM gallery WHERE id=$id_mg";
$qu=mysqli_query($co,$sqli1);
while($row=mysqli_fetch_array($qu,MYSQLI_ASSOC)){
    echo "<img src='dmn/img.php?im_id=".$row['id']."' class='myimg'/>";
    ?>
        <div class="right">
        <h1><?php echo $row['name'];?></h1>
            <p><span>Price : </span><?php echo $row['price'];?> $
            </p>
            <p>Descreption :</p>
            <p class="desc"><?php echo $row['descr'];?></p>
            <p><img style="margin-bottom: -14px;margin-right: 8px;" src="vars/png/t%C3%A9l%C3%A9chargement%20(7).png" width="33">people like it<?php echo $row['like'];?></p>
           
        <form action="that_img.php" method="post">
            <input type="hidden" name="<?php $row['id']; ?>"/>
                <input name="sub" class="order" type="submit" value="Order Now!" title="Order now and weat a little-time to get our requast"/>
            </form>
            <div class="otherd">
            <i>onther Designs</i><br>
        <?php
    $type=$row['type'];
}
        $sqli2="SELECT * FROM gallery WHERE type='$type' order by id DESC limit 0,5";
$qu2=mysqli_query($co,$sqli2);
while($rows=mysqli_fetch_array($qu2,MYSQLI_ASSOC)){
    echo "<a href='that_img.php?im_id=".$rows['id']."'><img src='dmn/img.php?im_id=".$rows['id']."' class='myimg-lit'/></a>";
}
        
?> 
            <?php
            /*
require_once 'like/int.php';
$like= $db->query("
    SELECT * FROM gallery
");

while($rows= $like->fetch_object()){
    $likes[] = $rows;
}*/
//echo '<pre>',print_r($likes,true),'</pre>' ;UPDATE `gallery` SET `name` = 'AZERTY uoi', `price` = '12', `descr` = 'TREZ' WHERE `gallery`.`id` = 3; 
//            $echo = (md5("mohamad"));echo $echo."<br>". md5($echo);
            
?>
            </div>
            </div>
    </body>
</html>