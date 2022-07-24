<!DOCTYPE html>
<!--[if IE 9]> <html lang="tr" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="tr" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="tr">
<!--<![endif]-->
<head>
	<?php $this->load->view("includes/head"); ?>
</head>
<!--<body class="front-page">-->
<!--<body class="gradient-background-header transparent-header front-page ">-->
<body class="transparent-header gradient-background-header front-page full-page ">
<!--<body class="gradient-background-header transparent-header front-page">-->
<!--<body class="front-page transparent-header">-->
<!-- scrollToTop -->
<!-- ================ -->
<!--<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>-->

<div class="page-wrapper">

	<?php $this->load->view("includes/header"); ?>

	<?php $this->load->view("{$viewFolder}/content"); ?>

	<?php //$this->load->view("includes/footer"); ?>

</div>

<?php $this->load->view("includes/include_script"); ?>

</body>
</html>