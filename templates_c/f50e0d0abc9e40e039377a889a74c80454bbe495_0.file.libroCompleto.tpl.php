<?php
/* Smarty version 4.2.1, created on 2022-10-15 22:34:26
  from '/Users/manonartero2/Desktop/TpEspecialWeb2/templates/libroCompleto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b3572218164_72354554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f50e0d0abc9e40e039377a889a74c80454bbe495' => 
    array (
      0 => '/Users/manonartero2/Desktop/TpEspecialWeb2/templates/libroCompleto.tpl',
      1 => 1665873262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:body.tpl' => 1,
  ),
),false)) {
function content_634b3572218164_72354554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:body.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libro']->value, 'detalle');
$_smarty_tpl->tpl_vars['detalle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['detalle']->value) {
$_smarty_tpl->tpl_vars['detalle']->do_else = false;
?>
          <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['detalle']->value->nombre_libro;?>
</td>
          <td> <?php echo $_smarty_tpl->tpl_vars['detalle']->value->nombre_autor;?>
</td>
          <td>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genero']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                  <?php if ($_smarty_tpl->tpl_vars['g']->value->id_genero == $_smarty_tpl->tpl_vars['detalle']->value->id_genero) {?> 
                    <?php echo $_smarty_tpl->tpl_vars['g']->value->nombre_genero;?>

                  <?php }?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </td>
          <td><?php echo $_smarty_tpl->tpl_vars['detalle']->value->resumen;?>
</td>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
 
</div>  <?php }
}
