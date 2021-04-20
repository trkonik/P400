<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/assets/https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="<?=base_url()?>assets/admin/assets/https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/assets//css/easion.css">
    <script src="<?=base_url()?>assets/admin/assets/https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/admin/assets/js/chart-js-config.js"></script>
    <title>Easion - Bootstrap Dashboard Template</title>
</head>

<body>
    <div class="form-screen">
        <a href="<?=base_url()?>assets/admin/assets/html" class="easion-logo"><i class="fas fa-sun"></i> <span>Autism</span></a>
        <div class="card account-dialog">
            <div class="card-header bg-primary text-white"> Please sign in </div>
            <div class="card-body">
                <?=$this->session->userdata('message')?>
                <form action="" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" name="Email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" >
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="Password"  id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember me</label>
                        </div>
                    </div>
                    <div class="account-dialog-actions">
                        <button type="submit" name="submit" class="btn btn-primary">Log in</button>
                        <a class="account-dialog-link" href="signup.html">Create a new account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?=base_url()?>assets/admin/assets/https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="<?=base_url()?>assets/admin/assets/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?=base_url()?>assets/admin/assets/https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?=base_url()?>assets/admin/assets/js/easion.js"></script>
</body>

</html>