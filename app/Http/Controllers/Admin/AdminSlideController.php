<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slide;
use Illuminate\Support\Str;

class AdminSlideController extends Controller
{
    public function index()
    {
        $slides = Slide::get();
        return view('pages.admin.slide.slide_view', compact('slides'));
    }

    public function add()
    {
        return view('pages.admin.slide.slide_add');
    }

    public function store(Request $request)
    {

        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $ext = $request->file('photo')->extension();
        $final_name = time() . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);

        Slide::create([
            'photo' => $final_name,
            'heading' => $request->heading,
            'text' => $request->text,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
            // 'slug' => Str::slug($request->title)
        ]);

        // $obj = new Slide();
        // $obj->photo = $final_name;
        // $obj->heading = $request->heading;
        // $obj->text = $request->text;
        // $obj->button_text = $request->button_text;
        // $obj->button_url = $request->button_url;
        // $obj->save();

        return redirect()->route('admin_slide_view')->with('success', 'Slide berhasil ditambah');
    }

    public function edit($id)
    {
        $slide_data = Slide::where('id', $id)->first();
        return view('pages.admin.slide.slide_edit', compact('slide_data'));
    }

    public function update(Request $request, $id)
    {
        // $obj = Slide::where('id',$id)->first();
        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
            ]);
            $ext = $request->file('photo')->extension();
            $final_name = time() . '.' . $ext;
            $request->file('photo')->move(public_path('uploads/'), $final_name);
            Slide::where('id', $id)->update([
                'photo' => $final_name,
                'heading' => $request->heading,
                'text' => $request->text,
                'button_text' => $request->button_text,
                'button_url' => $request->button_url,
                // 'slug' => Str::slug($request->title)
            ]);
        } else {
            Slide::where('id', $id)->update([
                'heading' => $request->heading,
                'text' => $request->text,
                'button_text' => $request->button_text,
                'button_url' => $request->button_url,
                // 'slug' => Str::slug($request->title)
            ]);
        }

        // Slide::where('id',$id)->update([
        //     'photo' => $final_name,
        //     'heading' => $request->heading,
        //     'text' => $request->text,
        //     'button_text' => $request->button_text,
        //     'button_url' => $request->button_url,
        //     // 'slug' => Str::slug($request->title)
        // ]);

        // $obj->heading = $request->heading;
        // $obj->text = $request->text;
        // $obj->button_text = $request->button_text;
        // $obj->button_url = $request->button_url;
        // $obj->update();

        return redirect()->back()->with('success', 'Slide berhasil diperbarui.');
    }

    public function delete($id)
    {
        $single_data = Slide::where('id', $id)->first();
        unlink(public_path('uploads/' . $single_data->photo));
        $single_data->delete();

        return redirect()->back()->with('success', 'Slide berhasil dihapus.');
    }
}
