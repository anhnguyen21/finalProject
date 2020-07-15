@extends('../page/master')
@section('content')
<div class="container">
    <link rel="stylesheet" href="public/css/styleCart.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div class="cart_con">
        <div class="left_cart col-lg-8">
            <div class="container">
                <table class="table">
                    <tbody>
                        @foreach ($cart as $item)
                        <tr>
                            <td><img  class= "hover"src="{{ $item->image }}" alt="">
                                </td>
                            <td class="content">
                                <div class="display">

                                    <td>{{ $item->title }}
                                    <div class="display">
                                        <td style="width:180px;margin-left:80px;" >
                                            <div class="input-group" >
                                                <input type="button" name="xoa" value="-" class="button-minus" data-field="quantity">
                                                <input type="number" step="1" max="" value={{$item->quantity}} name="quantity" class="quantity-field">
                                                <input type="button" value="+" class="button-plus" data-field="quantity">
                                            </div>
                                            </td>
                                    </div>
                                    <div>
                                    <td ><span style="align-items: center; margin-top: 20px;">{{ $item->unit_price }}</span></td>

                                    </div>
                                </div>

                                <div class="form_group">
                                    <td>
                                    <form action="" method="POST">
                                        @csrf

                                        <button type="submit" name="delete" class="btn btn-light" value={{ $item->id }}>remove</button>
                                        {{-- <button type="submit" name="edit" class="btn btn-primary" value="{{ $item->id }}">edit</button> --}}
                                    </form>
                                    {{-- <form action="editPro/{{ $item->id }}" method="get">
                                        @csrf
                                        <button type="submit" name="edit" class="btn btn-light" value="{{ $item->id }}"><img style="width: 20px; height:20px;" src="public/img/edit.png"></button>
                                    </form> --}}
                                    </td>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="right_cart col-lg-4">
            <div class="summary">
                <div>Summary</div>
                <div>
                    <span>Total</span>
                    <span>



                    </span>
                </div>
                <div>
                    <span>Estimated Delivery & Handling</span>
                    <span>250,000₫</span>
                </div>
                <div>
                    <span>Total</span>
                    <span>3,489,000₫</span>
                </div>
                <button type="button" class="btn btn-dark">Dark</button>
                <button type="button" class="btn btn-dark">Dark</button>
            </div>
        </div>
    </div>
</div>
<script>

function incrementValue(e) {
    e.preventDefault();
    var fieldName = $(e.target).data('field');
    var parent = $(e.target).closest('div');
    var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

    if (!isNaN(currentVal)) {
      parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
    } else {
      parent.find('input[name=' + fieldName + ']').val(0);
    }
  }

  function decrementValue(e) {
    e.preventDefault();
    var fieldName = $(e.target).data('field');
    var parent = $(e.target).closest('div');
    var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

    if (!isNaN(currentVal) && currentVal > 0) {
      parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
    } else {
      parent.find('input[name=' + fieldName + ']').val(0);
    }
    if(currentVal==0){
        return redirect()->route('xoasanpham',1);
    }
  }

  $('.input-group').on('click', '.button-plus', function(e) {
    incrementValue(e);
  });

  $('.input-group').on('click', '.button-minus', function(e) {
    decrementValue(e);
  });
</script>
@endsection
