@extends('layouts.parent')

@section('title', 'About Us')

@section('content')
<section id="about" class="mt-5 mb-5">
    <div class="container text-start">
        <div class="btn btn-red px-5 py-2 mb-3" style="box-shadow: -10px 10px 5px rgba(0, 0, 0, 0.3);">
            معلومات عنا
        </div>
        <div class="row align-items-center p-2">
            <div class="col-md-6">
                <div class="img-and-bg">
                    <div class="row align-items-center">
                        <div class="col-6">
                            @php
                                $image1Path = !empty($aboutUsData->image_1) ? url('img/admins/' . $aboutUsData->image_1) : url('img/Group.png');
                            @endphp
                            <img src="{{ $image1Path }}" class="mx-2 img-fluid"
                                style="width: 100%; max-width: 300px; height: auto;" alt="صورة المجموعة 1">
                        </div>
                        <div class="col-6">
                            @php
                                $image2Path = !empty($aboutUsData->image_2) ? url('img/admins/' . $aboutUsData->image_2) : url('img/Group-2.png');
                            @endphp
                            <img src="{{ $image2Path }}" class="mx-2 img-fluid"
                                style="width: 100%; max-width: 300px; height: auto;" alt="صورة المجموعة 2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="view-all">
                    <button class="text-black-50 mt-3 ms-4" aria-label="مشاهدة الكل">مشاهدة الكل</button>
                </div>
                <div class="title-contents">
                    <h2 class="mt-3 mb-2 text-capitalize fw-bold ms-4" style="color:#806363;">
                        {{ $aboutUsData->ar_title ?? 'Default Title' }}
                    </h2>
                </div>
                <div class="three-descrip">
                    @foreach(['ar_desc_1', 'ar_desc_2', 'ar_desc_3'] as $desc)
                        <div class="decri d-flex align-items-center mt-3">
                            <img src="{{ asset('icons/Group ' . (237640 + $loop->index) . '.png') }}"
                                style="width: 100px; height: 100px; border-radius: 50%;" class="img-fluid mt-3"
                                alt="Description Image {{ $loop->index + 1 }}">
                            <p class="text-capitalize text-red m-0">
                                {{ $aboutUsData->$desc ?? 'Default Description' }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="w-50 m-auto my-5" style="border-top:2px solid #646464"></div>
    <div class="container text-start mb-5">
        <div class="btn btn-red px-5 py-2" style="box-shadow: -10px 10px 5px rgba(0, 0, 0, 0.3);">
            للتواصل معنا
        </div>
    </div>
</section>
@endsection
