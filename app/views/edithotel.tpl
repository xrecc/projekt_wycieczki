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


      <section style="padding-left: 200px; padding-right: 200px">
            <h2>Zmiana danych</h2>
            <form method="post" action="{url action='hotelUpdate'}">
              <div class="fields">
              <input type="hidden" name="id" 
                value="{$form->id}"
                >
                <div class="field half">
                  <input type="text" name="nazwa" id="nazwa" placeholder="Nazwa" 
                  value = "{$form->nazwa}"
                  />
                </div>
                <div class="field half">
                  <input
                    type="text"
                    name="gwiazdki"
                    id="gwiazdki"
                    placeholder="Ilość gwiazdek"
                    value = "{$form->gwiazdki}"
                  />
                </div>
                <div class="field half">
                  <input
                    type="text"
                    name="amount"
                    id="amount"
                    placeholder="Cena_za_noc"
                    value = "{$form->amount}"
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
