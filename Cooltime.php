<?php
$playername = strtolower( $playername );
$playername = base_convert( $playername, 35, 10);
$shmid = shmop_open($playername, 'c', 0755, 1024);
if ( shmop_read( $shmid, 0, 11 ) <= time() ) {
 onUse();
 shmop_write($shmid, time() + $cooltime, 0);
} else {
 $cl = shmop_read( $shmid, 0, 11 ) - time();
 onCooltime($cl);
}
?>
