<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Gichuki, George">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <link rel="stylesheet" href="../../../../CSS/main.css">   
    <title>CS2623 SSP01: Gichuki</title>
</head>

<body id = "bodyParent">
    <header>
        <h1>CS2623 Gichuki</h1>
       
    </header>
    <aside>
        <nav>
            <ul>
                <li><a href="../../../../SSP01/index.php">Home</a></li>
                <li><a href="../../../../SSP02/SSP02.php">SSP02</a></li>
                <li><a href="../../../../SSP03/SSP03.php">SSP03</a></li>
                <li><a href="../../../../SSP04/SSP04.php">SSP04</a></li>
                <li><a href="../../../../SSP05/SSP05.php">SSP05</a></li>
                <li><a href="../../../../SSP06/SSP06.php">SSP06</a></li>
                <li><a href="../../../../SSP07/SSP07.php">SSP07</a></li>
                <li><a href="../../../../SSP08/SSP08.php">SSP08</a></li>
                <li><a href="../../../../SSP09/SSP09.php">SSP09</a></li>
                <li><a href="../../../../SSP10/SSP10.php">SSP10</a></li>
                <li><a href="../../../../SSP11/SSP11.php">SSP11</a></li>
                <li><a href="../../../../SSP12/SSP12.php">SSP12</a></li>
            </ul>
        </nav>
    </aside>
    <div id="topnav">
        <nav>
            <ul>
                <li><a href="../../../../SSP01/index.php">Home</a></li>
                <li><a href="../../../../SSP02/SSP02.php">SSP02</a></li>
                <li><a href="../../../../SSP03/SSP03.php">SSP03</a></li>
                <li><a href="../../../../SSP04/SSP04.php">SSP04</a></li>
                <li><a href="../../../../SSP05/SSP05.php">SSP05</a></li>
                <li><a href="../../../../SSP06/SSP06.php">SSP06</a></li>
                <li><a href="../../../../SSP07/SSP07.php">SSP07</a></li>
                <li><a href="../../../../SSP08/SSP08.php">SSP08</a></li>
                <li><a href="../../../../SSP09/SSP09.php">SSP09</a></li>
                <li><a href="../../../../SSP10/SSP10.php">SSP10</a></li>
                <li><a href="../../../../SSP11/SSP11.php">SSP11</a></li>
                <li><a href="../../../../SSP12/SSP12.php">SSP12</a></li>
            </ul>
        </nav>
    </div> 
    <main>
    <div>
   <p>Bla bla fish cake</p>
    </div>    
    </main>
    <footer> 
    <hr class = "lineUnder">
    Dislaimer: Oklahoma City Community College does not necessarily
    endorse the content or the respective links on this web page.<br> 
    <?php
    foreach(glob("*.php") as $filename) {
        echo filemtime($filename);
        echo "<br>";
        echo "Content last changed: ".date("F d Y H:i:s.", filemtime($filename));
    }
    ?>
</footer>
    
</body>
</html>