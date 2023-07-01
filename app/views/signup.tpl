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
          <li><a href="{url action='loginShow'}">Logowanie</a></li>
          <li><a href="{url action='signupShow'}">Rejestracja</a></li>
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
            <form method="post" action="{url action='signup'}">
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
    <script src="{$conf->app_url}assets/js/jquery.min.js"></script>
    <script src="{$conf->app_url}assets/js/browser.min.js"></script>
    <script src="{$conf->app_url}assets/js/breakpoints.min.js"></script>
    <script src="{$conf->app_url}assets/js/util.js"></script>
    <script src="{$conf->app_url}assets/js/main.js"></script>
  </body>
</html>
