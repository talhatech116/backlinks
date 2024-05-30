@extends('layouts.master')

@section('content')

<!-- Tables Without Borders -->
 <div class="header-title">
    <h3 class="text-dark">Website</h3>
    <div class="d-flex float-end mb-2">
        <a class="btn btn-danger" href=""><i class="mdi mdi-airplane  mdi-flip-right"></i> Turn vocation mode on </a>
       &nbsp;&nbsp;<a style="background-color: rgb(61, 191, 126);" class="btn text-light btn-success" href="{{ url('/publisher/postweb')}}"><i class="ri-add-line fw-bolder"></i>Add web</a>

    </div>
 </div>
 <table style="border-color: rgb(29, 17, 17) !important;" class="table  table-nowrap mt-4  text-white border-bottom border-1 ">
    <thead style="background-color: rgb(61, 191, 126);" class="">
        <tr class="text-center" >
            <th  scope="col">URL<i class="ri-arrow-down-fill"></i><i class="ri-barricade-fill"></i></th>
            <th scope="col">Categories</th>
            <th scope="col">Country <i class="ri-arrow-up-down-fill"></i></th>
            <th scope="col">Images <i class="ri-arrow-up-down-fill"></i></th>
            <th scope="col">Amount of Links <i class="ri-arrow-up-down-fill"></i></th>
            <th scope="col">Normal Price<i class="ri-arrow-up-down-fill"></i></th>
            <th scope="col">Delicated Price <i class="ri-arrow-up-down-fill"></i></th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($websites as $website)
        <tr>
            <td class="align-middle" style="color: black">{{ $website->url }}</td>
            <td class="align-middle" style="color: black">{{ implode(', ', json_decode($website->web_categories)) }}</td>
            <td class="align-middle" style="color: black">{{ $website->country }}</td>
            <td class="align-middle" style="color: black">{{ $website->image_per_post }}</td>
            <td class="align-middle" style="color: black">{{ $website->maximum_links }}</td>
            <td class="align-middle" style="color: black">{{ $website->normal_price }}</td>
            <td class="align-middle" style="color: black">{{ $website->topic_price }}</td>
            <td class="align-middle" style="color: black"><i class="fas fa-trash"></i></td>
        </tr>
        @endforeach
    </tbody>
</table>




@endsection

