<?php

namespace Data\List\Lazy\NonEmpty;

// ALL IMPORTS: Control.Applicative, Control.Bind, Control.Semigroupoid, Data.Foldable, Data.Function, Data.Functor, Data.Lazy, Data.List.Lazy, Data.List.Lazy.NonEmpty, Data.List.Lazy.Types, Data.Maybe, Data.NonEmpty, Data.Semigroup, Data.Semiring, Data.Tuple, Data.Unfoldable, Prelude, Prim
// TO REQUIRE: Control.Applicative, Control.Bind, Control.Semigroupoid, Data.Foldable, Data.Function, Data.Functor, Data.Lazy, Data.List.Lazy, Data.List.Lazy.NonEmpty, Data.List.Lazy.Types, Data.Maybe, Data.NonEmpty, Data.Semigroup, Data.Semiring, Data.Tuple, Data.Unfoldable, Prelude
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Lazy.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
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
\PhpursThunks::$thunks['Data_List_Lazy_NonEmpty_uncons'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $v1_0 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v);
  $__res = (object)["head" => ($v1_0)->value0, "tail" => ($v1_0)->value1];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_NonEmpty_toList'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $v1_0 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v);
  $__local_var_1 = ($v1_0)->value0;
  $__local_var_2 = ($v1_0)->value1;
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_1, &$__local_var_2) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_1, $__local_var_2);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_NonEmpty_toUnfoldable'] = function() { $v = function($dictUnfoldable) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($dictUnfoldable)->unfoldr)(function($xs) {
  $__num = \func_num_args();
  $__local_var_0 = (($GLOBALS['Data_List_Lazy_uncons'] ?? \PhpursThunks::eval('Data_List_Lazy_uncons')))($xs);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", (($__local_var_0)->value0)->head, (($__local_var_0)->value0)->tail));
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))(($GLOBALS['Data_List_Lazy_NonEmpty_toList'] ?? \PhpursThunks::eval('Data_List_Lazy_NonEmpty_toList')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_NonEmpty_tail'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v))->value1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_NonEmpty_singleton'] = function() { $v = (($GLOBALS['Data_List_Lazy_Types_applicativeNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_applicativeNonEmptyList')))->pure; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_NonEmpty_repeat'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$x) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $x, (($GLOBALS['Data_List_Lazy_repeat'] ?? \PhpursThunks::eval('Data_List_Lazy_repeat')))($x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_NonEmpty_length'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(1))((($GLOBALS['Data_List_Lazy_length'] ?? \PhpursThunks::eval('Data_List_Lazy_length')))(((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v))->value1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_NonEmpty_last'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $v1_0 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v);
  $__local_var_1 = (($GLOBALS['Data_List_Lazy_last'] ?? \PhpursThunks::eval('Data_List_Lazy_last')))(($v1_0)->value1);
  if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Nothing"))) {
$__t2 = ($v1_0)->value0;
} else {
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Just"))) {
$__t2 = ($__local_var_1)->value0;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_NonEmpty_iterate'] = function() { $v = (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$f, &$x) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $x, ((($GLOBALS['Data_List_Lazy_iterate'] ?? \PhpursThunks::eval('Data_List_Lazy_iterate')))($f))(($f)($x)));
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
\PhpursThunks::$thunks['Data_List_Lazy_NonEmpty_init'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $v1_0 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v);
  $__local_var_1 = (($GLOBALS['Data_List_Lazy_init'] ?? \PhpursThunks::eval('Data_List_Lazy_init')))(($v1_0)->value1);
  if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Nothing"))) {
$__t2 = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil'));
} else {
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Just"))) {
$__local_var_3 = ($__local_var_1)->value0;
$__t2 = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_3, &$v1_0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", ($v1_0)->value0, $__local_var_3);
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
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_NonEmpty_head'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v))->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_NonEmpty_fromList'] = function() { $v = function($l) {
  $__num = \func_num_args();
  $v_0 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))($l);
  if ((is_object($v_0) && (($v_0)->tag === "Nil"))) {
$__t1 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v_0) && (($v_0)->tag === "Cons"))) {
$__local_var_2 = ($v_0)->value0;
$__local_var_3 = ($v_0)->value1;
$__t1 = new Phpurs_Data1("Just", (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v1) use (&$__local_var_2, &$__local_var_3) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $__local_var_2, $__local_var_3);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_NonEmpty_fromFoldable'] = function() { $v = function($dictFoldable) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Lazy_NonEmpty_fromList'] ?? \PhpursThunks::eval('Data_List_Lazy_NonEmpty_fromList'))))(((($dictFoldable)->foldr)(($GLOBALS['Data_List_Lazy_Types_cons'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_cons'))))(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_NonEmpty_cons'] = function() { $v = (function() {
  $__fn = function($y, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v1) use (&$v, &$y) {
  $__num = \func_num_args();
  $v2_0 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v);
  $__local_var_1 = ($v2_0)->value0;
  $__local_var_2 = ($v2_0)->value1;
  $__res = new Phpurs_Data2("NonEmpty", $y, (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_1, &$__local_var_2) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_1, $__local_var_2);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
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
\PhpursThunks::$thunks['Data_List_Lazy_NonEmpty_concatMap'] = function() { $v = (function() {
  $__fn = function($b, $a = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_List_Lazy_Types_bindNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_bindNonEmptyList')))->bind)($a))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_NonEmpty_appendFoldable'] = function() { $v = function($dictFoldable) {
  $__num = \func_num_args();
  $fromFoldable1_0 = ((($dictFoldable)->foldr)(($GLOBALS['Data_List_Lazy_Types_cons'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_cons'))))(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')));
  $__res = (function() use (&$fromFoldable1_0) {
  $__fn = function($nel, $ys = null) use (&$fromFoldable1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$fromFoldable1_0, &$nel, &$ys) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", ((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($nel))->value0, (((($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_semigroupList')))->append)(((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($nel))->value1))(($fromFoldable1_0)($ys)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
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
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };


















