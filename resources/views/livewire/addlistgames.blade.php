<div>
    <div class="row">
        <div class="col-12">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Add List - games
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <label for="provider" class="col-form-label">Provider</label>
                        </div>
                        <div class="col-7">
                            <select class="form-select" name="" id="" wire:model="idprovider">
                                <option value=""></option>
                                @foreach($game as $games)
                                    <option value="{{ $games->id }}">{{ $games->provider }}</option>
                                @endforeach
                            </select>
                            @error('idrovider') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-5">
                            <label for="namagame" class="col-form-label">namagame</label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control" placeholder="namagame" wire:model="namagame">
                            @error('namagame') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-5">
                            <label for="namagame" class="col-form-label">Jam Gacor</label>
                        </div>
                        <div class="col-3">
                            <input type="time" class="form-control" placeholder="jam awal" wire:model.defer="jamgacor1">
                            @error('jamgacor1') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-3">
                            <input type="time" class="form-control" placeholder="jam akhir" wire:model.defer="jamgacor2">
                            @error('jamgacor2') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-5">
                            <label for="winrate"  class="col-form-label">Win rate</label>
                        </div>
                        <div class="col-7">
                                <input type="text" class="form-control" placeholder="winrate" wire:model.defer="winrate">
                            @error('winrate') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-5">
                            <label for="minstake"  class="col-form-label">Minimal Stake</label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control" placeholder="Minimum Stake" wire:model.defer="minstake">
                            @error('minstake') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-5">
                            <label for="medstake"  class="col-form-label">Medium Stake</label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control" placeholder="Medium Stake" wire:model.defer="medstake">
                            @error('medstake') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-5">
                            <label for="maxstake"  class="col-form-label">Maximal Stake</label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control" placeholder="Maximal Stake" wire:model.defer="maxstake">
                            @error('maxstake') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-5">
                            <label for="Gambar"  class="col-form-label">Gambar</label>
                        </div>
                        <div class="col-7">
                            <input type="file" class="form-control" placeholder="Gambar" wire:model.defer="file">
                            @if ($file)
                                Photo Preview:
                                <img src="{{ $file->temporaryUrl() }}">
                            @endif
                            @error('file') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-5">
                            <label for="Gambar"  class="col-form-label">On Fire/ New Game</label>
                        </div>
                        <div class="col-3">
                            <div class="form-check form-switch">
                                <input wire:model.lazy="onfire" class="form-check-input" style="width:50px; height:30px;" type="checkbox" role="switch" id="flexSwitchCheckDefault" >
                                @if($this->onfire == 0)
                                @else
                                    <label class="form-check-label text-danger" for="flexSwitchCheckDefault" style="margin-left:10px; padding-top:8px; font-weight: bold;">ON FIRE</label>
                                @endif
                            </div>
                        </div>
                        <div class="col-3 ">
                            <div class="form-check form-switch">
                                <input wire:model.lazy="isnew" class="form-check-input" style="width:50px; height:30px;" type="checkbox" role="switch" id="flexSwitchCheckDefault"  >
                                @if($this->isnew == 0)
                                @else
                                    <label class="form-check-label text-success" for="flexSwitchCheckDefault" style="margin-left:10px; padding-top:8px; font-weight:bold;"> GAME BARU</label>

                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-5">

                        </div>
                        <div class="col-7">
                            <a href="#" class="btn btn-primary form-control" wire:click.prevent="save">Simpan Data</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>
