<?php

namespace App\Http\Livewire;

use App\Events\ReceivedClick;
use Livewire\Component;

class ButtonEvent extends Component
{
    public ?string $adminMessage = '';

    public function updateClick() {
        ReceivedClick::dispatch($this->adminMessage);
    }

    public function render()
    {
        return view('livewire.button-event');
    }
}
