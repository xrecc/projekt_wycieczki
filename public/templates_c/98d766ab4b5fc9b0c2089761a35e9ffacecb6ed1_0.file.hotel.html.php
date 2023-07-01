<?php
/* Smarty version 4.3.0, created on 2023-06-25 17:55:18
  from 'C:\xampp\htdocs\projekt\projekt_wycieczki\app\views\hotel.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649863669e8438_65280554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98d766ab4b5fc9b0c2089761a35e9ffacecb6ed1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\projekt_wycieczki\\app\\views\\hotel.html',
      1 => 1687708294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649863669e8438_65280554 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Generic - Phantom by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript
      ><link rel="stylesheet" href="assets/css/noscript.css"
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
            ><span class="title">Phantom</span>
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
          <h1>Hotel</h1>
          <!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotel']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?> <span class="image main" ><img src="images/hotel<?php echo $_smarty_tpl->tpl_vars['t']->value["zdjecie"];?>
.jpg" alt="" /></span> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> -->
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sss']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?> <p><span class="image left" ><img src="images/hotel<?php echo $_smarty_tpl->tpl_vars['r']->value['zdjecie'];?>
.jpg" alt="" /></span><h3><?php echo $_smarty_tpl->tpl_vars['s']->value["hotname"];?>
</a></h3><strong><?php echo $_smarty_tpl->tpl_vars['s']->value["hotname"];?>
</strong> <br>Hotel znajduje się w <?php echo $_smarty_tpl->tpl_vars['s']->value["nazwa"];?>
, <?php echo $_smarty_tpl->tpl_vars['r']->value["kraj"];?>
.<br />Cena za noc wynosi <?php echo $_smarty_tpl->tpl_vars['s']->value["cena_za_noc"];?>
 złotych.<br />Może pochwlić się <?php echo $_smarty_tpl->tpl_vars['s']->value["gwiazdki"];?>
 gwiazdkami.</p> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>

      <!-- Footer -->
      <footer id="footer">
        <div class="inner">
          <section>
            <h2>Zarezerwuj</h2>
            <form method="post" action="#">
              <div class="fields">
                <div class="field half">
                  <input type="text" name="name" id="name" placeholder="Name" />
                </div>
                <div class="field half">
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Email"
                  />
                </div>
                <div class="field">
                  <textarea
                    name="message"
                    id="message"
                    placeholder="Message"
                  ></textarea>
                </div>
              </div>
              <ul class="actions">
                <li><input type="submit" value="Send" class="primary" /></li>
              </ul>
            </form>
          </section>
          <section>
            <h2>Follow</h2>
            <ul class="icons">
              <li>
                <a href="#" class="icon brands style2 fa-twitter"
                  ><span class="label">Twitter</span></a
                >
              </li>
              <li>
                <a href="#" class="icon brands style2 fa-facebook-f"
                  ><span class="label">Facebook</span></a
                >
              </li>
              <li>
                <a href="#" class="icon brands style2 fa-instagram"
                  ><span class="label">Instagram</span></a
                >
              </li>
              <li>
                <a href="#" class="icon brands style2 fa-dribbble"
                  ><span class="label">Dribbble</span></a
                >
              </li>
              <li>
                <a href="#" class="icon brands style2 fa-github"
                  ><span class="label">GitHub</span></a
                >
              </li>
              <li>
                <a href="#" class="icon brands style2 fa-500px"
                  ><span class="label">500px</span></a
                >
              </li>
              <li>
                <a href="#" class="icon solid style2 fa-phone"
                  ><span class="label">Phone</span></a
                >
              </li>
              <li>
                <a href="#" class="icon solid style2 fa-envelope"
                  ><span class="label">Email</span></a
                >
              </li>
            </ul>
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
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
