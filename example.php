<?php
function onUse() {
  echo '기술사용';
}
function onCooltime($cl) {
  echo '쿨타임'.$cl.'초가 남았습니다';
}
$playername = 'djdisodo';
$cooltime = 60;
include_once Cooltime.php;
?>
