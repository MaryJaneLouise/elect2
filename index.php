<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<div class="btn">
    <span class="fas fa-bars"></span>
</div>
<nav class="sidebar">
    <div class="text">
        Portfolio<br>Diaz, Jericho V.
    </div>
    <ul>
        <li class="active"><a href="ELECT2_SWM1.php">Dashboard</a></li>
        <li>
            <a href="#" class="feat-btn">Seatworks
                <span class="fas fa-caret-down first"></span>
            </a>
            <ul class="feat-show">
                <li><a href="ELECT2_SWM1.php">Seatwork 1</a></li>
                <li><a href="ELECT2_SWM2_1.php">Seatwork 2.1</a></li>
                <li><a href="ELECT2_SWM2_2.php">Seatwork 2.2</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="serv-btn">Services
                <span class="fas fa-caret-down second"></span>
            </a>
            <ul class="serv-show">
                <li><a href="#">App Design</a></li>
                <li><a href="#">Web Design</a></li>
            </ul>
        </li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Overview</a></li>
        <li><a href="#">Shortcuts</a></li>
        <li><a href="#">Feedback</a></li>
    </ul>
</nav>
<div name="test1" class="content">
    <div class="header">
        Sidebar Menu with sub-menu
    </div>
    <p>
        HTML CSS & Javascript (Full Tutorial)
    </p>
</div>
<script>
    $('.btn').click(function(){
        $(this).toggleClass("click");
        $('.sidebar').toggleClass("show");
    });
    $('.feat-btn').click(function(){
        $('nav ul .feat-show').toggleClass("show");
        $('nav ul .first').toggleClass("rotate");
    });
    $('.serv-btn').click(function(){
        $('nav ul .serv-show').toggleClass("show1");
        $('nav ul .second').toggleClass("rotate");
    });
    $('nav ul li').click(function(){
        $(this).addClass("active").siblings().removeClass("active");
    });
</script>
</body>
</html>