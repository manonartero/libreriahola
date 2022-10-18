{include file="body.tpl"}


<div class="container">
<div class="col">
      <form action="buscar" method="POST">
        <select name="buscarPorGenero" style="width: 230px">  
        <option value="">Seleccionar genero</option>
            {foreach from=$genero item=$g}
            <option value="{$g->id_genero}">{$g->nombre_genero}</option>
            {/foreach}
        </select>
        <button type="submit" class="btn btn-primary ml-2">Buscar por genero</button>
    </form>

</div>

 
<div class="col">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nombre libro </th>
      <th scope="col">Autor</th>
       <th scope="col">Genero</th>
      <th scope="col">Resumen</th>
      <th scope="col"></th>
    </tr>
  </thead>
  
<tbody>
 {foreach from=$libros item=$libro}
            <tr>
            <td>{$libro->nombre_libro}</td>
            <td> {$libro->nombre_autor}</td>
            <td>
                {foreach from=$genero item=$g}
                    {if $g->id_genero==$libro->id_genero} 
                      {$g->nombre_genero}
                    {/if}
                {/foreach}
            </td>
            <td>
            {$libro->resumen|truncate:25}
            </td>
            <td>
              <form method="POST" action="libroDetalles">
                <input type="hidden" name="id_libro" value="{$libro->id_libro}">
                <button type="submit" class="btn btn-secondary" name ="id_libro" value="{$libro->id_libro}"> Ver mas</button>
            </form>     
       
            </td>
        
               <td style="width: 300px"> 
                <form action="editarLibro" method="POST" enctype="multipart/form-data">
                    <select name="generoEdit" style="width: 230px">  
                    <option value="">Seleccionar genero</option>
                        {foreach from=$genero item=$g}
                        <option value="{$g->id_genero}">{$g->nombre_genero}</option>
                        {/foreach}
                    </select>
                    <input type="text" name="libroEdit" style="width: 230px" placeholder="Editar nombre del libro">
                    <input type="text" name="autorEdit" style="width: 230px" placeholder="Editar Nombre del autor">
                    <input type="text" name="resumenEdit" style="width: 230px" placeholder="Editar resumen del libro">
                    <input type="hidden" name="libroEditId" value={$libro->id_libro}> 
                    <button type="submit" id="{$libro->id_libro}">Editarlibro</button>
                </form>
           </td> 
            <td>       
             <form method="POST" action="eliminarLibro">
             <button type="submit" name="id_libro" value={$libro->id_libro}>Borrar libro</button>
                <input type="hidden" name="id_libro" value={$libro->id_libro}>
            </form>
            </td>
            </tr> 
           

        {/foreach}
        </tbody>
    </table>
 </div>

 <div class="col">   
    <form action="agregarLibro" method="POST" enctype="multipart/form-data">
        <select name="genero">  
        <option value="">Seleccionar genero </option>
            {foreach from=$genero item=$g}
            <option value="{$g->id_genero}">{$g->nombre_genero}</option>
            {/foreach}
        </select>
        <input type="text" name="libro" id="libro" placeholder="Nombre del libro">
        <input type="text" name="autor" id="autor" placeholder="Nombre del autor">
        <input type="text" name="resumen" id="resumen" placeholder="Resumen del libro">
        <button type="submit" name="cargarLibro">Cargar libro</button>
    </form>
</div> 

 </div>
 




            


         
            
            

   