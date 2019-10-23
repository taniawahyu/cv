<?php
    include("_partials/header.php");
?>

<body>
    <div class="wrapper">
        <?php
            include("_partials/sidebar.php");
        ?>
        <div class="main-panel">
            <!-- Navbar -->
            <?php
                include("_partials/navbar.php");
            ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Pengalaman</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="<?= base_url('admin/pendidikan/edit')?>" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Sekolah/Universitas</label>
                                                    <input type="hidden" name="id" value="<?php echo $pendidikan->pendidikan_id ?>"/>
                                                    <input type="text" name="nama_sekolah" class="form-control" placeholder="Nama Sekolah" value="<?php echo $pendidikan->nama_sekolah ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tahun Lulus</label></label>
                                                    <input type="text" name="tahun_lulus" class="form-control" placeholder="Tahun Lulus" value="<?php echo $pendidikan->tahun_lulus ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Deskripsi Singkat</label>
                                                    <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" name="deskripsi"><?php echo $pendidikan->deskripsi ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Update Pengalaman</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>