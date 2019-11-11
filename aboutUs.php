<!DOCTYPE html>
<html>
<head>
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <title>About Us</title>
    
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
        <h1>About Us</h1>
            
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
        <p>We are SafeMedia, and our goal  is to provide an easy way for companies to ensure that their employees are up to date with any regulations they set in place.</p>
        <p>If you wish to contact us, please do so using the following e-mail: safemedia@safemedia.com</p>
    </div>
</div>
</body>
</html>