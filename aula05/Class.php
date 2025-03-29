<?php

class Owner {
    private $name;
    private $age;
    private $gender;

    public function __construct($name = "unnamed", $age = "18", $gender = 'M') {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Gender: " . $this->gender . "<br>";
    }
}

class BankAccount {
    public $accountNumber;
    protected $accountType;
    private $accountOwner;
    private $balance;
    private $status;

    public function __construct($accountNumber, $accountType, Owner $owner, $balance = 0, $status = false) {
        $this->accountNumber = $accountNumber;
        $this->accountType = $accountType;
        $this->accountOwner = $owner;
        $this->balance = $balance;
        $this->status = $status;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function setAccountNumber($accountNumber) {
        $this->accountNumber = $accountNumber;
    }

    public function getAccountType() {
        return $this->accountType;
    }

    public function setAccountType($accountType) {
        $this->accountType = $accountType;
    }

    public function getOwner() {
        return $this->accountOwner;
    }

    public function setOwner(Owner $owner) {
        $this->accountOwner = $owner;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function setBalance($balance) {
        $this->balance = $balance;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function openAccount($owner, $number, $type = "CC") {
        $this->accountOwner = $owner;
        $this->accountNumber = $number;
        $this->accountType = $type;
        $this->status = true;
        $this->balance = ($this->accountType === "CC") ? 50 : 150;
    }

    public function depositar($valor) {
        if ($this->status) {
            $this->balance += $valor;
            echo "Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso!<br>";
        } else {
            echo "Não é possível depositar em uma conta inativa!<br>";
        }
    }

    public function sacar($valor) {
        if (!$this->status) {
            echo "Não é possível sacar de uma conta inativa!<br>";
            return;
        }
        if ($valor > $this->balance) {
            echo "Saldo insuficiente para saque!<br>";
        } else {
            $this->balance -= $valor;
            echo "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso!<br>";
        }
    }

    public function closeAccount() {
        if (!$this->status) {
            echo "A conta já está fechada.<br>";
            return;
        }
        if ($this->balance > 0) {
            echo "Não é possível fechar a conta com saldo positivo. Retire os fundos primeiro!<br>";
        } elseif ($this->balance < 0) {
            echo "Não é possível fechar a conta com saldo negativo. Regularize sua dívida primeiro!<br>";
        } else {
            $this->status = false;
            echo "A conta " . $this->getAccountNumber() . " foi fechada com sucesso!<br>";
        }
    }

    public function displayAccountInfo() {
        echo "Account Number: " . $this->accountNumber . "<br>";
        echo "Account Type: " . $this->accountType . "<br>";
        echo "Owner: " . $this->accountOwner->getName() . "<br>";
        echo "Balance: R$ " . number_format($this->balance, 2, ',', '.') . "<br>";
        echo "Status: " . ($this->status ? "<b style='color: green;'>Active</b>" : "<b style='color: red;'>Inactive</b>") . "<br>";
    }
}

?>
