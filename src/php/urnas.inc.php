<?php
$topicos = [
  ['tipo'=> false, 'title'=> 'A urna eletrônica é projetada por empresas privadas', 'description'=> 'O projeto da urna eletrônica brasileira é do Tribunal Superior Eleitoral. A urna começou a ser desenvolvida em 1995 por especialistas de entidades como o ITA, INPE, Ministério das Comunicações, Forças Armadas e servidores do TSE. Atualmente, empresas privadas que vencem a licitação fornecem apenas os equipamentos, mas o sistema é controlado exclusivamente pelo TSE.'],
  ['tipo'=> false, 'title'=> 'A urna eletrônica não é segura', 'description'=> 'A Justiça Eleitoral utiliza o que há de mais moderno em termos de segurança da informação. A urna tem mais de 30 barreiras digitais a serem vencidas para se conseguir efetuar qualquer alteração. Esses mecanismos são postos à prova durante os Testes Públicos de Segurança (TPS). Durante as cinco edições do teste, os sistemas sempre se mostraram seguros e foram aprimorados com ajuda da comunidade técnica.'],
  ['tipo'=> false, 'title'=> 'A urna eletrônica é vulnerável a ataques externos pela internet', 'description'=> 'A urna eletrônica brasileira foi projetada para funcionar sem estar conectada a qualquer dispositivo de rede, seja por cabo, <em>wi-fi</em> ou <em>bluetooth</em>. Ou seja, a urna é um equipamento isolado, o que preserva um dos requisitos básicos de segurança do sistema.'],
  ['tipo'=> false, 'title'=> 'A urna eletrônica é vulnerável a ataques internos', 'description'=> 'Somente um grupo restrito de servidores e de colaboradores do TSE tem acesso ao repositório de código-fonte e está autorizado a fazer modificações no software. Por isso, o software utilizado nas eleições é o mesmo em todo o Brasil e está sob controle estrito do TSE. Além disso, a equipe responsável pelo <em>software</em> da urna não é a mesma que cuida do sistema de totalização (resultados).'],
  ['tipo'=> false, 'title'=> 'Softwares maliciosos podem ser inseridos na urna eletrônica', 'description'=> 'Há um computador inserido na placa-mãe da urna eletrônica que contém processador e memória. Esse componente é protegido fisicamente, por meio de resina, contra qualquer ataque físico. Nele, são inseridos os certificados digitais, as chaves oficiais do TSE, que fazem a verificação, camada por camada, de todos os softwares que são carregados na urna. Isso impede que um <em>software</em> adulterado seja carregado na urna.'],
  ['tipo'=> false, 'title'=> 'O código-fonte do software de votação não é aberto à comunidade', 'description'=> 'Atualmente, é permitido aos representantes técnicos dos partidos políticos, ao Ministério Público, à Ordem dos Advogados do Brasil (OAB), à Polícia Federal, entre outras entidades, o acesso ao código-fonte do software de votação e de todo o conjunto de software da urna eletrônica. Portanto, existe transparência sobre o código-fonte.'],
  ['tipo'=> false, 'title'=> 'Já foram comprovadas fraudes na urna eletrônica', 'description'=> 'Desde a implantação gradual, a partir das Eleições Municipais de 1996, a urna eletrônica já passou por uma série de procedimentos de auditoria de dados e de checagem de seu <em>hardware</em> e softwares sem que uma única fraude tenha sido verificada nestes 24 anos de existência. Tanto o Ministério Público quanto a Polícia Federal já realizaram auditorias independentes na urna eletrônica e nenhuma fraude ficou comprovada.'],
  ['tipo'=> false, 'title'=> 'A urna eletrônica não é auditável', 'description'=> 'Há na urna eletrônica diversos recursos que possibilitam e fortalecem a possibilidade de auditoria. São eles: Registro Digital do Voto, <em>Log</em> da Urna Eletrônica, auditorias pré e pós-eleição, auditoria dos códigos-fonte, lacração dos sistemas, tabela de correspondência, lacre físico, auditoria da votação (votação paralela), e oficialização dos sistemas. Além disso, os sistemas podem ser requisitados para análise e verificação a qualquer tempo.'],
  ['tipo'=> false, 'title'=> 'A urna eletrônica não permite a recontagem de votos', 'description'=> 'O Registro Digital do Voto consiste numa tabela digital, na qual são armazenados todos os votos, à medida que são digitados no teclado da urna. Esses dados são gravados de maneira aleatória para que não venham a revelar a ordem dos votantes. Isso evita a possibilidade de se vincular o eleitor na fila ao seu respectivo voto. Essa tabela é disponibilizada para os partidos políticos ou qualquer entidade que a requerer.'],
  ['tipo'=> false, 'title'=> 'Só o Brasil utiliza urna eletrônica', 'description'=> 'Segundo o site do IDEA <em>(Institute for Democracy anda Electoral Assistance)</em>, pelo menos 25 países do mundo utilizam urnas eletrônicas, inclusive os Estados Unidos da América. Dos seus 50 estados, pelos menos 11 utilizam urnas eletrônicas da mesma forma que o Brasil, sem impressão do voto.'],
];
?>
<!-- Start Urnas -->
<section id="urnas" class="section-nav">
  <h1 class="section-title">Urna eletrônica</h1>
  <p class="section-description">Na centralidade da desinformação propagada em anos eleitorais, estão as notícias falsas sobre a urna eletrônica.<br /> Saiba mais sobre as 10 fake news que circulam em sites suspeitos e grupos de mensagem e confira todos os esclarecimentos relacionados a elas:</p>
  <div class="accordion" id="accordionUrnas">
    <?php foreach ($topicos as $key => $topico) : ?>
    <div class="urna">
      <div class="urna-header" id="heading-<?= $key; ?>">
        <h2 class="urna-title">
          <button class="btn btn-link btn-block <?php $key === 0 ? print '': print 'collapsed'; ?>" type="button" data-toggle="collapse" data-target="#collapse-<?= $key; ?>" aria-expanded="<?php $key === 0 ? print 'true': print 'false'; ?>" aria-controls="collapse-<?= $key; ?>">
            <?= $topico['title'] ?>
          </button>
        </h2>
      </div>
      <div id="collapse-<?= $key; ?>" class="collapse <?php $key === 0 ? print 'show': print ''; ?>" aria-labelledby="heading-<?= $key; ?>" data-parent="#accordionUrnas">
        <div class="urna-body">
        <p><?php $topico['tipo'] ? print '<span class="badge badge-verde-claro">Verdadeiro</span>': print '<span class="badge badge-vermelho">Falso</span>' ?>
        <?= $topico['description'] ?></p>
        </div>
      </div>
    </div>
    <?php endforeach ?>
  </div>
</section>
<!-- End Urnas -->
