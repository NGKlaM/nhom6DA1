 <!--================Home Banner Area =================-->
 <section class="banner_area">
     <div class="banner_inner d-flex align-items-center">
         <div class="container">
             <div class="banner_content d-md-flex justify-content-between align-items-center">
                 <div class="mb-3 mb-md-0">
                     <h2>Giỏ hàng</h2>
                     <p>Chuẩn bị thanh toán thui ...</p>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--================End Home Banner Area =================-->

 <!--================Cart Area =================-->
 <section class="cart_area">
     <div class="container">
         <div class="cart_inner">
             <div class="table-responsive">
                 <table class="table">
                     <thead>
                         <tr>
                             <th scope="col">Sản Phẩm</th>
                             <th scope="col">Giá Tiền</th>
                             <th scope="col">Số lượng</th>
                             <th scope="col">Tổng</th>
                         </tr>
                     </thead>
                     <tbody>
                        <?php
                            if(!empty($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $product_id => $product){
                                    extract($product);
                        ?>

                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="../public/img/product/<?=$image?>" alt="" style="width: 145px;height:100px;"/>
                                    </div>
                                    <div class="media-body">
                                        <p><?=$product_name?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5><?=$price?></h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <input value="<?=$quantity?>" type="number" name="qty" id="sst" maxlength="12"  title="Quantity:" class="input-text qty" />

                                </div>
                            </td>
                            <td>
                                <h5><?=$price*$quantity?></h5>
                            </td>
                        </tr>

                        <?php
                                }
                            }
                        ?>
                        
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <h5>Thành tiền</h5>
                            </td>
                            <td>
                                <h5>$2160.00</h5>
                            </td>
                        </tr>

                        <tr class="out_button_area">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="checkout_btn_inner">
                                    <a class="gray_btn" href="index.php">Tiếp tục mua sắm</a>
                                    <a class="main_btn" href="index.php?action=thanhtoan">Thanh toán giỏ hàng</a>
                                </div>
                            </td>
                        </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </section>
 <!--================End Cart Area =================-->