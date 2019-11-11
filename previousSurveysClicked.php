<!DOCTYPE html>
<html>
<head>
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <title>Example 1</title>
    
    <script>
        $(document).ready(function()
        {
            var codeEntered = "example1";
            $("#header").html("Survey for: " + codeEntered);
            
            if (codeEntered === "example1")
            {
                
                $("#question1").html("What is the maximum an employee can lift by themselves?")
                $("#question1answer1answer").html("5 lbs")
                $("#question1answer2answer").html("50 lbs")
                $("#question1answer2answer").css("color", "green");
                $("#question1answer3answer").html("60 lbs")
                $("#question1answer4answer").html("100 lbs")
                
                $("#question2").html("You can use a chair in place of a ladder.")
                $("#question2answer1answer").html("True")
                $("#question2answer2answer").html("False")
                $("#question2answer2answer").css("color", "green");
                
                $("#question3").html("If you get injured you should:")
                $("#question3answer1answer").html("Fix the injury yourself")
                $("#question3answer2answer").html("Ignore it")
                $("#question3answer3answer").html("Alert a manager/supervisor")
                $("#question3answer3answer").css("color", "green");
                $("#question3answer4answer").html("Go home")
                
                $("#question4").html("If you see a chemical spill you should:")
                $("#question4answer1answer").html("Alert a manager/supervisor")
                $("#question4answer1answer").css("color", "green");
                $("#question4answer2answer").html("Clean it")
                $("#question4answer3answer").html("Drink it")
                $("#question4answer4answer").html("Leave it to dry")
                
                $("#question5").html("What does WHMIS stand for?")
                $("#question5answer1answer").html("Workplace Hazardous Material Information System")
                $("#question5answer1answer").css("color", "green");
                $("#question5answer2answer").html("Workplace Hazardous Material Information Sheet")
                $("#question5answer3answer").html("Work Hazard Matter Informant System")
                $("#question5answer4answer").html("Workplace Hectic Material Information System")
            }
            
            $('#select').on('change', function() 
            {
                var value = $(this).val();
                
                if (value === "enterCodePage")
                {
                    window.location = "index.php"
                }
                
                if (value === "previousSurveysPage")
                {
                    window.location = "previousSurveys.php"
                }
                
                if (value === "aboutUsPage")
                {
                    window.location = "aboutUs.php"
                }
                
                if (value === "helpPage")
                {
                    window.location = "help.php"
                }
            });
        });
    </script>
</head>
<body>
<div data-role = "page" id = "pageone">
    <div data-role = "header">
        <h1 id="header"></h1>
            
        <form>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label for="select-native-11">Menu</label>
                    <select name="select-native-11" id="select">
                        <option value="">Menu</option>
                        <option value="enterCodePage">Enter Code</option>
                        <option value="previousSurveysPage">Previous Surveys</option>
                        <option value="aboutUsPage">About Us</option>
                        <option value="helpPage">Help</option>
                    </select>
            </fieldset>
        </form>
    </div>

    <div data-role = "main" class = "ui-content">
        <form>
            <fieldset data-role="controlgroup">
                <h1 id="question1"></h1>
                
                <input type="radio" name="question1" id="question1answer1" disabled="disabled">
                <label for="question1answer1"><p id="question1answer1answer"></p></label>
        
                <input type="radio" name="question1" id="question1answer2" checked="checked">
                <label for="question1answer2"><p id="question1answer2answer"></p></label>
        
                <input type="radio" name="question1" id="question1answer3" disabled="disabled">
                <label for="question1answer3"><p id="question1answer3answer"></p></label>
        
                <input type="radio" name="question1" id="question1answer4" disabled="disabled">
                <label for="question1answer4"><p id="question1answer4answer"></p></label>
            </fieldset>
        </form>
        
        <form>
            <fieldset data-role="controlgroup">
                <h1 id="question2"></h1>
                
                <input type="radio" name="question2" id="question2answer1" disabled="disabled">
                <label for="question2answer1"><p id="question2answer1answer"></p></label>
        
                <input type="radio" name="question2" id="question2answer2" checked="checked">
                <label for="question2answer2"><p id="question2answer2answer"></p></label>
            </fieldset>
        </form>
        
        <form>
            <fieldset data-role="controlgroup">
                <h1 id="question3"></h1>
                
                <input type="radio" name="question3" id="question3answer1" disabled="disabled">
                <label for="question3answer1"><p id="question3answer1answer"></p></label>
        
                <input type="radio" name="question3" id="question3answer2" disabled="disabled">
                <label for="question3answer2"><p id="question3answer2answer"></p></label>
        
                <input type="radio" name="question3" id="question3answer3" checked="checked">
                <label for="question3answer3"><p id="question3answer3answer"></p></label>
        
                <input type="radio" name="question3" id="question3answer4" disabled="disabled">
                <label for="question3answer4"><p id="question3answer4answer"></p></label>
            </fieldset>
        </form>
        
        <form>
            <fieldset data-role="controlgroup">
                <h1 id="question4"></h1>
                
                <input type="radio" name="question4" id="question4answer1" checked="checked">
                <label for="question4answer1"><p id="question4answer1answer"></p></label>
        
                <input type="radio" name="question4" id="question4answer2" disabled="disabled">
                <label for="question4answer2"><p id="question4answer2answer"></p></label>
        
                <input type="radio" name="question4" id="question4answer3" disabled="disabled">
                <label for="question4answer3"><p id="question4answer3answer"></p></label>
        
                <input type="radio" name="question4" id="question4answer4" disabled="disabled">
                <label for="question4answer4"><p id="question4answer4answer"></p></label>
            </fieldset>
        </form>
        
        <form>
            <fieldset data-role="controlgroup">
                <h1 id="question5"></h1>
                
                <input type="radio" name="question5" id="question5answer1" checked="checked">
                <label for="question5answer1"><p id="question5answer1answer"></p></label>
        
                <input type="radio" name="question5" id="question5answer2" disabled="disabled">
                <label for="question5answer2"><p id="question5answer2answer"></p></label>
        
                <input type="radio" name="question5" id="question5answer3" disabled="disabled">
                <label for="question5answer3"><p id="question5answer3answer"></p></label>
        
                <input type="radio" name="question5" id="question5answer4" disabled="disabled">
                <label for="question5answer4"><p id="question5answer4answer"></p></label>
            </fieldset>
        </form>
    </div>
</div>
</body>
</html>