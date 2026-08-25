<?php

namespace Control\Monad\Rec\Class;

// ALL IMPORTS: Control.Applicative, Control.Bind, Control.Monad, Control.Monad.Rec.Class, Control.Semigroupoid, Data.Bifunctor, Data.Either, Data.Function, Data.Functor, Data.Identity, Data.Maybe, Data.Monoid, Data.Semigroup, Data.Unit, Effect, Effect.Ref, Partial.Unsafe, Prelude, Prim
// TO REQUIRE: Control.Applicative, Control.Bind, Control.Monad, Control.Monad.Rec.Class, Control.Semigroupoid, Data.Bifunctor, Data.Either, Data.Function, Data.Functor, Data.Identity, Data.Maybe, Data.Monoid, Data.Semigroup, Data.Unit, Effect, Effect.Ref, Partial.Unsafe, Prelude
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Ref/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
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
\PhpursThunks::$thunks['Control_Monad_Rec_Class_Loop'] = function() { $v = function($value0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Loop", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Rec_Class_Done'] = function() { $v = function($value0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Done", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Rec_Class_tailRecM'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->tailRecM;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Rec_Class_tailRecM2'] = function() { $v = (function() {
  $__fn = function($dictMonadRec, $f = null, $a = null, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((($dictMonadRec)->tailRecM)(function($o) use (&$f) {
  $__num = \func_num_args();
  $__res = (($f)(($o)->a))(($o)->b);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((object)["a" => $a, "b" => $b]);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_Rec_Class_tailRecM3'] = function() { $v = (function() {
  $__fn = function($dictMonadRec, $f = null, $a = null, $b = null, $c = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  $__res = ((($dictMonadRec)->tailRecM)(function($o) use (&$f) {
  $__num = \func_num_args();
  $__res = ((($f)(($o)->a))(($o)->b))(($o)->c);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((object)["a" => $a, "b" => $b, "c" => $c]);
  goto __end;;
  __end:
  return $__num > 5 ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_Rec_Class_untilJust'] = function() { $v = function($dictMonadRec) {
  $__num = \func_num_args();
  $__local_var_0 = (((((((($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($m) use (&$__local_var_0, &$dictMonadRec) {
  $__num = \func_num_args();
  $__res = ((($dictMonadRec)->tailRecM)(function($v) use (&$__local_var_0, &$m) {
  $__num = \func_num_args();
  $__res = ((($__local_var_0)->map)(function($v1) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Nothing"))) {
$__t1 = new Phpurs_Data1("Loop", ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
} else {
if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Done", ($v1)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($m);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Rec_Class_whileJust'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_0 = ($dictMonoid)->mempty;
  $__res = function($dictMonadRec) use (&$dictMonoid, &$mempty_0) {
  $__num = \func_num_args();
  $__local_var_1 = (((((((($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($m) use (&$__local_var_1, &$dictMonadRec, &$dictMonoid, &$mempty_0) {
  $__num = \func_num_args();
  $__res = ((($dictMonadRec)->tailRecM)(function($v) use (&$__local_var_1, &$dictMonoid, &$m) {
  $__num = \func_num_args();
  $__res = ((($__local_var_1)->map)(function($v1) use (&$dictMonoid, &$v) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Nothing"))) {
$__t2 = new Phpurs_Data1("Done", $v);
} else {
if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t2 = new Phpurs_Data1("Loop", ((((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->append)($v))(($v1)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($m);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($mempty_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Rec_Class_tailRec'] = function() { $v = function($f) {
  $__num = \func_num_args();
  $go = null;
  $go = function($v) use (&$f, &$go) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Loop"))) {
$__t0 = ($go)(($f)(($v)->value0));
} else {
if ((is_object($v) && (($v)->tag === "Done"))) {
$__t0 = ($v)->value0;
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
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($go))($f);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Rec_Class_tailRec2'] = function() { $v = (function() {
  $__fn = function($f, $a = null, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \PhpursThunks::eval('Control_Monad_Rec_Class_tailRec')))(function($o) use (&$f) {
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
\PhpursThunks::$thunks['Control_Monad_Rec_Class_tailRec3'] = function() { $v = (function() {
  $__fn = function($f, $a = null, $b = null, $c = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \PhpursThunks::eval('Control_Monad_Rec_Class_tailRec')))(function($o) use (&$f) {
  $__num = \func_num_args();
  $__res = ((($f)(($o)->a))(($o)->b))(($o)->c);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((object)["a" => $a, "b" => $b, "c" => $c]);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_Rec_Class_monadRecMaybe'] = function() { $v = (object)["tailRecM" => (function() {
  $__fn = function($f, $a0 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \PhpursThunks::eval('Control_Monad_Rec_Class_tailRec')))(function($v) use (&$f) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t0 = new Phpurs_Data1("Done", new Phpurs_Data0("Nothing"));
} else {
if ((is_object($v) && (($v)->tag === "Just"))) {
if ((is_object(($v)->value0) && ((($v)->value0)->tag === "Loop"))) {
$__t1 = new Phpurs_Data1("Loop", ($f)((($v)->value0)->value0));
} else {
if ((is_object(($v)->value0) && ((($v)->value0)->tag === "Done"))) {
$__t1 = new Phpurs_Data1("Done", new Phpurs_Data1("Just", (($v)->value0)->value0));
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
}))(($f)($a0));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Maybe_monadMaybe'] ?? \PhpursThunks::eval('Data_Maybe_monadMaybe'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Control_Monad_Rec_Class_monadRecIdentity'] = function() { $v = (object)["tailRecM" => function($f) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Identity_Identity'] ?? \PhpursThunks::eval('Data_Identity_Identity'))))((($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \PhpursThunks::eval('Control_Monad_Rec_Class_tailRec')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(function($v) {
  $__num = \func_num_args();
  $__res = $v;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($f)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Identity_monadIdentity'] ?? \PhpursThunks::eval('Data_Identity_monadIdentity'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Control_Monad_Rec_Class_monadRecFunction'] = function() { $v = (object)["tailRecM" => (function() {
  $__fn = function($f, $a0 = null, $e = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \PhpursThunks::eval('Control_Monad_Rec_Class_tailRec')))(function($a) use (&$e, &$f) {
  $__num = \func_num_args();
  $__res = (($f)($a))($e);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($a0);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Control_Monad_monadFn'] ?? \PhpursThunks::eval('Control_Monad_monadFn'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Control_Monad_Rec_Class_monadRecEither'] = function() { $v = (object)["tailRecM" => (function() {
  $__fn = function($f, $a0 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \PhpursThunks::eval('Control_Monad_Rec_Class_tailRec')))(function($v) use (&$f) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Left"))) {
$__t0 = new Phpurs_Data1("Done", new Phpurs_Data1("Left", ($v)->value0));
} else {
if ((is_object($v) && (($v)->tag === "Right"))) {
if ((is_object(($v)->value0) && ((($v)->value0)->tag === "Loop"))) {
$__t1 = new Phpurs_Data1("Loop", ($f)((($v)->value0)->value0));
} else {
if ((is_object(($v)->value0) && ((($v)->value0)->tag === "Done"))) {
$__t1 = new Phpurs_Data1("Done", new Phpurs_Data1("Right", (($v)->value0)->value0));
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
}))(($f)($a0));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Either_monadEither'] ?? \PhpursThunks::eval('Data_Either_monadEither'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Control_Monad_Rec_Class_monadRecEffect'] = function() { $v = (object)["tailRecM" => (function() {
  $__fn = function($f, $a = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $fromDone_1 = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))((function() {
  $__fn = function($dollar__unused_0, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Done"))) {
$__t0 = ($v)->value0;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  $__res = ((($GLOBALS['Effect_bindE'] ?? \PhpursThunks::eval('Effect_bindE')))(((($GLOBALS['Effect_bindE'] ?? \PhpursThunks::eval('Effect_bindE')))(($f)($a)))(($GLOBALS['Effect_Ref__new'] ?? \PhpursThunks::eval('Effect_Ref__new')))))(function($r) use (&$f, &$fromDone_1) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Effect_bindE'] ?? \PhpursThunks::eval('Effect_bindE')))((($GLOBALS['Effect_untilE'] ?? \PhpursThunks::eval('Effect_untilE')))(((($GLOBALS['Effect_bindE'] ?? \PhpursThunks::eval('Effect_bindE')))((($GLOBALS['Effect_Ref_read'] ?? \PhpursThunks::eval('Effect_Ref_read')))($r)))(function($v) use (&$f, &$r) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Loop"))) {
$__t2 = ((($GLOBALS['Effect_bindE'] ?? \PhpursThunks::eval('Effect_bindE')))(($f)(($v)->value0)))(function($e) use (&$r) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Effect_bindE'] ?? \PhpursThunks::eval('Effect_bindE')))(((($GLOBALS['Effect_Ref_write'] ?? \PhpursThunks::eval('Effect_Ref_write')))($e))($r)))(function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Effect_pureE'] ?? \PhpursThunks::eval('Effect_pureE')))(false);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
} else {
if ((is_object($v) && (($v)->tag === "Done"))) {
$__t2 = (($GLOBALS['Effect_pureE'] ?? \PhpursThunks::eval('Effect_pureE')))(true);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))))(function($dollar__unused_0) use (&$fromDone_1, &$r) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Effect_applyEffect'] ?? \PhpursThunks::eval('Effect_applyEffect')))->apply)((($GLOBALS['Effect_pureE'] ?? \PhpursThunks::eval('Effect_pureE')))($fromDone_1)))((($GLOBALS['Effect_Ref_read'] ?? \PhpursThunks::eval('Effect_Ref_read')))($r));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Effect_monadEffect'] ?? \PhpursThunks::eval('Effect_monadEffect'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Control_Monad_Rec_Class_loop3'] = function() { $v = (function() {
  $__fn = function($a, $b = null, $c = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data1("Loop", (object)["a" => $a, "b" => $b, "c" => $c]);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_Rec_Class_loop2'] = function() { $v = (function() {
  $__fn = function($a, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data1("Loop", (object)["a" => $a, "b" => $b]);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_Rec_Class_functorStep'] = function() { $v = (object)["map" => (function() {
  $__fn = function($f, $m = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($m) && (($m)->tag === "Loop"))) {
$__t0 = new Phpurs_Data1("Loop", ($m)->value0);
} else {
if ((is_object($m) && (($m)->tag === "Done"))) {
$__t0 = new Phpurs_Data1("Done", ($f)(($m)->value0));
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
})()]; return $v; };
\PhpursThunks::$thunks['Control_Monad_Rec_Class_forever'] = function() { $v = function($dictMonadRec) {
  $__num = \func_num_args();
  $__local_var_0 = (((((((($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($ma) use (&$__local_var_0, &$dictMonadRec) {
  $__num = \func_num_args();
  $__res = ((($dictMonadRec)->tailRecM)(function($u) use (&$__local_var_0, &$ma) {
  $__num = \func_num_args();
  $__res = ((($__local_var_0)->map)(function($v) use (&$u) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Loop", $u);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($ma);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Rec_Class_bifunctorStep'] = function() { $v = (object)["bimap" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v2) && (($v2)->tag === "Loop"))) {
$__t0 = new Phpurs_Data1("Loop", ($v)(($v2)->value0));
} else {
if ((is_object($v2) && (($v2)->tag === "Done"))) {
$__t0 = new Phpurs_Data1("Done", ($v1)(($v2)->value0));
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
})()]; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };






















