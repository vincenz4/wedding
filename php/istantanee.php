<?php
        require './h2o.php';
        require './session.php';
        $h2o = new h2o('templates/istantanee.html');
        echo $h2o->render(array('DEBUG_ENABLE'=>False,
        	'charset' => 'UTF-8',
        	'pagina' => 'istantanee',
        	'album1_thumb' => './static/img/fedi-tr.png',
        	'album1' => array( 
				array(  
					'file' =>  './static/img/vi_fra_foto/54.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'Pedalando in bicicletta',
					'titoloSlide' => 'Pedalando in bicicletta',
				),
				array(  
					'file' =>  './static/img/vi_fra_foto/01.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'Un pò di vanità',
					'titoloSlide' => 'Un pò di vanità',
				),
				array(  
					'file' =>  './static/img/vi_fra_foto/46.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'Maquillage',
					'titoloSlide' => 'Maquillage',
				),
				array(  
					'file' =>  './static/img/vi_fra_foto/05.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'Il nostro primo anniversario',
					'titoloSlide' => 'Il nostro primo anniversario',
				),
				array(  
					'file' =>  './static/img/vi_fra_foto/06.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'In su e giù',
					'titoloSlide' => 'In su e giù',
				),
				array(  
					'file' =>  './static/img/vi_fra_foto/12.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'Piazza di Spagna',
					'titoloSlide' => 'Piazza di Spagna',
				),
				array(  
					'file' =>  './static/img/vi_fra_foto/10.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'Dolci momento',
					'titoloSlide' => 'Dolci momento',
				),
				array(  
					'file' =>  './static/img/vi_fra_foto/23.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'Un po\' di meritato riposo',
					'titoloSlide' => 'Un po\' di meritato riposo',
				),
				array(  
					'file' =>  './static/img/vi_fra_foto/49.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'La meditazione',
					'titoloSlide' => 'La meditazione',
				)
			),
        	'album2_thumb' => './static/img/fedi-tr.png',
 			'album2' => array( 
				array(  
					'file' =>  './static/img/vi_fra_foto/22.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'La prima mi era andata bene ... la seconda no',
					'titoloSlide' => 'La prima mi era andata bene ... la seconda no',
				),
				array(  
					'file' =>  './static/img/vi_fra_foto/43.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'Smorfia',
					'titoloSlide' => 'Smorfia',
				),
				array(  
					'file' =>  './static/img/vi_fra_foto/14.jpg',
					'backgroundShiftX' =>  '-38px',
					'backgroundShiftY' =>  '0px',
					'titoloThumb' => 'L\'adone',
					'titoloSlide' => 'L\'adone',
				)
			),
        ));
?>