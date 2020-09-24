<?php
$videos = [
  ['video'=> '1PlnZEt797o','title'=> 'Minuto da Checagem nº 8 <br /> (Divulgar Fake News é crime)', 'description'=> 'Desde 2019 uma lei tipifica o crime de denunciação caluniosa com finalidade eleitoral. A regra pune com dois a oito anos de prisão quem divulgar notícias falsas contra candidatos em eleição.'],
  ['video'=> 'klD_g5umw7Y','title'=> 'Minuto da Checagem nº 3 <br /> (Notícias antigas)', 'description'=> 'Algumas pessoas usam notícias antigas como se fossem novas. Uma Fake News pode até ser uma notícia verdadeira, mas bem antiga. Fique atento para não espalhar informações desatualizadas.'],
  ['video'=> 'Sd0CDrzSUQM','title'=> 'Minuto da Checagem nº 7 <br /> (Quem deu a informação?)', 'description'=> 'É sempre importante saber quem é a fonte da informação antes de sair compartilhando. A maioria das "curas" para o coronavírus divulgadas por aí não passam de notícias falsas. Na dúvida, não compartilhe. #eleições2020 #fakenews #desinformação'],
  ['video'=> 'HGYs-vwvRH8','title'=> 'Minuto da Checagem nº 2 <br /> (Leia até o fim)', 'description'=> 'Neste programa você vai ver os riscos de se compartilhar links e notícias sem ler o texto até fim, se baseando apenas no título da postagem. Quem produz notícias falsas costuma ser muito bom em criar manchetes apelativas e mentirosas.'],
  ['video'=> 'CpErjFz3lkM','title'=> 'Minuto da Checagem nº 5 <br /> (Deepfake)', 'description'=> 'Uma nova forma de desinformação é o deepfake. Essa tecnologia utiliza inteligência artificial para criar vídeos falsos que parecem verdadeiros. É preciso ficar atento. Na dúvida, não compartilhe!'],
  ['video'=> 'WgBMFAFmtnU','title'=> 'Minuto da Checagem nº 1', 'description'=> 'Nesta primeira edição, você vai ver que a desinformação pode vir de qualquer pessoa, até mesmo de alguém muito querido. '],
  ['video'=> '2vq9pbt63C8','title'=> 'Minuto da Checagem nº 4 <br /> (Na dúvida, não compartilhe!)', 'description'=> 'Com as redes sociais e aplicativos de troca de mensagens, qualquer notícia é facilmente disseminada. Por isso, nos dias atuais é ainda mais importante ter atenção nas notícias que são compartilhadas.'],
];
?>
<!-- Start Minuto da checagem -->
<section id="minuto-da-checagem" class="section-nav">
  <h1 class="section-title">Minuto da checagem</h1>
  <p class="section-description">
    Assista a série de vídeos da Justiça Eleitoral que apresenta de maneira simples e didática os passos que qualquer cidadão pode adotar para verificar conteúdos e se tornar um agente de combate à desinformação:
  </p>
  <div class="minute-content">
    <div class="minute-columns">
      <?php foreach ($videos as $key => $video):?>
        <div class="minute">
          <img src="https://img.youtube.com/vi/<?= $video['video']; ?>/mqdefault.jpg" class="minute-img-top" alt="<?= $video['title'];?>">
          <div class="minute-img-overlay">
            <div class="minute-icon">
              <a data-fancybox href="https://www.youtube.com/watch?v=<?= $video['video']; ?>" data-caption="<?= $video['title'];?><br/><?= $video['description'];?>"><img src="imagens/play-larger.svg" alt="Play"></a>
            </div>
          </div>
          <div class="minute-title">
            <?= $video['title'] ?>
          </div>
      </div>
      <?php endforeach; ?>
    </div>
    <a href="https://www.youtube.com/justicaeleitoral" class="minute-link" >Você também pode acessar outros vídeos em nosso canal do youtube</a>
  </div>
</section>
<!-- End Minuto da checagem -->
