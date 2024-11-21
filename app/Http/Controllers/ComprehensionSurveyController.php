<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComprehensionSurvey;
use Illuminate\Support\Facades\Validator;

class ComprehensionSurveyController extends Controller
{
    public function comprehensionSurvey(){
        $data = [
            'title' => 'Survei Pemahaman Panduan Penelitian dan Pengabdian',
            'subTitle' => null,
            'page_id' => null,
        ];
        return view('main.comprehension-survey',  $data);
    }

    public function comprehensionSurveyStore(Request $request){
        $validator = Validator::make($request->all(), [
            'name'     => 'required|string|max:255',
            'faculty'  => 'required|in:Teknik,Ekonomi,Pertanian,FISIP,Hukum,Kedokteran,FKIP',
            'q1'       => 'required|in:Sangat Paham,Paham,Kurang Paham,Tidak Paham',
            'q2'       => 'required|in:Sangat Paham,Paham,Kurang Paham,Tidak Paham',
            'q3'       => 'required|in:Sangat Paham,Paham,Kurang Paham,Tidak Paham',
            'q4'       => 'required|in:Sangat Paham,Paham,Kurang Paham,Tidak Paham',
            'q5'       => 'required|in:Sangat Paham,Paham,Kurang Paham,Tidak Paham',
            'q6'       => 'required|in:Sangat Paham,Paham,Kurang Paham,Tidak Paham',
            'q7'       => 'required|in:Sangat Paham,Paham,Kurang Paham,Tidak Paham',
            'q8'       => 'required|in:Sangat Paham,Paham,Kurang Paham,Tidak Paham',
            'q9'       => 'required|in:Sangat Paham,Paham,Kurang Paham,Tidak Paham',
            'q10'      => 'required|in:Sangat Paham,Paham,Kurang Paham,Tidak Paham',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator)->with('error', 'Validation error');
        }

        $survey = new ComprehensionSurvey();
        $survey->name = $request->name;
        $survey->faculty = $request->faculty;
        $survey->q1 = $request->q1;
        $survey->q2 = $request->q2;
        $survey->q3 = $request->q3;
        $survey->q4 = $request->q4;
        $survey->q5 = $request->q5;
        $survey->q6 = $request->q6;
        $survey->q7 = $request->q7;
        $survey->q8 = $request->q8;
        $survey->q9 = $request->q9;
        $survey->q10 = $request->q10;
        $survey->save();

        return redirect()->route('home')->with('success', 'Survey has been submitted successfully');
    }
}
