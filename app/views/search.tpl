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
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
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
          <a href="{$conf->action_url}generalShow" class="logo">
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
            <form method="post" action="{$conf->action_url}searchResult">
              <div class="fields">
                <div class="field half">
                  <select name="kraj" id="demo-category">
                    <option value ="">Kraj</option>
                    {foreach $kraj as $k} {strip}
                    <option value = "{$k["kraj"]}">{$k["kraj"]}</option>

                    {/strip} {/foreach}
                  </select>
                </div>
                <div class="field half">
                  <select name="nazwa" id="demo-category">
                    <option value ="">Miasto</option>
                    {foreach $miasto as $m} {strip}
                    <option value = "{$m["nazwa"]}">{$m["nazwa"]}</option>

                    {/strip} {/foreach}
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
    <script type="text/javascript">
      function rangeSlide(value) {
        document.getElementById("rangeValue").innerHTML = value;
      }
    </script>
    <script src="{$conf->app_url}assets/js/jquery.min.js"></script>
    <script src="{$conf->app_url}assets/js/browser.min.js"></script>
    <script src="{$conf->app_url}assets/js/breakpoints.min.js"></script>
    <script src="{$conf->app_url}assets/js/util.js"></script>
    <script src="{$conf->app_url}assets/js/main.js"></script>
  </body>
</html>
