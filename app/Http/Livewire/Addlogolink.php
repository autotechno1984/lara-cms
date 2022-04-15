<?php

namespace App\Http\Livewire;

use App\Models\links;
use App\Models\logos;
use Livewire\Component;
use Livewire\WithFileUploads;

class Addlogolink extends Component
{
    use WithFileUploads;

    public $file;
    public $link;
    public $logos;
    public $login;
    public $daftar;

    public function mount(){
        $this->logos = logos::all();
        $this->link = links::all();
    }

    public function render()
    {
        return view('livewire.addlogolink');
    }
    public function upload(){
        $this->validate([
            'file' => 'image|max:300',
        ],
        [
            'file.image' => 'Silahkan Di pilih gambarnya'
        ]);
        logos::truncate();
        $savelogo = new logos();
        $file = $this->file->store('public/img');
        $savelogo->file = $file;
        $savelogo->save();
        $this->file  = null;
        $this->mount();

    }

    public function savelink(){
        $this->validate([
            'daftar' => 'required',
            'login' => 'required'
        ]);

        links::truncate();
        $addlinks = new links();
        $addlinks->daftar = $this->daftar;
        $addlinks->login = $this->login;
        $addlinks->save();
        $this->daftar = null;
        $this->login = null;
        session()->flash('success-link', 'Data Link Berhasil Ditambahkan');
        $this->mount();
    }
}
