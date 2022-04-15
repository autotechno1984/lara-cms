<?php

namespace App\Http\Livewire;

use App\Models\games;
use App\Models\listgame;
use Livewire\Component;

class Front extends Component
{
    public $lsgame;
    public $gamebanner;
    public function mount(){
        $this->lsgame = listgame::orderBy('winrate', 'Desc')->get();
        $this->gamebanner = games::where('tipe',1)->get();
    }
    public function render()
    {
        return view('livewire.front');
    }
    public function find($id){
        dd($id);
    }

}
