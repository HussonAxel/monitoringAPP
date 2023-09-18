<div class="row">
    <h1 class="mb-4">PC Informations : </h1>
    <div class="col-md-6 mb-4">
        <div class="card border">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-black">OS Installed : </h5>
                <p class="card-text text-secondary">{{$os}} - {{$osName}} ({{$osVersion}}) </p>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card border">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-black">Kernel Version : </h5>
                <p class="card-text text-secondary">{{$kernel}} </p>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card border">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-black">Total Uptime : </h5>
                <p class="card-text text-secondary">{{ htmlspecialchars($TotalAwaken) }}</p>
            </div>
        </div>
    </div>
    <h1 class="mb-4 mt-4">PC Components : </h1>
    <h3 class="mb-4 mt-4"> CPU Infos : </h3>
    <div class="col-md-6 mb-4">
        <div class="card border">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-black">CPU : </h5>
                <p class="card-text text-secondary">{{$CPU}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card border">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-black">CPU Usage : </h5>
                <p class="card-text text-secondary">{{$CPU}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card border">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-black">CPU Architecture : </h5>
                <p class="card-text text-secondary">{{ $CPUArchitecture }}</p>
            </div>
        </div>
    </div>
    <h3 class="mb-4 mt-4"> GPU Infos : </h3>
    <div class="col-md-6 mb-4">
        <div class="card border">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-black">GPU : </h5>
                <p class="card-text text-secondary">Texte du bloc 2</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card border">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-black">GPU Usage: </h5>
                <p class="card-text text-secondary">Texte du bloc 2</p>
            </div>
        </div>
    </div>
    <h3 class="mb-4 mt-4"> RAM Infos : </h3>

    <div class="col-md-6 mb-4">
        <div class="card border">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-black"> Total RAM : </h5>
                <p class="card-text text-secondary">Texte du bloc 2</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card border">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-black"> RAM Available : </h5>
                <p class="card-text text-secondary">Texte du bloc 2</p>
            </div>
        </div>
    </div>

    <h3 class="mb-4 mt-4"> Disk Space Infos : </h3>
    <div class="col-md-6 mb-4">
        <div class="card border">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-black"> Total Space : </h5>
                <p class="card-text text-secondary">Texte du bloc 2</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card border">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-black"> Free Space : </h5>
                <p class="card-text text-secondary">Texte du bloc 2</p>
            </div>
        </div>
    </div>

</div>