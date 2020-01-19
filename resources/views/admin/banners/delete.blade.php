{!! Form::open(['url'=> '/admin/banners/'.$banner->id, 'method' => 'DELETE',
'class' => 'form-btn-delete', 'id'=>'formEliminar']) !!}
<script languaje="Javascript">
 confirmar = function(){
     if( confirm("Vas a eliminar este iten ¿Estas seguro?") ){
         document.getElementById('formEliminar').submit();
     }
 }
</script>
    <input type="button" class="btn-delete" value="Eliminar" onClick="confirmar();">
{!! Form::close() !!}