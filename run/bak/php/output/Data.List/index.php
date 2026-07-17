<?php

namespace Data\List;

// ALL IMPORTS: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Lazy, Control.Monad.Rec.Class, Control.Semigroupoid, Data.Bifunctor, Data.Boolean, Data.Eq, Data.Foldable, Data.Function, Data.Functor, Data.HeytingAlgebra, Data.List, Data.List.Internal, Data.List.Types, Data.Maybe, Data.Newtype, Data.NonEmpty, Data.Ord, Data.Ordering, Data.Ring, Data.Semigroup, Data.Semiring, Data.Show, Data.Traversable, Data.Tuple, Data.Unfoldable, Data.Unit, Prelude, Prim
// TO REQUIRE: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Lazy, Control.Monad.Rec.Class, Control.Semigroupoid, Data.Bifunctor, Data.Boolean, Data.Eq, Data.Foldable, Data.Function, Data.Functor, Data.HeytingAlgebra, Data.List, Data.List.Internal, Data.List.Types, Data.Maybe, Data.Newtype, Data.NonEmpty, Data.Ord, Data.Ordering, Data.Ring, Data.Semigroup, Data.Semiring, Data.Show, Data.Traversable, Data.Tuple, Data.Unfoldable, Data.Unit, Prelude
require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Internal/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
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
\PhpursThunks::$thunks['Data_List_tailRecM2'] = function() { $v = (function() {
  $__fn = function($f, $a = null, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($GLOBALS['Control_Monad_Rec_Class_monadRecMaybe'] ?? \PhpursThunks::eval('Control_Monad_Rec_Class_monadRecMaybe')))->tailRecM)(function($o) use (&$f) {
  $__num = \func_num_args();
  $__res = (($f)(($o)->a))(($o)->b);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((object)["a" => $a, "b" => $b]);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_any'] = function() { $v = ((($GLOBALS['Data_Foldable_any'] ?? \PhpursThunks::eval('Data_Foldable_any')))(($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList'))))(($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_heytingAlgebraBoolean'))); return $v; };
\PhpursThunks::$thunks['Data_List_Pattern'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_updateAt'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v2) && (($v2)->tag === "Cons"))) {
switch ($v) {
case 0:
$__t3 = new Phpurs_Data1("Just", new Phpurs_Data2("Cons", $v1, ($v2)->value1));
break;
default:
$__local_var_1 = (((($GLOBALS['Data_List_updateAt'] ?? \PhpursThunks::eval('Data_List_updateAt')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($v))(1)))($v1))(($v2)->value1);
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Just"))) {
$__t2 = new Phpurs_Data1("Just", new Phpurs_Data2("Cons", ($v2)->value0, ($__local_var_1)->value0));
} else {
$__t2 = new Phpurs_Data0("Nothing");
};
$__t3 = $__t2;
break;
};
$__t0 = $__t3;
} else {
$__t0 = new Phpurs_Data0("Nothing");
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_unzip'] = function() { $v = (((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldr)(function($v) {
  $__num = \func_num_args();
  $__local_var_0 = ($v)->value0;
  $__local_var_1 = ($v)->value1;
  $__res = function($v1) use (&$__local_var_0, &$__local_var_1) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", new Phpurs_Data2("Cons", $__local_var_0, ($v1)->value0), new Phpurs_Data2("Cons", $__local_var_1, ($v1)->value1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(new Phpurs_Data2("Tuple", new Phpurs_Data0("Nil"), new Phpurs_Data0("Nil"))); return $v; };
\PhpursThunks::$thunks['Data_List_uncons'] = function() { $v = function($v) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t0 = new Phpurs_Data1("Just", (object)["head" => ($v)->value0, "tail" => ($v)->value1]);
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
\PhpursThunks::$thunks['Data_List_toUnfoldable'] = function() { $v = function($dictUnfoldable) {
  $__num = \func_num_args();
  $__res = (($dictUnfoldable)->unfoldr)(function($xs) {
  $__num = \func_num_args();
  if ((is_object($xs) && (($xs)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($xs) && (($xs)->tag === "Cons"))) {
$__t0 = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", ($xs)->value0, ($xs)->value1));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_tail'] = function() { $v = function($v) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t0 = new Phpurs_Data1("Just", ($v)->value1);
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
\PhpursThunks::$thunks['Data_List_stripPrefix'] = function() { $v = (function() {
  $__fn = function($dictEq, $v = null, $s = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($GLOBALS['Data_List_tailRecM2'] ?? \PhpursThunks::eval('Data_List_tailRecM2')))((function() use (&$dictEq) {
  $__fn = function($prefix, $input = null) use (&$dictEq, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($input) && (($input)->tag === "Cons"))) {
if ((is_object($prefix) && (($prefix)->tag === "Cons"))) {
if (((($dictEq)->eq)(($prefix)->value0))(($input)->value0)) {
$__t2 = new Phpurs_Data1("Just", new Phpurs_Data1("Loop", (object)["a" => ($prefix)->value1, "b" => ($input)->value1]));
} else {
$__t2 = new Phpurs_Data0("Nothing");
};
$__t1 = $__t2;
} else {
if ((is_object($prefix) && (($prefix)->tag === "Nil"))) {
$__t1 = new Phpurs_Data1("Just", new Phpurs_Data1("Done", $input));
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
};
$__t0 = $__t1;
} else {
if ((is_object($prefix) && (($prefix)->tag === "Nil"))) {
$__t0 = new Phpurs_Data1("Just", new Phpurs_Data1("Done", $input));
} else {
$__t0 = new Phpurs_Data0("Nothing");
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))($v))($s);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_span'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if (((is_object($v1) && (($v1)->tag === "Cons")) && ($v)(($v1)->value0))) {
$v2_1 = ((($GLOBALS['Data_List_span'] ?? \PhpursThunks::eval('Data_List_span')))($v))(($v1)->value1);
$__t0 = (object)["init" => new Phpurs_Data2("Cons", ($v1)->value0, ($v2_1)->init), "rest" => ($v2_1)->rest];
} else {
$__t0 = (object)["init" => new Phpurs_Data0("Nil"), "rest" => $v1];
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_snoc'] = function() { $v = (function() {
  $__fn = function($xs, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldr)(($GLOBALS['Data_List_Types_Cons'] ?? \PhpursThunks::eval('Data_List_Types_Cons'))))(new Phpurs_Data2("Cons", $x, new Phpurs_Data0("Nil"))))($xs);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_singleton'] = function() { $v = function($a) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $a, new Phpurs_Data0("Nil"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_sortBy'] = function() { $v = function($cmp) {
  $__num = \func_num_args();
  $merge = null;
  $merge = (function() use (&$cmp, &$merge) {
  $__fn = function($v, $v1 = null) use (&$cmp, &$merge, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Cons"))) {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
if ((is_object((($cmp)(($v)->value0))(($v1)->value0)) && (((($cmp)(($v)->value0))(($v1)->value0))->tag === "GT"))) {
$__t2 = new Phpurs_Data2("Cons", ($v1)->value0, (($merge)($v))(($v1)->value1));
} else {
$__t2 = new Phpurs_Data2("Cons", ($v)->value0, (($merge)(($v)->value1))($v1));
};
$__t1 = $__t2;
} else {
if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t1 = $v;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
$__t0 = $__t1;
} else {
if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = $v1;
} else {
if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t0 = $v;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $mergePairs = null;
  $mergePairs = function($v) use (&$merge, &$mergePairs) {
  $__num = \func_num_args();
  if (((is_object($v) && (($v)->tag === "Cons")) && (is_object(($v)->value1) && ((($v)->value1)->tag === "Cons")))) {
$__t3 = new Phpurs_Data2("Cons", (($merge)(($v)->value0))((($v)->value1)->value0), ($mergePairs)((($v)->value1)->value1));
} else {
$__t3 = $v;
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $mergeAll = null;
  $mergeAll = function($v) use (&$mergeAll, &$mergePairs) {
  $__num = \func_num_args();
  if (((is_object($v) && (($v)->tag === "Cons")) && (is_object(($v)->value1) && ((($v)->value1)->tag === "Nil")))) {
$__t4 = ($v)->value0;
} else {
$__t4 = ($mergeAll)(($mergePairs)($v));
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $sequences = null;
  $descending = null;
  $ascending = null;
  $sequences = function($v) use (&$ascending, &$cmp, &$descending) {
  $__num = \func_num_args();
  if (((is_object($v) && (($v)->tag === "Cons")) && (is_object(($v)->value1) && ((($v)->value1)->tag === "Cons")))) {
if ((is_object((($cmp)(($v)->value0))((($v)->value1)->value0)) && (((($cmp)(($v)->value0))((($v)->value1)->value0))->tag === "GT"))) {
$__t7 = ((($descending)((($v)->value1)->value0))(new Phpurs_Data2("Cons", ($v)->value0, new Phpurs_Data0("Nil"))))((($v)->value1)->value1);
} else {
$__local_var_6 = ($v)->value0;
$__t7 = ((($ascending)((($v)->value1)->value0))(function($v1) use (&$__local_var_6) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_6, $v1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((($v)->value1)->value1);
};
$__t5 = $__t7;
} else {
$__t5 = new Phpurs_Data2("Cons", $v, new Phpurs_Data0("Nil"));
};
  $__res = $__t5;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $descending = (function() use (&$cmp, &$descending, &$sequences) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$cmp, &$descending, &$sequences, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if (((is_object($v2) && (($v2)->tag === "Cons")) && (is_object((($cmp)($v))(($v2)->value0)) && (((($cmp)($v))(($v2)->value0))->tag === "GT")))) {
$__t8 = ((($descending)(($v2)->value0))(new Phpurs_Data2("Cons", $v, $v1)))(($v2)->value1);
} else {
$__t8 = new Phpurs_Data2("Cons", new Phpurs_Data2("Cons", $v, $v1), ($sequences)($v2));
};
  $__res = $__t8;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  $ascending = (function() use (&$ascending, &$cmp, &$sequences) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$ascending, &$cmp, &$sequences, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if (((is_object($v2) && (($v2)->tag === "Cons")) && ((($GLOBALS['Data_Eq_eqBooleanImpl'] ?? \PhpursThunks::eval('Data_Eq_eqBooleanImpl')))((is_object((($cmp)($v))(($v2)->value0)) && (((($cmp)($v))(($v2)->value0))->tag === "GT"))))(false))) {
$__t9 = ((($ascending)(($v2)->value0))(function($ys) use (&$v, &$v1) {
  $__num = \func_num_args();
  $__res = ($v1)(new Phpurs_Data2("Cons", $v, $ys));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($v2)->value1);
} else {
$__t9 = new Phpurs_Data2("Cons", ($v1)(new Phpurs_Data2("Cons", $v, new Phpurs_Data0("Nil"))), ($sequences)($v2));
};
  $__res = $__t9;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($mergeAll))($sequences);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_sort'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = function($xs) use (&$compare_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_List_sortBy'] ?? \PhpursThunks::eval('Data_List_sortBy')))($compare_0))($xs);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_showPattern'] = function() { $v = function($dictShow) {
  $__num = \func_num_args();
  $__res = (object)["show" => function($v) use (&$dictShow) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(Pattern "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((((($GLOBALS['Data_List_Types_showList'] ?? \PhpursThunks::eval('Data_List_Types_showList')))($dictShow))->show)($v)))(")"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_reverse'] = function() { $v = (function() use (&$__fn) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t0 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t0 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
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
return ($go)(new Phpurs_Data0("Nil"));
})(); return $v; };
\PhpursThunks::$thunks['Data_List_take'] = function() { $v = (function() use (&$__fn) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($v1))(1)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($v1))(1))->tag === "LT"))) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t1 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t1 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
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
$__t0 = (($go)(new Phpurs_Data0("Nil")))($v);
} else {
if ((is_object($v2) && (($v2)->tag === "Nil"))) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t2 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t2 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__t0 = (($go)(new Phpurs_Data0("Nil")))($v);
} else {
if ((is_object($v2) && (($v2)->tag === "Cons"))) {
$__t0 = ((($go)(new Phpurs_Data2("Cons", ($v2)->value0, $v)))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($v1))(1)))(($v2)->value1);
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
})();
return ($go)(new Phpurs_Data0("Nil"));
})(); return $v; };
\PhpursThunks::$thunks['Data_List_takeWhile'] = function() { $v = function($p) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$go, &$p) {
  $__fn = function($v, $v1 = null) use (&$go, &$p, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if (((is_object($v1) && (($v1)->tag === "Cons")) && ($p)(($v1)->value0))) {
$__t1 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
} else {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t0 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t0 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
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
$__t1 = (($go)(new Phpurs_Data0("Nil")))($v);
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($go)(new Phpurs_Data0("Nil"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_unsnoc'] = function() { $v = function($lst) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
if ((is_object(($v)->value1) && ((($v)->value1)->tag === "Nil"))) {
$__t1 = new Phpurs_Data1("Just", (object)["revInit" => $v1, "last" => ($v)->value0]);
} else {
$__t1 = (($go)(($v)->value1))(new Phpurs_Data2("Cons", ($v)->value0, $v1));
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
  $__local_var_2 = (($go)($lst))(new Phpurs_Data0("Nil"));
  if ((is_object($__local_var_2) && (($__local_var_2)->tag === "Just"))) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t4 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t4 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__t3 = new Phpurs_Data1("Just", (object)["init" => (($go)(new Phpurs_Data0("Nil")))((($__local_var_2)->value0)->revInit), "last" => (($__local_var_2)->value0)->last]);
} else {
$__t3 = new Phpurs_Data0("Nothing");
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_zipWith'] = function() { $v = (function() {
  $__fn = function($f, $xs = null, $ys = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $go = null;
  $go = (function() use (&$f, &$go) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$f, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = $v2;
} else {
if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t0 = $v2;
} else {
if (((is_object($v) && (($v)->tag === "Cons")) && (is_object($v1) && (($v1)->tag === "Cons")))) {
$__t0 = ((($go)(($v)->value1))(($v1)->value1))(new Phpurs_Data2("Cons", (($f)(($v)->value0))(($v1)->value0), $v2));
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
})();
  $go = null;
  $go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t1 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t1 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
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
  $__res = (($go)(new Phpurs_Data0("Nil")))(((($go)($xs))($ys))(new Phpurs_Data0("Nil")));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_zip'] = function() { $v = (function() {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = (function() use (&$go) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = $v2;
} else {
if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t0 = $v2;
} else {
if (((is_object($v) && (($v)->tag === "Cons")) && (is_object($v1) && (($v1)->tag === "Cons")))) {
$__t0 = ((($go)(($v)->value1))(($v1)->value1))(new Phpurs_Data2("Cons", new Phpurs_Data2("Tuple", ($v)->value0, ($v1)->value0), $v2));
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
})();
  $go = null;
  $go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t1 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t1 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
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
  $__res = (($go)(new Phpurs_Data0("Nil")))(((($go)($xs))($ys))(new Phpurs_Data0("Nil")));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_zipWithA'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $sequence1_0 = (((($GLOBALS['Data_List_Types_traversableList'] ?? \PhpursThunks::eval('Data_List_Types_traversableList')))->traverse)($dictApplicative))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  $__res = (function() use (&$sequence1_0) {
  $__fn = function($f, $xs = null, $ys = null) use (&$sequence1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $go = null;
  $go = (function() use (&$f, &$go) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$f, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t1 = $v2;
} else {
if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t1 = $v2;
} else {
if (((is_object($v) && (($v)->tag === "Cons")) && (is_object($v1) && (($v1)->tag === "Cons")))) {
$__t1 = ((($go)(($v)->value1))(($v1)->value1))(new Phpurs_Data2("Cons", (($f)(($v)->value0))(($v1)->value0), $v2));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  $go = null;
  $go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t2 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t2 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($sequence1_0)((($go)(new Phpurs_Data0("Nil")))(((($go)($xs))($ys))(new Phpurs_Data0("Nil"))));
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
\PhpursThunks::$thunks['Data_List_range'] = function() { $v = (function() {
  $__fn = function($start, $end = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if (((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))($start))($end)) {
$__t2 = new Phpurs_Data2("Cons", $start, new Phpurs_Data0("Nil"));
} else {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($s, $e = null, $step = null, $rest = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  if (((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))($s))($e)) {
$__t0 = new Phpurs_Data2("Cons", $s, $rest);
} else {
$__t0 = (((($go)(((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))($s))($step)))($e))($step))(new Phpurs_Data2("Cons", $s, $rest));
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($start))($end)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($start))($end))->tag === "GT"))) {
$__t1 = 1;
} else {
$__t1 = ((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))(0))(1);
};
$__t2 = (((($go)($end))($start))($__t1))(new Phpurs_Data0("Nil"));
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_partition'] = function() { $v = (function() {
  $__fn = function($p, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldr)((function() use (&$p) {
  $__fn = function($x, $v = null) use (&$p, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if (($p)($x)) {
$__t0 = (object)["no" => ($v)->no, "yes" => new Phpurs_Data2("Cons", $x, ($v)->yes)];
} else {
$__t0 = (object)["no" => new Phpurs_Data2("Cons", $x, ($v)->no), "yes" => ($v)->yes];
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))((object)["no" => new Phpurs_Data0("Nil"), "yes" => new Phpurs_Data0("Nil")]))($xs);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_null'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = (is_object($v) && (($v)->tag === "Nil"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_nubBy'] = function() { $v = function($p) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$go, &$p) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$go, &$p, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v2) && (($v2)->tag === "Nil"))) {
$__t0 = $v1;
} else {
if ((is_object($v2) && (($v2)->tag === "Cons"))) {
$v3_1 = (((($GLOBALS['Data_List_Internal_insertAndLookupBy'] ?? \PhpursThunks::eval('Data_List_Internal_insertAndLookupBy')))($p))(($v2)->value0))($v);
if (($v3_1)->found) {
$__t2 = ((($go)(($v3_1)->result))($v1))(($v2)->value1);
} else {
$__t2 = ((($go)(($v3_1)->result))(new Phpurs_Data2("Cons", ($v2)->value0, $v1)))(($v2)->value1);
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
})();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_reverse'] ?? \PhpursThunks::eval('Data_List_reverse'))))((($go)(new Phpurs_Data0("Leaf")))(new Phpurs_Data0("Nil")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_nub'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_List_nubBy'] ?? \PhpursThunks::eval('Data_List_nubBy')))(($dictOrd)->compare);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_newtypePattern'] = function() { $v = (object)["Coercible0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_mapMaybe'] = function() { $v = function($f) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$f, &$go) {
  $__fn = function($v, $v1 = null) use (&$f, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t1 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t1 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
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
$__t0 = (($go)(new Phpurs_Data0("Nil")))($v);
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$v2_2 = ($f)(($v1)->value0);
if ((is_object($v2_2) && (($v2_2)->tag === "Nothing"))) {
$__t3 = (($go)($v))(($v1)->value1);
} else {
if ((is_object($v2_2) && (($v2_2)->tag === "Just"))) {
$__t3 = (($go)(new Phpurs_Data2("Cons", ($v2_2)->value0, $v)))(($v1)->value1);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
$__t0 = $__t3;
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
  $__res = ($go)(new Phpurs_Data0("Nil"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_manyRec'] = function() { $v = (function() {
  $__fn = function($dictMonadRec, $dictAlternative = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $Alt0_0 = (((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Alt0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_1 = (($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($p) use (&$Alt0_0, &$__local_var_1, &$dictMonadRec) {
  $__num = \func_num_args();
  $__res = ((($dictMonadRec)->tailRecM)(function($acc) use (&$Alt0_0, &$__local_var_1, &$dictMonadRec, &$p) {
  $__num = \func_num_args();
  $__res = ((((((($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)(((($Alt0_0)->alt)(((((($Alt0_0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Control_Monad_Rec_Class_Loop'] ?? \PhpursThunks::eval('Control_Monad_Rec_Class_Loop'))))($p)))((($__local_var_1)->pure)(new Phpurs_Data1("Done", ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')))))))(function($aa) use (&$__local_var_1, &$acc) {
  $__num = \func_num_args();
  if ((is_object($aa) && (($aa)->tag === "Loop"))) {
$__t2 = new Phpurs_Data1("Loop", new Phpurs_Data2("Cons", ($aa)->value0, $acc));
} else {
if ((is_object($aa) && (($aa)->tag === "Done"))) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t3 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t3 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
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
})();
$__t2 = new Phpurs_Data1("Done", (($go)(new Phpurs_Data0("Nil")))($acc));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
  $__res = (($__local_var_1)->pure)($__t2);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(new Phpurs_Data0("Nil"));
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
\PhpursThunks::$thunks['Data_List_someRec'] = function() { $v = (function() {
  $__fn = function($dictMonadRec, $dictAlternative = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $manyRec2_0 = ((($GLOBALS['Data_List_manyRec'] ?? \PhpursThunks::eval('Data_List_manyRec')))($dictMonadRec))($dictAlternative);
  $__res = function($v) use (&$dictAlternative, &$manyRec2_0) {
  $__num = \func_num_args();
  $__res = ((((((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->apply)(((((((((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Alt0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_List_Types_Cons'] ?? \PhpursThunks::eval('Data_List_Types_Cons'))))($v)))(($manyRec2_0)($v));
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
\PhpursThunks::$thunks['Data_List_some'] = function() { $v = (function() {
  $__fn = function($dictAlternative, $dictLazy = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->apply)(((((((((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Alt0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_List_Types_Cons'] ?? \PhpursThunks::eval('Data_List_Types_Cons'))))($v)))((($dictLazy)->defer)(function($v1) use (&$dictAlternative, &$dictLazy, &$v) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_List_many'] ?? \PhpursThunks::eval('Data_List_many')))($dictAlternative))($dictLazy))($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_many'] = function() { $v = (function() {
  $__fn = function($dictAlternative, $dictLazy = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Alt0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->alt)((((($GLOBALS['Data_List_some'] ?? \PhpursThunks::eval('Data_List_some')))($dictAlternative))($dictLazy))($v)))((((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(new Phpurs_Data0("Nil")));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_length'] = function() { $v = (function() use (&$__fn) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($b, $v = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = $b;
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t0 = (($go)(((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))($b))(1)))(($v)->value1);
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
return ($go)(0);
})(); return $v; };
\PhpursThunks::$thunks['Data_List_last'] = function() { $v = function($v) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Cons"))) {
if ((is_object(($v)->value1) && ((($v)->value1)->tag === "Nil"))) {
$__t1 = new Phpurs_Data1("Just", ($v)->value0);
} else {
$__t1 = (($GLOBALS['Data_List_last'] ?? \PhpursThunks::eval('Data_List_last')))(($v)->value1);
};
$__t0 = $__t1;
} else {
$__t0 = new Phpurs_Data0("Nothing");
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_insertBy'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v2) && (($v2)->tag === "Nil"))) {
$__t0 = new Phpurs_Data2("Cons", $v1, new Phpurs_Data0("Nil"));
} else {
if ((is_object($v2) && (($v2)->tag === "Cons"))) {
if ((is_object((($v)($v1))(($v2)->value0)) && (((($v)($v1))(($v2)->value0))->tag === "GT"))) {
$__t1 = new Phpurs_Data2("Cons", ($v2)->value0, (((($GLOBALS['Data_List_insertBy'] ?? \PhpursThunks::eval('Data_List_insertBy')))($v))($v1))(($v2)->value1));
} else {
$__t1 = new Phpurs_Data2("Cons", $v1, $v2);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_insertAt'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if (($v === 0)) {
$__t0 = new Phpurs_Data1("Just", new Phpurs_Data2("Cons", $v1, $v2));
} else {
if ((is_object($v2) && (($v2)->tag === "Cons"))) {
$__local_var_1 = (((($GLOBALS['Data_List_insertAt'] ?? \PhpursThunks::eval('Data_List_insertAt')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($v))(1)))($v1))(($v2)->value1);
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Just"))) {
$__t2 = new Phpurs_Data1("Just", new Phpurs_Data2("Cons", ($v2)->value0, ($__local_var_1)->value0));
} else {
$__t2 = new Phpurs_Data0("Nothing");
};
$__t0 = $__t2;
} else {
$__t0 = new Phpurs_Data0("Nothing");
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_insert'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_List_insertBy'] ?? \PhpursThunks::eval('Data_List_insertBy')))(($dictOrd)->compare);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_init'] = function() { $v = function($lst) {
  $__num = \func_num_args();
  $__local_var_0 = (($GLOBALS['Data_List_unsnoc'] ?? \PhpursThunks::eval('Data_List_unsnoc')))($lst);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", (($__local_var_0)->value0)->init);
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_index'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
switch ($v1) {
case 0:
$__t1 = new Phpurs_Data1("Just", ($v)->value0);
break;
default:
$__t1 = ((($GLOBALS['Data_List_index'] ?? \PhpursThunks::eval('Data_List_index')))(($v)->value1))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($v1))(1));
break;
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
\PhpursThunks::$thunks['Data_List_head'] = function() { $v = function($v) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t0 = new Phpurs_Data1("Just", ($v)->value0);
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
\PhpursThunks::$thunks['Data_List_transpose'] = function() { $v = function($v) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nil");
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
if ((is_object(($v)->value0) && ((($v)->value0)->tag === "Nil"))) {
$__t1 = (($GLOBALS['Data_List_transpose'] ?? \PhpursThunks::eval('Data_List_transpose')))(($v)->value1);
} else {
if ((is_object(($v)->value0) && ((($v)->value0)->tag === "Cons"))) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t3 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t3 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
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
})();
$__t2 = (($go)(new Phpurs_Data0("Nil")))($v);
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
if ((is_object(($v1)->value0) && ((($v1)->value0)->tag === "Nil"))) {
$__t4 = (($go)($v))(($v1)->value1);
} else {
if ((is_object(($v1)->value0) && ((($v1)->value0)->tag === "Cons"))) {
$__t4 = (($go)(new Phpurs_Data2("Cons", (($v1)->value0)->value0, $v)))(($v1)->value1);
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
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$go = null;
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t6 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t6 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
  $__res = $__t6;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__t5 = (($go)(new Phpurs_Data0("Nil")))($v);
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
if ((is_object(($v1)->value0) && ((($v1)->value0)->tag === "Nil"))) {
$__t7 = (($go)($v))(($v1)->value1);
} else {
if ((is_object(($v1)->value0) && ((($v1)->value0)->tag === "Cons"))) {
$__t7 = (($go)(new Phpurs_Data2("Cons", (($v1)->value0)->value1, $v)))(($v1)->value1);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t7 = null;
};
};
$__t5 = $__t7;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t5 = null;
};
};
  $__res = $__t5;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__t1 = new Phpurs_Data2("Cons", new Phpurs_Data2("Cons", (($v)->value0)->value0, (($go)(new Phpurs_Data0("Nil")))(($v)->value1)), (($GLOBALS['Data_List_transpose'] ?? \PhpursThunks::eval('Data_List_transpose')))(new Phpurs_Data2("Cons", (($v)->value0)->value1, (($go)(new Phpurs_Data0("Nil")))(($v)->value1))));
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
}; return $v; };
\PhpursThunks::$thunks['Data_List_groupBy'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nil");
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$v2_1 = ((($GLOBALS['Data_List_span'] ?? \PhpursThunks::eval('Data_List_span')))(($v)(($v1)->value0)))(($v1)->value1);
$__t0 = new Phpurs_Data2("Cons", new Phpurs_Data2("NonEmpty", ($v1)->value0, ($v2_1)->init), ((($GLOBALS['Data_List_groupBy'] ?? \PhpursThunks::eval('Data_List_groupBy')))($v))(($v2_1)->rest));
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
\PhpursThunks::$thunks['Data_List_groupAllBy'] = function() { $v = function($p) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_List_groupBy'] ?? \PhpursThunks::eval('Data_List_groupBy')))((function() use (&$p) {
  $__fn = function($x, $y = null) use (&$p, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (is_object((($p)($x))($y)) && (((($p)($x))($y))->tag === "EQ"));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())))((($GLOBALS['Data_List_sortBy'] ?? \PhpursThunks::eval('Data_List_sortBy')))($p));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_group'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_List_groupBy'] ?? \PhpursThunks::eval('Data_List_groupBy')))(($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_groupAll'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_List_group'] ?? \PhpursThunks::eval('Data_List_group')))((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))))(function($xs) use (&$compare_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_List_sortBy'] ?? \PhpursThunks::eval('Data_List_sortBy')))($compare_0))($xs);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_fromFoldable'] = function() { $v = function($dictFoldable) {
  $__num = \func_num_args();
  $__res = ((($dictFoldable)->foldr)(($GLOBALS['Data_List_Types_Cons'] ?? \PhpursThunks::eval('Data_List_Types_Cons'))))(new Phpurs_Data0("Nil"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_foldM'] = function() { $v = (function() {
  $__fn = function($dictMonad, $v = null, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  if ((is_object($v2) && (($v2)->tag === "Nil"))) {
$__t0 = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)($v1);
} else {
if ((is_object($v2) && (($v2)->tag === "Cons"))) {
$__local_var_1 = ($v2)->value1;
$__t0 = ((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)((($v)($v1))(($v2)->value0)))(function($b__prime__) use (&$__local_var_1, &$dictMonad, &$v) {
  $__num = \func_num_args();
  $__res = ((((($GLOBALS['Data_List_foldM'] ?? \PhpursThunks::eval('Data_List_foldM')))($dictMonad))($v))($b__prime__))($__local_var_1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
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
})(); return $v; };
\PhpursThunks::$thunks['Data_List_findIndex'] = function() { $v = function($fn) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$fn, &$go) {
  $__fn = function($v, $v1 = null) use (&$fn, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Cons"))) {
if (($fn)(($v1)->value0)) {
$__t1 = new Phpurs_Data1("Just", $v);
} else {
$__t1 = (($go)(((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))($v))(1)))(($v1)->value1);
};
$__t0 = $__t1;
} else {
if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nothing");
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
  $__res = ($go)(0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_findLastIndex'] = function() { $v = (function() {
  $__fn = function($fn, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t0 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t0 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
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
  $__local_var_1 = ((($GLOBALS['Data_List_findIndex'] ?? \PhpursThunks::eval('Data_List_findIndex')))($fn))((($go)(new Phpurs_Data0("Nil")))($xs));
  if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Just"))) {
$__t2 = new Phpurs_Data1("Just", ((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))((($GLOBALS['Data_List_length'] ?? \PhpursThunks::eval('Data_List_length')))($xs)))(1)))(($__local_var_1)->value0));
} else {
$__t2 = new Phpurs_Data0("Nothing");
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_filterM'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_1 = (($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (function() use (&$__local_var_0, &$__local_var_1, &$dictMonad) {
  $__fn = function($v, $v1 = null) use (&$__local_var_0, &$__local_var_1, &$dictMonad, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t2 = (($__local_var_0)->pure)(new Phpurs_Data0("Nil"));
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__local_var_3 = ($v1)->value0;
$__local_var_4 = ($v1)->value1;
$__t2 = ((($__local_var_1)->bind)(($v)($__local_var_3)))(function($b) use (&$__local_var_0, &$__local_var_1, &$__local_var_3, &$__local_var_4, &$dictMonad, &$v) {
  $__num = \func_num_args();
  $__res = ((($__local_var_1)->bind)((((($GLOBALS['Data_List_filterM'] ?? \PhpursThunks::eval('Data_List_filterM')))($dictMonad))($v))($__local_var_4)))(function($xs__prime__) use (&$__local_var_0, &$__local_var_3, &$b) {
  $__num = \func_num_args();
  if ($b) {
$__t5 = new Phpurs_Data2("Cons", $__local_var_3, $xs__prime__);
} else {
$__t5 = $xs__prime__;
};
  $__res = (($__local_var_0)->pure)($__t5);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
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
\PhpursThunks::$thunks['Data_List_filter'] = function() { $v = function($p) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$go, &$p) {
  $__fn = function($v, $v1 = null) use (&$go, &$p, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t1 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t1 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
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
$__t0 = (($go)(new Phpurs_Data0("Nil")))($v);
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
if (($p)(($v1)->value0)) {
$__t2 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
} else {
$__t2 = (($go)($v))(($v1)->value1);
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
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($go)(new Phpurs_Data0("Nil"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_intersectBy'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t3 = new Phpurs_Data0("Nil");
} else {
if ((is_object($v2) && (($v2)->tag === "Nil"))) {
$__t3 = new Phpurs_Data0("Nil");
} else {
$go = null;
$go = (function() use (&$go, &$v2) {
  $__fn = function($v, $v1 = null) use (&$go, &$v2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t1 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t1 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
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
$__t0 = (($go)(new Phpurs_Data0("Nil")))($v);
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
if (((($GLOBALS['Data_List_any'] ?? \PhpursThunks::eval('Data_List_any')))(($v)(($v1)->value0)))($v2)) {
$__t2 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
} else {
$__t2 = (($go)($v))(($v1)->value1);
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
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__t3 = (($go)(new Phpurs_Data0("Nil")))($v1);
};
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_intersect'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_List_intersectBy'] ?? \PhpursThunks::eval('Data_List_intersectBy')))(($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_nubByEq'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nil");
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__local_var_1 = ($v1)->value0;
$go = null;
$go = (function() use (&$__local_var_1, &$go) {
  $__fn = function($v, $v1 = null) use (&$__local_var_1, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t3 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t3 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
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
})();
$__t2 = (($go)(new Phpurs_Data0("Nil")))($v);
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
if ((($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolNot')))((($v)($__local_var_1))(($v1)->value0))) {
$__t4 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
} else {
$__t4 = (($go)($v))(($v1)->value1);
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
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__t0 = new Phpurs_Data2("Cons", $__local_var_1, ((($GLOBALS['Data_List_nubByEq'] ?? \PhpursThunks::eval('Data_List_nubByEq')))($v))((($go)(new Phpurs_Data0("Nil")))(($v1)->value1)));
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
\PhpursThunks::$thunks['Data_List_nubEq'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_List_nubByEq'] ?? \PhpursThunks::eval('Data_List_nubByEq')))(($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_eqPattern'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (object)["eq" => (function() use (&$dictEq) {
  $__fn = function($x, $y = null) use (&$dictEq, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Data_List_Types_eq1List'] ?? \PhpursThunks::eval('Data_List_Types_eq1List')))->eq1)($dictEq))($x))($y);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_ordPattern'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $eqPattern1_1 = (object)["eq" => (function() use (&$__local_var_0) {
  $__fn = function($x, $y = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Data_List_Types_eq1List'] ?? \PhpursThunks::eval('Data_List_Types_eq1List')))->eq1)($__local_var_0))($x))($y);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $__res = (object)["compare" => (function() use (&$dictOrd) {
  $__fn = function($x, $y = null) use (&$dictOrd, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Data_List_Types_ordList'] ?? \PhpursThunks::eval('Data_List_Types_ordList')))($dictOrd))->compare)($x))($y);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($dollar__unused_0) use (&$eqPattern1_1) {
  $__num = \func_num_args();
  $__res = $eqPattern1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_elemLastIndex'] = function() { $v = (function() {
  $__fn = function($dictEq, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_List_findLastIndex'] ?? \PhpursThunks::eval('Data_List_findLastIndex')))(function($v) use (&$dictEq, &$x) {
  $__num = \func_num_args();
  $__res = ((($dictEq)->eq)($v))($x);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_elemIndex'] = function() { $v = (function() {
  $__fn = function($dictEq, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_List_findIndex'] ?? \PhpursThunks::eval('Data_List_findIndex')))(function($v) use (&$dictEq, &$x) {
  $__num = \func_num_args();
  $__res = ((($dictEq)->eq)($v))($x);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_dropWhile'] = function() { $v = function($p) {
  $__num = \func_num_args();
  $go = null;
  $go = function($v) use (&$go, &$p) {
  $__num = \func_num_args();
  if (((is_object($v) && (($v)->tag === "Cons")) && ($p)(($v)->value0))) {
$__t0 = ($go)(($v)->value1);
} else {
$__t0 = $v;
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
\PhpursThunks::$thunks['Data_List_dropEnd'] = function() { $v = (function() {
  $__fn = function($n, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_List_take'] ?? \PhpursThunks::eval('Data_List_take')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))((($GLOBALS['Data_List_length'] ?? \PhpursThunks::eval('Data_List_length')))($xs)))($n)))($xs);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_drop'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($v))(1)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($v))(1))->tag === "LT"))) {
$__t0 = $v1;
} else {
if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nil");
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t0 = ((($GLOBALS['Data_List_drop'] ?? \PhpursThunks::eval('Data_List_drop')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($v))(1)))(($v1)->value1);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_slice'] = function() { $v = (function() {
  $__fn = function($start, $end = null, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($GLOBALS['Data_List_take'] ?? \PhpursThunks::eval('Data_List_take')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($end))($start)))(((($GLOBALS['Data_List_drop'] ?? \PhpursThunks::eval('Data_List_drop')))($start))($xs));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_takeEnd'] = function() { $v = (function() {
  $__fn = function($n, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_List_drop'] ?? \PhpursThunks::eval('Data_List_drop')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))((($GLOBALS['Data_List_length'] ?? \PhpursThunks::eval('Data_List_length')))($xs)))($n)))($xs);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_deleteBy'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v2) && (($v2)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nil");
} else {
if ((is_object($v2) && (($v2)->tag === "Cons"))) {
if ((($v)($v1))(($v2)->value0)) {
$__t1 = ($v2)->value1;
} else {
$__t1 = new Phpurs_Data2("Cons", ($v2)->value0, (((($GLOBALS['Data_List_deleteBy'] ?? \PhpursThunks::eval('Data_List_deleteBy')))($v))($v1))(($v2)->value1));
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_unionBy'] = function() { $v = (function() {
  $__fn = function($eq2, $xs = null, $ys = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $go = null;
  $go = (function() use (&$eq2, &$go) {
  $__fn = function($b, $v = null) use (&$eq2, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = $b;
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t0 = (($go)((((($GLOBALS['Data_List_deleteBy'] ?? \PhpursThunks::eval('Data_List_deleteBy')))($eq2))(($v)->value0))($b)))(($v)->value1);
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
  $__res = ((((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldr)(($GLOBALS['Data_List_Types_Cons'] ?? \PhpursThunks::eval('Data_List_Types_Cons'))))((($go)(((($GLOBALS['Data_List_nubByEq'] ?? \PhpursThunks::eval('Data_List_nubByEq')))($eq2))($ys)))($xs)))($xs);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_union'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_List_unionBy'] ?? \PhpursThunks::eval('Data_List_unionBy')))(($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_deleteAt'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Cons"))) {
switch ($v) {
case 0:
$__t3 = new Phpurs_Data1("Just", ($v1)->value1);
break;
default:
$__local_var_1 = ((($GLOBALS['Data_List_deleteAt'] ?? \PhpursThunks::eval('Data_List_deleteAt')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($v))(1)))(($v1)->value1);
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Just"))) {
$__t2 = new Phpurs_Data1("Just", new Phpurs_Data2("Cons", ($v1)->value0, ($__local_var_1)->value0));
} else {
$__t2 = new Phpurs_Data0("Nothing");
};
$__t3 = $__t2;
break;
};
$__t0 = $__t3;
} else {
$__t0 = new Phpurs_Data0("Nothing");
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_delete'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_List_deleteBy'] ?? \PhpursThunks::eval('Data_List_deleteBy')))(($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_difference'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$dictEq, &$go) {
  $__fn = function($b, $v = null) use (&$dictEq, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = $b;
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t0 = (($go)((((($GLOBALS['Data_List_deleteBy'] ?? \PhpursThunks::eval('Data_List_deleteBy')))(($dictEq)->eq))(($v)->value0))($b)))(($v)->value1);
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
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_concatMap'] = function() { $v = (function() {
  $__fn = function($b, $a = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_List_Types_bindList'] ?? \PhpursThunks::eval('Data_List_Types_bindList')))->bind)($a))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_concat'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_List_Types_bindList'] ?? \PhpursThunks::eval('Data_List_Types_bindList')))->bind)($v))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_catMaybes'] = function() { $v = (function() use (&$__fn) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t1 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t1 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
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
$__t0 = (($go)(new Phpurs_Data0("Nil")))($v);
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
if ((is_object(($v1)->value0) && ((($v1)->value0)->tag === "Nothing"))) {
$__t2 = (($go)($v))(($v1)->value1);
} else {
if ((is_object(($v1)->value0) && ((($v1)->value0)->tag === "Just"))) {
$__t2 = (($go)(new Phpurs_Data2("Cons", (($v1)->value0)->value0, $v)))(($v1)->value1);
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
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return ($go)(new Phpurs_Data0("Nil"));
})(); return $v; };
\PhpursThunks::$thunks['Data_List_alterAt'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v2) && (($v2)->tag === "Cons"))) {
switch ($v) {
case 0:
$v3_4 = ($v1)(($v2)->value0);
if ((is_object($v3_4) && (($v3_4)->tag === "Nothing"))) {
$__t5 = ($v2)->value1;
} else {
if ((is_object($v3_4) && (($v3_4)->tag === "Just"))) {
$__t5 = new Phpurs_Data2("Cons", ($v3_4)->value0, ($v2)->value1);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t5 = null;
};
};
$__t3 = new Phpurs_Data1("Just", $__t5);
break;
default:
$__local_var_1 = (((($GLOBALS['Data_List_alterAt'] ?? \PhpursThunks::eval('Data_List_alterAt')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($v))(1)))($v1))(($v2)->value1);
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Just"))) {
$__t2 = new Phpurs_Data1("Just", new Phpurs_Data2("Cons", ($v2)->value0, ($__local_var_1)->value0));
} else {
$__t2 = new Phpurs_Data0("Nothing");
};
$__t3 = $__t2;
break;
};
$__t0 = $__t3;
} else {
$__t0 = new Phpurs_Data0("Nothing");
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_modifyAt'] = function() { $v = (function() {
  $__fn = function($n, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_List_alterAt'] ?? \PhpursThunks::eval('Data_List_alterAt')))($n))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))($f));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };














































































