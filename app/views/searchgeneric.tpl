<section class="tiles">
<thead>
</thead>
<tbody>
          {foreach $results as $r} {strip}

          <article id="wynik" onclick="przekazParametr({$r['idhotel']})">
          <span class="image"
            ><img src="{url action="images/hotel{$r['zdjecie']}.jpg"}" alt="" /></span
          >
            <strong>{$r["hotname"]}</strong> <br>
            Hotel znajduje się w {$r["nazwa"]}, {$r["kraj"]}.<br />
            Cena za noc wynosi {$r["cena_za_noc"]} złotych.<br />
            Może pochwlić się {$r["gwiazdki"]} gwiazdkami.
            
          </article>
         
          {/strip} {/foreach}
          
        </div>
      </div>
</tbody>
      </section>
