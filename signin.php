<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="utf-8"/>
    <meta name="author" content="Bryce B"/>
    <meta name="description" content="Register to see a movie here at the Movie Theatre Theater!"/>
    <meta name="keywords" content="Movie, Theatre, Registration, New Movies"/>

    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/seating.css"/>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/seating.js"></script>
    
    <title>Seat select</title>
</head>
    
<body>    
    <?php
        // create our vars for later use
        $headers = getallheaders();
        $name = htmlspecialchars($_POST["name"]);
        $size = $_POST["size"];
        $movie = $_POST["movie"];
        $refer = $_SERVER["HTTP_REFERER"];
        
        // check to make sure they came from index
        if (strcmp($_SERVER["HTTP_REFERER"], "http://localhost/") != 0) {
            header("Location: ..");
            exit();
        }
    
        echo "Welcome, $name! We appreciate that you chose Movie Theater&#59;"
            . " please select your $size seat(s)&#46;";
    ?>
    <div id="seating">
    
    </div>
    
    
</body>
</html>