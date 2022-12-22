<?php

session_start();

$errn = "";
$errh = "";
$erre = "";
$errm = "";

if (isset($_POST['send'])) {


    if ($_POST['name'] == '' && strlen($_POST['name']) < 3) {
        $errn = "your name must be more than 3 chars";
    }   else {
        $_SESSION['name'] = $_POST['name'];
    }

    if ($_POST['header'] == '' && strlen($_POST['header']) < 15) {
        $errh = "header must be more than 15 chars";
    }   else {
        $_SESSION['header'] = $_POST['header'];
    }

    if ($_POST['email'] == '' && strlen($_POST['email']) < 10) {
        $erre = "your email must be more than 10 chars";
    }   else {
        $_SESSION['email'] = $_POST['email'];
    }

    if ($_POST['masg'] == '' && strlen($_POST['masg']) < 20) {
        $errm = "masssage must be more than 20 chars";
    }   else {
        $_SESSION['masg'] = $_POST['masg'];
    }

    if (!empty($_SESSION['name']) && !empty($_SESSION['header']) && !empty($_SESSION['email']) && !empty($_SESSION['masg'])) {
        header("location:send.php");
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include_once "head.php"; ?>

</head>
<body>

    <?php include_once "header.php"; ?>

    <section id="contact_section">

        <p>Contact me on E-mail</p>

        <div id="container">

            <div>

                <form action="contact.php" method="post">

                    <i class="fa-solid fa-user"></i> <input type="text" name="name" id="name" placeholder="Name">
                    <br>
                    <br>
                    <span id="errN" class="err"> <?php echo $errn; ?> </span>
                    <br>
                    <br>
                    <i class="fa-solid fa-pen"></i> <input type="text" name="header" id="Header" placeholder="header">
                    <br>
                    <br>
                    <span id="errH" class="err"> <?php echo $errh; ?> </span>
                    <br>
                    <br>
                    <i class="fa-solid fa-envelope"></i> <input type="text" name="email" id="email" placeholder="email">
                    <br>
                    <br>
                    <span id="errE" class="err"> <?php echo $erre; ?> </span>
                    <br>
                    <br>
                    <i class="fa-solid fa-message"></i> <textarea name="masg" id="masg" placeholder="Massage"></textarea>
                    <br>
                    <br>
                    <span id="errM" class="err"> <?php echo $errm; ?> </span>
                    <br>
                    <br>
                    <input type="submit" name="send" id="send" value="Send">

                </form>

            </div>

        </div>

        <div style="text-align:center; padding-bottom:30px; margin-top:-30px;">

            <?php
            if (@$_SESSION['sent'] == "sent") {
                $_SESSION['sent'] = "";
                ?>
            <h1 style="color:rgb(0,255,0)">massage sent!</h1>
            <?php
            } elseif (@$_SESSION['sent'] == "not sent") {
                $_SESSION['sent'] = "";
                ?>
                <h1 style="color:rgb(255,0,0)">massage didn't sent! check your E-mail</h1>
                <?php
            } else {
                $_SESSION['sent'] = "";
                ?>
                <h1></h1>
                <?php
            }
            ?>

        </div>


    </section>

    <section id="menu_section">

        <div id="bar">
            <a href="index.php" class="disable" id="home" name="hh">Home</a>
            <br>
            <a href="about.php" class="disable" id="about">About me</a>
            <br>
            <a href="service.php" class="disable" id="service">Service</a>
            <br>
            <a href="portfolio.php" class="disable" id="portfolio">Portfolio</a>
            <br>
            <a href="contact.php" class="active" id="conact">Conact Me</a>
        </div>

        <div id="cn-close">
            <input type="button" value="X" id="close">
        </div>

        <p id="copy_right">
            &copy; 2021 Godzilla
        </p>

    </section>

    <?php
        /*$doc = new DomDocument();
        @$doc->loadHTMLFile('contact.php');
        $div = $doc->getElementById('home');
        echo $div->textContent;*/
    ?>

    <script src="js\core.js"></script>

    <script>

        let header    = document.getElementById("Header"),
            email     = document.getElementById("email"),
            masg      = document.getElementById("masg"),
            send      = document.getElementById("send"),
            errN      = document.getElementById("errN"),
            errE      = document.getElementById("errE"),
            errH      = document.getElementById("errH"),
            errM      = document.getElementById("errM"),
            Name      = document.getElementById("name");

        function valid() {


            const rr = ["1","2","3","4","5","6","7","8","9","0","!","@","#","$","%","^","&","*","(",")","-","=","+",'"',"'","/","<",">","?",";",".",",","[","]","{","}","_"];


            Name.onblur = function () {
                n = Name.value.length;

                N = Name.value.charAt(n - 1);

                vN = rr.includes(N);

                if (Name.value == "") {
                    errN.innerHTML = "please input your name";
                    nerr = "err";
                } else if (n < 3) {
                    errN.innerHTML = "name must be more than 3 letters";
                    nerr = "err";
                } else if (vN){
                    errN.innerHTML = "please input letters only";
                    Name.maxLength = n - 1;
                    nerr = "err";
                } else {
                    errN.innerHTML = "";
                    Name.maxLength = 64;
                    nerr = "";
                }

            }

            Name.oninput = function () {
                n = Name.value.length;

                N = Name.value.charAt(n - 1);

                vN = rr.includes(N);

                if (vN){
                    errN.innerHTML = "please input letters only";
                    Name.maxLength = n - 1;
                    nerr = "err";
                } else if (Name.value == "") {
                    errN.innerHTML = "please input your name";
                    nerr = "err";
                } else if (n < 3) {
                    errN.innerHTML = "name must be more than 3 letters";
                    nerr = "err";
                } else {
                    errN.innerHTML = "";
                    Name.maxLength = 64;
                    nerr = "";
                }

            }

            header.oninput = function () {

                if (header.value == "") {
                    errH.innerHTML = "please input the header of massage";
                    herr = "err";
                } else if (header.value.length < 10) {
                    errH.innerHTML = "header of massage must be more than 10 letters";
                    herr = "err";
                } else {
                    errH.innerHTML = "";
                    herr = "";
                }
            }

            header.onblur = function () {

                if (header.value == "") {
                    errH.innerHTML = "please input the header of massage";
                    herr = "err";
                } else if (header.value.length < 10) {
                    errH.innerHTML = "header of massage must be more than 10 letters";
                    herr = "err";
                } else {
                    errH.innerHTML = "";
                }
            }

            email.oninput = function () {
                if (email.value == "") {
                    errE.innerHTML = "please input your E-mail";
                } else if (email.value.length < 15) {
                    errE.innerHTML = "E-mail must be more than 15 letters";
               } else {
                    errE.innerHTML = "";
                }
            }

            email.onblur = function () {
                if (email.value == "") {
                    errE.innerHTML = "please input your E-mail";
                } else if (email.value.length < 15) {
                    errE.innerHTML = "E-mail must be more than 15 letters";
                } else {
                    errE.innerHTML = "";
                }
            }

            masg.oninput = function () {
                if (masg.value == "") {
                    errM.innerHTML = "please input your massage";
                } else if (masg.value.length < 20) {
                    errM.innerHTML = "massage must be more than 20 letters";
                } else {
                    errM.innerHTML = "";
                }
            }

            masg.onblur = function () {
                if (masg.value == "") {
                    errM.innerHTML = "please input your massage";
                } else if (masg.value.length < 20) {
                    errM.innerHTML = "massage must be more than 20 letters";
                } else {
                    errM.innerHTML = "";
                }
            }

        }

        window.valid()

    </script>

</body>
</html>