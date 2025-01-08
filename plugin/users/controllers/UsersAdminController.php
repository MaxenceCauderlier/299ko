<?php

/**
 * @copyright (C) 2024, 299Ko
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @author Maxence Cauderlier <mx.koder@gmail.com>
 * 
 * @package 299Ko https://github.com/299Ko/299ko
 */
defined('ROOT') or exit('No direct script access allowed');

class UsersAdminController extends AdminController {

    public function home() {

                // Vérification si l'utilisateur est administrateur
       // $this->checkAccess('admin');

        $response = new AdminResponse();
        $tpl = $response->createPluginTemplate('users', 'userslist');

        $users = UsersManager::getUsers();
        foreach ($users as $user) {
            $user->deleteLink = $this->router->generate("users-delete", ["id" => $user->id , "token" => $this->user->token]);
        }
        $tpl->set('users', $users);
        $tpl->set('token', $this->user->token);

        $response->addTemplate($tpl);
        return $response;
    }
}