@extends('layouts.app')

@section('content')
    @foreach ($treni as $treno)
        <p>{{ $treno->Azienda }}</p>
    @endforeach
@endsection
