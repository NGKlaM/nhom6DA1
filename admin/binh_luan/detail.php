<main>
    <div class="head-title">
        <div class="left">
            <h1>Quản Lý Bình Luận</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Quản Lý Bình Luận</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Danh sách bình luận</h3>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Số lượng</th>
                        <th>Mới nhất</th>
                        <th>Cũ nhất</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($list_cmt as $cmt) {
                        extract($cmt);
                    ?>
                        <tr>
                            <td>1</td>
                            <td><?= $product_id ?></td>
                            <td><?= $so_luong ?></td>
                            <td><?= $moi_nhat ?></td>
                            <td><?= $cu_nhat ?></td>
                            <td>
                                <a href="" class="btn btn-primary status pending">Xóa</a>
                            </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->
</section>