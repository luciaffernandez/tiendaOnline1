<?php
/* Smarty version 3.1.33, created on 2019-02-04 12:23:32
  from '/var/www/tiendaOnline/template/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5820b4dd3a78_02535675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf301362d50ff160d817209e98c006fcd7a63999' => 
    array (
      0 => '/var/www/tiendaOnline/template/login.tpl',
      1 => 1549279412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5820b4dd3a78_02535675 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Ejemplo Tema 5: Login Tienda Web con Plantillas</title>
  <link href="tienda.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id='login'>
    <form action='index.php' method='post'>
    <fieldset >
        <legend>Login</legend>
        <div><span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></div>
        <div class='campo'>
            <label>Usuario:</label><br/>
            <input type='text' name='name' maxlength="50" /><br/>
        </div>
        <div class='campo'>
            <label>Contraseña:</label><br/>
            <input type='password' name='pass' maxlength="50" /><br/>
        </div>
        <div class='campo'>
            <input type='submit' name='enviar' value='Enviar' />
        </div>
    </fieldset>
    </form>
        <hr/>
    </div>
</body>
</html><?php }
}
