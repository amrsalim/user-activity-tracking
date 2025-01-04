<?php
namespace App\View\Components;

use Illuminate\View\Component;

class SlotContent extends Component
{
    public $slot;

    public function __construct($slot = null)
    {
        $this->slot = $slot;
    }

    public function render()
    {
        return view('components.slot-content');
    }
}
