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
<head>
    <title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body >
<?php include('navbar.php'); ?>

<iframe
        id="content-frame"
        height="100%"
        width="100%"
        style="border:none;"
        src="lectures.php">
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
</script>
</body>
</html>
