<?php

namespace RohitSondigala\Packageone;

class Html 
{
    public $class;

    public function __construct()
    {
        $this->class = "";
    }

    /**
     * Create an HTML link and return the HTML object.
     *
     * @param string $name
     * @param string $href
     * @return Html
     */
    public function link(string $name, string $href = "#", string $class = "")
    {
        return "<a class='$class' href='$href' onclick='alert(`hello wort`)'>$name</a>";
    }

    public function div(...$element)
    {
        $elements = "";

        foreach($element as $item)
        {
            $elements .= $item;
        }

        return "<div>".$elements."</div>";
    }
    
}

