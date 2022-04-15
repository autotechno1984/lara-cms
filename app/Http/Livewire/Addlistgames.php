<?php

namespace App\Http\Livewire;

use App\Models\games;
use App\Models\listgame;
use Livewire\Component;
use Livewire\WithFileUploads;

class Addlistgames extends Component
{
    use WithFileUploads;
    public $idprovider;
    public $namagame;
    public $jamgacor1;
    public $jamgacor2;
    public $winrate;
    public $minstake;
    public $medstake;
    public $maxstake;
    public $file;
    public $onfire;
    public $isnew;
    public $game;


    public function mount(){
        $this->onfire = 0;
        $this->isnew = 0;
        $this->game = games::all();
    }

    public function render()
    {
        return view('livewire.addlistgames');
    }

    protected $rules = [

      'idprovider' => 'required',
        'file' => 'image|max:200',
      'namagame' => 'required|min:8|max:20',
      'jamgacor1' => 'required',
      'jamgacor2' => 'required',
      'winrate' => 'required',
      'minstake' => 'required',
      'medstake' => 'required',
      'maxstake' => 'required',
    ];

    protected $messages = [
        'id_provider.required' => 'Silahkan Diisi Provider nya',
        'file.required' => 'Pilih Gambar',
        'namagame.required' => 'nama game tidak boleh kosong',
        'jamgacor1.required' => 'Jam Tdk boleh Kosong',
        'jamgacor2.required' => 'Jam Tdk boleh Kosong',
        'winrate.required' => 'Win Rate Tidak boleh Kosong',
        'minstake.required' => 'Min stake harus diisi',
        'medstake.required' => 'Med stake harus diisi',
        'maxstake.required' => 'Max stake harus diisi',

    ];

    public function updated($Idprovider, $Namagame)
    {
        $this->validateOnly($Idprovider);
        $this->validateOnly($Namagame);
    }

    public function save(){
       $this->validate();
       $filepath = $this->file->store('/public/img');
       $lsgames = new listgame();
       $lsgames->id_provider = $this->idprovider;
       $lsgames->file = $filepath;
       $lsgames->namagame = $this->namagame;
       $lsgames->jamgacor1 = $this->jamgacor1;
       $lsgames->jamgacor2 = $this->jamgacor2;
       $lsgames->winrate = $this->winrate;
       $lsgames->minstake = $this->minstake;
       $lsgames->medstake = $this->medstake;
       $lsgames->maxstake = $this->maxstake;
       $lsgames->onfire = $this->onfire;
       $lsgames->isnew = $this->isnew;
       $lsgames->save();
       $this->resetfield();
       $this->emit('refreshParent');
       $this->dispatchBrowserEvent('close-modal');
//       return redirect()->route('list-games');


    }

    public function refreshparent(){
        $this->emit('refreshgame');
    }
    public function resetfield() {
        $this->idprovider = '';
        $this->namagame = null;
        $this->jamgacor1 = null;
        $this->jamgacor2 = null;
        $this->winrate = null;
        $this->minstake = null;
        $this->medstake = null;
        $this->maxstake = null;
        $this->file = null;
        $this->onfire = null;
        $this->isnew = null;

    }

}
