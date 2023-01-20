@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-4">
        <form action="{{route('hegaldiak-update', ['id' => $hegaldiak -> id])}}" method="POST">
            @method('PATCH')
            @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Hegaldiaren irteera aireportua</label>
            <input type="text" class="form-control" name="irteera_aireportua" value="{{$hegaldiak->irteera_aireportua}}"> 
            <label for="title" class="form-label mt-2">Hegaldiaren helmuga aireportua</label>
            <input type="text" class="form-control" name="helmuga_aireportua" value="{{$hegaldiak->helmuga_aireportua}}"> 
            <label for="title" class="form-label mt-2">Hegaldiaren irteera eguna eta ordua</label>
            <input type="text" class="form-control" name="irteera_eguna_ordua" value="{{$hegaldiak->irteera_eguna_ordua}}"> 
            <label for="title" class="form-label mt-2">Hegaldiaren iraupena</label>
            <input type="text" class="form-control" name="iraupena" value="{{$hegaldiak->iraupena}}"> 
        </div>        
        <button type="submit" class="btn btn-primary">Hegaldiaren datuak aldatu</button>
        </form>
        
    </div>



@endsection