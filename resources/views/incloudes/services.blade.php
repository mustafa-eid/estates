@extends('layouts.parent')

@section('title', 'Our Services')

@section('content')
    {{-- خدماتنا --}}
    <section id="services" class="mt-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <p class="m-0 fw-bold">معرفه خدماتنا بالكامل</p>
                    <img src="{{ asset('img/arrow.png') }}" class="img-fluid" alt="Arrow">
                </div>
                <div class="btn btn-red px-5 py-2" style="box-shadow: -10px 10px 5px rgba(0, 0, 0, 0.3);">خدماتنا
                </div>
            </div>
            @if ($services->isEmpty())
                <div class="alert alert-warning text-center mt-4" role="alert">
                    لا توجد خدمات متاحة حالياً.
                </div>
            @else
                <div class="row design-rows mt-4">
                    @foreach ($services as $service)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                            <div class="specialists-card h-100">
                                @php
                                    $imagePath = url('img/admins/' . ($service->image ?? 'default.png'));
                                @endphp
                                <img src="{{ $imagePath }}" style="height: 240px;" class="img-fluid w-100"
                                    alt="Service Image">
                                <div class="card-details text-center p-3">
                                    <h4 class="text-red">{{ $service->ar_desc }}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="indicators-container mb-3 d-flex gap-1 justify-content-center"></div>
            <div class="w-50 m-auto mt-5" style="border-top:2px solid #646464"></div>
        </div>
    </section>
    {{-- خدماتنا --}}
@endsection