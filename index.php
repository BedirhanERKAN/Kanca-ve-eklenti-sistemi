<?php
/*
 * Created by Bedirhan ERKAN
 * Github   :  BedirhanERKAN
 * Facebook :  BedirhanERKAN
 * Twitter  :  BedirhanERKAN
 * Youtube  :  BedirhanERKAN
 */
    require_once("config.php");

    $helper = new Helper();


?>


    <html>
        <head>
            <title><?php $hooks->do_action("title"); ?></title>
            <meta charset="utf-8">

            <style><?php $hooks->do_action("header_css"); ?></style>
            <script><?php $hooks->do_action("header_js"); ?></script>

        </head>
        <body>



            <?php $hooks->do_action("content"); ?>



        </body>
        <style><?php $hooks->do_action("footer_css"); ?></style>
        <script><?php $hooks->do_action("footer_js"); ?></script>


    </html>