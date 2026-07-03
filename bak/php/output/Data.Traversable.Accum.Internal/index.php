<?php

namespace Data\Traversable\Accum\Internal;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum.Internal/index.php';
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


// Data_Traversable_Accum_Internal_StateR
$Data_Traversable_Accum_Internal_StateR = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Traversable_Accum_Internal_StateL
$Data_Traversable_Accum_Internal_StateL = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Traversable_Accum_Internal_stateR
$Data_Traversable_Accum_Internal_stateR = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$k = $__case_0;
return $k;
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

// Data_Traversable_Accum_Internal_stateL
$Data_Traversable_Accum_Internal_stateL = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$k = $__case_0;
return $k;
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

// Data_Traversable_Accum_Internal_functorStateR
$Data_Traversable_Accum_Internal_functorStateR = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() {
  $__fn = function($f, $k = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Traversable_Accum_Internal_StateR'])((function() use ($k, $f) {
  $__body = function($s) use ($k, $f) {
    $v = ($GLOBALS['Data_Traversable_Accum_Internal_stateR'])($k, $s);
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$s1 = ($__case_0)->accum;
$a = ($__case_0)->value;
return (object)["accum" => $s1, "value" => ($f)($a)];
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($s) use ($k, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($s);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_Accum_Internal_functorStateL
$Data_Traversable_Accum_Internal_functorStateL = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() {
  $__fn = function($f, $k = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Traversable_Accum_Internal_StateL'])((function() use ($k, $f) {
  $__body = function($s) use ($k, $f) {
    $v = ($GLOBALS['Data_Traversable_Accum_Internal_stateL'])($k, $s);
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$s1 = ($__case_0)->accum;
$a = ($__case_0)->value;
return (object)["accum" => $s1, "value" => ($f)($a)];
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($s) use ($k, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($s);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_Accum_Internal_applyStateR
$Data_Traversable_Accum_Internal_applyStateR = ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Traversable_Accum_Internal_StateR'])((function() use ($x, $f) {
  $__body = function($s) use ($x, $f) {
    $v = ($GLOBALS['Data_Traversable_Accum_Internal_stateR'])($x, $s);
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$s1 = ($__case_0)->accum;
$x__prime__ = ($__case_0)->value;
$v1 = ($GLOBALS['Data_Traversable_Accum_Internal_stateR'])($f, $s1);
$__case_0 = $v1;
if ((is_object)($__case_0)) {
$s2 = ($__case_0)->accum;
$f__prime__ = ($__case_0)->value;
return (object)["accum" => $s2, "value" => ($f__prime__)($x__prime__)];
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($s) use ($x, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($s);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Traversable_Accum_Internal_functorStateR'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_Accum_Internal_applyStateL
$Data_Traversable_Accum_Internal_applyStateL = ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Traversable_Accum_Internal_StateL'])((function() use ($f, $x) {
  $__body = function($s) use ($f, $x) {
    $v = ($GLOBALS['Data_Traversable_Accum_Internal_stateL'])($f, $s);
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$s1 = ($__case_0)->accum;
$f__prime__ = ($__case_0)->value;
$v1 = ($GLOBALS['Data_Traversable_Accum_Internal_stateL'])($x, $s1);
$__case_0 = $v1;
if ((is_object)($__case_0)) {
$s2 = ($__case_0)->accum;
$x__prime__ = ($__case_0)->value;
return (object)["accum" => $s2, "value" => ($f__prime__)($x__prime__)];
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($s) use ($f, $x, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($s);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Traversable_Accum_Internal_functorStateL'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_Accum_Internal_applicativeStateR
$Data_Traversable_Accum_Internal_applicativeStateR = ($GLOBALS['Control_Applicative_Applicative__dollar__Dict'])((object)["pure" => (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Traversable_Accum_Internal_StateR'])((function() use ($a) {
  $__fn = function($s) use ($a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = (object)["accum" => $s, "value" => $a];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Traversable_Accum_Internal_applyStateR'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_Accum_Internal_applicativeStateL
$Data_Traversable_Accum_Internal_applicativeStateL = ($GLOBALS['Control_Applicative_Applicative__dollar__Dict'])((object)["pure" => (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Traversable_Accum_Internal_StateL'])((function() use ($a) {
  $__fn = function($s) use ($a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = (object)["accum" => $s, "value" => $a];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Traversable_Accum_Internal_applyStateL'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

