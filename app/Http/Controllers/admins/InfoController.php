<?php

namespace App\Http\Controllers\Admins;

use App\Http\Traits\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\admins\StoreInfoRequest;
use App\Http\Requests\admins\UpdateInfoRequest;

class InfoController extends Controller
{
    use Media;

    public function createInfo()
    {
        return view('admins.info.createInfo');
    }

    public function storeInfo(StoreInfoRequest $request)
    {
        $existingInfo = DB::table('info')->first();

        if ($existingInfo) {
            return redirect()->back()->with('error', 'مسموح بإدخال واحد فقط لقسم "المعلومات".');
        }

        $videoName = $this->upload_image($request->file('video'), 'videos');
        $image1Name = $this->upload_image($request->file('image1'), 'admins');
        $image2Name = $this->upload_image($request->file('image2'), 'admins');

        $data = $request->except('_token', 'video', 'image1', 'image2');
        $data['video'] = $videoName;
        $data['image1'] = $image1Name;
        $data['image2'] = $image2Name;

        DB::table('info')->insert($data);

        return redirect()->route('admin.info.create')->with('success', 'تم حفظ البيانات بنجاح!');
    }


    public function editInfo()
    {
        $info = DB::table('info')->first();
        return view('admins.info.editInfo', compact('info'));
    }

    public function updateInfo(UpdateInfoRequest $request)
    {
        $data = $request->except('_token', '_method', 'video', 'image1', 'image2');

        $info = DB::table('info')->first();

        // Handle video upload
        if ($request->hasFile('video')) {
            if ($info->video) {
                $oldVideoPath = public_path('img/videos/' . $info->video);
                if (file_exists($oldVideoPath)) {
                    unlink($oldVideoPath);
                }
            }
            $data['video'] = $this->upload_image($request->file('video'), 'videos');
        } else {
            $data['video'] = $info->video;
        }

        if ($request->hasFile('image1')) {
            if ($info->image1) {
                $oldImage1Path = public_path('img/admins/' . $info->image1);
                if (file_exists($oldImage1Path)) {
                    unlink($oldImage1Path);
                }
            }
            $data['image1'] = $this->upload_image($request->file('image1'), 'admins');
        } else {
            $data['image1'] = $info->image1;
        }

        if ($request->hasFile('image2')) {
            if ($info->image2) {
                $oldImage2Path = public_path('img/admins/' . $info->image2);
                if (file_exists($oldImage2Path)) {
                    unlink($oldImage2Path);
                }
            }
            $data['image2'] = $this->upload_image($request->file('image2'), 'admins');
        } else {
            $data['image2'] = $info->image2;
        }

        DB::table('info')->update($data);

        return redirect()->route('admin.info.edit')->with('success', 'تم تحديث البيانات بنجاح!');
    }
}
