<?php

namespace Data\Array\Partial;

require_once __DIR__ . '/../Data.Array/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Prelude/index.php';

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_eval_thunk')) {
  function phpurs_eval_thunk($id) {
    static $cache = [];
    if (array_key_exists($id, $cache)) return $cache[$id];
    switch ($id) {
      case 'Data_Array_Partial_unsafeIndex': $v = \Data\Array\Data_Array_unsafeIndex(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Array_Partial_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };




// Data_Array_Partial_tail
function Data_Array_Partial_tail($__dollar____unused, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_Partial_tail';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Array_slice = ($GLOBALS['Data_Array_slice'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_slice'));
  $__global_Data_Array_length = ($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length'));
  $__res = ($__global_Data_Array_slice)(1, ($__global_Data_Array_length)($xs), $xs);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_Partial_tail'] = __NAMESPACE__ . '\\Data_Array_Partial_tail';

// Data_Array_Partial_last
function Data_Array_Partial_last($__dollar____unused, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_Partial_last';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Array_Partial_unsafeIndex = ($GLOBALS['Data_Array_Partial_unsafeIndex'] ?? \Data\Array\Partial\phpurs_eval_thunk('Data_Array_Partial_unsafeIndex'));
  $__global_Data_Array_length = ($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length'));
  $__res = ($__global_Data_Array_Partial_unsafeIndex)($xs, (($__global_Data_Array_length)($xs) - 1));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_Partial_last'] = __NAMESPACE__ . '\\Data_Array_Partial_last';

// Data_Array_Partial_init
function Data_Array_Partial_init($__dollar____unused, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_Partial_init';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Array_slice = ($GLOBALS['Data_Array_slice'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_slice'));
  $__global_Data_Array_length = ($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length'));
  $__res = ($__global_Data_Array_slice)(0, (($__global_Data_Array_length)($xs) - 1), $xs);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_Partial_init'] = __NAMESPACE__ . '\\Data_Array_Partial_init';

// Data_Array_Partial_head
function Data_Array_Partial_head($__dollar____unused, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_Partial_head';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Array_Partial_unsafeIndex = ($GLOBALS['Data_Array_Partial_unsafeIndex'] ?? \Data\Array\Partial\phpurs_eval_thunk('Data_Array_Partial_unsafeIndex'));
  $__res = ($__global_Data_Array_Partial_unsafeIndex)($xs, 0);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_Partial_head'] = __NAMESPACE__ . '\\Data_Array_Partial_head';

