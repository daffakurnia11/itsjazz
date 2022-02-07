@extends('admin.layouts.main')

@section('content')
  <!--Header-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Jazzineer Gigs</div>
    <div class="ps-3 ms-auto">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-images"></i> Jazzineer Gigs</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  @if (session()->has('notif'))
    <div id="notification" data-flashdata="{{ session('notif') }}"></div>
  @endif

  <h6 class="mb-0 text-uppercase">
    <div class="d-flex align-items-center justify-content-between">
      Jazzineer Gigs Content Management
      <a href="/admin/jazzineer-gigs/create" class="btn btn-primary">Tambah Konten</a>
    </div>
  </h6>
  <hr>

  @foreach ($years as $year)
  <div class="card">
    <div class="card-body">
      <div class="accordion accordion-flush" id="jazzineerGigs{{ $year }}">
        <h5 class="card-title">{{ $year }}</h5>
        <div class="my-3 border-top"></div>
        @foreach ($months as $month)
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-{{ $month }}">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $year }}{{ $loop->iteration }}" aria-expanded="true" aria-controls="flush-collapse{{ $loop->iteration }}">
              {{ $month }} {{ $year }}
            </button>
          </h2>
          <div id="flush-collapse{{ $year }}{{ $loop->iteration }}" class="accordion-collapse collapse" aria-labelledby="flush-{{ $month }}" data-bs-parent="#jazzineerGigs{{ $year }}" style="">
            <div class="row">
              @foreach ($contents as $content)
                @if (\Carbon\Carbon::parse($content->date)->isoFormat('MMMM') == $month && \Carbon\Carbon::parse($content->date)->isoFormat('YYYY') == $year)
                <div class="col-md-6 col-lg-4 col-xl-3 my-3">
                  <div class="ratio ratio-16x9 text-center shadow-sm mb-2 position-relative">
                    <img src="/img/jazzineer-gigs/{{ $content->file }}" alt="" class="w-auto position-absolute start-50 translate-middle-x">
                  </div>
                  <h6 class="mb-0 text-center">{{ $content->event }}</h6>
                  <p class="text-center mb-0">{{ \Carbon\Carbon::parse($content->date)->isoFormat('MMMM Do, YYYY') }}</p>
                  <div class="d-flex justify-content-center">
                    <a href="/admin/jazzineer-gigs/{{ $content->id }}/edit" class="btn btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ubah"><i class="bi bi-pencil"></i></a>
                    <form action="/admin/jazzineer-gigs/{{ $content->id }}" method="POST" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm text-danger deleteButton" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Hapus" onclick="return confirm('Data akan dihapus, lanjutkan?')"><i class="bi bi-trash"></i></button>
                    </form>
                  </div>
                </div>
                @endif
              @endforeach
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  @endforeach

@endsection