<?php

function print_disk_usage($disks_info)
{
    foreach ($disks_info as $disk_name => $disk_info) {

?>
    <div class="mb-3">
        <h3 class="disk_name"><?= $disk_name ?></h3>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: <?= $disk_info["used_pcent_round"] ?>%;" aria-valuenow="<?= $disk_info["used_pcent_round"] ?>" aria-valuemin="0" aria-valuemax="100"><?= $disk_info["used_pcent_round"] ?>%</div>
        </div>
        <span class="small">
            <b><?=humanFileSize($disk_info["used"])?></b> usados de <b><?=humanFileSize($disk_info["total"])?></b> (<b><?=humanFileSize($disk_info["free"])?></b> livres)
        </span>
    </div>

<?php

    }
}

?>