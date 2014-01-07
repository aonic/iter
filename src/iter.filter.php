<?php

namespace iter\filter;

function prefix($string) {
    return function(array $target) use ($string) {
        return (strpos(key($target), $string) === 0);
    };
}

function contains($string) {
    return function(array $target) use ($string) {
        return (strpos(key($target), $string) !== false);
    };
}
