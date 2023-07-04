<?php
/* Smarty version 4.3.0, created on 2023-07-04 02:33:32
  from 'C:\xampp\htdocs\projekt\projekt_wycieczki\app\views\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a368dc55a8f4_41237819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c922225799a025f6bf1d2c1c281437163b9a0c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\projekt_wycieczki\\app\\views\\signup.tpl',
      1 => 1688427716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a368dc55a8f4_41237819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162867472564a368dc54ad62_36920947', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21000811064a368dc54be14_48875591', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80620564264a368dc54c382_02791067', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_162867472564a368dc54ad62_36920947 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_162867472564a368dc54ad62_36920947',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_21000811064a368dc54be14_48875591 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_21000811064a368dc54be14_48875591',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_80620564264a368dc54c382_02791067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_80620564264a368dc54c382_02791067',
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
          <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'loginShow'),$_smarty_tpl ) );?>
">Logowanie</a></li>
          <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'signupShow'),$_smarty_tpl ) );?>
">Rejestracja</a></li>
        </ul>
      </nav>

      <!-- Main -->
      <div id="main">
        <div class="inner">
          <header>
            <h1>Rejestracja.</h1>
            <p>Załóż nowe konto.</p>
          </header>
        </div>
      </div>

      <!-- Footer -->
      <footer id="footer">
        <div class="inner">
          <section>
            <h2>Zarejestruj się</h2>
            <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'signup'),$_smarty_tpl ) );?>
">
              <div class="fields">
                <div class="field half">
                  <input
                    type="email"
                    name="email"
                    id="id_email"
                    placeholder="Email"
                  />
                </div>
                <div class="field half">
                  <input
                    type="password"
                    name="pass"
                    id="id_pass"
                    placeholder="Hasło"
                  />
                </div>
                <div class="field half">
                  <input
                    type="text"
                    name="name"
                    id="id_name"
                    placeholder="Imię"
                  />
                </div>
                <div class="field half">
                  <input
                    type="text"
                    name="surname"
                    id="id_surname"
                    placeholder="Nazwisko"
                  />
                </div>
                <div class="field half">
                  <input
                    type="tel"
                    name="phonenumber"
                    id="id_number"
                    placeholder="Numer telefonu"
                    minlength="9"
                    maxlength="9"
                  />
                </div>
              </div>
              <ul class="actions">
                <li>
                  <input type="submit" value="Zarejestruj" class="primary" />
                </li>
              </ul>
            </form>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <div class="alert <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>alert-success<?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>alert-warning<?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>alert-danger<?php }?>" role="alert">
               <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

            </div>
           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </section>
<?php
}
}
/* {/block 'content'} */
}
