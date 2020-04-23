<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta name="author" content="Bryce B" />
    <meta name="description" content="Register to see a movie here at the Movie Theatre Theater!" />
    <meta name="keywords" content="Movie, Theatre, Registration, New Movies" />

    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/seating.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
    <button>Ok!</button>
    
    <div class="flex-container">
        <div class="box taken-seat" data-seat="A1"></div>
        <div class="box open-seat" data-seat="A2"></div>
        <div class="box open-seat" data-seat="A3"></div>
        <div class="box open-seat" data-seat="A4"></div>
        <div class="box open-seat" data-seat="A5"></div>
        <div class="box open-seat" data-seat="A6"></div>
        <div class="box open-seat" data-seat="A7"></div>
        <div class="box open-seat" data-seat="A8"></div>
        <div class="box open-seat" data-seat="A9"></div>
        <div class="box open-seat" data-seat="A10"></div>
        <div class="box open-seat" data-seat="A11"></div>
        <div class="box open-seat" data-seat="A12"></div>
        <div class="box open-seat" data-seat="A13"></div>
        <div class="box open-seat" data-seat="A14"></div>
        <div class="box open-seat" data-seat="A15"></div>
    </div>

    <div class="flex-container">
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
    </div>

    <div class="flex-container">
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
    </div>

    <div class="flex-container">
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
    </div>

    <div class="flex-container">
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
    </div>

    <div class="flex-container">
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
    </div>

    <div class="flex-container">
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
    </div>

    <div class="flex-container">
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
    </div>

    <div class="flex-container">
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
    </div>

    <div class="flex-container">
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
    </div>

    <div class="flex-container">
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
        <div class="box open-seat"></div>
    </div>

    <script type="text/javascript">
        const max_clicks = <?php echo $size ?>;
        let clicks = 0;

        /* Remove the listeners to avoid the events
         * being trigger more than once.
         */
        function clean_listeners() {
            $('.open-seat').off('click')
            $('.taken-seat').off('click');
        }
        
        /* set up the event listener for click on
         * available seats.
         */
        function open_seat() {
            $('.open-seat').on('click', function(e) {
                if (clicks >= max_clicks) {
                    alert("You've selected too many seats!");
                    return;
                }
                
                if ($(this).hasClass("currently-selected")) {
                    return;
                }
                
                const t = this;

                t.className = "box taken-seat currently-selected";
                ++clicks;
            });
        }
        
        /* set up the event listener for click on
         * the taken seats to.
         */
        function taken_seat() {
            $(".taken-seat").on("click", function(e) {
                const t = $(this);

                if (!t.hasClass("currently-selected")) return;

                t.addClass("box open-seat")
                    .removeClass("taken-seat currently-selected");
                --clicks;
            });
        }
        
        // check based on classes and then run corresponding function.
        $(".flex-container").on("click", function() {
            clean_listeners();
            open_seat();
            taken_seat();
        });
        
        /* iterate through currently-selected and grab the seat data,
         * add an "ok" button top right, when ok is hit it will send
         * a form with the seat information to the database.
         */
        
        $("button").on("click", function() {
            $.ajax({
                
            });
        });
        
    </script>

</body>

</html>