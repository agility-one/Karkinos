<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="google" value="notranslate">
    <title>Karkinos</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<?php
    $IP = explode(":", $_SERVER['HTTP_HOST']);
?>
<script>const IP = <?= "\"".$IP[0]."\"" ?> </script>


<!-- NavBar -->
<nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg" id="mainNav">
    <div class="container"><button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"
            value="Menu"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link text-primary" href="../../index.php">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="../encode.php">Encode/Decode</a></li>
                <li class="nav-item"><a class="nav-link" href="../encrypt.php">Encrypt/Decrypt</a></li>
                <li class="nav-item"><a class="nav-link current" href="../modules.php">Modules</a></li>
                <li class="nav-item"><a class="nav-link" href="../cracking.php">Crack Hashes</a></li>
            </ul>
        </div>
    </div>
</nav>
<body class="bg-dark text-white">
    <!-- Header -->
    <header>
        <div class="row p-5">
            <div class="col-md">
                <div class="container-fluid pb-3">
                    <h1 class="text-white">
                        Port Scanning
                        <i class="fas fa-project-diagram text-success"></i>
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <!-- Main -->
    <main class="text-white">

    <div class="row justify-content-center">
        <div class="col-lg-3 mx-3">
            <h3><u>Steps to Launch Server</u></h3>
            <ol class="pl-3">
                <li><h5>Click Start Scanner</h5></li>
                <li><h5>Go to the provided link</h5></li>
                <li><h5>Configure and run scanner</h5></li>
            </ol>
            <button type="submit" class="btn btn-outline-danger btn-block py-5" id="go">Start Scanner</button>
            <button type="button" class="btn btn-outline-warning btn-block" id="shutdown"><i class="fas fa-power-off"></i> Shutdown Server</button>
            <button type="button" class="btn btn-outline-primary btn-block" id="back"><i class="fas fa-arrow-left"></i> All Modules</button>
            <p id="out" class="mt-4 d-none"><?php echo "Listening server: <a href='http://".$IP[0].":5557' target='_blank'>http://".$IP[0].":5557/</a>";?></p>
        </div>
    </div>
    </main>

    <?php include "../../includes/footer.php"?>
<script type="text/javascript" src='../../assets/js/port.js'></script>
</body>
</html>
