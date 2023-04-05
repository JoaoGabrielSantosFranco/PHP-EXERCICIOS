<?php
class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function abrirConta(string $t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t === "CC") {
            $this->setSaldo(50);
        } elseif ($t === "CP") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta()
    {
        if ($this->saldo > 0) {
            echo "Tem Dinheiro na conta";
        } elseif ($this->saldo < 0) {
            echo "esta devendo";
        } else {
            $this->setStatus(false);
        }
    }

    public function depositar(int $v)
    {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
        } else {
            echo "Conta Fechada não é possivel depositar";
        }
    }
    public function sacar(int $v)
    {
        if ($this->status === true) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo "saldo Insuficiente";
            }
        } else {
            echo "conta não existe";
        }
    }
    public function pagarMensal()
    {
        $v = 0;

        if ($this->tipo == "CC") {
            $v = 12;
        } elseif ($this->tipo = "CP") {
            $v = 20;
        }
        if ($this->status = true) {
            if ($this->saldo > $v) {
                $this->saldo = $this->saldo - $v;
            }
        }
    }


    public function constructor()
    {
        $this->saldo = 0;
        $this->status = false;
    }

    public function setNumConta(int $n)
    {
        $this->numConta = $n;
    }

    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setTipo(string $t)
    {
        $this->tipo = $t;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setDono(string $d)
    {
        $this->dono = $d;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setSaldo(int $s)
    {
        $this->saldo = $s;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setStatus(bool $s)
    {
        $this->status = $s;
    }
    public function getStatus()
    {
        return $this->status;
    }
}