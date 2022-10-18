<?php
/* Smarty version 4.2.1, created on 2022-10-18 03:23:38
  from '/Users/manonartero2/Desktop/tpEspecialWeb/templates/body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634e1c3ada75d7_95671366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c35f35be5079c3dab45b48b190d11a135f676ca' => 
    array (
      0 => '/Users/manonartero2/Desktop/tpEspecialWeb/templates/body.tpl',
      1 => 1665869022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado.tpl' => 1,
  ),
),false)) {
function content_634e1c3ada75d7_95671366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
    <header>
        <div class="encabezado">
           <a href="encabezado"><img id= "logo" src="../imagenes/logohOLA.png" alt="Logo"></a> 
           <div class="titulo">
                <h1>Libreria Hola!</h1>
            </div>
             <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="inicio">Inicio <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="libros">Libros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="generos">Generos</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="formularioLogin">Iniciar sesion</a>
                </li>
                </ul>
            </div>
        </nav>
       
        </div>
        <div class="subtitulo">
            <h2>Leer es un refugio</h2>
        </div>
    </header>
    </div>



 <?php }
}
