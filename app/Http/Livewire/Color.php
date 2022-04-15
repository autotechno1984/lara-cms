<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Color extends Component
{
    public $nama;
    public $warna = "#F7F7F7";
    public $kodewarna;

    public function mount(){
        $this->kodewarna = $this->warna;
    }

    public function render()
    {
        return view('livewire.color');
    }

    public function updatedWarna($value){
        $this->kodewarna = $value;
    }

}
