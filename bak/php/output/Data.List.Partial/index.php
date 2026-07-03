<?php

namespace Data\List\Partial;

require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Partial/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';

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


// Data_List_Partial_tail
$Data_List_Partial_tail = (function() {
  $__fn = function($__dollar____unused, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ((function() use ($v) {
  $__body = function($__dollar____unused) use ($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Cons")) {
$xs = ($__case_0)->values[1];
return $xs;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($__dollar____unused) use ($v, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($__dollar____unused);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($GLOBALS['Prim_undefined']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_Partial_last
$Data_List_Partial_last = (function() {
  $__fn = function($__dollar____unused, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
return ((function() use ($v) {
  $__body = function($__dollar____unused) use ($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[1])->tag === "Nil"))) {
$x = ($__case_0)->values[0];
return $x;
} else {
if ((($__case_0)->tag === "Cons")) {
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Partial_last'])($GLOBALS['Prim_undefined'], $xs);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($__dollar____unused) use ($v, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($__dollar____unused);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($GLOBALS['Prim_undefined']);
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_Partial_init
$Data_List_Partial_init = (function() {
  $__fn = function($__dollar____unused, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
return ((function() use ($v) {
  $__body = function($__dollar____unused) use ($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[1])->tag === "Nil"))) {
return $GLOBALS['Data_List_Types_Nil'];
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Types_Cons'])($x, ($GLOBALS['Data_List_Partial_init'])($GLOBALS['Prim_undefined'], $xs));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($__dollar____unused) use ($v, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($__dollar____unused);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($GLOBALS['Prim_undefined']);
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_Partial_head
$Data_List_Partial_head = (function() {
  $__fn = function($__dollar____unused, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ((function() use ($v) {
  $__body = function($__dollar____unused) use ($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
return $x;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($__dollar____unused) use ($v, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($__dollar____unused);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($GLOBALS['Prim_undefined']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

