@extends('admin.body-dash')
@section('contenido')
<div class="container mb-admin">
      <div class="col-12 grey-text">
         <h3 class="title" align="center">Register Users</h3>
         <hr class="hr-admin">
      </div>
      <div class="add-crud">
         <button class="btn btn-crud" data-toggle="modal" data-target="#myModal">Create a new user <i class="fas fa-plus"></i></button>
      </div>
       <div class="table-responsive table-admin">
      <table class="table table-data2">
         <thead>
            <tr>
               <th></th>
               <th>Imagen del usuario</th>
               <th>Fecha de creación</th>
               <th>Nombre y Apellido</th>
               <th>Nivel</th>
               <th>
                  <p class="opti">opciones</p>
               </th>
            </tr>
         </thead>
         <tbody>
               <tr class="spacer"></tr>
            <tr class="tr-shadow">
                     <td>
                  <label class="au-checkbox">
                  <input type="checkbox">
                  <span class="au-checkmark"></span>
                  </label>
               </td>
               <td><img src="{{url('/')}}/img/review1.jpg"class="mx-auto d-block  rounded-circle user-photo"  /></td>
               <td><?php echo date("Y/m/d");?></td>
               <td>Garrick Bartholomew</td>
               <td>Admin</td>
               <td>
                  <div class="table-data-feature">
                     <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                     <i class="zmdi zmdi-edit"></i>
                     </button>
                     <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                     <i class="zmdi zmdi-delete"></i>
                     </button>
                     <button class="item" data-toggle="tooltip" data-placement="top" title="Update">
                     <i class="zmdi zmdi-more"></i>
                     </button>
                  </div>
               </td>
            </tr>
            <tr class="spacer"></tr>
            <tr class="tr-shadow">
                   <td>
                  <label class="au-checkbox">
                  <input type="checkbox">
                  <span class="au-checkmark"></span>
                  </label>
               </td>
               <td><img src="{{url('/')}}/img/review2.jpg"class="mx-auto d-block rounded-circle user-photo"  /></td>
               <td><?php echo date("Y/m/d");?></td>
               <td>Arthur Curry</td>
               <td>Admin</td>
               <td>
                  <div class="table-data-feature">
                     <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                     <i class="zmdi zmdi-edit"></i>
                     </button>
                     <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                     <i class="zmdi zmdi-delete"></i>
                     </button>
                     <button class="item" data-toggle="tooltip" data-placement="top" title="Update">
                     <i class="zmdi zmdi-more"></i>
                     </button>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
   <!-- The Modal -->
   <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
               <div class="row">
                  <div class="col-6">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de usuario:</label>
                        <input type="text" class="form-control" id="username"  placeholder="example@mail.com"/>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Jon Snow"/>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Contraseña</label>
                        <input type="password" class="form-control" id="pass"/>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Nivel</label>
                        <select id="nivel" class="form-control">
                           <option selected="selected" disabled="disabled">Opciones</option>
                           <option>Admin</option>
                           <option>User</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Foto del usuario</label>
                        <input type="file" class="form-control" name="photo" id="photo"/>
                        <div id="preview"></div>
                     </div>
                  </div>
                  <div class="col-12">
                     <button type="submit" class="btn btn-login">Crear usuario</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('footer')
<script type="text/javascript">
   document.getElementById("photo").onchange = function(e) {
     // Creamos el objeto de la clase FileReader
     let reader = new FileReader();
   
     // Leemos el archivo subido y se lo pasamos a nuestro fileReader
     reader.readAsDataURL(e.target.files[0]);
     
     // Le decimos que cuando este listo ejecute el código interno
     reader.onload = function(){
       let preview = document.getElementById('preview');
         image = document.createElement("img");
   
       image.src = reader.result;
       preview.appendChild(image);
     };
   }
</script>
@endsection
