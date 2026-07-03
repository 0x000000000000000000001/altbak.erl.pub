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

if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...$merged);
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Parallel_Class_compose
$Control_Parallel_Class_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Parallel_Class_composeFlipped
$Control_Parallel_Class_composeFlipped = ($GLOBALS['Control_Semigroupoid_composeFlipped'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Parallel_Class_discard
$Control_Parallel_Class_discard = ($GLOBALS['Control_Bind_discard'])($GLOBALS['Control_Bind_discardUnit']);

// Control_Parallel_Class_Parallel$Dict
$Control_Parallel_Class_Parallel__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_ParCont
$Control_Parallel_Class_ParCont = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_sequential
$Control_Parallel_Class_sequential = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->sequential;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dict) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($dict);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_parallel
$Control_Parallel_Class_parallel = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->parallel;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dict) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($dict);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_newtypeParCont
$Control_Parallel_Class_newtypeParCont = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Parallel_Class_monadParWriterT
$Control_Parallel_Class_monadParWriterT = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applyWriterT = ($GLOBALS['Control_Monad_Writer_Trans_applyWriterT'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($applyWriterT) {
  $__fn = function($dictParallel) use ($applyWriterT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applyWriterT1 = ($applyWriterT)((($dictParallel)->Apply0)($GLOBALS['Prim_undefined']));
$applyWriterT2 = ($applyWriterT)((($dictParallel)->Apply1)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Parallel_Class_Parallel__dollar__Dict'])((object)["parallel" => ($GLOBALS['Control_Monad_Writer_Trans_mapWriterT'])(($GLOBALS['Control_Parallel_Class_parallel'])($dictParallel)), "sequential" => ($GLOBALS['Control_Monad_Writer_Trans_mapWriterT'])(($GLOBALS['Control_Parallel_Class_sequential'])($dictParallel)), "Apply0" => (function() use ($applyWriterT1) {
  $__fn = function($__dollar____unused) use ($applyWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyWriterT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use ($applyWriterT2) {
  $__fn = function($__dollar____unused) use ($applyWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyWriterT2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_monadParStar
$Control_Parallel_Class_monadParStar = (function() {
  $__fn = function($dictParallel) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$parallel1 = ($GLOBALS['Control_Parallel_Class_parallel'])($dictParallel);
$sequential1 = ($GLOBALS['Control_Parallel_Class_sequential'])($dictParallel);
$applyStar = ($GLOBALS['Data_Profunctor_Star_applyStar'])((($dictParallel)->Apply0)($GLOBALS['Prim_undefined']));
$applyStar1 = ($GLOBALS['Data_Profunctor_Star_applyStar'])((($dictParallel)->Apply1)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Parallel_Class_Parallel__dollar__Dict'])((object)["parallel" => (function() use ($parallel1) {
  $__body = function($v) use ($parallel1) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($GLOBALS['Data_Profunctor_Star_Star'])(($GLOBALS['Control_Parallel_Class_compose'])($parallel1, $f));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($parallel1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequential" => (function() use ($sequential1) {
  $__body = function($v) use ($sequential1) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($GLOBALS['Data_Profunctor_Star_Star'])(($GLOBALS['Control_Parallel_Class_compose'])($sequential1, $f));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($sequential1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyStar) {
  $__fn = function($__dollar____unused) use ($applyStar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyStar;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use ($applyStar1) {
  $__fn = function($__dollar____unused) use ($applyStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyStar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_monadParReaderT
$Control_Parallel_Class_monadParReaderT = (function() {
  $__fn = function($dictParallel) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applyReaderT = ($GLOBALS['Control_Monad_Reader_Trans_applyReaderT'])((($dictParallel)->Apply0)($GLOBALS['Prim_undefined']));
$applyReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_applyReaderT'])((($dictParallel)->Apply1)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Parallel_Class_Parallel__dollar__Dict'])((object)["parallel" => ($GLOBALS['Control_Monad_Reader_Trans_mapReaderT'])(($GLOBALS['Control_Parallel_Class_parallel'])($dictParallel)), "sequential" => ($GLOBALS['Control_Monad_Reader_Trans_mapReaderT'])(($GLOBALS['Control_Parallel_Class_sequential'])($dictParallel)), "Apply0" => (function() use ($applyReaderT) {
  $__fn = function($__dollar____unused) use ($applyReaderT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyReaderT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use ($applyReaderT1) {
  $__fn = function($__dollar____unused) use ($applyReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_monadParMaybeT
$Control_Parallel_Class_monadParMaybeT = (function() {
  $__fn = function($dictParallel) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$parallel1 = ($GLOBALS['Control_Parallel_Class_parallel'])($dictParallel);
$sequential1 = ($GLOBALS['Control_Parallel_Class_sequential'])($dictParallel);
$applyCompose = ($GLOBALS['Data_Functor_Compose_applyCompose'])((($dictParallel)->Apply1)($GLOBALS['Prim_undefined']), $GLOBALS['Data_Maybe_applyMaybe']);
    $__res = (function() use ($parallel1, $sequential1, $applyCompose) {
  $__fn = function($dictMonad) use ($parallel1, $sequential1, $applyCompose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applyMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_applyMaybeT'])($dictMonad);
    $__res = ($GLOBALS['Control_Parallel_Class_Parallel__dollar__Dict'])((object)["parallel" => (function() use ($parallel1) {
  $__body = function($v) use ($parallel1) {
    $__case_0 = $v;
    if (true) {
$ma = $__case_0;
return ($GLOBALS['Data_Functor_Compose_Compose'])(($parallel1)($ma));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($parallel1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequential" => (function() use ($sequential1) {
  $__body = function($v) use ($sequential1) {
    $__case_0 = $v;
    if (true) {
$fa = $__case_0;
return ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'])(($sequential1)($fa));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($sequential1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyMaybeT) {
  $__fn = function($__dollar____unused) use ($applyMaybeT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyMaybeT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use ($applyCompose) {
  $__fn = function($__dollar____unused) use ($applyCompose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyCompose;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_monadParExceptT
$Control_Parallel_Class_monadParExceptT = (function() {
  $__fn = function($dictParallel) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$parallel1 = ($GLOBALS['Control_Parallel_Class_parallel'])($dictParallel);
$sequential1 = ($GLOBALS['Control_Parallel_Class_sequential'])($dictParallel);
$applyCompose = ($GLOBALS['Data_Functor_Compose_applyCompose'])((($dictParallel)->Apply1)($GLOBALS['Prim_undefined']), $GLOBALS['Data_Either_applyEither']);
    $__res = (function() use ($parallel1, $sequential1, $applyCompose) {
  $__fn = function($dictMonad) use ($parallel1, $sequential1, $applyCompose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applyExceptT = ($GLOBALS['Control_Monad_Except_Trans_applyExceptT'])($dictMonad);
    $__res = ($GLOBALS['Control_Parallel_Class_Parallel__dollar__Dict'])((object)["parallel" => (function() use ($parallel1) {
  $__body = function($v) use ($parallel1) {
    $__case_0 = $v;
    if (true) {
$ma = $__case_0;
return ($GLOBALS['Data_Functor_Compose_Compose'])(($parallel1)($ma));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($parallel1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequential" => (function() use ($sequential1) {
  $__body = function($v) use ($sequential1) {
    $__case_0 = $v;
    if (true) {
$fa = $__case_0;
return ($GLOBALS['Control_Monad_Except_Trans_ExceptT'])(($sequential1)($fa));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($sequential1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyExceptT) {
  $__fn = function($__dollar____unused) use ($applyExceptT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyExceptT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use ($applyCompose) {
  $__fn = function($__dollar____unused) use ($applyCompose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyCompose;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_monadParCostar
$Control_Parallel_Class_monadParCostar = (function() {
  $__fn = function($dictParallel) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sequential1 = ($GLOBALS['Control_Parallel_Class_sequential'])($dictParallel);
$parallel1 = ($GLOBALS['Control_Parallel_Class_parallel'])($dictParallel);
    $__res = ($GLOBALS['Control_Parallel_Class_Parallel__dollar__Dict'])((object)["parallel" => (function() use ($sequential1) {
  $__body = function($v) use ($sequential1) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($GLOBALS['Data_Functor_Costar_Costar'])(($GLOBALS['Control_Parallel_Class_composeFlipped'])($sequential1, $f));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($sequential1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequential" => (function() use ($parallel1) {
  $__body = function($v) use ($parallel1) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($GLOBALS['Data_Functor_Costar_Costar'])(($GLOBALS['Control_Parallel_Class_composeFlipped'])($parallel1, $f));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($parallel1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Functor_Costar_applyCostar'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Functor_Costar_applyCostar'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_monadParParCont
$Control_Parallel_Class_monadParParCont = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$applyContT = ($GLOBALS['Control_Monad_Cont_Trans_applyContT'])((((((($dictMonadEffect)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']));
return ($GLOBALS['Control_Parallel_Class_Parallel__dollar__Dict'])((object)["parallel" => $GLOBALS['Control_Parallel_Class_ParCont'], "sequential" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$ma = $__case_0;
return $ma;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyContT) {
  $__fn = function($__dollar____unused) use ($applyContT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyContT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use ($dictMonadEffect) {
  $__fn = function($__dollar____unused) use ($dictMonadEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Parallel_Class_applyParCont'])($dictMonadEffect);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_functorParCont
$Control_Parallel_Class_functorParCont = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$map = ($GLOBALS['Data_Functor_map'])(($GLOBALS['Control_Monad_Cont_Trans_functorContT'])((((((((($dictMonadEffect)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined'])));
return ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() use ($dictMonadEffect, $map) {
  $__fn = function($f) use ($dictMonadEffect, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Parallel_Class_compose'])(($GLOBALS['Control_Parallel_Class_parallel'])(($GLOBALS['Control_Parallel_Class_monadParParCont'])($dictMonadEffect)), ($GLOBALS['Control_Parallel_Class_compose'])(($map)($f), ($GLOBALS['Control_Parallel_Class_sequential'])(($GLOBALS['Control_Parallel_Class_monadParParCont'])($dictMonadEffect))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_applyParCont
$Control_Parallel_Class_applyParCont = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$Bind1 = (((($dictMonadEffect)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']);
$bind = ($GLOBALS['Control_Bind_bind'])($Bind1);
$liftEffect = ($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect);
$discard1 = ($GLOBALS['Control_Parallel_Class_discard'])($Bind1);
return ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => (function() use ($bind, $liftEffect, $discard1) {
  $__body = function($v, $v1) use ($bind, $liftEffect, $discard1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$ca = $__case_0;
$cb = $__case_1;
return ($GLOBALS['Control_Parallel_Class_ParCont'])(($GLOBALS['Control_Monad_Cont_Trans_ContT'])((function() use ($bind, $liftEffect, $discard1, $ca, $cb) {
  $__fn = function($k) use ($bind, $liftEffect, $discard1, $ca, $cb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind)(($liftEffect)(($GLOBALS['Effect_Ref_new'])($GLOBALS['Data_Maybe_Nothing'])), (function() use ($bind, $liftEffect, $discard1, $ca, $k, $cb) {
  $__fn = function($ra) use ($bind, $liftEffect, $discard1, $ca, $k, $cb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind)(($liftEffect)(($GLOBALS['Effect_Ref_new'])($GLOBALS['Data_Maybe_Nothing'])), (function() use ($discard1, $ca, $bind, $liftEffect, $ra, $k, $cb) {
  $__fn = function($rb) use ($discard1, $ca, $bind, $liftEffect, $ra, $k, $cb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($discard1)(($GLOBALS['Control_Monad_Cont_Trans_runContT'])($ca, (function() use ($bind, $liftEffect, $rb, $ra, $k) {
  $__fn = function($a) use ($bind, $liftEffect, $rb, $ra, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind)(($liftEffect)(($GLOBALS['Effect_Ref_read'])($rb)), (function() use ($liftEffect, $a, $ra, $k) {
  $__body = function($mb) use ($liftEffect, $a, $ra, $k) {
    $__case_0 = $mb;
    if ((($__case_0)->tag === "Nothing")) {
return ($liftEffect)(($GLOBALS['Effect_Ref_write'])(($GLOBALS['Data_Maybe_Just'])($a), $ra));
} else {
if ((($__case_0)->tag === "Just")) {
$b = ($__case_0)->values[0];
return ($k)(($a)($b));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($mb) use ($liftEffect, $a, $ra, $k, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($mb);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($cb, $bind, $liftEffect, $ra, $rb, $k) {
  $__fn = function($__dollar____unused) use ($cb, $bind, $liftEffect, $ra, $rb, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Cont_Trans_runContT'])($cb, (function() use ($bind, $liftEffect, $ra, $rb, $k) {
  $__fn = function($b) use ($bind, $liftEffect, $ra, $rb, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind)(($liftEffect)(($GLOBALS['Effect_Ref_read'])($ra)), (function() use ($liftEffect, $b, $rb, $k) {
  $__body = function($ma) use ($liftEffect, $b, $rb, $k) {
    $__case_0 = $ma;
    if ((($__case_0)->tag === "Nothing")) {
return ($liftEffect)(($GLOBALS['Effect_Ref_write'])(($GLOBALS['Data_Maybe_Just'])($b), $rb));
} else {
if ((($__case_0)->tag === "Just")) {
$a = ($__case_0)->values[0];
return ($k)(($a)($b));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($ma) use ($liftEffect, $b, $rb, $k, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($ma);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $liftEffect, $discard1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($dictMonadEffect) {
  $__fn = function($__dollar____unused) use ($dictMonadEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Parallel_Class_functorParCont'])($dictMonadEffect);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_applicativeParCont
$Control_Parallel_Class_applicativeParCont = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applyParCont1 = ($GLOBALS['Control_Parallel_Class_applyParCont'])($dictMonadEffect);
    $__res = ($GLOBALS['Control_Applicative_Applicative__dollar__Dict'])((object)["pure" => ($GLOBALS['Control_Parallel_Class_compose'])(($GLOBALS['Control_Parallel_Class_parallel'])(($GLOBALS['Control_Parallel_Class_monadParParCont'])($dictMonadEffect)), ($GLOBALS['Control_Applicative_pure'])(($GLOBALS['Control_Monad_Cont_Trans_applicativeContT'])((((($dictMonadEffect)->Monad0)($GLOBALS['Prim_undefined']))->Applicative0)($GLOBALS['Prim_undefined'])))), "Apply0" => (function() use ($applyParCont1) {
  $__fn = function($__dollar____unused) use ($applyParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyParCont1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_altParCont
$Control_Parallel_Class_altParCont = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadEffect)->Monad0)($GLOBALS['Prim_undefined']);
$Bind1 = (($Monad0)->Bind1)($GLOBALS['Prim_undefined']);
$bind = ($GLOBALS['Control_Bind_bind'])($Bind1);
$liftEffect = ($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect);
$discard1 = ($GLOBALS['Control_Parallel_Class_discard'])($Bind1);
$pure = ($GLOBALS['Control_Applicative_pure'])((($Monad0)->Applicative0)($GLOBALS['Prim_undefined']));
$functorParCont1 = ($GLOBALS['Control_Parallel_Class_functorParCont'])($dictMonadEffect);
    $__res = ($GLOBALS['Control_Alt_Alt__dollar__Dict'])((object)["alt" => (function() use ($bind, $liftEffect, $discard1, $pure) {
  $__body = function($v, $v1) use ($bind, $liftEffect, $discard1, $pure) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$c1 = $__case_0;
$c2 = $__case_1;
return ($GLOBALS['Control_Parallel_Class_ParCont'])(($GLOBALS['Control_Monad_Cont_Trans_ContT'])((function() use ($bind, $liftEffect, $discard1, $c1, $pure, $c2) {
  $__fn = function($k) use ($bind, $liftEffect, $discard1, $c1, $pure, $c2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind)(($liftEffect)(($GLOBALS['Effect_Ref_new'])(false)), (function() use ($discard1, $c1, $bind, $liftEffect, $pure, $k, $c2) {
  $__fn = function($done) use ($discard1, $c1, $bind, $liftEffect, $pure, $k, $c2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($discard1)(($GLOBALS['Control_Monad_Cont_Trans_runContT'])($c1, (function() use ($bind, $liftEffect, $done, $pure, $discard1, $k) {
  $__fn = function($a) use ($bind, $liftEffect, $done, $pure, $discard1, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind)(($liftEffect)(($GLOBALS['Effect_Ref_read'])($done)), (function() use ($pure, $discard1, $liftEffect, $done, $k, $a) {
  $__body = function($b) use ($pure, $discard1, $liftEffect, $done, $k, $a) {
    $__case_0 = $b;
    if (($__case_0 === true)) {
return ($pure)($GLOBALS['Data_Unit_unit']);
} else {
if (true) {
return ($discard1)(($liftEffect)(($GLOBALS['Effect_Ref_write'])(true, $done)), (function() use ($k, $a) {
  $__fn = function($__dollar____unused) use ($k, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($k)($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($b) use ($pure, $discard1, $liftEffect, $done, $k, $a, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($c2, $bind, $liftEffect, $done, $pure, $discard1, $k) {
  $__fn = function($__dollar____unused) use ($c2, $bind, $liftEffect, $done, $pure, $discard1, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Cont_Trans_runContT'])($c2, (function() use ($bind, $liftEffect, $done, $pure, $discard1, $k) {
  $__fn = function($a) use ($bind, $liftEffect, $done, $pure, $discard1, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind)(($liftEffect)(($GLOBALS['Effect_Ref_read'])($done)), (function() use ($pure, $discard1, $liftEffect, $done, $k, $a) {
  $__body = function($b) use ($pure, $discard1, $liftEffect, $done, $k, $a) {
    $__case_0 = $b;
    if (($__case_0 === true)) {
return ($pure)($GLOBALS['Data_Unit_unit']);
} else {
if (true) {
return ($discard1)(($liftEffect)(($GLOBALS['Effect_Ref_write'])(true, $done)), (function() use ($k, $a) {
  $__fn = function($__dollar____unused) use ($k, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($k)($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($b) use ($pure, $discard1, $liftEffect, $done, $k, $a, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $liftEffect, $discard1, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorParCont1) {
  $__fn = function($__dollar____unused) use ($functorParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorParCont1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_plusParCont
$Control_Parallel_Class_plusParCont = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure = ($GLOBALS['Control_Applicative_pure'])((((($dictMonadEffect)->Monad0)($GLOBALS['Prim_undefined']))->Applicative0)($GLOBALS['Prim_undefined']));
$altParCont1 = ($GLOBALS['Control_Parallel_Class_altParCont'])($dictMonadEffect);
    $__res = ($GLOBALS['Control_Plus_Plus__dollar__Dict'])((object)["empty" => ($GLOBALS['Control_Parallel_Class_ParCont'])(($GLOBALS['Control_Monad_Cont_Trans_ContT'])((function() use ($pure) {
  $__fn = function($v) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($pure)($GLOBALS['Data_Unit_unit']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), "Alt0" => (function() use ($altParCont1) {
  $__fn = function($__dollar____unused) use ($altParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $altParCont1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_alternativeParCont
$Control_Parallel_Class_alternativeParCont = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applicativeParCont1 = ($GLOBALS['Control_Parallel_Class_applicativeParCont'])($dictMonadEffect);
$plusParCont1 = ($GLOBALS['Control_Parallel_Class_plusParCont'])($dictMonadEffect);
    $__res = ($GLOBALS['Control_Alternative_Alternative__dollar__Dict'])((object)["Applicative0" => (function() use ($applicativeParCont1) {
  $__fn = function($__dollar____unused) use ($applicativeParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applicativeParCont1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusParCont1) {
  $__fn = function($__dollar____unused) use ($plusParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $plusParCont1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

