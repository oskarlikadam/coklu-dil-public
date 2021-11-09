<!DOCTYPE html>
<html>
<head>

    <?php $this->load->view("includes/head"); ?>

</head>
<body data-plugin-scroll-spy data-plugin-options="{'target': '#sidebar'}">

<div class="body">

    <?php $this->load->view("includes/header");?>


    <?php $this->load->view("{$viewFolder}/detail/content"); ?>

    <footer id="footer" class="overflow-hidden border-0 m-0" style="background-image: url(<?= base_url("assets"); ?>/img/demos/construction/backgrounds/background-2.jpg); background-repeat: no-repeat; background-position: center bottom;">


        <?php $this->load->view("includes/footer");?>


    </footer>

</div>

<?php $this->load->view("includes/include_script");?>

</body>
</html><?php
