<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <title>Choose a Presentation</title>
   
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
        <h1>Enter Code</h1>
            
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
        <form name="form" action="survey.php" method="get">
                                <?php

                                                $servername = "localhost";
                                                $username = "awasthim_omar";
                                                $password = "_7dWDq+Fq&0&";
                                                $connectioninfo = "awasthim_safemedia";
                                                
                                                $conn = new mysqli($servername, $username, $password, $connectioninfo);
                                                
                                                // the username of the employee
                                                $username = $_SESSION['user'];
                                                
                                                
                                                if($conn->connect_error)
                                                {
                                                    header("Location: http://awasthim.dev.fast.sheridanc.on.ca/SafeMediaApp/index.php");
                                                }
                                                
                                                $code = $_GET["code"];
                                                
                                                $result = $conn->query("SELECT Username FROM account WHERE code = '$code'") or die();
                                                
                                                
                                                // the username of the company where the questions are stored
                                                $companyUser = "me";
                                                
                                                if ($result->num_rows > 0) 
                                                {
                                                    foreach($result as $row => $value) 
                                                    {
                                                        $companyUser = $value['Username'];
                                                    }   
                                                }
                                                else
                                                {
                                                      header("Location: http://awasthim.dev.fast.sheridanc.on.ca/SafeMediaApp/index.php");
                                                }
                                                
                                                $_SESSION['code']= $_GET["code"];
                                                $_SESSION['companyUser']= $companyUser;
        
                                                $conn->close();
                                                
                                                
                                                // place the presentations to choose from
                                                
                                                
                                                    foreach(glob("../SafeMedia/Users/" . $companyUser . "/Presentations"."/*.*") as $file) {
                                                        
                                                     ?>
                                                         <input type = "submit" name = "presentation" id = "presentation" value = '<?php echo(basename($file)); ?>' >
                                                   
                                                    <?php
                                                    }
                                                    ?>
                                                    
        </form>
    </div>
</div>
</body>
</html>