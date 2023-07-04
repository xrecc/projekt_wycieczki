<?php
/* Smarty version 4.3.0, created on 2023-07-03 21:44:14
  from 'C:\xampp\htdocs\projekt\projekt_wycieczki\app\views\edituser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a3250ee8fc85_69476635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84d8e2b1f7cb713cb4d3f492dc73c599c30598c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\projekt_wycieczki\\app\\views\\edituser.tpl',
      1 => 1688412641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a3250ee8fc85_69476635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166532542864a3250ee83834_05965721', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167547782264a3250ee84574_40008669', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152920398364a3250ee84ff8_79155256', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_166532542864a3250ee83834_05965721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_166532542864a3250ee83834_05965721',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_167547782264a3250ee84574_40008669 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_167547782264a3250ee84574_40008669',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_152920398364a3250ee84ff8_79155256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_152920398364a3250ee84ff8_79155256',
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
            <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'resultUpdate'),$_smarty_tpl ) );?>
">
              <div class="fields">
              <input type="hidden" name="id" 
                value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
"
                >
                <div class="field half">
                  <input type="text" name="name" id="name" placeholder="Imie" 
                  value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
"
                  />
                </div>
                <div class="field half">
                  <input
                    type="text"
                    name="surname"
                    id="surname"
                    placeholder="Nazwisko"
                    value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
"
                  />
                </div>
                <div class="field half">
                  <input
                    type="password"
                    name="pass"
                    id="pass"
                    placeholder="Hasło"
                    value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->pass;?>
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
