<?php
/* Smarty version 4.3.0, created on 2023-07-04 03:23:58
  from 'C:\xampp\htdocs\projekt\projekt_wycieczki\app\views\hotel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a374ae3f8854_02180262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '073821587c4f5260a09017df407b78b602b288d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\projekt_wycieczki\\app\\views\\hotel.tpl',
      1 => 1688433825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a374ae3f8854_02180262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12622119064a374ae3e6b22_24886552', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51367825464a374ae3e7316_76435403', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157101581264a374ae3e77c4_52769543', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_12622119064a374ae3e6b22_24886552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_12622119064a374ae3e6b22_24886552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_51367825464a374ae3e7316_76435403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_51367825464a374ae3e7316_76435403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_157101581264a374ae3e77c4_52769543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_157101581264a374ae3e77c4_52769543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


      <!-- Menu -->
      <nav id="menu">
        <h2>Menu</h2>
        <ul>   
          <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generalShow'),$_smarty_tpl ) );?>
">Strona główna</a></li>
          <?php if (\core\RoleUtils::inRole("admin") || \core\RoleUtils::inRole("user")) {?>
            <li>
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'reservationUser'),$_smarty_tpl ) );?>
"
              >Twoje rezerwacje</a
            >
          </li>
          <?php if (\core\RoleUtils::inRole("admin")) {?>
          <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'adminpanelShow'),$_smarty_tpl ) );?>
">Panel Admina</a></li>
          <?php }?>
          <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'logout'),$_smarty_tpl ) );?>
">Wylogowanie</a></li>
          <?php } else { ?>
            <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'loginShow'),$_smarty_tpl ) );?>
">Logowanie</a></li>
          <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'signupShow'),$_smarty_tpl ) );?>
">Rejestracja</a></li>
        <?php }?>
        </ul>
      </nav>

      <!-- Main -->
      <div id="main">
        <div class="inner">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotel']->value, 'h');
$_smarty_tpl->tpl_vars['h']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['h']->value) {
$_smarty_tpl->tpl_vars['h']->do_else = false;
?> <h1>Hotel</h1><p><span class="image left" ><img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"images/hotel".((string)$_smarty_tpl->tpl_vars['h']->value["zdjecie"]).".jpg"),$_smarty_tpl ) );?>
" alt="" /></span><h3><?php echo $_smarty_tpl->tpl_vars['h']->value["nazwa"];?>
</a></h3><strong><?php echo $_smarty_tpl->tpl_vars['h']->value["nazwa"];?>
</strong> <br>Hotel znajduje się w <?php echo $_smarty_tpl->tpl_vars['h']->value["nazwamiasta"];?>
, <?php echo $_smarty_tpl->tpl_vars['h']->value["kraj"];?>
<br />Cena za noc wynosi <?php echo $_smarty_tpl->tpl_vars['h']->value["cena_za_noc"];?>
 złotych.<br />Może pochwlić się <?php echo $_smarty_tpl->tpl_vars['h']->value["gwiazdki"];?>
 gwiazdkami.</p><form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'reservationSave'),$_smarty_tpl ) );?>
"><div class="fields"><div class="field half"><span>Data startowa: </span><input type="text" name="startdate" min="<?php echo '<?php'; ?>
 echo date('Y/m/d'); <?php echo '?>'; ?>
" /></div><div class="field half"><span>Data końcowa: </span><input type="text" name="enddate" /></div></div><ul class="actions"><li><input type="submit" value="Zarezerwuj" class="primary" /></li></ul></form> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
      
     <?php
}
}
/* {/block 'content'} */
}
