<?php

namespace Control\Monad\State\Trans;

// ALL IMPORTS: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Lazy, Control.Monad, Control.Monad.Cont.Class, Control.Monad.Error.Class, Control.Monad.Reader.Class, Control.Monad.Rec.Class, Control.Monad.ST.Class, Control.Monad.State.Class, Control.Monad.State.Trans, Control.Monad.Trans.Class, Control.Monad.Writer.Class, Control.MonadPlus, Control.Plus, Control.Semigroupoid, Data.Function, Data.Functor, Data.Monoid, Data.Newtype, Data.Semigroup, Data.Tuple, Data.Unit, Effect.Class, Prelude, Prim
// TO REQUIRE: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Lazy, Control.Monad, Control.Monad.Cont.Class, Control.Monad.Error.Class, Control.Monad.Reader.Class, Control.Monad.Rec.Class, Control.Monad.ST.Class, Control.Monad.State.Class, Control.Monad.State.Trans, Control.Monad.Trans.Class, Control.Monad.Writer.Class, Control.MonadPlus, Control.Plus, Control.Semigroupoid, Data.Function, Data.Functor, Data.Monoid, Data.Newtype, Data.Semigroup, Data.Tuple, Data.Unit, Effect.Class, Prelude
require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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
\PhpursThunks::$thunks['Control_Monad_State_Trans_StateT'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_withStateT'] = function() { $v = (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($v))($f);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_runStateT'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = $v;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_newtypeStateT'] = function() { $v = (object)["Coercible0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_monadTransStateT'] = function() { $v = (object)["lift" => (function() {
  $__fn = function($dictMonad, $m = null, $s = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)($m))(function($x) use (&$dictMonad, &$s) {
  $__num = \func_num_args();
  $__res = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(new Phpurs_Data2("Tuple", $x, $s));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_mapStateT'] = function() { $v = (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))($v);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_lazyStateT'] = function() { $v = (object)["defer" => (function() {
  $__fn = function($f, $s = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))($s);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_functorStateT'] = function() { $v = function($dictFunctor) {
  $__num = \func_num_args();
  $__res = (object)["map" => (function() use (&$dictFunctor) {
  $__fn = function($f, $v = null, $s = null) use (&$dictFunctor, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictFunctor)->map)(function($v1) use (&$f) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($f)(($v1)->value0), ($v1)->value1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($v)($s));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_execStateT'] = function() { $v = (function() {
  $__fn = function($dictFunctor, $v = null, $s = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictFunctor)->map)(($GLOBALS['Data_Tuple_snd'] ?? \PhpursThunks::eval('Data_Tuple_snd'))))(($v)($s));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_evalStateT'] = function() { $v = (function() {
  $__fn = function($dictFunctor, $v = null, $s = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictFunctor)->map)(($GLOBALS['Data_Tuple_fst'] ?? \PhpursThunks::eval('Data_Tuple_fst'))))(($v)($s));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_monadStateT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__res = (object)["Applicative0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_applicativeStateT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_bindStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_bindStateT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_bindStateT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__res = (object)["bind" => (function() use (&$dictMonad) {
  $__fn = function($v, $f = null, $s = null) use (&$dictMonad, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)(($v)($s)))(function($v1) use (&$f) {
  $__num = \func_num_args();
  $__res = (($f)(($v1)->value0))(($v1)->value1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_applyStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_applyStateT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_applyStateT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__local_var_0 = (((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $functorStateT1_1 = (object)["map" => (function() use (&$__local_var_0) {
  $__fn = function($f, $v = null, $s = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($__local_var_0)->map)(function($v1) use (&$f) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($f)(($v1)->value0), ($v1)->value1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($v)($s));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  $__res = (object)["apply" => (($GLOBALS['Control_Monad_ap'] ?? \PhpursThunks::eval('Control_Monad_ap')))((object)["Applicative0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_applicativeStateT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_bindStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_bindStateT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]), "Functor0" => function($dollar__unused_0) use (&$functorStateT1_1) {
  $__num = \func_num_args();
  $__res = $functorStateT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_applicativeStateT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__res = (object)["pure" => (function() use (&$dictMonad) {
  $__fn = function($a, $s = null) use (&$dictMonad, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(new Phpurs_Data2("Tuple", $a, $s));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_applyStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_applyStateT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_semigroupStateT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $lift2_0 = (($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))((($GLOBALS['Control_Monad_State_Trans_applyStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_applyStateT')))($dictMonad));
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
\PhpursThunks::$thunks['Control_Monad_State_Trans_monadAskStateT'] = function() { $v = function($dictMonadAsk) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadAsk)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadStateT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_applicativeStateT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_bindStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_bindStateT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["ask" => (((($GLOBALS['Control_Monad_State_Trans_monadTransStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_monadTransStateT')))->lift)($Monad0_0))(($dictMonadAsk)->ask), "Monad0" => function($dollar__unused_0) use (&$monadStateT1_1) {
  $__num = \func_num_args();
  $__res = $monadStateT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_monadReaderStateT'] = function() { $v = function($dictMonadReader) {
  $__num = \func_num_args();
  $monadAskStateT1_0 = (($GLOBALS['Control_Monad_State_Trans_monadAskStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_monadAskStateT')))((($dictMonadReader)->MonadAsk0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["local" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_State_Trans_mapStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_mapStateT'))))(($dictMonadReader)->local), "MonadAsk0" => function($dollar__unused_0) use (&$monadAskStateT1_0) {
  $__num = \func_num_args();
  $__res = $monadAskStateT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_monadContStateT'] = function() { $v = function($dictMonadCont) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictMonadCont)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadStateT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$__local_var_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_applicativeStateT')))($__local_var_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$__local_var_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_bindStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_bindStateT')))($__local_var_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["callCC" => (function() use (&$dictMonadCont) {
  $__fn = function($f, $s = null) use (&$dictMonadCont, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($dictMonadCont)->callCC)(function($c) use (&$f, &$s) {
  $__num = \func_num_args();
  $__res = (($f)((function() use (&$c) {
  $__fn = function($a, $s__prime__ = null) use (&$c, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($c)(new Phpurs_Data2("Tuple", $a, $s__prime__));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))($s);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($dollar__unused_0) use (&$monadStateT1_1) {
  $__num = \func_num_args();
  $__res = $monadStateT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_monadEffectState'] = function() { $v = function($dictMonadEffect) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadEffect)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadStateT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_applicativeStateT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_bindStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_bindStateT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["liftEffect" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Control_Monad_State_Trans_monadTransStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_monadTransStateT')))->lift)($Monad0_0)))(($dictMonadEffect)->liftEffect), "Monad0" => function($dollar__unused_0) use (&$monadStateT1_1) {
  $__num = \func_num_args();
  $__res = $monadStateT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_monadRecStateT'] = function() { $v = function($dictMonadRec) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadStateT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_applicativeStateT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_bindStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_bindStateT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["tailRecM" => (function() use (&$Monad0_0, &$dictMonadRec) {
  $__fn = function($f, $a = null, $s = null) use (&$Monad0_0, &$dictMonadRec, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictMonadRec)->tailRecM)(function($v) use (&$Monad0_0, &$f) {
  $__num = \func_num_args();
  $__res = ((((($Monad0_0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)((($f)(($v)->value0))(($v)->value1)))(function($v2) use (&$Monad0_0) {
  $__num = \func_num_args();
  if ((is_object(($v2)->value0) && ((($v2)->value0)->tag === "Loop"))) {
$__t2 = new Phpurs_Data1("Loop", new Phpurs_Data2("Tuple", (($v2)->value0)->value0, ($v2)->value1));
} else {
if ((is_object(($v2)->value0) && ((($v2)->value0)->tag === "Done"))) {
$__t2 = new Phpurs_Data1("Done", new Phpurs_Data2("Tuple", (($v2)->value0)->value0, ($v2)->value1));
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
}))(new Phpurs_Data2("Tuple", $a, $s));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($dollar__unused_0) use (&$monadStateT1_1) {
  $__num = \func_num_args();
  $__res = $monadStateT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_monadStateStateT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $pure_0 = ((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure;
  $monadStateT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_applicativeStateT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_bindStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_bindStateT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["state" => function($f) use (&$pure_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($pure_0))($f);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad0" => function($dollar__unused_0) use (&$monadStateT1_1) {
  $__num = \func_num_args();
  $__res = $monadStateT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_monadTellStateT'] = function() { $v = function($dictMonadTell) {
  $__num = \func_num_args();
  $Monad1_0 = (($dictMonadTell)->Monad1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $Semigroup0_1 = (($dictMonadTell)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadStateT1_2 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad1_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_applicativeStateT')))($Monad1_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad1_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_bindStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_bindStateT')))($Monad1_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["tell" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Control_Monad_State_Trans_monadTransStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_monadTransStateT')))->lift)($Monad1_0)))(($dictMonadTell)->tell), "Semigroup0" => function($dollar__unused_0) use (&$Semigroup0_1) {
  $__num = \func_num_args();
  $__res = $Semigroup0_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad1" => function($dollar__unused_0) use (&$monadStateT1_2) {
  $__num = \func_num_args();
  $__res = $monadStateT1_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_monadWriterStateT'] = function() { $v = function($dictMonadWriter) {
  $__num = \func_num_args();
  $MonadTell1_0 = (($dictMonadWriter)->MonadTell1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $Monad1_1 = (($MonadTell1_0)->Monad1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_2 = (($Monad1_1)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_3 = (($Monad1_1)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $Monoid0_4 = (($dictMonadWriter)->Monoid0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadTellStateT1_5 = (($GLOBALS['Control_Monad_State_Trans_monadTellStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_monadTellStateT')))($MonadTell1_0);
  $__res = (object)["listen" => (function() use (&$__local_var_2, &$__local_var_3, &$dictMonadWriter) {
  $__fn = function($m, $s = null) use (&$__local_var_2, &$__local_var_3, &$dictMonadWriter, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($__local_var_2)->bind)((($dictMonadWriter)->listen)(($m)($s))))(function($v) use (&$__local_var_3) {
  $__num = \func_num_args();
  $__res = (($__local_var_3)->pure)(new Phpurs_Data2("Tuple", new Phpurs_Data2("Tuple", (($v)->value0)->value0, ($v)->value1), (($v)->value0)->value1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "pass" => (function() use (&$__local_var_2, &$__local_var_3, &$dictMonadWriter) {
  $__fn = function($m, $s = null) use (&$__local_var_2, &$__local_var_3, &$dictMonadWriter, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($dictMonadWriter)->pass)(((($__local_var_2)->bind)(($m)($s)))(function($v) use (&$__local_var_3) {
  $__num = \func_num_args();
  $__res = (($__local_var_3)->pure)(new Phpurs_Data2("Tuple", new Phpurs_Data2("Tuple", (($v)->value0)->value0, ($v)->value1), (($v)->value0)->value1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monoid0" => function($dollar__unused_0) use (&$Monoid0_4) {
  $__num = \func_num_args();
  $__res = $Monoid0_4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "MonadTell1" => function($dollar__unused_0) use (&$monadTellStateT1_5) {
  $__num = \func_num_args();
  $__res = $monadTellStateT1_5;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_monadThrowStateT'] = function() { $v = function($dictMonadThrow) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadThrow)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadStateT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_applicativeStateT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_bindStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_bindStateT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["throwError" => function($e) use (&$Monad0_0, &$dictMonadThrow) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Control_Monad_State_Trans_monadTransStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_monadTransStateT')))->lift)($Monad0_0))((($dictMonadThrow)->throwError)($e));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad0" => function($dollar__unused_0) use (&$monadStateT1_1) {
  $__num = \func_num_args();
  $__res = $monadStateT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_monadErrorStateT'] = function() { $v = function($dictMonadError) {
  $__num = \func_num_args();
  $monadThrowStateT1_0 = (($GLOBALS['Control_Monad_State_Trans_monadThrowStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_monadThrowStateT')))((($dictMonadError)->MonadThrow0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["catchError" => (function() use (&$dictMonadError) {
  $__fn = function($v, $h = null, $s = null) use (&$dictMonadError, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictMonadError)->catchError)(($v)($s)))(function($e) use (&$h, &$s) {
  $__num = \func_num_args();
  $__res = (($h)($e))($s);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => function($dollar__unused_0) use (&$monadThrowStateT1_0) {
  $__num = \func_num_args();
  $__res = $monadThrowStateT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_monadSTStateT'] = function() { $v = function($dictMonadST) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadST)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadStateT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_applicativeStateT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_bindStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_bindStateT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["liftST" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Control_Monad_State_Trans_monadTransStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_monadTransStateT')))->lift)($Monad0_0)))(($dictMonadST)->liftST), "Monad0" => function($dollar__unused_0) use (&$monadStateT1_1) {
  $__num = \func_num_args();
  $__res = $monadStateT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_State_Trans_monoidStateT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $semigroupStateT1_0 = (($GLOBALS['Control_Monad_State_Trans_semigroupStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_semigroupStateT')))($dictMonad);
  $__res = function($dictMonoid) use (&$dictMonad, &$semigroupStateT1_0) {
  $__num = \func_num_args();
  $semigroupStateT2_1 = ($semigroupStateT1_0)((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["mempty" => (((($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_applicativeStateT')))($dictMonad))->pure)(($dictMonoid)->mempty), "Semigroup0" => function($dollar__unused_0) use (&$semigroupStateT2_1) {
  $__num = \func_num_args();
  $__res = $semigroupStateT2_1;
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
\PhpursThunks::$thunks['Control_Monad_State_Trans_altStateT'] = function() { $v = (function() {
  $__fn = function($dictMonad, $dictAlt = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = (($dictAlt)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $functorStateT1_1 = (object)["map" => (function() use (&$__local_var_0) {
  $__fn = function($f, $v = null, $s = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($__local_var_0)->map)(function($v1) use (&$f) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($f)(($v1)->value0), ($v1)->value1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($v)($s));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  $__res = (object)["alt" => (function() use (&$dictAlt) {
  $__fn = function($v, $v1 = null, $s = null) use (&$dictAlt, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictAlt)->alt)(($v)($s)))(($v1)($s));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) use (&$functorStateT1_1) {
  $__num = \func_num_args();
  $__res = $functorStateT1_1;
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
\PhpursThunks::$thunks['Control_Monad_State_Trans_plusStateT'] = function() { $v = (function() {
  $__fn = function($dictMonad, $dictPlus = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $empty_0 = ($dictPlus)->empty;
  $altStateT2_1 = ((($GLOBALS['Control_Monad_State_Trans_altStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_altStateT')))($dictMonad))((($dictPlus)->Alt0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["empty" => function($v) use (&$empty_0) {
  $__num = \func_num_args();
  $__res = $empty_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Alt0" => function($dollar__unused_0) use (&$altStateT2_1) {
  $__num = \func_num_args();
  $__res = $altStateT2_1;
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
\PhpursThunks::$thunks['Control_Monad_State_Trans_alternativeStateT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $applicativeStateT1_0 = (($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_applicativeStateT')))($dictMonad);
  $__res = function($dictAlternative) use (&$applicativeStateT1_0, &$dictMonad) {
  $__num = \func_num_args();
  $plusStateT2_1 = ((($GLOBALS['Control_Monad_State_Trans_plusStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_plusStateT')))($dictMonad))((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["Applicative0" => function($dollar__unused_0) use (&$applicativeStateT1_0) {
  $__num = \func_num_args();
  $__res = $applicativeStateT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Plus1" => function($dollar__unused_0) use (&$plusStateT2_1) {
  $__num = \func_num_args();
  $__res = $plusStateT2_1;
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
\PhpursThunks::$thunks['Control_Monad_State_Trans_monadPlusStateT'] = function() { $v = function($dictMonadPlus) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadPlus)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadStateT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_applicativeStateT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_State_Trans_bindStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_bindStateT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $alternativeStateT1_2 = ((($GLOBALS['Control_Monad_State_Trans_alternativeStateT'] ?? \PhpursThunks::eval('Control_Monad_State_Trans_alternativeStateT')))($Monad0_0))((($dictMonadPlus)->Alternative1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["Monad0" => function($dollar__unused_0) use (&$monadStateT1_1) {
  $__num = \func_num_args();
  $__res = $monadStateT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Alternative1" => function($dollar__unused_0) use (&$alternativeStateT1_2) {
  $__num = \func_num_args();
  $__res = $alternativeStateT1_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };

































