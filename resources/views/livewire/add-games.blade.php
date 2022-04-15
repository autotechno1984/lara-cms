<div>
        <div>
            @if (session()->has('berhasil'))
                <div class="alert alert-success">
                    {{ session('berhasil') }}
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-7">
                <div class="card">
                    <div class="card-header bg-primary text-light">
                        Input Provider Games
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <label for="Tipe" class="col-form-label">
                                    Tipe
                                </label>
                            </div>
                            <div class="col-4">
                                <select name="tipe" id="" class="form-select" wire:model.defer="kategoriid">
                                    <option value=""></option>
                                    @foreach($kategori as $categori)
                                        <option value="{{ $categori->id }}">{{ $categori->tipe }}</option>
                                    @endforeach
                                </select>
                                @error('kategoriid') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    ADD
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Game</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    TIPE
                                                </div>
                                                <div class="row mt-2">
                                                    <input wire:model.defer="tipe" type="text" name="" id="" class="form-control" placeholder="tipegame">
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-8">

                                                    </div>
                                                    <div class="col-4">
                                                        <button wire:click="addcategory" type="button" class="btn btn-primary form-control" data-bs-dismiss="modal">Simpan Data</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-6">
                                <label for="Kode" class="col-form-label">
                                    Kode
                                </label>
                            </div>
                            <div class="col-6">
                                <input wire:model.defer="kode" type="text" name="kode" class="form-control" id="kode">
                                @error('kode') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-6">
                                <label for="Provider" class="col-form-label">
                                    Provider
                                </label>
                            </div>
                            <div class="col-6">
                                <input wire:model.defer="provider" type="text" name="provider" class="form-control" id="kode">
                                @error('provider') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-6">
                                <label for="" class="col-form-label">
                                    Provider img. 100 x 100
                                </label>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <input  wire:model.defer="file" class="form-control" type="file" id="formFile">
                                    @error('file') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-6">
                            </div>
                            <div class="col-6">
                                <button class="btn btn-primary form-control" wire:click.prevent="save">Simpan Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    {{--    table--}}

    <div class="row mt-3" style="overflow-y: auto;">
        @foreach($games as $data)
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <img src="{{ Storage::url($data->file) }}" alt="" style="width:180px;">
                    </div>
                    <div class="col-6">
                        <div>{{ $kategori->where('id', $data->tipe)->pluck('tipe')->first() }}</div>
                        <div>{{ $data->kode }}</div>
                        <div>{{ $data->provider }}</div>
                        <div><button wire:click="delete({{ $data->id }})" class="btn btn-danger">Del</button></div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
</div>
