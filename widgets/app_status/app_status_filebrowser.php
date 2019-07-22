<?php

include '/srv/panel/inc/util.php';
$username = getUser();

function processExists($processName, $username) {
  $exists= false;
  exec("/bin/ps axo user:20,pid,pcpu,pmem,vsz,rss,tty,stat,start,time,comm,cmd|grep $username | grep -iE $processName | grep -v grep", $pids);
  if (count($pids) > 0) {
    $exists = true;
  }
  return $exists;
}

$filebrowser = processExists("filebrowser",$username);

if ($filebrowser == "1") { $filval = "<span class=\"badge badge-service-running-dot\"></span><span class=\"badge badge-service-running-pulse\"></span>";
} else { $filval = "<span class=\"badge badge-service-disabled-dot\"></span><span class=\"badge badge-service-disabled-pulse\"></span>";
}

echo "$filval";

?>