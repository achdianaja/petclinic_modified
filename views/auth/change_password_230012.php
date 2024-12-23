<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic Hadi</title>
</head>

<body>
    <h1>Pet Clinic Hadi</h1>
    <hr>
    <h3>Change Password</h3>

    <form action="update_password_230012.php" method="POST">
        <table>
            <tr>
                <td>New Password : </td>
                <td><input type="password" name="new_password_230012" id="pass" required></td>
                <td><button onclick="show()" type="button">Show</button></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="CHANGE" name="change" required>
                    <input type="reset" value="RESET" required>
                </td>
            </tr>
        </table>

        <p><a href="../index.php">CANCEL</a></p>
    </form>

    <script>
        function show() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>