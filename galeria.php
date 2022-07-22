<?php include "cabecalho.php" ?>


<?php

$filme1 = [
  "titulo"=>"Vingadores: Ultimato",
  "nota" => 8.6,
  "sinopse" => "Após os eventos devastadores de Vingadores Ultimato , o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.",
  "poster" => "https://www.themoviedb.org/t/p/original/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"


];
$filme2 = [
  "titulo"=>"Ad Astra - Rumo às Estrelas",
  "nota" => 8.6,
  "sinopse" => "Roy McBride é um engenheiro espacial, portador de um leve grau de autismo, que decide empreender a maior jornada de sua vida: viajar para o espaço, cruzar a galáxia e tentar descobrir o que aconteceu com seu pai, um astronauta que se perdeu há vinte anos atrás no caminho para Netuno.",
  "poster" => "https://www.themoviedb.org/t/p/original/wigZBAmNrIhxp2FNGOROUAeHvdh.jpg"


];
$filme3 = [
  "titulo"=>"Thor: Amor e Trovão",
  "nota" => 8.6,
  "sinopse" => "Thor parte em uma jornada diferente de tudo que já enfrentou – uma busca pela paz interior. Mas sua aposentadoria é interrompida por um assassino galáctico conhecido como Gorr, o Carniceiro de Deus, que busca a extinção dos deuses. Para combater a ameaça, Thor pede a ajuda do Rei Valquíria, Korg e da ex-namorada Jane Foster, que – para surpresa de Thor – inexplicavelmente empunha seu martelo mágico, Mjolnir, como o Poderoso Thor. Juntos, eles embarcam em uma angustiante aventura cósmica para descobrir o mistério da vingança do God Butcher e detê-lo antes que seja tarde demais.",
  "poster" => "https://www.themoviedb.org/t/p/original/6OEBp0Gqv6DsOgi8diPUslT2kbA.jpg"


];
$filme4 = [
  "titulo"=>"Lightyear",
  "nota" => 8.6,
  "sinopse" => "A aventura de ação e ficção científica apresenta a história de origem definitiva de Buzz Lightyear - o herói que inspirou o brinquedo - apresentando o lendário Space Ranger que conquistaria gerações de fãs.",
  "poster" => "https://www.themoviedb.org/t/p/original/egrrHqIIWRTDK0rwqU4AO0OT9i4.jpg"


];

$filmes = [$filme1,$filme2,$filme3,$filme4];

?>
<body>

  <nav class="nav-extended grey darken-3">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li class="active"><a href="galeria.php">Galeria</a></li>
        <li ><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
      <h1>GLOBAL FILMES</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent red accent-4">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab "><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>
 


  <div class="row">
<?php  foreach($filmes as $filme) : ?>
    <div class="col s3">
      <div class="card hoverable">
        <div class="card-image">
          <img src="<?=$filme ["poster"] ?>"> 
          <a class="btn-floating halfway-fab waves-effect waves-light red">
            <i class="material-icons">favorite_border</i>
          </a>
        </div>
        <div class="card-content">
          <p class="valign-wrapper">
            <i class="material-icons amber-text">star</i><?= $filme ["nota"] ?>
          </p>
          <span class="card-title"><?= $filme["titulo"] ?></span>
          <p><?= $filme["sinopse"] ?></p>
        </div>
      </div>
    </div>
<?php endforeach ?>

  
</body>

</html>