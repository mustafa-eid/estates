@extends('admins.layouts.parent')

@section('title', 'تعديل بيانات التواصل')

@section('content')

    @include('admins.incloudes.messages')

    <section class="footer" id="footer">
        <div class="container">
            <div class="row align-items-center">
                @if ($contacts)
                    <!-- Contact Details Section -->
                    <div class="col-md-6 text-lg-end">
                        <form action="{{ route('admin.contacts.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="icons-and-text-footer mt-3 mb-2">
                                <div class="log-and-text-footer align-items-center d-flex justify-content-end gap-3">
                                    @php
                                        $imagePath = url('img/admins/' . ($contacts->logo ?? 'default.png'));
                                    @endphp
                                    <img src="{{ $imagePath }}" style="width: 120px; height: 90px; border-radius: 40%;"
                                        class="img-fluid" alt="شعار الشركة">
                                    <h5 class="text-light mt-2 mb-0">مصر العربية<br>للتنمية العمرانية</h5>
                                </div>
                                <div class="icons-footer text-start">
                                    <div class="row">
                                        <!-- Two inputs on the same line -->
                                        <div class="col-md-6">
                                            <div class="mt-3 mb-2">
                                                <label for="company_name" class="text-primary">اسم الشركة</label>
                                                <input type="text" name="company_name" id="company_name"
                                                    class="form-control mt-2"
                                                    value="{{ old('company_name', $contacts->company_name) }}">
                                                <span class="mx-2 text-white"><i class="fa-solid fa-building"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-3 mb-2">
                                                <label for="logo" class="text-primary">شعار الشركة</label>
                                                <input type="file" name="logo" id="logo"
                                                    class="form-control mt-2">
                                                <span class="mx-2 text-white"><i class="fa-solid fa-image"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Other inputs -->
                                        <div class="col-md-6">
                                            <div class="mt-3 mb-2">
                                                <label for="location" class="text-primary">الموقع</label>
                                                <input type="text" name="location" id="location"
                                                    class="form-control mt-2"
                                                    value="{{ old('location', $contacts->location) }}">
                                                <span class="mx-2 text-white"><i
                                                        class="fa-solid fa-location-dot"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-3 mb-2">
                                                <label for="phone" class="text-primary">رقم الهاتف</label>
                                                <input type="text" name="phone" id="phone"
                                                    class="form-control mt-2" value="{{ old('phone', $contacts->phone) }}">
                                                <span class="mx-2 text-white"><i class="fa-solid fa-phone"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- More inputs if needed -->
                                        <div class="col-md-6">
                                            <div class="mt-3 mb-2">
                                                <label for="working_hours" class="text-primary">ساعات العمل</label>
                                                <input type="text" name="working_hours" id="working_hours"
                                                    class="form-control mt-2"
                                                    value="{{ old('working_hours', $contacts->working_hours) }}">
                                                <span class="mx-2 text-white"><i class="fa-solid fa-clock"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-3 mb-2">
                                                <label for="contact_email" class="text-primary">البريد الإلكتروني</label>
                                                <input type="email" name="email" id="contact_email"
                                                    class="form-control mt-2" value="{{ old('email', $contacts->email) }}">
                                                <span class="mx-2 text-white"><i class="fa-solid fa-envelope"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">تحديث البيانات</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @else
                    <div class="col-12 text-center">
                        <div class="alert alert-warning" role="alert">
                            لا توجد بيانات لعرضها.
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

@endsection
