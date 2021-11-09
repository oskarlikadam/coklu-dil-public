<!DOCTYPE html>
<html>
<head>

    <?php $this->load->view("includes/head"); ?>

</head>
<body data-plugin-scroll-spy data-plugin-options="{'target': '#sidebar'}">

<div class="body">

    <?php $this->load->view("includes/header");?>

    <div role="main" class="main">
        <?php $this->load->view("{$viewFolder}/content"); ?>

    </div>


        <?php $this->load->view("includes/footer");?>




</div>

<?php $this->load->view("includes/include_script");?>

</body>
</html><?php
