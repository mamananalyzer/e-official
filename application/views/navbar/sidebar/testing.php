<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/qrcode.js"></script>
</head>
<body>

<div class="row">
	<section>
		<div class="col-md-6 col-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Add Persona</h4>
				</div>
				<div class="card-content">
					<div class="card-body">
						<form class="form form-horizontal" method="post" action="<?= base_url('official/register'); ?>">
							<div class="form-body">
								<div class="row">
									<div class="col-md-4">
										<label for="first-name-horizontal-icon">Name</label>
									</div>
									<div class="col-md-8">
										<div class="form-group has-icon-left">
											<div class="position-relative">
												<input type="text" class="form-control" name="name" placeholder="Name"
													id="first-name-horizontal-icon">
												<div class="form-control-icon">
													<i class="bi bi-person"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<label for="email-horizontal-icon">Email</label>
									</div>
									<div class="col-md-8">
										<div class="form-group has-icon-left">
											<div class="position-relative">
												<input type="email" class="form-control" name="email" placeholder="Email"
													id="email-horizontal-icon">
												<div class="form-control-icon">
													<i class="bi bi-envelope"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<label for="password-horizontal-icon">Password</label>
									</div>
									<div class="col-md-8">
										<div class="form-group has-icon-left">
											<div class="position-relative">
												<input type="password" class="form-control" name="password" placeholder="Password" id="password-horizontal-icon">
												<div class="form-control-icon">
													<i class="bi bi-lock"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<label for="password-horizontal-icon">Image</label>
									</div>
									<div class="col-md-8">
										<div class="form-group has-icon-left">
											<div class="position-relative">
												<input type="file" class="form-control" name="image" placeholder="Image" id="image">
												<div class="form-control-icon">
													<i class="bi bi-image"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 d-flex justify-content-end">
										<button type="submit" class="btn btn-primary me-1 mb-1">Add</button>
										<button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<form onsubmit="generate();return false;">
	<input type="text" id="qr" name="">
</form>

<div id="qrResult" style="height: 100px;width: 100px">
	
</div>

<script type="text/javascript">
	var qrcode=new QRCode(document.getElementById('qrResult'),{
		width:180,
		height:180
	});

function generate(){
	var message=document.getElementById('qr');
	if(!message.value){
		alert("Input a text");
		message.focus();
		return;
	}

	qrcode.makeCode(message.value);
}

</script>

<br>
<br>
<br>
<br>


<input type="file" id="file" name="file">

<p>Qr Content: <span id="content"></span></p>



<!--To Read QR Code-->
<script type="text/javascript" src="js/qrReader.js"></script>

</body>
</html>