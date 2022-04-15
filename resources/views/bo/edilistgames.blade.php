@extends('home')
@section('editlistgame')
    <div>
        @livewire('edit-games', ['gameid' => $id])
    </div>
@endsection
