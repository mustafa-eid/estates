@extends('admins.layouts.parent')

@section('title', 'إنشاء')

@section('content')

@include('admins.incloudes.messages')

<section id="about" class="mt-5 mb-5">
    <div class="container">
        @if(!$aboutUsData)
            <div class="alert alert-warning text-center" role="alert">
                لا توجد بيانات حالياً. يرجى إدخال بيانات جديدة.
            </div>
        @else
            <form action="{{ route('admin.updateAboutUs') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-center p-2">
                    <div class="col-md-6">
                        <div class="img-and-bg">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    @php
                                        $image1Path = url('img/admins/' . ($aboutUsData->image_1 ?? 'default.png'));
                                    @endphp
                                    <img src="{{ $image1Path }}" class="mx-2 img-fluid"
                                        style="width: 300px; height: 346px;" alt="صورة المجموعة">
                                    <input type="file" name="image_1" class="form-control mt-2">
                                </div>
                                <div class="col-6">
                                    @php
                                        $image2Path = url('img/admins/' . ($aboutUsData->image_2 ?? 'default.png'));
                                    @endphp
                                    <img src="{{ $image2Path }}" class="mx-2 img-fluid"
                                        style="width: 300px; height: 346px;" alt="صورة المجموعة">
                                    <input type="file" name="image_2" class="form-control mt-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="title-contents">
                            <h2 class="mt-3 mb-2 text-capitalize fw-bold text-primary">
                                <input type="text" name="ar_title"
                                    class="form-control border-0 bg-light fs-3 fw-bold text-primary p-3 rounded"
                                    value="{{ $aboutUsData->ar_title ?? '' }}" placeholder="أدخل العنوان هنا">
                            </h2>
                        </div>

                        <div class="three-descrip">
                            @foreach (['ar_desc_1', 'ar_desc_2', 'ar_desc_3'] as $index => $desc)
                                <div class="decri d-flex align-items-center mt-3">
                                    <img src="{{ asset('icons/Group ' . (237640 + $index) . '.png') }}" class="img-fluid mt-3 rounded-circle"
                                        style="width: 100px; height: 100px;" alt="">
                                    <textarea name="{{ $desc }}" class="form-control mt-2" rows="2" placeholder="أدخل الوصف هنا">{{ $aboutUsData->$desc ?? '' }}</textarea>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="w-50 mx-auto my-5 border-top border-secondary"></div>
                <div class="d-flex justify-content-center mt-3 mb-5 container">
                    <button type="submit" class="btn btn-success px-5 py-2 shadow">
                        حفظ البيانات
                    </button>
                </div>
            </form>
        @endif
    </div>
</section>

@endsection
