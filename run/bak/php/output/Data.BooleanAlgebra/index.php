<?php

namespace Data\BooleanAlgebra;

require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';

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
      case 'Data_BooleanAlgebra_heytingAlgebraRecord': $v = \Data\HeytingAlgebra\Data_HeytingAlgebra_heytingAlgebraRecord(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_BooleanAlgebra_booleanAlgebraUnit': $v = (object)["HeytingAlgebra0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_HeytingAlgebra_heytingAlgebraUnit = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraUnit'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraUnit'));
  $__res = $__global_Data_HeytingAlgebra_heytingAlgebraUnit;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_BooleanAlgebra_booleanAlgebraRecordNil': $v = (object)["HeytingAlgebraRecord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_HeytingAlgebra_heytingAlgebraRecordNil = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraRecordNil'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraRecordNil'));
  $__res = $__global_Data_HeytingAlgebra_heytingAlgebraRecordNil;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_BooleanAlgebra_booleanAlgebraProxy': $v = (object)["HeytingAlgebra0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_HeytingAlgebra_heytingAlgebraProxy = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraProxy'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraProxy'));
  $__res = $__global_Data_HeytingAlgebra_heytingAlgebraProxy;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_BooleanAlgebra_booleanAlgebraBoolean': $v = (object)["HeytingAlgebra0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_HeytingAlgebra_heytingAlgebraBoolean = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'));
  $__res = $__global_Data_HeytingAlgebra_heytingAlgebraBoolean;
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



// Data_BooleanAlgebra_BooleanAlgebraRecord$Dict
function Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict'] = __NAMESPACE__ . '\\Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict';

// Data_BooleanAlgebra_BooleanAlgebra$Dict
function Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict'] = __NAMESPACE__ . '\\Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict';



// Data_BooleanAlgebra_booleanAlgebraRecordCons
function Data_BooleanAlgebra_booleanAlgebraRecordCons($dictIsSymbol) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_BooleanAlgebra_booleanAlgebraRecordCons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_HeytingAlgebra_heytingAlgebraRecordCons = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraRecordCons'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraRecordCons'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $heytingAlgebraRecordCons = ($__global_Data_HeytingAlgebra_heytingAlgebraRecordCons)($dictIsSymbol, $__global_Prim_undefined);
  $__res = (function() use ($heytingAlgebraRecordCons, $__global_Prim_undefined, &$__fn) {
  $__fn = function($__dollar____unused, $dictBooleanAlgebraRecord = null) use ($heytingAlgebraRecordCons, $__global_Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictBooleanAlgebraRecord) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $dictBooleanAlgebraRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $heytingAlgebraRecordCons1 = ($heytingAlgebraRecordCons)((($dictBooleanAlgebraRecord)->HeytingAlgebraRecord0)($__global_Prim_undefined));
  $__res = function($dictBooleanAlgebra) use ($heytingAlgebraRecordCons1, $__global_Prim_undefined) {
  $__num = func_num_args();
  $heytingAlgebraRecordCons2 = ($heytingAlgebraRecordCons1)((($dictBooleanAlgebra)->HeytingAlgebra0)($__global_Prim_undefined));
  $__res = (object)["HeytingAlgebraRecord0" => function($__dollar____unused) use ($heytingAlgebraRecordCons2) {
  $__num = func_num_args();
  $__res = $heytingAlgebraRecordCons2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_BooleanAlgebra_booleanAlgebraRecordCons'] = __NAMESPACE__ . '\\Data_BooleanAlgebra_booleanAlgebraRecordCons';

// Data_BooleanAlgebra_booleanAlgebraRecord
function Data_BooleanAlgebra_booleanAlgebraRecord($__dollar____unused, $dictBooleanAlgebraRecord = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_BooleanAlgebra_booleanAlgebraRecord';
  if ($__num < 2) {
    if ($__num === 1) return function($dictBooleanAlgebraRecord) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $dictBooleanAlgebraRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_BooleanAlgebra_heytingAlgebraRecord = ($GLOBALS['Data_BooleanAlgebra_heytingAlgebraRecord'] ?? \Data\BooleanAlgebra\phpurs_eval_thunk('Data_BooleanAlgebra_heytingAlgebraRecord'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $heytingAlgebraRecord1 = ($__global_Data_BooleanAlgebra_heytingAlgebraRecord)((($dictBooleanAlgebraRecord)->HeytingAlgebraRecord0)($__global_Prim_undefined));
  $__res = (object)["HeytingAlgebra0" => function($__dollar____unused) use ($heytingAlgebraRecord1) {
  $__num = func_num_args();
  $__res = $heytingAlgebraRecord1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_BooleanAlgebra_booleanAlgebraRecord'] = __NAMESPACE__ . '\\Data_BooleanAlgebra_booleanAlgebraRecord';


// Data_BooleanAlgebra_booleanAlgebraFn
function Data_BooleanAlgebra_booleanAlgebraFn($dictBooleanAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_BooleanAlgebra_booleanAlgebraFn';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_HeytingAlgebra_heytingAlgebraFunction = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraFunction'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraFunction'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $heytingAlgebraFunction = ($__global_Data_HeytingAlgebra_heytingAlgebraFunction)((($dictBooleanAlgebra)->HeytingAlgebra0)($__global_Prim_undefined));
  $__res = (object)["HeytingAlgebra0" => function($__dollar____unused) use ($heytingAlgebraFunction) {
  $__num = func_num_args();
  $__res = $heytingAlgebraFunction;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_BooleanAlgebra_booleanAlgebraFn'] = __NAMESPACE__ . '\\Data_BooleanAlgebra_booleanAlgebraFn';


