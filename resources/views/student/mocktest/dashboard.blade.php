@extends('layouts.app')

@section('title')
Mock Test - dashboard
@endsection

@section('content')
    <main class="col-md-12 d-flex flex-column align-center" style="background-color: #f2f2f2; padding: 0px; height: 100%;">
        <div class="d-flex col-md-12 flex-row align-items-center" style="padding-left: 20px; padding-top: 15px; padding-bottom: 10px; background-color: #fff; box-shadow: 3px 2px 1px rgba(3, 3, 3, 0.2)">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard" style="color: #333">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#" style="color: #333">Mock Test</a></li>
                </ol>
            </nav>
        </div>
        <div class="d-flex flex-row align-items-center justify-content-center col-md-12" style="margin-top: 50px; margin-bottom: 50px;">
            {{-- <div class="col-md-1"></div> --}}
            <div class="col-md-11 d-flex flex-wrap flex-row align-items-center justify-content-start">
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
                        <div class="attend-test-btn-text">Attend Test</div>
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
                        <div class="attend-test-btn-text">Attend Test</div>
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
                        <div class="attend-test-btn-text">Attend Test</div>
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
                        <div class="attend-test-btn-text">Attend Test</div>
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
                        <div class="attend-test-btn-text">Attend Test</div>
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
                        <div class="attend-test-btn-text">Attend Test</div>
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
                        <div class="attend-test-btn-text">Attend Test</div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-1"></div> --}}
        </div>
    </main>

    <script>
    </script>
@endsection