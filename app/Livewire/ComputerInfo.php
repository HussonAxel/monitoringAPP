<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class ComputerInfo extends Component
{
    public int $totalMemory = 0;
    public int $memoryInGB = 0;

    public function mount(): void {
        $this->getTotalMemory();
    }

    private function getTotalMemory(): void {
        // Get the output of the command as a string
        $totalMemory = shell_exec("grep MemTotal /proc/meminfo");

        // Extract the number of kB using a regular expression
        preg_match('/\d+/', $totalMemory, $matches);
        $memoryInKB = $matches[0];

        // Convert the memory to GB and cast it to an integer
        $this->memoryInGB = intval($memoryInKB / 1024 / 1024);
        $this->totalMemory = $memoryInKB;
    }

    public function render(): View
    {
        return view('livewire.computer-info', [
            'totalMemory' => $this->totalMemory,
            'memoryInGB' => $this->memoryInGB,
        ]);
    }
}
