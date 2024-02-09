<?php

namespace SteelAnts\Form;

trait FromErrorKeyTrait
{
    public ?string $errorKey = null;

    public function getErrorKey(){
        if(!isset($this->errorKey)){
            foreach($this->attributes as $key => $value){
                if(strpos($key, 'wire:model') !== false || strpos($key, 'name') !== false){
                    $this->errorKey = $value;
                    break;
                }
            }
        }

        return $this->errorKey;
    }
}
