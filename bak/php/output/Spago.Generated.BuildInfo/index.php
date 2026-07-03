<?php

namespace Spago\Generated\BuildInfo;



if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...$merged);
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Spago_Generated_BuildInfo_spagoVersion
$Spago_Generated_BuildInfo_spagoVersion = "1.0.4";

// Spago_Generated_BuildInfo_pursVersion
$Spago_Generated_BuildInfo_pursVersion = "0.15.16";

// Spago_Generated_BuildInfo_packages
$Spago_Generated_BuildInfo_packages = (object)["ps-scheme-test" => "0.0.0"];

