<?php

namespace Control\Monad\Reader\Trans;

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


// Control_Monad_Reader_Trans_compose
$Control_Monad_Reader_Trans_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Monad_Reader_Trans_ReaderT
$Control_Monad_Reader_Trans_ReaderT = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_withReaderT
$Control_Monad_Reader_Trans_withReaderT = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return ($GLOBALS['Control_Monad_Reader_Trans_ReaderT'])(($GLOBALS['Control_Monad_Reader_Trans_compose'])($m, $f1));
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

// Control_Monad_Reader_Trans_runReaderT
$Control_Monad_Reader_Trans_runReaderT = (function() {
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

// Control_Monad_Reader_Trans_newtypeReaderT
$Control_Monad_Reader_Trans_newtypeReaderT = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Reader_Trans_monadTransReaderT
$Control_Monad_Reader_Trans_monadTransReaderT = ($GLOBALS['Control_Monad_Trans_Class_MonadTrans__dollar__Dict'])((object)["lift" => (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Reader_Trans_compose'])($GLOBALS['Control_Monad_Reader_Trans_ReaderT'], $GLOBALS['Data_Function_const']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Reader_Trans_lift
$Control_Monad_Reader_Trans_lift = ($GLOBALS['Control_Monad_Trans_Class_lift'])($GLOBALS['Control_Monad_Reader_Trans_monadTransReaderT']);

// Control_Monad_Reader_Trans_mapReaderT
$Control_Monad_Reader_Trans_mapReaderT = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return ($GLOBALS['Control_Monad_Reader_Trans_ReaderT'])(($GLOBALS['Control_Monad_Reader_Trans_compose'])($f1, $m));
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

// Control_Monad_Reader_Trans_functorReaderT
$Control_Monad_Reader_Trans_functorReaderT = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => ($GLOBALS['Control_Monad_Reader_Trans_compose'])($GLOBALS['Control_Monad_Reader_Trans_mapReaderT'], ($GLOBALS['Data_Functor_map'])($dictFunctor))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_distributiveReaderT
$Control_Monad_Reader_Trans_distributiveReaderT = (function() {
  $__fn = function($dictDistributive) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$collect = ($GLOBALS['Data_Distributive_collect'])($dictDistributive);
$functorReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_functorReaderT'])((($dictDistributive)->Functor0)($GLOBALS['Prim_undefined']));
return ($GLOBALS['Data_Distributive_Distributive__dollar__Dict'])((object)["distribute" => (function() use ($collect) {
  $__fn = function($dictFunctor) use ($collect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$collect1 = ($collect)($dictFunctor);
    $__res = (function() use ($collect1) {
  $__fn = function($a) use ($collect1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Reader_Trans_ReaderT'])((function() use ($collect1, $a) {
  $__fn = function($e) use ($collect1, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($collect1)((function() use ($e) {
  $__body = function($r) use ($e) {
    $__case_0 = $r;
    if (true) {
$r__prime__ = $__case_0;
return ($r__prime__)($e);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($r) use ($e, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($r);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "collect" => (function() use ($dictDistributive) {
  $__fn = function($dictFunctor) use ($dictDistributive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = (function() use ($dictDistributive, $dictFunctor, $map) {
  $__fn = function($f) use ($dictDistributive, $dictFunctor, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Reader_Trans_compose'])(($GLOBALS['Data_Distributive_distribute'])(($GLOBALS['Control_Monad_Reader_Trans_distributiveReaderT'])($dictDistributive), $dictFunctor), ($map)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorReaderT1) {
  $__fn = function($__dollar____unused) use ($functorReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorReaderT1;
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

// Control_Monad_Reader_Trans_applyReaderT
$Control_Monad_Reader_Trans_applyReaderT = (function() {
  $__fn = function($dictApply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$apply = ($GLOBALS['Control_Apply_apply'])($dictApply);
$functorReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_functorReaderT'])((($dictApply)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => (function() use ($apply) {
  $__body = function($v, $v1) use ($apply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$v2 = $__case_1;
return ($GLOBALS['Control_Monad_Reader_Trans_ReaderT'])((function() use ($apply, $f, $v2) {
  $__fn = function($r) use ($apply, $f, $v2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($apply)(($f)($r), ($v2)($r));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($apply, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorReaderT1) {
  $__fn = function($__dollar____unused) use ($functorReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_bindReaderT
$Control_Monad_Reader_Trans_bindReaderT = (function() {
  $__fn = function($dictBind) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind = ($GLOBALS['Control_Bind_bind'])($dictBind);
$applyReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_applyReaderT'])((($dictBind)->Apply0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Bind_Bind__dollar__Dict'])((object)["bind" => (function() use ($bind) {
  $__body = function($v, $k) use ($bind) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($GLOBALS['Control_Monad_Reader_Trans_ReaderT'])((function() use ($bind, $m, $k1) {
  $__fn = function($r) use ($bind, $m, $k1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind)(($m)($r), (function() use ($k1, $r) {
  $__body = function($a) use ($k1, $r) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$f = $__case_0;
return ($f)($r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($k1, $r, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $k = null) use ($bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $k);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyReaderT1) {
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

// Control_Monad_Reader_Trans_semigroupReaderT
$Control_Monad_Reader_Trans_semigroupReaderT = (function() {
  $__fn = function($dictApply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$lift2 = ($GLOBALS['Control_Apply_lift2'])(($GLOBALS['Control_Monad_Reader_Trans_applyReaderT'])($dictApply));
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

// Control_Monad_Reader_Trans_applicativeReaderT
$Control_Monad_Reader_Trans_applicativeReaderT = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applyReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_applyReaderT'])((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Applicative_Applicative__dollar__Dict'])((object)["pure" => ($GLOBALS['Control_Monad_Reader_Trans_compose'])($GLOBALS['Control_Monad_Reader_Trans_ReaderT'], ($GLOBALS['Control_Monad_Reader_Trans_compose'])($GLOBALS['Data_Function_const'], ($GLOBALS['Control_Applicative_pure'])($dictApplicative))), "Apply0" => (function() use ($applyReaderT1) {
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

// Control_Monad_Reader_Trans_monadReaderT
$Control_Monad_Reader_Trans_monadReaderT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applicativeReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_applicativeReaderT'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$bindReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_bindReaderT'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Monad_Monad__dollar__Dict'])((object)["Applicative0" => (function() use ($applicativeReaderT1) {
  $__fn = function($__dollar____unused) use ($applicativeReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applicativeReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindReaderT1) {
  $__fn = function($__dollar____unused) use ($bindReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $bindReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_monadAskReaderT
$Control_Monad_Reader_Trans_monadAskReaderT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$monadReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'])($dictMonad);
    $__res = ($GLOBALS['Control_Monad_Reader_Class_MonadAsk__dollar__Dict'])((object)["ask" => ($GLOBALS['Control_Monad_Reader_Trans_ReaderT'])(($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']))), "Monad0" => (function() use ($monadReaderT1) {
  $__fn = function($__dollar____unused) use ($monadReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_monadReaderReaderT
$Control_Monad_Reader_Trans_monadReaderReaderT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$monadAskReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_monadAskReaderT'])($dictMonad);
    $__res = ($GLOBALS['Control_Monad_Reader_Class_MonadReader__dollar__Dict'])((object)["local" => $GLOBALS['Control_Monad_Reader_Trans_withReaderT'], "MonadAsk0" => (function() use ($monadAskReaderT1) {
  $__fn = function($__dollar____unused) use ($monadAskReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadAskReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_monadContReaderT
$Control_Monad_Reader_Trans_monadContReaderT = (function() {
  $__fn = function($dictMonadCont) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$callCC = ($GLOBALS['Control_Monad_Cont_Class_callCC'])($dictMonadCont);
$monadReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'])((($dictMonadCont)->Monad0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Monad_Cont_Class_MonadCont__dollar__Dict'])((object)["callCC" => (function() use ($callCC) {
  $__fn = function($f) use ($callCC, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Reader_Trans_ReaderT'])((function() use ($callCC, $f) {
  $__fn = function($r) use ($callCC, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($callCC)((function() use ($f, $r) {
  $__body = function($c) use ($f, $r) {
    $v = ($f)(($GLOBALS['Control_Monad_Reader_Trans_compose'])($GLOBALS['Control_Monad_Reader_Trans_ReaderT'], ($GLOBALS['Control_Monad_Reader_Trans_compose'])($GLOBALS['Data_Function_const'], $c)));
    $__case_0 = $v;
    if (true) {
$f__prime__ = $__case_0;
return ($f__prime__)($r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($c) use ($f, $r, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($c);
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
})(), "Monad0" => (function() use ($monadReaderT1) {
  $__fn = function($__dollar____unused) use ($monadReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_monadEffectReader
$Control_Monad_Reader_Trans_monadEffectReader = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadEffect)->Monad0)($GLOBALS['Prim_undefined']);
$monadReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'])($Monad0);
    $__res = ($GLOBALS['Effect_Class_MonadEffect__dollar__Dict'])((object)["liftEffect" => ($GLOBALS['Control_Monad_Reader_Trans_compose'])(($GLOBALS['Control_Monad_Reader_Trans_lift'])($Monad0), ($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect)), "Monad0" => (function() use ($monadReaderT1) {
  $__fn = function($__dollar____unused) use ($monadReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_monadRecReaderT
$Control_Monad_Reader_Trans_monadRecReaderT = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadRec)->Monad0)($GLOBALS['Prim_undefined']);
$bindFlipped = ($GLOBALS['Control_Bind_bindFlipped'])((($Monad0)->Bind1)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])((($Monad0)->Applicative0)($GLOBALS['Prim_undefined']));
$tailRecM = ($GLOBALS['Control_Monad_Rec_Class_tailRecM'])($dictMonadRec);
$monadReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'])($Monad0);
    $__res = ($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'])((object)["tailRecM" => (function() use ($bindFlipped, $pure, $tailRecM) {
  $__fn = function($k, $a = null) use ($bindFlipped, $pure, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$k__prime__ = (function() use ($k, $bindFlipped, $pure) {
  $__body = function($r, $a__prime__) use ($k, $bindFlipped, $pure) {
    $v = ($k)($a__prime__);
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($bindFlipped)($pure, ($f)($r));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($r, $a__prime__ = null) use ($k, $bindFlipped, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($r, $a__prime__);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Control_Monad_Reader_Trans_ReaderT'])((function() use ($tailRecM, $k__prime__, $a) {
  $__fn = function($r) use ($tailRecM, $k__prime__, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($tailRecM)(($k__prime__)($r), $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadReaderT1) {
  $__fn = function($__dollar____unused) use ($monadReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_monadStateReaderT
$Control_Monad_Reader_Trans_monadStateReaderT = (function() {
  $__fn = function($dictMonadState) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadState)->Monad0)($GLOBALS['Prim_undefined']);
$monadReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'])($Monad0);
    $__res = ($GLOBALS['Control_Monad_State_Class_MonadState__dollar__Dict'])((object)["state" => ($GLOBALS['Control_Monad_Reader_Trans_compose'])(($GLOBALS['Control_Monad_Reader_Trans_lift'])($Monad0), ($GLOBALS['Control_Monad_State_Class_state'])($dictMonadState)), "Monad0" => (function() use ($monadReaderT1) {
  $__fn = function($__dollar____unused) use ($monadReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_monadTellReaderT
$Control_Monad_Reader_Trans_monadTellReaderT = (function() {
  $__fn = function($dictMonadTell) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad1 = (($dictMonadTell)->Monad1)($GLOBALS['Prim_undefined']);
$Semigroup0 = (($dictMonadTell)->Semigroup0)($GLOBALS['Prim_undefined']);
$monadReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'])($Monad1);
    $__res = ($GLOBALS['Control_Monad_Writer_Class_MonadTell__dollar__Dict'])((object)["tell" => ($GLOBALS['Control_Monad_Reader_Trans_compose'])(($GLOBALS['Control_Monad_Reader_Trans_lift'])($Monad1), ($GLOBALS['Control_Monad_Writer_Class_tell'])($dictMonadTell)), "Semigroup0" => (function() use (&$Semigroup0) {
  $__fn = function($__dollar____unused) use (&$Semigroup0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $Semigroup0;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad1" => (function() use ($monadReaderT1) {
  $__fn = function($__dollar____unused) use ($monadReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_monadWriterReaderT
$Control_Monad_Reader_Trans_monadWriterReaderT = (function() {
  $__fn = function($dictMonadWriter) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monoid0 = (($dictMonadWriter)->Monoid0)($GLOBALS['Prim_undefined']);
$monadTellReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_monadTellReaderT'])((($dictMonadWriter)->MonadTell1)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Monad_Writer_Class_MonadWriter__dollar__Dict'])((object)["listen" => ($GLOBALS['Control_Monad_Reader_Trans_mapReaderT'])(($GLOBALS['Control_Monad_Writer_Class_listen'])($dictMonadWriter)), "pass" => ($GLOBALS['Control_Monad_Reader_Trans_mapReaderT'])(($GLOBALS['Control_Monad_Writer_Class_pass'])($dictMonadWriter)), "Monoid0" => (function() use (&$Monoid0) {
  $__fn = function($__dollar____unused) use (&$Monoid0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $Monoid0;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "MonadTell1" => (function() use ($monadTellReaderT1) {
  $__fn = function($__dollar____unused) use ($monadTellReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadTellReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_monadThrowReaderT
$Control_Monad_Reader_Trans_monadThrowReaderT = (function() {
  $__fn = function($dictMonadThrow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadThrow)->Monad0)($GLOBALS['Prim_undefined']);
$monadReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'])($Monad0);
    $__res = ($GLOBALS['Control_Monad_Error_Class_MonadThrow__dollar__Dict'])((object)["throwError" => ($GLOBALS['Control_Monad_Reader_Trans_compose'])(($GLOBALS['Control_Monad_Reader_Trans_lift'])($Monad0), ($GLOBALS['Control_Monad_Error_Class_throwError'])($dictMonadThrow)), "Monad0" => (function() use ($monadReaderT1) {
  $__fn = function($__dollar____unused) use ($monadReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_monadErrorReaderT
$Control_Monad_Reader_Trans_monadErrorReaderT = (function() {
  $__fn = function($dictMonadError) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$catchError = ($GLOBALS['Control_Monad_Error_Class_catchError'])($dictMonadError);
$monadThrowReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_monadThrowReaderT'])((($dictMonadError)->MonadThrow0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Monad_Error_Class_MonadError__dollar__Dict'])((object)["catchError" => (function() use ($catchError) {
  $__body = function($v, $h) use ($catchError) {
    $__case_0 = $v;
    $__case_1 = $h;
    if (true) {
$m = $__case_0;
$h1 = $__case_1;
return ($GLOBALS['Control_Monad_Reader_Trans_ReaderT'])((function() use ($catchError, $m, $h1) {
  $__fn = function($r) use ($catchError, $m, $h1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($catchError)(($m)($r), (function() use ($h1, $r) {
  $__body = function($e) use ($h1, $r) {
    $v1 = ($h1)($e);
    $__case_0 = $v1;
    if (true) {
$f = $__case_0;
return ($f)($r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($e) use ($h1, $r, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($e);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $h = null) use ($catchError, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $h);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => (function() use ($monadThrowReaderT1) {
  $__fn = function($__dollar____unused) use ($monadThrowReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadThrowReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_monadSTReaderT
$Control_Monad_Reader_Trans_monadSTReaderT = (function() {
  $__fn = function($dictMonadST) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadST)->Monad0)($GLOBALS['Prim_undefined']);
$monadReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'])($Monad0);
    $__res = ($GLOBALS['Control_Monad_ST_Class_MonadST__dollar__Dict'])((object)["liftST" => ($GLOBALS['Control_Monad_Reader_Trans_compose'])(($GLOBALS['Control_Monad_Reader_Trans_lift'])($Monad0), ($GLOBALS['Control_Monad_ST_Class_liftST'])($dictMonadST)), "Monad0" => (function() use ($monadReaderT1) {
  $__fn = function($__dollar____unused) use ($monadReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_monoidReaderT
$Control_Monad_Reader_Trans_monoidReaderT = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure = ($GLOBALS['Control_Applicative_pure'])(($GLOBALS['Control_Monad_Reader_Trans_applicativeReaderT'])($dictApplicative));
$semigroupReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_semigroupReaderT'])((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($semigroupReaderT1, $pure) {
  $__fn = function($dictMonoid) use ($semigroupReaderT1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$semigroupReaderT2 = ($semigroupReaderT1)((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => ($pure)(($GLOBALS['Data_Monoid_mempty'])($dictMonoid)), "Semigroup0" => (function() use ($semigroupReaderT2) {
  $__fn = function($__dollar____unused) use ($semigroupReaderT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $semigroupReaderT2;
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

// Control_Monad_Reader_Trans_altReaderT
$Control_Monad_Reader_Trans_altReaderT = (function() {
  $__fn = function($dictAlt) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$alt = ($GLOBALS['Control_Alt_alt'])($dictAlt);
$functorReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_functorReaderT'])((($dictAlt)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Alt_Alt__dollar__Dict'])((object)["alt" => (function() use ($alt) {
  $__body = function($v, $v1) use ($alt) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m = $__case_0;
$n = $__case_1;
return ($GLOBALS['Control_Monad_Reader_Trans_ReaderT'])((function() use ($alt, $m, $n) {
  $__fn = function($r) use ($alt, $m, $n, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($alt)(($m)($r), ($n)($r));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($alt, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorReaderT1) {
  $__fn = function($__dollar____unused) use ($functorReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_plusReaderT
$Control_Monad_Reader_Trans_plusReaderT = (function() {
  $__fn = function($dictPlus) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$altReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_altReaderT'])((($dictPlus)->Alt0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Plus_Plus__dollar__Dict'])((object)["empty" => ($GLOBALS['Control_Monad_Reader_Trans_ReaderT'])(($GLOBALS['Data_Function_const'])(($GLOBALS['Control_Plus_empty'])($dictPlus))), "Alt0" => (function() use ($altReaderT1) {
  $__fn = function($__dollar____unused) use ($altReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $altReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_alternativeReaderT
$Control_Monad_Reader_Trans_alternativeReaderT = (function() {
  $__fn = function($dictAlternative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applicativeReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_applicativeReaderT'])((($dictAlternative)->Applicative0)($GLOBALS['Prim_undefined']));
$plusReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_plusReaderT'])((($dictAlternative)->Plus1)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Alternative_Alternative__dollar__Dict'])((object)["Applicative0" => (function() use ($applicativeReaderT1) {
  $__fn = function($__dollar____unused) use ($applicativeReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applicativeReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusReaderT1) {
  $__fn = function($__dollar____unused) use ($plusReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $plusReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_monadPlusReaderT
$Control_Monad_Reader_Trans_monadPlusReaderT = (function() {
  $__fn = function($dictMonadPlus) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$monadReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'])((($dictMonadPlus)->Monad0)($GLOBALS['Prim_undefined']));
$alternativeReaderT1 = ($GLOBALS['Control_Monad_Reader_Trans_alternativeReaderT'])((($dictMonadPlus)->Alternative1)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_MonadPlus_MonadPlus__dollar__Dict'])((object)["Monad0" => (function() use ($monadReaderT1) {
  $__fn = function($__dollar____unused) use ($monadReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use ($alternativeReaderT1) {
  $__fn = function($__dollar____unused) use ($alternativeReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $alternativeReaderT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

