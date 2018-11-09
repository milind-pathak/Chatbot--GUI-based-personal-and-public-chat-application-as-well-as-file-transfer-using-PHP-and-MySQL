<?php
include('server.php');
if(isset($_SESSION['username'])){
?>
 <h2 style="text-align:center">Public Chat</h2><br>
 <div class='msgs'>
  <?php include('msgs.php'); ?>
 </div>
 <form id="msg_form">
     <table>
         <tr>
         <td style="width:100%;">
  <input name="msg" style="height:6%;font-size:15px;width:97%;" type="text"/></td>
  <td>
  <button class="btn1">Send</button>
</td></tr></table>
  <br>
 </form>
<?php
}
?>