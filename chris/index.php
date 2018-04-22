<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>hng time and date</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="main.js"></script>
</head>
<body>
<header>

                <div id="left-header">
                <h1>Hotels.ng</h1>

                </div>

                <div id="right-header">
                    <?php
                    echo "Today is " . date("Y-m-d") . "<br>";
                    date_default_timezone_set("Africa/Lagos");
                    echo "The time is " . date("h:i:sa");
                    ?>

                </div>

</header>

<center>
    <h1>WELCOME</h1>
</center>
    
</body>
</html>


    
