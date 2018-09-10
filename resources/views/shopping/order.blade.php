@extends('layouts.master')
@section('title', "| Order")

@section('content')

<div class="row">
    <div class="col-sm-12">
        <h4 class="mt-1 mb-5">Order data</h4>
    </div>
</div>

<div class="row">
    <div class="col-xl-8 order-2 order-xl-1">



        <form>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <fieldset class="form-group row">
                  <legend class="col-form-legend col-sm-2">Radios</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        Option one is this and that&mdash;be sure to include why it's great
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        Option two can be something else and selecting it will deselect option one
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                        Option three is disabled
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="form-group row">
                  <label class="col-sm-2">Checkbox</label>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Check me out
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                  </div>
                </div>
              </form>




        
    </div>
    <div class="col-xl-4 order-1 order-xl-2">
        

        <h6>Customer: {{ Auth()->user()->name }}</h6>
        <h6 class="mt-1 mb-4">Order</h6>

        @foreach(Cart::content() as $product)
            <div>Product name: <strong class="tag-strong">{{ $product->name }}</strong></div>
            <div>Quantity: <strong class="tag-strong">{{ $product->qty }}</strong></div>
            <hr>
        @endforeach

        <h6>Total: {{ Cart::total() }}</h6>
    </div>
</div>



@endsection
