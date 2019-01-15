@extends('admin.body-dash')
@section('header')
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/[version.number]/[distribution]/ckeditor.js"></script>
@endsection
@section('contenido')
<div class="container mb-admin">
      <div class="col-12 grey-text">
         <h3 class="title" align="center">Courses List</h3>
         <hr class="hr-admin">
      </div>
      <div class="add-crud">
         <button class="btn btn-crud" data-toggle="modal" data-target="#myModal">Create a new course<i class="fas fa-plus"></i></button>
      </div>
   <!--Tercera Tabla-->
   <div class="table-responsive table-responsive-data2">
      <table class="table table-data2">
         <thead>
            <tr>
               <th>
               </th>
               <th>Imagen</th>
               <th>Nombre</th>
               <th>descripcion</th>
               <th>fecha inicio</th>
               <th>fecha fin</th>
               <th>opciones</th>
               <th></th>
            </tr>
         </thead>
         <tbody>
            <tr class="tr-shadow">
               <td>
                  <label class="au-checkbox">
                  <input type="checkbox">
                  <span class="au-checkmark"></span>
                  </label>
               </td>
               <td><img src="{{url('/')}}/img/owl.png" class="mx-auto d-block  rounded-circle user-photo"  /></td>
               <td>Spanish for beginers</td>
               <td>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
               </td>
               <td><?php echo date("Y/m/d");?></td>
               <td><?php echo date("Y/m/d");?></td>
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
               <td><img src="{{url('/')}}/img/trophy.png" class="mx-auto d-block rounded-circle user-photo" /></td>
               <td>Lorem ipsum</td>
               <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry</td>
               <td><?php echo date("Y/m/d");?></td>
               <td><?php echo date("Y/m/d");?></td>
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
         </tbody>
      </table>
   </div>
   <!--end -->
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
                        <label for="exampleInputEmail1">Nombre del curso:</label>
                        <input type="text" class="form-control" id="username"  placeholder="example@mail.com"/>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Imagen del curso</label>
                        <input type="file" class="form-control" id="image"/>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Fecha de comienzo</label>
                        <input type="date" class="form-control" id="f-start"/>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Fecha de culminacion</label>
                        <input type="date" class="form-control" id="f-over"/>
                     </div>
                  </div>
                  <div class="col-12 mg-b">
                     <label for="exampleInputEmail1">Contenido del curso:</label>
                     <textarea class="input-regis area" rows="5" name="prof-descrip" id="new-comment"></textarea>
                     <script>
                        CKEDITOR.replace( 'new-comment' );
                     </script>
                  </div>
                  <div class="col-12">
                     <button type="submit" class="btn btn-login">Create</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection
