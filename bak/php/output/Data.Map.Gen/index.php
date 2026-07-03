<?php

namespace Data\Map\Gen;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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


// Data_Map_Gen_genMap
$Data_Map_Gen_genMap = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$unfoldable = ($GLOBALS['Control_Monad_Gen_unfoldable'])($dictMonadRec);
    $__res = (function() use ($unfoldable) {
  $__fn = function($dictMonadGen) use ($unfoldable, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sized = ($GLOBALS['Control_Monad_Gen_Class_sized'])($dictMonadGen);
$Bind1 = (((($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']);
$bind = ($GLOBALS['Control_Bind_bind'])($Bind1);
$chooseInt = ($GLOBALS['Control_Monad_Gen_Class_chooseInt'])($dictMonadGen);
$resize = ($GLOBALS['Control_Monad_Gen_Class_resize'])($dictMonadGen);
$Apply0 = (($Bind1)->Apply0)($GLOBALS['Prim_undefined']);
$map = ($GLOBALS['Data_Functor_map'])((($Apply0)->Functor0)($GLOBALS['Prim_undefined']));
$unfoldable1 = ($unfoldable)($dictMonadGen, $GLOBALS['Data_List_Types_unfoldableList']);
$apply = ($GLOBALS['Control_Apply_apply'])($Apply0);
    $__res = (function() use ($sized, $bind, $chooseInt, $resize, $map, $unfoldable1, $apply) {
  $__fn = function($dictOrd) use ($sized, $bind, $chooseInt, $resize, $map, $unfoldable1, $apply, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$fromFoldable = ($GLOBALS['Data_Map_Internal_fromFoldable'])($dictOrd, $GLOBALS['Data_List_Types_foldableList']);
    $__res = (function() use ($sized, $bind, $chooseInt, $resize, $map, $fromFoldable, $unfoldable1, $apply) {
  $__fn = function($genKey, $genValue = null) use ($sized, $bind, $chooseInt, $resize, $map, $fromFoldable, $unfoldable1, $apply, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($sized)((function() use ($bind, $chooseInt, $resize, $map, $fromFoldable, $unfoldable1, $apply, $genKey, $genValue) {
  $__fn = function($size) use ($bind, $chooseInt, $resize, $map, $fromFoldable, $unfoldable1, $apply, $genKey, $genValue, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind)(($chooseInt)(0, $size), (function() use ($resize, $map, $fromFoldable, $unfoldable1, $apply, $genKey, $genValue) {
  $__fn = function($newSize) use ($resize, $map, $fromFoldable, $unfoldable1, $apply, $genKey, $genValue, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($resize)(($GLOBALS['Data_Function_const'])($newSize), ($map)($fromFoldable, ($unfoldable1)(($apply)(($map)($GLOBALS['Data_Tuple_Tuple'], $genKey), $genValue))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

