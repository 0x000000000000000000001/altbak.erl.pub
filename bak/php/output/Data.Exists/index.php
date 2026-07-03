<?php

namespace Data\Exists;

require_once __DIR__ . '/../Unsafe.Coerce/index.php';

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


// Data_Exists_runExists
$Data_Exists_runExists = $GLOBALS['Unsafe_Coerce_unsafeCoerce'];

// Data_Exists_mkExists
$Data_Exists_mkExists = $GLOBALS['Unsafe_Coerce_unsafeCoerce'];

