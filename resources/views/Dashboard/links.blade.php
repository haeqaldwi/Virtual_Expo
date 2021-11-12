@extends('Dashboard.Layout.index')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Link</h1>
  </div>

  <div class='btn-toolbar'>
      <a type="button" class="btn btn-sm btn-outline-success" href="/dashboard/content/create">Tambah</a>
      <span data-feather="plus"></span>
  </div>

<div class="table-responsive col-lg-6">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Link</th>
        </tr>
      </thead>
      @foreach ($url as $links)
      <tbody>
        <tr>
          <td>{{ $loop -> iteration}}</td>
          <td>{{ $links->nama }}</td>
          <td>{{ $links->link }}</td>
          <td>
              <a class="badge bg-warning" href="jadwal/edit/{{ $links->id }}">Edit</a>
            <form action="" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0">Delete</button>
            </form>
              {{-- <a class="badge bg-danger" method="delete" href="jadwal/{{ $jadwal->id }}">Delete</a> --}}
          </td>
      </tbody>
      @endforeach
    </table>
  </div>

@endsection
