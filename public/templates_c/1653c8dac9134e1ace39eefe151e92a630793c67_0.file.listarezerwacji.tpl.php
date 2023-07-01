<?php
/* Smarty version 4.3.0, created on 2023-06-27 18:43:24
  from 'C:\xampp\htdocs\projekt\projekt_wycieczki\app\views\listarezerwacji.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649b11ac201634_04952420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1653c8dac9134e1ace39eefe151e92a630793c67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\projekt_wycieczki\\app\\views\\listarezerwacji.tpl',
      1 => 1687801482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649b11ac201634_04952420 (Smarty_Internal_Template $_smarty_tpl) {
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
          <li><a href="elements.tpl">Elements</a></li>
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
      <section id="contact">
        <div>
          <section>
            <table id="tab_result" class="pure-table pure-table-bordered">
              <tr>
                <th>Nazwa</th>
                <th>Cena za noc</th>
                <th>All_inclusive</th>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Email</th>
                <th>Numer telefonu</th>
              </tr>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rezerwacja']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?> <tr><td><?php echo $_smarty_tpl->tpl_vars['v']->value["nazwa"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value["cena_za_noc"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value["all_inclusive"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value["imie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value["nazwisko"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value["email"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value["numer_telefonu"];?>
</td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aaa']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?><td><?php echo $_smarty_tpl->tpl_vars['a']->value["data_start"];?>
</td></tr> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
          </section>
        </div>
      </section>

      <!-- Footer -->
      <footer id="footer">
        <div class="inner">
          <section>
            <h2>Get in touch</h2>
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
