<?php
/* Smarty version 4.2.1, created on 2022-10-15 22:43:34
  from '/Users/manonartero2/Desktop/TpEspecialWeb2/templates/formularioLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b37969d9830_85451372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aa36a4e401fe6c244af67728b08d0e7dda4de88' => 
    array (
      0 => '/Users/manonartero2/Desktop/TpEspecialWeb2/templates/formularioLogin.tpl',
      1 => 1665835104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:body.tpl' => 1,
  ),
),false)) {
function content_634b37969d9830_85451372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:body.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="">
    <form method="POST" action="validar">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn">Iniciar sesion</button>
    </form>
</div>



<?php }
}
