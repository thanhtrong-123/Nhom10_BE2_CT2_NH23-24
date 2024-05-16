<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ReviewController extends Controller
{
    public function index() {
        $this->AuthLogin();
        $data = Review::where('review_id', '>', 0)->paginate(4);
        return view('admin.review.all_review')->with('data', $data);
    }

    public function add(Request $request) {
        $data = new Review;
        $data->product_id = $request->product_id;
        $data->customer_id = $request->customer_id;
        $data->review_rating = $request->rating;
        $data->review_title = $request->title;
        $data->review_comment = $request->comment;
        $data->save();
        return redirect()->back();
    }

    public function edit($review_id) {
        $data = Review::find($review_id);
        Session::put('review_id', $data->review_id);
        Session::put('review_rating', $data->review_rating);
        Session::put('review_title', $data->review_title);
        Session::put('review_comment', $data->review_comment);
        return redirect()->back();
    }

    public function update(Request $request) {
        $data = Review::find($request->review_id);
        $data->review_rating = $request->rating;
        $data->review_title = $request->title;
        $data->review_comment = $request->comment;
        $data->save();
        Session::put('review_id', null);
        Session::put('review_rating', null);
        Session::put('review_title', null);
        Session::put('review_comment', null);
        return redirect()->back();
    }

    public function delete($review_id) {
        Review::destroy($review_id);
        return redirect()->back();
    }

    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
}
