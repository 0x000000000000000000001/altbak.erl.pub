<?php

namespace Control\Monad\Writer\Trans;

// ALL IMPORTS: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Monad, Control.Monad.Cont.Class, Control.Monad.Error.Class, Control.Monad.Reader.Class, Control.Monad.Rec.Class, Control.Monad.ST.Class, Control.Monad.State.Class, Control.Monad.Trans.Class, Control.Monad.Writer.Class, Control.Monad.Writer.Trans, Control.MonadPlus, Control.Plus, Control.Semigroupoid, Data.Function, Data.Functor, Data.Monoid, Data.Newtype, Data.Semigroup, Data.Tuple, Data.Unit, Effect.Class, Prelude, Prim
// TO REQUIRE: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Monad, Control.Monad.Cont.Class, Control.Monad.Error.Class, Control.Monad.Reader.Class, Control.Monad.Rec.Class, Control.Monad.ST.Class, Control.Monad.State.Class, Control.Monad.Trans.Class, Control.Monad.Writer.Class, Control.Monad.Writer.Trans, Control.MonadPlus, Control.Plus, Control.Semigroupoid, Data.Function, Data.Functor, Data.Monoid, Data.Newtype, Data.Semigroup, Data.Tuple, Data.Unit, Effect.Class, Prelude
require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Trans/index.php';
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_WriterT'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_runWriterT'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = $v;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_newtypeWriterT'] = function() { $v = (object)["Coercible0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_monadTransWriterT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_0 = ($dictMonoid)->mempty;
  $__res = (object)["lift" => (function() use (&$mempty_0) {
  $__fn = function($dictMonad, $m = null) use (&$mempty_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)($m))(function($a) use (&$dictMonad, &$mempty_0) {
  $__num = \func_num_args();
  $__res = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(new Phpurs_Data2("Tuple", $a, $mempty_0));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_mapWriterT'] = function() { $v = (function() {
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_functorWriterT'] = function() { $v = function($dictFunctor) {
  $__num = \func_num_args();
  $__res = (object)["map" => function($f) use (&$dictFunctor) {
  $__num = \func_num_args();
  $__res = (($dictFunctor)->map)(function($v) use (&$f) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($f)(($v)->value0), ($v)->value1);
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_execWriterT'] = function() { $v = (function() {
  $__fn = function($dictFunctor, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictFunctor)->map)(($GLOBALS['Data_Tuple_snd'] ?? \PhpursThunks::eval('Data_Tuple_snd'))))($v);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_applyWriterT'] = function() { $v = (function() {
  $__fn = function($dictSemigroup, $dictApply = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $Functor0_0 = (($dictApply)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $functorWriterT1_1 = (object)["map" => function($f) use (&$Functor0_0) {
  $__num = \func_num_args();
  $__res = (($Functor0_0)->map)(function($v) use (&$f) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($f)(($v)->value0), ($v)->value1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["apply" => (function() use (&$Functor0_0, &$dictApply, &$dictSemigroup) {
  $__fn = function($v, $v1 = null) use (&$Functor0_0, &$dictApply, &$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictApply)->apply)(((($Functor0_0)->map)((function() use (&$dictSemigroup) {
  $__fn = function($v3, $v4 = null) use (&$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", (($v3)->value0)(($v4)->value0), ((($dictSemigroup)->append)(($v3)->value1))(($v4)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))($v)))($v1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) use (&$functorWriterT1_1) {
  $__num = \func_num_args();
  $__res = $functorWriterT1_1;
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_bindWriterT'] = function() { $v = (function() {
  $__fn = function($dictSemigroup, $dictBind = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $Apply0_0 = (($dictBind)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $applyWriterT2_1 = ((($GLOBALS['Control_Monad_Writer_Trans_applyWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_applyWriterT')))($dictSemigroup))($Apply0_0);
  $__res = (object)["bind" => (function() use (&$Apply0_0, &$dictBind, &$dictSemigroup) {
  $__fn = function($v, $k = null) use (&$Apply0_0, &$dictBind, &$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictBind)->bind)($v))(function($v1) use (&$Apply0_0, &$dictSemigroup, &$k) {
  $__num = \func_num_args();
  $__local_var_2 = ($v1)->value1;
  $__res = ((((($Apply0_0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(function($v3) use (&$__local_var_2, &$dictSemigroup) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($v3)->value0, ((($dictSemigroup)->append)($__local_var_2))(($v3)->value1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($k)(($v1)->value0));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($dollar__unused_0) use (&$applyWriterT2_1) {
  $__num = \func_num_args();
  $__res = $applyWriterT2_1;
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_semigroupWriterT'] = function() { $v = (function() {
  $__fn = function($dictApply, $dictSemigroup = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $lift2_0 = (($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))(((($GLOBALS['Control_Monad_Writer_Trans_applyWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_applyWriterT')))($dictSemigroup))($dictApply));
  $__res = function($dictSemigroup1) use (&$lift2_0) {
  $__num = \func_num_args();
  $__res = (object)["append" => ($lift2_0)(($dictSemigroup1)->append)];
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_applicativeWriterT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_0 = ($dictMonoid)->mempty;
  $applyWriterT1_1 = (($GLOBALS['Control_Monad_Writer_Trans_applyWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_applyWriterT')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictApplicative) use (&$applyWriterT1_1, &$mempty_0) {
  $__num = \func_num_args();
  $applyWriterT2_2 = ($applyWriterT1_1)((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["pure" => function($a) use (&$dictApplicative, &$mempty_0) {
  $__num = \func_num_args();
  $__res = (($dictApplicative)->pure)(new Phpurs_Data2("Tuple", $a, $mempty_0));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply0" => function($dollar__unused_0) use (&$applyWriterT2_2) {
  $__num = \func_num_args();
  $__res = $applyWriterT2_2;
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_monadWriterT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $applicativeWriterT1_0 = (($GLOBALS['Control_Monad_Writer_Trans_applicativeWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_applicativeWriterT')))($dictMonoid);
  $bindWriterT1_1 = (($GLOBALS['Control_Monad_Writer_Trans_bindWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_bindWriterT')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictMonad) use (&$applicativeWriterT1_0, &$bindWriterT1_1) {
  $__num = \func_num_args();
  $applicativeWriterT2_2 = ($applicativeWriterT1_0)((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $bindWriterT2_3 = ($bindWriterT1_1)((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["Applicative0" => function($dollar__unused_0) use (&$applicativeWriterT2_2) {
  $__num = \func_num_args();
  $__res = $applicativeWriterT2_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$bindWriterT2_3) {
  $__num = \func_num_args();
  $__res = $bindWriterT2_3;
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_monadAskWriterT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $monadWriterT1_0 = (($GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_monadWriterT')))($dictMonoid);
  $__res = function($dictMonadAsk) use (&$dictMonoid, &$monadWriterT1_0) {
  $__num = \func_num_args();
  $Monad0_1 = (($dictMonadAsk)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadWriterT2_2 = ($monadWriterT1_0)($Monad0_1);
  $__res = (object)["ask" => ((((($GLOBALS['Control_Monad_Writer_Trans_monadTransWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_monadTransWriterT')))($dictMonoid))->lift)($Monad0_1))(($dictMonadAsk)->ask), "Monad0" => function($dollar__unused_0) use (&$monadWriterT2_2) {
  $__num = \func_num_args();
  $__res = $monadWriterT2_2;
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_monadReaderWriterT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $monadAskWriterT1_0 = (($GLOBALS['Control_Monad_Writer_Trans_monadAskWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_monadAskWriterT')))($dictMonoid);
  $__res = function($dictMonadReader) use (&$monadAskWriterT1_0) {
  $__num = \func_num_args();
  $monadAskWriterT2_1 = ($monadAskWriterT1_0)((($dictMonadReader)->MonadAsk0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["local" => function($f) use (&$dictMonadReader) {
  $__num = \func_num_args();
  $__res = (($dictMonadReader)->local)($f);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "MonadAsk0" => function($dollar__unused_0) use (&$monadAskWriterT2_1) {
  $__num = \func_num_args();
  $__res = $monadAskWriterT2_1;
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_monadContWriterT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_0 = ($dictMonoid)->mempty;
  $monadWriterT1_1 = (($GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_monadWriterT')))($dictMonoid);
  $__res = function($dictMonadCont) use (&$mempty_0, &$monadWriterT1_1) {
  $__num = \func_num_args();
  $monadWriterT2_2 = ($monadWriterT1_1)((($dictMonadCont)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["callCC" => function($f) use (&$dictMonadCont, &$mempty_0) {
  $__num = \func_num_args();
  $__res = (($dictMonadCont)->callCC)(function($c) use (&$f, &$mempty_0) {
  $__num = \func_num_args();
  $__res = ($f)(function($a) use (&$c, &$mempty_0) {
  $__num = \func_num_args();
  $__res = ($c)(new Phpurs_Data2("Tuple", $a, $mempty_0));
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
}, "Monad0" => function($dollar__unused_0) use (&$monadWriterT2_2) {
  $__num = \func_num_args();
  $__res = $monadWriterT2_2;
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_monadEffectWriter'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $monadWriterT1_0 = (($GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_monadWriterT')))($dictMonoid);
  $__res = function($dictMonadEffect) use (&$dictMonoid, &$monadWriterT1_0) {
  $__num = \func_num_args();
  $Monad0_1 = (($dictMonadEffect)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadWriterT2_2 = ($monadWriterT1_0)($Monad0_1);
  $__res = (object)["liftEffect" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((((($GLOBALS['Control_Monad_Writer_Trans_monadTransWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_monadTransWriterT')))($dictMonoid))->lift)($Monad0_1)))(($dictMonadEffect)->liftEffect), "Monad0" => function($dollar__unused_0) use (&$monadWriterT2_2) {
  $__num = \func_num_args();
  $__res = $monadWriterT2_2;
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_monadRecWriterT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $mempty_1 = ($dictMonoid)->mempty;
  $monadWriterT1_2 = (($GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_monadWriterT')))($dictMonoid);
  $__res = function($dictMonadRec) use (&$__local_var_0, &$mempty_1, &$monadWriterT1_2) {
  $__num = \func_num_args();
  $Monad0_3 = (($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadWriterT2_4 = ($monadWriterT1_2)($Monad0_3);
  $__res = (object)["tailRecM" => (function() use (&$Monad0_3, &$__local_var_0, &$dictMonadRec, &$mempty_1) {
  $__fn = function($f, $a = null) use (&$Monad0_3, &$__local_var_0, &$dictMonadRec, &$mempty_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictMonadRec)->tailRecM)(function($v) use (&$Monad0_3, &$__local_var_0, &$f) {
  $__num = \func_num_args();
  $__local_var_5 = ($v)->value1;
  $__res = ((((($Monad0_3)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)(($f)(($v)->value0)))(function($v2) use (&$Monad0_3, &$__local_var_0, &$__local_var_5) {
  $__num = \func_num_args();
  if ((is_object(($v2)->value0) && ((($v2)->value0)->tag === "Loop"))) {
$__t6 = new Phpurs_Data1("Loop", new Phpurs_Data2("Tuple", (($v2)->value0)->value0, ((($__local_var_0)->append)($__local_var_5))(($v2)->value1)));
} else {
if ((is_object(($v2)->value0) && ((($v2)->value0)->tag === "Done"))) {
$__t6 = new Phpurs_Data1("Done", new Phpurs_Data2("Tuple", (($v2)->value0)->value0, ((($__local_var_0)->append)($__local_var_5))(($v2)->value1)));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
  $__res = (((($Monad0_3)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)($__t6);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(new Phpurs_Data2("Tuple", $a, $mempty_1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($dollar__unused_0) use (&$monadWriterT2_4) {
  $__num = \func_num_args();
  $__res = $monadWriterT2_4;
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_monadStateWriterT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $monadWriterT1_0 = (($GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_monadWriterT')))($dictMonoid);
  $__res = function($dictMonadState) use (&$dictMonoid, &$monadWriterT1_0) {
  $__num = \func_num_args();
  $Monad0_1 = (($dictMonadState)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $lift1_2 = (((($GLOBALS['Control_Monad_Writer_Trans_monadTransWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_monadTransWriterT')))($dictMonoid))->lift)($Monad0_1);
  $monadWriterT2_3 = ($monadWriterT1_0)($Monad0_1);
  $__res = (object)["state" => function($f) use (&$dictMonadState, &$lift1_2) {
  $__num = \func_num_args();
  $__res = ($lift1_2)((($dictMonadState)->state)($f));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad0" => function($dollar__unused_0) use (&$monadWriterT2_3) {
  $__num = \func_num_args();
  $__res = $monadWriterT2_3;
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_monadTellWriterT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $Semigroup0_0 = (($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadWriterT1_1 = (($GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_monadWriterT')))($dictMonoid);
  $__res = function($dictMonad) use (&$Semigroup0_0, &$monadWriterT1_1) {
  $__num = \func_num_args();
  $monadWriterT2_2 = ($monadWriterT1_1)($dictMonad);
  $__res = (object)["tell" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Writer_Trans_WriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_WriterT'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure))((($GLOBALS['Data_Tuple_Tuple'] ?? \PhpursThunks::eval('Data_Tuple_Tuple')))(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))), "Semigroup0" => function($dollar__unused_0) use (&$Semigroup0_0) {
  $__num = \func_num_args();
  $__res = $Semigroup0_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad1" => function($dollar__unused_0) use (&$monadWriterT2_2) {
  $__num = \func_num_args();
  $__res = $monadWriterT2_2;
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_monadWriterWriterT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $monadTellWriterT1_0 = (($GLOBALS['Control_Monad_Writer_Trans_monadTellWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_monadTellWriterT')))($dictMonoid);
  $__res = function($dictMonad) use (&$dictMonoid, &$monadTellWriterT1_0) {
  $__num = \func_num_args();
  $__local_var_1 = (($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_2 = (($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadTellWriterT2_3 = ($monadTellWriterT1_0)($dictMonad);
  $__res = (object)["listen" => function($v) use (&$__local_var_1, &$__local_var_2) {
  $__num = \func_num_args();
  $__res = ((($__local_var_1)->bind)($v))(function($v1) use (&$__local_var_2) {
  $__num = \func_num_args();
  $__res = (($__local_var_2)->pure)(new Phpurs_Data2("Tuple", new Phpurs_Data2("Tuple", ($v1)->value0, ($v1)->value1), ($v1)->value1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "pass" => function($v) use (&$__local_var_1, &$__local_var_2) {
  $__num = \func_num_args();
  $__res = ((($__local_var_1)->bind)($v))(function($v1) use (&$__local_var_2) {
  $__num = \func_num_args();
  $__res = (($__local_var_2)->pure)(new Phpurs_Data2("Tuple", (($v1)->value0)->value0, ((($v1)->value0)->value1)(($v1)->value1)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monoid0" => function($dollar__unused_0) use (&$dictMonoid) {
  $__num = \func_num_args();
  $__res = $dictMonoid;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "MonadTell1" => function($dollar__unused_0) use (&$monadTellWriterT2_3) {
  $__num = \func_num_args();
  $__res = $monadTellWriterT2_3;
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_monadThrowWriterT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $monadWriterT1_0 = (($GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_monadWriterT')))($dictMonoid);
  $__res = function($dictMonadThrow) use (&$dictMonoid, &$monadWriterT1_0) {
  $__num = \func_num_args();
  $Monad0_1 = (($dictMonadThrow)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $lift1_2 = (((($GLOBALS['Control_Monad_Writer_Trans_monadTransWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_monadTransWriterT')))($dictMonoid))->lift)($Monad0_1);
  $monadWriterT2_3 = ($monadWriterT1_0)($Monad0_1);
  $__res = (object)["throwError" => function($e) use (&$dictMonadThrow, &$lift1_2) {
  $__num = \func_num_args();
  $__res = ($lift1_2)((($dictMonadThrow)->throwError)($e));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad0" => function($dollar__unused_0) use (&$monadWriterT2_3) {
  $__num = \func_num_args();
  $__res = $monadWriterT2_3;
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_monadErrorWriterT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $monadThrowWriterT1_0 = (($GLOBALS['Control_Monad_Writer_Trans_monadThrowWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_monadThrowWriterT')))($dictMonoid);
  $__res = function($dictMonadError) use (&$monadThrowWriterT1_0) {
  $__num = \func_num_args();
  $monadThrowWriterT2_1 = ($monadThrowWriterT1_0)((($dictMonadError)->MonadThrow0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["catchError" => (function() use (&$dictMonadError) {
  $__fn = function($v, $h = null) use (&$dictMonadError, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictMonadError)->catchError)($v))(function($e) use (&$h) {
  $__num = \func_num_args();
  $__res = ($h)($e);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => function($dollar__unused_0) use (&$monadThrowWriterT2_1) {
  $__num = \func_num_args();
  $__res = $monadThrowWriterT2_1;
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_monadSTWriterT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $monadWriterT1_0 = (($GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_monadWriterT')))($dictMonoid);
  $__res = function($dictMonadST) use (&$dictMonoid, &$monadWriterT1_0) {
  $__num = \func_num_args();
  $Monad0_1 = (($dictMonadST)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadWriterT2_2 = ($monadWriterT1_0)($Monad0_1);
  $__res = (object)["liftST" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((((($GLOBALS['Control_Monad_Writer_Trans_monadTransWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_monadTransWriterT')))($dictMonoid))->lift)($Monad0_1)))(($dictMonadST)->liftST), "Monad0" => function($dollar__unused_0) use (&$monadWriterT2_2) {
  $__num = \func_num_args();
  $__res = $monadWriterT2_2;
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_monoidWriterT'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $semigroupWriterT1_0 = (($GLOBALS['Control_Monad_Writer_Trans_semigroupWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_semigroupWriterT')))((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictMonoid) use (&$dictApplicative, &$semigroupWriterT1_0) {
  $__num = \func_num_args();
  $semigroupWriterT2_1 = ($semigroupWriterT1_0)((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictMonoid1) use (&$dictApplicative, &$dictMonoid, &$semigroupWriterT2_1) {
  $__num = \func_num_args();
  $semigroupWriterT3_2 = ($semigroupWriterT2_1)((($dictMonoid1)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["mempty" => ((((($GLOBALS['Control_Monad_Writer_Trans_applicativeWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_applicativeWriterT')))($dictMonoid))($dictApplicative))->pure)(($dictMonoid1)->mempty), "Semigroup0" => function($dollar__unused_0) use (&$semigroupWriterT3_2) {
  $__num = \func_num_args();
  $__res = $semigroupWriterT3_2;
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_altWriterT'] = function() { $v = function($dictAlt) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictAlt)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $functorWriterT1_1 = (object)["map" => function($f) use (&$__local_var_0) {
  $__num = \func_num_args();
  $__res = (($__local_var_0)->map)(function($v) use (&$f) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($f)(($v)->value0), ($v)->value1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["alt" => (function() use (&$dictAlt) {
  $__fn = function($v, $v1 = null) use (&$dictAlt, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictAlt)->alt)($v))($v1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) use (&$functorWriterT1_1) {
  $__num = \func_num_args();
  $__res = $functorWriterT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_plusWriterT'] = function() { $v = function($dictPlus) {
  $__num = \func_num_args();
  $altWriterT1_0 = (($GLOBALS['Control_Monad_Writer_Trans_altWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_altWriterT')))((($dictPlus)->Alt0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["empty" => ($dictPlus)->empty, "Alt0" => function($dollar__unused_0) use (&$altWriterT1_0) {
  $__num = \func_num_args();
  $__res = $altWriterT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_alternativeWriterT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $applicativeWriterT1_0 = (($GLOBALS['Control_Monad_Writer_Trans_applicativeWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_applicativeWriterT')))($dictMonoid);
  $__res = function($dictAlternative) use (&$applicativeWriterT1_0) {
  $__num = \func_num_args();
  $applicativeWriterT2_1 = ($applicativeWriterT1_0)((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__local_var_2 = (($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $altWriterT1_3 = (($GLOBALS['Control_Monad_Writer_Trans_altWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_altWriterT')))((($__local_var_2)->Alt0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["Applicative0" => function($dollar__unused_0) use (&$applicativeWriterT2_1) {
  $__num = \func_num_args();
  $__res = $applicativeWriterT2_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Plus1" => function($dollar__unused_0) use (&$__local_var_2, &$altWriterT1_3) {
  $__num = \func_num_args();
  $__res = (object)["empty" => ($__local_var_2)->empty, "Alt0" => function($dollar__unused_0) use (&$altWriterT1_3) {
  $__num = \func_num_args();
  $__res = $altWriterT1_3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
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
\PhpursThunks::$thunks['Control_Monad_Writer_Trans_monadPlusWriterT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $monadWriterT1_0 = (($GLOBALS['Control_Monad_Writer_Trans_monadWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_monadWriterT')))($dictMonoid);
  $alternativeWriterT1_1 = (($GLOBALS['Control_Monad_Writer_Trans_alternativeWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_alternativeWriterT')))($dictMonoid);
  $__res = function($dictMonadPlus) use (&$alternativeWriterT1_1, &$monadWriterT1_0) {
  $__num = \func_num_args();
  $monadWriterT2_2 = ($monadWriterT1_0)((($dictMonadPlus)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $alternativeWriterT2_3 = ($alternativeWriterT1_1)((($dictMonadPlus)->Alternative1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["Monad0" => function($dollar__unused_0) use (&$monadWriterT2_2) {
  $__num = \func_num_args();
  $__res = $monadWriterT2_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Alternative1" => function($dollar__unused_0) use (&$alternativeWriterT2_3) {
  $__num = \func_num_args();
  $__res = $alternativeWriterT2_3;
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






























