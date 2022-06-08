@extends('layouts.user_app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<table id="cart" class="table table-hover table-condensed">

    <tbody>
    <h2>Your products: </h2>
        @php $total = 0 @endphp
        @if(session('user.cart'))
            @foreach(session('user.cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp

                <tr style="display:flex; margin: 10px 20px 10px 0;  background-color:#6c757d; border-collapse:collapse; border:0px;" data-id="{{ $id }}">
                    <td style="border-collapse:collapse; border:0px;" data-th="Product" >
                    <div style="display:flex; margin: 10px 20px 10px 0;  background-color:#6c757d; "> 
                      <img  src="../images/sushi.jpg" style="height: 105px; width: 160px; margin-right: 15px">
                      <p style="width:200px; margin-top: auto; margin-bottom: auto;"> <span style="font-weight: bold; font-size:30px">{{ $details['name'] }}</span> <br> </p>
                      </div>
                    </td>

                    <td data-th="Quantity" style="margin-top: auto; margin-bottom: auto; border:none; width:100%">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                    </td>
                <td style="border:none; margin-top: auto; margin-bottom: auto; margin-left:20px; float:right; width:100%" data-th="Subtotal"><p style="margin-left: auto; margin-right: 20px; margin-top: auto; margin-bottom: auto; font-weight: bold; font-size:30px; float:right;">${{ $details['price'] * $details['quantity'] }}</p></td>
                    <td style="border:none; width:100%;" class="actions" data-th="" >
                    <button style="margin-top: auto; margin-bottom: auto; font-weight: bold; font-size:60px; border: none; outline: none; color:white; float:right;" class="remove-from-cart" >-</button>
                    </td>
                </tr>
@endforeach
        @endif
</tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><p style="color:white; margin-left: auto; margin-right: 20px; margin-top: auto; margin-bottom: auto; font-weight: bold; font-size:30px">Razem: ${{ $total }}</p></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
           <input style="width: 200px" type="submit" class="btn btn-primary" value="ZAMOW">
            </td>
        </tr>
    </tfoot>
</table>
@endsection
@section('scripts')
<script type="text/javascript">

    $(".update-cart").change(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update.cartUser') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cartUser') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection