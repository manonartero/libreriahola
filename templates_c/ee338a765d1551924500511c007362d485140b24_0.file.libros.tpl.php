<?php
/* Smarty version 4.2.1, created on 2022-10-15 22:55:33
  from '/Users/manonartero2/Desktop/TpEspecialWeb2/templates/libros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b3a65261ea0_48311354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee338a765d1551924500511c007362d485140b24' => 
    array (
      0 => '/Users/manonartero2/Desktop/TpEspecialWeb2/templates/libros.tpl',
      1 => 1665874530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:body.tpl' => 1,
  ),
),false)) {
function content_634b3a65261ea0_48311354 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/manonartero2/Desktop/TpEspecialWeb2/librerias/smarty-master/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
<div class="col">
      <form action="buscar" method="POST">
        <select name="buscarPorGenero" style="width: 230px">  
        <option value="">Seleccionar genero</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genero']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['g']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['g']->value->nombre_genero;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre_libro;?>
</td>
            <td> <?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre_autor;?>
</td>
            <td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genero']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['g']->value->id_genero == $_smarty_tpl->tpl_vars['libro']->value->id_genero) {?> 
                      <?php echo $_smarty_tpl->tpl_vars['g']->value->nombre_genero;?>

                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </td>
            <td>
            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['libro']->value->resumen,25);?>

            </td>
            <td>
              <form method="POST" action="libroDetalles">
                <input type="hidden" name="id_libro" value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libro;?>
">
                <button type="submit" class="btn btn-secondary" name ="id_libro" value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libro;?>
"> Ver mas</button>
            </form>     
       
            </td>
        
               <td style="width: 300px"> 
                <form action="editarLibro" method="POST" enctype="multipart/form-data">
                    <select name="generoEdit" style="width: 230px">  
                    <option value="">Seleccionar genero</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genero']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['g']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['g']->value->nombre_genero;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <input type="text" name="libroEdit" style="width: 230px" placeholder="Editar nombre del libro">
                    <input type="text" name="autorEdit" style="width: 230px" placeholder="Editar Nombre del autor">
                    <input type="text" name="resumenEdit" style="width: 230px" placeholder="Editar resumen del libro">
                    <input type="hidden" name="libroEditId" value=<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libro;?>
> 
                    <button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libro;?>
">Editarlibro</button>
                </form>
           </td> 
            <td>       
             <form method="POST" action="eliminarLibro">
             <button type="submit" name="id_libro" value=<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libro;?>
>Borrar libro</button>
                <input type="hidden" name="id_libro" value=<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libro;?>
>
            </form>
            </td>
            </tr> 
           

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
 </div>

 <div class="col">   
    <form action="agregarLibro" method="POST" enctype="multipart/form-data">
        <select name="genero">  
        <option value="">Seleccionar genero </option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genero']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['g']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['g']->value->nombre_genero;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="text" name="libro" id="libro" placeholder="Nombre del libro">
        <input type="text" name="autor" id="autor" placeholder="Nombre del autor">
        <input type="text" name="resumen" id="resumen" placeholder="Resumen del libro">
        <button type="submit" name="cargarLibro">Cargar libro</button>
    </form>
</div> 

 </div>
 




            


         
            
            

   <?php }
}
