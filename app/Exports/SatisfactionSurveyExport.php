<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\SatisfactionSurvey;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class SatisfactionSurveyExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SatisfactionSurvey::all()->map(function ($survey) {
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
            '1. Seberapa puas anda dengan kemudahan akses layanan administrasi terkait pendaftaran dan pelaksanaan penelitian atau pengabdian masyarakat?',
            '2. Bagaimana penilaian anda terhadap kejelasan informasi dan panduan administrasi yang disediakan untuk pelaksanaan penelitian atau pengabdian masyarakat?',
            '3. Seberapa puas anda dengan kecepatan respon dari pihak administrasi dalam menangani permintaan atau masalah yang terkait dengan penelitian dan pengabdian masyarakat?',
            '4. Bagaimana anda menilai dukungan fasilitas yang disediakan (ruang kerja, akses laboratorium, perangkat lunak, dll.) untuk mendukung pelaksanaan penelitian dan pengabdian masyarakat?',
            '5. Seberapa puas anda dengan akses dan ketersediaan alat atau bahan yang dibutuhkan dalam proses penelitian atau pengabdian masyarakat?',
            '6. Bagaimana penilaian anda terhadap proses pencairan dana atau pendanaan untuk penelitian dan pengabdian masyarakat?',
            '7. Seberapa puas Anda dengan keterbukaan dan transparansi informasi terkait mekanisme pendanaan penelitian dan pengabdian masyarakat?',
            '8. Bagaimana penilaian anda terhadap bimbingan atau arahan yang diberikan oleh supervisor/dosen pembimbing terkait pelaksanaan penelitian dan pengabdian masyarakat?',
            '9. Seberapa efektif menurut anda koordinasi antar bagian (administrasi, pembimbing, pengelola fasilitas, dll.) dalam mendukung kelancaran penelitian atau pengabdian masyarakat?',
            '10. Bagaimana keseluruhan tingkat kepuasan Anda terhadap layanan administrasi, fasilitas, pendanaan, dan bimbingan dalam mendukung proses penelitian dan pengabdian masyarakat?',
            'Created At'
        ];
    }
}
