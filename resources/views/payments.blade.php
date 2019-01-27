@extends('layouts.master')
@section('content')

<div class="modal fade" id="methodsModal" tabindex="-1" role="dialog" aria-labelledby="methodsModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="methodsModalLabel">Add a billing method</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{ url('updatePayment') }}" method="POST">
            @csrf
      <div class="modal-body">
        <input class="radio" id="radio-1" type="radio" name="radio" name="credit" required="" checked>
        <label for="radio-1">Credit or Debit Card</label>
        	<div class="form-group">
        	    <label for="cardNumber">Card Number 
        	    	<div class="available">
        	    		<img src="./img/visa.png" alt="">
						<img src="./img/master.png" alt="">
        	    	</div>
        	    </label>
        	    <input type="text" class="form-control" name="card_number" placeholder="" value="@if(isset($payment->card_number)) {{ $payment->card_number }} @endif">
        	</div>
        	<div class="row">
        	    <div class="co-12 col-md">
        	    	<div class="form-group">
	        	    	<label for="">First Name</label>
	        	      	<input type="text" class="form-control" name="first_name" value="@if(isset($payment->first_name)) {{ $payment->first_name }} @else {{ $user->first_name }} @endif">
	        	    </div>
        	    </div>
        	    <div class="co-12 col-md">
        	    	<div class="form-group">
	        	    	<label for="">Last Name</label>
	        	      	<input type="text" class="form-control" name="last_name" value="@if(isset($payment->card_last_name)) {{ $payment->card_last_name }} @else {{ $user->last_name }} @endif">
        	      	</div>
        	    </div>
    	    </div>
        	<div class="row">
        	    <div class="co-12 col-md">
        	    	<div class="form-group">
	        	    	<label for="">Expires On</label>
	        	      	<input type="text" class="form-control" name="expire_on" placeholder="MM/YY" value="@if(isset($payment->expire_on)) {{ $payment->expire_on }} @endif">
        	      	</div>
        	    </div>
        	    <div class="co-12 col-md">
        	    	<div class="form-group">
	        	    	<label for="">Security Code</label>
	        	      	<input type="text" class="form-control" name="security_code" value="@if(isset($payment->security_code)) {{ $payment->security_code }} @endif">
        	      	</div>
        	    </div>
    	    </div>
    	    <button type="submit" class="btn">Continue</a>
      </div>
      <div class="modal-footer">
		<div class="block">
			<div class="col-12">
				<input class="radio" id="radio-2" type="radio" name="radio" value="paypal" required="">
				<label for="radio-2">
					<div class="logo">
			      	<img src="./img/paypal.png" alt="">
			      </div>
			  	</label>
			</div>
		</div>
        <div class="form-group col-12">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="paypal_email" value="@if(isset($payment->paypal_email)) {{ $payment->paypal_email }} @endif">
        </div>
      </div>
        </form>
    </div>
  </div>
</div>
<div class="content col-md-9 offset-md-3 order-1 order-md-2">
    <div class="row">
        <div class="col-12">
            <div class="block">
                <h3>Billing and payments</h3>
                <a href="#" class="btn add-methods" data-toggle="modal" data-target="#methodsModal">Add methods</a>
                <div class="block-inner">
                    <span class="title-inner">Billing methods</span>
                    <span class="type">Primary</span>

                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6">
                            <div class="flex-center">
                                <div class="logo">
                                    <img src="./img/mastercard.png" alt="">
                                </div>
                                <span class="text">MasterCard @if(isset($payment->expire_on)) ending in {{ $payment->expire_on }} @endif</span>
                                <span class="text last">GBP</span>
                                <a href="#" class="settings" data-toggle="modal" data-target="#methodsModal"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input class="checkbox" id="checkbox-1" type="radio" name="checkbox" required="" @if(isset($payment->credit_prefered))  checked @endif>
                            <label for="checkbox-1">Preferred</label>
                        </div>
                    </div>

                    <span class="type">Additional</span>
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6">
                            <div class="flex-center">
                                <div class="logo">
                                    <img src="./img/paypal.png" alt="">
                                </div>
                                <span class="text">PayPal - @if(isset($payment->paypal_email)) {{ $payment->paypal_email }} @else {{ $user->email }} @endif</span>
                                <a href="#" class="settings" data-toggle="modal" data-target="#methodsModal"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input class="checkbox" id="checkbox-2" type="radio" name="checkbox" required="" @if(isset($payment->paypal_prefered))  checked @endif>
                            <label for="checkbox-2">Preferred</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection