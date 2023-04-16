<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../public/css/tttk.css">
    <link rel="icon" type="image/x-icon" href="../public/images/logo.jpg">
</head>
<body>
    <section>
        
        <div class="noi-dung">
            <div class="form">
                <h2>Thông Tin Tài Khoản</h2>
                <form action="index.php?action=dangnhap" method="POST">
                    <div class="input-form">
                        <span>Tên Tài Khoản</span>
                        <input type="text" name="user_name">
                    </div>
                    <div class="input-form">
                        <span>Tên Người Dùng</span>
                        <input type="text" name="user_name">
                    </div>
                    <div class="input-form">
                        <span>Địa Chỉ</span>
                        <input type="text" name="user_name">
                    </div>
                    
                    <div class="input-form">
                        <span>Email</span>
                        <input type="email" name="pass">
                    </div>
                    <div class="input-form">
                        <span>Số Điện Thoại</span>
                        <input type="email" name="pass">
                    </div>
                    <div>
                    <label for="" class="file">Thay Đổi Ảnh</label>
                    <input class="" id="" type="file">
                    </div>
                    <form action="">
                     <span>Giới Tính:</span>
                     <input type="radio" name="gender" value="male" checked> Nam
                     <input type="radio" name="gender" value="female">Nữ
                     <input type="radio" name="gender" value="other"> Khác
                     </form>
                     <!-- <form action="">
                     <span>Ngày Sinh:</span>
                     <input type="datetime-local" name="bdaytime">
                       </form> -->
                    <div class="input-form">
                        <input type="submit" name="login" value="Lưu Thông Tin">
                    </div>
                   
                </form>
                
            </div>
        </div>
        <div class="img-bg">
            <img src="../public/img/tttk.jpg" alt="Hình Ảnh Minh Họa">
        </div>
    </section>
</body>
</html>