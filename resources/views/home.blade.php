@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                </div>
                @endif
                You are logged in!     

                @if ($errors->has('user_employee_name'))
                    <div class="alert alert-danger" role-"alert">{{ $errors->first('user_employee_name') }}</div>
               
                @endif                               
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif  
                <div class="container">

                  <form method="POST" action="{{ action('TestController@store') }}">
                     {{ csrf_field() }}
                     <div>                  
                        <input type="hidden" name="user_employee_name" value="{{ Auth::user()->email }}">
                     </div>
                     <div>
                        <input type="submit" value="Test">
                     </div>
                  </form>
                </div>


            </div>
         </div>
      </div>
   </div>
</div>
@endsection