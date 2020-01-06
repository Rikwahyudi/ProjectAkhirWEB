<?php require_once 'includes/header.php'; ?>
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="home.php">Home</a></li>
            <li class="active">Kategori</li>
        </ol>
    </div>
    <div class="panel-default">
        <div class="panel-heading"><i class="glyphicon glyphicon-edit"></i>Manage kategori</div>
    </div>
    <div class="panel-body">
        <div class="div-action pull pull-right" style="padding-bottom:20px;">
            <a href="tambahKategori.php"><button class="btn btn-default button1"> <i
                        class="glyphicon glyphicon-plus-sign"></i> Add Categories</a>
            </button>
        </div> <!-- /div-action -->
        <table>
            <thead>
                <tr>
                    <th>Nama Kategori</th>
                    <th>Status</th>
                    <th style="width:15%;">Options</th>
                </tr>
            </thead>
        </table>
    </div>
</div>