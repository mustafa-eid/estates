@extends('admins.layouts.parent')

@section('title', 'تعديل بيانات التواصل')

@section('content')

    @include('admins.incloudes.messages')

    <div class="container">
        @if ($info)
            @if ($info->video || $info->image1 || $info->image2 || $info->ar_description || $info->ar_additional_description)
                <form action="{{ route('admin.info.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="video" class="form-label">رفع الفيديو</label>
                        <input type="file" class="form-control" id="video" name="video" accept="video/*">
                        @if ($info->video)
                            <video width="160" height="120" controls style="object-fit: cover;">
                                <source src="{{ asset('img/videos/' . $info->video) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="image1" class="form-label">رفع الصورة الأولى</label>
                        <input type="file" class="form-control" id="image1" name="image1" accept="image/*">
                        @if ($info->image1)
                            <img src="{{ asset('img/admins/' . $info->image1) }}" alt="Image 1"
                                style="width: 150px; height: 100px; object-fit: cover;">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="image2" class="form-label">رفع الصورة الثانية</label>
                        <input type="file" class="form-control" id="image2" name="image2" accept="image/*">
                        @if ($info->image2)
                            <img src="{{ asset('img/admins/' . $info->image2) }}" alt="Image 2"
                                style="width: 150px; height: 100px; object-fit: cover;">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="description1" class="form-label">الوصف 1</label>
                        <textarea class="form-control" id="description1" name="ar_description" rows="3" required>{{ $info->ar_description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="description2" class="form-label">الوصف 2</label>
                        <textarea class="form-control" id="description2" name="ar_additional_description" rows="3" required>{{ $info->ar_additional_description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
                </form>
            @else
                <div class="alert alert-warning" role="alert">
                    لا توجد بيانات لعرضها.
                </div>
            @endif
        @else
            <div class="alert alert-warning" role="alert">
                لم يتم العثور على البيانات.
            </div>
        @endif
    </div>

@endsection
