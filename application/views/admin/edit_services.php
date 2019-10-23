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
                                    <h4 class="card-title">Edit Services</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="<?= base_url('admin/services/edit')?>" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Judul Services</label>
                                                    <input type="hidden" name="id" value="<?php echo $services->id ?>"/>
                                                    <input type="text" name="judul_services" class="form-control" placeholder="Judul pengalaman" value="<?php echo $services->judul_services ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Deskripsi singkat</label>
                                                <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" name="deskripsi"><?php echo $services->deskripsi ?></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Update Pengalaman</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>