<?php
/* Smarty version 4.3.0, created on 2023-07-01 13:49:20
  from 'C:\xampp\htdocs\projekt\projekt_wycieczki\app\views\general.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a012c0760f71_31890672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cbbb2b303103fafb2bb28327b99469d8c178a95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\projekt_wycieczki\\app\\views\\general.tpl',
      1 => 1688212155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a012c0760f71_31890672 (Smarty_Internal_Template $_smarty_tpl) {
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
          <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generalShow'),$_smarty_tpl ) );?>
" class="logo">
            <span class="symbol"
              ><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
images/logo.svg" alt="" /></span
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

      <!-- Main -->
      <div id="main">
        <div class="inner">
          <header>
            <h1>
              Jesteśmy jednym z najlepszych biur podróży. Zorganizujemy wakacje
              których nie zapomnisz &#9969;.
            </h1>
            <p>
              Wybierz którąś z naszych polecanych wycieczek lub skorzystaj z
              <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'searchShow'),$_smarty_tpl ) );?>
"
                ><strong>wyszukiwarki</strong></a
              >.
            </p>
          </header>
          <section class="tiles">
            <article class="style1">
              <span class="image">
                <img src="images/hotelREBU.jpg" alt="Obraz Pexels z Pixabay" />
              </span>

              <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"elementsShow"),$_smarty_tpl ) );?>
">
                <h2>ReBu Hotel</h2>
                <div class="content">
                  <p>
                    Sed nisl arcu euismod sit amet nisi lorem etiam dolor
                    veroeros et feugiat.
                  </p>
                </div>
              </a>
            </article>
            <article class="style2">
              <span class="image">
                <img
                  src="images/hotelTelph.jpg"
                  alt="Obraz Ingo Jakubke z Pixabay"
                />
              </span>
              <a href="generic.tpl">
                <h2>Telph</h2>
                <div class="content">
                  <p>
                    Sed nisl arcu euismod sit amet nisi lorem etiam dolor
                    veroeros et feugiat.
                  </p>
                </div>
              </a>
            </article>
            <article class="style3">
              <span class="image">
                <img
                  src="images/hotelZib.jpg"
                  alt="Obraz Carlos / Saigon - Vietnam z Pixabay"
                />
              </span>
              <a href="generic.tpl">
                <h2>Zib Hotel</h2>
                <div class="content">
                  <p>
                    Sed nisl arcu euismod sit amet nisi lorem etiam dolor
                    veroeros et feugiat.
                  </p>
                </div>
              </a>
            </article>
            <article class="style4">
              <span class="image">
                <img
                  src="images/hotelNature.jpg"
                  alt="Obraz werner moser z Pixabay"
                />
              </span>
              <a href="generic.tpl">
                <h2>Nature</h2>
                <div class="content">
                  <p>
                    Sed nisl arcu euismod sit amet nisi lorem etiam dolor
                    veroeros et feugiat.
                  </p>
                </div>
              </a>
            </article>
            <article class="style5">
              <span class="image">
                <img
                  src="images/hotelGlassPalace.jpg"
                  alt="Obraz wal_172619 z Pixabay"
                />
              </span>
              <a href="generic.tpl">
                <h2>Glass Palace</h2>
                <div class="content">
                  <p>
                    Sed nisl arcu euismod sit amet nisi lorem etiam dolor
                    veroeros et feugiat.
                  </p>
                </div>
              </a>
            </article>
            <article class="style6">
              <span class="image">
                <img
                  src="images/hotelBeyond.jpg"
                  alt="Obraz Steve Buissinne z Pixabay"
                />
              </span>
              <a href="generic.tpl">
                <h2>Beyond</h2>
                <div class="content">
                  <p>
                    Sed nisl arcu euismod sit amet nisi lorem etiam dolor
                    veroeros et feugiat.
                  </p>
                </div>
              </a>
            </article>
            <article class="style2">
              <span class="image">
                <img src="images/pic07.jpg" alt="" />
              </span>
              <a href="generic.tpl">
                <h2>Ipsum</h2>
                <div class="content">
                  <p>
                    Sed nisl arcu euismod sit amet nisi lorem etiam dolor
                    veroeros et feugiat.
                  </p>
                </div>
              </a>
            </article>
            <article class="style3">
              <span class="image">
                <img src="images/pic08.jpg" alt="" />
              </span>
              <a href="generic.tpl">
                <h2>Dolor</h2>
                <div class="content">
                  <p>
                    Sed nisl arcu euismod sit amet nisi lorem etiam dolor
                    veroeros et feugiat.
                  </p>
                </div>
              </a>
            </article>
            <article class="style1">
              <span class="image">
                <img src="images/pic09.jpg" alt="" />
              </span>
              <a href="generic.tpl">
                <h2>Nullam</h2>
                <div class="content">
                  <p>
                    Sed nisl arcu euismod sit amet nisi lorem etiam dolor
                    veroeros et feugiat.
                  </p>
                </div>
              </a>
            </article>
            <article class="style5">
              <span class="image">
                <img src="images/pic10.jpg" alt="" />
              </span>
              <a href="generic.tpl">
                <h2>Ultricies</h2>
                <div class="content">
                  <p>
                    Sed nisl arcu euismod sit amet nisi lorem etiam dolor
                    veroeros et feugiat.
                  </p>
                </div>
              </a>
            </article>
            <article class="style6">
              <span class="image">
                <img src="images/pic11.jpg" alt="" />
              </span>
              <a href="generic.tpl">
                <h2>Dictum</h2>
                <div class="content">
                  <p>
                    Sed nisl arcu euismod sit amet nisi lorem etiam dolor
                    veroeros et feugiat.
                  </p>
                </div>
              </a>
            </article>
            <article class="style4">
              <span class="image">
                <img src="images/pic12.jpg" alt="" />
              </span>
              <a href="generic.tpl">
                <h2>Pretium</h2>
                <div class="content">
                  <p>
                    Sed nisl arcu euismod sit amet nisi lorem etiam dolor
                    veroeros et feugiat.
                  </p>
                </div>
              </a>
            </article>
          </section>
        </div>
      </div>

      <!-- Footer -->
      <footer id="footer">
        <div class="inner">
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
