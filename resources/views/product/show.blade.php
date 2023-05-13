@extends('Layouts.app')

 @section('body')
 <h1 class = "mb-0">Details</h1>
 <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Customer Name</label>
            <input type="text" name="customerName" class="form-control" placeholder="Customer Name" value="{{ $order->customerName }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Product</label>
            <input type="text" name="product" class="form-control" placeholder="Product" value="{{ $order->product }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Quantity</label>
            <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="{{ $order->quantity }}" readonly>
        </div>
        <div class="col">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $order->price }}" readonly>
        </div>
        <div class="col">
            <label class="form-label">Notes</label>
            <textarea class="form-control" name="Notes" placeholder="Notes" readonly>{{ $order->Notes }}</textarea>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $order->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $order->updated_at }}" readonly>
        </div>
    </div>

<style>
    body{
      background: rgb(152,255,152);
    }
</style>
@endsection