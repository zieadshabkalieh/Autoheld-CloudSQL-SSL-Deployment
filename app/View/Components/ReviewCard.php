<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ReviewCard extends Component
{
    public $name, $image, $date, $description, $rating;

    public function __construct($name, $image, $date, $description, $rating)
    {
        $this->name = $name;
        $this->image = $image;
        $this->date = $date;
        $this->description = $description;
        $this->rating = $rating;
    }


    // Return the component's view
    public function render(): View
    {
        return view('components.review-card'); 
    }

}
