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
    <li><a href="#">Home</a></li>
    <li><a href="addcode.php">Add code</a></li>
    <li><a href="#">Report error</a></li>
    <li><a href="requestissue.php">Request issue</a></li>
    <li><a href="#">Contact</a></li>
    <li><form method="POST">
      <input type="text" name="searchbox" size="50" placeholder="search here.."
      style="font-size:16">
      <button type="submit" name="searchbutton"
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

 <?php
  include_once 'dbh.php';
  if(isset($_POST['searchbutton']))
  {
   $search = $_POST['searchbox'];
   if(!empty($search))
   {
     $words = explode(' ',$search);
     $no_of_words = count($words);
     $data = array();
     foreach($words as $word)
     {
       if($word!="in" && $word!="a" && $word!="using")
       {
        $sql = "SELECT * from codetable where codetitle like '%$word%' ;";
        $result = mysqli_query($conn,$sql);

        $numofrow = mysqli_num_rows($result);
        if($numofrow>0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
             $codeid = $row['codeid'];
            if(!in_array($codeid,$data))
             {
               $coderid = $row['userid'];
               $sql1 = "SELECT * from usertable where userid='$coderid' ";
               $result1 = mysqli_query($conn,$sql1);
               $row1 = mysqli_fetch_assoc($result1);
         ?>
         <form method="POST" action="mainpageversion2.php?id=<?php echo $row['codeid'] ?>">
               <div class='searchresult'>
                  <h2><?php echo $row['codetitle']; ?></h2>
                  <p style="color: black;"> language: <?php echo $row['codinglanguage'] ?></p>
                  <p style="color: black;"> rating: <?php echo $row['coderating'] ?></p>
                  <p><?php echo $row['codedescription'] ?></p>
                  <pre><?php echo $row['code'] ?></pre>
                  <p>Rate this code:<input type="number" name="ratingofcode" maxlength="1" value="1"
                  style="font-size:16; width:50px;"></p>
                  <button type="submit" name="submitcoderating"
                  style="font-size:16">submit</button>
                </div>
                <!-- <div class='searchresult'>
                  <p>Rate this code:<input type="number" name="ratingofcode" maxlength="1" value="1"
                  style="font-size:16; width:50px;"></p>
                  <button type="submit" name="submitcoderating"
                  style="font-size:16">submit</button>
                </div> -->
         </form>
     <?php
          $data[] = $row['codeid'];
               }
          }
        }
       }
     }
  }else{
    echo "empty searches are not allowed";
  }
}
 ?>
 <?php
  //the below php code is to update the coderating of a given code.
   include_once 'dbh.php';
   if(isset($_POST['submitcoderating']))
   {

     $coderating = $_POST["ratingofcode"];
     $codeid=$_GET["id"];
     $userid=$_SESSION["userid"];
     $check=0;
     $sql = "SELECT * from coderatingtable;";
     $result = mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($result))
      {
         if($codeid==$row["codeid"] && $userid==$row["userid"])
          $check=1;
      }
    if($check==0)
    {
     if( !empty($userid) )
     {
      $sql="INSERT into coderatingtable(userid,codeid,coderating) values($userid,$codeid,$coderating); ";
      mysqli_query($conn,$sql);
      $sql="SELECT * from coderatingtable where codeid='$codeid'; ";
      $result = mysqli_query($conn,$sql);
      $no_of_rows = mysqli_num_rows($result);
      // $no_of_rows = 1;
        $avgcoderating = 0;
        $count=0;
      if($no_of_rows>0)
      {
        while($row=mysqli_fetch_assoc($result))
        {
          $count++;
          $avgcoderating = $avgcoderating + $row["coderating"];
        }
        if($count>0)
        {
         $avgcoderating = $avgcoderating/$count;
        }
      }

     $sql="UPDATE codetable SET coderating='$avgcoderating' where codeid='$codeid'; ";
      mysqli_query($conn,$sql);

      $sql="SELECT * from coderatingtable where userid='$userid'; ";
      $result = mysqli_query($conn,$sql);
      $no_of_rows = mysqli_num_rows($result);
      // $no_of_rows = 1;
        $avguserrating = 0;
        $count=0;
      if($no_of_rows>0)
      {
        while($row=mysqli_fetch_assoc($result))
        {
          $count++;
          $avguserating = $avguserrating + $row["coderating"];
        }
        if($count>0)
        {
         $avguserrating = $avguserrating/$count;
        }
      }
     $sql="UPDATE usertable SET userrating='$avguserrating' where userid='$userid';";
      mysqli_query($conn,$sql);
    }else{
      header("location:loginpage.php");
    }
  }
  else{
    echo "you have already rated this code";
  }
   }
 ?>

</body>
</html>
