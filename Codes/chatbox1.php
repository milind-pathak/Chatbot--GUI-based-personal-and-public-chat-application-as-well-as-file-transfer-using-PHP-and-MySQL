<?php
include('server.php');
if(isset($_SESSION['username'])){
?>
<br>
 <?php if (isset($_SESSION['users2'])): ?>
 			<h3><strong><?php 
			echo $_SESSION['users2']; 
			?></strong></h3>
<?php endif ?>
 <div class='msgs'>
  <?php include('msgs1.php'); ?>
 </div>
 <form id="msg_form">
  <input name="msg" size="30" type="text"/>
  <button>Send</button>
 </form>
 
<?php
}
?>