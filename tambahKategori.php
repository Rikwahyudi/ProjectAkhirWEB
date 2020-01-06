<?php require_once 'includes/header.php'; ?>

<div class="panel-default">
    <div class="panel-heading">
        <div class="panel-body">

            <div class="container">
                <h3 style="text-align: center;"> Tambah Kategori</h3>
                <div class="col-sm-6">
                    <form action="">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Nama Kategori</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="nama_kategori" class="form-control" maxlength="10">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Status</label>
                            </div>
                            <div class="col-sm-6">
                                <select type="text" name="status" class="form-control" id="">
                                    <!-- <input type="text" name="jurusan" class="form-control"> -->
                                    <option>Status</option>
                                    <option value="">Pilih</option>
                                    <option value="Tersedia">Tersedia</option>
                                    <option value="Tidak Tersedia">Tidak Tersedia</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>