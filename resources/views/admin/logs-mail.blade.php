@extends('admin.body-dash')
@section('contenido')
<div class="container setting-content">
   <div class="table-responsive table-admin">
      <div class="col-12 grey-text">
         <h3 class="title" align="center">Logs de Email</h3>
         <hr class="hr-admin">
      </div>
          <div class="table-responsive table-admin">
            <table class="table table-data2">
         <thead>
            <tr>
               <th></th>
               <th>Nombre y Apellido</th>
               <th>Correo electronico</th>
               <th>Formulario</th>
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
               <td>Jhon Snow </td>
               <td>John@example.com</td>
               <td>Apply</td>
               <td>
                  <div class="table-data-feature">
                     <a class="item" href="{{url('/')}}/admin/mail-details" data-toggle="tooltip" data-placement="top" title="Watch" >
                     <i class="fas fa-eye"></i>
                     </a>
                     <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" >
                     <i class="zmdi zmdi-edit"></i>
                     </button>
                     <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" >
                     <i class="zmdi zmdi-delete"></i>
                     </button>
                  </div>
               </td>
            </tr>
               <tr class="tr-shadow">
                <td>
                  <label class="au-checkbox">
                  <input type="checkbox">
                  <span class="au-checkmark"></span>
                  </label>
               </td>
               <td>Loura Smith </td>
               <td>Loura@example.com</td>
               <td>Contact</td>
               <td>
                  <div class="table-data-feature">
                     <a class="item" href="{{url('/')}}/admin/mail-details" data-toggle="tooltip" data-placement="top" title="Watch" >
                     <i class="fas fa-eye"></i>
                     </a>
                     <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" >
                     <i class="zmdi zmdi-edit"></i>
                     </button>
                     <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" >
                     <i class="zmdi zmdi-delete"></i>
                     </button>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
</div>
@endsection
