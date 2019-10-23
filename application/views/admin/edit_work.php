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
                                    <form method="post" action="<?= base_url('admin/work/edit')?>" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Project</label>
                                                    <input type="hidden" name="id" value="<?php echo $work->id ?>"/>
                                                    <input type="text" name="nama_project" class="form-control" placeholder="Nama Sekolah" value="<?php echo $work->nama_project ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Link Project</label></label>
                                                    <input type="text" name="link_project" class="form-control" placeholder="Tahun Lulus" value="<?php echo $work->link_project ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Jenis Project</label>
                                                    <input type="text" name="jenis_project" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Gambar</label>
                                                    <input type="file" name="gambar" class="form-control">
                                                    <input type="hidden" name="old_image" value="<?php echo $work->gambar?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Update Work</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>