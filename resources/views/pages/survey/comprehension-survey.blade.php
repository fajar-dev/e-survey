@extends('layouts.app')

@section('content')
<div class="card card-flush">
  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
    <div class="card-title">
      <h3 class="card-title align-items-start flex-column">
        <span class="card-label fw-bold fs-3 mb-1">{{$title}}</span>
        <span class="text-muted fw-semibold fs-7">{{$subTitle}}</span>
      </h3>
    </div>
    <div class="card-toolbar">
      <a href="{{ route('comprehension-survey.export')}}" id="submit" class="btn btn-primary">
        <span class="indicator-label">
          <div class="d-flex align-items-center">
            <i class="ki-duotone ki-file-down fs-3 pe-3">
              <span class="path1"></span>
              <span class="path2"></span>
            </i>
            Export
          </div>
        </span>
        <span class="indicator-progress" style="display: none;">Loading... 
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
        </span>
      </a>
    </div>
  </div>
  <div class="card-body pt-0">
    <div class="table-responsive">
      <table id="table" class="table table-row-dashed fs-6 gy-5">
        <thead>
          <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
            <th class="min-w-200px">Nama</th>
            <th class="min-w-200px">Fakultas</th>
            <th class="min-w-500px">1. Apakah Anda memahami langkah-langkah yang harus diikuti untuk mengajukan proposal penelitian di universitas ini?</th>
            <th class="min-w-500px">2. Sejauh mana Anda mengetahui panduan etika penelitian yang berlaku di universitas ini?</th>
            <th class="min-w-500px">3. Bagaimana tingkat pemahaman Anda mengenai prosedur penggunaan dana penelitian yang telah disetujui?</th>
            <th class="min-w-500px">4. Apakah Anda familiar dengan tahapan pelaporan kemajuan penelitian yang harus dilakukan selama proyek berlangsung?</th>
            <th class="min-w-500px">5. Seberapa baik Anda memahami prosedur pengajuan perubahan atau revisi dalam pelaksanaan penelitian?</th>
            <th class="min-w-500px">6. Apakah Anda mengetahui kebijakan dan panduan terkait hak kekayaan intelektual dalam hasil penelitian yang dilakukan di universitas ini?</th>
            <th class="min-w-500px">7. Bagaimana tingkat pemahaman Anda terhadap prosedur pengabdian masyarakat yang berlaku di universitas ini?</th>
            <th class="min-w-500px">8. Sejauh mana Anda memahami kriteria evaluasi dan penilaian hasil penelitian yang diterapkan oleh universitas?</th>
            <th class="min-w-500px">9. Apakah Anda mengetahui mekanisme pertanggungjawaban keuangan yang harus dilaporkan dalam proyek pengabdian masyarakat?</th>
            <th class="min-w-500px">10. Bagaimana tingkat pemahaman Anda terhadap prosedur penyelesaian laporan akhir penelitian atau pengabdian masyarakat?</th>
            <th>Created_at</th>
          </tr>
        </thead>
        <tbody class="fw-semibold text-gray-800">
          @foreach ($data as $item)     
            <tr>
              <td>
                <span class="text-gray-800 fw-bold">{{ $item->name }}</span>
              </td>
              <td>
                <span class="text-gray-800 fw-bold">{{ $item->faculty }}</span>
              </td>
              <td>
                <span class="text-gray-800 fw-bold">{{ $item->q1 }}</span>
              </td>
              <td>
                <span class="text-gray-800 fw-bold">{{ $item->q2 }}</span>
              </td>
              <td>
                <span class="text-gray-800 fw-bold">{{ $item->q3 }}</span>
              </td>
              <td>
                <span class="text-gray-800 fw-bold">{{ $item->q4 }}</span>
              </td>
              <td>
                <span class="text-gray-800 fw-bold">{{ $item->q5 }}</span>
              </td>
              <td>
                <span class="text-gray-800 fw-bold">{{ $item->q6 }}</span>
              </td>
              <td>
                <span class="text-gray-800 fw-bold">{{ $item->q7 }}</span>
              </td>
              <td>
                <span class="text-gray-800 fw-bold">{{ $item->q8 }}</span>
              </td>
              <td>
                <span class="text-gray-800 fw-bold">{{ $item->q9 }}</span>
              </td>
              <td>
                <span class="text-gray-800 fw-bold">{{ $item->q10 }}</span>
              </td>
              <td>
                <span class="text-gray-800 fw-bold">{{ $item->created_at }}</span>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection

@section('script')
<script>
  document.getElementById('submit').addEventListener('click', function(event) {
    event.preventDefault();

    var submitButton = document.getElementById('submit');
    submitButton.querySelector('.indicator-label').style.display = 'none';
    submitButton.querySelector('.indicator-progress').style.display = 'inline-block';
    submitButton.setAttribute('disabled', 'disabled');

    var downloadLink = document.createElement('a');
    downloadLink.href = submitButton.href;
    downloadLink.setAttribute('download', '');

    document.body.appendChild(downloadLink);
    downloadLink.click();
    document.body.removeChild(downloadLink);

    setTimeout(function() {
      submitButton.querySelector('.indicator-label').style.display = 'inline-block';
      submitButton.querySelector('.indicator-progress').style.display = 'none';
      submitButton.removeAttribute('disabled');
    }, 3000);
  });
</script>
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script>
  $("#table").DataTable();
</script>
@endsection
