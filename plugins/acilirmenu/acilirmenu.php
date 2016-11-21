<?php
/*
* Created by Bedirhan ERKAN
* Github   :  BedirhanERKAN
* Facebook :  BedirhanERKAN
* Twitter  :  BedirhanERKAN
* Youtube  :  BedirhanERKAN
*/


    $hooks->add_action('header_css','acilirmenu_header_css');
    $hooks->add_action('acilir_menu','acilirmenu_content');


    function acilirmenu_header_css(){
    echo "#menu { position:absolute; margin:-23% 39%; font-size:20px; color:white; }
            #menu a {  text-decoration:none; color:white; margin:0 14px; }";
    }

    function acilirmenu_content()
    {
        echo "<a href='http://github.com/bedirhanerkan'>Github</a> |";
        echo "<a href='http://www.bedirhanerkan.com.tr'>Bedirhan EKRAN</a>";
    }

?>
