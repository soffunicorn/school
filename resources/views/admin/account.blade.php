@extends('admin.body-dash')
@section('contenido')
<div class="profile container">
<div class="row">
   <div class="col-12"><img src="{{url('/')}}/img/icon/avatar-01.jpg" class="rounded-circle user-photo"></div>
   <div class="col-6">
      <div class="form-group">
         <label for="exampleInputEmail1">Nombre de usuario:</label>
         <div class="input-group">
            <div class="input-group-addon">
               <i class="fa fa-user"></i>
            </div>
            <input type="text" class="form-control" id="username"  value="John Doe"/>
         </div>
      </div>
   </div>
   <div class="col-6">
         <label for="exampleInputEmail1">Correo electrónico:</label>
         <div class="input-group">
         	  <div class="input-group-addon">
               <i class="far fa-envelope"></i>
            </div>
            <input type="email" class="form-control" id="mail"  value="JohnDoe@example.com" >
         </div>
      </div>
      <div class="col-12">
         <button class="btn btn-profile" type="submit">Guardar<i class="fa fa-user"></i></button>
      </div>
  
</div>
@endsection
