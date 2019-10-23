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
                                            <h4 class="card-title">Pengalaman</h4>
                                            <p class="card-category">Kumpulkan pengalaman anda dan tambahkan disini</p>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-succcess" data-toggle="modal" data-target="#addExperience"> <i class="fa fa-plus"></i>
                                            Pengalaman Baru
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Tambah Baru-->
                                <div class="modal fade" id="addExperience" tabindex="-1" role="dialog" aria-hidden="true" style="top: -100px!important;">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addExperienceLabel">Pengalaman Baru</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="<?= base_url('admin/pengalaman/simpan') ?>" method="post">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Judul</label>
                                                            <input type="text" name="judul_pengalaman" class="form-control" placeholder="Judul Pengalaman" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Nama Perusahaan</label>
                                                            <input type="text" name="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Tahun mulai</label>
                                                            <input type="text" name="tahun_mulai" class="form-control" placeholder="Tahun mulai" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Tahun akhir</label>
                                                            <input type="text" name="tahun_akhir" class="form-control" placeholder="Tahun akhir" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Message:</label>
                                                            <textarea class="form-control" id="message-text" name="deskripsi"></textarea>
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
                                            <th>Judul</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Tahun Mulai</th>
                                            <th>Tahun Akhir</th>
                                            <th>Opsi</th>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($pengalaman as $data){?>
                                            <tr>
                                                <td><?php echo $data->pengalaman_id ?></td>
                                                <td><?php echo $data->judul ?></td>
                                                <td><?php echo $data->perusahaan ?></td>
                                                <td><?php echo $data->tahun_mulai ?></td>
                                                <td><?php echo $data->tahun_akhir ?></td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="<?php echo $data->deskripsi ?>" class="btn btn-warning btn-simple btn-link" style="padding: 8px 8px;">
                                                        <i class="fa fa-book"></i>
                                                    </button>
                                                    <a href="<?php echo site_url('admin/pengalaman/edit/'. $data->pengalaman_id) ?>">
                                                    <button type="button" rel="tooltip" title="Edit" class="btn btn-info btn-simple btn-link" style="padding: 8px 8px;">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    </a>
                                                    <a onclick="deleteConfirm('<?php echo site_url('admin/pengalaman/delete/'.$data->pengalaman_id) ?>')">
                                                    <button type="button" rel="tooltip" title="Hapus" class="btn btn-danger btn-simple btn-link" style="padding: 8px 8px;">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                    </a>

                                                    <!-- Modal delete item -->

                                                    <div class="modal fade" id="hapusPengalaman" tabindex="-1" role="dialog" aria-hidden="true" style="top: -100px!important;">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="hapusPengalamanLabel">Hapus Pengalaman</h5>
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
                    $('#hapusPengalaman').modal();
                }
            </script>

            <?php
                include("_partials/footer.php");
                include("_partials/scripts.php");
            ?>
        </div>
    </div>
</body>