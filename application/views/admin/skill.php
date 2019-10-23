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
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="card-title">My Skill</h4>
                                            <p class="card-category">Masukkan skill anda dan tambahkan disini</p>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-succcess" data-toggle="modal" data-target="#addExperience"> <i class="fa fa-plus"></i>
                                            Skill Baru
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Tambah Baru-->
                                <div class="modal fade" id="addExperience" tabindex="-1" role="dialog" aria-hidden="true" style="top: -100px!important;">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="newSkill">Skill Baru</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="<?= base_url('admin/skill/simpan') ?>" method="post">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label>Nama Skill</label>
                                                            <input type="text" name="nama_skill" class="form-control" placeholder="Nama Skill" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Value</label>
                                                            <input type="text" name="value" class="form-control" placeholder="Contoh : 90" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger btn-fill pull-right">Cancel</button>
                                            <button type="submit" class="btn btn-info btn-fill pull-right">Simpan</button>
                                        </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Nama Skill</th>
                                            <th>Value</th>
                                            <th>Opsi</th>
                                        </thead>
                                        <tbody>
                                            <?php foreach($skill as $data){?>
                                            <tr>
                                                <td><?php echo $data->id ?></td>
                                                <td><?php echo $data->nama_skill ?></td>
                                                <td><?php echo $data->value ?></td>
                                                <td class="td-actions text-right">
                                                    <a href="<?php echo site_url('admin/skill/edit/'. $data->id) ?>">
                                                    <button type="button" rel="tooltip" title="Edit" class="btn btn-info btn-simple btn-link" style="padding: 8px 8px;">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    </a>
                                                    <a onclick="deleteConfirm('<?php echo site_url('admin/skill/delete/'.$data->id) ?>')">
                                                    <button type="button" rel="tooltip" title="Hapus" class="btn btn-danger btn-simple btn-link" style="padding: 8px 8px;">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                    </a>

                                                    <!-- Modal delete item -->

                                                    <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-hidden="true" style="top: -100px!important;">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="hapusLabel">Hapus Skill</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p style="text-align: center;">Apakah anda ingin menghapus data ini?</p>
                                                            <div class="modal-footer">
                                                                <a id="btn-delete">
                                                                    <button type="submit" class="btn btn-danger btn-fill pull-left" style="margin-left: 40%;">Hapus</button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function deleteConfirm(url){
                    $('#btn-delete').attr('href', url);
                    $('#hapus').modal();
                }
            </script>

            <?php
                include("_partials/footer.php");
                include("_partials/scripts.php");
            ?>
        </div>
    </div>
</body>