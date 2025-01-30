<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    public function timeline (){
        $timelines = Timeline::with('study_programs')->where('study_program_id', '=', Auth::user()->study_program_id)->where('status', '=', 0)->get();
        return response($timelines);
    }
}
