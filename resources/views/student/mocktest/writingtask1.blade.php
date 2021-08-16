@extends('layouts.app')

@section('title')
Writing Task 1
@endsection

@section('content')
    <main class="row col-md-12">
        <div class="col-md-8" style="background-color: #fff">
            <div class="d-flex col-md-12 flex-row align-items-center" style="padding: 20px">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard" style="color: #333">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#" style="color: #333">Mock Test</a></li>
                    <li class="breadcrumb-item"><a href="#" style="color: #333">Writing</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Task 1</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12" style="padding: 20px">
                <form action="">
                    @csrf
                    <textarea class="text-editor" cols="10" rows="10" placeholder="Write your response here ..."></textarea>
                    <div class="d-flex flex-row align-items-center justify-content-between col-md-12">
                        <div class="d-flex flex-row align-items-center col-md-4" style="background-color: #ececec; border-radius: 5px; padding: 10px; padding-left: 15px;">
                            <i class="fas fa-upload" style="color: #333; font-size: 20px;"></i>                      
                            <input id="file-upload" class="file-upload" type="file" name="fileUpload" />
                        </div>
                        <input class="btn btn-danger" type="submit" value="Hand over">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4 d-flex flex-column align-items-center" style="background-color: #f5f5f5">
            <div class="col-md-10 d-flex flex-row align-items-center justify-content-between" style="padding-top: 20px">
                <div class="menu-btn active">
                    <span class="menu-btn-text">Question</span>
                </div>
                <div class="menu-btn">
                    <span class="menu-btn-text">Result & Feedback</span>
                </div>
                <div class="menu-btn">
                    <span class="menu-btn-text">00:00</span>
                </div>
            </div>
            <div class="col-md-10 d-flex flex-column align-items-center justify-content-start question-card" style="margin-top: 20px">
                <div class="instruction-container">
                    <p class="instruction">
                        You should spend about 20 minutes on this task. Write about the chart/table below. You should write at least 150 words.
                    </p>
                </div>
                <div class="question-container">
                    <p class="question">
                        The two pie charts below show the online shopping sales for retail sectors in Canada in 2005 and 2010. Summarise the information by selecting and reporting the main features, and make comparisons where relevant. <br> Write at least 150 words.
                    </p>
                </div>
                <div class="question-image-container">
                    <img src="/media/images/writing-task-1/1.jpg" class="question-image" style="width: 100%;height:100%" />
                </div>
            </div>
        </div>
    </main>
@endsection