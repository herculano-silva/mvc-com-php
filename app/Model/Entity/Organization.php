<?php

namespace App\Model\Entity;

class Organization
{
    /**
     * ID da organização 
     * @var integer
     */
    public $id = 1;

    /**
     * Nome organização 
     * @var string
     */
    public $name = 'Herculano Dev';

    /**
     * Site organização 
     * @var string
     */
    public $site = 'https://github.com/herculano-silva';

    /**
     * Descrição organização 
     * @var string
     */
    public $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan, augue quis auctor luctus, nisl ligula varius nibh, sed condimentum mauris nulla non enim. Vestibulum pharetra vitae arcu posuere luctus.';
}
