<?php
/* Задача 2.  Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст),
salary (зарплата) и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
Задача 3. Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст
на корректность (от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового возраста
(если возраст не корректный - он не должен меняться).
*/

class Worker
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $age;
    /**
     * @var int
     */
    private $salary;

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getSalary(): int
    {
        return $this->salary;
    }
    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function setAge(int $age): void
    {
        $this->age = $age;
        if (!$this->checkAge($age)) {
            echo "Некорректный возраст '$this->name'\n";
        } else {
            $this->age = $age;
        }
    }
    private function checkAge ($age)
    {
        if ( $this->age >= 1 && $this->age <= 100 ) {
            return true;
        } else {
            return false;
        }
    }
}
