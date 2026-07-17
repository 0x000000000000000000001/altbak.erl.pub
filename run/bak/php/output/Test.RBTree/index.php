<?php

namespace Test\RBTree;

// ALL IMPORTS: Data.Function, Data.Ord, Data.Ring, Data.Semiring, Data.Show, Effect, Effect.Console, Prelude, Prim, Test.RBTree
// TO REQUIRE: Data.Function, Data.Ord, Data.Ring, Data.Semiring, Data.Show, Effect, Effect.Console, Prelude, Test.RBTree
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.RBTree/index.php';

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
\PhpursThunks::$thunks['Test_RBTree_R'] = function() { $v = ($GLOBALS['__phpurs_data0_R'] ??= new Phpurs_Data0("R")); return $v; };
\PhpursThunks::$thunks['Test_RBTree_B'] = function() { $v = ($GLOBALS['__phpurs_data0_B'] ??= new Phpurs_Data0("B")); return $v; };
\PhpursThunks::$thunks['Test_RBTree_E'] = function() { $v = ($GLOBALS['__phpurs_data0_E'] ??= new Phpurs_Data0("E")); return $v; };
\PhpursThunks::$thunks['Test_RBTree_T'] = function() { $v = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = new Phpurs_Data4("T", $value0, $value1, $value2, $value3);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Test_RBTree_max'] = function() { $v = (function() {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($x))($y)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($x))($y))->tag === "GT"))) {
$__t0 = $x;
} else {
$__t0 = $y;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Test_RBTree_describe'] = function() { $v = (($GLOBALS['Effect_Console_log'] ?? \PhpursThunks::eval('Effect_Console_log')))("Red-Black Tree (100k Worst-Case Insertions):"); return $v; };
\PhpursThunks::$thunks['Test_RBTree_depth'] = function() { $v = function($v) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "E"))) {
$__t0 = 0;
} else {
if ((is_object($v) && (($v)->tag === "T"))) {
$__local_var_1 = (($GLOBALS['Test_RBTree_depth'] ?? \PhpursThunks::eval('Test_RBTree_depth')))(($v)->value1);
$__local_var_2 = (($GLOBALS['Test_RBTree_depth'] ?? \PhpursThunks::eval('Test_RBTree_depth')))(($v)->value3);
if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($__local_var_1))($__local_var_2)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($__local_var_1))($__local_var_2))->tag === "GT"))) {
$__t3 = $__local_var_1;
} else {
$__t3 = $__local_var_2;
};
$__t0 = ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(1))($__t3);
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
\PhpursThunks::$thunks['Test_RBTree_balance'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  if ((is_object($v) && (($v)->tag === "B"))) {
if ((is_object($v1) && (($v1)->tag === "T"))) {
if ((is_object(($v1)->value0) && ((($v1)->value0)->tag === "R"))) {
if ((is_object(($v1)->value1) && ((($v1)->value1)->tag === "T"))) {
if ((is_object((($v1)->value1)->value0) && (((($v1)->value1)->value0)->tag === "R"))) {
$__t4 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v1)->value1)->value1, (($v1)->value1)->value2, (($v1)->value1)->value3), ($v1)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), ($v1)->value3, $v2, $v3));
} else {
if ((is_object(($v1)->value3) && ((($v1)->value3)->tag === "T"))) {
if ((is_object((($v1)->value3)->value0) && (((($v1)->value3)->value0)->tag === "R"))) {
$__t5 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), ($v1)->value1, ($v1)->value2, (($v1)->value3)->value1), (($v1)->value3)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v1)->value3)->value3, $v2, $v3));
} else {
if (((is_object($v3) && (($v3)->tag === "T")) && (is_object(($v3)->value0) && ((($v3)->value0)->tag === "R")))) {
if ((is_object(($v3)->value1) && ((($v3)->value1)->tag === "T"))) {
if ((is_object((($v3)->value1)->value0) && (((($v3)->value1)->value0)->tag === "R"))) {
$__t7 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), $v1, $v2, (($v3)->value1)->value1), (($v3)->value1)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v3)->value1)->value3, ($v3)->value2, ($v3)->value3));
} else {
if (((is_object(($v3)->value3) && ((($v3)->value3)->tag === "T")) && (is_object((($v3)->value3)->value0) && (((($v3)->value3)->value0)->tag === "R")))) {
$__t7 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), $v1, $v2, ($v3)->value1), ($v3)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v3)->value3)->value1, (($v3)->value3)->value2, (($v3)->value3)->value3));
} else {
$__t7 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
};
$__t6 = $__t7;
} else {
if (((is_object(($v3)->value3) && ((($v3)->value3)->tag === "T")) && (is_object((($v3)->value3)->value0) && (((($v3)->value3)->value0)->tag === "R")))) {
$__t6 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), $v1, $v2, ($v3)->value1), ($v3)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v3)->value3)->value1, (($v3)->value3)->value2, (($v3)->value3)->value3));
} else {
$__t6 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
};
$__t5 = $__t6;
} else {
$__t5 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
};
$__t4 = $__t5;
} else {
if (((is_object($v3) && (($v3)->tag === "T")) && (is_object(($v3)->value0) && ((($v3)->value0)->tag === "R")))) {
if ((is_object(($v3)->value1) && ((($v3)->value1)->tag === "T"))) {
if ((is_object((($v3)->value1)->value0) && (((($v3)->value1)->value0)->tag === "R"))) {
$__t9 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), $v1, $v2, (($v3)->value1)->value1), (($v3)->value1)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v3)->value1)->value3, ($v3)->value2, ($v3)->value3));
} else {
if (((is_object(($v3)->value3) && ((($v3)->value3)->tag === "T")) && (is_object((($v3)->value3)->value0) && (((($v3)->value3)->value0)->tag === "R")))) {
$__t9 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), $v1, $v2, ($v3)->value1), ($v3)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v3)->value3)->value1, (($v3)->value3)->value2, (($v3)->value3)->value3));
} else {
$__t9 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
};
$__t8 = $__t9;
} else {
if (((is_object(($v3)->value3) && ((($v3)->value3)->tag === "T")) && (is_object((($v3)->value3)->value0) && (((($v3)->value3)->value0)->tag === "R")))) {
$__t8 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), $v1, $v2, ($v3)->value1), ($v3)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v3)->value3)->value1, (($v3)->value3)->value2, (($v3)->value3)->value3));
} else {
$__t8 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
};
$__t4 = $__t8;
} else {
$__t4 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
};
};
$__t3 = $__t4;
} else {
if ((is_object(($v1)->value3) && ((($v1)->value3)->tag === "T"))) {
if ((is_object((($v1)->value3)->value0) && (((($v1)->value3)->value0)->tag === "R"))) {
$__t10 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), ($v1)->value1, ($v1)->value2, (($v1)->value3)->value1), (($v1)->value3)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v1)->value3)->value3, $v2, $v3));
} else {
if (((is_object($v3) && (($v3)->tag === "T")) && (is_object(($v3)->value0) && ((($v3)->value0)->tag === "R")))) {
if ((is_object(($v3)->value1) && ((($v3)->value1)->tag === "T"))) {
if ((is_object((($v3)->value1)->value0) && (((($v3)->value1)->value0)->tag === "R"))) {
$__t12 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), $v1, $v2, (($v3)->value1)->value1), (($v3)->value1)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v3)->value1)->value3, ($v3)->value2, ($v3)->value3));
} else {
if (((is_object(($v3)->value3) && ((($v3)->value3)->tag === "T")) && (is_object((($v3)->value3)->value0) && (((($v3)->value3)->value0)->tag === "R")))) {
$__t12 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), $v1, $v2, ($v3)->value1), ($v3)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v3)->value3)->value1, (($v3)->value3)->value2, (($v3)->value3)->value3));
} else {
$__t12 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
};
$__t11 = $__t12;
} else {
if (((is_object(($v3)->value3) && ((($v3)->value3)->tag === "T")) && (is_object((($v3)->value3)->value0) && (((($v3)->value3)->value0)->tag === "R")))) {
$__t11 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), $v1, $v2, ($v3)->value1), ($v3)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v3)->value3)->value1, (($v3)->value3)->value2, (($v3)->value3)->value3));
} else {
$__t11 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
};
$__t10 = $__t11;
} else {
$__t10 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
};
$__t3 = $__t10;
} else {
if (((is_object($v3) && (($v3)->tag === "T")) && (is_object(($v3)->value0) && ((($v3)->value0)->tag === "R")))) {
if ((is_object(($v3)->value1) && ((($v3)->value1)->tag === "T"))) {
if ((is_object((($v3)->value1)->value0) && (((($v3)->value1)->value0)->tag === "R"))) {
$__t14 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), $v1, $v2, (($v3)->value1)->value1), (($v3)->value1)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v3)->value1)->value3, ($v3)->value2, ($v3)->value3));
} else {
if (((is_object(($v3)->value3) && ((($v3)->value3)->tag === "T")) && (is_object((($v3)->value3)->value0) && (((($v3)->value3)->value0)->tag === "R")))) {
$__t14 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), $v1, $v2, ($v3)->value1), ($v3)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v3)->value3)->value1, (($v3)->value3)->value2, (($v3)->value3)->value3));
} else {
$__t14 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
};
$__t13 = $__t14;
} else {
if (((is_object(($v3)->value3) && ((($v3)->value3)->tag === "T")) && (is_object((($v3)->value3)->value0) && (((($v3)->value3)->value0)->tag === "R")))) {
$__t13 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), $v1, $v2, ($v3)->value1), ($v3)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v3)->value3)->value1, (($v3)->value3)->value2, (($v3)->value3)->value3));
} else {
$__t13 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
};
$__t3 = $__t13;
} else {
$__t3 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
};
};
$__t2 = $__t3;
} else {
if (((is_object($v3) && (($v3)->tag === "T")) && (is_object(($v3)->value0) && ((($v3)->value0)->tag === "R")))) {
if ((is_object(($v3)->value1) && ((($v3)->value1)->tag === "T"))) {
if ((is_object((($v3)->value1)->value0) && (((($v3)->value1)->value0)->tag === "R"))) {
$__t16 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), $v1, $v2, (($v3)->value1)->value1), (($v3)->value1)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v3)->value1)->value3, ($v3)->value2, ($v3)->value3));
} else {
if (((is_object(($v3)->value3) && ((($v3)->value3)->tag === "T")) && (is_object((($v3)->value3)->value0) && (((($v3)->value3)->value0)->tag === "R")))) {
$__t16 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), $v1, $v2, ($v3)->value1), ($v3)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v3)->value3)->value1, (($v3)->value3)->value2, (($v3)->value3)->value3));
} else {
$__t16 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
};
$__t15 = $__t16;
} else {
if (((is_object(($v3)->value3) && ((($v3)->value3)->tag === "T")) && (is_object((($v3)->value3)->value0) && (((($v3)->value3)->value0)->tag === "R")))) {
$__t15 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), $v1, $v2, ($v3)->value1), ($v3)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v3)->value3)->value1, (($v3)->value3)->value2, (($v3)->value3)->value3));
} else {
$__t15 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
};
$__t2 = $__t15;
} else {
$__t2 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
};
$__t1 = $__t2;
} else {
if (((is_object($v3) && (($v3)->tag === "T")) && (is_object(($v3)->value0) && ((($v3)->value0)->tag === "R")))) {
if ((is_object(($v3)->value1) && ((($v3)->value1)->tag === "T"))) {
if ((is_object((($v3)->value1)->value0) && (((($v3)->value1)->value0)->tag === "R"))) {
$__t18 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), $v1, $v2, (($v3)->value1)->value1), (($v3)->value1)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v3)->value1)->value3, ($v3)->value2, ($v3)->value3));
} else {
if (((is_object(($v3)->value3) && ((($v3)->value3)->tag === "T")) && (is_object((($v3)->value3)->value0) && (((($v3)->value3)->value0)->tag === "R")))) {
$__t18 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), $v1, $v2, ($v3)->value1), ($v3)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v3)->value3)->value1, (($v3)->value3)->value2, (($v3)->value3)->value3));
} else {
$__t18 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
};
$__t17 = $__t18;
} else {
if (((is_object(($v3)->value3) && ((($v3)->value3)->tag === "T")) && (is_object((($v3)->value3)->value0) && (((($v3)->value3)->value0)->tag === "R")))) {
$__t17 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data4("T", new Phpurs_Data0("B"), $v1, $v2, ($v3)->value1), ($v3)->value2, new Phpurs_Data4("T", new Phpurs_Data0("B"), (($v3)->value3)->value1, (($v3)->value3)->value2, (($v3)->value3)->value3));
} else {
$__t17 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
};
$__t1 = $__t17;
} else {
$__t1 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
};
$__t0 = $__t1;
} else {
$__t0 = new Phpurs_Data4("T", $v, $v1, $v2, $v3);
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Test_RBTree_insert'] = function() { $v = (function() {
  $__fn = function($x, $s = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $ins = null;
  $ins = function($v) use (&$ins, &$x) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "E"))) {
$__t0 = new Phpurs_Data4("T", new Phpurs_Data0("R"), new Phpurs_Data0("E"), $x, new Phpurs_Data0("E"));
} else {
if ((is_object($v) && (($v)->tag === "T"))) {
if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($x))(($v)->value2)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($x))(($v)->value2))->tag === "LT"))) {
$__t1 = ((((($GLOBALS['Test_RBTree_balance'] ?? \PhpursThunks::eval('Test_RBTree_balance')))(($v)->value0))(($ins)(($v)->value1)))(($v)->value2))(($v)->value3);
} else {
if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($x))(($v)->value2)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($x))(($v)->value2))->tag === "GT"))) {
$__t1 = ((((($GLOBALS['Test_RBTree_balance'] ?? \PhpursThunks::eval('Test_RBTree_balance')))(($v)->value0))(($v)->value1))(($v)->value2))(($ins)(($v)->value3));
} else {
$__t1 = new Phpurs_Data4("T", ($v)->value0, ($v)->value1, ($v)->value2, ($v)->value3);
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
  $__local_var_2 = ($ins)($s);
  if ((is_object($__local_var_2) && (($__local_var_2)->tag === "T"))) {
$__t3 = new Phpurs_Data4("T", new Phpurs_Data0("B"), ($__local_var_2)->value1, ($__local_var_2)->value2, ($__local_var_2)->value3);
} else {
if ((is_object($__local_var_2) && (($__local_var_2)->tag === "E"))) {
$__t3 = new Phpurs_Data0("E");
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Test_RBTree_buildTree'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  switch ($v) {
case 0:
$__t0 = $v1;
break;
default:
$__t0 = ((($GLOBALS['Test_RBTree_buildTree'] ?? \PhpursThunks::eval('Test_RBTree_buildTree')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($v))(1)))(((($GLOBALS['Test_RBTree_insert'] ?? \PhpursThunks::eval('Test_RBTree_insert')))($v))($v1));
break;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Test_RBTree_act'] = function() { $v = (($GLOBALS['Effect_Console_log'] ?? \PhpursThunks::eval('Effect_Console_log')))((($GLOBALS['Data_Show_showIntImpl'] ?? \PhpursThunks::eval('Data_Show_showIntImpl')))((($GLOBALS['Test_RBTree_depth'] ?? \PhpursThunks::eval('Test_RBTree_depth')))(((($GLOBALS['Test_RBTree_buildTree'] ?? \PhpursThunks::eval('Test_RBTree_buildTree')))(100000))(new Phpurs_Data0("E"))))); return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };













