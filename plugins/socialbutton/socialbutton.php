<?php
/*
 * Created by Bedirhan ERKAN 
 * Github   :  BedirhanERKAN
 * Facebook :  BedirhanERKAN
 * Twitter  :  BedirhanERKAN
 * Youtube  :  BedirhanERKAN
 */

    $hooks->add_action('title',function(){ echo null;});

    $hooks->add_action('header_css','socialbutton_css');
    $hooks->add_action('acilir_menu','socialbutton_content');


    function socialbutton_header_css()
    {
        echo "a";

    }

    function socialbutton_content()
    {
        global $hooks;

        echo "<br>Facebook | Twitter | Google ";
    }



?>
