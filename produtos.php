<?php

function __autoload($class_name) {
    require_once './controller/' . $class_name . '.php';
}
?>
<?php include ('open_default.php'); ?>

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
                <tbody>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td align="center">
                    <?php echo "<a class='btn btn-default'><em class='glyphicon glyphicon-pencil'></em></a>"; ?>
                    <?php echo "<a class='btn btn-danger'onclick='return confirm(\"Deseja realmente deletar\")'><em class='glyphicon glyphicon-trash'></em></a>"; ?>
                </td>
                </tbody>
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
<?php include ('close_default.php'); ?>