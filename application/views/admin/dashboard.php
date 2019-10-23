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
                <?php
                    include("_partials/content_dashboard.php");
                ?>
            </div>
            <!--Footer-->
            <?php
                include("_partials/footer.php");
            ?>
        </div>
    </div>
      <!-- Pengaturan -->
      <?php
            include("_partials/fixed_plugin.php");
        ?>
</body>

<?php
    include("_partials/scripts.php");
?>