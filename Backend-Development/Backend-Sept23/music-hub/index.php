<?php
    session_start();

    include "./dbconfig.php";

    if(isset($_GET['logout'])) {
        session_destroy();
        header("Location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>music Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/base.css" />
    <style>
        
    </style>
</head>
<body>
    <header id="header-1">
        <a href="./legal/privacy.html">Privacy Policy</a>
        <a href="./legal/tnc.html">Terms and Conditions</a>
        
        <?php
        if(!isset($_SESSION['userid'])) {
        ?>

        <div id="dropdown">
            <button id="dropdown-btn">LOGIN</button>
            <div id="dropdown-content">
                <a href="./auth/login.php">Login into existing account</a>
                <a href="./auth/register.php">Create a new account</a>
            </div>
        </div>

        <?php } else { ?> 

        <div id="dropdown">
            <button id="dropdown-btn"><?php echo $_SESSION['username'] ?></button>
            <div id="dropdown-content">
                <a href="./auth/changepwd.php">Change account password</a>
                <a href="./index.php?logout=true">Logout</a>
            </div>
        </div>

        <?php } ?>



    </header>
    <header id="header-2">
        <section id="branding">
            <img src="./assets/images/logo.gif" />
            <h1>MUSIC HUB</h1>
            <span>One stop shop for all your musical needs</span>
        </section>
        <section id="search">
            <form method="get" action="./search.html">
                <input type="text" placeholder="Search songs, artists and more..." />
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </section>
    </header>
    <nav>
        <li><a href="./index.html">Home</a></li>
        <li><a href="./hits.html">Top Hits</a></li>
        <li><a href="./recent.html?">Recently Added</a></li>
        <li><a href="./favs.html">Favourites</a></li>
        <li><a href="./playlists.html">Playlists</a></li>
        <li><a href="./about.html">About Us</a></li>
    </nav>
    <main class="position-static">
        <h1 class="text-center mt-5">Song List</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 m-4">
            
            <?php
                $sql_query = "SELECT * FROM music;";
                $result = mysqli_query($conn,$sql_query);
                
                while($rows = mysqli_fetch_array($result)) {
            ?>

            <div class="col">
                <div class="card h-100">
                    <img src="./assets/musicimg/<?php echo $rows['image'] ?>" class="card-img-top" alt="...">
                    <audio controls>  
                        <source src="./assets/music/<?php echo $rows['link'] ?>" />
                    </audio>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rows['name'] ?></h5>
                        <p class="card-text">

                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Views: <?php echo $rows['views'] ?></small>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>
    </main>
    <footer>
        <section id="company-info">
            <section id="branding">
                <img src="./assets/images/logo.gif" />
                <div>
                    <h1>MUSIC HUB</h1>
                    <span>One stop shop for all your musical needs</span>
                </div>
            </section>
            <span></span>
            <div id="socials">
                <a href="www.faebook.com"><icon></icon></a>
            </div>
        </section>
        <section id="site-map">
            <li><a href="./index.html">Home</a></li>
            <li><a href="./hits.html">Top Hits</a></li>
            <li><a href="./recent.html?">Recently Added</a></li>
            <li><a href="./favs.html">Favourites</a></li>
            <li><a href="./playlists.html">Playlists</a></li>
            <li><a href="./about.html">About Us</a></li>
        </section>
        <section id="legal">
            <li><a href="./legal/privacy.html">Privacy Policy</a></li>
            <li><a href="./legal/tnc.html">Terms and Conditions</a></li>
        </section>
        <section id="newsletter">
            <p></p>
            <input type="email" placeholder="Enter you email">
        </section>
    </footer>
    <hr>

    <script src="https://kit.fontawesome.com/9e2c9fd14a.js" crossorigin="anonymous"></script>
</body>
</html>