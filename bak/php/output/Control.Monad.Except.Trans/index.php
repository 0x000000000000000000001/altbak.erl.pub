<?php

namespace Control\Monad\Except\Trans;

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


// Control_Monad_Except_Trans_map
$Control_Monad_Except_Trans_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Either_functorEither']);

// Control_Monad_Except_Trans_compose
$Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Monad_Except_Trans_identity
$Control_Monad_Except_Trans_identity = ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']);

// Control_Monad_Except_Trans_ExceptT
$Control_Monad_Except_Trans_ExceptT = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Except_Trans_withExceptT
$Control_Monad_Except_Trans_withExceptT = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map1 = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = (function() use ($map1) {
  $__body = function($f, $v) use ($map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$t = $__case_1;
$mapLeft = (function() {
  $__body = function($v1, $v2) {
    $__case_0 = $v1;
    $__case_1 = $v2;
    if ((($__case_1)->tag === "Right")) {
$x = ($__case_1)->values[0];
return ($GLOBALS['Data_Either_Right'])($x);
} else {
if ((($__case_1)->tag === "Left")) {
$f__prime__ = $__case_0;
$x = ($__case_1)->values[0];
return ($GLOBALS['Data_Either_Left'])(($f__prime__)($x));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v1, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v1, $v2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return ($GLOBALS['Control_Monad_Except_Trans_ExceptT'])(($map1)(($mapLeft)($f1), $t));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Except_Trans_runExceptT
$Control_Monad_Except_Trans_runExceptT = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return $x;
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
})();

// Control_Monad_Except_Trans_newtypeExceptT
$Control_Monad_Except_Trans_newtypeExceptT = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Except_Trans_monadTransExceptT
$Control_Monad_Except_Trans_monadTransExceptT = ($GLOBALS['Control_Monad_Trans_Class_MonadTrans__dollar__Dict'])((object)["lift" => (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind = ($GLOBALS['Control_Bind_bind'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($bind, $pure) {
  $__fn = function($m) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'])(($bind)($m, (function() use ($pure) {
  $__fn = function($a) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($pure)(($GLOBALS['Data_Either_Right'])($a));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Except_Trans_lift
$Control_Monad_Except_Trans_lift = ($GLOBALS['Control_Monad_Trans_Class_lift'])($GLOBALS['Control_Monad_Except_Trans_monadTransExceptT']);

// Control_Monad_Except_Trans_mapExceptT
$Control_Monad_Except_Trans_mapExceptT = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return ($GLOBALS['Control_Monad_Except_Trans_ExceptT'])(($f1)($m));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Except_Trans_functorExceptT
$Control_Monad_Except_Trans_functorExceptT = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map1 = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() use ($map1) {
  $__fn = function($f) use ($map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'])(($map1)(($GLOBALS['Control_Monad_Except_Trans_map'])($f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Except_Trans_except
$Control_Monad_Except_Trans_except = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Except_Trans_compose'])($GLOBALS['Control_Monad_Except_Trans_ExceptT'], ($GLOBALS['Control_Applicative_pure'])($dictApplicative));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Except_Trans_monadExceptT
$Control_Monad_Except_Trans_monadExceptT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
return ($GLOBALS['Control_Monad_Monad__dollar__Dict'])((object)["Applicative0" => (function() use ($dictMonad) {
  $__fn = function($__dollar____unused) use ($dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'])($dictMonad);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($dictMonad) {
  $__fn = function($__dollar____unused) use ($dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Except_Trans_bindExceptT'])($dictMonad);
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

// Control_Monad_Except_Trans_bindExceptT
$Control_Monad_Except_Trans_bindExceptT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$bind = ($GLOBALS['Control_Bind_bind'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
return ($GLOBALS['Control_Bind_Bind__dollar__Dict'])((object)["bind" => (function() use ($bind, $pure) {
  $__body = function($v, $k) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($GLOBALS['Control_Monad_Except_Trans_ExceptT'])(($bind)($m, ($GLOBALS['Data_Either_either'])(($GLOBALS['Control_Monad_Except_Trans_compose'])($pure, $GLOBALS['Data_Either_Left']), (function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $k = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dictMonad) {
  $__fn = function($__dollar____unused) use ($dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Except_Trans_applyExceptT'])($dictMonad);
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

// Control_Monad_Except_Trans_applyExceptT
$Control_Monad_Except_Trans_applyExceptT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$functorExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_functorExceptT'])((((((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
return ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => ($GLOBALS['Control_Monad_ap'])(($GLOBALS['Control_Monad_Except_Trans_monadExceptT'])($dictMonad)), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorExceptT1;
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

// Control_Monad_Except_Trans_applicativeExceptT
$Control_Monad_Except_Trans_applicativeExceptT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
return ($GLOBALS['Control_Applicative_Applicative__dollar__Dict'])((object)["pure" => ($GLOBALS['Control_Monad_Except_Trans_compose'])($GLOBALS['Control_Monad_Except_Trans_ExceptT'], ($GLOBALS['Control_Monad_Except_Trans_compose'])(($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined'])), $GLOBALS['Data_Either_Right'])), "Apply0" => (function() use ($dictMonad) {
  $__fn = function($__dollar____unused) use ($dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Except_Trans_applyExceptT'])($dictMonad);
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

// Control_Monad_Except_Trans_semigroupExceptT
$Control_Monad_Except_Trans_semigroupExceptT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$lift2 = ($GLOBALS['Control_Apply_lift2'])(($GLOBALS['Control_Monad_Except_Trans_applyExceptT'])($dictMonad));
    $__res = (function() use ($lift2) {
  $__fn = function($dictSemigroup) use ($lift2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => ($lift2)(($GLOBALS['Data_Semigroup_append'])($dictSemigroup))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Except_Trans_monadAskExceptT
$Control_Monad_Except_Trans_monadAskExceptT = (function() {
  $__fn = function($dictMonadAsk) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadAsk)->Monad0)($GLOBALS['Prim_undefined']);
$monadExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'])($Monad0);
    $__res = ($GLOBALS['Control_Monad_Reader_Class_MonadAsk__dollar__Dict'])((object)["ask" => ($GLOBALS['Control_Monad_Except_Trans_lift'])($Monad0, ($GLOBALS['Control_Monad_Reader_Class_ask'])($dictMonadAsk)), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Except_Trans_monadReaderExceptT
$Control_Monad_Except_Trans_monadReaderExceptT = (function() {
  $__fn = function($dictMonadReader) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$local = ($GLOBALS['Control_Monad_Reader_Class_local'])($dictMonadReader);
$monadAskExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_monadAskExceptT'])((($dictMonadReader)->MonadAsk0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Monad_Reader_Class_MonadReader__dollar__Dict'])((object)["local" => (function() use ($local) {
  $__fn = function($f) use ($local, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'])(($local)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "MonadAsk0" => (function() use ($monadAskExceptT1) {
  $__fn = function($__dollar____unused) use ($monadAskExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadAskExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Except_Trans_monadContExceptT
$Control_Monad_Except_Trans_monadContExceptT = (function() {
  $__fn = function($dictMonadCont) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$callCC = ($GLOBALS['Control_Monad_Cont_Class_callCC'])($dictMonadCont);
$monadExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'])((($dictMonadCont)->Monad0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Monad_Cont_Class_MonadCont__dollar__Dict'])((object)["callCC" => (function() use ($callCC) {
  $__fn = function($f) use ($callCC, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'])(($callCC)((function() use ($f) {
  $__body = function($c) use ($f) {
    $v = ($f)((function() use ($c) {
  $__fn = function($a) use ($c, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'])(($c)(($GLOBALS['Data_Either_Right'])($a)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    $__case_0 = $v;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($c) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($c);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Except_Trans_monadEffectExceptT
$Control_Monad_Except_Trans_monadEffectExceptT = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadEffect)->Monad0)($GLOBALS['Prim_undefined']);
$monadExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'])($Monad0);
    $__res = ($GLOBALS['Effect_Class_MonadEffect__dollar__Dict'])((object)["liftEffect" => ($GLOBALS['Control_Monad_Except_Trans_compose'])(($GLOBALS['Control_Monad_Except_Trans_lift'])($Monad0), ($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect)), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Except_Trans_monadRecExceptT
$Control_Monad_Except_Trans_monadRecExceptT = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$tailRecM = ($GLOBALS['Control_Monad_Rec_Class_tailRecM'])($dictMonadRec);
$Monad0 = (($dictMonadRec)->Monad0)($GLOBALS['Prim_undefined']);
$bind = ($GLOBALS['Control_Bind_bind'])((($Monad0)->Bind1)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])((($Monad0)->Applicative0)($GLOBALS['Prim_undefined']));
$monadExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'])($Monad0);
    $__res = ($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'])((object)["tailRecM" => (function() use ($tailRecM, $bind, $pure) {
  $__fn = function($f) use ($tailRecM, $bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Except_Trans_compose'])($GLOBALS['Control_Monad_Except_Trans_ExceptT'], ($tailRecM)((function() use ($f, $bind, $pure) {
  $__body = function($a) use ($f, $bind, $pure) {
    $v = ($f)($a);
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($bind)($m, (function() use ($pure) {
  $__fn = function($m__prime__) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$__case_0 = $m__prime__;
$__case_res_0 = null;
if ((($__case_0)->tag === "Left")) {
$e = ($__case_0)->values[0];
$__case_res_0 = ($GLOBALS['Control_Monad_Rec_Class_Done'])(($GLOBALS['Data_Either_Left'])($e));
} else {
if (((($__case_0)->tag === "Right") && ((($__case_0)->values[0])->tag === "Loop"))) {
$a1 = (($__case_0)->values[0])->values[0];
$__case_res_0 = ($GLOBALS['Control_Monad_Rec_Class_Loop'])($a1);
} else {
if (((($__case_0)->tag === "Right") && ((($__case_0)->values[0])->tag === "Done"))) {
$b = (($__case_0)->values[0])->values[0];
$__case_res_0 = ($GLOBALS['Control_Monad_Rec_Class_Done'])(($GLOBALS['Data_Either_Right'])($b));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = ($pure)($__case_res_0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($f, $bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Except_Trans_monadStateExceptT
$Control_Monad_Except_Trans_monadStateExceptT = (function() {
  $__fn = function($dictMonadState) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadState)->Monad0)($GLOBALS['Prim_undefined']);
$lift1 = ($GLOBALS['Control_Monad_Except_Trans_lift'])($Monad0);
$state = ($GLOBALS['Control_Monad_State_Class_state'])($dictMonadState);
$monadExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'])($Monad0);
    $__res = ($GLOBALS['Control_Monad_State_Class_MonadState__dollar__Dict'])((object)["state" => (function() use ($lift1, $state) {
  $__fn = function($f) use ($lift1, $state, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($lift1)(($state)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Except_Trans_monadTellExceptT
$Control_Monad_Except_Trans_monadTellExceptT = (function() {
  $__fn = function($dictMonadTell) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad1 = (($dictMonadTell)->Monad1)($GLOBALS['Prim_undefined']);
$Semigroup0 = (($dictMonadTell)->Semigroup0)($GLOBALS['Prim_undefined']);
$monadExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'])($Monad1);
    $__res = ($GLOBALS['Control_Monad_Writer_Class_MonadTell__dollar__Dict'])((object)["tell" => ($GLOBALS['Control_Monad_Except_Trans_compose'])(($GLOBALS['Control_Monad_Except_Trans_lift'])($Monad1), ($GLOBALS['Control_Monad_Writer_Class_tell'])($dictMonadTell)), "Semigroup0" => (function() use (&$Semigroup0) {
  $__fn = function($__dollar____unused) use (&$Semigroup0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $Semigroup0;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad1" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Except_Trans_monadWriterExceptT
$Control_Monad_Except_Trans_monadWriterExceptT = (function() {
  $__fn = function($dictMonadWriter) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$MonadTell1 = (($dictMonadWriter)->MonadTell1)($GLOBALS['Prim_undefined']);
$Monad1 = (($MonadTell1)->Monad1)($GLOBALS['Prim_undefined']);
$bind = ($GLOBALS['Control_Bind_bind'])((($Monad1)->Bind1)($GLOBALS['Prim_undefined']));
$listen = ($GLOBALS['Control_Monad_Writer_Class_listen'])($dictMonadWriter);
$pure = ($GLOBALS['Control_Applicative_pure'])((($Monad1)->Applicative0)($GLOBALS['Prim_undefined']));
$pass = ($GLOBALS['Control_Monad_Writer_Class_pass'])($dictMonadWriter);
$Monoid0 = (($dictMonadWriter)->Monoid0)($GLOBALS['Prim_undefined']);
$monadTellExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_monadTellExceptT'])($MonadTell1);
    $__res = ($GLOBALS['Control_Monad_Writer_Class_MonadWriter__dollar__Dict'])((object)["listen" => ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'])((function() use ($bind, $listen, $pure) {
  $__fn = function($m) use ($bind, $listen, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind)(($listen)($m), (function() use ($pure) {
  $__body = function($v) use ($pure) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$w = ($__case_0)->values[1];
return ($pure)(($GLOBALS['Control_Monad_Except_Trans_map'])((function() use ($w) {
  $__fn = function($r) use ($w, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])($r, $w);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "pass" => ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'])((function() use ($pass, $bind, $pure) {
  $__fn = function($m) use ($pass, $bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($pass)(($bind)($m, (function() use ($pure) {
  $__fn = function($a) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$__case_0 = $a;
$__case_res_0 = null;
if ((($__case_0)->tag === "Left")) {
$e = ($__case_0)->values[0];
$__case_res_0 = ($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Data_Either_Left'])($e), $GLOBALS['Control_Monad_Except_Trans_identity']);
} else {
if (((($__case_0)->tag === "Right") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$r = (($__case_0)->values[0])->values[0];
$f = (($__case_0)->values[0])->values[1];
$__case_res_0 = ($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Data_Either_Right'])($r), $f);
} else {
throw new \Exception("Pattern match failure");
};
};
    $__res = ($pure)($__case_res_0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "Monoid0" => (function() use (&$Monoid0) {
  $__fn = function($__dollar____unused) use (&$Monoid0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $Monoid0;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "MonadTell1" => (function() use ($monadTellExceptT1) {
  $__fn = function($__dollar____unused) use ($monadTellExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadTellExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Except_Trans_monadThrowExceptT
$Control_Monad_Except_Trans_monadThrowExceptT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$monadExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'])($dictMonad);
    $__res = ($GLOBALS['Control_Monad_Error_Class_MonadThrow__dollar__Dict'])((object)["throwError" => ($GLOBALS['Control_Monad_Except_Trans_compose'])($GLOBALS['Control_Monad_Except_Trans_ExceptT'], ($GLOBALS['Control_Monad_Except_Trans_compose'])(($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined'])), $GLOBALS['Data_Either_Left'])), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Except_Trans_monadErrorExceptT
$Control_Monad_Except_Trans_monadErrorExceptT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind = ($GLOBALS['Control_Bind_bind'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$monadThrowExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_monadThrowExceptT'])($dictMonad);
    $__res = ($GLOBALS['Control_Monad_Error_Class_MonadError__dollar__Dict'])((object)["catchError" => (function() use ($bind, $pure) {
  $__body = function($v, $k) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($GLOBALS['Control_Monad_Except_Trans_ExceptT'])(($bind)($m, ($GLOBALS['Data_Either_either'])((function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Control_Monad_Except_Trans_compose'])($pure, $GLOBALS['Data_Either_Right']))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $k = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => (function() use ($monadThrowExceptT1) {
  $__fn = function($__dollar____unused) use ($monadThrowExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadThrowExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Except_Trans_monadSTExceptT
$Control_Monad_Except_Trans_monadSTExceptT = (function() {
  $__fn = function($dictMonadST) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadST)->Monad0)($GLOBALS['Prim_undefined']);
$monadExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'])($Monad0);
    $__res = ($GLOBALS['Control_Monad_ST_Class_MonadST__dollar__Dict'])((object)["liftST" => ($GLOBALS['Control_Monad_Except_Trans_compose'])(($GLOBALS['Control_Monad_Except_Trans_lift'])($Monad0), ($GLOBALS['Control_Monad_ST_Class_liftST'])($dictMonadST)), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Except_Trans_monoidExceptT
$Control_Monad_Except_Trans_monoidExceptT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure = ($GLOBALS['Control_Applicative_pure'])(($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'])($dictMonad));
$semigroupExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_semigroupExceptT'])($dictMonad);
    $__res = (function() use ($semigroupExceptT1, $pure) {
  $__fn = function($dictMonoid) use ($semigroupExceptT1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$semigroupExceptT2 = ($semigroupExceptT1)((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => ($pure)(($GLOBALS['Data_Monoid_mempty'])($dictMonoid)), "Semigroup0" => (function() use ($semigroupExceptT2) {
  $__fn = function($__dollar____unused) use ($semigroupExceptT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $semigroupExceptT2;
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

// Control_Monad_Except_Trans_altExceptT
$Control_Monad_Except_Trans_altExceptT = (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append = ($GLOBALS['Data_Semigroup_append'])($dictSemigroup);
    $__res = (function() use ($append) {
  $__fn = function($dictMonad) use ($append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Bind1 = (($dictMonad)->Bind1)($GLOBALS['Prim_undefined']);
$bind = ($GLOBALS['Control_Bind_bind'])($Bind1);
$pure = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$functorExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_functorExceptT'])((((($Bind1)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Alt_Alt__dollar__Dict'])((object)["alt" => (function() use ($bind, $pure, $append) {
  $__body = function($v, $v1) use ($bind, $pure, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m = $__case_0;
$n = $__case_1;
return ($GLOBALS['Control_Monad_Except_Trans_ExceptT'])(($bind)($m, (function() use ($pure, $bind, $n, $append) {
  $__body = function($rm) use ($pure, $bind, $n, $append) {
    $__case_0 = $rm;
    if ((($__case_0)->tag === "Right")) {
$x = ($__case_0)->values[0];
return ($pure)(($GLOBALS['Data_Either_Right'])($x));
} else {
if ((($__case_0)->tag === "Left")) {
$err = ($__case_0)->values[0];
return ($bind)($n, (function() use ($pure, $append, $err) {
  $__body = function($rn) use ($pure, $append, $err) {
    $__case_0 = $rn;
    if ((($__case_0)->tag === "Right")) {
$x = ($__case_0)->values[0];
return ($pure)(($GLOBALS['Data_Either_Right'])($x));
} else {
if ((($__case_0)->tag === "Left")) {
$err__prime__ = ($__case_0)->values[0];
return ($pure)(($GLOBALS['Data_Either_Left'])(($append)($err, $err__prime__)));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($rn) use ($pure, $append, $err, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($rn);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($rm) use ($pure, $bind, $n, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($rm);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $pure, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorExceptT1;
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

// Control_Monad_Except_Trans_plusExceptT
$Control_Monad_Except_Trans_plusExceptT = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mempty = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
$altExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_altExceptT'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($altExceptT1, $mempty) {
  $__fn = function($dictMonad) use ($altExceptT1, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$altExceptT2 = ($altExceptT1)($dictMonad);
    $__res = ($GLOBALS['Control_Plus_Plus__dollar__Dict'])((object)["empty" => ($GLOBALS['Control_Monad_Error_Class_throwError'])(($GLOBALS['Control_Monad_Except_Trans_monadThrowExceptT'])($dictMonad), $mempty), "Alt0" => (function() use ($altExceptT2) {
  $__fn = function($__dollar____unused) use ($altExceptT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $altExceptT2;
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

// Control_Monad_Except_Trans_alternativeExceptT
$Control_Monad_Except_Trans_alternativeExceptT = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$plusExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_plusExceptT'])($dictMonoid);
    $__res = (function() use ($plusExceptT1) {
  $__fn = function($dictMonad) use ($plusExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applicativeExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'])($dictMonad);
$plusExceptT2 = ($plusExceptT1)($dictMonad);
    $__res = ($GLOBALS['Control_Alternative_Alternative__dollar__Dict'])((object)["Applicative0" => (function() use ($applicativeExceptT1) {
  $__fn = function($__dollar____unused) use ($applicativeExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applicativeExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusExceptT2) {
  $__fn = function($__dollar____unused) use ($plusExceptT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $plusExceptT2;
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

// Control_Monad_Except_Trans_monadPlusExceptT
$Control_Monad_Except_Trans_monadPlusExceptT = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$alternativeExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_alternativeExceptT'])($dictMonoid);
    $__res = (function() use ($alternativeExceptT1) {
  $__fn = function($dictMonad) use ($alternativeExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$monadExceptT1 = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'])($dictMonad);
$alternativeExceptT2 = ($alternativeExceptT1)($dictMonad);
    $__res = ($GLOBALS['Control_MonadPlus_MonadPlus__dollar__Dict'])((object)["Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadExceptT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use ($alternativeExceptT2) {
  $__fn = function($__dollar____unused) use ($alternativeExceptT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $alternativeExceptT2;
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

