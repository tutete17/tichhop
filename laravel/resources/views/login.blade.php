
   {{--<form  method="post" action="{{Asset('submit_login')}}" id="form-login">--}}
       {{--{{ csrf_field() }}--}}
       {{--<h2>Login</h2>--}}
       {{--<input type="text" name="email" id="user_input" placeholder=" Email" class="form-control"/>--}}
       {{--<input type="password" name="password" id="password" placeholder="Password" class="form-control"/>--}}
       {{--<button class="btn">Login</button>--}}
   {{--</form>--}}




   @extends('home')

   @section('title', 'Login')



   @section('content')
   <div class ="container" style="margin: 50px 50px 50px 50px;;">
       <div class="content">
       <h1 style="margin: 10px;;">Đăng nhập</h1>
       <form  method="post" action="{{Asset('submit_login')}}" id="form-login">
           {{ csrf_field() }}
           <div class="form-group" >

               <label  >Email:</label>
               <input type="text" name="email" id="user_input" placeholder=" Email" class="form-control"/>

           </div>
           <div class="form-group">
               <label  >Password:</label>
               <input type="password" name="password" id="password" placeholder="Password" class="form-control"/>
           </div>
           {{--<div class="checkbox">--}}
           {{--<label><input type="checkbox"> Remember me</label>--}}
           {{--</div>--}}
           <button  class="btn btn-default">Submit</button>
       </form>
       </div>
   </div>
   @endsection