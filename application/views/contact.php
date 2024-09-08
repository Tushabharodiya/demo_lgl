<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index,follow">

	<meta charset="utf-8">
	<title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="https://syphnosys.com/legal/assets/css/bootstrap.min.css">
    <link href="<?php echo base_url()?>sources/css/theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://syphnosys.com/legal/assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://syphnosys.com/legal/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://syphnosys.com/legal/assets/css/media.css">

    <script type="text/javascript" src="https://syphnosys.com/legal/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="https://syphnosys.com/legal/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="https://syphnosys.com/legal/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://syphnosys.com/legal/assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="https://syphnosys.com/legal/assets/js/counterup.min.js"></script>
    <script type="text/javascript" src="https://syphnosys.com/legal/assets/js/fontawesome.js"></script>
    <script type="text/javascript" src="https://syphnosys.com/legal/assets/js/all.min.js"></script>
</head>

<body>

<div class="container-fluid bg-black text-white py-4">
    <div class="container">
    	<h3 class="m-0 text-center">syphnosys - Contact Us</h3>  
    </div>
</div>

    <section class="ba_contact_introduction">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 ba_contact">
                    <h2>Contact Us</h2>
                    <p>Request to delete your data from our app. Please fill out the form below to initiate the deletion process. We value your privacy and will process your request promptly.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ba_contact_form">
        <div class="container">
            <form action="<?= base_url('contact'); ?>" method="post">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label>Name</label>
                        <input type="text" class="form-control" name="contact_name" placeholder="Enter Your Name" required>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label>Email</label>
                        <input type="email" class="form-control" name="contact_email" placeholder="Enter Your Email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" name="contact_mobile" placeholder="Enter Your Numbar" required>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label>Reason for Deletion</label>
                        <input type="text" class="form-control" name="contact_deletion_reason" placeholder="Enter Reason for Deletion" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <label>Message</label>
                        <textarea class="form-control" name="contact_message" placeholder="Enter Your Message" rows="6" required></textarea>
                    </div>
                </div>
                <input type="submit" class="btn ba_btn" name="submit" value="Submit">
            </form>
        </div>
    </section>

<div class="container-fluid bg-black text-white py-4">
    <div class="container">
    	<p class="m-0 text-center">Copyright © 2019-2025. All rights reserved by syphnosys.</p>  
    </div>
</div>

<?php if($this->session->userdata('session_contact')){ ?>
    <script>
        $(document).ready(function() {
            $('#successModal').modal('show');
        });
    </script>
    <?php echo $this->session->unset_userdata('session_contact'); ?>
<?php } ?>
    
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Form submitted successfully!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>





