<?php
/* Smarty version 4.2.1, created on 2022-10-15 22:45:31
  from '/Users/manonartero2/Desktop/TpEspecialWeb2/templates/generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b380ba7a784_31860991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b41603f70664caf867bfcf62344b8fe4d3a7c18' => 
    array (
      0 => '/Users/manonartero2/Desktop/TpEspecialWeb2/templates/generos.tpl',
      1 => 1665873929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:body.tpl' => 1,
  ),
),false)) {
function content_634b380ba7a784_31860991 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_subTemplateRender("file:body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
 <table class="ListadoGeneros">
  <thead>
    <tr>
      <th scope="col">Lista de generos  </th>
    </tr>
  </thead>
  <tbody>
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genero']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
         </tr>
            <td> <a href=""> <?php echo $_smarty_tpl->tpl_vars['g']->value->nombre_genero;?>
</a></td>
            <td> 
           
            <form action="editarGenero" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="generoId" value=<?php echo $_smarty_tpl->tpl_vars['g']->value->id_genero;?>
>
                <input type="text" name="nombre_genero_edit"  placeholder="Editar genero"> 
                <button type="submit" value="<?php echo $_smarty_tpl->tpl_vars['g']->value->id_genero;?>
" class="btn btn-outline-info">
                Editar genero
                </button>
            </form>
           
            </td>
           
            <td>
            <form method="POST" action="eliminarGenero"  enctype="multipart/form-data" >
                <input type="hidden" name="id_genero" value=<?php echo $_smarty_tpl->tpl_vars['g']->value->id_genero;?>
>
                <button type="submit" value="<?php echo $_smarty_tpl->tpl_vars['g']->value->id_genero;?>
" class="btn btn-outline-info">
                 Borrar genero
                </button>
            </form>
            
  
             </td>
        </tr>
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    
    <select name="generoPorCategoria">  
        <option value="">
            Buscar libros por genero
        </option>
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
 </tbody>
 </table>
 <?php if ((isset($_SESSION['usuario_id'])) && $_SESSION['usuario_id']) {?>
 <form action="agregarGenero" method="POST" enctype="multipart/form-data">
    <input type="text" name="genero" id="genero" placeholder="Nombre del genero">
    <button type="submitt" class="btn btn-outline-info">Agregar genero</button>
</form> 
 <?php }?>
  






<?php }
}
