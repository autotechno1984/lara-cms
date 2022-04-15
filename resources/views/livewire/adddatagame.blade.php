<div>
    <div class="row">
        <div class="col-2">
{{--            <a href="{{ route('addgames') }}" class="btn btn-primary">Tambah Game</a>--}}
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-game">
                Tambah Game
            </button>
            <!-- Modal -->
            <div  class="modal fade" id="modal-game" tabindex="-1" aria-labelledby="ModalgameLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @livewire('addlistgames')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row mt-2" style="overflow-y: scroll; height: 810px;">
        @foreach($lsgame as $data)
            <div class="col-4 mt-2">
                <div class="row">
                    <div class="col-5">
                        <img src="{{ Storage::url($data->file) }}" alt="" style="width:8rem;">
                    </div>
                    <div class="col-7">

                        <div class="text-wrap" style="font-size:0.8vw;">{{ $data->namagame }}</div>

                        @if($data->winrate < 30)
                        <div class="row progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:{{ $data->winrate.'%' }};">{{ $data->winrate }}.%</div>
                        </div>
                        @elseif($data->winrate < 65)
                            <div class="row progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:{{ $data->winrate.'%' }};">{{ $data->winrate }}.%</div>
                            </div>
                        @elseif($data->winrate < 80)
                            <div class="row progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:{{ $data->winrate.'%' }};">{{ $data->winrate }}.%</div>
                            </div>
                        @else
                            <div class="row progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:{{ $data->winrate.'%' }};">{{ $data->winrate }}.%</div>
                            </div>
                        @endif
                        <div class="text-center mt-2">
                            @if($data->onfire == 1)
                                <h5 class="text-danger" style="font-weight: bold;">O N F I R E</h5>
                            @else
                                <h5 class="text-success" style="font-weight: bold;">N O R M A L</h5>
                            @endif
                        </div>
                        <div>
                            <a href="{{ route('edit-listgames', $data->id) }}" class="btn btn-warning">Edit</a>
                            <button wire:click="delete({{ $data->id }})" class="btn btn-danger">Del</button>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>

</div>

