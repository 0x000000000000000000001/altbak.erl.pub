<?php

namespace Data\Tuple\Nested;

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


// Data_Tuple_Nested_uncurry9
function Data_Tuple_Nested_uncurry9($f__prime__, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_uncurry9';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f__prime__, $__fn) { return $__fn($f__prime__, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f__prime__;
  $__case_1 = $v;
  if (((($__case_1)->tag === "Tuple") && (((($__case_1)->v1)->tag === "Tuple") && ((((($__case_1)->v1)->v1)->tag === "Tuple") && (((((($__case_1)->v1)->v1)->v1)->tag === "Tuple") && ((((((($__case_1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple")))))))))) {
$f__prime__1 = $__case_0;
$a = ($__case_1)->v0;
$b = (($__case_1)->v1)->v0;
$c = ((($__case_1)->v1)->v1)->v0;
$d = (((($__case_1)->v1)->v1)->v1)->v0;
$e = ((((($__case_1)->v1)->v1)->v1)->v1)->v0;
$f = (((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v0;
$g = ((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$h = (((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$i = ((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$__res = ($f__prime__1)($a, $b, $c, $d, $e, $f, $g, $h, $i);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_uncurry9'] = __NAMESPACE__ . '\\Data_Tuple_Nested_uncurry9';

// Data_Tuple_Nested_uncurry8
function Data_Tuple_Nested_uncurry8($f__prime__, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_uncurry8';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f__prime__, $__fn) { return $__fn($f__prime__, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f__prime__;
  $__case_1 = $v;
  if (((($__case_1)->tag === "Tuple") && (((($__case_1)->v1)->tag === "Tuple") && ((((($__case_1)->v1)->v1)->tag === "Tuple") && (((((($__case_1)->v1)->v1)->v1)->tag === "Tuple") && ((((((($__case_1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple"))))))))) {
$f__prime__1 = $__case_0;
$a = ($__case_1)->v0;
$b = (($__case_1)->v1)->v0;
$c = ((($__case_1)->v1)->v1)->v0;
$d = (((($__case_1)->v1)->v1)->v1)->v0;
$e = ((((($__case_1)->v1)->v1)->v1)->v1)->v0;
$f = (((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v0;
$g = ((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$h = (((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$__res = ($f__prime__1)($a, $b, $c, $d, $e, $f, $g, $h);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_uncurry8'] = __NAMESPACE__ . '\\Data_Tuple_Nested_uncurry8';

// Data_Tuple_Nested_uncurry7
function Data_Tuple_Nested_uncurry7($f__prime__, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_uncurry7';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f__prime__, $__fn) { return $__fn($f__prime__, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f__prime__;
  $__case_1 = $v;
  if (((($__case_1)->tag === "Tuple") && (((($__case_1)->v1)->tag === "Tuple") && ((((($__case_1)->v1)->v1)->tag === "Tuple") && (((((($__case_1)->v1)->v1)->v1)->tag === "Tuple") && ((((((($__case_1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple")))))))) {
$f__prime__1 = $__case_0;
$a = ($__case_1)->v0;
$b = (($__case_1)->v1)->v0;
$c = ((($__case_1)->v1)->v1)->v0;
$d = (((($__case_1)->v1)->v1)->v1)->v0;
$e = ((((($__case_1)->v1)->v1)->v1)->v1)->v0;
$f = (((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v0;
$g = ((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$__res = ($f__prime__1)($a, $b, $c, $d, $e, $f, $g);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_uncurry7'] = __NAMESPACE__ . '\\Data_Tuple_Nested_uncurry7';

// Data_Tuple_Nested_uncurry6
function Data_Tuple_Nested_uncurry6($f__prime__, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_uncurry6';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f__prime__, $__fn) { return $__fn($f__prime__, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f__prime__;
  $__case_1 = $v;
  if (((($__case_1)->tag === "Tuple") && (((($__case_1)->v1)->tag === "Tuple") && ((((($__case_1)->v1)->v1)->tag === "Tuple") && (((((($__case_1)->v1)->v1)->v1)->tag === "Tuple") && ((((((($__case_1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple"))))))) {
$f__prime__1 = $__case_0;
$a = ($__case_1)->v0;
$b = (($__case_1)->v1)->v0;
$c = ((($__case_1)->v1)->v1)->v0;
$d = (((($__case_1)->v1)->v1)->v1)->v0;
$e = ((((($__case_1)->v1)->v1)->v1)->v1)->v0;
$f = (((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v0;
$__res = ($f__prime__1)($a, $b, $c, $d, $e, $f);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_uncurry6'] = __NAMESPACE__ . '\\Data_Tuple_Nested_uncurry6';

// Data_Tuple_Nested_uncurry5
function Data_Tuple_Nested_uncurry5($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_uncurry5';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (((($__case_1)->tag === "Tuple") && (((($__case_1)->v1)->tag === "Tuple") && ((((($__case_1)->v1)->v1)->tag === "Tuple") && (((((($__case_1)->v1)->v1)->v1)->tag === "Tuple") && (((((($__case_1)->v1)->v1)->v1)->v1)->tag === "Tuple")))))) {
$f1 = $__case_0;
$a = ($__case_1)->v0;
$b = (($__case_1)->v1)->v0;
$c = ((($__case_1)->v1)->v1)->v0;
$d = (((($__case_1)->v1)->v1)->v1)->v0;
$e = ((((($__case_1)->v1)->v1)->v1)->v1)->v0;
$__res = ($f1)($a, $b, $c, $d, $e);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_uncurry5'] = __NAMESPACE__ . '\\Data_Tuple_Nested_uncurry5';

// Data_Tuple_Nested_uncurry4
function Data_Tuple_Nested_uncurry4($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_uncurry4';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (((($__case_1)->tag === "Tuple") && (((($__case_1)->v1)->tag === "Tuple") && ((((($__case_1)->v1)->v1)->tag === "Tuple") && ((((($__case_1)->v1)->v1)->v1)->tag === "Tuple"))))) {
$f1 = $__case_0;
$a = ($__case_1)->v0;
$b = (($__case_1)->v1)->v0;
$c = ((($__case_1)->v1)->v1)->v0;
$d = (((($__case_1)->v1)->v1)->v1)->v0;
$__res = ($f1)($a, $b, $c, $d);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_uncurry4'] = __NAMESPACE__ . '\\Data_Tuple_Nested_uncurry4';

// Data_Tuple_Nested_uncurry3
function Data_Tuple_Nested_uncurry3($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_uncurry3';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (((($__case_1)->tag === "Tuple") && (((($__case_1)->v1)->tag === "Tuple") && (((($__case_1)->v1)->v1)->tag === "Tuple")))) {
$f1 = $__case_0;
$a = ($__case_1)->v0;
$b = (($__case_1)->v1)->v0;
$c = ((($__case_1)->v1)->v1)->v0;
$__res = ($f1)($a, $b, $c);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_uncurry3'] = __NAMESPACE__ . '\\Data_Tuple_Nested_uncurry3';

// Data_Tuple_Nested_uncurry2
function Data_Tuple_Nested_uncurry2($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_uncurry2';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (((($__case_1)->tag === "Tuple") && ((($__case_1)->v1)->tag === "Tuple"))) {
$f1 = $__case_0;
$a = ($__case_1)->v0;
$b = (($__case_1)->v1)->v0;
$__res = ($f1)($a, $b);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_uncurry2'] = __NAMESPACE__ . '\\Data_Tuple_Nested_uncurry2';

// Data_Tuple_Nested_uncurry10
function Data_Tuple_Nested_uncurry10($f__prime__, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_uncurry10';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f__prime__, $__fn) { return $__fn($f__prime__, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f__prime__;
  $__case_1 = $v;
  if (((($__case_1)->tag === "Tuple") && (((($__case_1)->v1)->tag === "Tuple") && ((((($__case_1)->v1)->v1)->tag === "Tuple") && (((((($__case_1)->v1)->v1)->v1)->tag === "Tuple") && ((((((($__case_1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple"))))))))))) {
$f__prime__1 = $__case_0;
$a = ($__case_1)->v0;
$b = (($__case_1)->v1)->v0;
$c = ((($__case_1)->v1)->v1)->v0;
$d = (((($__case_1)->v1)->v1)->v1)->v0;
$e = ((((($__case_1)->v1)->v1)->v1)->v1)->v0;
$f = (((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v0;
$g = ((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$h = (((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$i = ((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$j = (((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$__res = ($f__prime__1)($a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_uncurry10'] = __NAMESPACE__ . '\\Data_Tuple_Nested_uncurry10';

// Data_Tuple_Nested_uncurry1
function Data_Tuple_Nested_uncurry1($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_uncurry1';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$__res = ($f1)($a);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_uncurry1'] = __NAMESPACE__ . '\\Data_Tuple_Nested_uncurry1';

// Data_Tuple_Nested_tuple9
function Data_Tuple_Nested_tuple9($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_tuple9';
  if ($__num < 9) {
    return phpurs_curry_fallback($__fn, func_get_args(), 9);
  }
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, new Phpurs_Data2("Tuple", $h, new Phpurs_Data2("Tuple", $i, $__global_Data_Unit_unit)))))))));
  goto __end;;
  __end:
  return 9 < $__num ? $__res(...array_slice(func_get_args(), 9)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_tuple9'] = __NAMESPACE__ . '\\Data_Tuple_Nested_tuple9';

// Data_Tuple_Nested_tuple8
function Data_Tuple_Nested_tuple8($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_tuple8';
  if ($__num < 8) {
    return phpurs_curry_fallback($__fn, func_get_args(), 8);
  }
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, new Phpurs_Data2("Tuple", $h, $__global_Data_Unit_unit))))))));
  goto __end;;
  __end:
  return 8 < $__num ? $__res(...array_slice(func_get_args(), 8)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_tuple8'] = __NAMESPACE__ . '\\Data_Tuple_Nested_tuple8';

// Data_Tuple_Nested_tuple7
function Data_Tuple_Nested_tuple7($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_tuple7';
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, func_get_args(), 7);
  }
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, $__global_Data_Unit_unit)))))));
  goto __end;;
  __end:
  return 7 < $__num ? $__res(...array_slice(func_get_args(), 7)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_tuple7'] = __NAMESPACE__ . '\\Data_Tuple_Nested_tuple7';

// Data_Tuple_Nested_tuple6
function Data_Tuple_Nested_tuple6($a, $b = null, $c = null, $d = null, $e = null, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_tuple6';
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, $__global_Data_Unit_unit))))));
  goto __end;;
  __end:
  return 6 < $__num ? $__res(...array_slice(func_get_args(), 6)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_tuple6'] = __NAMESPACE__ . '\\Data_Tuple_Nested_tuple6';

// Data_Tuple_Nested_tuple5
function Data_Tuple_Nested_tuple5($a, $b = null, $c = null, $d = null, $e = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_tuple5';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, $__global_Data_Unit_unit)))));
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...array_slice(func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_tuple5'] = __NAMESPACE__ . '\\Data_Tuple_Nested_tuple5';

// Data_Tuple_Nested_tuple4
function Data_Tuple_Nested_tuple4($a, $b = null, $c = null, $d = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_tuple4';
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
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, $__global_Data_Unit_unit))));
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_tuple4'] = __NAMESPACE__ . '\\Data_Tuple_Nested_tuple4';

// Data_Tuple_Nested_tuple3
function Data_Tuple_Nested_tuple3($a, $b = null, $c = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_tuple3';
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
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, $__global_Data_Unit_unit)));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_tuple3'] = __NAMESPACE__ . '\\Data_Tuple_Nested_tuple3';

// Data_Tuple_Nested_tuple2
function Data_Tuple_Nested_tuple2($a, $b = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_tuple2';
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, $__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, $__global_Data_Unit_unit));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_tuple2'] = __NAMESPACE__ . '\\Data_Tuple_Nested_tuple2';

// Data_Tuple_Nested_tuple10
function Data_Tuple_Nested_tuple10($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_tuple10';
  if ($__num < 10) {
    return phpurs_curry_fallback($__fn, func_get_args(), 10);
  }
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, new Phpurs_Data2("Tuple", $h, new Phpurs_Data2("Tuple", $i, new Phpurs_Data2("Tuple", $j, $__global_Data_Unit_unit))))))))));
  goto __end;;
  __end:
  return 10 < $__num ? $__res(...array_slice(func_get_args(), 10)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_tuple10'] = __NAMESPACE__ . '\\Data_Tuple_Nested_tuple10';

// Data_Tuple_Nested_tuple1
function Data_Tuple_Nested_tuple1($a) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_tuple1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = new Phpurs_Data2("Tuple", $a, $__global_Data_Unit_unit);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_tuple1'] = __NAMESPACE__ . '\\Data_Tuple_Nested_tuple1';

// Data_Tuple_Nested_over9
function Data_Tuple_Nested_over9($o, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_over9';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($o, $__fn) { return $__fn($o, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $o;
  $__case_1 = $v;
  if (((($__case_1)->tag === "Tuple") && (((($__case_1)->v1)->tag === "Tuple") && ((((($__case_1)->v1)->v1)->tag === "Tuple") && (((((($__case_1)->v1)->v1)->v1)->tag === "Tuple") && ((((((($__case_1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple")))))))))) {
$o1 = $__case_0;
$a = ($__case_1)->v0;
$b = (($__case_1)->v1)->v0;
$c = ((($__case_1)->v1)->v1)->v0;
$d = (((($__case_1)->v1)->v1)->v1)->v0;
$e = ((((($__case_1)->v1)->v1)->v1)->v1)->v0;
$f = (((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v0;
$g = ((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$h = (((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$i = ((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$z = ((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1;
$__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, new Phpurs_Data2("Tuple", $h, new Phpurs_Data2("Tuple", ($o1)($i), $z)))))))));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_over9'] = __NAMESPACE__ . '\\Data_Tuple_Nested_over9';

// Data_Tuple_Nested_over8
function Data_Tuple_Nested_over8($o, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_over8';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($o, $__fn) { return $__fn($o, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $o;
  $__case_1 = $v;
  if (((($__case_1)->tag === "Tuple") && (((($__case_1)->v1)->tag === "Tuple") && ((((($__case_1)->v1)->v1)->tag === "Tuple") && (((((($__case_1)->v1)->v1)->v1)->tag === "Tuple") && ((((((($__case_1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple"))))))))) {
$o1 = $__case_0;
$a = ($__case_1)->v0;
$b = (($__case_1)->v1)->v0;
$c = ((($__case_1)->v1)->v1)->v0;
$d = (((($__case_1)->v1)->v1)->v1)->v0;
$e = ((((($__case_1)->v1)->v1)->v1)->v1)->v0;
$f = (((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v0;
$g = ((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$h = (((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$z = (((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1;
$__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, new Phpurs_Data2("Tuple", ($o1)($h), $z))))))));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_over8'] = __NAMESPACE__ . '\\Data_Tuple_Nested_over8';

// Data_Tuple_Nested_over7
function Data_Tuple_Nested_over7($o, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_over7';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($o, $__fn) { return $__fn($o, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $o;
  $__case_1 = $v;
  if (((($__case_1)->tag === "Tuple") && (((($__case_1)->v1)->tag === "Tuple") && ((((($__case_1)->v1)->v1)->tag === "Tuple") && (((((($__case_1)->v1)->v1)->v1)->tag === "Tuple") && ((((((($__case_1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple")))))))) {
$o1 = $__case_0;
$a = ($__case_1)->v0;
$b = (($__case_1)->v1)->v0;
$c = ((($__case_1)->v1)->v1)->v0;
$d = (((($__case_1)->v1)->v1)->v1)->v0;
$e = ((((($__case_1)->v1)->v1)->v1)->v1)->v0;
$f = (((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v0;
$g = ((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$z = ((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1;
$__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", ($o1)($g), $z)))))));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_over7'] = __NAMESPACE__ . '\\Data_Tuple_Nested_over7';

// Data_Tuple_Nested_over6
function Data_Tuple_Nested_over6($o, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_over6';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($o, $__fn) { return $__fn($o, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $o;
  $__case_1 = $v;
  if (((($__case_1)->tag === "Tuple") && (((($__case_1)->v1)->tag === "Tuple") && ((((($__case_1)->v1)->v1)->tag === "Tuple") && (((((($__case_1)->v1)->v1)->v1)->tag === "Tuple") && ((((((($__case_1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple"))))))) {
$o1 = $__case_0;
$a = ($__case_1)->v0;
$b = (($__case_1)->v1)->v0;
$c = ((($__case_1)->v1)->v1)->v0;
$d = (((($__case_1)->v1)->v1)->v1)->v0;
$e = ((((($__case_1)->v1)->v1)->v1)->v1)->v0;
$f = (((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v0;
$z = (((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1;
$__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", ($o1)($f), $z))))));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_over6'] = __NAMESPACE__ . '\\Data_Tuple_Nested_over6';

// Data_Tuple_Nested_over5
function Data_Tuple_Nested_over5($o, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_over5';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($o, $__fn) { return $__fn($o, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $o;
  $__case_1 = $v;
  if (((($__case_1)->tag === "Tuple") && (((($__case_1)->v1)->tag === "Tuple") && ((((($__case_1)->v1)->v1)->tag === "Tuple") && (((((($__case_1)->v1)->v1)->v1)->tag === "Tuple") && (((((($__case_1)->v1)->v1)->v1)->v1)->tag === "Tuple")))))) {
$o1 = $__case_0;
$a = ($__case_1)->v0;
$b = (($__case_1)->v1)->v0;
$c = ((($__case_1)->v1)->v1)->v0;
$d = (((($__case_1)->v1)->v1)->v1)->v0;
$e = ((((($__case_1)->v1)->v1)->v1)->v1)->v0;
$z = ((((($__case_1)->v1)->v1)->v1)->v1)->v1;
$__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", ($o1)($e), $z)))));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_over5'] = __NAMESPACE__ . '\\Data_Tuple_Nested_over5';

// Data_Tuple_Nested_over4
function Data_Tuple_Nested_over4($o, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_over4';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($o, $__fn) { return $__fn($o, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $o;
  $__case_1 = $v;
  if (((($__case_1)->tag === "Tuple") && (((($__case_1)->v1)->tag === "Tuple") && ((((($__case_1)->v1)->v1)->tag === "Tuple") && ((((($__case_1)->v1)->v1)->v1)->tag === "Tuple"))))) {
$o1 = $__case_0;
$a = ($__case_1)->v0;
$b = (($__case_1)->v1)->v0;
$c = ((($__case_1)->v1)->v1)->v0;
$d = (((($__case_1)->v1)->v1)->v1)->v0;
$z = (((($__case_1)->v1)->v1)->v1)->v1;
$__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", ($o1)($d), $z))));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_over4'] = __NAMESPACE__ . '\\Data_Tuple_Nested_over4';

// Data_Tuple_Nested_over3
function Data_Tuple_Nested_over3($o, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_over3';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($o, $__fn) { return $__fn($o, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $o;
  $__case_1 = $v;
  if (((($__case_1)->tag === "Tuple") && (((($__case_1)->v1)->tag === "Tuple") && (((($__case_1)->v1)->v1)->tag === "Tuple")))) {
$o1 = $__case_0;
$a = ($__case_1)->v0;
$b = (($__case_1)->v1)->v0;
$c = ((($__case_1)->v1)->v1)->v0;
$z = ((($__case_1)->v1)->v1)->v1;
$__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", ($o1)($c), $z)));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_over3'] = __NAMESPACE__ . '\\Data_Tuple_Nested_over3';

// Data_Tuple_Nested_over2
function Data_Tuple_Nested_over2($o, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_over2';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($o, $__fn) { return $__fn($o, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $o;
  $__case_1 = $v;
  if (((($__case_1)->tag === "Tuple") && ((($__case_1)->v1)->tag === "Tuple"))) {
$o1 = $__case_0;
$a = ($__case_1)->v0;
$b = (($__case_1)->v1)->v0;
$z = (($__case_1)->v1)->v1;
$__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", ($o1)($b), $z));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_over2'] = __NAMESPACE__ . '\\Data_Tuple_Nested_over2';

// Data_Tuple_Nested_over10
function Data_Tuple_Nested_over10($o, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_over10';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($o, $__fn) { return $__fn($o, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $o;
  $__case_1 = $v;
  if (((($__case_1)->tag === "Tuple") && (((($__case_1)->v1)->tag === "Tuple") && ((((($__case_1)->v1)->v1)->tag === "Tuple") && (((((($__case_1)->v1)->v1)->v1)->tag === "Tuple") && ((((((($__case_1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && (((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple") && ((((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->tag === "Tuple"))))))))))) {
$o1 = $__case_0;
$a = ($__case_1)->v0;
$b = (($__case_1)->v1)->v0;
$c = ((($__case_1)->v1)->v1)->v0;
$d = (((($__case_1)->v1)->v1)->v1)->v0;
$e = ((((($__case_1)->v1)->v1)->v1)->v1)->v0;
$f = (((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v0;
$g = ((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$h = (((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$i = ((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$j = (((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v0;
$z = (((((((((($__case_1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1)->v1;
$__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, new Phpurs_Data2("Tuple", $h, new Phpurs_Data2("Tuple", $i, new Phpurs_Data2("Tuple", ($o1)($j), $z))))))))));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_over10'] = __NAMESPACE__ . '\\Data_Tuple_Nested_over10';

// Data_Tuple_Nested_over1
function Data_Tuple_Nested_over1($o, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_over1';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($o, $__fn) { return $__fn($o, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $o;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "Tuple":
$o1 = $__case_0;
$a = ($__case_1)->v0;
$z = ($__case_1)->v1;
$__res = new Phpurs_Data2("Tuple", ($o1)($a), $z);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_over1'] = __NAMESPACE__ . '\\Data_Tuple_Nested_over1';

// Data_Tuple_Nested_get9
function Data_Tuple_Nested_get9($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_get9';
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
$GLOBALS['Data_Tuple_Nested_get9'] = __NAMESPACE__ . '\\Data_Tuple_Nested_get9';

// Data_Tuple_Nested_get8
function Data_Tuple_Nested_get8($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_get8';
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
$GLOBALS['Data_Tuple_Nested_get8'] = __NAMESPACE__ . '\\Data_Tuple_Nested_get8';

// Data_Tuple_Nested_get7
function Data_Tuple_Nested_get7($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_get7';
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
$GLOBALS['Data_Tuple_Nested_get7'] = __NAMESPACE__ . '\\Data_Tuple_Nested_get7';

// Data_Tuple_Nested_get6
function Data_Tuple_Nested_get6($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_get6';
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
$GLOBALS['Data_Tuple_Nested_get6'] = __NAMESPACE__ . '\\Data_Tuple_Nested_get6';

// Data_Tuple_Nested_get5
function Data_Tuple_Nested_get5($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_get5';
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
$GLOBALS['Data_Tuple_Nested_get5'] = __NAMESPACE__ . '\\Data_Tuple_Nested_get5';

// Data_Tuple_Nested_get4
function Data_Tuple_Nested_get4($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_get4';
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
$GLOBALS['Data_Tuple_Nested_get4'] = __NAMESPACE__ . '\\Data_Tuple_Nested_get4';

// Data_Tuple_Nested_get3
function Data_Tuple_Nested_get3($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_get3';
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
$GLOBALS['Data_Tuple_Nested_get3'] = __NAMESPACE__ . '\\Data_Tuple_Nested_get3';

// Data_Tuple_Nested_get2
function Data_Tuple_Nested_get2($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_get2';
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
$GLOBALS['Data_Tuple_Nested_get2'] = __NAMESPACE__ . '\\Data_Tuple_Nested_get2';

// Data_Tuple_Nested_get10
function Data_Tuple_Nested_get10($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_get10';
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
$GLOBALS['Data_Tuple_Nested_get10'] = __NAMESPACE__ . '\\Data_Tuple_Nested_get10';

// Data_Tuple_Nested_get1
function Data_Tuple_Nested_get1($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_get1';
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
$GLOBALS['Data_Tuple_Nested_get1'] = __NAMESPACE__ . '\\Data_Tuple_Nested_get1';

// Data_Tuple_Nested_curry9
function Data_Tuple_Nested_curry9($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_curry9';
  if ($__num < 11) {
    return phpurs_curry_fallback($__fn, func_get_args(), 11);
  }
  $__res = ($f__prime__)(new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, new Phpurs_Data2("Tuple", $h, new Phpurs_Data2("Tuple", $i, $z))))))))));
  goto __end;;
  __end:
  return 11 < $__num ? $__res(...array_slice(func_get_args(), 11)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_curry9'] = __NAMESPACE__ . '\\Data_Tuple_Nested_curry9';

// Data_Tuple_Nested_curry8
function Data_Tuple_Nested_curry8($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_curry8';
  if ($__num < 10) {
    return phpurs_curry_fallback($__fn, func_get_args(), 10);
  }
  $__res = ($f__prime__)(new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, new Phpurs_Data2("Tuple", $h, $z)))))))));
  goto __end;;
  __end:
  return 10 < $__num ? $__res(...array_slice(func_get_args(), 10)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_curry8'] = __NAMESPACE__ . '\\Data_Tuple_Nested_curry8';

// Data_Tuple_Nested_curry7
function Data_Tuple_Nested_curry7($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_curry7';
  if ($__num < 9) {
    return phpurs_curry_fallback($__fn, func_get_args(), 9);
  }
  $__res = ($f__prime__)(new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, $z))))))));
  goto __end;;
  __end:
  return 9 < $__num ? $__res(...array_slice(func_get_args(), 9)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_curry7'] = __NAMESPACE__ . '\\Data_Tuple_Nested_curry7';

// Data_Tuple_Nested_curry6
function Data_Tuple_Nested_curry6($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_curry6';
  if ($__num < 8) {
    return phpurs_curry_fallback($__fn, func_get_args(), 8);
  }
  $__res = ($f__prime__)(new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, $z)))))));
  goto __end;;
  __end:
  return 8 < $__num ? $__res(...array_slice(func_get_args(), 8)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_curry6'] = __NAMESPACE__ . '\\Data_Tuple_Nested_curry6';

// Data_Tuple_Nested_curry5
function Data_Tuple_Nested_curry5($z, $f = null, $a = null, $b = null, $c = null, $d = null, $e = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_curry5';
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, func_get_args(), 7);
  }
  $__res = ($f)(new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, $z))))));
  goto __end;;
  __end:
  return 7 < $__num ? $__res(...array_slice(func_get_args(), 7)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_curry5'] = __NAMESPACE__ . '\\Data_Tuple_Nested_curry5';

// Data_Tuple_Nested_curry4
function Data_Tuple_Nested_curry4($z, $f = null, $a = null, $b = null, $c = null, $d = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_curry4';
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
  $__res = ($f)(new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, $z)))));
  goto __end;;
  __end:
  return 6 < $__num ? $__res(...array_slice(func_get_args(), 6)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_curry4'] = __NAMESPACE__ . '\\Data_Tuple_Nested_curry4';

// Data_Tuple_Nested_curry3
function Data_Tuple_Nested_curry3($z, $f = null, $a = null, $b = null, $c = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_curry3';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
  $__res = ($f)(new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, $z))));
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...array_slice(func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_curry3'] = __NAMESPACE__ . '\\Data_Tuple_Nested_curry3';

// Data_Tuple_Nested_curry2
function Data_Tuple_Nested_curry2($z, $f = null, $a = null, $b = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_curry2';
  if ($__num < 4) {
    if ($__num === 3) return function($b) use ($z, $f, $a, $__fn) { return $__fn($z, $f, $a, $b); };
    if ($__num === 2) return function($a, $b = null) use ($z, $f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($z, $f, $a, $b);
      if ($__num2 === 1) return function($b) use ($z, $f, $a, $__fn) { return $__fn($z, $f, $a, $b); };
      return phpurs_curry_fallback($__fn, [$z, $f], 4);
    };
    if ($__num === 1) return function($f, $a = null, $b = null) use ($z, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($z, $f, $a, $b);
      if ($__num2 === 2) return function($b) use ($z, $f, $a, $__fn) { return $__fn($z, $f, $a, $b); };
      if ($__num2 === 1) return function($a, $b = null) use ($z, $f, $__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($z, $f, $a, $b);
        if ($__num3 === 1) return function($b) use ($z, $f, $a, $__fn) { return $__fn($z, $f, $a, $b); };
        return phpurs_curry_fallback($__fn, [$z, $f], 4);
      };
      return phpurs_curry_fallback($__fn, [$z], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__res = ($f)(new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, $z)));
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_curry2'] = __NAMESPACE__ . '\\Data_Tuple_Nested_curry2';

// Data_Tuple_Nested_curry10
function Data_Tuple_Nested_curry10($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_curry10';
  if ($__num < 12) {
    return phpurs_curry_fallback($__fn, func_get_args(), 12);
  }
  $__res = ($f__prime__)(new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, new Phpurs_Data2("Tuple", $h, new Phpurs_Data2("Tuple", $i, new Phpurs_Data2("Tuple", $j, $z)))))))))));
  goto __end;;
  __end:
  return 12 < $__num ? $__res(...array_slice(func_get_args(), 12)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_curry10'] = __NAMESPACE__ . '\\Data_Tuple_Nested_curry10';

// Data_Tuple_Nested_curry1
function Data_Tuple_Nested_curry1($z, $f = null, $a = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Tuple_Nested_curry1';
  if ($__num < 3) {
    if ($__num === 2) return function($a) use ($z, $f, $__fn) { return $__fn($z, $f, $a); };
    if ($__num === 1) return function($f, $a = null) use ($z, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($z, $f, $a);
      if ($__num2 === 1) return function($a) use ($z, $f, $__fn) { return $__fn($z, $f, $a); };
      return phpurs_curry_fallback($__fn, [$z], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($f)(new Phpurs_Data2("Tuple", $a, $z));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Tuple_Nested_curry1'] = __NAMESPACE__ . '\\Data_Tuple_Nested_curry1';

