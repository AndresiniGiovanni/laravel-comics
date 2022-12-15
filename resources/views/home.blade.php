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

    <section>
        <div class="d-flex align-items-center my-cont">
            <div class="info">
              <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="" />
              <span>digital comics</span>
            </div>

            <div class="info">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="" />
                <span>dc merchandise</span>
              </div>

              <div class="info">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="" />
                <span>subscription</span>
              </div>

              <div class="info">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="" />
                <span>comic shop locator</span>
              </div>

              <div class="info">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="" />
                <span>dc power visa</span>
              </div>
          </div>
    </section>


  </main>
@endsection
