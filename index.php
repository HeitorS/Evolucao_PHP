<?php

function __autoload($class_name) {
    require_once './controller/' . $class_name . '.php';
}
?>
<?php include ('open_default.php'); ?>
<?php
$usuario = new Usuarios();

if (isset($_POST['cadastrar'])):
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $usuario->setNome($nome);
    $usuario->setEmail($email);
    if ($usuario->insert()) {
        echo "<div class='alert alert-success' role='alert'>Usuário inserido com sucesso</div>";
    }

endif;
?>

<?php
if (isset($_GET['acao']) && $_GET['acao'] == 'deletar'):
    $id = $_GET['id'];
    if ($usuario->delete($id)) {
        echo "<div class='alert alert-success' role='alert'>Usuário deletado com sucesso</div>";
    }
endif;
?>

<?php
if (isset($_POST['salvar'])):
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $usuario->setNome($nome);
    $usuario->setEmail($email);
    if ($usuario->update($id)) {
        echo "<div class='alert alert-success' role='alert'>Usuário alterado com sucesso</div>";
    }

endif;
?>

<?php
if (isset($_GET['acao']) && $_GET['acao'] == 'editar') {
    $id = (int) $_GET['id'];
    $resultado = $usuario->find($id);
    ?>
    <form method="post" action="">
        <div style="height: 80px;">
            <div class="col-lg-0 col-md-0 col-xs-0 col-sm-0">
                <div class="input-group">
                    <?php echo "<input value='" . $resultado->id . "' name='id' type='hidden' class='form-control disabled' aria-describedby='basic-addon1'>"; ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                    <?php echo "<input value='" . $resultado->nome . "' name='nome' type='text' class='form-control' aria-describedby='basic-addon1'>"; ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                    <?php echo "<input value='" . $resultado->email . "' name='email' type='text' class='form-control' aria-describedby='basic-addon1'>"; ?>
                </div>
            </div>
            <br/>
            <br/>
            <div class="col-lg-1">
                <button type="submit" name="salvar" class="btn btn-sm btn-primary btn-create">Salvar Dados</button>
            </div>
        </div>
    </form>
<?php } else { ?>
    <form method="post" action="">
        <div style="height: 80px;">
            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                    <input name="nome" type="text" class="form-control" placeholder="Nome" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                    <input name="email" type="text" class="form-control" placeholder="exemplo@exemplo.com" aria-describedby="basic-addon1">
                </div>
            </div>
            <br/>
            <br/>
            <div class="col-lg-1">
                <button type="submit" name="cadastrar" class="btn btn-sm btn-primary btn-create">Cadastrar Dados</button>
            </div>
        </div>
    </form>
<?php } ?>
<div class="col-md-12 col-md-offset-0">
    <div class="panel panel-default panel-table">
        <div class="panel-heading">
            <div class="row">
                <div class="col col-xs-6">
                    <h3 class="panel-title">Panel Heading</h3>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-list">
                <thead>
                    <tr>
                        <th class="hidden-xs text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center"><em class="glyphicon glyphicon-cog"></em></th>
                    </tr> 
                </thead>
                <?php
                foreach ($usuario->findAll() as $key => $value):
                    ?>
                    <tbody>
                    <td><?php echo $value->id; ?></td>
                    <td><?php echo $value->nome; ?></td>
                    <td><?php echo $value->email; ?></td>
                    <td align="center">
                        <?php echo "<a class='btn btn-default' href='index.php?acao=editar&id=" . $value->id . "'><em class='glyphicon glyphicon-pencil'></em></a>"; ?>
                        <?php echo "<a class='btn btn-danger' href='index.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar\")'><em class='glyphicon glyphicon-trash'></em></a>"; ?>
                    </td>
                    </tbody>
                <?php endforeach; ?>
            </table>

        </div>
        <div class="panel-footer">
            <div class="row">
                <div class="col col-xs-4">Page 1 of 5
                </div>
                <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('close_default.php');?>