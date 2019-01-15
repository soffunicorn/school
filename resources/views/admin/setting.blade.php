@extends('admin.body-dash')
@section('contenido')
<div class="container setting-content">
   <form name="" action="" class="form-setting">
      <div class="row">
         <div class="col-12">
            <img src="{{url('/')}}/img/icon/avatar-01.jpg" class=" rounded-circle user-photo-setting"/>
            <button class="btn   avatar-btn" id="avatar">Cambiar avatar</button>
            <input type="file" class="hiden" id="newavatar" />
         </div>
         <div class="col-6">
            <label for="exampleInputEmail1">Nombre de usario</label>
            <div class="input-group">
               <div class="input-group-addon">
                  <i class="far fa-envelope"></i>
               </div>
               <input type="text" class="form-control" id="mail"  value="John"/>
            </div>
         </div>
         <div class="col-6">
            <label for="exampleInputEmail1">Correo electrónico:</label>
            <div class="input-group">
               <div class="input-group-addon">
                  <i class="far fa-envelope"></i>
               </div>
               <input type="email" class="form-control" id="mail"  value="JohnDoe@example.com" />
            </div>
         </div>
         <div class="col-6">
            <label for="exampleInputEmail1">Contraseña actual:</label>
            <div class="input-group">
               <div class="input-group-addon" id="watch">
                  <i class="fa fa-lock"></i>
               </div>
               <input type="password" class="form-control" id="oldpass" value="12345" />
            </div>
         </div>
         <div class="col-6">
            <label for="exampleInputEmail1">Cambiar contraseña:</label>
            <div class="input-group">
               <div class="input-group-addon">
                  <i class="fa fa-lock"></i>
               </div>
               <input type="password" class="form-control" id="newpass"  />
            </div>
         </div>
         <div class="col-12"><button class="btn btn-profile" type="submit">Actualizar<i class="fa fa-user"></i></div>
   </form>
   </div>
</div>
@endsection
@section('footer')
<script type="text/javascript">
   var boton = document.getElementById("avatar");
   boton.addEventListener("click", file);
   function file(){
      document.getElementById("newavatar").click();
   }
   
</script>
@endsection
