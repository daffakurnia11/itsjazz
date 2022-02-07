@extends('admin.layouts.main')

@section('content')
  <!--Header-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Jazzineer Gigs</div>
    <div class="ps-3 ms-auto">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a>
          <li class="breadcrumb-item"><a href="/admin/jazzineer-gigs"><i class="bi bi-images"></i> Jazzineer Gigs</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Ubah Konten</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  <div class="row">
    <div class="col-xxl-9 mx-auto">
      <h6 class="mb-0 text-uppercase">Ubah Konten</h6>
      <hr/>
      <div class="card">
        <div class="card-body">
          <div class="border p-3 p-md-4 rounded">
            <div class="card-title d-flex align-items-center">
              <h5 class="mb-0">Form Penambahan Konten Jazzineer Gigs</h5>
            </div>
            <hr/>
            <div class="row">
              <div class="col-xl-8">
                <form action="/admin/jazzineer-gigs/{{ $content->id }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="row mb-3">
                    <label for="event" class="col-md-3 col-sm-4 col-form-label">Nama Kegiatan</label>
                    <div class="col-md-9 col-sm-8">
                      <input type="text" class="form-control @error('event') is-invalid @enderror" id="event" name="event" placeholder="Masukkan nama kegiatan" value="{{ old('event', $content->event) }}">
                      @error('event')
                      <div class="invalid-feedback">
                        <p class="ps-2 mb-0">{{ $message }}</p>
                      </div>
                      @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="date" class="col-md-3 col-sm-4 col-form-label">Tanggal</label>
                    <div class="col-md-9 col-sm-8">
                      <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date', $content->date) }}" min="1" max="31">
                      @error('date')
                      <div class="invalid-feedback">
                        <p class="ps-2 mb-0">{{ $message }}</p>
                      </div>
                      @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="file" class="col-md-3 col-sm-4 col-form-label">File Dokumentasi</label>
                    <div class="col-md-9 col-sm-8">
                      <input class="form-control @error('file') is-invalid @enderror" type="file" name="file" id="file" accept=".jpg,.jpeg,.png">
                      @error('file')
                      <div class="invalid-feedback">
                        <p class="ps-2 mb-0">{{ $message }}</p>
                      </div>
                      @enderror
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-md-3 col-sm-4 col-form-label"></label>
                    <div class="col-md-9 col-sm-8">
                      <button type="submit" class="btn btn-primary px-5">Ubah Konten</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-xl-4 mt-3">
                <div class="ratio ratio-16x9 text-center shadow-sm mb-2 position-relative mx-auto" style="max-width: 400px">
                  <img src="/img/jazzineer-gigs/{{ $content->file }}" alt="" class="w-auto position-absolute start-50 translate-middle-x">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection