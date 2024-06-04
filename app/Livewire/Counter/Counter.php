<?php

namespace App\Livewire\Counter;

use Livewire\Component;

class Counter extends Component
{
    public $counter=5;
    public $close=true;

    public function add()
    {
        $this->counter++;
        if($this->counter > 10){
            $this->close= true;
        }
    }

    public function minus()
    {
        if($this->counter > 0){
        $this->counter--;
        }
    }

    public function render()
    {
        return view('livewire.counter.counter');
    }
}
