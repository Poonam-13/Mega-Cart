<?php  @session_start();
if(isset($_SESSION["uname"]))
{

?>

<?php 
 include("header.php");
?>
<div class="content">

<div id="adminArea">
<div id="leftAdmin">
  <?php 
     include("menuAdmin.php");
  ?>
</div><!--end of leftAdmin-->
      
<div id="rightAdmin">
<div> &nbsp; </div>
<div id="myForm">
<form method="post" enctype="multipart/form-data" action="insertComplain.php">



<?php 
    if(isset($_REQUEST["resmsg"]))
    {
      echo("<div id='resmsg'>");
      if($_REQUEST["resmsg"]==1)
      {
        echo("Your reply has been saved");
      }

      echo("</div>");
    }

   ?>

<?php
$rec=$_REQUEST["usr"];
?>
  
    <label>Reply To</label>
    <input type="text" name="txtReceiver" readonly="readonly" value="<?=$rec?>">

    <label>Complain Heading</label>
    <input type="text" name="txtHeading">
    
    <label>Complain Detail</label>
    <textarea name="txtDetail" rows="10"></textarea>

    <div id="formBtnGroup">
      <input type="submit" value="OK">
      <input type="reset" value="Cancel">
    </div>
 


</form>
</div><!--end of myForm-->
<div> &nbsp; </div>







</div><!--end of rightAdmin-->

</div><!--end of adminarea-->

</div><!--end of content--> 
<?php 
 include("footer.php");
?>
<?php 
}
else 
{
  header("location:loginForm.php");
}
?>