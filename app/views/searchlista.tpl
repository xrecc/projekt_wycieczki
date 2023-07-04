<table id="tab_result" class="pure-table pure-table-bordered">
<thead>
              <tr>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Haslo</th>
                <th>Czy Admin</th>
                <th>email</th>
                <th>numer_telefonu</th>
                <th>Opcje</th>
              </tr>
</thead>
<tbody>
              {foreach $users as $r} {strip}
              <tr>
                <td>{$r["imie"]}</td>
                <td>{$r["nazwisko"]}</td>
                <td>{$r["haslo"]}</td>
                <td>{$r["czy_admin"]}</td>
                <td>{$r["email"]}</td>
                <td>{$r["numer_telefonu"]}</td>
                <td><a href="{rel_url action ="resultEdit" id=$r['idusers']}">Edytuj /</a>
                <a href="{rel_url action ="resultDelete" id=$r['idusers']}"> Usuń</a></td>
              </tr>
              {/strip} {/foreach}
              
</div>
</tbody>
</table>