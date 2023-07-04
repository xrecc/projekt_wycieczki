{extends file="main.tpl"}

{block name = header}{/block}
{block name = footer}{/block}
{block name = content}

      <!-- Menu -->
      <nav id="menu">
        <h2>Menu</h2>
        <ul>      
          <li><a href="{url action='generalShow'}">Strona główna</a></li>
          {if \core\RoleUtils::inRole("admin") || \core\RoleUtils::inRole("user")}
          <li>
            <a href="{url action='resultList'}"
              >Szybki dostęp do listy użytkowników</a
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
            <h1>
              {foreach $username as $u} {strip}
               Witaj, {$u["imie"]}!
               {/strip} {/foreach}
            </h1>
            <h2>
              Jesteśmy jednym z najlepszych biur podróży. Zorganizujemy wakacje
              których nie zapomnisz &#9969;.
            </h2>
            <p>
              Wybierz którąś z naszych polecanych wycieczek lub skorzystaj z
              <a href="{url action='searchShow'}"
                ><strong>wyszukiwarki</strong></a
              >.
            </p>
          </header>
          <section class="tiles">
            <article class="style1" id="kafelek" onclick="przekazParametr(1)">
              <span class="image">
                <img src="{url action="images/hotelREBU.jpg"}" alt="Obraz Pexels z Pixabay" />
              </span>

              <a href="#">
                <h2>ReBu Hotel</h2>
                <div class="content">
                  <p>
                    Sed nisl arcu euismod sit amet nisi lorem etiam dolor
                    veroeros et feugiat.
                  </p>
                </div>
              </a>
            </article>
            <article class="style2" id="kafelek" onclick="przekazParametr(2)">
              <span class="image">
                <img
                  src="{url action="images/hotelTelph.jpg"}"
                  alt="Obraz Ingo Jakubke z Pixabay"
                />
              </span>
              <a href="#">
                <h2>Telph</h2>
                <div class="content">
                  <p>
                    Sed nisl arcu euismod sit amet nisi lorem etiam dolor
                    veroeros et feugiat.
                  </p>
                </div>
              </a>
            </article>
            <article class="style3" id="kafelek" onclick="przekazParametr(3)">
              <span class="image">
                <img
                  src="{url action="images/hotelZib.jpg"}"
                  alt="Obraz Carlos / Saigon - Vietnam z Pixabay"
                />
              </span>
              <a href="#">
                <h2>Zib Hotel</h2>
                <div class="content">
                  <p>
                    Sed nisl arcu euismod sit amet nisi lorem etiam dolor
                    veroeros et feugiat.
                  </p>
                </div>
              </a>
            </article>
            <article class="style4" id="kafelek" onclick="przekazParametr(4)">
              <span class="image">
                <img
                  src="{url action="images/hotelNature.jpg"}"
                  alt="Obraz werner moser z Pixabay"
                />
              </span>
              <a href="#">
                <h2>Nature</h2>
                <div class="content">
                  <p>
                    Sed nisl arcu euismod sit amet nisi lorem etiam dolor
                    veroeros et feugiat.
                  </p>
                </div>
              </a>
            </article>
            <article class="style5" id="kafelek" onclick="przekazParametr(5)">
              <span class="image">
                <img
                  src="{url action="images/hotelGlassPalace.jpg"}"
                  alt="Obraz wal_172619 z Pixabay"
                />
              </span>
              <a href="#">
                <h2>Glass Palace</h2>
                <div class="content">
                  <p>
                    Sed nisl arcu euismod sit amet nisi lorem etiam dolor
                    veroeros et feugiat.
                  </p>
                </div>
              </a>
            </article>
            <article class="style6" id="kafelek" onclick="przekazParametr(6)">
              <span class="image">
                <img
                  src="{url action="images/hotelBeyond.jpg"}"
                  alt="Obraz Steve Buissinne z Pixabay"
                />
              </span>
              <a href="#">
                <h2>Beyond</h2>
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

  

    <!-- Scripts -->
    <script> function przekazParametr(parametr){
      window.location.href='elementsShow?id=' +parametr;
    } 
    </script>
    {/block}
