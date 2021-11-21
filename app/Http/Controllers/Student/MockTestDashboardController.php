<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test\ListeningTest;
use App\Models\Test\ReadingTest;
use App\Models\Test\WritingTest;

class MockTestDashboardController extends Controller
{
    public function index(Request $request){
        
        $listeningTests =  ListeningTest::all();
        $readingTests = ReadingTest::all();
        $writingTask1Tests = WritingTest::where('ielts_module','Writing Task 1')->get();
        $writingTask2Tests = WritingTest::where('ielts_module','Writing Task 2')->get();

        return view('student.mocktest.dashboard',['listeningTestList' => $listeningTests, 'readingTestList' => $readingTests, 'WritingTask1TestList' => $writingTask1Tests, 'WritingTask2TestList' => $writingTask2Tests]);
    }
}


