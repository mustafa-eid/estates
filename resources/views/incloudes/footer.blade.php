@extends('layouts.parent')

@section('title', 'Contact Us')

@section('content')
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
                                <input type="email" name="email" id="sendmessage" placeholder="البريد الإلكتروني"
                                    required aria-label="البريد الإلكتروني">
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
                                    <img src="{{ $logoPath }}" style="width: 90px; height: 90px; border-radius: 50%;"
                                        class="img-fluid mx-auto d-block" alt="{{ $contact->company_name }}">
                                    <div class="card-details text-center p-3">
                                        <h5 class="text-light mt-2 mb-0">{{ $contact->company_name }}</h5>
                                    </div>
                                </div>
                                <div class="icons-footer text-start">
                                    <ul>
                                        <li class="mt-3 mb-2">
                                            <a href="#" class="text-white">{{ $contact->location }}</a>
                                            <span class="mx-2 text-white"><i class="fa-solid fa-location-dot"></i></span>
                                        </li>
                                        <li class="mt-3 mb-2">
                                            <a href="tel:{{ $contact->phone }}" class="text-white">{{ $contact->phone }}</a>
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
@endsection
