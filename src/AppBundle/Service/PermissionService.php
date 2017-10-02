<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;

class PermissionService {


    /**
     * @var EntityManager
     */
    private $db_manager;


    public function __construct(EntityManager $em)
    {
        $this->db_manager = $em;

    }


    /**
     * @param $user_id
     * @param $requested_action
     * @return bool Is this user authorized to perform this action?
     */
    public function action_authorized($user_id, $requested_action) {

    }

    /**
     * Add the specified permission to the role type.
     *
     * If permission already exists, ignore.
     * @param $role_type
     * @param $permission
     */
    public function add_permission($role_type, $permission) {

    }

    /**
     * Remove specified permission from the role type.
     *
     * If permission doesn't exist, ignore.
     * @param $role_type
     * @param $permission
     */
    public function remove_permission($role_type, $permission) {

    }

    /**
     * ## Secondary function; not necessary
     *
     * Add permission for specific user.
     *
     * @param $user_id
     * @param $permission
     */
    public function add_user_permission($user_id, $permission) {

    }

    /**
     * ## Secondary function; not necessary ##
     *
     * Remove permission for specific user.
     *
     * @param $user_id
     * @param $permission
     */
    public function remove_user_permission($user_id, $permission) {

    }



}
