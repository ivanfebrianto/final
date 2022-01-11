<?php
    if(isset($_POST["submit"]))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $pwd = $_POST['pwd'];
        $pwdrepeat = $_POST['pwdrepeat'];

        require_once '../../assets/connect.php';
        require_once 'functions.inc.php';

        if(pwdMatch($pwd,$pwdrepeat)!== false)
        {
            header("location: ../template.php?error=passworddontmatch");
            exit();
        }

        if(usernameExists($conn, $username,$email)!== false)
        {
            header("location: ../template.php?error=usernamealreadytaken");
            exit();
        }
        else
        {
            createUser($conn, $username,$email,$address,$phone,$pwd);
            ?>
            <script>
                alert("Account has been created");
            </script>
            <?php
            header("location: ../template.php?page=login");
        }

    }
    else
    {
        header("location: ../template.php");
    }
?>