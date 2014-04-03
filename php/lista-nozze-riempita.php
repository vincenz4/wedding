<?php
    require './h2o.php';
    require './session.php';
    $h2o = new h2o('templates/lista-nozze-riempita.html');
    echo $h2o->render(array('DEBUG_ENABLE'=>False,
        'charset' => 'UTF-8',
        'pagina' => 'lista-nozze',
        'imageBaseUrl' => './static/img/viaggio/',
        'objList' => array(
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Giappone/geisha.jpg',
                'width' =>  '150',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Giappone/hakone.jpg',
                'width' =>  '225',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Giappone/img02.jpg',
                'width' =>  '267',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Giappone/img04_tokyo.jpg',
                'width' =>  '267',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Giappone/img06_kyoto.jpg',
                'width' =>  '266',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Giappone/img08.jpg',
                'width' =>  '225',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Giappone/kanazawa3.jpg',
                'width' =>  '224',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Giappone/kyoto.jpg',
                'width' =>  '200',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Giappone/lanterne.jpg',
                'width' =>  '200',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Giappone/miyajima.jpg',
                'width' =>  '200',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Giappone/nikko9.jpg',
                'width' =>  '225',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Giappone/shirakawago.jpg',
                'width' =>  '223',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Giappone/takayama.jpg',
                'width' =>  '222',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Giappone/takayama1.jpg',
                'width' =>  '225',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Giappone/tokyo01.jpg',
                'width' =>  '249',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Giappone/villaggioHida_takayama.jpg',
                'width' =>  '201',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Thailandia/Koh-Phi-Phi-the-beach.jpg',
                'width' =>  '226',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Thailandia/Koh-Samui-palm-fringed-beach-300x224.jpg',
                'width' =>  '201',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Thailandia/Koh-Samui-palm-tree-hammock.jpg',
                'width' =>  '200',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Thailandia/Koh-Tao-beach-Thailand.jpg',
                'width' =>  '240',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Thailandia/Koh-Samui.jpg',
                'width' =>  '324',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Thailandia/Koh_Samui_Lipa_Noi2.jpg',
                'width' =>  '200',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Thailandia/thailand-full.jpg',
                'width' =>  '225',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Thailandia/turtle1.jpg',
                'width' =>  '200',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
            array(
                'row' =>  '1',
                'column' =>  '1',
                'file' =>  './Thailandia/yenitpic13.png',
                'width' =>  '225',
                'height' =>  '150',
                'alternate' => 'alternate',
                'title' => 'Geisha',
                'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
            ),
        ),
    ));
?>
