<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class AdminTestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::get();
        return view('admin.testimonial.index',compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function create_submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'comment' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
            // Ví dụ: testimonial_1717059273.jpg
        $final_name = 'testimonial_'.time().'.'.$request->photo->extension();
            // Di chuyển file đã upload vào thư mục 'public/uploads' với tên mới
        $request->photo->move(public_path('uploads'), $final_name);

        $obj = new Testimonial();
        $obj->photo = $final_name;
        $obj->name = $request->name;
        $obj->designation = $request->designation;
        $obj->comment = $request->comment;
        $obj->save();

        return redirect()->route('admin_testimonial_index')->with('success','Lời Chứng Thực Được Thêm Thành Công');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::where('id',$id)->first();
        return view('admin.testimonial.edit',compact('testimonial'));
    }
    
    public function edit_submit(Request $request, $id)
    {
        $testimonial = Testimonial::where('id',$id)->first();
        
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'comment' => 'required',
        ]);

        if($request->hasFile('photo'))
        {
            $request->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
             // xóa ảnh cũ
            unlink(public_path('uploads/'.$testimonial->photo));

            $final_name = 'testimonial_'.time().'.'.$request->photo->extension();
            $request->photo->move(public_path('uploads'), $final_name);
            $testimonial->photo = $final_name;
        }
        
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->comment = $request->comment;
        $testimonial->save();

        return redirect()->route('admin_testimonial_index')->with('success','Lời Chứng Thực Được Sửa Thành Công');
    }

    public function delete($id)
    {
        $testimonial = Testimonial::where('id',$id)->first();
        unlink(public_path('uploads/'.$testimonial->photo));
        $testimonial->delete();
        return redirect()->route('admin_testimonial_index')->with('success','Lời Chứng Thực Được Xóa Thành Công');
    }
}
