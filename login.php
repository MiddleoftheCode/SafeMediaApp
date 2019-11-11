<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <title>Login</title>
   
    <script>
        $(document).ready(function()
        {
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
        <h1>Login</h1>
            
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
        <form name="form" action="session.php" method="POST">
            <input type="text" name="empid" id="code" placeholder="Employee ID">
            <input type="text" name="password" id="code" placeholder="Password">
            <input type="submit" id ="submit" value="Log In">
        </form>
    </div>
    
   <h1>Not a User? Register right here!</h1>
    
     <div data-role = "main" class = "ui-content">
        <form name="form" action="register.php" method="POST">
            <input type="text" name="empid" id="empid" placeholder="Enter your Employee ID">
            <input type="text" name="password" id="pass" placeholder="Create a Password">
            <input type="text" name="name" id="name" placeholder="Enter your Name Here">
            <input type="text" name="company" id="company" placeholder="Enter the name of your company">
            
            <input type="submit" id ="submit" value="Sign Up!">
        </form>
    </div>
    
    
</div>
</body>
</html>