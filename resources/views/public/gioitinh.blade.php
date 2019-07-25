@extends('public.master.layouts')
@section('content')
<div class="archive-posts-area bg-white p-30 mb-30 box-shadow">

    <!-- Single Catagory Post -->
    @foreach($user as $u)
    <div class="single-catagory-post d-flex flex-wrap">
        <!-- Thumbnail -->
        <div class="post-thumbnail bg-img" style="background-image: url(img/bg-img/44.jpg);">
           <img src="{{$u->img}}" alt="">
        </div>

        <!-- Post Contetnt -->
        <div class="post-content">
            <div class="post-meta">
                <a href="{{route('gioitinh',$u->gioitinh->slug)}}">{{$u->gioitinh->name}}</a>
                <a href="{{route('muctieu',$u->muctieu->slug)}}">{{$u->muctieu->name}}</a>
            </div>
            <a href="video-post.html" class="post-title">{{$u->ten}}</a>
            <!-- Post Meta -->
            <div class="post-meta-2">
                <span class="mr-3">Tuoi: {{$u->tuoi}}</span>
                 | 
                <span class="ml-3">Noi o: <a href="#">{{$u->diachi->name}}</a></span>
                {{-- <a href="#"><i class="fa fa-map-marker" aria-hidden="true" ></i></i> 1034</a> --}}
            </div>
            <p>{{$u->timnguoi}}</p>
        </div>
    </div>
    @endforeach


    <!-- Pagination -->
    <nav>

        {!!$user->links()!!}
    </nav>
</div>
@endsection