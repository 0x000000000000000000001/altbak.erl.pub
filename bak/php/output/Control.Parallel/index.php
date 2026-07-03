<?php

namespace Control\Parallel;

require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Parallel/index.php';
require_once __DIR__ . '/../Control.Parallel.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
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


// Control_Parallel_compose
$Control_Parallel_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Parallel_identity
$Control_Parallel_identity = ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']);

// Control_Parallel_parTraverse_
$Control_Parallel_parTraverse_ = (function() {
  $__fn = function($dictParallel) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sequential = ($GLOBALS['Control_Parallel_Class_sequential'])($dictParallel);
$parallel = ($GLOBALS['Control_Parallel_Class_parallel'])($dictParallel);
    $__res = (function() use ($sequential, $parallel) {
  $__fn = function($dictApplicative) use ($sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverse_ = ($GLOBALS['Data_Foldable_traverse_'])($dictApplicative);
    $__res = (function() use ($traverse_, $sequential, $parallel) {
  $__fn = function($dictFoldable) use ($traverse_, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverse_1 = ($traverse_)($dictFoldable);
    $__res = (function() use ($sequential, $traverse_1, $parallel) {
  $__fn = function($f) use ($sequential, $traverse_1, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Parallel_compose'])($sequential, ($traverse_1)(($GLOBALS['Control_Parallel_compose'])($parallel, $f)));
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

// Control_Parallel_parTraverse
$Control_Parallel_parTraverse = (function() {
  $__fn = function($dictParallel) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sequential = ($GLOBALS['Control_Parallel_Class_sequential'])($dictParallel);
$parallel = ($GLOBALS['Control_Parallel_Class_parallel'])($dictParallel);
    $__res = (function() use ($sequential, $parallel) {
  $__fn = function($dictApplicative, $dictTraversable = null) use ($sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$traverse = ($GLOBALS['Data_Traversable_traverse'])($dictTraversable, $dictApplicative);
    $__res = (function() use ($sequential, $traverse, $parallel) {
  $__fn = function($f) use ($sequential, $traverse, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Parallel_compose'])($sequential, ($traverse)(($GLOBALS['Control_Parallel_compose'])($parallel, $f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Parallel_parSequence_
$Control_Parallel_parSequence_ = (function() {
  $__fn = function($dictParallel) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$parTraverse_1 = ($GLOBALS['Control_Parallel_parTraverse_'])($dictParallel);
    $__res = (function() use ($parTraverse_1) {
  $__fn = function($dictApplicative) use ($parTraverse_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$parTraverse_2 = ($parTraverse_1)($dictApplicative);
    $__res = (function() use ($parTraverse_2) {
  $__fn = function($dictFoldable) use ($parTraverse_2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($parTraverse_2)($dictFoldable, $GLOBALS['Control_Parallel_identity']);
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

// Control_Parallel_parSequence
$Control_Parallel_parSequence = (function() {
  $__fn = function($dictParallel) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$parTraverse1 = ($GLOBALS['Control_Parallel_parTraverse'])($dictParallel);
    $__res = (function() use ($parTraverse1) {
  $__fn = function($dictApplicative) use ($parTraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$parTraverse2 = ($parTraverse1)($dictApplicative);
    $__res = (function() use ($parTraverse2) {
  $__fn = function($dictTraversable) use ($parTraverse2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($parTraverse2)($dictTraversable, $GLOBALS['Control_Parallel_identity']);
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

// Control_Parallel_parOneOfMap
$Control_Parallel_parOneOfMap = (function() {
  $__fn = function($dictParallel) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sequential = ($GLOBALS['Control_Parallel_Class_sequential'])($dictParallel);
$parallel = ($GLOBALS['Control_Parallel_Class_parallel'])($dictParallel);
    $__res = (function() use ($sequential, $parallel) {
  $__fn = function($dictAlternative) use ($sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Plus1 = (($dictAlternative)->Plus1)($GLOBALS['Prim_undefined']);
    $__res = (function() use (&$Plus1, $sequential, $parallel) {
  $__fn = function($dictFoldable) use (&$Plus1, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$oneOfMap = ($GLOBALS['Data_Foldable_oneOfMap'])($dictFoldable, $Plus1);
    $__res = (function() use ($sequential, $oneOfMap, $parallel) {
  $__fn = function($dictFunctor, $f = null) use ($sequential, $oneOfMap, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Control_Parallel_compose'])($sequential, ($oneOfMap)(($GLOBALS['Control_Parallel_compose'])($parallel, $f)));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Parallel_parOneOf
$Control_Parallel_parOneOf = (function() {
  $__fn = function($dictParallel) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sequential = ($GLOBALS['Control_Parallel_Class_sequential'])($dictParallel);
$parallel = ($GLOBALS['Control_Parallel_Class_parallel'])($dictParallel);
    $__res = (function() use ($sequential, $parallel) {
  $__fn = function($dictAlternative) use ($sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Plus1 = (($dictAlternative)->Plus1)($GLOBALS['Prim_undefined']);
    $__res = (function() use (&$Plus1, $sequential, $parallel) {
  $__fn = function($dictFoldable) use (&$Plus1, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$oneOfMap = ($GLOBALS['Data_Foldable_oneOfMap'])($dictFoldable, $Plus1);
    $__res = (function() use ($sequential, $oneOfMap, $parallel) {
  $__fn = function($dictFunctor) use ($sequential, $oneOfMap, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Parallel_compose'])($sequential, ($oneOfMap)($parallel));
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

// Control_Parallel_parApply
$Control_Parallel_parApply = (function() {
  $__fn = function($dictParallel) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sequential = ($GLOBALS['Control_Parallel_Class_sequential'])($dictParallel);
$apply = ($GLOBALS['Control_Apply_apply'])((($dictParallel)->Apply1)($GLOBALS['Prim_undefined']));
$parallel = ($GLOBALS['Control_Parallel_Class_parallel'])($dictParallel);
    $__res = (function() use ($sequential, $apply, $parallel) {
  $__fn = function($mf, $ma = null) use ($sequential, $apply, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($sequential)(($apply)(($parallel)($mf), ($parallel)($ma)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

