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
        {foreach $hotel as $h} {strip}
          <h1>Hotel</h1>

          <p>
          <span class="image left"
            ><img src="{url action="images/hotel{$h["zdjecie"]}.jpg"}" alt="" /></span
          >
          <h3>{$h["nazwa"]}</a></h3>

            <strong>{$h["nazwa"]}</strong> <br>
            Hotel znajduje się w {$h["nazwamiasta"]}, {$h["kraj"]}<br />
            Cena za noc wynosi {$h["cena_za_noc"]} złotych.<br />
            Może pochwlić się {$h["gwiazdki"]} gwiazdkami.
          </p>
          <form method="post" action="{url action='reservationSave'}">
          <div class="fields">
            <div class="field half">
            <span>Data startowa: </span>
              <input type="text" name="startdate" min="" />
            </div>
            <div class="field half">
            <span>Data końcowa: </span>
              <input
                type="text"
                name="enddate"    
              />
            </div>
          </div>           
          <ul class="actions">
            <li><input type="submit" value="Zarezerwuj" class="primary" /></li>
          </ul>
        </form>
      {/strip} {/foreach}
        </div>
      </div>

     {/block}
