<?php

namespace App\Http\Livewire;

use App\Models\games;
use App\Models\listgame;
use Livewire\Component;

class EditGames extends Component
{
   public $gameid;
   public $listgame;
   public $provider;
   public $jamgacor1;
   public $jamgacor2;
   public $minstake;
   public $medstake;
   public $maxstake;
   public $game;
   public $namagame;
   public $isnew;
   public $onfire;
   public $updatewinrate;
   public $gambar;

    public function mount(){
        $this->listgame = listgame::find($this->gameid);
        $this->game = games::all();
        $this->provider = $this->listgame->id_provider;
        $this->namagame = $this->listgame->namagame;
        $this->updatewinrate = $this->listgame->winrate;
        $this->jamgacor1 = $this->listgame->jamgacor1;
        $this->jamgacor2 = $this->listgame->jamgacor2;
        $this->minstake = $this->listgame->minstake;
        $this->medstake = $this->listgame->medstake;
        $this->maxstake = $this->listgame->maxstake;
        $this->gambar = $this->listgame->file;
        $this->isnew = $this->listgame->isnew;

        $this->onfire = $this->listgame->onfire;
    }

    public function render()
    {
        return view('livewire.edit-games');
    }

    public function update(){
        $updategame = listgame::find($this->gameid);
        $updategame->id_provider = $this->provider;
        $updategame->namagame = $this->namagame;
        $updategame->jamgacor1 = $this->jamgacor1;
        $updategame->jamgacor2 = $this->jamgacor2;
        $updategame->minstake = $this->minstake;
        $updategame->medstake = $this->medstake;
        $updategame->maxstake = $this->maxstake;
        $updategame->winrate = $this->updatewinrate;
        $updategame->isnew = $this->isnew;
        $updategame->onfire = $this->onfire;
        $updategame->save();
        return redirect()->route('list-games');
    }
}
