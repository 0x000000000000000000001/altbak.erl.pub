<?php

namespace Test\LazyEvaluation;

require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Test.LazyEvaluation/index.php';

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
      case 'Test_LazyEvaluation_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Test_LazyEvaluation_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Test_LazyEvaluation_describe': $v = (($GLOBALS['Effect_Console_log'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_log')))("Lazy Evaluation (1M Thunks Forced, 1k Depth):"); break;
      case 'Test_LazyEvaluation_act': $v = \Effect\Console\Effect_Console_logShow(($GLOBALS['Data_Show_showInt'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showInt')), \Test\LazyEvaluation\Test_LazyEvaluation_runManyTimes(1000, 0)); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };




// Test_LazyEvaluation_Lazy
function Test_LazyEvaluation_Lazy($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_LazyEvaluation_Lazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_LazyEvaluation_Lazy'] = __NAMESPACE__ . '\\Test_LazyEvaluation_Lazy';

// Test_LazyEvaluation_force
function Test_LazyEvaluation_force($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_LazyEvaluation_force';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = ($f)($__global_Data_Unit_unit);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_LazyEvaluation_force'] = __NAMESPACE__ . '\\Test_LazyEvaluation_force';


// Test_LazyEvaluation_defer
function Test_LazyEvaluation_defer($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_LazyEvaluation_defer';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $f;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_LazyEvaluation_defer'] = __NAMESPACE__ . '\\Test_LazyEvaluation_defer';

// Test_LazyEvaluation_buildThunks
function Test_LazyEvaluation_buildThunks($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_LazyEvaluation_buildThunks';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Test_LazyEvaluation_defer = ($GLOBALS['Test_LazyEvaluation_defer'] ?? \Test\LazyEvaluation\phpurs_eval_thunk('Test_LazyEvaluation_defer'));
  $__global_Test_LazyEvaluation_force = ($GLOBALS['Test_LazyEvaluation_force'] ?? \Test\LazyEvaluation\phpurs_eval_thunk('Test_LazyEvaluation_force'));
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch ($__case_0) {
case 0:
$acc = $__case_1;
$__res = $acc;
goto __end;;
break;
default:
$n = $__case_0;
$acc = $__case_1;
$__tco_tmp_0 = ($n - 1);
$__tco_tmp_1 = ($__global_Test_LazyEvaluation_defer)(function($v2) use ($__global_Test_LazyEvaluation_force, $acc) {
  $__num = func_num_args();
  $__res = (($__global_Test_LazyEvaluation_force)($acc) + 1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Test_LazyEvaluation_buildThunks'] = __NAMESPACE__ . '\\Test_LazyEvaluation_buildThunks';

// Test_LazyEvaluation_runManyTimes
function Test_LazyEvaluation_runManyTimes($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_LazyEvaluation_runManyTimes';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Test_LazyEvaluation_force = ($GLOBALS['Test_LazyEvaluation_force'] ?? \Test\LazyEvaluation\phpurs_eval_thunk('Test_LazyEvaluation_force'));
  $__global_Test_LazyEvaluation_buildThunks = ($GLOBALS['Test_LazyEvaluation_buildThunks'] ?? \Test\LazyEvaluation\phpurs_eval_thunk('Test_LazyEvaluation_buildThunks'));
  $__global_Test_LazyEvaluation_defer = ($GLOBALS['Test_LazyEvaluation_defer'] ?? \Test\LazyEvaluation\phpurs_eval_thunk('Test_LazyEvaluation_defer'));
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch ($__case_0) {
case 0:
$acc = $__case_1;
$__res = $acc;
goto __end;;
break;
default:
$n = $__case_0;
$acc = $__case_1;
$__tco_tmp_0 = ($n - 1);
$__tco_tmp_1 = ($acc + ($__global_Test_LazyEvaluation_force)(($__global_Test_LazyEvaluation_buildThunks)(1000, ($__global_Test_LazyEvaluation_defer)(function($v2) {
  $__num = func_num_args();
  $__res = 0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}))));
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Test_LazyEvaluation_runManyTimes'] = __NAMESPACE__ . '\\Test_LazyEvaluation_runManyTimes';


