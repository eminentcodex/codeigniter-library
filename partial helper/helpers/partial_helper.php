<?php

/**
 * Zend's Equivalent of partial and partialLoop helpers
 * @author azhar
 **/
    
    function partialLoop($script, $data = array(),$offset=false){
        foreach($data as $key => $value){
            partial($script, $value, $offset);
            if($offset)
                ++$offset;
        }
    }
    
    function partial($script, $data = array(),$offset=false){
        //Get vars for the current scope
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        include APPPATH . 'views'.$script.'.php';
    }
    
    function getVars($data){
        foreach ($data as $key => $value) {
            $$key = $value;
            //$GLOBALS[$key] = $value;
        }
    }
