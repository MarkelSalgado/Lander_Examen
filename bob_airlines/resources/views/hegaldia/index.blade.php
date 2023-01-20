@extends('app')

@section('content')
    <div class="container w-30 border p-4 mt-4">
        <div>
            @foreach ($hegaldiak as $hegaldia)
            <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">    
                    <a href="{{ route('hegaldiak-edit', ['id' => $hegaldia->id]) }}">{{ $hegaldia->irteera_aireportua }} &nbsp | &nbsp </a>
                    <a href="{{ route('hegaldiak-edit', ['id' => $hegaldia->id]) }}">{{ $hegaldia->helmuga_aireportua }} &nbsp | &nbsp</a>
                    <a href="{{ route('hegaldiak-edit', ['id' => $hegaldia->id]) }}">{{ $hegaldia->irteera_eguna_ordua }}  &nbsp | &nbsp</a>
                    <a href="{{ route('hegaldiak-edit', ['id' => $hegaldia->id]) }}">{{ $hegaldia->iraupena }}  &nbsp | &nbsp</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>



@endsection