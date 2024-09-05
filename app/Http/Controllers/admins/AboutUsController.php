<?php

namespace App\Http\Controllers\admins;

use App\Http\traits\media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\admins\StoreAboutUsRequest;
use App\Http\Requests\admins\UpdateAboutUsRequest;

class AboutUsController extends Controller
{
    use media;

    public function createAboutUs()
    {
        return view('admins.aboutUs.createAboutUs');
    }

    public function storeAboutUs(StoreAboutUsRequest $request)
    {
        $aboutUs = DB::table('about_us')->first();

        if ($aboutUs) {
            return redirect()->back()->with('error', 'مسموح بإدخال واحد فقط لقسم "من نحن".');
        }

        $photoName1 = $this->upload_image($request->file('image_1'), 'admins');
        $photoName2 = $this->upload_image($request->file('image_2'), 'admins');

        $data = $request->except('_token', '_method', 'image_1', 'image_2');
        $data['image_1'] = $photoName1;
        $data['image_2'] = $photoName2;

        DB::table('about_us')->insert($data);

        return redirect()->route('admin.createAboutUs')->with('success', 'Data saved successfully!');
    }


    public function editAboutUs()
    {
        $aboutUsData = DB::table('about_us')->first();
        return view('admins.aboutUs.editAboutUs', compact('aboutUsData'));
    }

    public function updateAboutUs(UpdateAboutUsRequest $request)
    {
        $data = $request->except('_token', '_method', 'image_1', 'image_2');

        if ($request->hasFile('image_1')) {
            $oldImage1 = DB::table('about_us')->first()->image_1;
            if ($oldImage1) {
                $oldImagePath1 = public_path('img/admins/' . $oldImage1);
                if (file_exists($oldImagePath1)) {
                    unlink($oldImagePath1);
                }
            }

            $photoName1 = $this->upload_image($request->file('image_1'), 'admins');
            $data['image_1'] = $photoName1;
        } else {
            $data['image_1'] = DB::table('about_us')->first()->image_1;
        }

        if ($request->hasFile('image_2')) {
            $oldImage2 = DB::table('about_us')->first()->image_2;
            if ($oldImage2) {
                $oldImagePath2 = public_path('img/admins/' . $oldImage2);
                if (file_exists($oldImagePath2)) {
                    unlink($oldImagePath2);
                }
            }

            $photoName2 = $this->upload_image($request->file('image_2'), 'admins');
            $data['image_2'] = $photoName2;
        } else {
            $data['image_2'] = DB::table('about_us')->first()->image_2;
        }

        DB::table('about_us')->update($data);
        return redirect()->route('admin.editAboutUs')->with('success', 'Data updated successfully!');
    }
}
