$(document).ready(function() {
    const $display = $("#display"),
          $size = $("#size");
    
    let tickets = 1;
    
    $(document).on("input", $display, function() {
        tickets = $size.val();
        $display.html(tickets);
    });
    
    $('form').on('submit', function (e) {
        const $name = $("#name");
        
        // Create our regex pattern (2 words under 25 length).
        const pattern = /^(?!.{25,})(\w+\s+\w+?)$/;
        if (!$("#name").val().match(pattern)) {
            // Stop the form from submitting so we can
            // ask them to fill it out correctly.
            e.preventDefault();
            // Bring their name into focus so they can quickly type.
            $("#name").focus();
        }
    });
    
    $("label").click(function() {
        console.log($("input[type='radio']:checked").val());
        
        $("#test").html("<img class='movie' /> <p class='synopsis'></p>");
        
		document.getElementById("").onload = function(e) {
            let x = $("#test").position();
			$("#test").append("<button id='close' style='position: fixed; top: " + x.top + "px; left: " + x.left + "px; background-color: #ffffff;'>x</button>");
			$("#close").click(function() {
				$("#test").html("");
			});
		}
	});
    
    $display.html(tickets);
});


