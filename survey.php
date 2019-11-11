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

    <title>Survey</title>
<?php
// the username of the employee
$username = $_SESSION['user'];

// the code
$code = $_SESSION['code'];

// the company username
$companyUser = $_SESSION['companyUser'];

// the presentation chosen is
$presentation = $_GET['presentation'];

$_SESSION['presentation'] = $presentation;






?>
 
    <script>
        $(document).ready(function()
        {

            
            
            // submitting the quiz
            $("#submit").click(function() 
            {
                
            
            });
            
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
    
<form action = "submit.php" method = "GET">
    
                    <?php 
                    



// place the questions for the presentation chosen on the survey


                    
                    $i=0;
    // for each folder in the presentation (so each question folder its going to loop)
    foreach(scandir("../SafeMedia/Users/".$companyUser."/Questions/".$presentation."/") as $folder) {
         
        if($i++ <= 1)
        {
            continue;
        }
                $answer1 = "";
                $answer2 = "";
                $answer3 = "";
                $answer4 = "";
        
            // open the question.txt file in each folder one by one    
            $qfile = fopen("../SafeMedia/Users/".$companyUser."/Questions/".$presentation."/$folder/Question.txt",'r');
                        while ($ques = fgets($qfile)) {
                            $question = $ques;
                          
                        }
            fclose($qfile);
          
             // open the A1.txt file in each folder one by one 

            $a1file = fopen("../SafeMedia/Users/".$companyUser."/Questions/".$presentation."/$folder/A1.txt",'r');
                        while ($a1 = fgets($a1file)) {
                            $answer1 = $a1;

                        }
            fclose($a1file);
            
            
            

             // open the A2.txt file in each folder one by one    
            $a2file = fopen("../SafeMedia/Users/".$companyUser."/Questions/".$presentation."/$folder/A2.txt",'r');
                        while ($a2 = fgets($a2file)) {
                            $answer2 = $a2;
                          
                        }
            fclose($a2file);
            
            
             // open the A3.txt file in each folder one by one    
            $a3file = fopen("../SafeMedia/Users/".$companyUser."/Questions/".$presentation."/$folder/A3.txt",'r');
                        while ($a3 = fgets($a3file)) {
                            $answer3 = $a3;
                          
                        }
            fclose($a3file);
            
            
             // open the A4.txt file in each folder one by one    
            $a4file = fopen("../SafeMedia/Users/".$companyUser."/Questions/".$presentation."/$folder/A4.txt",'r');
                        while ($a4 = fgets($a4file)) {
                            $answer4 = $a4;
                          
                        }
            fclose($a4file);
            
            // open the correct answer file for each question 
            
            

            


            // add the question to the html here
            
            ?>
            
                
            <br>
               <fieldset id = <?php echo($folder);?>>
                    <legend><?php echo($a4);?></legend>
                    <h1><?php echo($question); ?></h1>
                <label><input type="radio" name="<?php echo($folder);?>" id="<?php echo($folder);?>a1" value = "A1"/>   <?php echo($answer1);?>   </label> <br>

                <label><input type="radio" name="<?php echo($folder);?>" id="<?php echo($folder);?>a2" value = "A2"/>   <?php echo($answer2);?>   </label> <br>

                <label><input type="radio" name="<?php echo($folder);?>" id="<?php echo($folder);?>a3" value = "A3"/>   <?php echo($answer3);?>   </label> <br>

                <label><input type="radio" name="<?php echo($folder);?>" id="<?php echo($folder);?>a4" value = "A4"/>   <?php echo($answer4);?>   </label> <br>
                </fieldset>
            
            <?php
            
            
            
    }
?>

                      <input type="submit" id="submit" value="Submit">
    </form>
        
    </div>
</div>
</body>
</html>