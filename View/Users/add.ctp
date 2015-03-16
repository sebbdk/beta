<div class="container">

	<form class="form-signin">
		<h2 class="form-signin-heading">Beta invite</h2>
		<label>Name</label>
		<input type="text" id="inputEmail" class="form-control" placeholder="Name" required>

		<label>Email address</label>
		<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>

		<label>Choose platform</label>
		<select name="data[User][platform]" class="form-control">
			<option value="">Choose</option>
			<option value="iOS">iOS</option>
			<option value="iOS">Android</option>
		</select>

		<label>Do you have a IOS developer account?</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" id="dev" value="remember-me"> I have a iOS developer account.
			</label>
		</div>

		<div id="dev-info" style="display: none;">
			<label>Enter device UDID (<a href="http://whatsmyudid.com/" target="_blank">help</a>)</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="UDID" required>
		</div>	
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	</form>

</div>

<script>
	$('#dev').on('change', function() {
		$('#dev-info').toggle();
	});
</script>