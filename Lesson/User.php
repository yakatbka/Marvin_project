<?php
namespace Data;
class User
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var \DateTime
     */
    private $birthDate;
    public function __construct(string $name = 'Никто', \DateTime $birthDate = null)
    {
        $this->name = $name;
        if ($birthDate === null){
            $birthDate = new \DateTime();
        }
        $this->birthDate = $birthDate;
    }
    public function  aboutMe(){
        return 'Меня зовут : ' . $this->name . $this->aboutAge();
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getBirthDate(): \DateTime
    {
        return $this->birthDate;
    }
    public function setBirthDate(\DateTime $birthDate): void
    {
        $this->birthDate = $birthDate;
    }
    public function getAge(): int
    {   $today = new \DateTime();
        $interval = $today->diff($this->birthDate);
        return $interval->y;
    }
    private function aboutAge(){
        return ' мне ' . $this->getAge() . ' лет.';
    }
    protected function aboutName(){
        return 'Меня зовут : ' . $this->name;
    }
}