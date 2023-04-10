    <div class="chuchay">
        <marquee behavior="" direction="right">
            <a href="">
                Chào Mừng Quí Khách Đến Với thegioialo Rất Hân Hạnh Được Phục Vụ Quí Khách
            </a>
        </marquee>
    </div>

    <div class="content">
        <h1 class="the_h1">SẢN PHẨM MỚI</h1>
        <div class="content1">
            <?php
            foreach (get8productnew() as $pro) {
                extract($pro);
            ?>
            <div class="content1--item">
                <a href="" style="text-decoration: none;">
                    <div class="item_img">
                        <img src="../public/images/<?= $image ?>" alt="" width="250px">
                    </div>
                    <div class="desc">
                        <p class="item_tensp"><?= $product_name ?></p>
                        <p><strong><?= $price ?></strong><del>20.000.000 đ</del></p>
                        <button type="button">
                            Thêm Vào Giỏ
                        </button>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>

        <div class="banner--mid">
            <img src="./public/images/bannermid.jpg" alt="">
        </div>

        <h1 class="the_h1">Sản Phẩm Khác</h1>
        <div class="content1">
            <?php
                foreach(getAllproduct() as $pro ){
                    extract($pro);
            ?>
            <div class="content1--item">
                <a href="">
                    <div class="item_img">
                        <img src="../public/images/<?=$image?>" alt="" width="250px">
                    </div>
                    <div class="desc">
                        <p class="item_tensp"><?=$product_name?> </p>
                        <p><strong><?=$price?> đ</strong><del>20.000.000 đ</del></p>
                        <button type="button">
                            Thêm Vào Giỏ
                        </button>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>