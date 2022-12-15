@extends('layouts.app')

@section('content')

<main class="bg-dark text-white">
    <div class="jumbo">
      <div class="text-uppercase series text-center pt-2 position-relative">
        current series
      </div>
    </div>
    <div class="container-fluid m-auto d-flex flex-wrap mt-4">
      <div class="row">
      @foreach ($dccomics as $comics )
      <div class="card border-0 bg-transparent col-2 mb-4">
        <img class="card-img-top " src="{{ $comics['thumb'] }}" alt="" />
        <div class="mt-2 w-75 text-uppercase">{{ $comics['title'] }}</div>
      </div>
    @endforeach
    </div>
    </div>
    <div class="d-flex justify-content-center pb-3 mt-5">
      <button class="btn btn-primary rounded-3 text-uppercase">
        load more
      </button>
    </div>
  </main>
@endsection
