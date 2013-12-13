<?php
        require './h2o.php';
        require './session.php';
        $h2o = new h2o('templates/organizziamoci.html');
        echo $h2o->render(array('DEBUG_ENABLE'=>False,
        	'charset' => 'UTF-8',
        	'pagina' => 'organizziamoci',
        	'vincenzaObjList' => array( 
				array(  
					'file' =>  './static/img/vincenza/test',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'salotto',
					'titoloSlide' => 'salotto',
				),
				array(  
					'file' =>  './static/img/vincenza/test',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'salotto',
					'titoloSlide' => 'salotto',
				)
			),
 			'francescoObjList' => array( 
				array(  
					'file' =>  './static/img/francesco/test',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'giorno',
					'titoloSlide' => 'giorno',
				),
				array(  
					'file' =>  './static/img/francesco/test',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'giorno',
					'titoloSlide' => 'giorno',
				)
			),
 			'viFraObjList' => array( 
				array(  
					'file' =>  './static/img/vi_fra/test',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'giorno',
					'titoloSlide' => 'giorno',
				),
				array(  
					'file' =>  './static/img/vi_fra/test',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'giorno',
					'titoloSlide' => 'giorno',
				),
			)
        ));
?>