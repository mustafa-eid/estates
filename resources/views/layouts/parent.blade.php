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

    <!--scirpt Files-->
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('js/wow.min.js') }}"></script>
    <script src="{{ url('js/all.min.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>
    @yield('js')
    <!--scirpt Files-->
</body>

</html>
