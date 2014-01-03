<?php
        require './h2o.php';
        require './session.php';
        $h2o = new h2o('templates/home.html');
        echo $h2o->render(array('DEBUG_ENABLE'=>False,
        	'charset' => 'UTF-8',
        	'pagina' => 'home',
        	'vincenzaObjList' => array( 
				array(  
					'file' =>  './static/img/vincenza/54.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'salotto',
					'titoloSlide' => 'salotto',
				),
				array(  
					'file' =>  './static/img/vincenza/46.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'salotto',
					'titoloSlide' => 'salotto',
				),
				array(  
					'file' =>  './static/img/vincenza/49.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'salotto',
					'titoloSlide' => 'salotto',
				)
			),
 			'francescoObjList' => array( 
				array(  
					'file' =>  './static/img/francesco/22.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'giorno',
					'titoloSlide' => 'giorno',
				),
				array(  
					'file' =>  './static/img/francesco/43.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'giorno',
					'titoloSlide' => 'giorno',
				),
				array(  
					'file' =>  './static/img/francesco/14.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'giorno',
					'titoloSlide' => 'giorno',
				)
			),
 			'viFraObjList' => array( 
				array(  
					'file' =>  './static/img/vi_fra/39.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'giorno',
					'titoloSlide' => 'giorno',
				),
				array(  
					'file' =>  './static/img/vi_fra/65.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'giorno',
					'titoloSlide' => 'giorno',
				),
			)
        ));
?>