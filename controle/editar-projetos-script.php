<?php
if (!empty($_REQUEST['action'])){
    $dsn = "host=localhost port=5432 dbname=projeto user=postgres password=";
    $conn = pg_connect($dsn);
    if (!$_REQUEST['action'] == 'edit') {
        $id     = (int) $_GET['id'];
        $result = pg_query($conn, "SELECT * FROM pessoa ORDER BY id");
        $pessoa = pg_fetch_assoc($result); 
    }

    else if ($_REQUEST['action'] == 'save') {
        $pessoa = $_POST;
        if (empty($_POST['id'])) {
            $result = pg_query($conn, "SELECT max(id) as next FROM pessoa");
            $next   = (int) pg_fetch_assoc($result)['next'] +1;
            $sql    = "INSERT INTO pessoa (id, nome, endereco, bairro, telefone, email, id_cidade)
                        VALUES ('{$next}', '{$pessoa{'$nome'}}',  '{$pessoa{'$endereco'}}', '{$pessoa{'$bairro'}}', '{$pessoa{'$telefone'}}', '{$pessoa{'$email'}}', '{$pessoa{'$id_cidade'}}'
                        )";
            $result = pg_query($conn, $sql);
        }
        else {
            $sql = "UPDATE pessoa SET nome      = '{pessoa['$nome']}',
                                      endereco  = '{pessoa['$endereco']}',
                                      bairro    = '{pessoa['$bairro']}',
                                      telefone  = '{pessoa['$telefone']}',
                                      email     = '{pessoa['$email']}',
                                      id_cidade = '{pessoa['$id_cidade']}'
                                WHERE id = '{pessoa['$id']}'";
            $result = pg_query($conn, $sql);
        }
        print ($result) ? 'Registrado salvo com sucesso' : preg_last_error($conn);
        pg_close($conn);
    }
}



?>
