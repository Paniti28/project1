<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $result = Activity::all();

        $data = [
            'items' => $result
        ];
        return view('activity.index', $data);
    }
    //เอาไว้บันทึกข้อมูล
    public function create($name)
    {
        $activity = new Activity();
        $activity->name = $name;
        $activity->save();
        return redirect('/กิจกรรม');
    }
    public function delete($id)
    {
        $activity = Activity::find($id);

        $activity->delete();

        return redirect('/กิจกรรม');
    }
}
