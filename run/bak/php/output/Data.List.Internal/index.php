<?php

namespace Data\List\Internal;

require_once __DIR__ . '/../Data.List.Internal/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
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
      case 'Data_List_Internal_Leaf': $v = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")); break;
      case 'Data_List_Internal_emptySet': $v = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };



// Data_List_Internal_Two
function Data_List_Internal_Two($value0, $value1 = null, $value2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Internal_Two';
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("Two", $value0, $value1, $value2);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Internal_Two'] = __NAMESPACE__ . '\\Data_List_Internal_Two';

// Data_List_Internal_Three
function Data_List_Internal_Three($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Internal_Three';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
  $__res = new Phpurs_Data5("Three", $value0, $value1, $value2, $value3, $value4);
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...array_slice(func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_List_Internal_Three'] = __NAMESPACE__ . '\\Data_List_Internal_Three';

// Data_List_Internal_TwoLeft
function Data_List_Internal_TwoLeft($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Internal_TwoLeft';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("TwoLeft", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Internal_TwoLeft'] = __NAMESPACE__ . '\\Data_List_Internal_TwoLeft';

// Data_List_Internal_TwoRight
function Data_List_Internal_TwoRight($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Internal_TwoRight';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("TwoRight", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Internal_TwoRight'] = __NAMESPACE__ . '\\Data_List_Internal_TwoRight';

// Data_List_Internal_ThreeLeft
function Data_List_Internal_ThreeLeft($value0, $value1 = null, $value2 = null, $value3 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Internal_ThreeLeft';
  if ($__num < 4) {
    if ($__num === 3) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
    if ($__num === 2) return function($value2, $value3 = null) use ($value0, $value1, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2, $value3);
      if ($__num2 === 1) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
      return phpurs_curry_fallback($__fn, [$value0, $value1], 4);
    };
    if ($__num === 1) return function($value1, $value2 = null, $value3 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($value0, $value1, $value2, $value3);
      if ($__num2 === 2) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
      if ($__num2 === 1) return function($value2, $value3 = null) use ($value0, $value1, $__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($value0, $value1, $value2, $value3);
        if ($__num3 === 1) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
        return phpurs_curry_fallback($__fn, [$value0, $value1], 4);
      };
      return phpurs_curry_fallback($__fn, [$value0], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__res = new Phpurs_Data4("ThreeLeft", $value0, $value1, $value2, $value3);
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_List_Internal_ThreeLeft'] = __NAMESPACE__ . '\\Data_List_Internal_ThreeLeft';

// Data_List_Internal_ThreeMiddle
function Data_List_Internal_ThreeMiddle($value0, $value1 = null, $value2 = null, $value3 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Internal_ThreeMiddle';
  if ($__num < 4) {
    if ($__num === 3) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
    if ($__num === 2) return function($value2, $value3 = null) use ($value0, $value1, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2, $value3);
      if ($__num2 === 1) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
      return phpurs_curry_fallback($__fn, [$value0, $value1], 4);
    };
    if ($__num === 1) return function($value1, $value2 = null, $value3 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($value0, $value1, $value2, $value3);
      if ($__num2 === 2) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
      if ($__num2 === 1) return function($value2, $value3 = null) use ($value0, $value1, $__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($value0, $value1, $value2, $value3);
        if ($__num3 === 1) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
        return phpurs_curry_fallback($__fn, [$value0, $value1], 4);
      };
      return phpurs_curry_fallback($__fn, [$value0], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__res = new Phpurs_Data4("ThreeMiddle", $value0, $value1, $value2, $value3);
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_List_Internal_ThreeMiddle'] = __NAMESPACE__ . '\\Data_List_Internal_ThreeMiddle';

// Data_List_Internal_ThreeRight
function Data_List_Internal_ThreeRight($value0, $value1 = null, $value2 = null, $value3 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Internal_ThreeRight';
  if ($__num < 4) {
    if ($__num === 3) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
    if ($__num === 2) return function($value2, $value3 = null) use ($value0, $value1, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2, $value3);
      if ($__num2 === 1) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
      return phpurs_curry_fallback($__fn, [$value0, $value1], 4);
    };
    if ($__num === 1) return function($value1, $value2 = null, $value3 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($value0, $value1, $value2, $value3);
      if ($__num2 === 2) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
      if ($__num2 === 1) return function($value2, $value3 = null) use ($value0, $value1, $__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($value0, $value1, $value2, $value3);
        if ($__num3 === 1) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
        return phpurs_curry_fallback($__fn, [$value0, $value1], 4);
      };
      return phpurs_curry_fallback($__fn, [$value0], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__res = new Phpurs_Data4("ThreeRight", $value0, $value1, $value2, $value3);
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_List_Internal_ThreeRight'] = __NAMESPACE__ . '\\Data_List_Internal_ThreeRight';

// Data_List_Internal_KickUp
function Data_List_Internal_KickUp($value0, $value1 = null, $value2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Internal_KickUp';
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("KickUp", $value0, $value1, $value2);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Internal_KickUp'] = __NAMESPACE__ . '\\Data_List_Internal_KickUp';

// Data_List_Internal_fromZipper
function Data_List_Internal_fromZipper($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Internal_fromZipper';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_0)->tag) {
case "Nil":
$tree = $__case_1;
$__res = $tree;
goto __end;;
break;
case "Cons":
$x = ($__case_0)->v0;
$ctx = ($__case_0)->v1;
$tree = $__case_1;
$__case_0 = $x;
switch (($__case_0)->tag) {
case "TwoLeft":
$k1 = ($__case_0)->v0;
$right = ($__case_0)->v1;
$__tco_tmp_0 = $ctx;
$__tco_tmp_1 = new Phpurs_Data3("Two", $tree, $k1, $right);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 3;
break;
case "TwoRight":
$left = ($__case_0)->v0;
$k1 = ($__case_0)->v1;
$__tco_tmp_0 = $ctx;
$__tco_tmp_1 = new Phpurs_Data3("Two", $left, $k1, $tree);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 3;
break;
case "ThreeLeft":
$k1 = ($__case_0)->v0;
$mid = ($__case_0)->v1;
$k2 = ($__case_0)->v2;
$right = ($__case_0)->v3;
$__tco_tmp_0 = $ctx;
$__tco_tmp_1 = new Phpurs_Data5("Three", $tree, $k1, $mid, $k2, $right);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 3;
break;
case "ThreeMiddle":
$left = ($__case_0)->v0;
$k1 = ($__case_0)->v1;
$k2 = ($__case_0)->v2;
$right = ($__case_0)->v3;
$__tco_tmp_0 = $ctx;
$__tco_tmp_1 = new Phpurs_Data5("Three", $left, $k1, $tree, $k2, $right);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 3;
break;
case "ThreeRight":
$left = ($__case_0)->v0;
$k1 = ($__case_0)->v1;
$mid = ($__case_0)->v2;
$k2 = ($__case_0)->v3;
$__tco_tmp_0 = $ctx;
$__tco_tmp_1 = new Phpurs_Data5("Three", $left, $k1, $mid, $k2, $tree);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 3;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Internal_fromZipper'] = __NAMESPACE__ . '\\Data_List_Internal_fromZipper';

// Data_List_Internal_insertAndLookupBy
function Data_List_Internal_insertAndLookupBy($comp, $k = null, $orig = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Internal_insertAndLookupBy';
  if ($__num < 3) {
    if ($__num === 2) return function($orig) use ($comp, $k, $__fn) { return $__fn($comp, $k, $orig); };
    if ($__num === 1) return function($k, $orig = null) use ($comp, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($comp, $k, $orig);
      if ($__num2 === 1) return function($orig) use ($comp, $k, $__fn) { return $__fn($comp, $k, $orig); };
      return phpurs_curry_fallback($__fn, [$comp], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_Internal_fromZipper = ($GLOBALS['Data_List_Internal_fromZipper'] ?? \Data\List\Internal\phpurs_eval_thunk('Data_List_Internal_fromZipper'));
  $up = (function() use ($__global_Data_List_Internal_fromZipper, &$up, &$__fn) {
  $__fn = function($v, $v1 = null) use ($__global_Data_List_Internal_fromZipper, &$up, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_0)->tag === "Nil") && (($__case_1)->tag === "KickUp"))) {
$left = ($__case_1)->v0;
$k__prime__ = ($__case_1)->v1;
$right = ($__case_1)->v2;
$__res = new Phpurs_Data3("Two", $left, $k__prime__, $right);
goto __end;;
} else {
switch (($__case_0)->tag) {
case "Cons":
$x = ($__case_0)->v0;
$ctx = ($__case_0)->v1;
$kup = $__case_1;
$__case_0 = $x;
$__case_1 = $kup;
if (((($__case_0)->tag === "TwoLeft") && (($__case_1)->tag === "KickUp"))) {
$k1 = ($__case_0)->v0;
$right = ($__case_0)->v1;
$left = ($__case_1)->v0;
$k__prime__ = ($__case_1)->v1;
$mid = ($__case_1)->v2;
$__res = ($__global_Data_List_Internal_fromZipper)($ctx, new Phpurs_Data5("Three", $left, $k__prime__, $mid, $k1, $right));
goto __end;;
} else {
if (((($__case_0)->tag === "TwoRight") && (($__case_1)->tag === "KickUp"))) {
$left = ($__case_0)->v0;
$k1 = ($__case_0)->v1;
$mid = ($__case_1)->v0;
$k__prime__ = ($__case_1)->v1;
$right = ($__case_1)->v2;
$__res = ($__global_Data_List_Internal_fromZipper)($ctx, new Phpurs_Data5("Three", $left, $k1, $mid, $k__prime__, $right));
goto __end;;
} else {
if (((($__case_0)->tag === "ThreeLeft") && (($__case_1)->tag === "KickUp"))) {
$k1 = ($__case_0)->v0;
$c = ($__case_0)->v1;
$k2 = ($__case_0)->v2;
$d = ($__case_0)->v3;
$a = ($__case_1)->v0;
$k__prime__ = ($__case_1)->v1;
$b = ($__case_1)->v2;
$__tco_tmp_0 = $ctx;
$__tco_tmp_1 = new Phpurs_Data3("KickUp", new Phpurs_Data3("Two", $a, $k__prime__, $b), $k1, new Phpurs_Data3("Two", $c, $k2, $d));
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
} else {
if (((($__case_0)->tag === "ThreeMiddle") && (($__case_1)->tag === "KickUp"))) {
$a = ($__case_0)->v0;
$k1 = ($__case_0)->v1;
$k2 = ($__case_0)->v2;
$d = ($__case_0)->v3;
$b = ($__case_1)->v0;
$k__prime__ = ($__case_1)->v1;
$c = ($__case_1)->v2;
$__tco_tmp_0 = $ctx;
$__tco_tmp_1 = new Phpurs_Data3("KickUp", new Phpurs_Data3("Two", $a, $k1, $b), $k__prime__, new Phpurs_Data3("Two", $c, $k2, $d));
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
} else {
if (((($__case_0)->tag === "ThreeRight") && (($__case_1)->tag === "KickUp"))) {
$a = ($__case_0)->v0;
$k1 = ($__case_0)->v1;
$b = ($__case_0)->v2;
$k2 = ($__case_0)->v3;
$c = ($__case_1)->v0;
$k__prime__ = ($__case_1)->v1;
$d = ($__case_1)->v2;
$__tco_tmp_0 = $ctx;
$__tco_tmp_1 = new Phpurs_Data3("KickUp", new Phpurs_Data3("Two", $a, $k1, $b), $k2, new Phpurs_Data3("Two", $c, $k__prime__, $d));
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $down = (function() use (&$up, $k, $comp, $orig, &$down, &$__fn) {
  $__fn = function($v, $v1 = null) use (&$up, $k, $comp, $orig, &$down, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Leaf":
$ctx = $__case_0;
$__res = (object)["found" => false, "result" => ($up)($ctx, new Phpurs_Data3("KickUp", ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), $k, ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"))))];
goto __end;;
break;
case "Two":
$ctx = $__case_0;
$left = ($__case_1)->v0;
$k1 = ($__case_1)->v1;
$right = ($__case_1)->v2;
$v2 = ($comp)($k, $k1);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "EQ":
$__res = (object)["found" => true, "result" => $orig];
goto __end;;
break;
case "LT":
$__tco_tmp_0 = new Phpurs_Data2("Cons", new Phpurs_Data2("TwoLeft", $k1, $right), $ctx);
$__tco_tmp_1 = $left;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 3;
break;
default:
$__tco_tmp_0 = new Phpurs_Data2("Cons", new Phpurs_Data2("TwoRight", $left, $k1), $ctx);
$__tco_tmp_1 = $right;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 3;
break;
};
break;
case "Three":
$ctx = $__case_0;
$left = ($__case_1)->v0;
$k1 = ($__case_1)->v1;
$mid = ($__case_1)->v2;
$k2 = ($__case_1)->v3;
$right = ($__case_1)->v4;
$v2 = ($comp)($k, $k1);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "EQ":
$__res = (object)["found" => true, "result" => $orig];
goto __end;;
break;
default:
$c1 = $__case_0;
$v3 = ($comp)($k, $k2);
$v4 = $c1;
$__case_0 = $v4;
$__case_1 = $v3;
if ((($__case_1)->tag === "EQ")) {
$__res = (object)["found" => true, "result" => $orig];
goto __end;;
} else {
if ((($__case_0)->tag === "LT")) {
$__tco_tmp_0 = new Phpurs_Data2("Cons", new Phpurs_Data4("ThreeLeft", $k1, $mid, $k2, $right), $ctx);
$__tco_tmp_1 = $left;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 3;
} else {
if (((($__case_0)->tag === "GT") && (($__case_1)->tag === "LT"))) {
$__tco_tmp_0 = new Phpurs_Data2("Cons", new Phpurs_Data4("ThreeMiddle", $left, $k1, $k2, $right), $ctx);
$__tco_tmp_1 = $mid;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 3;
} else {
if (true) {
$__tco_tmp_0 = new Phpurs_Data2("Cons", new Phpurs_Data4("ThreeRight", $left, $k1, $mid, $k2), $ctx);
$__tco_tmp_1 = $right;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 3;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($down)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), $orig);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Internal_insertAndLookupBy'] = __NAMESPACE__ . '\\Data_List_Internal_insertAndLookupBy';


