<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- set the page title, for seo purposes too -->
    <title><?php echo isset($page_title) ? strip_tags($page_title) : "Store Front"; ?></title>
    <link rel="shortcut icon" href="images/websitelogo.ico" type="image/x-icon"/>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen" />

    <link rel="stylesheet" href="<?php echo $home_url . "folio-gallery/folio-gallery.css" ?>" />
    <link rel="stylesheet" href="<?php echo $home_url . "folio-gallery/colorbox/colorbox.css" ?>" />
    <!--<link rel="stylesheet" type="text/css" href="folio-gallery/fancybox/fancybox.css" />-->

    <!-- admin custom CSS -->
    <link href="<?php echo $home_url . "libs/css/customer.css" ?>" rel="stylesheet" />

</head>
<body>

<!-- include the navigation bar -->
<?php include_once 'navigation.php'; ?>

<!-- container -->
<div class="container">

    <?php
    // if given page title is 'Login', do not display the title
    if($page_title!="Login"){
    ?>
    <div class='col-md-12'>
        <div class="page-header">
            <h1><?php echo isset($page_title) ? $page_title : "The Code of a Ninja"; ?></h1>
        </div>
    </div>
<?php
}
?>