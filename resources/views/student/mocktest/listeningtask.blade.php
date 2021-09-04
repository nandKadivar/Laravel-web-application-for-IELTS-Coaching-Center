@extends('layouts.app')

@section('title')
Listening Test
@endsection

@section('content')
    <main class="row col-md-12">
        <div class="col-md-8" style="background-color: #fff">
            <div class="d-flex col-md-12 flex-row align-items-center" style="padding: 20px">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard" style="color: #333">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#" style="color: #333">Mock Test</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Listening Test</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12" style="padding: 10px; padding-top: 5px;">
                {{-- <form action="">
                    @csrf
                    <textarea class="text-editor" cols="10" rows="10" placeholder="Write your response here ..."></textarea>
                    <div class="d-flex flex-row align-items-center justify-content-between col-md-12">
                        <div class="d-flex flex-row align-items-center col-md-4" style="background-color: #ececec; border-radius: 5px; padding: 10px; padding-left: 15px;">
                            <i class="fas fa-upload" style="color: #333; font-size: 20px;"></i>                      
                            <input id="file-upload" class="file-upload" type="file" name="fileUpload" />
                        </div>
                        <input class="btn btn-danger" type="submit" value="Hand over">
                    </div>
                </form> --}}
                <iframe src="/ielts-tests/listening/IELTS listening test 1.pdf" style="width: 100%; height: 670px;"></iframe>
            </div>
        </div>
        <div class="col-md-4 d-flex flex-column align-items-center" style="background-color: #f5f5f5">
            <div class="col-md-10 d-flex flex-row align-items-center justify-content-between" style="padding-top: 20px">
                <div class="menu-btn active" id="1" onclick="showQuestion()">
                    <span class="menu-btn-text">Question</span>
                </div>
                <div class="menu-btn" id="2" onclick="showResult()">
                    <span class="menu-btn-text">Result & Feedback</span>
                </div>
                <div class="menu-btn">
                    <span class="menu-btn-text" id="min">35</span>
                    <span class="menu-btn-text" id="timer">:</span>
                    <span class="menu-btn-text" id="sec">00</span>
                </div>
            </div>
            <div class="col-md-10 d-flex flex-row align-items-center justify-content-between" style="padding-top: 20px">
                <audio controls>
                    <source src="/ielts-tests/listening/ielts-practice-listening-test_section-1-audio.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="answer-sheet-container" id="div1" style="margin-top: 20px; height: 600px;">
                <form id="listening-test" action="#" autocomplete="off">
                    @csrf
                    <div class="d-flex flex-row align-items-center justify-content-between" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">1.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1" autocomplete="off"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">2.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">3.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">4.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">5.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">6.</label>
                            <input type="text" id="6" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">7.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">8.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">9.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">10.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">11.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">12.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">13.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">14.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">15.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">16.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">17.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">18.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">19.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">20.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">21.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">22.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">23.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">24.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">25.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">26.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">27.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">28.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">29.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">30.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">31.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">32.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">33.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">34.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">35.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">36.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">37.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">38.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between mt-3" style="width: 100%;">
                        <div class="answer-field">
                            <label class="index">39.</label>
                            <input type="text" id="1" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 1"/>
                        </div>
                        <div class="answer-field">
                            <label class="index">40.</label>
                            <input type="text" id="2" name="email" class="input-type-2" style="width: 87%" placeholder="Answer 2"/>
                        </div>
                    </div>
                    <div style="width: 100%;">
                        <input class="btn btn-danger mt-3" style="width: 100%; height: 40px;" type="submit" value="Hand over">
                    </div>
                </form>
            </div>

            <div id="div2" style="result-container">
                Hiii
            </div>
        </div>
    </main>

    <script>
        // function startTimer(){
            var m = document.getElementById('min').innerHTML;
            var s = document.getElementById('sec').innerHTML;
            // alert(m);
            setInterval(function(){
                if(s==00 && m==00){
                    alert('Time up');
                    document.getElementById("listening-test").submit();
                }
                else if(s==00 && m>=01){
                    s=59;
                    m-=1;
                    document.getElementById('min').innerHTML = m.toString().padStart(2,"0"); 
                    document.getElementById('sec').innerHTML = s.toString().padStart(2,"0"); 
                }
                else{
                    s-=1;
                    document.getElementById('sec').innerHTML = s.toString().padStart(2,"0"); 
                }
            },1000)
        // }
    </script>
@endsection