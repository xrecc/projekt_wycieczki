<?php
/* Smarty version 4.3.0, created on 2023-07-04 02:02:34
  from 'C:\xampp\htdocs\projekt\projekt_wycieczki\app\views\searchlista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a3619a15ba72_72908179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72db51ed8fda4a3ef2628632290db04bff2844f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\projekt_wycieczki\\app\\views\\searchlista.tpl',
      1 => 1688428949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a3619a15ba72_72908179 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="tab_result" class="pure-table pure-table-bordered">
<thead>
              <tr>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Haslo</th>
                <th>Czy Admin</th>
                <th>email</th>
                <th>numer_telefonu</th>
                <th>Opcje</th>
              </tr>
</thead>
<tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?> <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["imie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["nazwisko"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["haslo"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["czy_admin"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["email"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["numer_telefonu"];?>
</td><td><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"resultEdit",'id'=>$_smarty_tpl->tpl_vars['r']->value['idusers']),$_smarty_tpl ) );?>
">Edytuj /</a><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"resultDelete",'id'=>$_smarty_tpl->tpl_vars['r']->value['idusers']),$_smarty_tpl ) );?>
"> Usuń</a></td></tr> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              
</div>
</tbody>
</table><?php }
}
