@extends('layouts.master')

@section('content')

<!-- Tables Without Borders -->
 <div class="header-title">
    <h3 class="text-dark">Shopping carts</h3>
 </div>
 <table class="table  table-nowrap mt-4  text-white">
    <thead class="bg-danger ">
        <tr >
            <th scope="col">Cart ID</th>
            <th scope="col">Details</th>
            <th scope="col">Price</th>
            <th scope="col">Date</th>
        </tr>
    </thead>
    <tbody>
        <tr >
            <td></td>
            <td class="text-center text-black pb-5">You have not yet completed any shopping cart</td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>




@endsection
