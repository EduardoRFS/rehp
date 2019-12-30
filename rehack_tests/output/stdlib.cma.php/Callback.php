<?hh // strict
// Copyright 2004-present Facebook. All Rights Reserved.

/**
 * @generated
 *
 */
namespace Rehack;

final class Callback {
  <<__Override, __Memoize>>
  public static function requireModule() : Vector<dynamic> {
    
    $runtime =  (\Rehack\GlobalObject::get() as dynamic)->jsoo_runtime ;
    $caml_register_named_value = $runtime["caml_register_named_value"];
    $Obj =  Obj::requireModule ();
    $register = (dynamic $name, dynamic $v) ==> {
      return $caml_register_named_value($name, $v);
    };
    $register_exception = (dynamic $name, dynamic $exn) ==> {
      $slot = $runtime["caml_obj_tag"]($exn) === $Obj[8] ? $exn : ($exn[1]);
      return $caml_register_named_value($name, $slot);
    };
    $Callback = Vector{0, $register, $register_exception} as dynamic;
    
     return ($Callback);

  }
  public static function register(dynamic $name, dynamic $v): dynamic {
    return static::callRehackFunction(static::requireModule()[1], varray[$name, $v]);
  }
  public static function register_exception(dynamic $name, dynamic $exn): dynamic {
    return static::callRehackFunction(static::requireModule()[2], varray[$name, $exn]);
  }

}
/* Hashing disabled */