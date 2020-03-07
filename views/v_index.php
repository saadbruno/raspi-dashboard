<?php
include "partials/v_head.php";
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col mt-3">
                <h1><i class="fab fa-raspberry-pi"></i> SaadRaspi</h1>
            </div>
        </div>
        <?php 
            include "partials/v_disk_usage.php";
            include "partials/v_sysinfo.php";
            include "partials/v_ip_log.php";
        ?>
    </div>
</body>

</html>