<?php

namespace Test\AstTree;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.AstTree/index.php';

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


// Test_AstTree_add
$Test_AstTree_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Test_AstTree_mul
$Test_AstTree_mul = ($GLOBALS['Data_Semiring_mul'])($GLOBALS['Data_Semiring_semiringInt']);

// Test_AstTree_sub
$Test_AstTree_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Test_AstTree_Val
$Test_AstTree_Val = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = (object)["tag" => "Val", "values" => [$value0]];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Test_AstTree_Add
$Test_AstTree_Add = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "Add", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Test_AstTree_Mul
$Test_AstTree_Mul = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "Mul", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Test_AstTree_Sub
$Test_AstTree_Sub = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "Sub", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Test_AstTree_eval
$Test_AstTree_eval = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Val")) {
$n = ($__case_0)->values[0];
return $n;
} else {
if ((($__case_0)->tag === "Add")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($GLOBALS['Test_AstTree_add'])(($GLOBALS['Test_AstTree_eval'])($a), ($GLOBALS['Test_AstTree_eval'])($b));
} else {
if ((($__case_0)->tag === "Mul")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($GLOBALS['Test_AstTree_mul'])(($GLOBALS['Test_AstTree_eval'])($a), ($GLOBALS['Test_AstTree_eval'])($b));
} else {
if ((($__case_0)->tag === "Sub")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($GLOBALS['Test_AstTree_sub'])(($GLOBALS['Test_AstTree_eval'])($a), ($GLOBALS['Test_AstTree_eval'])($b));
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Test_AstTree_describe
$Test_AstTree_describe = ($GLOBALS['Effect_Console_log'])("AST Evaluation:");

// Test_AstTree_buildTree
$Test_AstTree_buildTree = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if (($__case_0 === 0)) {
return ($GLOBALS['Test_AstTree_Val'])(1);
} else {
if (true) {
$n = $__case_0;
return ($GLOBALS['Test_AstTree_Add'])(($GLOBALS['Test_AstTree_Mul'])(($GLOBALS['Test_AstTree_Val'])($n), ($GLOBALS['Test_AstTree_buildTree'])(($GLOBALS['Test_AstTree_sub'])($n, 1))), ($GLOBALS['Test_AstTree_Sub'])(($GLOBALS['Test_AstTree_buildTree'])(($GLOBALS['Test_AstTree_sub'])($n, 1)), ($GLOBALS['Test_AstTree_Val'])(1)));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Test_AstTree_act
$Test_AstTree_act = ($GLOBALS['Effect_Console_logShow'])($GLOBALS['Data_Show_showInt'], ($GLOBALS['Test_AstTree_eval'])(($GLOBALS['Test_AstTree_buildTree'])(3)));

