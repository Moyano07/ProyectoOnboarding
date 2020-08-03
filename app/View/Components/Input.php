<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{

    public $type;

    public $name;

    public $value;

    public $required;

    public $placeholder;

    public $message;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type,$name,$value,$required,$placeholder,$message)
    {
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->require = $required;
        $this->placeholder = $placeholder;
        $this->message = $message;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input');
    }
}
