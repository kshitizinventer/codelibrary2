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
 <br><br>
 <div class="addissuebox">
 <form>
   <textarea name="addissue" rows="10" cols="50" placeholder="post your problem here..."
   style="font-size:18; border: 1.5px solid grey"></textarea><br>
   <button type="submit" name="addissuebutton"
    style="font-size:18">add issue</button>
 </form>
</div>
</body>
</html>
