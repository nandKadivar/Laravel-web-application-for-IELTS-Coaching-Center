@extends('layouts.app')

@section('title')
Mock Test - dashboard
@endsection

@section('content')
    <main class="col-md-12 d-flex flex-column align-center" style="background-color: #f2f2f2; padding: 0px; height: 100%;">
        <div class="d-flex col-md-12 flex-row align-items-center" style="padding-left: 20px; padding-top: 15px; padding-bottom: 10px; background-color: #fff; box-shadow: 3px 2px 3px rgba(3, 3, 3, 0.2)">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard" style="color: #333">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#" style="color: #333">Mock Test</a></li>
                </ol>
            </nav>
        </div>
        <div class="d-flex flex-column align-items-start justify-content-center col-md-12" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="d-flex flex-row align-items-center justify-content-center col-md-12" style="padding-bottom: 10px;">
                <div class="d-flex flex-row align-items-center col-md-11" style="padding-left: 20px;">
                    <div class="active mock-test-dashboard-menu" id="l_btn" style="cursor: pointer;" onclick="showlistening()">Listening</div>
                    <div class="mock-test-dashboard-menu" id="r_btn" style="margin-left: 50px; cursor: pointer;" onclick="showreading()">Reading</div>
                    <div class="mock-test-dashboard-menu" id="w1_btn" style="margin-left: 50px; cursor: pointer;" onclick="showwriting1()">Writing Task1</div>
                    <div class="mock-test-dashboard-menu" id="w2_btn" style="margin-left: 50px; cursor: pointer;" onclick="showwriting2()">Writing Task2</div>
                </div>
            </div>
            <div class="mock-test-card-container col-md-12" id="l">
                <div class="col-md-11 d-flex flex-wrap flex-row align-items-center justify-content-start">
                    @foreach ($listeningTestList as $test)
                        <div class="d-flex flex-column align-items-center mock-test-card">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="color: #757575; font-weight: 700;">ID: {{$test->id}}</div>
                                <i class="mdi mdi-trophy-variant-outline" style="font-size: 24px;"></i>
                            </div>
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">{{$test->ielts_module}}</div>
                            </div>
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">{{$test->test_desciption}}</div>
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                                <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                    <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                                </div>
                                <div class="progress col-md-12" style="margin-left: 5px;">
                                    <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                                <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                    <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                                </div>
                                <div class="progress col-md-12" style="margin-left: 5px;">
                                    <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                                <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                    <div class="d-flex flex-column align-items-center">
                                        <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                        <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                    </div>
                                    <div class="d-flex flex-column align-items-center">
                                        <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                        <div style="font-size: 14px; color: #757575; font-weight: 600">{{$test->updated_at}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                            </div>
                            <div type="button" class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn" data-toggle="modal" data-target="#Modal{{$loop->index}}">
                                <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                            </div>
                        </div>
                        <div class="modal fade bd-example-modal" id="Modal{{$loop->index}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel{{$loop->index}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="ModalLabel">Instructions</h5>
                                  <div type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    {{-- <span aria-hidden="true"></span> --}}
                                    <i class="mdi mdi-close" style="font-size: 16px;"></i>
                                  </div>
                                </div>
                                <div class="modal-body">
                                  <div class="col-md-12 grid-margin stretch-card">
                                    <div class="card" style="box-shadow: 0 0 0; border-radius: 0px">
                                      <div class="card-body">
                                        <h4 class="card-title">Listening Test</h4>
                                        <p class="card-description">
                                          {{$test['id']}}
                                        </p>
                                        <form class="forms-sample" method="post" action="{{route('student.listeningtest',['id'=>$test['id'],'p'=>$test['test_paper'],'a'=>$test['audio_file']])}}">
                                          @csrf

                                          <button type="submit" class="btn btn-primary btn-icon-text" style="background-color: #1F3BB3; color: #fff">
                                            <i class="ti-trash btn-icon-prepend"></i>                                                    
                                            Start Test
                                          </button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                {{-- <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div> --}}
                              </div>
                            </div>
                          </div>
                    @endforeach
                    
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-marked-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between pending">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">-/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-0" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" pending>
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">-/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-0" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-trophy-variant-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-blank-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between pending">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">-/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-0" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" pending>
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">-/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-0" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-arrow-right-bold attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">Attend Test</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-blank-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-blank-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-blank-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mock-test-card-container col-md-12" id="r">
                <div class="col-md-11 d-flex flex-wrap flex-row align-items-center justify-content-start">
                    @foreach ($readingTestList as $test)
                        <div class="d-flex flex-column align-items-center mock-test-card">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="color: #757575; font-weight: 700;">ID: {{$test->id}}</div>
                                <i class="mdi mdi-trophy-variant-outline" style="font-size: 24px;"></i>
                            </div>
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">{{$test->ielts_module}}</div>
                            </div>
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">{{$test->test_desciption}}</div>
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                                <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                    <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                                </div>
                                <div class="progress col-md-12" style="margin-left: 5px;">
                                    <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                                <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                    <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                                </div>
                                <div class="progress col-md-12" style="margin-left: 5px;">
                                    <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                                <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                    <div class="d-flex flex-column align-items-center">
                                        <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                        <div style="font-size: 14px; color: #757575; font-weight: 600">60 min</div>
                                    </div>
                                    <div class="d-flex flex-column align-items-center">
                                        <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                        <div style="font-size: 14px; color: #757575; font-weight: 600">{{$test->updated_at}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                            </div>
                            <div type="button" class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn" data-toggle="modal" data-target="#ReadingModal{{$loop->index}}">
                                <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                            </div>
                        </div>
                        <div class="modal fade bd-example-modal" id="ReadingModal{{$loop->index}}" tabindex="-1" role="dialog" aria-labelledby="ReadingModalLabel{{$loop->index}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="ModalLabel">Instructions</h5>
                                  <div type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    {{-- <span aria-hidden="true"></span> --}}
                                    <i class="mdi mdi-close" style="font-size: 16px;"></i>
                                  </div>
                                </div>
                                <div class="modal-body">
                                  <div class="col-md-12 grid-margin stretch-card">
                                    <div class="card" style="box-shadow: 0 0 0; border-radius: 0px">
                                      <div class="card-body">
                                        <h4 class="card-title">Reading Test</h4>
                                        <p class="card-description">
                                          {{$test['id']}}
                                        </p>
                                        <form class="forms-sample" method="post" action="{{route('student.readingtest',['id'=>$test['id'],'p'=>$test['test_paper']])}}">
                                          @csrf

                                          <button type="submit" class="btn btn-primary btn-icon-text" style="background-color: #1F3BB3; color: #fff">
                                            <i class="ti-trash btn-icon-prepend"></i>                                                    
                                            Start Test
                                          </button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                {{-- <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div> --}}
                              </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-marked-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between pending">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">-/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-0" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" pending>
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">-/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-0" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-trophy-variant-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-blank-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between pending">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">-/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-0" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" pending>
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">-/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-0" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-arrow-right-bold attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">Attend Test</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-blank-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-blank-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-blank-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mock-test-card-container col-md-12" id="w1">
                <div class="col-md-11 d-flex flex-wrap flex-row align-items-center justify-content-start">
                    @foreach ($WritingTask1TestList as $test)
                        <div class="d-flex flex-column align-items-center mock-test-card">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="color: #757575; font-weight: 700;">ID: {{$test->id}}</div>
                                <i class="mdi mdi-trophy-variant-outline" style="font-size: 24px;"></i>
                            </div>
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">{{$test->ielts_module}}</div>
                            </div>
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">{{$test->test_desciption}}</div>
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                                <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                    <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                                </div>
                                <div class="progress col-md-12" style="margin-left: 5px;">
                                    <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                                <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                    <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                                </div>
                                <div class="progress col-md-12" style="margin-left: 5px;">
                                    <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                                <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                    <div class="d-flex flex-column align-items-center">
                                        <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                        <div style="font-size: 14px; color: #757575; font-weight: 600">25 min</div>
                                    </div>
                                    <div class="d-flex flex-column align-items-center">
                                        <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                        <div style="font-size: 14px; color: #757575; font-weight: 600">{{$test->updated_at}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                            </div>
                            <div type="button" class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn" data-toggle="modal" data-target="#W1Modal{{$loop->index}}">
                                <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                            </div>
                        </div>
                        <div class="modal fade bd-example-modal" id="W1Modal{{$loop->index}}" tabindex="-1" role="dialog" aria-labelledby="W1ModalLabel{{$loop->index}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="ModalLabel">Instructions</h5>
                                  <div type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    {{-- <span aria-hidden="true"></span> --}}
                                    <i class="mdi mdi-close" style="font-size: 16px;"></i>
                                  </div>
                                </div>
                                <div class="modal-body">
                                  <div class="col-md-12 grid-margin stretch-card">
                                    <div class="card" style="box-shadow: 0 0 0; border-radius: 0px">
                                      <div class="card-body">
                                        <h4 class="card-title">Writing Task 1</h4>
                                        <p class="card-description">
                                          {{$test['id']}}
                                        </p>
                                        <form class="forms-sample" method="post" action="{{route('student.writingtask1test',['id'=>$test['id'],'p'=>$test['test_paper']])}}">
                                          @csrf

                                          <button type="submit" class="btn btn-primary btn-icon-text" style="background-color: #1F3BB3; color: #fff">
                                            <i class="ti-trash btn-icon-prepend"></i>                                                    
                                            Start Test
                                          </button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                {{-- <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div> --}}
                              </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-marked-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between pending">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">-/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-0" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" pending>
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">-/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-0" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-trophy-variant-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-blank-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between pending">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">-/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-0" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" pending>
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">-/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-0" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-arrow-right-bold attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">Attend Test</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-blank-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-blank-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-blank-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mock-test-card-container col-md-12" id="w2">
                <div class="col-md-11 d-flex flex-wrap flex-row align-items-center justify-content-start">
                    @foreach ($WritingTask2TestList as $test)
                        <div class="d-flex flex-column align-items-center mock-test-card">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="color: #757575; font-weight: 700;">ID: {{$test->id}}</div>
                                <i class="mdi mdi-trophy-variant-outline" style="font-size: 24px;"></i>
                            </div>
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">{{$test->ielts_module}}</div>
                            </div>
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">{{$test->test_desciption}}</div>
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                                <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                    <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                                </div>
                                <div class="progress col-md-12" style="margin-left: 5px;">
                                    <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                                <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                    <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                                </div>
                                <div class="progress col-md-12" style="margin-left: 5px;">
                                    <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                                <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                    <div class="d-flex flex-column align-items-center">
                                        <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                        <div style="font-size: 14px; color: #757575; font-weight: 600">45 min</div>
                                    </div>
                                    <div class="d-flex flex-column align-items-center">
                                        <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                        <div style="font-size: 14px; color: #757575; font-weight: 600">{{$test->updated_at}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                            </div>
                            <div type="button" class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn" data-toggle="modal" data-target="#W2Modal{{$loop->index}}">
                                <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                            </div>
                        </div>
                        <div class="modal fade bd-example-modal" id="W2Modal{{$loop->index}}" tabindex="-1" role="dialog" aria-labelledby="W2ModalLabel{{$loop->index}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="ModalLabel">Instructions</h5>
                                  <div type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    {{-- <span aria-hidden="true"></span> --}}
                                    <i class="mdi mdi-close" style="font-size: 16px;"></i>
                                  </div>
                                </div>
                                <div class="modal-body">
                                  <div class="col-md-12 grid-margin stretch-card">
                                    <div class="card" style="box-shadow: 0 0 0; border-radius: 0px">
                                      <div class="card-body">
                                        <h4 class="card-title">Writing Task 2</h4>
                                        <p class="card-description">
                                          {{$test['id']}}
                                        </p>
                                        <form class="forms-sample" method="post" action="{{route('student.writingtask2test',['id'=>$test['id'],'p'=>$test['test_paper']])}}">
                                          @csrf

                                          <button type="submit" class="btn btn-primary btn-icon-text" style="background-color: #1F3BB3; color: #fff">
                                            <i class="ti-trash btn-icon-prepend"></i>                                                    
                                            Start Test
                                          </button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                {{-- <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div> --}}
                              </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-marked-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between pending">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">-/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-0" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" pending>
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">-/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-0" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-trophy-variant-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-blank-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between pending">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">-/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-0" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" pending>
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">-/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-0" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-arrow-right-bold attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">Attend Test</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-blank-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-blank-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center mock-test-card">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="color: #757575; font-weight: 700;">ID: 6158082ebc639</div>
                            <i class="mdi mdi-checkbox-blank-circle-outline" style="font-size: 24px;"></i>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="background-color: #e9ecef; padding: 5px;border-radius: 5px; font-size: 14px;color: #333;">Listening</div>
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                            <div style="padding: 5px;border-radius: 5px; font-size: 14px; color: #757575; font-weight: 600">Cambridge IELTS 14 Test 2</div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Band</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">7/9</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background: #45489a" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div style="padding: 5px; font-size: 14px; color: #757575; font-weight: 700">Score</div>
                                <div style="font-size: 14px; color: #757575; font-weight: 600">32/40</div>
                            </div>
                            <div class="progress col-md-12" style="margin-left: 5px;">
                                <div class="progress-bar w-75" style="background-color: #45489a;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Duration</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">35 min</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div style="padding-left: 5px; padding-right: 5px; font-size: 14px; color: #757575; font-weight: 700">Last modified</div>
                                    <div style="font-size: 14px; color: #757575; font-weight: 600">2021-10-02 11:41:23</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-start justify-content-between" style="margin-top: 20px; margin-bottom: 20px; height: 1px; background-color: #cecece">
                        </div>
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center attend-test-btn">
                            <i class="mdi mdi-eye attend-test-btn-text" style="font-size: 16px; padding-right: 5px;"></i><div class="attend-test-btn-text">View Details</div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-1"></div> --}}
        </div>
    </main>

    <script>
        var r_division = document.getElementById("r");
        var w1_division = document.getElementById("w1");
        var w2_division = document.getElementById("w2");
        r_division.style.display="none";
        w1_division.style.display="none";
        w2_division.style.display="none";

        function showlistening(){
            var l_button = document.getElementById("l_btn");
            var r_button = document.getElementById("r_btn");
            var w1_button = document.getElementById("w1_btn");
            var w2_button = document.getElementById("w2_btn");

            var l_division = document.getElementById("l");
            var r_division = document.getElementById("r");
            var w1_division = document.getElementById("w1");
            var w2_division = document.getElementById("w2");

            l_button.classList.add("active");
            r_button.classList.remove("active");
            w1_button.classList.remove("active");
            w2_button.classList.remove("active");

            l_division.style.display = 'flex';
            r_division.style.display = 'none';
            w1_division.style.display = 'none';
            w2_division.style.display = 'none';
        }

        function showreading(){
            var l_button = document.getElementById("l_btn");
            var r_button = document.getElementById("r_btn");
            var w1_button = document.getElementById("w1_btn");
            var w2_button = document.getElementById("w2_btn");

            var l_division = document.getElementById("l");
            var r_division = document.getElementById("r");
            var w1_division = document.getElementById("w1");
            var w2_division = document.getElementById("w2");

            l_button.classList.remove("active");
            r_button.classList.add("active");
            w1_button.classList.remove("active");
            w2_button.classList.remove("active");

            l_division.style.display = 'none';
            r_division.style.display = 'flex';
            w1_division.style.display = 'none';
            w2_division.style.display = 'none';
        }

        function showwriting1(){
            var l_button = document.getElementById("l_btn");
            var r_button = document.getElementById("r_btn");
            var w1_button = document.getElementById("w1_btn");
            var w2_button = document.getElementById("w2_btn");

            var l_division = document.getElementById("l");
            var r_division = document.getElementById("r");
            var w1_division = document.getElementById("w1");
            var w2_division = document.getElementById("w2");

            l_button.classList.remove("active");
            r_button.classList.remove("active");
            w1_button.classList.add("active");
            w2_button.classList.remove("active");

            l_division.style.display = 'none';
            r_division.style.display = 'none';
            w1_division.style.display = 'flex';
            w2_division.style.display = 'none';
        }

        function showwriting2(){
            var l_button = document.getElementById("l_btn");
            var r_button = document.getElementById("r_btn");
            var w1_button = document.getElementById("w1_btn");
            var w2_button = document.getElementById("w2_btn");

            var l_division = document.getElementById("l");
            var r_division = document.getElementById("r");
            var w1_division = document.getElementById("w1");
            var w2_division = document.getElementById("w2");

            l_button.classList.remove("active");
            r_button.classList.remove("active");
            w1_button.classList.remove("active");
            w2_button.classList.add("active");

            l_division.style.display = 'none';
            r_division.style.display = 'none';
            w1_division.style.display = 'none';
            w2_division.style.display = 'flex';
        }
    </script>
@endsection