<?php

namespace Control\Comonad\Env\Class;

// ALL IMPORTS: Control.Comonad, Control.Comonad.Env.Class, Control.Comonad.Env.Trans, Control.Comonad.Store, Control.Comonad.Store.Trans, Control.Comonad.Traced.Trans, Control.Comonad.Trans.Class, Control.Semigroupoid, Data.Tuple, Prelude, Prim
// TO REQUIRE: Control.Comonad, Control.Comonad.Env.Class, Control.Comonad.Env.Trans, Control.Comonad.Store, Control.Comonad.Store.Trans, Control.Comonad.Traced.Trans, Control.Comonad.Trans.Class, Control.Semigroupoid, Data.Tuple, Prelude
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Class/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Store/index.php';
require_once __DIR__ . '/../Control.Comonad.Store.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Traced.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
\PhpursThunks::$thunks['Control_Comonad_Env_Class_local'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->local;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Comonad_Env_Class_comonadAskTuple'] = function() { $v = (object)["ask" => ($GLOBALS['Data_Tuple_fst'] ?? \PhpursThunks::eval('Data_Tuple_fst')), "Comonad0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Tuple_comonadTuple'] ?? \PhpursThunks::eval('Data_Tuple_comonadTuple'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Control_Comonad_Env_Class_comonadEnvTuple'] = function() { $v = (object)["local" => (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ($f)(($v)->value0), ($v)->value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ComonadAsk0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Control_Comonad_Env_Class_comonadAskTuple'] ?? \PhpursThunks::eval('Control_Comonad_Env_Class_comonadAskTuple'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Control_Comonad_Env_Class_comonadAskEnvT'] = function() { $v = function($dictComonad) {
  $__num = \func_num_args();
  $comonadEnvT_0 = (($GLOBALS['Control_Comonad_Env_Trans_comonadEnvT'] ?? \PhpursThunks::eval('Control_Comonad_Env_Trans_comonadEnvT')))($dictComonad);
  $__res = (object)["ask" => function($v) {
  $__num = \func_num_args();
  $__res = ($v)->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Comonad0" => function($dollar__unused_0) use (&$comonadEnvT_0) {
  $__num = \func_num_args();
  $__res = $comonadEnvT_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Comonad_Env_Class_comonadEnvEnvT'] = function() { $v = function($dictComonad) {
  $__num = \func_num_args();
  $comonadEnvT_0 = (($GLOBALS['Control_Comonad_Env_Trans_comonadEnvT'] ?? \PhpursThunks::eval('Control_Comonad_Env_Trans_comonadEnvT')))($dictComonad);
  $__res = (object)["local" => (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ($f)(($v)->value0), ($v)->value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ComonadAsk0" => function($dollar__unused_0) use (&$comonadEnvT_0) {
  $__num = \func_num_args();
  $__res = (object)["ask" => function($v) {
  $__num = \func_num_args();
  $__res = ($v)->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Comonad0" => function($dollar__unused_0) use (&$comonadEnvT_0) {
  $__num = \func_num_args();
  $__res = $comonadEnvT_0;
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
}; return $v; };
\PhpursThunks::$thunks['Control_Comonad_Env_Class_ask'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->ask;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Comonad_Env_Class_asks'] = function() { $v = (function() {
  $__fn = function($dictComonadAsk, $f = null, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ($f)((($dictComonadAsk)->ask)($x));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Comonad_Env_Class_comonadAskStoreT'] = function() { $v = function($dictComonadAsk) {
  $__num = \func_num_args();
  $Comonad0_0 = (($dictComonadAsk)->Comonad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $comonadStoreT_1 = (($GLOBALS['Control_Comonad_Store_Trans_comonadStoreT'] ?? \PhpursThunks::eval('Control_Comonad_Store_Trans_comonadStoreT')))($Comonad0_0);
  $__res = (object)["ask" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($dictComonadAsk)->ask))(((($GLOBALS['Control_Comonad_Store_Trans_comonadTransStoreT'] ?? \PhpursThunks::eval('Control_Comonad_Store_Trans_comonadTransStoreT')))->lower)($Comonad0_0)), "Comonad0" => function($dollar__unused_0) use (&$comonadStoreT_1) {
  $__num = \func_num_args();
  $__res = $comonadStoreT_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Comonad_Env_Class_comonadEnvStoreT'] = function() { $v = function($dictComonadEnv) {
  $__num = \func_num_args();
  $comonadAskStoreT1_0 = (($GLOBALS['Control_Comonad_Env_Class_comonadAskStoreT'] ?? \PhpursThunks::eval('Control_Comonad_Env_Class_comonadAskStoreT')))((($dictComonadEnv)->ComonadAsk0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["local" => (function() use (&$dictComonadEnv) {
  $__fn = function($f, $v = null) use (&$dictComonadEnv, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ((($dictComonadEnv)->local)($f))(($v)->value0), ($v)->value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ComonadAsk0" => function($dollar__unused_0) use (&$comonadAskStoreT1_0) {
  $__num = \func_num_args();
  $__res = $comonadAskStoreT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Comonad_Env_Class_comonadAskTracedT'] = function() { $v = function($dictComonadAsk) {
  $__num = \func_num_args();
  $ask1_0 = ($dictComonadAsk)->ask;
  $Comonad0_1 = (($dictComonadAsk)->Comonad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $comonadTracedT_2 = (($GLOBALS['Control_Comonad_Traced_Trans_comonadTracedT'] ?? \PhpursThunks::eval('Control_Comonad_Traced_Trans_comonadTracedT')))($Comonad0_1);
  $__res = function($dictMonoid) use (&$Comonad0_1, &$ask1_0, &$comonadTracedT_2) {
  $__num = \func_num_args();
  $comonadTracedT1_3 = ($comonadTracedT_2)($dictMonoid);
  $__res = (object)["ask" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($ask1_0))((((($GLOBALS['Control_Comonad_Traced_Trans_comonadTransTracedT'] ?? \PhpursThunks::eval('Control_Comonad_Traced_Trans_comonadTransTracedT')))($dictMonoid))->lower)($Comonad0_1)), "Comonad0" => function($dollar__unused_0) use (&$comonadTracedT1_3) {
  $__num = \func_num_args();
  $__res = $comonadTracedT1_3;
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
\PhpursThunks::$thunks['Control_Comonad_Env_Class_comonadEnvTracedT'] = function() { $v = function($dictComonadEnv) {
  $__num = \func_num_args();
  $comonadAskTracedT1_0 = (($GLOBALS['Control_Comonad_Env_Class_comonadAskTracedT'] ?? \PhpursThunks::eval('Control_Comonad_Env_Class_comonadAskTracedT')))((($dictComonadEnv)->ComonadAsk0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictMonoid) use (&$comonadAskTracedT1_0, &$dictComonadEnv) {
  $__num = \func_num_args();
  $comonadAskTracedT2_1 = ($comonadAskTracedT1_0)($dictMonoid);
  $__res = (object)["local" => (function() use (&$dictComonadEnv) {
  $__fn = function($f, $v = null) use (&$dictComonadEnv, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictComonadEnv)->local)($f))($v);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ComonadAsk0" => function($dollar__unused_0) use (&$comonadAskTracedT2_1) {
  $__num = \func_num_args();
  $__res = $comonadAskTracedT2_1;
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













