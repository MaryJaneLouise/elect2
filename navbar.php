<script type="text/javascript">
    function changeFrame(link) {
        document.getElementById("content-frame").src = link;
    }
</script>

<div class="navbar">
    <li class="dropdown">
        <a href="#">Lectures</a>

        <ul class="dropdown-menu">
            <li><a href="#" onclick="changeFrame('lectures/Lecture_Simple.php')">Basics</a></li>
            <li><a href="#" onclick="changeFrame('lectures/Lecture_OOP.php')">Basics (OOP)</a></li>
            <li><a href="#" onclick="changeFrame('lectures/Lecture_Abstract.php')">OOP Abstract</a></li>
            <li><a href="#" onclick="changeFrame('lectures/Lecture_Interfaces.php')">OOP Interfaces</a></li>
            <li><a href="#" onclick="changeFrame('lectures/Lecture_Traits.php')">OOP Traits</a></li>
            <li><a href="#" onclick="changeFrame('lectures/Lecture_CarEx.php')">OOP Form Example</a></li>
        </ul>

    </li>
    <li class="dropdown">
        <a href="#">Seatworks</a>

        <!-- DROPDOWN MENU -->
        <ul class="dropdown-menu">
            <li><a href="#" onclick="changeFrame('seatworks/ELECT2_SWM1.php')">SWM1</a></li>
            <li><a href="#" onclick="changeFrame('seatworks/ELECT2_SWM2_1.php')">SWM2.1</a></li>
            <li><a href="#" onclick="changeFrame('seatworks/ELECT2_SWM2_2.php')">SWM2.2</a></li>
            <li><a href="#" onclick="changeFrame('seatworks/ELECT2_SWM2_2.php')">SWM3</a></li>
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
    <li class="time" id="time" style="float:right"></li>
</div>