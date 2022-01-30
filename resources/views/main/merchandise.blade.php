@extends('main.layouts.main')

@section('navbar')
  @include('main.layouts.navbar')
@endsection

@section('footer')
  @include('main.layouts.footer')
@endsection

@section('content')

  <!-- Header -->
  <header id="merchHeader" class="vh-100">
    <div class="header d-flex align-items-center">
      <div class="container">
        <h1 class="header-title">Official<br>Merchandise</h1>
      </div>
    </div>
  </header>
  <!-- End of Header -->

  <!-- Catalog -->
  <section id="merchCatalog" class="mx-auto">
    <div class="container">
      <h2 class="catalog-title">Catalog</h2>
      <div class="accordion" id="catalog-content">
        <div class="d-flex justify-content-center flex-wrap mb-4">
          <button class="catalog-name my-2 mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#tshirt"
            aria-expanded="true" aria-controls="tshirt">
            T-Shirt
          </button>
          <button class="catalog-name my-2 collapsed mx-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#stickerpack" aria-expanded="true" aria-controls="stickerpack">
            Sticker Pack
          </button>
          <button class="catalog-name my-2 collapsed mx-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#guitarpick" aria-expanded="true" aria-controls="guitarpick">
            Guitar Pick
          </button>
          <button class="catalog-name my-2 collapsed mx-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#drumstick" aria-expanded="true" aria-controls="drumstick">
            Drum Stick
          </button>
          <button class="catalog-name my-2 collapsed mx-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#keychain" aria-expanded="true" aria-controls="keychain">
            Keychain
          </button>
          <button class="catalog-name my-2 collapsed mx-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#totebag" aria-expanded="true" aria-controls="totebag">
            Totebag
          </button>
        </div>
        <div id="tshirt" class="accordion-collapse collapse show" data-bs-parent="#catalog-content">
          <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-3">
              <div class="catalog-box mx-auto">
                <img src="/img/merchandise/tshirt-black.png" alt="ITS Jazz T-Shirt Black" class="catalog-pict">
              </div>
              <p class="catalog-desc text-center my-3">
                Black<br>
                85.000
              </p>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="catalog-box mx-auto">
                <img src="/img/merchandise/tshirt-white.png" alt="ITS Jazz T-Shirt White" class="catalog-pict">
              </div>
              <p class="catalog-desc text-center my-3">
                White<br>
                85.000
              </p>
            </div>
          </div>
        </div>
        <div id="stickerpack" class="accordion-collapse collapse" data-bs-parent="#catalog-content">
          <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-3">
              <div class="catalog-box mx-auto">
                <img src="/img/merchandise/sticker-pack.png" alt="ITS Jazz Sticker Pack" class="catalog-pict">
              </div>
              <p class="catalog-desc text-center my-3">
                Sticker Pack<br>
                1.000/pcs and 8.000/pcs
              </p>
            </div>
          </div>
        </div>
        <div id="guitarpick" class="accordion-collapse collapse" data-bs-parent="#catalog-content">
          <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-3">
              <div class="catalog-box mx-auto">
                <img src="/img/merchandise/pick-black.png" alt="ITS Jazz Guitar Pick Black" class="catalog-pict">
              </div>
              <p class="catalog-desc text-center my-3">
                Black<br>
                10.000/5pcs
              </p>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="catalog-box mx-auto">
                <img src="/img/merchandise/pick-brown.png" alt="ITS Jazz Guitar Pick Brown" class="catalog-pict">
              </div>
              <p class="catalog-desc text-center my-3">
                Brown<br>
                10.000/5pcs
              </p>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="catalog-box mx-auto">
                <img src="/img/merchandise/pick-blue.png" alt="ITS Jazz Guitar Pick Blue" class="catalog-pict">
              </div>
              <p class="catalog-desc text-center my-3">
                Blue<br>
                10.000/5pcs
              </p>
            </div>
          </div>
        </div>
        <div id="drumstick" class="accordion-collapse collapse" data-bs-parent="#catalog-content">
          <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-3">
              <div class="catalog-box mx-auto">
                <img src="/img/merchandise/drum-stick.png" alt="ITS Jazz Drum Stick" class="catalog-pict">
              </div>
              <p class="catalog-desc text-center my-3">
                Drum Stick<br>
                50.000
              </p>
            </div>
          </div>
        </div>
        <div id="keychain" class="accordion-collapse collapse" data-bs-parent="#catalog-content">
          <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-3">
              <div class="catalog-box mx-auto">
                <img src="/img/merchandise/keychain-orange.png" alt="ITS Jazz Keychain Orange"
                  class="catalog-pict">
              </div>
              <p class="catalog-desc text-center my-3">
                Orange<br>
                15.000
              </p>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="catalog-box mx-auto">
                <img src="/img/merchandise/keychain-brown.png" alt="ITS Jazz Keychain Brown" class="catalog-pict">
              </div>
              <p class="catalog-desc text-center my-3">
                Brown<br>
                15.000
              </p>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="catalog-box mx-auto">
                <img src="/img/merchandise/keychain-black.png" alt="ITS Jazz Keychain Black" class="catalog-pict">
              </div>
              <p class="catalog-desc text-center my-3">
                Black<br>
                15.000
              </p>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="catalog-box mx-auto">
                <img src="/img/merchandise/keychain-yellow.png" alt="ITS Jazz Keychain Yellow"
                  class="catalog-pict">
              </div>
              <p class="catalog-desc text-center my-3">
                Yellow<br>
                15.000
              </p>
            </div>
          </div>
        </div>
        <div id="totebag" class="accordion-collapse collapse" data-bs-parent="#catalog-content">
          <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-3">
              <div class="catalog-box mx-auto">
                <img src="/img/merchandise/totebag-black.png" alt="ITS Jazz Totebag Black" class="catalog-pict">
              </div>
              <p class="catalog-desc text-center my-3">
                Black<br>
                55.000
              </p>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="catalog-box mx-auto">
                <img src="/img/merchandise/totebag-white.png" alt="ITS Jazz Totebag White" class="catalog-pict">
              </div>
              <p class="catalog-desc text-center my-3">
                White<br>
                55.000
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Catalog -->

  <!-- Bundles -->
  <section id="merchBundles" class="mx-auto">
    <div class="container">
      <h2 class="bundle-title">Bundles</h2>
      <div class="table-responsive my-4">
        <table class="table bundle-table">
          <tr>
            <th>Bundle 1</th>
            <th>Bundle 2</th>
            <th>Bundle 3</th>
          </tr>
          <tr>
            <td><strong>1</strong> T-shirt</td>
            <td><strong>1</strong> T-shirt</td>
            <td><strong>2</strong> T-shirt</td>
          </tr>
          <tr>
            <td><strong>1</strong> Keychain</td>
            <td><strong>1</strong> Keychain</td>
            <td><strong>1</strong> Keychain</td>
          </tr>
          <tr>
            <td><strong>3</strong> Free Stickers</td>
            <td><strong>1</strong> Totebag</td>
            <td><strong>1</strong> Totebag</td>
          </tr>
          <tr>
            <td></td>
            <td><strong>3</strong> Free Stickers</td>
            <td><strong>3</strong> Free Stickers</td>
          </tr>
        </table>
      </div>
      <a href="https://bit.ly/POMerchJazzineer" class="merch-button mx-auto mb-5">Order Now!</a>
    </div>
  </section>
  <!-- End of Bundles -->

@endsection