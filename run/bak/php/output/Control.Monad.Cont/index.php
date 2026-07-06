<?php

namespace Control\Monad\Cont;

require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
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
      case 'Control_Monad_Cont_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Control_Monad_Cont_unwrap': $v = \Data\Newtype\Data_Newtype_unwrap(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };




// Control_Monad_Cont_withCont
function Control_Monad_Cont_withCont($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_withCont';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Cont_Trans_withContT = ($GLOBALS['Control_Monad_Cont_Trans_withContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_withContT'));
  $__global_Control_Monad_Cont_compose = ($GLOBALS['Control_Monad_Cont_compose'] ?? \Control\Monad\Cont\phpurs_eval_thunk('Control_Monad_Cont_compose'));
  $__global_Data_Identity_Identity = ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity'));
  $__global_Control_Monad_Cont_unwrap = ($GLOBALS['Control_Monad_Cont_unwrap'] ?? \Control\Monad\Cont\phpurs_eval_thunk('Control_Monad_Cont_unwrap'));
  $__res = ($__global_Control_Monad_Cont_Trans_withContT)(($__global_Control_Monad_Cont_compose)(($__global_Control_Monad_Cont_compose)($__global_Data_Identity_Identity), ($__global_Control_Monad_Cont_compose)($f, ($__global_Control_Monad_Cont_compose)($__global_Control_Monad_Cont_unwrap))));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_withCont'] = __NAMESPACE__ . '\\Control_Monad_Cont_withCont';

// Control_Monad_Cont_runCont
function Control_Monad_Cont_runCont($cc, $k = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_runCont';
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($cc, $__fn) { return $__fn($cc, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Control_Monad_Cont_unwrap = ($GLOBALS['Control_Monad_Cont_unwrap'] ?? \Control\Monad\Cont\phpurs_eval_thunk('Control_Monad_Cont_unwrap'));
  $__global_Control_Monad_Cont_Trans_runContT = ($GLOBALS['Control_Monad_Cont_Trans_runContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_runContT'));
  $__global_Control_Monad_Cont_compose = ($GLOBALS['Control_Monad_Cont_compose'] ?? \Control\Monad\Cont\phpurs_eval_thunk('Control_Monad_Cont_compose'));
  $__global_Data_Identity_Identity = ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity'));
  $__res = ($__global_Control_Monad_Cont_unwrap)(($__global_Control_Monad_Cont_Trans_runContT)($cc, ($__global_Control_Monad_Cont_compose)($__global_Data_Identity_Identity, $k)));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Cont_runCont'] = __NAMESPACE__ . '\\Control_Monad_Cont_runCont';

// Control_Monad_Cont_mapCont
function Control_Monad_Cont_mapCont($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_mapCont';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Cont_Trans_mapContT = ($GLOBALS['Control_Monad_Cont_Trans_mapContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_mapContT'));
  $__global_Control_Monad_Cont_compose = ($GLOBALS['Control_Monad_Cont_compose'] ?? \Control\Monad\Cont\phpurs_eval_thunk('Control_Monad_Cont_compose'));
  $__global_Data_Identity_Identity = ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity'));
  $__global_Control_Monad_Cont_unwrap = ($GLOBALS['Control_Monad_Cont_unwrap'] ?? \Control\Monad\Cont\phpurs_eval_thunk('Control_Monad_Cont_unwrap'));
  $__res = ($__global_Control_Monad_Cont_Trans_mapContT)(($__global_Control_Monad_Cont_compose)($__global_Data_Identity_Identity, ($__global_Control_Monad_Cont_compose)($f, $__global_Control_Monad_Cont_unwrap)));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_mapCont'] = __NAMESPACE__ . '\\Control_Monad_Cont_mapCont';

// Control_Monad_Cont_cont
function Control_Monad_Cont_cont($f, $c = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_cont';
  if ($__num < 2) {
    if ($__num === 1) return function($c) use ($f, $__fn) { return $__fn($f, $c); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Control_Monad_Cont_compose = ($GLOBALS['Control_Monad_Cont_compose'] ?? \Control\Monad\Cont\phpurs_eval_thunk('Control_Monad_Cont_compose'));
  $__global_Control_Monad_Cont_unwrap = ($GLOBALS['Control_Monad_Cont_unwrap'] ?? \Control\Monad\Cont\phpurs_eval_thunk('Control_Monad_Cont_unwrap'));
  $__res = ($f)(($__global_Control_Monad_Cont_compose)($__global_Control_Monad_Cont_unwrap, $c));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Cont_cont'] = __NAMESPACE__ . '\\Control_Monad_Cont_cont';

