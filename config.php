<?php
/*
 * Created by Bedirhan ERKAN
 * Github   :  BedirhanERKAN
 * Facebook :  BedirhanERKAN
 * Twitter  :  BedirhanERKAN
 * Youtube  :  BedirhanERKAN
 */

   function __autoload($classname)
   {
       $filename = "modules/". $classname .".php";
        require_once($filename);
   }

?>