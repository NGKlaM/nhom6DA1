<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <h2>Cùng kiểm tra những món đồ mà bạn đã mua</h2>
                    <p>Cám ơn các bạn đã đồng hàng cùng zipphone !</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<section class="cat_product_area section_gap">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col">Mã đơn hàng</th>
                            <th scope="col">Giá Tiền</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION['user'])) {
                            $id_user = $_SESSION['user']['user_id'];
                            $stt = 0;
                            foreach (get_bill_by_user($id_user) as $cart) {
                                extract($cart);
                                $stt += 1;
                        ?>
                                <tr>
                                    <td><?= $stt ?></td>
                                    <td><?= $code ?></td>
                                    <td><?= $price_all ?></td>
                                    <td><?php
                                        if ($role == 0) {
                                            echo "<span class='badge badge-danger '>Chờ xác nhận</span>";
                                        } elseif ($role == 1) {
                                            echo 'Đang giao';
                                        } else {
                                            echo 'Đã nhận được hàng';
                                        }
                                        ?></td>
                                    <td><button type="button" class="dropdown-toggle btn btn-sm btn-sucsess" data-toggle="collapse" aria-expanded="false" aria-controls="detail-cart<?=$code?>" data-target="#detail-cart<?=$code?>">Chi tiết</button></td>
                                </tr>
                                <?php
                                foreach (get_cartdetail_by_code($code) as $cart_detail) {
                                ?>
                                    <tr id="detail-cart<?=$code?>" class="collapse">
                                        <td></td>
                                        <td><?= getProductId($cart_detail['product_id'])['product_name'] ?></td>
                                        <td><img src="../public/img/product/<?= getProductId($cart_detail['product_id'])['image'] ?>" style="width: 40px; height: 65px;" alt=""></td>
                                        <td><?=$cart_detail['quantity']?></td>
                                        <td><?=$cart_detail['total_price']?></td>
                                    </tr>
                                <?php } ?>
                        <?php  }
                        } ?>
                
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>