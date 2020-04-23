$(document).ready(function() {
    const $display = $("#display"),
          $size = $("#size");
    
    let tickets = 1;
    
    $(document).on("input", $display, function() {
        tickets = $size.val();
        $display.html(tickets);
    });
    
    $('form').on('submit', function () {
        const pattern = //;
        if ($("#name").val().match(pattern)) {
            
        }
    });
    
    $display.html(tickets);
});


