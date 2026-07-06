<?php

namespace App;

require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Test.Ackermann/index.php';
require_once __DIR__ . '/../Test.AstTree/index.php';
require_once __DIR__ . '/../Test.Church/index.php';
require_once __DIR__ . '/../Test.Fib/index.php';
require_once __DIR__ . '/../Test.LazyEvaluation/index.php';
require_once __DIR__ . '/../Test.ListOps/index.php';
require_once __DIR__ . '/../Test.Polymorphism/index.php';
require_once __DIR__ . '/../Test.Primes/index.php';
require_once __DIR__ . '/../Test.RBTree/index.php';
require_once __DIR__ . '/../Test.Records/index.php';
require_once __DIR__ . '/../Test.StateMonad/index.php';
require_once __DIR__ . '/../Test.TCO/index.php';

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
      case 'App_discard': $v = ((($GLOBALS['Control_Bind_discardUnit'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_discardUnit')))->discard)(($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect'))); break;
      case 'App_main': $v = (($GLOBALS['App_discard'] ?? \App\phpurs_eval_thunk('App_discard')))(($GLOBALS['Test_AstTree_describe'] ?? \Test\AstTree\phpurs_eval_thunk('Test_AstTree_describe')), function($__dollar____unused) {
  $__num = func_num_args();
  $__global_App_discard = ($GLOBALS['App_discard'] ?? \App\phpurs_eval_thunk('App_discard'));
  $__global_Test_AstTree_act = ($GLOBALS['Test_AstTree_act'] ?? \Test\AstTree\phpurs_eval_thunk('Test_AstTree_act'));
  $__global_Test_Fib_describe = ($GLOBALS['Test_Fib_describe'] ?? \Test\Fib\phpurs_eval_thunk('Test_Fib_describe'));
  $__global_Test_Fib_act = ($GLOBALS['Test_Fib_act'] ?? \Test\Fib\phpurs_eval_thunk('Test_Fib_act'));
  $__global_Test_ListOps_describe = ($GLOBALS['Test_ListOps_describe'] ?? \Test\ListOps\phpurs_eval_thunk('Test_ListOps_describe'));
  $__global_Test_ListOps_act = ($GLOBALS['Test_ListOps_act'] ?? \Test\ListOps\phpurs_eval_thunk('Test_ListOps_act'));
  $__global_Test_TCO_describe = ($GLOBALS['Test_TCO_describe'] ?? \Test\TCO\phpurs_eval_thunk('Test_TCO_describe'));
  $__global_Test_TCO_act = ($GLOBALS['Test_TCO_act'] ?? \Test\TCO\phpurs_eval_thunk('Test_TCO_act'));
  $__global_Test_Records_describe = ($GLOBALS['Test_Records_describe'] ?? \Test\Records\phpurs_eval_thunk('Test_Records_describe'));
  $__global_Test_Records_act = ($GLOBALS['Test_Records_act'] ?? \Test\Records\phpurs_eval_thunk('Test_Records_act'));
  $__global_Test_Ackermann_describe = ($GLOBALS['Test_Ackermann_describe'] ?? \Test\Ackermann\phpurs_eval_thunk('Test_Ackermann_describe'));
  $__global_Test_Ackermann_act = ($GLOBALS['Test_Ackermann_act'] ?? \Test\Ackermann\phpurs_eval_thunk('Test_Ackermann_act'));
  $__global_Test_Church_describe = ($GLOBALS['Test_Church_describe'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_describe'));
  $__global_Test_Church_act = ($GLOBALS['Test_Church_act'] ?? \Test\Church\phpurs_eval_thunk('Test_Church_act'));
  $__global_Test_Primes_describe = ($GLOBALS['Test_Primes_describe'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_describe'));
  $__global_Test_Primes_act = ($GLOBALS['Test_Primes_act'] ?? \Test\Primes\phpurs_eval_thunk('Test_Primes_act'));
  $__global_Test_RBTree_describe = ($GLOBALS['Test_RBTree_describe'] ?? \Test\RBTree\phpurs_eval_thunk('Test_RBTree_describe'));
  $__global_Test_RBTree_act = ($GLOBALS['Test_RBTree_act'] ?? \Test\RBTree\phpurs_eval_thunk('Test_RBTree_act'));
  $__global_Test_Polymorphism_describe = ($GLOBALS['Test_Polymorphism_describe'] ?? \Test\Polymorphism\phpurs_eval_thunk('Test_Polymorphism_describe'));
  $__global_Test_Polymorphism_act = ($GLOBALS['Test_Polymorphism_act'] ?? \Test\Polymorphism\phpurs_eval_thunk('Test_Polymorphism_act'));
  $__global_Test_StateMonad_describe = ($GLOBALS['Test_StateMonad_describe'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_describe'));
  $__global_Test_StateMonad_act = ($GLOBALS['Test_StateMonad_act'] ?? \Test\StateMonad\phpurs_eval_thunk('Test_StateMonad_act'));
  $__global_Test_LazyEvaluation_describe = ($GLOBALS['Test_LazyEvaluation_describe'] ?? \Test\LazyEvaluation\phpurs_eval_thunk('Test_LazyEvaluation_describe'));
  $__global_Test_LazyEvaluation_act = ($GLOBALS['Test_LazyEvaluation_act'] ?? \Test\LazyEvaluation\phpurs_eval_thunk('Test_LazyEvaluation_act'));
  $__res = ($__global_App_discard)($__global_Test_AstTree_act, function($__dollar____unused) use ($__global_App_discard, $__global_Test_Fib_describe, $__global_Test_Fib_act, $__global_Test_ListOps_describe, $__global_Test_ListOps_act, $__global_Test_TCO_describe, $__global_Test_TCO_act, $__global_Test_Records_describe, $__global_Test_Records_act, $__global_Test_Ackermann_describe, $__global_Test_Ackermann_act, $__global_Test_Church_describe, $__global_Test_Church_act, $__global_Test_Primes_describe, $__global_Test_Primes_act, $__global_Test_RBTree_describe, $__global_Test_RBTree_act, $__global_Test_Polymorphism_describe, $__global_Test_Polymorphism_act, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_Fib_describe, function($__dollar____unused) use ($__global_App_discard, $__global_Test_Fib_act, $__global_Test_ListOps_describe, $__global_Test_ListOps_act, $__global_Test_TCO_describe, $__global_Test_TCO_act, $__global_Test_Records_describe, $__global_Test_Records_act, $__global_Test_Ackermann_describe, $__global_Test_Ackermann_act, $__global_Test_Church_describe, $__global_Test_Church_act, $__global_Test_Primes_describe, $__global_Test_Primes_act, $__global_Test_RBTree_describe, $__global_Test_RBTree_act, $__global_Test_Polymorphism_describe, $__global_Test_Polymorphism_act, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_Fib_act, function($__dollar____unused) use ($__global_App_discard, $__global_Test_ListOps_describe, $__global_Test_ListOps_act, $__global_Test_TCO_describe, $__global_Test_TCO_act, $__global_Test_Records_describe, $__global_Test_Records_act, $__global_Test_Ackermann_describe, $__global_Test_Ackermann_act, $__global_Test_Church_describe, $__global_Test_Church_act, $__global_Test_Primes_describe, $__global_Test_Primes_act, $__global_Test_RBTree_describe, $__global_Test_RBTree_act, $__global_Test_Polymorphism_describe, $__global_Test_Polymorphism_act, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_ListOps_describe, function($__dollar____unused) use ($__global_App_discard, $__global_Test_ListOps_act, $__global_Test_TCO_describe, $__global_Test_TCO_act, $__global_Test_Records_describe, $__global_Test_Records_act, $__global_Test_Ackermann_describe, $__global_Test_Ackermann_act, $__global_Test_Church_describe, $__global_Test_Church_act, $__global_Test_Primes_describe, $__global_Test_Primes_act, $__global_Test_RBTree_describe, $__global_Test_RBTree_act, $__global_Test_Polymorphism_describe, $__global_Test_Polymorphism_act, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_ListOps_act, function($__dollar____unused) use ($__global_App_discard, $__global_Test_TCO_describe, $__global_Test_TCO_act, $__global_Test_Records_describe, $__global_Test_Records_act, $__global_Test_Ackermann_describe, $__global_Test_Ackermann_act, $__global_Test_Church_describe, $__global_Test_Church_act, $__global_Test_Primes_describe, $__global_Test_Primes_act, $__global_Test_RBTree_describe, $__global_Test_RBTree_act, $__global_Test_Polymorphism_describe, $__global_Test_Polymorphism_act, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_TCO_describe, function($__dollar____unused) use ($__global_App_discard, $__global_Test_TCO_act, $__global_Test_Records_describe, $__global_Test_Records_act, $__global_Test_Ackermann_describe, $__global_Test_Ackermann_act, $__global_Test_Church_describe, $__global_Test_Church_act, $__global_Test_Primes_describe, $__global_Test_Primes_act, $__global_Test_RBTree_describe, $__global_Test_RBTree_act, $__global_Test_Polymorphism_describe, $__global_Test_Polymorphism_act, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_TCO_act, function($__dollar____unused) use ($__global_App_discard, $__global_Test_Records_describe, $__global_Test_Records_act, $__global_Test_Ackermann_describe, $__global_Test_Ackermann_act, $__global_Test_Church_describe, $__global_Test_Church_act, $__global_Test_Primes_describe, $__global_Test_Primes_act, $__global_Test_RBTree_describe, $__global_Test_RBTree_act, $__global_Test_Polymorphism_describe, $__global_Test_Polymorphism_act, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_Records_describe, function($__dollar____unused) use ($__global_App_discard, $__global_Test_Records_act, $__global_Test_Ackermann_describe, $__global_Test_Ackermann_act, $__global_Test_Church_describe, $__global_Test_Church_act, $__global_Test_Primes_describe, $__global_Test_Primes_act, $__global_Test_RBTree_describe, $__global_Test_RBTree_act, $__global_Test_Polymorphism_describe, $__global_Test_Polymorphism_act, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_Records_act, function($__dollar____unused) use ($__global_App_discard, $__global_Test_Ackermann_describe, $__global_Test_Ackermann_act, $__global_Test_Church_describe, $__global_Test_Church_act, $__global_Test_Primes_describe, $__global_Test_Primes_act, $__global_Test_RBTree_describe, $__global_Test_RBTree_act, $__global_Test_Polymorphism_describe, $__global_Test_Polymorphism_act, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_Ackermann_describe, function($__dollar____unused) use ($__global_App_discard, $__global_Test_Ackermann_act, $__global_Test_Church_describe, $__global_Test_Church_act, $__global_Test_Primes_describe, $__global_Test_Primes_act, $__global_Test_RBTree_describe, $__global_Test_RBTree_act, $__global_Test_Polymorphism_describe, $__global_Test_Polymorphism_act, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_Ackermann_act, function($__dollar____unused) use ($__global_App_discard, $__global_Test_Church_describe, $__global_Test_Church_act, $__global_Test_Primes_describe, $__global_Test_Primes_act, $__global_Test_RBTree_describe, $__global_Test_RBTree_act, $__global_Test_Polymorphism_describe, $__global_Test_Polymorphism_act, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_Church_describe, function($__dollar____unused) use ($__global_App_discard, $__global_Test_Church_act, $__global_Test_Primes_describe, $__global_Test_Primes_act, $__global_Test_RBTree_describe, $__global_Test_RBTree_act, $__global_Test_Polymorphism_describe, $__global_Test_Polymorphism_act, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_Church_act, function($__dollar____unused) use ($__global_App_discard, $__global_Test_Primes_describe, $__global_Test_Primes_act, $__global_Test_RBTree_describe, $__global_Test_RBTree_act, $__global_Test_Polymorphism_describe, $__global_Test_Polymorphism_act, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_Primes_describe, function($__dollar____unused) use ($__global_App_discard, $__global_Test_Primes_act, $__global_Test_RBTree_describe, $__global_Test_RBTree_act, $__global_Test_Polymorphism_describe, $__global_Test_Polymorphism_act, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_Primes_act, function($__dollar____unused) use ($__global_App_discard, $__global_Test_RBTree_describe, $__global_Test_RBTree_act, $__global_Test_Polymorphism_describe, $__global_Test_Polymorphism_act, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_RBTree_describe, function($__dollar____unused) use ($__global_App_discard, $__global_Test_RBTree_act, $__global_Test_Polymorphism_describe, $__global_Test_Polymorphism_act, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_RBTree_act, function($__dollar____unused) use ($__global_App_discard, $__global_Test_Polymorphism_describe, $__global_Test_Polymorphism_act, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_Polymorphism_describe, function($__dollar____unused) use ($__global_App_discard, $__global_Test_Polymorphism_act, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_Polymorphism_act, function($__dollar____unused) use ($__global_App_discard, $__global_Test_StateMonad_describe, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_StateMonad_describe, function($__dollar____unused) use ($__global_App_discard, $__global_Test_StateMonad_act, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_StateMonad_act, function($__dollar____unused) use ($__global_App_discard, $__global_Test_LazyEvaluation_describe, $__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = ($__global_App_discard)($__global_Test_LazyEvaluation_describe, function($__dollar____unused) use ($__global_Test_LazyEvaluation_act) {
  $__num = func_num_args();
  $__res = $__global_Test_LazyEvaluation_act;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };




