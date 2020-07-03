@extends('master')
@section('content')
<div class="container">
    <div class="cart_con">
        <div class="left_cart col-lg-8">
            <div class="container">
                <table class="table">
                    <tbody>
                        @foreach ($cart as $item)
                        <tr>
                            <td><img src="{{ $item->image }}" alt=""></td>
                            <td class="content">
                                <h4>{{ $item->name }}</h4>
                                <div>{{ $item->description }}</div>
                                <div class="form_group">
                                    <form action="" method="POST">
                                        @csrf
                                        <button type="submit" name="delete" class="btn btn-primary" value="{{ $item->id }}">delete</button>
                                        {{-- <button type="submit" name="edit" class="btn btn-primary" value="{{ $item->id }}">edit</button> --}}
                                    </form>
                                    <form action="editPro/{{ $item->id }}" method="get">
                                        @csrf
                                        <button type="submit" name="edit" class="btn btn-primary" value="{{ $item->id }}">edit</button>
                                    </form>
                                </div>
                            </td>
                            <td style="align-items: center;">{{ $item->unit_price }}</td>
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
                        {{-- {{ $total=0 }} --}}
                        @foreach ($cart as $item)
                            {{-- {{ $total= $total + $item->unit_price }} --}}
                        @endforeach
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
@endsection
