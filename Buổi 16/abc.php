<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<pre>
    Tạo 1 form đăng nhập trong chính file index2.php
    có username và mật khẩu
    nếu username == admin và mật khẩu == 12345
    thì hiển thị ra màn hình 3 dòng thông báo thành công bên dưới
    chú ý không được echo ra thẻ html để hiểu được cách nhúng thẻ html
    trong các cú pháp if else hay for loop trong PHP
    ngược lại hiển thị 3 dòng thông báo thất bại trong chính file này
</pre>
<form action="" method="post" name="form">
    <div>
        <label for="">Username</label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="">Password</label>
        <input type="password" name="password">
    </div>
    <input type="submit" name="submit" value="Login">
</form>
<?php
    if(isset($_POST["username"]) && isset($_POST["password"])){
        if(($_POST["username"] != "") && ($_POST["password"] != "")){
            $username = $_POST["username"];
            $password = $_POST["password"];
            if($username == "admin" && $password =="12345"){ ?>
                <div class="alert alert-success">
                    <strong>Success! Bạn đã đăng nhập thành công</strong>
                </div>
           <?php }else{ ?>
                <div class="alert alert-danger">
                    <strong>Fail!</strong> Sai username và mật khẩu
                </div>
           <?php }
        }
    }
?>
</body>
</html>