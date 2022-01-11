<?php
    function pwdMatch($pwd,$pwdrepeat)
    {
        $result='';
        
        if($pwd !== $pwdrepeat)
        {
            $result = true;
        }
        else
        {
            $result = false;
        }
        return $result;
    }

    function usernameExists($conn, $username, $email)
    {
        $sql = "SELECT * FROM user WHERE UserName = ? OR UserEmail = ?;";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt,$sql))
        {
            header("location: ../template.php?error=statementfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss",$username,$email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData))
        {
            return $row;
        }
        else
        {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function createUser($conn, $username,$email,$address,$phone,$pwd)
    {
        $sql = "INSERT INTO user (UserName,UserEmail,UserAddress, NomorTelepon, UserPassword) VALUES (?,?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql))
        {
            header("location: ../template.php?error=statementfailed");
            exit();
        }

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "sssss",$username,$email,$address,$phone,$hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("location: ../index.php?error=none");
    }

    function loginUser($conn, $username, $pwd)
    {
        $usernameExists = usernameExists($conn, $username, $username);
        if($usernameExists === false)
        {
            header("location: ../template.php?page=login&&error=wronglogin");
            exit();
        }

        $pwdHashed = $usernameExists['UserPassword'];
        $checkPwd = password_verify($pwd,$pwdHashed);

        if($checkPwd === false)
        {
            header("location: ../template.php?page=login&&error=wronglogin");
            exit();
        }
        else if($checkPwd === true)
        {
            session_start();
            $_SESSION['userid'] = $usernameExists['UserId'];
            header("location: ../../homepage/home.php");
            exit;
        }
    }
?>