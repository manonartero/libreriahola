  {include file="body.tpl"}
  
 <table class="ListadoGeneros">
  <thead>
    <tr>
      <th scope="col">Lista de generos  </th>
    </tr>
  </thead>
  <tbody>
       {foreach from=$genero item=$g}
         </tr>
            <td> <a href=""> {$g->nombre_genero}</a></td>
            <td> 
           
            <form action="editarGenero" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="generoId" value={$g->id_genero}>
                <input type="text" name="nombre_genero_edit"  placeholder="Editar genero"> 
                <button type="submit" value="{$g->id_genero}" class="btn btn-outline-info">
                Editar genero
                </button>
            </form>
           
            </td>
           
            <td>
            <form method="POST" action="eliminarGenero"  enctype="multipart/form-data" >
                <input type="hidden" name="id_genero" value={$g->id_genero}>
                <button type="submit" value="{$g->id_genero}" class="btn btn-outline-info">
                 Borrar genero
                </button>
            </form>
            
  
             </td>
        </tr>
       {/foreach}

    
    <select name="generoPorCategoria">  
        <option value="">
            Buscar libros por genero
        </option>
        {foreach from=$genero item=$g}  
        <option value="{$g->id_genero}">{$g->nombre_genero}</option>
        {/foreach}
</select>
 </tbody>
 </table>
 {if isset($smarty.session.usuario_id) && $smarty.session.usuario_id}
 <form action="agregarGenero" method="POST" enctype="multipart/form-data">
    <input type="text" name="genero" id="genero" placeholder="Nombre del genero">
    <button type="submitt" class="btn btn-outline-info">Agregar genero</button>
</form> 
 {/if}
  






