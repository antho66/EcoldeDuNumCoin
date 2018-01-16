<?php

namespace App\Repositories;


use App\Wallet;


class WalletRepository extends BaseRepository{

    public function __construct(Wallet $Wallet){
        $this->entity = $Wallet;
    }

    public function getAllWalletsByUser($user_id){
    
        $user_id = DB::select("SELECT * FROM user WHERE user_id < :prix",array('prix'=>200));
        return $user_id;
    }

}

?>