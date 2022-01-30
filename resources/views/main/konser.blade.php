@extends('main.layouts.main')

@section('navbar')
  @include('main.layouts.navbar')
@endsection

@section('footer')
  @include('main.layouts.footer')
@endsection

@section('content')

  <!-- Header -->
  <header id="concertHeader" class="vh-100">
    <div class="header d-flex align-items-center">
      <div class="container">
        <h1 class="header-title">Konser<br>1 Dekade</h1>
      </div>
    </div>
  </header>
  <!-- End of Header -->

  <!-- About -->
  <section id="concertAbout" class="d-flex align-items-center">
    <div class="container about my-4">
      <p class="about-text mx-auto px-2 px-sm-4"><strong>1 Dekade ITS JAZZ</strong> adalah sebuah konsep Konser dan
        Showcase ITS di
        dalam
        serangkaian Dies
        Natalies ITS ke 61.
        yang mana di performkan oleh ITS JAZZ ALL STAR, konsep ini mengangkat 9 Iconic Building ITS sebagai Venue dalam
        komposisi yang dibawakan dengan tujuan terbrandingnya ITS sebagai kampus terbaik di Indonesia Adanya 1 Dekade
        ITS JAZZ ini merupakan integrasi antara perayaan ulang tahun ITS ke 61 dan ulang tahun ITS JAZZ yang genap
        berumur 10 tahun sejak 2011-2021 yang mana keduanya sama - sama berulang tahun pada 10 november. Harapannya
        adanya konsep ini membuat ITS JAZZ sebagai salah satu wadah dan platform musik terbesar di ITS bisa memberi
        kontribusi pertunjukan ke Dies Natalies ITS ke 61, dimana mengangkat 6 karya karya original dan 3 lagu dengan
        arransement baru dari anak - anak ITS yang memiliki jiwa dan passion di seni musik dan bisa merepresentasikan
        potensi musik anak ITS.</p>
    </div>
    <img src="/img/about-desc-bg.png" class="about-bg" alt="">
  </section>
  <!-- End of About -->

  <!-- Song Performed -->
  <section id="aboutPerformed">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <h2 class="performed-title">Songs Performed</h2>
          <a href="https://www.youtube.com/watch?v=vwXn7Jr7tKs&t=5044s" class="performed-showcase d-block mt-4 mb-5">
            <i class="fas fa-sm fa-play d-inline-block me-2"></i> <u>Live Showcase</u>
          </a>
        </div>
      </div>
      <!-- Hampton Night -->
      <div class="row my-3 justify-content-center">
        <div class="col-lg-5 col-md-6">
          <div class="position-relative">
            <img src="/img/performed/hampton-night.jpg" class="performed-photo" alt="">
            <p class="performed-place">at Dr. Angka ITS</p>
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="performed-content my-3 my-md-0 mx-auto">
            <h3 class="performed-name">Hampton Night</h3>
            <p class="performed-detail">composed and arranged by Anbiya Nawfal Alfina</p>
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td>Anbiya Nawfal Alfina</td>
                  <td>Gitar</td>
                  <td>Jazzineer'18</td>
                </tr>
                <tr>
                  <td>Stanley Abel Hartanto</td>
                  <td>Drum</td>
                  <td>Jazzineer'19</td>
                </tr>
                <tr>
                  <td>Pramudya Agung Ramadhani</td>
                  <td>Bass</td>
                  <td>Jazzineer'18</td>
                </tr>
                <tr>
                  <td>Muhammad Hafizh Abiyyu</td>
                  <td>Keys</td>
                  <td>Jazzineer'18</td>
                </tr>
                <tr>
                  <td>Jonathan Arsha Permana</td>
                  <td>Keys</td>
                  <td>Jazzineer'18</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Hampton Night -->

      <!-- Could It Be -->
      <div class="row my-3 justify-content-center">
        <div class="col-lg-5 col-md-6">
          <div class="position-relative">
            <img src="/img/performed/could-it-be.jpg" class="performed-photo" alt="">
            <p class="performed-place">at Plaza Aktuaria ITS</p>
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="performed-content my-3 my-md-0 mx-auto">
            <h3 class="performed-name">Could It Be</h3>
            <p class="performed-detail">
              composed by Raisa<br>
              arranged by Pramudya Agung Rahmadani & Jonathan Arsha Permana
            </p>
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td>Savira Maharani</td>
                  <td>Vokal</td>
                  <td>Jazzineer'15</td>
                </tr>
                <tr>
                  <td>Reiz Hans Latupapua</td>
                  <td>Gitar</td>
                  <td>Jazzineer'19</td>
                </tr>
                <tr>
                  <td>Axel Abijuna</td>
                  <td>Drum</td>
                  <td>Jazzineer'20</td>
                </tr>
                <tr>
                  <td>Abiyyu Jahfalu Rahman</td>
                  <td>Bass</td>
                  <td>Jazzineer'20</td>
                </tr>
                <tr>
                  <td>Muhammad Hafizh Abiyyu</td>
                  <td>Keys</td>
                  <td>Jazzineer'18</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Could It Be -->

      <!-- 7 Something -->
      <div class="row my-3 justify-content-center">
        <div class="col-lg-5 col-md-6">
          <div class="position-relative">
            <img src="/img/performed/7-something.jpg" class="performed-photo" alt="">
            <p class="performed-place">at Gedung Riset ITS</p>
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="performed-content my-3 my-md-0 mx-auto">
            <h3 class="performed-name">7 Something</h3>
            <p class="performed-detail">
              composed by IDPDT
            </p>
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td>Juniar Adi Prasetya</td>
                  <td>Drum</td>
                  <td>Jazzineer'15</td>
                </tr>
                <tr>
                  <td>I Gusti Ngurah Adracana</td>
                  <td>Bass</td>
                  <td>Jazzineer'15</td>
                </tr>
                <tr>
                  <td>Muhammad Firza Gustama</td>
                  <td>Gitar</td>
                  <td>Jazzineer'15</td>
                </tr>
                <tr>
                  <td>Amirul Hadi Wibowo</td>
                  <td>Keys</td>
                  <td>Jazzineer'14</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- End of 7 Something -->

      <!-- How Deep Is Your Love -->
      <div class="row my-3 justify-content-center">
        <div class="col-lg-5 col-md-6">
          <div class="position-relative">
            <img src="/img/performed/how-deep-is-your-love.jpg" class="performed-photo" alt="">
            <p class="performed-place">at Lingkar Perpustakaan ITS</p>
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="performed-content my-3 my-md-0 mx-auto">
            <h3 class="performed-name">How Deep Is Your Love</h3>
            <p class="performed-detail">
              composed by Bee Gees<br>
              arraged by all members
            </p>
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td>Bagusranu Wahyudi Putra</td>
                  <td>Drum</td>
                  <td>Jazzineer'10</td>
                </tr>
                <tr>
                  <td>Muhammad Damas Abhimara</td>
                  <td>Bass</td>
                  <td>Jazzineer'20</td>
                </tr>
                <tr>
                  <td>Dhanar Kurnia Ramadhan</td>
                  <td>Gitar</td>
                  <td>Jazzineer'19</td>
                </tr>
                <tr>
                  <td>Fikriyan Amirillah</td>
                  <td>Gitar</td>
                  <td>Jazzineer'08</td>
                </tr>
                <tr>
                  <td>Zaid Achmad Akbar</td>
                  <td>Keys</td>
                  <td>Jazzineer'15</td>
                </tr>
                <tr>
                  <td>Adimas Febryan Budiono</td>
                  <td>Vokal</td>
                  <td>Jazzineer'18</td>
                </tr>
                <tr>
                  <td>Tiara Adiratna</td>
                  <td>Vokal</td>
                  <td>Jazzineer'14</td>
                </tr>
                <tr>
                  <td>Yuliani</td>
                  <td>Vokal</td>
                  <td>Jazzineer'87</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- End of How Deep Is Your Love -->

      <!-- Seribu Candi -->
      <div class="row my-3 justify-content-center">
        <div class="col-lg-5 col-md-6">
          <div class="position-relative">
            <img src="/img/performed/how-deep-is-your-love.jpg" class="performed-photo" alt="">
            <p class="performed-place">at Taman Sipil ITS</p>
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="performed-content my-3 my-md-0 mx-auto">
            <h3 class="performed-name">Seribu Candi</h3>
            <p class="performed-detail">
              composed by Hanggayu Aly Sabtiadi<br>
              arraged by Dava Giustizia Bilah
            </p>
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td>Stanley Abel Hartanto</td>
                  <td>Drum</td>
                  <td>Jazzineer'19</td>
                </tr>
                <tr>
                  <td>Dewantoro Abimanyu</td>
                  <td>Bass</td>
                  <td>Jazzineer'19</td>
                </tr>
                <tr>
                  <td>Muhammad Baliyan Ardzabily</td>
                  <td>Gitar</td>
                  <td>Jazzineer'19</td>
                </tr>
                <tr>
                  <td>Jonathan Arsha Permana</td>
                  <td>Keys</td>
                  <td>Jazzineer'18</td>
                </tr>
                <tr>
                  <td>Enmoda Miller</td>
                  <td>Vokal</td>
                  <td>Jazzineer'19</td>
                </tr>
                <tr>
                  <td>Uluf Nur Barlenty</td>
                  <td>Vokal</td>
                  <td>Jazzineer'20</td>
                </tr>
                <tr>
                  <td>Faykel Nicandro H</td>
                  <td>Vokal</td>
                  <td>Jazzineer'14</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Seribu Candi -->

      <!-- Cytania -->
      <div class="row my-3 justify-content-center">
        <div class="col-lg-5 col-md-6">
          <div class="position-relative">
            <img src="/img/performed/cytania.jpg" class="performed-photo" alt="">
            <p class="performed-place">at Tugu Synchro ITS</p>
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="performed-content my-3 my-md-0 mx-auto">
            <h3 class="performed-name">Cytania</h3>
            <p class="performed-detail">
              composed and arranged by Dava Giustizia Billah
            </p>
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td>Muhammad Rafly Ariditya Ilhami</td>
                  <td>Drum</td>
                  <td>Jazzineer'20</td>
                </tr>
                <tr>
                  <td>Ezra Mikhail Hasea</td>
                  <td>Bass</td>
                  <td>Jazzineer'11</td>
                </tr>
                <tr>
                  <td>Muhammad Hafizh Abiyyu</td>
                  <td>Keys</td>
                  <td>Jazzineer'18</td>
                </tr>
                <tr>
                  <td>Miftah Nauval Hariezy</td>
                  <td>Saxophone</td>
                  <td>Jazzineer'17</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Cytania -->

      <!-- Takkan Bisa -->
      <div class="row my-3 justify-content-center">
        <div class="col-lg-5 col-md-6">
          <div class="position-relative">
            <img src="/img/performed/takkan-bisa.jpg" class="performed-photo" alt="">
            <p class="performed-place">at Gedung Pusat Robotika ITS</p>
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="performed-content my-3 my-md-0 mx-auto">
            <h3 class="performed-name">Takkan Bisa</h3>
            <p class="performed-detail">
              CALC ft. Julian T. & Imaniar C.<br>
              composed by Pramudito Ali Wicaksono<br>
              arranged by Dava Giuztizia Billah & Pramudya Agung Rahmadani<br>
              backing vocal by Yoses Agung Hari Putra
            </p>
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td>Stanley Abel Hartanto</td>
                  <td>Drum</td>
                  <td>Jazzineer'19</td>
                </tr>
                <tr>
                  <td>Dewantoro Abimanyu</td>
                  <td>Bass</td>
                  <td>Jazzineer'19</td>
                </tr>
                <tr>
                  <td>Muhammad Baliyan Ardzabily</td>
                  <td>Gitar</td>
                  <td>Jazzineer'19</td>
                </tr>
                <tr>
                  <td>Jonathan Arsha Permana</td>
                  <td>Keys</td>
                  <td>Jazzineer'18</td>
                </tr>
                <tr>
                  <td>Enmoda Miller</td>
                  <td>Vokal</td>
                  <td>Jazzineer'19</td>
                </tr>
                <tr>
                  <td>Uluf Nur Barlenty</td>
                  <td>Vokal</td>
                  <td>Jazzineer'20</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Takkan Bisa -->

      <!-- Luka -->
      <div class="row my-3 justify-content-center">
        <div class="col-lg-5 col-md-6">
          <div class="position-relative">
            <img src="/img/performed/luka.jpg" class="performed-photo" alt="">
            <p class="performed-place">at Teknik Material & Metalurgi ITS</p>
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="performed-content my-3 my-md-0 mx-auto">
            <h3 class="performed-name">Luka</h3>
            <p class="performed-detail">
              composed by Hanggayu Aly Sabtiadi<br>
              arranged by Jonathan Arsha Permana & Anbiya Nawfal Alfina
            </p>
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td>Jodi Adam Ferdinand</td>
                  <td>Drum</td>
                  <td>Jazzineer'18</td>
                </tr>
                <tr>
                  <td>Pramasetya Kinasih Gusti</td>
                  <td>Bass</td>
                  <td>Jazzineer'17</td>
                </tr>
                <tr>
                  <td>Anbiya Nawfal Alfina</td>
                  <td>Gitar</td>
                  <td>Jazzineer'18</td>
                </tr>
                <tr>
                  <td>Jonathan Arsha Permana</td>
                  <td>Keys</td>
                  <td>Jazzineer'18</td>
                </tr>
                <tr>
                  <td>Abyan Farasi</td>
                  <td>Keys</td>
                  <td>Jazzineer'17</td>
                </tr>
                <tr>
                  <td>Hanggayu Aly Sabtiadi</td>
                  <td>Vokal</td>
                  <td>Jazzineer'16</td>
                </tr>
                <tr>
                  <td>Mifta Nauval Hariezy</td>
                  <td>Saxophone</td>
                  <td>Jazzineer'17</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Luka -->

      <!-- Through The Fire -->
      <div class="row my-3 justify-content-center">
        <div class="col-lg-5 col-md-6">
          <div class="position-relative">
            <img src="/img/performed/through-the-fire.jpg" class="performed-photo" alt="">
            <p class="performed-place">at Gedung Rektorat ITS</p>
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="performed-content my-3 my-md-0 mx-auto">
            <h3 class="performed-name">Through The Fire</h3>
            <p class="performed-detail">
              sang by Chaka Khan<br>
              composed by David Foster, Tom Keane, Cynthia Weil<br>
              arranged by Jonathan Arsha Permana, Anbiya Nawfal Alfina & Dewantoro Abimanyu
            </p>
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td>Jodi Adam Ferdinand</td>
                  <td>Drum</td>
                  <td>Jazzineer'18</td>
                </tr>
                <tr>
                  <td>Dewantoro Abimanyu</td>
                  <td>Bass</td>
                  <td>Jazzineer'19</td>
                </tr>
                <tr>
                  <td>Muhammad Baliyan Ardzabily</td>
                  <td>Gitar</td>
                  <td>Jazzineer'19</td>
                </tr>
                <tr>
                  <td>Jonathan Arsha Permana</td>
                  <td>Keys</td>
                  <td>Jazzineer'18</td>
                </tr>
                <tr>
                  <td>Enmoda Miller</td>
                  <td>Vokal</td>
                  <td>Jazzineer'19</td>
                </tr>
                <tr>
                  <td>Bambang Soemardino</td>
                  <td>Vokal</td>
                  <td>Dosen</td>
                </tr>
                <tr>
                  <td>Uluf Nur Barlenty</td>
                  <td>Vokal</td>
                  <td>Jazzineer'20</td>
                </tr>
                <tr>
                  <td>Yuliani</td>
                  <td>Vokal</td>
                  <td>Jazzineer'87</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Through The Fire -->
    </div>
  </section>
  <!-- End of Song Performed -->

@endsection