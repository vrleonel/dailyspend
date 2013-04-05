<?
  include_once("header.php");
?>
  <div class="main-container">
    <div class="main wrapper clearfix">
      <article>


        <section>
          <h2>Nova conta</h2>
          <form action="save.php" name="frmNewSpend" method="post">
            <p>
              <label>Gasto: </label><input type="text" name="txtGasto" id="txtGasto" value="" />
            </p>
            <p>
              <label>Valor: </label><input type="text" name="txtValor" id="txtValor" value="" />
            </p>
            <p>
              <label>Data: </label><input type="date" name="txtData" id="txtData" value="<?= date("Y")?>-<?= date("m")?>-<?= date("d")?>" />
            </p>
            <p>
              <label>Tipo: </label>

              <select name="sltTipo">
                <? foreach($arrTipo as $key=>$tipo){ ?>
                <option value="<?=$tipo?>"><?= $tipo ?></option>
                <? } ?>
              </select>
            </p>
            <p><label>Forma de Pgamento:</label>
              <select name="sltForma">
                <? foreach($arrForma as $key => $forma){ ?>
                  <option value="<?=$forma?>"><?= $forma ?></option>
                <? } ?>
              </select>
            </p>
            <p>
              <input type="submit" value="Enviar"/>
            </p>
            <p></p>
          </form>
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
