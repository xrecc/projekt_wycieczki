<?php
/* Smarty version 4.3.0, created on 2023-07-04 02:19:19
  from 'C:\xampp\htdocs\projekt\projekt_wycieczki\app\views\searchlistarezerwacji.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a36587313213_17319378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd49299526f10fee1a09d8d5e75b95f6cf6a1d81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\projekt_wycieczki\\app\\views\\searchlistarezerwacji.tpl',
      1 => 1688429929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a36587313213_17319378 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="tab_result" class="pure-table pure-table-bordered">
<thead>
            <tr>
                <th>Nazwa</th>
                <th>Cena za noc</th>
                <th>All_inclusive</th>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Email</th>
                <th>Numer telefonu</th>
                <th>Początek wycieczki</th>
                <th>Koniec wycieczki</th>
                <th>Opcje</th>
            </tr>
</thead>
<tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rezerwacja']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?> <tr><td><?php echo $_smarty_tpl->tpl_vars['v']->value["nazwa"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value["cena_za_noc"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value["all_inclusive"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value["imie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value["nazwisko"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value["email"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value["numer_telefonu"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value["data_start"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value["data_end"];?>
</td><td><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"reservationDelete",'id'=>$_smarty_tpl->tpl_vars['v']->value['idrezerwacji']),$_smarty_tpl ) );?>
"> Usuń</a></td></tr> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table><?php }
}
