<?php  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    <link real="stylesheet"
    href="./css/style.css" media="screen"
    title="no title" charset="utf-8">
  </head>
  <body>
    <div class="container">
       <div class="panel panel-default">
  </div>
    <h1>Lista Tarefas: Lucas</h1>
    <div class="formulario">
      <form class="formTarefa form-horizontal" action="saveTarefa.php" method="post">

      <div  class="form-group">
        <label for="tarefa" class="col-sm-3 control-label">Tarefa</label>
        <div class="col-sm-6"
          <input type="text" id="tarefa" nome="tarefa">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3.col-sm-6">
           <input type="submit" value="Enviar"
         </div>
        </div

       </form>
      </div>
    </div
  </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          tarefas recentes
        </div>
        <div class="panel-body">
          <table class="table table-striped">
            <thead>
              Tarefas
            </thead>
            <tbody>
            <?php
              $query = mysql_query("SELECT * FROM tarefas") or die(mysql_error());
              while ($row = mysql_fetch_array($query, MYSQL_NUM)) {
             ?>
               <tr>
                 <td><?= $row[1] ?></td>
                 <td><a href="editar.php?id=<?= $row[0] ?>" class="btn btn-sucess">Editar</a></td>
                 <td><a href="excluir.php?id=<?= $row[0] ?>" class="btn btn-danger">Remover</a></td>
                </tr>
              <?php  ?>
              </tbody>
            </table>
          </div
        </div>
    </body>
  </html>
