<?php
include ("/srv/panel/inc/util.php");
include ($_SERVER['DOCUMENT_ROOT'].'/widgets/class.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/inc/localize.php');


$username = getUser();
function processExists($processName, $username) {
  $exists= false;
  exec("ps axo user:20,pid,pcpu,pmem,vsz,rss,tty,stat,start,time,comm|grep $username | grep -iE $processName | grep -v grep", $pids);
  if (count($pids) > 0) {
    $exists = true;
  }
  return $exists;
}
$deluged = processExists("deluged",$username);
$delugedweb = processExists("deluge-web",$username);
$rtorrent = processExists("rtorrent",$username);

//Unit Conversion
function formatsize($size) {
  $danwei=array(' B ',' KB ',' MB ',' GB ',' TB ');
  $allsize=array();
  $i=0;
  for($i = 0; $i <5; $i++) {
    if(floor($size/pow(1024,$i))==0){break;}
  }
  for($l = $i-1; $l >=0; $l--) {
    $allsize1[$l]=floor($size/pow(1024,$l));
    $allsize[$l]=$allsize1[$l]-$allsize1[$l+1]*1024;
  }
  $len=count($allsize);
  for($j = $len-1; $j >=0; $j--) {
    $fsize=$fsize.$allsize[$j].$danwei[$j];
  }
  return $fsize;
}

