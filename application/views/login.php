<body class="login">
<div class="row">

	<div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
      <h1 class="page-title text-center"> Travel Booking System</h1>
    </div>

	<div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
		<div class="x_panel">
			<div class="x_title">
				<h2>Login</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<div class="row">
					<?php if (validation_errors()) : ?>
						<div class="col-md-12 col-xs-12">
							<div class="alert alert-danger" role="alert">
								<?= validation_errors() ?>
							</div>
						</div>
					<?php endif; ?>
					<?php if (isset($error)) : ?>
						<div class="col-md-12 col-xs-12">
							<div class="alert alert-danger" role="alert">
								<?= $error ?>
							</div>
						</div>
					<?php endif; ?>
				</div>
				<br />
				<form class="form-horizontal form-label-left" method="post" action="<?php echo site_url('login/login')?>">

					<div class="col-md-12 col-xs-12 form-group has-feedback">
						<input type="email" name="email" class="form-control has-feedback-left" id="email" placeholder="Email Address" required="required">
						<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-12 col-xs-12 form-group has-feedback">
						<input type="password" name="password" class="form-control has-feedback-left" id="password" placeholder="Password" required="required">
						<span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-12 col-xs-12 form-group">
						<a class="reset_pass" href="#">Forgot your password?</a>
						<button id="send" type="submit" class="btn btn-success pull-right">Submit</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>