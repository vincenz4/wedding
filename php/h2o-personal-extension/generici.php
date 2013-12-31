<?php

class Cssactuallink_Tag extends H2o_Node {    
    public $voceCorrente;  

    function __construct($argstring, $parser, $position = 0) {
        $arguments = array_map('trim', explode(',', $argstring));
        $this->voceCorrente = trim($arguments[0]);
    }

    function render($context, $stream) {
        if(preg_match('#^'.$this->voceCorrente.'#i', $context["pagina"]) === 1){
            $stream->write("active");
        }
    }
}

class Hreflink_Tag extends H2o_Node {    
    public $voceCorrente;  
    public $href;  

    function __construct($argstring, $parser, $position = 0) {
        $arguments = array_map('trim', explode(',', $argstring));
        $this->voceCorrente = trim($arguments[0]);
        $this->href = trim($arguments[1]);
    }

    function render($context, $stream) {
        if(preg_match('#^'.$this->voceCorrente.'#i', $context["pagina"]) === 1){
            $stream->write("#");
        } else {
            $stream->write($this->href);
        }
    }
}

class Linklanguage_Tag extends H2o_Node {  
    public $language;  
    
    function __construct($argstring, $parser, $position = 0) {
        $arguments = array_map('trim', explode(',', $argstring));
        $this->language = trim($arguments[0]);
    }

    function render($context, $stream) {
        if($context["modo"] == 0){
            //Sono nel caso di generazione dell'html
            if($this->language == 'it'){
                $stream->write("./index.html");
            } else {
                $stream->write("./index-".$this->language.".html");
            }
        } else {
            $stream->write("?lang=".$this->language);
        }
    }
}

H2o::addTag('cssactuallink');
H2o::addTag('hreflink');
H2o::addTag('linklanguage');
?>