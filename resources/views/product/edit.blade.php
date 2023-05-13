@extends('Layouts.app')

 @section('body')
 <h1 class = "mb-0">Update</h1>
 <hr />
 <form action="{{ route ('product.update', $order->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Customer Name</label>
            <input type="text" name="customerName" class="form-control" placeholder="Customer Name" value="{{ $order->customerName }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Product</label>
            <input type="text" name="product" class="form-control" placeholder="Product" value="{{ $order->product }}" >
        </div>
        <div class="row">
        <div class="col mb-3">
            <label class="form-label">Quantity</label>
            <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="{{ $order->quantity }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $order->price }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Notes</label>
            <textarea class="form-control" name="Notes" placeholder="Notes" >{{ $order->Notes }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
          <button class="btn btn-primary">Update</button>
       </div>
    </div>
 </form>
 <style>
    body{
        background: rgb(152,255,152);

    }
</style>

@endsection