<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <h2>Chi tiết sản phẩm</h2>
                    <p>Đây là sản phẩm mà bạn đang để ý ư ...</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
<?php
if (is_array($product)) {
    extract($product);
}
?>
<!--================Single Product Area =================-->
<div class="product_image_area mb-40">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="s_product_img">
                    <div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="../public/img/product/<?= $image ?>" alt="firt" />
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3><?= $product_name ?></h3>
                    <h2><?= $price ?> đ</h2>
                    <ul class="list">
                        <li>
                            <a class="active" href="#">
                                <span>Hãng </span> : <?= getBrandId($brand_id)['brand_name'] ?></a>
                        </li>
                        <li>
                            <a href="#"> <span>Dung lượng</span> : 64GB</a>
                        </li>
                    </ul>
                    <p>
                        <?= $description ?>
                    </p>
                    <form action="index.php?action=addgiohang" method="POST">
                        <div class="product_count">
                            <label for="qty">Quantity:</label>
                            <input type="number" name="quantity" id="sst" maxlength="12" value="1" min="1" title="Quantity:" class="input-text qty" />
                        </div>
                        <div class="card_area">

                            <input type="hidden" value="<?= $product_id ?>" name="product_id">
                            <input type="submit" class="main_btn" value="Thêm vào giỏ hàng" name="add_to_cart">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->