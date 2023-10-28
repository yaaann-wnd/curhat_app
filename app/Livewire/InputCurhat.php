<?php

namespace App\Livewire;

use App\Models\Curhat;
use Livewire\Component;

class InputCurhat extends Component
{
    public $isi = '';

    public function proses()
    {
        $validated = $this->validate(
            [
                'isi' => 'required'
            ],
            [
                'isi.required' => 'Tidak boleh kosong ya!'
            ]
        );

        Curhat::create($validated);

        $this->reset('isi');
        
        $this->dispatch('curhat-dibuat');
    }

    public function render()
    {
        return view('livewire.input-curhat');
    }
}
