<?php

namespace Effect\Aff\Class;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Except.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.List.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Maybe.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.RWS.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.State.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Effect.Aff/index.php';
require_once __DIR__ . '/../Effect.Aff.Class/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
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


// Effect_Aff_Class_compose
$Effect_Aff_Class_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Effect_Aff_Class_lift
$Effect_Aff_Class_lift = ($GLOBALS['Control_Monad_Trans_Class_lift'])($GLOBALS['Control_Monad_Cont_Trans_monadTransContT']);

// Effect_Aff_Class_lift1
$Effect_Aff_Class_lift1 = ($GLOBALS['Control_Monad_Trans_Class_lift'])($GLOBALS['Control_Monad_Except_Trans_monadTransExceptT']);

// Effect_Aff_Class_lift2
$Effect_Aff_Class_lift2 = ($GLOBALS['Control_Monad_Trans_Class_lift'])($GLOBALS['Control_Monad_List_Trans_monadTransListT']);

// Effect_Aff_Class_lift3
$Effect_Aff_Class_lift3 = ($GLOBALS['Control_Monad_Trans_Class_lift'])($GLOBALS['Control_Monad_Maybe_Trans_monadTransMaybeT']);

// Effect_Aff_Class_lift4
$Effect_Aff_Class_lift4 = ($GLOBALS['Control_Monad_Trans_Class_lift'])($GLOBALS['Control_Monad_Reader_Trans_monadTransReaderT']);

// Effect_Aff_Class_lift5
$Effect_Aff_Class_lift5 = ($GLOBALS['Control_Monad_Trans_Class_lift'])($GLOBALS['Control_Monad_State_Trans_monadTransStateT']);

