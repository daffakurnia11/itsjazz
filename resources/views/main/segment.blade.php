@extends('main.layouts.main')

@section('navbar')
  @include('main.layouts.navbar')
@endsection

@section('footer')
  @include('main.layouts.footer')
@endsection

@section('content')

  <!-- Header -->
  <header id="segmentHeader" class="vh-100">
    <div class="header">
      <div class="container d-flex align-items-center position-relative">
        <h1 class="header-title">ITS Jazz<br>Segment</h1>
        <a href="#its-jazz-segments" class="header-action">
          Discover more about our activities <i class="fas d-inline-block ms-2 ms-sm-3 fa-arrow-down"></i>
        </a>
      </div>
    </div>
  </header>
  <!-- End of Header -->

  <!-- ITS Jazz Part -->
  <section id="its-jazz-segments">
    <div class="container segment mb-4">
      <button class="segment-button text-center d-flex justify-content-between align-items-center" type="button"
        data-bs-toggle="collapse" data-bs-target="#segmentOne" aria-expanded="false" aria-controls="segmentOne">
        <h2 class="segment-title">ITS Jazz Part</h2>
        <i class="fas d-inline-block ms-3 fa-arrow-up"></i>
      </button>
      <div class="collapse show" id="segmentOne">
        <div class="segment-content my-4">
          <p class="segment-desc">
            ITS JAZZ PART merupakan perayaan ulang tahun its jazz, aktivasi agenda kekomunitasan,
            showcase karya its jazz, penampilan anggota its jazz, dan undangan ke komunitas jazz lain untuk bermusik dan
            jamming bersama di its jazz part.
          </p>
          <div class="row mt-4">
            <div class="col-sm-6 col-lg-3 my-3 px-4">
              <h3 class="underlined-title text-center">ITS Jazz Part #1 2012</h3>
              <img src="/img/itsjazzsegment/itsjazzpart-2012-1.jpg" alt="ITS Jazz Part #1 2012"
                class="d-block w-100 mx-auto my-3">
              <img src="/img/itsjazzsegment/itsjazzpart-2012-2.jpg" alt="ITS Jazz Part #1 2012"
                class="d-block w-100 mx-auto my-3">
              <p class="circled-desc">
                Pada its jazz part #1 mengadakan jazz clinic yang diisi oleh Surabaya All Stars
              </p>
            </div>
            <div class="col-sm-6 col-lg-3 my-3 px-4">
              <h3 class="underlined-title text-center">ITS Jazz Part #2 2017</h3>
              <img src="/img/itsjazzsegment/itsjazzpart-2014-1.jpg" alt="ITS Jazz Part #1 2014"
                class="d-block w-100 mx-auto my-3">
              <img src="/img/itsjazzsegment/itsjazzpart-2014-2.jpg" alt="ITS Jazz Part #1 2014"
                class="d-block w-100 mx-auto my-3">
              <p class="circled-desc">
                Jazzpeakable yang berarti "Musik dapat Berbicara" dengan tuntutan acara pre-event;
                roadshow, music clinic, dan konser musik.
              </p>
            </div>
            <div class="col-sm-6 col-lg-3 my-3 px-4">
              <h3 class="underlined-title text-center">ITS Jazz Part #3 2015</h3>
              <img src="/img/itsjazzsegment/itsjazzpart-2015-1.jpg" alt="ITS Jazz Part #1 2015"
                class="d-block w-100 mx-auto my-3">
              <img src="/img/itsjazzsegment/itsjazzpart-2015-2.jpg" alt="ITS Jazz Part #1 2015"
                class="d-block w-100 mx-auto my-3">
              <p class="circled-desc">
                ITS JAZZ berkolaborasi dengan event ITS lain, yaitu pasar malam minggu ITS.
              </p>
            </div>
            <div class="col-sm-6 col-lg-3 my-3 px-4">
              <h3 class="underlined-title text-center">ITS Jazz Part #4 2016</h3>
              <img src="/img/itsjazzsegment/itsjazzpart-2016-1.jpg" alt="ITS Jazz Part #1 2016"
                class="d-block w-100 mx-auto my-3">
              <img src="/img/itsjazzsegment/itsjazzpart-2016-2.jpg" alt="ITS Jazz Part #1 2016"
                class="d-block w-100 mx-auto my-3">
              <p class="circled-desc">
                Clinic superb dari Surabaya All Stars dan juga penampilan-penampilan mantap dari Bajul n Friends, C26,
                Darjezz, ITS JAZZ dan SAT
              </p>
            </div>
            <div class="col-sm-6 col-lg-3 my-3 px-4">
              <h3 class="underlined-title text-center">ITS Jazz Part #5 2017</h3>
              <img src="/img/itsjazzsegment/itsjazzpart-2017-1.jpg" alt="ITS Jazz Part #1 2017"
                class="d-block w-100 mx-auto my-3">
              <img src="/img/itsjazzsegment/itsjazzpart-2017-2.jpg" alt="ITS Jazz Part #1 2017"
                class="d-block w-100 mx-auto my-3">
              <p class="circled-desc">
                ITS JAZZ kali ini berkolaborasi lagi dengan event its lain : JAZZ THE FIFTH x PAMMITS
              </p>
            </div>
            <div class="col-sm-6 col-lg-3 my-3 px-4">
              <h3 class="underlined-title text-center">ITS Jazz Part #6 2018</h3>
              <img src="/img/itsjazzsegment/itsjazzpart-2018-1.jpg" alt="ITS Jazz Part #1 2018"
                class="d-block w-100 mx-auto my-3">
              <img src="/img/itsjazzsegment/itsjazzpart-2018-2.jpg" alt="ITS Jazz Part #1 2018"
                class="d-block w-100 mx-auto my-3">
              <p class="circled-desc">
                ITS jazz featuring : UKM Musik PPNS, UKM Musik ITS, Abstract UC, Fyn Music, C26, dan Fusion Jazz
                Community
              </p>
            </div>
            <div class="col-sm-6 col-lg-3 my-3 px-4">
              <h3 class="underlined-title text-center">ITS Jazz Part #7</h3>
              <img src="/img/itsjazzsegment/itsjazzpart-2019-1.jpg" alt="ITS Jazz Part #1 2019"
                class="d-block w-100 mx-auto my-3">
              <img src="/img/itsjazzsegment/itsjazzpart-2019-2.jpg" alt="ITS Jazz Part #1 2019"
                class="d-block w-100 mx-auto my-3">
              <p class="circled-desc">
                "Multiverse of Jazz" berartikan bahwa genre jazz merupakan akar dalam suatu genre musik. tema ini
                mengartikan bahwa luasnya sebuah genre dan arti dari musik jazz menjadi sebuah arti tak terbatas dalam
                berkarya dan memainkan sebuah musik.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of ITS Jazz Part -->

    <!-- Jazzineer Virtual Arrangement -->
    <div class="container segment my-4">
      <button class="segment-button text-center d-flex justify-content-between align-items-center collapsed"
        type="button" data-bs-toggle="collapse" data-bs-target="#segmentTwo" aria-expanded="false"
        aria-controls="segmentTwo">
        <h2 class="segment-title">Jazzineer Virtual Arrangement</h2>
        <i class="fas d-inline-block ms-3 fa-arrow-down"></i>
      </button>
      <div class="collapse" id="segmentTwo">
        <div class="segment-content my-4">
          <p class="segment-desc">
            Jazzineer's Virtual Arrangement merupakan sebuah project online untuk mengcover beberapa lagu hits yang
            dimainkan dan diaransemen oleh Jazzineer. JVA sudah diadakan 4 kali dan akan ada 3 lagi, so stay tune
          </p>
          <div class="row mt-4">
            <div class="col-sm-6 col-lg-3 my-3 px-4">
              <h3 class="underlined-title text-center">JVA 1<br>Weak-SVW</h3>
              <img src="/img/itsjazzsegment/jva-1.jpg" alt="Jazzineer's Virtual Arrangement 1 - Weak-SVW"
                class="d-block w-100 mx-auto my-3">
              <a href="https://www.youtube.com/watch?v=K1kCVMnrDNc" target="_blank"
                class="segment-link d-block text-center">Play Now</a>
            </div>
            <div class="col-sm-6 col-lg-3 my-3 px-4">
              <h3 class="underlined-title text-center">JVA 2<br>Am I Wrong - Nico & Vinz</h3>
              <img src="/img/itsjazzsegment/jva-2.jpg"
                alt="Jazzineer's Virtual Arrangement 2 - Am I Wrong - Nico & Vinz" class="d-block w-100 mx-auto my-3">
              <a href="https://www.youtube.com/watch?v=cXPjn1WPeUA" target="_blank"
                class="segment-link d-block text-center">Play Now</a>
            </div>
            <div class="col-sm-6 col-lg-3 my-3 px-4">
              <h3 class="underlined-title text-center">JVA 3<br>Could it Be - Raisa</h3>
              <img src="/img/itsjazzsegment/jva-3.jpg"
                alt="Jazzineer's Virtual Arrangement 3 - Could it Be - Raisa" class="d-block w-100 mx-auto my-3">
              <a href="https://www.youtube.com/watch?v=DIIIDUjNA-w" target="_blank"
                class="segment-link d-block text-center">Play Now</a>
            </div>
            <div class="col-sm-6 col-lg-3 my-3 px-4">
              <h3 class="underlined-title text-center">JVA 4<br>Sesaat Kau Hadir - Utha L.</h3>
              <img src="/img/itsjazzsegment/jva-4.jpg"
                alt="Jazzineer's Virtual Arrangement 4 - Sesaat Kau Hadir - Utha Likumahuwa"
                class="d-block w-100 mx-auto my-3">
              <a href="https://www.youtube.com/watch?v=_r8CGi-aXdI" target="_blank"
                class="segment-link d-block text-center">Play Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Jazzineer Virtual Arrangement -->

    <!-- Dialog Jazzineer -->
    <div class="container segment my-4">
      <button class="segment-button text-center d-flex justify-content-between align-items-center collapsed"
        type="button" data-bs-toggle="collapse" data-bs-target="#segmentThree" aria-expanded="false"
        aria-controls="segmentThree">
        <h2 class="segment-title">Dialog Jazzineer</h2>
        <i class="fas d-inline-block ms-3 fa-arrow-down"></i>
      </button>
      <div class="collapse" id="segmentThree">
        <div class="segment-content my-4">
          <p class="segment-desc">
            Dialog Jazzineer merupakan sebuah program podcast yang diadakan oleh ITS Jazz. Selain ditujukan agar anggota
            ITS Jazz tetap aktif walaupun sedang dalam pandemi Covid-19, podcast ini juga dibuat untuk memberi edukasi
            untuk masyarakat luas terutama mahasiswa tentang bermusik dan memotivasi masyarakat luas agar selalu
            semangat
            untuk berkarya walaupun sedang di tengah era pandemi. Dialog Jazzineer sudah diadakan sekali dan bisa
            didengarkan di spotify.
          </p>
          <div class="row mt-3 justify-content-center">
            <div class="col-sm-6 col-lg-4 my-3 px-4">
              <h3 class="underlined-title text-center">Episode 1<bR>INTRODUCTION</h3>
              <img src="/img/itsjazzsegment/dialog-jazzineer-1.jpg"
                alt="Dialog Jazzineer - Episode 1 Introduction" class="d-block mx-auto my-3"
                style="width: 225px; max-width: 100%;">
              <p class="circled-desc mb-4">
                Pada episode perdana kami, Dialog Jazzineer menghadirkan frontman dan wakil frontman ITS Jazz untuk
                memperkenalkan ITS Jazz, Jazzineer dan Dialog Jazzineer
              </p>
              <a href="https://open.spotify.com/episode/1Rb4p1V4XwNuO5wAwGYq7w?si=d0899b8b4f3e404a" target="_blank"
                class="segment-link d-block text-center">Play Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Dialog Jazzineer -->

    <!-- Jazzversity -->
    <div class="container segment my-4">
      <button class="segment-button text-center d-flex justify-content-between align-items-center collapsed"
        type="button" data-bs-toggle="collapse" data-bs-target="#segmentFour" aria-expanded="false"
        aria-controls="segmentFour">
        <h2 class="segment-title">Jazzversity</h2>
        <i class="fas d-inline-block ms-3 fa-arrow-down"></i>
      </button>
      <div class="collapse" id="segmentFour">
        <div class="segment-content my-4">
          <p class="segment-desc">
            Jazzversity adalah sebuah event Jazz kolaborasi mahasiswa di Indonesia yang dipelopori oleh ITB Jazz dan ITS
            Jazz. jazzversity berawal dari sebuah keresahan akan adanya stigma sebuah pengkomparasian. ITS Jazz dan
            ITBjazz menggagas ‘Jazzversity' yang mana adalah sebuah brand yang diproyeksikan sebagai Platform (event)
            kolaborasi Mahasiswa se - Indonesia. Value dan Fundamental utama Jazzversity bukan sekedar Musik, Jazz,
            University, maupun Diversity, tapi juga adalah PLATFORM DAN KOLABORASI. 2020 menjadi tahun pertama
            diadakannya
            Jazzversity.
          </p>
          <div class="row mt-3 justify-content-center">
            <div class="col-md-6 my-3 px-4">
              <h3 class="underlined-title text-center">
                JAZZVERSITY 2020<bR>
                Institut Suara | Konser Online Kolaborasi ITBJazz X ITS Jazz
              </h3>
              <img src="/img/itsjazzsegment/jazzversity-1.jpg"
                alt="Jazzversity 2020 Institut Suara | Konser Online Kolaborasi ITBJazz X ITS Jazz"
                class="d-block mx-auto my-3" style="width: 425px; max-width: 100%;">
              <p class="circled-desc mb-4">
                Jazzversity : Institut Suara’ merupakan tema dari tahun perdana diadakannya Jazzversity pada 7 September
                2020. ‘Institut Suara’ merepresentasikan institut pelopor acara yaitu ITBJazz dan ITS Jazz yang
                mengekspresikan diri dengan menghasilkan suara suara yang mengajak orang orang untuk bersatu dan bangkit
                kembali.
              </p>
              <a href="https://www.youtube.com/watch?v=wKJmKOXczqI&t=2531s" target="_blank"
                class="segment-link d-block text-center">Play Now</a>
            </div>
            <div class="col-md-6 my-3 px-4">
              <h3 class="underlined-title text-center">
                JAZZVERSITY 2.0<bR>
                Swarakarya Nusantara | Konser Online Kolaborasi ITBJazz X ITS Jazz
              </h3>
              <img src="/img/itsjazzsegment/jazzversity-2.jpg"
                alt="JAZZVERSITY 2.0 Swarakarya Nusantara | Konser Online Kolaborasi ITBJazz X ITS Jazz"
                class="d-block mx-auto my-3" style="width: 425px; max-width: 100%;">
              <p class="circled-desc mb-4">
                Terdiri dari kata yang artinya suara, dan kata karya Dimana jazzversity kali ini sebagai sebuah ruang
                dan
                platform atas karya-karya kolaborasi mahasiswa yang notabene nya adalah sebuah konser dan pertunjukan
                musik. Salah satu elemen yang diangkat pada Jazzversity tahun ini adalah elemen kolaborasi. Dengan
                banyaknya kolaborasi yang dilakukan pada jazzversity tahun ini, Diharapkan terbentuknya ikatan antar
                komunitas musik dan pemusik lain yang sustainable dan dapat brand jazzversity kedepannya.

              </p>
              <a href="https://www.youtube.com/watch?v=tqaPeP7Cpo4&t=33s" target="_blank"
                class="segment-link d-block text-center">Play Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Jazzversity -->

    <!-- ITS JAZZ Live Session -->
    <div class="container segment my-4">
      <button class="segment-button text-center d-flex justify-content-between align-items-center collapsed"
        type="button" data-bs-toggle="collapse" data-bs-target="#segmentFive" aria-expanded="false"
        aria-controls="segmentFive">
        <h2 class="segment-title">ITS JAZZ Live Session</h2>
        <i class="fas d-inline-block ms-3 fa-arrow-down"></i>
      </button>
      <div class="collapse" id="segmentFive">
        <div class="segment-content my-4">
          <p class="segment-desc">
            ITS JAZZ Live Session adalah sebuah live session yang di produksi oleh ITS JAZZ dengan konsep live record.
          </p>
          <div class="row mt-3 justify-content-center">
            <div class="col-sm-6 col-lg-4 my-3 px-4">
              <h3 class="underlined-title text-center">ITS JAZZ LIVE SESSION VOL.1<bR>Spain - Chick Corea (Cover,
                tribute
                to chick corea)</h3>
              <img src="/img/itsjazzsegment/live-session-1.jpg"
                alt="ITS JAZZ LIVE SESSION VOL.1 Spain - Chick Corea (Cover, tribute to chick corea)"
                class="d-block mx-auto my-3" style="width: 350px; max-width: 100%;">
              <a href="https://www.youtube.com/watch?v=B2PgAh3ps74" target="_blank"
                class="segment-link d-block text-center">Play Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of ITS JAZZ Live Session -->

    <!-- Jamming Bareng Jazzineer -->
    <div class="container segment my-4">
      <button class="segment-button text-center d-flex justify-content-between align-items-center collapsed"
        type="button" data-bs-toggle="collapse" data-bs-target="#segmentSix" aria-expanded="false"
        aria-controls="segmentSix">
        <h2 class="segment-title">Jamming Bareng Jazzineer</h2>
        <i class="fas d-inline-block ms-3 fa-arrow-down"></i>
      </button>
      <div class="collapse" id="segmentSix">
        <div class="segment-content my-4">
          <p class="segment-desc">
            Agenda jamming atau berkumpul untuk bermain bermusik bersama setiap 1 bulan sekali yang diadakan di studio
            musik dalam rangka mengembangkan skill bermusik dan sharing dengan sesama anggota ITS Jazz dalam hal musik.
          </p>
          <div class="row mt-3 justify-content-center mx-auto" style="max-width: 735px;">
            <div class="col-md-6 my-3">
              <img src="/img/itsjazzsegment/jamming-1.jpg" alt="Jamming Bareng Jazzineer"
                class="w-100 d-block mx-auto">
            </div>
            <div class="col-md-6 my-3">
              <img src="/img/itsjazzsegment/jamming-2.jpg" alt="Jamming Bareng Jazzineer"
                class="w-100 d-block mx-auto">
            </div>
            <div class="col-md-6 my-3">
              <img src="/img/itsjazzsegment/jamming-3.jpg" alt="Jamming Bareng Jazzineer"
                class="w-100 d-block mx-auto">
            </div>
            <div class="col-md-6 my-3">
              <img src="/img/itsjazzsegment/jamming-4.jpg" alt="Jamming Bareng Jazzineer"
                class="w-100 d-block mx-auto">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Jamming Bareng Jazzineer -->

    <!-- Sruput Bareng Jazzineer -->
    <div class="container segment my-4">
      <button class="segment-button text-center d-flex justify-content-between align-items-center collapsed"
        type="button" data-bs-toggle="collapse" data-bs-target="#segmentSeven" aria-expanded="false"
        aria-controls="segmentSeven">
        <h2 class="segment-title">Sruput Bareng Jazzineer</h2>
        <i class="fas d-inline-block ms-3 fa-arrow-down"></i>
      </button>
      <div class="collapse" id="segmentSeven">
        <div class="segment-content my-4">
          <p class="segment-desc">
            Agenda untuk berkumpul santai atau “nongkrong” yang diadakan di cafe maupun tempat mana saja dalam rangka
            mempererat tali kekeluargaan antara anggota ITS Jazz. Di dalamnya terdapat beberapa kegiatan seperti sharing
            mengenai historikal dan keanggotaan ITS Jazz, referensi musik, perkuliahan, atau bahkan hanya obrolan
            ringan.
          </p>
        </div>
      </div>
    </div>
    <!-- End of Sruput Bareng Jazzineer -->

    <!-- NGIBAZZ (Ngilmu Bareng Jazzineer) -->
    <div class="container segment my-4">
      <button class="segment-button text-center d-flex justify-content-between align-items-center collapsed"
        type="button" data-bs-toggle="collapse" data-bs-target="#segmentEight" aria-expanded="false"
        aria-controls="segmentEight">
        <h2 class="segment-title">NGIBAZZ (Ngilmu Bareng Jazzineer)</h2>
        <i class="fas d-inline-block ms-3 fa-arrow-down"></i>
      </button>
      <div class="collapse" id="segmentEight">
        <div class="segment-content my-4">
          <p class="segment-desc">
            Ngilmu Bareng Jazzineer merupakan workshop yang dikhususkan buat Jazzineer untuk menggali ilmu-ilmu
            bermanfaat
            lain baik yang berhubungan ataupun tidak berhubungan dengan musik. sejauh ini telah dilaksanakan NGIBAZZ
            hingga 4 kali.
          </p>
          <div class="row mt-4">
            <div class="col-sm-6 col-lg-3 my-3 px-4">
              <h3 class="underlined-title text-center">NGIBAZZ VOL. 1</h3>
              <img src="/img/itsjazzsegment/ngibazz-1.jpg" alt="NGIBAZZ Vol 1" class="d-block mx-auto my-3"
                style="height: 275px; max-width: 100%;">
              <p class="circled-desc">
                NGIBAZZ #1 ini judulnya adalah "basic home recording" yang diisi oleh Anbiya Nawfal, Frontman ITS Jazz
                2021-2022. Di sini Anbiya Nawfal memberikan wawasan dan pengenalan ke temen-temen ITS Jazz terkait
                equipment dan software apa saja yang dipake untuk record dirumah, dan juga sedikit tutorial terkait
                penggunaan berbagai macam DAW.
              </p>
            </div>
            <div class="col-sm-6 col-lg-3 my-3 px-4">
              <h3 class="underlined-title text-center">NGIBAZZ VOL. 2</h3>
              <img src="/img/itsjazzsegment/ngibazz-2.jpg" alt="NGIBAZZ Vol 2" class="d-block mx-auto my-3"
                style="height: 275px; max-width: 100%;">
              <p class="circled-desc">
                NGIBAZZ #2 membawakan judul "Mastery of Event and Project Management" yang diisi oleh Reiz Hans
                Latupapua
                (Kadiv Event ITS Jazz 2021-2022) dan Jonathan Arsha Permana (Wakil Frontman ITS Jazz 2021-2022 & Ketua
                Jazzversity 2020) terkait bagaimana cara membuat dan menghandle sebuah event.
              </p>
            </div>
            <div class="col-sm-6 col-lg-3 my-3 px-4">
              <h3 class="underlined-title text-center">NGIBAZZ VOL. 3</h3>
              <img src="/img/itsjazzsegment/ngibazz-3.jpg" alt="NGIBAZZ Vol 3" class="d-block mx-auto my-3"
                style="height: 275px; max-width: 100%;">
              <p class="circled-desc">
                NGIBAZZ #3 ini kalau orang bilang, "ITS Jazz banget nih!".Sesuai dengan hobi-hobi anak ITS Jazz, yaitu
                bermusik. NGIBAZZ kali ini diisi oleh Dava Giustizia Billah (Jazzineer 2019) dan Mifta Nauval Hariezy
                (Jazzineer 2017) terkait bagimana cara membuat lagu maupun men-arrange sebuah komposisi.
              </p>
            </div>
            <div class="col-sm-6 col-lg-3 my-3 px-4">
              <h3 class="underlined-title text-center">NGIBAZZ VOL. 4</h3>
              <img src="/img/itsjazzsegment/ngibazz-4.jpg" alt="NGIBAZZ Vol 4" class="d-block mx-auto my-3"
                style="height: 275px; max-width: 100%;">
              <p class="circled-desc">
                NGIBAZZ VOL. 4 merupakan NGIBAZZ terakhir di tahun 2021. NGIBAZZ #4 yang dibawa oleh Hanggayu Aly
                Sabtiadi
                (Jazzineer 2016) ini membahas tentang bagaimana cara untuk menggunakan musik ini sebagai ajang
                refreshing
                ditengah kesibukan kita, baik itu bisnis, kerja maupun kita sebagai mahasiswa yang masih punya tanggung
                jawab untuk menyelesaikan kuliah.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of NGIBAZZ (Ngilmu Bareng Jazzineer) -->

    <!-- Hari Besar Jazzineer -->
    <div class="container segment my-4">
      <button class="segment-button text-center d-flex justify-content-between align-items-center collapsed"
        type="button" data-bs-toggle="collapse" data-bs-target="#segmentNine" aria-expanded="false"
        aria-controls="segmentNine">
        <h2 class="segment-title">Hari Besar Jazzineer</h2>
        <i class="fas d-inline-block ms-3 fa-arrow-down"></i>
      </button>
      <div class="collapse" id="segmentNine">
        <div class="segment-content my-4">
          <p class="segment-desc">
            Acara spesial yang dibuat untuk arek ITS Jazz berkumpul bersama supaya saling kenal mulai dari
            anggota-anggota
            baru. Tempat berkumpulnya semua anggota ITS Jazz mulai dari Jazzineer 2011 hingga angkatan terbaru. Banyak
            pembahasan disini, mulai dari cerita-cerita dari alumni tentang bagaimana teman-teman ITS Jazz jaman dulu,
            hingga membahas agenda-agenda apa yang akan diadakan oleh ITS Jazz.
          </p>
          <img src="/img/itsjazzsegment/hari-besar-1.jpg" alt="Hari Besar Jazzineer" class="d-block mx-auto mt-4"
            style="width: 450px; max-width: 100%;">
        </div>
      </div>
    </div>
    <!-- End of Hari Besar Jazzineer -->
  </section>

@endsection