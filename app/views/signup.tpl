{extends file="main.tpl"}

{block name = header}{/block}
{block name = footer}{/block}
{block name = content}

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
            {foreach $msgs->getMessages() as $msg}
            <div class="alert {if $msg->isInfo()}alert-success{/if}
                              {if $msg->isWarning()}alert-warning{/if}
                              {if $msg->isError()}alert-danger{/if}" role="alert">
               {$msg->text}
            </div>
           {/foreach}
          </section>
{/block}
