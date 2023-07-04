<?php
/* Smarty version 4.3.0, created on 2023-07-03 22:10:16
  from 'C:\xampp\htdocs\projekt\projekt_wycieczki\app\views\edithotel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a32b28cdd608_60850613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9506847396f27fc10e4802b9519c8ca9a6b1034' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\projekt_wycieczki\\app\\views\\edithotel.tpl',
      1 => 1688414868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a32b28cdd608_60850613 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185033561864a32b28cd59c4_67349695', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154765491564a32b28cd61b2_46498431', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201364173064a32b28cd65e6_75076811', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_185033561864a32b28cd59c4_67349695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_185033561864a32b28cd59c4_67349695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_154765491564a32b28cd61b2_46498431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_154765491564a32b28cd61b2_46498431',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_201364173064a32b28cd65e6_75076811 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_201364173064a32b28cd65e6_75076811',
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
          <li><a href="elements.tpl">Elements</a></li>
          <li>
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'resultList'),$_smarty_tpl ) );?>
"
              >Dezaktywuj konto (tymczasowo lista użytkowników)</a
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


      <section style="padding-left: 200px; padding-right: 200px">
            <h2>Zmiana danych</h2>
            <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'hotelUpdate'),$_smarty_tpl ) );?>
">
              <div class="fields">
              <input type="hidden" name="id" 
                value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
"
                >
                <div class="field half">
                  <input type="text" name="nazwa" id="nazwa" placeholder="Nazwa" 
                  value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->nazwa;?>
"
                  />
                </div>
                <div class="field half">
                  <input
                    type="text"
                    name="gwiazdki"
                    id="gwiazdki"
                    placeholder="Ilość gwiazdek"
                    value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->gwiazdki;?>
"
                  />
                </div>
                <div class="field half">
                  <input
                    type="text"
                    name="amount"
                    id="amount"
                    placeholder="Cena_za_noc"
                    value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
"
                  ></input>
                </div>
              </div>
              <ul class="actions">
                <li><input type="submit" value="Zmień" class="primary" /></li>
              </ul>
            </form>
          </section>
      <?php
}
}
/* {/block 'content'} */
}
