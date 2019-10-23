<div class="sidebar" data-image="assets/images/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        <?php echo SITE_NAME;?>
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link active" href="<?= base_url('admin'); ?>">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/profile'); ?>">
                            <i class="nc-icon nc-air-baloon"></i>
                            <p>Biodata</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/pengalaman'); ?>">
                            <i class="nc-icon nc-bulb-63"></i>
                            <p>Pengalaman</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= base_url('admin/pendidikan'); ?>">
                            <i class="nc-icon nc-spaceship"></i>
                            <p>Education</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= base_url('admin/skill'); ?>">
                            <i class="nc-icon nc-settings-90"></i>
                            <p>Skill</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= base_url('admin/work'); ?>">
                            <i class="nc-icon nc-bag"></i>
                            <p>My Work</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= base_url('admin/services'); ?>">
                            <i class="nc-icon nc-layers-3"></i>
                            <p>My Services</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= base_url('admin/sosmed'); ?>">
                            <i class="nc-icon nc-bullet-list-67"></i>
                            <p>Social Media</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./icons.html">
                            <i class="nc-icon nc-atom"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= base_url('login/logout'); ?>">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>