<!DOCTYPE html>
<html>
<head>
	<title>learnbootstrap.com</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<div class="container >
		<div class="row">
		
		<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Student Login</div>
					<div class="panel-body">
						<form class="form-signin" method="POST" action="Login.php">
						<div class="form-group">
						<label for="Email" class="sr-only">Email</label>
						<input name="email" type="email" id="email" class="form-control" placeholder="email" required autofocus>
					</div>
							<div class="form-group">
								<label for="password" class="sr-only"></label>
								<input type="password" name="password" id="password" class="form-control" placeholder="password" required>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" value="Rememember me">Remember me
								</label>
							</div>
							<button class="btn btn-log btn-primary btn-block" type="submit">Sign in</button>
							<div class="clearfix">&nbsp; </div>

						</form>

					</div>
				</div>
			</div>
			</div>
	</head>
	</html>