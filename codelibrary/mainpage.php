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
               echo"<div class='searchresult'>
                  <h2>".$row['codetitle']."</h2>
                  <p style='color: black;'>"."language: ".$row['codinglanguage']."</p>
                  <p>".$row['codedescription']."</p>
                  <pre>".$row['code']."</pre>
                </div>";
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

</body>
</html>
