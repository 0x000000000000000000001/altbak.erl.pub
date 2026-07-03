<?php

namespace Control\Monad\Error\Class;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
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


// Control_Monad_Error_Class_compose
$Control_Monad_Error_Class_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Monad_Error_Class_discard
$Control_Monad_Error_Class_discard = ($GLOBALS['Control_Bind_discard'])($GLOBALS['Control_Bind_discardUnit']);

// Control_Monad_Error_Class_MonadThrow$Dict
$Control_Monad_Error_Class_MonadThrow__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Error_Class_MonadError$Dict
$Control_Monad_Error_Class_MonadError__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Error_Class_throwError
$Control_Monad_Error_Class_throwError = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->throwError;
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

// Control_Monad_Error_Class_monadThrowMaybe
$Control_Monad_Error_Class_monadThrowMaybe = ($GLOBALS['Control_Monad_Error_Class_MonadThrow__dollar__Dict'])((object)["throwError" => ($GLOBALS['Data_Function_const'])($GLOBALS['Data_Maybe_Nothing']), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Maybe_monadMaybe'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Error_Class_monadThrowEither
$Control_Monad_Error_Class_monadThrowEither = ($GLOBALS['Control_Monad_Error_Class_MonadThrow__dollar__Dict'])((object)["throwError" => $GLOBALS['Data_Either_Left'], "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Either_monadEither'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Error_Class_monadThrowEffect
$Control_Monad_Error_Class_monadThrowEffect = ($GLOBALS['Control_Monad_Error_Class_MonadThrow__dollar__Dict'])((object)["throwError" => $GLOBALS['Effect_Exception_throwException'], "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_monadEffect'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Error_Class_monadErrorMaybe
$Control_Monad_Error_Class_monadErrorMaybe = ($GLOBALS['Control_Monad_Error_Class_MonadError__dollar__Dict'])((object)["catchError" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Nothing")) {
$f = $__case_1;
return ($f)($GLOBALS['Data_Unit_unit']);
} else {
if ((($__case_0)->tag === "Just")) {
$a = ($__case_0)->values[0];
return ($GLOBALS['Data_Maybe_Just'])($a);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Control_Monad_Error_Class_monadThrowMaybe'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Error_Class_monadErrorEither
$Control_Monad_Error_Class_monadErrorEither = ($GLOBALS['Control_Monad_Error_Class_MonadError__dollar__Dict'])((object)["catchError" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Left")) {
$e = ($__case_0)->values[0];
$h = $__case_1;
return ($h)($e);
} else {
if ((($__case_0)->tag === "Right")) {
$x = ($__case_0)->values[0];
return ($GLOBALS['Data_Either_Right'])($x);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Control_Monad_Error_Class_monadThrowEither'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Error_Class_monadErrorEffect
$Control_Monad_Error_Class_monadErrorEffect = ($GLOBALS['Control_Monad_Error_Class_MonadError__dollar__Dict'])((object)["catchError" => ($GLOBALS['Data_Function_flip'])($GLOBALS['Effect_Exception_catchException']), "MonadThrow0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Control_Monad_Error_Class_monadThrowEffect'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Error_Class_liftMaybe
$Control_Monad_Error_Class_liftMaybe = (function() {
  $__fn = function($dictMonadThrow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$throwError1 = ($GLOBALS['Control_Monad_Error_Class_throwError'])($dictMonadThrow);
$pure = ($GLOBALS['Control_Applicative_pure'])((((($dictMonadThrow)->Monad0)($GLOBALS['Prim_undefined']))->Applicative0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($throwError1, $pure) {
  $__fn = function($error) use ($throwError1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Maybe_maybe'])(($throwError1)($error), $pure);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Error_Class_liftEither
$Control_Monad_Error_Class_liftEither = (function() {
  $__fn = function($dictMonadThrow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Either_either'])(($GLOBALS['Control_Monad_Error_Class_throwError'])($dictMonadThrow), ($GLOBALS['Control_Applicative_pure'])((((($dictMonadThrow)->Monad0)($GLOBALS['Prim_undefined']))->Applicative0)($GLOBALS['Prim_undefined'])));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Error_Class_catchError
$Control_Monad_Error_Class_catchError = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->catchError;
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

// Control_Monad_Error_Class_catchJust
$Control_Monad_Error_Class_catchJust = (function() {
  $__fn = function($dictMonadError) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$throwError1 = ($GLOBALS['Control_Monad_Error_Class_throwError'])((($dictMonadError)->MonadThrow0)($GLOBALS['Prim_undefined']));
$catchError1 = ($GLOBALS['Control_Monad_Error_Class_catchError'])($dictMonadError);
    $__res = (function() use ($throwError1, $catchError1) {
  $__fn = function($p, $act = null, $handler = null) use ($throwError1, $catchError1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$handle = (function() use ($p, $throwError1, $handler) {
  $__body = function($e) use ($p, $throwError1, $handler) {
    $v = ($p)($e);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($throwError1)($e);
} else {
if ((($__case_0)->tag === "Just")) {
$b = ($__case_0)->values[0];
return ($handler)($b);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($e) use ($p, $throwError1, $handler, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($e);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($catchError1)($act, $handle);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Error_Class_try
$Control_Monad_Error_Class_try = (function() {
  $__fn = function($dictMonadError) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$catchError1 = ($GLOBALS['Control_Monad_Error_Class_catchError'])($dictMonadError);
$Monad0 = (((($dictMonadError)->MonadThrow0)($GLOBALS['Prim_undefined']))->Monad0)($GLOBALS['Prim_undefined']);
$map = ($GLOBALS['Data_Functor_map'])((((((($Monad0)->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])((($Monad0)->Applicative0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($catchError1, $map, $pure) {
  $__fn = function($a) use ($catchError1, $map, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($catchError1)(($map)($GLOBALS['Data_Either_Right'], $a), ($GLOBALS['Control_Monad_Error_Class_compose'])($pure, $GLOBALS['Data_Either_Left']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Error_Class_withResource
$Control_Monad_Error_Class_withResource = (function() {
  $__fn = function($dictMonadError) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$MonadThrow0 = (($dictMonadError)->MonadThrow0)($GLOBALS['Prim_undefined']);
$Monad0 = (($MonadThrow0)->Monad0)($GLOBALS['Prim_undefined']);
$Bind1 = (($Monad0)->Bind1)($GLOBALS['Prim_undefined']);
$bind = ($GLOBALS['Control_Bind_bind'])($Bind1);
$try1 = ($GLOBALS['Control_Monad_Error_Class_try'])($dictMonadError);
$discard1 = ($GLOBALS['Control_Monad_Error_Class_discard'])($Bind1);
$throwError1 = ($GLOBALS['Control_Monad_Error_Class_throwError'])($MonadThrow0);
$pure = ($GLOBALS['Control_Applicative_pure'])((($Monad0)->Applicative0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($bind, $try1, $discard1, $throwError1, $pure) {
  $__fn = function($acquire, $release = null, $kleisli = null) use ($bind, $try1, $discard1, $throwError1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($bind)($acquire, (function() use ($bind, $try1, $kleisli, $discard1, $release, $throwError1, $pure) {
  $__fn = function($resource) use ($bind, $try1, $kleisli, $discard1, $release, $throwError1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind)(($try1)(($kleisli)($resource)), (function() use ($discard1, $release, $resource, $throwError1, $pure) {
  $__fn = function($result) use ($discard1, $release, $resource, $throwError1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($discard1)(($release)($resource), (function() use ($throwError1, $pure, $result) {
  $__fn = function($__dollar____unused) use ($throwError1, $pure, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Either_either'])($throwError1, $pure, $result);
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
})());
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

