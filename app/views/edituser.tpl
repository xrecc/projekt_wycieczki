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


      <section style="padding-left: 200px; padding-right: 200px">
            <h2>Zmiana danych</h2>
            <form method="post" action="{url action='resultUpdate'}">
              <div class="fields">
              <input type="hidden" name="id" 
                value="{$form->id}"
                >
                <div class="field half">
                  <input type="text" name="name" id="name" placeholder="Imie" 
                  value = "{$form->name}"
                  />
                </div>
                <div class="field half">
                  <input
                    type="text"
                    name="surname"
                    id="surname"
                    placeholder="Nazwisko"
                    value = "{$form->surname}"
                  />
                </div>
                <div class="field half">
                  <input
                    type="password"
                    name="pass"
                    id="pass"
                    placeholder="Hasło"
                    value = "{$form->pass}"
                  ></input>
                </div>
              </div>
              <ul class="actions">
                <li><input type="submit" value="Zmień" class="primary" /></li>
              </ul>
            </form>
            {foreach $msgs->getMessages() as $msg}
            <div class="alert {if $msg->isInfo()}alert-success{/if}
                              {if $msg->isWarning()}alert-warning{/if}
                              {if $msg->isError()}alert-danger{/if}" role="alert">
               {$msg->text}
            </div>
           {/foreach}
          </section>
      {/block}
