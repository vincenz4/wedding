<?php
        require './h2o.php';
        require './session.php';
        $h2o = new h2o('templates/libro-dediche.html');
        echo $h2o->render(array('DEBUG_ENABLE'=>False,
        	'charset' => 'UTF-8',
        	'pagina' => 'libro-dediche'
        ));
?>