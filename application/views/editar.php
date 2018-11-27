  <!-- Begin page content -->
  <div class="container">
      <form action="<?=base_url()?>Principal/atualizar" method="usuario">
          <input type="hidden" name="nome" value="<?=$usuario->nome?>"/>
          <button type="submit">Atualizar</button>
      </form>

  </div>
