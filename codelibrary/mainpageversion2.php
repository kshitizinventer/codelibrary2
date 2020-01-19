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
<nav class="mainnav">
  <ul>
    <li><a href="mainpageversion2.php">Home</a></li>
    <li><a href="addcode.php">Add code</a></li>
    <li><a href="#">Report error</a></li>
    <li><a href="requestissue.php">Request issue</a></li>
    <li><a href="#">Contact</a></li>
    <li><form method="POST" action="mainpageversion2.php?introduc=true">
      <input type="text" name="searchbox" size="50" placeholder="search here.."
      style="font-size:16">
      <button type="submit" name="searchbutton"
      style="font-size:16">search</button>
    </form></li>
  </ul>
</nav>
<br>


<nav id="navbar">
  <header><b><i>Web-Dev Documentation</b></i></header>
  <ul>
    <!-- <a class="nav-link" href="#Introduction" rel="internal"><li>Introduction</li></a> -->
    <a class="nav-link" href="mainpageversion2.php?introduction=true" ><li>Introduction</li></a>
    <a class="nav-link" href="mainpageversion2.php?whydev=true" ><li>Who can develop websites and web applications</li></a>
    <a class="nav-link" href="#Who_cannot_develop_these" rel="internal"><li>Who cannot develop these</li></a>
    <a class="nav-link" href="#Why_development" rel="internal"><li>Why development</li></a>
    <a class="nav-link" href="#Myths_of_WebD" rel="internal"><li>Myths of WebD</li></a>
    <a class="nav-link" href="#Basic_Roadmap" rel="internal"><li>Basic Roadmap</li><ol> Step 1 : HTML</ol>
      <ol>
        Step 2 : CSS
      </ol>
      <ol>
        Step 3 : HTML5 and CSS
</ol>
      <ol>
        Step 4 : HTML5 and Javascript
      </ol>

<ol>
       Step 5 : HTML5 and PHP
      </ol>
    <ol>
      Step 6 : All Above + My SQL
    </ol>

    </a>
    </nav>







<!-- <main id="main-doc">
  <section class="main-section" id="Introduction">
    <header>Introduction</header>
    <article>
      <p>If you’re a budding engineer in the trade of IT or someone else with a fresh interest in website development and design, then this post is for you.</p>

<p>For over a decade, web development has been the most favourite subject for geeks all over the world and it’s not new. But the everyday growth and emerging techniques has made it even a more wondrous subject to learn and experiment on. In this article, I’ll write everything you need to know and everything you will require to pursue your journey in web development conveniently, more productively and with more fun!</p>


      </artice>
    </section>
  <section class="main-section" id="Who_can_develop_websites_and_web_applications">
    <header>Who can develop websites and web applications</header>
    <article>
      <p>This guide assumes you have the following basic background:</p>

      <li>A general understanding of the Internet and the World Wide Web (WWW).</li>
      <li>Good working knowledge of HyperText Markup Language (HTML).</li>
<li>Some programming experience. If you are new to programming, try one of the tutorials linked on the main page about JavaScript.</li>

      <p>If you understand the basic logics of programming (loops, classes, objects, functions etc.), you can easily construct a web application as huge as Google Chrome. Nothing Fancy.

      If you like spending your time with a code editor rather than doing other mediocre chores, then yes, you can be the next Zuckerburg.</p>
      </artice>
    </section>
  <section class="main-section" id="Who_cannot_develop_these">
    <header>Who cannot develop these</header>
    <article>
    <p>If the only motivation behind all this work is academics and a decent résumé then you might face ‘technical’ problems as developing on web domains requires a lot of smart-work and dedication. If you don’t plan through, you might end up in nowhere with your interest and efforts completely ruined.

</p>
    </article>
    </section>
  <section class="main-section" id="Why_development">
    <header>Why development</header>
    <article>
