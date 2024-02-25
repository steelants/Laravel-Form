<?php

namespace SteelAnts\Form;

trait FromNameKeyTrait
{
    private ?string $nameKey = null;
    private bool $isLw = false;

    public function getNameKey(){
        if(!isset($this->nameKey)){
            foreach($this->attributes as $key => $value){
                if(strpos($key, 'wire:model') !== false){
                    $this->isLw = true;
                    $this->nameKey = $value;
                    break;
                }
                
                if(strpos($key, 'name') !== false){
                    $this->nameKey = $value;
                    break;
                }
            }
        }

        return $this->nameKey;
    }

    public function isLivewire(){
        $this->getNameKey();

        return $this->isLw;
    }
}
