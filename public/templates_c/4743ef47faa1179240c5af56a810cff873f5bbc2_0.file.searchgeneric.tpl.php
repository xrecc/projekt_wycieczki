<?php
/* Smarty version 4.3.0, created on 2023-07-04 00:24:24
  from 'C:\xampp\htdocs\projekt\projekt_wycieczki\app\views\searchgeneric.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a34a98e2e065_01760737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4743ef47faa1179240c5af56a810cff873f5bbc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\projekt_wycieczki\\app\\views\\searchgeneric.tpl',
      1 => 1688423062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a34a98e2e065_01760737 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="tiles">
<thead>
</thead>
<tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?> <article id="wynik" onclick="przekazParametr(<?php echo $_smarty_tpl->tpl_vars['r']->value['idhotel'];?>
)"><span class="image" ><img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"images/hotel".((string)$_smarty_tpl->tpl_vars['r']->value['zdjecie']).".jpg"),$_smarty_tpl ) );?>
" alt="" /></span><strong><?php echo $_smarty_tpl->tpl_vars['r']->value["hotname"];?>
</strong> <br>Hotel znajduje się w <?php echo $_smarty_tpl->tpl_vars['r']->value["nazwa"];?>
, <?php echo $_smarty_tpl->tpl_vars['r']->value["kraj"];?>
.<br />Cena za noc wynosi <?php echo $_smarty_tpl->tpl_vars['r']->value["cena_za_noc"];?>
 złotych.<br />Może pochwlić się <?php echo $_smarty_tpl->tpl_vars['r']->value["gwiazdki"];?>
 gwiazdkami.</article> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
        </div>
      </div>
</tbody>
      </section>
<?php }
}
