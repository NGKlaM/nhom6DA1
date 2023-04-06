<section id="content">
    <!-- NAVBAR -->
    <nav>
        <a href="#" class="nav-link">Hello ...</a>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Search...">
                <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
            </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden>
        <a href="#" class="notification">
            <i class='bx bxs-bell'></i>
            <span class="num">8</span>
        </a>
        <a href="#" class="profile">
            <img src="../public/images/people.png">
        </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Quản Lý Sản Phẩm</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Quản Lý Sản Phẩm</a>
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
                    <h3>Danh sách sản phẩm</h3>
                    <a href="index.php?action=createproduct" class="btn btn-primary btn-add-sp" >Thêm Sản Phẩm</a>

                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Ảnh</th>
                            <th>Giá Tiền</th>
                            <th>Loại</th>
                            <th>Tạo Ngày</th>
                            <th>Update Ngày</th>
                            <th>Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($products as $product)
                        {
                            extract($product);
                        ?>
                        <tr>
                            <td><?=$product_id?></td>
                            <td>
                                <?=$product_name?>
                            </td>
                            <td>
                                <img src="../public/images/<?=$image?>">
                            </td>
                            <td><?=$price?></td>
                            <td></td>
                            <td><?=$create_date?></td>
                            <td>01-10-2021</td>
                            <td><a href="index.php?action=createproduct&?" class="btn btn-primary status pending">Sửa</a>
                                <button type="button" class="btn btn-primary status process" data-toggle="modal" data-target="#xoa-san-pham">Xóa</button>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>

        </div>
    </main>
    <!-- MAIN -->
</section>