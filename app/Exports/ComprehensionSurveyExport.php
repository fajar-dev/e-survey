<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\ComprehensionSurvey;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ComprehensionSurveyExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ComprehensionSurvey::all()->map(function ($survey) {
            return [
                'name' => $survey->name,
                'faculty' => $survey->faculty,
                'q1' => $survey->q1,
                'q2' => $survey->q2,
                'q3' => $survey->q3,
                'q4' => $survey->q4,
                'q5' => $survey->q5,
                'q6' => $survey->q6,
                'q7' => $survey->q7,
                'q8' => $survey->q8,
                'q9' => $survey->q9,
                'q10' => $survey->q10,
                'created_at' => Carbon::parse($survey->created_at)->format('Y-m-d'), // Format menjadi YYYY-MM-DD
            ];
        });
    }
    public function headings(): array
    {
        return [
            'Nama Lengkap',
            'Fakultas',
            '1. Apakah Anda memahami langkah-langkah yang harus diikuti untuk mengajukan proposal penelitian di universitas ini?',
            '2. Sejauh mana Anda mengetahui panduan etika penelitian yang berlaku di universitas ini?',
            '3. Bagaimana tingkat pemahaman Anda mengenai prosedur penggunaan dana penelitian yang telah disetujui?',
            '4. Apakah Anda familiar dengan tahapan pelaporan kemajuan penelitian yang harus dilakukan selama proyek berlangsung?',
            '5. Seberapa baik Anda memahami prosedur pengajuan perubahan atau revisi dalam pelaksanaan penelitian?',
            '6. Apakah Anda mengetahui kebijakan dan panduan terkait hak kekayaan intelektual dalam hasil penelitian yang dilakukan di universitas ini?',
            '7. Bagaimana tingkat pemahaman Anda terhadap prosedur pengabdian masyarakat yang berlaku di universitas ini?',
            '8. Sejauh mana Anda memahami kriteria evaluasi dan penilaian hasil penelitian yang diterapkan oleh universitas?',
            '9. Apakah Anda mengetahui mekanisme pertanggungjawaban keuangan yang harus dilaporkan dalam proyek pengabdian masyarakat?',
            '10. Bagaimana tingkat pemahaman Anda terhadap prosedur penyelesaian laporan akhir penelitian atau pengabdian masyarakat?',
            'Created At'
        ];
    }
}
