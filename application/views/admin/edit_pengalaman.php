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
                                    <form method="post" action="<?= base_url('admin/pengalaman/edit')?>" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Judul pengalaman</label>
                                                    <input type="hidden" name="id" value="<?php echo $pengalaman->pengalaman_id ?>"/>
                                                    <input type="text" name="judul_pengalaman" class="form-control" placeholder="Judul pengalaman" value="<?php echo $pengalaman->judul ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Perusahaan</label>
                                                    <input type="text" name="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan" value="<?php echo $pengalaman->perusahaan ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tahun Mulai</label>
                                                    <input type="text" class="form-control" name="tahun_mulai" placeholder="Tahun mulai" value="<?php echo $pengalaman->tahun_mulai?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tahun Akhir</label>
                                                    <input type="text" name="tahun_akhir" class="form-control" placeholder="Tahun akhir" value="<?php echo $pengalaman->tahun_akhir ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Cerita singkat</label>
                                                    <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" name="deskripsi"><?php echo $pengalaman->deskripsi ?></textarea>
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