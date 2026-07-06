<?php

namespace Data\String\NonEmpty\CodePoints;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.String.CodePoints/index.php';
require_once __DIR__ . '/../Data.String.NonEmpty.CodePoints/index.php';
require_once __DIR__ . '/../Data.String.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.String.Pattern/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
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
      case 'Data_String_NonEmpty_CodePoints_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_String_NonEmpty_CodePoints_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_String_NonEmpty_CodePoints_lessThan': $v = \Data\Ord\Data_Ord_lessThan(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_String_NonEmpty_CodePoints_fromJust': $v = \Data\Maybe\Data_Maybe_fromJust(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_String_NonEmpty_CodePoints_greaterThanOrEq': $v = \Data\Ord\Data_Ord_greaterThanOrEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_String_NonEmpty_CodePoints_toNonEmptyString': $v = "\\Data\\String\\NonEmpty\\Internal\\Data_String_NonEmpty_Internal_NonEmptyString"; break;
      case 'Data_String_NonEmpty_CodePoints_singleton': $v = (($GLOBALS['Data_String_NonEmpty_CodePoints_compose'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_compose')))("\\Data\\String\\NonEmpty\\Internal\\Data_String_NonEmpty_Internal_NonEmptyString", ($GLOBALS['Data_String_CodePoints_singleton'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_singleton'))); break;
      case 'Data_String_NonEmpty_CodePoints_lastIndexOf': $v = (($GLOBALS['Data_String_NonEmpty_CodePoints_compose'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_compose')))("\\Data\\String\\NonEmpty\\CodePoints\\Data_String_NonEmpty_CodePoints_liftS", "\\Data\\String\\CodePoints\\Data_String_CodePoints_lastIndexOf"); break;
      case 'Data_String_NonEmpty_CodePoints_indexOf': $v = (($GLOBALS['Data_String_NonEmpty_CodePoints_compose'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_compose')))("\\Data\\String\\NonEmpty\\CodePoints\\Data_String_NonEmpty_CodePoints_liftS", "\\Data\\String\\CodePoints\\Data_String_CodePoints_indexOf"); break;
      case 'Data_String_NonEmpty_CodePoints_length': $v = (($GLOBALS['Data_String_NonEmpty_CodePoints_compose'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_compose')))(($GLOBALS['Data_String_CodePoints_length'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_length')), "\\Data\\String\\NonEmpty\\CodePoints\\Data_String_NonEmpty_CodePoints_fromNonEmptyString"); break;
      case 'Data_String_NonEmpty_CodePoints_toCodePointArray': $v = (($GLOBALS['Data_String_NonEmpty_CodePoints_compose'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_compose')))(($GLOBALS['Data_String_CodePoints_toCodePointArray'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_toCodePointArray')), "\\Data\\String\\NonEmpty\\CodePoints\\Data_String_NonEmpty_CodePoints_fromNonEmptyString"); break;
      case 'Data_String_NonEmpty_CodePoints_toNonEmptyCodePointArray': $v = (($GLOBALS['Data_String_NonEmpty_CodePoints_compose'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_compose')))((($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial')))(function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_String_NonEmpty_CodePoints_fromJust = ($GLOBALS['Data_String_NonEmpty_CodePoints_fromJust'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_fromJust'));
  $__res = $__global_Data_String_NonEmpty_CodePoints_fromJust;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), (($GLOBALS['Data_String_NonEmpty_CodePoints_compose'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_compose')))("\\Data\\Array\\NonEmpty\\Data_Array_NonEmpty_fromArray", ($GLOBALS['Data_String_NonEmpty_CodePoints_toCodePointArray'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_toCodePointArray')))); break;
      case 'Data_String_NonEmpty_CodePoints_fromNonEmptyCodePointArray': $v = (($GLOBALS['Data_String_NonEmpty_CodePoints_compose'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_compose')))((($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial')))(function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_String_NonEmpty_CodePoints_fromJust = ($GLOBALS['Data_String_NonEmpty_CodePoints_fromJust'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_fromJust'));
  $__res = $__global_Data_String_NonEmpty_CodePoints_fromJust;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), (($GLOBALS['Data_String_NonEmpty_CodePoints_compose'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_compose')))("\\Data\\String\\NonEmpty\\CodePoints\\Data_String_NonEmpty_CodePoints_fromCodePointArray", "\\Data\\Array\\NonEmpty\\Data_Array_NonEmpty_toArray")); break;
      case 'Data_String_NonEmpty_CodePoints_countPrefix': $v = (($GLOBALS['Data_String_NonEmpty_CodePoints_compose'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_compose')))("\\Data\\String\\NonEmpty\\CodePoints\\Data_String_NonEmpty_CodePoints_liftS", ($GLOBALS['Data_String_CodePoints_countPrefix'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_countPrefix'))); break;
      case 'Data_String_NonEmpty_CodePoints_codePointAt': $v = (($GLOBALS['Data_String_NonEmpty_CodePoints_compose'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_compose')))("\\Data\\String\\NonEmpty\\CodePoints\\Data_String_NonEmpty_CodePoints_liftS", "\\Data\\String\\CodePoints\\Data_String_CodePoints_codePointAt"); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };








// Data_String_NonEmpty_CodePoints_snoc
function Data_String_NonEmpty_CodePoints_snoc($c, $s = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_CodePoints_snoc';
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($c, $__fn) { return $__fn($c, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_String_CodePoints_singleton = ($GLOBALS['Data_String_CodePoints_singleton'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_singleton'));
  $__res = ($s . ($__global_Data_String_CodePoints_singleton)($c));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_CodePoints_snoc'] = __NAMESPACE__ . '\\Data_String_NonEmpty_CodePoints_snoc';


// Data_String_NonEmpty_CodePoints_liftS
function Data_String_NonEmpty_CodePoints_liftS($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_CodePoints_liftS';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$s = $__case_1;
$__res = ($f1)($s);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_CodePoints_liftS'] = __NAMESPACE__ . '\\Data_String_NonEmpty_CodePoints_liftS';

// Data_String_NonEmpty_CodePoints_takeWhile
function Data_String_NonEmpty_CodePoints_takeWhile($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_CodePoints_takeWhile';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_NonEmpty_CodePoints_compose = ($GLOBALS['Data_String_NonEmpty_CodePoints_compose'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_compose'));
  $__global_Data_String_NonEmpty_Internal_fromString = ($GLOBALS['Data_String_NonEmpty_Internal_fromString'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_fromString'));
  $__global_Data_String_NonEmpty_CodePoints_liftS = ($GLOBALS['Data_String_NonEmpty_CodePoints_liftS'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_liftS'));
  $__global_Data_String_CodePoints_takeWhile = ($GLOBALS['Data_String_CodePoints_takeWhile'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_takeWhile'));
  $__res = ($__global_Data_String_NonEmpty_CodePoints_compose)($__global_Data_String_NonEmpty_Internal_fromString, ($__global_Data_String_NonEmpty_CodePoints_liftS)(($__global_Data_String_CodePoints_takeWhile)($f)));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_CodePoints_takeWhile'] = __NAMESPACE__ . '\\Data_String_NonEmpty_CodePoints_takeWhile';

// Data_String_NonEmpty_CodePoints_lastIndexOf'
function Data_String_NonEmpty_CodePoints_lastIndexOf__prime__($pat) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_CodePoints_lastIndexOf__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_NonEmpty_CodePoints_compose = ($GLOBALS['Data_String_NonEmpty_CodePoints_compose'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_compose'));
  $__global_Data_String_NonEmpty_CodePoints_liftS = ($GLOBALS['Data_String_NonEmpty_CodePoints_liftS'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_liftS'));
  $__global_Data_String_CodePoints_lastIndexOf__prime__ = ($GLOBALS['Data_String_CodePoints_lastIndexOf__prime__'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_lastIndexOf__prime__'));
  $__res = ($__global_Data_String_NonEmpty_CodePoints_compose)($__global_Data_String_NonEmpty_CodePoints_liftS, ($__global_Data_String_CodePoints_lastIndexOf__prime__)($pat));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_CodePoints_lastIndexOf__prime__'] = __NAMESPACE__ . '\\Data_String_NonEmpty_CodePoints_lastIndexOf__prime__';


// Data_String_NonEmpty_CodePoints_indexOf'
function Data_String_NonEmpty_CodePoints_indexOf__prime__($pat) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_CodePoints_indexOf__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_NonEmpty_CodePoints_compose = ($GLOBALS['Data_String_NonEmpty_CodePoints_compose'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_compose'));
  $__global_Data_String_NonEmpty_CodePoints_liftS = ($GLOBALS['Data_String_NonEmpty_CodePoints_liftS'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_liftS'));
  $__global_Data_String_CodePoints_indexOf__prime__ = ($GLOBALS['Data_String_CodePoints_indexOf__prime__'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_indexOf__prime__'));
  $__res = ($__global_Data_String_NonEmpty_CodePoints_compose)($__global_Data_String_NonEmpty_CodePoints_liftS, ($__global_Data_String_CodePoints_indexOf__prime__)($pat));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_CodePoints_indexOf__prime__'] = __NAMESPACE__ . '\\Data_String_NonEmpty_CodePoints_indexOf__prime__';


// Data_String_NonEmpty_CodePoints_fromNonEmptyString
function Data_String_NonEmpty_CodePoints_fromNonEmptyString($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_CodePoints_fromNonEmptyString';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (true) {
$s = $__case_0;
$__res = $s;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_CodePoints_fromNonEmptyString'] = __NAMESPACE__ . '\\Data_String_NonEmpty_CodePoints_fromNonEmptyString';


// Data_String_NonEmpty_CodePoints_splitAt
function Data_String_NonEmpty_CodePoints_splitAt($i, $nes = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_CodePoints_splitAt';
  if ($__num < 2) {
    if ($__num === 1) return function($nes) use ($i, $__fn) { return $__fn($i, $nes); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_String_CodePoints_splitAt = ($GLOBALS['Data_String_CodePoints_splitAt'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_splitAt'));
  $__global_Data_String_NonEmpty_CodePoints_fromNonEmptyString = ($GLOBALS['Data_String_NonEmpty_CodePoints_fromNonEmptyString'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_fromNonEmptyString'));
  $__global_Data_String_NonEmpty_Internal_fromString = ($GLOBALS['Data_String_NonEmpty_Internal_fromString'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_fromString'));
  $v = ($__global_Data_String_CodePoints_splitAt)($i, ($__global_Data_String_NonEmpty_CodePoints_fromNonEmptyString)($nes));
  $__case_0 = $v;
  if (is_object($__case_0)) {
$before = ($__case_0)->before;
$after = ($__case_0)->after;
$__res = (object)["before" => ($__global_Data_String_NonEmpty_Internal_fromString)($before), "after" => ($__global_Data_String_NonEmpty_Internal_fromString)($after)];
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_CodePoints_splitAt'] = __NAMESPACE__ . '\\Data_String_NonEmpty_CodePoints_splitAt';

// Data_String_NonEmpty_CodePoints_take
function Data_String_NonEmpty_CodePoints_take($i, $nes = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_CodePoints_take';
  if ($__num < 2) {
    if ($__num === 1) return function($nes) use ($i, $__fn) { return $__fn($i, $nes); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_String_NonEmpty_CodePoints_fromNonEmptyString = ($GLOBALS['Data_String_NonEmpty_CodePoints_fromNonEmptyString'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_fromNonEmptyString'));
  $__global_Data_String_NonEmpty_CodePoints_lessThan = ($GLOBALS['Data_String_NonEmpty_CodePoints_lessThan'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_lessThan'));
  $__global_Data_String_CodePoints_take = ($GLOBALS['Data_String_CodePoints_take'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_take'));
  $s = ($__global_Data_String_NonEmpty_CodePoints_fromNonEmptyString)($nes);
  $__case_0 = ($__global_Data_String_NonEmpty_CodePoints_lessThan)($i, 1);
  switch ($__case_0) {
case true:
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
default:
$__res = new Phpurs_Data1("Just", ($__global_Data_String_CodePoints_take)($i, $s));
goto __end;;
break;
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_CodePoints_take'] = __NAMESPACE__ . '\\Data_String_NonEmpty_CodePoints_take';



// Data_String_NonEmpty_CodePoints_uncons
function Data_String_NonEmpty_CodePoints_uncons($nes) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_CodePoints_uncons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_NonEmpty_CodePoints_fromNonEmptyString = ($GLOBALS['Data_String_NonEmpty_CodePoints_fromNonEmptyString'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_fromNonEmptyString'));
  $__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
  $__global_Data_String_NonEmpty_CodePoints_fromJust = ($GLOBALS['Data_String_NonEmpty_CodePoints_fromJust'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_fromJust'));
  $__global_Data_String_CodePoints_codePointAt = ($GLOBALS['Data_String_CodePoints_codePointAt'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_codePointAt'));
  $__global_Data_String_NonEmpty_Internal_fromString = ($GLOBALS['Data_String_NonEmpty_Internal_fromString'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_fromString'));
  $__global_Data_String_CodePoints_drop = ($GLOBALS['Data_String_CodePoints_drop'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_drop'));
  $s = ($__global_Data_String_NonEmpty_CodePoints_fromNonEmptyString)($nes);
  $__res = (object)["head" => ($__global_Partial_Unsafe__unsafePartial)(function($__dollar____unused) use ($__global_Data_String_NonEmpty_CodePoints_fromJust) {
  $__num = func_num_args();
  $__res = $__global_Data_String_NonEmpty_CodePoints_fromJust;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($__global_Data_String_CodePoints_codePointAt)(0, $s)), "tail" => ($__global_Data_String_NonEmpty_Internal_fromString)(($__global_Data_String_CodePoints_drop)(1, $s))];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_CodePoints_uncons'] = __NAMESPACE__ . '\\Data_String_NonEmpty_CodePoints_uncons';

// Data_String_NonEmpty_CodePoints_fromFoldable1
function Data_String_NonEmpty_CodePoints_fromFoldable1($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_CodePoints_fromFoldable1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Semigroup_semigroupString = ($GLOBALS['Data_Semigroup_semigroupString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupString'));
  $__global_Data_String_NonEmpty_CodePoints_singleton = ($GLOBALS['Data_String_NonEmpty_CodePoints_singleton'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_singleton'));
  $__res = (($dictFoldable1)->foldMap1)($__global_Data_Semigroup_semigroupString, $__global_Data_String_NonEmpty_CodePoints_singleton);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_CodePoints_fromFoldable1'] = __NAMESPACE__ . '\\Data_String_NonEmpty_CodePoints_fromFoldable1';

// Data_String_NonEmpty_CodePoints_fromCodePointArray
function Data_String_NonEmpty_CodePoints_fromCodePointArray($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_CodePoints_fromCodePointArray';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_CodePoints_fromCodePointArray = ($GLOBALS['Data_String_CodePoints_fromCodePointArray'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_fromCodePointArray'));
  $__case_0 = $v;
  if (($__case_0 === /* ArrayLiteral */)) {
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
} else {
if (true) {
$cs = $__case_0;
$__res = new Phpurs_Data1("Just", ($__global_Data_String_CodePoints_fromCodePointArray)($cs));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_CodePoints_fromCodePointArray'] = __NAMESPACE__ . '\\Data_String_NonEmpty_CodePoints_fromCodePointArray';


// Data_String_NonEmpty_CodePoints_dropWhile
function Data_String_NonEmpty_CodePoints_dropWhile($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_CodePoints_dropWhile';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_NonEmpty_CodePoints_compose = ($GLOBALS['Data_String_NonEmpty_CodePoints_compose'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_compose'));
  $__global_Data_String_NonEmpty_Internal_fromString = ($GLOBALS['Data_String_NonEmpty_Internal_fromString'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_fromString'));
  $__global_Data_String_NonEmpty_CodePoints_liftS = ($GLOBALS['Data_String_NonEmpty_CodePoints_liftS'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_liftS'));
  $__global_Data_String_CodePoints_dropWhile = ($GLOBALS['Data_String_CodePoints_dropWhile'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_dropWhile'));
  $__res = ($__global_Data_String_NonEmpty_CodePoints_compose)($__global_Data_String_NonEmpty_Internal_fromString, ($__global_Data_String_NonEmpty_CodePoints_liftS)(($__global_Data_String_CodePoints_dropWhile)($f)));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_CodePoints_dropWhile'] = __NAMESPACE__ . '\\Data_String_NonEmpty_CodePoints_dropWhile';

// Data_String_NonEmpty_CodePoints_drop
function Data_String_NonEmpty_CodePoints_drop($i, $nes = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_CodePoints_drop';
  if ($__num < 2) {
    if ($__num === 1) return function($nes) use ($i, $__fn) { return $__fn($i, $nes); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_String_NonEmpty_CodePoints_fromNonEmptyString = ($GLOBALS['Data_String_NonEmpty_CodePoints_fromNonEmptyString'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_fromNonEmptyString'));
  $__global_Data_String_NonEmpty_CodePoints_greaterThanOrEq = ($GLOBALS['Data_String_NonEmpty_CodePoints_greaterThanOrEq'] ?? \Data\String\NonEmpty\CodePoints\phpurs_eval_thunk('Data_String_NonEmpty_CodePoints_greaterThanOrEq'));
  $__global_Data_String_CodePoints_length = ($GLOBALS['Data_String_CodePoints_length'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_length'));
  $__global_Data_String_CodePoints_drop = ($GLOBALS['Data_String_CodePoints_drop'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_drop'));
  $s = ($__global_Data_String_NonEmpty_CodePoints_fromNonEmptyString)($nes);
  $__case_0 = ($__global_Data_String_NonEmpty_CodePoints_greaterThanOrEq)($i, ($__global_Data_String_CodePoints_length)($s));
  switch ($__case_0) {
case true:
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
default:
$__res = new Phpurs_Data1("Just", ($__global_Data_String_CodePoints_drop)($i, $s));
goto __end;;
break;
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_CodePoints_drop'] = __NAMESPACE__ . '\\Data_String_NonEmpty_CodePoints_drop';


// Data_String_NonEmpty_CodePoints_cons
function Data_String_NonEmpty_CodePoints_cons($c, $s = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_CodePoints_cons';
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($c, $__fn) { return $__fn($c, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_String_CodePoints_singleton = ($GLOBALS['Data_String_CodePoints_singleton'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_singleton'));
  $__res = (($__global_Data_String_CodePoints_singleton)($c) . $s);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_CodePoints_cons'] = __NAMESPACE__ . '\\Data_String_NonEmpty_CodePoints_cons';


