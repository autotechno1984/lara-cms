<?php

namespace App\Http\Livewire;

use App\Models\kategori;
use Livewire\Component;
use Livewire\withPagination;
use App\Models\games;
use Livewire\WithFileUploads;
use Storage;
class AddGames extends Component
{
    use WithFileUploads;

    public $games;
//    public $game;
    public $no = 1;
    public $kategori;
    public $kategoriid;
    public $kode;
    public $provider;
    public $tipe;
    public $file;

    protected $rules = [
        'kategoriid' => 'required',
        'kode' => 'required|unique:games|min:3|max:4',
        'provider' => 'required|min:5',
        'file' => 'image|max:200',
    ];

    protected $messages = [
        'kategoriid.required' => 'Pilih Tipe game',
        'kode.required' => 'Masukkan Kode',
        'provider.required' => 'Masukkan Provider',
        'file' => 'File Image jpg, png'
    ];

    public function mount(){
        $this->kategori = kategori::all();
        $this->games = games::all();
    }

    public function render()

    {
        return view('livewire.add-games', [
            'game' => games::paginate(10),
        ]);

    }

    public function save(){

        $this->validate();
        $file = $this->file->store('public/img');
        $addgames = new games();
        $addgames->tipe = $this->kategoriid;
        $addgames->kode = $this->kode;
        $addgames->provider = $this->provider;
        $addgames->file  = $file;
        $addgames->save();

        session()->flash('berhasil', 'Data Berhasil Disimpan');
        $this->kategoriid = null;
        $this->kode = null;
        $this->provider = null;
        $this->file = null;
        $this->mount();

    }

    public function addcategory(){

        $addkategori = new kategori();
        $addkategori->tipe = $this->tipe;
        $addkategori->save();
        $this->tipe = null;
        $this->mount();

    }

    public function delete($id){
        $bangame = games::find($id);
        Storage::delete($bangame->file);
        $bangame->delete();
        $this->mount();
    }
}
