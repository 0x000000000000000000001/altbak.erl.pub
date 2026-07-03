<?php

namespace Data\Either\Inject;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Either.Inject/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
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


// Data_Either_Inject_compose
$Data_Either_Inject_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Either_Inject_Inject$Dict
$Data_Either_Inject_Inject__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Either_Inject_prj
$Data_Either_Inject_prj = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->prj;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dict) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($dict);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Either_Inject_injectReflexive
$Data_Either_Inject_injectReflexive = ($GLOBALS['Data_Either_Inject_Inject__dollar__Dict'])((object)["inj" => ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']), "prj" => $GLOBALS['Data_Maybe_Just']]);

// Data_Either_Inject_injectLeft
$Data_Either_Inject_injectLeft = ($GLOBALS['Data_Either_Inject_Inject__dollar__Dict'])((object)["inj" => $GLOBALS['Data_Either_Left'], "prj" => ($GLOBALS['Data_Either_either'])($GLOBALS['Data_Maybe_Just'], ($GLOBALS['Data_Function_const'])($GLOBALS['Data_Maybe_Nothing']))]);

// Data_Either_Inject_inj
$Data_Either_Inject_inj = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->inj;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dict) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($dict);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Either_Inject_injectRight
$Data_Either_Inject_injectRight = (function() {
  $__fn = function($dictInject) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Either_Inject_Inject__dollar__Dict'])((object)["inj" => ($GLOBALS['Data_Either_Inject_compose'])($GLOBALS['Data_Either_Right'], ($GLOBALS['Data_Either_Inject_inj'])($dictInject)), "prj" => ($GLOBALS['Data_Either_either'])(($GLOBALS['Data_Function_const'])($GLOBALS['Data_Maybe_Nothing']), ($GLOBALS['Data_Either_Inject_prj'])($dictInject))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

