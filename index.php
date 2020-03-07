<?php

include "info.php";
include "lib/functions.php";
include "lib/view_functions.php";

// meta information
$meta["title"] = "SaadRaspi - O Raspberry Pi do Saad";

// gets external drives information
$disks = array("/mnt/usbdrive", "/mnt/usbdrive2", "/mnt/usbdrive3");
$disks_info = get_disks_info($disks);

// system info
$load = sys_getloadavg();
$temp = round(shell_exec("cat /sys/class/thermal/thermal_zone0/temp")/1000);
$uptime = shell_exec('uptime -p');

// includes the view, which renders the page
include "views/v_index.php";

?>