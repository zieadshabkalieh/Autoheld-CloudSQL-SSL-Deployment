<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $text;
    public $color;
    public $icon;
    public $textColor;

    public function __construct($text, $color, $icon, $textColor)
    {
        $this->text = $text;
        $this->color = $color;
        $this->icon = $icon;
        $this->textColor = $textColor;
    }

    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}

