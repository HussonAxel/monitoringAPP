<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use Matriphe\Larinfo\Larinfo;
use Linfo\Linfo;

class ComputerInfo extends Component
{
    public int $totalMemory = 0;
    public int $memoryInGB = 0;

    public function mount(): void {
        $this->getTotalMemory();
    }

    private function getTotalMemory(): void {
        // Create a new instance of the Larinfo class
        $linfo = new Linfo();

        // Get the total memory in bytes
        $totalMemory = $linfo->getRam()['total'];

        // Convert the memory to GB and cast it to an integer
        $this->memoryInGB = intval($totalMemory / 1024 / 1024 / 1024);
        $this->totalMemory = $totalMemory;
    }

    public function render(): View
    {
        return view('livewire.computer-info', [
            'memoryInGB' => $this->memoryInGB,
        ]);
    }
}
