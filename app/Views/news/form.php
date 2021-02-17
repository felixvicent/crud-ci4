<h2><?php echo isset($id) ? "Editando notícia" : "Nova notícia" ?></h2>

<?php echo \Config\Services::validation()->listErrors(); ?>

<form action="/news/store" method="post">
  <div class="form-group">
    <label for="title">Título</label>
    <input type="text" name="title" id="title" class="form-control" value="<?php echo isset($title) ? $title : set_value('title') ?>" >
  </div>

  <div class="form-group">
    <label for="body">Notícia</label>
    <textarea name="body" id="body" class="form-control" cols="30" rows="10"><?php echo isset($body) ? $body : set_value('body') ?></textarea>
  </div>

  <input type="hidden" name="id" value="<?php echo isset($id) ? $id : set_value('id') ?>">

  <div class="form-group mt-5">
    <input type="submit" value="Salvar" class="btn btn-primary" >
  </div>
</form>