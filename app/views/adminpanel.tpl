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
            <a href="{url action='reservationUser'}"
              >Twoje rezerwacje</a
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
                <img src="{url action="images/pic01.jpg"}" alt="" />
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
                <img src="{url action="images/pic02.jpg"}" alt="" />
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
                <img src="{url action="images/pic03.jpg"}" alt="" />
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

    {/block}