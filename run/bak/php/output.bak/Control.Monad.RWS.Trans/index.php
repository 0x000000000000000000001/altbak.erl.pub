<?php

namespace Control\Monad\RWS\Trans;

// ALL IMPORTS: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Lazy, Control.Monad, Control.Monad.Error.Class, Control.Monad.RWS.Trans, Control.Monad.Reader.Class, Control.Monad.Rec.Class, Control.Monad.ST.Class, Control.Monad.State.Class, Control.Monad.Trans.Class, Control.Monad.Writer.Class, Control.Plus, Control.Semigroupoid, Data.Function, Data.Functor, Data.Monoid, Data.Newtype, Data.Semigroup, Data.Tuple, Data.Unit, Effect.Class, Prelude, Prim
// TO REQUIRE: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Lazy, Control.Monad, Control.Monad.Error.Class, Control.Monad.RWS.Trans, Control.Monad.Reader.Class, Control.Monad.Rec.Class, Control.Monad.ST.Class, Control.Monad.State.Class, Control.Monad.Trans.Class, Control.Monad.Writer.Class, Control.Plus, Control.Semigroupoid, Data.Function, Data.Functor, Data.Monoid, Data.Newtype, Data.Semigroup, Data.Tuple, Data.Unit, Effect.Class, Prelude
require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.RWS.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
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
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_RWSResult'] = function() { $v = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_RWST'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_withRWST'] = function() { $v = (function() {
  $__fn = function($f, $m = null, $r = null, $s = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__local_var_0 = (($f)($r))($s);
  $__res = (($m)(($__local_var_0)->value0))(($__local_var_0)->value1);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_runRWST'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = $v;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_newtypeRWST'] = function() { $v = (object)["Coercible0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_monadTransRWST'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_0 = ($dictMonoid)->mempty;
  $__res = (object)["lift" => (function() use (&$mempty_0) {
  $__fn = function($dictMonad, $m = null, $v = null, $s = null) use (&$mempty_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)($m))(function($a) use (&$dictMonad, &$mempty_0, &$s) {
  $__num = \func_num_args();
  $__res = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(new Phpurs_Data3("RWSResult", $s, $a, $mempty_0));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_mapRWST'] = function() { $v = (function() {
  $__fn = function($f, $v = null, $r = null, $s = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ($f)((($v)($r))($s));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_lazyRWST'] = function() { $v = (object)["defer" => (function() {
  $__fn = function($f, $r = null, $s = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))($r))($s);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_functorRWST'] = function() { $v = function($dictFunctor) {
  $__num = \func_num_args();
  $__res = (object)["map" => (function() use (&$dictFunctor) {
  $__fn = function($f, $v = null, $r = null, $s = null) use (&$dictFunctor, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((($dictFunctor)->map)(function($v1) use (&$f) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data3("RWSResult", ($v1)->value0, ($f)(($v1)->value1), ($v1)->value2);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((($v)($r))($s));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_execRWST'] = function() { $v = (function() {
  $__fn = function($dictMonad, $v = null, $r = null, $s = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)((($v)($r))($s)))(function($v1) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(new Phpurs_Data2("Tuple", ($v1)->value0, ($v1)->value2));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_evalRWST'] = function() { $v = (function() {
  $__fn = function($dictMonad, $v = null, $r = null, $s = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)((($v)($r))($s)))(function($v1) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(new Phpurs_Data2("Tuple", ($v1)->value1, ($v1)->value2));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_applyRWST'] = function() { $v = function($dictBind) {
  $__num = \func_num_args();
  $Functor0_0 = (((($dictBind)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $functorRWST1_1 = (object)["map" => (function() use (&$Functor0_0) {
  $__fn = function($f, $v = null, $r = null, $s = null) use (&$Functor0_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((($Functor0_0)->map)(function($v1) use (&$f) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data3("RWSResult", ($v1)->value0, ($f)(($v1)->value1), ($v1)->value2);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((($v)($r))($s));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()];
  $__res = function($dictMonoid) use (&$Functor0_0, &$dictBind, &$functorRWST1_1) {
  $__num = \func_num_args();
  $__res = (object)["apply" => (function() use (&$Functor0_0, &$dictBind, &$dictMonoid) {
  $__fn = function($v, $v1 = null, $r = null, $s = null) use (&$Functor0_0, &$dictBind, &$dictMonoid, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((($dictBind)->bind)((($v)($r))($s)))(function($v2) use (&$Functor0_0, &$dictMonoid, &$r, &$v1) {
  $__num = \func_num_args();
  $__local_var_2 = ($v2)->value2;
  $__res = ((($Functor0_0)->map)(function($v3) use (&$__local_var_2, &$dictMonoid, &$v2) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data3("RWSResult", ($v3)->value0, (($v2)->value1)(($v3)->value1), ((((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->append)($__local_var_2))(($v3)->value2));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((($v1)($r))(($v2)->value0));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) use (&$functorRWST1_1) {
  $__num = \func_num_args();
  $__res = $functorRWST1_1;
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
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_bindRWST'] = function() { $v = function($dictBind) {
  $__num = \func_num_args();
  $__local_var_0 = (((($dictBind)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $applyRWST1_1 = (($GLOBALS['Control_Monad_RWS_Trans_applyRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_applyRWST')))($dictBind);
  $__res = function($dictMonoid) use (&$__local_var_0, &$applyRWST1_1, &$dictBind) {
  $__num = \func_num_args();
  $applyRWST2_2 = ($applyRWST1_1)($dictMonoid);
  $__res = (object)["bind" => (function() use (&$__local_var_0, &$dictBind, &$dictMonoid) {
  $__fn = function($v, $f = null, $r = null, $s = null) use (&$__local_var_0, &$dictBind, &$dictMonoid, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((($dictBind)->bind)((($v)($r))($s)))(function($v1) use (&$__local_var_0, &$dictMonoid, &$f, &$r) {
  $__num = \func_num_args();
  $__local_var_3 = ($v1)->value2;
  $__res = ((($__local_var_0)->map)(function($v3) use (&$__local_var_3, &$dictMonoid) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data3("RWSResult", ($v3)->value0, ($v3)->value1, ((((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->append)($__local_var_3))(($v3)->value2));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(((($f)(($v1)->value1))($r))(($v1)->value0));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($dollar__unused_0) use (&$applyRWST2_2) {
  $__num = \func_num_args();
  $__res = $applyRWST2_2;
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
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_semigroupRWST'] = function() { $v = function($dictBind) {
  $__num = \func_num_args();
  $applyRWST1_0 = (($GLOBALS['Control_Monad_RWS_Trans_applyRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_applyRWST')))($dictBind);
  $__res = function($dictMonoid) use (&$applyRWST1_0) {
  $__num = \func_num_args();
  $lift2_1 = (($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))(($applyRWST1_0)($dictMonoid));
  $__res = function($dictSemigroup) use (&$lift2_1) {
  $__num = \func_num_args();
  $__res = (object)["append" => ($lift2_1)(($dictSemigroup)->append)];
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
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_applicativeRWST'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $applyRWST1_0 = (($GLOBALS['Control_Monad_RWS_Trans_applyRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_applyRWST')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictMonoid) use (&$applyRWST1_0, &$dictMonad) {
  $__num = \func_num_args();
  $mempty_1 = ($dictMonoid)->mempty;
  $applyRWST2_2 = ($applyRWST1_0)($dictMonoid);
  $__res = (object)["pure" => (function() use (&$dictMonad, &$mempty_1) {
  $__fn = function($a, $v = null, $s = null) use (&$dictMonad, &$mempty_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(new Phpurs_Data3("RWSResult", $s, $a, $mempty_1));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($dollar__unused_0) use (&$applyRWST2_2) {
  $__num = \func_num_args();
  $__res = $applyRWST2_2;
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
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_monadRWST'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $applicativeRWST1_0 = (($GLOBALS['Control_Monad_RWS_Trans_applicativeRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_applicativeRWST')))($dictMonad);
  $bindRWST1_1 = (($GLOBALS['Control_Monad_RWS_Trans_bindRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_bindRWST')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictMonoid) use (&$applicativeRWST1_0, &$bindRWST1_1) {
  $__num = \func_num_args();
  $applicativeRWST2_2 = ($applicativeRWST1_0)($dictMonoid);
  $bindRWST2_3 = ($bindRWST1_1)($dictMonoid);
  $__res = (object)["Applicative0" => function($dollar__unused_0) use (&$applicativeRWST2_2) {
  $__num = \func_num_args();
  $__res = $applicativeRWST2_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$bindRWST2_3) {
  $__num = \func_num_args();
  $__res = $bindRWST2_3;
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
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_monadAskRWST'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $monadRWST1_0 = (($GLOBALS['Control_Monad_RWS_Trans_monadRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_monadRWST')))($dictMonad);
  $__res = function($dictMonoid) use (&$dictMonad, &$monadRWST1_0) {
  $__num = \func_num_args();
  $mempty_1 = ($dictMonoid)->mempty;
  $monadRWST2_2 = ($monadRWST1_0)($dictMonoid);
  $__res = (object)["ask" => (function() use (&$dictMonad, &$mempty_1) {
  $__fn = function($r, $s = null) use (&$dictMonad, &$mempty_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(new Phpurs_Data3("RWSResult", $s, $r, $mempty_1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($dollar__unused_0) use (&$monadRWST2_2) {
  $__num = \func_num_args();
  $__res = $monadRWST2_2;
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
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_monadReaderRWST'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $monadAskRWST1_0 = (($GLOBALS['Control_Monad_RWS_Trans_monadAskRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_monadAskRWST')))($dictMonad);
  $__res = function($dictMonoid) use (&$monadAskRWST1_0) {
  $__num = \func_num_args();
  $monadAskRWST2_1 = ($monadAskRWST1_0)($dictMonoid);
  $__res = (object)["local" => (function() {
  $__fn = function($f, $m = null, $r = null, $s = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (($m)(($f)($r)))($s);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "MonadAsk0" => function($dollar__unused_0) use (&$monadAskRWST2_1) {
  $__num = \func_num_args();
  $__res = $monadAskRWST2_1;
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
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_monadEffectRWS'] = function() { $v = (function() {
  $__fn = function($dictMonoid, $dictMonadEffect = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $Monad0_0 = (($dictMonadEffect)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadRWST1_1 = ((($GLOBALS['Control_Monad_RWS_Trans_monadRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_monadRWST')))($Monad0_0))($dictMonoid);
  $__res = (object)["liftEffect" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((((($GLOBALS['Control_Monad_RWS_Trans_monadTransRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_monadTransRWST')))($dictMonoid))->lift)($Monad0_0)))(($dictMonadEffect)->liftEffect), "Monad0" => function($dollar__unused_0) use (&$monadRWST1_1) {
  $__num = \func_num_args();
  $__res = $monadRWST1_1;
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
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_monadRecRWST'] = function() { $v = function($dictMonadRec) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadRWST1_1 = (($GLOBALS['Control_Monad_RWS_Trans_monadRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_monadRWST')))($Monad0_0);
  $__res = function($dictMonoid) use (&$Monad0_0, &$dictMonadRec, &$monadRWST1_1) {
  $__num = \func_num_args();
  $__local_var_2 = (($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $mempty_3 = ($dictMonoid)->mempty;
  $monadRWST2_4 = ($monadRWST1_1)($dictMonoid);
  $__res = (object)["tailRecM" => (function() use (&$Monad0_0, &$__local_var_2, &$dictMonadRec, &$mempty_3) {
  $__fn = function($k, $a = null, $r = null, $s = null) use (&$Monad0_0, &$__local_var_2, &$dictMonadRec, &$mempty_3, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((($dictMonadRec)->tailRecM)(function($v) use (&$Monad0_0, &$__local_var_2, &$k, &$r) {
  $__num = \func_num_args();
  $__local_var_5 = ($v)->value2;
  $__res = ((((($Monad0_0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)(((($k)(($v)->value1))($r))(($v)->value0)))(function($v2) use (&$Monad0_0, &$__local_var_2, &$__local_var_5) {
  $__num = \func_num_args();
  if ((is_object(($v2)->value1) && ((($v2)->value1)->tag === "Loop"))) {
$__t6 = new Phpurs_Data1("Loop", new Phpurs_Data3("RWSResult", ($v2)->value0, (($v2)->value1)->value0, ((($__local_var_2)->append)($__local_var_5))(($v2)->value2)));
} else {
if ((is_object(($v2)->value1) && ((($v2)->value1)->tag === "Done"))) {
$__t6 = new Phpurs_Data1("Done", new Phpurs_Data3("RWSResult", ($v2)->value0, (($v2)->value1)->value0, ((($__local_var_2)->append)($__local_var_5))(($v2)->value2)));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
  $__res = (((($Monad0_0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)($__t6);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(new Phpurs_Data3("RWSResult", $s, $a, $mempty_3));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($dollar__unused_0) use (&$monadRWST2_4) {
  $__num = \func_num_args();
  $__res = $monadRWST2_4;
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
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_monadStateRWST'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $monadRWST1_0 = (($GLOBALS['Control_Monad_RWS_Trans_monadRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_monadRWST')))($dictMonad);
  $__res = function($dictMonoid) use (&$dictMonad, &$monadRWST1_0) {
  $__num = \func_num_args();
  $mempty_1 = ($dictMonoid)->mempty;
  $monadRWST2_2 = ($monadRWST1_0)($dictMonoid);
  $__res = (object)["state" => (function() use (&$dictMonad, &$mempty_1) {
  $__fn = function($f, $v = null, $s = null) use (&$dictMonad, &$mempty_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $v1_3 = ($f)($s);
  $__res = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(new Phpurs_Data3("RWSResult", ($v1_3)->value1, ($v1_3)->value0, $mempty_1));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($dollar__unused_0) use (&$monadRWST2_2) {
  $__num = \func_num_args();
  $__res = $monadRWST2_2;
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
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_monadTellRWST'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $monadRWST1_0 = (($GLOBALS['Control_Monad_RWS_Trans_monadRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_monadRWST')))($dictMonad);
  $__res = function($dictMonoid) use (&$dictMonad, &$monadRWST1_0) {
  $__num = \func_num_args();
  $Semigroup0_1 = (($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadRWST2_2 = ($monadRWST1_0)($dictMonoid);
  $__res = (object)["tell" => (function() use (&$dictMonad) {
  $__fn = function($w, $v = null, $s = null) use (&$dictMonad, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(new Phpurs_Data3("RWSResult", $s, ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')), $w));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Semigroup0" => function($dollar__unused_0) use (&$Semigroup0_1) {
  $__num = \func_num_args();
  $__res = $Semigroup0_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad1" => function($dollar__unused_0) use (&$monadRWST2_2) {
  $__num = \func_num_args();
  $__res = $monadRWST2_2;
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
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_monadWriterRWST'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_1 = (($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadTellRWST1_2 = (($GLOBALS['Control_Monad_RWS_Trans_monadTellRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_monadTellRWST')))($dictMonad);
  $__res = function($dictMonoid) use (&$__local_var_0, &$__local_var_1, &$monadTellRWST1_2) {
  $__num = \func_num_args();
  $monadTellRWST2_3 = ($monadTellRWST1_2)($dictMonoid);
  $__res = (object)["listen" => (function() use (&$__local_var_0, &$__local_var_1) {
  $__fn = function($m, $r = null, $s = null) use (&$__local_var_0, &$__local_var_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($__local_var_0)->bind)((($m)($r))($s)))(function($v) use (&$__local_var_1) {
  $__num = \func_num_args();
  $__res = (($__local_var_1)->pure)(new Phpurs_Data3("RWSResult", ($v)->value0, new Phpurs_Data2("Tuple", ($v)->value1, ($v)->value2), ($v)->value2));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "pass" => (function() use (&$__local_var_0, &$__local_var_1) {
  $__fn = function($m, $r = null, $s = null) use (&$__local_var_0, &$__local_var_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($__local_var_0)->bind)((($m)($r))($s)))(function($v) use (&$__local_var_1) {
  $__num = \func_num_args();
  $__res = (($__local_var_1)->pure)(new Phpurs_Data3("RWSResult", ($v)->value0, (($v)->value1)->value0, ((($v)->value1)->value1)(($v)->value2)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Monoid0" => function($dollar__unused_0) use (&$dictMonoid) {
  $__num = \func_num_args();
  $__res = $dictMonoid;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "MonadTell1" => function($dollar__unused_0) use (&$monadTellRWST2_3) {
  $__num = \func_num_args();
  $__res = $monadTellRWST2_3;
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
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_monadThrowRWST'] = function() { $v = function($dictMonadThrow) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadThrow)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadRWST1_1 = (($GLOBALS['Control_Monad_RWS_Trans_monadRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_monadRWST')))($Monad0_0);
  $__res = function($dictMonoid) use (&$Monad0_0, &$dictMonadThrow, &$monadRWST1_1) {
  $__num = \func_num_args();
  $lift_2 = (((($GLOBALS['Control_Monad_RWS_Trans_monadTransRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_monadTransRWST')))($dictMonoid))->lift)($Monad0_0);
  $monadRWST2_3 = ($monadRWST1_1)($dictMonoid);
  $__res = (object)["throwError" => function($e) use (&$dictMonadThrow, &$lift_2) {
  $__num = \func_num_args();
  $__res = ($lift_2)((($dictMonadThrow)->throwError)($e));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad0" => function($dollar__unused_0) use (&$monadRWST2_3) {
  $__num = \func_num_args();
  $__res = $monadRWST2_3;
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
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_monadErrorRWST'] = function() { $v = function($dictMonadError) {
  $__num = \func_num_args();
  $monadThrowRWST1_0 = (($GLOBALS['Control_Monad_RWS_Trans_monadThrowRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_monadThrowRWST')))((($dictMonadError)->MonadThrow0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictMonoid) use (&$dictMonadError, &$monadThrowRWST1_0) {
  $__num = \func_num_args();
  $monadThrowRWST2_1 = ($monadThrowRWST1_0)($dictMonoid);
  $__res = (object)["catchError" => (function() use (&$dictMonadError) {
  $__fn = function($m, $h = null, $r = null, $s = null) use (&$dictMonadError, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((($dictMonadError)->catchError)((($m)($r))($s)))(function($e) use (&$h, &$r, &$s) {
  $__num = \func_num_args();
  $__res = ((($h)($e))($r))($s);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => function($dollar__unused_0) use (&$monadThrowRWST2_1) {
  $__num = \func_num_args();
  $__res = $monadThrowRWST2_1;
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
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_monadSTRWST'] = function() { $v = (function() {
  $__fn = function($dictMonoid, $dictMonadST = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $Monad0_0 = (($dictMonadST)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadRWST1_1 = ((($GLOBALS['Control_Monad_RWS_Trans_monadRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_monadRWST')))($Monad0_0))($dictMonoid);
  $__res = (object)["liftST" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((((($GLOBALS['Control_Monad_RWS_Trans_monadTransRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_monadTransRWST')))($dictMonoid))->lift)($Monad0_0)))(($dictMonadST)->liftST), "Monad0" => function($dollar__unused_0) use (&$monadRWST1_1) {
  $__num = \func_num_args();
  $__res = $monadRWST1_1;
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
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_monoidRWST'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $applicativeRWST1_0 = (($GLOBALS['Control_Monad_RWS_Trans_applicativeRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_applicativeRWST')))($dictMonad);
  $semigroupRWST1_1 = (($GLOBALS['Control_Monad_RWS_Trans_semigroupRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_semigroupRWST')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictMonoid) use (&$applicativeRWST1_0, &$semigroupRWST1_1) {
  $__num = \func_num_args();
  $semigroupRWST2_2 = ($semigroupRWST1_1)($dictMonoid);
  $__res = function($dictMonoid1) use (&$applicativeRWST1_0, &$dictMonoid, &$semigroupRWST2_2) {
  $__num = \func_num_args();
  $semigroupRWST3_3 = ($semigroupRWST2_2)((($dictMonoid1)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["mempty" => ((($applicativeRWST1_0)($dictMonoid))->pure)(($dictMonoid1)->mempty), "Semigroup0" => function($dollar__unused_0) use (&$semigroupRWST3_3) {
  $__num = \func_num_args();
  $__res = $semigroupRWST3_3;
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
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_altRWST'] = function() { $v = function($dictAlt) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictAlt)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $functorRWST1_1 = (object)["map" => (function() use (&$__local_var_0) {
  $__fn = function($f, $v = null, $r = null, $s = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((($__local_var_0)->map)(function($v1) use (&$f) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data3("RWSResult", ($v1)->value0, ($f)(($v1)->value1), ($v1)->value2);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((($v)($r))($s));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()];
  $__res = (object)["alt" => (function() use (&$dictAlt) {
  $__fn = function($v, $v1 = null, $r = null, $s = null) use (&$dictAlt, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((($dictAlt)->alt)((($v)($r))($s)))((($v1)($r))($s));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) use (&$functorRWST1_1) {
  $__num = \func_num_args();
  $__res = $functorRWST1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_plusRWST'] = function() { $v = function($dictPlus) {
  $__num = \func_num_args();
  $empty_0 = ($dictPlus)->empty;
  $altRWST1_1 = (($GLOBALS['Control_Monad_RWS_Trans_altRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_altRWST')))((($dictPlus)->Alt0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["empty" => (function() use (&$empty_0) {
  $__fn = function($v, $v1 = null) use (&$empty_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = $empty_0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Alt0" => function($dollar__unused_0) use (&$altRWST1_1) {
  $__num = \func_num_args();
  $__res = $altRWST1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_RWS_Trans_alternativeRWST'] = function() { $v = (function() {
  $__fn = function($dictMonoid, $dictAlternative = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $plusRWST1_0 = (($GLOBALS['Control_Monad_RWS_Trans_plusRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_plusRWST')))((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictMonad) use (&$dictMonoid, &$plusRWST1_0) {
  $__num = \func_num_args();
  $applicativeRWST1_1 = ((($GLOBALS['Control_Monad_RWS_Trans_applicativeRWST'] ?? \PhpursThunks::eval('Control_Monad_RWS_Trans_applicativeRWST')))($dictMonad))($dictMonoid);
  $__res = (object)["Applicative0" => function($dollar__unused_0) use (&$applicativeRWST1_1) {
  $__num = \func_num_args();
  $__res = $applicativeRWST1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Plus1" => function($dollar__unused_0) use (&$plusRWST1_0) {
  $__num = \func_num_args();
  $__res = $plusRWST1_0;
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
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };
































