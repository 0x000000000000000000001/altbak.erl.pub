<?php

namespace Data\Functor\Flip;

require_once __DIR__ . '/../Control.Biapplicative/index.php';
require_once __DIR__ . '/../Control.Biapply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Contravariant/index.php';
require_once __DIR__ . '/../Data.Functor.Flip/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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


// Data_Functor_Flip_append
$Data_Functor_Flip_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_Functor_Flip_Flip
$Data_Functor_Flip_Flip = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Flip_showFlip
$Data_Functor_Flip_showFlip = (function() {
  $__fn = function($dictShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show = ($GLOBALS['Data_Show_show'])($dictShow);
    $__res = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($GLOBALS['Data_Functor_Flip_append'])("(Flip ", ($GLOBALS['Data_Functor_Flip_append'])(($show)($x), ")"));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($show, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Flip_semigroupoidFlip
$Data_Functor_Flip_semigroupoidFlip = (function() {
  $__fn = function($dictSemigroupoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compose = ($GLOBALS['Control_Semigroupoid_compose'])($dictSemigroupoid);
    $__res = ($GLOBALS['Control_Semigroupoid_Semigroupoid__dollar__Dict'])((object)["compose" => (function() use ($compose) {
  $__body = function($v, $v1) use ($compose) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($GLOBALS['Data_Functor_Flip_Flip'])(($compose)($b, $a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($compose, $__body, &$__fn) {
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

// Data_Functor_Flip_ordFlip
$Data_Functor_Flip_ordFlip = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $dictOrd;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Flip_newtypeFlip
$Data_Functor_Flip_newtypeFlip = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Functor_Flip_functorFlip
$Data_Functor_Flip_functorFlip = (function() {
  $__fn = function($dictBifunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$lmap = ($GLOBALS['Data_Bifunctor_lmap'])($dictBifunctor);
    $__res = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() use ($lmap) {
  $__body = function($f, $v) use ($lmap) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$a = $__case_1;
return ($GLOBALS['Data_Functor_Flip_Flip'])(($lmap)($f1, $a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($lmap, $__body, &$__fn) {
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

// Data_Functor_Flip_eqFlip
$Data_Functor_Flip_eqFlip = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $dictEq;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Flip_contravariantFlip
$Data_Functor_Flip_contravariantFlip = (function() {
  $__fn = function($dictProfunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$lcmap = ($GLOBALS['Data_Profunctor_lcmap'])($dictProfunctor);
    $__res = ($GLOBALS['Data_Functor_Contravariant_Contravariant__dollar__Dict'])((object)["cmap" => (function() use ($lcmap) {
  $__body = function($f, $v) use ($lcmap) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$a = $__case_1;
return ($GLOBALS['Data_Functor_Flip_Flip'])(($lcmap)($f1, $a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($lcmap, $__body, &$__fn) {
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

// Data_Functor_Flip_categoryFlip
$Data_Functor_Flip_categoryFlip = (function() {
  $__fn = function($dictCategory) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$semigroupoidFlip1 = ($GLOBALS['Data_Functor_Flip_semigroupoidFlip'])((($dictCategory)->Semigroupoid0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Category_Category__dollar__Dict'])((object)["identity" => ($GLOBALS['Data_Functor_Flip_Flip'])(($GLOBALS['Control_Category_identity'])($dictCategory)), "Semigroupoid0" => (function() use ($semigroupoidFlip1) {
  $__fn = function($__dollar____unused) use ($semigroupoidFlip1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $semigroupoidFlip1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Flip_bifunctorFlip
$Data_Functor_Flip_bifunctorFlip = (function() {
  $__fn = function($dictBifunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bimap = ($GLOBALS['Data_Bifunctor_bimap'])($dictBifunctor);
    $__res = ($GLOBALS['Data_Bifunctor_Bifunctor__dollar__Dict'])((object)["bimap" => (function() use ($bimap) {
  $__body = function($f, $g, $v) use ($bimap) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$a = $__case_2;
return ($GLOBALS['Data_Functor_Flip_Flip'])(($bimap)($g1, $f1, $a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $g = null, $v = null) use ($bimap, $__body, &$__fn) {
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

// Data_Functor_Flip_biapplyFlip
$Data_Functor_Flip_biapplyFlip = (function() {
  $__fn = function($dictBiapply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$biapply = ($GLOBALS['Control_Biapply_biapply'])($dictBiapply);
$bifunctorFlip1 = ($GLOBALS['Data_Functor_Flip_bifunctorFlip'])((($dictBiapply)->Bifunctor0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Biapply_Biapply__dollar__Dict'])((object)["biapply" => (function() use ($biapply) {
  $__body = function($v, $v1) use ($biapply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$fg = $__case_0;
$xy = $__case_1;
return ($GLOBALS['Data_Functor_Flip_Flip'])(($biapply)($fg, $xy));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($biapply, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() use ($bifunctorFlip1) {
  $__fn = function($__dollar____unused) use ($bifunctorFlip1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $bifunctorFlip1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Flip_biapplicativeFlip
$Data_Functor_Flip_biapplicativeFlip = (function() {
  $__fn = function($dictBiapplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bipure = ($GLOBALS['Control_Biapplicative_bipure'])($dictBiapplicative);
$biapplyFlip1 = ($GLOBALS['Data_Functor_Flip_biapplyFlip'])((($dictBiapplicative)->Biapply0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Biapplicative_Biapplicative__dollar__Dict'])((object)["bipure" => (function() use ($bipure) {
  $__fn = function($a, $b = null) use ($bipure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Functor_Flip_Flip'])(($bipure)($b, $a));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Biapply0" => (function() use ($biapplyFlip1) {
  $__fn = function($__dollar____unused) use ($biapplyFlip1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $biapplyFlip1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

