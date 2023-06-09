<?php
/* Smarty version 4.3.1, created on 2023-06-08 04:47:15
  from 'C:\xampp\htdocs\TP.4.MVC\ejercicio2\templates\registros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648141332ea5d4_93382822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4691bdc516955327d383b317c6def37a74d9c940' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP.4.MVC\\ejercicio2\\templates\\registros.tpl',
      1 => 1686192423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648141332ea5d4_93382822 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Deja tu comentario</h1>

<table border="1px">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['registros']->value, 'registro');
$_smarty_tpl->tpl_vars['registro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['registro']->value) {
$_smarty_tpl->tpl_vars['registro']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['registro']->value->comentario;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['registro']->value->usuario;?>
</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
    <td><h3><button type="<?php echo BASE_URL;?>
comentario/agregado/" value="submit">Agregar</button></td>   
</table>

<?php }
}
