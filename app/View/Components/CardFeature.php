<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardFeature extends Component
{
    public string $icon;
    public string $title;
    public string $description;

    public function __construct($icon,$title,$description)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->description = $description;
    }
    

   
    public function render()
    {
        return view('components.card-feature');
    }
}
