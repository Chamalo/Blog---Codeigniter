<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AccountModel extends CI_Model
{
    //Fonction pour enregistrer un utilisateur dans la base de données
    public function register_user($user)
    {
        $this->db->insert('user', $user);
    }

    //Fonction pour la connexion de l'utilisateur
    public function login_user($pseudo,$pass)
    {
        $this->db->select('*')
                ->from('user')
                ->where('pseudo',$pseudo);

        if($query=$this->db->get())
        {
            $query = $query->row_array();
            //Verification de la correspondance des mots de passe
            if(password_verify($pass, $query['password']))
            {
                return $query;
            }
            return false;
        }
        else
        {
            return false;
        }
    }
}