<div>
    <div>
        @if (session()->has('success-upload'))
            <div class="alert alert-success">
                {{ session('success-upload') }}
            </div>
        @endif
    </div>
    <div>
        @if (session()->has('success-link'))
            <div class="alert alert-success">
                {{ session('success-link') }}
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Upload Logo
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <label for="" class="col-form-label">Upload Logo</label>
                        </div>
                        <div class="col-8">
                                <input wire:model="file" class="form-control" type="file" id="formFile">
                                 @error('file') <span class="error text-danger">{{ $message }}</span> @enderror

                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-6">

                        </div>
                        <div class="col-6">
                            <button wire:click="upload" class="btn btn-primary form-control" style="right:0;">Upload</button>
                        </div>
                    </div>
                    <div class="row">
                        @if ($file)
                            Photo Preview:
                            <img src="{{ $file->temporaryUrl() }}" style="margin-top:10px;">
                        @endif
                    </div>
                    <div class="row">
                        <img src="" alt="">
                    </div>
                    <div class="row">
                    <div>
                        <h3>Logo</h3>
                    </div>
                            @foreach($logos as $data)
                            <img src="{{ Storage::url($data->file) }}" alt="">
                            @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Link Website
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <label for="" class="col-form-label">link daftar</label>
                        </div>
                        <div class="col-9">
                            <input wire:model="daftar" type="text" name="" id="" class="form-control">
                            @error('daftar') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-3">
                            <label for="" class="col-form-label">link Login</label>
                        </div>
                        <div class="col-9">
                            <input wire:model="login" type="text" name="" id="" class="form-control" >
                            @error('login') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-6">
                            <label for=""></label>
                        </div>
                        <div class="col-6">
                            <button wire:click="savelink" class="btn btn-primary form-control">Simpan Data</button>
                        </div>
                    </div>
                    <div class="row mt-3">
                        @foreach($link as $data)
                            <div>
                               Link Daftar <span>: <a href="{{ $data->daftar }}" target="_blank">{{ $data->daftar }}</a></span>
                            </div>
                            <div>
                               Link Login  <span>: <a href="{{ $data->login }}" target="_blank">{{ $data->login }}</a></span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
