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
    <link rel="stylesheet" href="{url action= "assets/css/main.css"}" />
    <noscript
      ><link rel="stylesheet" href="{url action= "assets/css/noscript.css"}"
    /></noscript>
    <script type="text/javascript" src="{url action= "assets/js/ajax.js"}"></script>
  </head>
  <body class="is-preload">
{block name =header} Default header {/block}
    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Header -->
      <header id="header">
        <div class="inner">
          <!-- Logo -->
          <a href="{url action='generalShow'}" class="logo">
            <span class="symbol"
              ><img src="{url action= "images/palmalogo.png"}" alt="" /></span
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
{block name = content} Default content {/block}
{block name = footer} Default footer {/block}
    <!-- Footer -->
    <footer id="footer">
    <div class="inner">
      <section>
        <h2>Follow</h2>
        <ul class="icons">
          
          <li>
            <a onclick="window.open('https://github.com/xrecc');return false;" href="#" class="icon brands style2 fa-github"
              ><span class="label">GitHub</span></a
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
<script src="{url action ="assets/js/jquery.min.js"}"></script>
<script src="{url action ="assets/js/browser.min.js"}"></script>
<script src="{url action ="assets/js/breakpoints.min.js"}"></script>
<script src="{url action ="assets/js/util.js"}"></script>
<script src="{url action ="assets/js/main.js"}"></script>
</body>
</html>