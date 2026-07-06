<?php

namespace Data\Functor\Coproduct\Nested;

require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Void/index.php';
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
      case 'Data_Functor_Coproduct_Nested_unwrap': $v = \Data\Newtype\Data_Newtype_unwrap(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Functor_Coproduct_Nested_in1': $v = "\\Data\\Functor\\Coproduct\\Data_Functor_Coproduct_left"; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };



// Data_Functor_Coproduct_Nested_in9
function Data_Functor_Coproduct_Nested_in9($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_in9';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Coproduct_right = ($GLOBALS['Data_Functor_Coproduct_right'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_right'));
  $__global_Data_Functor_Coproduct_left = ($GLOBALS['Data_Functor_Coproduct_left'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_left'));
  $__res = ($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_left)($v)))))))));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_in9'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_in9';

// Data_Functor_Coproduct_Nested_in8
function Data_Functor_Coproduct_Nested_in8($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_in8';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Coproduct_right = ($GLOBALS['Data_Functor_Coproduct_right'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_right'));
  $__global_Data_Functor_Coproduct_left = ($GLOBALS['Data_Functor_Coproduct_left'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_left'));
  $__res = ($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_left)($v))))))));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_in8'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_in8';

// Data_Functor_Coproduct_Nested_in7
function Data_Functor_Coproduct_Nested_in7($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_in7';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Coproduct_right = ($GLOBALS['Data_Functor_Coproduct_right'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_right'));
  $__global_Data_Functor_Coproduct_left = ($GLOBALS['Data_Functor_Coproduct_left'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_left'));
  $__res = ($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_left)($v)))))));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_in7'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_in7';

// Data_Functor_Coproduct_Nested_in6
function Data_Functor_Coproduct_Nested_in6($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_in6';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Coproduct_right = ($GLOBALS['Data_Functor_Coproduct_right'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_right'));
  $__global_Data_Functor_Coproduct_left = ($GLOBALS['Data_Functor_Coproduct_left'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_left'));
  $__res = ($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_left)($v))))));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_in6'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_in6';

// Data_Functor_Coproduct_Nested_in5
function Data_Functor_Coproduct_Nested_in5($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_in5';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Coproduct_right = ($GLOBALS['Data_Functor_Coproduct_right'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_right'));
  $__global_Data_Functor_Coproduct_left = ($GLOBALS['Data_Functor_Coproduct_left'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_left'));
  $__res = ($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_left)($v)))));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_in5'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_in5';

// Data_Functor_Coproduct_Nested_in4
function Data_Functor_Coproduct_Nested_in4($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_in4';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Coproduct_right = ($GLOBALS['Data_Functor_Coproduct_right'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_right'));
  $__global_Data_Functor_Coproduct_left = ($GLOBALS['Data_Functor_Coproduct_left'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_left'));
  $__res = ($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_left)($v))));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_in4'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_in4';

// Data_Functor_Coproduct_Nested_in3
function Data_Functor_Coproduct_Nested_in3($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_in3';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Coproduct_right = ($GLOBALS['Data_Functor_Coproduct_right'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_right'));
  $__global_Data_Functor_Coproduct_left = ($GLOBALS['Data_Functor_Coproduct_left'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_left'));
  $__res = ($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_left)($v)));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_in3'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_in3';

// Data_Functor_Coproduct_Nested_in2
function Data_Functor_Coproduct_Nested_in2($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_in2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Coproduct_right = ($GLOBALS['Data_Functor_Coproduct_right'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_right'));
  $__global_Data_Functor_Coproduct_left = ($GLOBALS['Data_Functor_Coproduct_left'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_left'));
  $__res = ($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_left)($v));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_in2'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_in2';

// Data_Functor_Coproduct_Nested_in10
function Data_Functor_Coproduct_Nested_in10($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_in10';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Coproduct_right = ($GLOBALS['Data_Functor_Coproduct_right'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_right'));
  $__global_Data_Functor_Coproduct_left = ($GLOBALS['Data_Functor_Coproduct_left'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_left'));
  $__res = ($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_right)(($__global_Data_Functor_Coproduct_left)($v))))))))));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_in10'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_in10';


