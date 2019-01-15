@extends('admin.body-dash')
@section('header')
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/[version.number]/[distribution]/ckeditor.js"></script>
@endsection
@section('contenido')
<div class="container mb-admin">
<div class="table-responsive table-admin" style="background-color:#fff;">
   <div class="col-12 grey-text">
      <h3 class="title" align="center">Create a new Post</h3>
      <hr class="hr-admin">
   </div>
   <div class="add-crud">
      <button class="btn btn-crud" data-toggle="modal" data-target="#myModal">Create a Post <i class="fas fa-plus"></i></button>
   </div>
   <table class="table table-borderless table-striped table-earning table-adi">
      <thead>
         <tr>
            <th>Imagen del Post</th>
            <th>Fecha de creación</th>
            <th>Titulo del Post</th>
            <th>
               <p class="opti">opciones</p>
            </th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td><img src="{{url('/')}}/img/owl.png"class="mx-auto d-block  rounded-circle user-photo"  /></td>
            <td><?php echo date("Y/m/d");?></td>
            <td>The new system school</td>
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
         <tr>
            <td><img src="{{url('/')}}/img/iberoclass.jpg"class="mx-auto d-block rounded-circle user-photo"  /></td>
            <td><?php echo date("Y/m/d");?></td>
            <td>The best courses from the Spanish Magazine</td>
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
<div class="modal fade" id="myModal">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
            <form name="form-blog" action="">
               <div class="row">
                  <div class="col-6">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Titulo del Post:</label>
                        <input type="text" class="form-control" id="namePost"  placeholder="The Best 5 tips for learn spanish"/>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Coloca una imagen:</label>
                        <input type="file" class="form-control" id="image"  />
                     </div>
                  </div>
                  <div class="col-12 mg-b">
                     <label for="exampleInputEmail1">Contenido del Post:</label>
                     <textarea class="input-regis area" rows="5" name="prof-descrip" id="new-comment"></textarea>
                     <script>
                        CKEDITOR.replace( 'new-comment' );
                     </script>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Autor del Past:</label>
                        <input type="text" class="form-control" id="autor"  />
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Fecha de publicación:</label>
                        <input type="date" class="form-control" id="date"  />
                     </div>
                  </div>
                  <div class="col-md-5 col-12" id="tags">
                     <label class="fc-control">Tags</label>
                     <input type="text" class="form-control" name="tags" id="tags" required="" placeholder="Decoración" />
                  </div>
                  <div class="col-md-7 col-12 mg-t mg-b">
                     <div id="pregunta">
                        <label class="fc-control ">¿Deseas agregar otra etiqueta?</label>
                        <p class="pd-l"><input type="radio" class="filled-in" name="ask" value="S" id="si-r" />SI
                           <input type="radio"  required="" class="filled-in" name="ask" id="no-r" value="N"/>NO
                        </p>
                     </div>
                     <div id="div" class="hiden col-md-6">
                        <input type="text" class="form-control" name="extra" id="extra" placeholder="Tag" />
                        <button type="button" class="btn-profile btn" id="agregar">Agregar</button>
                     </div>
                  </div>
                  <div id="demas" class="col-12"></div>
                  <div class="col-12"><button type="submit" class="btn btn-profile">Crear</button></div>
               </div>
            </form>
         </div>
         <!-- Modal footer -->
         <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
@endsection
@section('footer')
<script type="text/javascript">
   var radio = document.getElementById("demas");
      var radioSi = document.getElementById("si-r");
      var agregar = document.getElementById("agregar");
   var subir = document.getElementsByClassName("btn-up");
      radioSi.addEventListener("click", val);
      agregar.addEventListener("click", Add);
   
      function val(){
      var div = document.getElementById("div");
         div.style.display="block";
         var oculta = document.getElementById("pregunta");
         oculta.style.display="none";
      }
   
      function Add(){
         var extra = document.getElementById("extra").value;
         var oculta = document.getElementById("div");
         var aparece = document.getElementById("pregunta");
            if(radioSi.checked == true){
               radioSi.checked = false;
            }
            aparece.style.display="block";
            oculta.style.display="none";
   
         var radioInsertado = "<div class='col-md-2 '><input type='checkbox' checked='' class='filled-in' value='"+extra+"'/><span class='text-box'>"+extra+"</span></div>";
            $("#demas").after( radioInsertado);
      }
</script>
@endsection
