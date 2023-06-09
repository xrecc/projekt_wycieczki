<?php
/* Smarty version 4.3.0, created on 2023-06-25 13:25:09
  from 'C:\xampp\htdocs\projekt\projekt_wycieczki\app\views\search.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64982415444170_64489905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea14bad5b3aad5954f1749382738a903e514231d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\projekt_wycieczki\\app\\views\\search.html',
      1 => 1687692167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64982415444170_64489905 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Phantom by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
assets/css/main.css" />
    <noscript
      ><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
assets/css/noscript.css"
    /></noscript>
  </head>
  <body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Header -->
      <header id="header">
        <div class="inner">
          <!-- Logo -->
          <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
generalShow" class="logo">
            <span class="symbol"><img src="images/logo.svg" alt="" /></span
            ><span class="title">Wakacje z Sebą</span>
          </a>

          <!-- Nav -->
          <nav>
            <ul>
              <li><a href="#menu">Menu</a></li>
            </ul>
          </nav>
        </div>
      </header>

      <!-- Menu -->
      <nav id="menu">
        <h2>Menu</h2>
        <ul>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
generalShow">Strona główna</a></li>
          <li><a href="elements.html">Elements</a></li>
          <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
loginShow"
              >Dezaktywuj konto (tymczasowo logowanie)</a
            >
          </li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wylogowanie</a></li>
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
            <form method="post" action="searchResult">
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

          <ul class="copyright">
            <li>&copy; Untitled. All rights reserved</li>
            <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
          </ul>
        </div>
      </footer>
    </div>

    <!-- Scripts -->
    <?php echo '<script'; ?>
 type="text/javascript">
      function rangeSlide(value) {
        document.getElementById("rangeValue").innerHTML = value;
      }
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
assets/js/browser.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
assets/js/util.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
assets/js/main.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
