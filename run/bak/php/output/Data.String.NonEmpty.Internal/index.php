<?php

namespace Data\String\NonEmpty\Internal;

require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.String/index.php';
require_once __DIR__ . '/../Data.String.CodeUnits/index.php';
require_once __DIR__ . '/../Data.String.Common/index.php';
require_once __DIR__ . '/../Data.String.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.String.Pattern/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';
require_once __DIR__ . '/../Unsafe.Coerce/index.php';

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
      case 'Data_String_NonEmpty_Internal_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_String_NonEmpty_Internal_show': $v = ($GLOBALS['Data_Show_showStringImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showStringImpl')); break;
      case 'Data_String_NonEmpty_Internal_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_String_NonEmpty_Internal_composeKleisliFlipped': $v = \Control\Bind\Control_Bind_composeKleisliFlipped(($GLOBALS['Data_Maybe_bindMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_bindMaybe'))); break;
      case 'Data_String_NonEmpty_Internal_fromJust': $v = \Data\Maybe\Data_Maybe_fromJust(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_String_NonEmpty_Internal_showNonEmptyString': $v = (object)["show" => function($v) {
  $__num = func_num_args();
  $__global_Data_Show_showStringImpl = ($GLOBALS['Data_Show_showStringImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showStringImpl'));
  $__case_0 = $v;
  if (true) {
$s = $__case_0;
$__res = ("(NonEmptyString.unsafeFromString " . (($__global_Data_Show_showStringImpl)($s) . ")"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_String_NonEmpty_Internal_show1': $v = (($GLOBALS['Data_String_NonEmpty_Internal_showNonEmptyString'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_showNonEmptyString')))->show; break;
      case 'Data_String_NonEmpty_Internal_showNonEmptyReplacement': $v = (object)["show" => function($v) {
  $__num = func_num_args();
  $__global_Data_String_NonEmpty_Internal_show1 = ($GLOBALS['Data_String_NonEmpty_Internal_show1'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_show1'));
  $__case_0 = $v;
  if (true) {
$s = $__case_0;
$__res = ("(NonEmptyReplacement " . (($__global_Data_String_NonEmpty_Internal_show1)($s) . ")"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_String_NonEmpty_Internal_semigroupNonEmptyString': $v = ($GLOBALS['Data_Semigroup_semigroupString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupString')); break;
      case 'Data_String_NonEmpty_Internal_semigroupNonEmptyReplacement': $v = ($GLOBALS['Data_Semigroup_semigroupString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupString')); break;
      case 'Data_String_NonEmpty_Internal_ordNonEmptyString': $v = ($GLOBALS['Data_Ord_ordString'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordString')); break;
      case 'Data_String_NonEmpty_Internal_ordNonEmptyReplacement': $v = ($GLOBALS['Data_Ord_ordString'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordString')); break;
      case 'Data_String_NonEmpty_Internal_startsWith': $v = (($GLOBALS['Data_String_NonEmpty_Internal_compose'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_compose')))("\\Data\\String\\NonEmpty\\Internal\\Data_String_NonEmpty_Internal_liftS", "\\Data\\String\\CodeUnits\\Data_String_CodeUnits_startsWith"); break;
      case 'Data_String_NonEmpty_Internal_eqNonEmptyString': $v = ($GLOBALS['Data_Eq_eqString'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqString')); break;
      case 'Data_String_NonEmpty_Internal_eqNonEmptyReplacement': $v = ($GLOBALS['Data_Eq_eqString'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqString')); break;
      case 'Data_String_NonEmpty_Internal_endsWith': $v = (($GLOBALS['Data_String_NonEmpty_Internal_compose'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_compose')))("\\Data\\String\\NonEmpty\\Internal\\Data_String_NonEmpty_Internal_liftS", "\\Data\\String\\CodeUnits\\Data_String_CodeUnits_endsWith"); break;
      case 'Data_String_NonEmpty_Internal_contains': $v = (($GLOBALS['Data_String_NonEmpty_Internal_compose'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_compose')))("\\Data\\String\\NonEmpty\\Internal\\Data_String_NonEmpty_Internal_liftS", "\\Data\\String\\CodeUnits\\Data_String_CodeUnits_contains"); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };







// Data_String_NonEmpty_Internal_NonEmptyString
function Data_String_NonEmpty_Internal_NonEmptyString($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_NonEmptyString';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_NonEmptyString'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_NonEmptyString';

// Data_String_NonEmpty_Internal_NonEmptyReplacement
function Data_String_NonEmpty_Internal_NonEmptyReplacement($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_NonEmptyReplacement';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_NonEmptyReplacement'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_NonEmptyReplacement';

// Data_String_NonEmpty_Internal_MakeNonEmpty$Dict
function Data_String_NonEmpty_Internal_MakeNonEmpty__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_MakeNonEmpty__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_MakeNonEmpty__dollar__Dict'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_MakeNonEmpty__dollar__Dict';

// Data_String_NonEmpty_Internal_toUpper
function Data_String_NonEmpty_Internal_toUpper($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_toUpper';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_Common_toUpper = ($GLOBALS['Data_String_Common_toUpper'] ?? \Data\String\Common\phpurs_eval_thunk('Data_String_Common_toUpper'));
  $__case_0 = $v;
  if (true) {
$s = $__case_0;
$__res = ($__global_Data_String_Common_toUpper)($s);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_toUpper'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_toUpper';

// Data_String_NonEmpty_Internal_toString
function Data_String_NonEmpty_Internal_toString($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_toString';
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
$GLOBALS['Data_String_NonEmpty_Internal_toString'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_toString';

// Data_String_NonEmpty_Internal_toLower
function Data_String_NonEmpty_Internal_toLower($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_toLower';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_Common_toLower = ($GLOBALS['Data_String_Common_toLower'] ?? \Data\String\Common\phpurs_eval_thunk('Data_String_Common_toLower'));
  $__case_0 = $v;
  if (true) {
$s = $__case_0;
$__res = ($__global_Data_String_Common_toLower)($s);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_toLower'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_toLower';






// Data_String_NonEmpty_Internal_replaceAll
function Data_String_NonEmpty_Internal_replaceAll($pat, $v = null, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_replaceAll';
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($pat, $v, $__fn) { return $__fn($pat, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($pat, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($pat, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($pat, $v, $__fn) { return $__fn($pat, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$pat], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_String_Common_replaceAll = ($GLOBALS['Data_String_Common_replaceAll'] ?? \Data\String\Common\phpurs_eval_thunk('Data_String_Common_replaceAll'));
  $__case_0 = $pat;
  $__case_1 = $v;
  $__case_2 = $v1;
  if (true) {
$pat1 = $__case_0;
$rep = $__case_1;
$s = $__case_2;
$__res = ($__global_Data_String_Common_replaceAll)($pat1, $rep, $s);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_replaceAll'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_replaceAll';

// Data_String_NonEmpty_Internal_replace
function Data_String_NonEmpty_Internal_replace($pat, $v = null, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_replace';
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($pat, $v, $__fn) { return $__fn($pat, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($pat, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($pat, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($pat, $v, $__fn) { return $__fn($pat, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$pat], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_String_Common_replace = ($GLOBALS['Data_String_Common_replace'] ?? \Data\String\Common\phpurs_eval_thunk('Data_String_Common_replace'));
  $__case_0 = $pat;
  $__case_1 = $v;
  $__case_2 = $v1;
  if (true) {
$pat1 = $__case_0;
$rep = $__case_1;
$s = $__case_2;
$__res = ($__global_Data_String_Common_replace)($pat1, $rep, $s);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_replace'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_replace';

// Data_String_NonEmpty_Internal_prependString
function Data_String_NonEmpty_Internal_prependString($s1, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_prependString';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($s1, $__fn) { return $__fn($s1, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $s1;
  $__case_1 = $v;
  if (true) {
$s11 = $__case_0;
$s2 = $__case_1;
$__res = ($s11 . $s2);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_prependString'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_prependString';



// Data_String_NonEmpty_Internal_nonEmptyNonEmpty
function Data_String_NonEmpty_Internal_nonEmptyNonEmpty($dictIsSymbol) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_nonEmptyNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $reflectSymbol = ($dictIsSymbol)->reflectSymbol;
  $__res = (object)["nes" => function($p) use ($reflectSymbol) {
  $__num = func_num_args();
  $__res = ($reflectSymbol)($p);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_nonEmptyNonEmpty'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_nonEmptyNonEmpty';

// Data_String_NonEmpty_Internal_nes
function Data_String_NonEmpty_Internal_nes($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_nes';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->nes;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_nes'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_nes';

// Data_String_NonEmpty_Internal_makeNonEmptyBad
function Data_String_NonEmpty_Internal_makeNonEmptyBad($__dollar____unused) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_makeNonEmptyBad';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = (object)["nes" => function($v) {
  $__num = func_num_args();
  $__res = "";
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_makeNonEmptyBad'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_makeNonEmptyBad';

// Data_String_NonEmpty_Internal_localeCompare
function Data_String_NonEmpty_Internal_localeCompare($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_localeCompare';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_String_Common_localeCompare = ($GLOBALS['Data_String_Common_localeCompare'] ?? \Data\String\Common\phpurs_eval_thunk('Data_String_Common_localeCompare'));
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$a = $__case_0;
$b = $__case_1;
$__res = ($__global_Data_String_Common_localeCompare)($a, $b);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_localeCompare'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_localeCompare';

// Data_String_NonEmpty_Internal_liftS
function Data_String_NonEmpty_Internal_liftS($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_liftS';
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
$GLOBALS['Data_String_NonEmpty_Internal_liftS'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_liftS';


// Data_String_NonEmpty_Internal_joinWith1
function Data_String_NonEmpty_Internal_joinWith1($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_joinWith1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_intercalate = ($GLOBALS['Data_Foldable_intercalate'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_intercalate'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Monoid_monoidString = ($GLOBALS['Data_Monoid_monoidString'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_monoidString'));
  $__global_Data_String_NonEmpty_Internal_compose = ($GLOBALS['Data_String_NonEmpty_Internal_compose'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_compose'));
  $__global_Data_String_NonEmpty_Internal_NonEmptyString = ($GLOBALS['Data_String_NonEmpty_Internal_NonEmptyString'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_NonEmptyString'));
  $intercalate = ($__global_Data_Foldable_intercalate)((($dictFoldable1)->Foldable0)($__global_Prim_undefined), $__global_Data_Monoid_monoidString);
  $__res = function($v) use ($__global_Data_String_NonEmpty_Internal_compose, $__global_Data_String_NonEmpty_Internal_NonEmptyString, $intercalate) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$splice = $__case_0;
$__res = ($__global_Data_String_NonEmpty_Internal_compose)($__global_Data_String_NonEmpty_Internal_NonEmptyString, ($intercalate)($splice));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_joinWith1'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_joinWith1';

// Data_String_NonEmpty_Internal_joinWith
function Data_String_NonEmpty_Internal_joinWith($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_joinWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_intercalate = ($GLOBALS['Data_Foldable_intercalate'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_intercalate'));
  $__global_Data_Monoid_monoidString = ($GLOBALS['Data_Monoid_monoidString'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_monoidString'));
  $__global_Unsafe_Coerce_unsafeCoerce = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce'));
  $__global_Data_String_NonEmpty_Internal_compose = ($GLOBALS['Data_String_NonEmpty_Internal_compose'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_compose'));
  $intercalate = ($__global_Data_Foldable_intercalate)($dictFoldable, $__global_Data_Monoid_monoidString);
  $__res = function($splice) use ($__global_Unsafe_Coerce_unsafeCoerce, $__global_Data_String_NonEmpty_Internal_compose, $intercalate) {
  $__num = func_num_args();
  $coe = $__global_Unsafe_Coerce_unsafeCoerce;
  $__res = ($__global_Data_String_NonEmpty_Internal_compose)(($intercalate)($splice), $coe);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_joinWith'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_joinWith';

// Data_String_NonEmpty_Internal_join1With
function Data_String_NonEmpty_Internal_join1With($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_join1With';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_NonEmpty_Internal_joinWith = ($GLOBALS['Data_String_NonEmpty_Internal_joinWith'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_joinWith'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_String_NonEmpty_Internal_compose = ($GLOBALS['Data_String_NonEmpty_Internal_compose'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_compose'));
  $__global_Data_String_NonEmpty_Internal_NonEmptyString = ($GLOBALS['Data_String_NonEmpty_Internal_NonEmptyString'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_NonEmptyString'));
  $joinWith2 = ($__global_Data_String_NonEmpty_Internal_joinWith)((($dictFoldable1)->Foldable0)($__global_Prim_undefined));
  $__res = function($splice) use ($__global_Data_String_NonEmpty_Internal_compose, $__global_Data_String_NonEmpty_Internal_NonEmptyString, $joinWith2) {
  $__num = func_num_args();
  $__res = ($__global_Data_String_NonEmpty_Internal_compose)($__global_Data_String_NonEmpty_Internal_NonEmptyString, ($joinWith2)($splice));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_join1With'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_join1With';

// Data_String_NonEmpty_Internal_fromString
function Data_String_NonEmpty_Internal_fromString($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_fromString';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch ($__case_0) {
case "":
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
default:
$s = $__case_0;
$__res = new Phpurs_Data1("Just", $s);
goto __end;;
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_fromString'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_fromString';

// Data_String_NonEmpty_Internal_stripPrefix
function Data_String_NonEmpty_Internal_stripPrefix($pat) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_stripPrefix';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_NonEmpty_Internal_composeKleisliFlipped = ($GLOBALS['Data_String_NonEmpty_Internal_composeKleisliFlipped'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_composeKleisliFlipped'));
  $__global_Data_String_NonEmpty_Internal_fromString = ($GLOBALS['Data_String_NonEmpty_Internal_fromString'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_fromString'));
  $__global_Data_String_NonEmpty_Internal_liftS = ($GLOBALS['Data_String_NonEmpty_Internal_liftS'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_liftS'));
  $__global_Data_String_CodeUnits_stripPrefix = ($GLOBALS['Data_String_CodeUnits_stripPrefix'] ?? \Data\String\CodeUnits\phpurs_eval_thunk('Data_String_CodeUnits_stripPrefix'));
  $__res = ($__global_Data_String_NonEmpty_Internal_composeKleisliFlipped)($__global_Data_String_NonEmpty_Internal_fromString, ($__global_Data_String_NonEmpty_Internal_liftS)(($__global_Data_String_CodeUnits_stripPrefix)($pat)));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_stripPrefix'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_stripPrefix';

// Data_String_NonEmpty_Internal_stripSuffix
function Data_String_NonEmpty_Internal_stripSuffix($pat) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_stripSuffix';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_NonEmpty_Internal_composeKleisliFlipped = ($GLOBALS['Data_String_NonEmpty_Internal_composeKleisliFlipped'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_composeKleisliFlipped'));
  $__global_Data_String_NonEmpty_Internal_fromString = ($GLOBALS['Data_String_NonEmpty_Internal_fromString'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_fromString'));
  $__global_Data_String_NonEmpty_Internal_liftS = ($GLOBALS['Data_String_NonEmpty_Internal_liftS'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_liftS'));
  $__global_Data_String_CodeUnits_stripSuffix = ($GLOBALS['Data_String_CodeUnits_stripSuffix'] ?? \Data\String\CodeUnits\phpurs_eval_thunk('Data_String_CodeUnits_stripSuffix'));
  $__res = ($__global_Data_String_NonEmpty_Internal_composeKleisliFlipped)($__global_Data_String_NonEmpty_Internal_fromString, ($__global_Data_String_NonEmpty_Internal_liftS)(($__global_Data_String_CodeUnits_stripSuffix)($pat)));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_stripSuffix'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_stripSuffix';

// Data_String_NonEmpty_Internal_trim
function Data_String_NonEmpty_Internal_trim($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_trim';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_NonEmpty_Internal_fromString = ($GLOBALS['Data_String_NonEmpty_Internal_fromString'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_fromString'));
  $__global_Data_String_Common_trim = ($GLOBALS['Data_String_Common_trim'] ?? \Data\String\Common\phpurs_eval_thunk('Data_String_Common_trim'));
  $__case_0 = $v;
  if (true) {
$s = $__case_0;
$__res = ($__global_Data_String_NonEmpty_Internal_fromString)(($__global_Data_String_Common_trim)($s));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_trim'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_trim';

// Data_String_NonEmpty_Internal_unsafeFromString
function Data_String_NonEmpty_Internal_unsafeFromString($__dollar____unused) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_unsafeFromString';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_NonEmpty_Internal_compose = ($GLOBALS['Data_String_NonEmpty_Internal_compose'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_compose'));
  $__global_Data_String_NonEmpty_Internal_fromJust = ($GLOBALS['Data_String_NonEmpty_Internal_fromJust'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_fromJust'));
  $__global_Data_String_NonEmpty_Internal_fromString = ($GLOBALS['Data_String_NonEmpty_Internal_fromString'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_fromString'));
  $__res = ($__global_Data_String_NonEmpty_Internal_compose)($__global_Data_String_NonEmpty_Internal_fromJust, $__global_Data_String_NonEmpty_Internal_fromString);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_unsafeFromString'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_unsafeFromString';





// Data_String_NonEmpty_Internal_appendString
function Data_String_NonEmpty_Internal_appendString($v, $s2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_Internal_appendString';
  if ($__num < 2) {
    if ($__num === 1) return function($s2) use ($v, $__fn) { return $__fn($v, $s2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $s2;
  if (true) {
$s1 = $__case_0;
$s21 = $__case_1;
$__res = ($s1 . $s21);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_Internal_appendString'] = __NAMESPACE__ . '\\Data_String_NonEmpty_Internal_appendString';

