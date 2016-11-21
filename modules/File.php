<?php
/*
 * Created by Bedirhan ERKAN
 * Github   :  BedirhanERKAN
 * Facebook :  BedirhanERKAN
 * Twitter  :  BedirhanERKAN
 * Youtube  :  BedirhanERKAN
 */
    class File {
    
        var $dir,$yol;
        function directory($yol)
        {
            $this->yol = $yol;
            $this->dir  = scandir($yol);
        }
        
        function directory_isfile()
        {
            $filem = array();
            foreach($this->dir as $file)
            {

                if(is_dir($this->yol."/".$file) and $file!="." and $file!="..")
                    $filem[] = $file;
            }

            return $filem;
        }
        
        function directory_isfolder()
        {
            $filem = array();

            foreach($this->dir as $file)
            {
                if(is_file($this->yol."/".$file) and $file!="." and $file!="..")
                    $filem[] = $file;
            }
            
            return $filem;
            
        }
    }



