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
          

    <!-- Scripts -->
    <script type="text/javascript">
      function rangeSlide(value) {
        document.getElementById("rangeValue").innerHTML = value;
      }
    </script>

{/block}
