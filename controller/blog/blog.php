<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */




class Blog extends F3instance {
    
    
    final function home(){

        
		// Use the home.htm template
		$this->set('pagetitle','Home');
                $this->set('bob','This is great!!');
                
                $this->set('entries',);
                
                $this->set('site','This is Test');
		$this->set('template','blog/home.tpl.php');
                
                //echo Template::serve('main.lyt.php');
    }
     
    
    function afterroute() {
        
            
            // Serve master template; layout.htm is located in the directory
            // pointed to by the GUI global variable
            $this->set('layout_Sitename','Nathanael\'s F3 Blog');
            echo Template::serve('main.lyt.php');
    }
    
    
}



















?>
