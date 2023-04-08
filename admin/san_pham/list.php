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
                 <a href="index.php?action=createproduct" class="btn btn-primary btn-add-sp">Thêm Sản Phẩm</a>

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
                     <?php foreach ($products as $product) {
                            extract($product);
                        ?>
                         <tr>
                             <td><?= $product_id ?></td>
                             <td>
                                 <?= $product_name ?>
                             </td>
                             <td>
                                 <img src="../public/images/<?= $image ?>">
                             </td>
                             <td><?= $price ?></td>
                             <td><?php echo getBrandId($brand_id)['brand_name']; ?></td>
                             <td><?= $create_date ?></td>
                             <td><?=$update_date?></td>
                             <td><a href="index.php?action=updateproduct&id_pro=<?=$product_id?>" class="btn btn-primary status pending">Sửa</a>
                                 <a href="index.php?action=deleteproduct&id_pro=<?=$product_id?>" onclick="return confirm('bạn chắc chắn xóa chứ!');" class="btn btn-primary status process">Xóa</a>
                             </td>
                         </tr>
                     <?php } ?>
                 </tbody>
             </table>
         </div>

     </div>
 </main>
 <!-- MAIN -->
 </section>