@extends('Dashboard.Layout.index')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3">
    <h1 class="h2">JMTI</h1>
</div>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h4">Aktuaria</h1>
</div>

  <div class='btn-toolbar'>
      <a type="button" class="btn btn-sm btn-outline-success" href="/dashboard/content/create"><span data-feather="plus"></span>Tambah</a>
  </div>


  <div class="table-responsive col-lg-6">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Gambar</th>
        </tr>
        @foreach ($konten as $k)
      <tbody>
        <tr>
          <td>{{ $loop -> iteration}}</td>
          <td>{{ $k->nama }}</td>
          <td>{{ $k->gambar }}</td>
          <td>
              <a class="badge bg-warning" href="content/{{ $k->id }}/edit"><span data-feather="edit">Edit</a>
              <a class="badge bg-success" href="content/{{ $k->id }}"><span data-feather="eye">Show</a>
            <form action="content/{{ $k->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0"><span data-feather="delete">Delete</button>
            </form>
              {{-- <a class="badge bg-danger" method="delete" href="jadwal/{{ $jadwal->id }}">Delete</a> --}}
          </td>
      </tbody>
      @endforeach
    </table>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h4">Bisnis Digital</h1>
    </div>

      <div class='btn-toolbar'>
          <a type="button" class="btn btn-sm btn-outline-success" href="/dashboard/content/create"><span data-feather="plus"></span>Tambah</a>
      </div>


      <div class="table-responsive col-lg-60">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Gambar</th>
            </tr>
            @foreach ($konten as $k)
          <tbody>
            <tr>
              <td>{{ $loop -> iteration}}</td>
              <td>{{ $k->nama }}</td>
              <td>{{ $k->gambar }}</td>
              <td>
                  <a class="badge bg-warning" href="content/{{ $k->id }}/edit"><span data-feather="edit">Edit</a>
                  <a class="badge bg-success" href="content/{{ $k->id }}"><span data-feather="eye">Show</a>
                <form action="content/{{ $k->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0"><span data-feather="delete">Delete</button>
                </form>
                  {{-- <a class="badge bg-danger" method="delete" href="jadwal/{{ $jadwal->id }}">Delete</a> --}}
              </td>
          </tbody>
          @endforeach
        </table>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h4">Informatika</h1>
        </div>

          <div class='btn-toolbar'>
              <a type="button" class="btn btn-sm btn-outline-success" href="/dashboard/content/create"><span data-feather="plus"></span>Tambah</a>
          </div>


          <div class="table-responsive col-lg-60">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Gambar</th>
                </tr>
                @foreach ($konten as $k)
              <tbody>
                <tr>
                  <td>{{ $loop -> iteration}}</td>
                  <td>{{ $k->nama }}</td>
                  <td>{{ $k->gambar }}</td>
                  <td>
                      <a class="badge bg-warning" href="content/{{ $k->id }}/edit"><span data-feather="edit">Edit</a>
                      <a class="badge bg-success" href="content/{{ $k->id }}"><span data-feather="eye">Show</a>
                    <form action="content/{{ $k->id }}" method="post" class="d-inline">
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
