<?php

namespace Effect\Aff\Compat;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Aff/index.php';
require_once __DIR__ . '/../Effect.Aff.Compat/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
require_once __DIR__ . '/../Effect.Uncurried/index.php';
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


// Effect_Aff_Compat_bind
$Effect_Aff_Compat_bind = ($GLOBALS['Control_Bind_bind'])($GLOBALS['Effect_bindEffect']);

// Effect_Aff_Compat_compose
$Effect_Aff_Compat_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Effect_Aff_Compat_pure
$Effect_Aff_Compat_pure = ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Effect_applicativeEffect']);

// Effect_Aff_Compat_discard
$Effect_Aff_Compat_discard = ($GLOBALS['Control_Bind_discard'])($GLOBALS['Control_Bind_discardUnit'], $GLOBALS['Effect_bindEffect']);

// Effect_Aff_Compat_EffectFnCanceler
$Effect_Aff_Compat_EffectFnCanceler = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_Compat_EffectFnAff
$Effect_Aff_Compat_EffectFnAff = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_Compat_fromEffectFnAff
$Effect_Aff_Compat_fromEffectFnAff = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$eff = $__case_0;
return ($GLOBALS['Effect_Aff_makeAff'])((function() use ($eff) {
  $__fn = function($k) use ($eff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Aff_Compat_bind'])(($GLOBALS['Effect_Uncurried_runEffectFn2'])($eff, ($GLOBALS['Effect_Uncurried_mkEffectFn1'])(($GLOBALS['Effect_Aff_Compat_compose'])($k, $GLOBALS['Data_Either_Left'])), ($GLOBALS['Effect_Uncurried_mkEffectFn1'])(($GLOBALS['Effect_Aff_Compat_compose'])($k, $GLOBALS['Data_Either_Right']))), (function() {
  $__body = function($v1) {
    $__case_0 = $v1;
    if (true) {
$canceler = $__case_0;
return ($GLOBALS['Effect_Aff_Compat_pure'])(($GLOBALS['Effect_Aff_Canceler'])((function() use ($canceler) {
  $__fn = function($e) use ($canceler, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Aff_makeAff'])((function() use ($canceler, $e) {
  $__fn = function($k2) use ($canceler, $e, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Aff_Compat_discard'])(($GLOBALS['Effect_Uncurried_runEffectFn3'])($canceler, $e, ($GLOBALS['Effect_Uncurried_mkEffectFn1'])(($GLOBALS['Effect_Aff_Compat_compose'])($k2, $GLOBALS['Data_Either_Left'])), ($GLOBALS['Effect_Uncurried_mkEffectFn1'])(($GLOBALS['Effect_Aff_Compat_compose'])($k2, $GLOBALS['Data_Either_Right']))), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Aff_Compat_pure'])($GLOBALS['Effect_Aff_nonCanceler']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v1) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

