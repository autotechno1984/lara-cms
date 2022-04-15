<?php

namespace App\Http\Livewire;

use App\Models\banner;
use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;
class Addbanner extends Component
{
    use WithFileUploads;
    public $banner;
    public $file;
    public $altimage;

    public function mount(){
        $this->banner = banner::all();

    }

    public function render()
    {
        return view('livewire.addbanner');
    }

    protected $rules = [
        'file' => 'required|image|max:500',
        'altimage' => 'required|min:10'
                        ];

    protected $messages = [
        'file.required' => 'File Tidak Boleh kosong',
        'altimage.required' => 'Input Harus Diisi'
    ];

    public function updated($Altimage)
    {
        $this->validateOnly($Altimage);
    }
    public function save()
    {
        $this->validate();
        $addbanner = new banner();
        $file = $this->file->store('public/img');
        $addbanner->file = $file;
        $addbanner->altimage = $this->altimage;
        $addbanner->save();
        session()->flash('success', 'Data Banner Berhasil Disimpan');
        $this->file = null;
        $this->altimage = null;
        $this->mount();

    }

    public function delete($id){
        $deletegame = banner::find($id);
        Storage::delete($deletegame->file);
        $deletegame->delete();
        $this->mount();
    }
}
