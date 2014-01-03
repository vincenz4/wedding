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
					'titoloThumb' => 'in bicicletta',
					'titoloSlide' => 'in bicicletta',
				),
				array(  
					'file' =>  './static/img/vincenza/46.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'Un pò di vanità',
					'titoloSlide' => 'Un pò di vanità',
				),
				array(  
					'file' =>  './static/img/vincenza/49.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'La meditazione',
					'titoloSlide' => 'La meditazione',
				)
			),
 			'francescoObjList' => array( 
				array(  
					'file' =>  './static/img/francesco/22.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'La prima mi era andata bene ... la seconda no',
					'titoloSlide' => 'La prima mi era andata bene ... la seconda no',
				),
				array(  
					'file' =>  './static/img/francesco/43.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'Smorfia',
					'titoloSlide' => 'Smorfia',
				),
				array(  
					'file' =>  './static/img/francesco/97.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'L\'adone',
					'titoloSlide' => 'L\'adone',
				)
			),
 			'viFraObjList' => array( 
				array(  
					'file' =>  './static/img/vi_fra/13.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'Dolci coccole (prima parte)',
					'titoloSlide' => 'Dolci coccole (prima parte)',
				),
				array(  
					'file' =>  './static/img/vi_fra/010.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'Dolci coccole (seconda parte)',
					'titoloSlide' => 'Dolci coccole (seconda parte)',
				),
			)
        ));
?>