<!DOCTYPE html>
<html lang="en">
<head>

    <?php include_once "head.php"; ?>

</head>
<body>

    <?php include_once "header.php"; ?>

    <section id="portfolio_section">

        <h1> ! ROTATE YOUR PHONE OR TABLET </h1>

        <img name="imgs" id="imgs">

    </section>

    <section id="menu_section">

        <div id="bar">
            <a href="index.php" class="disable" id="home">Home</a>
            <br>
            <a href="about.php" class="disable" id="about">About me</a>
            <br>
            <a href="service.php" class="disable" id="service">Service</a>
            <br>
            <a href="portfolio.php" class="active" id="portfolio">Portfolio</a>
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

    <script src="js\core.js"></script>

    <script>

        const imags = ["media/images/coming_soon.png", "media/images/demo.png", "media/images/dura.png", "media/images/portfolio.png"];
        let i = 0;

        function changeImg () {
            document.imgs.src = imags[i];

            if (i < imags.length - 1) {
                i++;
            } else {
                i = 0;
            }

            setTimeout("changeImg()", 5000);

        }

        window.onload = changeImg;
    </script>

</body>
</html>