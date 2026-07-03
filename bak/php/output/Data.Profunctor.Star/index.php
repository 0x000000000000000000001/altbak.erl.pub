<?php

namespace Data\Profunctor\Star;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Distributive/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Choice/index.php';
require_once __DIR__ . '/../Data.Profunctor.Closed/index.php';
require_once __DIR__ . '/../Data.Profunctor.Star/index.php';
require_once __DIR__ . '/../Data.Profunctor.Strong/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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


// Data_Profunctor_Star_composeFlipped
$Data_Profunctor_Star_composeFlipped = ($GLOBALS['Control_Semigroupoid_composeFlipped'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Profunctor_Star_compose
$Data_Profunctor_Star_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Profunctor_Star_Star
$Data_Profunctor_Star_Star = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Star_semigroupoidStar
$Data_Profunctor_Star_semigroupoidStar = (function() {
  $__fn = function($dictBind) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind = ($GLOBALS['Control_Bind_bind'])($dictBind);
    $__res = ($GLOBALS['Control_Semigroupoid_Semigroupoid__dollar__Dict'])((object)["compose" => (function() use ($bind) {
  $__body = function($v, $v1) use ($bind) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$g = $__case_1;
return ($GLOBALS['Data_Profunctor_Star_Star'])((function() use ($bind, $g, $f) {
  $__fn = function($x) use ($bind, $g, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind)(($g)($x), $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Star_profunctorStar
$Data_Profunctor_Star_profunctorStar = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = ($GLOBALS['Data_Profunctor_Profunctor__dollar__Dict'])((object)["dimap" => (function() use ($map) {
  $__body = function($f, $g, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$ft = $__case_2;
return ($GLOBALS['Data_Profunctor_Star_Star'])(($GLOBALS['Data_Profunctor_Star_composeFlipped'])($f1, ($GLOBALS['Data_Profunctor_Star_composeFlipped'])($ft, ($map)($g1))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $g = null, $v = null) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $g, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Star_strongStar
$Data_Profunctor_Star_strongStar = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map = ($GLOBALS['Data_Functor_map'])($dictFunctor);
$profunctorStar1 = ($GLOBALS['Data_Profunctor_Star_profunctorStar'])($dictFunctor);
    $__res = ($GLOBALS['Data_Profunctor_Strong_Strong__dollar__Dict'])((object)["first" => (function() use ($map) {
  $__body = function($v) use ($map) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($GLOBALS['Data_Profunctor_Star_Star'])((function() use ($map, $f) {
  $__body = function($v1) use ($map, $f) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$s = ($__case_0)->values[0];
$x = ($__case_0)->values[1];
return ($map)((function() use ($x) {
  $__fn = function($v2) use ($x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])($v2, $x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($f)($s));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v1) use ($map, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "second" => (function() use ($map) {
  $__body = function($v) use ($map) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($GLOBALS['Data_Profunctor_Star_Star'])((function() use ($map, $f) {
  $__body = function($v1) use ($map, $f) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$x = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
return ($map)(($GLOBALS['Data_Tuple_Tuple'])($x), ($f)($s));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v1) use ($map, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Profunctor0" => (function() use ($profunctorStar1) {
  $__fn = function($__dollar____unused) use ($profunctorStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $profunctorStar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Star_newtypeStar
$Data_Profunctor_Star_newtypeStar = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Profunctor_Star_invariantStar
$Data_Profunctor_Star_invariantStar = (function() {
  $__fn = function($dictInvariant) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$imap = ($GLOBALS['Data_Functor_Invariant_imap'])($dictInvariant);
    $__res = ($GLOBALS['Data_Functor_Invariant_Invariant__dollar__Dict'])((object)["imap" => (function() use ($imap) {
  $__body = function($f, $g, $v) use ($imap) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$h = $__case_2;
return ($GLOBALS['Data_Profunctor_Star_Star'])(($GLOBALS['Data_Profunctor_Star_compose'])(($imap)($f1, $g1), $h));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $g = null, $v = null) use ($imap, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $g, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Star_hoistStar
$Data_Profunctor_Star_hoistStar = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
return ($GLOBALS['Data_Profunctor_Star_Star'])(($GLOBALS['Data_Profunctor_Star_compose'])($f1, $g));
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

// Data_Profunctor_Star_functorStar
$Data_Profunctor_Star_functorStar = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
return ($GLOBALS['Data_Profunctor_Star_Star'])(($GLOBALS['Data_Profunctor_Star_compose'])(($map)($f1), $g));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Star_distributiveStar
$Data_Profunctor_Star_distributiveStar = (function() {
  $__fn = function($dictDistributive) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$collect = ($GLOBALS['Data_Distributive_collect'])($dictDistributive);
$functorStar1 = ($GLOBALS['Data_Profunctor_Star_functorStar'])((($dictDistributive)->Functor0)($GLOBALS['Prim_undefined']));
return ($GLOBALS['Data_Distributive_Distributive__dollar__Dict'])((object)["distribute" => (function() use ($collect) {
  $__fn = function($dictFunctor) use ($collect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$collect1 = ($collect)($dictFunctor);
    $__res = (function() use ($collect1) {
  $__fn = function($f) use ($collect1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Profunctor_Star_Star'])((function() use ($collect1, $f) {
  $__fn = function($a) use ($collect1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($collect1)((function() use ($a) {
  $__body = function($v) use ($a) {
    $__case_0 = $v;
    if (true) {
$g = $__case_0;
return ($g)($a);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($a, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $f);
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
    $__res = ($GLOBALS['Data_Profunctor_Star_compose'])(($GLOBALS['Data_Distributive_distribute'])(($GLOBALS['Data_Profunctor_Star_distributiveStar'])($dictDistributive), $dictFunctor), ($map)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorStar1) {
  $__fn = function($__dollar____unused) use ($functorStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorStar1;
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

// Data_Profunctor_Star_closedStar
$Data_Profunctor_Star_closedStar = (function() {
  $__fn = function($dictDistributive) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$distribute = ($GLOBALS['Data_Distributive_distribute'])($dictDistributive, $GLOBALS['Data_Functor_functorFn']);
$profunctorStar1 = ($GLOBALS['Data_Profunctor_Star_profunctorStar'])((($dictDistributive)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Profunctor_Closed_Closed__dollar__Dict'])((object)["closed" => (function() use ($distribute) {
  $__body = function($v) use ($distribute) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($GLOBALS['Data_Profunctor_Star_Star'])((function() use ($distribute, $f) {
  $__fn = function($g) use ($distribute, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($distribute)(($GLOBALS['Data_Profunctor_Star_compose'])($f, $g));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($distribute, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Profunctor0" => (function() use ($profunctorStar1) {
  $__fn = function($__dollar____unused) use ($profunctorStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $profunctorStar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Star_choiceStar
$Data_Profunctor_Star_choiceStar = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Functor0 = (((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']);
$map = ($GLOBALS['Data_Functor_map'])($Functor0);
$pure = ($GLOBALS['Control_Applicative_pure'])($dictApplicative);
$profunctorStar1 = ($GLOBALS['Data_Profunctor_Star_profunctorStar'])($Functor0);
    $__res = ($GLOBALS['Data_Profunctor_Choice_Choice__dollar__Dict'])((object)["left" => (function() use ($map, $pure) {
  $__body = function($v) use ($map, $pure) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($GLOBALS['Data_Profunctor_Star_Star'])(($GLOBALS['Data_Either_either'])(($GLOBALS['Data_Profunctor_Star_compose'])(($map)($GLOBALS['Data_Either_Left']), $f), ($GLOBALS['Data_Profunctor_Star_compose'])($pure, $GLOBALS['Data_Either_Right'])));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "right" => (function() use ($pure, $map) {
  $__body = function($v) use ($pure, $map) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($GLOBALS['Data_Profunctor_Star_Star'])(($GLOBALS['Data_Either_either'])(($GLOBALS['Data_Profunctor_Star_compose'])($pure, $GLOBALS['Data_Either_Left']), ($GLOBALS['Data_Profunctor_Star_compose'])(($map)($GLOBALS['Data_Either_Right']), $f)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure, $map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Profunctor0" => (function() use ($profunctorStar1) {
  $__fn = function($__dollar____unused) use ($profunctorStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $profunctorStar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Star_categoryStar
$Data_Profunctor_Star_categoryStar = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$semigroupoidStar1 = ($GLOBALS['Data_Profunctor_Star_semigroupoidStar'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Category_Category__dollar__Dict'])((object)["identity" => ($GLOBALS['Data_Profunctor_Star_Star'])(($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']))), "Semigroupoid0" => (function() use ($semigroupoidStar1) {
  $__fn = function($__dollar____unused) use ($semigroupoidStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $semigroupoidStar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Star_applyStar
$Data_Profunctor_Star_applyStar = (function() {
  $__fn = function($dictApply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$apply = ($GLOBALS['Control_Apply_apply'])($dictApply);
$functorStar1 = ($GLOBALS['Data_Profunctor_Star_functorStar'])((($dictApply)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => (function() use ($apply) {
  $__body = function($v, $v1) use ($apply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$g = $__case_1;
return ($GLOBALS['Data_Profunctor_Star_Star'])((function() use ($apply, $f, $g) {
  $__fn = function($a) use ($apply, $f, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($apply)(($f)($a), ($g)($a));
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
})(), "Functor0" => (function() use ($functorStar1) {
  $__fn = function($__dollar____unused) use ($functorStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorStar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Star_bindStar
$Data_Profunctor_Star_bindStar = (function() {
  $__fn = function($dictBind) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind = ($GLOBALS['Control_Bind_bind'])($dictBind);
$applyStar1 = ($GLOBALS['Data_Profunctor_Star_applyStar'])((($dictBind)->Apply0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Bind_Bind__dollar__Dict'])((object)["bind" => (function() use ($bind) {
  $__body = function($v, $f) use ($bind) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return ($GLOBALS['Data_Profunctor_Star_Star'])((function() use ($bind, $m, $f1) {
  $__fn = function($x) use ($bind, $m, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind)(($m)($x), (function() use ($f1, $x) {
  $__body = function($a) use ($f1, $x) {
    $v1 = ($f1)($a);
    $__case_0 = $v1;
    if (true) {
$g = $__case_0;
return ($g)($x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a) use ($f1, $x, $__body, &$__fn) {
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
  $__fn = function($v, $f = null) use ($bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyStar1) {
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

// Data_Profunctor_Star_applicativeStar
$Data_Profunctor_Star_applicativeStar = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure = ($GLOBALS['Control_Applicative_pure'])($dictApplicative);
$applyStar1 = ($GLOBALS['Data_Profunctor_Star_applyStar'])((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Applicative_Applicative__dollar__Dict'])((object)["pure" => (function() use ($pure) {
  $__fn = function($a) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Profunctor_Star_Star'])((function() use ($pure, $a) {
  $__fn = function($v) use ($pure, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($pure)($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyStar1) {
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

// Data_Profunctor_Star_monadStar
$Data_Profunctor_Star_monadStar = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applicativeStar1 = ($GLOBALS['Data_Profunctor_Star_applicativeStar'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$bindStar1 = ($GLOBALS['Data_Profunctor_Star_bindStar'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Monad_Monad__dollar__Dict'])((object)["Applicative0" => (function() use ($applicativeStar1) {
  $__fn = function($__dollar____unused) use ($applicativeStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applicativeStar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindStar1) {
  $__fn = function($__dollar____unused) use ($bindStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $bindStar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Star_altStar
$Data_Profunctor_Star_altStar = (function() {
  $__fn = function($dictAlt) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$alt = ($GLOBALS['Control_Alt_alt'])($dictAlt);
$functorStar1 = ($GLOBALS['Data_Profunctor_Star_functorStar'])((($dictAlt)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Alt_Alt__dollar__Dict'])((object)["alt" => (function() use ($alt) {
  $__body = function($v, $v1) use ($alt) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$g = $__case_1;
return ($GLOBALS['Data_Profunctor_Star_Star'])((function() use ($alt, $f, $g) {
  $__fn = function($a) use ($alt, $f, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($alt)(($f)($a), ($g)($a));
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
})(), "Functor0" => (function() use ($functorStar1) {
  $__fn = function($__dollar____unused) use ($functorStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorStar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Star_plusStar
$Data_Profunctor_Star_plusStar = (function() {
  $__fn = function($dictPlus) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$empty = ($GLOBALS['Control_Plus_empty'])($dictPlus);
$altStar1 = ($GLOBALS['Data_Profunctor_Star_altStar'])((($dictPlus)->Alt0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Plus_Plus__dollar__Dict'])((object)["empty" => ($GLOBALS['Data_Profunctor_Star_Star'])((function() use ($empty) {
  $__fn = function($v) use ($empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $empty;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "Alt0" => (function() use ($altStar1) {
  $__fn = function($__dollar____unused) use ($altStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $altStar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Star_alternativeStar
$Data_Profunctor_Star_alternativeStar = (function() {
  $__fn = function($dictAlternative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applicativeStar1 = ($GLOBALS['Data_Profunctor_Star_applicativeStar'])((($dictAlternative)->Applicative0)($GLOBALS['Prim_undefined']));
$plusStar1 = ($GLOBALS['Data_Profunctor_Star_plusStar'])((($dictAlternative)->Plus1)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Alternative_Alternative__dollar__Dict'])((object)["Applicative0" => (function() use ($applicativeStar1) {
  $__fn = function($__dollar____unused) use ($applicativeStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applicativeStar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusStar1) {
  $__fn = function($__dollar____unused) use ($plusStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $plusStar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Star_monadPlusStar
$Data_Profunctor_Star_monadPlusStar = (function() {
  $__fn = function($dictMonadPlus) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$monadStar1 = ($GLOBALS['Data_Profunctor_Star_monadStar'])((($dictMonadPlus)->Monad0)($GLOBALS['Prim_undefined']));
$alternativeStar1 = ($GLOBALS['Data_Profunctor_Star_alternativeStar'])((($dictMonadPlus)->Alternative1)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_MonadPlus_MonadPlus__dollar__Dict'])((object)["Monad0" => (function() use ($monadStar1) {
  $__fn = function($__dollar____unused) use ($monadStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadStar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use ($alternativeStar1) {
  $__fn = function($__dollar____unused) use ($alternativeStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $alternativeStar1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