// Data_Functor_Coproduct_Nested_coproduct9
function Data_Functor_Coproduct_Nested_coproduct9($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_coproduct9';
  if ($__num < 10) {
    return phpurs_curry_fallback($__fn, func_get_args(), 10);
  }
  $__global_Data_Void_absurd = ($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd'));
  $__global_Data_Functor_Coproduct_Nested_unwrap = ($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'] ?? \Data\Functor\Coproduct\Nested\phpurs_eval_thunk('Data_Functor_Coproduct_Nested_unwrap'));
  $__case_0 = $y;
  switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($a)($r);
goto __end;;
break;
case "Right":
$_1 = ($__case_0)->v0;
$__case_0 = $_1;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($b)($r);
goto __end;;
break;
case "Right":
$_2 = ($__case_0)->v0;
$__case_0 = $_2;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($c)($r);
goto __end;;
break;
case "Right":
$_3 = ($__case_0)->v0;
$__case_0 = $_3;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($d)($r);
goto __end;;
break;
case "Right":
$_4 = ($__case_0)->v0;
$__case_0 = $_4;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($e)($r);
goto __end;;
break;
case "Right":
$_5 = ($__case_0)->v0;
$__case_0 = $_5;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($f)($r);
goto __end;;
break;
case "Right":
$_6 = ($__case_0)->v0;
$__case_0 = $_6;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($g)($r);
goto __end;;
break;
case "Right":
$_7 = ($__case_0)->v0;
$__case_0 = $_7;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($h)($r);
goto __end;;
break;
case "Right":
$_8 = ($__case_0)->v0;
$__case_0 = $_8;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($i)($r);
goto __end;;
break;
case "Right":
$_9 = ($__case_0)->v0;
$__res = ($__global_Data_Void_absurd)(($__global_Data_Functor_Coproduct_Nested_unwrap)($_9));
goto __end;;
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
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 10 < $__num ? $__res(...array_slice(func_get_args(), 10)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_coproduct9'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_coproduct9';

// Data_Functor_Coproduct_Nested_coproduct8
function Data_Functor_Coproduct_Nested_coproduct8($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_coproduct8';
  if ($__num < 9) {
    return phpurs_curry_fallback($__fn, func_get_args(), 9);
  }
  $__global_Data_Void_absurd = ($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd'));
  $__global_Data_Functor_Coproduct_Nested_unwrap = ($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'] ?? \Data\Functor\Coproduct\Nested\phpurs_eval_thunk('Data_Functor_Coproduct_Nested_unwrap'));
  $__case_0 = $y;
  switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($a)($r);
goto __end;;
break;
case "Right":
$_1 = ($__case_0)->v0;
$__case_0 = $_1;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($b)($r);
goto __end;;
break;
case "Right":
$_2 = ($__case_0)->v0;
$__case_0 = $_2;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($c)($r);
goto __end;;
break;
case "Right":
$_3 = ($__case_0)->v0;
$__case_0 = $_3;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($d)($r);
goto __end;;
break;
case "Right":
$_4 = ($__case_0)->v0;
$__case_0 = $_4;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($e)($r);
goto __end;;
break;
case "Right":
$_5 = ($__case_0)->v0;
$__case_0 = $_5;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($f)($r);
goto __end;;
break;
case "Right":
$_6 = ($__case_0)->v0;
$__case_0 = $_6;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($g)($r);
goto __end;;
break;
case "Right":
$_7 = ($__case_0)->v0;
$__case_0 = $_7;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($h)($r);
goto __end;;
break;
case "Right":
$_8 = ($__case_0)->v0;
$__res = ($__global_Data_Void_absurd)(($__global_Data_Functor_Coproduct_Nested_unwrap)($_8));
goto __end;;
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
  __end:
  return 9 < $__num ? $__res(...array_slice(func_get_args(), 9)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_coproduct8'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_coproduct8';

// Data_Functor_Coproduct_Nested_coproduct7
function Data_Functor_Coproduct_Nested_coproduct7($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_coproduct7';
  if ($__num < 8) {
    return phpurs_curry_fallback($__fn, func_get_args(), 8);
  }
  $__global_Data_Void_absurd = ($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd'));
  $__global_Data_Functor_Coproduct_Nested_unwrap = ($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'] ?? \Data\Functor\Coproduct\Nested\phpurs_eval_thunk('Data_Functor_Coproduct_Nested_unwrap'));
  $__case_0 = $y;
  switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($a)($r);
goto __end;;
break;
case "Right":
$_1 = ($__case_0)->v0;
$__case_0 = $_1;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($b)($r);
goto __end;;
break;
case "Right":
$_2 = ($__case_0)->v0;
$__case_0 = $_2;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($c)($r);
goto __end;;
break;
case "Right":
$_3 = ($__case_0)->v0;
$__case_0 = $_3;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($d)($r);
goto __end;;
break;
case "Right":
$_4 = ($__case_0)->v0;
$__case_0 = $_4;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($e)($r);
goto __end;;
break;
case "Right":
$_5 = ($__case_0)->v0;
$__case_0 = $_5;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($f)($r);
goto __end;;
break;
case "Right":
$_6 = ($__case_0)->v0;
$__case_0 = $_6;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($g)($r);
goto __end;;
break;
case "Right":
$_7 = ($__case_0)->v0;
$__res = ($__global_Data_Void_absurd)(($__global_Data_Functor_Coproduct_Nested_unwrap)($_7));
goto __end;;
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
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 8 < $__num ? $__res(...array_slice(func_get_args(), 8)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_coproduct7'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_coproduct7';

// Data_Functor_Coproduct_Nested_coproduct6
function Data_Functor_Coproduct_Nested_coproduct6($a, $b = null, $c = null, $d = null, $e = null, $f = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_coproduct6';
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, func_get_args(), 7);
  }
  $__global_Data_Void_absurd = ($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd'));
  $__global_Data_Functor_Coproduct_Nested_unwrap = ($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'] ?? \Data\Functor\Coproduct\Nested\phpurs_eval_thunk('Data_Functor_Coproduct_Nested_unwrap'));
  $__case_0 = $y;
  switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($a)($r);
goto __end;;
break;
case "Right":
$_1 = ($__case_0)->v0;
$__case_0 = $_1;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($b)($r);
goto __end;;
break;
case "Right":
$_2 = ($__case_0)->v0;
$__case_0 = $_2;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($c)($r);
goto __end;;
break;
case "Right":
$_3 = ($__case_0)->v0;
$__case_0 = $_3;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($d)($r);
goto __end;;
break;
case "Right":
$_4 = ($__case_0)->v0;
$__case_0 = $_4;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($e)($r);
goto __end;;
break;
case "Right":
$_5 = ($__case_0)->v0;
$__case_0 = $_5;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($f)($r);
goto __end;;
break;
case "Right":
$_6 = ($__case_0)->v0;
$__res = ($__global_Data_Void_absurd)(($__global_Data_Functor_Coproduct_Nested_unwrap)($_6));
goto __end;;
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
  __end:
  return 7 < $__num ? $__res(...array_slice(func_get_args(), 7)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_coproduct6'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_coproduct6';

// Data_Functor_Coproduct_Nested_coproduct5
function Data_Functor_Coproduct_Nested_coproduct5($a, $b = null, $c = null, $d = null, $e = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_coproduct5';
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
  $__global_Data_Void_absurd = ($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd'));
  $__global_Data_Functor_Coproduct_Nested_unwrap = ($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'] ?? \Data\Functor\Coproduct\Nested\phpurs_eval_thunk('Data_Functor_Coproduct_Nested_unwrap'));
  $__case_0 = $y;
  switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($a)($r);
goto __end;;
break;
case "Right":
$_1 = ($__case_0)->v0;
$__case_0 = $_1;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($b)($r);
goto __end;;
break;
case "Right":
$_2 = ($__case_0)->v0;
$__case_0 = $_2;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($c)($r);
goto __end;;
break;
case "Right":
$_3 = ($__case_0)->v0;
$__case_0 = $_3;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($d)($r);
goto __end;;
break;
case "Right":
$_4 = ($__case_0)->v0;
$__case_0 = $_4;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($e)($r);
goto __end;;
break;
case "Right":
$_5 = ($__case_0)->v0;
$__res = ($__global_Data_Void_absurd)(($__global_Data_Functor_Coproduct_Nested_unwrap)($_5));
goto __end;;
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
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 6 < $__num ? $__res(...array_slice(func_get_args(), 6)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_coproduct5'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_coproduct5';

// Data_Functor_Coproduct_Nested_coproduct4
function Data_Functor_Coproduct_Nested_coproduct4($a, $b = null, $c = null, $d = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_coproduct4';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
  $__global_Data_Void_absurd = ($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd'));
  $__global_Data_Functor_Coproduct_Nested_unwrap = ($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'] ?? \Data\Functor\Coproduct\Nested\phpurs_eval_thunk('Data_Functor_Coproduct_Nested_unwrap'));
  $__case_0 = $y;
  switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($a)($r);
goto __end;;
break;
case "Right":
$_1 = ($__case_0)->v0;
$__case_0 = $_1;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($b)($r);
goto __end;;
break;
case "Right":
$_2 = ($__case_0)->v0;
$__case_0 = $_2;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($c)($r);
goto __end;;
break;
case "Right":
$_3 = ($__case_0)->v0;
$__case_0 = $_3;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($d)($r);
goto __end;;
break;
case "Right":
$_4 = ($__case_0)->v0;
$__res = ($__global_Data_Void_absurd)(($__global_Data_Functor_Coproduct_Nested_unwrap)($_4));
goto __end;;
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
  __end:
  return 5 < $__num ? $__res(...array_slice(func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_coproduct4'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_coproduct4';

// Data_Functor_Coproduct_Nested_coproduct3
function Data_Functor_Coproduct_Nested_coproduct3($a, $b = null, $c = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_coproduct3';
  if ($__num < 4) {
    if ($__num === 3) return function($y) use ($a, $b, $c, $__fn) { return $__fn($a, $b, $c, $y); };
    if ($__num === 2) return function($c, $y = null) use ($a, $b, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $b, $c, $y);
      if ($__num2 === 1) return function($y) use ($a, $b, $c, $__fn) { return $__fn($a, $b, $c, $y); };
      return phpurs_curry_fallback($__fn, [$a, $b], 4);
    };
    if ($__num === 1) return function($b, $c = null, $y = null) use ($a, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($a, $b, $c, $y);
      if ($__num2 === 2) return function($y) use ($a, $b, $c, $__fn) { return $__fn($a, $b, $c, $y); };
      if ($__num2 === 1) return function($c, $y = null) use ($a, $b, $__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($a, $b, $c, $y);
        if ($__num3 === 1) return function($y) use ($a, $b, $c, $__fn) { return $__fn($a, $b, $c, $y); };
        return phpurs_curry_fallback($__fn, [$a, $b], 4);
      };
      return phpurs_curry_fallback($__fn, [$a], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__global_Data_Void_absurd = ($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd'));
  $__global_Data_Functor_Coproduct_Nested_unwrap = ($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'] ?? \Data\Functor\Coproduct\Nested\phpurs_eval_thunk('Data_Functor_Coproduct_Nested_unwrap'));
  $__case_0 = $y;
  switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($a)($r);
goto __end;;
break;
case "Right":
$_1 = ($__case_0)->v0;
$__case_0 = $_1;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($b)($r);
goto __end;;
break;
case "Right":
$_2 = ($__case_0)->v0;
$__case_0 = $_2;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($c)($r);
goto __end;;
break;
case "Right":
$_3 = ($__case_0)->v0;
$__res = ($__global_Data_Void_absurd)(($__global_Data_Functor_Coproduct_Nested_unwrap)($_3));
goto __end;;
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
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_coproduct3'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_coproduct3';

// Data_Functor_Coproduct_Nested_coproduct2
function Data_Functor_Coproduct_Nested_coproduct2($a, $b = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_coproduct2';
  if ($__num < 3) {
    if ($__num === 2) return function($y) use ($a, $b, $__fn) { return $__fn($a, $b, $y); };
    if ($__num === 1) return function($b, $y = null) use ($a, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $b, $y);
      if ($__num2 === 1) return function($y) use ($a, $b, $__fn) { return $__fn($a, $b, $y); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Void_absurd = ($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd'));
  $__global_Data_Functor_Coproduct_Nested_unwrap = ($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'] ?? \Data\Functor\Coproduct\Nested\phpurs_eval_thunk('Data_Functor_Coproduct_Nested_unwrap'));
  $__case_0 = $y;
  switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($a)($r);
goto __end;;
break;
case "Right":
$_1 = ($__case_0)->v0;
$__case_0 = $_1;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($b)($r);
goto __end;;
break;
case "Right":
$_2 = ($__case_0)->v0;
$__res = ($__global_Data_Void_absurd)(($__global_Data_Functor_Coproduct_Nested_unwrap)($_2));
goto __end;;
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
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_coproduct2'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_coproduct2';

// Data_Functor_Coproduct_Nested_coproduct10
function Data_Functor_Coproduct_Nested_coproduct10($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_coproduct10';
  if ($__num < 11) {
    return phpurs_curry_fallback($__fn, func_get_args(), 11);
  }
  $__global_Data_Void_absurd = ($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd'));
  $__global_Data_Functor_Coproduct_Nested_unwrap = ($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'] ?? \Data\Functor\Coproduct\Nested\phpurs_eval_thunk('Data_Functor_Coproduct_Nested_unwrap'));
  $__case_0 = $y;
  switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($a)($r);
goto __end;;
break;
case "Right":
$_1 = ($__case_0)->v0;
$__case_0 = $_1;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($b)($r);
goto __end;;
break;
case "Right":
$_2 = ($__case_0)->v0;
$__case_0 = $_2;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($c)($r);
goto __end;;
break;
case "Right":
$_3 = ($__case_0)->v0;
$__case_0 = $_3;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($d)($r);
goto __end;;
break;
case "Right":
$_4 = ($__case_0)->v0;
$__case_0 = $_4;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($e)($r);
goto __end;;
break;
case "Right":
$_5 = ($__case_0)->v0;
$__case_0 = $_5;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($f)($r);
goto __end;;
break;
case "Right":
$_6 = ($__case_0)->v0;
$__case_0 = $_6;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($g)($r);
goto __end;;
break;
case "Right":
$_7 = ($__case_0)->v0;
$__case_0 = $_7;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($h)($r);
goto __end;;
break;
case "Right":
$_8 = ($__case_0)->v0;
$__case_0 = $_8;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($i)($r);
goto __end;;
break;
case "Right":
$_9 = ($__case_0)->v0;
$__case_0 = $_9;
switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($j)($r);
goto __end;;
break;
case "Right":
$_10 = ($__case_0)->v0;
$__res = ($__global_Data_Void_absurd)(($__global_Data_Functor_Coproduct_Nested_unwrap)($_10));
goto __end;;
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
  __end:
  return 11 < $__num ? $__res(...array_slice(func_get_args(), 11)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_coproduct10'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_coproduct10';

// Data_Functor_Coproduct_Nested_coproduct1
function Data_Functor_Coproduct_Nested_coproduct1($y) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_coproduct1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Void_absurd = ($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd'));
  $__global_Data_Functor_Coproduct_Nested_unwrap = ($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'] ?? \Data\Functor\Coproduct\Nested\phpurs_eval_thunk('Data_Functor_Coproduct_Nested_unwrap'));
  $__case_0 = $y;
  switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = $r;
goto __end;;
break;
case "Right":
$_1 = ($__case_0)->v0;
$__res = ($__global_Data_Void_absurd)(($__global_Data_Functor_Coproduct_Nested_unwrap)($_1));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_coproduct1'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_coproduct1';

// Data_Functor_Coproduct_Nested_at9
function Data_Functor_Coproduct_Nested_at9($b, $f = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_at9';
  if ($__num < 3) {
    if ($__num === 2) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
    if ($__num === 1) return function($f, $y = null) use ($b, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($b, $f, $y);
      if ($__num2 === 1) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
      return phpurs_curry_fallback($__fn, [$b], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $y;
  if (((($__case_0)->tag === "Right") && (((($__case_0)->v0)->tag === "Right") && ((((($__case_0)->v0)->v0)->tag === "Right") && (((((($__case_0)->v0)->v0)->v0)->tag === "Right") && ((((((($__case_0)->v0)->v0)->v0)->v0)->tag === "Right") && (((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->tag === "Right") && ((((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->v0)->tag === "Right") && (((((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->v0)->v0)->tag === "Right") && (((((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->v0)->v0)->v0)->tag === "Left")))))))))) {
$r = ((((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->v0)->v0)->v0)->v0;
$__res = ($f)($r);
goto __end;;
} else {
if (true) {
$__res = $b;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_at9'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_at9';

// Data_Functor_Coproduct_Nested_at8
function Data_Functor_Coproduct_Nested_at8($b, $f = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_at8';
  if ($__num < 3) {
    if ($__num === 2) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
    if ($__num === 1) return function($f, $y = null) use ($b, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($b, $f, $y);
      if ($__num2 === 1) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
      return phpurs_curry_fallback($__fn, [$b], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $y;
  if (((($__case_0)->tag === "Right") && (((($__case_0)->v0)->tag === "Right") && ((((($__case_0)->v0)->v0)->tag === "Right") && (((((($__case_0)->v0)->v0)->v0)->tag === "Right") && ((((((($__case_0)->v0)->v0)->v0)->v0)->tag === "Right") && (((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->tag === "Right") && ((((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->v0)->tag === "Right") && ((((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->v0)->v0)->tag === "Left"))))))))) {
$r = (((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->v0)->v0)->v0;
$__res = ($f)($r);
goto __end;;
} else {
if (true) {
$__res = $b;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_at8'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_at8';

// Data_Functor_Coproduct_Nested_at7
function Data_Functor_Coproduct_Nested_at7($b, $f = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_at7';
  if ($__num < 3) {
    if ($__num === 2) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
    if ($__num === 1) return function($f, $y = null) use ($b, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($b, $f, $y);
      if ($__num2 === 1) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
      return phpurs_curry_fallback($__fn, [$b], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $y;
  if (((($__case_0)->tag === "Right") && (((($__case_0)->v0)->tag === "Right") && ((((($__case_0)->v0)->v0)->tag === "Right") && (((((($__case_0)->v0)->v0)->v0)->tag === "Right") && ((((((($__case_0)->v0)->v0)->v0)->v0)->tag === "Right") && (((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->tag === "Right") && (((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->v0)->tag === "Left")))))))) {
$r = ((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->v0)->v0;
$__res = ($f)($r);
goto __end;;
} else {
if (true) {
$__res = $b;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_at7'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_at7';

// Data_Functor_Coproduct_Nested_at6
function Data_Functor_Coproduct_Nested_at6($b, $f = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_at6';
  if ($__num < 3) {
    if ($__num === 2) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
    if ($__num === 1) return function($f, $y = null) use ($b, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($b, $f, $y);
      if ($__num2 === 1) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
      return phpurs_curry_fallback($__fn, [$b], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $y;
  if (((($__case_0)->tag === "Right") && (((($__case_0)->v0)->tag === "Right") && ((((($__case_0)->v0)->v0)->tag === "Right") && (((((($__case_0)->v0)->v0)->v0)->tag === "Right") && ((((((($__case_0)->v0)->v0)->v0)->v0)->tag === "Right") && ((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->tag === "Left"))))))) {
$r = (((((($__case_0)->v0)->v0)->v0)->v0)->v0)->v0;
$__res = ($f)($r);
goto __end;;
} else {
if (true) {
$__res = $b;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_at6'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_at6';

// Data_Functor_Coproduct_Nested_at5
function Data_Functor_Coproduct_Nested_at5($b, $f = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_at5';
  if ($__num < 3) {
    if ($__num === 2) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
    if ($__num === 1) return function($f, $y = null) use ($b, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($b, $f, $y);
      if ($__num2 === 1) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
      return phpurs_curry_fallback($__fn, [$b], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $y;
  if (((($__case_0)->tag === "Right") && (((($__case_0)->v0)->tag === "Right") && ((((($__case_0)->v0)->v0)->tag === "Right") && (((((($__case_0)->v0)->v0)->v0)->tag === "Right") && (((((($__case_0)->v0)->v0)->v0)->v0)->tag === "Left")))))) {
$r = ((((($__case_0)->v0)->v0)->v0)->v0)->v0;
$__res = ($f)($r);
goto __end;;
} else {
if (true) {
$__res = $b;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_at5'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_at5';

// Data_Functor_Coproduct_Nested_at4
function Data_Functor_Coproduct_Nested_at4($b, $f = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_at4';
  if ($__num < 3) {
    if ($__num === 2) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
    if ($__num === 1) return function($f, $y = null) use ($b, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($b, $f, $y);
      if ($__num2 === 1) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
      return phpurs_curry_fallback($__fn, [$b], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $y;
  if (((($__case_0)->tag === "Right") && (((($__case_0)->v0)->tag === "Right") && ((((($__case_0)->v0)->v0)->tag === "Right") && ((((($__case_0)->v0)->v0)->v0)->tag === "Left"))))) {
$r = (((($__case_0)->v0)->v0)->v0)->v0;
$__res = ($f)($r);
goto __end;;
} else {
if (true) {
$__res = $b;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_at4'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_at4';

// Data_Functor_Coproduct_Nested_at3
function Data_Functor_Coproduct_Nested_at3($b, $f = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_at3';
  if ($__num < 3) {
    if ($__num === 2) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
    if ($__num === 1) return function($f, $y = null) use ($b, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($b, $f, $y);
      if ($__num2 === 1) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
      return phpurs_curry_fallback($__fn, [$b], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $y;
  if (((($__case_0)->tag === "Right") && (((($__case_0)->v0)->tag === "Right") && (((($__case_0)->v0)->v0)->tag === "Left")))) {
$r = ((($__case_0)->v0)->v0)->v0;
$__res = ($f)($r);
goto __end;;
} else {
if (true) {
$__res = $b;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_at3'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_at3';

// Data_Functor_Coproduct_Nested_at2
function Data_Functor_Coproduct_Nested_at2($b, $f = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_at2';
  if ($__num < 3) {
    if ($__num === 2) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
    if ($__num === 1) return function($f, $y = null) use ($b, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($b, $f, $y);
      if ($__num2 === 1) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
      return phpurs_curry_fallback($__fn, [$b], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $y;
  if (((($__case_0)->tag === "Right") && ((($__case_0)->v0)->tag === "Left"))) {
$r = (($__case_0)->v0)->v0;
$__res = ($f)($r);
goto __end;;
} else {
if (true) {
$__res = $b;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_at2'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_at2';

// Data_Functor_Coproduct_Nested_at10
function Data_Functor_Coproduct_Nested_at10($b, $f = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_at10';
  if ($__num < 3) {
    if ($__num === 2) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
    if ($__num === 1) return function($f, $y = null) use ($b, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($b, $f, $y);
      if ($__num2 === 1) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
      return phpurs_curry_fallback($__fn, [$b], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $y;
  if (((($__case_0)->tag === "Right") && (((($__case_0)->v0)->tag === "Right") && ((((($__case_0)->v0)->v0)->tag === "Right") && (((((($__case_0)->v0)->v0)->v0)->tag === "Right") && ((((((($__case_0)->v0)->v0)->v0)->v0)->tag === "Right") && (((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->tag === "Right") && ((((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->v0)->tag === "Right") && (((((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->v0)->v0)->tag === "Right") && ((((((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->v0)->v0)->v0)->tag === "Right") && ((((((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->v0)->v0)->v0)->v0)->tag === "Left"))))))))))) {
$r = (((((((((($__case_0)->v0)->v0)->v0)->v0)->v0)->v0)->v0)->v0)->v0)->v0;
$__res = ($f)($r);
goto __end;;
} else {
if (true) {
$__res = $b;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_at10'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_at10';

// Data_Functor_Coproduct_Nested_at1
function Data_Functor_Coproduct_Nested_at1($b, $f = null, $y = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Nested_at1';
  if ($__num < 3) {
    if ($__num === 2) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
    if ($__num === 1) return function($f, $y = null) use ($b, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($b, $f, $y);
      if ($__num2 === 1) return function($y) use ($b, $f, $__fn) { return $__fn($b, $f, $y); };
      return phpurs_curry_fallback($__fn, [$b], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $y;
  switch (($__case_0)->tag) {
case "Left":
$r = ($__case_0)->v0;
$__res = ($f)($r);
goto __end;;
break;
default:
$__res = $b;
goto __end;;
break;
};
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Nested_at1'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Nested_at1';

