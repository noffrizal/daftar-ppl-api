<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
  <meta name="keyword" content="LUNO, Bootstrap 5, ReactJs, Angular, Laravel, VueJs, ASP .Net, Admin Dashboard, Admin Theme, HRMS, Projects, Hospital Admin, CRM Admin, Events, Fitness, Music, Inventory, Job Portal">
  <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon"> <!-- Favicon-->
  <title>Pendaftaran PPL</title>
  <!-- Application vendor css url -->
  <link rel="stylesheet" href="./assets/cssbundle/daterangepicker.min.css">
  <!-- project css file  -->
  <link rel="stylesheet" href="./assets/css/luno-style.css">
  <!-- Jquery Core Js -->
  <script src="./assets/js/plugins.js"></script>
</head>

<body class="layout-1" data-luno="theme-blue">
  <!-- start: sidebar -->
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
                <script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/hjbsbdhw.json"
                    trigger="hover"
                    style="width:30px;height:30px">
                </lord-icon>
              <span class="ms-2"> My Dashboard</span>

            </a>
          </li>
        </ul>
        <ul class="menu-list">
          <li class="divider py-2 lh-sm"><span class="small">Menu Admin</li>
          <li>
            <a class="m-link" href="layouts.html">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                <path d="M14 2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z" />
                <path class="fill-secondary" d="M3 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
              </svg>
              <span class="ms-2">Data Peserta</span>
            </a>
          </li>
          <li>
            <a class="m-link" href="modals.html">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                <path class="fill-secondary" d="M2 3C2 3.13261 2.05268 3.25979 2.14645 3.35355C2.24021 3.44732 2.36739 3.5 2.5 3.5H13.5C13.6326 3.5 13.7598 3.44732 13.8536 3.35355C13.9473 3.25979 14 3.13261 14 3C14 2.86739 13.9473 2.74021 13.8536 2.64645C13.7598 2.55268 13.6326 2.5 13.5 2.5H2.5C2.36739 2.5 2.24021 2.55268 2.14645 2.64645C2.05268 2.74021 2 2.86739 2 3ZM4 1C4 1.13261 4.05268 1.25979 4.14645 1.35355C4.24021 1.44732 4.36739 1.5 4.5 1.5H11.5C11.6326 1.5 11.7598 1.44732 11.8536 1.35355C11.9473 1.25979 12 1.13261 12 1C12 0.867392 11.9473 0.740215 11.8536 0.646447C11.7598 0.552678 11.6326 0.5 11.5 0.5H4.5C4.36739 0.5 4.24021 0.552678 4.14645 0.646447C4.05268 0.740215 4 0.867392 4 1Z" />
                <path d="M13.991 7L14.015 7.001C14.2018 7.01372 14.3845 7.06227 14.553 7.144C14.6744 7.20048 14.7786 7.28812 14.855 7.398C14.922 7.498 15 7.675 15 8V13.991L14.999 14.015C14.9862 14.2018 14.9376 14.3845 14.856 14.553C14.7995 14.6743 14.7118 14.7785 14.602 14.855C14.502 14.922 14.325 15 14 15H2.009L1.985 14.999C1.79817 14.9862 1.61554 14.9376 1.447 14.856C1.32567 14.7995 1.22148 14.7118 1.145 14.602C1.078 14.502 1 14.325 1 14V8.009L1.001 7.985C1.01372 7.79815 1.06227 7.6155 1.144 7.447C1.20052 7.32567 1.28816 7.22148 1.398 7.145C1.498 7.078 1.675 7 2 7H13.991ZM14 6H2C0 6 0 8 0 8V14C0 16 2 16 2 16H14C16 16 16 14 16 14V8C16 6 14 6 14 6Z" />
              </svg>
              <span class="ms-2">Data Lokasi</span>
            </a>
          </li>
          <li>
            <a class="m-link" href="docs/w-cards.html">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                <path d="M4 1.5H3C2.46957 1.5 1.96086 1.71071 1.58579 2.08579C1.21071 2.46086 1 2.96957 1 3.5V14C1 14.5304 1.21071 15.0391 1.58579 15.4142C1.96086 15.7893 2.46957 16 3 16H13C13.5304 16 14.0391 15.7893 14.4142 15.4142C14.7893 15.0391 15 14.5304 15 14V3.5C15 2.96957 14.7893 2.46086 14.4142 2.08579C14.0391 1.71071 13.5304 1.5 13 1.5H12V2.5H13C13.2652 2.5 13.5196 2.60536 13.7071 2.79289C13.8946 2.98043 14 3.23478 14 3.5V14C14 14.2652 13.8946 14.5196 13.7071 14.7071C13.5196 14.8946 13.2652 15 13 15H3C2.73478 15 2.48043 14.8946 2.29289 14.7071C2.10536 14.5196 2 14.2652 2 14V3.5C2 3.23478 2.10536 2.98043 2.29289 2.79289C2.48043 2.60536 2.73478 2.5 3 2.5H4V1.5Z" />
                <path d="M9.5 1C9.63261 1 9.75979 1.05268 9.85355 1.14645C9.94732 1.24021 10 1.36739 10 1.5V2.5C10 2.63261 9.94732 2.75979 9.85355 2.85355C9.75979 2.94732 9.63261 3 9.5 3H6.5C6.36739 3 6.24021 2.94732 6.14645 2.85355C6.05268 2.75979 6 2.63261 6 2.5V1.5C6 1.36739 6.05268 1.24021 6.14645 1.14645C6.24021 1.05268 6.36739 1 6.5 1H9.5ZM6.5 0C6.10218 0 5.72064 0.158035 5.43934 0.43934C5.15804 0.720644 5 1.10218 5 1.5V2.5C5 2.89782 5.15804 3.27936 5.43934 3.56066C5.72064 3.84196 6.10218 4 6.5 4H9.5C9.89782 4 10.2794 3.84196 10.5607 3.56066C10.842 3.27936 11 2.89782 11 2.5V1.5C11 1.10218 10.842 0.720644 10.5607 0.43934C10.2794 0.158035 9.89782 0 9.5 0L6.5 0Z" />
                <path class="fill-secondary" d="M5.556 7.8225C5.54589 7.71838 5.55767 7.6133 5.59058 7.51401C5.6235 7.41472 5.67682 7.32341 5.74712 7.24595C5.81742 7.16849 5.90315 7.10659 5.9988 7.06424C6.09444 7.02188 6.19789 7 6.3025 7H7.5C7.5663 7 7.62989 7.02634 7.67678 7.07322C7.72366 7.12011 7.75 7.1837 7.75 7.25V7.441C7.75 7.789 7.5015 8.032 7.314 8.1755C7.29143 8.19154 7.27195 8.21153 7.2565 8.2345C7.25399 8.2384 7.25198 8.2426 7.2505 8.247L7.25 8.25V8.2515L7.2515 8.2565C7.2535 8.2615 7.2585 8.2705 7.2695 8.283C7.30776 8.32381 7.35362 8.35676 7.4045 8.38C7.545 8.45 7.755 8.5 8 8.5C8.246 8.5 8.456 8.45 8.595 8.38C8.64606 8.35681 8.69209 8.32386 8.7305 8.283C8.73784 8.27497 8.74391 8.26587 8.7485 8.256L8.75 8.251V8.247C8.74853 8.2426 8.74651 8.2384 8.744 8.2345C8.72855 8.21153 8.70907 8.19154 8.6865 8.1755C8.499 8.032 8.2505 7.789 8.2505 7.441V7.25C8.2505 7.18378 8.27677 7.12027 8.32355 7.0734C8.37032 7.02653 8.43378 7.00013 8.5 7H9.6975C9.80211 7 9.90556 7.02188 10.0012 7.06424C10.0968 7.10659 10.1826 7.16849 10.2529 7.24595C10.3232 7.32341 10.3765 7.41472 10.4094 7.51401C10.4423 7.6133 10.4541 7.71838 10.444 7.8225L10.3225 9.25H10.441C10.5385 9.25 10.651 9.1765 10.7785 9.01C10.8835 8.873 11.0425 8.75 11.25 8.75C11.534 8.75 11.7235 8.9735 11.827 9.181C11.9385 9.4035 12 9.6935 12 10C12 10.3065 11.9385 10.5965 11.827 10.819C11.7235 11.0265 11.534 11.25 11.25 11.25C11.0425 11.25 10.8835 11.127 10.7785 10.99C10.651 10.8235 10.5385 10.75 10.441 10.75H10.3225L10.444 12.1775C10.4541 12.2816 10.4423 12.3867 10.4094 12.486C10.3765 12.5853 10.3232 12.6766 10.2529 12.7541C10.1826 12.8315 10.0968 12.8934 10.0012 12.9358C9.90556 12.9781 9.80211 13 9.6975 13H8.5C8.4337 13 8.37011 12.9737 8.32322 12.9268C8.27634 12.8799 8.25 12.8163 8.25 12.75V12.559C8.25 12.211 8.4985 11.968 8.686 11.8245C8.70857 11.8085 8.72805 11.7885 8.7435 11.7655C8.74601 11.7616 8.74802 11.7574 8.7495 11.753L8.75 11.75V11.7485L8.7485 11.7435C8.74386 11.7338 8.7378 11.7249 8.7305 11.717C8.69225 11.6762 8.64639 11.6432 8.5955 11.62C8.455 11.55 8.245 11.5 8 11.5C7.7545 11.5 7.544 11.55 7.405 11.62C7.35393 11.6432 7.3079 11.6761 7.2695 11.717C7.26216 11.725 7.25609 11.7341 7.2515 11.744L7.25 11.749V11.75L7.2505 11.753C7.25198 11.7574 7.25399 11.7616 7.2565 11.7655C7.2645 11.779 7.2815 11.7995 7.314 11.8245C7.5015 11.968 7.75 12.211 7.75 12.559V12.75C7.75 12.8163 7.72366 12.8799 7.67678 12.9268C7.62989 12.9737 7.5663 13 7.5 13H6.3025C6.19789 13 6.09444 12.9781 5.9988 12.9358C5.90315 12.8934 5.81742 12.8315 5.74712 12.7541C5.67682 12.6766 5.6235 12.5853 5.59058 12.486C5.55767 12.3867 5.54589 12.2816 5.556 12.1775L5.678 10.75H5.559C5.4615 10.75 5.349 10.8235 5.2215 10.99C5.1165 11.127 4.9575 11.25 4.75 11.25C4.466 11.25 4.2765 11.0265 4.173 10.819C4.0615 10.5965 4 10.3065 4 10C4 9.6935 4.0615 9.4035 4.173 9.181C4.2765 8.9735 4.466 8.75 4.75 8.75C4.9575 8.75 5.1165 8.873 5.2215 9.01C5.349 9.1765 5.4615 9.25 5.559 9.25H5.678L5.556 7.8225Z" />
              </svg>
              <span class="ms-2">Generate Kelompok</span>
            </a>
          </li>
        </ul>

        <ul class="menu-list">
            <li class="divider py-2 lh-sm"><span class="small">Menu Peserta</li>
            <li>
              <a class="m-link" href="layouts.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M14 2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z" />
                  <path class="fill-secondary" d="M3 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
                </svg>
                <span class="ms-2">Daftar PPL</span>
              </a>
            </li>
            <li>
              <a class="m-link" href="modals.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                  <path class="fill-secondary" d="M2 3C2 3.13261 2.05268 3.25979 2.14645 3.35355C2.24021 3.44732 2.36739 3.5 2.5 3.5H13.5C13.6326 3.5 13.7598 3.44732 13.8536 3.35355C13.9473 3.25979 14 3.13261 14 3C14 2.86739 13.9473 2.74021 13.8536 2.64645C13.7598 2.55268 13.6326 2.5 13.5 2.5H2.5C2.36739 2.5 2.24021 2.55268 2.14645 2.64645C2.05268 2.74021 2 2.86739 2 3ZM4 1C4 1.13261 4.05268 1.25979 4.14645 1.35355C4.24021 1.44732 4.36739 1.5 4.5 1.5H11.5C11.6326 1.5 11.7598 1.44732 11.8536 1.35355C11.9473 1.25979 12 1.13261 12 1C12 0.867392 11.9473 0.740215 11.8536 0.646447C11.7598 0.552678 11.6326 0.5 11.5 0.5H4.5C4.36739 0.5 4.24021 0.552678 4.14645 0.646447C4.05268 0.740215 4 0.867392 4 1Z" />
                  <path d="M13.991 7L14.015 7.001C14.2018 7.01372 14.3845 7.06227 14.553 7.144C14.6744 7.20048 14.7786 7.28812 14.855 7.398C14.922 7.498 15 7.675 15 8V13.991L14.999 14.015C14.9862 14.2018 14.9376 14.3845 14.856 14.553C14.7995 14.6743 14.7118 14.7785 14.602 14.855C14.502 14.922 14.325 15 14 15H2.009L1.985 14.999C1.79817 14.9862 1.61554 14.9376 1.447 14.856C1.32567 14.7995 1.22148 14.7118 1.145 14.602C1.078 14.502 1 14.325 1 14V8.009L1.001 7.985C1.01372 7.79815 1.06227 7.6155 1.144 7.447C1.20052 7.32567 1.28816 7.22148 1.398 7.145C1.498 7.078 1.675 7 2 7H13.991ZM14 6H2C0 6 0 8 0 8V14C0 16 2 16 2 16H14C16 16 16 14 16 14V8C16 6 14 6 14 6Z" />
                </svg>
                <span class="ms-2">Lihat Kelompok</span>
              </a>
            </li>
          </ul>
      </div>
    </div>
  </div>
  <!-- start: body area -->
  <div class="wrapper">
    <!-- start: page header -->
    <header class="page-header sticky-top px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
      <div class="container-fluid">
        <nav class="navbar">
          <!-- start: toggle btn -->
          <div class="d-flex">
            <button type="button" class="btn btn-link d-none d-xl-block sidebar-mini-btn p-0 text-primary">
              <span class="hamburger-icon">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </span>
            </button>
            <button type="button" class="btn btn-link d-block d-xl-none menu-toggle p-0 text-primary">
              <span class="hamburger-icon">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </span>
            </button>
            <a href="./index.html" class="brand-icon d-flex align-items-center mx-2 mx-sm-3 text-primary">

            </a>
          </div>

          <!-- start: link -->
          <ul class="header-right justify-content-end d-flex align-items-center mb-0">
            <!-- start: notifications dropdown-menu -->

            <li>
              <div class="dropdown morphing scale-left user-profile mx-lg-3 mx-2">
                <a class="nav-link dropdown-toggle rounded-circle after-none p-0" href="#" role="button" data-bs-toggle="dropdown">
                  <img class="avatar img-thumbnail rounded-circle shadow" src="./assets/img/profile_av.png" alt="">
                </a>
                <div class="dropdown-menu border-0 rounded-4 shadow p-0">
                  <div class="card border-0 w240">
                    <div class="card-body border-bottom d-flex">
                      <img class="avatar rounded-circle" src="./assets/img/profile_av.png" alt="">
                      <div class="flex-fill ms-3">
                        <h6 class="card-title mb-0">Allie Grater</h6>
                        <span class="text-muted">alliegrater@luno.com</span>
                      </div>
                    </div>
                    <a href="./auth-signin.html" class="btn bg-secondary text-light text-uppercase rounded-0">Sign out</a>
                  </div>
                </div>
              </div>
            </li>
            <!-- start: Settings toggle modal -->
          </ul>
        </nav>
      </div>
    </header>
    <!-- start: page toolbar -->

    <!-- start: page body -->
    <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
      <div class="container-fluid">
        <div class="row g-3 row-deck">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card overflow-hidden">
              <div class="card-body">
                <svg class="position-absolute top-0 end-0 mt-4 me-3" xmlns="http://www.w3.org/2000/svg" width="26" fill="currentColor" viewBox="0 0 16 16">
                  <path class="fill-muted" d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                  <path class="fill-primary" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                </svg>
                <div class="mb-2 text-uppercase">NEW EMPLOYEE</div>
                <div><span class="h4">51</span> <span class="small text-muted"><i class="fa fa-level-up"></i> 13%</span></div>
                <small class="text-muted">Analytics for last week</small>
              </div>
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card overflow-hidden">
              <div class="card-body">
                <svg class="position-absolute top-0 end-0 mt-4 me-3" xmlns="http://www.w3.org/2000/svg" width="26" fill="currentColor" viewBox="0 0 16 16">
                  <path class="fill-muted" d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
                  <path class="fill-primary" d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                </svg>
                <div class="mb-2 text-uppercase">EXPENSE</div>
                <div><span class="h4">$3,251</span> <span class="small text-muted"><i class="fa fa-level-up"></i> 13%</span></div>
                <small class="text-muted">Analytics for last week</small>
              </div>
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 13%" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card overflow-hidden">
              <div class="card-body">
                <svg class="position-absolute top-0 end-0 mt-4 me-3" xmlns="http://www.w3.org/2000/svg" width="26" fill="currentColor" viewBox="0 0 16 16">
                  <path class="fill-primary" fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                  <path class="fill-primary" d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                  <path class="fill-muted" d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                  <path class="fill-muted" d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                </svg>
                <div class="mb-2 text-uppercase">Revenue</div>
                <div><span class="h4">$18,925</span> <span class="small text-muted"><i class="fa fa-level-up"></i> 78%</span></div>
                <small class="text-muted">Analytics for last week</small>
              </div>
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card overflow-hidden">
              <div class="card-body">
                <svg class="position-absolute top-0 end-0 mt-4 me-3" xmlns="http://www.w3.org/2000/svg" width="26" fill="currentColor" viewBox="0 0 16 16">
                  <path class="fill-muted" d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z" />
                  <path class="fill-primary" d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z" />
                </svg>
                <div class="mb-2 text-uppercase">NEW LEADS</div>
                <div><span class="h4">125</span> <span class="small text-muted"><i class="fa fa-level-up"></i> 55%</span></div>
                <small class="text-muted">Analytics for last week</small>
              </div>
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-xxl-6 col-xl-8 col-lg-8">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title m-0">LUNO Revenue</h6>
                <!-- widgest: Card more action icon -->
                <div class="dropdown morphing scale-left">
                  <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                  <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                  <ul class="dropdown-menu shadow border-0 p-2">
                    <li><a class="dropdown-item" href="#">File Info</a></li>
                    <li><a class="dropdown-item" href="#">Copy to</a></li>
                    <li><a class="dropdown-item" href="#">Move to</a></li>
                    <li><a class="dropdown-item" href="#">Rename</a></li>
                    <li><a class="dropdown-item" href="#">Block</a></li>
                    <li><a class="dropdown-item" href="#">Delete</a></li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <div id="apex-AudienceOverview"></div>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title mb-0">Sales by Category</h6>
                <!-- widgest: Card more action icon -->
                <div class="dropdown morphing scale-left">
                  <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                  <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                  <ul class="dropdown-menu shadow border-0 p-2">
                    <li><a class="dropdown-item" href="#">File Info</a></li>
                    <li><a class="dropdown-item" href="#">Copy to</a></li>
                    <li><a class="dropdown-item" href="#">Move to</a></li>
                    <li><a class="dropdown-item" href="#">Rename</a></li>
                    <li><a class="dropdown-item" href="#">Block</a></li>
                    <li><a class="dropdown-item" href="#">Delete</a></li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <div id="apex-SalesbyCategory"></div>
              </div>
            </div>
          </div>
        </div> <!-- .row end -->
      </div>
    </div>
    <!-- start: page footer -->
    <footer class="page-footer">
      <div class="container-fluid flex-wrap justify-content-between align-items-center">
        <p class="col-md-12 mb-0 text-muted text-center">© 2021 <a href="https://it.iainlangsa.ac.id/" target="_blank" title="ThemeMakker Infotech LLP">TIPD</a>, IAIN Langsa.</p>
      </div>
    </footer>
  </div>
  <!-- Modal: Create project -->
  <div class="modal fade" id="CreateNew" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
      <div class="modal-content rounded-0">
        <div class="modal-header">
          <h5 class="modal-title">Setup new project</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="progress bg-transparent" style="height: 3px;">
          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="5" style="width: 20%;"></div>
        </div>
        <div class="modal-body custom_scroll">
          <ul class="nav nav-tabs tab-card border-0 fs-6" role="tablist">
            <li class="nav-item flex-fill text-center"><a class="nav-link active" href="#step1" data-bs-toggle="tab" data-bs-step="1">1. Project</a></li>
            <li class="nav-item flex-fill text-center"><a class="nav-link" href="#step2" data-bs-toggle="tab" data-bs-step="3">2. Team</a></li>
            <li class="nav-item flex-fill text-center"><a class="nav-link" href="#step3" data-bs-toggle="tab" data-bs-step="4">3. File</a></li>
            <li class="nav-item flex-fill text-center"><a class="nav-link" href="#step4" data-bs-toggle="tab" data-bs-step="5">4. Completed</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="step1">
              <div class="card mb-2">
                <div class="card-body">
                  <h6 class="card-title mb-1">Project Type</h6>
                  <p class="text-muted small">If you need more info, please check out <a href="#">FAQ Page</a></p>
                  <!-- Custome redio input -->
                  <div class="c_radio d-flex flex-md-wrap">
                    <label class="m-1 w-100" for="Personal">
                      <input type="radio" name="plan" id="Personal" checked />
                      <span class="card">
                        <span class="card-body d-flex p-3">
                          <svg class="avatar" viewBox="0 0 16 16">
                            <path class="fill-muted" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                          </svg>
                          <span class="ms-3">
                            <span class="h6 d-flex mb-1">Personal Project</span>
                            <span class="text-muted">For smaller business, with simple salaries and pay schedules.</span>
                          </span>
                        </span>
                      </span>
                    </label>
                    <label class="m-1 w-100" for="Team">
                      <input type="radio" name="plan" id="Team" />
                      <span class="card">
                        <span class="card-body d-flex p-3">
                          <svg class="avatar" viewBox="0 0 16 16">
                            <path class="fill-muted" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path class="fill-muted" fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                            <path class="fill-muted" d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                          </svg>
                          <span class="ms-3">
                            <span class="h6 d-flex mb-1">Team Project</span>
                            <span class="text-muted">For growing business who wants to create a rewarding place to work.</span>
                          </span>
                        </span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="card mb-2">
                <div class="card-body">
                  <h6 class="card-title mb-1">Project Details</h6>
                  <p class="text-muted small">It is a long established fact that a reader will be distracted by Luno.</p>
                  <div class="form-floating mb-2">
                    <select class="form-select">
                      <option selected>Open this select menu</option>
                      <option value="1">Lucid</option>
                      <option value="2">LUNO</option>
                      <option value="3">Luno</option>
                    </select>
                    <label>Choose a Customer *</label>
                  </div>
                  <div class="form-floating mb-2">
                    <input type="text" class="form-control" placeholder="Project name">
                    <label>Project name *</label>
                  </div>
                  <div class="form-floating mb-2">
                    <textarea class="form-control" placeholder="Add project details" style="height: 100px"></textarea>
                    <label>Add project details</label>
                  </div>
                  <div class="form-floating mb-2">
                    <input type="date" class="form-control">
                    <label>Enter release Date *</label>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="text-muted">Allow Notifications *</div>
                    <div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="allow_phone" value="option1">
                        <label class="form-check-label" for="allow_phone">Phone</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="allow_email" value="option2">
                        <label class="form-check-label" for="allow_email">Email</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <button class="btn btn-lg bg-secondary text-light next text-uppercase">Add People</button>
              </div>
            </div>
            <div class="tab-pane fade" id="step2">
              <div class="card mb-3">
                <div class="card-body">
                  <h6 class="card-title mb-1">Build a Team</h6>
                  <p class="text-muted small">If you need more info, please check out <a href="#">Project Guidelines</a></p>
                  <div class="form-floating mb-4">
                    <input type="text" class="form-control" placeholder="Invite Teammates">
                    <label>Invite Teammates</label>
                  </div>
                  <h6 class="card-title mb-1">Team Members</h6>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="list-group6" checked="">
                    <label class="form-check-label text-muted" for="list-group6">Adding Users by Team Members</label>
                  </div>
                </div>
                <ul class="list-group list-group-flush list-group-custom custom_scroll mb-0" style="height: 300px;">
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="./assets/img/xs/avatar1.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">Angular Developer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="./assets/img/xs/avatar2.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Joge Lucky</div>
                      <small class="text-muted">ReactJs Developer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="./assets/img/xs/avatar3.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">NodeJs Developer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="./assets/img/xs/avatar4.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">Sr. Designer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="./assets/img/xs/avatar5.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">Designer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="./assets/img/xs/avatar6.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">Front-End Developer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="./assets/img/xs/avatar7.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">QA</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="./assets/img/xs/avatar8.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">Laravel Developer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                </ul>
              </div>
              <div class="text-center">
                <button class="btn btn-lg bg-secondary text-light next text-uppercase">Select Files</button>
              </div>
            </div>
            <div class="tab-pane fade" id="step3">
              <div class="card mb-3">
                <div class="card-body">
                  <h6 class="card-title mb-1">Upload Files</h6>
                  <div class="mb-4">
                    <label class="form-label small">Upload up to 10 files</label>
                    <input class="form-control" type="file" multiple>
                  </div>
                  <span>Already Uploaded File</span>
                </div>
                <ul class="list-group list-group-flush list-group-custom custom_scroll mb-0" style="height: 300px;">
                  <li class="list-group-item py-3">
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded no-thumbnail"><i class="fa fa-file-pdf-o text-danger"></i></div>
                      <div class="flex-fill ms-3 text-truncate">
                        <p class="mb-0 color-800">Annual Sales Report 2018-19</p>
                        <small class="text-muted">.pdf, 5.3 MB</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item py-3">
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded no-thumbnail"><i class="fa fa-file-excel-o text-success"></i></div>
                      <div class="flex-fill ms-3 text-truncate">
                        <p class="mb-0 color-800">Complete Product Sheet</p>
                        <small class="text-muted">.xls, 2.1 MB</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item py-3">
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded no-thumbnail"><i class="fa fa-file-word-o text-info"></i></div>
                      <div class="flex-fill ms-3 text-truncate">
                        <p class="mb-0 color-800">Marketing Guidelines</p>
                        <small class="text-muted">.doc, 2.3 MB</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item py-3">
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded no-thumbnail"><i class="fa fa-file-zip-o"></i></div>
                      <div class="flex-fill ms-3 text-truncate">
                        <p class="mb-0 color-800">Brand Photography</p>
                        <small class="text-muted">.zip, 30.5 MB</small>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="text-center">
                <button class="btn btn-lg bg-secondary text-light next text-uppercase">Advanced Options</button>
              </div>
            </div>
            <div class="tab-pane fade" id="step4">
              <div class="card text-center">
                <div class="card-body">
                  <h4 class="card-title mb-1">Project Created!</h4>
                  <span class="text-muted">If you need more info, please check how to create project</span>
                </div>
                <div class="card-body">
                  <button class="btn btn-lg bg-light first text-uppercase">Cretae new project</button>
                  <button class="btn btn-lg bg-secondary text-light text-uppercase">View project</button>
                </div>
                <div class="card-body">
                  <img class="img-fluid" src="./assets/img/project-team.svg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal: my notes -->
  <div class="modal fade" id="MynotesModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header px-4">
          <h5 class="modal-title">My Notes <span class="badge bg-danger ms-2">14</span></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="bg-light px-4 py-3">
          <ul class="nav nav-pills nav-fill" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#Notetab-all" role="tab" aria-selected="true">All Notes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#Notetab-Business" role="tab" aria-selected="false">Business</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#Notetab-Social" role="tab">Social</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#Notetab-Create" role="tab"><i class="fa fa-plus me-2"></i>New</a>
            </li>
          </ul>
        </div>
        <div class="modal-body px-4 custom_scroll">
          <div class="tab-content p-0">
            <div class="tab-pane fade active show" id="Notetab-all" role="tabpanel">
              <div class="card ribbon mb-2">
                <div class="option-2 bg-primary position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">02 January 2021</span>
                  <p class="lead">Give Review for design</p>
                  <span>It has roots in a piece of classical Latin literature from 45 BC, making it over 2020 years old.</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
              <div class="card ribbon mb-2">
                <div class="option-2 bg-success position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">17 January 2022</span>
                  <p class="lead">Give salary to employee</p>
                  <span>The generated Lorem Ipsum is therefore always free from repetition</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
              <div class="card ribbon mb-2">
                <div class="option-2 bg-info position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">02 Fabruary 2020</span>
                  <p class="lead">Launch new template</p>
                  <span>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
              <div class="card ribbon mb-2">
                <div class="option-2 bg-dark position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">22 August 2021</span>
                  <p class="lead">Nightout with friends</p>
                  <span>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
              <div class="card ribbon mb-2">
                <div class="option-2 bg-danger position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">01 December 2021</span>
                  <p class="lead">Change a Design</p>
                  <span> It has survived not only five centuries, but also the leap into electronic</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
              <div class="card ribbon mb-2">
                <div class="option-2 bg-warning position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">10 December 2021</span>
                  <p class="lead">Meeting with Mr.Lee</p>
                  <span>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Notetab-Business" role="tabpanel">
              <div class="card ribbon mb-2">
                <div class="option-2 bg-warning position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">10 December 2021</span>
                  <p class="lead">Meeting with Mr.Lee</p>
                  <span>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
              <div class="card ribbon mb-2">
                <div class="option-2 bg-danger position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">01 December 2021</span>
                  <p class="lead">Change a Design</p>
                  <span> It has survived not only five centuries, but also the leap into electronic</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Notetab-Social" role="tabpanel">
              <div class="card ribbon mb-2">
                <div class="option-2 bg-dark position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">22 August 2021</span>
                  <p class="lead">Nightout with friends</p>
                  <span>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Notetab-Create" role="tabpanel">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" placeholder="Note Title">
                <label>Note Title</label>
              </div>
              <div class="form-floating mb-2">
                <input type="text" class="form-control datepicker" placeholder="Select Date">
                <label>Select Date</label>
              </div>
              <div class="form-floating mb-2">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                  <option selected>Open this select menu</option>
                  <option value="1">Business</option>
                  <option value="2">Social</option>
                </select>
                <label>Works with selects</label>
              </div>
              <div class="form-floating mb-4">
                <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
                <label>Leave a comment here</label>
              </div>
              <button type="button" class="btn btn-primary lift">Save note</button>
              <button type="button" class="btn btn-white border lift" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal: Schedule -->
  <div class="modal fade" id="ScheduleModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header bg-secondary rounded-0">
          <h5 class="modal-title text-light">Schedule</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body custom_scroll">
          <div class="ps-2">
            <!--Timeline item-->
            <div class="timeline-item ti-primary p-3">
              <div class="avatar sm rounded-circle no-thumbnail">
                <i class="fa fa-phone"></i>
              </div>
              <div class="timeline-content ms-3">
                <div>Call Danny at Colby's</div>
                <small class="text-muted">Today - 11:32am</small>
              </div>
            </div>
            <!--Timeline item-->
            <div class="timeline-item ti-info p-3">
              <div class="timeline-icon">
                <img class="avatar sm rounded-circle" src="./assets/img/xs/avatar1.jpg" alt="">
              </div>
              <div class="timeline-content ms-3">
                <div>Meeting with Alice</div>
                <small class="text-muted">Today - 12:50pm</small>
              </div>
            </div>
            <!--Timeline item-->
            <div class="timeline-item ti-danger p-3">
              <div class="avatar sm rounded-circle no-thumbnail">
                <i class="fa fa-comment"></i>
              </div>
              <div class="timeline-content ms-3">
                <div>Answer Annie's message</div>
                <small class="text-muted">Today - 01:35pm</small>
              </div>
            </div>
            <!--Timeline item-->
            <div class="timeline-item ti-danger p-3">
              <div class="avatar sm rounded-circle no-thumbnail">
                <i class="fa fa-phone"></i>
              </div>
              <div class="timeline-content ms-3">
                <div>Send new campaign</div>
                <small class="text-muted">Today - 02:40pm</small>
              </div>
            </div>
            <!--Timeline item-->
            <div class="timeline-item ti-primary p-3">
              <div class="avatar sm rounded-circle no-thumbnail">
                <i class="fa fa-smile-o"></i>
              </div>
              <div class="timeline-content ms-3">
                <div>Project review</div>
                <small class="text-muted">Today - 03:15pm</small>
              </div>
            </div>
            <!--Timeline item-->
            <div class="timeline-item ti-warning p-3">
              <div class="avatar sm rounded-circle no-thumbnail">
                <i class="fa fa-phone"></i>
              </div>
              <div class="timeline-content ms-3">
                <div>Call Trisha Jackson</div>
                <small class="text-muted">Today - 05:40pm</small>
              </div>
            </div>
            <!--Timeline item-->
            <div class="timeline-item ti-success p-3">
              <div class="avatar sm rounded-circle no-thumbnail">
                <i class="fa fa-leaf"></i>
              </div>
              <div class="timeline-content ms-3">
                <div>Write proposal for Don</div>
                <small class="text-muted">Today - 06:30pm</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal: RecentChat -->
  <div class="modal fade" id="RecentChat" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
      <div class="modal-content">
        <div class="d-flex align-items-start">
          <div class="nav flex-column nav-pills p-3 h-100">
            <a class="nav-link rounded-circle p-1 mb-2 active" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar1.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-2" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar2.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-3" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar3.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-2" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar4.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-5" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar5.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar6.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-7" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar7.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-3" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar8.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-3" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar9.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar10.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar5.jpg" alt="avatar">
            </a>
          </div>
          <div class="tab-content shadow-sm">
            <div class="tab-pane fade show active" id="c-user-1" role="tabpanel">
              <div class="card">
                <!-- start: chat header -->
                <div class="card-header border-bottom py-3">
                  <div class="d-flex">
                    <a href="javascript:void(0);" title="">
                      <img class="avatar rounded-circle" src="./assets/img/xs/avatar1.jpg" alt="avatar">
                    </a>
                    <div class="ms-3">
                      <h6 class="mb-0">Orlando Lentz</h6>
                      <small class="text-muted">Last seen: 2 hours ago</small>
                    </div>
                  </div>
                  <div class="dropdown morphing scale-left">
                    <a class="nav-link p-2 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-camera"></i></a>
                    <a class="nav-link p-2 me-1 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-video-camera"></i></a>
                    <a class="nav-link py-2 px-3 text-muted d-inline-block d-xl-none" data-bs-dismiss="modal" aria-label="Close" href="#"><i class="fa fa-close"></i></a>
                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                    <ul class="dropdown-menu shadow border-0 p-2">
                      <li><a class="dropdown-item" href="#">File Info</a></li>
                      <li><a class="dropdown-item" href="#">Copy to</a></li>
                      <li><a class="dropdown-item" href="#">Move to</a></li>
                      <li><a class="dropdown-item" href="#">Rename</a></li>
                      <li><a class="dropdown-item" href="#">Block</a></li>
                      <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                  </div>
                </div>
                <!-- start: chat body -->
                <div class="card-body custom_scroll" style="height: calc(100vh - 141px);">
                  <ul class="list-unstyled chat-history flex-grow-1">
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar1.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message"> Hi Aiden, how are you?</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: right -->
                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                      <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                          <span class="text-muted small">10:12 AM, Today</span>
                        </div>
                        <div class="card border-0 p-3 bg-primary text-light">
                          <div class="message">Are we meeting today?</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar1.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar1.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message"> Contrary to popular belief, Lorem Ipsum is not simply random text.</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: right -->
                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                      <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                          <span class="text-muted small">10:12 AM, Today</span>
                        </div>
                        <div class="card border-0 p-3 bg-primary text-light">
                          <div class="message">Yes, Orlando Allredy done <br> There are many variations of passages of Lorem Ipsum available</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar1.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message">
                            <p>Please find attached images</p>
                            <img class="w120 img-thumbnail" src="./assets/img/gallery/3.jpg" alt="">
                            <img class="w120 img-thumbnail" src="./assets/img/gallery/4.jpg" alt="">
                          </div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: right -->
                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                      <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                          <span class="text-muted small">10:12 AM, Today</span>
                        </div>
                        <div class="card border-0 p-3 bg-primary text-light">
                          <div class="message">Okay, will check and let you know.</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- start: chat footer -->
                <div class="card-footer border-top bg-transparent py-3 px-4">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter text here...">
                    <button class="btn btn-primary" type="button">Send</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade show active" id="c-user-2" role="tabpanel">
              <div class="card">
                <!-- start: chat header -->
                <div class="card-header border-bottom py-3">
                  <div class="d-flex">
                    <a href="javascript:void(0);" title="">
                      <img class="avatar rounded-circle" src="./assets/img/xs/avatar2.jpg" alt="avatar">
                    </a>
                    <div class="ms-3">
                      <h6 class="mb-0">Orlando Lentz</h6>
                      <small class="text-muted">Last seen: 2 hours ago</small>
                    </div>
                  </div>
                  <div class="dropdown morphing scale-left">
                    <a class="nav-link p-2 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-camera"></i></a>
                    <a class="nav-link p-2 me-1 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-video-camera"></i></a>
                    <a class="nav-link py-2 px-3 text-muted d-inline-block d-xl-none" data-bs-dismiss="modal" aria-label="Close" href="#"><i class="fa fa-close"></i></a>
                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                    <ul class="dropdown-menu shadow border-0 p-2">
                      <li><a class="dropdown-item" href="#">File Info</a></li>
                      <li><a class="dropdown-item" href="#">Copy to</a></li>
                      <li><a class="dropdown-item" href="#">Move to</a></li>
                      <li><a class="dropdown-item" href="#">Rename</a></li>
                      <li><a class="dropdown-item" href="#">Block</a></li>
                      <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                  </div>
                </div>
                <!-- start: chat body -->
                <div class="card-body custom_scroll" style="height: calc(100vh - 141px);">
                  <ul class="list-unstyled chat-history flex-grow-1">
                    <!-- Chat: right -->
                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                      <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                          <span class="text-muted small">10:12 AM, Today</span>
                        </div>
                        <div class="card border-0 p-3 bg-primary text-light">
                          <div class="message">Are we meeting today?</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar2.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message"> Hi Aiden, how are you?</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: right -->
                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                      <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                          <span class="text-muted small">10:12 AM, Today</span>
                        </div>
                        <div class="card border-0 p-3 bg-primary text-light">
                          <div class="message">Yes, Orlando Allredy done <br> There are many variations of passages of Lorem Ipsum available</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar2.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message">
                            <p>Please find attached images</p>
                            <img class="w120 img-thumbnail" src="./assets/img/gallery/1.jpg" alt="">
                            <img class="w120 img-thumbnail" src="./assets/img/gallery/2.jpg" alt="">
                          </div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: right -->
                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                      <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                          <span class="text-muted small">10:12 AM, Today</span>
                        </div>
                        <div class="card border-0 p-3 bg-primary text-light">
                          <div class="message">Okay, will check and let you know.</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar2.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar2.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message"> Contrary to popular belief, Lorem Ipsum is not simply random text.</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- start: chat footer -->
                <div class="card-footer border-top bg-transparent py-3 px-4">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter text here...">
                    <button class="btn btn-primary" type="button">Send</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal: Setting -->
  <div class="modal fade" id="SettingsModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical right-side modal-dialog-scrollable">
      <div class="modal-content">
        <div class="px-xl-4 modal-header">
          <h5 class="modal-title">Theme Setting</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="px-xl-4 modal-body custom_scroll">
          <!-- start: color setting -->
          <div class="card fieldset border border-primary p-3 setting-theme mb-4">
            <span class="fieldset-tile text-primary bg-card">Color Settings</span>
            <ul class="list-unstyled d-flex choose-skin mb-0">
              <li data-theme="black">
                <div class="black"></div>
              </li>
              <li data-theme="indigo">
                <div class="indigo"></div>
              </li>
              <li data-theme="blue">
                <div class="blue"></div>
              </li>
              <li data-theme="cyan">
                <div class="cyan"></div>
              </li>
              <li data-theme="green">
                <div class="green"></div>
              </li>
              <li data-theme="orange">
                <div class="orange"></div>
              </li>
              <li data-theme="blush">
                <div class="blush"></div>
              </li>
              <li data-theme="red">
                <div class="red"></div>
              </li>
              <li data-theme="dynamic">
                <div class="dynamic"><i class="fa fa-paint-brush"></i></div>
              </li>
            </ul>
            <!-- Settings: Theme dynamics -->
            <div class="card fieldset border border-primary p-3 dt-setting mt-4">
              <span class="fieldset-tile text-primary bg-card">Dynamic Color Settings</span>
              <div class="row g-3">
                <div class="col-7">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <button id="primaryColorPicker" class="btn bg-primary avatar xs me-2"></button>
                      <label>Primary Color</label>
                    </li>
                    <li>
                      <button id="secondaryColorPicker" class="btn bg-secondary avatar xs me-2"></button>
                      <label>Secondary Color</label>
                    </li>
                    <li>
                      <button id="BodyColorPicker" class="btn btn-outline-secondary bg-body avatar xs me-2"></button>
                      <label>Site Background</label>
                    </li>
                    <li>
                      <button id="CardColorPicker" class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
                      <label>Widget Background</label>
                    </li>
                    <li>
                      <button id="BorderColorPicker" class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
                      <label>Border Color</label>
                    </li>
                  </ul>
                </div>
                <div class="col-5">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <button id="chartColorPicker1" class="btn chart-color1 avatar xs me-2"></button>
                      <label>Chart Color 1</label>
                    </li>
                    <li>
                      <button id="chartColorPicker2" class="btn chart-color2 avatar xs me-2"></button>
                      <label>Chart Color 2</label>
                    </li>
                    <li>
                      <button id="chartColorPicker3" class="btn chart-color3 avatar xs me-2"></button>
                      <label>Chart Color 3</label>
                    </li>
                    <li>
                      <button id="chartColorPicker4" class="btn chart-color4 avatar xs me-2"></button>
                      <label>Chart Color 4</label>
                    </li>
                    <li>
                      <button id="chartColorPicker5" class="btn chart-color5 avatar xs me-2"></button>
                      <label>Chart Color 5</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- start: Light/dark -->
          <div class="card fieldset border setting-mode mb-4">
            <span class="fieldset-tile bg-card">Light/Dark & Contrast Layout</span>
            <div class="c_radio d-flex text-center">
              <label class="m-1 theme-switch" for="theme-switch">
                <input type="checkbox" id="theme-switch" />
                <span class="card p-2">
                  <img class="img-fluid" src="./assets/img/dark-version.svg" alt="Dark Mode" />
                </span>
              </label>
              <label class="m-1 theme-dark" for="theme-dark">
                <input type="checkbox" id="theme-dark" />
                <span class="card p-2">
                  <img class="img-fluid" src="./assets/img/dark-theme.svg" alt="Theme Dark Mode" />
                </span>
              </label>
              <label class="m-1 theme-high-contrast" for="theme-high-contrast">
                <input type="checkbox" id="theme-high-contrast" />
                <span class="card p-2">
                  <img class="img-fluid" src="./assets/img/high-version.svg" alt="High Contrast" />
                </span>
              </label>
              <label class="m-1 theme-rtl" for="theme-rtl">
                <input type="checkbox" id="theme-rtl" />
                <span class="card p-2">
                  <img class="img-fluid" src="./assets/img/rtl-version.svg" alt="RTL Mode!" />
                </span>
              </label>
            </div>
          </div>
          <!-- start: Font setting -->
          <div class="card fieldset border setting-font">
            <span class="fieldset-tile bg-card">Google Font Settings</span>
            <div class="c_radio d-flex text-center font_setting">
              <label class="m-1" for="font-opensans">
                <input type="radio" name="font" id="font-opensans" value="font-opensans" />
                <span class="card p-2">
                  <img class="img-fluid" src="./assets/img/font-opensans.svg" alt="Dark Mode" />
                </span>
              </label>
              <label class="m-1" for="font-quicksand">
                <input type="radio" name="font" id="font-quicksand" value="font-quicksand" />
                <span class="card p-2">
                  <img class="img-fluid" src="./assets/img/font-quicksand.svg" alt="Dark Mode" />
                </span>
              </label>
              <label class="m-1" for="font-nunito">
                <input type="radio" name="font" id="font-nunito" value="font-nunito" checked="" />
                <span class="card p-2">
                  <img class="img-fluid" src="./assets/img/font-nunito.svg" alt="Dark Mode" />
                </span>
              </label>
              <label class="m-1" for="font-raleway">
                <input type="radio" name="font" id="font-raleway" value="font-raleway" />
                <span class="card p-2">
                  <img class="img-fluid" src="./assets/img/font-raleway.svg" alt="Dark Mode" />
                </span>
              </label>
            </div>
          </div>
          <!-- start: Dynamic Font Settings -->
          <div class="m-1 p-3 bg-body rounded-4 mb-4">
            <p>Dynamic Font Settings</p>
            <div class="mb-2">
              <label class="form-label small text-muted mb-0">Enter font URL</label>
              <input id="font_url" type="text" class="form-control" placeholder="http://fonts.cdnfonts.com/css/vonfont">
            </div>
            <div class="mb-3">
              <label class="form-label small text-muted mb-0">Enter font family name</label>
              <input id="font_family" type="text" class="form-control" placeholder="vonfont">
            </div>
            <button id="font_apply" type="submit" class="btn btn-primary">Save Changes</button>
            <button id="font_cancel" type="submit" class="btn btn-secondary">Clear Changes</button>
          </div>
          <!-- start: Extra setting -->
          <div class="setting-more mb-4">
            <h6 class="card-title">More Setting</h6>
            <ul class="list-group list-group-flush list-group-custom fs-6">
              <!-- Settings: Horizontal menu version -->
              <li class="list-group-item">
                <div class="form-check form-switch h-menu-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="h_menu">
                  <label class="form-check-label" for="h_menu">Horizontal Menu Version</label>
                </div>
              </li>
              <!-- Settings: page header top Fix -->
              <li class="list-group-item">
                <div class="form-check form-switch pageheader-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="PageHeader" checked>
                  <label class="form-check-label" for="PageHeader">Page Header Fix</label>
                </div>
              </li>
              <!-- Settings: page header Dark version  -->
              <li class="list-group-item">
                <div class="form-check form-switch pageheader-dark-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="PageHeader_dark">
                  <label class="form-check-label" for="PageHeader_dark">Page Header Dark Mode</label>
                </div>
              </li>
              <!-- Settings: Border radius -->
              <li class="list-group-item">
                <div class="form-check form-switch radius-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="BorderRadius">
                  <label class="form-check-label" for="BorderRadius">Border Radius none</label>
                </div>
              </li>
              <!-- Settings: sidebar version 2 -->
              <li class="list-group-item">
                <div class="form-check form-switch sidebar-v2 mb-1">
                  <input class="form-check-input" type="checkbox" id="sidebar_v2">
                  <label class="form-check-label" for="sidebar_v2">Sidebar Version 2</label>
                </div>
              </li>
              <!-- Settings: sidebar dark -->
              <li class="list-group-item">
                <div class="form-check form-switch sidebardark-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="SidebarDark">
                  <label class="form-check-label" for="SidebarDark">Enable Dark! ( Sidebar )</label>
                </div>
              </li>
              <!-- Settings: Sidebar bg image -->
              <li class="list-group-item setting-img">
                <div class="form-check form-switch imagebg-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="CheckImage">
                  <label class="form-check-label" for="CheckImage">Background Image (Sidebar)</label>
                </div>
                <div class="bg-images">
                  <ul class="list-unstyled d-flex">
                    <li class="sidebar-img-1 me-1 sidebar-img-active"><a class="rounded sidebar-img" id="img-1" href="#"><img src="./assets/img/sidebar-bg/sidebar-1.jpg" alt="" /></a></li>
                    <li class="sidebar-img-2 me-1"><a class="rounded sidebar-img" id="img-2" href="#"><img src="./assets/img/sidebar-bg/sidebar-2.jpg" alt="" /></a></li>
                    <li class="sidebar-img-3 me-1"><a class="rounded sidebar-img" id="img-3" href="#"><img src="./assets/img/sidebar-bg/sidebar-3.jpg" alt="" /></a></li>
                    <li class="sidebar-img-4 me-1"><a class="rounded sidebar-img" id="img-4" href="#"><img src="./assets/img/sidebar-bg/sidebar-4.jpg" alt="" /></a></li>
                    <li class="sidebar-img-5 me-1"><a class="rounded sidebar-img" id="img-5" href="#"><img src="./assets/img/sidebar-bg/sidebar-5.jpg" alt="" /></a></li>
                  </ul>
                </div>
              </li>
              <!-- Settings: Container Fluid -->
              <li class="list-group-item">
                <div class="form-check form-switch fluid-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="fluidLayout" checked="">
                  <label class="form-check-label" for="fluidLayout">Container Fluid</label>
                </div>
              </li>
              <!-- Settings: Card box shadow  -->
              <li class="list-group-item">
                <div class="form-check form-switch shadow-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="card_shadow">
                  <label class="form-check-label" for="card_shadow">Card Box-Shadow</label>
                </div>
              </li>
            </ul>
          </div>
          <!-- start: Extra link, please do not add in your project -->
          <div class="mb-4">
            <a class="btn lift  btn-outline-secondary" href="./marketing/index.html">Marketing page</a>
            <a class="btn lift  btn-outline-secondary" href="./onepgae-uikit/onepage.html">Landing page</a>
            <a class="btn lift  btn-outline-secondary" href="./onepgae-uikit/index.html">One page Ui Kit Elements</a>
          </div>
        </div>
        <div class="px-xl-4 modal-footer d-flex justify-content-start text-center">
          <button type="button" class="btn flex-fill btn-primary lift">Save Changes</button>
          <button type="button" class="btn flex-fill btn-white border lift" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Jquery Page Js -->
  <!-- Jquery Page Js -->
  <script src="./assets/js/theme.js"></script>
  <!-- Plugin Js -->
  <script src="./assets/js/bundle/apexcharts.bundle.js"></script>
  <!-- Vendor Script -->
  <script src="./assets/js/bundle/apexcharts.bundle.js"></script>
  <script>
    // LUNO Revenue
    var options = {
      series: [{
        name: 'Income',
        data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
      }, {
        name: 'Expenses',
        data: [123, 142, 135, 127, 143, 122, 117, 131, 122, 122, 112, 116]
      }, {
        name: 'Revenue',
        data: [223, 242, 235, 227, 243, 222, 217, 231, 222, 222, 212, 216]
      }],
      chart: {
        type: 'bar',
        height: 260,
        stacked: true,
        stackType: '100%',
        toolbar: {
          show: false,
        },
      },
      colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
      responsive: [{
        breakpoint: 480,
        options: {
          legend: {
            position: 'bottom',
            offsetX: -10,
            offsetY: 0
          }
        }
      }],
      xaxis: {
        categories: ['Jan', 'Feb', 'March', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
      },
      fill: {
        opacity: 1
      },
      dataLabels: {
        enabled: false,
      },
      legend: {
        position: 'bottom',
        horizontalAlign: 'center',
      },
    };
    var chart = new ApexCharts(document.querySelector("#apex-AudienceOverview"), options);
    chart.render();
    // Sales by Category
    var options = {
      chart: {
        height: 280,
        type: 'donut',
      },
      plotOptions: {
        pie: {
          donut: {
            labels: {
              show: true,
              total: {
                showAlways: true,
                show: true
              }
            }
          }
        }
      },
      dataLabels: {
        enabled: false,
      },
      legend: {
        position: 'bottom',
        horizontalAlign: 'center',
        show: true,
      },
      colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
      series: [55, 35, 10],
    }
    var chart = new ApexCharts(document.querySelector("#apex-SalesbyCategory"), options);
    chart.render();
  </script>
</body>

</html>
