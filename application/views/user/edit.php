
<div class="col-md-6">
<?php //echo validation_errors(); ?>
<?php $action='http://'.$_SERVER['HTTP_HOST'];?> 
<?php echo form_open($action.'/user/edit/'.$this->uri->segment('3')) ?>

   <div class="form-group">
	    <label>Username</label>
	    <input class="form-control" type="text" name="username" value="<?php echo $user_item['username'];?>"/>
	</div>

	<div class="form-group">
	   <label for="text">Full Name</label>
	   <input class="form-control" type="text" name="full_name" value="<?php echo $user_item['full_name'];?>"/>
	</div>
	<div class="form-group">
	   <label for="text">Email</label>
	   <input class="form-control" type="text" name="email" value="<?php echo $user_item['email'];?>"/>
	</div>
	<!--<input type="hidden"  name="id" value="<?php //echo $this->uri->segment('3');?>" />-->
	<input type="submit" class="btn btn-success" name="submit" value="Edit" />

</form>
</div></div>
