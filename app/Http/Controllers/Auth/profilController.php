<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Repositories\WalletRepository;

use Illuminate\Support\Facades\Auth;



class profilController extends Controller
{

   private $WalletRepository;

    public function __construct(WalletRepository $repo){
        $this->WalltRepository=$repo;
    }
   
 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    public function profil(){

        $user = Auth::user();
        
        dump($user->id);
        die();
         

        $res=$this->WalltRepository->getAllWalletsByUser($user->id);

        // dump($res);
        // die();

        

        return view('auth.profil',array(
            'user'=>$user,
            
        ));
    }

    // public function walletsMethode(){


    //     return view('auth.wallet',array(
    //     'wallets'=>$wallets
    //     ));
    //   }


}
