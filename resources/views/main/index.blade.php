@extends('main.layouts.main')

@section('navbar')
  @include('main.layouts.navbar')
@endsection

@section('footer')
  @include('main.layouts.footer')
@endsection

@section('content')
    
  <!-- Header -->
  <header id="landingHeader" class="vh-100">
    <div class="header d-flex align-items-center">
      <div class="container">
        <h1 class="header-title">ITS Jazz</h1>
        <h2 class="header-subtitle">#WeAreJazzineer</h2>
      </div>
    </div>
  </header>
  <!-- End of Header -->

  <!-- Original Album -->
  <section id="albums">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 col-lg-5">
          <img src="/img/album-disc.svg" class="album-disc d-block mx-auto px-4" alt="Album Disc">
          <a href="https://www.youtube.com/watch?v=vwXn7Jr7tKs&t=5044s" class="album-showcase d-block text-center my-4">
            <i class="fas fa-sm fa-play d-inline-block me-2"></i> <u>Live Showcase</u>
          </a>
        </div>
        <div class="col-md-6 col-lg-7">
          <h2 class="album-title mb-4">Original Album</h2>
          <div class="table-responsive">
            <table class="table album-table">
              <tr>
                <td>1.</td>
                <td class="fw-bold">Hampton Night</td>
                <td>Anbiya Nawfal Alfina</td>
                <td>
                  <a target="_bank" href="https://open.spotify.com/track/1RG997jGYASFGAaFda8CS7?si=cec7b44b4f534c35"><i
                      class="fas fa-play"></i></a>
                </td>
              </tr>
              <tr>
                <td>2.</td>
                <td class="fw-bold">7 Something</td>
                <td>IDPDT</td>
                <td>
                  <a target="_bank" href="https://open.spotify.com/track/21GmOpmwrddK9Jw574MWnA?si=af7a04ec24724673"><i
                      class="fas fa-play"></i></a>
                </td>
              </tr>
              <tr>
                <td>3.</td>
                <td class="fw-bold">Seribu Candi</td>
                <td>Hanggayu Aly Sabtiadi</td>
                <td>
                  <a target="_bank" href="https://open.spotify.com/track/2ybl7zvI23xXXC5RPKuDdd?si=1565963882274146"><i
                      class="fas fa-play"></i></a>
                </td>
              </tr>
              <tr>
                <td>4.</td>
                <td class="fw-bold">Cytania</td>
                <td>Dava Giustizia Billah</td>
                <td>
                  <a target="_bank" href="https://open.spotify.com/track/5IgYaq6a02pVXoTy4Yqrr4?si=2068b86d553c4452"><i
                      class="fas fa-play"></i></a>
                </td>
              </tr>
              <tr>
                <td>5.</td>
                <td class="fw-bold">Takkan Bisa</td>
                <td>PAJIW Ft. Barlenty</td>
                <td>
                  <!-- <a target="_bank" href="https://open.spotify.com/track/5IgYaq6a02pVXoTy4Yqrr4?si=2068b86d553c4452"><i
                            class="fas fa-play"></i></a> -->
                </td>
              </tr>
              <tr>
                <td>6.</td>
                <td class="fw-bold">Luka</td>
                <td>Hanggayu Aly Sabtiadi</td>
                <td>
                  <!-- <a target="_bank" href="https://open.spotify.com/track/5IgYaq6a02pVXoTy4Yqrr4?si=2068b86d553c4452"><i
                              class="fas fa-play"></i></a> -->
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Original Album -->

  <!-- ITS Jazz Segment -->
  <section id="main-segments">
    <div class="container">
      <div class="d-flex justify-content-between mb-4">
        <h2 class="segment-title">ITS Jazz Segment</h2>
        <a href="" class="segment-button">Learn More</a>
      </div>
      <div class="row">
        <div class="col-6 col-lg-3 my-3">
          <img class="segment-picture active" src="/img/segments/segments-1.png" alt="Dialog Jazzineer">
        </div>
        <div class="col-6 col-lg-3 my-3">
          <img class="segment-picture" src="/img/segments/segments-2.png" alt="ITS Jazz Part">
        </div>
        <div class="col-6 col-lg-3 my-3">
          <img class="segment-picture" src="/img/segments/segments-3.png" alt="Hari Besar Jazzineer">
        </div>
        <div class="col-6 col-lg-3 my-3">
          <img class="segment-picture" src="/img/segments/segments-4.png" alt="Jazzineer Virtual Arrangement">
        </div>
        <div class="col-6 col-lg-3 my-3">
          <img class="segment-picture" src="/img/segments/segments-5.png" alt="Ngibazz">
        </div>
        <div class="col-6 col-lg-3 my-3">
          <img class="segment-picture" src="/img/segments/segments-6.png" alt="ITS Jazz Live Session">
        </div>
        <div class="col-6 col-lg-3 my-3">
          <img class="segment-picture" src="/img/segments/segments-7.png" alt="Jazzversity">
        </div>
        <div class="col-6 col-lg-3 my-3">
          <img class="segment-picture" src="/img/segments/segments-8.png" alt="Jamming Bareng Jazzineer">
        </div>
      </div>
      <h3 class="segment-name text-center mx-auto my-4">
        <i class="fas fa-play"></i>
        <span id="segmentName">Dialog Jazzineer</span>
        <i class="fas fa-play"></i>
      </h3>
    </div>
  </section>
  <!-- End of ITS Jazz Segment -->

  <!-- Jazzineer Gigs -->
  <section id="main-gigs">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <h2 class="gigs-subtitle">Sneak Peek Through Our</h2>
          <h1 class="gigs-title my-3 my-md-5">Jazzineer<br>Gigs</h1>
          <div class="row">
            <div class="col-md-6">
              <img class="gigs-picture my-3" src="/img/gigs/gigs-1.png" alt="Jazzineer Gigs">
            </div>
            <div class="col-md-6">
              <img class="gigs-picture my-3" src="/img/gigs/gigs-2.png" alt="Jazzineer Gigs">
            </div>
            <div class="col-md-6">
              <img class="gigs-picture my-3" src="/img/gigs/gigs-3.png" alt="Jazzineer Gigs">
            </div>
            <div class="col-md-6">
              <img class="gigs-picture my-3" src="/img/gigs/gigs-4.png" alt="Jazzineer Gigs">
            </div>
          </div>
          <a href="" class="gigs-button mx-auto my-4">Show More</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Jazzineer Gigs -->

@endsection