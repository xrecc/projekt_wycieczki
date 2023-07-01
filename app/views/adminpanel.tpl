<!DOCTYPE html>
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
    <link rel="stylesheet" href="{$conf->app_url}assets/css/main.css" />
    <noscript
      ><link rel="stylesheet" href="{$conf->app_url}assets/css/noscript.css"
    /></noscript>
  </head>
  <body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Header -->
      <header id="header">
        <div class="inner">
          <!-- Logo -->
          <a href="{url action='generalShow'}" class="logo">
            <span class="symbol"
              ><img src="{$conf->app_url}images/logo.svg" alt="" /></span
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
        <li><a href="{url action='generalShow'}">Strona główna</a></li>
        {if \core\RoleUtils::inRole("admin") || \core\RoleUtils::inRole("user")}
        <li><a href="elements.tpl">Elements</a></li>
        <li>
          <a href="{url action='resultList'}"
            >Dezaktywuj konto (tymczasowo lista użytkowników)</a
          >
        </li>
        {if \core\RoleUtils::inRole("admin")}
        <li><a href="{url action='adminpanelShow'}">Panel Admina</a></li>
        {/if}
        <li><a href="{url action='logout'}">Wylogowanie</a></li>
        {else}
          <li><a href="{url action='loginShow'}">Logowanie</a></li>
        <li><a href="{url action='signupShow'}">Rejestracja</a></li>
      {/if}
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
                <img src="images/pic01.jpg" alt="" />
              </span>
              <a href="{url action='resultList'}">
                <h2>Zarządzanie użytkownikami</h2>
                <div class="content">
                  <p>Dodawanie, usuwanie, modyfikowanie użytkowników.</p>
                </div>
              </a>
            </article>
            <article class="style2">
              <span class="image">
                <img src="images/pic02.jpg" alt="" />
              </span>
              <a href="{url action='hotelList'}">
                <h2>Zarządzanie hotelami</h2>
                <div class="content">
                  <p>Dodawanie, usuwanie, modyfikowanie hoteli.</p>
                </div>
              </a>
            </article>
            <article class="style3">
              <span class="image">
                <img src="images/pic03.jpg" alt="" />
              </span>
              <a href="{url action='reservationList'}">
                <h2>Zarządzanie rezerwacjami</h2>
                <div class="content">
                  <p>Dodawanie, usuwanie, modyfikowanie rezerwacji.</p>
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
    <script src="{$conf->app_url}assets/js/jquery.min.js"></script>
    <script src="{$conf->app_url}assets/js/browser.min.js"></script>
    <script src="{$conf->app_url}assets/js/breakpoints.min.js"></script>
    <script src="{$conf->app_url}assets/js/util.js"></script>
    <script src="{$conf->app_url}assets/js/main.js"></script>
  </body>
</html>
