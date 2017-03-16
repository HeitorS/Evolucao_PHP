<?php

function __autoload($class_name) {
    require_once './controller/' . $class_name . '.php';
}
?>
<?php include ('open_default.php'); ?>

<?php
$produto = new Produtos();

if (isset($_POST['cadastrar'])):
    $nome = $_POST['nome'];
    $largura = floatval(str_replace(',', '.', $_POST['largura']));
    $altura = floatval(str_replace(',', '.', $_POST['altura']));
    $profundidade = floatval(str_replace(',', '.', $_POST['profundidade']));
    $descricao = $_POST['descricao'];
    $cor = $_POST['cor'];
    var_dump($cor);
    $produto->setNome($nome);
    $produto->setLargura($largura);
    $produto->setAltura($altura);
    $produto->setProfundidade($profundidade);
    $produto->setDescricao($descricao);
    $produto->setCor($cor);

    if ($produto->insert()) {
        echo "<div class='alert alert-success' role='alert'>Produto inserido com sucesso</div>";
    }

endif;
?>

<?php
if (isset($_POST['salvar'])):
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $largura = floatval(str_replace(',', '.', $_POST['largura']));
    $altura = floatval(str_replace(',', '.', $_POST['altura']));
    $profundidade = floatval(str_replace(',', '.', $_POST['profundidade']));
    $descricao = $_POST['descricao'];
    $cor = $_POST['cor'];

    $produto->setNome($nome);
    $produto->setLargura($largura);
    $produto->setAltura($altura);
    $produto->setProfundidade($profundidade);
    $produto->setDescricao($descricao);
    $produto->setCor($cor);

    if ($produto->update($id)) {
        echo "<div class='alert alert-success' role='alert'>Produto alterado com sucesso</div>";
    }
endif;
?>
<?php
if (isset($_GET['acao']) && $_GET['acao'] == 'deletar'):
    $id = $_GET['id'];
    if ($produto->delete($id)) {
        echo "<div class='alert alert-success' role='alert'>Produto deletado com sucesso</div>";
    }
endif;
?>
<?php
if (isset($_GET['acao']) && $_GET['acao'] == 'editar') {
    $id = (int) $_GET['id'];
    $resultado = $produto->find($id);
    ?>
    <form method="post" action="">
        <div style="">
            <div class="col-lg-0 col-md-0 col-xs-0 col-sm-0">
                <div class="input-group">
                    <?php echo "<input value='" . $resultado->id . "' name='id' type='hidden' class='form-control disabled' aria-describedby='basic-addon1'>"; ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4" style="margin: 5px 0px;">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-gift"></span></span>
                    <?php echo "<input value='" . $resultado->nome . "' name='nome' type='text' class='form-control' placeholder='Nome' aria-describedby='basic-addon1'>"; ?>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2" style="margin: 5px 0px;">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-resize-vertical"></span></span>
                    <?php echo "<input value='" . $resultado->altura . "' name='altura' type='number' step='0.1' class='form-control' placeholder='0,0' aria-describedby='basic-addon1'>"; ?>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2" style="margin: 5px 0px;">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-resize-horizontal"></span></span>
                    <?php echo "<input value='" . $resultado->largura . "' name='largura' type='number' step='0.1' class='form-control' placeholder='0,0' aria-describedby='basic-addon1'>"; ?>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2" style="margin: 5px 0px;">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-move"></span></span>
                    <?php echo "<input value='" . $resultado->profundidade . "' name='profundidade' type='number' step='0.1' class='form-control' placeholder='Profundidade' aria-describedby='basic-addon1'>"; ?>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2" style="margin: 5px 0px;">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-tint"></span></span>
                    <?php echo "<input value='" . $resultado->cor . "' name='cor' type='color' class='form-control'>"; ?>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="margin: 5px 0px;">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-edit"></span></span>
                    <?php echo "<textarea name='descricao' type='text' class='form-control' placeholder='Descrição do Produto' aria-describedby='basic-addon1'>" . $resultado->descricao . "</textarea>"; ?>
                </div>
            </div>
            <br/>
            <br/>
            <div class="col-lg-1" style="margin: 5px 0px;">
                <button type="submit" name="salvar" class="btn btn-sm btn-primary btn-create">Salvar Dados</button>
            </div>
        </div>
    </form>
<?php } else { ?>
    <form method="post" action="">
        <div style="">
            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4" style="margin: 5px 0px;">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-gift"></span></span>
                    <input name="nome" type="text" class="form-control" placeholder="Nome" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2" style="margin: 5px 0px;">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-resize-vertical"></span></span>
                    <input name="altura" type="number" step="0.1" class="form-control" placeholder="0,0" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2" style="margin: 5px 0px;">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-resize-horizontal"></span></span>
                    <input name="largura" type="number" step="0.1" class="form-control" placeholder="0,0" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2" style="margin: 5px 0px;">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-move"></span></span>
                    <input name="profundidade" type="number" step="0.1" class="form-control" placeholder="Profundidade" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2" style="margin: 5px 0px;">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-tint"></span></span>
                    <input name="cor" type="color" class="form-control">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="margin: 5px 0px;">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-edit"></span></span>
                    <textarea name="descricao" type="text" class="form-control" placeholder="Descrição do Produto" aria-describedby="basic-addon1"></textarea>
                </div>
            </div>
            <br/>
            <br/>
            <div class="col-lg-1" style="margin: 5px 0px;">
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
                        <th class="text-center">Largura</th>
                        <th class="text-center">Altura</th>
                        <th class="text-center">Profundidade</th>
                        <th class="text-center">Descrição</th>
                        <th class="text-center">Cor</th>
                        <th class="text-center"><em class="glyphicon glyphicon-cog"></em></th>
                    </tr> 
                </thead>
                <?php foreach ($produto->findAll() as $key => $value): ?>
                    <tbody>
                    <td><?php echo "$value->id"; ?></td>
                    <td><?php echo "$value->nome"; ?></td>
                    <td><?php echo "$value->largura"; ?></td>
                    <td><?php echo "$value->altura"; ?></td>
                    <td><?php echo "$value->profundidade"; ?></td>
                    <td><?php echo "$value->descricao"; ?></td>
                    <td align="center"><?php echo "<div style='background-color: $value->cor; height: 20px; width:20px;'"; ?></td>
                    <td align="center">
                        <?php echo "<a href='produtos.php?acao=editar&id=" . $value->id . "' class='btn btn-default'><em class='glyphicon glyphicon-pencil'></em></a>"; ?>
                        <?php echo "<a href='produtos.php?acao=deletar&id=" . $value->id . "' class='btn btn-danger' onclick='return confirm(\"Deseja realmente deletar\")'><em class='glyphicon glyphicon-trash'></em></a>"; ?>
                    </td>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>
        <div class="panel-footer">
            <div class="row">

            </div>
        </div>
    </div>
</div>
<?php include ('close_default.php'); ?>