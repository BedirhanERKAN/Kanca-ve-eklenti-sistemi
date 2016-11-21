<?php
/*
 * Created by Bedirhan ERKAN
 * Github   :  BedirhanERKAN
 * Facebook :  BedirhanERKAN
 * Twitter  :  BedirhanERKAN
 * Youtube  :  BedirhanERKAN
 */

    $hooks->add_action('title',function(){ echo 'Merhaba Dünya'; });

    $hooks->add_action('header_css','helloworld_header_css');
    $hooks->add_action('content','helloworld_content');


    function helloworld_header_css()
    {
        echo "
        @font-face {
    font-family: 'Roboto';
    src: url('fonts/roboto_thin/Roboto-Thin-webfont.eot');
    src: url('fonts/roboto_thin/Roboto-Thin-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/roboto_thin/Roboto-Thin-webfont.woff') format('woff'),
         url('fonts/roboto_thin/Roboto-Thin-webfont.ttf') format('truetype'),
         url('fonts/roboto_thin/Roboto-Thin-webfont.svg#robotothin') format('svg');
    font-weight: normal;
    font-style: normal;

}



html, body, div, form, fieldset, legend, label
{
 margin: 0;
 padding: 0;
}

table
{
 border-collapse: collapse;
 border-spacing: 0;
}

th, td
{
 text-align: left;
 vertical-align: top;
}

h1, h2, h3, h4, h5, h6, th, td, caption { font-weight:normal; }

img { border: 0; }

body { background-color:rgb(173, 30, 30); color:white; font-family: 'Roboto', sans-serif; font-size:40px;} center{ background-color:rgba(255, 255, 255, 0.68); margin:0; padding:2%;}";
    }


    function helloworld_content()
    {
        global $hooks;

        echo "<center style='margin: 17% 0;clear:both;'><h1>Merhaba Dünya</h1></center>";
        echo "<div id='menu' style='clear: both;'>";

            $hooks->do_action('acilir_menu');
        echo "</div>";
    }



?>
