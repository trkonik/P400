<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Create an Account</title>
<link rel="stylesheet" href="<?=base_url()?>assets/admin/assets/css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
<div class="signup-form" >
    <form action="" method="post" enctype="multipart/form-data" >
	<?=$this->session->flashdata('message');?>
		<h2>Create an Account</h2>
		<!-- <p class="hint-text">Sign up with your social media account or email address</p>
		<div class="social-btn text-center">
			<a href="#" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
			<a href="#" class="btn btn-info btn-lg"><i class="fa fa-twitter"></i> Twitter</a>
			<a href="#" class="btn btn-danger btn-lg"><i class="fa fa-google"></i> Google</a>
		</div>
		<div class="or-seperator"><b>or</b></div> -->
		<br>
		<br>
			<div class="form-group">
        	<input type="text" class="form-control input-lg" value="<?=set_value('Name')?>" name="Name" placeholder="Enter your name">
        </div>
		<div class="error"><?=form_error('Name')?></div>
		
		<div class="form-group">
        	<input type="email" class="form-control input-lg" name="Email" value="<?=set_value('Email')?>"  placeholder="Enter your Email" >
        </div>
		<div class="error"><?=form_error('Email')?></div>
		<div class="form-group">
            <input type="password" class="form-control input-lg" name="Password" value="<?=set_value('Password')?>" placeholder="Enter your Password" >
        </div>
		<div class="error"><?=form_error('Password')?></div>
		<div class="form-group">
            <input type="password" class="form-control input-lg" name="C_password" value="<?=set_value('C_password')?>" placeholder="Confirm your Password" >
        </div>
		<div class="error"><?=form_error('C_password')?></div>
		<div class="form-group">
            <input type="text" class="form-control input-lg" name="Address" value="<?=set_value('Address')?>" placeholder="Address" >
        </div>
		<div class="error"><?=form_error('Address')?></div>
			<div class="form-group">
            <input type="text" class="form-control input-lg" name="Gender" value="<?=set_value('Gender')?>"  placeholder="Gender">
        </div>
		<div class="error"><?=form_error('Gender')?></div>

		<div class="form-group">
            <input type="text" class="form-control input-lg" name="Status" value="<?=set_value('Status')?>"  placeholder="Status">
        </div>
		<div class="error"><?=form_error('Status')?></div>
		<div class="form-group">
            <input type="text" class="form-control input-lg" name="Fathers_name" value="<?=set_value('Fathers_name')?>"  placeholder="Father's Name">
        </div>
		<div class="error"><?=form_error('Fathers_name')?></div>
		<div class="form-group">
            <input type="text" class="form-control input-lg" name="Mothers_name" value="<?=set_value('Mothers_name')?>"  placeholder="Mother's Name">
        </div>
		<div class="error"><?=form_error('Mothers_name')?></div>
		<div class="form-group">
            <input type="text" class="form-control input-lg" name="Mobile" value="<?=set_value('Mobile')?>"  placeholder="Mobile">
        </div>
		<div class="error"><?=form_error('Mobile')?></div>

		<div class="form-group">
            <input type="text" class="form-control input-lg" name="Capability" value="<?=set_value('Capability')?>"  placeholder="Capability">
        </div>
		<div class="error"><?=form_error('Capability')?></div>
			<div class="form-group">
            <input type="text" class="form-control input-lg" name="Family_oriented" value="<?=set_value('Family_oriented')?>"  placeholder="Family Oriented">
        </div>
		<div class="error"><?=form_error('Family_oriented')?></div>
		<div class="form-group">
            <input type="text" class="form-control input-lg" name="Type" value="<?=set_value('Type')?>"  placeholder="Type">
        </div>
		<div class="error"><?=form_error('Type')?></div>

        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-success btn-lg btn-block signup-btn">Sign Up</button>
        </div>
    </form>
    <div class="text-center">Already have an account? <a href="<?=base_url()?>login">Login here</a></div>
</div>
</body>
</html>