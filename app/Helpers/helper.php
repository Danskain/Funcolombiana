<?php

function activo($path){
    return request()->is($path) ? 'active' : '';
}