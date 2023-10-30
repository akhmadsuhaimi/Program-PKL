@if(count($results) > 0)
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Kode Program</th>
        <th>Program</th>
        <th>PPTK</th>
        <th>Tanggal</th>
        <th>Status</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
      @foreach($results as $item)
        <tr>
          <td>{{ $item->kode_program }}</td>
          <td>{{ $item->program }}</td>
          <td>{{ $item->pptk }}</td>
          <td>{{ date('d-m-Y', strtotime($item->tgl)) }}</td>
          <td>{{ $item->status }}</td>
          <td>
            <button type="button" class="btn btn-info open-modal-btn" data-toggle="modal" data-target="#detailspj{{ $item->id }}">Open Modal</button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  
@else
  <p>No results found.</p>
@endif