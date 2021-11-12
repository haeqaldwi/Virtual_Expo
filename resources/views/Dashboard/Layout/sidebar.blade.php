<ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard') ? 'active' : ""}}" aria-current="page" href="/dashboard">
        <span data-feather="home"></span>
        Beranda
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard/jadwal*') ? 'active' : ""}}" href="/dashboard/jadwal">
        <span data-feather="edit"></span>
        Jadwal
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard/link*') ? 'active' : ""}}" href="/dashboard/link">
        <span data-feather="link"></span>
        Link
      </a>
    </li>
    <li class="nav-item dropdown">
        {{-- <a class="nav-link link text-black dropdown-toggle display-4 " href="#" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            JURUSAN
        </a> --}}
        <a class="nav-link {{ Request::is('dashboard/content*') ? 'active' : ""}}" href="/dashboard/content">
          <span data-feather="file"></span>
          JMTI
        </a>
      </li>
  </ul>
