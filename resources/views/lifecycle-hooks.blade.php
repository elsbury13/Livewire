@extends('layouts.app')

@section('content')
    @livewire('life-cycle-hooks', [
        'name' => 'Ash',
    ])
@endsection
