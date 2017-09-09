<?php

function vipGetRouterClass ($name)
{
    return \Illuminate\Support\Facades\Request::is($name) ? 'active' : '';
}