
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>SadhGuru WebPage</title>
    <style>
        .w3-myfontCambria {
            font-family:Cambria,Georgia,serif; 
            }
        .w3-text-darkblue{
            color:#000080;
        }
    </style>
</head>
<body class="w3-display-container w3-light-gray ">
<div class="w3-row w3-margin">
            <!-- HereGoes Contact Card -->
            <form name='login' method=POST action="login_page.php" class="w3-container  w3-light-grey w3-text-dark-gray ">
                <h2 class="w3-center">LOGIN</h2>
                
                <div class="w3-row w3-section">
                <div class="w3-col" style="width:30px"></div>
                    <div class="w3-rest">
                    <input class="w3-input w3-border" name="email" type="text" placeholder="Email">
                    </div>
                </div>

                <div class="w3-row w3-section">
                <div class="w3-col" style="width:30px"></div>
                    <div class="w3-rest">
                    <input class="w3-input w3-border" name="password" type="password" placeholder="password">
                    </div>
                </div>


                <button class="w3-button w3-block w3-section w3-dark-gray w3-ripple w3-padding">LOGIN</button>

            </form>

        </div>
    </body>
</html>