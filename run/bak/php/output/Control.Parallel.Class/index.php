<?php

namespace Control\Parallel\Class;

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
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_eval_thunk')) {
  function phpurs_eval_thunk($id) {
    static $cache = [];
    if (array_key_exists($id, $cache)) return $cache[$id];
    switch ($id) {
      case 'Control_Parallel_Class_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Control_Parallel_Class_composeFlipped': $v = \Control\Semigroupoid\Control_Semigroupoid_composeFlipped(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Control_Parallel_Class_discard': $v = (($GLOBALS['Control_Bind_discardUnit'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_discardUnit')))->discard; break;
      case 'Control_Parallel_Class_newtypeParCont': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };





// Control_Parallel_Class_Parallel$Dict
function Control_Parallel_Class_Parallel__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_Parallel__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_Parallel__dollar__Dict'] = __NAMESPACE__ . '\\Control_Parallel_Class_Parallel__dollar__Dict';

// Control_Parallel_Class_ParCont
function Control_Parallel_Class_ParCont($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_ParCont';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_ParCont'] = __NAMESPACE__ . '\\Control_Parallel_Class_ParCont';

// Control_Parallel_Class_sequential
function Control_Parallel_Class_sequential($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_sequential';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->sequential;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_sequential'] = __NAMESPACE__ . '\\Control_Parallel_Class_sequential';

// Control_Parallel_Class_parallel
function Control_Parallel_Class_parallel($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_parallel';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->parallel;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_parallel'] = __NAMESPACE__ . '\\Control_Parallel_Class_parallel';


