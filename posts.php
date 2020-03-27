<html style="position: relative; min-height: 100%;">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/ff15b6e1bf.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/posts.css">
        <title>PeerPear - Posts</title>
    </head>
    <body  class = "center-body" style="background-color: #E9E9E9; margin-bottom: 60px;">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img height="auto" width="30px" src="images/logo.png"/>
                PeerPear
            </a>
            <!-- Small screen navbar button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navDropdown" aria-controls="navDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Items-->
            <div class="navbar-collapse collapse" id="navDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <!-- Login Button -->
                        <a class="nav-link" href="index.html">Login</a>
                    </li>
                    <li class="nav-item active">
                        <!-- Register Button -->
                        <a class="nav-link" href="register.html">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Content -->

     
 
        <div class="container" style="margin-top:30px">
  <div class="row">
     
     
    

   
    <div class="col-sm-12 center-block">


        <?php
	if(isset($_COOKIE["username"])) {
            $username = "mohh3660";
            $password = "glxcdj";

            $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
            
            $sql = "SELECT * FROM POST WHERE cid = 1";

            $result = $conn->query($sql);

            if($result->num_rows != 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class=\"card w-75 mx-auto\">";
                    echo "<div class=\"card-body\">";
                    echo "<h5 class = \"card-title\">$row[title]</h5>";
                    echo "<p class = \"card-text\">$row[body]</p>";
                    echo "<p>Upvotes: $row[upvotes]</p>";
                    echo "<a href=\"#\" class=\"btn btn-primary\"><i class=\"fas fa-arrow-up\"></i></a>";
                    echo "<a href=\"#\" class=\"btn btn-primary\"><i class=\"fas fa-arrow-down\"></i></a>";
                    echo "</div>";
                    echo "</div>";
                    echo "<br>";
                
                    
                }
            } else {
		echo "<h2>No posts to display...</h2>";
	    }
	} else {
		header('Location:login.php'); 
	}
        ?>

   
</div>
</div>
</div>
     <!-- Footer -->
     <br>
        <footer class="page-footer font-small bg-dark" style="height: 60px; width: 100%; position: absolute; bottom: 0;">
            <div class="footer-copyright text-center py-3 text-light">
                © PeerPear
            </div>
        </footer>
    </body>
</html>
