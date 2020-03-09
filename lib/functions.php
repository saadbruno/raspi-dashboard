<?php
// function to calculate the disk usage of a single disk
function get_disk_info($drive)
{
    // ext4 reservers 5% of disk space to root. So, let's take that out of our total.
    $total_root = disk_total_space($drive);
    $total = $total_root - (0.05 * $total_root);

    // gets free disk space
    $free = disk_free_space($drive);

    // calculates the used portion
    $used = $total - $free;

    // calculates usage percentage (and rounds it)
    $used_pcent = $used / $total * 100;
    $used_pcent_round = round($used_pcent);

    //builds the array with all info
    $disk_info = array("total" => $total, "used" => $used, "free" => $free, "used_pcent" => $used_pcent, "used_pcent_round" => $used_pcent_round);

    //returns the array
    return $disk_info;
}

// gets disk usage of multiple disks, basedon the get_disk_info() function
function get_disks_info($array){
  
  $disks_info = array();

  foreach ($array as $disk) {

    $result = get_disk_info($disk);
    $disks_info[$disk] = $result;

  }
  return $disks_info;
}

// converts unit into human readable
// retrieved from https://stackoverflow.com/a/15188082
function humanFileSize($size,$unit="") {
  if( (!$unit && $size >= 1<<30) || $unit == " GB")
    return number_format($size/(1<<30),2)." GB";
  if( (!$unit && $size >= 1<<20) || $unit == " MB")
    return number_format($size/(1<<20),2)." MB";
  if( (!$unit && $size >= 1<<10) || $unit == " KB")
    return number_format($size/(1<<10),2)." KB";
  return number_format($size)." bytes";
}

// gets the ip log form the CSV in scripts/output
function get_ip_log(){
  $ip_log = array();
  $file = fopen('scripts/output/ip_log.csv', 'r');
  while (($line = fgetcsv($file)) !== FALSE) {
    //$line is an array of the csv elements
    $ip_log[] = $line;
  }
  fclose($file);
  $ip_log = array_reverse($ip_log);
  return $ip_log;
}
