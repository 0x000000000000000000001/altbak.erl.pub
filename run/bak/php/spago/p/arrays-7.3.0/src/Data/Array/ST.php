<?php

$Data_Array_ST_new = function() {
    return (object)["value" => []];
};

$Data_Array_ST_peekImpl = function($just, $nothing, $i, $xs) {
    if ($i >= 0 && $i < count($xs->value)) {
        return $just($xs->value[$i]);
    }
    return $nothing;
};

$Data_Array_ST_pokeImpl = function($i, $a, $xs) {
    if ($i >= 0 && $i < count($xs->value)) {
        $xs->value[$i] = $a;
        return true;
    }
    return false;
};

$Data_Array_ST_lengthImpl = function($xs) {
    return count($xs->value);
};

$Data_Array_ST_popImpl = function($just, $nothing, $xs) {
    if (count($xs->value) > 0) {
        return $just(array_pop($xs->value));
    }
    return $nothing;
};

$Data_Array_ST_pushAllImpl = function($as, $xs) {
    foreach ($as as $a) {
        $xs->value[] = $a;
    }
    return count($xs->value);
};

$Data_Array_ST_shiftImpl = function($just, $nothing, $xs) {
    if (count($xs->value) > 0) {
        return $just(array_shift($xs->value));
    }
    return $nothing;
};

$Data_Array_ST_unshiftAllImpl = function($as, $xs) {
    $xs->value = array_merge($as, $xs->value);
    return count($xs->value);
};

$Data_Array_ST_spliceImpl = function($i, $howMany, $bs, $xs) {
    return array_splice($xs->value, $i, $howMany, $bs);
};

$Data_Array_ST_unsafeFreezeImpl = function($xs) {
    return $xs->value;
};

$Data_Array_ST_unsafeThawImpl = function($xs) {
    return (object)["value" => $xs];
};

$Data_Array_ST_freezeImpl = function($xs) {
    return $xs->value;
};

$Data_Array_ST_thawImpl = function($xs) {
    return (object)["value" => $xs];
};

$Data_Array_ST_cloneImpl = function($xs) {
    return (object)["value" => $xs->value];
};

$Data_Array_ST_sortByImpl = function($compare, $fromOrdering, $xs) {
    usort($xs->value, function($a, $b) use (&$compare, &$fromOrdering) {
        $ordering = $compare($a)($b);
        return $fromOrdering($ordering);
    });
    return $xs;
};

$Data_Array_ST_toAssocArrayImpl = function($xs) {
    $result = [];
    foreach ($xs->value as $i => $v) {
        $result[] = (object)["value" => $v, "index" => $i];
    }
    return $result;
};

$Data_Array_ST_pushImpl = function($a, $xs) {
    $xs->value[] = $a;
    return count($xs->value);
};
