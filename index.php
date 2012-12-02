<?php
/**
 * Description PropertyGuru Test Task1 Index page
 * 
 * @author   Ping-Chris Zheng <christophercheng1222@gmail.com> 
 * @since    Dec 01, 2012
 */
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>FizzBuzzBazz: Ping-Chris Zheng</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript">
//            function validateNumber(event) {
//                var key = window.event ? event.keyCode : event.which;
//                if (event.keyCode == 8 || event.keyCode == 46
//                 || event.keyCode == 37 || event.keyCode == 39) {
//                    return true;
//                }
//                else if ( key < 48 || key > 57 ) {
//                    return false;
//                }
//                else return true;
//            };
            
            $(document).ready(function() {
//                $("input").keypress(validateNumber);
                $("button").click(function(){
                    var func = this.id;
                    var start_number = $("#"+func+"Start").val();
                    var end_number = $("#"+func+"End").val();
                    console.log(start_number);
                    console.log(end_number);
                    $.post("ajax.php", {'function': func, 'start': start_number, 'end': end_number}, function(response) {
                        console.log(response);
                    });
                    return false;
                });
            });
        </script>
    </head>
    <body>
        <form>
            <div>
                <h1>Fizz Buzz Test</h1>
                <label>Enter start number and end number to run the test - Positive integers only.</label>
                <br />
                <span>Start number</span><input id="fizzbuzzStart" type="number" value="" size="3" maxlength="3">
                <span>End number</span><input id="fizzbuzzEnd" type="number" value="" size="3" maxlength="3">
                <button id="fizzbuzz" type="submit">Submit</button>
                <br />
                <span id="fizzbuzzResult"></span>
                <br />
                <h1>Fizz Buzz Bazz Test</h1>
                <label>Enter start number and end number to run the test - Positive integers only.</label>
                <br />
                <span>Start number</span><input id="fizzbuzzbazzStart" type="number" value="" size="3" maxlength="3">
                <span>End number</span><input id="fizzbuzzbazzEnd" type="number" value="" size="3" maxlength="3">
                <button id="fizzbuzzbazz" type="submit">Submit</button>
                <br />
                <span id="fizzbuzzbazzResult"></span>
            </div>
        </form>
    </body>
</html>