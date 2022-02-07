@extends('main.layouts.main')

@section('navbar')
  @include('main.layouts.navbar')
@endsection

@section('footer')
  @include('main.layouts.footer')
@endsection

@section('content')

  <!-- Header -->
  <header id="gigsHeader" class="vh-100">
    <div class="header">
      <div class="container d-flex align-items-center position-relative">
        <h1 class="header-title">Jazzineer<br>Gigss</h1>
        <a href="#ourJourney" class="header-action">
          Watch Our Journey <i class="fas d-inline-block ms-2 ms-sm-3 fa-arrow-down"></i>
        </a>
      </div>
    </div>
  </header>
  <!-- End of Header -->

  <!-- Journey -->
  <section id="ourJourney">
    <div class="container mb-5">
      <div class="accordion" id="catalog-content">
        <div class="d-flex justify-content-center flex-wrap mb-4">
          @foreach ($years as $year)
            <button class="journey-category {{ $loop->iteration !== 1 ? 'collapsed' : '' }} my-2 mx-2" type="button" data-bs-toggle="collapse"
              data-bs-target="#journey{{ $year }}" aria-expanded="true" aria-controls="journey{{ $year }}">
              {{ $year }}
            </button>
          @endforeach
        </div>
        @foreach ($years as $year)
        <div id="journey{{ $year }}" class="accordion-collapse collapse {{ $loop->iteration === 1 ? 'show' : '' }}" data-bs-parent="#catalog-content">
          @foreach ($months as $month)
          <button class="journey-month text-center collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#{{ $month }}{{ $year }}" aria-expanded="false" aria-controls="{{ $month }}{{ $year }}">
            {{ $month }}<i class="fas d-inline-block ms-3 fa-arrow-down"></i>
          </button>
          <div class="collapse" id="{{ $month }}{{ $year }}">
            <div class="row">
              @foreach ($contents as $content)
              @if (\Carbon\Carbon::parse($content->date)->isoFormat('MMMM') == $month && \Carbon\Carbon::parse($content->date)->isoFormat('YYYY') == $year)
              <div class="col-md-6 my-2">
                <div class="journey-box ratio ratio-16x9 position-relative">
                  <img src="/img/jazzineer-gigs/{{ $content->file }}" alt="" class="w-auto position-absolute start-50 translate-middle-x">
                </div>
                <p class="journey-detail my-3">
                  <span class="journey-date">{{ \Carbon\Carbon::parse($content->date)->isoFormat('MMMM Do, YYYY') }}</span><br>
                  {{ $content->event }}
                </p>
              </div>
              @endif
              @endforeach
            </div>
          </div>
          @endforeach
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End of Journey -->

@endsection