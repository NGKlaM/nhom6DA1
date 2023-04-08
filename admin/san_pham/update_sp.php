<?php
    updateproduct();
?>
<form method="POST" enctype="multipart/form-data">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm Mới Sản Phẩm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Tên sản phẩm:</label>
                    <input type="text" class="form-control" id="recipient-name" name="pro_name" value="<?=$product_name?>">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Ảnh: (<?=$image?>)</label>
                    <input type="file" class="form-control" id="recipient-name" name="img">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Giá tiền:</label>
                    <input type="text" class="form-control" id="recipient-name" name="price" value="<?=$price?>">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Loại:</label>
                    <select name="brand" id="" class="form-control">
                        <?php
                        foreach (showbrand() as $brand) {
                            extract($brand) ?>
                            <option value="<?= $brand_id ?>" <?=($brand_id == $pro['brand_id']?'selected':'')?>><?= $brand_name ?></option>
                        <?php } ?>
                    </select>

                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Mô tả</label>
                    <input type="text" class="form-control" id="recipient-name" name="des" value="<?=$description?>">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Chi tiết</label>
                    <input type="text" class="form-control" id="recipient-name" name="detail" value="<?=$detail?>">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Số lượng</label>
                    <input type="text" class="form-control" id="recipient-name" name="quantity"value="<?=$quantity?>">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="btn_update_pro" class="btn btn-primary">Add</button>
            </div>
            <span><?= (isset($MES) && !empty($MES)) ? $MES : '' ?></span>
        </div>
    </div>
</form>