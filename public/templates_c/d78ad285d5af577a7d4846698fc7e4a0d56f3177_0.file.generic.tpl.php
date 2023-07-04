<?php
/* Smarty version 4.3.0, created on 2023-07-04 08:58:30
  from 'C:\xampp\htdocs\projekt\projekt_wycieczki\app\views\generic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a3c3168e4301_28982330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd78ad285d5af577a7d4846698fc7e4a0d56f3177' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\projekt_wycieczki\\app\\views\\generic.tpl',
      1 => 1688433582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:searchgeneric.tpl' => 1,
  ),
),false)) {
function content_64a3c3168e4301_28982330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102082332964a3c3168d7838_92789067', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46603221564a3c3168d8347_47082964', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201423334864a3c3168d8963_99240621', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_102082332964a3c3168d7838_92789067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_102082332964a3c3168d7838_92789067',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_46603221564a3c3168d8347_47082964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_46603221564a3c3168d8347_47082964',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_201423334864a3c3168d8963_99240621 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_201423334864a3c3168d8963_99240621',
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
        <div class="bottom-margin">
<form style="padding-left: 800px; padding-right:800px;" id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
searchHotelPart','wyniki'); return false;">
	<h1>Opcje wyszukiwania</h1>
	<fieldset>
		<input type="text" placeholder="Nazwa hotelu" name="hotname" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>

</div>	

        <div class="inner" style="padding-left: 200px; padding-right:200px;">
          <h1>Wyniki</h1>
          <div id="wyniki">
          <?php $_smarty_tpl->_subTemplateRender("file:searchgeneric.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
          
      <?php echo '<script'; ?>
> function przekazParametr(parametr){
        window.location.href='elementsShow?id=' +parametr;
      } 
      <?php echo '</script'; ?>
>
        <?php
}
}
/* {/block 'content'} */
}
