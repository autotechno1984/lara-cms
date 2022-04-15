<div>
{{--    input Data--}}
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Input Color
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <label  for="nama" class="col-form-label">Nama</label>
                        </div>
                        <div class="col-6">
                            <input wire:model="nama" type="text" name="nama" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-6">
                            <label for="warna" class="col-form-label">Warna</label>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-3">
                                    <input type="color" wire:model="warna" class="form-control-color" id="exampleColorInput"  title="Choose your color">
                                </div>
                                <div class="col-9">
                                    <input type="text" wire:model="kodewarna" class="form-control" name="color"  readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-6">

                        </div>
                        <div class="col-6">
                            <button class="btn btn-primary form-control">
                                Simpan Data
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    table--}}
    <div class="row mt-3">
        <div class="col-6">
            <table class="table table-striped table-bordered text-center">
                <thead class="bg-light">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Kode</th>
                        <th>Clr</th>
                        <th>Del</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
