<?php require_once 'includes/header.php'; ?>

<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="home.php">Home</a></li>
            <li class="active">Produk</li>
        </ol>
        <div class="panel-default">
            <!--Panel Heading-->
            <div class="panel-heading">
                <div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Produk</div>
                <div class="panel-body">
                    <div class="remove-message"></div>
                    <div class="div-action pull pull-right" style="padding-bottom:20px;">
                        </button>
                        <a href="tambahProduk.php"><button class="btn btn-default button1"> <i
                                    class="glyphicon glyphicon-plus-sign"></i>Tambah Produk</button></a>
                    </div> <!-- /fungsi buat tombol tambah produk -->
                    <table class="table" id="manageProductTable">
                        <thead>
                            <tr>
                                <th style="width:10%;">foto</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Quantity</th>
                                <th>Merek</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th style="width:15%;">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <th>Ini Foto</th>
                            <th>Ini Nama Produk</th>
                            <th>Ini Harga</th>
                            <th>Ini Quantity</th>
                            <th>Ini Merek</th>
                            <th>Ini Kategori</th>
                            <th>Ini Status</th>
                            <th><a href="editProduk.php">Edit</a>||<a href="">Hapus</a></th>
                        </tbody>
                    </table>
                    <!-- /table -->
                </div><!-- /panel-body -->
            </div>
            <!--panel heading-->
        </div>
        <!--col md 12-->
    </div><!-- /row -->
</div>