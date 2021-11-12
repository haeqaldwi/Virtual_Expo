@extends('Dashboard.Layout.index')

@section('container')

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Gambar</h1>
      </div>

      <form action="/dashboard/content" method="POST" class="mb-5" enctype="multipart/form-data">
        @csrf
        Nama</br>
        <input type="text" name="nama" required="required"> </br>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input class="form-control" type="file" id="gambar" name="gambar">
          </div>
        <input type="submit" value="Simpan">
      </form>
    </main>
  </div>
</div>

@endsection
