@extends('admins.layouts.parent')

@section('title', 'تعديل المشروع')

@section('content')

    @include('admins.incloudes.messages')

    <section id="edit-project" class="mt-5 mb-5">
        <div class="container">
            <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row align-items-center p-2">
                    <div class="col-md-6">
                        <div class="img-and-bg">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    @php
                                        $imagePath = url('img/admins/' . ($project->image ?? 'default.png'));
                                    @endphp
                                    <img src="{{ $imagePath }}" class="mx-2 img-fluid"
                                        style="width: 300px; height: 346px;" alt="صورة المشروع">
                                    <input type="file" name="image" class="form-control mt-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="title-contents">
                            <h2 class="mt-3 mb-2 text-capitalize fw-bold text-primary">
                                <input type="text" name="ar_title"
                                    class="form-control border-0 bg-light fs-3 fw-bold text-primary p-3 rounded"
                                    value="{{ $project->ar_title ?? '' }}" placeholder="أدخل العنوان هنا">
                            </h2>
                        </div>

                        <div class="three-descrip">
                            <div class="decri d-flex align-items-center mt-3">
                                <textarea name="ar_desc" class="form-control mt-2" rows="4" placeholder="أدخل الوصف هنا">{{ $project->ar_desc ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-50 mx-auto my-5 border-top border-secondary"></div>
                <div class="d-flex justify-content-center mt-3 mb-5 container">
                    <button type="submit" class="btn btn-success px-5 py-2 shadow">
                        حفظ التعديلات
                    </button>
                </div>
            </form>
        </div>
    </section>

@endsection
