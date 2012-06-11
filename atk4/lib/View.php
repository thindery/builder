<?php
/**
 * HtmlElement is a base class of any View which would render as a
 * single HTML element. By default it puts <div> on your page, but
 * you can change the element with setElement()
 *
 * Use: 
 *  $tabs=$this->add('View')->set('Hello')->addClass('myclass');
 *
 * @license See http://agiletoolkit.org/about/license
 * 
**/
class View extends AbstractView {
    /** Change which element is used. 'div' by default, but change with this funciton */
    function setElement($element){
        $this->template->trySet('element',$element);
        return $this;
    }
    /** Add attribute to element. Also supports hash for multiple attributes */
    function setAttr($attribute,$value=null){
        if(is_array($attribute)&&is_null($value)){
            foreach($attribute as $a=>$b)$this->setAttr($a,$b);
            return $this;
        }
        $this->template->appendHTML('attributes',' '.$attribute.'="'.$value.'"');
        return $this;
    }
    /** Add class to element. */
    function addClass($class){
        if(is_array($class)){
            foreach($class as $c)$this->addClass($class);
            return $this;
        }
        $this->template->append('class'," ".$class);
        return $this;
    }
    function setClass($class){
        $this->template->trySet('class', $class);
        return $this;
    }
    /** Add style to element. */
    function setStyle($property,$style=null){
        if(is_null($style)&&is_array($property)){
            foreach($property as $k=>$v)$this->setStyle($k,$v);
            return $this;
        }
        $this->template->append('style',";".$property.':'.$style);
        return $this;
    }
    /** Add style to element */
    function addStyle($property,$style=null){
        return $this->setStyle($property,$style);
    }
    /** Sets text appearing inside element. Automatically escapes HTML characters */
    function setText($text){
        $this->template->trySet('Content',$text);
        return $this;
    }
    /** Alias for setText. Escapes HTML characters. */
    function set($text){
        return $this->setText($text);
    }
    /** Sets HTML */
    function setHtml($html){
        $this->template->trySetHTML('Content',$html);
        return $this;
    }
    function defaultTemplate(){
        return array('htmlelement');
    }
}
