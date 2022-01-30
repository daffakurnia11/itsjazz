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
          <button class="journey-category my-2 mx-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#journey2021" aria-expanded="true" aria-controls="journey2021">
            2021
          </button>
          <button class="journey-category my-2 collapsed mx-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#journey2022" aria-expanded="true" aria-controls="journey2022">
            2022
          </button>
        </div>
        <div id="journey2021" class="accordion-collapse collapse show" data-bs-parent="#catalog-content">
          <!-- January 2021 -->
          <button class="journey-month text-center collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#january2021" aria-expanded="false" aria-controls="january2021">
            January<i class="fas d-inline-block ms-3 fa-arrow-up"></i>
          </button>
          <div class="collapse show" id="january2021">
            <!--  -->
          </div>
          <!-- End of January 2021 -->

          <!-- February 2021 -->
          <button class="journey-month text-center collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#february2021" aria-expanded="false" aria-controls="february2021">
            February<i class="fas d-inline-block ms-3 fa-arrow-down"></i>
          </button>
          <div class="collapse" id="february2021">
            <div class="row">
              <div class="col-md-6 my-2">
                <div class="journey-box ratio ratio-16x9">
                  <img src="/img/gigs/feb-2021-1.jpg" alt="">
                </div>
                <p class="journey-detail my-3">
                  <span class="journey-date">February 20th, 2021</span><br>
                  Ini Lho ITS! 2021
                </p>
              </div>
            </div>
          </div>
          <!-- End of February 2021 -->

          <!-- March 2021 -->
          <button class="journey-month text-center collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#march2021" aria-expanded="false" aria-controls="march2021">
            March<i class="fas d-inline-block ms-3 fa-arrow-down"></i>
          </button>
          <div class="collapse" id="march2021">
            <!--  -->
          </div>
          <!-- End of March 2021 -->

          <!-- April 2021 -->
          <button class="journey-month text-center collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#april2021" aria-expanded="false" aria-controls="april2021">
            April<i class="fas d-inline-block ms-3 fa-arrow-down"></i>
          </button>
          <div class="collapse" id="april2021">
            <div class="row">
              <div class="col-md-6 my-2">
                <div class="journey-box ratio ratio-16x9">
                  <img src="/img/gigs/apr-2021-1.png" alt="">
                </div>
                <p class="journey-detail my-3">
                  <span class="journey-date">April 4th, 2021</span><br>
                  Wedding Icha & Dio
                </p>
              </div>
              <div class="col-md-6 my-2">
                <div class="journey-box ratio ratio-16x9">
                  <img src="/img/gigs/apr-2021-2.png" alt="">
                </div>
                <p class="journey-detail my-3">
                  <span class="journey-date">April 10th, 2021</span><br>
                  Wisuda ke-123 ITS
                </p>
              </div>
              <div class="col-md-6 my-2">
                <div class="journey-box ratio ratio-16x9">
                  <img src="/img/gigs/apr-2021-3.png" alt="">
                </div>
                <p class="journey-detail my-3">
                  <span class="journey-date">April 11th, 2021</span><br>
                  ITS EXPO
                </p>
              </div>
              <div class="col-md-6 my-2">
                <div class="journey-box ratio ratio-16x9">
                  <img src="/img/gigs/apr-2021-4.png" alt="">
                </div>
                <p class="journey-detail my-3">
                  <span class="journey-date">April 27th, 2021</span><br>
                  Vaksinasi di ITS
                </p>
              </div>
            </div>
          </div>
          <!-- End of April 2021 -->

          <!-- May 2021 -->
          <button class="journey-month text-center collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#may2021" aria-expanded="false" aria-controls="may2021">
            May<i class="fas d-inline-block ms-3 fa-arrow-down"></i>
          </button>
          <div class="collapse" id="may2021">
            <div class="row">
              <div class="col-md-6 my-2">
                <div class="journey-box ratio ratio-16x9">
                  <img src="/img/gigs/may-2021-1.png" alt="">
                </div>
                <p class="journey-detail my-3">
                  <span class="journey-date">May 23rd, 2021</span><br>
                  UNAIR (Acylovir 2021)
                </p>
              </div>
            </div>
          </div>
          <!-- End of May 2021 -->

          <!-- June 2021 -->
          <button class="journey-month text-center collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#june2021" aria-expanded="false" aria-controls="june2021">
            June<i class="fas d-inline-block ms-3 fa-arrow-down"></i>
          </button>
          <div class="collapse" id="june2021">
            <div class="row">
              <div class="col-md-6 my-2">
                <div class="journey-box ratio ratio-16x9">
                  <img src="/img/gigs/jun-2021-1.png" alt="">
                </div>
                <p class="journey-detail my-3">
                  <span class="journey-date">June 18rd, 2021</span><br>
                  UNESA (HARMONISASI DI MASA PANDEMI “Nusantaraku Bangkit Lawan Covid” VIRTUAL CONCERT 2021)
                </p>
              </div>
            </div>
          </div>
          <!-- End of June 2021 -->

          <!-- July 2021 -->
          <button class="journey-month text-center collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#july2021" aria-expanded="false" aria-controls="july2021">
            July<i class="fas d-inline-block ms-3 fa-arrow-down"></i>
          </button>
          <div class="collapse" id="july2021">
            <!--  -->
          </div>
          <!-- End of July 2021 -->

          <!-- August 2021 -->
          <button class="journey-month text-center collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#august2021" aria-expanded="false" aria-controls="august2021">
            August<i class="fas d-inline-block ms-3 fa-arrow-down"></i>
          </button>
          <div class="collapse" id="august2021">
            <!--  -->
          </div>
          <!-- End of August 2021 -->

          <!-- September 2021 -->
          <button class="journey-month text-center collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#september2021" aria-expanded="false" aria-controls="september2021">
            September<i class="fas d-inline-block ms-3 fa-arrow-down"></i>
          </button>
          <div class="collapse" id="september2021">
            <div class="row">
              <div class="col-md-6 my-2">
                <div class="journey-box ratio ratio-16x9">
                  <img src="/img/gigs/sep-2021-1.png" alt="">
                </div>
                <p class="journey-detail my-3">
                  <span class="journey-date">September 11th, 2021</span><br>
                  OPENING DIES NATALIS KE-61 ITS SURABAYA (Pagelaran Wayang Online Dies Natalis ke-61 ITS Surabaya)
                </p>
              </div>
            </div>
          </div>
          <!-- End of September 2021 -->

          <!-- October 2021 -->
          <button class="journey-month text-center collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#october2021" aria-expanded="false" aria-controls="october2021">
            October<i class="fas d-inline-block ms-3 fa-arrow-down"></i>
          </button>
          <div class="collapse" id="october2021">
            <div class="row">
              <div class="col-md-6 my-2">
                <div class="journey-box ratio ratio-16x9">
                  <img src="/img/gigs/oct-2021-1.png" alt="">
                </div>
                <p class="journey-detail my-3">
                  <span class="journey-date">October 14th, 2021</span><br>
                  JAZZVERSITY ALL STAR X Jazz Traffic (Suara Surabaya)
                </p>
              </div>
              <div class="col-md-6 my-2">
                <div class="journey-box ratio ratio-16x9">
                  <img src="/img/gigs/oct-2021-2.png" alt="">
                </div>
                <p class="journey-detail my-3">
                  <span class="journey-date">October 18th, 2021</span><br>
                  Launching sekolah Interdisiplin Manajemen dan Teknologi (SIMT)
                </p>
              </div>
              <div class="col-md-6 my-2">
                <div class="journey-box ratio ratio-16x9">
                  <img src="/img/gigs/oct-2021-3.png" alt="">
                </div>
                <p class="journey-detail my-3">
                  <span class="journey-date">October 30th, 2021</span><br>
                  SCHEMATICS REEVA
                </p>
              </div>
              <div class="col-md-6 my-2">
                <div class="journey-box ratio ratio-16x9">
                  <img src="/img/gigs/oct-2021-4.png" alt="">
                </div>
                <p class="journey-detail my-3">
                  <span class="journey-date">October 31th, 2021</span><br>
                  D’VILLAGE (ITS JAZZ X VIDE MARSHA)
                </p>
              </div>
            </div>
          </div>
          <!-- End of October 2021 -->

          <!-- November 2021 -->
          <button class="journey-month text-center collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#november2021" aria-expanded="false" aria-controls="november2021">
            November<i class="fas d-inline-block ms-3 fa-arrow-down"></i>
          </button>
          <div class="collapse" id="november2021">
            <div class="row">
              <div class="col-md-6 my-2">
                <div class="journey-box ratio ratio-16x9">
                  <img src="/img/gigs/nov-2021-1.png" alt="">
                </div>
                <p class="journey-detail my-3">
                  <span class="journey-date">November 7th, 2021</span><br>
                  OCEANO
                </p>
              </div>
              <div class="col-md-6 my-2">
                <div class="journey-box ratio ratio-16x9">
                  <img src="/img/gigs/nov-2021-2.png" alt="">
                </div>
                <p class="journey-detail my-3">
                  <span class="journey-date">November 13th, 2021</span><br>
                  CLOSING DIES NATALIS KE-61 ITS SURABAYA (KONSER LETTO “Meremaja Bersama Letto”)
                </p>
              </div>
            </div>
          </div>
          <!-- End of November 2021 -->

          <!-- December 2021 -->
          <button class="journey-month text-center collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#december2021" aria-expanded="false" aria-controls="december2021">
            December<i class="fas d-inline-block ms-3 fa-arrow-down"></i>
          </button>
          <div class="collapse" id="december2021">
            <!--  -->
          </div>
          <!-- End of December 2021 -->
        </div>
        <div id="journey2022" class="accordion-collapse collapse" data-bs-parent="#catalog-content">
          <!--  -->
        </div>
      </div>
    </div>
  </section>
  <!-- End of Journey -->

@endsection