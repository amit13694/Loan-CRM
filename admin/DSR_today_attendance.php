<?php
$sql=mysqli_query($conn,"select * from admin where attendance='1'");
$name=array();
$email=array();
$status=array();
$login=array();
$attendance=array();
$logout=array();
//---------------------------------
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
{
  @$login[]=$row['login'];
  @$logout[]=$row['logout'];
  @$name[]=$row['name'];
  @$email[]=$row['usename'];
  @$status[]=$row['status'];
  @$attendance[]=$row['attendance'];
}
?>
       <div class="table-responsive">
      <table class="table table-bordered table-hover" id="myTable">
        <h4 class="text-center text-light">Documentor Details</h4>
        <thead class="bg-dark">
          <tr class="text-light">
            <td>Name</td>
            <td>Email</td>
            <td>Status</td>
            <td>Login Time</td>
            <td>Logout Time</td>
            <td>Attendance</td>
            <td>Chat</td>
          </tr>
        </thead>
        <tbody>
          <?php
                   for($i=0;$i<count($email);$i++)
                   { ?>
                      <tr  class="text-light" style="background: #6D6E6A;">
                        <td><?php echo $name[$i]?></td>
                        <td><?php echo $email[$i]?></td>
                        <td><?php echo $status[$i]?></td>
                        <td><?php echo $login[$i]?></td>
                        <td><?php echo $logout[$i]?></td>
                        <td><?php if($attendance[$i]=='1')
                                { ?>
                                     <span class="glyphicon glyphicon-ok"></span>
                               <?php }
                               else{ ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                               <?php }
                        ?></td>
                         <td>
                           <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#chat">message</button>
                         </td>
                        
                      </tr>
                        
                   <?php }
          ?>
        </tbody>
      </table>
    </div>
<div id="chat" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="text-center">Chat Box</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <?php
        $sql_msg=mysqli_query($conn,"select message from admin where usename='admin'");
        $msg_fetch=mysqli_fetch_array($sql_msg);
        echo $msg_fetch['message'];
        ?>
      </div>
      <div class="modal-footer">
        <form method="POST" class="form-inline">
          <div class="form-group">
            <input type="text" name="msg"    size="53" style="padding-top: 5px; border-radius: 5px;">
            <button type="submit" class="btn btn-primary" name="send" style="margin-left: 5px;"><span class="glyphicon glyphicon-send"></span></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>