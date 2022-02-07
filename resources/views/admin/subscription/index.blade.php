@extends('admin.layouts.main')

@section('content')
  <!--Header-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Subscription</div>
    <div class="ps-3 ms-auto">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-envelope"></i> Subscription</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  @if (session()->has('notif'))
    <div id="notification" data-flashdata="{{ session('notif') }}"></div>
  @endif

  <h6 class="mb-0 text-uppercase">Pendaftar Subscription</h6>
  <hr>
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>Email</th>
              <th>Registered at</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($subs as $sub)
            <tr>
              <td class="text-center align-middle">{{ $loop->iteration }}</td>
              <td class="align-middle">{{ $sub->name }}</td>
              <td class="align-middle">{{ $sub->email }}</td>
              <td class="align-middle">{{ $sub->created_at }}</td>
              <td class="text-center align-middle">
                {{-- <a href="" class="btn btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Detail"><i class="bi bi-eye"></i></a> --}}
                {{-- <a href="/admin/subscription/{{ $sub->short }}/edit" class="btn btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ubah"><i class="bi bi-pencil"></i></a> --}}
                <form action="/admin/subscription/{{ $sub->id }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm text-danger deleteButton" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Hapus" onclick="return confirm('Data akan dihapus, lanjutkan?')"><i class="bi bi-trash"></i></button>
                </form>

              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>Email</th>
              <th>Registered at</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>

  
@endsection