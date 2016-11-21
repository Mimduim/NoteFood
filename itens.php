<?php
  $tipo = $_GET['tipo'];
?>
<h1><?=$tipo?></h1>

<?php
  for ($i=0; $i<10; $i++){
    ?>
    <div class="col-md-3">
        <img src="img/beba_agua-280x158.jpg" alt="Noticia">
        <h3>Entenda qual a importância da agua para manter uma vida saudável</h3>
        <time>December 21, 2015</time>
    </div>
    <?php
  }
 ?>
