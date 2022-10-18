{include 'body.tpl'}

    <div class="container">

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

      {foreach from=$libro item=$detalle}
          <tr>
          <td>{$detalle->nombre_libro}</td>
          <td> {$detalle->nombre_autor}</td>
          <td>
              {foreach from=$genero item=$g}
                  {if $g->id_genero==$detalle->id_genero} 
                    {$g->nombre_genero}
                  {/if}
              {/foreach}
          </td>
          <td>{$detalle->resumen}</td>
      {/foreach}   
 
</div>  