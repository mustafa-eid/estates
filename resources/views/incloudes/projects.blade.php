@extends('layouts.parent')

@section('title', 'Our Project')

@section('content')
    {{-- اعمالنا --}}
    <section id="works" class="mt-5" dir="rtl">
        <div class="container">
            <div class="btn btn-red px-5 py-2" style="box-shadow: -10px 10px 5px rgba(0, 0, 0, 0.3);">أعمالنا</div>
            <div class="mt-5">
                <h2 class="text-center mb-3" style="color:#584348;">جميع اعمالنا </h2>
                <p class="text-center mb-3 w-75 m-auto" style="color:#696984 ;">نقدم مجموعة شاملة من خدمات المقاولات
                    تشمل البناء والتشييد، التصميم الداخلي والخارجي، الترميم والتجديد، وإدارة المشاريع، لضمان تحقيق
                    مشاريعكم بأعلى معايير الجودة والاحترافية."</p>
            </div>
            <div class="row">
                @if ($projects->isEmpty())
                    <div class="col-12 text-center">
                        <div class="alert alert-warning mt-4" role="alert">
                            لا توجد مشاريع لعرضها في الوقت الحالي.
                        </div>
                    </div>
                @else
                    @foreach ($projects as $project)
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="works-card p-3 text-center mb-3">
                                @php
                                    $imagePath = url('img/admins/' . ($project->image ?? 'default.png'));
                                @endphp
                                <img src="{{ $imagePath }}" class="img-fluid mb-2"
                                    style="width: 100%; max-width: 200px; height: auto;" alt="{{ $project->ar_title }}">
                                <h4 style="color: #0B7077;">{{ $project->ar_title }}</h4>
                                <p style="color:#696984 ;">{{ Str::limit($project->ar_desc, 100) }}</p>
                                <div class="btn px-4 py-2" style="color: #0B7077;">مشاهده الاعمال</div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="text-center mt-3 mb-5">
                <div class="btn px-4 py-2 outline-hover" style="border: 1px solid #0B7077; border-radius: 10px;">مشاهده
                    الكل</div>
            </div>
            <div class="w-50 m-auto mt-5" style="border-top:2px solid #646464"></div>
        </div>
    </section>
    {{-- اعمالنا --}}
@endsection