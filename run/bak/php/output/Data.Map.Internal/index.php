<?php

namespace Data\Map\Internal;

// ALL IMPORTS: Control.Alt, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Plus, Control.Semigroupoid, Data.Boolean, Data.Eq, Data.Foldable, Data.FoldableWithIndex, Data.Function, Data.Function.Uncurried, Data.Functor, Data.FunctorWithIndex, Data.HeytingAlgebra, Data.List, Data.List.Types, Data.Map.Internal, Data.Maybe, Data.Monoid, Data.Ord, Data.Ordering, Data.Ring, Data.Semigroup, Data.Semiring, Data.Show, Data.Traversable, Data.TraversableWithIndex, Data.Tuple, Data.Unfoldable, Data.Unit, Prelude, Prim, Prim.TypeError
// TO REQUIRE: Control.Alt, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Plus, Control.Semigroupoid, Data.Boolean, Data.Eq, Data.Foldable, Data.FoldableWithIndex, Data.Function, Data.Function.Uncurried, Data.Functor, Data.FunctorWithIndex, Data.HeytingAlgebra, Data.List, Data.List.Types, Data.Map.Internal, Data.Maybe, Data.Monoid, Data.Ord, Data.Ordering, Data.Ring, Data.Semigroup, Data.Semiring, Data.Show, Data.Traversable, Data.TraversableWithIndex, Data.Tuple, Data.Unfoldable, Data.Unit, Prelude
require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $value0; public function __construct($t, $value0) { $this->tag = $t; $this->value0 = $value0; } }
  class Phpurs_Data2 { public $tag; public $value0, $value1; public function __construct($t, $value0, $value1) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; } }
  class Phpurs_Data3 { public $tag; public $value0, $value1, $value2; public function __construct($t, $value0, $value1, $value2) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; $this->value2 = $value2; } }
  class Phpurs_Data4 { public $tag; public $value0, $value1, $value2, $value3; public function __construct($t, $value0, $value1, $value2, $value3) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; $this->value2 = $value2; $this->value3 = $value3; } }
  class Phpurs_Data5 { public $tag; public $value0, $value1, $value2, $value3, $value4; public function __construct($t, $value0, $value1, $value2, $value3, $value4) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; $this->value2 = $value2; $this->value3 = $value3; $this->value4 = $value4; } }
  class Phpurs_Data6 { public $tag; public $value0, $value1, $value2, $value3, $value4, $value5; public function __construct($t, $value0, $value1, $value2, $value3, $value4, $value5) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; $this->value2 = $value2; $this->value3 = $value3; $this->value4 = $value4; $this->value5 = $value5; } }
}
if (!\function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - \count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num > 1) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = \array_merge($args, $more);
      if (\count($merged) >= $expected) {
        $res = $fn(...\array_slice($merged, 0, $expected));
        if (\count($merged) > $expected) {
          return $res(...\array_slice($merged, $expected));
        }
        return $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
\PhpursThunks::$thunks['Data_Map_Internal_abs'] = function() { $v = ((($GLOBALS['Data_Ord_abs'] ?? \PhpursThunks::eval('Data_Ord_abs')))(($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt'))))(($GLOBALS['Data_Ring_ringInt'] ?? \PhpursThunks::eval('Data_Ring_ringInt'))); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_Leaf'] = function() { $v = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_Node'] = function() { $v = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 6);
  }
  $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  goto __end;;
  __end:
  return $__num > 6 ? $__res(...\array_slice(\func_get_args(), 6)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_IterLeaf'] = function() { $v = ($GLOBALS['__phpurs_data0_IterLeaf'] ??= new Phpurs_Data0("IterLeaf")); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_IterEmit'] = function() { $v = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("IterEmit", $value0, $value1, $value2);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_IterNode'] = function() { $v = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("IterNode", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_IterDone'] = function() { $v = ($GLOBALS['__phpurs_data0_IterDone'] ??= new Phpurs_Data0("IterDone")); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_IterNext'] = function() { $v = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("IterNext", $value0, $value1, $value2);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_Split'] = function() { $v = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("Split", $value0, $value1, $value2);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_SplitLast'] = function() { $v = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("SplitLast", $value0, $value1, $value2);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_unsafeNode'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_mkFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn4')))((function() {
  $__fn = function($k, $v = null, $l = null, $r = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  if ((is_object($l) && (($l)->tag === "Leaf"))) {
if ((is_object($r) && (($r)->tag === "Leaf"))) {
$__t1 = new Phpurs_Data6("Node", 1, 1, $k, $v, $l, $r);
} else {
if ((is_object($r) && (($r)->tag === "Node"))) {
$__t1 = new Phpurs_Data6("Node", ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(1))(($r)->value0), ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(1))(($r)->value1), $k, $v, $l, $r);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
$__t0 = $__t1;
} else {
if ((is_object($l) && (($l)->tag === "Node"))) {
if ((is_object($r) && (($r)->tag === "Leaf"))) {
$__t2 = new Phpurs_Data6("Node", ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(1))(($l)->value0), ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(1))(($l)->value1), $k, $v, $l, $r);
} else {
if ((is_object($r) && (($r)->tag === "Node"))) {
if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($l)->value0))(($r)->value0)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($l)->value0))(($r)->value0))->tag === "GT"))) {
$__t3 = ($l)->value0;
} else {
$__t3 = ($r)->value0;
};
$__t2 = new Phpurs_Data6("Node", ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(1))($__t3), ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(1))(($l)->value1)))(($r)->value1), $k, $v, $l, $r);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
$__t0 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_toMapIter'] = function() { $v = function($a) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("IterNode", $a, new Phpurs_Data0("IterLeaf"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_stepWith'] = function() { $v = (function() {
  $__fn = function($f, $next = null, $done = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $go = null;
  $go = function($v) use (&$done, &$f, &$go, &$next) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "IterLeaf"))) {
$__t0 = ($done)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
} else {
if ((is_object($v) && (($v)->tag === "IterEmit"))) {
$__t0 = ((((($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))($next))(($v)->value0))(($v)->value1))(($v)->value2);
} else {
if ((is_object($v) && (($v)->tag === "IterNode"))) {
$__t0 = ($go)((($f)(($v)->value1))(($v)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_size'] = function() { $v = function($v) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = 0;
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$__t0 = ($v)->value1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_singleton'] = function() { $v = (function() {
  $__fn = function($k, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data6("Node", 1, 1, $k, $v, new Phpurs_Data0("Leaf"), new Phpurs_Data0("Leaf"));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_unsafeBalancedNode'] = function() { $v = (function() use (&$__fn) {
$rotateLeft_2 = (($GLOBALS['Data_Function_Uncurried_mkFn7'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn7')))((function() {
  $__fn = function($k, $v = null, $l = null, $rk = null, $rv = null, $rl = null, $rr = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 7);
  }
  if ((function() use ($rl, $rr, &$__fn) {
if ((is_object($rr) && (($rr)->tag === "Leaf"))) {
$__t1 = 0;
} else {
if ((is_object($rr) && (($rr)->tag === "Node"))) {
$__t1 = ($rr)->value0;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
return ((is_object($rl) && (($rl)->tag === "Node")) && (is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($rl)->value0))($__t1)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($rl)->value0))($__t1))->tag === "GT")));
})()) {
$__t0 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeNode'))))(($rl)->value2))(($rl)->value3))((((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeNode'))))($k))($v))($l))(($rl)->value4)))((((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeNode'))))($rk))($rv))(($rl)->value5))($rr));
} else {
$__t0 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeNode'))))($rk))($rv))((((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeNode'))))($k))($v))($l))($rl)))($rr);
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 7 ? $__res(...\array_slice(\func_get_args(), 7)) : $__res;
  };
  return $__fn;
})());
$rotateRight_5 = (($GLOBALS['Data_Function_Uncurried_mkFn7'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn7')))((function() {
  $__fn = function($k, $v = null, $lk = null, $lv = null, $ll = null, $lr = null, $r = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 7);
  }
  if ((function() use ($ll, $lr, &$__fn) {
if ((is_object($ll) && (($ll)->tag === "Leaf"))) {
$__t4 = 0;
} else {
if ((is_object($ll) && (($ll)->tag === "Node"))) {
$__t4 = ($ll)->value0;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
};
return ((is_object($lr) && (($lr)->tag === "Node")) && ( ! (is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($__t4))(($lr)->value0)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($__t4))(($lr)->value0))->tag === "GT"))));
})()) {
$__t3 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeNode'))))(($lr)->value2))(($lr)->value3))((((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeNode'))))($lk))($lv))($ll))(($lr)->value4)))((((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeNode'))))($k))($v))(($lr)->value5))($r));
} else {
$__t3 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeNode'))))($lk))($lv))($ll))((((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeNode'))))($k))($v))($lr))($r));
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 7 ? $__res(...\array_slice(\func_get_args(), 7)) : $__res;
  };
  return $__fn;
})());
return (($GLOBALS['Data_Function_Uncurried_mkFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn4')))((function() use (&$rotateLeft_2, &$rotateRight_5) {
  $__fn = function($k, $v = null, $l = null, $r = null) use (&$rotateLeft_2, &$rotateRight_5, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  if ((is_object($l) && (($l)->tag === "Leaf"))) {
if ((is_object($r) && (($r)->tag === "Leaf"))) {
$__t7 = new Phpurs_Data6("Node", 1, 1, $k, $v, new Phpurs_Data0("Leaf"), new Phpurs_Data0("Leaf"));
} else {
if (((is_object($r) && (($r)->tag === "Node")) && (is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($r)->value0))(1)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($r)->value0))(1))->tag === "GT")))) {
$__t7 = ((((((((($GLOBALS['Data_Function_Uncurried_runFn7'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn7')))($rotateLeft_2))($k))($v))($l))(($r)->value2))(($r)->value3))(($r)->value4))(($r)->value5);
} else {
$__t7 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeNode'))))($k))($v))($l))($r);
};
};
$__t6 = $__t7;
} else {
if ((is_object($l) && (($l)->tag === "Node"))) {
if ((is_object($r) && (($r)->tag === "Node"))) {
if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($r)->value0))(((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(($l)->value0))(1))) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($r)->value0))(((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(($l)->value0))(1)))->tag === "GT"))) {
$__t9 = ((((((((($GLOBALS['Data_Function_Uncurried_runFn7'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn7')))($rotateLeft_2))($k))($v))($l))(($r)->value2))(($r)->value3))(($r)->value4))(($r)->value5);
} else {
if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($l)->value0))(((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(($r)->value0))(1))) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($l)->value0))(((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(($r)->value0))(1)))->tag === "GT"))) {
$__t9 = ((((((((($GLOBALS['Data_Function_Uncurried_runFn7'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn7')))($rotateRight_5))($k))($v))(($l)->value2))(($l)->value3))(($l)->value4))(($l)->value5))($r);
} else {
$__t9 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeNode'))))($k))($v))($l))($r);
};
};
$__t8 = $__t9;
} else {
if (((is_object($r) && (($r)->tag === "Leaf")) && (is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($l)->value0))(1)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($l)->value0))(1))->tag === "GT")))) {
$__t8 = ((((((((($GLOBALS['Data_Function_Uncurried_runFn7'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn7')))($rotateRight_5))($k))($v))(($l)->value2))(($l)->value3))(($l)->value4))(($l)->value5))($r);
} else {
$__t8 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeNode'))))($k))($v))($l))($r);
};
};
$__t6 = $__t8;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
  $__res = $__t6;
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})());
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_unsafeSplit'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn3')))((function() {
  $__fn = function($comp, $k = null, $m = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($m) && (($m)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data3("Split", new Phpurs_Data0("Nothing"), new Phpurs_Data0("Leaf"), new Phpurs_Data0("Leaf"));
} else {
if ((is_object($m) && (($m)->tag === "Node"))) {
$v_1 = (($comp)($k))(($m)->value2);
if ((is_object($v_1) && (($v_1)->tag === "LT"))) {
$v1_3 = ((((($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeSplit'))))($comp))($k))(($m)->value4);
$__t2 = new Phpurs_Data3("Split", ($v1_3)->value0, ($v1_3)->value1, (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))(($m)->value2))(($m)->value3))(($v1_3)->value2))(($m)->value5));
} else {
if ((is_object($v_1) && (($v_1)->tag === "GT"))) {
$v1_4 = ((((($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeSplit'))))($comp))($k))(($m)->value5);
$__t2 = new Phpurs_Data3("Split", ($v1_4)->value0, (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))(($m)->value2))(($m)->value3))(($m)->value4))(($v1_4)->value1), ($v1_4)->value2);
} else {
if ((is_object($v_1) && (($v_1)->tag === "EQ"))) {
$__t2 = new Phpurs_Data3("Split", new Phpurs_Data1("Just", ($m)->value3), ($m)->value4, ($m)->value5);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
};
$__t0 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_unsafeSplitLast'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_mkFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn4')))((function() {
  $__fn = function($k, $v = null, $l = null, $r = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  if ((is_object($r) && (($r)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data3("SplitLast", $k, $v, $l);
} else {
if ((is_object($r) && (($r)->tag === "Node"))) {
$v1_1 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeSplitLast'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeSplitLast'))))(($r)->value2))(($r)->value3))(($r)->value4))(($r)->value5);
$__t0 = new Phpurs_Data3("SplitLast", ($v1_1)->value0, ($v1_1)->value1, (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))($k))($v))($l))(($v1_1)->value2));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_unsafeJoinNodes'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_mkFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn2')))((function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = $v1;
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$v2_1 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeSplitLast'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeSplitLast'))))(($v)->value2))(($v)->value3))(($v)->value4))(($v)->value5);
$__t0 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))(($v2_1)->value0))(($v2_1)->value1))(($v2_1)->value2))($v1);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_unsafeDifference'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn3')))((function() {
  $__fn = function($comp, $l = null, $r = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($l) && (($l)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data0("Leaf");
} else {
if ((is_object($r) && (($r)->tag === "Leaf"))) {
$__t0 = $l;
} else {
if ((is_object($r) && (($r)->tag === "Node"))) {
$v_1 = ((((($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeSplit'))))($comp))(($r)->value2))($l);
$__t0 = (((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeJoinNodes'))))(((((($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Map_Internal_unsafeDifference'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeDifference'))))($comp))(($v_1)->value1))(($r)->value4)))(((((($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Map_Internal_unsafeDifference'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeDifference'))))($comp))(($v_1)->value2))(($r)->value5));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_unsafeIntersectionWith'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_mkFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn4')))((function() {
  $__fn = function($comp, $app = null, $l = null, $r = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  if ((is_object($l) && (($l)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data0("Leaf");
} else {
if ((is_object($r) && (($r)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data0("Leaf");
} else {
if ((is_object($r) && (($r)->tag === "Node"))) {
$v_1 = ((((($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeSplit'))))($comp))(($r)->value2))($l);
$l__prime___2 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeIntersectionWith'))))($comp))($app))(($v_1)->value1))(($r)->value4);
$r__prime___3 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeIntersectionWith'))))($comp))($app))(($v_1)->value2))(($r)->value5);
if ((is_object(($v_1)->value0) && ((($v_1)->value0)->tag === "Just"))) {
$__t4 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))(($r)->value2))((($app)((($v_1)->value0)->value0))(($r)->value3)))($l__prime___2))($r__prime___3);
} else {
if ((is_object(($v_1)->value0) && ((($v_1)->value0)->tag === "Nothing"))) {
$__t4 = (((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeJoinNodes'))))($l__prime___2))($r__prime___3);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
};
$__t0 = $__t4;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_unsafeUnionWith'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_mkFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn4')))((function() {
  $__fn = function($comp, $app = null, $l = null, $r = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  if ((is_object($l) && (($l)->tag === "Leaf"))) {
$__t0 = $r;
} else {
if ((is_object($r) && (($r)->tag === "Leaf"))) {
$__t0 = $l;
} else {
if ((is_object($r) && (($r)->tag === "Node"))) {
$v_1 = ((((($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeSplit'))))($comp))(($r)->value2))($l);
$l__prime___2 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeUnionWith'))))($comp))($app))(($v_1)->value1))(($r)->value4);
$r__prime___3 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeUnionWith'))))($comp))($app))(($v_1)->value2))(($r)->value5);
if ((is_object(($v_1)->value0) && ((($v_1)->value0)->tag === "Just"))) {
$__t4 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))(($r)->value2))((($app)((($v_1)->value0)->value0))(($r)->value3)))($l__prime___2))($r__prime___3);
} else {
if ((is_object(($v_1)->value0) && ((($v_1)->value0)->tag === "Nothing"))) {
$__t4 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))(($r)->value2))(($r)->value3))($l__prime___2))($r__prime___3);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
};
$__t0 = $__t4;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_unionWith'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = (function() use (&$compare_0) {
  $__fn = function($app, $m1 = null, $m2 = null) use (&$compare_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeUnionWith'))))($compare_0))($app))($m1))($m2);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_union'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = (function() use (&$compare_0) {
  $__fn = function($m1, $m2 = null) use (&$compare_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeUnionWith'))))($compare_0))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const'))))($m1))($m2);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_update'] = function() { $v = (function() {
  $__fn = function($dictOrd, $f = null, $k = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $go = null;
  $go = function($v) use (&$dictOrd, &$f, &$go, &$k) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data0("Leaf");
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$v1_1 = ((($dictOrd)->compare)($k))(($v)->value2);
if ((is_object($v1_1) && (($v1_1)->tag === "LT"))) {
$__t2 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))(($v)->value2))(($v)->value3))(($go)(($v)->value4)))(($v)->value5);
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "GT"))) {
$__t2 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))(($v)->value2))(($v)->value3))(($v)->value4))(($go)(($v)->value5));
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "EQ"))) {
$v2_3 = ($f)(($v)->value3);
if ((is_object($v2_3) && (($v2_3)->tag === "Nothing"))) {
$__t4 = (((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeJoinNodes'))))(($v)->value4))(($v)->value5);
} else {
if ((is_object($v2_3) && (($v2_3)->tag === "Just"))) {
$__t4 = new Phpurs_Data6("Node", ($v)->value0, ($v)->value1, ($v)->value2, ($v2_3)->value0, ($v)->value4, ($v)->value5);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
};
$__t2 = $__t4;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
};
$__t0 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_showTree'] = function() { $v = (function() {
  $__fn = function($dictShow, $dictShow1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = (function() use (&$dictShow, &$dictShow1, &$go) {
  $__fn = function($ind, $v = null) use (&$dictShow, &$dictShow1, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))($ind))("Leaf");
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$__t0 = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))($ind))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("["))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($GLOBALS['Data_Show_showIntImpl'] ?? \PhpursThunks::eval('Data_Show_showIntImpl')))(($v)->value0)))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("] "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow)->show)(($v)->value2)))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))(" => "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow1)->show)(($v)->value3)))("
")))))))))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($go)(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))($ind))("    ")))(($v)->value4)))("
")))((($go)(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))($ind))("    ")))(($v)->value5)));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($go)("");
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_semigroupMap'] = function() { $v = (function() {
  $__fn = function($dollar__unused_0, $dictOrd = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $compare_0 = ($dictOrd)->compare;
  $__res = function($dictSemigroup) use (&$compare_0) {
  $__num = \func_num_args();
  $__local_var_1 = ($dictSemigroup)->append;
  $__res = (object)["append" => (function() use (&$__local_var_1, &$compare_0) {
  $__fn = function($m1, $m2 = null) use (&$__local_var_1, &$compare_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeUnionWith'))))($compare_0))($__local_var_1))($m1))($m2);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_pop'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = (function() use (&$compare_0) {
  $__fn = function($k, $m = null) use (&$compare_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v_1 = ((((($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeSplit'))))($compare_0))($k))($m);
  if ((is_object(($v_1)->value0) && ((($v_1)->value0)->tag === "Just"))) {
$__t2 = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", (($v_1)->value0)->value0, (((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeJoinNodes'))))(($v_1)->value1))(($v_1)->value2)));
} else {
$__t2 = new Phpurs_Data0("Nothing");
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_member'] = function() { $v = (function() {
  $__fn = function($dictOrd, $k = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = function($v) use (&$dictOrd, &$go, &$k) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = false;
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$v1_1 = ((($dictOrd)->compare)($k))(($v)->value2);
if ((is_object($v1_1) && (($v1_1)->tag === "LT"))) {
$__t2 = ($go)(($v)->value4);
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "GT"))) {
$__t2 = ($go)(($v)->value5);
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "EQ"))) {
$__t2 = true;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
};
$__t0 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_mapMaybeWithKey'] = function() { $v = (function() {
  $__fn = function($dictOrd, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = function($v) use (&$f, &$go) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data0("Leaf");
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$v2_1 = (($f)(($v)->value2))(($v)->value3);
if ((is_object($v2_1) && (($v2_1)->tag === "Just"))) {
$__t2 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))(($v)->value2))(($v2_1)->value0))(($go)(($v)->value4)))(($go)(($v)->value5));
} else {
if ((is_object($v2_1) && (($v2_1)->tag === "Nothing"))) {
$__t2 = (((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeJoinNodes'))))(($go)(($v)->value4)))(($go)(($v)->value5));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
$__t0 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_mapMaybe'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Map_Internal_mapMaybeWithKey'] ?? \PhpursThunks::eval('Data_Map_Internal_mapMaybeWithKey')))($dictOrd)))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_lookupLE'] = function() { $v = (function() {
  $__fn = function($dictOrd, $k = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = function($v) use (&$dictOrd, &$go, &$k) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$v1_1 = ((($dictOrd)->compare)($k))(($v)->value2);
if ((is_object($v1_1) && (($v1_1)->tag === "LT"))) {
$__t2 = ($go)(($v)->value4);
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "GT"))) {
$v2_3 = ($go)(($v)->value5);
if ((is_object($v2_3) && (($v2_3)->tag === "Nothing"))) {
$__t4 = new Phpurs_Data1("Just", (object)["key" => ($v)->value2, "value" => ($v)->value3]);
} else {
$__t4 = $v2_3;
};
$__t2 = $__t4;
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "EQ"))) {
$__t2 = new Phpurs_Data1("Just", (object)["key" => ($v)->value2, "value" => ($v)->value3]);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
};
$__t0 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_lookupGE'] = function() { $v = (function() {
  $__fn = function($dictOrd, $k = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = function($v) use (&$dictOrd, &$go, &$k) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$v1_1 = ((($dictOrd)->compare)($k))(($v)->value2);
if ((is_object($v1_1) && (($v1_1)->tag === "LT"))) {
$v2_3 = ($go)(($v)->value4);
if ((is_object($v2_3) && (($v2_3)->tag === "Nothing"))) {
$__t4 = new Phpurs_Data1("Just", (object)["key" => ($v)->value2, "value" => ($v)->value3]);
} else {
$__t4 = $v2_3;
};
$__t2 = $__t4;
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "GT"))) {
$__t2 = ($go)(($v)->value5);
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "EQ"))) {
$__t2 = new Phpurs_Data1("Just", (object)["key" => ($v)->value2, "value" => ($v)->value3]);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
};
$__t0 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_lookup'] = function() { $v = (function() {
  $__fn = function($dictOrd, $k = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = function($v) use (&$dictOrd, &$go, &$k) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$v1_1 = ((($dictOrd)->compare)($k))(($v)->value2);
if ((is_object($v1_1) && (($v1_1)->tag === "LT"))) {
$__t2 = ($go)(($v)->value4);
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "GT"))) {
$__t2 = ($go)(($v)->value5);
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "EQ"))) {
$__t2 = new Phpurs_Data1("Just", ($v)->value3);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
};
$__t0 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_iterMapU'] = function() { $v = (function() {
  $__fn = function($iter, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = $iter;
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
if ((is_object(($v)->value4) && ((($v)->value4)->tag === "Leaf"))) {
if ((is_object(($v)->value5) && ((($v)->value5)->tag === "Leaf"))) {
$__t2 = new Phpurs_Data3("IterEmit", ($v)->value2, ($v)->value3, $iter);
} else {
$__t2 = new Phpurs_Data3("IterEmit", ($v)->value2, ($v)->value3, new Phpurs_Data2("IterNode", ($v)->value5, $iter));
};
$__t1 = $__t2;
} else {
if ((is_object(($v)->value5) && ((($v)->value5)->tag === "Leaf"))) {
$__t1 = new Phpurs_Data3("IterEmit", ($v)->value2, ($v)->value3, new Phpurs_Data2("IterNode", ($v)->value4, $iter));
} else {
$__t1 = new Phpurs_Data3("IterEmit", ($v)->value2, ($v)->value3, new Phpurs_Data2("IterNode", ($v)->value4, new Phpurs_Data2("IterNode", ($v)->value5, $iter)));
};
};
$__t0 = $__t1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_stepUnorderedCps'] = function() { $v = (($GLOBALS['Data_Map_Internal_stepWith'] ?? \PhpursThunks::eval('Data_Map_Internal_stepWith')))(($GLOBALS['Data_Map_Internal_iterMapU'] ?? \PhpursThunks::eval('Data_Map_Internal_iterMapU'))); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_stepUnfoldrUnordered'] = function() { $v = (((($GLOBALS['Data_Map_Internal_stepWith'] ?? \PhpursThunks::eval('Data_Map_Internal_stepWith')))(($GLOBALS['Data_Map_Internal_iterMapU'] ?? \PhpursThunks::eval('Data_Map_Internal_iterMapU'))))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn3')))((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", new Phpurs_Data2("Tuple", $k, $v), $next));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())))(function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data0("Nothing");
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_toUnfoldableUnordered'] = function() { $v = function($dictUnfoldable) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($dictUnfoldable)->unfoldr)(($GLOBALS['Data_Map_Internal_stepUnfoldrUnordered'] ?? \PhpursThunks::eval('Data_Map_Internal_stepUnfoldrUnordered')))))(($GLOBALS['Data_Map_Internal_toMapIter'] ?? \PhpursThunks::eval('Data_Map_Internal_toMapIter')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_stepUnordered'] = function() { $v = (((($GLOBALS['Data_Map_Internal_stepWith'] ?? \PhpursThunks::eval('Data_Map_Internal_stepWith')))(($GLOBALS['Data_Map_Internal_iterMapU'] ?? \PhpursThunks::eval('Data_Map_Internal_iterMapU'))))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn3')))((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("IterNext", $k, $v, $next);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())))(function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data0("IterDone");
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_iterMapR'] = function() { $v = (function() use (&$__fn) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($iter, $v = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = $iter;
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
if ((is_object(($v)->value5) && ((($v)->value5)->tag === "Leaf"))) {
$__t1 = (($go)(new Phpurs_Data3("IterEmit", ($v)->value2, ($v)->value3, $iter)))(($v)->value4);
} else {
$__t1 = (($go)(new Phpurs_Data3("IterEmit", ($v)->value2, ($v)->value3, new Phpurs_Data2("IterNode", ($v)->value4, $iter))))(($v)->value5);
};
$__t0 = $__t1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return $go;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_stepDescCps'] = function() { $v = (($GLOBALS['Data_Map_Internal_stepWith'] ?? \PhpursThunks::eval('Data_Map_Internal_stepWith')))(($GLOBALS['Data_Map_Internal_iterMapR'] ?? \PhpursThunks::eval('Data_Map_Internal_iterMapR'))); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_stepDesc'] = function() { $v = (((($GLOBALS['Data_Map_Internal_stepWith'] ?? \PhpursThunks::eval('Data_Map_Internal_stepWith')))(($GLOBALS['Data_Map_Internal_iterMapR'] ?? \PhpursThunks::eval('Data_Map_Internal_iterMapR'))))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn3')))((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("IterNext", $k, $v, $next);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())))(function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data0("IterDone");
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_iterMapL'] = function() { $v = (function() use (&$__fn) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($iter, $v = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = $iter;
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
if ((is_object(($v)->value5) && ((($v)->value5)->tag === "Leaf"))) {
$__t1 = (($go)(new Phpurs_Data3("IterEmit", ($v)->value2, ($v)->value3, $iter)))(($v)->value4);
} else {
$__t1 = (($go)(new Phpurs_Data3("IterEmit", ($v)->value2, ($v)->value3, new Phpurs_Data2("IterNode", ($v)->value5, $iter))))(($v)->value4);
};
$__t0 = $__t1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return $go;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_stepAscCps'] = function() { $v = (($GLOBALS['Data_Map_Internal_stepWith'] ?? \PhpursThunks::eval('Data_Map_Internal_stepWith')))(($GLOBALS['Data_Map_Internal_iterMapL'] ?? \PhpursThunks::eval('Data_Map_Internal_iterMapL'))); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_stepAsc'] = function() { $v = (((($GLOBALS['Data_Map_Internal_stepWith'] ?? \PhpursThunks::eval('Data_Map_Internal_stepWith')))(($GLOBALS['Data_Map_Internal_iterMapL'] ?? \PhpursThunks::eval('Data_Map_Internal_iterMapL'))))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn3')))((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("IterNext", $k, $v, $next);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())))(function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data0("IterDone");
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_eqMapIter'] = function() { $v = (function() {
  $__fn = function($dictEq, $dictEq1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = (function() use (&$dictEq, &$dictEq1, &$go) {
  $__fn = function($a, $b = null) use (&$dictEq, &$dictEq1, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v_0 = (($GLOBALS['Data_Map_Internal_stepAsc'] ?? \PhpursThunks::eval('Data_Map_Internal_stepAsc')))($a);
  if ((is_object($v_0) && (($v_0)->tag === "IterNext"))) {
$v2_2 = (($GLOBALS['Data_Map_Internal_stepAsc'] ?? \PhpursThunks::eval('Data_Map_Internal_stepAsc')))($b);
$__t1 = ((is_object($v2_2) && (($v2_2)->tag === "IterNext")) && (((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(((($dictEq)->eq)(($v_0)->value0))(($v2_2)->value0)))(((($dictEq1)->eq)(($v_0)->value1))(($v2_2)->value1)) && (($go)(($v_0)->value2))(($v2_2)->value2)));
} else {
if ((is_object($v_0) && (($v_0)->tag === "IterDone"))) {
$__t1 = true;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = (object)["eq" => $go];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_ordMapIter'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $eqMapIter1_0 = (($GLOBALS['Data_Map_Internal_eqMapIter'] ?? \PhpursThunks::eval('Data_Map_Internal_eqMapIter')))((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictOrd1) use (&$dictOrd, &$eqMapIter1_0) {
  $__num = \func_num_args();
  $eqMapIter2_1 = ($eqMapIter1_0)((($dictOrd1)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $go = null;
  $go = (function() use (&$dictOrd, &$dictOrd1, &$go) {
  $__fn = function($a, $b = null) use (&$dictOrd, &$dictOrd1, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v_2 = (($GLOBALS['Data_Map_Internal_stepAsc'] ?? \PhpursThunks::eval('Data_Map_Internal_stepAsc')))($b);
  $v1_3 = (($GLOBALS['Data_Map_Internal_stepAsc'] ?? \PhpursThunks::eval('Data_Map_Internal_stepAsc')))($a);
  if ((is_object($v1_3) && (($v1_3)->tag === "IterNext"))) {
if ((is_object($v_2) && (($v_2)->tag === "IterNext"))) {
$v3_6 = ((($dictOrd)->compare)(($v1_3)->value0))(($v_2)->value0);
if ((is_object($v3_6) && (($v3_6)->tag === "EQ"))) {
$v4_8 = ((($dictOrd1)->compare)(($v1_3)->value1))(($v_2)->value1);
if ((is_object($v4_8) && (($v4_8)->tag === "EQ"))) {
$__t9 = (($go)(($v1_3)->value2))(($v_2)->value2);
} else {
$__t9 = $v4_8;
};
$__t7 = $__t9;
} else {
$__t7 = $v3_6;
};
$__t5 = $__t7;
} else {
if ((is_object($v_2) && (($v_2)->tag === "IterDone"))) {
$__t5 = new Phpurs_Data0("GT");
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t5 = null;
};
};
$__t4 = $__t5;
} else {
if ((is_object($v1_3) && (($v1_3)->tag === "IterDone"))) {
if ((is_object($v_2) && (($v_2)->tag === "IterDone"))) {
$__t10 = new Phpurs_Data0("EQ");
} else {
$__t10 = new Phpurs_Data0("LT");
};
$__t4 = $__t10;
} else {
if ((is_object($v_2) && (($v_2)->tag === "IterDone"))) {
$__t4 = new Phpurs_Data0("GT");
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
};
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = (object)["compare" => $go, "Eq0" => function($dollar__unused_0) use (&$eqMapIter2_1) {
  $__num = \func_num_args();
  $__res = $eqMapIter2_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_stepUnfoldr'] = function() { $v = (((($GLOBALS['Data_Map_Internal_stepWith'] ?? \PhpursThunks::eval('Data_Map_Internal_stepWith')))(($GLOBALS['Data_Map_Internal_iterMapL'] ?? \PhpursThunks::eval('Data_Map_Internal_iterMapL'))))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn3')))((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", new Phpurs_Data2("Tuple", $k, $v), $next));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())))(function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data0("Nothing");
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_toUnfoldable'] = function() { $v = function($dictUnfoldable) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($dictUnfoldable)->unfoldr)(($GLOBALS['Data_Map_Internal_stepUnfoldr'] ?? \PhpursThunks::eval('Data_Map_Internal_stepUnfoldr')))))(($GLOBALS['Data_Map_Internal_toMapIter'] ?? \PhpursThunks::eval('Data_Map_Internal_toMapIter')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_toUnfoldable1'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Unfoldable_unfoldableArray'] ?? \PhpursThunks::eval('Data_Unfoldable_unfoldableArray')))->unfoldr)(($GLOBALS['Data_Map_Internal_stepUnfoldr'] ?? \PhpursThunks::eval('Data_Map_Internal_stepUnfoldr')))))(($GLOBALS['Data_Map_Internal_toMapIter'] ?? \PhpursThunks::eval('Data_Map_Internal_toMapIter'))); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_showMap'] = function() { $v = (function() {
  $__fn = function($dictShow, $dictShow1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $show1_0 = (($GLOBALS['Data_Show_showArrayImpl'] ?? \PhpursThunks::eval('Data_Show_showArrayImpl')))((((($GLOBALS['Data_Tuple_showTuple'] ?? \PhpursThunks::eval('Data_Tuple_showTuple')))($dictShow))($dictShow1))->show);
  $__res = (object)["show" => function($as) use (&$show1_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(fromFoldable "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))(($show1_0)((($GLOBALS['Data_Map_Internal_toUnfoldable1'] ?? \PhpursThunks::eval('Data_Map_Internal_toUnfoldable1')))($as))))(")"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_isSubmap'] = function() { $v = (function() {
  $__fn = function($dictOrd, $dictEq = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = (function() use (&$dictEq, &$dictOrd) {
  $__fn = function($m1, $m2 = null) use (&$dictEq, &$dictOrd, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($m1) && (($m1)->tag === "Leaf"))) {
$__t0 = true;
} else {
if ((is_object($m1) && (($m1)->tag === "Node"))) {
$__local_var_1 = ($m1)->value2;
$go = null;
$go = function($v) use (&$__local_var_1, &$dictOrd, &$go) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t2 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$v1_3 = ((($dictOrd)->compare)($__local_var_1))(($v)->value2);
if ((is_object($v1_3) && (($v1_3)->tag === "LT"))) {
$__t4 = ($go)(($v)->value4);
} else {
if ((is_object($v1_3) && (($v1_3)->tag === "GT"))) {
$__t4 = ($go)(($v)->value5);
} else {
if ((is_object($v1_3) && (($v1_3)->tag === "EQ"))) {
$__t4 = new Phpurs_Data1("Just", ($v)->value3);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
};
};
$__t2 = $__t4;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
$v1_5 = ($go)($m2);
if ((is_object($v1_5) && (($v1_5)->tag === "Nothing"))) {
$__t6 = false;
} else {
if ((is_object($v1_5) && (($v1_5)->tag === "Just"))) {
$__t6 = ((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(((($dictEq)->eq)(($m1)->value3))(($v1_5)->value0)))(((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))((($go)(($m1)->value4))($m2)))((($go)(($m1)->value5))($m2)));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
$__t0 = $__t6;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_isEmpty'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = (is_object($v) && (($v)->tag === "Leaf"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_intersectionWith'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = (function() use (&$compare_0) {
  $__fn = function($app, $m1 = null, $m2 = null) use (&$compare_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeIntersectionWith'))))($compare_0))($app))($m1))($m2);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_intersection'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = (function() use (&$compare_0) {
  $__fn = function($m1, $m2 = null) use (&$compare_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeIntersectionWith'))))($compare_0))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const'))))($m1))($m2);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_insertWith'] = function() { $v = (function() {
  $__fn = function($dictOrd, $app = null, $k = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $go = null;
  $go = function($v1) use (&$app, &$dictOrd, &$go, &$k, &$v) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data6("Node", 1, 1, $k, $v, new Phpurs_Data0("Leaf"), new Phpurs_Data0("Leaf"));
} else {
if ((is_object($v1) && (($v1)->tag === "Node"))) {
$v2_1 = ((($dictOrd)->compare)($k))(($v1)->value2);
if ((is_object($v2_1) && (($v2_1)->tag === "LT"))) {
$__t2 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))(($v1)->value2))(($v1)->value3))(($go)(($v1)->value4)))(($v1)->value5);
} else {
if ((is_object($v2_1) && (($v2_1)->tag === "GT"))) {
$__t2 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))(($v1)->value2))(($v1)->value3))(($v1)->value4))(($go)(($v1)->value5));
} else {
if ((is_object($v2_1) && (($v2_1)->tag === "EQ"))) {
$__t2 = new Phpurs_Data6("Node", ($v1)->value0, ($v1)->value1, $k, (($app)(($v1)->value3))($v), ($v1)->value4, ($v1)->value5);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
};
$__t0 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_insert'] = function() { $v = (function() {
  $__fn = function($dictOrd, $k = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $go = null;
  $go = function($v1) use (&$dictOrd, &$go, &$k, &$v) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data6("Node", 1, 1, $k, $v, new Phpurs_Data0("Leaf"), new Phpurs_Data0("Leaf"));
} else {
if ((is_object($v1) && (($v1)->tag === "Node"))) {
$v2_1 = ((($dictOrd)->compare)($k))(($v1)->value2);
if ((is_object($v2_1) && (($v2_1)->tag === "LT"))) {
$__t2 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))(($v1)->value2))(($v1)->value3))(($go)(($v1)->value4)))(($v1)->value5);
} else {
if ((is_object($v2_1) && (($v2_1)->tag === "GT"))) {
$__t2 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))(($v1)->value2))(($v1)->value3))(($v1)->value4))(($go)(($v1)->value5));
} else {
if ((is_object($v2_1) && (($v2_1)->tag === "EQ"))) {
$__t2 = new Phpurs_Data6("Node", ($v1)->value0, ($v1)->value1, $k, $v, ($v1)->value4, ($v1)->value5);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
};
$__t0 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_functorMap'] = function() { $v = (object)["map" => function($f) {
  $__num = \func_num_args();
  $go = null;
  $go = function($v) use (&$f, &$go) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data0("Leaf");
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$__t0 = new Phpurs_Data6("Node", ($v)->value0, ($v)->value1, ($v)->value2, ($f)(($v)->value3), ($go)(($v)->value4), ($go)(($v)->value5));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_functorWithIndexMap'] = function() { $v = (object)["mapWithIndex" => function($f) {
  $__num = \func_num_args();
  $go = null;
  $go = function($v) use (&$f, &$go) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data0("Leaf");
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$__t0 = new Phpurs_Data6("Node", ($v)->value0, ($v)->value1, ($v)->value2, (($f)(($v)->value2))(($v)->value3), ($go)(($v)->value4), ($go)(($v)->value5));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \PhpursThunks::eval('Data_Map_Internal_functorMap'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_foldableMap'] = function() { $v = (object)["foldr" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = (($GLOBALS['Data_Function_Uncurried_mkFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn2')))((function() use (&$f, &$go) {
  $__fn = function($m__prime__, $z__prime__ = null) use (&$f, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($m__prime__) && (($m__prime__)->tag === "Leaf"))) {
$__t0 = $z__prime__;
} else {
if ((is_object($m__prime__) && (($m__prime__)->tag === "Node"))) {
$__t0 = (((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))($go))(($m__prime__)->value4))((($f)(($m__prime__)->value3))((((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))($go))(($m__prime__)->value5))($z__prime__)));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  $__res = function($m) use (&$go, &$z) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))($go))($m))($z);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = (($GLOBALS['Data_Function_Uncurried_mkFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn2')))((function() use (&$f, &$go) {
  $__fn = function($z__prime__, $m__prime__ = null) use (&$f, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($m__prime__) && (($m__prime__)->tag === "Leaf"))) {
$__t1 = $z__prime__;
} else {
if ((is_object($m__prime__) && (($m__prime__)->tag === "Node"))) {
$__t1 = (((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))($go))((($f)((((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))($go))($z__prime__))(($m__prime__)->value4)))(($m__prime__)->value3)))(($m__prime__)->value5);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  $__res = function($m) use (&$go, &$z) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))($go))($z))($m);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap" => function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_2 = ($dictMonoid)->mempty;
  $__local_var_3 = (($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($f) use (&$__local_var_3, &$mempty_2) {
  $__num = \func_num_args();
  $go = null;
  $go = function($v) use (&$__local_var_3, &$f, &$go, &$mempty_2) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t4 = $mempty_2;
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$__t4 = ((($__local_var_3)->append)(($go)(($v)->value4)))(((($__local_var_3)->append)(($f)(($v)->value3)))(($go)(($v)->value5)));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_foldableWithIndexMap'] = function() { $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = (($GLOBALS['Data_Function_Uncurried_mkFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn2')))((function() use (&$f, &$go) {
  $__fn = function($m__prime__, $z__prime__ = null) use (&$f, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($m__prime__) && (($m__prime__)->tag === "Leaf"))) {
$__t0 = $z__prime__;
} else {
if ((is_object($m__prime__) && (($m__prime__)->tag === "Node"))) {
$__t0 = (((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))($go))(($m__prime__)->value4))(((($f)(($m__prime__)->value2))(($m__prime__)->value3))((((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))($go))(($m__prime__)->value5))($z__prime__)));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  $__res = function($m) use (&$go, &$z) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))($go))($m))($z);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = (($GLOBALS['Data_Function_Uncurried_mkFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn2')))((function() use (&$f, &$go) {
  $__fn = function($z__prime__, $m__prime__ = null) use (&$f, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($m__prime__) && (($m__prime__)->tag === "Leaf"))) {
$__t1 = $z__prime__;
} else {
if ((is_object($m__prime__) && (($m__prime__)->tag === "Node"))) {
$__t1 = (((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))($go))(((($f)(($m__prime__)->value2))((((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))($go))($z__prime__))(($m__prime__)->value4)))(($m__prime__)->value3)))(($m__prime__)->value5);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  $__res = function($m) use (&$go, &$z) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))($go))($z))($m);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_2 = ($dictMonoid)->mempty;
  $__local_var_3 = (($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($f) use (&$__local_var_3, &$mempty_2) {
  $__num = \func_num_args();
  $go = null;
  $go = function($v) use (&$__local_var_3, &$f, &$go, &$mempty_2) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t4 = $mempty_2;
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$__t4 = ((($__local_var_3)->append)(($go)(($v)->value4)))(((($__local_var_3)->append)((($f)(($v)->value2))(($v)->value3)))(($go)(($v)->value5)));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Map_Internal_foldableMap'] ?? \PhpursThunks::eval('Data_Map_Internal_foldableMap'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_keys'] = function() { $v = (((($GLOBALS['Data_Map_Internal_foldableWithIndexMap'] ?? \PhpursThunks::eval('Data_Map_Internal_foldableWithIndexMap')))->foldrWithIndex)((function() {
  $__fn = function($k, $v = null, $acc = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data2("Cons", $k, $acc);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()))(new Phpurs_Data0("Nil")); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_traversableMap'] = function() { $v = (object)["traverse" => function($dictApplicative) {
  $__num = \func_num_args();
  $Apply0_0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($f) use (&$Apply0_0, &$dictApplicative) {
  $__num = \func_num_args();
  $go = null;
  $go = function($v) use (&$Apply0_0, &$dictApplicative, &$f, &$go) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t1 = (($dictApplicative)->pure)(new Phpurs_Data0("Leaf"));
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$__local_var_2 = ($v)->value0;
$__local_var_3 = ($v)->value2;
$__local_var_4 = ($v)->value1;
$__t1 = ((($Apply0_0)->apply)(((($Apply0_0)->apply)(((((($Apply0_0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)((function() use (&$__local_var_2, &$__local_var_3, &$__local_var_4) {
  $__fn = function($l__prime__, $v__prime__ = null, $r__prime__ = null) use (&$__local_var_2, &$__local_var_3, &$__local_var_4, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data6("Node", $__local_var_2, $__local_var_4, $__local_var_3, $v__prime__, $l__prime__, $r__prime__);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()))(($go)(($v)->value4))))(($f)(($v)->value3))))(($go)(($v)->value5));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "sequence" => function($dictApplicative) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_Map_Internal_traversableMap'] ?? \PhpursThunks::eval('Data_Map_Internal_traversableMap')))->traverse)($dictApplicative))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \PhpursThunks::eval('Data_Map_Internal_functorMap'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Foldable1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Map_Internal_foldableMap'] ?? \PhpursThunks::eval('Data_Map_Internal_foldableMap'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_traversableWithIndexMap'] = function() { $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = \func_num_args();
  $Apply0_0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($f) use (&$Apply0_0, &$dictApplicative) {
  $__num = \func_num_args();
  $go = null;
  $go = function($v) use (&$Apply0_0, &$dictApplicative, &$f, &$go) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t1 = (($dictApplicative)->pure)(new Phpurs_Data0("Leaf"));
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$__local_var_2 = ($v)->value0;
$__local_var_3 = ($v)->value2;
$__local_var_4 = ($v)->value1;
$__t1 = ((($Apply0_0)->apply)(((($Apply0_0)->apply)(((((($Apply0_0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)((function() use (&$__local_var_2, &$__local_var_3, &$__local_var_4) {
  $__fn = function($l__prime__, $v__prime__ = null, $r__prime__ = null) use (&$__local_var_2, &$__local_var_3, &$__local_var_4, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data6("Node", $__local_var_2, $__local_var_4, $__local_var_3, $v__prime__, $l__prime__, $r__prime__);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()))(($go)(($v)->value4))))((($f)($__local_var_3))(($v)->value3))))(($go)(($v)->value5));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Map_Internal_functorWithIndexMap'] ?? \PhpursThunks::eval('Data_Map_Internal_functorWithIndexMap'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Map_Internal_foldableWithIndexMap'] ?? \PhpursThunks::eval('Data_Map_Internal_foldableWithIndexMap'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Map_Internal_traversableMap'] ?? \PhpursThunks::eval('Data_Map_Internal_traversableMap'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_values'] = function() { $v = (((($GLOBALS['Data_Map_Internal_foldableMap'] ?? \PhpursThunks::eval('Data_Map_Internal_foldableMap')))->foldr)(($GLOBALS['Data_List_Types_Cons'] ?? \PhpursThunks::eval('Data_List_Types_Cons'))))(new Phpurs_Data0("Nil")); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_foldSubmapBy'] = function() { $v = (function() {
  $__fn = function($dictOrd, $appendFn = null, $memptyValue = null, $kmin = null, $kmax = null, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 6);
  }
  if ((is_object($kmin) && (($kmin)->tag === "Just"))) {
$__local_var_1 = ($kmin)->value0;
$__t0 = function($k) use (&$__local_var_1, &$dictOrd) {
  $__num = \func_num_args();
  $__res = (is_object(((($dictOrd)->compare)($k))($__local_var_1)) && ((((($dictOrd)->compare)($k))($__local_var_1))->tag === "LT"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
} else {
if ((is_object($kmin) && (($kmin)->tag === "Nothing"))) {
$__t0 = function($v) {
  $__num = \func_num_args();
  $__res = false;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $tooSmall_2 = $__t0;
  if ((is_object($kmax) && (($kmax)->tag === "Just"))) {
$__local_var_4 = ($kmax)->value0;
$__t3 = function($k) use (&$__local_var_4, &$dictOrd) {
  $__num = \func_num_args();
  $__res = (is_object(((($dictOrd)->compare)($k))($__local_var_4)) && ((((($dictOrd)->compare)($k))($__local_var_4))->tag === "GT"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
} else {
if ((is_object($kmax) && (($kmax)->tag === "Nothing"))) {
$__t3 = function($v) {
  $__num = \func_num_args();
  $__res = false;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
  $tooLarge_5 = $__t3;
  if ((is_object($kmin) && (($kmin)->tag === "Just"))) {
if ((is_object($kmax) && (($kmax)->tag === "Just"))) {
$__local_var_8 = ($kmax)->value0;
$__local_var_9 = ($kmin)->value0;
$__t7 = function($k) use (&$__local_var_8, &$__local_var_9, &$dictOrd) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(( ! (is_object(((($dictOrd)->compare)($__local_var_9))($k)) && ((((($dictOrd)->compare)($__local_var_9))($k))->tag === "GT")))))(( ! (is_object(((($dictOrd)->compare)($k))($__local_var_8)) && ((((($dictOrd)->compare)($k))($__local_var_8))->tag === "GT"))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
} else {
if ((is_object($kmax) && (($kmax)->tag === "Nothing"))) {
$__local_var_10 = ($kmin)->value0;
$__t7 = function($k) use (&$__local_var_10, &$dictOrd) {
  $__num = \func_num_args();
  $__res = ( ! (is_object(((($dictOrd)->compare)($__local_var_10))($k)) && ((((($dictOrd)->compare)($__local_var_10))($k))->tag === "GT")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t7 = null;
};
};
$__t6 = $__t7;
} else {
if ((is_object($kmin) && (($kmin)->tag === "Nothing"))) {
if ((is_object($kmax) && (($kmax)->tag === "Just"))) {
$__local_var_12 = ($kmax)->value0;
$__t11 = function($k) use (&$__local_var_12, &$dictOrd) {
  $__num = \func_num_args();
  $__res = ( ! (is_object(((($dictOrd)->compare)($k))($__local_var_12)) && ((((($dictOrd)->compare)($k))($__local_var_12))->tag === "GT")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
} else {
if ((is_object($kmax) && (($kmax)->tag === "Nothing"))) {
$__t11 = function($v) {
  $__num = \func_num_args();
  $__res = true;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t11 = null;
};
};
$__t6 = $__t11;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
  $inBounds_13 = $__t6;
  $go = null;
  $go = function($v) use (&$appendFn, &$f, &$go, &$inBounds_13, &$memptyValue, &$tooLarge_5, &$tooSmall_2) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t14 = $memptyValue;
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
if (($tooSmall_2)(($v)->value2)) {
$__t15 = $memptyValue;
} else {
$__t15 = ($go)(($v)->value4);
};
if (($inBounds_13)(($v)->value2)) {
$__t16 = (($f)(($v)->value2))(($v)->value3);
} else {
$__t16 = $memptyValue;
};
if (($tooLarge_5)(($v)->value2)) {
$__t17 = $memptyValue;
} else {
$__t17 = ($go)(($v)->value5);
};
$__t14 = (($appendFn)((($appendFn)($__t15))($__t16)))($__t17);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t14 = null;
};
};
  $__res = $__t14;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 6 ? $__res(...\array_slice(\func_get_args(), 6)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_foldSubmap'] = function() { $v = (function() {
  $__fn = function($dictOrd, $dictMonoid = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_Map_Internal_foldSubmapBy'] ?? \PhpursThunks::eval('Data_Map_Internal_foldSubmapBy')))($dictOrd))(((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->append))(($dictMonoid)->mempty);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_findMin'] = function() { $v = function($v) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
if ((is_object(($v)->value4) && ((($v)->value4)->tag === "Leaf"))) {
$__t1 = new Phpurs_Data1("Just", (object)["key" => ($v)->value2, "value" => ($v)->value3]);
} else {
$__t1 = (($GLOBALS['Data_Map_Internal_findMin'] ?? \PhpursThunks::eval('Data_Map_Internal_findMin')))(($v)->value4);
};
$__t0 = $__t1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_lookupGT'] = function() { $v = (function() {
  $__fn = function($dictOrd, $k = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = function($v) use (&$dictOrd, &$go, &$k) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$v1_1 = ((($dictOrd)->compare)($k))(($v)->value2);
if ((is_object($v1_1) && (($v1_1)->tag === "LT"))) {
$v2_3 = ($go)(($v)->value4);
if ((is_object($v2_3) && (($v2_3)->tag === "Nothing"))) {
$__t4 = new Phpurs_Data1("Just", (object)["key" => ($v)->value2, "value" => ($v)->value3]);
} else {
$__t4 = $v2_3;
};
$__t2 = $__t4;
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "GT"))) {
$__t2 = ($go)(($v)->value5);
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "EQ"))) {
$__t2 = (($GLOBALS['Data_Map_Internal_findMin'] ?? \PhpursThunks::eval('Data_Map_Internal_findMin')))(($v)->value5);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
};
$__t0 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_findMax'] = function() { $v = function($v) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
if ((is_object(($v)->value5) && ((($v)->value5)->tag === "Leaf"))) {
$__t1 = new Phpurs_Data1("Just", (object)["key" => ($v)->value2, "value" => ($v)->value3]);
} else {
$__t1 = (($GLOBALS['Data_Map_Internal_findMax'] ?? \PhpursThunks::eval('Data_Map_Internal_findMax')))(($v)->value5);
};
$__t0 = $__t1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_lookupLT'] = function() { $v = (function() {
  $__fn = function($dictOrd, $k = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = function($v) use (&$dictOrd, &$go, &$k) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$v1_1 = ((($dictOrd)->compare)($k))(($v)->value2);
if ((is_object($v1_1) && (($v1_1)->tag === "LT"))) {
$__t2 = ($go)(($v)->value4);
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "GT"))) {
$v2_3 = ($go)(($v)->value5);
if ((is_object($v2_3) && (($v2_3)->tag === "Nothing"))) {
$__t4 = new Phpurs_Data1("Just", (object)["key" => ($v)->value2, "value" => ($v)->value3]);
} else {
$__t4 = $v2_3;
};
$__t2 = $__t4;
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "EQ"))) {
$__t2 = (($GLOBALS['Data_Map_Internal_findMax'] ?? \PhpursThunks::eval('Data_Map_Internal_findMax')))(($v)->value4);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
};
$__t0 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_filterWithKey'] = function() { $v = (function() {
  $__fn = function($dictOrd, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = function($v) use (&$f, &$go) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data0("Leaf");
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
if ((($f)(($v)->value2))(($v)->value3)) {
$__t1 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))(($v)->value2))(($v)->value3))(($go)(($v)->value4)))(($go)(($v)->value5));
} else {
$__t1 = (((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeJoinNodes'))))(($go)(($v)->value4)))(($go)(($v)->value5));
};
$__t0 = $__t1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_filterKeys'] = function() { $v = (function() {
  $__fn = function($dictOrd, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = function($v) use (&$f, &$go) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data0("Leaf");
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
if (($f)(($v)->value2)) {
$__t1 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))(($v)->value2))(($v)->value3))(($go)(($v)->value4)))(($go)(($v)->value5));
} else {
$__t1 = (((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeJoinNodes'))))(($go)(($v)->value4)))(($go)(($v)->value5));
};
$__t0 = $__t1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_filter'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Map_Internal_filterWithKey'] ?? \PhpursThunks::eval('Data_Map_Internal_filterWithKey')))($dictOrd)))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_eqMap'] = function() { $v = (function() {
  $__fn = function($dictEq, $dictEq1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["eq" => (function() use (&$dictEq, &$dictEq1) {
  $__fn = function($xs, $ys = null) use (&$dictEq, &$dictEq1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($xs) && (($xs)->tag === "Leaf"))) {
$__t0 = (is_object($ys) && (($ys)->tag === "Leaf"));
} else {
if ((is_object($xs) && (($xs)->tag === "Node"))) {
$__t0 = ((is_object($ys) && (($ys)->tag === "Node")) && (((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))(($xs)->value1))(($ys)->value1) && (((((($GLOBALS['Data_Map_Internal_eqMapIter'] ?? \PhpursThunks::eval('Data_Map_Internal_eqMapIter')))($dictEq))($dictEq1))->eq)(new Phpurs_Data2("IterNode", $xs, new Phpurs_Data0("IterLeaf"))))(new Phpurs_Data2("IterNode", $ys, new Phpurs_Data0("IterLeaf")))));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_ordMap'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $ordMapIter1_0 = (($GLOBALS['Data_Map_Internal_ordMapIter'] ?? \PhpursThunks::eval('Data_Map_Internal_ordMapIter')))($dictOrd);
  $eqMap1_1 = (($GLOBALS['Data_Map_Internal_eqMap'] ?? \PhpursThunks::eval('Data_Map_Internal_eqMap')))((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictOrd1) use (&$eqMap1_1, &$ordMapIter1_0) {
  $__num = \func_num_args();
  $eqMap2_2 = ($eqMap1_1)((($dictOrd1)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["compare" => (function() use (&$dictOrd1, &$ordMapIter1_0) {
  $__fn = function($xs, $ys = null) use (&$dictOrd1, &$ordMapIter1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($xs) && (($xs)->tag === "Leaf"))) {
if ((is_object($ys) && (($ys)->tag === "Leaf"))) {
$__t4 = new Phpurs_Data0("EQ");
} else {
$__t4 = new Phpurs_Data0("LT");
};
$__t3 = $__t4;
} else {
if ((is_object($ys) && (($ys)->tag === "Leaf"))) {
$__t3 = new Phpurs_Data0("GT");
} else {
$__t3 = (((($ordMapIter1_0)($dictOrd1))->compare)(new Phpurs_Data2("IterNode", $xs, new Phpurs_Data0("IterLeaf"))))(new Phpurs_Data2("IterNode", $ys, new Phpurs_Data0("IterLeaf")));
};
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($dollar__unused_0) use (&$eqMap2_2) {
  $__num = \func_num_args();
  $__res = $eqMap2_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_eq1Map'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (object)["eq1" => function($dictEq1) use (&$dictEq) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_Map_Internal_eqMap'] ?? \PhpursThunks::eval('Data_Map_Internal_eqMap')))($dictEq))($dictEq1))->eq;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_ord1Map'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $ordMap1_0 = (($GLOBALS['Data_Map_Internal_ordMap'] ?? \PhpursThunks::eval('Data_Map_Internal_ordMap')))($dictOrd);
  $__local_var_1 = (($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $eq1Map1_2 = (object)["eq1" => function($dictEq1) use (&$__local_var_1) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_Map_Internal_eqMap'] ?? \PhpursThunks::eval('Data_Map_Internal_eqMap')))($__local_var_1))($dictEq1))->eq;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["compare1" => function($dictOrd1) use (&$ordMap1_0) {
  $__num = \func_num_args();
  $__res = (($ordMap1_0)($dictOrd1))->compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Eq10" => function($dollar__unused_0) use (&$eq1Map1_2) {
  $__num = \func_num_args();
  $__res = $eq1Map1_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_empty'] = function() { $v = new Phpurs_Data0("Leaf"); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_fromFoldable'] = function() { $v = (function() {
  $__fn = function($dictOrd, $dictFoldable = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictFoldable)->foldl)((function() use (&$dictOrd) {
  $__fn = function($m, $v = null) use (&$dictOrd, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Data_Map_Internal_insert'] ?? \PhpursThunks::eval('Data_Map_Internal_insert')))($dictOrd))(($v)->value0))(($v)->value1))($m);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(new Phpurs_Data0("Leaf"));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_fromFoldableWith'] = function() { $v = (function() {
  $__fn = function($dictOrd, $dictFoldable = null, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $f__prime___0 = ((($GLOBALS['Data_Map_Internal_insertWith'] ?? \PhpursThunks::eval('Data_Map_Internal_insertWith')))($dictOrd))((function() use (&$f) {
  $__fn = function($b, $a = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($f)($a))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  $__res = ((($dictFoldable)->foldl)((function() use (&$f__prime___0) {
  $__fn = function($m, $v = null) use (&$f__prime___0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($f__prime___0)(($v)->value0))(($v)->value1))($m);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(new Phpurs_Data0("Leaf"));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_fromFoldableWithIndex'] = function() { $v = (function() {
  $__fn = function($dictOrd, $dictFoldableWithIndex = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictFoldableWithIndex)->foldlWithIndex)((function() use (&$dictOrd) {
  $__fn = function($k, $m = null, $v = null) use (&$dictOrd, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((($GLOBALS['Data_Map_Internal_insert'] ?? \PhpursThunks::eval('Data_Map_Internal_insert')))($dictOrd))($k))($v))($m);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()))(new Phpurs_Data0("Leaf"));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_monoidSemigroupMap'] = function() { $v = (function() {
  $__fn = function($dollar__unused_0, $dictOrd = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $semigroupMap2_0 = ((($GLOBALS['Data_Map_Internal_semigroupMap'] ?? \PhpursThunks::eval('Data_Map_Internal_semigroupMap')))(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))($dictOrd);
  $__res = function($dictSemigroup) use (&$semigroupMap2_0) {
  $__num = \func_num_args();
  $semigroupMap3_1 = ($semigroupMap2_0)($dictSemigroup);
  $__res = (object)["mempty" => new Phpurs_Data0("Leaf"), "Semigroup0" => function($dollar__unused_0) use (&$semigroupMap3_1) {
  $__num = \func_num_args();
  $__res = $semigroupMap3_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_submap'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = (function() use (&$compare_0, &$dictOrd) {
  $__fn = function($kmin, $kmax = null) use (&$compare_0, &$dictOrd, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((((($GLOBALS['Data_Map_Internal_foldSubmapBy'] ?? \PhpursThunks::eval('Data_Map_Internal_foldSubmapBy')))($dictOrd))((function() use (&$compare_0) {
  $__fn = function($m1, $m2 = null) use (&$compare_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeUnionWith'))))($compare_0))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const'))))($m1))($m2);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(new Phpurs_Data0("Leaf")))($kmin))($kmax))(($GLOBALS['Data_Map_Internal_singleton'] ?? \PhpursThunks::eval('Data_Map_Internal_singleton')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_unions'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = function($dictFoldable) use (&$compare_0) {
  $__num = \func_num_args();
  $__res = ((($dictFoldable)->foldl)((function() use (&$compare_0) {
  $__fn = function($m1, $m2 = null) use (&$compare_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeUnionWith'))))($compare_0))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const'))))($m1))($m2);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(new Phpurs_Data0("Leaf"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_difference'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = (function() use (&$compare_0) {
  $__fn = function($m1, $m2 = null) use (&$compare_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Map_Internal_unsafeDifference'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeDifference'))))($compare_0))($m1))($m2);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_delete'] = function() { $v = (function() {
  $__fn = function($dictOrd, $k = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = function($v) use (&$dictOrd, &$go, &$k) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = new Phpurs_Data0("Leaf");
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$v1_1 = ((($dictOrd)->compare)($k))(($v)->value2);
if ((is_object($v1_1) && (($v1_1)->tag === "LT"))) {
$__t2 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))(($v)->value2))(($v)->value3))(($go)(($v)->value4)))(($v)->value5);
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "GT"))) {
$__t2 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))(($v)->value2))(($v)->value3))(($v)->value4))(($go)(($v)->value5));
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "EQ"))) {
$__t2 = (((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeJoinNodes'))))(($v)->value4))(($v)->value5);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
};
$__t0 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_checkValid'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $go = null;
  $go = function($v) use (&$dictOrd, &$go) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = true;
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
if ((is_object(($v)->value4) && ((($v)->value4)->tag === "Leaf"))) {
if ((is_object(($v)->value5) && ((($v)->value5)->tag === "Leaf"))) {
$__t2 = true;
} else {
if ((is_object(($v)->value5) && ((($v)->value5)->tag === "Node"))) {
$__t2 = ((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))(($v)->value0))(2)))(((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))((($v)->value5)->value0))(1)))(((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($v)->value1))((($v)->value5)->value1)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($v)->value1))((($v)->value5)->value1))->tag === "GT"))))(((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))((is_object(((($dictOrd)->compare)((($v)->value5)->value2))(($v)->value2)) && ((((($dictOrd)->compare)((($v)->value5)->value2))(($v)->value2))->tag === "GT"))))(($go)(($v)->value5)))));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
$__t1 = $__t2;
} else {
if ((is_object(($v)->value4) && ((($v)->value4)->tag === "Node"))) {
if ((is_object(($v)->value5) && ((($v)->value5)->tag === "Leaf"))) {
$__t3 = ((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))(($v)->value0))(2)))(((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))((($v)->value4)->value0))(1)))(((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($v)->value1))((($v)->value4)->value1)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($v)->value1))((($v)->value4)->value1))->tag === "GT"))))(((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))((is_object(((($dictOrd)->compare)((($v)->value4)->value2))(($v)->value2)) && ((((($dictOrd)->compare)((($v)->value4)->value2))(($v)->value2))->tag === "LT"))))(($go)(($v)->value4)))));
} else {
if ((is_object(($v)->value5) && ((($v)->value5)->tag === "Node"))) {
$__t3 = ((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($v)->value0))((($v)->value5)->value0)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($v)->value0))((($v)->value5)->value0))->tag === "GT"))))(((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))((is_object(((($dictOrd)->compare)((($v)->value5)->value2))(($v)->value2)) && ((((($dictOrd)->compare)((($v)->value5)->value2))(($v)->value2))->tag === "GT"))))(((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($v)->value0))((($v)->value4)->value0)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($v)->value0))((($v)->value4)->value0))->tag === "GT"))))(((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))((is_object(((($dictOrd)->compare)((($v)->value4)->value2))(($v)->value2)) && ((((($dictOrd)->compare)((($v)->value4)->value2))(($v)->value2))->tag === "LT"))))(((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)((($GLOBALS['Data_Map_Internal_abs'] ?? \PhpursThunks::eval('Data_Map_Internal_abs')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))((($v)->value5)->value0))((($v)->value4)->value0))))(2)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)((($GLOBALS['Data_Map_Internal_abs'] ?? \PhpursThunks::eval('Data_Map_Internal_abs')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))((($v)->value5)->value0))((($v)->value4)->value0))))(2))->tag === "LT"))))(((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))(((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))((($v)->value5)->value1))((($v)->value4)->value1)))(1)))(($v)->value1)))(((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(($go)(($v)->value4)))(($go)(($v)->value5))))))));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
$__t1 = $__t3;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
$__t0 = $__t1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_catMaybes'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Map_Internal_mapMaybeWithKey'] ?? \PhpursThunks::eval('Data_Map_Internal_mapMaybeWithKey')))($dictOrd)))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const'))))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_applyMap'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = (object)["apply" => (function() use (&$compare_0) {
  $__fn = function($m1, $m2 = null) use (&$compare_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeIntersectionWith'))))($compare_0))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity))($m1))($m2);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \PhpursThunks::eval('Data_Map_Internal_functorMap'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_bindMap'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $applyMap1_0 = (($GLOBALS['Data_Map_Internal_applyMap'] ?? \PhpursThunks::eval('Data_Map_Internal_applyMap')))($dictOrd);
  $__res = (object)["bind" => (function() use (&$dictOrd) {
  $__fn = function($m, $f = null) use (&$dictOrd, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_Map_Internal_mapMaybeWithKey'] ?? \PhpursThunks::eval('Data_Map_Internal_mapMaybeWithKey')))($dictOrd))(function($k) use (&$dictOrd, &$f) {
  $__num = \func_num_args();
  $go = null;
  $go = function($v) use (&$dictOrd, &$go, &$k) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t1 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$v1_2 = ((($dictOrd)->compare)($k))(($v)->value2);
if ((is_object($v1_2) && (($v1_2)->tag === "LT"))) {
$__t3 = ($go)(($v)->value4);
} else {
if ((is_object($v1_2) && (($v1_2)->tag === "GT"))) {
$__t3 = ($go)(($v)->value5);
} else {
if ((is_object($v1_2) && (($v1_2)->tag === "EQ"))) {
$__t3 = new Phpurs_Data1("Just", ($v)->value3);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
};
$__t1 = $__t3;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($go))($f);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($m);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($dollar__unused_0) use (&$applyMap1_0) {
  $__num = \func_num_args();
  $__res = $applyMap1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_anyWithKey'] = function() { $v = function($predicate) {
  $__num = \func_num_args();
  $go = null;
  $go = function($v) use (&$go, &$predicate) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = false;
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$__t0 = ((($GLOBALS['Data_HeytingAlgebra_boolDisj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolDisj')))((($predicate)(($v)->value2))(($v)->value3)))(((($GLOBALS['Data_HeytingAlgebra_boolDisj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolDisj')))(($go)(($v)->value4)))(($go)(($v)->value5)));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_any'] = function() { $v = function($predicate) {
  $__num = \func_num_args();
  $go = null;
  $go = function($v) use (&$go, &$predicate) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = false;
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$__t0 = ((($GLOBALS['Data_HeytingAlgebra_boolDisj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolDisj')))(($predicate)(($v)->value3)))(((($GLOBALS['Data_HeytingAlgebra_boolDisj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolDisj')))(($go)(($v)->value4)))(($go)(($v)->value5)));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_alter'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = (function() use (&$compare_0) {
  $__fn = function($f, $k = null, $m = null) use (&$compare_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $v_1 = ((((($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeSplit'))))($compare_0))($k))($m);
  $v2_2 = ($f)(($v_1)->value0);
  if ((is_object($v2_2) && (($v2_2)->tag === "Nothing"))) {
$__t3 = (((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeJoinNodes'))))(($v_1)->value1))(($v_1)->value2);
} else {
if ((is_object($v2_2) && (($v2_2)->tag === "Just"))) {
$__t3 = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeBalancedNode'))))($k))(($v2_2)->value0))(($v_1)->value1))(($v_1)->value2);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_altMap'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = (object)["alt" => (function() use (&$compare_0) {
  $__fn = function($m1, $m2 = null) use (&$compare_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeUnionWith'))))($compare_0))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const'))))($m1))($m2);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \PhpursThunks::eval('Data_Map_Internal_functorMap'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Map_Internal_plusMap'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $altMap1_0 = (($GLOBALS['Data_Map_Internal_altMap'] ?? \PhpursThunks::eval('Data_Map_Internal_altMap')))($dictOrd);
  $__res = (object)["empty" => new Phpurs_Data0("Leaf"), "Alt0" => function($dollar__unused_0) use (&$altMap1_0) {
  $__num = \func_num_args();
  $__res = $altMap1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };


































































































