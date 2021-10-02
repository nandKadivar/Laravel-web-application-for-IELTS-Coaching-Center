<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test\ListeningTest;
use Illuminate\Support\Facades\Validator;

class MockTestController extends Controller
{
    public function store(Request $request){
        if($request->module == 'Listening'){
            
            $request->validate([
                'paper' => ['required','mimes:pdf','max:2048'],
                'audio' => ['required','mimes:mp3','max:50000'],
                'answer' => ['required','mimes:pdf','max:2048']
            ]);

            // $paper_name = $request->file('paper')->getClientOriginalName();
            $paper_path = $request->file('paper')->move('ielts-tests/listening/'.$request->id, 'listening_paper_'.$request->id.'.pdf');
            $audio_path = $request->file('audio')->move('ielts-tests/listening/'.$request->id, 'listening_audio_'.$request->id.'.mp3');
            $answer_path = $request->file('answer')->move('ielts-tests/listening/'.$request->id, 'listening_answer_'.$request->id.'.pdf');
            // echo $paper_path;
            
            $test = new ListeningTest();

            $test->id = $request->id;
            $test->ielts_module = $request->module;
            $test->test_desciption = $request->description;
            // $test->test_paper = $request->description;
            // $test->audio_file = $request->description;
            // $test->answer_key = $request->description;

            $test->test_paper = 'ielts-tests/listening/'.$request->id.'/listening_paper_'.$request->id.'.pdf';
            $test->audio_file = 'ielts-tests/listening/'.$request->id.'/listening_audio_'.$request->id.'.mp3';
            $test->answer_key = 'ielts-tests/listening/'.$request->id.'/listening_answer_'.$request->id.'.pdf';

            $test->save();

            return redirect()->route('admin.mocktests')->with('status', 'Mock Test Created Successfully!');
        }else{
            echo $request->module;
        }
    }
}
