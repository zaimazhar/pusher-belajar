<?php

namespace App\Http\Livewire;

use App\Events\ReceivedClick;
use Livewire\Component;

class ButtonEvent extends Component
{
    public function updateClick() {
        ReceivedClick::dispatch();
    }

    public function render()
    {
        return view('livewire.button-event');
    }
}
