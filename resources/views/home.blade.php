<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <!--bootstrap-file-->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" />
    <!--bootstrap-file-->
    <!--fontawesome-file-->
    <link rel="stylesheet" href="{{ url('css/all.min.css') }}" />
    <!--icons-site-->
    <link rel="icon" type="png" href="{{ url('img/logo.png') }}" />
    <!--icons-site-->
    <link rel="stylesheet" href="{{ url('css/style.css') }}" />
    <!--google-font-->
    <!--woow AnimateFiles Css-->
    <link rel="stylesheet" href="{{ url('css/all.min.css') }}" />
    <!--woow AnimateFiles Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@400;700&display=swap" rel="stylesheet" />
    <!--google-font-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    @yield('links')
</head>

<body class="text-black">
    <div class="bg-red">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-wrap gap-md-2">
                    <div class="d-flex align-items-center gap-2 text-white">
                        <i class="fa-regular fa-envelope"></i>
                        <p class="m-0">info@lifesmilesofnewhope.com</p>
                    </div>
                    <div class="d-flex align-items-center gap-2 text-white">
                        <i class="fa-solid fa-phone"></i>
                        <p class="m-0">(770)445-1314</p>
                    </div>
                </div>
                <div class="d-flex gap-2 text-white align-items-center">
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-facebook"></i>
                </div>
            </div>
        </div>
    </div>
    <header id="home">
        <div class="container-fluid">
            <nav class="navbar bg-white navbar-expand-lg px-3 pt-0">
                <img src="{{ asset('img/logo.png') }}" style="width: 100px" alt="Logo" />
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <span style="color: #3b3a5e"><i class="fa-solid fa-bars p-1"></i></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav text-center m-auto">
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{ route('contactUs') }}">التواصل</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{ route('aboutUs') }}">معلومات عنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{ route('OurProject') }}">المشروعات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{ route('OurServices') }}">الخدمات</a>
                        </li>
                        <li class="nav-item active fw-bold">
                            <a class="nav-link" href="{{ route('homePage') }}">الصفحه الرئيسيه</a>
                        </li>
                        <div class="d-flex mt-2 mt-lg-0 gap-4">
                            <div class="form-group position-relative">
                                <input type="text" class="form-control text-center border-0 bg-light py-2 ps-5"
                                    placeholder="البحث" />
                                <i class="fa-solid fa-search text-secondary position-absolute"
                                    style="
                        top: 50%;
                        transform: translateY(-50%);
                        left: 35%;
                      "></i>
                            </div>
                            <select class="border-0 fw-bold" style="color: #606060">
                                <option value="AR">اللغة العربية</option>
                                <option value="EN">English</option>
                            </select>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
        @foreach ($info as $infoItem)
            <div class="" style="background-color: #b65849">
                @php
                    $videoPath = url('img/videos/' . $infoItem->video);
                @endphp
                <video onplay="showSubscripeFunction()" class="w-100" style="height: 60vh" controls>
                    <source src="{{ $videoPath }}" type="video/mp4" />
                </video>
            </div>
            <div class="container">
                <p class="fw-bold text-center mt-4">
                    {{ $infoItem->ar_description }}
                </p>
            </div>
            <div class=" pt-4" style="border-top:2px solid #646464"></div>
            <div class="container">
                <div class="row" dir="rtl">
                    <div class="col-md-6">
                        <p class="fw-bold">
                            {{ $infoItem->ar_additional_description }}
                        </p>
                        <div class="text-end mb-3 trans-img">
                            @php
                                $image1Path = url('img/admins/' . $infoItem->image1);
                            @endphp
                            <img src="{{ $image1Path }}" style="width: 200px; height: 150px; border-radius: 30px;"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        @php
                            $image2Path = url('img/admins/' . $infoItem->image2);
                        @endphp
                        <img src="{{ $image2Path }}" style="width: 400px; height: 250px; border-radius: 30px;"
                            class="img-fluid" alt="">
                    </div>
                    <div class="w-50 m-auto mt-5" style="border-top:2px solid #646464"></div>
                </div>
            </div>
        @endforeach
    </header>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    <!-- Main Content -->

    {{-- اعمالنا --}}
    <section id="projects" class="mt-5">
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
                    لا توجد مشاريع لعرضها في الوقت الحالي.
                </div>
            @else
                <div class="row design-rows mt-4">
                    @foreach ($services as $service)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                            <div class="specialists-card h-100">
                                @php
                                    $imagePath = url('img/admins/' . ($service->image ?? 'default.png'));
                                @endphp
                                <img src="{{ $imagePath }}" style="height: 240px;" class="img-fluid w-100">
                                <div class="card-details text-center p-3">
                                    <p>{{ Str::limit($service->ar_desc, 100) }}</p>
                                    <a href="#" class="btn btn-primary mt-2">مشاهدة التفاصيل</a>
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
    {{-- اعمالنا --}}

    {{-- اعمالنا --}}
    <section id="works" class="mt-5" dir="rtl">
        <div class="container">
            <div class="btn btn-danger px-5 py-2" style="box-shadow: -10px 10px 5px rgba(0, 0, 0, 0.3);">أعمالنا</div>
            <div class="mt-5">
                <h2 class="text-center mb-3" style="color:#584348;">جميع اعمالنا</h2>
                <p class="text-center mb-3 w-75 m-auto" style="color:#696984;">نقدم مجموعة شاملة من خدمات المقاولات
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
                        <div class="col-lg-3 col-md-4 col-12 mb-4">
                            <div class="card d-flex flex-column justify-content-between h-100">
                                @php
                                    $imagePath = url('img/admins/' . ($project->image ?? 'default.png'));
                                @endphp
                                <img src="{{ $imagePath }}" class="card-img-top" alt="{{ $project->ar_title }}">
                                <div class="card-body d-flex flex-column">
                                    <h4 class="card-title text-primary">{{ $project->ar_title }}</h4>
                                    <p class="card-text text-muted flex-grow-1">
                                        {{ Str::limit($project->ar_desc, 100) }}</p>
                                    <div class="mt-auto">
                                        <a href="#" class="btn btn-outline-primary">مشاهده الاعمال</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="text-center mt-3 mb-5">
                <a href="#" class="btn btn-outline-primary px-4 py-2">مشاهده الكل</a>
            </div>
            <div class="w-50 m-auto mt-5" style="border-top:2px solid #646464"></div>
        </div>
    </section>
    {{-- اعمالنا --}}

    {{-- من نحن --}}
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
                                    $image1Path = !empty($aboutUsData->image_1)
                                        ? url('img/admins/' . $aboutUsData->image_1)
                                        : url('img/Group.png');
                                @endphp
                                <img src="{{ $image1Path }}" class="mx-2 img-fluid"
                                    style="width: 100%; max-width: 300px; height: auto;" alt="صورة المجموعة 1">
                            </div>
                            <div class="col-6">
                                @php
                                    $image2Path = !empty($aboutUsData->image_2)
                                        ? url('img/admins/' . $aboutUsData->image_2)
                                        : url('img/Group-2.png');
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
                        @foreach (['ar_desc_1', 'ar_desc_2', 'ar_desc_3'] as $desc)
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
    {{-- من نحن --}}

    {{-- تواصل معنا --}}
    <section class="footer" id="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mt-5 mb-0">
                    <div class="input-footer text-center">
                        <label for="sendmessage" class="text-light mb-3">إرسال رسالة على البريد الإلكتروني</label>
                        <form action="" method="POST"> {{-- Specify the action route --}}
                            @csrf
                            <div class="the-input d-flex position-relative">
                                <input type="email" name="email" id="sendmessage"
                                    placeholder="البريد الإلكتروني" required aria-label="البريد الإلكتروني">
                                <button type="submit" aria-label="إرسال">إرسال</button>
                            </div>
                        </form>
                    </div>
                </div>
                @if ($contacts->isEmpty())
                    <div class="col-md-6 text-lg-end">
                        <div class="alert alert-warning text-center mt-4" role="alert">
                            لا توجد معلومات تواصل متاحة حالياً.
                        </div>
                    </div>
                @else
                    @foreach ($contacts as $contact)
                        <div class="col-md-6 text-lg-end">
                            <div class="icons-and-text-footer mt-3 mb-2">
                                <div class="specialists-card h-100">
                                    @php
                                        $logoPath = url('img/admins/' . $contact->logo);
                                    @endphp
                                    <img src="{{ $logoPath }}"
                                        style="width: 90px; height: 90px; border-radius: 50%;"
                                        class="img-fluid mx-auto d-block" alt="{{ $contact->company_name }}">
                                    <div class="card-details text-center p-3">
                                        <h5 class="text-light mt-2 mb-0">{{ $contact->company_name }}</h5>
                                    </div>
                                </div>
                                <div class="icons-footer text-start">
                                    <ul>
                                        <li class="mt-3 mb-2">
                                            <a href="#" class="text-white">{{ $contact->location }}</a>
                                            <span class="mx-2 text-white"><i
                                                    class="fa-solid fa-location-dot"></i></span>
                                        </li>
                                        <li class="mt-3 mb-2">
                                            <a href="tel:{{ $contact->phone }}"
                                                class="text-white">{{ $contact->phone }}</a>
                                            <span class="mx-2 text-white"><i class="fa-solid fa-phone"></i></span>
                                        </li>
                                        <li class="mt-3 mb-2">
                                            <a href="#" class="text-white">{{ $contact->working_hours }}</a>
                                            <span class="mx-2 text-white"><i class="fa-solid fa-clock"></i></span>
                                        </li>
                                        <li class="mt-3 mb-2">
                                            <a href="mailto:{{ $contact->email }}"
                                                class="text-white">{{ $contact->email }}</a>
                                            <span class="mx-2 text-white"><i class="fa-solid fa-envelope"></i></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    {{-- تواصل معنا --}}

    <!--scirpt Files-->
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('js/wow.min.js') }}"></script>
    <script src="{{ url('js/all.min.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>
    @yield('js')
    <!--scirpt Files-->
</body>

</html>
