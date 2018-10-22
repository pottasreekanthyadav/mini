<?php  include('header.php')?>

<div class="container">

  <h1>Admin Form</h1>  
  
<form action=" <?php echo base_url().'admin'?>" method="post">  
  <div class="form-group col-lg-6">  
    <label for="exampleInputEmail1">Usesr Name</label>  
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name" required
    value="<?php echo set_value('name'); ?>">  
    <?php echo form_error('name') ?>
  </div>
  
    
  <div class="form-group col-lg-6">  
    <label for="exampleInputPassword1">Password</label>  
    <input type="password"  name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required value="<?php echo set_value('password'); ?>">  
    <?php echo form_error('password') ?>

  </div> 
  
      
  <div class="checkbox col-lg-6">
  	<label><input type="checkbox" name="check">Remember me</label>
  </div> 
    
  <button   type="submit"  name="submit" class="btn btn-default mx-auto">Login</button>  
  <button type="reset" class="btn btn-default mx-auto">Reset</button>  
</form>  
  
</div>  

<?php  include('footer.php')?>