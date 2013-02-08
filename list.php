<?
  include_once("header.php");
?>
  <div class="main-container">
    <div class="main wrapper clearfix">
      
      <div> <a href=""> Home </a> > lista</div>
      
      <article>
        <section>
          <h2>Lista</h2>
          <?
          $gastos = readCSV(date("m"), date("Y"));
          //pre($gastos)
          ?>
          <table>
            <thead>
              <tr>
                <th>Gasto</th>
                <th>Valor</th>
                <th>Data</th>
                <th>Tipo</th>
                <th>Forma</th>
              </tr>
            </thead>
            
            <tbody>
              <?foreach($gastos as $key1 => $value1){ ?>
                <tr>
                <?foreach($value1 as $key2 => $value2){ ?>
                  <td><?= $value2 ?></td>  
              
                <? } ?>
                </tr>
              
              <? } ?>

              
              </tbody>
          </table>

        </section>

      </article>

<!-- 
      <aside>
        <h3>Sidebar</h3>
        <p></p>
      </aside>
 -->
    </div> <!-- #main -->
  </div> <!-- #main-container -->
<?
  include_once("footer.php");
?>