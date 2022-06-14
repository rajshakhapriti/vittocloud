<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<h1>Set your password</h1>
	<form action="{{ url('admin/user/password') }}" id="form_sample_3" class="form-horizontal" method="post">
		@csrf
		<div class="row">
			<input name="id" value="{{ $id }}" hidden>
			<div class="col-sm-4">
				<label>New Password</label>
				<div class="form-group pass_show">
					<input type="password" name="password" class="form-control" placeholder="New Password">
					@if ($errors->has('password'))
					<div class="text-danger">{{ $errors->first('password') }}</div>
					@endif
				</div>
				<label>Confirm Password</label>
				<div class="form-group pass_show">
					<input type="password" name="c_password" class="form-control" placeholder="Confirm Password">
					@if ($errors->has('c_password'))
					<div class="text-danger">{{ $errors->first('c_password') }}</div>
					@endif
				</div>
				<div class="form-group pass_show">
					<input type="submit" name="save">
					<input type="reset" name="cancel">
				</div>
			</div>
	</form>
</div>
</div>