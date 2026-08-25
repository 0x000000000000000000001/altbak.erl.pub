<?php

namespace Control\Monad\Reader\Trans;

// ALL IMPORTS: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Monad, Control.Monad.Cont.Class, Control.Monad.Error.Class, Control.Monad.Reader.Class, Control.Monad.Reader.Trans, Control.Monad.Rec.Class, Control.Monad.ST.Class, Control.Monad.State.Class, Control.Monad.Trans.Class, Control.Monad.Writer.Class, Control.MonadPlus, Control.Plus, Control.Semigroupoid, Data.Distributive, Data.Function, Data.Functor, Data.Monoid, Data.Newtype, Data.Semigroup, Effect.Class, Prelude, Prim
// TO REQUIRE: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Monad, Control.Monad.Cont.Class, Control.Monad.Error.Class, Control.Monad.Reader.Class, Control.Monad.Reader.Trans, Control.Monad.Rec.Class, Control.Monad.ST.Class, Control.Monad.State.Class, Control.Monad.Trans.Class, Control.Monad.Writer.Class, Control.MonadPlus, Control.Plus, Control.Semigroupoid, Data.Distributive, Data.Function, Data.Functor, Data.Monoid, Data.Newtype, Data.Semigroup, Effect.Class, Prelude
require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Distributive/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
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
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_ReaderT'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_withReaderT'] = function() { $v = (function() {
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
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_runReaderT'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = $v;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_newtypeReaderT'] = function() { $v = (object)["Coercible0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_monadTransReaderT'] = function() { $v = (object)["lift" => function($dictMonad) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Reader_Trans_ReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_ReaderT'))))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_mapReaderT'] = function() { $v = (function() {
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
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_functorReaderT'] = function() { $v = function($dictFunctor) {
  $__num = \func_num_args();
  $__res = (object)["map" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Reader_Trans_mapReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_mapReaderT'))))(($dictFunctor)->map)];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_distributiveReaderT'] = function() { $v = function($dictDistributive) {
  $__num = \func_num_args();
  $functorReaderT1_0 = (object)["map" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Reader_Trans_mapReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_mapReaderT'))))(((($dictDistributive)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)];
  $__res = (object)["distribute" => function($dictFunctor) use (&$dictDistributive) {
  $__num = \func_num_args();
  $collect1_1 = (($dictDistributive)->collect)($dictFunctor);
  $__res = (function() use (&$collect1_1) {
  $__fn = function($a, $e = null) use (&$collect1_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($collect1_1)(function($r) use (&$e) {
  $__num = \func_num_args();
  $__res = ($r)($e);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($a);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "collect" => (function() use (&$dictDistributive) {
  $__fn = function($dictFunctor, $f = null) use (&$dictDistributive, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((((($GLOBALS['Control_Monad_Reader_Trans_distributiveReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_distributiveReaderT')))($dictDistributive))->distribute)($dictFunctor)))((($dictFunctor)->map)($f));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) use (&$functorReaderT1_0) {
  $__num = \func_num_args();
  $__res = $functorReaderT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_applyReaderT'] = function() { $v = function($dictApply) {
  $__num = \func_num_args();
  $functorReaderT1_0 = (object)["map" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Reader_Trans_mapReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_mapReaderT'))))(((($dictApply)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)];
  $__res = (object)["apply" => (function() use (&$dictApply) {
  $__fn = function($v, $v1 = null, $r = null) use (&$dictApply, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictApply)->apply)(($v)($r)))(($v1)($r));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) use (&$functorReaderT1_0) {
  $__num = \func_num_args();
  $__res = $functorReaderT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_bindReaderT'] = function() { $v = function($dictBind) {
  $__num = \func_num_args();
  $applyReaderT1_0 = (($GLOBALS['Control_Monad_Reader_Trans_applyReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_applyReaderT')))((($dictBind)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["bind" => (function() use (&$dictBind) {
  $__fn = function($v, $k = null, $r = null) use (&$dictBind, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictBind)->bind)(($v)($r)))(function($a) use (&$k, &$r) {
  $__num = \func_num_args();
  $__res = (($k)($a))($r);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($dollar__unused_0) use (&$applyReaderT1_0) {
  $__num = \func_num_args();
  $__res = $applyReaderT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_semigroupReaderT'] = function() { $v = function($dictApply) {
  $__num = \func_num_args();
  $lift2_0 = (($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))((($GLOBALS['Control_Monad_Reader_Trans_applyReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_applyReaderT')))($dictApply));
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
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_applicativeReaderT'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $applyReaderT1_0 = (($GLOBALS['Control_Monad_Reader_Trans_applyReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_applyReaderT')))((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["pure" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Reader_Trans_ReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_ReaderT'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const'))))(($dictApplicative)->pure)), "Apply0" => function($dollar__unused_0) use (&$applyReaderT1_0) {
  $__num = \func_num_args();
  $__res = $applyReaderT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_monadReaderT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $applicativeReaderT1_0 = (($GLOBALS['Control_Monad_Reader_Trans_applicativeReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_applicativeReaderT')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $bindReaderT1_1 = (($GLOBALS['Control_Monad_Reader_Trans_bindReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_bindReaderT')))((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["Applicative0" => function($dollar__unused_0) use (&$applicativeReaderT1_0) {
  $__num = \func_num_args();
  $__res = $applicativeReaderT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$bindReaderT1_1) {
  $__num = \func_num_args();
  $__res = $bindReaderT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_monadAskReaderT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $monadReaderT1_0 = (($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_monadReaderT')))($dictMonad);
  $__res = (object)["ask" => ((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure, "Monad0" => function($dollar__unused_0) use (&$monadReaderT1_0) {
  $__num = \func_num_args();
  $__res = $monadReaderT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_monadReaderReaderT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $monadReaderT1_0 = (($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_monadReaderT')))($dictMonad);
  $monadAskReaderT1_1 = (object)["ask" => ((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure, "Monad0" => function($dollar__unused_0) use (&$monadReaderT1_0) {
  $__num = \func_num_args();
  $__res = $monadReaderT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["local" => ($GLOBALS['Control_Monad_Reader_Trans_withReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_withReaderT')), "MonadAsk0" => function($dollar__unused_0) use (&$monadAskReaderT1_1) {
  $__num = \func_num_args();
  $__res = $monadAskReaderT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_monadContReaderT'] = function() { $v = function($dictMonadCont) {
  $__num = \func_num_args();
  $monadReaderT1_0 = (($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_monadReaderT')))((($dictMonadCont)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["callCC" => (function() use (&$dictMonadCont) {
  $__fn = function($f, $r = null) use (&$dictMonadCont, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($dictMonadCont)->callCC)(function($c) use (&$f, &$r) {
  $__num = \func_num_args();
  $__res = (($f)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Reader_Trans_ReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_ReaderT'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const'))))($c))))($r);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($dollar__unused_0) use (&$monadReaderT1_0) {
  $__num = \func_num_args();
  $__res = $monadReaderT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_monadEffectReader'] = function() { $v = function($dictMonadEffect) {
  $__num = \func_num_args();
  $monadReaderT1_0 = (($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_monadReaderT')))((($dictMonadEffect)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["liftEffect" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Reader_Trans_ReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_ReaderT'))))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const')))))(($dictMonadEffect)->liftEffect), "Monad0" => function($dollar__unused_0) use (&$monadReaderT1_0) {
  $__num = \func_num_args();
  $__res = $monadReaderT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_monadRecReaderT'] = function() { $v = function($dictMonadRec) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_1 = (($Monad0_0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $pure_2 = ((($Monad0_0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure;
  $monadReaderT1_3 = (($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_monadReaderT')))($Monad0_0);
  $__res = (object)["tailRecM" => (function() use (&$__local_var_1, &$dictMonadRec, &$pure_2) {
  $__fn = function($k, $a = null, $r = null) use (&$__local_var_1, &$dictMonadRec, &$pure_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictMonadRec)->tailRecM)(function($a__prime__) use (&$__local_var_1, &$k, &$pure_2, &$r) {
  $__num = \func_num_args();
  $__res = ((($__local_var_1)->bind)((($k)($a__prime__))($r)))($pure_2);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($a);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($dollar__unused_0) use (&$monadReaderT1_3) {
  $__num = \func_num_args();
  $__res = $monadReaderT1_3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_monadStateReaderT'] = function() { $v = function($dictMonadState) {
  $__num = \func_num_args();
  $monadReaderT1_0 = (($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_monadReaderT')))((($dictMonadState)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["state" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Reader_Trans_ReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_ReaderT'))))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const')))))(($dictMonadState)->state), "Monad0" => function($dollar__unused_0) use (&$monadReaderT1_0) {
  $__num = \func_num_args();
  $__res = $monadReaderT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_monadTellReaderT'] = function() { $v = function($dictMonadTell) {
  $__num = \func_num_args();
  $Semigroup0_0 = (($dictMonadTell)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadReaderT1_1 = (($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_monadReaderT')))((($dictMonadTell)->Monad1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["tell" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Reader_Trans_ReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_ReaderT'))))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const')))))(($dictMonadTell)->tell), "Semigroup0" => function($dollar__unused_0) use (&$Semigroup0_0) {
  $__num = \func_num_args();
  $__res = $Semigroup0_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad1" => function($dollar__unused_0) use (&$monadReaderT1_1) {
  $__num = \func_num_args();
  $__res = $monadReaderT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_monadWriterReaderT'] = function() { $v = function($dictMonadWriter) {
  $__num = \func_num_args();
  $Monoid0_0 = (($dictMonadWriter)->Monoid0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadTellReaderT1_1 = (($GLOBALS['Control_Monad_Reader_Trans_monadTellReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_monadTellReaderT')))((($dictMonadWriter)->MonadTell1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["listen" => (($GLOBALS['Control_Monad_Reader_Trans_mapReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_mapReaderT')))(($dictMonadWriter)->listen), "pass" => (($GLOBALS['Control_Monad_Reader_Trans_mapReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_mapReaderT')))(($dictMonadWriter)->pass), "Monoid0" => function($dollar__unused_0) use (&$Monoid0_0) {
  $__num = \func_num_args();
  $__res = $Monoid0_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "MonadTell1" => function($dollar__unused_0) use (&$monadTellReaderT1_1) {
  $__num = \func_num_args();
  $__res = $monadTellReaderT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_monadThrowReaderT'] = function() { $v = function($dictMonadThrow) {
  $__num = \func_num_args();
  $monadReaderT1_0 = (($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_monadReaderT')))((($dictMonadThrow)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["throwError" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Reader_Trans_ReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_ReaderT'))))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const')))))(($dictMonadThrow)->throwError), "Monad0" => function($dollar__unused_0) use (&$monadReaderT1_0) {
  $__num = \func_num_args();
  $__res = $monadReaderT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_monadErrorReaderT'] = function() { $v = function($dictMonadError) {
  $__num = \func_num_args();
  $monadThrowReaderT1_0 = (($GLOBALS['Control_Monad_Reader_Trans_monadThrowReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_monadThrowReaderT')))((($dictMonadError)->MonadThrow0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["catchError" => (function() use (&$dictMonadError) {
  $__fn = function($v, $h = null, $r = null) use (&$dictMonadError, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictMonadError)->catchError)(($v)($r)))(function($e) use (&$h, &$r) {
  $__num = \func_num_args();
  $__res = (($h)($e))($r);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => function($dollar__unused_0) use (&$monadThrowReaderT1_0) {
  $__num = \func_num_args();
  $__res = $monadThrowReaderT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_monadSTReaderT'] = function() { $v = function($dictMonadST) {
  $__num = \func_num_args();
  $monadReaderT1_0 = (($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_monadReaderT')))((($dictMonadST)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["liftST" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Reader_Trans_ReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_ReaderT'))))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const')))))(($dictMonadST)->liftST), "Monad0" => function($dollar__unused_0) use (&$monadReaderT1_0) {
  $__num = \func_num_args();
  $__res = $monadReaderT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_monoidReaderT'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $semigroupReaderT1_0 = (($GLOBALS['Control_Monad_Reader_Trans_semigroupReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_semigroupReaderT')))((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictMonoid) use (&$dictApplicative, &$semigroupReaderT1_0) {
  $__num = \func_num_args();
  $semigroupReaderT2_1 = ($semigroupReaderT1_0)((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["mempty" => (((($GLOBALS['Control_Monad_Reader_Trans_applicativeReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_applicativeReaderT')))($dictApplicative))->pure)(($dictMonoid)->mempty), "Semigroup0" => function($dollar__unused_0) use (&$semigroupReaderT2_1) {
  $__num = \func_num_args();
  $__res = $semigroupReaderT2_1;
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
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_altReaderT'] = function() { $v = function($dictAlt) {
  $__num = \func_num_args();
  $functorReaderT1_0 = (object)["map" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_Reader_Trans_mapReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_mapReaderT'))))(((($dictAlt)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)];
  $__res = (object)["alt" => (function() use (&$dictAlt) {
  $__fn = function($v, $v1 = null, $r = null) use (&$dictAlt, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictAlt)->alt)(($v)($r)))(($v1)($r));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) use (&$functorReaderT1_0) {
  $__num = \func_num_args();
  $__res = $functorReaderT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_plusReaderT'] = function() { $v = function($dictPlus) {
  $__num = \func_num_args();
  $altReaderT1_0 = (($GLOBALS['Control_Monad_Reader_Trans_altReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_altReaderT')))((($dictPlus)->Alt0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__local_var_1 = ($dictPlus)->empty;
  $__res = (object)["empty" => function($v) use (&$__local_var_1) {
  $__num = \func_num_args();
  $__res = $__local_var_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Alt0" => function($dollar__unused_0) use (&$altReaderT1_0) {
  $__num = \func_num_args();
  $__res = $altReaderT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_alternativeReaderT'] = function() { $v = function($dictAlternative) {
  $__num = \func_num_args();
  $applicativeReaderT1_0 = (($GLOBALS['Control_Monad_Reader_Trans_applicativeReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_applicativeReaderT')))((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $plusReaderT1_1 = (($GLOBALS['Control_Monad_Reader_Trans_plusReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_plusReaderT')))((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["Applicative0" => function($dollar__unused_0) use (&$applicativeReaderT1_0) {
  $__num = \func_num_args();
  $__res = $applicativeReaderT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Plus1" => function($dollar__unused_0) use (&$plusReaderT1_1) {
  $__num = \func_num_args();
  $__res = $plusReaderT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Reader_Trans_monadPlusReaderT'] = function() { $v = function($dictMonadPlus) {
  $__num = \func_num_args();
  $monadReaderT1_0 = (($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_monadReaderT')))((($dictMonadPlus)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $alternativeReaderT1_1 = (($GLOBALS['Control_Monad_Reader_Trans_alternativeReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_alternativeReaderT')))((($dictMonadPlus)->Alternative1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["Monad0" => function($dollar__unused_0) use (&$monadReaderT1_0) {
  $__num = \func_num_args();
  $__res = $monadReaderT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Alternative1" => function($dollar__unused_0) use (&$alternativeReaderT1_1) {
  $__num = \func_num_args();
  $__res = $alternativeReaderT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };































