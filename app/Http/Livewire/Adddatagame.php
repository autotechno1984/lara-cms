<?php

namespace App\Http\Livewire;

use App\Models\listgame;
use Livewire\Component;
use Storage;

class Adddatagame extends Component
{
    public $lsgame;
    public $idedit ;

    protected $listeners = [
        'refreshParent' => 'refresh'
    ];

    public function refresh(){
        $this->mount();
    }
    public function mount(){
        $this->lsgame = listgame::all();
    }
    public function render()
    {
        return view('livewire.adddatagame');
    }

    public function delete($id)
    {
        $listgames = listgame::find($id);
        Storage::delete($listgames->file);
        $listgames->delete();
        return redirect()->route('list-games');

    }

}
