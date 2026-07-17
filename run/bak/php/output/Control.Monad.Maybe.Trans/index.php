<?php

namespace Control\Monad\Maybe\Trans;

// ALL IMPORTS: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Monad, Control.Monad.Cont.Class, Control.Monad.Error.Class, Control.Monad.Maybe.Trans, Control.Monad.Reader.Class, Control.Monad.Rec.Class, Control.Monad.ST.Class, Control.Monad.State.Class, Control.Monad.Trans.Class, Control.Monad.Writer.Class, Control.MonadPlus, Control.Plus, Control.Semigroupoid, Data.Function, Data.Functor, Data.Maybe, Data.Monoid, Data.Newtype, Data.Semigroup, Data.Tuple, Effect.Class, Prelude, Prim
// TO REQUIRE: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Monad, Control.Monad.Cont.Class, Control.Monad.Error.Class, Control.Monad.Maybe.Trans, Control.Monad.Reader.Class, Control.Monad.Rec.Class, Control.Monad.ST.Class, Control.Monad.State.Class, Control.Monad.Trans.Class, Control.Monad.Writer.Class, Control.MonadPlus, Control.Plus, Control.Semigroupoid, Data.Function, Data.Functor, Data.Maybe, Data.Monoid, Data.Newtype, Data.Semigroup, Data.Tuple, Effect.Class, Prelude
require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Maybe.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
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
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_MaybeT'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_runMaybeT'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = $v;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_newtypeMaybeT'] = function() { $v = (object)["Coercible0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_monadTransMaybeT'] = function() { $v = (object)["lift" => function($dictMonad) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_MaybeT'))))(((($GLOBALS['Control_Monad_liftM1'] ?? \PhpursThunks::eval('Control_Monad_liftM1')))($dictMonad))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_mapMaybeT'] = function() { $v = (function() {
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
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_functorMaybeT'] = function() { $v = function($dictFunctor) {
  $__num = \func_num_args();
  $__res = (object)["map" => (function() use (&$dictFunctor) {
  $__fn = function($f, $v = null) use (&$dictFunctor, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictFunctor)->map)(function($v1) use (&$f) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t0 = new Phpurs_Data1("Just", ($f)(($v1)->value0));
} else {
$__t0 = new Phpurs_Data0("Nothing");
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($v);
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
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_monadMaybeT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__res = (object)["Applicative0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_applicativeMaybeT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_bindMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_bindMaybeT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_bindMaybeT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__res = (object)["bind" => (function() use (&$dictMonad) {
  $__fn = function($v, $f = null) use (&$dictMonad, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)($v))(function($v1) use (&$dictMonad, &$f) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Nothing"))) {
$__t0 = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(new Phpurs_Data0("Nothing"));
} else {
if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t0 = ($f)(($v1)->value0);
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
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_applyMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_applyMaybeT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_applyMaybeT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__local_var_0 = (((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $functorMaybeT1_2 = (object)["map" => (function() use (&$__local_var_0) {
  $__fn = function($f, $v = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($__local_var_0)->map)(function($v1) use (&$f) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", ($f)(($v1)->value0));
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($v);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $__res = (object)["apply" => (($GLOBALS['Control_Monad_ap'] ?? \PhpursThunks::eval('Control_Monad_ap')))((object)["Applicative0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_applicativeMaybeT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_bindMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_bindMaybeT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]), "Functor0" => function($dollar__unused_0) use (&$functorMaybeT1_2) {
  $__num = \func_num_args();
  $__res = $functorMaybeT1_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_applicativeMaybeT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__res = (object)["pure" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_MaybeT'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just')))), "Apply0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_applyMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_applyMaybeT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_semigroupMaybeT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $lift2_0 = (($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))((($GLOBALS['Control_Monad_Maybe_Trans_applyMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_applyMaybeT')))($dictMonad));
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
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_monadAskMaybeT'] = function() { $v = function($dictMonadAsk) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadAsk)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadMaybeT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_applicativeMaybeT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_bindMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_bindMaybeT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["ask" => (((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_MaybeT'))))(((($GLOBALS['Control_Monad_liftM1'] ?? \PhpursThunks::eval('Control_Monad_liftM1')))($Monad0_0))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just')))))(($dictMonadAsk)->ask), "Monad0" => function($dollar__unused_0) use (&$monadMaybeT1_1) {
  $__num = \func_num_args();
  $__res = $monadMaybeT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_monadReaderMaybeT'] = function() { $v = function($dictMonadReader) {
  $__num = \func_num_args();
  $monadAskMaybeT1_0 = (($GLOBALS['Control_Monad_Maybe_Trans_monadAskMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_monadAskMaybeT')))((($dictMonadReader)->MonadAsk0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["local" => function($f) use (&$dictMonadReader) {
  $__num = \func_num_args();
  $__res = (($dictMonadReader)->local)($f);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "MonadAsk0" => function($dollar__unused_0) use (&$monadAskMaybeT1_0) {
  $__num = \func_num_args();
  $__res = $monadAskMaybeT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_monadContMaybeT'] = function() { $v = function($dictMonadCont) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictMonadCont)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadMaybeT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$__local_var_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_applicativeMaybeT')))($__local_var_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$__local_var_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_bindMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_bindMaybeT')))($__local_var_0);
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
  $__res = ($c)(new Phpurs_Data1("Just", $a));
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
}, "Monad0" => function($dollar__unused_0) use (&$monadMaybeT1_1) {
  $__num = \func_num_args();
  $__res = $monadMaybeT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_monadEffectMaybe'] = function() { $v = function($dictMonadEffect) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadEffect)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadMaybeT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_applicativeMaybeT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_bindMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_bindMaybeT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["liftEffect" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_MaybeT'))))(((($GLOBALS['Control_Monad_liftM1'] ?? \PhpursThunks::eval('Control_Monad_liftM1')))($Monad0_0))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))))(($dictMonadEffect)->liftEffect), "Monad0" => function($dollar__unused_0) use (&$monadMaybeT1_1) {
  $__num = \func_num_args();
  $__res = $monadMaybeT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_monadRecMaybeT'] = function() { $v = function($dictMonadRec) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadMaybeT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_applicativeMaybeT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_bindMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_bindMaybeT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["tailRecM" => function($f) use (&$Monad0_0, &$dictMonadRec) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_MaybeT'))))((($dictMonadRec)->tailRecM)(function($a) use (&$Monad0_0, &$f) {
  $__num = \func_num_args();
  $__res = ((((($Monad0_0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)(($f)($a)))(function($m__prime__) use (&$Monad0_0) {
  $__num = \func_num_args();
  if ((is_object($m__prime__) && (($m__prime__)->tag === "Nothing"))) {
$__t2 = new Phpurs_Data1("Done", new Phpurs_Data0("Nothing"));
} else {
if ((is_object($m__prime__) && (($m__prime__)->tag === "Just"))) {
if ((is_object(($m__prime__)->value0) && ((($m__prime__)->value0)->tag === "Loop"))) {
$__t3 = new Phpurs_Data1("Loop", (($m__prime__)->value0)->value0);
} else {
if ((is_object(($m__prime__)->value0) && ((($m__prime__)->value0)->tag === "Done"))) {
$__t3 = new Phpurs_Data1("Done", new Phpurs_Data1("Just", (($m__prime__)->value0)->value0));
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
}, "Monad0" => function($dollar__unused_0) use (&$monadMaybeT1_1) {
  $__num = \func_num_args();
  $__res = $monadMaybeT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_monadStateMaybeT'] = function() { $v = function($dictMonadState) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadState)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $lift1_1 = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_MaybeT'))))(((($GLOBALS['Control_Monad_liftM1'] ?? \PhpursThunks::eval('Control_Monad_liftM1')))($Monad0_0))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))));
  $monadMaybeT1_2 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_applicativeMaybeT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_bindMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_bindMaybeT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["state" => function($f) use (&$dictMonadState, &$lift1_1) {
  $__num = \func_num_args();
  $__res = ($lift1_1)((($dictMonadState)->state)($f));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad0" => function($dollar__unused_0) use (&$monadMaybeT1_2) {
  $__num = \func_num_args();
  $__res = $monadMaybeT1_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_monadTellMaybeT'] = function() { $v = function($dictMonadTell) {
  $__num = \func_num_args();
  $Monad1_0 = (($dictMonadTell)->Monad1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $Semigroup0_1 = (($dictMonadTell)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadMaybeT1_2 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad1_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_applicativeMaybeT')))($Monad1_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad1_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_bindMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_bindMaybeT')))($Monad1_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["tell" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_MaybeT'))))(((($GLOBALS['Control_Monad_liftM1'] ?? \PhpursThunks::eval('Control_Monad_liftM1')))($Monad1_0))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))))(($dictMonadTell)->tell), "Semigroup0" => function($dollar__unused_0) use (&$Semigroup0_1) {
  $__num = \func_num_args();
  $__res = $Semigroup0_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad1" => function($dollar__unused_0) use (&$monadMaybeT1_2) {
  $__num = \func_num_args();
  $__res = $monadMaybeT1_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_monadWriterMaybeT'] = function() { $v = function($dictMonadWriter) {
  $__num = \func_num_args();
  $MonadTell1_0 = (($dictMonadWriter)->MonadTell1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $Monad1_1 = (($MonadTell1_0)->Monad1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_2 = (($Monad1_1)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_3 = (($Monad1_1)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $Monoid0_4 = (($dictMonadWriter)->Monoid0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadTellMaybeT1_5 = (($GLOBALS['Control_Monad_Maybe_Trans_monadTellMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_monadTellMaybeT')))($MonadTell1_0);
  $__res = (object)["listen" => function($v) use (&$__local_var_2, &$__local_var_3, &$dictMonadWriter) {
  $__num = \func_num_args();
  $__res = ((($__local_var_2)->bind)((($dictMonadWriter)->listen)($v)))(function($v) use (&$__local_var_3) {
  $__num = \func_num_args();
  if ((is_object(($v)->value0) && ((($v)->value0)->tag === "Just"))) {
$__t6 = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", (($v)->value0)->value0, ($v)->value1));
} else {
$__t6 = new Phpurs_Data0("Nothing");
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
  if ((is_object($a) && (($a)->tag === "Nothing"))) {
$__t7 = new Phpurs_Data2("Tuple", new Phpurs_Data0("Nothing"), (($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
} else {
if ((is_object($a) && (($a)->tag === "Just"))) {
$__t7 = new Phpurs_Data2("Tuple", new Phpurs_Data1("Just", (($a)->value0)->value0), (($a)->value0)->value1);
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
}, "MonadTell1" => function($dollar__unused_0) use (&$monadTellMaybeT1_5) {
  $__num = \func_num_args();
  $__res = $monadTellMaybeT1_5;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_monadThrowMaybeT'] = function() { $v = function($dictMonadThrow) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadThrow)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $lift1_1 = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_MaybeT'))))(((($GLOBALS['Control_Monad_liftM1'] ?? \PhpursThunks::eval('Control_Monad_liftM1')))($Monad0_0))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))));
  $monadMaybeT1_2 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_applicativeMaybeT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_bindMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_bindMaybeT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["throwError" => function($e) use (&$dictMonadThrow, &$lift1_1) {
  $__num = \func_num_args();
  $__res = ($lift1_1)((($dictMonadThrow)->throwError)($e));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad0" => function($dollar__unused_0) use (&$monadMaybeT1_2) {
  $__num = \func_num_args();
  $__res = $monadMaybeT1_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_monadErrorMaybeT'] = function() { $v = function($dictMonadError) {
  $__num = \func_num_args();
  $monadThrowMaybeT1_0 = (($GLOBALS['Control_Monad_Maybe_Trans_monadThrowMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_monadThrowMaybeT')))((($dictMonadError)->MonadThrow0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["catchError" => (function() use (&$dictMonadError) {
  $__fn = function($v, $h = null) use (&$dictMonadError, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictMonadError)->catchError)($v))(function($a) use (&$h) {
  $__num = \func_num_args();
  $__res = ($h)($a);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => function($dollar__unused_0) use (&$monadThrowMaybeT1_0) {
  $__num = \func_num_args();
  $__res = $monadThrowMaybeT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_monadSTMaybeT'] = function() { $v = function($dictMonadST) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadST)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadMaybeT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_applicativeMaybeT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_bindMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_bindMaybeT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["liftST" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_MaybeT'))))(((($GLOBALS['Control_Monad_liftM1'] ?? \PhpursThunks::eval('Control_Monad_liftM1')))($Monad0_0))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))))(($dictMonadST)->liftST), "Monad0" => function($dollar__unused_0) use (&$monadMaybeT1_1) {
  $__num = \func_num_args();
  $__res = $monadMaybeT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_monoidMaybeT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $semigroupMaybeT1_0 = (($GLOBALS['Control_Monad_Maybe_Trans_semigroupMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_semigroupMaybeT')))($dictMonad);
  $__res = function($dictMonoid) use (&$dictMonad, &$semigroupMaybeT1_0) {
  $__num = \func_num_args();
  $semigroupMaybeT2_1 = ($semigroupMaybeT1_0)((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["mempty" => (((($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_applicativeMaybeT')))($dictMonad))->pure)(($dictMonoid)->mempty), "Semigroup0" => function($dollar__unused_0) use (&$semigroupMaybeT2_1) {
  $__num = \func_num_args();
  $__res = $semigroupMaybeT2_1;
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
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_altMaybeT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $Bind1_0 = (($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_1 = (((($Bind1_0)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $functorMaybeT1_3 = (object)["map" => (function() use (&$__local_var_1) {
  $__fn = function($f, $v = null) use (&$__local_var_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($__local_var_1)->map)(function($v1) use (&$f) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t2 = new Phpurs_Data1("Just", ($f)(($v1)->value0));
} else {
$__t2 = new Phpurs_Data0("Nothing");
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($v);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $__res = (object)["alt" => (function() use (&$Bind1_0, &$dictMonad) {
  $__fn = function($v, $v1 = null) use (&$Bind1_0, &$dictMonad, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($Bind1_0)->bind)($v))(function($m) use (&$dictMonad, &$v1) {
  $__num = \func_num_args();
  if ((is_object($m) && (($m)->tag === "Nothing"))) {
$__t4 = $v1;
} else {
$__t4 = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)($m);
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) use (&$functorMaybeT1_3) {
  $__num = \func_num_args();
  $__res = $functorMaybeT1_3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_plusMaybeT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $altMaybeT1_0 = (($GLOBALS['Control_Monad_Maybe_Trans_altMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_altMaybeT')))($dictMonad);
  $__res = (object)["empty" => (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(new Phpurs_Data0("Nothing")), "Alt0" => function($dollar__unused_0) use (&$altMaybeT1_0) {
  $__num = \func_num_args();
  $__res = $altMaybeT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_alternativeMaybeT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $applicativeMaybeT1_0 = (($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_applicativeMaybeT')))($dictMonad);
  $plusMaybeT1_1 = (($GLOBALS['Control_Monad_Maybe_Trans_plusMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_plusMaybeT')))($dictMonad);
  $__res = (object)["Applicative0" => function($dollar__unused_0) use (&$applicativeMaybeT1_0) {
  $__num = \func_num_args();
  $__res = $applicativeMaybeT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Plus1" => function($dollar__unused_0) use (&$plusMaybeT1_1) {
  $__num = \func_num_args();
  $__res = $plusMaybeT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Maybe_Trans_monadPlusMaybeT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $monadMaybeT1_0 = (object)["Applicative0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_applicativeMaybeT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_Maybe_Trans_bindMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_bindMaybeT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $alternativeMaybeT1_1 = (($GLOBALS['Control_Monad_Maybe_Trans_alternativeMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_alternativeMaybeT')))($dictMonad);
  $__res = (object)["Monad0" => function($dollar__unused_0) use (&$monadMaybeT1_0) {
  $__num = \func_num_args();
  $__res = $monadMaybeT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Alternative1" => function($dollar__unused_0) use (&$alternativeMaybeT1_1) {
  $__num = \func_num_args();
  $__res = $alternativeMaybeT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };





