$location = "/home";
$base = 1024;
$si_prefix = array( 'b', 'k', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB' );
$torrents = shell_exec("ls /home/".$username."/.sessions/*.torrent|wc -l");
$dtorrents = shell_exec("ls /home/".$username."/.config/deluge/state/*.torrent|wc -l");
$php_self = $_SERVER['PHP_SELF'];
$web_path = substr($php_self, 0, strrpos($php_self, '/')+1);
$time = microtime(); $time = explode(" ", $time);
$time = $time[1] + $time[0]; $start = $time;

if (file_exists('/install/.quota.lock')) {
  $dftotal = shell_exec("sudo /usr/bin/quota -wu ".$username."| tail -n 1 | sed -e 's|^[ \t]*||' | awk '{print $3/1024/1024}'");
  $dfused = shell_exec("sudo /usr/bin/quota -wu ".$username."| tail -n 1 | sed -e 's|^[ \t]*||' | awk '{print $2/1024/1024}'");
  $dffree = sprintf('%0.2f', $dftotal - $dfused);
  $perused = sprintf('%1.0f', $dfused / $dftotal * 100);

} else {

  $bytesfree = disk_free_space('/home');
  $class = min((int)log($bytesfree,$base),count($si_prefix) - 1); $bytestotal = disk_total_space($location);
  $class = min((int)log($bytesfree,$base),count($si_prefix) - 1); $bytesused = $bytestotal - $bytesfree;
  try {
    $diskStatus = new DiskStatus('/home');
    $freeSpace = $diskStatus->freeSpace();
    $totalSpace = $diskStatus->totalSpace();
    $barWidth = ($diskStatus->usedSpace()/500) * 500;
  } catch (Exception $e) {
    $spacebodyerr .= 'Error ('.$e-getMessage().')';
    exit();
  }
  //hard disk
  $dsConfig  = "/srv/panel/inc/diskStatus.cfg"; // Disk status config file that holds the mounted device path information
  
  if (@file_exists($dsConfig)) {
    $fh         = @file_get_contents($dsConfig); // Retrieve text content of config file
    $fLine      = explode("=", $fh); // Separates each line to retrieve string and value
    static $fV  = array(); // Create the array that holds each variable of the config file
    $eqCnt      = substr_count($fh, "="); // Count how many settings are defined in the config file
    
    // Go through each variable of the config file
    for($i=0; $i<=$eqCnt; $i++) {
      $fN = ($i + 1); // This number will be used for the value of a string within the array
      $fV[] = $fLine[$i]; // Add the variable to the array
        if ($fLine[$i] == "mntDevicePath") {
          $mntPathAN  = $fN; // This saves the array number for the value of the string: mntDevicePath
        }        
      }
      $mntPath  = trim($fV[$mntPathAN]); // Define $mntPath and trim the spaces out of the mounted device path value
  }  
  $G_bytes   = (1024*1024*1024);  // 1 GB in bytes
  
  $dstotal  = round(@disk_total_space($mntPath)/($G_bytes),3); // Total disk space available
  $dsfree   = round(@disk_free_space($mntPath)/($G_bytes),3); // Free disk space available

  $dftotal  = number_format($dstotal); // Total space converted
  $dffree   = number_format($dsfree); // Available space converted
  $dfused   = number_format($dstotal-$dsfree); // Used space converted
  
  //hard disk for percentages
  $dpused = ($dstotal-$dsfree); // Used space raw format
  $perused = (floatval($dstotal)!=0)?round($dpused/$dstotal*100,2):0; // Percentage of used disk space
}

if (file_exists('/home/'.$username.'/.sessions/rtorrent.lock')) {
      $rtorrents = shell_exec("ls /home/".$username."/.sessions/*.torrent|wc -l");
}

?>

                  <p class="nomargin"><?php echo T('FREE'); ?>: <span style="font-weight: 700; position: absolute; left: 100px;"><?php echo "$dffree"; ?> <b>GB</b></span></p>
                  <p class="nomargin"><?php echo T('USED'); ?>: <span style="font-weight: 700; position: absolute; left: 100px;"><?php echo "$dfused"; ?> <b>GB</b></span></p>
                  <p class="nomargin"><?php echo T('SIZE'); ?>: <span style="font-weight: 700; position: absolute; left: 100px;"><?php echo "$dftotal"; ?> <b>GB</b></span></p>                  
                  <div class="row">
                    <div class="col-sm-12">
                      <!--h4 class="panel-title text-success">Disk Space</h4-->
                      <h3><?php echo T('DISK_SPACE'); ?></h3>
                      <div class="progress">
                        <?php
                          if ($perused < "70") { $diskcolor="progress-bar-success"; }
                          if ($perused > "70") { $diskcolor="progress-bar-warning"; }
                          if ($perused > "90") { $diskcolor="progress-bar-danger"; }
                        ?>
                        <div style="width:<?php echo "$perused"; ?>%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo "$perused"; ?>" role="progressbar" class="progress-bar <?php echo $diskcolor ?>">
                          <span class="sr-only"><?php echo "$perused"; ?>% <?php echo T('USED'); ?></span>
                        </div>
                      </div>
                      <p style="font-size:10px"><?php echo T('PERCENTAGE_TXT_1'); ?> <?php echo "$perused" ?>% <?php echo T('PERCENTAGE_TXT_2'); ?></p>
                    </div>
                  </div>
                  <hr />
                  <?php if (processExists("rtorrent",$username) && file_exists('/home/'.$username.'/.sessions/rtorrent.lock')) { ?>
                  <h4><?php echo T('RTORRENTS_TITLE'); ?></h4>
                  <p class="nomargin"><?php echo T('TORRENTS_LOADED_1'); ?> <b><?php echo "$rtorrents"; ?></b> <?php echo T('TORRENTS_LOADED_2'); ?></p>
                  <?php } ?>
                  <?php if (processExists("deluged",$username || "deluge-web", $username) && file_exists('/install/.deluge.lock')) { ?>
                  <h4><?php echo T('DTORRENTS_TITLE'); ?></h4>
                  <p class="nomargin"><?php echo T('TORRENTS_LOADED_1'); ?> <b><?php echo "$dtorrents"; ?></b> <?php echo T('TORRENTS_LOADED_2'); ?></p>
                  <?php } ?>


<script type="text/javascript">
$(function() {

  // Knob
  $('.dial-success').knob({
    readOnly: true,
    width: '70px',
    bgColor: '#E7E9EE',
    fgColor: '#4daf7c',
    inputColor: '#262B36'
  });

  $('.dial-warning').knob({
    readOnly: true,
    width: '70px',
    bgColor: '#E7E9EE',
    fgColor: '#e6ad5c',
    inputColor: '#262B36'
  });

  $('.dial-danger').knob({
    readOnly: true,
    width: '70px',
    bgColor: '#E7E9EE',
    fgColor: '#D9534F',
    inputColor: '#262B36'
  });

  $('.dial-info').knob({
    readOnly: true,
    width: '70px',
    bgColor: '#66BAC4',
    fgColor: '#fff',
    inputColor: '#fff'
  });

});
</script>
