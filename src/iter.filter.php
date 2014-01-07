<?php

namespace iter\filter;

function prefix($string) {
    return function($target) use ($string) {
        return (strpos($target, $string) === 0);
    };
}

function contains($string) {
    return function($target) use ($string) {
        return (strpos($target, $string) !== false);
    };
}
