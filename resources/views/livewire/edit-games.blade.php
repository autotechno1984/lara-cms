<div>
    <div class="row">
        <div class="col-1">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-6">
            <img src="{{ Storage::url($gambar) }}" alt="" width="100%">
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-4">
                    <label for="provider" class="col-form-label">Provider</label>
                </div>
                <div class="col-8">
                    <select name="" id="" class="form-select" wire:model="provider">
                        <option value="{{ $provider }}">{{ $game->where('id', $provider)->pluck('provider')->first() }}</option>
                        @foreach($game as $data)
                            <option value="{{ $data->id }}">{{ $data->provider }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label for="namagame" class="col-form-label">Nama Game</label>
                </div>
                <div class="col-8">
                    <input wire:model="namagame" type="text" name="" id="namagame" class="form-control" value="{{ $namagame }}">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label for="JamGacor" class="col-form-label">Jam Gacor</label>
                </div>
                <div class="col-4">
                    <input wire:model="jamgacor1" type="time" class="form-control" name="" id="" value="{{ $jamgacor1 }}">
                </div>
                <div class="col-4">
                    <input wire:model="jamgacor2" type="time" class="form-control" name="" id="" value="{{ $jamgacor2 }}">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label for="minstake" class="col-form-label">minstake</label>
                </div>
                <div class="col-8">
                    <input wire:model="minstake" type="text" name="" id="" class="form-control" value="{{$minstake}}">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label for="medstake" class="col-form-label">medstake</label>
                </div>
                <div class="col-8">
                    <input wire:model="medstake" type="text" name="" id="" class="form-control" value="{{$medstake}}">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label for="maxstake" class="col-form-label">maxstake</label>
                </div>
                <div class="col-8">
                    <input wire:model="maxstake" type="text" name="" id="" class="form-control" value="{{$maxstake}}">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label for="Onfire" class="col-form-label">
                        On Fire
                    </label>
                </div>
                <div class="col-8">
                    <div class="form-check form-switch">

                        <input wire:model="onfire" class="form-check-input" style="width:50px; height:30px;" type="checkbox" role="switch" id="flexSwitchCheckDefault" >
                        <label class="form-check-label text-success" for="flexSwitchCheckDefault" style="margin-left:10px; padding-top:8px; font-weight:bold;">{{
                            $onfire == 1 ? 'ON FIRE' : 'OFF'}}</label>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label for="isnew" class="col-form-label">Is New</label>
                </div>
                <div class="col-8">
                    <div class="form-check form-switch">
                        <input wire:model="isnew" class="form-check-input" style="width:50px; height:30px;" type="checkbox" role="switch" id="flexSwitchCheckDefault" >
                        <label class="form-check-label text-success" for="flexSwitchCheckDefault" style="margin-left:10px; padding-top:8px; font-weight:bold;">{{
                            $isnew == 1 ? 'BARU' : 'LAMA'}}</label>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label for="" class="col-form-label">Win Rate</label>
                </div>
                <div class="col-8">

                    @if($listgame->winrate < 30)
                        <div class="progress" style="height: 25px; margin-top:5px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width: {{$listgame->winrate.'%' }}">{{ $listgame->winrate.'%' }}</div>
                        </div>
                    @elseif($listgame->winrate < 65)
                        <div class="progress" style="height: 25px; margin-top:5px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width: {{$listgame->winrate.'%' }}">{{ $listgame->winrate.'%' }}</div>
                        </div>
                    @elseif($listgame->winrate < 80)
                        <div class="progress" style="height: 25px; margin-top:5px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width: {{$listgame->winrate.'%' }}">{{ $listgame->winrate.'%' }}</div>
                        </div>
                    @else
                        <div class="progress" style="height: 25px; margin-top:5px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width: {{$listgame->winrate.'%' }}">{{ $listgame->winrate.'%' }}</div>
                        </div>
                    @endif

                </div>
            </div>
            <div class="row mt-1">
                <div class="col-4"></div>
                <div class="col-8 text-center">
                    <label for="customRange3" class="form-label">{{ $updatewinrate }}</label>
                    <input wire:model="updatewinrate" value="{{ $updatewinrate }}" type="range" class="form-range" min="1" max="99" step="1" id="customRange3">
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-4"></div>
                <div class="col-8">
                    <button class="btn btn-primary form-control" wire:click="update">Update Data</button>
                </div>
            </div>
        </div>
    </div>
</div>
