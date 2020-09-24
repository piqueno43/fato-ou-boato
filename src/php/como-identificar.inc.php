<?php
$lists = [
  ['text'=> 'Fique atento à fonte da notícia'],
  ['text'=> 'Leia o texto da matéria, não apenas o título'],
  ['text'=> 'Preste atenção no endereço eletrônico da reportagem'],
  ['text'=> 'Leia outras notícias do mesmo site e avalie a veracidade'],
  ['text'=> 'Procure saber sobre o site que publicou a informação'],
  ['text'=> 'Preocupe-se com o conteúdo de sites sensacionalistas'],
  ['text'=> 'Leia com atenção e fique atento aos erros de ortografia'],
  ['text'=> 'Confirme a notícia em outros sites'],
  ['text'=> 'Cheque a data de publicação da reportagem'],
  ['text'=> 'Confira a autoria do texto '],
]
?>
<!-- Start Como identificar notícias falsas -->
<section id="como-identificar" class="section-nav">
  <h1 class="section-title">Como identificar notícias falsas</h1>
  <p class="section-description">Saiba como reconhecer conteúdos enganosos</p>
  <div class="list">
    <div class="list-column">
      <ul class="list-group">
        <?php
          $countItem = 1;
          foreach ($lists as $item) :
        ?>
          <li class="list-group-item"><img src="imagens/exclamation.svg" alt="Exclamation icon"><span><?= $item['text']; ?></span></li>
        <?php
          $countItem++ % 5 === 0 &&
          count($lists) >  $countItem &&
          print '</ul></div><div class="list-column"><ul class="list-group">';
          endforeach;
        ?>
      </ul>
    </div>
  </div>
</section>
<!-- End Como identificar notícias falsas -->
