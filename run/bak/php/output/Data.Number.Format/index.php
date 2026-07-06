<?php

namespace Data\Number\Format;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Number.Format/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
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
      case 'Data_Number_Format_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Number_Format_clamp': $v = \Data\Ord\Data_Ord_clamp(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Number_Format_precision': $v = (($GLOBALS['Data_Number_Format_compose'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_compose')))(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Precision", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Number_Format_clamp'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_clamp')))(1, 21)); break;
      case 'Data_Number_Format_fixed': $v = (($GLOBALS['Data_Number_Format_compose'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_compose')))(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Fixed", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Number_Format_clamp'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_clamp')))(0, 20)); break;
      case 'Data_Number_Format_exponential': $v = (($GLOBALS['Data_Number_Format_compose'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_compose')))(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Exponential", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Number_Format_clamp'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_clamp')))(0, 20)); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };




// Data_Number_Format_Precision
function Data_Number_Format_Precision($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Number_Format_Precision';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = new Phpurs_Data1("Precision", $value0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Number_Format_Precision'] = __NAMESPACE__ . '\\Data_Number_Format_Precision';

// Data_Number_Format_Fixed
function Data_Number_Format_Fixed($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Number_Format_Fixed';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = new Phpurs_Data1("Fixed", $value0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Number_Format_Fixed'] = __NAMESPACE__ . '\\Data_Number_Format_Fixed';

// Data_Number_Format_Exponential
function Data_Number_Format_Exponential($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Number_Format_Exponential';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = new Phpurs_Data1("Exponential", $value0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Number_Format_Exponential'] = __NAMESPACE__ . '\\Data_Number_Format_Exponential';

// Data_Number_Format_toStringWith
function Data_Number_Format_toStringWith($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Number_Format_toStringWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Number_Format_toPrecisionNative = ($GLOBALS['Data_Number_Format_toPrecisionNative'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_toPrecisionNative'));
  $__global_Data_Number_Format_toFixedNative = ($GLOBALS['Data_Number_Format_toFixedNative'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_toFixedNative'));
  $__global_Data_Number_Format_toExponentialNative = ($GLOBALS['Data_Number_Format_toExponentialNative'] ?? \Data\Number\Format\phpurs_eval_thunk('Data_Number_Format_toExponentialNative'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Precision":
$p = ($__case_0)->v0;
$__res = ($__global_Data_Number_Format_toPrecisionNative)($p);
goto __end;;
break;
case "Fixed":
$p = ($__case_0)->v0;
$__res = ($__global_Data_Number_Format_toFixedNative)($p);
goto __end;;
break;
case "Exponential":
$p = ($__case_0)->v0;
$__res = ($__global_Data_Number_Format_toExponentialNative)($p);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Number_Format_toStringWith'] = __NAMESPACE__ . '\\Data_Number_Format_toStringWith';




