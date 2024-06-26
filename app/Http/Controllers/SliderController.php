<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Show all sliders
        $this->AuthLogin();
        $data = Slider::where('slider_id', '>', 0)->paginate(5);
        return view('admin.slider.list_slider', ['data' => $data]);
    }

    public function searchslider(Request $request){
        $searchslider = $request->searchslider;

        $data =Slider::where(function($query) use ($searchslider){

            $query->where('slider_name','like',"%$searchslider%")
            ->orWhere('slider_desc','like',"%$searchslider%");
            })
            ->paginate(5);
            return view('admin.slider.list_slider', ['data' => $data, 'searchslider']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Create slider
        $this->AuthLogin();
        return view('admin.slider.add_slider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->AuthLogin();
        $data = new Slider;
        $data->slider_name = $request->slider_name;
        $data->slider_desc = $request->slider_desc;
        $data->slider_status = $request->slider_status;
        // Bổ sung ràng buộc Validate
        $validation = $request->validate([
            'slider_image' => 'required|file|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);
        // Kiểm tra xem người dùng có upload hình ảnh hay không?
        if ($request->hasFile('slider_image')) {
            $file = $request->slider_image;

            // Lưu tên hình vào column slider_image
            $data->slider_image = $file->store('profile');

            // Chép file vào thư mục "storate/public/images/banners"
            $fileSaved = $file->storeAs('public/images/banners', $data->slider_image);
        }
        $data->save();
        Session::put('message', 'Thêm slider thành công');
        return Redirect::to('slider');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->AuthLogin();
        $data = Slider::find($id);
        // Xóa image cua slider
        Storage::delete('public/images/banners/' . $data->slider_image);
        // Delete slider
        Slider::destroy($id);
        Session::put('message','Xóa slider thành công');
        return Redirect::to('slider');
    }

    public function unactive_slider($slider_id){
        $this->AuthLogin();
        $data = new Slider;
        $data->where('slider_id', $slider_id)->update(['slider_status' => 1]);
        Session::put('message','Không hiển thị banner thành công');
        return Redirect::to('slider');

    }

    public function active_slider($slider_id){
        $this->AuthLogin();
        $data = new Slider;
        $data->where('slider_id', $slider_id)->update(['slider_status' => 0]);
        Session::put('message','Hiển thị banner thành công');
        return Redirect::to('slider');
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
