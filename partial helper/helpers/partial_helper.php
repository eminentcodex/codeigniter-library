<?php

/**
 * Zend's Equivalent of partial and partialLoop helpers
 * @author azhar
 **/
    
    function partialLoop($script, $data = array()){ 
        foreach($data as $key => $value){
            partial($script, $value);
        }
    }
    
    function partial($script, $data = array()){
        //Get vars for the current scope
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        include APPPATH . 'views'.$script;
    }
    
    function getVars($data){
        foreach ($data as $key => $value) {
            $$key = $value;
            //$GLOBALS[$key] = $value;
        }
    }
    
?>
