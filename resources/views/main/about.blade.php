@extends('main.layouts.main')

@section('navbar')
  @include('main.layouts.navbar')
@endsection

@section('footer')
  @include('main.layouts.footer')
@endsection

@section('content')
  <!-- Header -->
  <header id="aboutHeader" class="vh-100">
    <div class="header d-flex align-items-center">
      <div class="container">
        <h1 class="header-title">About Us</h1>
      </div>
    </div>
  </header>
  <!-- End of Header -->

  <!-- Frontman -->
  <section id="aboutFrontman">
    <div class="container">
      <h2 class="frontman-title text-center">10 FRONTMAN of<br>ITS JAZZ</h2>
      <div
        class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 justify-content-center frontman-list mx-auto">
        <div class="col">
          <img class="frontman-photo mx-auto" src="/img/frontman/frontman-1.jpg" alt="Pramudito Aji Wicaksono">
          <p class="frontman-name">Pramudito Aji Wicaksono<br>2012-2013</p>
        </div>
        <div class="col">
          <img class="frontman-photo mx-auto" src="/img/frontman/frontman-2.jpg" alt="Indra Bagus Aji Pangestu">
          <p class="frontman-name">Indra Bagus Aji Pangestu<br>2013-2014</p>
        </div>
        <div class="col">
          <img class="frontman-photo mx-auto" src="/img/frontman/frontman-3.jpg" alt="Bagus Malik Kusuma Atmaja">
          <p class="frontman-name">Bagus Malik Kusuma Atmaja<br>2014-2015</p>
        </div>
        <div class="col">
          <img class="frontman-photo mx-auto" src="/img/frontman/frontman-4.jpg" alt="Evan Hardhany Primaputra">
          <p class="frontman-name">Evan Hardhany Primaputra<br>2015-2016</p>
        </div>
        <div class="col">
          <img class="frontman-photo mx-auto" src="/img/frontman/frontman-5.jpg" alt="Amirul Hadi Wibowo">
          <p class="frontman-name">Amirul Hadi Wibowo<br>2016-2017</p>
        </div>
        <div class="col">
          <img class="frontman-photo mx-auto" src="/img/frontman/frontman-6.jpg" alt="Richie Andyllo Tambunan">
          <p class="frontman-name">Richie Andyllo Tambunan<br>2017-2018</p>
        </div>
        <div class="col">
          <img class="frontman-photo mx-auto" src="/img/frontman/frontman-7.jpg" alt="Muhammad Firza Gustama">
          <p class="frontman-name">Muhammad Firza Gustama<br>2018-2019</p>
        </div>
        <div class="col">
          <img class="frontman-photo mx-auto" src="/img/frontman/frontman-8.jpg" alt="Muhammad Nabil Giffary">
          <p class="frontman-name">Muhammad Nabil Giffary<br>2019-2020</p>
        </div>
        <div class="col">
          <img class="frontman-photo mx-auto" src="/img/frontman/frontman-9.jpg" alt="Pramasetya Kinasih Gusti">
          <p class="frontman-name">Pramasetya Kinasih Gusti<br>2020-2021</p>
        </div>
        <div class="col">
          <img class="frontman-photo mx-auto" src="/img/frontman/frontman-10.jpg" alt="Anbiya Nawfal Alfina">
          <p class="frontman-name">Anbiya Nawfal Alfina<br>2021-2022</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Frontman -->

  <!-- Playnaw Jazzineer -->
  <section id="aboutKabinet">
    <div class="container">
      <h2 class="kabinet-title my-5 mx-auto">
        <span>Kabinet</span><br>
        Playnaw Jazzineer
      </h2>
      <div class="row justify-content-center">
        <div class="col-3 kabinet-content my-3">
          <img class="kabinet-photo mx-auto" src="/img/kabinet/frontman.jpg" alt="Frontman - Anbiya Nawfal">
          <p class="kabinet-position mt-2 mb-1">Frontman</p>
          <p class="kabinet-detail">
            Anbiya Nawfal<br>
            Teknik Elektro ITS ‘18
          </p>
        </div>
        <div class="col-3 kabinet-content my-3">
          <img class="kabinet-photo mx-auto" src="/img/kabinet/co-frontman.jpg"
            alt="Wakil Frontman - Jonathan Arsha P.">
          <p class="kabinet-position mt-2 mb-1">Wakil Frontman</p>
          <p class="kabinet-detail">
            Jonathan Arsha P.<br>
            Kimia ITS ‘18
          </p>
        </div>
      </div>
      <div class="row row-cols-2 justify-content-center mx-auto" style="max-width: 900px;">
        <div class="col kabinet-content my-3">
          <img class="kabinet-photo mx-auto" src="/img/kabinet/sekretaris-1.jpg"
            alt="Sekretaris I - Muh. Dihan Ramadhan P">
          <p class="kabinet-position mt-2 mb-1">Sekretaris I</p>
          <p class="kabinet-detail">
            Muh. Dihan Ramadhan P<br>
            Teknik Transportasi Laut ITS ‘18
          </p>
        </div>
        <div class="col kabinet-content my-3">
          <img class="kabinet-photo mx-auto" src="/img/kabinet/sekretaris-2.jpg"
            alt="Sekretaris II - Elvira Rahma Andini">
          <p class="kabinet-position mt-2 mb-1">Sekretaris II</p>
          <p class="kabinet-detail">
            Elvira Rahma Andini<br>
            Desain Produk ITS ‘19
          </p>
        </div>
        <div class="col kabinet-content my-3">
          <img class="kabinet-photo mx-auto" src="/img/kabinet/bendahara.jpg"
            alt="Bendahara - Muhammad Hafizh A.">
          <p class="kabinet-position mt-2 mb-1">Bendahara</p>
          <p class="kabinet-detail">
            Muhammad Hafizh A.<br>
            Teknik Sipil ITS ‘18
          </p>
        </div>
        <div class="col kabinet-content my-3">
          <img class="kabinet-photo mx-auto" src="/img/kabinet/kadiv-internal.jpg"
            alt="Kadiv Internal - M. Baliyan Ardzabily">
          <p class="kabinet-position mt-2 mb-1">Kadiv Internal</p>
          <p class="kabinet-detail">
            M. Baliyan Ardzabily<br>
            Teknik Sistem Perkapalan ITS ‘19
          </p>
        </div>
        <div class="col kabinet-content my-3">
          <img class="kabinet-photo mx-auto" src="/img/kabinet/kasubdiv-internal.jpg"
            alt="Kasubdiv Internal - Jodi Adam F.">
          <p class="kabinet-position mt-2 mb-1">Kasubdiv Internal</p>
          <p class="kabinet-detail">
            Jodi Adam F.<br>
            Teknik Sistem Perkapalan ITS ‘18
          </p>
        </div>
        <div class="col kabinet-content my-3">
          <img class="kabinet-photo mx-auto" src="/img/kabinet/kadiv-karya.jpg"
            alt="Kadiv Karya - Stanley Abel Hartanto">
          <p class="kabinet-position mt-2 mb-1">Kadiv Karya</p>
          <p class="kabinet-detail">
            Stanley Abel Hartanto<br>
            Teknik Kimia ITS ‘19
          </p>
        </div>
        <div class="col kabinet-content my-3">
          <img class="kabinet-photo mx-auto" src="/img/kabinet/kasubdiv-karya.jpg"
            alt="Kasubdiv Karya - Dewantoro Abimanyu">
          <p class="kabinet-position mt-2 mb-1">Kasubdiv Karya</p>
          <p class="kabinet-detail">
            Dewantoro Abimanyu<Br>
            Teknik Sistem Perkapalan ITS ‘19
          </p>
        </div>
        <div class="col kabinet-content my-3">
          <img class="kabinet-photo mx-auto" src="/img/kabinet/kadiv-fundraising.jpg"
            alt="Kadiv Fundraising - Dhanar Kurnia R.">
          <p class="kabinet-position mt-2 mb-1">Kadiv Fundraising</p>
          <p class="kabinet-detail">
            Dhanar Kurnia R.<br>
            Teknik Kimia ITS ‘19
          </p>
        </div>
        <div class="col kabinet-content my-3">
          <img class="kabinet-photo mx-auto" src="/img/kabinet/kadiv-external.jpg"
            alt="Kadiv Eksternal - Enmoda Miller">
          <p class="kabinet-position mt-2 mb-1">Kadiv Eksternal</p>
          <p class="kabinet-detail">
            Enmoda Miller<Br>
            TeknikSistem Perkapalan ITS ‘19
          </p>
        </div>
        <div class="col kabinet-content my-3">
          <img class="kabinet-photo mx-auto" src="/img/kabinet/kasubdiv-external.jpg"
            alt="Kasubdiv Eksternal - Adimas Febryan Budiono">
          <p class="kabinet-position mt-2 mb-1">Kasubdiv Eksternal</p>
          <p class="kabinet-detail">
            Adimas Febryan Budiono<br>
            Perancangan dan Konstruksi Kapal PPNS ‘18
          </p>
        </div>
        <div class="col kabinet-content my-3">
          <img class="kabinet-photo mx-auto" src="/img/kabinet/kadiv-medfo.jpg"
            alt="Kadiv Medfo - Andreas Mahendri P.">
          <p class="kabinet-position mt-2 mb-1">Kadiv Medfo</p>
          <p class="kabinet-detail">
            Andreas Mahendri P.<br>
            Teknik Sistem Perkapalan ITS ‘18
          </p>
        </div>
        <div class="col kabinet-content my-3">
          <img class="kabinet-photo mx-auto" src="/img/kabinet/kasubdiv-jurnalistik.jpg"
            alt="Kasubdiv Jurnalistik - Karina Endriana Grace">
          <p class="kabinet-position mt-2 mb-1">Kasubdiv Jurnalistik</p>
          <p class="kabinet-detail">
            Karina Endriana Grace<br>
            Statistika ITS ‘18
          </p>
        </div>
        <div class="col kabinet-content my-3">
          <img class="kabinet-photo mx-auto" src="/img/kabinet/kasubdiv-desain.jpg"
            alt="Kasubdiv Desain - Ichlasul Syahputro S.">
          <p class="kabinet-position mt-2 mb-1">Kasubdiv Desain</p>
          <p class="kabinet-detail">
            Ichlasul Syahputro S.<Br>
            Teknik Sistem Perkapalan ITS ‘18
          </p>
        </div>
        <div class="col kabinet-content my-3">
          <img class="kabinet-photo mx-auto" src="/img/kabinet/kasubdiv-dokumentasi.jpg"
            alt="Kasubdiv Dokumentasi - Kadek Yusna Saputra">
          <p class="kabinet-position mt-2 mb-1">Kasubdiv Dokumentasi</p>
          <p class="kabinet-detail">
            Kadek Yusna Saputra<br>
            Desain Interior ITS ‘18
          </p>
        </div>
        <div class="col kabinet-content my-3">
          <img class="kabinet-photo mx-auto" src="/img/kabinet/kadiv-event.jpg"
            alt="Kadiv Event - Reiz Hans Latupapua">
          <p class="kabinet-position mt-2 mb-1">Kadiv Event</p>
          <p class="kabinet-detail">
            Reiz Hans Latupapua<br>
            Teknik Sipil ITS ‘19
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Playnaw Jazzineer -->

@endsection