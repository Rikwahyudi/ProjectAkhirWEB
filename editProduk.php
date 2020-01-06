<?php require_once 'includes/header.php'; ?>
<div class="panel-default">
    <div class="panel-heading">
        <div class="panel-body">
            <!--tambah produk-->
            <form class="form-horizontal" id="submitProductForm" action="">
                <div>
                    <h4><i class="fa fa-plus"></i> Update Produk</h4>
                </div>
                <div class="modal-body" style="max-height:450px; overflow:auto;">
                    <div id="add-product-messages">
                        <div class="form-group">
                            <label for="productImage" class="col-sm-3 control-label">Product Image: </label>
                            <label class="col-sm-1 control-label">: </label>
                            <div class="col-sm-8">
                                <!-- avatar markup -->
                                <div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>
                                <div class="kv-avatar center-block">
                                    <input type="file" class="form-control" id="productImage" placeholder="Product Name"
                                        name="productImage" class="file-loading" style="width:auto;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /form-group-->
                <div class="form-group">
                    <label for="productName" class="col-sm-3 control-label">Product Name: </label>
                    <label class="col-sm-1 control-label">: </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="productName" placeholder="Product Name"
                            name="productName">
                    </div>
                </div> <!-- /form-group-->
                <div class="form-group">
                    <label for="quantity" class="col-sm-3 control-label">Quantity: </label>
                    <label class="col-sm-1 control-label">: </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="quantity" placeholder="Quantity" name="quantity">
                    </div>
                </div> <!-- /form-group-->
                <div class="form-group">
                    <label for="rate" class="col-sm-3 control-label">Rate: </label>
                    <label class="col-sm-1 control-label">: </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="rate" placeholder="Rate" name="rate"
                            autocomplete="off">
                    </div>
                </div> <!-- /form-group-->
                <div class="form-group">
                    <label for="brandName" class="col-sm-3 control-label">Brand Name: </label>
                    <label class="col-sm-1 control-label">: </label>
                    <div class="col-sm-8">
                        <select class="form-control" id="brandName" name="brandName">
                            <option value="">~~SELECT~~</option>
                            <option value="">barang 1</option>
                            <option value="">barang 2</option>
                            <option value="">barang 3</option>
                        </select>
                    </div>
                </div> <!-- /form-group-->
                <div class="form-group">
                    <label for="productStatus" class="col-sm-3 control-label">Status: </label>
                    <label class="col-sm-1 control-label">: </label>
                    <div class="col-sm-8">
                        <select class="form-control" id="productStatus" name="productStatus">
                            <option value="">~~SELECT~~</option>
                            <option value="1">Available</option>
                            <option value="2">Not Available</option>
                        </select>
                    </div>
                </div>
                <!-- /form-group-->
                <div class="modal-header">
                    <button type="submit" class="btn btn-primary" id="createProductBtn"
                        data-loading-text="Mohon Menunggu"> <i class="glyphicon glyphicon-ok-sign"></i>
                        SimpanPerubahan</button>
                </div>
            </form><!-- form -->
        </div>
    </div>
</div>