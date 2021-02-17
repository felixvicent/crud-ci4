<script>
  function confirma(){
    if(!confirm("Deseja excluir?")){
      return false;
    }

    return true;
  } 
</script>

<h2>Arquivo de notícias</h2>

<div class="my-5">
  <a href="/news/create" class="btn btn-primary" >Nova notícia</a>
</div>

<table class="table" >
  <tr>
    <th>Título</th>
    <th>Ação</th>
  </tr>
  <?php if(!empty($news) && is_array($news)): ?>
    <?php foreach($news as $news_item) : ?>
      <tr>
        <td>
          <a href="<?php echo "/news/view/".$news_item["id"] ?>">
            <?php echo $news_item['title'] ?>
          </a>
        </td>
        <td>
          <a href="<?php echo "/news/edit/".$news_item["id"] ?>">Editar</a>
          -
          <a href="<?php echo "/news/delete/".$news_item["id"] ?>" onclick="return confirma()">Excluir</a>
        </td>
      </tr>
    <?php endforeach ?>
  <?php else: ?>
    <tr>
      <td colspan="2">Nenhuma notícia encontrada</td>
    </tr>
  <?php endif ?>
</table>