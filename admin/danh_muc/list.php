
    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Quản Lý Danh Mục</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Quản Lý Danh Mục</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="table-data">
            <div class="todo">
                <div class="head">
                    <h3>Danh sách danh mục</h3>
                    <a href="index.php?action=createbrand" class="btn btn-primary status pending btn-add-sp" >Thêm danh mục</a>
                </div>
                <ul class="todo-list">
                    <?php foreach ($brands as $brand) {
                        extract($brand);
                    ?>
                        <li class="completed">
                            <?= $brand_name ?>
                                <a href="index.php?action=deletebrand&id_brand=<?=$brand_id?>" class="btn btn-primary status pending" onclick="return confirm('bạn chắc chắn xóa chứ!');">Xóa</a>
                        </li>
                    <?php
                    }
                    ?>

                </ul>
            </div>

        </div>
    </main>
    <!-- MAIN -->
</section>