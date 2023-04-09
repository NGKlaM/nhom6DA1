<main>
    <div class="head-title">
        <div class="left">
            <h1>Thống kê</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Thống kê sản phẩm theo thương hiệu</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Thống kê sản phẩm theo thương hiệu</h3>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Thương hiệu</th>
                        <th>Số lượng</th>
                        <th>Giá cao nhất</th>
                        <th>Giá thấp nhất</th>
                        <th>Giá trung bình</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($tks as $tk) {
                        extract($tk);
                    ?>
                        <tr>
                            <td>1</td>
                            <td><?= $brand_name ?></td>
                            <td><?= $so_luong ?></td>
                            <td><?= $gia_max ?></td>
                            <td><?= $gia_min ?></td>
                            <td><?=$gia_avg?></td>
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