<?php

namespace Data\Enum\Gen;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Prelude/index.php';

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


// Data_Enum_Gen_foldable1NonEmpty
$Data_Enum_Gen_foldable1NonEmpty = ($GLOBALS['Data_NonEmpty_foldable1NonEmpty'])($GLOBALS['Data_Foldable_foldableArray']);

// Data_Enum_Gen_genBoundedEnum
$Data_Enum_Gen_genBoundedEnum = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$elements = ($GLOBALS['Control_Monad_Gen_elements'])($dictMonadGen, $GLOBALS['Data_Enum_Gen_foldable1NonEmpty']);
$pure = ($GLOBALS['Control_Applicative_pure'])((((($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']))->Applicative0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($elements, $pure) {
  $__body = function($dictBoundedEnum) use ($elements, $pure) {
    $Enum1 = (($dictBoundedEnum)->Enum1)($GLOBALS['Prim_undefined']);
    $Bounded0 = (($dictBoundedEnum)->Bounded0)($GLOBALS['Prim_undefined']);
    $bottom = ($GLOBALS['Data_Bounded_bottom'])($Bounded0);
    $v = ($GLOBALS['Data_Enum_succ'])($Enum1, $bottom);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Just")) {
$a = ($__case_0)->values[0];
$possibilities = ($GLOBALS['Data_Enum_enumFromTo'])($Enum1, $GLOBALS['Data_Unfoldable1_unfoldable1Array'], $a, ($GLOBALS['Data_Bounded_top'])($Bounded0));
return ($elements)(($GLOBALS['Data_NonEmpty_NonEmpty'])($bottom, $possibilities));
} else {
if ((($__case_0)->tag === "Nothing")) {
return ($pure)($bottom);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($dictBoundedEnum) use ($elements, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($dictBoundedEnum);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

