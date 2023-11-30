<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('dashboard.feedback.index', ['data' => Feedback::orderBy('created_at', 'DESC')->get()]);
    }
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'overall' => 'required',
            'food' => 'required',
            'service' => 'required',
            'ambiance' => 'required',
            'comment' => 'required',
            'value' => 'required',
        ]);

        if ($validator->fails()) {

            return [
                'status' => false,
                'errors' => $validator->errors()->all(),
            ];
        } else {
            $item = new Feedback();
            $item->overall = $request->overall;
            $item->food = $request->food;
            $item->service = $request->service;
            $item->ambiance = $request->ambiance;
            $item->comment = $request->comment;
            $item->name = $request->name;
            $item->email = $request->email ?? 'None';
            $item->value = $request->value ?? 'None';
            $item->save();
            return [
                'status' => true,
            ];
        }

    }

    public function del($id)
    {
        $data = Feedback::destroy($id);
        return redirect(' feedback')->with('success', 'Deleted Successfuly.');
    }
}
