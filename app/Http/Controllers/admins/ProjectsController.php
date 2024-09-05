<?php

namespace App\Http\Controllers\Admins;

use App\Http\Traits\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admins\StoreProjectRequest;
use App\Http\Requests\Admins\UpdateProjectRequest;

class ProjectsController extends Controller
{
    use Media;

    public function allProjects()
    {
        $projects = DB::table('projects')->get();

        return view('admins.ourProjects.allProject', compact('projects'));
    }

    public function createProject()
    {
        return view('admins.ourProjects.createProject');
    }

    public function storeProject(StoreProjectRequest $request)
    {
        $photoName = $this->upload_image($request->file('image'), 'admins');

        $data = $request->except('_token', 'image');
        $data['image'] = $photoName;

        DB::table('projects')->insert($data);

        return redirect()->route('admin.projects.all')->with('success', 'تم إضافة المشروع بنجاح!');
    }

    public function destroy($id)
    {
        $project = DB::table('projects')->where('id', $id)->first();
        if ($project) {
            $imagePath = public_path('img/admins/' . $project->image);
            if ($project->image && file_exists($imagePath)) {
                unlink($imagePath);
            }

            DB::table('projects')->where('id', $id)->delete();
            return redirect()->route('admin.projects.all')->with('success', 'تم حذف المشروع بنجاح!');
        }
        return redirect()->route('admin.projects.all')->with('error', 'المشروع غير موجود!');
    }
    
    public function edit($id)
    {
        $project = DB::table('projects')->where('id', $id)->first();
        if (!$project) {
            return redirect()->route('projects.all')->with('error', 'المشروع غير موجود!');
        }
        return view('admins.ourProjects.editProject', compact('project'));
    }

    public function update(UpdateProjectRequest $request, $id)
    {
        $project = DB::table('projects')->where('id', $id)->first();
        if ($project) {
            $data = $request->except('_token', '_method', 'image');
            if ($request->hasFile('image')) {
                $imagePath = public_path('img/admins/' . $project->image);
                if ($project->image && file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $photoName = $this->upload_image($request->file('image'), 'admins');
                $data['image'] = $photoName;
            } else {
                $data['image'] = $project->image;
            }

            DB::table('projects')->where('id', $id)->update($data);
            return redirect()->route('admin.projects.all')->with('success', 'تم تحديث المشروع بنجاح!');
        }
        return redirect()->route('admin.projects.all')->with('error', 'المشروع غير موجود!');
    }
}
