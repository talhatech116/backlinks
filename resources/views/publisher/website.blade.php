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
 <table style="border-color: rgb(165, 164, 164) !important;" class="table  table-nowrap mt-4  text-white border-bottom border-1 ">
    <thead style="background-color: rgb(61, 191, 126);" class="">
        <tr class="text-center" >
            <th  scope="col">URL<i class="ri-arrow-down-fill"></i><i class="ri-barricade-fill"></i></th>
            <th scope="col">Categories</th>
            <th scope="col">Links <i class="ri-arrow-up-down-fill"></i></th>
            <th scope="col">DR <i class="ri-arrow-up-down-fill"></i></th>
            <th scope="col">DA <i class="ri-arrow-up-down-fill"></i></th>
            <th scope="col">PA<i class="ri-arrow-up-down-fill"></i></th>
            <th scope="col">CF <i class="ri-arrow-up-down-fill"></i></th>
            <th scope="col">TF <i class="ri-arrow-up-down-fill"></i></th>
            <th scope="col">Credit <i class="ri-arrow-up-down-fill"></i></th>
            <th scope="col">Analytics</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <tr >
            <td class="align-middle"></td>
            <td class="align-middle" ></td>
            <td class="align-middle" ></td>
            <td class="align-middle" ></td>
            <td class="align-middle"></td>
            <td  class="align-middle  text-center text-dark pb-5">You have not added any website yet.</td>
            <td class="align-middle"></td>
            <td class="align-middle"></td>
            <td class="align-middle"></td>
            <td class="align-middle"></td>
            <td class="align-middle"></td>


        </tr>
    </tbody>
</table>




@endsection

