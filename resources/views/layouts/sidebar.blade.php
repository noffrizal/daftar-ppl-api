<div class="sidebar p-2 py-md-3 @@cardClass">
    <div class="container-fluid">
      <!-- sidebar: title-->
      <div class="title-text text-center align-items-center mb-4 mt-1">Pendaftaran PPL
      </div>

      <!-- sidebar: menu list -->
      <div class="main-menu flex-grow-1">
        <ul class="menu-list">
          <li class="collapsed">
            <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#my_dashboard" href="#">
                <script src="{{ url('https://cdn.lordicon.com/pzdvqjsp.js') }}"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/hjbsbdhw.json"
                    trigger="loop"
                    style="width:30px;height:30px">
                </lord-icon>
              <span class="ms-2"> My Dashboard</span>

            </a>
          </li>
        </ul>
        <ul class="menu-list">
          <li class="divider py-2 lh-sm"><span class="small">Menu Admin</li>
          <li>
            <a class="m-link" href="{{ route('admin.peserta') }}">
                <script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/ajkxzzfb.json"
                    trigger="loop"
                    style="width:35px;height:30px">
                </lord-icon>
              <span class="ms-2">Data Peserta</span>
            </a>
          </li>
          <li>
            <a class="m-link" href="{{ route('admin.lokasi') }}">
                <script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/oaflahpk.json"
                    trigger="loop"
                    style="width:35px;height:30px">
                </lord-icon>
              <span class="ms-2">Data Lokasi</span>
            </a>
          </li>
          <li>
            <a class="m-link" href="{{ route('admin.kelompok') }}">
                <script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/yhtqafjk.json"
                    trigger="loop"
                    style="width:35px;height:30px">
                </lord-icon>
              <span class="ms-2">Set Kelompok</span>
            </a>
          </li>
        </ul>

        <ul class="menu-list">
            <li class="divider py-2 lh-sm"><span class="small">Menu Peserta</li>
            <li>
              <a class="m-link" href="{{ route('peserta.daftar') }}">
                <script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/ckatldkn.json"
                    trigger="loop"
                    style="width:32px;height:30px">
                </lord-icon>
                <span class="ms-2">Daftar PPL</span>
              </a>
            </li>
            <li>
              <a class="m-link" href="{{ route('peserta.kelompok') }}">
                <script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/flvisirw.json"
                    trigger="loop"
                    style="width:35px;height:30px">
                </lord-icon>
                <span class="ms-2">Lihat Kelompok</span>
              </a>
            </li>
          </ul>
      </div>
    </div>
</div>
