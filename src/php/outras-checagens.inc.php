<?php
$agencias = [
  'tse'     => ['title'=> 'Tribunal Superior Eleitoral', 'link'=> 'https://www.tse.jus.br', 'img'=> 'tse.png'],
  'lupa'    => ['title'=> 'Lupa', 'link'=> 'https://piaui.folha.uol.com.br/lupa', 'img'=> 'lupa.png'],
  'estadao' => ['title'=> 'Estadão Verifica', 'link'=> 'https://politica.estadao.com.br/blogs/estadao-verifica', 'img'=> 'estadao.png'],
  'efarsas' => ['title'=> 'E-Farsas', 'link'=> 'https://www.e-farsas.com', 'img'=> 'e-farsas.png'],
  'holofote'=> ['title'=> 'Holofote', 'link'=> 'https://www.correiobraziliense.com.br/holofote', 'img'=> 'holofote.png'],
  'afp'     => ['title'=> 'AFP', 'link'=> 'https://www.afp.com/pt', 'img'=> 'logo-afp.svg'],
  'comprova'=> ['title'=> 'Comprova', 'link'=> 'https://projetocomprova.com.br', 'img'=> 'comprova.svg'],
  'uol'     => ['title'=> 'UOL Confere', 'link'=> 'https://noticias.uol.com.br/confere', 'img'=> 'uol.png'],
  'aos'     => ['title'=> 'Aos Fatos', 'link'=> 'https://www.aosfatos.org', 'img'=> 'aos-fatos.png'],
  'fatofake'=> ['title'=> 'Fato ou Fake', 'link'=> 'https://g1.globo.com/fato-ou-fake', 'img'=> 'fato-fake.png'],
];

$outrasChecagens = [
  [
    "title"       => "Em aula para jornalistas, Barroso pede ajuda da imprensa para combater a desinformação nas eleições",
    'description' => 'Para o presidente do TSE, o trabalho da imprensa profissional e de qualidade nunca foi tão importante para o país e o mundo',
    'video'       => null ,
    'img'         => 'http://www.tse.jus.br/imagens/fotos/ministro-luis-roberto-barroso-em-curso-do-tse-para-jornalistas-em-18-09-2020/@@images/d854a02d-e699-4487-8746-cae52521ab98.jpeg',
    'data'        => '25/08/2020',
    "label"       => [$agencias['lupa'], $agencias['estadao'], $agencias['efarsas'], $agencias['holofote'], $agencias['afp'], $agencias['comprova'], $agencias['uol'], $agencias['aos'], $agencias['fatofake'], $agencias['tse']]
  ],
  [
    "title"       => "Se for fake news, não transmita",
    'description' => 'A campanha “Se for fake news, não transmita” será veiculada no rádio, na televisão, na internet e em todas as redes sociais do TSE. As peças podem ser acessadas no link ',
    'video'       => 'JMPKf5hQQK8',
    'img'         => null,
    'data'        => '02/08/2020',
    "label"       =>[$agencias['aos'], $agencias['tse'], $agencias['estadao']],
  ],
  [
    "title"       => "Combate à Desinformação",
    'description' => 'A campanha “Se for fake news, não transmita” será veiculada no rádio, na televisão, na internet e em todas as redes sociais do TSE. As peças podem ser acessadas no link',
    'video'       => 'K_FNhNIM9JY',
    'img'         => null,
    'data'        => '02/08/2020',
    "label"       => [$agencias['comprova'], $agencias['uol']]
  ],
  [
    "title"=> "#VotoSemFake: É falso que a 'bioterrorista' sabotaram sinalização rodoviária com mensagem contra o 'lockdown'",
    'description'=> 'Vídeo retrata uma prática de manejo integrado do fogo, método previsto em lei que previne incêndios florestais maiores...',
    'video'=> null,
    'img'=> null,
    'data'=> '21/08/2020',
    "label"=> [$agencias['fatofake'], $agencias['efarsas']]
  ],
  [
    "title"=> "#VotoSemFake: É falso que a 'bioterrorista' sabotaram sinalização rodoviária com mensagem contra o 'lockdown'",
    'description'=> 'Vídeo retrata uma prática de manejo integrado do fogo, método previsto em lei que previne incêndios florestais maiores...',
    'video'=> null,
    'img'=> null,
    'data'=> '21/08/2020',
    "label"=> [$agencias['fatofake'], $agencias['efarsas']]
  ],
  [
    "title"=> "#VotoSemFake: É falso que a 'bioterrorista' sabotaram sinalização rodoviária com mensagem contra o 'lockdown'",
    'description'=> 'Vídeo retrata uma prática de manejo integrado do fogo, método previsto em lei que previne incêndios florestais maiores...',
    'video'=> null,
    'img'=> 'https://placeimg.com/402/211/any',
    'data'=> '21/08/2020',
    "label"=> [$agencias['fatofake'], $agencias['efarsas']]
  ],
  ];
?>
<!-- Start outras Checagens -->
<section id="outras-checagens" class="section-nav">
  <h1 class="section-title">Outras checagens</h1>
  <div class="check-columns">
    <?php foreach ($outrasChecagens as $key => $checagen) : ?>
    <div class="check <?php $checagen['img'] !== null ? print 'has-img': print '';?> <?php $checagen['video'] !== null ? print 'has-img has-video': print '';?>">
    <?php if ($checagen['img'] !== null): ?>
      <img src="<?= $checagen['img']; ?>" class="check-img-top" alt="..." />
    <?php endif; ?>
    <?php if ($checagen['video']): ?>
      <div class="check-video">
        <a data-fancybox href="https://www.youtube.com/watch?v=<?= $checagen['video']; ?>" data-caption="<?= $checagen['title'];?><br /><?= $checagen['description'];?>">
          <img src="imagens/play.svg" alt="Play">
        </a>
      </div>
      <img src="https://img.youtube.com/vi/<?= $checagen['video']; ?>/mqdefault.jpg" class="check-img-top" alt="..." />
    <?php endif; ?>
      <div class="check-body">
        <h5 class="check-title"><?= $checagen['title']; ?></h5>
        <time class="check-time"><?= $checagen['data']; ?></time>
        <p class="check-text"><?= $checagen['description']; ?></p>
      </div>
      <div class="check-labels">
      <?php
        $count = 1;
        foreach ($checagen['label'] as  $label) :
        ?>
        <div class="check-label">
          <a target="_blank" href="<?= $label['link'];?>">
            <img src="imagens/logos/<?= $label['img']; ?>" alt="<?= $label['title']; ?>" title="<?= $label['title'];?>" />
          </a>
        </div>
        <?php $count++ % 3 === 0 && count($checagen['label']) >  $count && print '<span class="separator"></span>'; ?>
        <?php endforeach;?>
      </div>
      <div class="check-footer">
        <button class="btn btn-verde-claro btn-block btn-sm" data-toggle="modal" data-target="#shareModal">compartilhe <img src="imagens/shared.svg" alt="shared" /></button>
      </div>
    </div>
    <?php endforeach;?>
  </div>
</section>
<!-- End outras Checagens -->
