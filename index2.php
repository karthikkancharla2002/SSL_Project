<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <script type="text/javascript" src="index.js"></script>
  </head>
    

  <body>
  <section id="banner">
    <video autoplay muted loop id="bg-video">Your browser does not support HTML5 video.
          <source src="imagesv\tech.mp4" type="video/mp4" />
    </video>

    <nav>
    <ul>
        <li><a href="index2.php" class="active">Home</a></li>
        <li><a href="leaderboard.php">Leaderboard</a></li>
        <li><a href="loginuserf.php">User Login</a></li>
        <li><a href="signupf.php">User Sign-Up</a></li>
        
        <li style="float:right"><a href="loginadminf.php">Admin Login</a></li>
    </ul>
    </nav>

    
      
    <div class="content">
        <h1 id="main-title">Interactive<br>Quiz<br>Game</h1>
        <p id="subtitle">Welcome to the Interactive Quiz game, where you can have fun while enhancing your knowledge.</p>
  
        <button onclick="location.href='loginuserf.php'" class="link" >Join Now</button>
        <button onclick="location.href='loginuserf.php'" class="link" >Login Now</button>
        <button onclick="location.href='leaderboard.php'" class="link" >Leaderboard</button>
    </div>

  </section>
    <!-- </div> -->


<section id="about-the-project">
  <div id="heading_p">
    <h2>About the Project </h2>
        <p id="project-details">The main functionalities of this website are :</p>
        <!-- <div class="tab">
        <button class="seclinks" onclick= "location.href='#UserFunc'" >User Functionalities </button>
        <button class="seclinks" onclick=""location.href='#AdminFunc'"">Admin Functionalities</button>
        <button class="seclinks" onclick=""location.href='#Leaderboard'"">LeaderBoard</button>
        </div> -->
  </div>
    


<article>
<div id="UserFunc" class="func">
  <h3>User Functionalities</h3>
  <p> A User can sign up over this website to save their progress, they can take quizzes on various topics and have fun while learning something new.<br>
      A user can choose their nicknames and can view their position in the leaderboard to see where they stand with repect to others.
  </p>
</div>
<img src="imagesv/users.png">
</article>

<article>

<div id="AdminFunc" class="func">
  <h3>Admin Functionalities</h3>
  <p>Admin Functionalities: An Admin can add new topics to the database. Users can choose quizzes from these new topics.<br>
     Admins can also add new questions to the existing databases.</p>
</div>
<img src="imagesv/admin.jpg">

</article>

<article>
<div id="LeaderBoard" class="func">
  <h3>Leader Board</h3>
  <p>Users can see where they stand with respect to  others, in this leaderboard.<br>
     This leaderboard gets updated each time a user takes a quiz and users can see their leaderboard positions.
  </p>
</div>
<img src="imagesv/leaderboard.jpg">
</article>
</section>



  <section id="footer">
    <footer>
      <h3> This website is a project done for CS213, and it is created by:  </h3>
      <center>
      <table>
      <tr>
        <th>Nampally Pranav   </th>
        <th>Karthik Kancharla</th>
        <th>T Satwik</th>
      </tr>
      <tr>
        <th>190010026</th>
        <th>190020020</th>
        <th>190030043</th>
      </tr>
      </table>
      </center>
      
      <hr>
      <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved</p>
    </footer>

  </section>



  </body>
</html>