<?php

abstract class Kind
{
    // перемещаться
    function move()
    {
        echo "move";
    }

    // поесть
    function eat()
    {
        echo "eat";
    }

    // спать
    function sleep()
    {
        echo "sleep";
    }

    // дышать
    function breathe()
    {
        echo "breathe";
    }

    // видеть
    function see()
    {
        echo "see";
    }
}

// птицы
interface BirdKind
{
    // чистить перья
    public function cleanFeathers(): string;
}

// пауки
interface SpiderKind
{
    // плести паутину
    public function spinWeb(): string;
}

// медведи
interface BearKind
{
    // впадать в спячку
    public function fallHibernation(): string;
}

// Зайцы
interface HareKind
{
    // грызть морковь
    public function gnawCarrots(): string;
}

// Скот
interface Cattle
{
    // давать молоко
    public function toMilk(): string;
}

// может летать
trait CanFly
{
    public function fly()
    {
        echo "fly";
    }
}

//охота
trait  Hunting
{
    public function hunt()
    {
        echo "hunt";
    }
}

// водоплавающий вид
trait SwimAnimal
{
    public function swim()
    {
        echo "swim";
    }
}

// травоядное
trait isGrass
{
    public function grass()
    {
        echo "grass";
    }
}

// имеет клюв
trait HasBeak
{
    public function beak()
    {
        echo "HasBeak";
    }
}

// имеет отличное зрение
trait HasBetterEyes
{
    public function betterEyes()
    {
        echo "HasBetterEyes";
    }
}

// Орел
class Eagle extends Kind implements BirdKind
{
    use CanFly, HasBetterEyes, Hunting, HasBeak;

    public function cleanFeathers(): string
    {
        return "cleanFeathers";
    }
}

// Бурый медведь
class BrownBear extends Kind implements BearKind
{
    use Hunting;

    public function fallHibernation(): string
    {
        return "fallHibernation";
    }
}

// Попугай
class Parrot extends Kind implements BirdKind
{
    use  CanFly;

    public function cleanFeathers(): string
    {
        return "cleanFeathers";
    }
}

// Коллибри
class Colibri extends Kind implements BirdKind
{
    use  CanFly;

    public function cleanFeathers(): string
    {
        return "cleanFeathers";
    }
}

// Корова
class cow extends Kind implements Cattle
{
    use isGrass;

    public function toMilk(): string
    {
        return "toMilk";
    }
}


$tomas = new Eagle();
echo "\n " . $tomas->move();
$tomas->hunt();
echo "\n " . $tomas->cleanFeathers();
