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
      <section id="main">
        <div>
        <div class="bottom-margin" style="padding-left: 800px; padding-right:800px">
<form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','{$conf->action_root}searchHotelListPart','table'); return false;">
	<h1>Opcje wyszukiwania</h1>
	<fieldset>
		<input type="text" placeholder="nazwa hotelu" name="name" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	
          <section>
            <div id="table">
            {include file="searchlistahoteli.tpl"}
            </div>
          </section>
        </div>
      </section>

            {/block}