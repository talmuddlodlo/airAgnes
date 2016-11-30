<?php
//////Functions////////////

function message_goto($msg, $url="index.php"){
die('<script language=javascript>alert("'.$msg.'");location=("'.$url.'");</script>');
}
function redirectto($url){
die('<script language=javascript>location=("'.$url.'");</script>');
}
function message($msg){
die('<script language=javascript>alert("'.$msg.'");</script>');
}
function alert($msg){
die('<b><center><font color=#FF0000>['.$msg.']</font></center></b>');
}
function green($msg){
die('<b><center><font color=#00CC33>['.$msg.']</font></center></b>');

}
///////End of functions declarations////////

?>
