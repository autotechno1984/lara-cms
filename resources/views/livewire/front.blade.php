<div class="mt-1">
    <div class="row justify-content-center" id="slot-game">
        <div class="col-8 mx-auto">
            @foreach($gamebanner as $data)
                <img wire:click="find({{ $data->id }})" src="{{ Storage::url($data->file) }}" alt="" style="margin-bottom:2px;">
            @endforeach
        </div>

    </div>
    <div hidden id="slot-game-mobile"  >
        @foreach($gamebanner as $data)
            <img wire:click="find({{ $data->id }})" src="{{ Storage::url($data->file) }}" alt="" style="margin-bottom:2px;">
        @endforeach

    </div>
        <div class="row justify-content-center mt-3">
            <div class="col-10 col-md-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Game Slot Name" aria-label="Search Slot Game" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </div>

        <div class="row justify-content-lg-between">
            @foreach($lsgame as $data)
            <div class="col-6 col-md-4 col-lg-2-5" style="margin-right:2px; margin-bottom:5px; position:relative">
                <div class="" style="background: #a0aec0; border-radius:10px 10px 0px 0px;">
                    @if($data->onfire == 1)
                    <span class="badge bg-danger text-white" style="position:absolute; font-size:15px;">ON FIRE</span>
                    @else
                    @endif

                    <img src="{{ Storage::url($data->file) }}" width="100%" height="160px" style="padding:10px 10px 0px 10px;" alt="...">
                    <div style="display: block; font-weight: bold; margin-top:1px; background: #0c63e4; color:white; " class="text-center py-2" id="namagame">
                        {{$data->namagame}}</div>
                    <div>
                        <div class="row text-center">
                            <div style="margin:0px;">
                                <p style="margin-bottom:-5px;">JAM GACOR</p>
                                <p style="margin-bottom:0px;">{{ $data->jamgacor1 }} - {{ $data->jamgacor2 }} </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            @if($data->winrate < 30)
                                <div class="progress" style="height: 25px; margin-top:5px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width: {{$data->winrate.'%' }}">{{ $data->winrate.'%' }}</div>
                                </div>
                            @elseif($data->winrate < 65)
                                <div class="progress" style="height: 25px; margin-top:5px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width: {{$data->winrate.'%' }}">{{ $data->winrate.'%' }}</div>
                                </div>
                            @elseif($data->winrate < 80)
                                <div class="progress" style="height: 25px; margin-top:5px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width: {{$data->winrate.'%' }}">{{ $data->winrate.'%' }}</div>
                                </div>
                            @else
                                <div class="progress" style="height: 25px; margin-top:5px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width: {{$data->winrate.'%' }}">{{ $data->winrate.'%' }}</div>
                                </div>
                            @endif
                        </div>

                    </div>
                    <div style="padding-left:5px; background:red; color:white;" class="">
                        <div class="row">
                            <div class="col-6" id="minstake">
                                Min Stake
                            </div>
                            <div class="col-6">
                                : {{ $data->minstake }}
                            </div>
                        </div>

                    </div>
                    <div style="padding-left:5px; color:black; background:yellow;">
                        <div class="row">
                            <div class="col-6" id="medstake">
                                Med Stake
                            </div>
                            <div class="col-6">
                                : {{ $data->medstake }}
                            </div>
                        </div>
                    </div>
                    <div style="padding-left:5px; background:green; color:white;"> <div class="row">
                            <div class="col-6" id="maxstake" >
                                Max Stake
                            </div>
                            <div class="col-6">
                                : {{ $data->maxstake }}
                            </div>
                        </div></div>
                </div>
            </div>
            @endforeach
        </div>

</div>
