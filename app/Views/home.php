<?= $this->extend('templates/main'); ?>
<?= $this->section('container'); ?>



<nav class="navbar navbar-expand-lg navbar-light bg-light mx-3">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid mt-3">
    <div class="row">
        <?php $harga = new \App\ThirdParty\myFun(); ?>
        <?php foreach ($barang->show() as $b) :  ?>
            <div class="col-md-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="/assets/gambar/<?= $b["foto_barang"]; ?>" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $b["nama_barang"]; ?></h5>
                                <div>
                                    <h6>Type : <?= $b["jenis_barang"]; ?> </h6>
                                </div>
                                <div>
                                    <h6>Kategori : <?= $b["kategori_barang"]; ?> </h6>
                                </div>
                                <p class="card-text text-primary"><?= $harga::formatDuit($b["harga_barang"]); ?></p>
                                <p class="card-text"><?= $b["deskripsi_barang"]; ?></p>
                                <div class="button-group">
                                    <a href="/home/edit/<?= $b["id"]; ?>" class=" btn btn-success">Edit</a>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;  ?>
    </div>
</div>

<?= $this->endSection(); ?>