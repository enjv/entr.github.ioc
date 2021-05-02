<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
		
		<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="<?= BASE_URL ?>assets/material-design-iconic-font/css/material-design-iconic-font.min.css" type="text/css">
		
		<link href="<?=BASE_URL.(isset($CustomStyle)?$CustomStyle:'assets/css/style.css') ?>" rel="stylesheet" type="text/css">

		<script src="<?= BASE_URL ?>assets/js/langscript.js"></script>
        <link rel="shorcut icon" href="<?=BASE_URL.(isset($PageIcon)?$PageIcon:'assets/icon.png') ?>" />
    <title><?= isset($PageTitle) ? $PageTitle : "games gifts"?></title>
    <!-- Additional tags here -->
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>
  </head>
  <body>