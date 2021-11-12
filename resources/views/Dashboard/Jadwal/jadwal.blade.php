@extends('dashboard.Layout.index')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Jadwal</h1>
  </div>

  <div class='btn-toolbar'>
      <a type="button" class="btn btn-sm btn-outline-success" href="/dashboard/jadwal/create"><span data-feather="plus"></span>Tambah</a>
  </div>



  <div class="table-responsive col-lg-6">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Acara</th>
          <th scope="col">Jam</th>
        </tr>
      </thead>
      @foreach ($event as $j)
      <tbody>
        <tr>
          <td>{{ $loop -> iteration}}</td>
          <td>{{ $j->event }}</td>
          <td>{{ $j->jam }}</td>
          <td>
            <a type="button" class="btn btn-sm badge bg-warning border-0" href="jadwal/{{ $j->id }}/edit"><span data-feather="edit">Edit</a>
            <form action="jadwal/{{ $j->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0"><span data-feather="delete">Delete</button>
            </form>
              {{-- <a class="badge bg-danger" method="delete" href="jadwal/{{ $jadwal->id }}">Delete</a> --}}
          </td>
      </tbody>
      @endforeach
    </table>
  </div>
@endsection
