@extends('admins.layouts.parent')

@section('title', 'إنشاء')

@section('content')

    @include('admins.incloudes.messages')
    {{-- تواصل معنا --}}
    <section class="footer" id="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-lg-end">
                    <form action="{{ route('admin.contacts.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="icons-and-text-footer mt-3 mb-2">
                            @csrf
                            <div class="icons-footer text-start">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mt-3 mb-2">
                                            <label for="company_name" class="text-primary">اسم الشركة</label>
                                            <input type="text" name="company_name" class="form-control mt-2">
                                            <span class="mx-2 text-white"><i class="fa-solid fa-building"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3 mb-2">
                                            <label for="logo" class="text-primary">شعار الشركة</label>
                                            <input type="file" name="logo" class="form-control mt-2">
                                            <span class="mx-2 text-white"><i class="fa-solid fa-image"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mt-3 mb-2">
                                            <label for="location" class="text-primary">الموقع</label>
                                            <input type="text" name="location" class="form-control mt-2">
                                            <span class="mx-2 text-white"><i class="fa-solid fa-location-dot"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3 mb-2">
                                            <label for="phone" class="text-primary">رقم الهاتف</label>
                                            <input type="text" name="phone" class="form-control mt-2">
                                            <span class="mx-2 text-white"><i class="fa-solid fa-phone"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mt-3 mb-2">
                                            <label for="working_hours" class="text-primary">ساعات العمل</label>
                                            <input type="text" name="working_hours" class="form-control mt-2">
                                            <span class="mx-2 text-white"><i class="fa-solid fa-clock"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3 mb-2">
                                            <label for="contact_email" class="text-primary">البريد الإلكتروني</label>
                                            <input type="email" name="email" class="form-control mt-2">
                                            <span class="mx-2 text-white"><i class="fa-solid fa-envelope"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">حفظ البيانات</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- تواصل معنا --}}
@endsection
