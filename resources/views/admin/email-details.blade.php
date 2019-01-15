@extends('admin.body-dash')
@section('contenido')
<div class="container setting-content">
  <div class="col-12" style="background-color:#fff;">
      <div class="col-12">
        <p><b>Nombre y Apellido del usuario: Jon Snow</b></p>
        <p><b>Correo Electronico:</b></p>
        <p><b>Formulario de contacto:</b></p>
        <p><b>Texto:</b><br/>Lorem ipsum dolor sit amet consectetur adipiscing elit euismod himenaeos semper, congue pretium maecenas curabitur fusce class dignissim nunc. Pretium torquent venenatis quis at inceptos dapibus, facilisi mauris ullamcorper primis fames interdum, ante vel quam blandit cubilia. Proin ridiculus consequat neque pharetra venenatis vehicula feugiat facilisi quis habitasse, diam ad montes metus curabitur hac massa molestie velit, nec curae rhoncus duis lacinia taciti convallis turpis pretium.<br/>
        Enim cursus mollis torquent eros sem orci mus bibendum proin mattis integer cum feugiat, tincidunt interdum sed per aenean arcu habitasse conubia class eleifend donec est, quisque cras primis vehicula semper scelerisque rutrum etiam diam fermentum in magnis. Suscipit nunc vestibulum velit aliquet platea ad natoque porta, ullamcorper penatibus sem magnis cras nam interdum a, hendrerit nisi in eleifend eros arcu vitae. Feugiat pellentesque hendrerit imperdiet ornare lobortis habitant iaculis dictumst quisque aptent nisl, neque sociis rutrum ullamcorper auctor cum massa pharetra himenaeos per arcu viverra, vehicula hac elementum justo interdum conubia dui sagittis eu phasellus.</p>
      </div>
      <div class="col-12">
      	<div class="button"><a href="{{url('/')}}/admin/logs-mail" class="btn btn-mail">Ir a la bandeja de mails</a><button class="btn btn-answer">Responder</button></div>
      </div>
    </div>
  </div>
@endsection