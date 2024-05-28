@extends('layouts.master')

@section('content')

<!-- Tables Without Borders -->
 <div class="header-title">
    <h3 class="text-dark">Sponsored posts sales</h3>
 </div>
 <table style="border-color: rgb(165, 164, 164) !important;" class="table  table-nowrap mt-4  text-white border-bottom border-1 ">
    <thead style="background-color: rgb(61, 191, 126);" class="">
        <tr class="text-center" >
            <th  scope="col">Order ID</th>
            <th scope="col">Web</th>
            <th scope="col">Destination URL</th>
            <th scope="col">Date of sale</th>
            <th scope="col">Deadline</th>
            <th scope="col">Credit</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <tr >
            <td class="align-middle"></td>
            <td class="align-middle" ></td>
            <td class="align-middle" ></td>
            <td  class="align-middle  text-center text-dark pb-5">You have not yet made any sales of sponsored posts</td>
            <td class="align-middle" ></td>
            <td class="align-middle"></td>
            <td class="align-middle"></td>

        </tr>
    </tbody>
</table>




@endsection
