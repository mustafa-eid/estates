<?php

namespace App\Http\Controllers\Admins;

use App\Http\Traits\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\admins\StoreServicesRequest;
use App\Http\Requests\admins\UpdateServicesRequest;

class ServicesController extends Controller
{
    use Media;

    public function allServices()
    {
        $services = DB::table('services')->get();
        return view('admins.ourServices.allServices', compact('services'));
    }

    public function createService()
    {
        return view('admins.ourServices.createServices');
    }

    public function storeService(StoreServicesRequest $request)
    {
        $logoName = $this->upload_image($request->file('image'), 'admins');

        $data = $request->except('_token', 'image');
        $data['image'] = $logoName;

        DB::table('services')->insert($data);

        return redirect()->route('admin.services.all')->with('success', 'تم إضافة جهة الاتصال بنجاح!');
    }
    public function editService($id)
    {
        $service = DB::table('services')->where('id', $id)->first();
        return view('admins.ourServices.editServices', compact('service'));
    }
    
    

    public function updateService(UpdateServicesRequest $request, $id)
    {
        $service = DB::table('services')->where('id', $id)->first();
    
        if ($service) {
            $data = $request->except('_token', '_method', 'image');
    
            if ($request->hasFile('image')) {
                if ($service->image) {
                    $oldImagePath = public_path('img/admins/' . $service->image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
    
                $imageName = $this->upload_image($request->file('image'), 'admins');
                $data['image'] = $imageName;
            } else {
                $data['image'] = $service->image; 
            }
    
            DB::table('services')->where('id', $id)->update($data);
    
            return redirect()->route('admin.services.all')->with('success', 'تم تحديث الخدمة بنجاح!');
        }
    
        return redirect()->route('admin.services.all')->with('error', 'الخدمة غير موجودة!');
    }
    

    public function destroyService($id)
    {
        $project = DB::table('services')->where('id', $id)->first();
        if ($project) {
            $imagePath = public_path('img/admins/' . $project->image);
            if ($project->image && file_exists($imagePath)) {
                unlink($imagePath);
            }

            DB::table('services')->where('id', $id)->delete();
            return redirect()->route('admin.services.all')->with('success', 'تم حذف المشروع بنجاح!');
        }
        return redirect()->route('admin.services.all')->with('error', 'المشروع غير موجود!');
    }
}
