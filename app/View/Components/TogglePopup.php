<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TogglePopup extends Component
{
    public $icon;
    public $title;
    public $content;
    public $btnTitle;


    public function __construct($icon = null, $title = '', $content = '',$btnTitle='')
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->content = $content;
        $this->btnTitle=$btnTitle;
    }

    public function render()
    {
        return view('components.toggle-popup');
    }
}
