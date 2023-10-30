@extends('dashboard.layout.master')
@section('content')
    <!-- Button trigger modal -->
<button type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#tambah">
  <i class="fa fa-plus"></i> Tambah
</button>

<table class="table table-striper table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">SBP</th>
      <th scope="col">DBP</th>
      <th scope="col">Kolesterol</th>
      <th scope="col">Status Tekanan Darah</th>
      <th scope="col">Status Kadar Kolesterol</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cks as $ck)
        <tr>
            <td scope="row">{{ $loop->index + 1 }}</td>
            <td>{{ $ck->tanggal }}</td>
            <td>{{ $ck->sbp }}</td>
            <td>{{ $ck->dbp }}</td>
            <td>{{ $ck->kolesterol }}</td>
            <td>{{ $ck->status_tekanan_darah }}</td>
            <td>{{ $ck->status_kadar_kolesterol }}</td>
            <td>
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubah"
              onclick="setData('{{ $ck->id }}', '{{ $ck->sbp }}', '{{ $ck->dbp }}', '{{ $ck->kolesterol }}', '{{ $ck->tanggal }}')">
                <i class="fa fa-edit"></i>
              </button>
                <a href="/catatan_kesehatan/{{ $ck->id }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>

{{ $cks->links() }}

 <!-- Modal -->
<div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tambahLabel">Tambah</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/catatan_kesehatan" method="post" id="tambahForm">
            @csrf
            <div class="mb-3">
                <label>Tekanan Darah Sistolik</label>
                <div class="input-group">
                    <input type="number" class="form-control" name="sbp" placeholder="Sistolik Blood Pressure (SBP)">
                    <span class="input-group-text" id="basic-addon2">mmHg</span>
                </div>
            </div>
            <div class="mb-3">
                <label>Tekanan Darah Diastolik</label>
                <div class="input-group">
                    <input type="number" class="form-control" name="dbp" placeholder="Diastolik Blood Pressure (DBP)">
                    <span class="input-group-text" id="basic-addon2">mmHg</span>
                </div>
            </div>
            <div class="mb-3">
                <label>Kadar Kolesterol</label>
                <div class="input-group">
                    <input type="number" class="form-control" name="kolesterol" placeholder="Colesterol">
                    <span class="input-group-text" id="basic-addon2">mg/DL</span>
                </div>
            </div>
            <div class="mb-3">
                <label>Tanggal</label>
                <input type="date" class="form-control" name="tanggal">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" form="tambahForm">Submit</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ubah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ubahLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ubahLabel">Ubah</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" id="ubahForm">
            @csrf
            @method('put')
            <div class="mb-3">
                <label>Tekanan Darah Sistolik</label>
                <div class="input-group">
                    <input type="number" class="form-control" name="sbp" id="uSBP" placeholder="Sistolik Blood Pressure (SBP)">
                    <span class="input-group-text" id="basic-addon2">mmHg</span>
                </div>
            </div>
            <div class="mb-3">
                <label>Tekanan Darah Diastolik</label>
                <div class="input-group">
                    <input type="number" class="form-control" name="dbp" id="uDBP" placeholder="Diastolik Blood Pressure (DBP)">
                    <span class="input-group-text" id="basic-addon2">mmHg</span>
                </div>
            </div>
            <div class="mb-3">
                <label>Kadar Kolesterol</label>
                <div class="input-group">
                    <input type="number" class="form-control" name="kolesterol" id="uKolesterol" placeholder="Colesterol">
                    <span class="input-group-text" id="basic-addon2">mg/DL</span>
                </div>
            </div>
            <div class="mb-3">
                <label>Tanggal</label>
                <input type="date" class="form-control" name="tanggal" id="uTanggal">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" form="ubahForm">Submit</button>
      </div>
    </div>
  </div>
</div>

<script>
  function setData(id, sbp, dbp, kolesterol, tanggal) {
    ubahForm.action = '/catatan_kesehatan/' + id;
    uSBP.value = sbp;
    uDBP.value = dbp;
    uKolesterol.value = kolesterol;
    uTanggal.value = tanggal;
  }
</script>
@endsection