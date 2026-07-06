<?php

namespace Data\Functor\Product\Nested;

require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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

      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Functor_Product_Nested_product9
function Data_Functor_Product_Nested_product9($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_product9';
  if ($__num < 9) {
    return phpurs_curry_fallback($__fn, func_get_args(), 9);
  }
  $__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_Functor_Product_product)($a, ($__global_Data_Functor_Product_product)($b, ($__global_Data_Functor_Product_product)($c, ($__global_Data_Functor_Product_product)($d, ($__global_Data_Functor_Product_product)($e, ($__global_Data_Functor_Product_product)($f, ($__global_Data_Functor_Product_product)($g, ($__global_Data_Functor_Product_product)($h, ($__global_Data_Functor_Product_product)($i, $__global_Data_Unit_unit)))))))));
  goto __end;;
  __end:
  return 9 < $__num ? $__res(...array_slice(func_get_args(), 9)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_product9'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_product9';

// Data_Functor_Product_Nested_product8
function Data_Functor_Product_Nested_product8($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_product8';
  if ($__num < 8) {
    return phpurs_curry_fallback($__fn, func_get_args(), 8);
  }
  $__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_Functor_Product_product)($a, ($__global_Data_Functor_Product_product)($b, ($__global_Data_Functor_Product_product)($c, ($__global_Data_Functor_Product_product)($d, ($__global_Data_Functor_Product_product)($e, ($__global_Data_Functor_Product_product)($f, ($__global_Data_Functor_Product_product)($g, ($__global_Data_Functor_Product_product)($h, $__global_Data_Unit_unit))))))));
  goto __end;;
  __end:
  return 8 < $__num ? $__res(...array_slice(func_get_args(), 8)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_product8'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_product8';

// Data_Functor_Product_Nested_product7
function Data_Functor_Product_Nested_product7($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_product7';
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, func_get_args(), 7);
  }
  $__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_Functor_Product_product)($a, ($__global_Data_Functor_Product_product)($b, ($__global_Data_Functor_Product_product)($c, ($__global_Data_Functor_Product_product)($d, ($__global_Data_Functor_Product_product)($e, ($__global_Data_Functor_Product_product)($f, ($__global_Data_Functor_Product_product)($g, $__global_Data_Unit_unit)))))));
  goto __end;;
  __end:
  return 7 < $__num ? $__res(...array_slice(func_get_args(), 7)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_product7'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_product7';

// Data_Functor_Product_Nested_product6
function Data_Functor_Product_Nested_product6($a, $b = null, $c = null, $d = null, $e = null, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_product6';
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
  $__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_Functor_Product_product)($a, ($__global_Data_Functor_Product_product)($b, ($__global_Data_Functor_Product_product)($c, ($__global_Data_Functor_Product_product)($d, ($__global_Data_Functor_Product_product)($e, ($__global_Data_Functor_Product_product)($f, $__global_Data_Unit_unit))))));
  goto __end;;
  __end:
  return 6 < $__num ? $__res(...array_slice(func_get_args(), 6)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_product6'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_product6';

// Data_Functor_Product_Nested_product5
function Data_Functor_Product_Nested_product5($a, $b = null, $c = null, $d = null, $e = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_product5';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
  $__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_Functor_Product_product)($a, ($__global_Data_Functor_Product_product)($b, ($__global_Data_Functor_Product_product)($c, ($__global_Data_Functor_Product_product)($d, ($__global_Data_Functor_Product_product)($e, $__global_Data_Unit_unit)))));
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...array_slice(func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_product5'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_product5';

// Data_Functor_Product_Nested_product4
function Data_Functor_Product_Nested_product4($a, $b = null, $c = null, $d = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_product4';
  if ($__num < 4) {
    if ($__num === 3) return function($d) use ($a, $b, $c, $__fn) { return $__fn($a, $b, $c, $d); };
    if ($__num === 2) return function($c, $d = null) use ($a, $b, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $b, $c, $d);
      if ($__num2 === 1) return function($d) use ($a, $b, $c, $__fn) { return $__fn($a, $b, $c, $d); };
      return phpurs_curry_fallback($__fn, [$a, $b], 4);
    };
    if ($__num === 1) return function($b, $c = null, $d = null) use ($a, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($a, $b, $c, $d);
      if ($__num2 === 2) return function($d) use ($a, $b, $c, $__fn) { return $__fn($a, $b, $c, $d); };
      if ($__num2 === 1) return function($c, $d = null) use ($a, $b, $__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($a, $b, $c, $d);
        if ($__num3 === 1) return function($d) use ($a, $b, $c, $__fn) { return $__fn($a, $b, $c, $d); };
        return phpurs_curry_fallback($__fn, [$a, $b], 4);
      };
      return phpurs_curry_fallback($__fn, [$a], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_Functor_Product_product)($a, ($__global_Data_Functor_Product_product)($b, ($__global_Data_Functor_Product_product)($c, ($__global_Data_Functor_Product_product)($d, $__global_Data_Unit_unit))));
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_product4'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_product4';

// Data_Functor_Product_Nested_product3
function Data_Functor_Product_Nested_product3($a, $b = null, $c = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_product3';
  if ($__num < 3) {
    if ($__num === 2) return function($c) use ($a, $b, $__fn) { return $__fn($a, $b, $c); };
    if ($__num === 1) return function($b, $c = null) use ($a, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $b, $c);
      if ($__num2 === 1) return function($c) use ($a, $b, $__fn) { return $__fn($a, $b, $c); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_Functor_Product_product)($a, ($__global_Data_Functor_Product_product)($b, ($__global_Data_Functor_Product_product)($c, $__global_Data_Unit_unit)));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_product3'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_product3';

// Data_Functor_Product_Nested_product2
function Data_Functor_Product_Nested_product2($a, $b = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_product2';
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, $__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_Functor_Product_product)($a, ($__global_Data_Functor_Product_product)($b, $__global_Data_Unit_unit));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_product2'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_product2';

// Data_Functor_Product_Nested_product10
function Data_Functor_Product_Nested_product10($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_product10';
  if ($__num < 10) {
    return phpurs_curry_fallback($__fn, func_get_args(), 10);
  }
  $__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_Functor_Product_product)($a, ($__global_Data_Functor_Product_product)($b, ($__global_Data_Functor_Product_product)($c, ($__global_Data_Functor_Product_product)($d, ($__global_Data_Functor_Product_product)($e, ($__global_Data_Functor_Product_product)($f, ($__global_Data_Functor_Product_product)($g, ($__global_Data_Functor_Product_product)($h, ($__global_Data_Functor_Product_product)($i, ($__global_Data_Functor_Product_product)($j, $__global_Data_Unit_unit))))))))));
  goto __end;;
  __end:
  return 10 < $__num ? $__res(...array_slice(func_get_args(), 10)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_product10'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_product10';

// Data_Functor_Product_Nested_product1
function Data_Functor_Product_Nested_product1($a) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_product1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_Functor_Product_product)($a, $__global_Data_Unit_unit);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_product1'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_product1';

// Data_Functor_Product_Nested_get9
function Data_Functor_Product_Nested_get9($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_get9';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (((($__case_0)->tag === "Tuple") && (((($__case_0)->v1)->tag === "Tuple") && ((((($__case_0)->v1)->v1)->tag === "Tuple") && (((((($__case_0)->v1)->v1)->v1)->tag === "Tuple") && ((((((($__case_0)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple")))))))))) {
$i = ((((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$__res = $i;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_get9'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_get9';

// Data_Functor_Product_Nested_get8
function Data_Functor_Product_Nested_get8($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_get8';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (((($__case_0)->tag === "Tuple") && (((($__case_0)->v1)->tag === "Tuple") && ((((($__case_0)->v1)->v1)->tag === "Tuple") && (((((($__case_0)->v1)->v1)->v1)->tag === "Tuple") && ((((((($__case_0)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple"))))))))) {
$h = (((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$__res = $h;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_get8'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_get8';

// Data_Functor_Product_Nested_get7
function Data_Functor_Product_Nested_get7($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_get7';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (((($__case_0)->tag === "Tuple") && (((($__case_0)->v1)->tag === "Tuple") && ((((($__case_0)->v1)->v1)->tag === "Tuple") && (((((($__case_0)->v1)->v1)->v1)->tag === "Tuple") && ((((((($__case_0)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple")))))))) {
$g = ((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$__res = $g;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_get7'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_get7';

// Data_Functor_Product_Nested_get6
function Data_Functor_Product_Nested_get6($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_get6';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (((($__case_0)->tag === "Tuple") && (((($__case_0)->v1)->tag === "Tuple") && ((((($__case_0)->v1)->v1)->tag === "Tuple") && (((((($__case_0)->v1)->v1)->v1)->tag === "Tuple") && ((((((($__case_0)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple"))))))) {
$f = (((((($__case_0)->v1)->v1)->v1)->v1)->v1)->v0;
$__res = $f;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_get6'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_get6';

// Data_Functor_Product_Nested_get5
function Data_Functor_Product_Nested_get5($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_get5';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (((($__case_0)->tag === "Tuple") && (((($__case_0)->v1)->tag === "Tuple") && ((((($__case_0)->v1)->v1)->tag === "Tuple") && (((((($__case_0)->v1)->v1)->v1)->tag === "Tuple") && (((((($__case_0)->v1)->v1)->v1)->v1)->tag === "Tuple")))))) {
$e = ((((($__case_0)->v1)->v1)->v1)->v1)->v0;
$__res = $e;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_get5'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_get5';

// Data_Functor_Product_Nested_get4
function Data_Functor_Product_Nested_get4($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_get4';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (((($__case_0)->tag === "Tuple") && (((($__case_0)->v1)->tag === "Tuple") && ((((($__case_0)->v1)->v1)->tag === "Tuple") && ((((($__case_0)->v1)->v1)->v1)->tag === "Tuple"))))) {
$d = (((($__case_0)->v1)->v1)->v1)->v0;
$__res = $d;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_get4'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_get4';

// Data_Functor_Product_Nested_get3
function Data_Functor_Product_Nested_get3($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_get3';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (((($__case_0)->tag === "Tuple") && (((($__case_0)->v1)->tag === "Tuple") && (((($__case_0)->v1)->v1)->tag === "Tuple")))) {
$c = ((($__case_0)->v1)->v1)->v0;
$__res = $c;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_get3'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_get3';

// Data_Functor_Product_Nested_get2
function Data_Functor_Product_Nested_get2($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_get2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v1)->tag === "Tuple"))) {
$b = (($__case_0)->v1)->v0;
$__res = $b;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_get2'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_get2';

// Data_Functor_Product_Nested_get10
function Data_Functor_Product_Nested_get10($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_get10';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (((($__case_0)->tag === "Tuple") && (((($__case_0)->v1)->tag === "Tuple") && ((((($__case_0)->v1)->v1)->tag === "Tuple") && (((((($__case_0)->v1)->v1)->v1)->tag === "Tuple") && ((((((($__case_0)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple"))))))))))) {
$j = (((((((((($__case_0)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$__res = $j;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_get10'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_get10';

// Data_Functor_Product_Nested_get1
function Data_Functor_Product_Nested_get1($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Nested_get1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$__res = $a;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_Nested_get1'] = __NAMESPACE__ . '\\Data_Functor_Product_Nested_get1';

