@extends('Dashboard.Layout.index')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">JMTI</h1>
  </div>

  <div class='btn-toolbar'>
      <a type="button" class="btn btn-sm btn-outline-success" href="/dashboard/content/create">Tambah</a>
      <span data-feather="plus"></span>
  </div>

  @if ($kontent->gambar)
  <div class="col-12 col-md-6 col-lg-3 item gallery-image active">
    <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#sJqqHUqxKX-modal" data-bs-target="#sJqqHUqxKX-modal">
        <img class="w-100" src="{{ asset('/storage/' . $kontent->gambar) }}" alt="poster-polos" data-slide-to="0" data-bs-slide-to="0" data-target="#lb-sJqqHUqxKX" data-bs-target="#lb-sJqqHUqxKX">
        <div class="icon-wrapper">
            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
        </div>
    </div>
  @else
  <div class="col-12 col-md-6 col-lg-3 item gallery-image active">
    <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#sJqqHUqxKX-modal" data-bs-target="#sJqqHUqxKX-modal">
        <img class="w-100" src="{{ asset('assets/images/poster-polosss-696x465.png') }}" alt="poster-polos" data-slide-to="0" data-bs-slide-to="0" data-target="#lb-sJqqHUqxKX" data-bs-target="#lb-sJqqHUqxKX">
        <div class="icon-wrapper">
            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
        </div>
    </div>
  @endif
  {{-- <div class='btn-toolbar'>
      <a type="button" class="btn btn-sm btn-outline-success" href="/dashboard/content/create">Tambah</a>
      <span data-feather="plus"></span>
  </div> --}}

@endsection
