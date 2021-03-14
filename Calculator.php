<?php

class Calculator{
    public $num_one;
    public $num_two;
    public $operator;
    public function __construct()
    {
        $this->num_one = $_POST['input_1'];
        $this->num_two = $_POST['input_2'];
        $this->operator = $_POST ['operator'];
    }
    public function calculator($a)
    {
    echo $a;
        switch ($this->operator) {
            case 'add':
               echo $this->num_one + $this->num_two;
                break;
                case 'sub':
                    echo $this->num_one - $this->num_two;
                    break;
                    case 'multi':
                        echo $this->num_one * $this->num_two;
                        break;
                        case 'div':
                            echo $this->num_one / $this->num_two;
                            break;
   
        }
        
    }

}


