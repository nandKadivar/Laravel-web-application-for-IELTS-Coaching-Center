<?php

namespace App\Http\Controllers\Zoom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ZoomJWT;

class MeetingController extends Controller
{
    use ZoomJWT;

    const MEETING_TYPE_INSTANT = 1;
    const MEETING_TYPE_SCHEDULE = 2;
    const MEETING_TYPE_RECURRING = 3;
    const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;

    // public function list(Request $request) {
        
    //     $path = 'users/me/meetings';
    //     $response = $this->zoomGet($path);

    //     $data = json_decode($response->body(), true);
    //     $data['meetings'] = array_map(function (&$m) {
    //         $m['start_at'] = $this->toUnixTimeStamp($m['start_time'], $m['timezone']);
    //         return $m;
    //     }, $data['meetings']);

    //     return [
    //         'success' => $response->ok(),
    //         'data' => $data,
    //     ];       
    // }
    // public function create(Request $request) { /**/ }
    // public function get(Request $request, string $id) { /**/ }
    // public function update(Request $request, string $id) { /**/ }
    // public function delete(Request $request, string $id) { /**/ }

    public function list(){
        $meetingList = $this->listZoom();

        return view('admin.pages.classes', compact('meetingList'));
        // return view('admin.pages.classes', ['list' => $meetingList]);
    }
    
    public function show($id){
        $meeting = $this->getZoom($id);

        return view('meetings.index', compact('meeting'));
    }

    public function store(Request $request){
        $this->createZoom($request->all());

        return redirect()->route('admin.classes')->with('status', 'Meeting Created Successfully');
    }

    public function update($meeting, Request $request){
        $this->updateZoom($meeting->zoom_meeting_id, $request->all());

        return redirect()->route('meetings.index');
    }

    public function destroy($id){
        $this->deleteZoom($id);

        return redirect()->route('admin.classes')->with('status','Meeting Deleted Successfully');
        // return $this->sendSuccess('Meeting deleted successfully.');
    }
}
