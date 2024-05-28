@extends('layouts.master')
@section('title') @lang('translation.myprojects') @endsection

@section('content')
<div class="row">
    <div class="col-12">
                <h4 class="header text-black">My Projects</h4>
           <a class="btn btn-danger  float-end" href="{{ url('/createproject')}}"><i class="ri-add-line"></i> New Project</a>

            <h6 class="p-2">Create new projects to improve your SEO, links building, branded content, online reputation...%s Control the evolution of your project, Oet hundreds of media
                 and writers related to your topic and multiply your online visibility.</h6>
</div>
     <div style="border-radius:10px; height:180px; width:350px;  border:1px solid;
     border-style: dashed;"  class="card ms-3 mt-4">
            <div class="m-auto">
                <a href="{{ url('/createproject')}}">
                <i style="font-size: 45px;" class="ri-folder-add-line ms-3">
                </i>
<br>
                <span>New Project</span>
            </a>
            </div>


     </div>
@endsection
@section('script')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
