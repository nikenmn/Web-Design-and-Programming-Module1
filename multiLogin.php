<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <?php
            if (isset($_GET["error"])){
                $error = $_GET["error"];
            } else {
                $error = "";
            }
            $message = "";
            if ($error == "gagal"){
                $message = "Gagal Login, Silahkan coba kembali";
            }
        ?>
        <p style="color:red"> <?php echo $message; ?> </p>
        <form action="multiProcess.php" method="POST">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" size="20"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" size="20"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="login" value="login"></td>
                </tr>
            </table>
        </form>
    </body>
</html>