<?php
 session_start();
?>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <title>
    codelibrary
  </title>
</head>
<body>
<nav>
  <ul>
    <li><a href="mainpage.php">Home</li>
    <li><a href="addcode.php">Add code</li>
    <li><a href="#">Report error</li>
    <li><a href="requestissue.php">Request issue</li>
    <li><a href="#">Contact</li>
    <li><form method="POST">
      <input type="text" name="searchbox" size="50" placeholder="search here.."
      style="font-size:16">
      <button type="submit" name="submitsearch"
      style="font-size:16">search</button>
    </form></li>
  </ul>
</nav>
<br>
  <!-- <form method="POST">
    <input type="text" name="searchbox" size="50" placeholder="search here.."
    style="font-size:16">
    <button type="submit" name="submitsearch"
    style="font-size:16">search</button>
  </form> -->
<div class="addcodebox">
  <form method="POST">
    <input type="text" name="titleofcode" size="29" placeholder="title..."
    style="font-size:22;
    border:1.5px solid grey;">
    <input type="text" name="codinglanguage" size="16" placeholder="language..."
    style="font-size:22;
    border:1.5px solid grey;"><br><br>
    <textarea name="actualcode" rows="15" cols="50" placeholder="write your code here.."
    style="font-size:22;
    border:1.5px solid grey;"></textarea><br><br>
    <textarea name="codedescription" rows="7" cols="50" placeholder="write your code description here..."
    style="font-size:22;
    border:1.5px solid grey;"></textarea><br><br>
    <button class="addcodebutton" type="submit" name="addcodebutton"
    style="font-size:22">addcode</button>
  </form>
</div>
 <?php
    include_once 'dbh.php';
    if(isset($_POST['addcodebutton']))
   {
      $userid=$_SESSION['userid'];
      $codetitle=$_POST['titleofcode'];
      $codedescription=$_POST['codedescription'];
      $code=mysqli_real_escape_string($conn,$_POST['actualcode']);
      $coderating=0;
      $codinglanguage=$_POST['codinglanguage'];
      if(!empty($userid) && !empty($codetitle) && !empty($codedescription)  && !empty($code)
          && !empty($codinglanguage))
     {
       $sql="INSERT into codetable(userid,codetitle,codedescription,code,coderating,codinglanguage)
            values('$userid','$codetitle','$codedescription','$code','$coderating','$codinglanguage');";
            mysqli_query($conn,$sql);
            header("location:redirect.php");
     }else{
       echo "All fields are compulsory";
     }
   }
 ?>
</body>
</html>
