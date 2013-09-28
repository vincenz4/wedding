<?php

class Linkpagine_Tag extends H2o_Node {    
    function __construct($argstring, $parser, $position = 0) {
    }

    function render($context, $stream) {
        if($context["modo"] == 0){
            //Sono nel caso di generazione dell'html
            if($context["locale"] == 'it'){
                $stream->write(".html");
            } else {
                $stream->write("-".$context["locale"].".html");
            }
        } else {
            $stream->write(".php");
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

H2o::addTag('linkpagine');
H2o::addTag('linklanguage');
?>