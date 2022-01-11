<?php
    SESSION_START();

    SESSION_DESTROY();
    echo"<script>alert('Anda telah logout!!')</script>";
    echo"<script>location='../homepage/home.php'</script>"
?>