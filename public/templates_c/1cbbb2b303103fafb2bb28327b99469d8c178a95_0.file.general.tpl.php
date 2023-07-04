<?php
/* Smarty version 4.3.0, created on 2023-07-04 03:20:15
  from 'C:\xampp\htdocs\projekt\projekt_wycieczki\app\views\general.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a373cf0e4d92_93044531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cbbb2b303103fafb2bb28327b99469d8c178a95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\projekt_wycieczki\\app\\views\\general.tpl',
      1 => 1688433578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a373cf0e4d92_93044531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27235622164a373cf0d84a1_85980091', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4640039764a373cf0d8d90_21768008', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_215112364a373cf0d91f1_84541654', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_27235622164a373cf0d84a1_85980091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_27235622164a373cf0d84a1_85980091',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_4640039764a373cf0d8d90_21768008 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_4640039764a373cf0d8d90_21768008',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_215112364a373cf0d91f1_84541654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_215112364a373cf0d91f1_84541654',
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
            <h1>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['username']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?> Witaj, <?php echo $_smarty_tpl->tpl_vars['u']->value["imie"];?>
! <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </h1>
            <h2>
              Jesteśmy jednym z najlepszych biur podróży. Zorganizujemy wakacje
              których nie zapomnisz &#9969;.
            </h2>
            <p>
              Wybierz którąś z naszych polecanych wycieczek lub skorzystaj z
              <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'searchShow'),$_smarty_tpl ) );?>
"
                ><strong>wyszukiwarki</strong></a
              >.
            </p>
          </header>
          <section class="tiles">
            <article class="style1" id="kafelek" onclick="przekazParametr(1)">
              <span class="image">
                <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"images/hotelREBU.jpg"),$_smarty_tpl ) );?>
" alt="Obraz Pexels z Pixabay" />
              </span>

              <a href="#">
                <h2>ReBu Hotel</h2>
                <div class="content">
                  
                </div>
              </a>
            </article>
            <article class="style2" id="kafelek" onclick="przekazParametr(2)">
              <span class="image">
                <img
                  src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"images/hotelTelph.jpg"),$_smarty_tpl ) );?>
"
                  alt="Obraz Ingo Jakubke z Pixabay"
                />
              </span>
              <a href="#">
                <h2>Telph</h2>
                <div class="content">
                  
                </div>
              </a>
            </article>
            <article class="style3" id="kafelek" onclick="przekazParametr(3)">
              <span class="image">
                <img
                  src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"images/hotelZib.jpg"),$_smarty_tpl ) );?>
"
                  alt="Obraz Carlos / Saigon - Vietnam z Pixabay"
                />
              </span>
              <a href="#">
                <h2>Zib Hotel</h2>
                <div class="content">
                  
                </div>
              </a>
            </article>
            <article class="style4" id="kafelek" onclick="przekazParametr(4)">
              <span class="image">
                <img
                  src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"images/hotelNature.jpg"),$_smarty_tpl ) );?>
"
                  alt="Obraz werner moser z Pixabay"
                />
              </span>
              <a href="#">
                <h2>Nature</h2>
                <div class="content">
                  
                </div>
              </a>
            </article>
            <article class="style5" id="kafelek" onclick="przekazParametr(5)">
              <span class="image">
                <img
                  src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"images/hotelGlassPalace.jpg"),$_smarty_tpl ) );?>
"
                  alt="Obraz wal_172619 z Pixabay"
                />
              </span>
              <a href="#">
                <h2>Glass Palace</h2>
                <div class="content">
                  
                </div>
              </a>
            </article>
            <article class="style6" id="kafelek" onclick="przekazParametr(6)">
              <span class="image">
                <img
                  src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"images/hotelBeyond.jpg"),$_smarty_tpl ) );?>
"
                  alt="Obraz Steve Buissinne z Pixabay"
                />
              </span>
              <a href="#">
                <h2>Beyond</h2>
                <div class="content">
                  
                </div>
              </a>
            </article>
           
          </section>
        </div>
      </div>

  

    <!-- Scripts -->
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
