<div class="row ">
    <div class="col ">
        <div class="jumbotron">
            <h2><i class="fas fa-microchip"></i> Informações do sistema:</h2>
            <ul class="no-style mt-3">
                <li>
                    <i class="far fa-clock fa-fw"></i> <b>Tempo ligado:</b> <?= $uptime ?>
                </li>
                <li>
                    <i class="fas fa-weight-hanging fa-fw"></i> <b>Load average:</b> <?= $load[0] . ", " . $load[1] . ", " . $load[2] ?>
                </li>
                <li>
                    <i class="fas fa-thermometer-half fa-fw"></i> <b>Temperatura:</b> <?= $temp ?>°c
                </li>
            </ul>
        </div>
    </div>
</div>