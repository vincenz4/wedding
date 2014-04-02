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

class Rowchange_Tag extends H2o_Node {  
    public $position;
    private $iteratable, $key, $item, $body, $else, $limit, $reversed, $valore;
    private $syntax = '{
        ([a-zA-Z][a-zA-Z0-9-_]*)?(?:,\s?([a-zA-Z][a-zA-Z0-9-_]*))?\s*
        ([a-zA-Z][a-zA-Z0-9-_]*(?:\.[a-zA-Z_0-9][a-zA-Z0-9_-]*)*)\s*   # Iteratable name
        (?:limit\s*:\s*(\d+))?\s*
        (reversed)?                                                     # Reverse keyword
    }x';

    function __construct($argstring, $parser, $position) {
        if (!preg_match($this->syntax, $argstring, $match))
            throw new TemplateSyntaxError("Invalid for loop syntax ");
        
        $match = array_pad($match, 6, '');
        list(,$this->key, $this->item, $this->iteratable, $this->limit, $this->reversed) = $match;
        
        // if ($this->limit)
        //     $this->limit = (int) $this->limit;

        # Swap value if no key found
        // if (!$this->item) {
        //     list($this->key, $this->item) = array($this->item, $this->key);
        // }
        $this->iteratable = symbol($this->iteratable);
        // $this->reversed = (bool) $this->reversed;
    }
    
    function render($context, $stream) {
        $iteratable = $context->resolve($this->iteratable);

        // $stream->write("<pre>" . htmlspecialchars( print_r($context['loop'], true) ) . "</pre>");
        // $stream->write("<pre>" . htmlspecialchars( print_r($this->valore, true) ) . "</pre>");
        // $stream->write("<pre>" . htmlspecialchars( print_r($this->key, true) ) . "</pre>");
        // $stream->write("<pre>" . htmlspecialchars( print_r($this->item, true) ) . "</pre>");
        // $stream->write("<pre>" . htmlspecialchars( print_r($this->iteratable, true) ) . "</pre>");
        // $stream->write("<pre>" . htmlspecialchars( print_r($this->limit, true) ) . "</pre>");
        // $stream->write("<pre>" . htmlspecialchars( print_r($this->reversed, true) ) . "</pre>");

        // $stream->write("<pre>" . htmlspecialchars( print_r($iteratable, true) ) . "</pre>");
         // $stream->write("<pre>" . htmlspecialchars( print_r($iteratable[$context['loop']['counter0']], true) ) . "</pre>");
        // $stream->write("<pre>" . htmlspecialchars( print_r($iteratable[$context['loop']['counter']], true) ) . "</pre>");
        // $stream->write("<pre>" . $iteratable[$context['loop']['counter0']][row] . "</pre>");
        // $stream->write("<pre>" . $iteratable[$context['loop']['counter0']-1][row] . "</pre>");
        if( ($context['loop']['counter0'] == 0) or ($iteratable[$context['loop']['counter0']-1][row]==$iteratable[$context['loop']['counter0']][row])){
            $context['stessaRiga']=1;
        } else {
            $context['stessaRiga']=0;
        }
        // $stream->write("<pre>" . $context['stessaRiga'] . "</pre>");
    }

}

H2o::addTag('cssactuallink');
H2o::addTag('hreflink');
H2o::addTag('linklanguage');
H2o::addTag('rowchange');
?>