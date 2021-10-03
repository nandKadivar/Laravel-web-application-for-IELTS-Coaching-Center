@extends('layouts.admin')

@section('title')
Mock Tests
@endsection

@section('main-section')
<div class="main-panel">
    <div class="content-wrapper">
      @if(session()->has('status'))
        <h1>{{session()->get('status')}}</h1>
      @endif
      {{-- <div class="toast-alert" style='height: 40px; padding: 10px;background-color: #4caf50;position: absolute; bottom: 10px; left: 50%;z-index: 10'>
        Meeting Created Successfully!
      </div> --}}
      <div class="row">
        <div class="col-sm-12">
          <div class="home-tab">
            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#listening" role="tab" aria-controls="upcoming" aria-selected="true">Listening</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#reading" role="tab" aria-selected="false">Reading</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#wt1" role="tab" aria-selected="false">Writing Task 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#wt2" role="tab" aria-selected="false">Writing Task 2</a>
                </li>
              </ul>
              <div>
                {{-- <div class="btn-wrapper" data-toggle="modal" data-target="#exampleModal">
                  <a href="#" class="btn btn-primary text-white me-0"><i class="mdi mdi-plus"></i> Initiate Online Lecture</a>
                </div> --}}
                <!-- Modal -->
                {{-- <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Initiate online class</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="col-md-12 grid-margin stretch-card">
                          <div class="card" style="box-shadow: 0 0 0; border-radius: 0px">
                            <div class="card-body">
                              <form class="forms-sample" method="post" action="/meetings">
                                @csrf
                                <div class="form-group col-md-12 d-flex flex-row align-items-center justify-content-between">
                                  <label class="col-md-4" for="exampleInputUsername1">Meeting Type</label>
                                  <div class='col-md-6 d-flex flex-row align-items-center justify-content-between'>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="radio" class="form-check-input checked" name="meetingRadios" id="meetingRadio1" value="instant" onclick="document.getElementById('schedule-group').style.display = 'none';" checked>
                                        Instant
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="meetingRadios" id="meetingRadio2" value="schedule" onclick="document.getElementById('schedule-group').style.display = 'flex';">
                                        Schedule
                                      </label>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group" id="schedule-group">
                                  <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                                    <span class="input-group-addon input-group-prepend border-right">
                                      <span class="icon-calendar input-group-text calendar-icon"></span>
                                    </span>
                                    <input type="text" class="form-control">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputUsername1">Topic</label>
                                  <input type="text" class="form-control" id="exampleInputUsername1" name='topic' placeholder="Meeting topic">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Agenda</label>
                                  <input type="test" class="form-control" id="exampleInputEmail1" name='agenda' placeholder="Meeting agenda">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Duration (min)</label>
                                  <input type="number" class="form-control" id="exampleInputEmail1" name='duration' placeholder="minutes">
                                </div>
                                <button type="submit" class="btn btn-primary btn-icon-text" style="color: #fff">
                                  Create Meeting
                                </button>
                                <button type="reset" class="btn btn-light">Cancel</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> --}}
              </div>
            </div>
            <div class="tab-content tab-content-basic">
              <div class="tab-pane fade show active" id="listening" role="tabpanel" aria-labelledby="listening"> 
                <div class="row">
                  <div class="col-sm-12">
                    <div class="statistics-details d-flex align-items-center justify-content-between">
                      <div class="d-flex flex-column align-items-center">
                        <p class="statistics-title">Total Tests</p>
                        {{-- <h3 class="rate-percentage">{{$meetingList['data']['total_records']}}</h3> --}}
                        <h3 class="rate-percentage">57</h3>
                        <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-8</span></p>
                      </div>
                      <div class="d-flex flex-column align-items-center">
                        <p class="statistics-title">Responses</p>
                        <h3 class="rate-percentage">54</h3>
                        <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+17</span></p>
                      </div>
                      <div class="d-flex flex-column align-items-center">
                        <p class="statistics-title">Evaluated</p>
                        <h3 class="rate-percentage">54</h3>
                        {{-- <p class="text-danger d-flex"><span></span></p> --}}
                        <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>2</span></p>
                      </div>
                      {{-- <div class="d-none d-md-block">
                        <p class="statistics-title">Avg. Time on Site</p>
                        <h3 class="rate-percentage">2m:35s</h3>
                        <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                      </div> --}}
                      <div class="d-flex flex-column align-items-center">
                        <p class="statistics-title">New Sessions</p>
                        <h3 class="rate-percentage">68.8</h3>
                        <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                      </div>
                      <div class="d-flex flex-column align-items-center">
                        <p class="statistics-title">Avg. Time on Site</p>
                        <h3 class="rate-percentage">2m:35s</h3>
                        <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                    {{-- <table id="example1" class="table table-bordered table-striped"> --}}
                    <table id="" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                            <th>Id</th>
                            <th>Module</th>
                            <th>Description</th>
                            <th>Test PDF</th>
                            <th>Audio File</th>
                            <th>Answer Key</th>
                            <th>Responses</th>
                            <th>Creation Time</th>
                            <th>Last Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @php 
                          echo $readingTestList[0]['id'];
                        @endphp --}}
                        @foreach($listeningTestList as $i)
                          <tr>
                            <td>{{$i->id}}</td>
                            <td>{{$i->ielts_module}}</td>
                            <td>{{$i->test_desciption}}</td>
                            <td>
                              {{-- <a href="{{asset($i->test_paper)}}" target="_blank">listening_paper_{{$i->id}}.pdf</a> --}}
                              <a href="{{asset($i->test_paper)}}" target="_blank"><i class="mdi mdi-file-pdf"></i> view</a>
                            </td>
                            <td>
                              {{-- <a href="{{asset($i->audio_file)}}" target="_blank">listening_audio_{{$i->id}}.pdf</a> --}}
                              <a href="{{asset($i->audio_file)}}" target="_blank"><i class="mdi mdi-library-music"></i> listen</a>
                            </td>
                            <td>
                              {{-- <a href="{{asset($i->answer_key)}}" target="_blank">listening_answer_{{$i->id}}.pdf</a> --}}
                              <a href="{{asset($i->answer_key)}}" target="_blank"><i class="mdi mdi-file-pdf"></i> view</a>
                            </td>
                            <td>5</td>
                            <td>{{$i->created_at}}</td>
                            <td>{{$i->updated_at}}</td>
                            <td>
                              {{-- <a type="button" href="" class="btn btn-primary btn-icon-text" style='color: #fff'>
                                <i class="ti-control-play btn-icon-prepend"></i>
                                Start
                              </a> --}}
                              <button type="button" class="btn btn-outline-warning btn-icon-text" data-toggle="modal" data-target="#editModal{{$i->id}}">
                                <i class="ti-pencil btn-icon-prepend"></i>
                              </button>
                              <button type="button" class="btn btn-outline-danger btn-icon-text" data-toggle="modal" data-target="#deleteModal{{$i->id}}">
                                <i class="ti-trash  btn-icon-prepend"></i>
                              </button>
                            </td>
                          </tr>
                          <div class="modal fade bd-example-modal" id="deleteModal{{$i->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$i->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="deleteModalLabel">Are you sure?</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="col-md-12 grid-margin stretch-card">
                                    <div class="card" style="box-shadow: 0 0 0; border-radius: 0px">
                                      <div class="card-body">
                                        <h4 class="card-title">Delete Listening Test with id</h4>
                                        <p class="card-description">
                                          {{$i->id}}
                                        </p>
                                        <form class="forms-sample" method="post" action="{{route('admin.destroy.mocktest', ['id' => $i->id, 'module' => $i->ielts_module])}}">
                                          @csrf
                                          @method('DELETE')

                                          <button type="submit" class="btn btn-danger btn-icon-text" style="color: #fff">
                                            <i class="ti-trash btn-icon-prepend"></i>                                                    
                                            Delete
                                          </button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade bd-example-modal" id="editModal{{$i->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{$i->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="deleteModalLabel">Listening Test</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="col-md-12 grid-margin stretch-card">
                                    <div class="card" style="box-shadow: 0 0 0; border-radius: 0px">
                                      <div class="card-body">
                                        {{-- <h4 class="card-title">Listening Test </h4> --}}
                                        {{-- <p class="card-description">
                                          {{$i->id}}
                                        </p> --}}
                                        <form class="forms-sample" method="post" enctype="multipart/form-data" action="{{route('admin.update.mocktest')}}">
                                          @csrf
                                          
                                          <div class='d-flex col-md-12 flex-row align-items-center justify-content-between'>
                                            <div class="form-group">
                                              <label for="exampleInputUsername1">Mock Test Id</label>
                                              <input type="text" class="form-control" id="exampleInputUsername1" name='id' value='{{$i->id}}' readonly>
                                            </div>
                
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Module</label>
                                                {{-- <input type="text" class="form-control" id="exampleInputUsername1" name='module' value='listening' hidden> --}}
                                                <input type="text" class="form-control" id="exampleInputUsername1" name="module" value='Listening' readonly>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputUsername1">Description</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1" name='description' value="{{$i->test_desciption}}" placeholder="Test description">
                                          </div>
                                          {{-- @php
                                            echo public_path('ielts-tests\listening\listening_paper_'.$i->id.'.pdf');
                                          @endphp --}}
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Change Test Paper</label><br />
                                            {{-- <label for="exampleInputEmail1">listening_paper_{{$i->id}}.pdf</label> --}}
                                            <input type="file" class="form-control" style="background-color: #fff; color: #333" name='paper''>
                                          </div>
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Change Upload Audio</label>
                                              <input type="file" class="form-control" style="background-color: #fff; color: #333" name='audio'>
                                            </div>
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Change Answer Key</label>
                                            <input type="file" class="form-control" style="background-color: #fff; color: #333" name='answer'>
                                          </div>
                                          {{-- <button type="submit" class="btn btn-primary me-2">Create</button> --}}
                                          @error('paper')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                          @enderror
                                          @error('audio')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                          @enderror
                                          @error('answer')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                          @enderror
                                          <div class="d-flex col-md-12 flex-row align-items-center justify-content-between">
                                            <button type="reset" class="btn btn-light">Reset</button>
            
                                            <button type="submit" class="btn btn-primary btn-icon-text" style="color: #fff">
                                              {{-- <i class=" btn-icon-prepend"></i> --}}
                                              Create Test
                                            </button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        @endforeach
                        {{-- <tr>
                            <td>25811</td>
                            <td>Listening</td>
                            <td>Test1 of Cambridge 14</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>45</td>
                            <td>Time</td>
                        </tr>
                        <tr>
                            <td>25811</td>
                            <td>Listening</td>
                            <td>Test1 of Cambridge 14</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>45</td>
                            <td>Time</td>
                        </tr>
                        <tr>
                            <td>25811</td>
                            <td>Listening</td>
                            <td>Test1 of Cambridge 14</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>45</td>
                            <td>Time</td>
                        </tr>
                        <tr>
                            <td>25811</td>
                            <td>Listening</td>
                            <td>Test1 of Cambridge 14</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>45</td>
                            <td>Time</td>
                        </tr> --}}
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade show" id="reading" role="tabpanel" aria-labelledby="reading">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="statistics-details d-flex align-items-center justify-content-between">
                        <div class="d-flex flex-column align-items-center">
                          <p class="statistics-title">Total Tests</p>
                          {{-- <h3 class="rate-percentage">{{$meetingList['data']['total_records']}}</h3> --}}
                          <h3 class="rate-percentage">57</h3>
                          <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-8</span></p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                          <p class="statistics-title">Responses</p>
                          <h3 class="rate-percentage">54</h3>
                          <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+17</span></p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                          <p class="statistics-title">Evaluated</p>
                          <h3 class="rate-percentage">54</h3>
                          {{-- <p class="text-danger d-flex"><span></span></p> --}}
                          <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>2</span></p>
                        </div>
                        {{-- <div class="d-none d-md-block">
                          <p class="statistics-title">Avg. Time on Site</p>
                          <h3 class="rate-percentage">2m:35s</h3>
                          <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                        </div> --}}
                        <div class="d-flex flex-column align-items-center">
                          <p class="statistics-title">New Sessions</p>
                          <h3 class="rate-percentage">68.8</h3>
                          <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                          <p class="statistics-title">Avg. Time on Site</p>
                          <h3 class="rate-percentage">2m:35s</h3>
                          <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                      {{-- <table id="example1" class="table table-bordered table-striped"> --}}
                      <table id="" class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>Module</th>
                                  <th>Description</th>
                                  <th>Test PDF</th>
                                  <th>Answer Key</th>
                                  <th>Responses</th>
                                  <th>Creation Time</th>
                                  <th>Last Updated</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($readingTestList as $i)
                              <tr>
                                <td>{{$i->id}}</td>
                                <td>{{$i->ielts_module}}</td>
                                <td>{{$i->test_desciption}}</td>
                                <td>
                                  {{-- <a href="{{asset($i->test_paper)}}" target="_blank">listening_paper_{{$i->id}}.pdf</a> --}}
                                  <a href="{{asset($i->test_paper)}}" target="_blank"><i class="mdi mdi-file-pdf"></i> view</a>
                                </td>
                                <td>
                                  {{-- <a href="{{asset($i->answer_key)}}" target="_blank">listening_answer_{{$i->id}}.pdf</a> --}}
                                  <a href="{{asset($i->answer_key)}}" target="_blank"><i class="mdi mdi-file-pdf"></i> view</a>
                                </td>
                                <td>5</td>
                                <td>{{$i->created_at}}</td>
                                <td>{{$i->updated_at}}</td>
                                <td>
                                  {{-- <a type="button" href="" class="btn btn-primary btn-icon-text" style='color: #fff'>
                                    <i class="ti-control-play btn-icon-prepend"></i>
                                    Start
                                  </a> --}}
                                  <button type="button" class="btn btn-outline-warning btn-icon-text">
                                    <i class="ti-pencil btn-icon-prepend"></i>
                                  </button>
                                  <button type="button" class="btn btn-outline-danger btn-icon-text" data-toggle="modal" data-target="#deleteModal{{$i->id}}">
                                    <i class="ti-trash  btn-icon-prepend"></i>
                                  </button>
                                </td>
                              </tr>
                              <div class="modal fade bd-example-modal" id="deleteModal{{$i->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$i->id}}" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Are you sure?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="col-md-12 grid-margin stretch-card">
                                          <div class="card" style="box-shadow: 0 0 0; border-radius: 0px">
                                            <div class="card-body">
                                              <h4 class="card-title">Delete Reading Test with id</h4>
                                              <p class="card-description">
                                                {{$i->id}}
                                              </p>
                                              <form class="forms-sample" method="post" action="{{route('admin.destroy.mocktest', ['id' => $i->id, 'module' => $i->ielts_module])}}">
                                                @csrf
                                                @method('DELETE')
  
                                                <button type="submit" class="btn btn-danger btn-icon-text" style="color: #fff">
                                                  <i class="ti-trash btn-icon-prepend"></i>                                                    
                                                  Delete
                                                </button>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              @endforeach
                              {{-- <tr>
                                  <td>25811</td>
                                  <td>Listening</td>
                                  <td>Test1 of Cambridge 14</td>
                                  <td>Data</td>
                                  <td>Data</td>
                                  <td>45</td>
                                  <td>Time</td>
                              </tr>
                              <tr>
                                  <td>25811</td>
                                  <td>Listening</td>
                                  <td>Test1 of Cambridge 14</td>
                                  <td>Data</td>
                                  <td>Data</td>
                                  <td>45</td>
                                  <td>Time</td>
                              </tr>
                              <tr>
                                  <td>25811</td>
                                  <td>Listening</td>
                                  <td>Test1 of Cambridge 14</td>
                                  <td>Data</td>
                                  <td>Data</td>
                                  <td>45</td>
                                  <td>Time</td>
                              </tr>
                              <tr>
                                  <td>25811</td>
                                  <td>Listening</td>
                                  <td>Test1 of Cambridge 14</td>
                                  <td>Data</td>
                                  <td>Data</td>
                                  <td>45</td>
                                  <td>Time</td>
                              </tr> --}}
                          </tbody>
                      </table>
                  </div>
              </div>
                <div class="tab-pane fade show" id="wt1" role="tabpanel" aria-labelledby="wt1">
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                            <div class="d-flex flex-column align-items-center">
                            <p class="statistics-title">Total Tests</p>
                            {{-- <h3 class="rate-percentage">{{$meetingList['data']['total_records']}}</h3> --}}
                            <h3 class="rate-percentage">57</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-8</span></p>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                            <p class="statistics-title">Responses</p>
                            <h3 class="rate-percentage">54</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+17</span></p>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                            <p class="statistics-title">Evaluated</p>
                            <h3 class="rate-percentage">54</h3>
                            {{-- <p class="text-danger d-flex"><span></span></p> --}}
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>2</span></p>
                            </div>
                            {{-- <div class="d-none d-md-block">
                            <p class="statistics-title">Avg. Time on Site</p>
                            <h3 class="rate-percentage">2m:35s</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                            </div> --}}
                            <div class="d-flex flex-column align-items-center">
                            <p class="statistics-title">New Sessions</p>
                            <h3 class="rate-percentage">68.8</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                            <p class="statistics-title">Avg. Time on Site</p>
                            <h3 class="rate-percentage">2m:35s</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <table id="" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Module</th>
                                    <th>Description</th>
                                    <th>Test PDF</th>
                                    <th>Responses</th>
                                    <th>Creation time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25811</td>
                                    <td>Writing Task-1</td>
                                    <td>Test3 of Cambridge 14</td>
                                    <td>Data</td>
                                    <td>Link</td>
                                    <td>Time</td>
                                </tr>
                                <tr>
                                    <td>25811</td>
                                    <td>Writing Task-1</td>
                                    <td>Test3 of Cambridge 14</td>
                                    <td>Data</td>
                                    <td>Link</td>
                                    <td>Time</td>
                                </tr>
                                <tr>
                                    <td>25811</td>
                                    <td>Writing Task-1</td>
                                    <td>Test3 of Cambridge 14</td>
                                    <td>Data</td>
                                    <td>Link</td>
                                    <td>Time</td>
                                </tr>
                                <tr>
                                    <td>25811</td>
                                    <td>Writing Task-1</td>
                                    <td>Test3 of Cambridge 14</td>
                                    <td>Data</td>
                                    <td>Link</td>
                                    <td>Time</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              <div class="tab-pane fade show" id="wt2" role="tabpanel" aria-labelledby="wt2">
                <div class="row">
                    <div class="col-sm-12">
                    <div class="statistics-details d-flex align-items-center justify-content-between">
                        <div class="d-flex flex-column align-items-center">
                        <p class="statistics-title">Total Tests</p>
                        {{-- <h3 class="rate-percentage">{{$meetingList['data']['total_records']}}</h3> --}}
                        <h3 class="rate-percentage">57</h3>
                        <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-8</span></p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                        <p class="statistics-title">Responses</p>
                        <h3 class="rate-percentage">54</h3>
                        <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+17</span></p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                        <p class="statistics-title">Evaluated</p>
                        <h3 class="rate-percentage">54</h3>
                        {{-- <p class="text-danger d-flex"><span></span></p> --}}
                        <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>2</span></p>
                        </div>
                        {{-- <div class="d-none d-md-block">
                        <p class="statistics-title">Avg. Time on Site</p>
                        <h3 class="rate-percentage">2m:35s</h3>
                        <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                        </div> --}}
                        <div class="d-flex flex-column align-items-center">
                        <p class="statistics-title">New Sessions</p>
                        <h3 class="rate-percentage">68.8</h3>
                        <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                        <p class="statistics-title">Avg. Time on Site</p>
                        <h3 class="rate-percentage">2m:35s</h3>
                        <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <table id="" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Module</th>
                                <th>Description</th>
                                <th>Test PDF</th>
                                <th>Responses</th>
                                <th>Creation time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>25811</td>
                                <td>Writing Task-2</td>
                                <td>Test3 of Cambridge 14</td>
                                <td>Data</td>
                                <td>Link</td>
                                <td>Time</td>
                            </tr>
                            <tr>
                                <td>25811</td>
                                <td>Writing Task-2</td>
                                <td>Test3 of Cambridge 14</td>
                                <td>Data</td>
                                <td>Link</td>
                                <td>Time</td>
                            </tr>
                            <tr>
                                <td>25811</td>
                                <td>Writing Task-2</td>
                                <td>Test3 of Cambridge 14</td>
                                <td>Data</td>
                                <td>Link</td>
                                <td>Time</td>
                            </tr>
                            <tr>
                                <td>25811</td>
                                <td>Writing Task-2</td>
                                <td>Test3 of Cambridge 14</td>
                                <td>Data</td>
                                <td>Link</td>
                                <td>Time</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">IELTS Organization</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
      </div>
    </footer>
    <!-- partial -->
</div>

<script>
  document.getElementById('schedule-group').style.display="none";
  $(document).ready(function(){
    $('.toast').toast('show');
  });

  Notiflix.Notify.Init({ fontFamily:"Quicksand",useGoogleFont:true,position:"right-bottom",closeButton:true, }); 
  Notiflix.Notify.Success('Sol lucet omnibus');
</script>
@endsection