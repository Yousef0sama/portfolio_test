<!DOCTYPE html>
<html lang="en">

<?php include_once "head.php"; ?>

<body>

    <?php include_once "header.php"; ?>

    <!--  about section start -->

    <section id="about_section">

        <div id="header">
            <h5 id="t1"> MAIN INFO </h5>
            <br>
            <h3 id="t2"> ABOUT ME </h3>
        </div>

        <br>
        <br>
        <br>

        <div id="picc">

            <div id="border">
                <div id="banner">
                    <img src="media/images/pic.png" id="pic">
                </div>
            </div>

            <div id="social_icons">
                <a href="https://www.facebook.com/youssef.sniper.332" target="_blank"  id="f"> <i class="fab fa-facebook-f"></i> </a>
                <a href="https://www.instagram.com/x__you._.sef__x" target="_blank"  id="i"> <i class="fab fa-instagram"></i> </a>
                <a href="https://twitter.com/x__godzilla__x" target="_blank"  id="t"> <i class="fab fa-twitter"></i> </a>
            </div>

        </div>

        <div id="container">
            <div id="text_ar">
                <b> السلام عليكم ورحمة الله وبركاته إسمي يوسف. أنا مطور مواقع اختصاص فل ستاك. </b>
                <br>
                <br>
                <span> ما هي لغات البرمجة التي لدي مهارة بها؟ </span>
                <br>
                <br>
                <span> لدي مهارة في </span> <span> HTML5, CSS3, JavaScript, PHP and MySQL </span>
                <br>
                <br>
                <span>
                    <b>
                        يجب ان يتوفر مع العميل تصميم اذاكان يريد بناء موقع
                        <br>
                        <br>
                        اما اذا كان يريد تصميم فيجب عليه ان يتوفر معه المحتوي الذي يريد كتابته في الصفحة
                    </b>
                </span>
                <br>
                <br>
                <span> السعر 5 دولار لكل ساعة وان كان السعر للعمل كاملا يتم الاتفاق عليه فيما بعد </span>
            </div>
            <div id="text_en">
               <b> Hi! My name is Yousef. I'm a web developer full stack specialty. </b>
               <br>
               <br>
               <span> What programming languages ​​do I have skill with? </span>
               <br>
               <br>
               <span> I have skills in HTML5, CSS3, JavaScript, PHP and MySQL </span>
               <br>
               <br>
               <span>
                    <b>
                        The client must have a design if he wants to build a website
                        <br>
                        <br>
                        But if he wants a design, he must have the content he wants to write on the page
                    </b>
               </span>
               <br>
               <br>
               <span> price 5 dollar for hour and If the price is for the entire work, it will be agreed upon later </span>
            </div>

            <br>

            <input type="button" value="العربية" id="ar">

            <input type="button" value="English" id="en">

        </div>

        <div id="skills">
            <h1>skills</h1>

            <h3>
                HTML5
                <br>
                <br>
                <span> <div id="html"> </div> </span>
                <br>
                <br>
                92%
            </h3>

            <h3>
                CSS3
                <br>
                <br>
                <span> <div id="css"> </div> </span>
                <br>
                <br>
                88%
            </h3>

            <h3>
                JavaScript
                <br>
                <br>
                <span> <div id="js"> </div> </span>
                <br>
                <br>
                80%
            </h3>

            <h3>
                PHP
                <br>
                <br>
                <span> <div id="php"> </div> </span>
                <br>
                <br>
                80%
            </h3>

            <h3 id="my">
                MySQL
                <br>
                <br>
                <span> <div id="mysql"> </div> </span>
                <br>
                <br>
                80%
            </h3>
        </div>

    </section>

    <!--  about section end -->

    <!-- bar start -->

    <section id="menu_section">

        <div id="bar">
            <a href="index.php" class="disable" id="home">Home</a>
            <br>
            <a href="about.php" class="active" id="about">About me</a>
            <br>
            <a href="service.php" class="disable" id="service">Service</a>
            <br>
            <a href="portfolio.php" class="disable" id="portfolio">Portfolio</a>
            <br>
            <a href="contact.php" class="disable" id="conact">Conact Me</a>
        </div>

        <div id="cn-close">
            <input type="button" value="X" id="close">
        </div>

        <p id="copy_right">
            &copy; 2021 Godzilla
        </p>

    </section>

    <!-- bar end -->

<script src="js\core.js"></script>


</body>
</html>