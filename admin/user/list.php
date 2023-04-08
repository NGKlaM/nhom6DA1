<main>
    <div class="head-title">
        <div class="left">
            <h1>Quản Lý User</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Quản Lý User</a>
                </li>
            </ul>
        </div>
    </div>

    <ul class="box-info">
        <li>
            <i class='bx bxs-calendar-check'></i>
            <span class="text">
                <h3>1020</h3>
                <p>Đơn Hàng</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-group'></i>
            <span class="text">
                <h3>2834</h3>
                <p>User</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-dollar-circle'></i>
            <span class="text">
                <h3>$2543</h3>
                <p>Doanh Thu</p>
            </span>
        </li>
    </ul>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Danh sách user</h3>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên Đăng Nhập</th>
                        <th>Email</th>
                        <th>Số Điện Thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Role</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($user as $us){
                            extract($us);
                    ?>
                    <tr>
                        <td>1</td>
                        <td>
                            <?=$user_name?>
                        </td>
                        <td>
                            <?=$email?>
                        </td>
                        <td><?= $phone_number?></td>
                        <td><?= $address?></td>
                        <td>Admin</td>
                        <td><button type="button" class="btn btn-primary status pending" data-toggle="modal" data-target="#sua-user">Sửa</button>
                            <button type="button" class="btn btn-primary status process" data-toggle="modal" data-target="#xoa-user">Xóa</button>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</main>