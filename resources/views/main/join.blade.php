@extends('main.layouts.main')

@section('navbar')
  @include('main.layouts.navbar')
@endsection


@section('content')

  @if (session()->has('message'))
  <div id="notification" data-message="{{ session('message') }}"></div>
  @endif

  <!-- Registration -->
  <section id="regisForm" class="vh-100 d-flex align-items-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="/img/album-disc.svg" class="album-disc d-block mx-auto px-4" alt="Album Disc">
        </div>
        <div class="col-md-6">
          <form action="/join" method="post" class="subscription mt-4 mt-md-0">
            @csrf
            <p class="subscription-text">
              Never miss an update on what’s happening at ITS Jazz. From our latest project to our newest merch.
              Subscribe now!
            </p>
            <input type="text" class="subscription-input" name="name" placeholder="Name">
            <input type="email" class="subscription-input" name="email" placeholder="Email">
            <button type="submit" class="subscription-submit">Join</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Registration -->

@endsection