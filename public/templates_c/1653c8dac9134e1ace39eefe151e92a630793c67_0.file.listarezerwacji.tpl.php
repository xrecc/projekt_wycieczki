<?php
/* Smarty version 4.3.0, created on 2023-07-04 03:20:17
  from 'C:\xampp\htdocs\projekt\projekt_wycieczki\app\views\listarezerwacji.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a373d102d925_36399902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1653c8dac9134e1ace39eefe151e92a630793c67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\projekt_wycieczki\\app\\views\\listarezerwacji.tpl',
      1 => 1688433596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:searchlistarezerwacji.tpl' => 1,
  ),
),false)) {
function content_64a373d102d925_36399902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113243373964a373d10227b9_54692602', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53325624764a373d1022fe9_02369664', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30123748064a373d1023433_80246373', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_113243373964a373d10227b9_54692602 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_113243373964a373d10227b9_54692602',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_53325624764a373d1022fe9_02369664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_53325624764a373d1022fe9_02369664',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_30123748064a373d1023433_80246373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_30123748064a373d1023433_80246373',
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
      <section id="main">
        <div>
        <div class="bottom-margin" style="padding-left: 800px; padding-right:800px">
<form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
searchReservationListPart','table'); return false;">
	<h1>Opcje wyszukiwania</h1>
	<fieldset>
		<input type="text" placeholder="nazwisko" name="surname" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	
          <section>
          <div id="table">
          <?php $_smarty_tpl->_subTemplateRender("file:searchlistarezerwacji.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
          </section>
        </div>
      </section>

            <?php
}
}
/* {/block 'content'} */
}
