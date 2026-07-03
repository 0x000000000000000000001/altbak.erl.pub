<?php

namespace Data\Profunctor\Choice;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Choice/index.php';
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


// Data_Profunctor_Choice_identity
$Data_Profunctor_Choice_identity = ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']);

// Data_Profunctor_Choice_Choice$Dict
$Data_Profunctor_Choice_Choice__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Choice_right
$Data_Profunctor_Choice_right = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->right;
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

// Data_Profunctor_Choice_left
$Data_Profunctor_Choice_left = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->left;
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

// Data_Profunctor_Choice_splitChoice
$Data_Profunctor_Choice_splitChoice = (function() {
  $__fn = function($dictSemigroupoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$composeFlipped = ($GLOBALS['Control_Semigroupoid_composeFlipped'])($dictSemigroupoid);
    $__res = (function() use ($composeFlipped) {
  $__fn = function($dictChoice) use ($composeFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$left1 = ($GLOBALS['Data_Profunctor_Choice_left'])($dictChoice);
$right1 = ($GLOBALS['Data_Profunctor_Choice_right'])($dictChoice);
    $__res = (function() use ($composeFlipped, $left1, $right1) {
  $__fn = function($l, $r = null) use ($composeFlipped, $left1, $right1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($composeFlipped)(($left1)($l), ($right1)($r));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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

// Data_Profunctor_Choice_fanin
$Data_Profunctor_Choice_fanin = (function() {
  $__fn = function($dictSemigroupoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$splitChoice1 = ($GLOBALS['Data_Profunctor_Choice_splitChoice'])($dictSemigroupoid);
    $__res = (function() use ($splitChoice1) {
  $__fn = function($dictChoice) use ($splitChoice1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$rmap = ($GLOBALS['Data_Profunctor_rmap'])((($dictChoice)->Profunctor0)($GLOBALS['Prim_undefined']));
$splitChoice2 = ($splitChoice1)($dictChoice);
    $__res = (function() use ($rmap, $splitChoice2) {
  $__fn = function($l, $r = null) use ($rmap, $splitChoice2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($rmap)(($GLOBALS['Data_Either_either'])($GLOBALS['Data_Profunctor_Choice_identity'], $GLOBALS['Data_Profunctor_Choice_identity']), ($splitChoice2)($l, $r));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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

// Data_Profunctor_Choice_choiceFn
$Data_Profunctor_Choice_choiceFn = ($GLOBALS['Data_Profunctor_Choice_Choice__dollar__Dict'])((object)["left" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Left")) {
$a2b = $__case_0;
$a = ($__case_1)->values[0];
return ($GLOBALS['Data_Either_Left'])(($a2b)($a));
} else {
if ((($__case_1)->tag === "Right")) {
$c = ($__case_1)->values[0];
return ($GLOBALS['Data_Either_Right'])($c);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "right" => ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Either_functorEither']), "Profunctor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Profunctor_profunctorFn'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

