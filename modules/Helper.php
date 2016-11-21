<?php
/*
 * Created by Bedirhan ERKAN
 * Github   :  BedirhanERKAN
 * Facebook :  BedirhanERKAN
 * Twitter  :  BedirhanERKAN
 * Youtube  :  BedirhanERKAN
 */
    class Helper{
    
        var $request;
        function __construct()
        {
            global $hooks;
            $this->request = $_REQUEST;
            $hooks = new Hooks();
            $this->active_plugin();
		}
        
        function active_plugin()
        {
            $folder = new File();
            $folder->directory('plugins');
            foreach($folder->directory_isfile() as $plugins)
            {
                global $hooks;
                if(in_array($plugins,$this->active_plugins()))
                require_once('plugins/'.$plugins.'/'.$plugins.'.php');
            }
        }

        function active_plugins(){
            
            return array('helloworld','acilirmenu','socialbutton');
            //return array($this->request['pagename']);
        }

    }

?>
