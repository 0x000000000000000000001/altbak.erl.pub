<?php

namespace Control\Parallel\Class;

// ALL IMPORTS: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Monad.Cont.Trans, Control.Monad.Except.Trans, Control.Monad.Maybe.Trans, Control.Monad.Reader.Trans, Control.Monad.Writer.Trans, Control.Parallel.Class, Control.Plus, Control.Semigroupoid, Data.Either, Data.Function, Data.Functor, Data.Functor.Compose, Data.Functor.Costar, Data.Maybe, Data.Newtype, Data.Profunctor.Star, Data.Unit, Effect.Class, Effect.Ref, Prelude, Prim
// TO REQUIRE: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Monad.Cont.Trans, Control.Monad.Except.Trans, Control.Monad.Maybe.Trans, Control.Monad.Reader.Trans, Control.Monad.Writer.Trans, Control.Parallel.Class, Control.Plus, Control.Semigroupoid, Data.Either, Data.Function, Data.Functor, Data.Functor.Compose, Data.Functor.Costar, Data.Maybe, Data.Newtype, Data.Profunctor.Star, Data.Unit, Effect.Class, Effect.Ref, Prelude
require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Except.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Maybe.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Trans/index.php';
require_once __DIR__ . '/../Control.Parallel.Class/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Costar/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Profunctor.Star/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Effect.Ref/index.php';
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
\PhpursThunks::$thunks['Control_Parallel_Class_ParCont'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Parallel_Class_sequential'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->sequential;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Parallel_Class_parallel'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->parallel;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Parallel_Class_newtypeParCont'] = function() { $v = (object)["Coercible0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Control_Parallel_Class_monadParWriterT'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $applyWriterT_0 = (($GLOBALS['Control_Monad_Writer_Trans_applyWriterT'] ?? \PhpursThunks::eval('Control_Monad_Writer_Trans_applyWriterT')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictParallel) use (&$applyWriterT_0) {
  $__num = \func_num_args();
  $applyWriterT1_1 = ($applyWriterT_0)((($dictParallel)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $applyWriterT2_2 = ($applyWriterT_0)((($dictParallel)->Apply1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["parallel" => function($v) use (&$dictParallel) {
  $__num = \func_num_args();
  $__res = (($dictParallel)->parallel)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "sequential" => function($v) use (&$dictParallel) {
  $__num = \func_num_args();
  $__res = (($dictParallel)->sequential)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply0" => function($dollar__unused_0) use (&$applyWriterT1_1) {
  $__num = \func_num_args();
  $__res = $applyWriterT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply1" => function($dollar__unused_0) use (&$applyWriterT2_2) {
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
\PhpursThunks::$thunks['Control_Parallel_Class_monadParStar'] = function() { $v = function($dictParallel) {
  $__num = \func_num_args();
  $parallel1_0 = ($dictParallel)->parallel;
  $sequential1_1 = ($dictParallel)->sequential;
  $applyStar_2 = (($GLOBALS['Data_Profunctor_Star_applyStar'] ?? \PhpursThunks::eval('Data_Profunctor_Star_applyStar')))((($dictParallel)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $applyStar1_3 = (($GLOBALS['Data_Profunctor_Star_applyStar'] ?? \PhpursThunks::eval('Data_Profunctor_Star_applyStar')))((($dictParallel)->Apply1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["parallel" => function($v) use (&$parallel1_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($parallel1_0))($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "sequential" => function($v) use (&$sequential1_1) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($sequential1_1))($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply0" => function($dollar__unused_0) use (&$applyStar_2) {
  $__num = \func_num_args();
  $__res = $applyStar_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply1" => function($dollar__unused_0) use (&$applyStar1_3) {
  $__num = \func_num_args();
  $__res = $applyStar1_3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Parallel_Class_monadParReaderT'] = function() { $v = function($dictParallel) {
  $__num = \func_num_args();
  $applyReaderT_0 = (($GLOBALS['Control_Monad_Reader_Trans_applyReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_applyReaderT')))((($dictParallel)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $applyReaderT1_1 = (($GLOBALS['Control_Monad_Reader_Trans_applyReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_applyReaderT')))((($dictParallel)->Apply1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["parallel" => (($GLOBALS['Control_Monad_Reader_Trans_mapReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_mapReaderT')))(($dictParallel)->parallel), "sequential" => (($GLOBALS['Control_Monad_Reader_Trans_mapReaderT'] ?? \PhpursThunks::eval('Control_Monad_Reader_Trans_mapReaderT')))(($dictParallel)->sequential), "Apply0" => function($dollar__unused_0) use (&$applyReaderT_0) {
  $__num = \func_num_args();
  $__res = $applyReaderT_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply1" => function($dollar__unused_0) use (&$applyReaderT1_1) {
  $__num = \func_num_args();
  $__res = $applyReaderT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Parallel_Class_monadParMaybeT'] = function() { $v = function($dictParallel) {
  $__num = \func_num_args();
  $applyCompose_0 = ((($GLOBALS['Data_Functor_Compose_applyCompose'] ?? \PhpursThunks::eval('Data_Functor_Compose_applyCompose')))((($dictParallel)->Apply1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')))))(($GLOBALS['Data_Maybe_applyMaybe'] ?? \PhpursThunks::eval('Data_Maybe_applyMaybe')));
  $__res = function($dictMonad) use (&$applyCompose_0, &$dictParallel) {
  $__num = \func_num_args();
  $applyMaybeT_1 = (($GLOBALS['Control_Monad_Maybe_Trans_applyMaybeT'] ?? \PhpursThunks::eval('Control_Monad_Maybe_Trans_applyMaybeT')))($dictMonad);
  $__res = (object)["parallel" => function($v) use (&$dictParallel) {
  $__num = \func_num_args();
  $__res = (($dictParallel)->parallel)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "sequential" => function($v) use (&$dictParallel) {
  $__num = \func_num_args();
  $__res = (($dictParallel)->sequential)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply0" => function($dollar__unused_0) use (&$applyMaybeT_1) {
  $__num = \func_num_args();
  $__res = $applyMaybeT_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply1" => function($dollar__unused_0) use (&$applyCompose_0) {
  $__num = \func_num_args();
  $__res = $applyCompose_0;
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
\PhpursThunks::$thunks['Control_Parallel_Class_monadParExceptT'] = function() { $v = function($dictParallel) {
  $__num = \func_num_args();
  $applyCompose_0 = ((($GLOBALS['Data_Functor_Compose_applyCompose'] ?? \PhpursThunks::eval('Data_Functor_Compose_applyCompose')))((($dictParallel)->Apply1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')))))(($GLOBALS['Data_Either_applyEither'] ?? \PhpursThunks::eval('Data_Either_applyEither')));
  $__res = function($dictMonad) use (&$applyCompose_0, &$dictParallel) {
  $__num = \func_num_args();
  $applyExceptT_1 = (($GLOBALS['Control_Monad_Except_Trans_applyExceptT'] ?? \PhpursThunks::eval('Control_Monad_Except_Trans_applyExceptT')))($dictMonad);
  $__res = (object)["parallel" => function($v) use (&$dictParallel) {
  $__num = \func_num_args();
  $__res = (($dictParallel)->parallel)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "sequential" => function($v) use (&$dictParallel) {
  $__num = \func_num_args();
  $__res = (($dictParallel)->sequential)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply0" => function($dollar__unused_0) use (&$applyExceptT_1) {
  $__num = \func_num_args();
  $__res = $applyExceptT_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply1" => function($dollar__unused_0) use (&$applyCompose_0) {
  $__num = \func_num_args();
  $__res = $applyCompose_0;
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
\PhpursThunks::$thunks['Control_Parallel_Class_monadParCostar'] = function() { $v = function($dictParallel) {
  $__num = \func_num_args();
  $sequential1_0 = ($dictParallel)->sequential;
  $parallel1_1 = ($dictParallel)->parallel;
  $__res = (object)["parallel" => function($v) use (&$sequential1_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($v))($sequential1_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "sequential" => function($v) use (&$parallel1_1) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($v))($parallel1_1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Functor_Costar_applyCostar'] ?? \PhpursThunks::eval('Data_Functor_Costar_applyCostar'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Functor_Costar_applyCostar'] ?? \PhpursThunks::eval('Data_Functor_Costar_applyCostar'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Parallel_Class_monadParParCont'] = function() { $v = function($dictMonadEffect) {
  $__num = \func_num_args();
  $functorContT1_0 = (object)["map" => (function() {
  $__fn = function($f, $v = null, $k = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ($v)(function($a) use (&$f, &$k) {
  $__num = \func_num_args();
  $__res = ($k)(($f)($a));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  $applyContT_1 = (object)["apply" => (function() {
  $__fn = function($v, $v1 = null, $k = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ($v)(function($g) use (&$k, &$v1) {
  $__num = \func_num_args();
  $__res = ($v1)(function($a) use (&$g, &$k) {
  $__num = \func_num_args();
  $__res = ($k)(($g)($a));
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) use (&$functorContT1_0) {
  $__num = \func_num_args();
  $__res = $functorContT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["parallel" => ($GLOBALS['Control_Parallel_Class_ParCont'] ?? \PhpursThunks::eval('Control_Parallel_Class_ParCont')), "sequential" => function($v) {
  $__num = \func_num_args();
  $__res = $v;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply0" => function($dollar__unused_0) use (&$applyContT_1) {
  $__num = \func_num_args();
  $__res = $applyContT_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply1" => function($dollar__unused_0) use (&$dictMonadEffect) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Parallel_Class_applyParCont'] ?? \PhpursThunks::eval('Control_Parallel_Class_applyParCont')))($dictMonadEffect);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Parallel_Class_functorParCont'] = function() { $v = function($dictMonadEffect) {
  $__num = \func_num_args();
  $__res = (object)["map" => function($f) use (&$dictMonadEffect) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Control_Parallel_Class_monadParParCont'] ?? \PhpursThunks::eval('Control_Parallel_Class_monadParParCont')))($dictMonadEffect))->parallel))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((function() use (&$f) {
  $__fn = function($v, $k = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($v)(function($a) use (&$f, &$k) {
  $__num = \func_num_args();
  $__res = ($k)(($f)($a));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(((($GLOBALS['Control_Parallel_Class_monadParParCont'] ?? \PhpursThunks::eval('Control_Parallel_Class_monadParParCont')))($dictMonadEffect))->sequential));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Parallel_Class_applyParCont'] = function() { $v = function($dictMonadEffect) {
  $__num = \func_num_args();
  $Bind1_0 = (((($dictMonadEffect)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (object)["apply" => (function() use (&$Bind1_0, &$dictMonadEffect) {
  $__fn = function($v, $v1 = null, $k = null) use (&$Bind1_0, &$dictMonadEffect, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($Bind1_0)->bind)((($dictMonadEffect)->liftEffect)((($GLOBALS['Effect_Ref__new'] ?? \PhpursThunks::eval('Effect_Ref__new')))(new Phpurs_Data0("Nothing")))))(function($ra) use (&$Bind1_0, &$dictMonadEffect, &$k, &$v, &$v1) {
  $__num = \func_num_args();
  $__res = ((($Bind1_0)->bind)((($dictMonadEffect)->liftEffect)((($GLOBALS['Effect_Ref__new'] ?? \PhpursThunks::eval('Effect_Ref__new')))(new Phpurs_Data0("Nothing")))))(function($rb) use (&$Bind1_0, &$dictMonadEffect, &$k, &$ra, &$v, &$v1) {
  $__num = \func_num_args();
  $__res = ((($Bind1_0)->bind)(($v)(function($a) use (&$Bind1_0, &$dictMonadEffect, &$k, &$ra, &$rb) {
  $__num = \func_num_args();
  $__res = ((($Bind1_0)->bind)((($dictMonadEffect)->liftEffect)((($GLOBALS['Effect_Ref_read'] ?? \PhpursThunks::eval('Effect_Ref_read')))($rb))))(function($mb) use (&$a, &$dictMonadEffect, &$k, &$ra) {
  $__num = \func_num_args();
  if ((is_object($mb) && (($mb)->tag === "Nothing"))) {
$__t1 = (($dictMonadEffect)->liftEffect)(((($GLOBALS['Effect_Ref_write'] ?? \PhpursThunks::eval('Effect_Ref_write')))(new Phpurs_Data1("Just", $a)))($ra));
} else {
if ((is_object($mb) && (($mb)->tag === "Just"))) {
$__t1 = ($k)(($a)(($mb)->value0));
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
})))(function($dollar__unused_0) use (&$Bind1_0, &$dictMonadEffect, &$k, &$ra, &$rb, &$v1) {
  $__num = \func_num_args();
  $__res = ($v1)(function($b) use (&$Bind1_0, &$dictMonadEffect, &$k, &$ra, &$rb) {
  $__num = \func_num_args();
  $__res = ((($Bind1_0)->bind)((($dictMonadEffect)->liftEffect)((($GLOBALS['Effect_Ref_read'] ?? \PhpursThunks::eval('Effect_Ref_read')))($ra))))(function($ma) use (&$b, &$dictMonadEffect, &$k, &$rb) {
  $__num = \func_num_args();
  if ((is_object($ma) && (($ma)->tag === "Nothing"))) {
$__t2 = (($dictMonadEffect)->liftEffect)(((($GLOBALS['Effect_Ref_write'] ?? \PhpursThunks::eval('Effect_Ref_write')))(new Phpurs_Data1("Just", $b)))($rb));
} else {
if ((is_object($ma) && (($ma)->tag === "Just"))) {
$__t2 = ($k)((($ma)->value0)($b));
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
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
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
});
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) use (&$dictMonadEffect) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Parallel_Class_functorParCont'] ?? \PhpursThunks::eval('Control_Parallel_Class_functorParCont')))($dictMonadEffect);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Parallel_Class_applicativeParCont'] = function() { $v = function($dictMonadEffect) {
  $__num = \func_num_args();
  $applyParCont1_0 = (($GLOBALS['Control_Parallel_Class_applyParCont'] ?? \PhpursThunks::eval('Control_Parallel_Class_applyParCont')))($dictMonadEffect);
  $__res = (object)["pure" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Control_Parallel_Class_monadParParCont'] ?? \PhpursThunks::eval('Control_Parallel_Class_monadParParCont')))($dictMonadEffect))->parallel))((function() {
  $__fn = function($a, $k = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($k)($a);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), "Apply0" => function($dollar__unused_0) use (&$applyParCont1_0) {
  $__num = \func_num_args();
  $__res = $applyParCont1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Parallel_Class_altParCont'] = function() { $v = function($dictMonadEffect) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadEffect)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $Bind1_1 = (($Monad0_0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_2 = (($Monad0_0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $functorParCont1_3 = (($GLOBALS['Control_Parallel_Class_functorParCont'] ?? \PhpursThunks::eval('Control_Parallel_Class_functorParCont')))($dictMonadEffect);
  $__res = (object)["alt" => (function() use (&$Bind1_1, &$__local_var_2, &$dictMonadEffect) {
  $__fn = function($v, $v1 = null, $k = null) use (&$Bind1_1, &$__local_var_2, &$dictMonadEffect, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($Bind1_1)->bind)((($dictMonadEffect)->liftEffect)((($GLOBALS['Effect_Ref__new'] ?? \PhpursThunks::eval('Effect_Ref__new')))(false))))(function($done) use (&$Bind1_1, &$__local_var_2, &$dictMonadEffect, &$k, &$v, &$v1) {
  $__num = \func_num_args();
  $__res = ((($Bind1_1)->bind)(($v)(function($a) use (&$Bind1_1, &$__local_var_2, &$dictMonadEffect, &$done, &$k) {
  $__num = \func_num_args();
  $__res = ((($Bind1_1)->bind)((($dictMonadEffect)->liftEffect)((($GLOBALS['Effect_Ref_read'] ?? \PhpursThunks::eval('Effect_Ref_read')))($done))))(function($b) use (&$Bind1_1, &$__local_var_2, &$a, &$dictMonadEffect, &$done, &$k) {
  $__num = \func_num_args();
  if ($b) {
$__t4 = (($__local_var_2)->pure)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
} else {
$__t4 = ((($Bind1_1)->bind)((($dictMonadEffect)->liftEffect)(((($GLOBALS['Effect_Ref_write'] ?? \PhpursThunks::eval('Effect_Ref_write')))(true))($done))))(function($dollar__unused_0) use (&$a, &$k) {
  $__num = \func_num_args();
  $__res = ($k)($a);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))(function($dollar__unused_0) use (&$Bind1_1, &$__local_var_2, &$dictMonadEffect, &$done, &$k, &$v1) {
  $__num = \func_num_args();
  $__res = ($v1)(function($a) use (&$Bind1_1, &$__local_var_2, &$dictMonadEffect, &$done, &$k) {
  $__num = \func_num_args();
  $__res = ((($Bind1_1)->bind)((($dictMonadEffect)->liftEffect)((($GLOBALS['Effect_Ref_read'] ?? \PhpursThunks::eval('Effect_Ref_read')))($done))))(function($b) use (&$Bind1_1, &$__local_var_2, &$a, &$dictMonadEffect, &$done, &$k) {
  $__num = \func_num_args();
  if ($b) {
$__t5 = (($__local_var_2)->pure)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
} else {
$__t5 = ((($Bind1_1)->bind)((($dictMonadEffect)->liftEffect)(((($GLOBALS['Effect_Ref_write'] ?? \PhpursThunks::eval('Effect_Ref_write')))(true))($done))))(function($dollar__unused_0) use (&$a, &$k) {
  $__num = \func_num_args();
  $__res = ($k)($a);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
};
  $__res = $__t5;
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
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) use (&$functorParCont1_3) {
  $__num = \func_num_args();
  $__res = $functorParCont1_3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Parallel_Class_plusParCont'] = function() { $v = function($dictMonadEffect) {
  $__num = \func_num_args();
  $altParCont1_0 = (($GLOBALS['Control_Parallel_Class_altParCont'] ?? \PhpursThunks::eval('Control_Parallel_Class_altParCont')))($dictMonadEffect);
  $__res = (object)["empty" => function($v) use (&$dictMonadEffect) {
  $__num = \func_num_args();
  $__res = (((((($dictMonadEffect)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Alt0" => function($dollar__unused_0) use (&$altParCont1_0) {
  $__num = \func_num_args();
  $__res = $altParCont1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Parallel_Class_alternativeParCont'] = function() { $v = function($dictMonadEffect) {
  $__num = \func_num_args();
  $applicativeParCont1_0 = (($GLOBALS['Control_Parallel_Class_applicativeParCont'] ?? \PhpursThunks::eval('Control_Parallel_Class_applicativeParCont')))($dictMonadEffect);
  $plusParCont1_1 = (($GLOBALS['Control_Parallel_Class_plusParCont'] ?? \PhpursThunks::eval('Control_Parallel_Class_plusParCont')))($dictMonadEffect);
  $__res = (object)["Applicative0" => function($dollar__unused_0) use (&$applicativeParCont1_0) {
  $__num = \func_num_args();
  $__res = $applicativeParCont1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Plus1" => function($dollar__unused_0) use (&$plusParCont1_1) {
  $__num = \func_num_args();
  $__res = $plusParCont1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };



















