<table id="tab_result" class="pure-table pure-table-bordered">
<thead>
            <tr>
                <th>Nazwa</th>
                <th>Cena za noc</th>
                <th>All_inclusive</th>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Email</th>
                <th>Numer telefonu</th>
                <th>Początek wycieczki</th>
                <th>Koniec wycieczki</th>
                <th>Opcje</th>
            </tr>
</thead>
<tbody>
            {foreach $rezerwacja as $v} {strip}
                <tr>
                <td>{$v["nazwa"]}</td>
                <td>{$v["cena_za_noc"]}</td>
                <td>{$v["all_inclusive"]}</td>
                <td>{$v["imie"]}</td>
                <td>{$v["nazwisko"]}</td>
                <td>{$v["email"]}</td>
                <td>{$v["numer_telefonu"]}</td>
                <td>{$v["data_start"]}</td>
                <td>{$v["data_end"]}</td>
                <td>
                <a href="{rel_url action ="reservationDelete" id=$v['idrezerwacji']}"> Usuń</a></td>
              </tr>
              {/strip} {/foreach}
</tbody>
</table>