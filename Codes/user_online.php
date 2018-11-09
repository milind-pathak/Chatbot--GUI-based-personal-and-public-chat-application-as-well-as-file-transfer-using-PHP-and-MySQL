<?php
if(isset($_SESSION['username'])){
 $sqlm=$con->prepare("SELECT name FROM chatters WHERE name=?");
 $sqlm->execute(array($_SESSION['username']));
 if($sqlm->rowCount()!=0){
  $sql=$con->prepare("UPDATE chatters SET seen=NOW() WHERE name=?");
  $sql->execute(array($_SESSION['username']));
 }else{
  $sql=$con->prepare("INSERT INTO chatters (name,seen) VALUES (?,NOW())");
  $sql->execute(array($_SESSION['username']));
 }
}
/* Make sure the timezone on Database server and PHP server is same */
$sql=$con->prepare("SELECT * FROM chatters");
$sql->execute();
while($r=$sql->fetch()){
 $curtime=strtotime(date("Y-m-d H:i:s",strtotime('-25 seconds', time())));
 if(strtotime($r['seen']) < $curtime){
  $kql=$dbh->prepare("DELETE FROM chatters WHERE name=?");
  $kql->execute(array($r['name']));
 }
}
?>
