<?php
/* Smarty version 4.3.0, created on 2023-07-04 02:27:02
  from 'C:\xampp\htdocs\projekt\projekt_wycieczki\app\views\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a367562d8ee1_19138185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '173e7d180e1030247269a7949a8ba18222c85d60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\projekt_wycieczki\\app\\views\\search.tpl',
      1 => 1688427712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a367562d8ee1_19138185 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211410231164a367562cb9b7_23931390', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50995116364a367562cc180_37058297', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162590365164a367562cc5b1_09611537', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_211410231164a367562cb9b7_23931390 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_211410231164a367562cb9b7_23931390',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_50995116364a367562cc180_37058297 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_50995116364a367562cc180_37058297',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_162590365164a367562cc5b1_09611537 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_162590365164a367562cc5b1_09611537',
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
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'resultList'),$_smarty_tpl ) );?>
"
              >Szybki dostęp do listy użytkowników</a
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
            <h1>Wyszukiwarka.</h1>
            <p>Wyszukaj wymarzone wakacje.</p>
          </header>
        </div>
      </div>

      <!-- Footer -->
      <footer id="footer">
        <div class="inner">
          <section>
            <h2>Podaj informacje</h2>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
searchResult">
              <div class="fields">
                <div class="field half">
                  <select name="kraj" id="demo-category">
                    <option value ="">Kraj</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kraj']->value, 'k');
$_smarty_tpl->tpl_vars['k']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->do_else = false;
?> <option value = "<?php echo $_smarty_tpl->tpl_vars['k']->value["kraj"];?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value["kraj"];?>
</option> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
                <div class="field half">
                  <select name="nazwa" id="demo-category">
                    <option value ="">Miasto</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['miasto']->value, 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?> <option value = "<?php echo $_smarty_tpl->tpl_vars['m']->value["nazwa"];?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value["nazwa"];?>
</option> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
                <div class="field half">
                  <div>
                    <span id="stars">Ilość gwiazdek:</span>
                    <span id="rangeValue"> 0</span>
                    <div id="form-wrapper">

                        <div id="debt-amount-slider">
                          <input
                            type="radio"
                            name="amount"
                            id="1"
                            value="1"
                            onChange="rangeSlide(this.value)"
                            required
                          ></input>
                          <label for="1"></label>
                          <input
                            type="radio"
                            name="amount"
                            id="2"
                            value="2"
                            onChange="rangeSlide(this.value)"
                            required
                          />
                          <label for="2"></label>
                          <input
                            type="radio"
                            name="amount"
                            id="3"
                            value="3"
                            onChange="rangeSlide(this.value)"
                            required
                          />
                          <label for="3"></label>
                          <input
                            type="radio"
                            name="amount"
                            id="4"
                            value="4"
                            onChange="rangeSlide(this.value)"
                            required
                          />
                          <label for="4"></label>
                          <input
                            type="radio"
                            name="amount"
                            id="5"
                            value="5"
                            onChange="rangeSlide(this.value)"
                            required
                          />
                          <label for="5"></label>
                          <div id="amount"></div>
                        </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <ul class="actions">
                <li><input type="submit" value="Wyszukaj" class="primary" /></li>
              </ul>
            </form>
          </section>
          

    <!-- Scripts -->
    <?php echo '<script'; ?>
 type="text/javascript">
      function rangeSlide(value) {
        document.getElementById("rangeValue").innerHTML = value;
      }
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
