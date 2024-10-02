<?php
// vamos criar um sistema bancário com saque,depósito,
//  extrato e transferência (são métodos)

class conta{
    public $saldo;
    public $numeroconta;
    public $titular;
    public $extrato = [];
    
    public function __construct($titular, $numeroconta, $saldo=0){
        $this->titular = $titular;
        $this->numeroconta = $numeroconta;
        $this->saldo = $saldo;
        $this->extrato=[];
    }
    
    public function saque($valor){
        if($valor<0){
        echo"valor inválido\n";
        } 
        else if ($this->saldo >= $valor){
        $this->saldo = $this->saldo - $valor;
        // $this->saldo -=$valor;
        $saida ="saque realizado com sucesso.\n";
        $saida = $saida. "saida atual: $this->saldo.\n";
        array_push($this->extrato, $saida);
      }
        else{
            echo"saldo insuficiente.\n";
        }

    }


    public function deposito($valor){
        if( $valor >0){

            $this->saldo += $valor;
            $saida ="saque realizado com sucesso.\n";
            $saida = $saida. "saida atual: $this->saldo.\n";
            array_push($this->extrato, $saida);


    
        }
         else{
            echo "valor Inválido\n";
         }

    }
    public function transferencia( $destinatario, $valor){
        if ($valor <= 0) {
            echo "valor inválido\n";
        }
        else if ($this->saldo >= $valor){
            $this->saldo -= $valor;
            $destinatario->saldo += $valor;
            $saida = "transferencia efetuada com sucesso.\n";
            $saida = $saida ."$destinatario->titular recebeu $valor.\n";
            $saida = $saida . "saldo atual: $this->saldo.\n";

            $saida2 ="transferencia recebida com sucesso.\n";
            $saida2 = $saida2 . "$this->titular enviou $valor .\n";
            $saida2 = $saida2 . "saldo atual: $destinatario->saldo.\n";
            array_push($destinatario->extrato,$saida2);
        }
        else{
            echo"saldo insuficiente.\n";
        }
    
    }
    
    
        public function verificarextrato(){
            echo "extratodo(a) $this->titular.\n";
            foreach($this->extrato as $operacao){
                echo $operacao;
            }
            echo str_repeat('-',30) . "\n";


            }
                # code...
            }

    

    $conta1 = new Conta ("Renan", "10000", 500);
    $conta2 = new conta("Maria", "2000", 1000);
    $conta1->saque(50);
    $conta1->deposito(100);
    $conta1->deposito(500);
    $conta1->transferencia($conta2, 200);
    $conta1->verificarextrato();
    $conta2->verificarextrato();
?>
