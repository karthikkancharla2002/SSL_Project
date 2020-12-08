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
          <source src="imagesv\technology-network95.1.mp4" type="video/mp4" />
    </video>

		<nav>
    <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="leaderboard.php">Leaderboard</a></li>
        <li><a href="loginuserf.php">User Login</a></li>
        <li><a href="signupf.php">User Sign-Up</a></li>
        
        <li style="float:right"><a href="loginadminf.php">Admin Login</a></li>
    </ul>
    </nav>

    
      
    <div class="content">
        <h1 id="main-title">Interactive Quiz Game </h1>
        <p id="subtitle">Welcome to the Interactive Quiz game, where you can have fun while enhancing your knowledge.</p>

        
        <!-- <div class="svg-wrapper">
          <svg height="60" width="320" xmlns="loginuserf.php">
          <rect class="shape" height="60" width="320" />
          <a xlink:href="loginuserf.php"> Join now</a>
          </svg></div> -->
          <!-- <a class="text" href="loginuserf.php">Join Now </a> -->

        
        <center><a href="loginuserf.php" class="hvr-radial-out">Join Now</a></center>
        <button onclick="location.href='loginuserf.php'" class="link" >Login Now</button>
        <button onclick="location.href='leaderboard.php'" class="link" >Leaderboard</button>
    </div>
  </section>
    <!-- </div> -->


    <!-- <section>
    <div id="about project">
        <p id="project-details">Welcome to the Interactive Quiz game, where you can have fun while enhancing your knowledge. The main functionalities of this website are :</p>
        <ol>
          <li>User Functionalitites :</li>
          <li>Admin Functionalities: An Admin can add new topics to the database. Users can choose quizzes from these new topics. Admins can also add new questions to the existing databases.</li>
          <li><p>Users can see where they stand with respect to  others, in this leaderboard. It is a medium where people flex their brains. <a href="leaderboard.php">View Leaderboard</a></p></li>
        </ol>
    </div>
    </section> -->

  <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'UserFunc')">UF</button>
  <button class="tablinks" onclick="openCity(event, 'AdminFunc')">AF</button>
  <button class="tablinks" onclick="openCity(event, 'LeaderBoard')">LB</button>
  </div>

<!-- Tab content -->
<div id="UserFunc" class="tabcontent">
  <h3>User Functionalities</h3>
  <p> A User can sign up over this website to save their progress, they can take quizzes on various topics and have fun while learning something new.</p>
</div>

<div id="AdminFunc" class="tabcontent">
  <h3>Admin Functionalities</h3>
  <p>Admin Functionalities: An Admin can add new topics to the database. Users can choose quizzes from these new topics. Admins can also add new questions to the existing databases.</p>
</div>

<div id="LeaderBoard" class="tabcontent">
  <h3>Leader Board</h3>
  <p>Users can see where they stand with respect to  others, in this leaderboard. It is a medium where people flex their brains. </p>
</div>


  <section id="footer">
    <footer>
      <h3> This webiste is a project done for CS213, and it is created by:  </h3>
      <table style="width:100%">
      <tr>
        <th>Nampally Pranav</th>
        <th>Karthik Kancharla</th>
        <th>T Satwik</th>
      </tr>
      <tr>
        <th>190010026</th>
        <th>190020020</th>
        <th>190030043</th>
      </tr>
      </table>
      </div>
      <hr>
      <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved     </p>
          
    </footer>

  </section>



  </body>
</html>