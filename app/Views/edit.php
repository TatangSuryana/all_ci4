<?= $this->extend('templates/main'); ?>
<?= $this->section('container'); ?>

<?php



?>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="border dorder-dark-rounded">
                <h3 class="text-center">Form Edit Barang</h3>
                <form action="/home/edit" method="post" class="p-3">
                    <div class="form-group">
                        <label for="nama">Nama :</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select name="type" id="type" class="form-control">
                            <option value="">Pilih</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori:</label>
                        <select name="kategori" id="kategori" class="form-control">
                            <option value="">Pilih</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <input type="file" name="foto">
                    <button type="submit" class="btn btn-primary">Edit Product</button>

                </form>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>