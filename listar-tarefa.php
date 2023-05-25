<div class="row justify-content-center">
    <div class="col-md-12">
        <br>
        <table class="table table-striped">
        <tr>
        <th>Tarefas</th>
        <th class="col-sm-2" colspan="2">Ações</th>
        </tr>
        <?php 
        $sql="select * from tarefas where id_usuario = $id_admin";
        $resultado = conectar($sql);
        while ($linha = $resultado->fetch_assoc()){
        $nome = $linha["nome"];              
        $id = $linha["id"];
        echo "
        <tr>
        <td>$nome</td>
        <td><a href='admin.php?editar=$id'>🖋</a></td>
        <td><a href='admin.php?apagar=$id' onclick=\"return confirm ('Deseja Apagar?')\" >🗑</a></td>
        </tr>";
        }
        ?>
        </table>
    </div>
</div>