// Control_Parallel_Class_monadParWriterT
function Control_Parallel_Class_monadParWriterT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_monadParWriterT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Writer_Trans_applyWriterT = ($GLOBALS['Control_Monad_Writer_Trans_applyWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_applyWriterT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Writer_Trans_mapWriterT = ($GLOBALS['Control_Monad_Writer_Trans_mapWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_mapWriterT'));
  $applyWriterT = ($__global_Control_Monad_Writer_Trans_applyWriterT)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = function($dictParallel) use ($applyWriterT, $__global_Prim_undefined, $__global_Control_Monad_Writer_Trans_mapWriterT) {
  $__num = func_num_args();
  $applyWriterT1 = ($applyWriterT)((($dictParallel)->Apply0)($__global_Prim_undefined));
  $applyWriterT2 = ($applyWriterT)((($dictParallel)->Apply1)($__global_Prim_undefined));
  $__res = (object)["parallel" => ($__global_Control_Monad_Writer_Trans_mapWriterT)(($dictParallel)->parallel), "sequential" => ($__global_Control_Monad_Writer_Trans_mapWriterT)(($dictParallel)->sequential), "Apply0" => function($__dollar____unused) use ($applyWriterT1) {
  $__num = func_num_args();
  $__res = $applyWriterT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Apply1" => function($__dollar____unused) use ($applyWriterT2) {
  $__num = func_num_args();
  $__res = $applyWriterT2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_monadParWriterT'] = __NAMESPACE__ . '\\Control_Parallel_Class_monadParWriterT';

// Control_Parallel_Class_monadParStar
function Control_Parallel_Class_monadParStar($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_monadParStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Profunctor_Star_applyStar = ($GLOBALS['Data_Profunctor_Star_applyStar'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_applyStar'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Parallel_Class_compose = ($GLOBALS['Control_Parallel_Class_compose'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_compose'));
  $parallel1 = ($dictParallel)->parallel;
  $sequential1 = ($dictParallel)->sequential;
  $applyStar = ($__global_Data_Profunctor_Star_applyStar)((($dictParallel)->Apply0)($__global_Prim_undefined));
  $applyStar1 = ($__global_Data_Profunctor_Star_applyStar)((($dictParallel)->Apply1)($__global_Prim_undefined));
  $__res = (object)["parallel" => function($v) use ($__global_Control_Parallel_Class_compose, $parallel1) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = ($__global_Control_Parallel_Class_compose)($parallel1, $f);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "sequential" => function($v) use ($__global_Control_Parallel_Class_compose, $sequential1) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = ($__global_Control_Parallel_Class_compose)($sequential1, $f);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Apply0" => function($__dollar____unused) use ($applyStar) {
  $__num = func_num_args();
  $__res = $applyStar;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Apply1" => function($__dollar____unused) use ($applyStar1) {
  $__num = func_num_args();
  $__res = $applyStar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_monadParStar'] = __NAMESPACE__ . '\\Control_Parallel_Class_monadParStar';

// Control_Parallel_Class_monadParReaderT
function Control_Parallel_Class_monadParReaderT($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_monadParReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Reader_Trans_applyReaderT = ($GLOBALS['Control_Monad_Reader_Trans_applyReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_applyReaderT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Reader_Trans_mapReaderT = ($GLOBALS['Control_Monad_Reader_Trans_mapReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_mapReaderT'));
  $applyReaderT = ($__global_Control_Monad_Reader_Trans_applyReaderT)((($dictParallel)->Apply0)($__global_Prim_undefined));
  $applyReaderT1 = ($__global_Control_Monad_Reader_Trans_applyReaderT)((($dictParallel)->Apply1)($__global_Prim_undefined));
  $__res = (object)["parallel" => ($__global_Control_Monad_Reader_Trans_mapReaderT)(($dictParallel)->parallel), "sequential" => ($__global_Control_Monad_Reader_Trans_mapReaderT)(($dictParallel)->sequential), "Apply0" => function($__dollar____unused) use ($applyReaderT) {
  $__num = func_num_args();
  $__res = $applyReaderT;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Apply1" => function($__dollar____unused) use ($applyReaderT1) {
  $__num = func_num_args();
  $__res = $applyReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_monadParReaderT'] = __NAMESPACE__ . '\\Control_Parallel_Class_monadParReaderT';

// Control_Parallel_Class_monadParMaybeT
function Control_Parallel_Class_monadParMaybeT($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_monadParMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Compose_applyCompose = ($GLOBALS['Data_Functor_Compose_applyCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_applyCompose'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Maybe_applyMaybe = ($GLOBALS['Data_Maybe_applyMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applyMaybe'));
  $__global_Control_Monad_Maybe_Trans_applyMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_applyMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_applyMaybeT'));
  $parallel1 = ($dictParallel)->parallel;
  $sequential1 = ($dictParallel)->sequential;
  $applyCompose = ($__global_Data_Functor_Compose_applyCompose)((($dictParallel)->Apply1)($__global_Prim_undefined), $__global_Data_Maybe_applyMaybe);
  $__res = function($dictMonad) use ($__global_Control_Monad_Maybe_Trans_applyMaybeT, $parallel1, $sequential1, $applyCompose) {
  $__num = func_num_args();
  $applyMaybeT = ($__global_Control_Monad_Maybe_Trans_applyMaybeT)($dictMonad);
  $__res = (object)["parallel" => function($v) use ($parallel1) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$ma = $__case_0;
$__res = ($parallel1)($ma);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "sequential" => function($v) use ($sequential1) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$fa = $__case_0;
$__res = ($sequential1)($fa);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Apply0" => function($__dollar____unused) use ($applyMaybeT) {
  $__num = func_num_args();
  $__res = $applyMaybeT;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Apply1" => function($__dollar____unused) use ($applyCompose) {
  $__num = func_num_args();
  $__res = $applyCompose;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_monadParMaybeT'] = __NAMESPACE__ . '\\Control_Parallel_Class_monadParMaybeT';

// Control_Parallel_Class_monadParExceptT
function Control_Parallel_Class_monadParExceptT($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_monadParExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Compose_applyCompose = ($GLOBALS['Data_Functor_Compose_applyCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_applyCompose'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Either_applyEither = ($GLOBALS['Data_Either_applyEither'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_applyEither'));
  $__global_Control_Monad_Except_Trans_applyExceptT = ($GLOBALS['Control_Monad_Except_Trans_applyExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_applyExceptT'));
  $parallel1 = ($dictParallel)->parallel;
  $sequential1 = ($dictParallel)->sequential;
  $applyCompose = ($__global_Data_Functor_Compose_applyCompose)((($dictParallel)->Apply1)($__global_Prim_undefined), $__global_Data_Either_applyEither);
  $__res = function($dictMonad) use ($__global_Control_Monad_Except_Trans_applyExceptT, $parallel1, $sequential1, $applyCompose) {
  $__num = func_num_args();
  $applyExceptT = ($__global_Control_Monad_Except_Trans_applyExceptT)($dictMonad);
  $__res = (object)["parallel" => function($v) use ($parallel1) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$ma = $__case_0;
$__res = ($parallel1)($ma);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "sequential" => function($v) use ($sequential1) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$fa = $__case_0;
$__res = ($sequential1)($fa);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Apply0" => function($__dollar____unused) use ($applyExceptT) {
  $__num = func_num_args();
  $__res = $applyExceptT;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Apply1" => function($__dollar____unused) use ($applyCompose) {
  $__num = func_num_args();
  $__res = $applyCompose;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_monadParExceptT'] = __NAMESPACE__ . '\\Control_Parallel_Class_monadParExceptT';

// Control_Parallel_Class_monadParCostar
function Control_Parallel_Class_monadParCostar($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_monadParCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Parallel_Class_composeFlipped = ($GLOBALS['Control_Parallel_Class_composeFlipped'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_composeFlipped'));
  $__global_Data_Functor_Costar_applyCostar = ($GLOBALS['Data_Functor_Costar_applyCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_applyCostar'));
  $sequential1 = ($dictParallel)->sequential;
  $parallel1 = ($dictParallel)->parallel;
  $__res = (object)["parallel" => function($v) use ($__global_Control_Parallel_Class_composeFlipped, $sequential1) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = ($__global_Control_Parallel_Class_composeFlipped)($sequential1, $f);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "sequential" => function($v) use ($__global_Control_Parallel_Class_composeFlipped, $parallel1) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = ($__global_Control_Parallel_Class_composeFlipped)($parallel1, $f);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Apply0" => function($__dollar____unused) use ($__global_Data_Functor_Costar_applyCostar) {
  $__num = func_num_args();
  $__res = $__global_Data_Functor_Costar_applyCostar;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Apply1" => function($__dollar____unused) use ($__global_Data_Functor_Costar_applyCostar) {
  $__num = func_num_args();
  $__res = $__global_Data_Functor_Costar_applyCostar;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_monadParCostar'] = __NAMESPACE__ . '\\Control_Parallel_Class_monadParCostar';

// Control_Parallel_Class_monadParParCont
function Control_Parallel_Class_monadParParCont($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_monadParParCont';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Cont_Trans_applyContT = ($GLOBALS['Control_Monad_Cont_Trans_applyContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_applyContT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Parallel_Class_ParCont = ($GLOBALS['Control_Parallel_Class_ParCont'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_ParCont'));
  $__global_Control_Parallel_Class_applyParCont = ($GLOBALS['Control_Parallel_Class_applyParCont'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_applyParCont'));
  while (true) {
$applyContT = ($__global_Control_Monad_Cont_Trans_applyContT)((((((($dictMonadEffect)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined));
$__res = (object)["parallel" => $__global_Control_Parallel_Class_ParCont, "sequential" => function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$ma = $__case_0;
$__res = $ma;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Apply0" => function($__dollar____unused) use ($applyContT) {
  $__num = func_num_args();
  $__res = $applyContT;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Apply1" => function($__dollar____unused) use ($__global_Control_Parallel_Class_applyParCont, $dictMonadEffect) {
  $__num = func_num_args();
  $__res = ($__global_Control_Parallel_Class_applyParCont)($dictMonadEffect);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_monadParParCont'] = __NAMESPACE__ . '\\Control_Parallel_Class_monadParParCont';

// Control_Parallel_Class_functorParCont
function Control_Parallel_Class_functorParCont($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_functorParCont';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Cont_Trans_functorContT = ($GLOBALS['Control_Monad_Cont_Trans_functorContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_functorContT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Parallel_Class_compose = ($GLOBALS['Control_Parallel_Class_compose'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_compose'));
  $__global_Control_Parallel_Class_monadParParCont = ($GLOBALS['Control_Parallel_Class_monadParParCont'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_monadParParCont'));
  while (true) {
$map = (($__global_Control_Monad_Cont_Trans_functorContT)((((((((($dictMonadEffect)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined)))->map;
$__res = (object)["map" => function($f) use ($__global_Control_Parallel_Class_compose, $__global_Control_Parallel_Class_monadParParCont, $dictMonadEffect, $map) {
  $__num = func_num_args();
  $__res = ($__global_Control_Parallel_Class_compose)((($__global_Control_Parallel_Class_monadParParCont)($dictMonadEffect))->parallel, ($__global_Control_Parallel_Class_compose)(($map)($f), (($__global_Control_Parallel_Class_monadParParCont)($dictMonadEffect))->sequential));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_functorParCont'] = __NAMESPACE__ . '\\Control_Parallel_Class_functorParCont';

// Control_Parallel_Class_applyParCont
function Control_Parallel_Class_applyParCont($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_applyParCont';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Parallel_Class_discard = ($GLOBALS['Control_Parallel_Class_discard'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_discard'));
  $__global_Effect_Ref__new = ($GLOBALS['Effect_Ref__new'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref__new'));
  $__global_Control_Monad_Cont_Trans_runContT = ($GLOBALS['Control_Monad_Cont_Trans_runContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_runContT'));
  $__global_Effect_Ref_read = ($GLOBALS['Effect_Ref_read'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_read'));
  $__global_Effect_Ref_write = ($GLOBALS['Effect_Ref_write'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_write'));
  $__global_Control_Parallel_Class_functorParCont = ($GLOBALS['Control_Parallel_Class_functorParCont'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_functorParCont'));
  while (true) {
$Bind1 = (((($dictMonadEffect)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined);
$bind = ($Bind1)->bind;
$liftEffect = ($dictMonadEffect)->liftEffect;
$discard1 = ($__global_Control_Parallel_Class_discard)($Bind1);
$__res = (object)["apply" => (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $__global_Effect_Ref_write, &$__fn) {
  $__fn = function($v, $v1 = null) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $__global_Effect_Ref_write, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$ca = $__case_0;
$cb = $__case_1;
$__res = function($k) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $cb) {
  $__num = func_num_args();
  $__res = ($bind)(($liftEffect)(($__global_Effect_Ref__new)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")))), function($ra) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $k, $cb) {
  $__num = func_num_args();
  $__res = ($bind)(($liftEffect)(($__global_Effect_Ref__new)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")))), function($rb) use ($discard1, $__global_Control_Monad_Cont_Trans_runContT, $ca, $bind, $liftEffect, $__global_Effect_Ref_read, $__global_Effect_Ref_write, $ra, $k, $cb) {
  $__num = func_num_args();
  $__res = ($discard1)(($__global_Control_Monad_Cont_Trans_runContT)($ca, function($a) use ($bind, $liftEffect, $__global_Effect_Ref_read, $rb, $__global_Effect_Ref_write, $ra, $k) {
  $__num = func_num_args();
  $__res = ($bind)(($liftEffect)(($__global_Effect_Ref_read)($rb)), function($mb) use ($liftEffect, $__global_Effect_Ref_write, $a, $ra, $k) {
  $__num = func_num_args();
  $__case_0 = $mb;
  switch (($__case_0)->tag) {
case "Nothing":
$__res = ($liftEffect)(($__global_Effect_Ref_write)(new Phpurs_Data1("Just", $a), $ra));
goto __end;;
break;
case "Just":
$b = ($__case_0)->v0;
$__res = ($k)(($a)($b));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), function($__dollar____unused) use ($__global_Control_Monad_Cont_Trans_runContT, $cb, $bind, $liftEffect, $__global_Effect_Ref_read, $ra, $__global_Effect_Ref_write, $rb, $k) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_Cont_Trans_runContT)($cb, function($b) use ($bind, $liftEffect, $__global_Effect_Ref_read, $ra, $__global_Effect_Ref_write, $rb, $k) {
  $__num = func_num_args();
  $__res = ($bind)(($liftEffect)(($__global_Effect_Ref_read)($ra)), function($ma) use ($liftEffect, $__global_Effect_Ref_write, $b, $rb, $k) {
  $__num = func_num_args();
  $__case_0 = $ma;
  switch (($__case_0)->tag) {
case "Nothing":
$__res = ($liftEffect)(($__global_Effect_Ref_write)(new Phpurs_Data1("Just", $b), $rb));
goto __end;;
break;
case "Just":
$a = ($__case_0)->v0;
$__res = ($k)(($a)($b));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) use ($__global_Control_Parallel_Class_functorParCont, $dictMonadEffect) {
  $__num = func_num_args();
  $__res = ($__global_Control_Parallel_Class_functorParCont)($dictMonadEffect);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_applyParCont'] = __NAMESPACE__ . '\\Control_Parallel_Class_applyParCont';

// Control_Parallel_Class_applicativeParCont
function Control_Parallel_Class_applicativeParCont($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_applicativeParCont';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Parallel_Class_applyParCont = ($GLOBALS['Control_Parallel_Class_applyParCont'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_applyParCont'));
  $__global_Control_Parallel_Class_compose = ($GLOBALS['Control_Parallel_Class_compose'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_compose'));
  $__global_Control_Parallel_Class_monadParParCont = ($GLOBALS['Control_Parallel_Class_monadParParCont'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_monadParParCont'));
  $__global_Control_Monad_Cont_Trans_applicativeContT = ($GLOBALS['Control_Monad_Cont_Trans_applicativeContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_applicativeContT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $applyParCont1 = ($__global_Control_Parallel_Class_applyParCont)($dictMonadEffect);
  $__res = (object)["pure" => ($__global_Control_Parallel_Class_compose)((($__global_Control_Parallel_Class_monadParParCont)($dictMonadEffect))->parallel, (($__global_Control_Monad_Cont_Trans_applicativeContT)((((($dictMonadEffect)->Monad0)($__global_Prim_undefined))->Applicative0)($__global_Prim_undefined)))->pure), "Apply0" => function($__dollar____unused) use ($applyParCont1) {
  $__num = func_num_args();
  $__res = $applyParCont1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_applicativeParCont'] = __NAMESPACE__ . '\\Control_Parallel_Class_applicativeParCont';

// Control_Parallel_Class_altParCont
function Control_Parallel_Class_altParCont($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_altParCont';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Parallel_Class_discard = ($GLOBALS['Control_Parallel_Class_discard'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_discard'));
  $__global_Control_Parallel_Class_functorParCont = ($GLOBALS['Control_Parallel_Class_functorParCont'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_functorParCont'));
  $__global_Effect_Ref__new = ($GLOBALS['Effect_Ref__new'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref__new'));
  $__global_Control_Monad_Cont_Trans_runContT = ($GLOBALS['Control_Monad_Cont_Trans_runContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_runContT'));
  $__global_Effect_Ref_read = ($GLOBALS['Effect_Ref_read'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_read'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__global_Effect_Ref_write = ($GLOBALS['Effect_Ref_write'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_write'));
  $Monad0 = (($dictMonadEffect)->Monad0)($__global_Prim_undefined);
  $Bind1 = (($Monad0)->Bind1)($__global_Prim_undefined);
  $bind = ($Bind1)->bind;
  $liftEffect = ($dictMonadEffect)->liftEffect;
  $discard1 = ($__global_Control_Parallel_Class_discard)($Bind1);
  $pure = ((($Monad0)->Applicative0)($__global_Prim_undefined))->pure;
  $functorParCont1 = ($__global_Control_Parallel_Class_functorParCont)($dictMonadEffect);
  $__res = (object)["alt" => (function() use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, &$__fn) {
  $__fn = function($v, $v1 = null) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$c1 = $__case_0;
$c2 = $__case_1;
$__res = function($k) use ($bind, $liftEffect, $__global_Effect_Ref__new, $discard1, $__global_Control_Monad_Cont_Trans_runContT, $c1, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, $c2) {
  $__num = func_num_args();
  $__res = ($bind)(($liftEffect)(($__global_Effect_Ref__new)(false)), function($done) use ($discard1, $__global_Control_Monad_Cont_Trans_runContT, $c1, $bind, $liftEffect, $__global_Effect_Ref_read, $pure, $__global_Data_Unit_unit, $__global_Effect_Ref_write, $k, $c2) {
  $__num = func_num_args();
  $__res = ($discard1)(($__global_Control_Monad_Cont_Trans_runContT)($c1, function($a) use ($bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k) {
  $__num = func_num_args();
  $__res = ($bind)(($liftEffect)(($__global_Effect_Ref_read)($done)), function($b) use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a) {
  $__num = func_num_args();
  $__case_0 = $b;
  switch ($__case_0) {
case true:
$__res = ($pure)($__global_Data_Unit_unit);
goto __end;;
break;
default:
$__res = ($discard1)(($liftEffect)(($__global_Effect_Ref_write)(true, $done)), function($__dollar____unused) use ($k, $a) {
  $__num = func_num_args();
  $__res = ($k)($a);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
goto __end;;
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), function($__dollar____unused) use ($__global_Control_Monad_Cont_Trans_runContT, $c2, $bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_Cont_Trans_runContT)($c2, function($a) use ($bind, $liftEffect, $__global_Effect_Ref_read, $done, $pure, $__global_Data_Unit_unit, $discard1, $__global_Effect_Ref_write, $k) {
  $__num = func_num_args();
  $__res = ($bind)(($liftEffect)(($__global_Effect_Ref_read)($done)), function($b) use ($pure, $__global_Data_Unit_unit, $discard1, $liftEffect, $__global_Effect_Ref_write, $done, $k, $a) {
  $__num = func_num_args();
  $__case_0 = $b;
  switch ($__case_0) {
case true:
$__res = ($pure)($__global_Data_Unit_unit);
goto __end;;
break;
default:
$__res = ($discard1)(($liftEffect)(($__global_Effect_Ref_write)(true, $done)), function($__dollar____unused) use ($k, $a) {
  $__num = func_num_args();
  $__res = ($k)($a);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
goto __end;;
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) use ($functorParCont1) {
  $__num = func_num_args();
  $__res = $functorParCont1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_altParCont'] = __NAMESPACE__ . '\\Control_Parallel_Class_altParCont';

// Control_Parallel_Class_plusParCont
function Control_Parallel_Class_plusParCont($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_plusParCont';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Parallel_Class_altParCont = ($GLOBALS['Control_Parallel_Class_altParCont'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_altParCont'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $pure = ((((($dictMonadEffect)->Monad0)($__global_Prim_undefined))->Applicative0)($__global_Prim_undefined))->pure;
  $altParCont1 = ($__global_Control_Parallel_Class_altParCont)($dictMonadEffect);
  $__res = (object)["empty" => function($v) use ($pure, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($pure)($__global_Data_Unit_unit);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Alt0" => function($__dollar____unused) use ($altParCont1) {
  $__num = func_num_args();
  $__res = $altParCont1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_plusParCont'] = __NAMESPACE__ . '\\Control_Parallel_Class_plusParCont';

// Control_Parallel_Class_alternativeParCont
function Control_Parallel_Class_alternativeParCont($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_Class_alternativeParCont';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Parallel_Class_applicativeParCont = ($GLOBALS['Control_Parallel_Class_applicativeParCont'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_applicativeParCont'));
  $__global_Control_Parallel_Class_plusParCont = ($GLOBALS['Control_Parallel_Class_plusParCont'] ?? \Control\Parallel\Class\phpurs_eval_thunk('Control_Parallel_Class_plusParCont'));
  $applicativeParCont1 = ($__global_Control_Parallel_Class_applicativeParCont)($dictMonadEffect);
  $plusParCont1 = ($__global_Control_Parallel_Class_plusParCont)($dictMonadEffect);
  $__res = (object)["Applicative0" => function($__dollar____unused) use ($applicativeParCont1) {
  $__num = func_num_args();
  $__res = $applicativeParCont1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Plus1" => function($__dollar____unused) use ($plusParCont1) {
  $__num = func_num_args();
  $__res = $plusParCont1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_Class_alternativeParCont'] = __NAMESPACE__ . '\\Control_Parallel_Class_alternativeParCont';

