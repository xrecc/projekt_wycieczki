<?php
/* Smarty version 4.3.0, created on 2023-07-04 03:24:22
  from 'C:\xampp\htdocs\projekt\projekt_wycieczki\app\views\adminpanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a374c62a6fa5_86161014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2f9886503c0037e85fe354c17fb041925aaa553' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\projekt_wycieczki\\app\\views\\adminpanel.tpl',
      1 => 1688433567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a374c62a6fa5_86161014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103509720664a374c62a0743_33633582', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189099922164a374c62a0e53_61932760', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175369733464a374c62a1240_17927542', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_103509720664a374c62a0743_33633582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_103509720664a374c62a0743_33633582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_189099922164a374c62a0e53_61932760 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_189099922164a374c62a0e53_61932760',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_175369733464a374c62a1240_17927542 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_175369733464a374c62a1240_17927542',
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
          <header>
            <h1>Panel Admina.</h1>
            <p>Zarządzanie.</p>
          </header>
          <section class="tiles">
            <article class="style1">
              <span class="image">
                <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"images/pic01.jpg"),$_smarty_tpl ) );?>
" alt="" />
              </span>
              <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'resultList'),$_smarty_tpl ) );?>
">
                <h2>Zarządzanie użytkownikami</h2>
                <div class="content">
                  <p>Dodawanie, usuwanie, modyfikowanie użytkowników.</p>
                </div>
              </a>
            </article>
            <article class="style2">
              <span class="image">
                <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"images/pic02.jpg"),$_smarty_tpl ) );?>
" alt="" />
              </span>
              <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'hotelList'),$_smarty_tpl ) );?>
">
                <h2>Zarządzanie hotelami</h2>
                <div class="content">
                  <p>Dodawanie, usuwanie, modyfikowanie hoteli.</p>
                </div>
              </a>
            </article>
            <article class="style3">
              <span class="image">
                <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"images/pic03.jpg"),$_smarty_tpl ) );?>
" alt="" />
              </span>
              <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'reservationList'),$_smarty_tpl ) );?>
">
                <h2>Zarządzanie rezerwacjami</h2>
                <div class="content">
                  <p>Dodawanie, usuwanie, modyfikowanie rezerwacji.</p>
                </div>
              </a>
            </article>
          </section>
        </div>
      </div>

    <?php
}
}
/* {/block 'content'} */
}
