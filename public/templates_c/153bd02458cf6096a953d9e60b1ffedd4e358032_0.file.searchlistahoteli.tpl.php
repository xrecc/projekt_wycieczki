<?php
/* Smarty version 4.3.0, created on 2023-07-04 02:13:08
  from 'C:\xampp\htdocs\projekt\projekt_wycieczki\app\views\searchlistahoteli.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a36414b47609_47706579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '153bd02458cf6096a953d9e60b1ffedd4e358032' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\projekt_wycieczki\\app\\views\\searchlistahoteli.tpl',
      1 => 1688427714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a36414b47609_47706579 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="tab_result" class="pure-table pure-table-bordered">
<thead>
                <tr>
                <th>Nazwa</th>
                <th>Ilość gwiazdek</th>
                <th>Data powstania</th>
                <th>Cena za noc</th>
                <th>Basen</th>
                <th>All_inclusive</th>
                <th>Email</th>
                <th>Numer telefonu</th>
                <th>Opcje</th>
                </tr>
</thead>
<tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotel']->value, 'h');
$_smarty_tpl->tpl_vars['h']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['h']->value) {
$_smarty_tpl->tpl_vars['h']->do_else = false;
?> <tr><td><?php echo $_smarty_tpl->tpl_vars['h']->value["nazwa"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['h']->value["gwiazdki"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['h']->value["data_powstania"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['h']->value["cena_za_noc"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['h']->value["basen"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['h']->value["all_inclusive"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['h']->value["email"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['h']->value["numer_telefonu"];?>
</td><td><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"hotelEdit",'id'=>$_smarty_tpl->tpl_vars['h']->value['idhotel']),$_smarty_tpl ) );?>
">Edytuj /</a><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"hotelDelete",'id'=>$_smarty_tpl->tpl_vars['h']->value['idhotel']),$_smarty_tpl ) );?>
"> Usuń</a></td></tr> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table><?php }
}
