<?php

namespace Control\Monad\Gen\Common;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Common/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
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


// Control_Monad_Gen_Common_compose
$Control_Monad_Gen_Common_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Monad_Gen_Common_max
$Control_Monad_Gen_Common_max = ($GLOBALS['Data_Ord_max'])($GLOBALS['Data_Ord_ordInt']);

// Control_Monad_Gen_Common_sub
$Control_Monad_Gen_Common_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Control_Monad_Gen_Common_lessThan
$Control_Monad_Gen_Common_lessThan = ($GLOBALS['Data_Ord_lessThan'])($GLOBALS['Data_Ord_ordNumber']);

// Control_Monad_Gen_Common_genTuple
$Control_Monad_Gen_Common_genTuple = (function() {
  $__fn = function($dictApply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Apply_lift2'])($dictApply, $GLOBALS['Data_Tuple_Tuple']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_Common_genNonEmpty
$Control_Monad_Gen_Common_genNonEmpty = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$unfoldable = ($GLOBALS['Control_Monad_Gen_unfoldable'])($dictMonadRec);
    $__res = (function() use ($unfoldable) {
  $__fn = function($dictMonadGen) use ($unfoldable, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Apply0 = (((((($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']);
$apply = ($GLOBALS['Control_Apply_apply'])($Apply0);
$map = ($GLOBALS['Data_Functor_map'])((($Apply0)->Functor0)($GLOBALS['Prim_undefined']));
$resize = ($GLOBALS['Control_Monad_Gen_Class_resize'])($dictMonadGen);
$unfoldable1 = ($unfoldable)($dictMonadGen);
    $__res = (function() use ($unfoldable1, $apply, $map, $resize) {
  $__fn = function($dictUnfoldable) use ($unfoldable1, $apply, $map, $resize, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$unfoldable2 = ($unfoldable1)($dictUnfoldable);
    $__res = (function() use ($apply, $map, $resize, $unfoldable2) {
  $__fn = function($gen) use ($apply, $map, $resize, $unfoldable2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($apply)(($map)($GLOBALS['Data_NonEmpty_NonEmpty'], $gen), ($resize)(($GLOBALS['Control_Monad_Gen_Common_compose'])(($GLOBALS['Control_Monad_Gen_Common_max'])(0), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Gen_Common_sub'])($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($unfoldable2)($gen)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_Common_genMaybe'
$Control_Monad_Gen_Common_genMaybe__prime__ = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']);
$Bind1 = (($Monad0)->Bind1)($GLOBALS['Prim_undefined']);
$bind = ($GLOBALS['Control_Bind_bind'])($Bind1);
$chooseFloat = ($GLOBALS['Control_Monad_Gen_Class_chooseFloat'])($dictMonadGen);
$map = ($GLOBALS['Data_Functor_map'])((((($Bind1)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])((($Monad0)->Applicative0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($bind, $chooseFloat, $map, $pure) {
  $__fn = function($bias, $gen = null) use ($bind, $chooseFloat, $map, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($bind)(($chooseFloat)(0.0, 1.0), (function() use ($bias, $map, $gen, $pure) {
  $__body = function($n) use ($bias, $map, $gen, $pure) {
    $__case_0 = ($GLOBALS['Control_Monad_Gen_Common_lessThan'])($n, $bias);
    if (($__case_0 === true)) {
return ($map)($GLOBALS['Data_Maybe_Just'], $gen);
} else {
if (true) {
return ($pure)($GLOBALS['Data_Maybe_Nothing']);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($n) use ($bias, $map, $gen, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_Common_genMaybe
$Control_Monad_Gen_Common_genMaybe = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Gen_Common_genMaybe__prime__'])($dictMonadGen, 0.75);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_Common_genIdentity
$Control_Monad_Gen_Common_genIdentity = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_map'])($dictFunctor, $GLOBALS['Data_Identity_Identity']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_Common_genEither'
$Control_Monad_Gen_Common_genEither__prime__ = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Bind1 = (((($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']);
$bind = ($GLOBALS['Control_Bind_bind'])($Bind1);
$chooseFloat = ($GLOBALS['Control_Monad_Gen_Class_chooseFloat'])($dictMonadGen);
$map = ($GLOBALS['Data_Functor_map'])((((($Bind1)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($bind, $chooseFloat, $map) {
  $__fn = function($bias, $genA = null, $genB = null) use ($bind, $chooseFloat, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($bind)(($chooseFloat)(0.0, 1.0), (function() use ($bias, $map, $genA, $genB) {
  $__body = function($n) use ($bias, $map, $genA, $genB) {
    $__case_0 = ($GLOBALS['Control_Monad_Gen_Common_lessThan'])($n, $bias);
    if (($__case_0 === true)) {
return ($map)($GLOBALS['Data_Either_Left'], $genA);
} else {
if (true) {
return ($map)($GLOBALS['Data_Either_Right'], $genB);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($n) use ($bias, $map, $genA, $genB, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_Common_genEither
$Control_Monad_Gen_Common_genEither = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Gen_Common_genEither__prime__'])($dictMonadGen, 0.5);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

