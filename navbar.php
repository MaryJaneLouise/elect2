<script type="text/javascript">
    function changeFrame(link) {
        document.getElementById("content-frame").src = link;
    }
</script>

<div class="navbar">
    <li><a href="#" onclick="changeFrame('lectures.php')">Lectures</a></li>
    <li class="dropdown">
        <a href="#">Seatworks</a>

        <!-- DROPDOWN MENU -->
        <ul class="dropdown-menu">
            <li><a href="#" onclick="changeFrame('seatworks/ELECT2_SWM1.php')">SWM1</a></li>
            <li><a href="#" onclick="changeFrame('seatworks/ELECT2_SWM2_1.php')">SWM2.1</a></li>
            <li><a href="#" onclick="changeFrame('seatworks/ELECT2_SWM2_2.php')">SWM2.2</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#">Quizzes</a>

        <!-- DROPDOWN MENU -->
        <ul class="dropdown-menu">
            <li><a href="#">Test1</a></li>
            <li><a href="#">Test2</a></li>
            <li><a href="#">Test3</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#">Settings</a>

        <!-- DROPDOWN MENU -->
        <ul class="dropdown-menu">
            <li><a href="#">Account</a></li>
            <li><a href="#">???</a></li>
            <li><a href="#">Test1</a></li>
        </ul>
    </li>
    <li><a href="playground/login.php">Logout</a></li>
</div>