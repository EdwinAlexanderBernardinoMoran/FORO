<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Thread;
use Livewire\Component;
use Psy\Output\Theme;

class ShowThreads extends Component
{
    public $search = '';
    public $category = '';

    public function filterByCategory($category){
        $this->category = $category;
    }

    public function render()
    {
        $categories = Category::get();
        // $threads = Thread::latest()->withCount(salvador'replies')->get();

        // Buscador
        $threads = Thread::query();
        $threads->where('title', 'like', "%$this->search%");

        if($this->category){
            $threads->where('category_id', $this->category);
        }
        $threads->withCount('replies');
        $threads->latest();

        return view('livewire.show-threads', [
            'categories' => $categories,
            'threads' => $threads->get()
        ]);
    }
}
