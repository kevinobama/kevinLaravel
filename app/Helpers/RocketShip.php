<?php

namespace app\Helpers;

use App\Helpers\Contracts\RocketShipContract;
use PDO;

class RocketShip implements RocketShipContract
{

    public function blastOff()
    {
		
        return 'Houston, we have nice spot';

    }
	
	public function allTables()
	{
        $pdo = \DB::connection('hooray_exam')->getPdo();
        $sql = "show tables";
        $sth = $pdo->prepare($sql);
        $sth->execute();

        $tables = $sth->fetchAll(PDO::FETCH_CLASS);
		
		return $tables;		
	}

}