

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from auth.mpharma.com/password_reset/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jul 2022 20:45:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<title>mPharma User Registration</title>
	<meta charset="utf-8">
	<meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../oidc-provider-k8-prod.s3.amazonaws.com/muser/style.css">
    <script src="../../cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.2/js/bootstrap.min.js?v=<?= time(); ?>"></script>
    <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js?v=<?= time(); ?>"></script>
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 base-login-container base-form-holder">
                <div class="form-holder">
                    <div class="mpharma-logo">
                        mPharma
                    </div>
                     
<h5 class="title">Reset your password</h5>
<form method="post">
   <input type='hidden' name='csrfmiddlewaretoken' value='nXF0Sb1W92OQdxeDRFIeTI8xhMKLrPTifcQJN5QLB5rPiwJsX1cwpBGMyWeOx5he' />
   
    <fieldset class="form-group">
        <input class="form-control form-control-lg" type="email" name="email" placeholder="Email address" required id="id_email">
    </fieldset>
    <p class="text-muted text-justify">we will send you an email with a link to reset your password</p>
    <div class="row">
    <div class="col-lg-6">
    <fieldset class="form-group">
        <input class="btn btn-primary btn-md submit-btn reset-btn" type="submit" value="Reset Password" />
    </fieldset>
    </div>
    <div class="col-lg-4 cancel-btn">
        <a href="../accounts/login/index.html">
            Cancel
        </a>
    </div>
    </div>
</form>

                </div>
                <img src="../../oidc-provider-k8-prod.s3.amazonaws.com/images/corner.png" alt="mPharma corner image" class="corner-image">
            </div>
            <div class="col-lg-6 col-md-6 base-login-container bg-image-holder d-sm-none d-md-block hide-on-small-only">
            </div>
        </div>
	</div>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js?v=<?= time(); ?>"></script>
    <script src="../../www.sakimura.org/test/openidconnect.js?v=<?= time(); ?>"></script>
</body>


<!-- Mirrored from auth.mpharma.com/password_reset/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jul 2022 20:45:20 GMT -->
</html>