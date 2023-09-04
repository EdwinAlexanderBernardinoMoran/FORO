<?php

namespace App\Http\Livewire;

use App\Models\Thread;
use Livewire\Component;

class ShowThread extends Component
{
    // Busqueda implicita.
    public Thread $thread;

    public $body = '';

    public function postReply(){
        // Validar
        $this->validate(['body' => 'required']);

        //Crear
        auth()->user()->replies()->create([
            'thread_id' => $this->thread->id,
            'body' => $this->body
        ]);

        //Refresh
        $this->body = '';

    }

    public function render()
    {
        // Consultar a las respuestas
        return view('livewire.show-thread', [
            'replies' => $this->thread->replies()->get()
        ]);
    }
}
