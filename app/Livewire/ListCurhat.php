<?php

namespace App\Livewire;

use App\Models\Curhat;
use Livewire\Attributes\On;
use Livewire\Component;

class ListCurhat extends Component
{
    #[On('curhat-dibuat')] 
    public function curhatCreated() {
        $this->render();
    }

    public function render()
    {
        $curhat = Curhat::latest()->get();
        return view('livewire.list-curhat', ['curhat' => $curhat]);
    }
}
