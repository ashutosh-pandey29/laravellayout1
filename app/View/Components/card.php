<?php

namespace App\View\Components;

use Illuminate\View\Component;

class card extends Component
{
 
    public $service_title;
    public $service_message;
    public function __construct($servicetitle , $serviceMessage)
    {
        $this -> service_title = $servicetitle;
        $this -> service_message = $serviceMessage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {        
        
        return view('components.card');
    }
}
