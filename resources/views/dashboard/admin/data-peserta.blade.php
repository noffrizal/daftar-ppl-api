@extends('layouts.main')
@push('css')
    <link rel="stylesheet" href="{{ asset('/assets/cssbundle/dataTables.min.css') }}">
@endpush
@section('content')
<div class="col-md-12 mt-4">
    <div class="card">
      <div class="card-body">

        <button type="button" class="btn btn-success mb-2">Tambah Data</button>
        <button type="button" class="btn btn-warning mb-2">Export Excel</button>

        <table id="myTable" class="table display dataTable table-hover text-center" style="width:100%">
          <thead>
            <tr>
              <th>NIM</th>
              <th>Nama</th>
              <th>Foto</th>
              <th>Aksi</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="sorting_1">Tiger Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>
                <button type="button" class="btn btn-outline-primary">Detail</button>
                <button type="button" class="btn btn-outline-primary">Edit</button>
                <button type="button" class="btn btn-outline-primary">Hapus</button>
                <button type="button" class="btn btn-outline-primary">Cetak</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
@push('js')
<script src="{{ asset('/assets/js/bundle/dataTables.bundle.js') }}"></script>
<script>
  $(document).ready(function() {
    $('#myTable').addClass('nowrap').dataTable({
      responsive: true,
    });
  });
</script>
@endpush
