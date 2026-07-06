<?php

namespace Data\Newtype;

require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Endo/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup.First/index.php';
require_once __DIR__ . '/../Data.Semigroup.Last/index.php';
require_once __DIR__ . '/../Safe.Coerce/index.php';

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
      case 'Data_Newtype_coerce': $v = \Safe\Coerce\Safe_Coerce_coerce(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Newtype_wrap1': $v = \Data\Newtype\Data_Newtype_wrap(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Newtype_unwrap1': $v = \Data\Newtype\Data_Newtype_unwrap(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Newtype_newtypeMultiplicative': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Newtype_newtypeLast': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Newtype_newtypeFirst': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Newtype_newtypeEndo': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Newtype_newtypeDual': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Newtype_newtypeDisj': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Newtype_newtypeConj': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Newtype_newtypeAdditive': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };



// Data_Newtype_Newtype$Dict
function Data_Newtype_Newtype__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Newtype_Newtype__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Newtype_Newtype__dollar__Dict'] = __NAMESPACE__ . '\\Data_Newtype_Newtype__dollar__Dict';

// Data_Newtype_wrap
function Data_Newtype_wrap($__dollar____unused) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Newtype_wrap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Newtype_wrap'] = __NAMESPACE__ . '\\Data_Newtype_wrap';


// Data_Newtype_unwrap
function Data_Newtype_unwrap($__dollar____unused) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Newtype_unwrap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Newtype_unwrap'] = __NAMESPACE__ . '\\Data_Newtype_unwrap';


// Data_Newtype_underF2
function Data_Newtype_underF2($__dollar____unused___, $__dollar____unused__ = null, $__dollar____unused_ = null, $__dollar____unused = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Newtype_underF2';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...array_slice(func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Newtype_underF2'] = __NAMESPACE__ . '\\Data_Newtype_underF2';

// Data_Newtype_underF
function Data_Newtype_underF($__dollar____unused___, $__dollar____unused__ = null, $__dollar____unused_ = null, $__dollar____unused = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Newtype_underF';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...array_slice(func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Newtype_underF'] = __NAMESPACE__ . '\\Data_Newtype_underF';

// Data_Newtype_under2
function Data_Newtype_under2($__dollar____unused_, $__dollar____unused = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Newtype_under2';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($__dollar____unused_, $__dollar____unused, $__fn) { return $__fn($__dollar____unused_, $__dollar____unused, $v); };
    if ($__num === 1) return function($__dollar____unused, $v = null) use ($__dollar____unused_, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($__dollar____unused_, $__dollar____unused, $v);
      if ($__num2 === 1) return function($v) use ($__dollar____unused_, $__dollar____unused, $__fn) { return $__fn($__dollar____unused_, $__dollar____unused, $v); };
      return phpurs_curry_fallback($__fn, [$__dollar____unused_], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Newtype_under2'] = __NAMESPACE__ . '\\Data_Newtype_under2';

// Data_Newtype_under
function Data_Newtype_under($__dollar____unused_, $__dollar____unused = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Newtype_under';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($__dollar____unused_, $__dollar____unused, $__fn) { return $__fn($__dollar____unused_, $__dollar____unused, $v); };
    if ($__num === 1) return function($__dollar____unused, $v = null) use ($__dollar____unused_, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($__dollar____unused_, $__dollar____unused, $v);
      if ($__num2 === 1) return function($v) use ($__dollar____unused_, $__dollar____unused, $__fn) { return $__fn($__dollar____unused_, $__dollar____unused, $v); };
      return phpurs_curry_fallback($__fn, [$__dollar____unused_], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Newtype_under'] = __NAMESPACE__ . '\\Data_Newtype_under';

// Data_Newtype_un
function Data_Newtype_un($__dollar____unused, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Newtype_un';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Newtype_unwrap1 = ($GLOBALS['Data_Newtype_unwrap1'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap1'));
  $__res = $__global_Data_Newtype_unwrap1;
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Newtype_un'] = __NAMESPACE__ . '\\Data_Newtype_un';

// Data_Newtype_traverse
function Data_Newtype_traverse($__dollar____unused_, $__dollar____unused = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Newtype_traverse';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($__dollar____unused_, $__dollar____unused, $__fn) { return $__fn($__dollar____unused_, $__dollar____unused, $v); };
    if ($__num === 1) return function($__dollar____unused, $v = null) use ($__dollar____unused_, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($__dollar____unused_, $__dollar____unused, $v);
      if ($__num2 === 1) return function($v) use ($__dollar____unused_, $__dollar____unused, $__fn) { return $__fn($__dollar____unused_, $__dollar____unused, $v); };
      return phpurs_curry_fallback($__fn, [$__dollar____unused_], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Newtype_traverse'] = __NAMESPACE__ . '\\Data_Newtype_traverse';

// Data_Newtype_overF2
function Data_Newtype_overF2($__dollar____unused___, $__dollar____unused__ = null, $__dollar____unused_ = null, $__dollar____unused = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Newtype_overF2';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...array_slice(func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Newtype_overF2'] = __NAMESPACE__ . '\\Data_Newtype_overF2';

// Data_Newtype_overF
function Data_Newtype_overF($__dollar____unused___, $__dollar____unused__ = null, $__dollar____unused_ = null, $__dollar____unused = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Newtype_overF';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...array_slice(func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Newtype_overF'] = __NAMESPACE__ . '\\Data_Newtype_overF';

// Data_Newtype_over2
function Data_Newtype_over2($__dollar____unused_, $__dollar____unused = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Newtype_over2';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($__dollar____unused_, $__dollar____unused, $__fn) { return $__fn($__dollar____unused_, $__dollar____unused, $v); };
    if ($__num === 1) return function($__dollar____unused, $v = null) use ($__dollar____unused_, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($__dollar____unused_, $__dollar____unused, $v);
      if ($__num2 === 1) return function($v) use ($__dollar____unused_, $__dollar____unused, $__fn) { return $__fn($__dollar____unused_, $__dollar____unused, $v); };
      return phpurs_curry_fallback($__fn, [$__dollar____unused_], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Newtype_over2'] = __NAMESPACE__ . '\\Data_Newtype_over2';

// Data_Newtype_over
function Data_Newtype_over($__dollar____unused_, $__dollar____unused = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Newtype_over';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($__dollar____unused_, $__dollar____unused, $__fn) { return $__fn($__dollar____unused_, $__dollar____unused, $v); };
    if ($__num === 1) return function($__dollar____unused, $v = null) use ($__dollar____unused_, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($__dollar____unused_, $__dollar____unused, $v);
      if ($__num2 === 1) return function($v) use ($__dollar____unused_, $__dollar____unused, $__fn) { return $__fn($__dollar____unused_, $__dollar____unused, $v); };
      return phpurs_curry_fallback($__fn, [$__dollar____unused_], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Newtype_over'] = __NAMESPACE__ . '\\Data_Newtype_over';









// Data_Newtype_modify
function Data_Newtype_modify($__dollar____unused, $fn = null, $t = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Newtype_modify';
  if ($__num < 3) {
    if ($__num === 2) return function($t) use ($__dollar____unused, $fn, $__fn) { return $__fn($__dollar____unused, $fn, $t); };
    if ($__num === 1) return function($fn, $t = null) use ($__dollar____unused, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($__dollar____unused, $fn, $t);
      if ($__num2 === 1) return function($t) use ($__dollar____unused, $fn, $__fn) { return $__fn($__dollar____unused, $fn, $t); };
      return phpurs_curry_fallback($__fn, [$__dollar____unused], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Newtype_wrap1 = ($GLOBALS['Data_Newtype_wrap1'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_wrap1'));
  $__global_Data_Newtype_unwrap1 = ($GLOBALS['Data_Newtype_unwrap1'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap1'));
  $__res = ($__global_Data_Newtype_wrap1)(($fn)(($__global_Data_Newtype_unwrap1)($t)));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Newtype_modify'] = __NAMESPACE__ . '\\Data_Newtype_modify';

// Data_Newtype_collect
function Data_Newtype_collect($__dollar____unused_, $__dollar____unused = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Newtype_collect';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($__dollar____unused_, $__dollar____unused, $__fn) { return $__fn($__dollar____unused_, $__dollar____unused, $v); };
    if ($__num === 1) return function($__dollar____unused, $v = null) use ($__dollar____unused_, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($__dollar____unused_, $__dollar____unused, $v);
      if ($__num2 === 1) return function($v) use ($__dollar____unused_, $__dollar____unused, $__fn) { return $__fn($__dollar____unused_, $__dollar____unused, $v); };
      return phpurs_curry_fallback($__fn, [$__dollar____unused_], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Newtype_collect'] = __NAMESPACE__ . '\\Data_Newtype_collect';

// Data_Newtype_alaF
function Data_Newtype_alaF($__dollar____unused___, $__dollar____unused__ = null, $__dollar____unused_ = null, $__dollar____unused = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Newtype_alaF';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...array_slice(func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Newtype_alaF'] = __NAMESPACE__ . '\\Data_Newtype_alaF';

// Data_Newtype_ala
function Data_Newtype_ala($__dollar____unused__, $__dollar____unused_ = null, $__dollar____unused = null, $v = null, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Newtype_ala';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__global_Data_Newtype_wrap1 = ($GLOBALS['Data_Newtype_wrap1'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_wrap1'));
  $__res = ($__global_Data_Newtype_coerce)(($f)($__global_Data_Newtype_wrap1));
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...array_slice(func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Newtype_ala'] = __NAMESPACE__ . '\\Data_Newtype_ala';

