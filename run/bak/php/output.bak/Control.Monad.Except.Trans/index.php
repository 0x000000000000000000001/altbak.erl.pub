<?php

namespace Control\Monad\Except\Trans;

// ALL IMPORTS: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Monad, Control.Monad.Cont.Class, Control.Monad.Error.Class, Control.Monad.Except.Trans, Control.Monad.Reader.Class, Control.Monad.Rec.Class, Control.Monad.ST.Class, Control.Monad.State.Class, Control.Monad.Trans.Class, Control.Monad.Writer.Class, Control.MonadPlus, Control.Plus, Control.Semigroupoid, Data.Either, Data.Function, Data.Functor, Data.Monoid, Data.Newtype, Data.Semigroup, Data.Tuple, Effect.Class, Prelude, Prim
// TO REQUIRE: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Monad, Control.Monad.Cont.Class, Control.Monad.Error.Class, Control.Monad.Except.Trans, Control.Monad.Reader.Class, Control.Monad.Rec.Class, Control.Monad.ST.Class, Control.Monad.State.Class, Control.Monad.Trans.Class, Control.Monad.Writer.Class, Control.MonadPlus, Control.Plus, Control.Semigroupoid, Data.Either, Data.Function, Data.Functor, Data.Monoid, Data.Newtype, Data.Semigroup, Data.Tuple, Effect.Class, Prelude
require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Except.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
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
\PhpursThunks::$thunks['Control_Monad_Except_Trans_ExceptT'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_withExceptT'] = function() { $v = (function() {
  $__fn = function($dictFunctor, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictFunctor)->map)(function($v2) use (&$f) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Right"))) {
$__t0 = new Phpurs_Data1("Right", ($v2)->value0);
} else {
if ((is_object($v2) && (($v2)->tag === "Left"))) {
$__t0 = new Phpurs_Data1("Left", ($f)(($v2)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($v);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_runExceptT'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = $v;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_newtypeExceptT'] = function() { $v = (object)["Coercible0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_monadTransExceptT'] = function() { $v = (object)["lift" => (function() {
  $__fn = function($dictMonad, $m = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)($m))(function($a) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(new Phpurs_Data1("Right", $a));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_mapExceptT'] = function() { $v = (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($f)($v);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_functorExceptT'] = function() { $v = function($dictFunctor) {
  $__num = \func_num_args();
  $__res = (object)["map" => function($f) use (&$dictFunctor) {
  $__num = \func_num_args();
  $__res = (($dictFunctor)->map)(function($m) use (&$f) {
  $__num = \func_num_args();
  if ((is_object($m) && (($m)->tag === "Left"))) {
$__t0 = new Phpurs_Data1("Left", ($m)->value0);
} else {
if ((is_object($m) && (($m)->tag === "Right"))) {
$__t0 = new Phpurs_Data1("Right", ($f)(($m)->value0));
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
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_except'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_ExceptT'))))(($dictApplicative)->pure);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_monadExceptT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__res = (object)["Applicative0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_applicativeExceptT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_bindExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_bindExceptT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_bindExceptT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $pure_0 = ((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure;
  $__res = (object)["bind" => (function() use (&$dictMonad, &$pure_0) {
  $__fn = function($v, $k = null) use (&$dictMonad, &$pure_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_1 = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($pure_0))(($GLOBALS['Data_Either_Left'] ?? \PhpursThunks::eval('Data_Either_Left')));
  $__res = ((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)($v))(function($v2) use (&$__local_var_1, &$k) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Left"))) {
$__t2 = ($__local_var_1)(($v2)->value0);
} else {
if ((is_object($v2) && (($v2)->tag === "Right"))) {
$__t2 = ($k)(($v2)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_applyExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_applyExceptT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_applyExceptT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__local_var_0 = (((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $functorExceptT1_2 = (object)["map" => function($f) use (&$__local_var_0) {
  $__num = \func_num_args();
  $__res = (($__local_var_0)->map)(function($m) use (&$f) {
  $__num = \func_num_args();
  if ((is_object($m) && (($m)->tag === "Left"))) {
$__t1 = new Phpurs_Data1("Left", ($m)->value0);
} else {
if ((is_object($m) && (($m)->tag === "Right"))) {
$__t1 = new Phpurs_Data1("Right", ($f)(($m)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["apply" => (($GLOBALS['Control_Monad_ap'] ?? \PhpursThunks::eval('Control_Monad_ap')))((object)["Applicative0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_applicativeExceptT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_bindExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_bindExceptT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]), "Functor0" => function($dollar__unused_0) use (&$functorExceptT1_2) {
  $__num = \func_num_args();
  $__res = $functorExceptT1_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_applicativeExceptT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__res = (object)["pure" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_ExceptT'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure))(($GLOBALS['Data_Either_Right'] ?? \PhpursThunks::eval('Data_Either_Right')))), "Apply0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_applyExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_applyExceptT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_semigroupExceptT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $lift2_0 = (($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))((($GLOBALS['Control_Monad_Except_Trans_applyExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_applyExceptT')))($dictMonad));
  $__res = function($dictSemigroup) use (&$lift2_0) {
  $__num = \func_num_args();
  $__res = (object)["append" => ($lift2_0)(($dictSemigroup)->append)];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_monadAskExceptT'] = function() { $v = function($dictMonadAsk) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadAsk)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadExceptT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_applicativeExceptT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_bindExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_bindExceptT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["ask" => (((($GLOBALS['Control_Monad_Except_Trans_monadTransExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_monadTransExceptT')))->lift)($Monad0_0))(($dictMonadAsk)->ask), "Monad0" => function($dollar__unused_0) use (&$monadExceptT1_1) {
  $__num = \func_num_args();
  $__res = $monadExceptT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_monadReaderExceptT'] = function() { $v = function($dictMonadReader) {
  $__num = \func_num_args();
  $monadAskExceptT1_0 = (($GLOBALS['Control_Monad_Except_Trans_monadAskExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_monadAskExceptT')))((($dictMonadReader)->MonadAsk0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["local" => function($f) use (&$dictMonadReader) {
  $__num = \func_num_args();
  $__res = (($dictMonadReader)->local)($f);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "MonadAsk0" => function($dollar__unused_0) use (&$monadAskExceptT1_0) {
  $__num = \func_num_args();
  $__res = $monadAskExceptT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_monadContExceptT'] = function() { $v = function($dictMonadCont) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictMonadCont)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadExceptT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$__local_var_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_applicativeExceptT')))($__local_var_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$__local_var_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_bindExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_bindExceptT')))($__local_var_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["callCC" => function($f) use (&$dictMonadCont) {
  $__num = \func_num_args();
  $__res = (($dictMonadCont)->callCC)(function($c) use (&$f) {
  $__num = \func_num_args();
  $__res = ($f)(function($a) use (&$c) {
  $__num = \func_num_args();
  $__res = ($c)(new Phpurs_Data1("Right", $a));
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
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad0" => function($dollar__unused_0) use (&$monadExceptT1_1) {
  $__num = \func_num_args();
  $__res = $monadExceptT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_monadEffectExceptT'] = function() { $v = function($dictMonadEffect) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadEffect)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadExceptT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_applicativeExceptT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_bindExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_bindExceptT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["liftEffect" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Control_Monad_Except_Trans_monadTransExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_monadTransExceptT')))->lift)($Monad0_0)))(($dictMonadEffect)->liftEffect), "Monad0" => function($dollar__unused_0) use (&$monadExceptT1_1) {
  $__num = \func_num_args();
  $__res = $monadExceptT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_monadRecExceptT'] = function() { $v = function($dictMonadRec) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadExceptT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_applicativeExceptT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_bindExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_bindExceptT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["tailRecM" => function($f) use (&$Monad0_0, &$dictMonadRec) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_ExceptT'))))((($dictMonadRec)->tailRecM)(function($a) use (&$Monad0_0, &$f) {
  $__num = \func_num_args();
  $__res = ((((($Monad0_0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)(($f)($a)))(function($m__prime__) use (&$Monad0_0) {
  $__num = \func_num_args();
  if ((is_object($m__prime__) && (($m__prime__)->tag === "Left"))) {
$__t2 = new Phpurs_Data1("Done", new Phpurs_Data1("Left", ($m__prime__)->value0));
} else {
if ((is_object($m__prime__) && (($m__prime__)->tag === "Right"))) {
if ((is_object(($m__prime__)->value0) && ((($m__prime__)->value0)->tag === "Loop"))) {
$__t3 = new Phpurs_Data1("Loop", (($m__prime__)->value0)->value0);
} else {
if ((is_object(($m__prime__)->value0) && ((($m__prime__)->value0)->tag === "Done"))) {
$__t3 = new Phpurs_Data1("Done", new Phpurs_Data1("Right", (($m__prime__)->value0)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
$__t2 = $__t3;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
  $__res = (((($Monad0_0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)($__t2);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad0" => function($dollar__unused_0) use (&$monadExceptT1_1) {
  $__num = \func_num_args();
  $__res = $monadExceptT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_monadStateExceptT'] = function() { $v = function($dictMonadState) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadState)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadExceptT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_applicativeExceptT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_bindExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_bindExceptT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["state" => function($f) use (&$Monad0_0, &$dictMonadState) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Control_Monad_Except_Trans_monadTransExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_monadTransExceptT')))->lift)($Monad0_0))((($dictMonadState)->state)($f));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad0" => function($dollar__unused_0) use (&$monadExceptT1_1) {
  $__num = \func_num_args();
  $__res = $monadExceptT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_monadTellExceptT'] = function() { $v = function($dictMonadTell) {
  $__num = \func_num_args();
  $Monad1_0 = (($dictMonadTell)->Monad1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $Semigroup0_1 = (($dictMonadTell)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadExceptT1_2 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad1_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_applicativeExceptT')))($Monad1_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad1_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_bindExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_bindExceptT')))($Monad1_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["tell" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Control_Monad_Except_Trans_monadTransExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_monadTransExceptT')))->lift)($Monad1_0)))(($dictMonadTell)->tell), "Semigroup0" => function($dollar__unused_0) use (&$Semigroup0_1) {
  $__num = \func_num_args();
  $__res = $Semigroup0_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad1" => function($dollar__unused_0) use (&$monadExceptT1_2) {
  $__num = \func_num_args();
  $__res = $monadExceptT1_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_monadWriterExceptT'] = function() { $v = function($dictMonadWriter) {
  $__num = \func_num_args();
  $MonadTell1_0 = (($dictMonadWriter)->MonadTell1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $Monad1_1 = (($MonadTell1_0)->Monad1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_2 = (($Monad1_1)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_3 = (($Monad1_1)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $Monoid0_4 = (($dictMonadWriter)->Monoid0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadTellExceptT1_5 = (($GLOBALS['Control_Monad_Except_Trans_monadTellExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_monadTellExceptT')))($MonadTell1_0);
  $__res = (object)["listen" => function($v) use (&$__local_var_2, &$__local_var_3, &$dictMonadWriter) {
  $__num = \func_num_args();
  $__res = ((($__local_var_2)->bind)((($dictMonadWriter)->listen)($v)))(function($v) use (&$__local_var_3) {
  $__num = \func_num_args();
  if ((is_object(($v)->value0) && ((($v)->value0)->tag === "Left"))) {
$__t6 = new Phpurs_Data1("Left", (($v)->value0)->value0);
} else {
if ((is_object(($v)->value0) && ((($v)->value0)->tag === "Right"))) {
$__t6 = new Phpurs_Data1("Right", new Phpurs_Data2("Tuple", (($v)->value0)->value0, ($v)->value1));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
  $__res = (($__local_var_3)->pure)($__t6);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "pass" => function($v) use (&$__local_var_2, &$__local_var_3, &$dictMonadWriter) {
  $__num = \func_num_args();
  $__res = (($dictMonadWriter)->pass)(((($__local_var_2)->bind)($v))(function($a) use (&$__local_var_3) {
  $__num = \func_num_args();
  if ((is_object($a) && (($a)->tag === "Left"))) {
$__t7 = new Phpurs_Data2("Tuple", new Phpurs_Data1("Left", ($a)->value0), (($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
} else {
if ((is_object($a) && (($a)->tag === "Right"))) {
$__t7 = new Phpurs_Data2("Tuple", new Phpurs_Data1("Right", (($a)->value0)->value0), (($a)->value0)->value1);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t7 = null;
};
};
  $__res = (($__local_var_3)->pure)($__t7);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monoid0" => function($dollar__unused_0) use (&$Monoid0_4) {
  $__num = \func_num_args();
  $__res = $Monoid0_4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "MonadTell1" => function($dollar__unused_0) use (&$monadTellExceptT1_5) {
  $__num = \func_num_args();
  $__res = $monadTellExceptT1_5;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_monadThrowExceptT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $monadExceptT1_0 = (object)["Applicative0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_applicativeExceptT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_bindExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_bindExceptT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["throwError" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_ExceptT'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure))(($GLOBALS['Data_Either_Left'] ?? \PhpursThunks::eval('Data_Either_Left')))), "Monad0" => function($dollar__unused_0) use (&$monadExceptT1_0) {
  $__num = \func_num_args();
  $__res = $monadExceptT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_monadErrorExceptT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $pure_0 = ((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure;
  $monadThrowExceptT1_1 = (($GLOBALS['Control_Monad_Except_Trans_monadThrowExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_monadThrowExceptT')))($dictMonad);
  $__res = (object)["catchError" => (function() use (&$dictMonad, &$pure_0) {
  $__fn = function($v, $k = null) use (&$dictMonad, &$pure_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_2 = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($pure_0))(($GLOBALS['Data_Either_Right'] ?? \PhpursThunks::eval('Data_Either_Right')));
  $__res = ((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)($v))(function($v2) use (&$__local_var_2, &$k) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Left"))) {
$__t3 = ($k)(($v2)->value0);
} else {
if ((is_object($v2) && (($v2)->tag === "Right"))) {
$__t3 = ($__local_var_2)(($v2)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => function($dollar__unused_0) use (&$monadThrowExceptT1_1) {
  $__num = \func_num_args();
  $__res = $monadThrowExceptT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_monadSTExceptT'] = function() { $v = function($dictMonadST) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadST)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadExceptT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_applicativeExceptT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_bindExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_bindExceptT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["liftST" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Control_Monad_Except_Trans_monadTransExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_monadTransExceptT')))->lift)($Monad0_0)))(($dictMonadST)->liftST), "Monad0" => function($dollar__unused_0) use (&$monadExceptT1_1) {
  $__num = \func_num_args();
  $__res = $monadExceptT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Except_Trans_monoidExceptT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $semigroupExceptT1_0 = (($GLOBALS['Control_Monad_Except_Trans_semigroupExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_semigroupExceptT')))($dictMonad);
  $__res = function($dictMonoid) use (&$dictMonad, &$semigroupExceptT1_0) {
  $__num = \func_num_args();
  $semigroupExceptT2_1 = ($semigroupExceptT1_0)((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["mempty" => (((($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_applicativeExceptT')))($dictMonad))->pure)(($dictMonoid)->mempty), "Semigroup0" => function($dollar__unused_0) use (&$semigroupExceptT2_1) {
  $__num = \func_num_args();
  $__res = $semigroupExceptT2_1;
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
\PhpursThunks::$thunks['Control_Monad_Except_Trans_altExceptT'] = function() { $v = (function() {
  $__fn = function($dictSemigroup, $dictMonad = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $Bind1_0 = (($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_1 = (($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_2 = (((($Bind1_0)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $functorExceptT1_4 = (object)["map" => function($f) use (&$__local_var_2) {
  $__num = \func_num_args();
  $__res = (($__local_var_2)->map)(function($m) use (&$f) {
  $__num = \func_num_args();
  if ((is_object($m) && (($m)->tag === "Left"))) {
$__t3 = new Phpurs_Data1("Left", ($m)->value0);
} else {
if ((is_object($m) && (($m)->tag === "Right"))) {
$__t3 = new Phpurs_Data1("Right", ($f)(($m)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["alt" => (function() use (&$Bind1_0, &$__local_var_1, &$dictSemigroup) {
  $__fn = function($v, $v1 = null) use (&$Bind1_0, &$__local_var_1, &$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($Bind1_0)->bind)($v))(function($rm) use (&$Bind1_0, &$__local_var_1, &$dictSemigroup, &$v1) {
  $__num = \func_num_args();
  if ((is_object($rm) && (($rm)->tag === "Right"))) {
$__t5 = (($__local_var_1)->pure)(new Phpurs_Data1("Right", ($rm)->value0));
} else {
if ((is_object($rm) && (($rm)->tag === "Left"))) {
$__local_var_6 = ($rm)->value0;
$__t5 = ((($Bind1_0)->bind)($v1))(function($rn) use (&$__local_var_1, &$__local_var_6, &$dictSemigroup) {
  $__num = \func_num_args();
  if ((is_object($rn) && (($rn)->tag === "Right"))) {
$__t7 = (($__local_var_1)->pure)(new Phpurs_Data1("Right", ($rn)->value0));
} else {
if ((is_object($rn) && (($rn)->tag === "Left"))) {
$__t7 = (($__local_var_1)->pure)(new Phpurs_Data1("Left", ((($dictSemigroup)->append)($__local_var_6))(($rn)->value0)));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t7 = null;
};
};
  $__res = $__t7;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t5 = null;
};
};
  $__res = $__t5;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) use (&$functorExceptT1_4) {
  $__num = \func_num_args();
  $__res = $functorExceptT1_4;
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
\PhpursThunks::$thunks['Control_Monad_Except_Trans_plusExceptT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_0 = ($dictMonoid)->mempty;
  $altExceptT1_1 = (($GLOBALS['Control_Monad_Except_Trans_altExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_altExceptT')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictMonad) use (&$altExceptT1_1, &$mempty_0) {
  $__num = \func_num_args();
  $altExceptT2_2 = ($altExceptT1_1)($dictMonad);
  $__res = (object)["empty" => (((($GLOBALS['Control_Monad_Except_Trans_monadThrowExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_monadThrowExceptT')))($dictMonad))->throwError)($mempty_0), "Alt0" => function($dollar__unused_0) use (&$altExceptT2_2) {
  $__num = \func_num_args();
  $__res = $altExceptT2_2;
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
\PhpursThunks::$thunks['Control_Monad_Except_Trans_alternativeExceptT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $plusExceptT1_0 = (($GLOBALS['Control_Monad_Except_Trans_plusExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_plusExceptT')))($dictMonoid);
  $__res = function($dictMonad) use (&$plusExceptT1_0) {
  $__num = \func_num_args();
  $applicativeExceptT1_1 = (($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_applicativeExceptT')))($dictMonad);
  $plusExceptT2_2 = ($plusExceptT1_0)($dictMonad);
  $__res = (object)["Applicative0" => function($dollar__unused_0) use (&$applicativeExceptT1_1) {
  $__num = \func_num_args();
  $__res = $applicativeExceptT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Plus1" => function($dollar__unused_0) use (&$plusExceptT2_2) {
  $__num = \func_num_args();
  $__res = $plusExceptT2_2;
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
\PhpursThunks::$thunks['Control_Monad_Except_Trans_monadPlusExceptT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $alternativeExceptT1_0 = (($GLOBALS['Control_Monad_Except_Trans_alternativeExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_alternativeExceptT')))($dictMonoid);
  $__res = function($dictMonad) use (&$alternativeExceptT1_0) {
  $__num = \func_num_args();
  $monadExceptT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_applicativeExceptT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Except_Trans_bindExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_bindExceptT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $alternativeExceptT2_2 = ($alternativeExceptT1_0)($dictMonad);
  $__res = (object)["Monad0" => function($dollar__unused_0) use (&$monadExceptT1_1) {
  $__num = \func_num_args();
  $__res = $monadExceptT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Alternative1" => function($dollar__unused_0) use (&$alternativeExceptT2_2) {
  $__num = \func_num_args();
  $__res = $alternativeExceptT2_2;
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
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };































