<?php
class BankAccount
{
    private int $balance = 0;

    public function deposit(int $amount): void
    {
        if ($amount <=0){
            echo "입금액은 0보다 커야 합니다.\n";
            return;
        }
        $this->balance += $amount;
    }

    public function withdraw(int $amount): void
    {
        if ($amount > $this->balance){
            echo "잔액이 부족합니다.\n";
            return;
        }
        $this->balance-=$amount;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(10000);
$account->withdraw(3000);
$account->withdraw(50000);
echo $account->getBalance() . "원\n";