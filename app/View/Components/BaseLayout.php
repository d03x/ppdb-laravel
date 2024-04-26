<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BaseLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $title
    ) {
        $this->title = $this->title ? $title.' - '.config('app.name') : config('app.name');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|\Closure|string
    {
        return view('layouts.base');
    }
}
