<div class="container">

	<?php echo $this->Form->create('User', ['class' => 'form-signin']); ?>
	<input  name="data[User][game_slug]" type="hidden" value="<?php echo $gameSlug; ?>" />

		<h2 class="form-signin-heading">Beta invite</h2>
		<label>Name</label>
		<input name="data[User][name]" type="text" id="inputEmail" class="form-control" placeholder="Name" required>

		<label>Email address</label>
		<input name="data[User][email]" type="email" id="inputEmail" class="form-control" placeholder="Email address" required>

		<label>Choose platform</label>
		<select name="data[User][platform]" class="form-control">
			<option value="">Choose</option>
			<option value="iOS">iOS</option>
			<option value="iOS">Android</option>
		</select>

		<label>Do you have a IOS developer account?</label>
		<div class="checkbox">
			<label>
				<input  name="data[User][is_iosdeveloper]" type="checkbox" id="dev" value="remember-me"> I have a iOS developer account.
			</label>
		</div>

		<div id="dev-info" style="display: none;">
			<label>Enter device UDID (<a href="http://whatsmyudid.com/" target="_blank">help</a>)</label>
			<input name="data[User][udid]" type="text" id="inputEmail" class="form-control" placeholder="UDID">
		</div>	
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign up!</button>
	<?php echo $this->Form->end(); ?>

</div>

<script>
	$('#dev').on('change', function() {
		$('#dev-info').toggle();
	});
</script>