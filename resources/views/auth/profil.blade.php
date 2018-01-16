@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="css/profil.css">
<link rel="stylesheet" type="text/css" href="ressources/font-awesome/css/font-awesome.min.css">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" id="tile">
                    Vos information


                </div>
                <div class="panel-heading" id="info">
                       <p>Name:{{ $user->name }}<p/> 
                        <p>E-Mail Address:<br />{{ $user->email }}<p/>
                        <p>Password:{{ $user->Password }}<p/>
                
                    </div>


                {{--  <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>  --}}
            </div>
            <div class="panel panel-default">
                    <div class="panel-heading" id="tile">
                        WALLET
    
    
                    </div>
                    <div class="panel-heading" id="info">
                           Devises: <br /> <br />
                           <p> Montant: {{ $this->solde }}<p/><br /> <br />
                           <p> Adresse:{{ $this->Adresse }} <p/>
                        </div>

                </div>
        </div>
    </div>
</div>
@endsection
