<table id="tab_result" class="pure-table pure-table-bordered">
<thead>
                <tr>
                <th>Nazwa</th>
                <th>Ilość gwiazdek</th>
                <th>Data powstania</th>
                <th>Cena za noc</th>
                <th>Basen</th>
                <th>All_inclusive</th>
                <th>Email</th>
                <th>Numer telefonu</th>
                <th>Opcje</th>
                </tr>
</thead>
<tbody>
                {foreach $hotel as $h} {strip}
                <tr>
                <td>{$h["nazwa"]}</td>
                <td>{$h["gwiazdki"]}</td>
                <td>{$h["data_powstania"]}</td>
                <td>{$h["cena_za_noc"]}</td>
                <td>{$h["basen"]}</td>
                <td>{$h["all_inclusive"]}</td>
                <td>{$h["email"]}</td>
                <td>{$h["numer_telefonu"]}</td>
                <td><a href="{rel_url action ="hotelEdit" id=$h['idhotel']}">Edytuj /</a>
                <a href="{rel_url action ="hotelDelete" id=$h['idhotel']}"> Usuń</a></td>
                </tr>
                {/strip} {/foreach}
</tbody>
</table>