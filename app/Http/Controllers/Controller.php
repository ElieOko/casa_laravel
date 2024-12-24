<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    public $msg_success = "Enregistrement réussie avec succès";
    public $msg_error = "Ressource non trouvé";
    public $msg_account_invalid = "Compte Invalide";
    public $msg_email_found_error = "Cette adresse mail appartient a un membre de la communauté";
    public $status_ok = 200;
    public $status_error = 404;
}
