@extends('admins.layouts.parent')

@section('title', 'عرض المشاريع')

@section('content')

@include('admins.incloudes.messages')

<section id="projects" class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            @if($projects->isEmpty())
                <div class="col-12">
                    <div class="alert alert-warning text-center" role="alert">
                        لا توجد مشاريع لعرضها.
                    </div>
                </div>
            @else
                @foreach($projects as $project)
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="works-card p-3 text-center mb-3">
                            @php
                                $imagePath = url('img/admins/' . ($project->image ?? 'default.png'));
                            @endphp
                            <img src="{{ $imagePath }}" style="width:200px; height:150px;" class="img-fluid mb-2" alt="{{ $project->ar_title }}">
                            <h4 style="color: #0B7077;">{{ $project->ar_title }}</h4>
                            <p style="color:#696984;">{{ $project->ar_desc }}</p>
                            <div class="mt-3">
                                <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-primary">تعديل</a>
                                <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete()">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>

<script>
    function confirmDelete() {
        return confirm('هل أنت متأكد أنك تريد حذف هذا المشروع؟');
    }
</script>

@endsection
