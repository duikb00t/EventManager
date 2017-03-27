<form method="POST" action="{{ route('register') }}">
	{{ csrf_field() }}

	<div class="form-group">
		<label>Firstname <span>*</span></label>
		<input type="text" name="firstname" class="form-control">
	</div>

	<div class="form-group">
		<label>Lastname <span>*</span></label>
		<input type="text" name="lastname" class="form-control">
	</div>

	<div class="form-group">
		<label>E-mail <span>*</span></label>
		<input type="email" name="email" class="form-control">
	</div>

	<div class="form-group">
		<input type="submit" value="Register now">
	</div>

</form>