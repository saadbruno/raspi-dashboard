<?php
// disk usage with progress bars
// https://getbootstrap.com/docs/4.4/components/progress/
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

// table with IP logs
function print_ip_log($ip_log){
?>
<div class="table-responsive ip-table">
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">IP</th>
      <th scope="col">Data</th>
      <th scope="col">Hora</th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach ($ip_log as $ip_row) {
  ?>
    <tr>
      <td><?= $ip_row[0]?></td>
      <td><?= $ip_row[1]?></td>
      <td><?= $ip_row[2]?></td>
    </tr>
  <?php 
  }
  ?> 
  </tbody>
</table>
</div>
<?php
}
?>