<?php

$msg = filter_input(INPUT_GET,"msg");

if($msg == "cadSuccess"){
echo '<div class="alert alert-success" role="alert">
Salvos con sucesso!
</div>';
}elseif($msg == "cadErr"){
    echo '<div class="alert alert-danger" role="alert">
    Erro ao Salvar!
    </div>';
    }elseif($msg == "delSuccess"){
        echo '<div class="alert alert-success" role="alert">
        Deletado com sucesso!
        </div>';
        }elseif($msg == "delErr"){
            echo '<div class="alert alert-danger" role="alert">
            Erro ao Excluir!
            </div>';
            }elseif($msg == "editSuccess"){
                echo '<div class="alert alert-success" role="alert">
                Editado com sucesso!
                </div>';
                }elseif($msg == "editErr"){
                    echo '<div class="alert alert-danger" role="alert">
                    Erro ao Editar!
                    </div>';
                    }

?>