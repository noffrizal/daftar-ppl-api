@extends('layouts.main')
@push('css')
    <link rel="stylesheet" href="{{ asset('/assets/cssbundle/dataTables.min.css') }}">
@endpush
@section('content')
<div class="col-md-12 mt-4">
    <div class="card">
      <div class="card-body">
        <button type="button" class="btn btn-success mb-2">Tambah Data</button>
        <button type="button" class="btn btn-warning mb-2">Import Excel</button>
        <table id="myTable" class="table display dataTable table-hover" style="width:100%">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Fakultas</th>
              <th>Kuota</th>
              <th>Status</th>
              <th>Aksi</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="sorting_1">Tiger Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
              <td>
                <button type="button" class="btn btn-outline-primary">Edit</button>
                <button type="button" class="btn btn-outline-primary">Hapus</button>
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
