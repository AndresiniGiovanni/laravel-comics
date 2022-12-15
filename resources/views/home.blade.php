@extends('layouts.app')
@section('content')

<main class="bg-dark text-white">
    <div class="jumbo">
      <h1 class="text-capitalize series text-center pt-4 pb-4 my-title">
        current series
      </h1>
    </div>
    <div class="container-fluid  mt-4">
      <div class="row my-row">
      @foreach ($dccomics as $comics )
      <div class="my-card card  bg-transparent col-2 ">
        <img class="card-img-top " src="{{ $comics['thumb'] }}" alt="" />
        <div class="mt-2 w-75 text-uppercase">{{ $comics['title'] }}</div>
      </div>
    @endforeach
    </div>
    </div>
  </main>
@endsection