// Effect_Aff_Class_MonadAff$Dict
$Effect_Aff_Class_MonadAff__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_Class_monadAffAff
$Effect_Aff_Class_monadAffAff = ($GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'])((object)["liftAff" => ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']), "MonadEffect0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_monadEffectAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_Class_liftAff
$Effect_Aff_Class_liftAff = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->liftAff;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dict) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($dict);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_Class_monadAffContT
$Effect_Aff_Class_monadAffContT = (function() {
  $__fn = function($dictMonadAff) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)($GLOBALS['Prim_undefined']);
$monadEffectContT = ($GLOBALS['Control_Monad_Cont_Trans_monadEffectContT'])($MonadEffect0);
    $__res = ($GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'])((object)["liftAff" => ($GLOBALS['Effect_Aff_Class_compose'])(($GLOBALS['Effect_Aff_Class_lift'])((($MonadEffect0)->Monad0)($GLOBALS['Prim_undefined'])), ($GLOBALS['Effect_Aff_Class_liftAff'])($dictMonadAff)), "MonadEffect0" => (function() use ($monadEffectContT) {
  $__fn = function($__dollar____unused) use ($monadEffectContT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadEffectContT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_Class_monadAffExceptT
$Effect_Aff_Class_monadAffExceptT = (function() {
  $__fn = function($dictMonadAff) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)($GLOBALS['Prim_undefined']);
$monadEffectExceptT = ($GLOBALS['Control_Monad_Except_Trans_monadEffectExceptT'])($MonadEffect0);
    $__res = ($GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'])((object)["liftAff" => ($GLOBALS['Effect_Aff_Class_compose'])(($GLOBALS['Effect_Aff_Class_lift1'])((($MonadEffect0)->Monad0)($GLOBALS['Prim_undefined'])), ($GLOBALS['Effect_Aff_Class_liftAff'])($dictMonadAff)), "MonadEffect0" => (function() use ($monadEffectExceptT) {
  $__fn = function($__dollar____unused) use ($monadEffectExceptT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadEffectExceptT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_Class_monadAffListT
$Effect_Aff_Class_monadAffListT = (function() {
  $__fn = function($dictMonadAff) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)($GLOBALS['Prim_undefined']);
$monadEffectListT = ($GLOBALS['Control_Monad_List_Trans_monadEffectListT'])($MonadEffect0);
    $__res = ($GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'])((object)["liftAff" => ($GLOBALS['Effect_Aff_Class_compose'])(($GLOBALS['Effect_Aff_Class_lift2'])((($MonadEffect0)->Monad0)($GLOBALS['Prim_undefined'])), ($GLOBALS['Effect_Aff_Class_liftAff'])($dictMonadAff)), "MonadEffect0" => (function() use ($monadEffectListT) {
  $__fn = function($__dollar____unused) use ($monadEffectListT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadEffectListT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_Class_monadAffMaybe
$Effect_Aff_Class_monadAffMaybe = (function() {
  $__fn = function($dictMonadAff) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)($GLOBALS['Prim_undefined']);
$monadEffectMaybe = ($GLOBALS['Control_Monad_Maybe_Trans_monadEffectMaybe'])($MonadEffect0);
    $__res = ($GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'])((object)["liftAff" => ($GLOBALS['Effect_Aff_Class_compose'])(($GLOBALS['Effect_Aff_Class_lift3'])((($MonadEffect0)->Monad0)($GLOBALS['Prim_undefined'])), ($GLOBALS['Effect_Aff_Class_liftAff'])($dictMonadAff)), "MonadEffect0" => (function() use ($monadEffectMaybe) {
  $__fn = function($__dollar____unused) use ($monadEffectMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadEffectMaybe;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_Class_monadAffRWS
$Effect_Aff_Class_monadAffRWS = (function() {
  $__fn = function($dictMonadAff) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)($GLOBALS['Prim_undefined']);
$Monad0 = (($MonadEffect0)->Monad0)($GLOBALS['Prim_undefined']);
$liftAff1 = ($GLOBALS['Effect_Aff_Class_liftAff'])($dictMonadAff);
    $__res = (function() use (&$MonadEffect0, &$Monad0, $liftAff1) {
  $__fn = function($dictMonoid) use (&$MonadEffect0, &$Monad0, $liftAff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$monadEffectRWS = ($GLOBALS['Control_Monad_RWS_Trans_monadEffectRWS'])($dictMonoid, $MonadEffect0);
    $__res = ($GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'])((object)["liftAff" => ($GLOBALS['Effect_Aff_Class_compose'])(($GLOBALS['Control_Monad_Trans_Class_lift'])(($GLOBALS['Control_Monad_RWS_Trans_monadTransRWST'])($dictMonoid), $Monad0), $liftAff1), "MonadEffect0" => (function() use ($monadEffectRWS) {
  $__fn = function($__dollar____unused) use ($monadEffectRWS, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadEffectRWS;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_Class_monadAffReader
$Effect_Aff_Class_monadAffReader = (function() {
  $__fn = function($dictMonadAff) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)($GLOBALS['Prim_undefined']);
$monadEffectReader = ($GLOBALS['Control_Monad_Reader_Trans_monadEffectReader'])($MonadEffect0);
    $__res = ($GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'])((object)["liftAff" => ($GLOBALS['Effect_Aff_Class_compose'])(($GLOBALS['Effect_Aff_Class_lift4'])((($MonadEffect0)->Monad0)($GLOBALS['Prim_undefined'])), ($GLOBALS['Effect_Aff_Class_liftAff'])($dictMonadAff)), "MonadEffect0" => (function() use ($monadEffectReader) {
  $__fn = function($__dollar____unused) use ($monadEffectReader, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadEffectReader;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_Class_monadAffState
$Effect_Aff_Class_monadAffState = (function() {
  $__fn = function($dictMonadAff) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)($GLOBALS['Prim_undefined']);
$monadEffectState = ($GLOBALS['Control_Monad_State_Trans_monadEffectState'])($MonadEffect0);
    $__res = ($GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'])((object)["liftAff" => ($GLOBALS['Effect_Aff_Class_compose'])(($GLOBALS['Effect_Aff_Class_lift5'])((($MonadEffect0)->Monad0)($GLOBALS['Prim_undefined'])), ($GLOBALS['Effect_Aff_Class_liftAff'])($dictMonadAff)), "MonadEffect0" => (function() use ($monadEffectState) {
  $__fn = function($__dollar____unused) use ($monadEffectState, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadEffectState;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_Class_monadAffWriter
$Effect_Aff_Class_monadAffWriter = (function() {
  $__fn = function($dictMonadAff) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)($GLOBALS['Prim_undefined']);
$Monad0 = (($MonadEffect0)->Monad0)($GLOBALS['Prim_undefined']);
$liftAff1 = ($GLOBALS['Effect_Aff_Class_liftAff'])($dictMonadAff);
    $__res = (function() use (&$MonadEffect0, &$Monad0, $liftAff1) {
  $__fn = function($dictMonoid) use (&$MonadEffect0, &$Monad0, $liftAff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$monadEffectWriter = ($GLOBALS['Control_Monad_Writer_Trans_monadEffectWriter'])($dictMonoid, $MonadEffect0);
    $__res = ($GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'])((object)["liftAff" => ($GLOBALS['Effect_Aff_Class_compose'])(($GLOBALS['Control_Monad_Trans_Class_lift'])(($GLOBALS['Control_Monad_Writer_Trans_monadTransWriterT'])($dictMonoid), $Monad0), $liftAff1), "MonadEffect0" => (function() use ($monadEffectWriter) {
  $__fn = function($__dollar____unused) use ($monadEffectWriter, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadEffectWriter;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

