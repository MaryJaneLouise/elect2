<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Home</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
<nav class="navbar">
    <!-- LOGO -->
    <div class="logo">MaryJane</div>
    <!-- NAVIGATION MENU -->
    <ul class="nav-links">
        <!-- USING CHECKBOX HACK -->
        <input type="checkbox" id="checkbox_toggle" />
        <label for="checkbox_toggle" class="hamburger">&#9776;</label>

        <!-- NAVIGATION MENUS -->
        <div class="menu">
            <li><a href="#">Home</a></li>
            <li class="services">
                <a href="">Seatworks</a>

                <!-- DROPDOWN MENU -->
                <ul class="dropdown">
                    <li><a href="seatworks/ELECT2_SWM1.php">SWM1</a></li>
                    <li><a href="seatworks/ELECT2_SWM2_1.php">SWM2.1</a></li>
                    <li><a href="seatworks/ELECT2_SWM2_2.php">SWM2.1</a></li>
                </ul>
            </li>
            <li class="services">
                <a href="">Quizzes</a>

                <!-- DROPDOWN MENU -->
                <ul class="dropdown">
                    <li><a href="#">Test1</a></li>
                    <li><a href="#">Test1</a></li>
                    <li><a href="#">Test1</a></li>
                </ul>
            </li>
        </div>
    </ul>
</nav>
</body>

</html>