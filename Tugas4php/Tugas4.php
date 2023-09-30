
<fieldset style="background-color: #454769; color: #f8efed;">
    <legend>Form Login</legend>
    <table>
        <thead style="color:#f8c0ed">
            <tr>
                <th>Form Login</th>
            </tr>
        </thead>
        <tbody style="color:#f8c0ed ">
        <form method="POST" action="">
            <tr>
                <td><center>Username</center>
                
                    <input type="text" name="username" id="" size="30" required>
                </td>
            </tr>
            <tr>
                <td><center>Password </center>
                    <input type="password" name="password" id="" size="30" required>
                </td>
            </tr>
            <tfoot>
                <tr>
                    <th><button name="login">Login</button></th>
                </tr>
            </tfoot>
        </form>
        </tbody>
    </table>
</fieldset>

<?php
function cekLogin($username, $password){
    if ($username == 'admin' && $password == 'mimin') {
        return true;
    }
    return false;
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(cekLogin($username,$password)){
        header("Location: admin.php");
        exit();
    } else {
        echo "username atau password salah, coba lagi.";
    }
}
?>