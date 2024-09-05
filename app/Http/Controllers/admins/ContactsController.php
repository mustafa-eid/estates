<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\admins\StoreContactsRequest;
use App\Http\Requests\admins\UpdateContactsRequest;
use App\Http\Traits\Media;

class ContactsController extends Controller
{
    use Media;

    public function createContacts()
    {
        return view('admins.contacts.createContacts');
    }

    public function storeContacts(StoreContactsRequest $request)
    {
        $contact = DB::table('contacts')->first();

        if ($contact) {
            return redirect()->back()->with('error', 'مسموح بإدخال واحد فقط لقسم "جهات الاتصال".');
        }

        $logoName = $this->upload_image($request->file('logo'), 'admins');

        $data = $request->except('_token', 'logo');
        $data['logo'] = $logoName;

        DB::table('contacts')->insert($data);

        return redirect()->route('admin.contacts.create')->with('success', 'تم إضافة جهة الاتصال بنجاح!');
    }

    public function editContacts()
    {
        $contacts = DB::table('contacts')->first();
        return view('admins.contacts.editContacts', compact('contacts'));
    }

    public function updateContacts(UpdateContactsRequest $request)
    {
        $contact = DB::table('contacts')->first();
    
        if ($contact) {
            $data = $request->except('_token', '_method', 'logo');
    
            if ($request->hasFile('logo')) {
                if ($contact->logo) {
                    $oldLogoPath = public_path('img/admins/' . $contact->logo);
                    if (file_exists($oldLogoPath)) {
                        unlink($oldLogoPath);
                    }
                }
                $logoName = $this->upload_image($request->file('logo'), 'admins');
                $data['logo'] = $logoName;
            } else {
                $data['logo'] = $contact->logo; 
            }
    
            DB::table('contacts')->update($data);
            return redirect()->route('admin.contacts.edit')->with('success', 'تم تحديث جهة الاتصال بنجاح!');
        }
    
        return redirect()->route('admin.contacts.edit')->with('error', 'جهة الاتصال غير موجودة!');
    }
}
