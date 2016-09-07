<div class="col-md-6">
<?php //echo validation_errors(); ?>
<?php $action='http://'.$_SERVER['HTTP_HOST'];?> 
<?php echo form_open($action.'/user/create') ?>
	<div class="form-group">
	    <label>Username</label>
	    <input class="form-control" type="text" name="username" />
	</div>

	<div class="form-group">
	   <label for="text">Full Name</label>
	   <input class="form-control" type="text" name="full_name" />
	</div>
	<div class="form-group">
	   <label for="text">Email</label>
	   <input class="form-control" type="text" name="email" />
	</div>
	<input type="submit" class="btn btn-success" name="submit" value="Add" />

</form>
</div></div>