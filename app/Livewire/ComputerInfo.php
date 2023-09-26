<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use Linfo\Linfo;

class ComputerInfo extends Component
{
    public string $TotalAwaken;
    public string $os;
    public string $osName;
    public string $osVersion;
    public string $kernel;
    public string $CPUArchitecture;
    public $CPU;
    public string $freeRam;

    public function mount(): void
    {
        $this->getPcComponents();
        $this->getPcStatus();
        $this->getPcInformations();
    }

    private function getPcComponents(): void
    {
        $linfo = new Linfo();

        $this->CPUArchitecture = $linfo->getCPUArchitecture();
        $this->CPU = $linfo->getCPU()[0]['Model'];
    }

    private function getPcStatus(): void
    {
        $linfo = new Linfo();

        $uptime = $linfo->getUptime();
        $this->TotalAwaken = $uptime['text'];
    }

    private function getPcInformations(): void
    {
        $linfo = new Linfo();

        $this->kernel = $linfo->getKernel();
        $distro = $linfo->getDistro();
        $this->osName = $distro['name'];
        $this->osVersion = $distro['version'];
        $this->os = $linfo->getOS();
        $this->freeRam = shell_exec('free -m | awk \'NR==2{printf "%.2f%%", $3*100/$2 }\'');
    }

    public function render(): View
    {
        return view('livewire.computer-info', [
            'TotalAwaken' => $this->TotalAwaken,
            'os' => $this->os,
            'osName' => $this->osName,
            'osVersion' => $this->osVersion,
            'kernel' => $this->kernel,
            'CPUArchitecture' => $this->CPUArchitecture,
            'CPU' => $this->CPU,
            'freeRam' => $this->freeRam,
        ]);
    }
}
