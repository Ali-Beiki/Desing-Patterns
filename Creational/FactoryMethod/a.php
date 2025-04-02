<?php

interface PaymentMethodFactory{
    public function create() :PaymentMethod ;
}

interface PaymentMethod{
    public function connect_to_bank() :bool;
    public function payment(int $price):bool;
}
class Melat implements PaymentMethod{
    public function __construct(
        private readonly string $unic_code,
        private readonly string $password,
        private readonly int $port,
    ){}

    public function connect_to_bank():bool{
        echo "Port :{$this->port}, Uinc Code :{$this->unic_code}, Password :{$this->password} <br>";
        echo "Melat Bank : connection to server successful ! <br>";
        return true;
    }

    public function payment(int $price): bool{
       echo "Melat Bank : payment success $$price ! <br>";
       return true;
    }
}

class Sepah implements PaymentMethod{
    public function __construct(
        private readonly string $token,
        private readonly string $cvv,
    ){}

    public function connect_to_bank():bool{
        echo "Token :{$this->token}, CVV :{$this->cvv} <br>";
        echo "Sepah Bank : connection to server successful ! <br>";
        return true;
    }

    public function payment(int $price): bool{
       echo "Sepah Bank : payment success $$price ! <br>";
       return true;
    } 
}

class MelatFactory implements PaymentMethodFactory{
    public function __construct(
        private readonly string $unic_code,
        private readonly string $password,
        private readonly int $port,
    ){}
    public function create():PaymentMethod{
        return new Melat($this->unic_code,$this->password,$this->port);
    }
}


class SepahFactory implements PaymentMethodFactory{
    public function __construct(
        private readonly string $token,
        private readonly string $cvv,
    ){}        public function create():PaymentMethod{
        return new Sepah($this->token,$this->cvv);
    }
}

$sepahFactory = new SepahFactory("QSCTUJ*&@FFD^GE!#VX1.HG","875186541540314485");
    $sepah= $sepahFactory->create();
    $sepah->connect_to_bank();
    $sepah->payment(199);