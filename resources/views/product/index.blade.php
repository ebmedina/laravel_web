 @extends('Layouts.app')

 @section('body')
 <div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Orders</h1>
    <a href="{{ route ('product.create') }}" class="btn btn-warning">Add Order</a>
 </div>
 <hr />
 @if(Session::has('success'))
   <div class="alert alert-success" role="alert">
      {{ Session:: get('success') }}
   </div>
@endif
<table class="table table-hover">
   <thead class="table-dark">
      <tr>
         <th>#</th>
         <th>Customer Name</th>
         <th>Product</th>
         <th>Quantity</th>
         <th>Price</th>
         <th>Notes</th>
         <th>Action</th>
      </tr>
   </thead>

<tbody>
   @if($order->count() > 0)
      @foreach($order as $rs)
         <tr>
            <td class="align-middle">{{ $loop->iteration }}</td>
            <td class="align-middle">{{ $rs->customerName }}</td>
            <td class="align-middle">{{ $rs->product }}</td>
            <td class="align-middle">{{ $rs->quantity }}</td>
            <td class="align-middle">{{ $rs->price }}</td>
            <td class="align-middle">{{ $rs->Notes }}</td>
            <td class="align-middle">
               <div class="d-flex justify-content-center align-items-center btn-group" role="group" aria-label="Basic example">
                  <a href="{{ route ('product.show',$rs->id) }}" type="button" class="btn btn-success mx-1">Detail</a>
                  <a href="{{ route ('product.edit',$rs->id) }}" type="button" class="btn btn-primary mx-1">Edit</a>
                  <form action="{{ route ('product.destroy', $rs->id) }} " method="POST" type="button" class="btn btn-danger mx-1 p-0" onsubmit="return confirm('Delete?')">
                     @csrf
                     @method('DELETE')
                     <button class="btn btn-danger m-0">Delete</button>
                  </form>
               </div>
            </td>
         </tr>
      @endforeach
   @else
   <tr>
      <td class="text-center" colspan="5">Order not found</td>
   </tr>
   @endif
</tbody>
</table>
<style>
    body{
      background: rgb(223, 230, 233);
    }
</style>
@endsection