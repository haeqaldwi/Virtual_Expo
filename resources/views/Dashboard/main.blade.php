@extends('dashboard.Layout.index')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Beranda</h1>
  </div>

  <h4 class="h4">Jadwal</h4>
  <div class="table-responsive col-lg-6">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Acara</th>
          <th scope="col">Jam</th>
        </tr>
      </thead>
      @foreach ($jadwal as $j)
      <tbody>
        <tr>
          <td>{{ $loop -> iteration}}</td>
          <td>{{ $j->event }}</td>
          <td>{{ $j->jam }}</td>
        </tr>
      </tbody>
      @endforeach
    </table>
    </br>

  <h4 class="h4">JMTI</h4>
  <div class="table-responsive col-lg-60">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Acara</th>
          <th scope="col">Gambar</th>
        </tr>
      </thead>
      @foreach ($konten as $k)
      <tbody>
        <tr>
          <td>{{ $loop -> iteration}}</td>
          <td>{{ $k->nama }}</td>
          <td>{{ $k->gambar }}</td>
        </tr>
      </tbody>
      @endforeach
    </table>
@endsection
