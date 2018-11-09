<?php
include('server.php');
if(isset($_SESSION['username'])){
?>
<br>
 <?php if (isset($_SESSION['users2'])): ?>
 			<h3><strong>
				FILE TRANSFER
			</strong></h3>
<?php endif ?>
 <div class='msgs1'>
  <?php include('msgs2.php'); ?>
 </div>
<form id="msg_form" method="post" enctype="multipart/form-data">
<label>Document Name</label>
<input type="text" name="doc_name">
<input type="file" name="myfile">
<input type="submit" name="submit1" value="Upload"> 
 </form>
<?php
}
?>