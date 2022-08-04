<?php

use function ContectarBanco\conectar as ContectarBancoConectar;
use function ContectarSite\conectar;

include "connect.php";
include "connect2.php";

conectar();
echo"<br>";
ContectarBancoConectar();

