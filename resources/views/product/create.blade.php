@extends('Layouts.app')

 @section('body')
 <h1 class = "mb-0">Add Order</h1>
 <hr />
 <form action="{{ route ('product.store') }}" method="POST">
@csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="customerName" class="form-control" placeholder="Customer Name">
        </div>
        <div class="col">
            <input type="text" name="product" class="form-control" placeholder="Product">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="quantity" class="form-control" placeholder="Quantity">
        </div>
        <div class="col">
            <input type="text" name="price" class="form-control" placeholder="Price">
        </div>
        <div class="col">
            <textarea class="form-control" name="Notes" placeholder="Notes"></textarea>
        </div>
    </div>
    <div class="d-grid">
        <button class="btn btn-primary">Submit</button>
    </div>
 </form>
 @endsection