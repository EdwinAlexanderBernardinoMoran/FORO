<?php

namespace App\Http\Livewire;

use App\Models\Thread;
use Livewire\Component;

class ShowThread extends Component
{
    // Busqueda implicita.
    public Thread $thread;

    public function render()
    {
        return view('livewire.show-thread');
    }
}