The trade of IT and Computer Science (CSE) is basically categorized into three sub-domains; Software engineering, Networking and website development. However former two are also very interesting and fruitful as web development, students are consistently made to believe that those are more important and significant than WebDev.
      <p>Web Development is the future. Have a look around and you’ll agree.</p>

    </article>
    </section>
  <section class="main-section" id="Myths_of_WebD">
    <header>Myths of WebD</header>
    <li>
      WebDev is limited to creating websites.

    </li>
    <li>
      WebDev cannot get you ‘high-paid’ jobs.
    </li>
    <li>
      WebDev is easy.
    </li>
    <p>No Dear! Web Development is not limited to websites, you can create browsers, plugins, games, e-commerce and SOFTWARES too. The development scope is too vast, describing it would take more than one article. WebDev can get you jobs in high-reputed companies like Facebook, Microsoft, Google etc. or you could always work as a high-profiled freelancer. Although beginning career might disappoint you, but as you keep growing, so does your pay cheque.

Web Development, although fun, requires hard work especially during PHP/ASP.net phase. You have to work in a specific order if you want to become a good web developer.</p>


    </section>
  <section class="main-section" id="Basic_Roadmap">
    <header>Basic Roadmap</header>

    <p><b><i>Step 1 : HTML</b></i>
      No Dear! Web Development is not limited to websites, you can create browsers, plugins, games, e-commerce and SOFTWARES too. The development scope is too vast, describing it would take more than one article. WebDev can get you jobs in high-reputed companies like Facebook, Microsoft, Google etc. or you could always work as a high-profiled freelancer. Although beginning career might disappoint you, but as you keep growing, so does your pay cheque.

Web Development, although fun, requires hard work especially during PHP/ASP.net phase. You have to work in a specific order if you want to become a good web developer.</p>
    <p>
      <b><i>Step 2 : CSS</b></i>
      Who adds colours to rainbows? CSS surely does.

With the application of CSS, you can define your web in a colourful and smooth way. Like HTML, CSS has grew into CSS3, with which, you can also add transitions to pages, scrolls and even mouse hovers. You can even make your site elegant or flashy by using just few lines of CSS3.


    </p>
    <p>
      <b><i>Step 3 : HTML5 and CSS</b></i>
      Now as you learned HTML5 and CSS3 so far, designing pages won’t look much hard to you. You can either design your own pages or templates or can work into responsive layouts that can adapt any device’s screen.

You can practice as much as you want, but 60-hours* are just enough to practice using HTML5 and CSS3 together. If you’re a brilliant student, you can also look up bootstrap3 for responsive layout, before moving to step 4.
    </p>
    <p>
      <b><i>Step 4 : HTML5 and Javascript</b></i>
      Now, after learning how your site should look, you can actually make those buttons useful in some tasks. JavaScript, the best work-around coding language for webpages is versatile, flexible and platform independent. I prefer it over any other web-programming language (client-side). With javascripts, real development starts. You create variables, assign them some values, and pass them as arguments in some function to finally get returned some values or actions (e.g. page loading, redirecting). JavaScript is easy to learn but hard to master, so I recommend moving to next step as soon as you learn the working of functions and variables. JavaScript has many children like node.js and it requires a lot of reading and practice to actually make some use in creating complex web applications. (See Macros).
    </p>
    <p>
      <b><i>Step 5 : HTML5 and PHP</b></i>So far, it’s all about developing a website from front-end. How it looks and how should it react, but real work takes place behind the curtains. PHP is a server-side language, and it handles all the real work and completely relies on your internet connection (unless you’re working on local host which I don’t recommend for projects).
    </p>
    <p>
      <b><i>Step 6 : All Above + MySQL</b></i>
      Easiest to work, hardest to maintain. Designing on database can be a real pain if you’re not organized and well-planned.

The reason I recommend PHP over any other server-scripting languages is that PHP is great for beginners and if your basic old-school C++ concepts are clear, PHP becomes much easier than you anticipate.

MySQL, with the combination of PHP on Apache server (better than IIS) provides a perfect frame to build webpages and if you want to practice on localhost, try WAMP server.

Practice on local host, implement on remote host.
    </p>

    </section>
</main> -->

  <!-- <form method="POST">
    <input type="text" name="searchbox" size="50" placeholder="search here.."
    style="font-size:16">
    <button type="submit" name="submitsearch"
    style="font-size:16">search</button>
  </form> -->
<?php
 if(isset($_GET['introduction']))
 {
   echo "<h1>yoldhflhflhlhdfljsljklkjljljldfsdffffffffffffffffff</h1>";
 }
 if(isset($_GET['whydev']))
 {
   echo"<h1>
            skahkjadhfouuwhjlhdalhlhlhfldjlkj</h1>";
 }
?>
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
