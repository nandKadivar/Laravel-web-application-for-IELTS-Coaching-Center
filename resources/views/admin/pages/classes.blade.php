@extends('layouts.admin')

@section('title')
Classes
@endsection

@section('main-section')
<div class="main-panel">
    <div class="content-wrapper">
      @if(session()->has('status'))
        <h1>{{session()->get('status')}}</h1>
      @endif
      {{-- <h1>{{$meetingList}}</h1> --}}
      {{-- @php
        print_r($meetingList['data']['total_records']);
      @endphp --}}
      <div class="row">
        <div class="col-sm-12">
          <div class="home-tab">
            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#upcoming" role="tab" aria-controls="upcoming" aria-selected="true">Upcoming</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#completed" role="tab" aria-selected="false">Completed</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Performance</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">More</a>
                </li>
              </ul>
              <div>
                <div class="btn-wrapper" data-toggle="modal" data-target="#exampleModal">
                  {{-- <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                  <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a> --}}
                  <a href="#" class="btn btn-primary text-white me-0"><i class="mdi mdi-plus"></i> Initiate Online Lecture</a>
                </div>
                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              {{-- <h4 class="card-title">Default form</h4>
                              <p class="card-description">
                                Basic form layout
                              </p> --}}
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
                                  {{-- <i class=" btn-icon-prepend"></i> --}}
                                  Create Meeting
                                </button>
                                {{-- <button type="submit" class="btn btn-primary me-2">Create</button> --}}
                                <button type="reset" class="btn btn-light">Cancel</button>
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
              </div>
            </div>
            <div class="tab-content tab-content-basic">
              <div class="tab-pane fade show active" id="upcoming" role="tabpanel" aria-labelledby="upcoming"> 
                <div class="row">
                  <div class="col-sm-12">
                    <div class="statistics-details d-flex align-items-center justify-content-between">
                      <div class="d-flex flex-column align-items-center">
                        <p class="statistics-title">Total Meetings</p>
                        {{-- <h3 class="rate-percentage">{{$meetingList['data']['total_records']}}</h3> --}}
                        <h3 class="rate-percentage">4</h3>
                        <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-8</span></p>
                      </div>
                      <div class="d-flex flex-column align-items-center">
                        <p class="statistics-title">Active Students</p>
                        <h3 class="rate-percentage">83</h3>
                        <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+17</span></p>
                      </div>
                      <div class="d-flex flex-column align-items-center">
                        <p class="statistics-title">Appearing for Exam</p>
                        <h3 class="rate-percentage">12</h3>
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
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Topic</th>
                                <th>Agenda</th>
                                <th>Duration</th>
                                <th>Creation time</th>
                                <th>Start time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($meetingList['data']['meetings'] as $meeting)
                              <tr>
                                <td>{{$meeting['id']}}</td>
                                <td>{{$meeting['topic']}}</td>
                                <td>{{$meeting['agenda']}}</td>
                                <td>{{$meeting['duration']}}</td>
                                <td>{{$meeting['created_at']}}</td>
                                <td>{{$meeting['start_time']}}</td>
                                <td>
                                  <a type="button" href="{{$meeting['join_url']}}" class="btn btn-primary btn-icon-text" style='color: #fff'>
                                    <i class="ti-control-play btn-icon-prepend"></i>
                                    Start
                                  </a>
                                  <button type="button" class="btn btn-outline-warning btn-icon-text">
                                    <i class="ti-pencil btn-icon-prepend"></i>
                                  </button>
                                  <button type="button" class="btn btn-outline-danger btn-icon-text">
                                    <i class="ti-trash  btn-icon-prepend"></i>
                                  </button>
                                </td>
                              </tr>
                            @endforeach
                            {{-- <tr>
                              <td>1</td>
                              <td>Speaking</td>
                              <td>Cue card</td>
                              <td>Data</td>
                              <td>Data</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Speaking</td>
                              <td>Cue card</td>
                              <td>Data</td>
                              <td>Data</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Speaking</td>
                              <td>Cue card</td>
                              <td>Data</td>
                              <td>Data</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Speaking</td>
                              <td>Cue card</td>
                              <td>Data</td>
                              <td>Data</td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
                <div class="row">
                  <div class="col-lg-8 d-flex flex-column">
                    <div class="row flex-grow">
                      <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                              <div>
                                <h4 class="card-title card-title-dash">Performance Line Chart</h4>
                                <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                              </div>
                              <div id="performance-line-legend"></div>
                            </div>
                            <div class="chartjs-wrapper mt-5">
                              <canvas id="performaneLine"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-flex flex-column">
                    <div class="row flex-grow">
                      <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                        <div class="card bg-primary card-rounded">
                          <div class="card-body pb-0">
                            <h4 class="card-title card-title-dash text-white mb-4">Status Summary</h4>
                            <div class="row">
                              <div class="col-sm-4">
                                <p class="status-summary-ight-white mb-1">Closed Value</p>
                                <h2 class="text-info">357</h2>
                              </div>
                              <div class="col-sm-8">
                                <div class="status-summary-chart-wrapper pb-4">
                                  <canvas id="status-summary"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                  <div class="circle-progress-width">
                                    <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                                  </div>
                                  <div>
                                    <p class="text-small mb-2">Total Visitors</p>
                                    <h4 class="mb-0 fw-bold">26.80%</h4>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="circle-progress-width">
                                    <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                                  </div>
                                  <div>
                                    <p class="text-small mb-2">Visits per day</p>
                                    <h4 class="mb-0 fw-bold">9065</h4>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8 d-flex flex-column">
                    <div class="row flex-grow">
                      <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                              <div>
                                <h4 class="card-title card-title-dash">Market Overview</h4>
                                <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                              </div>
                              <div>
                                <div class="dropdown">
                                  <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                              <div class="d-sm-flex align-items-center mt-4 justify-content-between"><h2 class="me-2 fw-bold">$36,2531.00</h2><h4 class="me-2">USD</h4><h4 class="text-success">(+1.37%)</h4></div>
                              <div class="me-3"><div id="marketing-overview-legend"></div></div>
                            </div>
                            <div class="chartjs-bar-wrapper mt-3">
                              <canvas id="marketingOverview"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row flex-grow">
                      <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded table-darkBGImg">
                          <div class="card-body">
                            <div class="col-sm-8">
                              <h3 class="text-white upgrade-info mb-0">
                                Enhance your <span class="fw-bold">Campaign</span> for better outreach
                              </h3>
                              <a href="#" class="btn btn-info upgrade-btn">Upgrade Account!</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row flex-grow">
                      <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                              <div>
                                <h4 class="card-title card-title-dash">Pending Requests</h4>
                                <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p>
                              </div>
                              <div>
                                <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add new member</button>
                              </div>
                            </div>
                            <div class="table-responsive  mt-1">
                              <table class="table select-table">
                                <thead>
                                  <tr>
                                    <th>
                                      <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                      </div>
                                    </th>
                                    <th>Customer</th>
                                    <th>Company</th>
                                    <th>Progress</th>
                                    <th>Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex ">
                                        <img src="images/faces/face1.jpg" alt="">
                                        <div>
                                          <h6>Brandon Washington</h6>
                                          <p>Head admin</p>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <h6>Company name 1</h6>
                                      <p>company type</p>
                                    </td>
                                    <td>
                                      <div>
                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                          <p class="text-success">79%</p>
                                          <p>85/162</p>
                                        </div>
                                        <div class="progress progress-md">
                                          <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </div>
                                    </td>
                                    <td><div class="badge badge-opacity-warning">In progress</div></td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex">
                                        <img src="images/faces/face2.jpg" alt="">
                                        <div>
                                          <h6>Laura Brooks</h6>
                                          <p>Head admin</p>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <h6>Company name 1</h6>
                                      <p>company type</p>
                                    </td>
                                    <td>
                                      <div>
                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                          <p class="text-success">65%</p>
                                          <p>85/162</p>
                                        </div>
                                        <div class="progress progress-md">
                                          <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </div>
                                    </td>
                                    <td><div class="badge badge-opacity-warning">In progress</div></td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex">
                                        <img src="images/faces/face3.jpg" alt="">
                                        <div>
                                          <h6>Wayne Murphy</h6>
                                          <p>Head admin</p>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <h6>Company name 1</h6>
                                      <p>company type</p>
                                    </td>
                                    <td>
                                      <div>
                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                          <p class="text-success">65%</p>
                                          <p>85/162</p>
                                        </div>
                                        <div class="progress progress-md">
                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </div>
                                    </td>
                                    <td><div class="badge badge-opacity-warning">In progress</div></td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex">
                                        <img src="images/faces/face4.jpg" alt="">
                                        <div>
                                          <h6>Matthew Bailey</h6>
                                          <p>Head admin</p>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <h6>Company name 1</h6>
                                      <p>company type</p>
                                    </td>
                                    <td>
                                      <div>
                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                          <p class="text-success">65%</p>
                                          <p>85/162</p>
                                        </div>
                                        <div class="progress progress-md">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </div>
                                    </td>
                                    <td><div class="badge badge-opacity-danger">Pending</div></td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex">
                                        <img src="images/faces/face5.jpg" alt="">
                                        <div>
                                          <h6>Katherine Butler</h6>
                                          <p>Head admin</p>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <h6>Company name 1</h6>
                                      <p>company type</p>
                                    </td>
                                    <td>
                                      <div>
                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                          <p class="text-success">65%</p>
                                          <p>85/162</p>
                                        </div>
                                        <div class="progress progress-md">
                                          <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </div>
                                    </td>
                                    <td><div class="badge badge-opacity-success">Completed</div></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row flex-grow">
                      <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body card-rounded">
                            <h4 class="card-title  card-title-dash">Recent Events</h4>
                            <div class="list align-items-center border-bottom py-2">
                              <div class="wrapper w-100">
                                <p class="mb-2 font-weight-medium">
                                  Change in Directors
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                    <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="list align-items-center border-bottom py-2">
                              <div class="wrapper w-100">
                                <p class="mb-2 font-weight-medium">
                                  Other Events
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                    <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="list align-items-center border-bottom py-2">
                              <div class="wrapper w-100">
                                <p class="mb-2 font-weight-medium">
                                  Quarterly Report
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                    <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="list align-items-center border-bottom py-2">
                              <div class="wrapper w-100">
                                <p class="mb-2 font-weight-medium">
                                  Change in Directors
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                    <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <div class="list align-items-center pt-3">
                              <div class="wrapper w-100">
                                <p class="mb-0">
                                  <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                              <h4 class="card-title card-title-dash">Activities</h4>
                              <p class="mb-0">20 finished, 5 remaining</p>
                            </div>
                            <ul class="bullet-line-list">
                              <li>
                                <div class="d-flex justify-content-between">
                                  <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                  <p>Just now</p>
                                </div>
                              </li>
                              <li>
                                <div class="d-flex justify-content-between">
                                  <div><span class="text-light-green">Oliver Noah</span> assign you a task</div>
                                  <p>1h</p>
                                </div>
                              </li>
                              <li>
                                <div class="d-flex justify-content-between">
                                  <div><span class="text-light-green">Jack William</span> assign you a task</div>
                                  <p>1h</p>
                                </div>
                              </li>
                              <li>
                                <div class="d-flex justify-content-between">
                                  <div><span class="text-light-green">Leo Lucas</span> assign you a task</div>
                                  <p>1h</p>
                                </div>
                              </li>
                              <li>
                                <div class="d-flex justify-content-between">
                                  <div><span class="text-light-green">Thomas Henry</span> assign you a task</div>
                                  <p>1h</p>
                                </div>
                              </li>
                              <li>
                                <div class="d-flex justify-content-between">
                                  <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                  <p>1h</p>
                                </div>
                              </li>
                              <li>
                                <div class="d-flex justify-content-between">
                                  <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                  <p>1h</p>
                                </div>
                              </li>
                            </ul>
                            <div class="list align-items-center pt-3">
                              <div class="wrapper w-100">
                                <p class="mb-0">
                                  <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-flex flex-column">
                    <div class="row flex-grow">
                      <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="d-flex justify-content-between align-items-center">
                                  <h4 class="card-title card-title-dash">Todo list</h4>
                                  <div class="add-items d-flex mb-0">
                                    <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                    <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                                  </div>
                                </div>
                                <div class="list-wrapper">
                                  <ul class="todo-list todo-list-rounded">
                                    <li class="d-block">
                                      <div class="form-check w-100">
                                        <label class="form-check-label">
                                          <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                        </label>
                                        <div class="d-flex mt-2">
                                          <div class="ps-4 text-small me-3">24 June 2020</div>
                                          <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                          <i class="mdi mdi-flag ms-2 flag-color"></i>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="d-block">
                                      <div class="form-check w-100">
                                        <label class="form-check-label">
                                          <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                        </label>
                                        <div class="d-flex mt-2">
                                          <div class="ps-4 text-small me-3">23 June 2020</div>
                                          <div class="badge badge-opacity-success me-3">Done</div>
                                        </div>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="form-check w-100">
                                        <label class="form-check-label">
                                          <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                        </label>
                                        <div class="d-flex mt-2">
                                          <div class="ps-4 text-small me-3">24 June 2020</div>
                                          <div class="badge badge-opacity-success me-3">Done</div>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="border-bottom-0">
                                      <div class="form-check w-100">
                                        <label class="form-check-label">
                                          <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                        </label>
                                        <div class="d-flex mt-2">
                                          <div class="ps-4 text-small me-3">24 June 2020</div>
                                          <div class="badge badge-opacity-danger me-3">Expired</div>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row flex-grow">
                      <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                  <h4 class="card-title card-title-dash">Type By Amount</h4>
                                </div>
                                <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                                <div id="doughnut-chart-legend" class="mt-5 text-center"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row flex-grow">
                      <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                  <div>
                                    <h4 class="card-title card-title-dash">Leave Report</h4>
                                  </div>
                                  <div>
                                    <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Month Wise </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                        <h6 class="dropdown-header">week Wise</h6>
                                        <a class="dropdown-item" href="#">Year Wise</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mt-3">
                                  <canvas id="leaveReport"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row flex-grow">
                      <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                  <div>
                                    <h4 class="card-title card-title-dash">Top Performer</h4>
                                  </div>
                                </div>
                                <div class="mt-3">
                                  <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                    <div class="d-flex">
                                      <img class="img-sm rounded-10" src="images/faces/face1.jpg" alt="profile">
                                      <div class="wrapper ms-3">
                                        <p class="ms-1 mb-1 fw-bold">Brandon Washington</p>
                                        <small class="text-muted mb-0">162543</small>
                                      </div>
                                    </div>
                                    <div class="text-muted text-small">
                                      1h ago
                                    </div>
                                  </div>
                                  <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                    <div class="d-flex">
                                      <img class="img-sm rounded-10" src="images/faces/face2.jpg" alt="profile">
                                      <div class="wrapper ms-3">
                                        <p class="ms-1 mb-1 fw-bold">Wayne Murphy</p>
                                        <small class="text-muted mb-0">162543</small>
                                      </div>
                                    </div>
                                    <div class="text-muted text-small">
                                      1h ago
                                    </div>
                                  </div>
                                  <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                    <div class="d-flex">
                                      <img class="img-sm rounded-10" src="images/faces/face3.jpg" alt="profile">
                                      <div class="wrapper ms-3">
                                        <p class="ms-1 mb-1 fw-bold">Katherine Butler</p>
                                        <small class="text-muted mb-0">162543</small>
                                      </div>
                                    </div>
                                    <div class="text-muted text-small">
                                      1h ago
                                    </div>
                                  </div>
                                  <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                    <div class="d-flex">
                                      <img class="img-sm rounded-10" src="images/faces/face4.jpg" alt="profile">
                                      <div class="wrapper ms-3">
                                        <p class="ms-1 mb-1 fw-bold">Matthew Bailey</p>
                                        <small class="text-muted mb-0">162543</small>
                                      </div>
                                    </div>
                                    <div class="text-muted text-small">
                                      1h ago
                                    </div>
                                  </div>
                                  <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                    <div class="d-flex">
                                      <img class="img-sm rounded-10" src="images/faces/face5.jpg" alt="profile">
                                      <div class="wrapper ms-3">
                                        <p class="ms-1 mb-1 fw-bold">Rafell John</p>
                                        <small class="text-muted mb-0">Alaska, USA</small>
                                      </div>
                                    </div>
                                    <div class="text-muted text-small">
                                      1h ago
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade show" id="completed" role="tabpanel" aria-labelledby="completed">
                <div class='col-md-12 d-flex flex-row align-items-center justify-content-between' style='background-color: #fff; padding: 10px;'>
                  Hiii
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
</script>
@endsection