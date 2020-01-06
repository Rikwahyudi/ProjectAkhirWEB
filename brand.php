<?php require_once 'includes/header.php'; ?>

<div class="row">
    <div class="col-md-12">
    <ol class="breadcrumb">
		  <li><a href="home.php">Home</a></li>		  
		  <li class="active">Brand</li>
		</ol>
        <div class="panel-default">
            <div class="panel-heading">
                <div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Brand</div>
            </div>
            <div class="panel-body">
                <div class="div-action pull pull-right" style="padding-bottom:20px;">
                    <a href="tambahBrand.php"> <button class="btn btn-default button1"><i class="glyphicon glyphicon-plus-sign"></i>
                            Add Brand </button></div></a>
            </div>
            <!--fungsi-->
            <table class="table" id="manageBrandTable">
                <thead>
                    <tr>
                        <th>Brand Name</th>
                        <th>Status</th>
                        <th style="width:15%;">Options</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>