@extends('admins.layouts.parent')

@section('title', 'تعديل بيانات التواصل')

@section('content')

@include('admins.incloudes.messages')

<div class="container">
    <form action="{{ route('admin.info.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="video" class="form-label">رفع الفيديو</label>
            <input type="file" class="form-control" id="video" name="video" accept="video/*" required>
        </div>
        <div class="mb-3">
            <label for="image1" class="form-label">رفع الصورة الأولى</label>
            <input type="file" class="form-control" id="image1" name="image1" accept="image/*" required>
        </div>
        <div class="mb-3">
            <label for="image2" class="form-label">رفع الصورة الثانية</label>
            <input type="file" class="form-control" id="image2" name="image2" accept="image/*" required>
        </div>
        <div class="mb-3">
            <label for="description1" class="form-label">الوصف 1</label>
            <textarea class="form-control" id="description1" name="ar_description" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="description2" class="form-label">الوصف 2</label>
            <textarea class="form-control" id="description2" name="ar_additional_description" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">إرسال</button>
    </form>
    
</div>
@endsection
