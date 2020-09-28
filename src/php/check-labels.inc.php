<?php
foreach ($checagen['label'] as $key => $label) :
  if($label === 'lupa') :
?>
<div class="check-label">
  <a target="_blank" href="https://piaui.folha.uol.com.br/lupa"><img src="imagens/logos/lupa.png" alt="Agência Lupa" title="Agência Lupa" /></a>
</div>
<?php endif; if($label === 'estadao') : ?>
  <div class="check-label">
    <a target="_blank" href="https://politica.estadao.com.br/blogs/estadao-verifica"><img src="imagens/logos/estadao.png" alt="Estadão Verifica" title="Estadão Verifica" /></a>
  </div>
<?php endif; if($label === 'holofote') : ?>
<div class="check-label">
  <a target="_blank" href="https://www.correiobraziliense.com.br/holofote"><img src="imagens/logos/holofote.png" alt="Holofote" title="Holofote" /></a>
</div>
<?php endif; if($label === 'afp') : ?>
<span class="separator"></span>
<div class="check-label">
  <a target="_blank" href="https://www.afp.com/pt"><img src="imagens/logos/logo-afp.svg" alt="AFP" title="AFP" /></a>
</div>
<?php endif; if($label === 'efarsas') : ?>
<div class="check-label">
  <a target="_blank" href="https://www.e-farsas.com"><img src="imagens/logos/e-farsas.png" alt="E-Farsas" title="E-Farsas" /></a>
</div>
<?php endif; if($label === 'comprova') : ?>
<div class="check-label">
  <a target="_blank" href="https://projetocomprova.com.br"><img src="imagens/logos/comprova.svg" alt="Comprova" title="Comprova" /></a>
</div>
<span class="separator"></span>
<?php endif; if($label === 'uol') : ?>
<div class="check-label">
  <a target="_blank" href="https://noticias.uol.com.br/confere"><img src="https://logodownload.org/wp-content/uploads/2018/09/uol-logo.png" alt="UOL Confere" title="UOL Confere" /></a>
</div>
<?php endif; if($label === 'aos-fatos') : ?>
<div class="check-label">
  <a target="_blank" href="https://www.aosfatos.org"><img src="imagens/logos/aos-fatos.png" alt="Aos Fatos" title="Aos Fatos" /></a>
</div>
<?php endif; if($label === 'fato-ou-fake') : ?>
<div class="check-label">
  <a target="_blank" href="https://g1.globo.com/fato-ou-fake"><img src="imagens/logos/fato-fake.png" alt="Fato ou Fake" title="Fato ou Fake" /></a>
</div>
<?php endif;?>
<?php endforeach; ?>
