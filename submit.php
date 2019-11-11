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

    <title>Enter Code</title>
   <?php
   
   
   

            $servername = "localhost";
            $username = "awasthim_omar";
            $password = "_7dWDq+Fq&0&";
            $connectioninfo = "awasthim_safemedia";
            
            $conn = new mysqli($servername, $username, $password, $connectioninfo);
            
            if($conn->connect_error) 
            {
                 die("Connection failed: " . $conn->connect_error);
                 "<br>";
            }
            
            
            
            
            
            
            
            
            
            
   // the username of the employee
        $username = $_SESSION['user'];
        
        // the code
        $code = $_SESSION['code'];
        
        // the company username
        $companyUser = $_SESSION['companyUser'];
        
        // the presentation chosen is
        $presentation = $_SESSION['presentation'];
        $score = 0;
        $total = 0;
        
    // loop through each question folder    
 foreach(scandir("../SafeMedia/Users/".$companyUser."/Questions/".$presentation."/") as $folder) {
         
        if($i++ <= 1)
        {
            continue;
        }
        $givenanswer = $_GET[$folder];
    // open correct answer file for the folder
   $cafile = fopen("../SafeMedia/Users/".$companyUser."/Questions/".$presentation."/$folder/CA.txt",'r');
                        while ($ca = fgets($cafile)) {
                            $correctanswer = $ca;
                            
                        }
                fclose($cafile);
                
    
                        $total++;
                        
                        // check if they are same
                        if($givenanswer == $correctanswer)
                        {
                            
                                
                            $score++;
                        }
                          
                        
 }
 $percentage = ($score/$total) * 100;
 
echo("<script> alert(Your score is .'$score'./.'$total'); </script> "); 
$sql = "INSERT INTO scores (empID,Presentation,Score) VALUES ('$username', '$presentation', '$percentage')";
            
$result  = $conn->query($sql) or die($conn->error);
  
if ($conn->query($sql) === TRUE) {
    header("Location: http://awasthim.dev.fast.sheridanc.on.ca/SafeMediaApp/index.php");
    die();
    
} else {
    die();
}

$conn->close();
            
 
 
   ?>
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
    
    
    <p id = "score">Your score is: <?php echo ($score);  ?></p>

</div>
</body>
</html>