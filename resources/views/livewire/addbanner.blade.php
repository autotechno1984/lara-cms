<div>
    <div>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="row">
       <div class="col-8">
           <div class="card">
               <div class="card-header">
                   Banner Depan
               </div>
               <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <label for="" class="col-form-label">Banner</label>
                        </div>
                        <div class="col-8">
                            <div class="mb-3">
                                <input wire:model="file" class="form-control" type="file" id="formFile">
                                @error('file') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                   <div class="row">
                       <div class="col-4">
                           <label for="" class="col-form-label">
                               Alt Image
                           </label>
                       </div>
                       <div class="col-8">
                           <input wire:model.defer="altimage" type="text" name="" id="" class="form-control">
                           @error('altimage') <span class="error text-danger">{{ $message }}</span> @enderror
                       </div>
                   </div>
                   <div class="row mt-2">
                       <div class="col-8">

                       </div>
                       <div class="col-4">
                           <button wire:click="save" class="btn btn-primary form-control">Simpan Data</button>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
    <div class="row mt-2" style="position: relative;height: 650px; overflow-y: scroll;" >
        @foreach($banner as $data)
                <img src="{{ Storage::url($data->file) }}" alt="{{ $data->altimage }}" style="padding:0px; margin-left:10px; width:40rem;" class="mt-2">
                <button wire:click="delete({{ $data->id }})" class="close btn btn-danger" style="bottom:0; margin-left:10px; width:40rem;">Hapus</button>
        @endforeach
    </div>
</div>
