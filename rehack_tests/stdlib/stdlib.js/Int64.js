/**
 * Int64
 * @providesModule Int64
 */
"use strict";
var Failure = require('Failure.js');
var runtime = require('runtime.js');

let joo_global_object = global;


var runtime = joo_global_object.jsoo_runtime;
var caml_new_string = runtime.caml_new_string;
var caml_wrap_exception = runtime.caml_wrap_exception;
var global_data = runtime.caml_get_global_data();
var cst_d = caml_new_string("%d");
var zero = [255,0,0,0];
var one = [255,1,0,0];
var minus_one = [255,16777215,16777215,65535];
var min_int = [255,0,0,32768];
var max_int = [255,16777215,16777215,32767];
var Failure = global_data.Failure;
var eA = [255,16777215,16777215,65535];
var ez = [255,0,0,0];
var ey = [255,1,0,0];
var ex = [255,1,0,0];

function succ(n) {return runtime.caml_int64_add(n, ex);}

function pred(n) {return runtime.caml_int64_sub(n, ey);}

function abs(n) {
  return runtime.caml_greaterequal(n, ez) ? n : runtime.caml_int64_neg(n);
}

function lognot(n) {return runtime.caml_int64_xor(n, eA);}

function to_string(n) {return runtime.caml_int64_format(cst_d, n);}

function of_string_opt(s) {
  try {var eB = [0,runtime.caml_int64_of_string(s)];return eB;}
  catch(eC) {
    eC = caml_wrap_exception(eC);
    if (eC[1] === Failure) {return 0;}
    throw runtime.caml_wrap_thrown_exception_reraise(eC);
  }
}

function compare(x, y) {return runtime.caml_int64_compare(x, y);}

function equal(x, y) {return 0 === compare(x, y) ? 1 : 0;}

var Int64 = [
  0,
  zero,
  one,
  minus_one,
  succ,
  pred,
  abs,
  max_int,
  min_int,
  lognot,
  of_string_opt,
  to_string,
  compare,
  equal
];

runtime.caml_register_global(11, Int64, "Int64");


module.exports = global.jsoo_runtime.caml_get_global_data().Int64;