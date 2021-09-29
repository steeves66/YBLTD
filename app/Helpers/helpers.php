<?php

use Illuminate\Support\Str;

define('USERPAGECREATEFORM', 'create');
define('USERPAGEEDITFORM', 'edit');
define('USERPAGELIST', 'list');

define('DEFAULTPASSWORD', 'password');

function userFullName()
{
    return auth()->user()->nom . ' ' . auth()->user()->prenoms;
}

function getUserRolesName()
{
    $rolesName = "";
    $i = 0;
    foreach (auth()->user()->roles as $role) {
        $rolesName .= $role->nom;
        if ($i < sizeof(auth()->user()->roles) - 1) {
            $rolesName .= ',';
        }
        $i++;
    }
    return $rolesName;
}

function setMenuClass($route, $classe)
{
    $routeActuel = request()->route()->getName();
    if (contains($routeActuel, $route)) {
        return $classe;
    }
    return "";
}

function setMenuActive($route)
{
    $routeActuel = request()->route()->getName();
    if ($routeActuel === $route) {
        return "active";
    }
    return "";
}

function contains($container, $contenu)
{
    return Str::contains($container, $contenu);
}
