@extends('admins.layouts.parent')

@section('title', 'تعديل الخدمة')

@section('content')

    @include('admins.incloudes.messages')

    <section id="edit-service" class="mt-5 mb-5">
        <div class="container">
            <form action="{{ route('admin.service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row align-items-start p-4 bg-light rounded shadow-sm">
                    <div class="col-md-6 mb-3">
                        <div class="img-container d-flex flex-column align-items-center">
                            @php
                                $imagePath = url('img/admins/' . ($service->image ?? 'default.png'));
                            @endphp
                            <img src="{{ $imagePath }}" class="img-fluid mb-3"
                                style="width: 100%; max-width: 300px; height: auto;" alt="صورة الخدمة">
                            <input type="file" name="image" class="form-control" style="max-width: 300px;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ar_desc" class="form-label">الوصف</label>
                            <textarea name="ar_desc" id="ar_desc" class="form-control" rows="6"
                                placeholder="أدخل الوصف هنا">{{ old('ar_desc', $service->ar_desc) }}</textarea>
                        </div>
                    </div>
                </div>
                
                <div class="w-50 mx-auto my-5 border-top border-secondary"></div>
                
                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-success px-4 py-2 shadow rounded">
                        حفظ التعديلات
                    </button>
                </div>
            </form>
        </div>
    </section>

@endsection
