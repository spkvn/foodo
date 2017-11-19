<?php

namespace Foodo;

use \Form;
use \Html;

Form::macro('media', function ($name, Image $image = null)
{
    return Form::file($name);
});

Html::macro('delete', function ($route, $params = [], $label = 'Delete')
{
    $id = uniqid();

    $form = Form::open(['route' => array_merge([$route], is_array($params) ? $params: [$params]), 'method' => 'DELETE', 'class' => 'deletePanel delete__form button__inline__block', 'id' => 'form-'.$id]);
    $form .= '<a class="confirm">' . $label . '</a>';
    $form .= Form::close();

    return $form;
});

Html::macro('logout', function ($label = 'Logout')
{
    $form = Form::open(['url' => 'logout', 'method' => 'post', 'id' => 'logout']);
    $form .= '<a class="button" onclick="$(\'#logout\').submit();">' . $label . '</a>';
    $form .= Form::close();

    return $form;
});