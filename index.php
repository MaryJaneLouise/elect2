<?php
session_start();
if(isset($_POST['logout'])) {
    session_destroy();
    header('Location: playground/login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<?php include('navbar.php'); ?>

<head>
    <title>ELECT2 Portfolio</title>
    <link
        rel="stylesheet"
        type="text/css"
        href="css/style.css"/>

    <script>
        function updateTitle() {
            var contentFrame = document.getElementById("content-frame");
            var pageTitle = contentFrame.contentDocument.title;
            document.title = pageTitle;
        }
    </script>
</head>

<body>
    <iframe
            id="content-frame"
            height="100%"
            width="100%"
            style="border:none;"
            src="lectures/Lecture_Simple.php"
            onload="updateTitle()">
    </iframe>

    <script type="text/javascript">
        function stickyNavbar() {
            var navbar = document.querySelector("nav");
            if (window.pageYOffset >= navbar.offsetTop) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
        }

        window.onscroll = function() { stickyNavbar(); };
        window.onpageshow = function(event) {
            if (event.persisted) {
                window.location.reload();
            }
        };

        function updateClock() {
            var timeElement = document.getElementById('time');
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();
            var ampm = (hours < 12) ? "AM" : "PM";
            hours = (hours > 12) ? hours - 12 : hours;
            hours = (hours == 0) ? 12 : hours;
            minutes = (minutes < 10) ? "0" + minutes : minutes;
            seconds = (seconds < 10) ? "0" + seconds : seconds;
            var timeString = hours + ":" + minutes + ":" + seconds + " " + ampm;
            timeElement.innerHTML = timeString;
        }
        updateClock();
        setInterval(updateClock, 1000);
    </script>
</body>
</html>
