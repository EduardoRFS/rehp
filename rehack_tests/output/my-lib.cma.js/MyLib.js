/**
 * @flow strict
 * MyLib
 */

// @ts-check


"use strict";

var runtime = require("../runtime/runtime.js");
var string = runtime["caml_new_string"];

function call1(f, a0) {
  return f.length === 1 ? f(a0) : runtime["caml_call_gen"](f, [a0]);
}

var cst_this_should_be_exported_with_three_leading = string(
  "this should be exported with three leading '_'"
);
var cst_this_should_be_exported_with_two_leading = string(
  "this should be exported with two leading '_'"
);
var cst_this_should_be_exported_with_leading = string(
  "this should be exported with leading '_'"
);
var cst_myPartiallyAppliedMethod = string("myPartiallyAppliedMethod");
var cst_myPartiallyAppliedMethod__0 = string("myPartiallyAppliedMethod");
var cst_myPartiallyAppliedMethod__1 = string("myPartiallyAppliedMethod");
var MyLib_MyLibUtility = require("./MyLib__MyLibUtility.js");
var foo = "foo";
var bar = "bar";
var baz = "baz";

function testFunctionCalls(o) {
  var withArgsResult = o(foo);
  var callResult = o();
  var callResult1 = o("passThis");
  var callResult2 = o("passThis", foo);
  var callResult3 = o("passThis", bar, bar);
  var callResult4 = o("passThis", baz, baz, baz);
  return [
    0,
    withArgsResult,
    callResult,
    callResult1,
    callResult2,
    callResult3,
    callResult4
  ];
}

function testMethodCalls(o) {
  var withArgsResult = o.yourMethod(foo);
  var sendResult = o.myMethod();
  var sendResult1 = o.myMethod(foo);
  var sendResult2 = o.myMethod(foo, foo);
  var sendResult3 = o.myMethod(bar, foo, foo);
  return [0,withArgsResult,sendResult,sendResult1,sendResult2,sendResult3];
}

function testPartialFunctionCalls(o) {
  function s_(Q_, P_) {return Q_(P_);}
  function callResult1(O_) {return s_(o, O_);}
  var t_ = "passThis";
  function u_(N_, M_, L_) {return N_(M_, L_);}
  function callResult2(K_) {return u_(o, t_, K_);}
  var v_ = "passThis";
  function w_(J_, I_, H_, G_) {return J_(I_, H_, G_);}
  function callResult3(F_) {return w_(o, v_, bar, F_);}
  var x_ = "passThis";
  function y_(E_, D_, C_, B_, A_) {return E_(D_, C_, B_, A_);}
  function callResult4(z_) {return y_(o, x_, baz, baz, z_);}
  return [0,callResult1,callResult2,callResult3,callResult4];
}

function testPartialMethodCalls(o) {
  function a_(r_, q_, p_) {return runtime["caml_js_meth_call1"](r_, q_, p_);}
  function sendResult1(o_) {return a_(o, cst_myPartiallyAppliedMethod, o_);}
  function b_(n_, m_, l_, k_) {
    return runtime["caml_js_meth_call2"](n_, m_, l_, k_);
  }
  function sendResult2(j_) {
    return b_(o, cst_myPartiallyAppliedMethod__0, foo, j_);
  }
  function c_(i_, h_, g_, f_, e_) {
    return runtime["caml_js_meth_call3"](i_, h_, g_, f_, e_);
  }
  function sendResult3(d_) {
    return c_(o, cst_myPartiallyAppliedMethod__1, bar, foo, d_);
  }
  return [0,sendResult1,sendResult2,sendResult3];
}

var x = call1(MyLib_MyLibUtility[1], 0);

function genThisShouldBeAsyncTransformed(input, cb) {return call1(cb, input + 1 | 0);
}

function requireModule(param) {
  return cst_this_should_be_exported_with_leading;
}

function requireModule__0(param) {
  return cst_this_should_be_exported_with_two_leading;
}

function construct(param) {
  return cst_this_should_be_exported_with_three_leading;
}

var MyLib = [
  0,
  foo,
  bar,
  baz,
  testFunctionCalls,
  testMethodCalls,
  testPartialFunctionCalls,
  testPartialMethodCalls,
  x,
  genThisShouldBeAsyncTransformed,
  genThisShouldBeAsyncTransformed,
  requireModule,
  requireModule__0,
  construct
];

exports = MyLib;

/*::type Exports = {
  foo: any,
  _bar_: any,
  baz: any,
  testFunctionCalls: (o: any) => any,
  testMethodCalls: (o: any) => any,
  testPartialFunctionCalls: (o: any) => any,
  testPartialMethodCalls: (o: any) => any,
  x: any,
  genThisShouldBeAsyncTransformed: (input: any, cb: any) => any,
  requireModule: (param: any) => any,
  construct: (param: any) => any,
}*/
/** @type {{
  foo: any,
  _bar_: any,
  baz: any,
  testFunctionCalls: (o: any) => any,
  testMethodCalls: (o: any) => any,
  testPartialFunctionCalls: (o: any) => any,
  testPartialMethodCalls: (o: any) => any,
  x: any,
  genThisShouldBeAsyncTransformed: (input: any, cb: any) => any,
  requireModule: (param: any) => any,
  construct: (param: any) => any,
}} */
module.exports = ((exports /*:: : any*/) /*:: :Exports */);
module.exports.foo = module.exports[1];
module.exports._bar_ = module.exports[2];
module.exports.baz = module.exports[3];
module.exports.testFunctionCalls = module.exports[4];
module.exports.testMethodCalls = module.exports[5];
module.exports.testPartialFunctionCalls = module.exports[6];
module.exports.testPartialMethodCalls = module.exports[7];
module.exports.x = module.exports[8];
module.exports.genThisShouldBeAsyncTransformed = module.exports[9];
module.exports.requireModule = module.exports[11];
module.exports.construct = module.exports[13];

/*____hashes flags: 589793685 bytecode: 67843182350 debug-data: 26172921359 primitives: 314532832*/
