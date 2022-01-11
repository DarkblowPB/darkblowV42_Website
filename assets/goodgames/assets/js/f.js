(function (sttc) {
  /* 
 
 Copyright The Closure Library Authors. 
 SPDX-License-Identifier: Apache-2.0 
*/
  var n, aa;
  function ba(a) {
    var b = 0;
    return function () {
      return b < a.length ? { done: !1, value: a[b++] } : { done: !0 };
    };
  }
  var ca =
    "function" == typeof Object.defineProperties
      ? Object.defineProperty
      : function (a, b, c) {
          if (a == Array.prototype || a == Object.prototype) return a;
          a[b] = c.value;
          return a;
        };
  function da(a) {
    a = [
      "object" == typeof globalThis && globalThis,
      a,
      "object" == typeof window && window,
      "object" == typeof self && self,
      "object" == typeof global && global,
    ];
    for (var b = 0; b < a.length; ++b) {
      var c = a[b];
      if (c && c.Math == Math) return c;
    }
    throw Error("Cannot find global object");
  }
  var ea = da(this),
    fa = "function" === typeof Symbol && "symbol" === typeof Symbol("x"),
    p = {},
    ha = {};
  function q(a, b) {
    var c = ha[b];
    if (null == c) return a[b];
    c = a[c];
    return void 0 !== c ? c : a[b];
  }
  function ia(a, b, c) {
    if (b)
      a: {
        var d = a.split(".");
        a = 1 === d.length;
        var e = d[0],
          f;
        !a && e in p ? (f = p) : (f = ea);
        for (e = 0; e < d.length - 1; e++) {
          var g = d[e];
          if (!(g in f)) break a;
          f = f[g];
        }
        d = d[d.length - 1];
        c = fa && "es6" === c ? f[d] : null;
        b = b(c);
        null != b &&
          (a
            ? ca(p, d, { configurable: !0, writable: !0, value: b })
            : b !== c &&
              (void 0 === ha[d] &&
                ((a = (1e9 * Math.random()) >>> 0),
                (ha[d] = fa ? ea.Symbol(d) : "$jscp$" + a + "$" + d)),
              ca(f, ha[d], { configurable: !0, writable: !0, value: b })));
      }
  }
  ia(
    "Symbol",
    function (a) {
      function b(f) {
        if (this instanceof b)
          throw new TypeError("Symbol is not a constructor");
        return new c(d + (f || "") + "_" + e++, f);
      }
      function c(f, g) {
        this.h = f;
        ca(this, "description", { configurable: !0, writable: !0, value: g });
      }
      if (a) return a;
      c.prototype.toString = function () {
        return this.h;
      };
      var d = "jscomp_symbol_" + ((1e9 * Math.random()) >>> 0) + "_",
        e = 0;
      return b;
    },
    "es6"
  );
  ia(
    "Symbol.iterator",
    function (a) {
      if (a) return a;
      a = (0, p.Symbol)("Symbol.iterator");
      for (
        var b =
            "Array Int8Array Uint8Array Uint8ClampedArray Int16Array Uint16Array Int32Array Uint32Array Float32Array Float64Array".split(
              " "
            ),
          c = 0;
        c < b.length;
        c++
      ) {
        var d = ea[b[c]];
        "function" === typeof d &&
          "function" != typeof d.prototype[a] &&
          ca(d.prototype, a, {
            configurable: !0,
            writable: !0,
            value: function () {
              return ja(ba(this));
            },
          });
      }
      return a;
    },
    "es6"
  );
  function ja(a) {
    a = { next: a };
    a[q(p.Symbol, "iterator")] = function () {
      return this;
    };
    return a;
  }
  function ka(a) {
    return (a.raw = a);
  }
  function t(a) {
    var b =
      "undefined" != typeof p.Symbol &&
      q(p.Symbol, "iterator") &&
      a[q(p.Symbol, "iterator")];
    return b ? b.call(a) : { next: ba(a) };
  }
  function la(a) {
    if (!(a instanceof Array)) {
      a = t(a);
      for (var b, c = []; !(b = a.next()).done; ) c.push(b.value);
      a = c;
    }
    return a;
  }
  var ma =
      "function" == typeof Object.create
        ? Object.create
        : function (a) {
            function b() {}
            b.prototype = a;
            return new b();
          },
    na;
  if (fa && "function" == typeof Object.setPrototypeOf)
    na = Object.setPrototypeOf;
  else {
    var oa;
    a: {
      var pa = { a: !0 },
        qa = {};
      try {
        qa.__proto__ = pa;
        oa = qa.a;
        break a;
      } catch (a) {}
      oa = !1;
    }
    na = oa
      ? function (a, b) {
          a.__proto__ = b;
          if (a.__proto__ !== b) throw new TypeError(a + " is not extensible");
          return a;
        }
      : null;
  }
  var ra = na;
  function v(a, b) {
    a.prototype = ma(b.prototype);
    a.prototype.constructor = a;
    if (ra) ra(a, b);
    else
      for (var c in b)
        if ("prototype" != c)
          if (Object.defineProperties) {
            var d = Object.getOwnPropertyDescriptor(b, c);
            d && Object.defineProperty(a, c, d);
          } else a[c] = b[c];
    a.Gb = b.prototype;
  }
  function ta(a, b) {
    return Object.prototype.hasOwnProperty.call(a, b);
  }
  ia(
    "WeakMap",
    function (a) {
      function b(g) {
        this.h = (f += Math.random() + 1).toString();
        if (g) {
          g = t(g);
          for (var h; !(h = g.next()).done; )
            (h = h.value), this.set(h[0], h[1]);
        }
      }
      function c() {}
      function d(g) {
        var h = typeof g;
        return ("object" === h && null !== g) || "function" === h;
      }
      if (
        (function () {
          if (!a || !Object.seal) return !1;
          try {
            var g = Object.seal({}),
              h = Object.seal({}),
              k = new a([
                [g, 2],
                [h, 3],
              ]);
            if (2 != k.get(g) || 3 != k.get(h)) return !1;
            k.delete(g);
            k.set(h, 4);
            return !k.has(g) && 4 == k.get(h);
          } catch (l) {
            return !1;
          }
        })()
      )
        return a;
      var e = "$jscomp_hidden_" + Math.random(),
        f = 0;
      b.prototype.set = function (g, h) {
        if (!d(g)) throw Error("Invalid WeakMap key");
        if (!ta(g, e)) {
          var k = new c();
          ca(g, e, { value: k });
        }
        if (!ta(g, e)) throw Error("WeakMap key fail: " + g);
        g[e][this.h] = h;
        return this;
      };
      b.prototype.get = function (g) {
        return d(g) && ta(g, e) ? g[e][this.h] : void 0;
      };
      b.prototype.has = function (g) {
        return d(g) && ta(g, e) && ta(g[e], this.h);
      };
      b.prototype.delete = function (g) {
        return d(g) && ta(g, e) && ta(g[e], this.h) ? delete g[e][this.h] : !1;
      };
      return b;
    },
    "es6"
  );
  ia(
    "Map",
    function (a) {
      function b() {
        var h = {};
        return (h.L = h.next = h.head = h);
      }
      function c(h, k) {
        var l = h.h;
        return ja(function () {
          if (l) {
            for (; l.head != h.h; ) l = l.L;
            for (; l.next != l.head; )
              return (l = l.next), { done: !1, value: k(l) };
            l = null;
          }
          return { done: !0, value: void 0 };
        });
      }
      function d(h, k) {
        var l = k && typeof k;
        "object" == l || "function" == l
          ? f.has(k)
            ? (l = f.get(k))
            : ((l = "" + ++g), f.set(k, l))
          : (l = "p_" + k);
        var m = h.i[l];
        if (m && ta(h.i, l))
          for (h = 0; h < m.length; h++) {
            var r = m[h];
            if ((k !== k && r.key !== r.key) || k === r.key)
              return { id: l, list: m, index: h, u: r };
          }
        return { id: l, list: m, index: -1, u: void 0 };
      }
      function e(h) {
        this.i = {};
        this.h = b();
        this.size = 0;
        if (h) {
          h = t(h);
          for (var k; !(k = h.next()).done; )
            (k = k.value), this.set(k[0], k[1]);
        }
      }
      if (
        (function () {
          if (
            !a ||
            "function" != typeof a ||
            !a.prototype.entries ||
            "function" != typeof Object.seal
          )
            return !1;
          try {
            var h = Object.seal({ x: 4 }),
              k = new a(t([[h, "s"]]));
            if (
              "s" != k.get(h) ||
              1 != k.size ||
              k.get({ x: 4 }) ||
              k.set({ x: 4 }, "t") != k ||
              2 != k.size
            )
              return !1;
            var l = k.entries(),
              m = l.next();
            if (m.done || m.value[0] != h || "s" != m.value[1]) return !1;
            m = l.next();
            return m.done ||
              4 != m.value[0].x ||
              "t" != m.value[1] ||
              !l.next().done
              ? !1
              : !0;
          } catch (r) {
            return !1;
          }
        })()
      )
        return a;
      var f = new p.WeakMap();
      e.prototype.set = function (h, k) {
        h = 0 === h ? 0 : h;
        var l = d(this, h);
        l.list || (l.list = this.i[l.id] = []);
        l.u
          ? (l.u.value = k)
          : ((l.u = {
              next: this.h,
              L: this.h.L,
              head: this.h,
              key: h,
              value: k,
            }),
            l.list.push(l.u),
            (this.h.L.next = l.u),
            (this.h.L = l.u),
            this.size++);
        return this;
      };
      e.prototype.delete = function (h) {
        h = d(this, h);
        return h.u && h.list
          ? (h.list.splice(h.index, 1),
            h.list.length || delete this.i[h.id],
            (h.u.L.next = h.u.next),
            (h.u.next.L = h.u.L),
            (h.u.head = null),
            this.size--,
            !0)
          : !1;
      };
      e.prototype.clear = function () {
        this.i = {};
        this.h = this.h.L = b();
        this.size = 0;
      };
      e.prototype.has = function (h) {
        return !!d(this, h).u;
      };
      e.prototype.get = function (h) {
        return (h = d(this, h).u) && h.value;
      };
      e.prototype.entries = function () {
        return c(this, function (h) {
          return [h.key, h.value];
        });
      };
      e.prototype.keys = function () {
        return c(this, function (h) {
          return h.key;
        });
      };
      e.prototype.values = function () {
        return c(this, function (h) {
          return h.value;
        });
      };
      e.prototype.forEach = function (h, k) {
        for (var l = this.entries(), m; !(m = l.next()).done; )
          (m = m.value), h.call(k, m[1], m[0], this);
      };
      e.prototype[q(p.Symbol, "iterator")] = e.prototype.entries;
      var g = 0;
      return e;
    },
    "es6"
  );
  ia(
    "Array.prototype.find",
    function (a) {
      return a
        ? a
        : function (b, c) {
            a: {
              var d = this;
              d instanceof String && (d = String(d));
              for (var e = d.length, f = 0; f < e; f++) {
                var g = d[f];
                if (b.call(c, g, f, d)) {
                  b = g;
                  break a;
                }
              }
              b = void 0;
            }
            return b;
          };
    },
    "es6"
  );
  function ua(a, b) {
    a instanceof String && (a += "");
    var c = 0,
      d = !1,
      e = {
        next: function () {
          if (!d && c < a.length) {
            var f = c++;
            return { value: b(f, a[f]), done: !1 };
          }
          d = !0;
          return { done: !0, value: void 0 };
        },
      };
    e[q(p.Symbol, "iterator")] = function () {
      return e;
    };
    return e;
  }
  var va =
    fa && "function" == typeof q(Object, "assign")
      ? q(Object, "assign")
      : function (a, b) {
          for (var c = 1; c < arguments.length; c++) {
            var d = arguments[c];
            if (d) for (var e in d) ta(d, e) && (a[e] = d[e]);
          }
          return a;
        };
  ia(
    "Object.assign",
    function (a) {
      return a || va;
    },
    "es6"
  );
  ia(
    "Promise",
    function (a) {
      function b(g) {
        this.h = 0;
        this.j = void 0;
        this.i = [];
        this.D = !1;
        var h = this.l();
        try {
          g(h.resolve, h.reject);
        } catch (k) {
          h.reject(k);
        }
      }
      function c() {
        this.h = null;
      }
      function d(g) {
        return g instanceof b
          ? g
          : new b(function (h) {
              h(g);
            });
      }
      if (a) return a;
      c.prototype.i = function (g) {
        if (null == this.h) {
          this.h = [];
          var h = this;
          this.j(function () {
            h.m();
          });
        }
        this.h.push(g);
      };
      var e = ea.setTimeout;
      c.prototype.j = function (g) {
        e(g, 0);
      };
      c.prototype.m = function () {
        for (; this.h && this.h.length; ) {
          var g = this.h;
          this.h = [];
          for (var h = 0; h < g.length; ++h) {
            var k = g[h];
            g[h] = null;
            try {
              k();
            } catch (l) {
              this.l(l);
            }
          }
        }
        this.h = null;
      };
      c.prototype.l = function (g) {
        this.j(function () {
          throw g;
        });
      };
      b.prototype.l = function () {
        function g(l) {
          return function (m) {
            k || ((k = !0), l.call(h, m));
          };
        }
        var h = this,
          k = !1;
        return { resolve: g(this.O), reject: g(this.m) };
      };
      b.prototype.O = function (g) {
        if (g === this)
          this.m(new TypeError("A Promise cannot resolve to itself"));
        else if (g instanceof b) this.R(g);
        else {
          a: switch (typeof g) {
            case "object":
              var h = null != g;
              break a;
            case "function":
              h = !0;
              break a;
            default:
              h = !1;
          }
          h ? this.N(g) : this.v(g);
        }
      };
      b.prototype.N = function (g) {
        var h = void 0;
        try {
          h = g.then;
        } catch (k) {
          this.m(k);
          return;
        }
        "function" == typeof h ? this.ea(h, g) : this.v(g);
      };
      b.prototype.m = function (g) {
        this.A(2, g);
      };
      b.prototype.v = function (g) {
        this.A(1, g);
      };
      b.prototype.A = function (g, h) {
        if (0 != this.h)
          throw Error(
            "Cannot settle(" +
              g +
              ", " +
              h +
              "): Promise already settled in state" +
              this.h
          );
        this.h = g;
        this.j = h;
        2 === this.h && this.P();
        this.H();
      };
      b.prototype.P = function () {
        var g = this;
        e(function () {
          if (g.M()) {
            var h = ea.console;
            "undefined" !== typeof h && h.error(g.j);
          }
        }, 1);
      };
      b.prototype.M = function () {
        if (this.D) return !1;
        var g = ea.CustomEvent,
          h = ea.Event,
          k = ea.dispatchEvent;
        if ("undefined" === typeof k) return !0;
        "function" === typeof g
          ? (g = new g("unhandledrejection", { cancelable: !0 }))
          : "function" === typeof h
          ? (g = new h("unhandledrejection", { cancelable: !0 }))
          : ((g = ea.document.createEvent("CustomEvent")),
            g.initCustomEvent("unhandledrejection", !1, !0, g));
        g.promise = this;
        g.reason = this.j;
        return k(g);
      };
      b.prototype.H = function () {
        if (null != this.i) {
          for (var g = 0; g < this.i.length; ++g) f.i(this.i[g]);
          this.i = null;
        }
      };
      var f = new c();
      b.prototype.R = function (g) {
        var h = this.l();
        g.ga(h.resolve, h.reject);
      };
      b.prototype.ea = function (g, h) {
        var k = this.l();
        try {
          g.call(h, k.resolve, k.reject);
        } catch (l) {
          k.reject(l);
        }
      };
      b.prototype.then = function (g, h) {
        function k(u, x) {
          return "function" == typeof u
            ? function (E) {
                try {
                  l(u(E));
                } catch (A) {
                  m(A);
                }
              }
            : x;
        }
        var l,
          m,
          r = new b(function (u, x) {
            l = u;
            m = x;
          });
        this.ga(k(g, l), k(h, m));
        return r;
      };
      b.prototype.catch = function (g) {
        return this.then(void 0, g);
      };
      b.prototype.ga = function (g, h) {
        function k() {
          switch (l.h) {
            case 1:
              g(l.j);
              break;
            case 2:
              h(l.j);
              break;
            default:
              throw Error("Unexpected state: " + l.h);
          }
        }
        var l = this;
        null == this.i ? f.i(k) : this.i.push(k);
        this.D = !0;
      };
      b.resolve = d;
      b.reject = function (g) {
        return new b(function (h, k) {
          k(g);
        });
      };
      b.race = function (g) {
        return new b(function (h, k) {
          for (var l = t(g), m = l.next(); !m.done; m = l.next())
            d(m.value).ga(h, k);
        });
      };
      b.all = function (g) {
        var h = t(g),
          k = h.next();
        return k.done
          ? d([])
          : new b(function (l, m) {
              function r(E) {
                return function (A) {
                  u[E] = A;
                  x--;
                  0 == x && l(u);
                };
              }
              var u = [],
                x = 0;
              do
                u.push(void 0),
                  x++,
                  d(k.value).ga(r(u.length - 1), m),
                  (k = h.next());
              while (!k.done);
            });
      };
      return b;
    },
    "es6"
  );
  ia(
    "Set",
    function (a) {
      function b(c) {
        this.h = new p.Map();
        if (c) {
          c = t(c);
          for (var d; !(d = c.next()).done; ) this.add(d.value);
        }
        this.size = this.h.size;
      }
      if (
        (function () {
          if (
            !a ||
            "function" != typeof a ||
            !a.prototype.entries ||
            "function" != typeof Object.seal
          )
            return !1;
          try {
            var c = Object.seal({ x: 4 }),
              d = new a(t([c]));
            if (
              !d.has(c) ||
              1 != d.size ||
              d.add(c) != d ||
              1 != d.size ||
              d.add({ x: 4 }) != d ||
              2 != d.size
            )
              return !1;
            var e = d.entries(),
              f = e.next();
            if (f.done || f.value[0] != c || f.value[1] != c) return !1;
            f = e.next();
            return f.done ||
              f.value[0] == c ||
              4 != f.value[0].x ||
              f.value[1] != f.value[0]
              ? !1
              : e.next().done;
          } catch (g) {
            return !1;
          }
        })()
      )
        return a;
      b.prototype.add = function (c) {
        c = 0 === c ? 0 : c;
        this.h.set(c, c);
        this.size = this.h.size;
        return this;
      };
      b.prototype.delete = function (c) {
        c = this.h.delete(c);
        this.size = this.h.size;
        return c;
      };
      b.prototype.clear = function () {
        this.h.clear();
        this.size = 0;
      };
      b.prototype.has = function (c) {
        return this.h.has(c);
      };
      b.prototype.entries = function () {
        return this.h.entries();
      };
      b.prototype.values = function () {
        return q(this.h, "values").call(this.h);
      };
      b.prototype.keys = q(b.prototype, "values");
      b.prototype[q(p.Symbol, "iterator")] = q(b.prototype, "values");
      b.prototype.forEach = function (c, d) {
        var e = this;
        this.h.forEach(function (f) {
          return c.call(d, f, f, e);
        });
      };
      return b;
    },
    "es6"
  );
  ia(
    "String.prototype.startsWith",
    function (a) {
      return a
        ? a
        : function (b, c) {
            if (null == this)
              throw new TypeError(
                "The 'this' value for String.prototype.startsWith must not be null or undefined"
              );
            if (b instanceof RegExp)
              throw new TypeError(
                "First argument to String.prototype.startsWith must not be a regular expression"
              );
            var d = this.length,
              e = b.length;
            c = Math.max(0, Math.min(c | 0, this.length));
            for (var f = 0; f < e && c < d; )
              if (this[c++] != b[f++]) return !1;
            return f >= e;
          };
    },
    "es6"
  );
  ia(
    "Array.prototype.keys",
    function (a) {
      return a
        ? a
        : function () {
            return ua(this, function (b) {
              return b;
            });
          };
    },
    "es6"
  );
  ia(
    "Array.prototype.values",
    function (a) {
      return a
        ? a
        : function () {
            return ua(this, function (b, c) {
              return c;
            });
          };
    },
    "es8"
  );
  ia(
    "Promise.prototype.finally",
    function (a) {
      return a
        ? a
        : function (b) {
            return this.then(
              function (c) {
                return p.Promise.resolve(b()).then(function () {
                  return c;
                });
              },
              function (c) {
                return p.Promise.resolve(b()).then(function () {
                  throw c;
                });
              }
            );
          };
    },
    "es9"
  );
  var w = this || self;
  function wa(a) {
    a = a.split(".");
    for (var b = w, c = 0; c < a.length; c++)
      if (((b = b[a[c]]), null == b)) return null;
    return b;
  }
  function xa(a) {
    var b = typeof a;
    return ("object" == b && null != a) || "function" == b;
  }
  function ya(a) {
    return (
      (Object.prototype.hasOwnProperty.call(a, za) && a[za]) || (a[za] = ++Aa)
    );
  }
  var za = "closure_uid_" + ((1e9 * Math.random()) >>> 0),
    Aa = 0;
  function Ba(a, b, c) {
    return a.call.apply(a.bind, arguments);
  }
  function Ca(a, b, c) {
    if (!a) throw Error();
    if (2 < arguments.length) {
      var d = Array.prototype.slice.call(arguments, 2);
      return function () {
        var e = Array.prototype.slice.call(arguments);
        Array.prototype.unshift.apply(e, d);
        return a.apply(b, e);
      };
    }
    return function () {
      return a.apply(b, arguments);
    };
  }
  function Da(a, b, c) {
    Function.prototype.bind &&
    -1 != Function.prototype.bind.toString().indexOf("native code")
      ? (Da = Ba)
      : (Da = Ca);
    return Da.apply(null, arguments);
  }
  function Ea(a, b) {
    var c = Array.prototype.slice.call(arguments, 1);
    return function () {
      var d = c.slice();
      d.push.apply(d, arguments);
      return a.apply(this, d);
    };
  }
  function Fa(a) {
    var b = ["__uspapi"],
      c = w;
    b[0] in c ||
      "undefined" == typeof c.execScript ||
      c.execScript("var " + b[0]);
    for (var d; b.length && (d = b.shift()); )
      b.length || void 0 === a
        ? c[d] && c[d] !== Object.prototype[d]
          ? (c = c[d])
          : (c = c[d] = {})
        : (c[d] = a);
  }
  function Ga(a) {
    return a;
  }
  var Ha = new Date().getTime();
  var Ia;
  function Ja(a) {
    return /^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1];
  }
  function Ka(a, b) {
    var c = 0;
    a = Ja(String(a)).split(".");
    b = Ja(String(b)).split(".");
    for (var d = Math.max(a.length, b.length), e = 0; 0 == c && e < d; e++) {
      var f = a[e] || "",
        g = b[e] || "";
      do {
        f = /(\d*)(\D*)(.*)/.exec(f) || ["", "", "", ""];
        g = /(\d*)(\D*)(.*)/.exec(g) || ["", "", "", ""];
        if (0 == f[0].length && 0 == g[0].length) break;
        c =
          La(
            0 == f[1].length ? 0 : parseInt(f[1], 10),
            0 == g[1].length ? 0 : parseInt(g[1], 10)
          ) ||
          La(0 == f[2].length, 0 == g[2].length) ||
          La(f[2], g[2]);
        f = f[3];
        g = g[3];
      } while (0 == c);
    }
    return c;
  }
  function La(a, b) {
    return a < b ? -1 : a > b ? 1 : 0;
  }
  function Ma(a, b) {
    for (
      var c = a.length, d = "string" === typeof a ? a.split("") : a, e = 0;
      e < c;
      e++
    )
      e in d && b.call(void 0, d[e], e, a);
  }
  function Na(a, b) {
    for (
      var c = a.length,
        d = [],
        e = 0,
        f = "string" === typeof a ? a.split("") : a,
        g = 0;
      g < c;
      g++
    )
      if (g in f) {
        var h = f[g];
        b.call(void 0, h, g, a) && (d[e++] = h);
      }
    return d;
  }
  function Oa(a, b) {
    for (
      var c = a.length,
        d = Array(c),
        e = "string" === typeof a ? a.split("") : a,
        f = 0;
      f < c;
      f++
    )
      f in e && (d[f] = b.call(void 0, e[f], f, a));
    return d;
  }
  function Pa(a, b) {
    for (
      var c = a.length, d = "string" === typeof a ? a.split("") : a, e = 0;
      e < c;
      e++
    )
      if (e in d && b.call(void 0, d[e], e, a)) return !0;
    return !1;
  }
  function Qa(a, b) {
    a: {
      for (
        var c = a.length, d = "string" === typeof a ? a.split("") : a, e = 0;
        e < c;
        e++
      )
        if (e in d && b.call(void 0, d[e], e, a)) {
          b = e;
          break a;
        }
      b = -1;
    }
    return 0 > b ? null : "string" === typeof a ? a.charAt(b) : a[b];
  }
  function Ra(a, b) {
    a: {
      for (
        var c = "string" === typeof a ? a.split("") : a, d = a.length - 1;
        0 <= d;
        d--
      )
        if (d in c && b.call(void 0, c[d], d, a)) {
          b = d;
          break a;
        }
      b = -1;
    }
    return 0 > b ? null : "string" === typeof a ? a.charAt(b) : a[b];
  }
  function Sa(a, b) {
    a: if ("string" === typeof a)
      a = "string" !== typeof b || 1 != b.length ? -1 : a.indexOf(b, 0);
    else {
      for (var c = 0; c < a.length; c++)
        if (c in a && a[c] === b) {
          a = c;
          break a;
        }
      a = -1;
    }
    return 0 <= a;
  }
  var Ta;
  a: {
    var Ua = w.navigator;
    if (Ua) {
      var Va = Ua.userAgent;
      if (Va) {
        Ta = Va;
        break a;
      }
    }
    Ta = "";
  }
  function y(a) {
    return -1 != Ta.indexOf(a);
  }
  function Wa(a) {
    for (
      var b = RegExp("(\\w[\\w ]+)/([^\\s]+)\\s*(?:\\((.*?)\\))?", "g"),
        c = [],
        d;
      (d = b.exec(a));

    )
      c.push([d[1], d[2], d[3] || void 0]);
    return c;
  }
  function Xa(a, b) {
    var c = {},
      d;
    for (d in a) b.call(void 0, a[d], d, a) && (c[d] = a[d]);
    return c;
  }
  function Ya(a, b) {
    for (var c in a) if (b.call(void 0, a[c], c, a)) return !0;
    return !1;
  }
  function Za(a, b) {
    return null !== a && b in a;
  }
  function $a(a) {
    var b = {},
      c;
    for (c in a) b[c] = a[c];
    return b;
  }
  function ab() {
    return y("Trident") || y("MSIE");
  }
  function bb() {
    return (y("Chrome") || y("CriOS")) && !y("Edge");
  }
  function cb() {
    function a(e) {
      e = Qa(e, d);
      return c[e] || "";
    }
    var b = Ta;
    if (ab()) return db(b);
    b = Wa(b);
    var c = {};
    b.forEach(function (e) {
      c[e[0]] = e[1];
    });
    var d = Ea(Za, c);
    return y("Opera")
      ? a(["Version", "Opera"])
      : y("Edge")
      ? a(["Edge"])
      : y("Edg/")
      ? a(["Edg"])
      : bb()
      ? a(["Chrome", "CriOS", "HeadlessChrome"])
      : ((b = b[2]) && b[1]) || "";
  }
  function db(a) {
    var b = /rv: *([\d\.]*)/.exec(a);
    if (b && b[1]) return b[1];
    b = "";
    var c = /MSIE +([\d\.]+)/.exec(a);
    if (c && c[1])
      if (((a = /Trident\/(\d.\d)/.exec(a)), "7.0" == c[1]))
        if (a && a[1])
          switch (a[1]) {
            case "4.0":
              b = "8.0";
              break;
            case "5.0":
              b = "9.0";
              break;
            case "6.0":
              b = "10.0";
              break;
            case "7.0":
              b = "11.0";
          }
        else b = "7.0";
      else b = c[1];
    return b;
  }
  function eb(a) {
    eb[" "](a);
    return a;
  }
  eb[" "] = function () {};
  var fb = ab();
  !y("Android") || bb();
  bb();
  !y("Safari") || bb();
  var gb = {},
    hb = null;
  function ib(a, b) {
    void 0 === b && (b = 0);
    if (!hb) {
      hb = {};
      for (
        var c =
            "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".split(
              ""
            ),
          d = ["+/=", "+/", "-_=", "-_.", "-_"],
          e = 0;
        5 > e;
        e++
      ) {
        var f = c.concat(d[e].split(""));
        gb[e] = f;
        for (var g = 0; g < f.length; g++) {
          var h = f[g];
          void 0 === hb[h] && (hb[h] = g);
        }
      }
    }
    b = gb[b];
    c = Array(Math.floor(a.length / 3));
    d = b[64] || "";
    for (e = f = 0; f < a.length - 2; f += 3) {
      var k = a[f],
        l = a[f + 1];
      h = a[f + 2];
      g = b[k >> 2];
      k = b[((k & 3) << 4) | (l >> 4)];
      l = b[((l & 15) << 2) | (h >> 6)];
      h = b[h & 63];
      c[e++] = g + k + l + h;
    }
    g = 0;
    h = d;
    switch (a.length - f) {
      case 2:
        (g = a[f + 1]), (h = b[(g & 15) << 2] || d);
      case 1:
        (a = a[f]), (c[e] = b[a >> 2] + b[((a & 3) << 4) | (g >> 4)] + h + d);
    }
    return c.join("");
  }
  var jb = "function" === typeof Uint8Array;
  function kb(a, b, c) {
    if (null != a)
      return "object" === typeof a
        ? jb && a instanceof Uint8Array
          ? c(a)
          : lb(a, b, c)
        : b(a);
  }
  function lb(a, b, c) {
    if (Array.isArray(a)) {
      for (var d = Array(a.length), e = 0; e < a.length; e++)
        d[e] = kb(a[e], b, c);
      Array.isArray(a) && a.kb && nb(d);
      return d;
    }
    d = {};
    for (e in a)
      Object.prototype.hasOwnProperty.call(a, e) && (d[e] = kb(a[e], b, c));
    return d;
  }
  function ob(a) {
    return "number" === typeof a ? (isFinite(a) ? a : String(a)) : a;
  }
  var pb = { kb: { value: !0, configurable: !0 } };
  function nb(a) {
    Array.isArray(a) && !Object.isFrozen(a) && Object.defineProperties(a, pb);
    return a;
  }
  var qb;
  var rb;
  function sb(a, b) {
    rb = b;
    a = new a(b);
    rb = null;
    return a;
  }
  function z(a, b, c) {
    var d = rb;
    rb = null;
    a || (a = d);
    d = this.constructor.messageId;
    a || (a = d ? [d] : []);
    this.l = d ? 0 : -1;
    this.h = null;
    this.i = a;
    a: {
      d = this.i.length;
      a = d - 1;
      if (
        d &&
        ((d = this.i[a]),
        !(
          null === d ||
          "object" != typeof d ||
          Array.isArray(d) ||
          (jb && d instanceof Uint8Array)
        ))
      ) {
        this.m = a - this.l;
        this.j = d;
        break a;
      }
      void 0 !== b && -1 < b
        ? ((this.m = Math.max(b, a + 1 - this.l)), (this.j = null))
        : (this.m = Number.MAX_VALUE);
    }
    if (c)
      for (b = 0; b < c.length; b++)
        (a = c[b]),
          a < this.m
            ? ((a += this.l), (d = this.i[a]) ? nb(d) : (this.i[a] = tb))
            : (ub(this), (d = this.j[a]) ? nb(d) : (this.j[a] = tb));
  }
  var tb = Object.freeze(nb([]));
  function ub(a) {
    var b = a.m + a.l;
    a.i[b] || (a.j = a.i[b] = {});
  }
  function B(a, b, c) {
    return -1 === b
      ? null
      : (void 0 === c ? 0 : c) || b >= a.m
      ? a.j
        ? a.j[b]
        : void 0
      : a.i[b + a.l];
  }
  function vb(a, b) {
    var c = void 0 === c ? !1 : c;
    var d = B(a, b, c);
    null == d && (d = tb);
    d === tb && ((d = nb([])), C(a, b, d, c));
    return d;
  }
  function wb(a, b) {
    a = B(a, b);
    return null == a ? a : !!a;
  }
  function D(a, b, c) {
    a = B(a, b);
    return null == a ? c : a;
  }
  function xb(a, b, c) {
    a = wb(a, b);
    return null == a ? (void 0 === c ? !1 : c) : a;
  }
  function yb(a, b, c) {
    a = B(a, b);
    a = null == a ? a : +a;
    return null == a ? (void 0 === c ? 0 : c) : a;
  }
  function C(a, b, c, d) {
    (void 0 === d ? 0 : d) || b >= a.m
      ? (ub(a), (a.j[b] = c))
      : (a.i[b + a.l] = c);
    return a;
  }
  function zb(a, b, c) {
    0 !== c ? C(a, b, c) : C(a, b, void 0);
    return a;
  }
  function Ab(a, b, c, d) {
    (c = Bb(a, c)) &&
      c !== b &&
      null != d &&
      (a.h && c in a.h && (a.h[c] = void 0), C(a, c, void 0));
    return C(a, b, d);
  }
  function Bb(a, b) {
    for (var c = 0, d = 0; d < b.length; d++) {
      var e = b[d];
      null != B(a, e) && (0 === c || C(a, c, void 0), (c = e));
    }
    return c;
  }
  function F(a, b, c) {
    if (-1 === c) return null;
    a.h || (a.h = {});
    if (!a.h[c]) {
      var d = B(a, c, !1);
      d && (a.h[c] = new b(d));
    }
    return a.h[c];
  }
  function H(a, b, c) {
    a.h || (a.h = {});
    var d = a.h[c];
    if (!d) {
      var e = vb(a, c);
      d = [];
      for (var f = 0; f < e.length; f++) d[f] = new b(e[f]);
      a.h[c] = d;
    }
    return d;
  }
  function Cb(a, b, c) {
    var d = Db;
    a.h || (a.h = {});
    var e = c ? Eb(c, !1) : c;
    a.h[b] = c;
    return Ab(a, b, d, e);
  }
  function Fb(a, b, c) {
    var d = void 0 === d ? !1 : d;
    if (c) {
      var e = nb([]);
      for (var f = 0; f < c.length; f++) e[f] = Eb(c[f], !1);
      a.h || (a.h = {});
      a.h[b] = c;
    } else a.h && (a.h[b] = void 0), (e = tb);
    return C(a, b, e, d);
  }
  z.prototype.toJSON = function () {
    var a = Eb(this, !1);
    return qb ? a : lb(a, ob, ib);
  };
  function Eb(a, b) {
    if (a.h)
      for (var c in a.h)
        if (Object.prototype.hasOwnProperty.call(a.h, c)) {
          var d = a.h[c];
          if (Array.isArray(d))
            for (var e = 0; e < d.length; e++) d[e] && Eb(d[e], b);
          else d && Eb(d, b);
        }
    return a.i;
  }
  function Gb(a) {
    qb = !0;
    try {
      return JSON.stringify(a.toJSON(), Hb);
    } finally {
      qb = !1;
    }
  }
  function Hb(a, b) {
    switch (typeof b) {
      case "number":
        return isFinite(b) ? b : String(b);
      case "object":
        if (jb && null != b && b instanceof Uint8Array) return ib(b);
    }
    return b;
  }
  function Ib(a, b, c) {
    return Bb(a, b) === c ? c : -1;
  }
  function I(a, b, c) {
    return D(a, b, void 0 === c ? "" : c);
  }
  function Jb(a, b, c) {
    return D(a, Ib(a, c, b), 0);
  }
  function Kb(a, b, c, d) {
    return F(a, b, Ib(a, d, c));
  }
  function Lb(a) {
    z.call(this, a, -1, Mb);
  }
  v(Lb, z);
  function Nb(a) {
    z.call(this, a);
  }
  v(Nb, z);
  var Mb = [2, 3];
  function Ob(a, b) {
    this.i = (a === Pb && b) || "";
    this.h = Qb;
  }
  var Qb = {},
    Pb = {}; /* 
 
 SPDX-License-Identifier: Apache-2.0 
*/
  var Rb = {};
  function Sb() {
    var a = "undefined" !== typeof window ? window.trustedTypes : void 0;
    return null !== a && void 0 !== a ? a : null;
  }
  var Tb;
  function Ub() {
    var a, b;
    if (void 0 === Tb)
      try {
        Tb =
          null !==
            (b =
              null === (a = Sb()) || void 0 === a
                ? void 0
                : a.createPolicy("google#safe", {
                    createHTML: function (c) {
                      return c;
                    },
                    createScript: function (c) {
                      return c;
                    },
                    createScriptURL: function (c) {
                      return c;
                    },
                  })) && void 0 !== b
            ? b
            : null;
      } catch (c) {
        Tb = null;
      }
    return Tb;
  }
  function Vb() {}
  function Wb(a) {
    this.h = a;
  }
  v(Wb, Vb);
  Wb.prototype.toString = function () {
    return this.h.toString();
  };
  function Xb(a) {
    var b,
      c = null === (b = Ub()) || void 0 === b ? void 0 : b.createScriptURL(a);
    return new Wb(null !== c && void 0 !== c ? c : a, Rb);
  }
  function Yb(a) {
    if (a instanceof Wb) return a.h;
    throw Error("");
  }
  function Zb(a, b) {
    for (var c = [], d = 1; d < arguments.length; ++d) c[d - 1] = arguments[d];
    if (0 === c.length) return Xb(a[0]);
    d = [a[0]];
    for (var e = 0; e < c.length; e++)
      d.push(encodeURIComponent(c[e])), d.push(a[e + 1]);
    return Xb(d.join(""));
  }
  var $b;
  function ac(a, b) {
    this.h = b === bc ? a : "";
  }
  function cc(a, b) {
    a = dc.exec(ec(a).toString());
    var c = a[3] || "";
    return fc(a[1] + gc("?", a[2] || "", b) + gc("#", c, void 0));
  }
  ac.prototype.toString = function () {
    return this.h + "";
  };
  function ec(a) {
    return a instanceof ac && a.constructor === ac
      ? a.h
      : "type_error:TrustedResourceUrl";
  }
  var dc = /^([^?#]*)(\?[^#]*)?(#[\s\S]*)?/,
    bc = {};
  function fc(a) {
    if (void 0 === $b) {
      var b = null;
      var c = w.trustedTypes;
      if (c && c.createPolicy) {
        try {
          b = c.createPolicy("goog#html", {
            createHTML: Ga,
            createScript: Ga,
            createScriptURL: Ga,
          });
        } catch (d) {
          w.console && w.console.error(d.message);
        }
        $b = b;
      } else $b = b;
    }
    a = (b = $b) ? b.createScriptURL(a) : a;
    return new ac(a, bc);
  }
  function gc(a, b, c) {
    if (null == c) return b;
    if ("string" === typeof c) return c ? a + encodeURIComponent(c) : "";
    for (var d in c)
      if (Object.prototype.hasOwnProperty.call(c, d)) {
        var e = c[d];
        e = Array.isArray(e) ? e : [e];
        for (var f = 0; f < e.length; f++) {
          var g = e[f];
          null != g &&
            (b || (b = a),
            (b +=
              (b.length > a.length ? "&" : "") +
              encodeURIComponent(d) +
              "=" +
              encodeURIComponent(String(g))));
        }
      }
    return b;
  }
  function hc(a) {
    return a instanceof Vb ? Yb(a) : ec(a);
  }
  function ic(a) {
    return function () {
      return !a.apply(this, arguments);
    };
  }
  function jc(a) {
    var b = !1,
      c;
    return function () {
      b || ((c = a()), (b = !0));
      return c;
    };
  }
  function kc(a) {
    var b = a;
    return function () {
      if (b) {
        var c = b;
        b = null;
        c();
      }
    };
  }
  function lc(a, b, c) {
    a.addEventListener && a.addEventListener(b, c, !1);
  }
  function mc(a, b, c) {
    a.removeEventListener && a.removeEventListener(b, c, !1);
  }
  function nc(a) {
    return String(a).replace(/\-([a-z])/g, function (b, c) {
      return c.toUpperCase();
    });
  }
  function oc(a, b) {
    b = String(b);
    "application/xhtml+xml" === a.contentType && (b = b.toLowerCase());
    return a.createElement(b);
  }
  function pc(a) {
    this.h = a || w.document || document;
  }
  pc.prototype.contains = function (a, b) {
    if (!a || !b) return !1;
    if (a.contains && 1 == b.nodeType) return a == b || a.contains(b);
    if ("undefined" != typeof a.compareDocumentPosition)
      return a == b || !!(a.compareDocumentPosition(b) & 16);
    for (; b && a != b; ) b = b.parentNode;
    return b == a;
  };
  function qc() {
    return !rc() && (y("iPod") || y("iPhone") || y("Android") || y("IEMobile"));
  }
  function rc() {
    return y("iPad") || (y("Android") && !y("Mobile")) || y("Silk");
  }
  var sc = RegExp(
      "^(?:([^:/?#.]+):)?(?://(?:([^\\\\/?#]*)@)?([^\\\\/?#]*?)(?::([0-9]+))?(?=[\\\\/?#]|$))?([^?#]+)?(?:\\?([^#]*))?(?:#([\\s\\S]*))?$"
    ),
    tc = /#|$/;
  function uc(a) {
    try {
      var b;
      if ((b = !!a && null != a.location.href))
        a: {
          try {
            eb(a.foo);
            b = !0;
            break a;
          } catch (c) {}
          b = !1;
        }
      return b;
    } catch (c) {
      return !1;
    }
  }
  function vc(a, b) {
    var c = a.createElement("script");
    c.src = hc(b);
    var d;
    b = ((c.ownerDocument && c.ownerDocument.defaultView) || window).document;
    var e =
      null === (d = b.querySelector) || void 0 === d
        ? void 0
        : d.call(b, "script[nonce]");
    (d = e ? e.nonce || e.getAttribute("nonce") || "" : "") &&
      c.setAttribute("nonce", d);
    return (a = a.getElementsByTagName("script")[0]) && a.parentNode
      ? (a.parentNode.insertBefore(c, a), c)
      : null;
  }
  function wc(a, b) {
    return b.getComputedStyle ? b.getComputedStyle(a, null) : a.currentStyle;
  }
  function zc(a, b) {
    if (!Ac() && !Bc()) {
      var c = Math.random();
      if (c < b) return (c = Cc(w)), a[Math.floor(c * a.length)];
    }
    return null;
  }
  function Cc(a) {
    if (!a.crypto) return Math.random();
    try {
      var b = new Uint32Array(1);
      a.crypto.getRandomValues(b);
      return b[0] / 65536 / 65536;
    } catch (c) {
      return Math.random();
    }
  }
  function Dc(a, b) {
    if (a)
      for (var c in a)
        Object.prototype.hasOwnProperty.call(a, c) &&
          b.call(void 0, a[c], c, a);
  }
  function Ec(a) {
    var b = a.length;
    if (0 == b) return 0;
    for (var c = 305419896, d = 0; d < b; d++)
      c ^= ((c << 5) + (c >> 2) + a.charCodeAt(d)) & 4294967295;
    return 0 < c ? c : 4294967296 + c;
  }
  var Bc = jc(function () {
    return (
      Pa(
        [
          "Google Web Preview",
          "Mediapartners-Google",
          "Google-Read-Aloud",
          "Google-Adwords",
        ],
        Fc
      ) || 1e-4 > Math.random()
    );
  });
  function Gc(a, b) {
    var c = -1;
    try {
      a && (c = parseInt(a.getItem(b), 10));
    } catch (d) {
      return null;
    }
    return 0 <= c && 1e3 > c ? c : null;
  }
  function Hc(a, b, c) {
    a = Bc() ? null : Math.floor(1e3 * Cc(a));
    var d;
    if ((d = null != a && b))
      a: {
        var e = String(a);
        try {
          if (b) {
            b.setItem(c, e);
            d = e;
            break a;
          }
        } catch (f) {}
        d = null;
      }
    return d ? a : null;
  }
  var Ac = jc(function () {
    return Fc("MSIE");
  });
  function Fc(a) {
    return -1 != Ta.indexOf(a);
  }
  var Ic = /^([0-9.]+)px$/,
    Jc = /^(-?[0-9.]{1,30})$/;
  function Kc(a) {
    return Jc.test(a) && ((a = Number(a)), !isNaN(a)) ? a : null;
  }
  function J(a) {
    return (a = Ic.exec(a)) ? +a[1] : null;
  }
  function Lc(a, b) {
    for (var c = 0; 50 > c; ++c) {
      try {
        var d = !(!a.frames || !a.frames[b]);
      } catch (g) {
        d = !1;
      }
      if (d) return a;
      a: {
        try {
          var e = a.parent;
          if (e && e != a) {
            var f = e;
            break a;
          }
        } catch (g) {}
        f = null;
      }
      if (!(a = f)) break;
    }
    return null;
  }
  var Mc = jc(function () {
    return qc() ? 2 : rc() ? 1 : 0;
  });
  function Nc(a) {
    Dc({ display: "none" }, function (b, c) {
      a.style.setProperty(c, b, "important");
    });
  }
  var Oc = [];
  function Pc() {
    var a = Oc;
    Oc = [];
    a = t(a);
    for (var b = a.next(); !b.done; b = a.next()) {
      b = b.value;
      try {
        b();
      } catch (c) {}
    }
  }
  function Qc(a, b) {
    b = void 0 === b ? window.document : b;
    0 != a.length &&
      b.head &&
      a.forEach(function (c) {
        if (c) {
          var d = b;
          d = void 0 === d ? window.document : d;
          if (c && d.head) {
            var e = document.createElement("meta");
            d.head.appendChild(e);
            e.httpEquiv = "origin-trial";
            e.content = c;
          }
        }
      });
  }
  function Rc(a) {
    if ("number" !== typeof a.goog_pvsid)
      try {
        Object.defineProperty(a, "goog_pvsid", {
          value: Math.floor(Math.random() * Math.pow(2, 52)),
          configurable: !1,
        });
      } catch (b) {}
    return Number(a.goog_pvsid) || -1;
  }
  function Sc(a) {
    var b = Tc;
    "complete" === b.readyState || "interactive" === b.readyState
      ? (Oc.push(a),
        1 == Oc.length &&
          (p.Promise
            ? p.Promise.resolve().then(Pc)
            : window.setImmediate
            ? setImmediate(Pc)
            : setTimeout(Pc, 0)))
      : b.addEventListener("DOMContentLoaded", a);
  }
  function Uc(a, b, c) {
    a.google_image_requests || (a.google_image_requests = []);
    var d = a.document.createElement("img");
    if (c) {
      var e = function (f) {
        c && c(f);
        mc(d, "load", e);
        mc(d, "error", e);
      };
      lc(d, "load", e);
      lc(d, "error", e);
    }
    d.src = b;
    a.google_image_requests.push(d);
  }
  function Vc(a, b) {
    var c = "https://pagead2.googlesyndication.com/pagead/gen_204?id=" + b;
    Dc(a, function (d, e) {
      d && (c += "&" + e + "=" + encodeURIComponent(d));
    });
    Wc(c);
  }
  function Wc(a) {
    var b = window;
    b.fetch
      ? b.fetch(a, {
          keepalive: !0,
          credentials: "include",
          redirect: "follow",
          method: "get",
          mode: "no-cors",
        })
      : Uc(b, a, null);
  }
  var Xc = null;
  var Tc = document,
    K = window;
  var Yc = {
    "120x90": !0,
    "160x90": !0,
    "180x90": !0,
    "200x90": !0,
    "468x15": !0,
    "728x15": !0,
  };
  function Zc(a, b) {
    if (15 == b) {
      if (728 <= a) return 728;
      if (468 <= a) return 468;
    } else if (90 == b) {
      if (200 <= a) return 200;
      if (180 <= a) return 180;
      if (160 <= a) return 160;
      if (120 <= a) return 120;
    }
    return null;
  }
  function $c(a) {
    a = void 0 === a ? w : a;
    var b = a.context || a.AMP_CONTEXT_DATA;
    if (!b)
      try {
        b = a.parent.context || a.parent.AMP_CONTEXT_DATA;
      } catch (c) {}
    try {
      if (b && b.pageViewId && b.canonicalUrl) return b;
    } catch (c) {}
    return null;
  }
  function ad(a) {
    return (a = a || $c()) ? (uc(a.master) ? a.master : null) : null;
  }
  function bd(a, b) {
    if (a)
      for (var c in a)
        Object.prototype.hasOwnProperty.call(a, c) &&
          b.call(void 0, a[c], c, a);
  }
  function cd(a) {
    return !(!a || !a.call) && "function" === typeof a;
  }
  function dd(a) {
    var b = void 0 === b ? 1 : b;
    a = ad($c(a)) || a;
    a.google_unique_id = (a.google_unique_id || 0) + b;
    return a.google_unique_id;
  }
  function ed(a) {
    a = a.google_unique_id;
    return "number" === typeof a ? a : 0;
  }
  var fd = !!window.google_async_iframe_id,
    gd = (fd && window.parent) || window;
  function hd() {
    if (fd && !uc(gd)) {
      var a = "." + Tc.domain;
      try {
        for (; 2 < a.split(".").length && !uc(gd); )
          (Tc.domain = a = a.substr(a.indexOf(".") + 1)), (gd = window.parent);
      } catch (b) {}
      uc(gd) || (gd = window);
    }
    return gd;
  }
  var id = RegExp("(^| )adsbygoogle($| )");
  function jd() {
    var a = void 0 === a ? K : a;
    if (!a) return !1;
    try {
      return !(!a.navigator.standalone && !a.top.navigator.standalone);
    } catch (b) {
      return !1;
    }
  }
  function kd(a) {
    a = a.top;
    return uc(a) ? a : null;
  }
  function ld(a) {
    if (!a) return "";
    a = a.toLowerCase();
    "ca-" != a.substring(0, 3) && (a = "ca-" + a);
    return a;
  }
  var md = null;
  function nd(a, b) {
    b = void 0 === b ? [] : b;
    var c = !1;
    w.google_logging_queue || ((c = !0), (w.google_logging_queue = []));
    w.google_logging_queue.push([a, b]);
    if ((a = c)) {
      if (null == md) {
        md = !1;
        try {
          var d = kd(w);
          d && -1 !== d.location.hash.indexOf("google_logging") && (md = !0);
          w.localStorage.getItem("google_logging") && (md = !0);
        } catch (e) {}
      }
      a = md;
    }
    a &&
      ((d = w.document),
      (a = new Ob(
        Pb,
        "https://pagead2.googlesyndication.com/pagead/js/logging_library.js"
      )),
      (a = fc(
        a instanceof Ob && a.constructor === Ob && a.h === Qb
          ? a.i
          : "type_error:Const"
      )),
      vc(d, a));
  }
  function od(a) {
    var b = window;
    var c = void 0 === c ? null : c;
    lc(b, "message", function (d) {
      try {
        var e = JSON.parse(d.data);
      } catch (f) {
        return;
      }
      !e ||
        "sc-cnf" !== e.googMsgType ||
        (c && /[:|%3A]javascript\(/i.test(d.data) && !c(e, d)) ||
        a(e, d);
    });
  }
  function pd() {
    this.j = "&";
    this.i = {};
    this.l = 0;
    this.h = [];
  }
  function qd(a, b) {
    var c = {};
    c[a] = b;
    return [c];
  }
  function rd(a, b, c, d, e) {
    var f = [];
    Dc(a, function (g, h) {
      (g = sd(g, b, c, d, e)) && f.push(h + "=" + g);
    });
    return f.join(b);
  }
  function sd(a, b, c, d, e) {
    if (null == a) return "";
    b = b || "&";
    c = c || ",$";
    "string" == typeof c && (c = c.split(""));
    if (a instanceof Array) {
      if (((d = d || 0), d < c.length)) {
        for (var f = [], g = 0; g < a.length; g++)
          f.push(sd(a[g], b, c, d + 1, e));
        return f.join(c[d]);
      }
    } else if ("object" == typeof a)
      return (
        (e = e || 0), 2 > e ? encodeURIComponent(rd(a, b, c, d, e + 1)) : "..."
      );
    return encodeURIComponent(String(a));
  }
  function td(a, b, c) {
    b = b + "//pagead2.googlesyndication.com" + c;
    var d = ud(a) - c.length;
    if (0 > d) return "";
    a.h.sort(function (m, r) {
      return m - r;
    });
    c = null;
    for (var e = "", f = 0; f < a.h.length; f++)
      for (var g = a.h[f], h = a.i[g], k = 0; k < h.length; k++) {
        if (!d) {
          c = null == c ? g : c;
          break;
        }
        var l = rd(h[k], a.j, ",$");
        if (l) {
          l = e + l;
          if (d >= l.length) {
            d -= l.length;
            b += l;
            e = a.j;
            break;
          }
          c = null == c ? g : c;
        }
      }
    a = "";
    null != c && (a = e + "trn=" + c);
    return b + a;
  }
  function ud(a) {
    var b = 1,
      c;
    for (c in a.i) b = c.length > b ? c.length : b;
    return 3997 - b - a.j.length - 1;
  }
  function vd(a, b, c, d, e, f) {
    if ((d ? a.h : Math.random()) < (e || 0.01))
      try {
        if (c instanceof pd) var g = c;
        else
          (g = new pd()),
            Dc(c, function (k, l) {
              var m = g,
                r = m.l++;
              k = qd(l, k);
              m.h.push(r);
              m.i[r] = k;
            });
        var h = td(g, a.i, "/pagead/gen_204?id=" + b + "&");
        h &&
          ("undefined" !== typeof f
            ? Uc(w, h, void 0 === f ? null : f)
            : Uc(w, h, null));
      } catch (k) {}
  }
  var wd = {
    overlays: 1,
    interstitials: 2,
    vignettes: 2,
    inserts: 3,
    immersives: 4,
    list_view: 5,
  };
  function xd() {
    this.wasPlaTagProcessed = !1;
    this.wasReactiveAdConfigReceived = {};
    this.adCount = {};
    this.wasReactiveAdVisible = {};
    this.stateForType = {};
    this.reactiveTypeEnabledInAsfe = {};
    this.wasReactiveTagRequestSent = !1;
    this.reactiveTypeDisabledByPublisher = {};
    this.tagSpecificState = {};
    this.messageValidationEnabled = !1;
    this.floatingAdsStacking = new yd();
  }
  function zd(a) {
    a.google_reactive_ads_global_state
      ? null == a.google_reactive_ads_global_state.floatingAdsStacking &&
        (a.google_reactive_ads_global_state.floatingAdsStacking = new yd())
      : (a.google_reactive_ads_global_state = new xd());
    return a.google_reactive_ads_global_state;
  }
  function yd() {
    this.maxZIndexRestrictions = {};
    this.nextRestrictionId = 0;
    this.maxZIndexListeners = [];
  }
  function Ad(a) {
    a = a.document;
    var b = {};
    a && (b = "CSS1Compat" == a.compatMode ? a.documentElement : a.body);
    return b || {};
  }
  function L(a) {
    return Ad(a).clientWidth;
  }
  function Bd(a, b) {
    var c = void 0 === c ? {} : c;
    this.error = a;
    this.context = b.context;
    this.msg = b.message || "";
    this.id = b.id || "jserror";
    this.meta = c;
  }
  function Cd(a) {
    return !!(a.error && a.meta && a.id);
  }
  var Dd = RegExp("^https?://(\\w|-)+\\.cdn\\.ampproject\\.(net|org)(\\?|/|$)");
  function Ed(a, b) {
    this.h = a;
    this.i = b;
  }
  function Fd(a, b, c) {
    this.url = a;
    this.Y = b;
    this.La = !!c;
    this.depth = null;
  }
  var Gd = null;
  function Hd() {
    if (null === Gd) {
      Gd = "";
      try {
        var a = "";
        try {
          a = w.top.location.hash;
        } catch (c) {
          a = w.location.hash;
        }
        if (a) {
          var b = a.match(/\bdeid=([\d,]+)/);
          Gd = b ? b[1] : "";
        }
      } catch (c) {}
    }
    return Gd;
  }
  function Id() {
    var a = w.performance;
    return a && a.now && a.timing
      ? Math.floor(a.now() + a.timing.navigationStart)
      : Date.now();
  }
  function Jd() {
    var a = void 0 === a ? w : a;
    return (a = a.performance) && a.now ? a.now() : null;
  }
  function Kd(a, b) {
    var c = Jd() || Id();
    this.label = a;
    this.type = b;
    this.value = c;
    this.duration = 0;
    this.uniqueId = Math.random();
    this.slotId = void 0;
  }
  var Ld = w.performance,
    Md = !!(Ld && Ld.mark && Ld.measure && Ld.clearMarks),
    Nd = jc(function () {
      var a;
      if ((a = Md)) (a = Hd()), (a = !!a.indexOf && 0 <= a.indexOf("1337"));
      return a;
    });
  function Od() {
    var a = Pd;
    this.events = [];
    this.i = a || w;
    var b = null;
    a &&
      ((a.google_js_reporting_queue = a.google_js_reporting_queue || []),
      (this.events = a.google_js_reporting_queue),
      (b = a.google_measure_js_timing));
    this.h = Nd() || (null != b ? b : 1 > Math.random());
  }
  function Qd(a) {
    a &&
      Ld &&
      Nd() &&
      (Ld.clearMarks("goog_" + a.label + "_" + a.uniqueId + "_start"),
      Ld.clearMarks("goog_" + a.label + "_" + a.uniqueId + "_end"));
  }
  Od.prototype.start = function (a, b) {
    if (!this.h) return null;
    a = new Kd(a, b);
    b = "goog_" + a.label + "_" + a.uniqueId + "_start";
    Ld && Nd() && Ld.mark(b);
    return a;
  };
  Od.prototype.end = function (a) {
    if (this.h && "number" === typeof a.value) {
      a.duration = (Jd() || Id()) - a.value;
      var b = "goog_" + a.label + "_" + a.uniqueId + "_end";
      Ld && Nd() && Ld.mark(b);
      !this.h || 2048 < this.events.length || this.events.push(a);
    }
  };
  function Rd() {
    var a = Sd;
    this.m = Td;
    this.i = null;
    this.l = this.I;
    this.h = void 0 === a ? null : a;
    this.j = !1;
  }
  n = Rd.prototype;
  n.Ta = function (a) {
    this.l = a;
  };
  n.sa = function (a) {
    this.i = a;
  };
  n.Ua = function (a) {
    this.j = a;
  };
  n.ma = function (a, b, c) {
    try {
      if (this.h && this.h.h) {
        var d = this.h.start(a.toString(), 3);
        var e = b();
        this.h.end(d);
      } else e = b();
    } catch (h) {
      b = !0;
      try {
        Qd(d), (b = this.l(a, new Bd(h, { message: Ud(h) }), void 0, c));
      } catch (k) {
        this.I(217, k);
      }
      if (b) {
        var f, g;
        null == (f = window.console) || null == (g = f.error) || g.call(f, h);
      } else throw h;
    }
    return e;
  };
  n.Oa = function (a, b, c, d) {
    var e = this;
    return function (f) {
      for (var g = [], h = 0; h < arguments.length; ++h) g[h] = arguments[h];
      return e.ma(
        a,
        function () {
          return b.apply(c, g);
        },
        d
      );
    };
  };
  n.I = function (a, b, c, d, e) {
    e = e || "jserror";
    try {
      var f = new pd();
      f.h.push(1);
      f.i[1] = qd("context", a);
      Cd(b) || (b = new Bd(b, { message: Ud(b) }));
      if (b.msg) {
        var g = b.msg.substring(0, 512);
        f.h.push(2);
        f.i[2] = qd("msg", g);
      }
      var h = b.meta || {};
      if (this.i)
        try {
          this.i(h);
        } catch (xc) {}
      if (d)
        try {
          d(h);
        } catch (xc) {}
      b = [h];
      f.h.push(3);
      f.i[3] = b;
      d = w;
      b = [];
      g = null;
      do {
        var k = d;
        if (uc(k)) {
          var l = k.location.href;
          g = (k.document && k.document.referrer) || null;
        } else (l = g), (g = null);
        b.push(new Fd(l || "", k));
        try {
          d = k.parent;
        } catch (xc) {
          d = null;
        }
      } while (d && k != d);
      l = 0;
      for (var m = b.length - 1; l <= m; ++l) b[l].depth = m - l;
      k = w;
      if (
        k.location &&
        k.location.ancestorOrigins &&
        k.location.ancestorOrigins.length == b.length - 1
      )
        for (m = 1; m < b.length; ++m) {
          var r = b[m];
          r.url ||
            ((r.url = k.location.ancestorOrigins[m - 1] || ""), (r.La = !0));
        }
      var u = new Fd(w.location.href, w, !1);
      k = null;
      var x = b.length - 1;
      for (r = x; 0 <= r; --r) {
        var E = b[r];
        !k && Dd.test(E.url) && (k = E);
        if (E.url && !E.La) {
          u = E;
          break;
        }
      }
      E = null;
      var A = b.length && b[x].url;
      0 != u.depth && A && (E = b[x]);
      var G = new Ed(u, E);
      if (G.i) {
        var sa = G.i.url || "";
        f.h.push(4);
        f.i[4] = qd("top", sa);
      }
      var mb = { url: G.h.url || "" };
      if (G.h.url) {
        var yc = G.h.url.match(sc),
          Kf = yc[1],
          Lf = yc[3],
          Mf = yc[4];
        u = "";
        Kf && (u += Kf + ":");
        Lf && ((u += "//"), (u += Lf), Mf && (u += ":" + Mf));
        var Nf = u;
      } else Nf = "";
      mb = [mb, { url: Nf }];
      f.h.push(5);
      f.i[5] = mb;
      vd(this.m, e, f, this.j, c);
    } catch (xc) {
      try {
        vd(
          this.m,
          e,
          { context: "ecmserr", rctx: a, msg: Ud(xc), url: G && G.h.url },
          this.j,
          c
        );
      } catch (wo) {}
    }
    return !0;
  };
  function Ud(a) {
    var b = a.toString();
    a.name && -1 == b.indexOf(a.name) && (b += ": " + a.name);
    a.message && -1 == b.indexOf(a.message) && (b += ": " + a.message);
    if (a.stack) {
      a = a.stack;
      try {
        -1 == a.indexOf(b) && (a = b + "\n" + a);
        for (var c; a != c; )
          (c = a),
            (a = a.replace(/((https?:\/..*\/)[^\/:]*:\d+(?:.|\n)*)\2/, "$1"));
        b = a.replace(/\n */g, "\n");
      } catch (d) {}
    }
    return b;
  }
  function M(a) {
    a = void 0 === a ? "" : a;
    var b = Error.call(this);
    this.message = b.message;
    "stack" in b && (this.stack = b.stack);
    this.name = "TagError";
    this.message = a ? "adsbygoogle.push() error: " + a : "";
    Error.captureStackTrace
      ? Error.captureStackTrace(this, M)
      : (this.stack = Error().stack || "");
  }
  v(M, Error);
  var Td,
    Vd,
    Pd = hd(),
    Sd = new Od();
  function Wd(a) {
    null != a && (Pd.google_measure_js_timing = a);
    Pd.google_measure_js_timing ||
      ((a = Sd),
      (a.h = !1),
      a.events != a.i.google_js_reporting_queue &&
        (Nd() && Ma(a.events, Qd), (a.events.length = 0)));
  }
  Td = new (function () {
    var a = void 0 === a ? K : a;
    this.i = "http:" === a.location.protocol ? "http:" : "https:";
    this.h = Math.random();
  })();
  "number" !== typeof Pd.google_srt && (Pd.google_srt = Math.random());
  var Xd = Td,
    Yd = Pd.google_srt;
  0 <= Yd && 1 >= Yd && (Xd.h = Yd);
  Vd = new Rd();
  Vd.sa(function () {});
  Vd.Ua(!0);
  "complete" == Pd.document.readyState
    ? Wd()
    : Sd.h &&
      lc(Pd, "load", function () {
        Wd();
      });
  function Zd(a, b, c) {
    return Vd.ma(a, b, c);
  }
  function $d(a, b) {
    return Vd.Oa(a, b, void 0, void 0);
  }
  function ae(a, b, c) {
    vd(Td, a, b, !0, c, void 0);
  }
  function be(a) {
    return function (b) {
      Vd.I(a, b instanceof Error ? b : Error(b), void 0, void 0);
    };
  }
  function ce(a, b, c, d) {
    var e;
    Cd(b) ? (e = b.msg || Ud(b.error)) : (e = Ud(b));
    return 0 == e.indexOf("TagError")
      ? ((c = b instanceof Bd ? b.error : b),
        c.pbr || ((c.pbr = !0), Vd.I(a, b, 0.1, d, "puberror")),
        !1)
      : Vd.I(a, b, c, d);
  }
  fb || !y("Safari") || bb();
  function de(a) {
    z.call(this, a, -1, ee);
  }
  v(de, z);
  de.prototype.getId = function () {
    return B(this, 3);
  };
  var ee = [4];
  function fe(a) {
    z.call(this, a);
  }
  v(fe, z);
  function ge(a) {
    z.call(this, a);
  }
  v(ge, z);
  function he(a) {
    z.call(this, a);
  }
  v(he, z);
  he.prototype.setLocation = function (a) {
    return C(this, 1, a);
  };
  function ie(a) {
    z.call(this, a, -1, je);
  }
  v(ie, z);
  var je = [6, 7, 9, 10, 11];
  function ke(a) {
    z.call(this, a);
  }
  v(ke, z);
  function le(a) {
    z.call(this, a, -1, me);
  }
  v(le, z);
  var me = [1];
  function ne(a) {
    z.call(this, a, -1, oe);
  }
  v(ne, z);
  var oe = [2, 8],
    pe = [3, 4, 5],
    qe = [6, 7];
  function re(a) {
    z.call(this, a, -1, se);
  }
  v(re, z);
  var se = [4];
  function te(a) {
    z.call(this, a);
  }
  v(te, z);
  function ue(a) {
    z.call(this, a, -1, ve);
  }
  v(ue, z);
  var ve = [5],
    we = [1, 2, 3, 6, 7];
  function xe(a) {
    z.call(this, a, -1, ye);
  }
  v(xe, z);
  xe.prototype.getId = function () {
    return D(this, 1, 0);
  };
  xe.prototype.aa = function () {
    return D(this, 7, 0);
  };
  var ye = [2];
  function ze(a) {
    z.call(this, a, -1, Ae);
  }
  v(ze, z);
  ze.prototype.aa = function () {
    return D(this, 5, 0);
  };
  var Ae = [2];
  function Be(a) {
    z.call(this, a, -1, Ce);
  }
  v(Be, z);
  function De(a) {
    z.call(this, a, -1, Ee);
  }
  v(De, z);
  De.prototype.aa = function () {
    return D(this, 1, 0);
  };
  function Fe(a) {
    z.call(this, a);
  }
  v(Fe, z);
  var Ce = [1, 4, 2, 3],
    Ee = [2];
  function Ge(a) {
    z.call(this, a);
  }
  v(Ge, z);
  var He = [13, 14];
  function N(a) {
    a.google_ad_modifications || (a.google_ad_modifications = {});
    return a.google_ad_modifications;
  }
  function Ie(a) {
    a = N(a);
    var b = a.space_collapsing || "none";
    return a.remove_ads_by_default
      ? { Fa: !0, wb: b, pa: a.ablation_viewport_offset }
      : null;
  }
  function Je(a, b) {
    a = N(a);
    a.tag_partners = a.tag_partners || [];
    a.tag_partners.push(b);
  }
  function Ke(a, b) {
    a = N(a);
    a.remove_ads_by_default = !0;
    a.space_collapsing = "slot";
    a.ablation_viewport_offset = b;
  }
  function Le(a) {
    N(K).allow_second_reactive_tag = a;
  }
  var O = {},
    Me =
      ((O.google_ad_channel = !0),
      (O.google_ad_client = !0),
      (O.google_ad_host = !0),
      (O.google_ad_host_channel = !0),
      (O.google_adtest = !0),
      (O.google_tag_for_child_directed_treatment = !0),
      (O.google_tag_for_under_age_of_consent = !0),
      (O.google_tag_partner = !0),
      (O.google_restrict_data_processing = !0),
      (O.google_page_url = !0),
      (O.google_debug_params = !0),
      (O.google_adbreak_test = !0),
      (O.google_ad_frequency_hint = !0),
      (O.google_admob_interstitial_slot = !0),
      (O.google_admob_rewarded_slot = !0),
      (O.google_max_ad_content_rating = !0),
      O);
  function Ne(a, b) {
    if (!a) return !1;
    a = a.hash;
    if (!a || !a.indexOf) return !1;
    if (-1 != a.indexOf(b)) return !0;
    b = Oe(b);
    return "go" != b && -1 != a.indexOf(b) ? !0 : !1;
  }
  function Oe(a) {
    var b = "";
    bd(a.split("_"), function (c) {
      b += c.substr(0, 2);
    });
    return b;
  }
  function Pe(a) {
    return null !== a && void 0 !== a;
  }
  function Qe(a, b) {
    if (!b(a)) throw Error(String(a));
  }
  function Re(a) {
    return "string" === typeof a;
  }
  function Se(a) {
    return void 0 === a;
  }
  var Te;
  Te = { Cb: 0, Xa: 3, Ya: 4, Za: 5 };
  var Ue = Te.Xa,
    Ve = Te.Ya,
    We = Te.Za;
  function Xe(a) {
    return null != a ? !a : a;
  }
  function Ye(a, b) {
    for (var c = !1, d = 0; d < a.length; d++) {
      var e = a[d]();
      if (e === b) return e;
      null == e && (c = !0);
    }
    if (!c) return !b;
  }
  function Ze(a, b) {
    var c = H(a, ne, 2);
    if (!c.length) return $e(a, b);
    a = D(a, 1, 0);
    if (1 === a) return Xe(Ze(c[0], b));
    c = Oa(c, function (d) {
      return function () {
        return Ze(d, b);
      };
    });
    switch (a) {
      case 2:
        return Ye(c, !1);
      case 3:
        return Ye(c, !0);
    }
  }
  function $e(a, b) {
    var c = Bb(a, pe);
    a: {
      switch (c) {
        case Ue:
          var d = Jb(a, 3, pe);
          break a;
        case Ve:
          d = Jb(a, 4, pe);
          break a;
        case We:
          d = Jb(a, 5, pe);
          break a;
      }
      d = void 0;
    }
    if (d && (b = (b = b[c]) && b[d])) {
      try {
        var e = b.apply(null, la(vb(a, 8)));
      } catch (f) {
        return;
      }
      b = D(a, 1, 0);
      if (4 === b) return !!e;
      d = null != e;
      if (5 === b) return d;
      if (12 === b) a = I(a, Ib(a, qe, 7), void 0);
      else
        a: {
          switch (c) {
            case Ve:
              a = yb(a, Ib(a, qe, 6), void 0);
              break a;
            case We:
              a = I(a, Ib(a, qe, 7), void 0);
              break a;
          }
          a = void 0;
        }
      if (null != a) {
        if (6 === b) return e === a;
        if (9 === b) return null != e && 0 === Ka(String(e), a);
        if (d)
          switch (b) {
            case 7:
              return e < a;
            case 8:
              return e > a;
            case 12:
              return Re(a) && Re(e) && new RegExp(a).test(e);
            case 10:
              return null != e && -1 === Ka(String(e), a);
            case 11:
              return null != e && 1 === Ka(String(e), a);
          }
      }
    }
  }
  function af(a, b) {
    return !a || !(!b || !Ze(a, b));
  }
  function bf(a, b) {
    this.h = a;
    this.i = b;
  }
  function cf(a) {
    return null != a.h ? a.h.value : null;
  }
  function df(a, b) {
    null != a.h && b(a.h.value);
    return a;
  }
  bf.prototype.map = function (a) {
    return null != this.h
      ? ((a = a(this.h.value)), a instanceof bf ? a : ef(a))
      : this;
  };
  function ff(a, b) {
    null != a.h || b(a.i);
    return a;
  }
  function ef(a) {
    return new bf({ value: a }, null);
  }
  function gf(a) {
    return new bf(null, a);
  }
  function hf(a) {
    try {
      return ef(a());
    } catch (b) {
      return gf(b);
    }
  }
  function jf(a) {
    z.call(this, a);
  }
  v(jf, z);
  function kf(a) {
    try {
      var b = a.localStorage.getItem("google_auto_fc_cmp_setting") || null;
    } catch (d) {
      b = null;
    }
    var c = b;
    return c
      ? hf(function () {
          return sb(jf, c ? JSON.parse(c) : null);
        })
      : ef(null);
  }
  function lf() {
    this.S = {};
  }
  function mf() {
    if (nf) return nf;
    var a = ad() || hd(),
      b = a.google_persistent_state_async;
    return null != b &&
      "object" == typeof b &&
      null != b.S &&
      "object" == typeof b.S
      ? (nf = b)
      : (a.google_persistent_state_async = nf = new lf());
  }
  function of(a) {
    return pf[a] || "google_ps_" + a;
  }
  function qf(a, b, c) {
    b = of(b);
    a = a.S;
    var d = a[b];
    return void 0 === d ? (a[b] = c) : d;
  }
  var nf = null,
    rf = {},
    pf =
      ((rf[8] = "google_prev_ad_formats_by_region"),
      (rf[9] = "google_prev_ad_slotnames_by_region"),
      rf);
  function sf(a) {
    this.h = a || { cookie: "" };
  }
  sf.prototype.set = function (a, b, c) {
    var d = !1;
    if ("object" === typeof c) {
      var e = c.Eb;
      d = c.Fb || !1;
      var f = c.domain || void 0;
      var g = c.path || void 0;
      var h = c.lb;
    }
    if (/[;=\s]/.test(a)) throw Error('Invalid cookie name "' + a + '"');
    if (/[;\r\n]/.test(b)) throw Error('Invalid cookie value "' + b + '"');
    void 0 === h && (h = -1);
    this.h.cookie =
      a +
      "=" +
      b +
      (f ? ";domain=" + f : "") +
      (g ? ";path=" + g : "") +
      (0 > h
        ? ""
        : 0 == h
        ? ";expires=" + new Date(1970, 1, 1).toUTCString()
        : ";expires=" + new Date(Date.now() + 1e3 * h).toUTCString()) +
      (d ? ";secure" : "") +
      (null != e ? ";samesite=" + e : "");
  };
  sf.prototype.get = function (a, b) {
    for (
      var c = a + "=", d = (this.h.cookie || "").split(";"), e = 0, f;
      e < d.length;
      e++
    ) {
      f = Ja(d[e]);
      if (0 == f.lastIndexOf(c, 0)) return f.substr(c.length);
      if (f == a) return "";
    }
    return b;
  };
  sf.prototype.isEmpty = function () {
    return !this.h.cookie;
  };
  sf.prototype.clear = function () {
    for (
      var a = (this.h.cookie || "").split(";"), b = [], c = [], d, e, f = 0;
      f < a.length;
      f++
    )
      (e = Ja(a[f])),
        (d = e.indexOf("=")),
        -1 == d
          ? (b.push(""), c.push(e))
          : (b.push(e.substring(0, d)), c.push(e.substring(d + 1)));
    for (a = b.length - 1; 0 <= a; a--)
      (c = b[a]),
        this.get(c),
        this.set(c, "", { lb: 0, path: void 0, domain: void 0 });
  };
  function tf(a) {
    z.call(this, a);
  }
  v(tf, z);
  function uf(a) {
    var b = new tf();
    return C(b, 5, a);
  }
  function P() {
    this.v = this.v;
    this.D = this.D;
  }
  P.prototype.v = !1;
  P.prototype.j = function () {
    if (this.D) for (; this.D.length; ) this.D.shift()();
  };
  function vf(a) {
    void 0 !== a.addtlConsent &&
      "string" !== typeof a.addtlConsent &&
      (a.addtlConsent = void 0);
    void 0 !== a.gdprApplies &&
      "boolean" !== typeof a.gdprApplies &&
      (a.gdprApplies = void 0);
    return (void 0 !== a.tcString && "string" !== typeof a.tcString) ||
      (void 0 !== a.listenerId && "number" !== typeof a.listenerId)
      ? 2
      : a.cmpStatus && "error" !== a.cmpStatus
      ? 0
      : 3;
  }
  function wf(a, b) {
    b = void 0 === b ? 500 : b;
    P.call(this);
    this.h = a;
    this.i = null;
    this.m = {};
    this.H = 0;
    this.A = b;
    this.l = null;
  }
  v(wf, P);
  wf.prototype.j = function () {
    this.m = {};
    this.l && (mc(this.h, "message", this.l), delete this.l);
    delete this.m;
    delete this.h;
    delete this.i;
    P.prototype.j.call(this);
  };
  function xf(a) {
    return "function" === typeof a.h.__tcfapi || null != yf(a);
  }
  wf.prototype.addEventListener = function (a) {
    function b(f, g) {
      clearTimeout(e);
      f
        ? ((c = f),
          (c.internalErrorState = vf(c)),
          (g && 0 === c.internalErrorState) ||
            ((c.tcString = "tcunavailable"), g || (c.internalErrorState = 3)))
        : ((c.tcString = "tcunavailable"), (c.internalErrorState = 3));
      a(c);
    }
    var c = {},
      d = kc(function () {
        return a(c);
      }),
      e = 0;
    -1 !== this.A &&
      (e = setTimeout(function () {
        c.tcString = "tcunavailable";
        c.internalErrorState = 1;
        d();
      }, this.A));
    try {
      zf(this, "addEventListener", b);
    } catch (f) {
      (c.tcString = "tcunavailable"),
        (c.internalErrorState = 3),
        e && (clearTimeout(e), (e = 0)),
        d();
    }
  };
  wf.prototype.removeEventListener = function (a) {
    a && a.listenerId && zf(this, "removeEventListener", null, a.listenerId);
  };
  function zf(a, b, c, d) {
    c || (c = function () {});
    if ("function" === typeof a.h.__tcfapi) (a = a.h.__tcfapi), a(b, 2, c, d);
    else if (yf(a)) {
      Af(a);
      var e = ++a.H;
      a.m[e] = c;
      a.i &&
        ((c = {}),
        a.i.postMessage(
          ((c.__tcfapiCall = {
            command: b,
            version: 2,
            callId: e,
            parameter: d,
          }),
          c),
          "*"
        ));
    } else c({}, !1);
  }
  function yf(a) {
    if (a.i) return a.i;
    a.i = Lc(a.h, "__tcfapiLocator");
    return a.i;
  }
  function Af(a) {
    a.l ||
      ((a.l = function (b) {
        try {
          var c = ("string" === typeof b.data ? JSON.parse(b.data) : b.data)
            .__tcfapiReturn;
          a.m[c.callId](c.returnValue, c.success);
        } catch (d) {}
      }),
      lc(a.h, "message", a.l));
  }
  function Bf(a) {
    var b = a.Y,
      c = a.Va,
      d = a.bb;
    a = Cf({
      Y: b,
      ka: a.ka,
      ia: void 0 === a.ia ? !1 : a.ia,
      ja: void 0 === a.ja ? !1 : a.ja,
    });
    null != a.h || "tcunav" != a.i.message
      ? d(a)
      : Df(b, c)
          .then(function (e) {
            return e.map(Ef);
          })
          .then(function (e) {
            return e.map(function (f) {
              return Ff(b, f);
            });
          })
          .then(d);
  }
  function Cf(a) {
    var b = a.Y,
      c = a.ka,
      d = void 0 === a.ia ? !1 : a.ia;
    if (!(a = !(void 0 === a.ja ? 0 : a.ja) && xf(new wf(b)))) {
      if ((d = !d)) {
        if (c) {
          c = kf(b);
          if (null == c.h) Vd.I(806, c.i, void 0, void 0), (c = !1);
          else if ((c = c.h.value) && null != B(c, 1))
            b: switch (((c = B(c, 1)), c)) {
              case 1:
                c = !0;
                break b;
              default:
                throw Error("Unhandled AutoGdprFeatureStatus: " + c);
            }
          else c = !1;
          c = !c;
        }
        d = c;
      }
      a = d;
    }
    if (!a) return Ff(b, uf(!0));
    c = mf();
    return (c = qf(c, 24, void 0)) ? Ff(b, Ef(c)) : gf(Error("tcunav"));
  }
  function Df(a, b) {
    return p.Promise.race([Gf(), Hf(a, b)]);
  }
  function Gf() {
    return new p.Promise(function (a) {
      var b = mf();
      a = { resolve: a };
      var c = qf(b, 25, []);
      c.push(a);
      b.S[of(25)] = c;
    }).then(If);
  }
  function Hf(a, b) {
    return new p.Promise(function (c) {
      a.setTimeout(c, b, gf(Error("tcto")));
    });
  }
  function If(a) {
    return a ? ef(a) : gf(Error("tcnull"));
  }
  function Ef(a) {
    var b = void 0 === b ? !1 : b;
    if (!1 === a.gdprApplies) var c = !0;
    else
      void 0 === a.internalErrorState && (a.internalErrorState = vf(a)),
        (c =
          "error" === a.cmpStatus ||
          0 !== a.internalErrorState ||
          ("loaded" === a.cmpStatus &&
            ("tcloaded" === a.eventStatus ||
              "useractioncomplete" === a.eventStatus))
            ? !0
            : !1);
    if (c)
      if (
        !1 === a.gdprApplies ||
        "tcunavailable" === a.tcString ||
        (void 0 === a.gdprApplies && !b) ||
        "string" !== typeof a.tcString ||
        !a.tcString.length
      )
        a = !0;
      else {
        var d = void 0 === d ? "755" : d;
        b: {
          if (
            a.publisher &&
            a.publisher.restrictions &&
            ((b = a.publisher.restrictions["1"]), void 0 !== b)
          ) {
            b = b[void 0 === d ? "755" : d];
            break b;
          }
          b = void 0;
        }
        0 === b
          ? (a = !1)
          : a.purpose && a.vendor
          ? ((b = a.vendor.consents),
            (d = !(!b || !b[void 0 === d ? "755" : d])) &&
            a.purposeOneTreatment &&
            ("DE" === a.publisherCC || "CH" === a.publisherCC)
              ? (a = !0)
              : (d && ((a = a.purpose.consents), (d = !(!a || !a["1"]))),
                (a = d)))
          : (a = !0);
      }
    else a = !1;
    return uf(a);
  }
  function Ff(a, b) {
    a: {
      a = void 0 === a ? window : a;
      if (wb(b, 5))
        try {
          var c = a.localStorage;
          break a;
        } catch (d) {}
      c = null;
    }
    return (b = c) ? ef(b) : gf(Error("unav"));
  }
  function Q(a, b) {
    this.h = a;
    this.defaultValue = void 0 === b ? !1 : b;
  }
  function Jf(a, b) {
    this.h = a;
    this.defaultValue = void 0 === b ? 0 : b;
  }
  function Of(a, b) {
    b = void 0 === b ? [] : b;
    this.h = a;
    this.defaultValue = b;
  }
  var Pf = new Q(1084),
    Qf = new Q(1082),
    Rf = new Jf(62, 0.001),
    Sf = new (function (a, b) {
      this.h = a;
      this.defaultValue = void 0 === b ? "" : b;
    })(14),
    Tf = new Jf(1077),
    Uf = new Q(316),
    Vf = new Q(313),
    Wf = new Q(369),
    Xf = new Q(1093),
    Yf = new Jf(1098),
    Zf = new Q(1026),
    $f = new Q(1089),
    ag = new Q(1090),
    bg = new Q(1097),
    cg = new Q(1053),
    dg = new Jf(1046),
    eg = new Q(1092, !0),
    fg = new Q(218),
    gg = new Q(216),
    hg = new Q(217),
    ig = new Q(227),
    jg = new Q(208),
    kg = new Q(282),
    lg = new Q(1086),
    mg = new Jf(1079, 5),
    ng = new Q(251),
    og = new Of(1939),
    pg = new Of(1934, [
      "A/OOU4XAFfeAV4kM4+W9WBwNAHqq/bvtrRcJ1wpnNyO/i076BSUy1d14l2kBEgVmEuvxojSpD23172C6hBg2AQYAAACWeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjM0MDgzMTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlLCJ1c2FnZSI6InN1YnNldCJ9",
      "AwrB+XVH/KV6HfZNVtSEqlUJi3yUbtCp0/TJRj+38NDIw19/9P1h7ECTtdLdhIzG0Bsl4n/0rVmttJtGUCcewgAAAACceyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjM0MDgzMTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlLCJ1c2FnZSI6InN1YnNldCJ9",
      "Ax15QOERqai2A5XWrDY38Eg07xh2T0pkhpDPJuDlxr7D2Ka8wHvklgK7tTPZOnT+8H31lwHto5JpvYV8jRn1WgIAAACceyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjM0MDgzMTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlLCJ1c2FnZSI6InN1YnNldCJ9",
    ]),
    qg = new Q(203),
    rg = new Q(241),
    sg = new Q(84),
    tg = new Jf(1929, 50),
    ug = new Jf(1905),
    vg = new Q(240),
    wg = new Q(1928),
    xg = new Q(1941),
    yg = new Q(370946349),
    zg = new Q(392736476),
    Ag = new Q(379841917),
    Bg = new Q(397079674),
    Cg = new Of(1932, [
      "AxujKG9INjsZ8/gUq8+dTruNvk7RjZQ1oFhhgQbcTJKDnZfbzSTE81wvC2Hzaf3TW4avA76LTZEMdiedF1vIbA4AAABueyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=",
      "Azuce85ORtSnWe1MZDTv68qpaW3iHyfL9YbLRy0cwcCZwVnePnOmkUJlG8HGikmOwhZU22dElCcfrfX2HhrBPAkAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9",
      "A16nvcdeoOAqrJcmjLRpl1I6f3McDD8EfofAYTt/P/H4/AWwB99nxiPp6kA0fXoiZav908Z8etuL16laFPUdfQsAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9",
      "AxBHdr0J44vFBQtZUqX9sjiqf5yWZ/OcHRcRMN3H9TH+t90V/j3ENW6C8+igBZFXMJ7G3Pr8Dd13632aLng42wgAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9",
      "A88BWHFjcawUfKU3lIejLoryXoyjooBXLgWmGh+hNcqMK44cugvsI5YZbNarYvi3roc1fYbHA1AVbhAtuHZflgEAAAB2eyJvcmlnaW4iOiJodHRwczovL2dvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IlRydXN0VG9rZW5zIiwiZXhwaXJ5IjoxNjUyNzc0NDAwLCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==",
    ]),
    Dg = new Q(396382471, !0),
    Eg = new Q(393546021),
    Fg = new Jf(1935);
  var Gg = void 0;
  function Hg() {
    Qe(Gg, Pe);
    return Gg;
  }
  function Ig(a) {
    Qe(Gg, Se);
    Gg = a;
  }
  function R(a) {
    var b = "ra";
    if (a.ra && a.hasOwnProperty(b)) return a.ra;
    b = new a();
    return (a.ra = b);
  }
  function Jg() {
    var a = {};
    this.i = function (b, c) {
      return null != a[b] ? a[b] : c;
    };
    this.j = function (b, c) {
      return null != a[b] ? a[b] : c;
    };
    this.l = function (b, c) {
      return null != a[b] ? a[b] : c;
    };
    this.h = function (b, c) {
      return null != a[b] ? a[b] : c;
    };
    this.m = function () {};
  }
  function S(a) {
    return R(Jg).i(a.h, a.defaultValue);
  }
  function Kg(a) {
    return R(Jg).j(a.h, a.defaultValue);
  }
  function Lg() {
    return R(Jg).l(Sf.h, Sf.defaultValue);
  }
  function Mg(a, b, c, d) {
    c = void 0 === c ? "" : c;
    d = void 0 === d ? null : d;
    return Ng(a, c, function (e) {
      return Pa(H(e, Nb, 2), function (f) {
        return B(f, 1) === b;
      });
    })
      ? !0
      : 1 === b
      ? Og(c, d)
      : !1;
  }
  function Og(a, b) {
    return b
      ? 13 === Bb(b, He)
        ? xb(Kb(b, ke, 13, He), 1)
        : 14 === Bb(b, He) && "" !== a && I(b, 7) === a
        ? xb(F(Kb(b, le, 14, He), ke, 2), 1)
        : !1
      : !1;
  }
  function Pg(a, b, c) {
    c = void 0 === c ? "" : c;
    var d = kd(a) || a;
    return Qg(d, b)
      ? !0
      : Ng(a, c, function (e) {
          return Pa(vb(e, 3), function (f) {
            return f === b;
          });
        });
  }
  function Rg(a) {
    return Ng(w, void 0 === a ? "" : a, function () {
      return !0;
    });
  }
  function Qg(a, b) {
    a =
      (a =
        (a = a.location && a.location.hash) &&
        a.match(/forced_clientside_labs=([\d,]+)/)) && a[1];
    return !!a && Sa(a.split(","), b.toString());
  }
  function Ng(a, b, c) {
    a = kd(a) || a;
    var d = Sg(a);
    b && (b = ld(String(b)));
    return Ya(d, function (e, f) {
      return (
        Object.prototype.hasOwnProperty.call(d, f) && (!b || b === f) && c(e)
      );
    });
  }
  function Sg(a) {
    a = Tg(a);
    var b = {};
    bd(a, function (c, d) {
      try {
        var e = new Lb(c);
        b[d] = e;
      } catch (f) {}
    });
    return b;
  }
  function Tg(a) {
    return S(Qf)
      ? ((a = Cf({ Y: a, ka: Hg() })),
        null != a.h
          ? (Ug("ok"), (a = Vg(a.h.value)))
          : (Ug(a.i.message), (a = {})),
        a)
      : Vg(a.localStorage);
  }
  function Vg(a) {
    try {
      var b = a.getItem("google_adsense_settings");
      if (!b) return {};
      var c = JSON.parse(b);
      return c !== Object(c)
        ? {}
        : Xa(c, function (d, e) {
            return (
              Object.prototype.hasOwnProperty.call(c, e) &&
              "string" === typeof e &&
              Array.isArray(d)
            );
          });
    } catch (d) {
      return {};
    }
  }
  function Ug(a) {
    S(Pf) &&
      ae(
        "abg_adsensesettings_lserr",
        { s: a, g: S(Qf), c: Hg(), r: 0.01 },
        0.01
      );
  }
  function Wg(a, b) {
    return a instanceof HTMLScriptElement && b.test(a.src) ? 0 : 1;
  }
  function Xg(a) {
    var b = K.document;
    if (b.currentScript) return Wg(b.currentScript, a);
    b = t(b.scripts);
    for (var c = b.next(); !c.done; c = b.next())
      if (0 === Wg(c.value, a)) return 0;
    return 1;
  }
  function Yg(a, b) {
    var c = {},
      d = {},
      e = {},
      f = {};
    return (
      (f[Ue] =
        ((c[55] = function () {
          return 0 === a;
        }),
        (c[23] = function (g) {
          return Mg(K, Number(g));
        }),
        (c[24] = function (g) {
          return Pg(K, Number(g));
        }),
        (c[61] = function () {
          return xb(b, 6);
        }),
        c)),
      (f[Ve] =
        ((d[7] = function (g) {
          try {
            var h = window.localStorage;
          } catch (m) {
            h = null;
          }
          var k = Number(g);
          g = window;
          k = void 0 === k ? 0 : k;
          k = 0 != k ? "google_experiment_mod" + k : "google_experiment_mod";
          var l = Gc(h, k);
          h = null === l ? Hc(g, h, k) : l;
          return null !== h && void 0 !== h ? h : void 0;
        }),
        d)),
      (f[We] =
        ((e[6] = function () {
          return I(b, 15);
        }),
        e)),
      f
    );
  }
  function Zg(a, b) {
    for (var c = [], d = 1; d < arguments.length; ++d) c[d - 1] = arguments[d];
    a.mb.apply(
      a,
      la(
        c.map(function (e) {
          return function () {
            return { yb: 4, message: e() };
          };
        })
      )
    );
  }
  function $g(a) {
    return function () {
      return Cc(window) <= a;
    };
  }
  function ah(a) {
    return function (b) {
      for (var c = [], d = 0; d < arguments.length; ++d) c[d] = arguments[d];
      try {
        return a.apply(this, c);
      } catch (e) {}
    };
  }
  function bh(a) {
    var b = [],
      c = {};
    a = t(a);
    for (var d = a.next(); !d.done; c = { oa: c.oa }, d = a.next())
      (c.oa = d.value),
        ah(
          (function (e) {
            return function () {
              b.push(e.oa());
            };
          })(c)
        )();
    return b;
  }
  var ch = ah(function (a) {
    var b = [],
      c = {};
    a = t(a);
    for (var d = a.next(); !d.done; c = { ca: c.ca }, d = a.next())
      (c.ca = d.value),
        ah(
          (function (e) {
            return function () {
              b.push('[{"' + e.ca.yb + '":' + Gb(e.ca.message) + "}]");
            };
          })(c)
        )();
    return "[[" + b.join(",") + "]]";
  });
  function dh(a, b) {
    if (window.fetch)
      fetch(a, {
        method: "POST",
        body: b,
        keepalive: 65536 > b.length,
        credentials: "omit",
        mode: "no-cors",
        redirect: "follow",
      });
    else {
      var c = new XMLHttpRequest();
      c.open("POST", a, !0);
      c.send(b);
    }
  }
  function eh(a, b) {
    var c = void 0 === c ? dh : c;
    this.j = a;
    this.m = void 0 === b ? 1e3 : b;
    this.l = c;
    this.i = [];
    this.h = null;
  }
  eh.prototype.mb = function (a) {
    for (var b = [], c = 0; c < arguments.length; ++c) b[c] = arguments[c];
    var d = this;
    ah(function () {
      if (d.j()) {
        d.i.push.apply(d.i, la(bh(b)));
        var e = ah(function () {
          var f = ch(d.i);
          d.l("https://pagead2.googlesyndication.com/pagead/ping?e=1", f);
          d.i = [];
          d.h = null;
        });
        100 <= d.i.length
          ? (null !== d.h && window.clearTimeout(d.h),
            (d.h = window.setTimeout(e, 0)))
          : null === d.h && (d.h = window.setTimeout(e, d.m));
      }
    })();
  };
  function fh(a) {
    z.call(this, a, -1, gh);
  }
  v(fh, z);
  function hh(a, b) {
    var c = void 0 === c ? !1 : c;
    a.h || (a.h = {});
    var d = b ? Eb(b, !1) : b;
    a.h[1] = b;
    return C(a, 1, d, c);
  }
  function ih(a, b) {
    return Fb(a, 2, b);
  }
  function jh(a, b) {
    var c = void 0 === c ? !1 : c;
    return C(a, 4, nb(b || []), c);
  }
  function kh(a, b) {
    return Fb(a, 5, b);
  }
  function lh(a) {
    z.call(this, a);
  }
  v(lh, z);
  lh.prototype.aa = function () {
    return D(this, 1, 0);
  };
  function mh(a, b) {
    return zb(a, 1, b);
  }
  function nh(a, b) {
    return zb(a, 2, b);
  }
  function oh(a) {
    z.call(this, a);
  }
  v(oh, z);
  var gh = [2, 4, 5],
    ph = [1, 2];
  function qh(a) {
    z.call(this, a, -1, rh);
  }
  v(qh, z);
  function sh(a, b) {
    return Fb(a, 2, b);
  }
  function th(a, b) {
    return Fb(a, 3, b);
  }
  function uh(a) {
    z.call(this, a);
  }
  v(uh, z);
  var rh = [2, 3],
    vh = [1, 2, 3, 4];
  function wh(a) {
    z.call(this, a);
  }
  v(wh, z);
  wh.prototype.getTagSessionCorrelator = function () {
    return D(this, 2, 0);
  };
  function xh(a) {
    var b = Rc(window);
    return zb(a, 2, b);
  }
  function yh(a) {
    var b = new wh();
    return Cb(b, 4, a);
  }
  function zh(a) {
    var b = new wh();
    return Cb(b, 7, a);
  }
  var Db = [4, 5, 7];
  function Ah(a, b, c) {
    var d = void 0 === d ? new eh(jc($g(0 < a ? 1 / a : 0)), b) : d;
    this.j = a;
    this.l = c;
    this.i = d;
    this.h = [];
  }
  function Bh(a, b, c, d, e) {
    b = nh(mh(new lh(), b), c);
    d = ih(hh(kh(jh(new fh(), d), e), b), a.h);
    var f = yh(d);
    Zg(a.i, function () {
      var g = xh(zb(f, 1, Date.now()));
      return zb(g, 6, a.j);
    });
    a.h.push(b);
    100 < a.h.length && a.h.shift();
  }
  function Ch(a, b, c, d) {
    if (a.l) {
      b = th(sh(new qh(), b), c);
      d && zb(b, 1, d);
      var e = zh(b);
      Zg(a.i, function () {
        var f = xh(zb(e, 1, Date.now()));
        return zb(f, 6, a.j);
      });
    }
  }
  function Dh() {
    var a = {};
    this.h = ((a[Ue] = {}), (a[Ve] = {}), (a[We] = {}), a);
  }
  var Eh = /^true$/.test("false");
  function Fh(a, b) {
    switch (b) {
      case 1:
        return Jb(a, 1, we);
      case 2:
        return Jb(a, 2, we);
      case 3:
        return Jb(a, 3, we);
      case 6:
        return Jb(a, 6, we);
      default:
        return null;
    }
  }
  function Gh(a, b) {
    if (!a) return null;
    switch (b) {
      case 1:
        return xb(a, 1);
      case 7:
        return I(a, 3);
      case 2:
        return yb(a, 2);
      case 3:
        return I(a, 3);
      case 6:
        return vb(a, 4);
      default:
        return null;
    }
  }
  var Hh = jc(function () {
    if (!Eh) return {};
    try {
      var a = window.sessionStorage && window.sessionStorage.getItem("GGDFSSK");
      if (a) return JSON.parse(a);
    } catch (b) {}
    return {};
  });
  function Ih(a, b, c, d) {
    var e = (d = void 0 === d ? 0 : d),
      f,
      g;
    R(Jh).j[e] =
      null != (g = null == (f = R(Jh).j[e]) ? void 0 : f.add(b))
        ? g
        : new p.Set().add(b);
    e = Hh();
    if (null != e[b]) return e[b];
    b = Kh(d)[b];
    if (!b) return c;
    b = new ue(b);
    b = Lh(b);
    a = Gh(b, a);
    return null != a ? a : c;
  }
  function Lh(a) {
    var b = R(Dh).h;
    if (b) {
      var c = Ra(H(a, te, 5), function (d) {
        return af(F(d, ne, 1), b);
      });
      if (c) return F(c, re, 2);
    }
    return F(a, re, 4);
  }
  function Jh() {
    this.h = {};
    this.l = [];
    this.j = {};
    this.i = {};
  }
  function Mh(a, b, c) {
    return !!Ih(1, a, void 0 === b ? !1 : b, c);
  }
  function Nh(a, b, c) {
    b = void 0 === b ? 0 : b;
    a = Number(Ih(2, a, b, c));
    return isNaN(a) ? b : a;
  }
  function Oh(a, b, c) {
    return Ih(3, a, void 0 === b ? "" : b, c);
  }
  function Ph(a, b, c) {
    b = void 0 === b ? [] : b;
    return Ih(6, a, b, c);
  }
  function Kh(a) {
    return R(Jh).h[a] || (R(Jh).h[a] = {});
  }
  function Qh(a, b) {
    var c = Kh(b);
    Dc(a, function (d, e) {
      return (c[e] = d);
    });
  }
  function Rh(a, b, c, d) {
    var e = [],
      f = [];
    Ma(b, function (g) {
      var h = Kh(g);
      Ma(a, function (k) {
        var l = Bb(k, we),
          m = Fh(k, l);
        if (m) {
          a: {
            var r = new uh();
            switch (l) {
              case 1:
                Ab(r, 1, vh, m);
                break;
              case 2:
                Ab(r, 2, vh, m);
                break;
              case 3:
                Ab(r, 3, vh, m);
                break;
              case 6:
                Ab(r, 4, vh, m);
                break;
              default:
                l = void 0;
                break a;
            }
            l = r;
          }
          if ((r = l)) {
            var u;
            r = !(null == (u = R(Jh).j[g]) || !u.has(m));
          }
          r && e.push(l);
          if ((u = l)) {
            var x;
            u = !(null == (x = R(Jh).i[g]) || !x.has(m));
          }
          u && f.push(l);
          var E, A;
          R(Jh).i[g] =
            null != (A = null == (E = R(Jh).i[g]) ? void 0 : E.add(m))
              ? A
              : new p.Set().add(m);
          h[m] = k.toJSON();
        }
      });
    });
    (e.length || f.length) && Ch(c, e, f, null != d ? d : void 0);
  }
  function Sh(a, b) {
    var c = Kh(b);
    Ma(a, function (d) {
      var e = new ue(d),
        f = Bb(e, we);
      (e = Fh(e, f)) && (c[e] || (c[e] = d));
    });
  }
  function Th() {
    return Oa(q(Object, "keys").call(Object, R(Jh).h), function (a) {
      return Number(a);
    });
  }
  function Uh(a) {
    Sa(R(Jh).l, a) || Qh(Kh(4), a);
  }
  function T(a) {
    this.methodName = a;
  }
  var Vh = new T(1),
    Wh = new T(16),
    Xh = new T(15),
    Yh = new T(2),
    Zh = new T(3),
    $h = new T(4),
    ai = new T(5),
    bi = new T(6),
    ci = new T(7),
    di = new T(8),
    ei = new T(9),
    fi = new T(10),
    gi = new T(11),
    hi = new T(12),
    ii = new T(13),
    ji = new T(14);
  function U(a, b, c) {
    c.hasOwnProperty(a.methodName) ||
      Object.defineProperty(c, String(a.methodName), { value: b });
  }
  function ki(a, b, c) {
    return b[a.methodName] || c || function () {};
  }
  function li(a) {
    U(ai, Mh, a);
    U(bi, Nh, a);
    U(ci, Oh, a);
    U(di, Ph, a);
    U(ii, Sh, a);
    U(Xh, Uh, a);
  }
  function mi(a) {
    U(
      $h,
      function (b) {
        R(Dh).h = b;
      },
      a
    );
    U(
      ei,
      function (b, c) {
        var d = R(Dh);
        d.h[Ue][b] || (d.h[Ue][b] = c);
      },
      a
    );
    U(
      fi,
      function (b, c) {
        var d = R(Dh);
        d.h[Ve][b] || (d.h[Ve][b] = c);
      },
      a
    );
    U(
      gi,
      function (b, c) {
        var d = R(Dh);
        d.h[We][b] || (d.h[We][b] = c);
      },
      a
    );
    U(
      ji,
      function (b) {
        for (
          var c = R(Dh), d = t([Ue, Ve, We]), e = d.next();
          !e.done;
          e = d.next()
        )
          (e = e.value), q(Object, "assign").call(Object, c.h[e], b[e]);
      },
      a
    );
  }
  function ni(a) {
    a.hasOwnProperty("init-done") ||
      Object.defineProperty(a, "init-done", { value: !0 });
  }
  function oi(a) {
    a = void 0 === a ? w : a;
    return a.ggeac || (a.ggeac = {});
  }
  function pi() {
    this.l = function () {};
    this.j = function () {};
    this.i = function () {};
    this.h = function () {
      return [];
    };
  }
  function qi(a, b, c) {
    a.l = ki(Vh, b, function () {});
    a.i = function (d) {
      ki(Yh, b, function () {
        return [];
      })(d, c);
    };
    a.h = function () {
      return ki(Zh, b, function () {
        return [];
      })(c);
    };
    a.j = function (d) {
      ki(Wh, b, function () {})(d, c);
    };
  }
  function ri(a, b) {
    try {
      var c = a.split(".");
      a = w;
      for (var d = 0, e; null != a && d < c.length; d++)
        (e = a), (a = a[c[d]]), "function" === typeof a && (a = e[c[d]]());
      var f = a;
      if (typeof f === b) return f;
    } catch (g) {}
  }
  function si() {
    var a = {};
    this[Ue] =
      ((a[8] = function (b) {
        try {
          return null != wa(b);
        } catch (c) {}
      }),
      (a[9] = function (b) {
        try {
          var c = wa(b);
        } catch (d) {
          return;
        }
        if ((b = "function" === typeof c))
          (c = c && c.toString && c.toString()),
            (b = "string" === typeof c && -1 != c.indexOf("[native code]"));
        return b;
      }),
      (a[10] = function () {
        return window == window.top;
      }),
      (a[6] = function (b) {
        return Sa(R(pi).h(), parseInt(b, 10));
      }),
      (a[27] = function (b) {
        b = ri(b, "boolean");
        return void 0 !== b ? b : void 0;
      }),
      (a[60] = function (b) {
        try {
          return !!w.document.querySelector(b);
        } catch (c) {}
      }),
      a);
    a = {};
    this[Ve] =
      ((a[3] = function () {
        return Mc();
      }),
      (a[6] = function (b) {
        b = ri(b, "number");
        return void 0 !== b ? b : void 0;
      }),
      (a[11] = function (b) {
        b = void 0 === b ? "" : b;
        var c = w;
        b = void 0 === b ? "" : b;
        c = void 0 === c ? window : c;
        b = (c = (c = c.location.href.match(sc)[3] || null) ? decodeURI(c) : c)
          ? Ec(c + b)
          : null;
        return null == b ? void 0 : b % 1e3;
      }),
      a);
    a = {};
    this[We] =
      ((a[2] = function () {
        return window.location.href;
      }),
      (a[3] = function () {
        try {
          return window.top.location.hash;
        } catch (b) {
          return "";
        }
      }),
      (a[4] = function (b) {
        b = ri(b, "string");
        return void 0 !== b ? b : void 0;
      }),
      a);
  }
  var ti = [12, 13, 20];
  function ui() {}
  ui.prototype.init = function (a, b, c, d) {
    var e = this;
    d = void 0 === d ? {} : d;
    var f = void 0 === d.Ka ? !1 : d.Ka,
      g = void 0 === d.nb ? {} : d.nb;
    d = void 0 === d.qb ? [] : d.qb;
    this.l = a;
    this.v = {};
    this.D = f;
    this.m = g;
    a = {};
    this.h = ((a[b] = []), (a[4] = []), a);
    this.j = {};
    (b = Hd()) &&
      Ma(b.split(",") || [], function (h) {
        (h = parseInt(h, 10)) && (e.j[h] = !0);
      });
    Ma(d, function (h) {
      e.j[h] = !0;
    });
    this.i = c;
    return this;
  };
  function vi(a, b, c) {
    if (a.v[b])
      return (
        0.001 >= Math.random() && Vc({ b: c, dp: b }, "tagging_dupdiv"), !0
      );
    a.v[b] = !0;
    return !1;
  }
  function wi(a, b, c) {
    var d = [],
      e = xi(a.l, b);
    if ((9 !== b && vi(a, b, c)) || !e.length) {
      var f;
      null == (f = a.i) || Bh(f, b, c, d, []);
      return d;
    }
    var g = Sa(ti, b),
      h = [];
    Ma(e, function (l) {
      var m = new oh();
      if ((l = yi(a, l, c, m)))
        0 !== Bb(m, ph) && h.push(m),
          (m = l.getId()),
          d.push(m),
          zi(a, m, g ? 4 : c),
          (l = H(l, ue, 2)) && (g ? Rh(l, Th(), a.i, m) : Rh(l, [c], a.i, m));
    });
    var k;
    null == (k = a.i) || Bh(k, b, c, d, h);
    return d;
  }
  function zi(a, b, c) {
    a.h[c] || (a.h[c] = []);
    a = a.h[c];
    Sa(a, b)
      ? Vc({ eids: JSON.stringify(a), dup: b }, "gpt_dupeid")
      : a.push(b);
  }
  function Ai(a, b) {
    a.l.push.apply(
      a.l,
      la(
        Na(
          Oa(b, function (c) {
            return new De(c);
          }),
          function (c) {
            return !Sa(ti, c.aa());
          }
        )
      )
    );
  }
  function yi(a, b, c, d) {
    var e = R(Dh).h;
    if (!af(F(b, ne, 3), e)) return null;
    var f = H(b, xe, 2),
      g = f.length * D(b, 1, 0),
      h = D(b, 6, 0);
    if (h) {
      Ab(d, 1, ph, h);
      g = e[Ve];
      switch (c) {
        case 2:
          var k = g[8];
          break;
        case 1:
          k = g[7];
      }
      c = void 0;
      if (k)
        try {
          (c = k(h)), zb(d, 3, c);
        } catch (l) {}
      return (b = Bi(b, c)) ? Ci(a, [b], 1) : null;
    }
    if ((h = D(b, 10, 0))) {
      Ab(d, 2, ph, h);
      g = null;
      switch (c) {
        case 1:
          g = e[Ve][9];
          break;
        case 2:
          g = e[Ve][10];
          break;
        default:
          return null;
      }
      c = g ? g(String(h)) : void 0;
      if (void 0 === c && 1 === D(b, 11, 0)) return null;
      void 0 !== c && zb(d, 3, c);
      return (b = Bi(b, c)) ? Ci(a, [b], 1) : null;
    }
    d = e
      ? Na(f, function (l) {
          return af(F(l, ne, 3), e);
        })
      : f;
    return d.length
      ? (b = D(b, 4, 0))
        ? Di(a, b, g, d)
        : Ci(a, d, g / 1e3)
      : null;
  }
  function Di(a, b, c, d) {
    var e = null != a.m[b] ? a.m[b] : 1e3;
    if (0 >= e) return null;
    d = Ci(a, d, c / e);
    a.m[b] = d ? 0 : e - c;
    return d;
  }
  function Ci(a, b, c) {
    var d = a.j,
      e = Qa(b, function (f) {
        return !!d[f.getId()];
      });
    return e ? e : a.D ? null : zc(b, c);
  }
  function Ei(a, b) {
    U(
      Vh,
      function (c) {
        a.j[c] = !0;
      },
      b
    );
    U(
      Yh,
      function (c, d) {
        return wi(a, c, d);
      },
      b
    );
    U(
      Zh,
      function (c) {
        return (a.h[c] || []).concat(a.h[4]);
      },
      b
    );
    U(
      hi,
      function (c) {
        return Ai(a, c);
      },
      b
    );
    U(
      Wh,
      function (c, d) {
        return zi(a, c, d);
      },
      b
    );
  }
  function xi(a, b) {
    return (
      ((a = Qa(a, function (c) {
        return c.aa() == b;
      })) &&
        H(a, ze, 2)) ||
      []
    );
  }
  function Bi(a, b) {
    var c = H(a, xe, 2),
      d = c.length,
      e = D(a, 8, 0);
    a = d * D(a, 1, 0) - 1;
    b = void 0 !== b ? b : Math.floor(1e3 * Cc(window));
    d = (b - e) % d;
    if (b < e || b - e - d >= a) return null;
    c = c[d];
    e = R(Dh).h;
    return !c || (e && !af(F(c, ne, 3), e)) ? null : c;
  }
  function Fi() {
    this.h = function () {};
  }
  function Gi(a) {
    R(Fi).h(a);
  }
  var Hi, Ii, Ji, Ki, Li, Mi;
  function Ni(a, b, c, d) {
    var e = 1;
    d = void 0 === d ? oi() : d;
    e = void 0 === e ? 0 : e;
    var f =
      void 0 === f
        ? new Ah(
            null != (Ki = null == (Hi = F(a, Fe, 5)) ? void 0 : D(Hi, 2, 0))
              ? Ki
              : 0,
            null != (Li = null == (Ii = F(a, Fe, 5)) ? void 0 : D(Ii, 4, 0))
              ? Li
              : 0,
            null != (Mi = null == (Ji = F(a, Fe, 5)) ? void 0 : xb(Ji, 3))
              ? Mi
              : !1
          )
        : f;
    d.hasOwnProperty("init-done")
      ? (ki(
          hi,
          d
        )(
          Oa(H(a, De, 2), function (g) {
            return g.toJSON();
          })
        ),
        ki(ii, d)(
          Oa(H(a, ue, 1), function (g) {
            return g.toJSON();
          }),
          e
        ),
        b && ki(ji, d)(b),
        Oi(d, e))
      : (Ei(R(ui).init(H(a, De, 2), e, f, c), d),
        li(d),
        mi(d),
        ni(d),
        Oi(d, e),
        Rh(H(a, ue, 1), [e], f),
        (Eh = Eh || !(!c || !c.ib)),
        Gi(R(si)),
        b && Gi(b));
  }
  function Oi(a, b) {
    a = void 0 === a ? oi() : a;
    b = void 0 === b ? 0 : b;
    var c = a,
      d = b;
    d = void 0 === d ? 0 : d;
    qi(R(pi), c, d);
    Pi(a, b);
    R(Fi).h = ki(ji, a);
    R(Jg).m();
  }
  function Pi(a, b) {
    var c = R(Jg);
    c.i = function (d, e) {
      return ki(ai, a, function () {
        return !1;
      })(d, e, b);
    };
    c.j = function (d, e) {
      return ki(bi, a, function () {
        return 0;
      })(d, e, b);
    };
    c.l = function (d, e) {
      return ki(ci, a, function () {
        return "";
      })(d, e, b);
    };
    c.h = function (d, e) {
      return ki(di, a, function () {
        return [];
      })(d, e, b);
    };
    c.m = function () {
      ki(Xh, a)(b);
    };
  }
  function Qi(a, b, c) {
    var d = N(a);
    if (d.plle) Oi(oi(a), 1);
    else {
      d.plle = !0;
      try {
        var e = a.localStorage;
      } catch (f) {
        e = null;
      }
      d = e;
      null == Gc(d, "goog_pem_mod") && Hc(a, d, "goog_pem_mod");
      d = F(b, Be, 12);
      e = xb(b, 9);
      Ni(
        d,
        Yg(c, b),
        { Ka: e && !!a.google_disable_experiments, ib: e },
        oi(a)
      );
      if ((c = I(b, 15))) (c = Number(c)), R(pi).l(c);
      if ((b = I(b, 10))) (b = Number(b)), R(pi).j(b);
      R(pi).i(12);
      R(pi).i(10);
      a = kd(a) || a;
      Ne(a.location, "google_mc_lab") && R(pi).j(44738307);
    }
  }
  function Ri(a) {
    Vd.sa(function (b) {
      b.shv = String(a);
      b.mjsv = "m202110050101";
      var c = R(pi).h();
      var d = N(w);
      d.eids || (d.eids = []);
      (c = c.concat(d.eids).join(",")) &&
        (b.eid = 50 < c.length ? c.substring(0, 50) + "T" : c);
    });
  }
  function Si() {
    this.i = new Ti(this);
    this.h = 0;
  }
  Si.prototype.resolve = function (a) {
    Ui(this);
    this.h = 1;
    this.l = a;
    Vi(this.i);
  };
  Si.prototype.reject = function (a) {
    Ui(this);
    this.h = 2;
    this.j = a;
    Vi(this.i);
  };
  function Ui(a) {
    if (0 != a.h) throw Error("Already resolved/rejected.");
  }
  function Ti(a) {
    this.h = a;
  }
  Ti.prototype.then = function (a, b) {
    if (this.i) throw Error("Then functions already set.");
    this.i = a;
    this.j = b;
    Vi(this);
  };
  function Vi(a) {
    switch (a.h.h) {
      case 0:
        break;
      case 1:
        a.i && a.i(a.h.l);
        break;
      case 2:
        a.j && a.j(a.h.j);
        break;
      default:
        throw Error("Unhandled deferred state.");
    }
  }
  function Wi(a) {
    this.h = a.slice(0);
  }
  Wi.prototype.apply = function (a) {
    return new Wi(a(this.h.slice(0)));
  };
  Wi.prototype.get = function (a) {
    return this.h[a];
  };
  Wi.prototype.add = function (a) {
    var b = this.h.slice(0);
    b.push(a);
    return new Wi(b);
  };
  function Xi(a, b) {
    for (var c = [], d = a.length, e = 0; e < d; e++) c.push(a[e]);
    c.forEach(b, void 0);
  }
  function Yi() {
    this.h = {};
    this.i = {};
  }
  Yi.prototype.set = function (a, b) {
    var c = Zi(a);
    this.h[c] = b;
    this.i[c] = a;
  };
  Yi.prototype.get = function (a, b) {
    a = Zi(a);
    return void 0 !== this.h[a] ? this.h[a] : b;
  };
  Yi.prototype.clear = function () {
    this.h = {};
    this.i = {};
  };
  function Zi(a) {
    return a instanceof Object ? String(ya(a)) : a + "";
  }
  function $i(a) {
    this.h = new Yi();
    if (a) for (var b = 0; b < a.length; ++b) this.add(a[b]);
  }
  $i.prototype.add = function (a) {
    this.h.set(a, !0);
  };
  $i.prototype.contains = function (a) {
    return void 0 !== this.h.h[Zi(a)];
  };
  function aj() {
    this.h = new Yi();
  }
  aj.prototype.set = function (a, b) {
    var c = this.h.get(a);
    c || ((c = new $i()), this.h.set(a, c));
    c.add(b);
  };
  function bj(a) {
    var b = void 0 === a.Ga ? void 0 : a.Ga,
      c = void 0 === a.hb ? void 0 : a.hb,
      d = void 0 === a.Qa ? void 0 : a.Qa;
    this.h = void 0 === a.ab ? void 0 : a.ab;
    this.l = new Wi(b || []);
    this.j = d;
    this.i = c;
  }
  function cj(a) {
    var b = [],
      c = a.l;
    c && c.h.length && b.push({ U: "a", $: dj(c) });
    null != a.h && b.push({ U: "as", $: a.h });
    null != a.i && b.push({ U: "i", $: String(a.i) });
    null != a.j && b.push({ U: "rp", $: String(a.j) });
    b.sort(function (d, e) {
      return d.U.localeCompare(e.U);
    });
    b.unshift({ U: "t", $: "aa" });
    return b;
  }
  function dj(a) {
    a = a.h.slice(0).map(ej);
    a = JSON.stringify(a);
    return Ec(a);
  }
  function ej(a) {
    var b = {};
    null != B(a, 7) && (b.q = B(a, 7));
    null != B(a, 2) && (b.o = B(a, 2));
    null != B(a, 5) && (b.p = B(a, 5));
    return b;
  }
  function fj(a, b) {
    this.Ia = a;
    this.Pa = b;
  }
  function gj(a) {
    var b = [].slice.call(arguments).filter(
      ic(function (e) {
        return null === e;
      })
    );
    if (!b.length) return null;
    var c = [],
      d = {};
    b.forEach(function (e) {
      c = c.concat(e.Ia || []);
      d = q(Object, "assign").call(Object, d, e.Pa);
    });
    return new fj(c, d);
  }
  function hj(a) {
    switch (a) {
      case 1:
        return new fj(null, { google_ad_semantic_area: "mc" });
      case 2:
        return new fj(null, { google_ad_semantic_area: "h" });
      case 3:
        return new fj(null, { google_ad_semantic_area: "f" });
      case 4:
        return new fj(null, { google_ad_semantic_area: "s" });
      default:
        return null;
    }
  }
  function ij(a) {
    if (null == a) a = null;
    else {
      var b = cj(a);
      a = [];
      b = t(b);
      for (var c = b.next(); !c.done; c = b.next()) {
        c = c.value;
        var d = String(c.$);
        a.push(c.U + "." + (20 >= d.length ? d : d.slice(0, 19) + "_"));
      }
      a = new fj(null, { google_placement_id: a.join("~") });
    }
    return a;
  }
  var jj = {},
    kj = new fj(
      ["google-auto-placed"],
      ((jj.google_reactive_ad_format = 40), (jj.google_tag_origin = "qs"), jj)
    );
  function lj(a) {
    z.call(this, a);
  }
  v(lj, z);
  lj.prototype.getName = function () {
    return B(this, 4);
  };
  function mj(a) {
    z.call(this, a);
  }
  v(mj, z);
  function nj(a) {
    z.call(this, a);
  }
  v(nj, z);
  function oj(a) {
    z.call(this, a);
  }
  v(oj, z);
  var pj = [1, 2, 3];
  function qj(a) {
    z.call(this, a, -1, rj);
  }
  v(qj, z);
  function sj(a) {
    z.call(this, a);
  }
  v(sj, z);
  function tj(a) {
    z.call(this, a);
  }
  v(tj, z);
  var rj = [1],
    uj = [1, 2];
  function vj(a) {
    z.call(this, a, -1, wj);
  }
  v(vj, z);
  function xj(a) {
    z.call(this, a);
  }
  v(xj, z);
  function yj(a) {
    z.call(this, a, -1, zj);
  }
  v(yj, z);
  function Aj(a) {
    z.call(this, a);
  }
  v(Aj, z);
  function Bj(a) {
    z.call(this, a);
  }
  v(Bj, z);
  function Cj(a) {
    z.call(this, a);
  }
  v(Cj, z);
  function Dj(a) {
    z.call(this, a);
  }
  v(Dj, z);
  var wj = [1, 2, 5, 7],
    zj = [2, 5, 6, 11];
  function Ej(a) {
    z.call(this, a);
  }
  v(Ej, z);
  function Fj(a) {
    if (1 != a.nodeType) var b = !1;
    else if ((b = "INS" == a.tagName))
      a: {
        b = ["adsbygoogle-placeholder"];
        a = a.className ? a.className.split(/\s+/) : [];
        for (var c = {}, d = 0; d < a.length; ++d) c[a[d]] = !0;
        for (d = 0; d < b.length; ++d)
          if (!c[b[d]]) {
            b = !1;
            break a;
          }
        b = !0;
      }
    return b;
  }
  function Gj(a, b, c) {
    switch (c) {
      case 0:
        b.parentNode && b.parentNode.insertBefore(a, b);
        break;
      case 3:
        if ((c = b.parentNode)) {
          var d = b.nextSibling;
          if (d && d.parentNode != c)
            for (; d && 8 == d.nodeType; ) d = d.nextSibling;
          c.insertBefore(a, d);
        }
        break;
      case 1:
        b.insertBefore(a, b.firstChild);
        break;
      case 2:
        b.appendChild(a);
    }
    Fj(b) &&
      (b.setAttribute("data-init-display", b.style.display),
      (b.style.display = "block"));
  }
  function Hj(a, b, c) {
    function d(f) {
      f = Ij(f);
      return null == f ? !1 : c > f;
    }
    function e(f) {
      f = Ij(f);
      return null == f ? !1 : c < f;
    }
    switch (b) {
      case 0:
        return {
          init: Jj(a.previousSibling, e),
          ha: function (f) {
            return Jj(f.previousSibling, e);
          },
          la: 0,
        };
      case 2:
        return {
          init: Jj(a.lastChild, e),
          ha: function (f) {
            return Jj(f.previousSibling, e);
          },
          la: 0,
        };
      case 3:
        return {
          init: Jj(a.nextSibling, d),
          ha: function (f) {
            return Jj(f.nextSibling, d);
          },
          la: 3,
        };
      case 1:
        return {
          init: Jj(a.firstChild, d),
          ha: function (f) {
            return Jj(f.nextSibling, d);
          },
          la: 3,
        };
    }
    throw Error("Un-handled RelativePosition: " + b);
  }
  function Ij(a) {
    return a.hasOwnProperty("google-ama-order-assurance")
      ? a["google-ama-order-assurance"]
      : null;
  }
  function Jj(a, b) {
    return a && b(a) ? a : null;
  }
  var Kj = { rectangle: 1, horizontal: 2, vertical: 4 };
  function Lj(a, b) {
    do {
      var c = wc(a, b);
      if (c && "fixed" == c.position) return !1;
    } while ((a = a.parentElement));
    return !0;
  }
  function Mj(a, b) {
    for (var c = ["width", "height"], d = 0; d < c.length; d++) {
      var e = "google_ad_" + c[d];
      if (!b.hasOwnProperty(e)) {
        var f = J(a[c[d]]);
        f = null === f ? null : Math.round(f);
        null != f && (b[e] = f);
      }
    }
  }
  function Nj(a, b) {
    return !(
      (Jc.test(b.google_ad_width) || Ic.test(a.style.width)) &&
      (Jc.test(b.google_ad_height) || Ic.test(a.style.height))
    );
  }
  function Oj(a, b) {
    return (a = Pj(a, b)) ? a.y : 0;
  }
  function Pj(a, b) {
    try {
      var c = b.document.documentElement.getBoundingClientRect(),
        d = a.getBoundingClientRect();
      return { x: d.left - c.left, y: d.top - c.top };
    } catch (e) {
      return null;
    }
  }
  function Qj(a) {
    var b = 0,
      c;
    for (c in Kj) -1 != a.indexOf(c) && (b |= Kj[c]);
    return b;
  }
  function Rj(a, b, c, d, e) {
    if (a.top != a) return kd(a) ? 3 : 16;
    if (!(488 > L(a))) return 4;
    if (!(a.innerHeight >= a.innerWidth)) return 5;
    var f = L(a);
    if (!f || (f - c) / f > d) a = 6;
    else {
      if ((c = "true" != e.google_full_width_responsive))
        a: {
          c = L(a);
          for (b = b.parentElement; b; b = b.parentElement)
            if (
              (d = wc(b, a)) &&
              (e = J(d.width)) &&
              !(e >= c) &&
              "visible" != d.overflow
            ) {
              c = !0;
              break a;
            }
          c = !1;
        }
      a = c ? 7 : !0;
    }
    return a;
  }
  function Sj(a, b, c, d) {
    var e = Rj(b, c, a, 0.3, d);
    !0 !== e
      ? (a = e)
      : "true" == d.google_full_width_responsive || Lj(c, b)
      ? ((b = L(b)),
        (a = b - a),
        (a = b && 0 <= a ? !0 : b ? (-10 > a ? 11 : 0 > a ? 14 : 12) : 10))
      : (a = 9);
    return a;
  }
  function Tj(a, b, c) {
    a = a.style;
    "rtl" == b
      ? S(ng)
        ? a.setProperty("margin-right", c, "important")
        : (a.marginRight = c)
      : S(ng)
      ? a.setProperty("margin-left", c, "important")
      : (a.marginLeft = c);
  }
  function Uj(a, b) {
    if (3 == b.nodeType) return /\S/.test(b.data);
    if (1 == b.nodeType) {
      if (/^(script|style)$/i.test(b.nodeName)) return !1;
      try {
        var c = wc(b, a);
      } catch (d) {}
      return (
        !c ||
        ("none" != c.display &&
          !(
            "absolute" == c.position &&
            ("hidden" == c.visibility || "collapse" == c.visibility)
          ))
      );
    }
    return !1;
  }
  function Vj(a, b, c) {
    a = Pj(b, a);
    return "rtl" == c ? -a.x : a.x;
  }
  function Wj(a, b) {
    var c;
    c = (c = b.parentElement) ? ((c = wc(c, a)) ? c.direction : "") : "";
    if (c) {
      b.style.border =
        b.style.borderStyle =
        b.style.outline =
        b.style.outlineStyle =
        b.style.transition =
          "none";
      b.style.borderSpacing = b.style.padding = "0";
      Tj(b, c, "0px");
      b.style.width = L(a) + "px";
      if (0 !== Vj(a, b, c)) {
        Tj(b, c, "0px");
        var d = Vj(a, b, c);
        Tj(b, c, -1 * d + "px");
        a = Vj(a, b, c);
        0 !== a && a !== d && Tj(b, c, (d / (a - d)) * d + "px");
      }
      b.style.zIndex = 30;
    }
  }
  function V(a, b) {
    this.l = a;
    this.j = b;
  }
  V.prototype.minWidth = function () {
    return this.l;
  };
  V.prototype.height = function () {
    return this.j;
  };
  V.prototype.h = function (a) {
    return 300 < a && 300 < this.j ? this.l : Math.min(1200, Math.round(a));
  };
  V.prototype.i = function () {};
  function Xj(a, b, c, d) {
    d =
      void 0 === d
        ? function (f) {
            return f;
          }
        : d;
    var e;
    return (
      (a.style && a.style[c] && d(a.style[c])) ||
      ((e = wc(a, b)) && e[c] && d(e[c])) ||
      null
    );
  }
  function Yj(a) {
    return function (b) {
      return b.minWidth() <= a;
    };
  }
  function Zj(a, b, c, d) {
    var e = a && ak(c, b),
      f = bk(b, d);
    return function (g) {
      return !(e && g.height() >= f);
    };
  }
  function ck(a) {
    return function (b) {
      return b.height() <= a;
    };
  }
  function ak(a, b) {
    return Oj(a, b) < Ad(b).clientHeight - 100;
  }
  function dk(a, b) {
    var c = Xj(b, a, "height", J);
    if (c) return c;
    var d = b.style.height;
    b.style.height = "inherit";
    c = Xj(b, a, "height", J);
    b.style.height = d;
    if (c) return c;
    c = Infinity;
    do
      (d = b.style && J(b.style.height)) && (c = Math.min(c, d)),
        (d = Xj(b, a, "maxHeight", J)) && (c = Math.min(c, d));
    while ((b = b.parentElement) && "HTML" != b.tagName);
    return c;
  }
  function bk(a, b) {
    var c = 0 == ed(a);
    return b && c ? Math.max(250, (2 * Ad(a).clientHeight) / 3) : 250;
  }
  function ek(a, b) {
    for (var c = 0; c < b.length; c++) {
      var d = b[c],
        e = nc(d.Db);
      a[e] = d.value;
    }
  }
  function fk(a, b, c, d) {
    this.l = a;
    this.i = b;
    this.j = c;
    this.h = d;
  }
  function gk(a, b) {
    var c = [];
    try {
      c = b.querySelectorAll(a.l);
    } catch (g) {}
    if (!c.length) return [];
    b = c;
    c = b.length;
    if (0 < c) {
      for (var d = Array(c), e = 0; e < c; e++) d[e] = b[e];
      b = d;
    } else b = [];
    b = hk(a, b);
    "number" === typeof a.i &&
      ((c = a.i),
      0 > c && (c += b.length),
      (b = 0 <= c && c < b.length ? [b[c]] : []));
    if ("number" === typeof a.j) {
      c = [];
      for (d = 0; d < b.length; d++) {
        e = ik(b[d]);
        var f = a.j;
        0 > f && (f += e.length);
        0 <= f && f < e.length && c.push(e[f]);
      }
      b = c;
    }
    return b;
  }
  fk.prototype.toString = function () {
    return JSON.stringify({
      nativeQuery: this.l,
      occurrenceIndex: this.i,
      paragraphIndex: this.j,
      ignoreMode: this.h,
    });
  };
  function hk(a, b) {
    if (null == a.h) return b;
    switch (a.h) {
      case 1:
        return b.slice(1);
      case 2:
        return b.slice(0, b.length - 1);
      case 3:
        return b.slice(1, b.length - 1);
      case 0:
        return b;
      default:
        throw Error("Unknown ignore mode: " + a.h);
    }
  }
  function ik(a) {
    var b = [];
    Xi(a.getElementsByTagName("p"), function (c) {
      100 <= jk(c) && b.push(c);
    });
    return b;
  }
  function jk(a) {
    if (3 == a.nodeType) return a.length;
    if (1 != a.nodeType || "SCRIPT" == a.tagName) return 0;
    var b = 0;
    Xi(a.childNodes, function (c) {
      b += jk(c);
    });
    return b;
  }
  function kk(a) {
    return 0 == a.length || isNaN(a[0])
      ? a
      : "\\" + (30 + parseInt(a[0], 10)) + " " + a.substring(1);
  }
  function lk(a) {
    if (!a) return null;
    var b = B(a, 7);
    if (B(a, 1) || a.getId() || 0 < vb(a, 4).length) {
      var c = a.getId();
      b = vb(a, 4);
      var d = B(a, 1),
        e = "";
      d && (e += d);
      c && (e += "#" + kk(c));
      if (b) for (c = 0; c < b.length; c++) e += "." + kk(b[c]);
      a = (b = e) ? new fk(b, B(a, 2), B(a, 5), mk(B(a, 6))) : null;
    } else a = b ? new fk(b, B(a, 2), B(a, 5), mk(B(a, 6))) : null;
    return a;
  }
  var nk = { 1: 1, 2: 2, 3: 3, 0: 0 };
  function mk(a) {
    return null == a ? a : nk[a];
  }
  var ok = { 1: 0, 2: 1, 3: 2, 4: 3 };
  function pk(a) {
    return (a.google_ama_state = a.google_ama_state || {});
  }
  function qk(a) {
    a = pk(a);
    return (a.optimization = a.optimization || {});
  }
  function rk(a) {
    switch (B(a, 8)) {
      case 1:
      case 2:
        if (null == a) var b = null;
        else
          (b = F(a, de, 1)),
            null == b
              ? (b = null)
              : ((a = B(a, 2)),
                (b = null == a ? null : new bj({ Ga: [b], Qa: a })));
        return null != b
          ? ef(b)
          : gf(Error("Missing dimension when creating placement id"));
      case 3:
        return gf(Error("Missing dimension when creating placement id"));
      default:
        return gf(Error("Invalid type: " + B(a, 8)));
    }
  }
  function sk(a, b) {
    function c() {
      d.push({ anchor: e.anchor, position: e.position });
      return e.anchor == b.anchor && e.position == b.position;
    }
    for (var d = [], e = a; e; ) {
      switch (e.position) {
        case 1:
          if (c()) return d;
          e.position = 2;
        case 2:
          if (c()) return d;
          if (e.anchor.firstChild) {
            e = { anchor: e.anchor.firstChild, position: 1 };
            continue;
          } else e.position = 3;
        case 3:
          if (c()) return d;
          e.position = 4;
        case 4:
          if (c()) return d;
      }
      for (
        ;
        e &&
        !e.anchor.nextSibling &&
        e.anchor.parentNode != e.anchor.ownerDocument.body;

      ) {
        e = { anchor: e.anchor.parentNode, position: 3 };
        if (c()) return d;
        e.position = 4;
        if (c()) return d;
      }
      e && e.anchor.nextSibling
        ? (e = { anchor: e.anchor.nextSibling, position: 1 })
        : (e = null);
    }
    return d;
  }
  function tk(a, b) {
    this.i = a;
    this.h = b;
  }
  function uk(a, b) {
    var c = new aj(),
      d = new $i();
    b.forEach(function (e) {
      if (Kb(e, mj, 1, pj)) {
        e = Kb(e, mj, 1, pj);
        if (
          F(e, fe, 1) &&
          F(F(e, fe, 1), de, 1) &&
          F(e, fe, 2) &&
          F(F(e, fe, 2), de, 1)
        ) {
          var f = vk(a, F(F(e, fe, 1), de, 1)),
            g = vk(a, F(F(e, fe, 2), de, 1));
          if (f && g)
            for (
              f = t(
                sk(
                  { anchor: f, position: B(F(e, fe, 1), 2) },
                  { anchor: g, position: B(F(e, fe, 2), 2) }
                )
              ),
                g = f.next();
              !g.done;
              g = f.next()
            )
              (g = g.value), c.set(ya(g.anchor), g.position);
        }
        F(e, fe, 3) &&
          F(F(e, fe, 3), de, 1) &&
          (f = vk(a, F(F(e, fe, 3), de, 1))) &&
          c.set(ya(f), B(F(e, fe, 3), 2));
      } else Kb(e, nj, 2, pj) ? wk(a, Kb(e, nj, 2, pj), c) : Kb(e, oj, 3, pj) && xk(a, Kb(e, oj, 3, pj), d);
    });
    return new tk(c, d);
  }
  function wk(a, b, c) {
    F(b, de, 1) &&
      (a = yk(a, F(b, de, 1))) &&
      a.forEach(function (d) {
        d = ya(d);
        c.set(d, 1);
        c.set(d, 4);
        c.set(d, 2);
        c.set(d, 3);
      });
  }
  function xk(a, b, c) {
    F(b, de, 1) &&
      (a = yk(a, F(b, de, 1))) &&
      a.forEach(function (d) {
        c.add(ya(d));
      });
  }
  function vk(a, b) {
    return (a = yk(a, b)) && 0 < a.length ? a[0] : null;
  }
  function yk(a, b) {
    return (b = lk(b)) ? gk(b, a) : null;
  }
  function zk(a, b) {
    if (!a) return !1;
    a = wc(a, b);
    if (!a) return !1;
    a = a.cssFloat || a.styleFloat;
    return "left" == a || "right" == a;
  }
  function Ak(a) {
    for (a = a.previousSibling; a && 1 != a.nodeType; ) a = a.previousSibling;
    return a ? a : null;
  }
  function Bk(a) {
    return !!a.nextSibling || (!!a.parentNode && Bk(a.parentNode));
  }
  function Ck(a) {
    var b = {};
    a &&
      vb(a, 6).forEach(function (c) {
        b[c] = !0;
      });
    return b;
  }
  function Dk(a, b, c, d, e) {
    this.h = a;
    this.A = b;
    this.j = c;
    this.m = e || null;
    this.v = (this.D = d) ? uk(a.document, H(d, lj, 5)) : uk(a.document, []);
    this.i = 0;
    this.l = !1;
  }
  function Ek(a, b) {
    if (a.l) return !0;
    a.l = !0;
    var c = H(a.j, ie, 1);
    a.i = 0;
    var d = Ck(a.D);
    try {
      var e = a.h.localStorage.getItem("google_ama_settings");
      var f = e ? sb(Ej, e ? JSON.parse(e) : null) : null;
    } catch (m) {
      f = null;
    }
    if (null !== f && xb(f, 2, !1))
      return (pk(a.h).eatf = !0), nd(7, [!0, 0, !1]), !0;
    f = new $i([2]);
    for (e = 0; e < c.length; e++) {
      var g = a;
      var h = c[e],
        k = e,
        l = b;
      if (
        !F(h, he, 4) ||
        !f.contains(B(F(h, he, 4), 1)) ||
        1 !== B(h, 8) ||
        (h && null != B(h, 4) && d[B(F(h, he, 4), 2)])
      )
        g = null;
      else {
        g.i++;
        if ((h = Fk(g, h, l, d)))
          (l = pk(g.h)),
            l.numAutoAdsPlaced || (l.numAutoAdsPlaced = 0),
            null == l.placed && (l.placed = []),
            l.numAutoAdsPlaced++,
            l.placed.push({ index: k, element: h.fa }),
            nd(7, [!1, g.i, !0]);
        g = h;
      }
      if (g) return !0;
    }
    nd(7, [!1, a.i, !1]);
    return !1;
  }
  function Fk(a, b, c, d) {
    if ((b && null != B(b, 4) && d[B(F(b, he, 4), 2)]) || 1 != B(b, 8))
      return null;
    d = F(b, de, 1);
    if (!d) return null;
    d = lk(d);
    if (!d) return null;
    d = gk(d, a.h.document);
    if (0 == d.length) return null;
    d = d[0];
    var e = ok[B(b, 2)];
    e = void 0 === e ? null : e;
    var f;
    if (!(f = null == e)) {
      a: {
        f = a.h;
        switch (e) {
          case 0:
            f = zk(Ak(d), f);
            break a;
          case 3:
            f = zk(d, f);
            break a;
          case 2:
            var g = d.lastChild;
            f = zk(g ? (1 == g.nodeType ? g : Ak(g)) : null, f);
            break a;
        }
        f = !1;
      }
      if ((c = !f && !(!c && 2 == e && !Bk(d))))
        (c = 1 == e || 2 == e ? d : d.parentNode),
          (c = !(c && !Fj(c) && 0 >= c.offsetWidth));
      f = !c;
    }
    if (!(c = f)) {
      c = a.v;
      f = B(b, 2);
      g = ya(d);
      g = c.i.h.get(g);
      if (!(g = g ? g.contains(f) : !1))
        a: {
          if (c.h.contains(ya(d)))
            switch (f) {
              case 2:
              case 3:
                g = !0;
                break a;
              default:
                g = !1;
                break a;
            }
          for (f = d.parentElement; f; ) {
            if (c.h.contains(ya(f))) {
              g = !0;
              break a;
            }
            f = f.parentElement;
          }
          g = !1;
        }
      c = g;
    }
    if (c) return null;
    c = F(b, ge, 3);
    f = {};
    c && ((f.Wa = B(c, 1)), (f.Ha = B(c, 2)), (f.cb = !!wb(c, 3)));
    c = F(b, he, 4) && B(F(b, he, 4), 2) ? B(F(b, he, 4), 2) : null;
    c = hj(c);
    g = null == B(b, 12) ? null : B(b, 12);
    g = null == g ? null : new fj(null, { google_ml_rank: g });
    b = Gk(a, b);
    b = gj(a.m, c, g, b);
    c = a.h;
    a = a.A;
    var h = c.document,
      k = f.cb || !1;
    g = oc(new pc(h).h, "DIV");
    var l = g.style;
    l.width = "100%";
    l.height = "auto";
    l.clear = k ? "both" : "none";
    k = g.style;
    k.textAlign = "center";
    f.ob && ek(k, f.ob);
    h = oc(new pc(h).h, "INS");
    k = h.style;
    k.display = "block";
    k.margin = "auto";
    k.backgroundColor = "transparent";
    f.Wa && (k.marginTop = f.Wa);
    f.Ha && (k.marginBottom = f.Ha);
    f.$a && ek(k, f.$a);
    g.appendChild(h);
    f = { qa: g, fa: h };
    f.fa.setAttribute("data-ad-format", "auto");
    g = [];
    if ((h = b && b.Ia)) f.qa.className = h.join(" ");
    h = f.fa;
    h.className = "adsbygoogle";
    h.setAttribute("data-ad-client", a);
    g.length && h.setAttribute("data-ad-channel", g.join("+"));
    a: {
      try {
        var m = f.qa;
        var r = void 0 === r ? 0 : r;
        if (S(Vf)) {
          r = void 0 === r ? 0 : r;
          var u = Hj(d, e, r);
          if (u.init) {
            var x = u.init;
            for (d = x; (d = u.ha(d)); ) x = d;
            var E = { anchor: x, position: u.la };
          } else E = { anchor: d, position: e };
          m["google-ama-order-assurance"] = r;
          Gj(m, E.anchor, E.position);
        } else Gj(m, d, e);
        b: {
          var A = f.fa;
          A.setAttribute("data-adsbygoogle-status", "reserved");
          A.className += " adsbygoogle-noablate";
          m = { element: A };
          var G = b && b.Pa;
          if (A.hasAttribute("data-pub-vars")) {
            try {
              G = JSON.parse(A.getAttribute("data-pub-vars"));
            } catch (sa) {
              break b;
            }
            A.removeAttribute("data-pub-vars");
          }
          G && (m.params = G);
          (c.adsbygoogle = c.adsbygoogle || []).push(m);
        }
      } catch (sa) {
        (A = f.qa) &&
          A.parentNode &&
          ((G = A.parentNode),
          G.removeChild(A),
          Fj(G) &&
            (G.style.display = G.getAttribute("data-init-display") || "none"));
        A = !1;
        break a;
      }
      A = !0;
    }
    return A ? f : null;
  }
  function Gk(a, b) {
    return cf(
      ff(rk(b).map(ij), function (c) {
        pk(a.h).exception = c;
      })
    );
  }
  function Hk(a) {
    if (S(Uf)) var b = null;
    else
      try {
        b = a.getItem("google_ama_config");
      } catch (d) {
        b = null;
      }
    try {
      var c = b ? sb(vj, b ? JSON.parse(b) : null) : null;
    } catch (d) {
      c = null;
    }
    return c;
  }
  function Ik(a) {
    this.exception = a;
  }
  function Jk(a, b, c) {
    this.j = a;
    this.h = b;
    this.i = c;
  }
  Jk.prototype.start = function () {
    this.l();
  };
  Jk.prototype.l = function () {
    try {
      switch (this.j.document.readyState) {
        case "complete":
        case "interactive":
          Ek(this.h, !0);
          Kk(this);
          break;
        default:
          Ek(this.h, !1) ? Kk(this) : this.j.setTimeout(Da(this.l, this), 100);
      }
    } catch (a) {
      Kk(this, a);
    }
  };
  function Kk(a, b) {
    try {
      var c = a.i,
        d = c.resolve,
        e = a.h;
      pk(e.h);
      H(e.j, ie, 1);
      d.call(c, new Ik(b));
    } catch (f) {
      a.i.reject(f);
    }
  }
  function Lk(a) {
    z.call(this, a, -1, Mk);
  }
  v(Lk, z);
  var Mk = [6];
  function Nk(a) {
    z.call(this, a);
  }
  v(Nk, z);
  function Ok(a) {
    z.call(this, a);
  }
  v(Ok, z);
  function Pk(a) {
    z.call(this, a);
  }
  v(Pk, z);
  function Qk(a) {
    a = new sf(a).get("FCCDCF", "");
    try {
      return a ? sb(Nk, a ? JSON.parse(a) : null) : null;
    } catch (b) {
      return null;
    }
  }
  function Rk(a) {
    function b() {
      if (!a.frames.__uspapiLocator)
        if (c.body) {
          var e = oc(d.h, "IFRAME");
          e.style.display = "none";
          e.style.width = "0px";
          e.style.height = "0px";
          e.style.border = "none";
          e.style.zIndex = "-1000";
          e.style.left = "-1000px";
          e.style.top = "-1000px";
          e.name = "__uspapiLocator";
          c.body.appendChild(e);
        } else a.setTimeout(b, 5);
    }
    var c = a.document,
      d = a
        ? new pc(9 == a.nodeType ? a : a.ownerDocument || a.document)
        : Ia || (Ia = new pc());
    b();
  }
  function Sk(a) {
    this.h = a;
    this.i = a.document;
    this.j = (a = (a = Qk(this.i)) ? F(a, Pk, 5) || null : null)
      ? B(a, 2)
      : null;
    (a = Qk(this.i)) && F(a, Ok, 4);
    (a = Qk(this.i)) && F(a, Ok, 4);
  }
  function Tk() {
    var a = window;
    a.__uspapi || a.frames.__uspapiLocator || ((a = new Sk(a)), Uk(a));
  }
  function Uk(a) {
    !a.j ||
      a.h.__uspapi ||
      a.h.frames.__uspapiLocator ||
      ((a.h.__uspapiManager = "fc"),
      Rk(a.h),
      Fa(function (b) {
        for (var c = [], d = 0; d < arguments.length; ++d) c[d] = arguments[d];
        return a.l.apply(a, la(c));
      }));
  }
  Sk.prototype.l = function (a, b, c) {
    "function" === typeof c &&
      "getUSPData" === a &&
      c({ version: 1, uspString: this.j }, !0);
  };
  function Vk(a) {
    var b = /[a-zA-Z0-9._~-]/,
      c = /%[89a-zA-Z]./;
    return a.replace(/(%[a-zA-Z0-9]{2})/g, function (d) {
      if (!d.match(c)) {
        var e = decodeURIComponent(d);
        if (e.match(b)) return e;
      }
      return d.toUpperCase();
    });
  }
  function Wk(a) {
    for (var b = "", c = /[/%?&=]/, d = 0; d < a.length; ++d) {
      var e = a[d];
      b = e.match(c) ? b + e : b + encodeURIComponent(e);
    }
    return b;
  }
  function Xk(a, b) {
    a = Wk(Vk(a.location.pathname)).replace(/(^\/)|(\/$)/g, "");
    var c = Ec(a),
      d = Yk(a);
    return (
      q(b, "find").call(b, function (e) {
        var f = null != B(e, 7) ? B(F(e, Aj, 7), 1) : B(e, 1);
        e = null != B(e, 7) ? B(F(e, Aj, 7), 2) : 2;
        if ("number" !== typeof f) return !1;
        switch (e) {
          case 1:
            return f == c;
          case 2:
            return d[f] || !1;
        }
        return !1;
      }) || null
    );
  }
  function Yk(a) {
    for (var b = {}; ; ) {
      b[Ec(a)] = !0;
      if (!a) return b;
      a = a.substring(0, a.lastIndexOf("/"));
    }
  }
  var Zk = {},
    $k = ((Zk.google_ad_channel = !0), (Zk.google_ad_host = !0), Zk);
  function al(a, b) {
    a.location.href &&
      a.location.href.substring &&
      (b.url = a.location.href.substring(0, 200));
    ae("ama", b, 0.01);
  }
  function bl(a) {
    var b = {};
    Dc($k, function (c, d) {
      d in a && (b[d] = a[d]);
    });
    return b;
  }
  function cl(a) {
    a = F(a, xj, 3);
    return !a || B(a, 1) <= Date.now() ? !1 : !0;
  }
  function dl(a) {
    return (a = Hk(a)) ? (cl(a) ? a : null) : null;
  }
  function el(a, b) {
    try {
      b.removeItem("google_ama_config");
    } catch (c) {
      al(a, { lserr: 1 });
    }
  }
  function fl(a) {
    al(a, { atf: 1 });
  }
  function gl(a, b) {
    (a.google_ama_state = a.google_ama_state || {}).exception = b;
    al(a, { atf: 0 });
  }
  function hl() {
    var a = this;
    this.promise = new p.Promise(function (b, c) {
      a.resolve = b;
      a.reject = c;
    });
  }
  function il() {
    var a = new hl();
    this.promise = a.promise;
    this.resolve = a.resolve;
  }
  function jl(a) {
    w.google_llp || (w.google_llp = {});
    var b = w.google_llp;
    b[7] || ((b[7] = new il()), a && a());
    return b[7];
  }
  function kl(a) {
    return jl(function () {
      vc(w.document, a);
    }).promise;
  }
  function ll(a) {
    var b = {};
    return { enable_page_level_ads: ((b.pltais = !0), b), google_ad_client: a };
  }
  function ml(a) {
    if (S($f)) return !1;
    var b = Pg(w, 12, a.google_ad_client);
    a = "google_ad_host" in a;
    var c = 0.5 > Math.random(),
      d = Ne(w.location, "google_ads_preview");
    return (b && !a && c) || d;
  }
  function nl(a) {
    if (w.google_apltlad || w.top != w || !a.google_ad_client) return null;
    var b = ml(a);
    w.google_apltlad = !0;
    var c = ll(a.google_ad_client),
      d = c.enable_page_level_ads;
    Dc(a, function (e, f) {
      Me[f] && "google_ad_client" !== f && (d[f] = e);
    });
    if (b) d.google_ad_channel = "AutoInsertAutoAdCode";
    else if (
      ((d.google_pgb_reactive = 7),
      "google_ad_section" in a || "google_ad_region" in a)
    )
      d.google_ad_section = a.google_ad_section || a.google_ad_region;
    return c;
  }
  function ol(a) {
    return (
      xa(a.enable_page_level_ads) &&
      7 === a.enable_page_level_ads.google_pgb_reactive
    );
  }
  function pl(a, b) {
    this.h = w;
    this.j = a;
    this.i = b;
  }
  function ql(a) {
    Bf({
      Y: a.h,
      ka: a.i,
      Va: 50,
      bb: function (b) {
        return rl(a, b);
      },
    });
  }
  function rl(a, b) {
    ff(
      df(b, function (c) {
        sl("ok");
        tl(a.h, a.j, c);
      }),
      function (c) {
        return sl(c.message);
      }
    );
  }
  function sl(a) {
    ae(
      "abg::amalserr",
      { status: a, guarding: !0, timeout: 50, rate: 0.01 },
      0.01
    );
  }
  function tl(a, b, c) {
    if (!N(K).ama_ran_on_page) {
      var d = dl(c);
      if (d) {
        if (null != B(d, 24)) {
          c = qk(a);
          c.availableAbg = !0;
          var e, f;
          c.ablationFromStorage = !!(null == (e = F(d, qj, 24))
            ? 0
            : null == (f = F(e, sj, 3))
            ? 0
            : Kb(f, tj, 2, uj));
        }
        if (ol(b) && ((e = Xk(a, H(d, yj, 7))), !e || !wb(e, 8))) return;
        N(K).ama_ran_on_page = !0;
        var g;
        if (null == (g = F(d, Dj, 15)) ? 0 : wb(g, 23))
          N(a).enable_overlap_observer = !0;
        if ((g = F(d, Bj, 13)) && 1 === B(g, 1)) {
          var h = 0,
            k = F(g, Cj, 6);
          k && B(k, 3) && (h = B(k, 3) || 0);
          Ke(a, h);
        } else if (
          null == (h = F(d, qj, 24))
            ? 0
            : null == (k = F(h, sj, 3))
            ? 0
            : Kb(k, tj, 2, uj)
        )
          (qk(a).ablatingThisPageview = !0), Ke(a, 1);
        nd(3, [d.toJSON()]);
        var l = b.google_ad_client || "";
        b = bl(xa(b.enable_page_level_ads) ? b.enable_page_level_ads : {});
        var m = gj(kj, new fj(null, b));
        Zd(782, function () {
          var r = m;
          try {
            var u = Xk(a, H(d, yj, 7)),
              x;
            if ((x = u))
              a: {
                var E = vb(u, 2);
                if (E)
                  for (var A = 0; A < E.length; A++)
                    if (1 == E[A]) {
                      x = !0;
                      break a;
                    }
                x = !1;
              }
            if (x) {
              if (B(u, 4)) {
                x = {};
                var G = new fj(null, ((x.google_package = B(u, 4)), x));
                r = gj(r, G);
              }
              var sa = new Dk(a, l, d, u, r),
                mb = new Si();
              new Jk(a, sa, mb).start();
              mb.i.then(Ea(fl, a), Ea(gl, a));
            }
          } catch (yc) {
            al(a, { atf: -1 });
          }
        });
      } else el(a, c);
    }
  }
  function ul(a, b, c) {
    a = a.style;
    a.border = "none";
    a.height = c + "px";
    a.width = b + "px";
    a.margin = 0;
    a.padding = 0;
    a.position = "relative";
    a.visibility = "visible";
    a.backgroundColor = "transparent";
  }
  function W(a, b, c, d) {
    d = void 0 === d ? !1 : d;
    V.call(this, a, b);
    this.ba = c;
    this.jb = d;
  }
  v(W, V);
  W.prototype.na = function () {
    return this.ba;
  };
  W.prototype.i = function (a, b, c) {
    b.google_ad_resize ||
      ((c.style.height = this.height() + "px"), (b.rpe = !0));
  };
  function vl(a) {
    return function (b) {
      return !!(b.ba & a);
    };
  }
  var wl = eb("script");
  function xl(a, b, c, d, e, f, g, h, k, l, m, r) {
    this.v = a;
    this.R = b;
    this.ba = void 0 === c ? null : c;
    this.h = void 0 === d ? null : d;
    this.O = void 0 === e ? null : e;
    this.i = void 0 === f ? null : f;
    this.j = void 0 === g ? null : g;
    this.H = void 0 === h ? null : h;
    this.M = void 0 === k ? null : k;
    this.l = void 0 === l ? null : l;
    this.m = void 0 === m ? null : m;
    this.N = void 0 === r ? null : r;
    this.P = this.A = this.D = null;
  }
  xl.prototype.size = function () {
    return this.R;
  };
  function yl(a, b, c) {
    null != a.ba && (c.google_responsive_formats = a.ba);
    null != a.O && (c.google_safe_for_responsive_override = a.O);
    null != a.i &&
      (!0 === a.i
        ? (c.google_full_width_responsive_allowed = !0)
        : ((c.google_full_width_responsive_allowed = !1), (c.gfwrnwer = a.i)));
    null != a.j && !0 !== a.j && (c.gfwrnher = a.j);
    var d = a.m || c.google_ad_width;
    null != d && (c.google_resizing_width = d);
    d = a.l || c.google_ad_height;
    null != d && (c.google_resizing_height = d);
    d = a.size().h(b);
    var e = a.size().height();
    if (!c.google_ad_resize) {
      c.google_ad_width = d;
      c.google_ad_height = e;
      var f = a.size();
      b = f.h(b) + "x" + f.height();
      c.google_ad_format = b;
      c.google_responsive_auto_format = a.v;
      null != a.h && (c.armr = a.h);
      c.google_ad_resizable = !0;
      c.google_override_format = 1;
      c.google_loader_features_used = 128;
      !0 === a.i && (c.gfwrnh = a.size().height() + "px");
    }
    null != a.H && (c.gfwroml = a.H);
    null != a.M && (c.gfwromr = a.M);
    null != a.l && (c.gfwroh = a.l);
    null != a.m && (c.gfwrow = a.m);
    null != a.N && (c.gfwroz = a.N);
    null != a.D && (c.gml = a.D);
    null != a.A && (c.gmr = a.A);
    null != a.P && (c.gzi = a.P);
    b = hd();
    b = kd(b) || b;
    Ne(b.location, "google_responsive_dummy_ad") &&
      (Sa([1, 2, 3, 4, 5, 6, 7, 8], a.v) || 1 === a.h) &&
      2 !== a.h &&
      ((a = JSON.stringify({
        googMsgType: "adpnt",
        key_value: [{ key: "qid", value: "DUMMY_AD" }],
      })),
      (c.dash =
        "<" +
        wl +
        ">window.top.postMessage('" +
        a +
        "', '*');\n          </" +
        wl +
        '>\n          <div id="dummyAd" style="width:' +
        d +
        "px;height:" +
        e +
        'px;\n            background:#ddd;border:3px solid #f00;box-sizing:border-box;\n            color:#000;">\n            <p>Requested size:' +
        d +
        "x" +
        e +
        "</p>\n            <p>Rendered size:" +
        d +
        "x" +
        e +
        "</p>\n          </div>"));
  } /* 
 
 Copyright 2019 The AMP HTML Authors. All Rights Reserved. 
 
 Licensed under the Apache License, Version 2.0 (the "License"); 
 you may not use this file except in compliance with the License. 
 You may obtain a copy of the License at 
 
      http://www.apache.org/licenses/LICENSE-2.0 
 
 Unless required by applicable law or agreed to in writing, software 
 distributed under the License is distributed on an "AS-IS" BASIS, 
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. 
 See the License for the specific language governing permissions and 
 limitations under the License. 
*/
  var zl = {},
    Al =
      ((zl.image_stacked = 1 / 1.91),
      (zl.image_sidebyside = 1 / 3.82),
      (zl.mobile_banner_image_sidebyside = 1 / 3.82),
      (zl.pub_control_image_stacked = 1 / 1.91),
      (zl.pub_control_image_sidebyside = 1 / 3.82),
      (zl.pub_control_image_card_stacked = 1 / 1.91),
      (zl.pub_control_image_card_sidebyside = 1 / 3.74),
      (zl.pub_control_text = 0),
      (zl.pub_control_text_card = 0),
      zl),
    Bl = {},
    Cl =
      ((Bl.image_stacked = 80),
      (Bl.image_sidebyside = 0),
      (Bl.mobile_banner_image_sidebyside = 0),
      (Bl.pub_control_image_stacked = 80),
      (Bl.pub_control_image_sidebyside = 0),
      (Bl.pub_control_image_card_stacked = 85),
      (Bl.pub_control_image_card_sidebyside = 0),
      (Bl.pub_control_text = 80),
      (Bl.pub_control_text_card = 80),
      Bl),
    Dl = {},
    El =
      ((Dl.pub_control_image_stacked = 100),
      (Dl.pub_control_image_sidebyside = 200),
      (Dl.pub_control_image_card_stacked = 150),
      (Dl.pub_control_image_card_sidebyside = 250),
      (Dl.pub_control_text = 100),
      (Dl.pub_control_text_card = 150),
      Dl);
  function Fl(a) {
    var b = 0;
    a.K && b++;
    a.F && b++;
    a.G && b++;
    if (3 > b)
      return {
        J: "Tags data-matched-content-ui-type, data-matched-content-columns-num and data-matched-content-rows-num should be set together.",
      };
    b = a.K.split(",");
    var c = a.G.split(",");
    a = a.F.split(",");
    if (b.length !== c.length || b.length !== a.length)
      return {
        J: 'Lengths of parameters data-matched-content-ui-type, data-matched-content-columns-num and data-matched-content-rows-num must match. Example: \n data-matched-content-rows-num="4,2"\ndata-matched-content-columns-num="1,6"\ndata-matched-content-ui-type="image_stacked,image_card_sidebyside"',
      };
    if (2 < b.length)
      return {
        J:
          "The parameter length of attribute data-matched-content-ui-type, data-matched-content-columns-num and data-matched-content-rows-num is too long. At most 2 parameters for each attribute are needed: one for mobile and one for desktop, while you are providing " +
          (b.length +
            ' parameters. Example: \n data-matched-content-rows-num="4,2"\ndata-matched-content-columns-num="1,6"\ndata-matched-content-ui-type="image_stacked,image_card_sidebyside".'),
      };
    for (var d = [], e = [], f = 0; f < b.length; f++) {
      var g = Number(c[f]);
      if (isNaN(g) || 0 === g)
        return {
          J: "Wrong value '" + c[f] + "' for data-matched-content-rows-num.",
        };
      d.push(g);
      g = Number(a[f]);
      if (isNaN(g) || 0 === g)
        return {
          J: "Wrong value '" + a[f] + "' for data-matched-content-columns-num.",
        };
      e.push(g);
    }
    return { G: d, F: e, Na: b };
  }
  function Gl(a) {
    return 1200 <= a
      ? { width: 1200, height: 600 }
      : 850 <= a
      ? { width: a, height: Math.floor(0.5 * a) }
      : 550 <= a
      ? { width: a, height: Math.floor(0.6 * a) }
      : 468 <= a
      ? { width: a, height: Math.floor(0.7 * a) }
      : { width: a, height: Math.floor(3.44 * a) };
  }
  var Hl = [
    "google_content_recommendation_ui_type",
    "google_content_recommendation_columns_num",
    "google_content_recommendation_rows_num",
  ];
  function Il(a, b) {
    V.call(this, a, b);
  }
  v(Il, V);
  Il.prototype.h = function (a) {
    return Math.min(1200, Math.max(this.minWidth(), Math.round(a)));
  };
  function Jl(a, b) {
    Kl(a, b);
    if ("pedestal" == b.google_content_recommendation_ui_type)
      return new xl(9, new Il(a, Math.floor(a * b.google_phwr)));
    var c = qc();
    468 > a
      ? c
        ? ((c = a - 8 - 8),
          (c =
            Math.floor(c / 1.91 + 70) +
            Math.floor(
              11 *
                (c * Al.mobile_banner_image_sidebyside +
                  Cl.mobile_banner_image_sidebyside) +
                96
            )),
          (a = {
            X: a,
            V: c,
            F: 1,
            G: 12,
            K: "mobile_banner_image_sidebyside",
          }))
        : ((a = Gl(a)),
          (a = { X: a.width, V: a.height, F: 1, G: 13, K: "image_sidebyside" }))
      : ((a = Gl(a)),
        (a = { X: a.width, V: a.height, F: 4, G: 2, K: "image_stacked" }));
    Ll(b, a);
    return new xl(9, new Il(a.X, a.V));
  }
  function Ml(a, b) {
    Kl(a, b);
    var c = Fl({
      G: b.google_content_recommendation_rows_num,
      F: b.google_content_recommendation_columns_num,
      K: b.google_content_recommendation_ui_type,
    });
    if (c.J) a = { X: 0, V: 0, F: 0, G: 0, K: "image_stacked", J: c.J };
    else {
      var d = 2 === c.Na.length && 468 <= a ? 1 : 0;
      var e = c.Na[d];
      e = 0 === e.indexOf("pub_control_") ? e : "pub_control_" + e;
      var f = El[e];
      for (var g = c.F[d]; a / g < f && 1 < g; ) g--;
      f = g;
      c = c.G[d];
      d = Math.floor((((a - 8 * f - 8) / f) * Al[e] + Cl[e]) * c + 8 * c + 8);
      a =
        1500 < a
          ? {
              width: 0,
              height: 0,
              ta: "Calculated slot width is too large: " + a,
            }
          : 1500 < d
          ? {
              width: 0,
              height: 0,
              ta: "Calculated slot height is too large: " + d,
            }
          : { width: a, height: d };
      a = a.ta
        ? { X: 0, V: 0, F: 0, G: 0, K: e, J: a.ta }
        : { X: a.width, V: a.height, F: f, G: c, K: e };
    }
    if (a.J) throw new M(a.J);
    Ll(b, a);
    return new xl(9, new Il(a.X, a.V));
  }
  function Kl(a, b) {
    if (0 >= a)
      throw new M(
        "Invalid responsive width from Matched Content slot " +
          b.google_ad_slot +
          ": " +
          a +
          ". Please ensure to put this Matched Content slot into a non-zero width div container."
      );
  }
  function Ll(a, b) {
    a.google_content_recommendation_ui_type = b.K;
    a.google_content_recommendation_columns_num = b.F;
    a.google_content_recommendation_rows_num = b.G;
  }
  function Nl(a, b) {
    V.call(this, a, b);
  }
  v(Nl, V);
  Nl.prototype.h = function () {
    return this.minWidth();
  };
  Nl.prototype.i = function (a, b, c) {
    Wj(a, c);
    b.google_ad_resize ||
      ((c.style.height = this.height() + "px"), (b.rpe = !0));
  };
  var Ol = {
    "image-top": function (a) {
      return 600 >= a ? 284 + 0.414 * (a - 250) : 429;
    },
    "image-middle": function (a) {
      return 500 >= a ? 196 - 0.13 * (a - 250) : 164 + 0.2 * (a - 500);
    },
    "image-side": function (a) {
      return 500 >= a ? 205 - 0.28 * (a - 250) : 134 + 0.21 * (a - 500);
    },
    "text-only": function (a) {
      return 500 >= a ? 187 - 0.228 * (a - 250) : 130;
    },
    "in-article": function (a) {
      return 420 >= a
        ? a / 1.2
        : 460 >= a
        ? a / 1.91 + 130
        : 800 >= a
        ? a / 4
        : 200;
    },
  };
  function Pl(a, b) {
    V.call(this, a, b);
  }
  v(Pl, V);
  Pl.prototype.h = function () {
    return Math.min(1200, this.minWidth());
  };
  function Ql(a, b, c, d, e) {
    var f = e.google_ad_layout || "image-top";
    if ("in-article" == f) {
      var g = a;
      if ("false" == e.google_full_width_responsive) a = g;
      else if (((a = Rj(b, c, g, 0.2, e)), !0 !== a)) (e.gfwrnwer = a), (a = g);
      else if ((a = L(b)))
        if (((e.google_full_width_responsive_allowed = !0), c.parentElement)) {
          b: {
            g = c;
            for (var h = 0; 100 > h && g.parentElement; ++h) {
              for (
                var k = g.parentElement.childNodes, l = 0;
                l < k.length;
                ++l
              ) {
                var m = k[l];
                if (m != g && Uj(b, m)) break b;
              }
              g = g.parentElement;
              g.style.width = "100%";
              g.style.height = "auto";
            }
          }
          Wj(b, c);
        } else a = g;
      else a = g;
    }
    if (250 > a)
      throw new M(
        "Fluid responsive ads must be at least 250px wide: availableWidth=" + a
      );
    a = Math.min(1200, Math.floor(a));
    if (d && "in-article" != f) {
      f = Math.ceil(d);
      if (50 > f)
        throw new M(
          "Fluid responsive ads must be at least 50px tall: height=" + f
        );
      return new xl(11, new V(a, f));
    }
    if ("in-article" != f && (d = e.google_ad_layout_key)) {
      f = "" + d;
      b = Math.pow(10, 3);
      if ((d = (c = f.match(/([+-][0-9a-z]+)/g)) && c.length)) {
        e = [];
        for (g = 0; g < d; g++) e.push(parseInt(c[g], 36) / b);
        b = e;
      } else b = null;
      if (!b) throw new M("Invalid data-ad-layout-key value: " + f);
      f = (a + -725) / 1e3;
      c = 0;
      d = 1;
      e = b.length;
      for (g = 0; g < e; g++) (c += b[g] * d), (d *= f);
      f = Math.ceil(1e3 * c - -725 + 10);
      if (isNaN(f)) throw new M("Invalid height: height=" + f);
      if (50 > f)
        throw new M(
          "Fluid responsive ads must be at least 50px tall: height=" + f
        );
      if (1200 < f)
        throw new M(
          "Fluid responsive ads must be at most 1200px tall: height=" + f
        );
      return new xl(11, new V(a, f));
    }
    d = Ol[f];
    if (!d) throw new M("Invalid data-ad-layout value: " + f);
    c = ak(c, b);
    b = L(b);
    b =
      "in-article" !== f || c || a !== b
        ? Math.ceil(d(a))
        : Math.ceil(1.25 * d(a));
    return new xl(11, "in-article" == f ? new Pl(a, b) : new V(a, b));
  }
  function Rl(a) {
    return function (b) {
      for (var c = a.length - 1; 0 <= c; --c) if (!a[c](b)) return !1;
      return !0;
    };
  }
  function Sl(a, b) {
    for (var c = Tl.slice(0), d = c.length, e = null, f = 0; f < d; ++f) {
      var g = c[f];
      if (a(g)) {
        if (!b || b(g)) return g;
        null === e && (e = g);
      }
    }
    return e;
  }
  var X = [
      new W(970, 90, 2),
      new W(728, 90, 2),
      new W(468, 60, 2),
      new W(336, 280, 1),
      new W(320, 100, 2),
      new W(320, 50, 2),
      new W(300, 600, 4),
      new W(300, 250, 1),
      new W(250, 250, 1),
      new W(234, 60, 2),
      new W(200, 200, 1),
      new W(180, 150, 1),
      new W(160, 600, 4),
      new W(125, 125, 1),
      new W(120, 600, 4),
      new W(120, 240, 4),
      new W(120, 120, 1, !0),
    ],
    Tl = [
      X[6],
      X[12],
      X[3],
      X[0],
      X[7],
      X[14],
      X[1],
      X[8],
      X[10],
      X[4],
      X[15],
      X[2],
      X[11],
      X[5],
      X[13],
      X[9],
      X[16],
    ];
  function Ul(a, b, c, d, e) {
    "false" == e.google_full_width_responsive
      ? (c = { B: a, C: 1 })
      : ("autorelaxed" == b && e.google_full_width_responsive) ||
        Vl(b) ||
        e.google_ad_resize
      ? ((b = Sj(a, c, d, e)),
        (c = !0 !== b ? { B: a, C: b } : { B: L(c) || a, C: !0 }))
      : (c = { B: a, C: 2 });
    b = c.C;
    return !0 !== b
      ? { B: a, C: b }
      : d.parentElement
      ? { B: c.B, C: b }
      : { B: a, C: b };
  }
  function Wl(a, b, c, d, e) {
    var f = Zd(247, function () {
        return Ul(a, b, c, d, e);
      }),
      g = f.B;
    f = f.C;
    var h = !0 === f,
      k = J(d.style.width),
      l = J(d.style.height),
      m = Xl(g, b, c, d, e, h);
    g = m.W;
    h = m.T;
    var r = m.na;
    m = m.Ma;
    var u = Yl(b, r),
      x,
      E = (x = Xj(d, c, "marginLeft", J)) ? x + "px" : "",
      A = (x = Xj(d, c, "marginRight", J)) ? x + "px" : "";
    x = Xj(d, c, "zIndex") || "";
    return new xl(u, g, r, null, m, f, h, E, A, l, k, x);
  }
  function Vl(a) {
    return (
      "auto" == a || /^((^|,) *(horizontal|vertical|rectangle) *)+$/.test(a)
    );
  }
  function Xl(a, b, c, d, e, f) {
    b = "auto" == b ? (0.25 >= a / Math.min(1200, L(c)) ? 4 : 3) : Qj(b);
    var g = !1,
      h = !1;
    if (488 > L(c)) {
      var k = Lj(d, c);
      var l = ak(d, c);
      g = !l && k;
      h = l && k;
    }
    l = [Yj(a), vl(b)];
    l.push(Zj(488 > L(c), c, d, h));
    null != e.google_max_responsive_height &&
      l.push(ck(e.google_max_responsive_height));
    var m = [
      function (u) {
        return !u.jb;
      },
    ];
    if (g || h) (g = dk(c, d)), m.push(ck(g));
    var r = Sl(Rl(l), Rl(m));
    if (!r) throw new M("No slot size for availableWidth=" + a);
    l = Zd(248, function () {
      var u;
      a: if (f) {
        if (e.gfwrnh && (u = J(e.gfwrnh))) {
          u = { W: new Nl(a, u), T: !0 };
          break a;
        }
        u = a / 1.2;
        var x = Math;
        var E = x.min;
        if (
          e.google_resizing_allowed ||
          "true" == e.google_full_width_responsive
        )
          var A = Infinity;
        else {
          A = d;
          var G = Infinity;
          do {
            var sa = Xj(A, c, "height", J);
            sa && (G = Math.min(G, sa));
            (sa = Xj(A, c, "maxHeight", J)) && (G = Math.min(G, sa));
          } while ((A = A.parentElement) && "HTML" != A.tagName);
          A = G;
        }
        x = E.call(x, u, A);
        if (x < 0.5 * u || 100 > x) x = u;
        S(kg) && !ak(d, c) && (x = Math.max(x, 0.5 * Ad(c).clientHeight));
        u = { W: new Nl(a, Math.floor(x)), T: x < u ? 102 : !0 };
      } else u = { W: r, T: 100 };
      return u;
    });
    g = l.W;
    l = l.T;
    return "in-article" === e.google_ad_layout && Zl(c)
      ? { W: $l(a, c, d, g, e), T: !1, na: b, Ma: k }
      : { W: g, T: l, na: b, Ma: k };
  }
  function Yl(a, b) {
    if ("auto" == a) return 1;
    switch (b) {
      case 2:
        return 2;
      case 1:
        return 3;
      case 4:
        return 4;
      case 3:
        return 5;
      case 6:
        return 6;
      case 5:
        return 7;
      case 7:
        return 8;
    }
    throw Error("bad mask");
  }
  function $l(a, b, c, d, e) {
    var f = e.google_ad_height || Xj(c, b, "height", J);
    b = Ql(a, b, c, f, e).size();
    return b.minWidth() * b.height() > a * d.height()
      ? new W(b.minWidth(), b.height(), 1)
      : d;
  }
  function Zl(a) {
    return S(ig) || (a.location && "#hffwroe2etoq" == a.location.hash);
  }
  function am(a, b, c, d, e) {
    var f;
    (f = L(b))
      ? 488 > L(b)
        ? b.innerHeight >= b.innerWidth
          ? ((e.google_full_width_responsive_allowed = !0),
            Wj(b, c),
            (f = { B: f, C: !0 }))
          : (f = { B: a, C: 5 })
        : (f = { B: a, C: 4 })
      : (f = { B: a, C: 10 });
    var g = f;
    f = g.B;
    g = g.C;
    if (!0 !== g || a == f)
      return new xl(12, new V(a, d), null, null, !0, g, 100);
    a = Xl(f, "auto", b, c, e, !0);
    return new xl(1, a.W, a.na, 2, !0, g, a.T);
  }
  function bm(a, b) {
    var c = b.google_ad_format;
    if ("autorelaxed" == c) {
      a: {
        if ("pedestal" != b.google_content_recommendation_ui_type)
          for (a = t(Hl), c = a.next(); !c.done; c = a.next())
            if (null != b[c.value]) {
              b = !0;
              break a;
            }
        b = !1;
      }
      return b ? 9 : 5;
    }
    if (Vl(c)) return 1;
    if ("link" === c) return 4;
    if ("fluid" == c) {
      if ((c = "in-article" === b.google_ad_layout))
        c =
          S(jg) ||
          S(ig) ||
          (a.location &&
            ("#hffwroe2etop" == a.location.hash ||
              "#hffwroe2etoq" == a.location.hash));
      return c ? (cm(b), 1) : 8;
    }
    if (27 === b.google_reactive_ad_format) return cm(b), 1;
  }
  function dm(a, b, c, d, e) {
    e =
      b.offsetWidth ||
      ((c.google_ad_resize || (void 0 === e ? !1 : e)) &&
        Xj(b, d, "width", J)) ||
      c.google_ad_width ||
      0;
    4 === a && ((c.google_ad_format = "auto"), (a = 1));
    var f = (f = em(a, e, b, c, d)) ? f : Wl(e, c.google_ad_format, d, b, c);
    f.size().i(d, c, b);
    yl(f, e, c);
    1 != a && ((a = f.size().height()), (b.style.height = a + "px"));
  }
  function em(a, b, c, d, e) {
    var f = d.google_ad_height || Xj(c, e, "height", J);
    switch (a) {
      case 5:
        return (
          (f = Zd(247, function () {
            return Ul(b, d.google_ad_format, e, c, d);
          })),
          (a = f.B),
          (f = f.C),
          !0 === f && b != a && Wj(e, c),
          !0 === f
            ? (d.google_full_width_responsive_allowed = !0)
            : ((d.google_full_width_responsive_allowed = !1), (d.gfwrnwer = f)),
          Jl(a, d)
        );
      case 9:
        return Ml(b, d);
      case 8:
        return Ql(b, e, c, f, d);
      case 10:
        return am(b, e, c, f, d);
    }
  }
  function cm(a) {
    a.google_ad_format = "auto";
    a.armr = 3;
  }
  function fm(a, b) {
    var c = kd(b);
    if (c) {
      c = L(c);
      var d = wc(a, b) || {},
        e = d.direction;
      if ("0px" === d.width && "none" !== d.cssFloat) return -1;
      if ("ltr" === e && c)
        return Math.floor(Math.min(1200, c - a.getBoundingClientRect().left));
      if ("rtl" === e && c)
        return (
          (a =
            b.document.body.getBoundingClientRect().right -
            a.getBoundingClientRect().right),
          Math.floor(
            Math.min(
              1200,
              c - a - Math.floor((c - b.document.body.clientWidth) / 2)
            )
          )
        );
    }
    return -1;
  }
  var gm = ka([
      "https://pagead2.googlesyndication.com/pagead/managed/js/adsense/",
      "/slotcar_library",
      ".js",
    ]),
    hm = ka([
      "https://pagead2.googlesyndication.com/pagead/js/",
      "/",
      "/slotcar_library",
      ".js",
    ]),
    im = ka([
      "https://googleads.g.doubleclick.net/pagead/html/",
      "/",
      "/zrt_lookup.html",
    ]),
    jm = ka([
      "https://pagead2.googlesyndication.com/pagead/managed/js/adsense/",
      "/show_ads_impl",
      ".js",
    ]),
    km = ka([
      "https://pagead2.googlesyndication.com/pagead/js/",
      "/",
      "/show_ads_impl",
      ".js",
    ]),
    lm = ka([
      "https://pagead2.googlesyndication.com/pagead/managed/js/adsense/",
      "/show_ads_impl_with_ama",
      ".js",
    ]),
    mm = ka([
      "https://pagead2.googlesyndication.com/pagead/js/",
      "/",
      "/show_ads_impl_with_ama",
      ".js",
    ]),
    nm = ka([
      "https://pagead2.googlesyndication.com/pagead/managed/js/adsense/",
      "/show_ads_impl_instrumented",
      ".js",
    ]),
    om = ka([
      "https://pagead2.googlesyndication.com/pagead/js/",
      "/",
      "/show_ads_impl_instrumented",
      ".js",
    ]);
  function pm(a) {
    var b = a.rb;
    return a.eb || ("dev" === b ? "dev" : "");
  }
  var qm = {},
    rm =
      ((qm.google_ad_modifications = !0),
      (qm.google_analytics_domain_name = !0),
      (qm.google_analytics_uacct = !0),
      (qm.google_pause_ad_requests = !0),
      (qm.google_user_agent_client_hint = !0),
      qm);
  function sm(a) {
    return (a = a.innerText || a.innerHTML) &&
      (a = a
        .replace(/^\s+/, "")
        .split(/\r?\n/, 1)[0]
        .match(/^\x3c!--+(.*?)(?:--+>)?\s*$/)) &&
      RegExp("google_ad_client").test(a[1])
      ? a[1]
      : null;
  }
  function tm(a) {
    if ((a = a.innerText || a.innerHTML))
      if (
        ((a = a.replace(/^\s+|\s+$/g, "").replace(/\s*(\r?\n)+\s*/g, ";")),
        (a =
          a.match(/^\x3c!--+(.*?)(?:--+>)?$/) ||
          a.match(/^\/*\s*<!\[CDATA\[(.*?)(?:\/*\s*\]\]>)?$/i)) &&
          RegExp("google_ad_client").test(a[1]))
      )
        return a[1];
    return null;
  }
  function um(a) {
    switch (a) {
      case "true":
        return !0;
      case "false":
        return !1;
      case "null":
        return null;
      case "undefined":
        break;
      default:
        try {
          var b = a.match(/^(?:'(.*)'|"(.*)")$/);
          if (b) return b[1] || b[2] || "";
          if (/^[-+]?\d*(\.\d+)?$/.test(a)) {
            var c = parseFloat(a);
            return c === c ? c : void 0;
          }
        } catch (d) {}
    }
  }
  function vm(a) {
    this.l = [];
    this.i = a || window;
    this.h = 0;
    this.j = null;
    this.m = 0;
  }
  var wm;
  n = vm.prototype;
  n.fb = function (a, b) {
    0 != this.h || 0 != this.l.length || (b && b != window)
      ? this.Ja(a, b)
      : ((this.h = 2), this.Sa(new xm(a, window)));
  };
  n.Ja = function (a, b) {
    this.l.push(new xm(a, b || this.i));
    ym(this);
  };
  n.pb = function (a) {
    this.h = 1;
    if (a) {
      var b = $d(188, Da(this.Ra, this, !0));
      this.j = this.i.setTimeout(b, a);
    }
  };
  n.Ra = function (a) {
    a && ++this.m;
    1 == this.h &&
      (null != this.j && (this.i.clearTimeout(this.j), (this.j = null)),
      (this.h = 0));
    ym(this);
  };
  n.xb = function () {
    return !(!window || !Array);
  };
  n.gb = function () {
    return this.m;
  };
  function ym(a) {
    var b = $d(189, Da(a.zb, a));
    a.i.setTimeout(b, 0);
  }
  n.zb = function () {
    if (0 == this.h && this.l.length) {
      var a = this.l.shift();
      this.h = 2;
      var b = $d(190, Da(this.Sa, this, a));
      a.Y.setTimeout(b, 0);
      ym(this);
    }
  };
  n.Sa = function (a) {
    this.h = 0;
    a.h();
  };
  function zm(a) {
    try {
      return a.sz();
    } catch (b) {
      return !1;
    }
  }
  function Am() {
    if (wm && zm(wm)) return wm;
    for (var a, b = (a = window); a && a != a.parent; )
      (a = a.parent), uc(a) && (b = a);
    a = b;
    return (b = a.google_jobrunner) &&
      ("object" === typeof b || "function" === typeof b) &&
      zm(b) &&
      cd(b.nq) &&
      cd(b.nqa) &&
      cd(b.al) &&
      cd(b.rl)
      ? (wm = b)
      : (a.google_jobrunner = wm = new vm(a));
  }
  function Bm(a, b) {
    Am().nq(a, b);
  }
  function Cm(a, b) {
    Am().nqa(a, b);
  }
  vm.prototype.nq = vm.prototype.fb;
  vm.prototype.nqa = vm.prototype.Ja;
  vm.prototype.al = vm.prototype.pb;
  vm.prototype.rl = vm.prototype.Ra;
  vm.prototype.sz = vm.prototype.xb;
  vm.prototype.tc = vm.prototype.gb;
  function xm(a, b) {
    this.h = a;
    this.Y = b;
  }
  var Dm = "undefined" === typeof sttc ? void 0 : sttc;
  function Em(a) {
    try {
      return Qe(a, Re), new Ge(JSON.parse(a));
    } catch (b) {
      Vd.I(
        838,
        b instanceof Error ? b : Error(String(b)),
        void 0,
        function (c) {
          c.jspb = String(a);
        }
      );
    }
    return new Ge();
  }
  var Fm = R(Jg).h(og.h, og.defaultValue);
  function Gm() {
    var a = K.document;
    a = void 0 === a ? window.document : a;
    Qc(Fm, a);
  }
  var Hm = R(Jg).h(pg.h, pg.defaultValue);
  function Im() {
    var a = K.document;
    a = void 0 === a ? window.document : a;
    Qc(Hm, a);
  }
  var Jm = ka(["https://pagead2.googlesyndication.com/pagead/js/err_rep.js"]);
  function Km() {
    this.h = null;
    this.j = !1;
    this.l = Math.random();
    this.i = this.I;
    this.m = null;
  }
  n = Km.prototype;
  n.sa = function (a) {
    this.h = a;
  };
  n.Ua = function (a) {
    this.j = a;
  };
  n.Ta = function (a) {
    this.i = a;
  };
  n.I = function (a, b, c, d, e) {
    if ((this.j ? this.l : Math.random()) > (void 0 === c ? 0.01 : c))
      return !1;
    Cd(b) || (b = new Bd(b, { context: a, id: void 0 === e ? "jserror" : e }));
    if (d || this.h) (b.meta = {}), this.h && this.h(b.meta), d && d(b.meta);
    w.google_js_errors = w.google_js_errors || [];
    w.google_js_errors.push(b);
    if (!w.error_rep_loaded) {
      a = Zb(Jm);
      var f;
      vc(w.document, null != (f = this.m) ? f : fc(hc(a).toString()));
      w.error_rep_loaded = !0;
    }
    return !1;
  };
  n.ma = function (a, b, c) {
    try {
      var d = b();
    } catch (e) {
      if (!this.i(a, e, 0.01, c, "jserror")) throw e;
    }
    return d;
  };
  n.Oa = function (a, b, c, d) {
    var e = this;
    return function (f) {
      for (var g = [], h = 0; h < arguments.length; ++h) g[h] = arguments[h];
      return e.ma(
        a,
        function () {
          return b.apply(c, g);
        },
        d
      );
    };
  };
  function Lm(a, b, c) {
    var d = window;
    return function () {
      var e = Jd(),
        f = 3;
      try {
        var g = b.apply(this, arguments);
      } catch (h) {
        f = 13;
        if (c) return c(a, h), g;
        throw h;
      } finally {
        d.google_measure_js_timing &&
          e &&
          ((e = {
            label: a.toString(),
            value: e,
            duration: (Jd() || 0) - e,
            type: f,
          }),
          (f = d.google_js_reporting_queue = d.google_js_reporting_queue || []),
          2048 > f.length && f.push(e));
      }
      return g;
    };
  }
  function Mm(a, b) {
    return Lm(a, b, function (c, d) {
      new Km().I(c, d);
    });
  }
  function Nm(a, b) {
    return null == b ? "&" + a + "=null" : "&" + a + "=" + Math.floor(b);
  }
  function Om(a, b) {
    return "&" + a + "=" + b.toFixed(3);
  }
  function Pm() {
    var a = new p.Set();
    try {
      if ("undefined" === typeof googletag || !googletag.pubads) return a;
      for (
        var b = googletag.pubads(), c = t(b.getSlots()), d = c.next();
        !d.done;
        d = c.next()
      )
        a.add(d.value.getSlotId().getDomId());
    } catch (e) {}
    return a;
  }
  function Qm(a) {
    a = a.id;
    return (
      null != a &&
      (Pm().has(a) ||
        q(a, "startsWith").call(a, "google_ads_iframe_") ||
        q(a, "startsWith").call(a, "aswift"))
    );
  }
  function Rm(a, b, c) {
    if (!a.sources) return !1;
    var d = Kg(tg);
    switch (Sm(a)) {
      case 2:
        var e = Tm(a);
        if (e)
          return c.some(function (g) {
            return Um(e, g, d);
          });
      case 1:
        var f = Vm(a);
        if (f)
          return b.some(function (g) {
            return Um(f, g, d);
          });
    }
    return !1;
  }
  function Sm(a) {
    if (!a.sources) return 0;
    a = a.sources.filter(function (b) {
      return b.previousRect && b.currentRect;
    });
    if (1 <= a.length) {
      a = a[0];
      if (a.previousRect.top < a.currentRect.top) return 2;
      if (a.previousRect.top > a.currentRect.top) return 1;
    }
    return 0;
  }
  function Vm(a) {
    return Wm(a, function (b) {
      return b.currentRect;
    });
  }
  function Tm(a) {
    return Wm(a, function (b) {
      return b.previousRect;
    });
  }
  function Wm(a, b) {
    return a.sources.reduce(function (c, d) {
      d = b(d);
      return c
        ? d && 0 !== d.width * d.height
          ? d.top < c.top
            ? d
            : c
          : c
        : d;
    }, null);
  }
  function Xm() {
    P.call(this);
    this.i = this.h = this.O = this.N = this.H = 0;
    this.Ba = this.ya = Number.NEGATIVE_INFINITY;
    this.ua =
      this.wa =
      this.xa =
      this.za =
      this.Ea =
      this.m =
      this.Da =
      this.R =
        0;
    this.va = !1;
    this.P = this.M = this.A = 0;
    var a = document.querySelector("[data-google-query-id]");
    this.Ca = a ? a.getAttribute("data-google-query-id") : null;
    this.l = null;
    this.Aa = !1;
    this.ea = function () {};
  }
  v(Xm, P);
  function Ym() {
    var a = new Xm();
    if (S(qg) && !window.google_plmetrics && window.PerformanceObserver) {
      window.google_plmetrics = !0;
      for (
        var b = t([
            "layout-shift",
            "largest-contentful-paint",
            "first-input",
            "longtask",
          ]),
          c = b.next();
        !c.done;
        c = b.next()
      )
        (c = c.value), Zm(a).observe({ type: c, buffered: !S(vg) });
      $m(a);
    }
  }
  function Zm(a) {
    a.l ||
      (a.l = new PerformanceObserver(
        Mm(640, function (b) {
          var c = an !== window.scrollX || bn !== window.scrollY ? [] : cn,
            d = dn();
          b = t(b.getEntries());
          for (var e = b.next(); !e.done; e = b.next())
            switch (((e = e.value), e.entryType)) {
              case "layout-shift":
                var f = a;
                if (!e.hadRecentInput && (!S(rg) || 0.01 < e.value)) {
                  f.H += Number(e.value);
                  Number(e.value) > f.N && (f.N = Number(e.value));
                  f.O += 1;
                  var g = Rm(e, c, d);
                  g && ((f.m += e.value), f.za++);
                  if (5e3 < e.startTime - f.ya || 1e3 < e.startTime - f.Ba)
                    (f.ya = e.startTime), (f.h = 0), (f.i = 0);
                  f.Ba = e.startTime;
                  f.h += e.value;
                  g && (f.i += e.value);
                  f.h > f.R &&
                    ((f.R = f.h),
                    (f.Ea = f.i),
                    (f.Da = e.startTime + e.duration));
                }
                break;
              case "largest-contentful-paint":
                a.xa = Math.floor(e.renderTime || e.loadTime);
                a.wa = e.size;
                break;
              case "first-input":
                a.ua = Number((e.processingStart - e.startTime).toFixed(3));
                a.va = !0;
                break;
              case "longtask":
                (e = Math.max(0, e.duration - 50)),
                  (a.A += e),
                  (a.M = Math.max(a.M, e)),
                  (a.P += 1);
            }
        })
      ));
    return a.l;
  }
  function $m(a) {
    var b = Mm(641, function () {
        var f = document;
        2 ==
          ({ visible: 1, hidden: 2, prerender: 3, preview: 4, unloaded: 5 }[
            f.visibilityState ||
              f.webkitVisibilityState ||
              f.mozVisibilityState ||
              ""
          ] || 0) && en(a);
      }),
      c = Mm(641, function () {
        return void en(a);
      });
    document.addEventListener("visibilitychange", b);
    document.addEventListener("unload", c);
    var d = Kg(ug),
      e;
    0 < d && (e = setTimeout(c, 1e3 * d));
    a.ea = function () {
      document.removeEventListener("visibilitychange", b);
      document.removeEventListener("unload", c);
      Zm(a).disconnect();
      e && clearTimeout(e);
    };
  }
  Xm.prototype.j = function () {
    P.prototype.j.call(this);
    this.ea();
  };
  function en(a) {
    if (!a.Aa) {
      a.Aa = !0;
      Zm(a).takeRecords();
      var b =
        "https://pagead2.googlesyndication.com/pagead/gen_204?id=plmetrics";
      window.LayoutShift &&
        ((b += Om("cls", a.H)),
        (b += Om("mls", a.N)),
        (b += Nm("nls", a.O)),
        window.LayoutShiftAttribution &&
          ((b += Om("cas", a.m)), (b += Nm("nas", a.za))),
        (b += Om("wls", a.R)),
        (b += Om("tls", a.Da)),
        window.LayoutShiftAttribution && (b += Om("was", a.Ea)));
      window.LargestContentfulPaint &&
        ((b += Nm("lcp", a.xa)), (b += Nm("lcps", a.wa)));
      window.PerformanceEventTiming && a.va && (b += Nm("fid", a.ua));
      window.PerformanceLongTaskTiming &&
        ((b += Nm("cbt", a.A)), (b += Nm("mbt", a.M)), (b += Nm("nlt", a.P)));
      for (
        var c = 0, d = t(document.getElementsByTagName("iframe")), e = d.next();
        !e.done;
        e = d.next()
      )
        Qm(e.value) && c++;
      b += Nm("nif", c);
      b += Nm("ifi", ed(window));
      c = R(pi).h();
      b += "&eid=" + encodeURIComponent(c.join());
      b += "&top=" + (w === w.top ? 1 : 0);
      b += a.Ca ? "&qqid=" + encodeURIComponent(a.Ca) : Nm("pvsid", Rc(w));
      window.googletag && (b += "&gpt=1");
      window.fetch(b, {
        keepalive: !0,
        credentials: "include",
        redirect: "follow",
        method: "get",
        mode: "no-cors",
      });
      a.v || ((a.v = !0), a.j());
    }
  }
  function Um(a, b, c) {
    if (0 === c) return !0;
    var d = Math.min(a.right, b.right) - Math.max(a.left, b.left);
    a = Math.min(a.bottom, b.bottom) - Math.max(a.top, b.top);
    return 0 >= d || 0 >= a
      ? !1
      : (100 * d * a) / ((b.right - b.left) * (b.bottom - b.top)) >= c;
  }
  function dn() {
    var a = [].concat(la(document.getElementsByTagName("iframe"))).filter(Qm),
      b = []
        .concat(la(Pm()))
        .map(function (c) {
          return document.getElementById(c);
        })
        .filter(function (c) {
          return null !== c;
        });
    an = window.scrollX;
    bn = window.scrollY;
    return (cn = [].concat(la(a), la(b)).map(function (c) {
      return c.getBoundingClientRect();
    }));
  }
  var an = void 0,
    bn = void 0,
    cn = [];
  function fn(a) {
    a = void 0 === a ? window : a;
    return !a.PeriodicSyncManager;
  }
  function gn() {
    var a = void 0 === a ? window : a;
    if ((!fn(a) && S(wg)) || (fn(a) && S(xg))) {
      a = a.navigator.userAgent;
      var b = /Chrome/.test(a);
      return /Android/.test(a) && b;
    }
    return !1;
  }
  var hn = {
      issuerOrigin: "https://attestation.android.com",
      issuancePath: "/att/i",
      redemptionPath: "/att/r",
      shouldRedeemToken: function () {
        return gn();
      },
      shouldRequestToken: function () {
        return gn();
      },
    },
    Y = {
      issuerOrigin: "https://pagead2.googlesyndication.com",
      issuancePath: "/dtt/i",
      redemptionPath: "/dtt/r",
      getStatePath: "/dtt/s",
      shouldRedeemToken: function () {
        return !0;
      },
      shouldRequestToken: function () {
        return !0;
      },
    };
  var jn = R(Jg).h(Cg.h, Cg.defaultValue);
  function kn(a, b) {
    a = void 0 === a ? null : a;
    b = void 0 === b ? !1 : b;
    P.call(this);
    this.i = b;
    this.h = [];
    S(Eg)
      ? (gn() && this.h.push(hn), S(zg) && this.h.push(Y))
      : (this.h = a || [hn]);
    if (
      document.hasTrustToken &&
      !S(yg) &&
      !Array.isArray(window.goog_tt_state)
    ) {
      var c = ln(this);
      Object.defineProperty(window, "goog_tt_state", {
        configurable: !1,
        get: function () {
          return c.slice();
        },
      });
    }
  }
  v(kn, P);
  function mn() {
    var a = void 0 === a ? window.document : a;
    Qc(jn, a);
  }
  function nn(a, b) {
    return (
      S(Bg) ||
      (a && ".google.de" != b) ||
      ".google.ch" === b ||
      "function" === typeof K.__tcfapi
    );
  }
  function ln(a) {
    return a.h.map(function (b) {
      return { issuerOrigin: b.issuerOrigin, state: S(Ag) && !a.i ? 12 : 1 };
    });
  }
  function Z(a, b, c) {
    var d = q(window.goog_tt_state, "find").call(
      window.goog_tt_state,
      function (e) {
        return e.issuerOrigin === a;
      }
    );
    d && ((d.state = b), S(Eg) && void 0 != c && (d.hasRedemptionRecord = c));
  }
  function on() {
    var a = window.goog_tt_state;
    return (
      Array.isArray(a) &&
      a.some(function (b) {
        return 1 != b.state;
      })
    );
  }
  function pn(a) {
    var b = a.issuerOrigin + a.redemptionPath,
      c = {
        keepalive: !0,
        trustToken: {
          type: "token-redemption",
          issuer: a.issuerOrigin,
          refreshPolicy: "none",
        },
      };
    Z(a.issuerOrigin, 2);
    return window
      .fetch(b, c)
      .then(function (d) {
        if (!d.ok) throw Error(d.status + ": Network response was not ok!");
        Z(a.issuerOrigin, 6, !0);
      })
      .catch(function (d) {
        d && "NoModificationAllowedError" === d.name
          ? Z(a.issuerOrigin, 6, !0)
          : Z(a.issuerOrigin, 5);
      });
  }
  function qn(a, b) {
    var c = a.issuerOrigin + a.issuancePath,
      d = { trustToken: { type: "token-request" } };
    S(Dg) && (d.keepalive = !0);
    Z(a.issuerOrigin, 8);
    return window
      .fetch(c, d)
      .then(function (e) {
        if (!e.ok) throw Error(e.status + ": Network response was not ok!");
        Z(a.issuerOrigin, 10);
        if (b) return pn(a);
      })
      .catch(function (e) {
        if (e && "NoModificationAllowedError" === e.name) {
          if ((Z(a.issuerOrigin, 10), b)) return pn(a);
        } else Z(a.issuerOrigin, 9);
      });
  }
  function rn() {
    Z(hn.issuerOrigin, 13);
    return document.hasTrustToken(hn.issuerOrigin).then(function (a) {
      return a ? pn(hn) : qn(hn, !0);
    });
  }
  function sn() {
    Z(Y.issuerOrigin, 13);
    if (p.Promise) {
      var a = document
          .hasTrustToken(Y.issuerOrigin)
          .then(function (d) {
            return d;
          })
          .catch(function () {
            return p.Promise.reject(19);
          }),
        b = Y.issuerOrigin + Y.redemptionPath,
        c = {
          keepalive: !0,
          trustToken: { type: "token-redemption", refreshPolicy: "none" },
        };
      Z(Y.issuerOrigin, 16);
      return a
        .then(function (d) {
          return window
            .fetch(b, c)
            .then(function (e) {
              if (!e.ok)
                throw Error(e.status + ": Network response was not ok!");
              Z(Y.issuerOrigin, 18, !0);
            })
            .catch(function (e) {
              if (e && "NoModificationAllowedError" === e.name)
                Z(Y.issuerOrigin, 18, !0);
              else {
                if (d) return p.Promise.reject(17);
                Z(Y.issuerOrigin, 17);
              }
            });
        })
        .then(function () {
          return document
            .hasTrustToken(Y.issuerOrigin)
            .then(function (d) {
              return d;
            })
            .catch(function () {
              return p.Promise.reject(19);
            });
        })
        .then(function (d) {
          var e = Y.issuerOrigin + Y.getStatePath;
          Z(Y.issuerOrigin, 20);
          return window
            .fetch(e + "?ht=" + d, {
              trustToken: {
                type: "send-redemption-record",
                issuers: [Y.issuerOrigin],
              },
            })
            .then(function (f) {
              if (!f.ok)
                throw Error(f.status + ": Network response was not ok!");
              Z(Y.issuerOrigin, 22);
              return f.text().then(function (g) {
                return JSON.parse(g);
              });
            })
            .catch(function () {
              return p.Promise.reject(21);
            });
        })
        .then(function (d) {
          var e = Y.issuerOrigin + Y.issuancePath;
          return d && d.srqt && d.cs
            ? (Z(Y.issuerOrigin, 23),
              window
                .fetch(e + "?cs=" + d.cs, {
                  keepalive: !0,
                  trustToken: { type: "token-request" },
                })
                .then(function (f) {
                  if (!f.ok)
                    throw Error(f.status + ": Network response was not ok!");
                  Z(Y.issuerOrigin, 25);
                  return d;
                })
                .catch(function () {
                  return p.Promise.reject(24);
                }))
            : d;
        })
        .then(function (d) {
          if (d && d.srdt && d.cs)
            return (
              Z(Y.issuerOrigin, 26),
              window
                .fetch(b + "?cs=" + d.cs, {
                  keepalive: !0,
                  trustToken: {
                    type: "token-redemption",
                    refreshPolicy: "refresh",
                  },
                })
                .then(function (e) {
                  if (!e.ok)
                    throw Error(e.status + ": Network response was not ok!");
                  Z(Y.issuerOrigin, 28, !0);
                })
                .catch(function () {
                  return p.Promise.reject(27);
                })
            );
        })
        .then(function () {
          Z(Y.issuerOrigin, 29);
        })
        .catch(function (d) {
          if (19 == d || 17 == d || 21 == d || 24 == d || 27 == d)
            Z(Y.issuerOrigin, d);
          else throw d;
        });
    }
  }
  function tn(a) {
    if (document.hasTrustToken && !S(yg) && (!S(Ag) || a.i)) {
      if (on()) return window.goog_tt_promise;
      var b = [];
      S(Eg)
        ? gn() && b.push(rn())
        : a.h.forEach(function (c) {
            Z(c.issuerOrigin, 13);
            var d = c.shouldRedeemToken(),
              e = c.shouldRequestToken();
            if (d || e) {
              var f = document.hasTrustToken(c.issuerOrigin).then(function (g) {
                if (g) {
                  if (d) return pn(c);
                } else {
                  if (e) return qn(c, d);
                  Z(c.issuerOrigin, 3);
                }
              });
              b.push(f);
            } else Z(c.issuerOrigin, 7);
          });
      S(zg) && b.push(sn());
      if (p.Promise && p.Promise.all)
        return (
          (a = p.Promise.all(b)),
          "object" != typeof window.goog_tt_promise &&
            Object.defineProperty(window, "goog_tt_promise", {
              configurable: !1,
              value: a,
              writable: !1,
            }),
          a
        );
    }
  }
  var un =
    "platform platformVersion architecture model uaFullVersion bitness".split(
      " "
    );
  function vn() {
    return K.navigator &&
      K.navigator.userAgentData &&
      "function" === typeof K.navigator.userAgentData.getHighEntropyValues
      ? K.navigator.userAgentData.getHighEntropyValues(un).then(function (a) {
          var b = new Lk();
          b = C(b, 1, a.platform);
          b = C(b, 2, a.platformVersion);
          b = C(b, 3, a.architecture);
          b = C(b, 4, a.model);
          b = C(b, 5, a.uaFullVersion);
          return C(b, 9, a.bitness);
        })
      : null;
  }
  function wn(a, b) {
    b.google_ad_host ||
      ((a = a.document.querySelector(
        'meta[name="google-adsense-platform-account"]'
      )) &&
        (b.google_ad_host = a.getAttribute("content")));
  }
  function xn(a, b, c) {
    c = void 0 === c ? "" : c;
    K.google_sa_impl &&
      !K.document.getElementById("google_shimpl") &&
      ((K.google_sa_queue = null),
      (K.google_sl_win = null),
      (K.google_sa_impl = null));
    K.google_sa_queue ||
      ((K.google_sa_queue = []),
      (K.google_sl_win = K),
      (K.google_process_slots = $d(215, function () {
        return yn(K);
      })),
      (a = zn(c, a, b)),
      (vc(K.document, a).id = "google_shimpl"));
  }
  function yn(a) {
    var b = a.google_sa_queue,
      c = b.shift();
    a.google_sa_impl || ae("shimpl", { t: "no_fn" });
    "function" === typeof c && Zd(216, c);
    b.length &&
      a.setTimeout(
        $d(215, function () {
          return yn(a);
        }),
        0
      );
  }
  function An(a, b, c) {
    a.google_sa_queue = a.google_sa_queue || [];
    a.google_sa_impl ? c(b) : a.google_sa_queue.push(b);
  }
  function zn(a, b, c) {
    var d = Math.random() < Kg(dg) ? fc(hc(b.tb).toString()) : null;
    b = xb(c, 4) ? b.sb : b.ub;
    d = d ? d : fc(hc(b).toString());
    b = {};
    a: {
      if (xb(c, 4)) {
        if ((c = a || Bn())) {
          var e = {};
          c = ((e.client = c), (e.plah = K.location.host), e);
          break a;
        }
        throw Error("PublisherCodeNotFoundForAma");
      }
      c = {};
    }
    Cn(c, b);
    a: {
      if ((c = Kg(Tf)))
        if ((a = a || Bn())) {
          e = {};
          a =
            ((e.client = a),
            (e.plah = K.location.host),
            (e.eid = "" + c),
            (e.ama_t = "adsense"),
            e);
          break a;
        }
      a = {};
    }
    Cn(a, b);
    Cn(Lg() ? { bust: Lg() } : {}, b);
    return cc(d, b);
  }
  function Cn(a, b) {
    Dc(a, function (c, d) {
      void 0 === b[d] && (b[d] = c);
    });
  }
  function Bn() {
    if (K.google_ad_client) return K.google_ad_client;
    var a = N(K).head_tag_slot_vars;
    if (a && a.google_ad_client) return a.google_ad_client;
    if ((a = K.document.querySelector(".adsbygoogle[data-ad-client]")))
      return a.getAttribute("data-ad-client");
    b: {
      a = K.document.getElementsByTagName("script");
      var b = (K.navigator && K.navigator.userAgent) || "";
      b =
        RegExp(
          "appbankapppuzdradb|daumapps|fban|fbios|fbav|fb_iab|gsa/|messengerforios|naver|niftyappmobile|nonavigation|pinterest|twitter|ucbrowser|yjnewsapp|youtube",
          "i"
        ).test(b) ||
        (/i(phone|pad|pod)/i.test(b) &&
          /applewebkit/i.test(b) &&
          !/version|safari/i.test(b) &&
          !jd())
          ? sm
          : tm;
      for (var c = a.length - 1; 0 <= c; c--) {
        var d = a[c];
        if (
          !d.google_parsed_script_for_pub_code &&
          ((d.google_parsed_script_for_pub_code = !0), (d = b(d)))
        ) {
          a = d;
          break b;
        }
      }
      a = null;
    }
    if (a) {
      b = /(google_\w+) *= *(['"]?[\w.-]+['"]?) *(?:;|$)/gm;
      for (c = {}; (d = b.exec(a)); ) c[d[1]] = um(d[2]);
      a = c.google_ad_client ? c.google_ad_client : "";
    } else a = "";
    return a ? a : "";
  }
  function Dn(a) {
    if (!Xc)
      a: {
        for (var b = [w.top], c = [], d = 0, e; (e = b[d++]); ) {
          c.push(e);
          try {
            if (e.frames)
              for (
                var f = e.frames.length, g = 0;
                g < f && 1024 > b.length;
                ++g
              )
                b.push(e.frames[g]);
          } catch (l) {}
        }
        for (b = 0; b < c.length; b++)
          try {
            var h = c[b].frames.google_esf;
            if (h) {
              Xc = h;
              break a;
            }
          } catch (l) {}
        Xc = null;
      }
    if (Xc) return null;
    c = oc(document, "IFRAME");
    c.id = "google_esf";
    c.name = "google_esf";
    a = a.Bb;
    if (a instanceof Vb) {
      var k;
      h = Yb(a);
      a = (null === (k = Sb()) || void 0 === k ? 0 : k.isScriptURL(h))
        ? TrustedScriptURL.prototype.toString.apply(h)
        : h;
    } else a = ec(a).toString();
    c.src = a;
    c.style.display = "none";
    return c;
  }
  function En(a, b, c, d) {
    Fn(a, b, c, d, function (e, f) {
      e = e.document;
      for (var g = void 0, h = 0; !g || e.getElementById(g + "_anchor"); )
        g = "aswift_" + h++;
      e = g;
      g = Number(f.google_ad_width || 0);
      f = Number(f.google_ad_height || 0);
      h = oc(document, "INS");
      h.id = e + "_anchor";
      ul(h, g, f);
      h.style.display = "block";
      var k = oc(document, "INS");
      k.id = e + "_expand";
      ul(k, g, f);
      k.style.display = "inline-table";
      k.appendChild(h);
      c.appendChild(k);
      return e;
    });
  }
  function Fn(a, b, c, d, e) {
    var f = e(a, b);
    Gn(a, c, b);
    c = Ha;
    e = new Date().getTime();
    b.google_lrv = I(d, 2);
    b.google_async_iframe_id = f;
    b.google_start_time = c;
    b.google_bpp = e > c ? e - c : 1;
    a.google_sv_map = a.google_sv_map || {};
    a.google_sv_map[f] = b;
    b.dninfo = b.google_loader_used;
    d = !!a.document.getElementById(f + "_anchor");
    c = S(bg)
      ? d
        ? function (h) {
            return h();
          }
        : function (h) {
            return window.setTimeout(h, 0);
          }
      : d
      ? Bm
      : Cm;
    b.dninfo += "_" + d;
    var g = { pubWin: a, iframeWin: null, vars: b };
    An(
      a,
      function () {
        var h = !!a.document.getElementById(f + "_anchor");
        b.dninfo += "_" + h;
        (h = a.google_sa_impl(g)) && h.catch && h.catch(be(911));
      },
      c
    );
  }
  function Gn(a, b, c) {
    var d = c.google_ad_output,
      e = c.google_ad_format,
      f = c.google_ad_width || 0,
      g = c.google_ad_height || 0;
    e || ("html" != d && null != d) || (e = f + "x" + g);
    d =
      !c.google_ad_slot ||
      c.google_override_format ||
      (!Yc[c.google_ad_width + "x" + c.google_ad_height] &&
        "aa" == c.google_loader_used);
    e && d ? (e = e.toLowerCase()) : (e = "");
    c.google_ad_format = e;
    if (
      "number" !== typeof c.google_reactive_sra_index ||
      !c.google_ad_unit_key
    ) {
      e = [
        c.google_ad_slot,
        c.google_orig_ad_format || c.google_ad_format,
        c.google_ad_type,
        c.google_orig_ad_width || c.google_ad_width,
        c.google_orig_ad_height || c.google_ad_height,
      ];
      d = [];
      f = 0;
      for (g = b; g && 25 > f; g = g.parentNode, ++f)
        9 === g.nodeType ? d.push("") : d.push(g.id);
      (d = d.join()) && e.push(d);
      c.google_ad_unit_key = Ec(e.join(":")).toString();
      var h = void 0 === h ? !1 : h;
      e = [];
      for (d = 0; b && 25 > d; ++d) {
        f = "";
        (void 0 !== h && h) ||
          (f = (f = 9 !== b.nodeType && b.id) ? "/" + f : "");
        a: {
          if (b && b.nodeName && b.parentElement) {
            g = b.nodeName.toString().toLowerCase();
            for (
              var k = b.parentElement.childNodes, l = 0, m = 0;
              m < k.length;
              ++m
            ) {
              var r = k[m];
              if (r.nodeName && r.nodeName.toString().toLowerCase() === g) {
                if (b === r) {
                  g = "." + l;
                  break a;
                }
                ++l;
              }
            }
          }
          g = "";
        }
        e.push((b.nodeName && b.nodeName.toString().toLowerCase()) + f + g);
        b = b.parentElement;
      }
      h = e.join() + ":";
      b = [];
      if (a)
        try {
          var u = a.parent;
          for (e = 0; u && u !== a && 25 > e; ++e) {
            var x = u.frames;
            for (d = 0; d < x.length; ++d)
              if (a === x[d]) {
                b.push(d);
                break;
              }
            a = u;
            u = a.parent;
          }
        } catch (E) {}
      c.google_ad_dom_fingerprint = Ec(h + b.join()).toString();
    }
  }
  function Hn() {
    var a = kd(w);
    a &&
      ((a = zd(a)),
      a.tagSpecificState[1] ||
        (a.tagSpecificState[1] = { debugCard: null, debugCardRequested: !1 }));
  }
  function In(a) {
    mn();
    (S(Ag) && nn(Hg(), I(a, 8))) ||
      $d(779, function () {
        var b = new kn(null, !0);
        0 < Kg(Fg) ? (K.google_trust_token_operation_promise = tn(b)) : tn(b);
      })();
    a = vn();
    null != a &&
      a.then(function (b) {
        K.google_user_agent_client_hint = Gb(b);
      });
    Im();
    Gm();
  }
  function Jn(a, b) {
    switch (a) {
      case "google_reactive_ad_format":
        return (a = parseInt(b, 10)), isNaN(a) ? 0 : a;
      case "google_allow_expandable_ads":
        return /^true$/.test(b);
      default:
        return b;
    }
  }
  function Kn(a, b) {
    if (a.getAttribute("src")) {
      var c = a.getAttribute("src") || "";
      var d = c.search(tc),
        e;
      b: {
        for (e = 0; 0 <= (e = c.indexOf("client", e)) && e < d; ) {
          var f = c.charCodeAt(e - 1);
          if (38 == f || 63 == f)
            if (
              ((f = c.charCodeAt(e + 6)), !f || 61 == f || 38 == f || 35 == f)
            )
              break b;
          e += 7;
        }
        e = -1;
      }
      if (0 > e) c = null;
      else {
        f = c.indexOf("&", e);
        if (0 > f || f > d) f = d;
        e += 7;
        c = decodeURIComponent(c.substr(e, f - e).replace(/\+/g, " "));
      }
      c && (b.google_ad_client = Jn("google_ad_client", c));
    }
    a = a.attributes;
    c = a.length;
    for (d = 0; d < c; d++)
      (f = a[d]),
        /data-/.test(f.name) &&
          ((e = Ja(
            f.name
              .replace("data-matched-content", "google_content_recommendation")
              .replace("data", "google")
              .replace(/-/g, "_")
          )),
          b.hasOwnProperty(e) ||
            ((f = Jn(e, f.value)), null !== f && (b[e] = f)));
  }
  function Ln(a) {
    if ((a = $c(a)))
      switch (a.data && a.data.autoFormat) {
        case "rspv":
          return 13;
        case "mcrspv":
          return 15;
        default:
          return 14;
      }
    else return 12;
  }
  function Mn(a, b, c, d) {
    Kn(a, b);
    if (
      c.document &&
      c.document.body &&
      !bm(c, b) &&
      !b.google_reactive_ad_format
    ) {
      var e = parseInt(a.style.width, 10),
        f = fm(a, c);
      if (0 < f && e > f) {
        var g = parseInt(a.style.height, 10);
        e = !!Yc[e + "x" + g];
        var h = f;
        if (e) {
          var k = Zc(f, g);
          if (k) (h = k), (b.google_ad_format = k + "x" + g + "_0ads_al");
          else throw new M("No slot size for availableWidth=" + f);
        }
        b.google_ad_resize = !0;
        b.google_ad_width = h;
        e || ((b.google_ad_format = null), (b.google_override_format = !0));
        f = h;
        a.style.width = f + "px";
        g = Wl(f, "auto", c, a, b);
        h = f;
        g.size().i(c, b, a);
        yl(g, h, b);
        g = g.size();
        b.google_responsive_formats = null;
        g.minWidth() > f &&
          !e &&
          ((b.google_ad_width = g.minWidth()),
          (a.style.width = g.minWidth() + "px"));
      }
    }
    e = a.offsetWidth || Xj(a, c, "width", J) || b.google_ad_width || 0;
    f = Ea(Wl, e, "auto", c, a, b, !1, !0);
    if (S(ag)) d = !1;
    else {
      g = kd(c) || c;
      h = b.google_ad_client;
      d =
        g.location && "#ftptohbh" === g.location.hash
          ? 2
          : Ne(g.location, "google_responsive_slot_preview") || S(hg)
          ? 1
          : S(fg)
          ? 2
          : Mg(g, 1, h, d)
          ? 1
          : 0;
      if ((g = 0 !== d))
        b: if (
          !(488 > L(c) || S(gg)) ||
          b.google_reactive_ad_format ||
          bm(c, b) ||
          Nj(a, b)
        )
          g = !1;
        else {
          for (g = a; g; g = g.parentElement) {
            h = wc(g, c);
            if (!h) {
              b.gfwrnwer = 18;
              g = !1;
              break b;
            }
            if (!Sa(["static", "relative"], h.position)) {
              b.gfwrnwer = 17;
              g = !1;
              break b;
            }
          }
          if (!S(gg) && ((g = Rj(c, a, e, 0.3, b)), !0 !== g)) {
            b.gfwrnwer = g;
            g = !1;
            break b;
          }
          g = c.top == c ? !0 : !1;
        }
      g
        ? ((b.google_resizing_allowed = !0),
          (b.ovlp = !0),
          2 === d
            ? ((d = {}),
              yl(f(), e, d),
              (b.google_resizing_width = d.google_ad_width),
              (b.google_resizing_height = d.google_ad_height),
              (b.iaaso = !1))
            : ((b.google_ad_format = "auto"), (b.iaaso = !0), (b.armr = 1)),
          (d = !0))
        : (d = !1);
    }
    if ((e = bm(c, b))) dm(e, a, b, c, d);
    else {
      if (Nj(a, b)) {
        if ((d = wc(a, c)))
          (a.style.width = d.width), (a.style.height = d.height), Mj(d, b);
        b.google_ad_width || (b.google_ad_width = a.offsetWidth);
        b.google_ad_height || (b.google_ad_height = a.offsetHeight);
        b.google_loader_features_used = 256;
        b.google_responsive_auto_format = Ln(c);
      } else Mj(a.style, b);
      (c.location && "#gfwmrp" == c.location.hash) ||
      (12 == b.google_responsive_auto_format &&
        "true" == b.google_full_width_responsive)
        ? dm(10, a, b, c, !1)
        : 0.01 > Math.random() &&
          12 === b.google_responsive_auto_format &&
          ((a = Sj(
            a.offsetWidth || parseInt(a.style.width, 10) || b.google_ad_width,
            c,
            a,
            b
          )),
          !0 !== a ? ((b.efwr = !1), (b.gfwrnwer = a)) : (b.efwr = !0));
    }
  }
  function Nn(a, b) {
    b = void 0 === b ? 500 : b;
    P.call(this);
    this.i = a;
    this.Va = b;
    this.h = null;
    this.m = {};
    this.l = null;
  }
  v(Nn, P);
  Nn.prototype.j = function () {
    this.m = {};
    this.l && (mc(this.i, "message", this.l), delete this.l);
    delete this.m;
    delete this.i;
    delete this.h;
    P.prototype.j.call(this);
  };
  function On(a) {
    P.call(this);
    this.i = a;
    this.h = null;
    this.l = !1;
  }
  v(On, P);
  var Pn = null,
    Qn = [],
    Rn = new p.Map(),
    Sn = -1;
  function Tn(a) {
    return id.test(a.className) && "done" != a.dataset.adsbygoogleStatus;
  }
  function Un(a, b, c) {
    a.dataset.adsbygoogleStatus = "done";
    Vn(a, b, c);
  }
  function Vn(a, b, c) {
    var d = window,
      e = hd();
    e.google_spfd || (e.google_spfd = Mn);
    (e = b.google_reactive_ads_config) || Mn(a, b, d, c);
    wn(d, b);
    if (!Wn(a, b, d)) {
      e || (d.google_lpabyc = Oj(a, d) + Xj(a, d, "height", J));
      if (e) {
        e = e.page_level_pubvars || {};
        if (
          N(K).page_contains_reactive_tag &&
          !N(K).allow_second_reactive_tag
        ) {
          if (e.pltais) {
            Le(!1);
            return;
          }
          throw new M("Only one 'enable_page_level_ads' allowed per page.");
        }
        N(K).page_contains_reactive_tag = !0;
        Le(7 === e.google_pgb_reactive);
      }
      b.google_unique_id = dd(d);
      bd(rm, function (f, g) {
        b[g] = b[g] || d[g];
      });
      b.google_loader_used = "aa";
      b.google_reactive_tag_first = 1 === (N(K).first_tag_on_page || 0);
      Zd(164, function () {
        En(d, b, a, c);
      });
    }
  }
  function Wn(a, b, c) {
    var d = b.google_reactive_ads_config,
      e =
        "string" === typeof a.className &&
        RegExp("(\\W|^)adsbygoogle-noablate(\\W|$)").test(a.className),
      f = Ie(c);
    if (f && f.Fa && "on" != b.google_adtest && !e) {
      e = Oj(a, c);
      var g = Ad(c).clientHeight;
      if (!f.pa || (f.pa && ((0 == g ? null : e / g) || 0) >= f.pa))
        return (
          (a.className += " adsbygoogle-ablated-ad-slot"),
          (c = c.google_sv_map = c.google_sv_map || {}),
          (d = ya(a)),
          (b.google_element_uid = d),
          (c[b.google_element_uid] = b),
          a.setAttribute("google_element_uid", d),
          "slot" == f.wb &&
            (null !== Kc(a.getAttribute("width")) && a.setAttribute("width", 0),
            null !== Kc(a.getAttribute("height")) &&
              a.setAttribute("height", 0),
            (a.style.width = "0px"),
            (a.style.height = "0px")),
          !0
        );
    }
    if (
      (f = wc(a, c)) &&
      "none" == f.display &&
      !("on" == b.google_adtest || 0 < b.google_reactive_ad_format || d)
    )
      return (
        c.document.createComment &&
          a.appendChild(
            c.document.createComment(
              "No ad requested because of display:none on the adsbygoogle tag"
            )
          ),
        !0
      );
    a = null == b.google_pgb_reactive || 3 === b.google_pgb_reactive;
    return (1 !== b.google_reactive_ad_format &&
      8 !== b.google_reactive_ad_format) ||
      !a
      ? !1
      : (w.console &&
          w.console.warn(
            "Adsbygoogle tag with data-reactive-ad-format=" +
              b.google_reactive_ad_format +
              " is deprecated. Check out page-level ads at https://www.google.com/adsense"
          ),
        !0);
  }
  function Xn(a) {
    var b = document.getElementsByTagName("INS");
    for (var c = 0, d = b[c]; c < b.length; d = b[++c]) {
      var e = d;
      if (
        Tn(e) &&
        "reserved" != e.dataset.adsbygoogleStatus &&
        (!a || d.id == a)
      )
        return d;
    }
    return null;
  }
  function Yn(a, b, c) {
    if (a && a.shift)
      for (var d = 20; 0 < a.length && 0 < d; ) {
        try {
          Zn(a.shift(), b, c);
        } catch (e) {
          setTimeout(function () {
            throw e;
          });
        }
        --d;
      }
  }
  function $n() {
    var a = oc(document, "INS");
    a.className = "adsbygoogle";
    a.className += " adsbygoogle-noablate";
    Nc(a);
    return a;
  }
  function ao(a, b) {
    var c = {};
    bd(wd, function (f, g) {
      !1 === a.enable_page_level_ads
        ? (c[g] = !1)
        : a.hasOwnProperty(g) && (c[g] = a[g]);
    });
    xa(a.enable_page_level_ads) &&
      (c.page_level_pubvars = a.enable_page_level_ads);
    var d = $n();
    Tc.body.appendChild(d);
    var e = {};
    e =
      ((e.google_reactive_ads_config = c),
      (e.google_ad_client = a.google_ad_client),
      e);
    e.google_pause_ad_requests = !!N(K).pause_ad_requests;
    Un(d, e, b);
  }
  function bo(a, b) {
    function c() {
      return ao(a, b);
    }
    zd(w).wasPlaTagProcessed = !0;
    var d = w.document;
    if (d.body || "complete" == d.readyState || "interactive" == d.readyState)
      c();
    else {
      var e = kc($d(191, c));
      lc(d, "DOMContentLoaded", e);
      new w.MutationObserver(function (f, g) {
        d.body && (e(), g.disconnect());
      }).observe(d, { childList: !0, subtree: !0 });
    }
  }
  function Zn(a, b, c) {
    var d = {};
    Zd(
      165,
      function () {
        co(a, d, b, c);
      },
      function (e) {
        e.client = e.client || d.google_ad_client || a.google_ad_client;
        e.slotname = e.slotname || d.google_ad_slot;
        e.tag_origin = e.tag_origin || d.google_tag_origin;
      }
    );
  }
  function eo(a) {
    delete a.google_checked_head;
    Dc(a, function (b, c) {
      Me[c] ||
        (delete a[c],
        w.console.warn(
          "AdSense head tag doesn't support " +
            c.replace("google", "data").replace(/_/g, "-") +
            " attribute."
        ));
    });
  }
  function fo(a, b) {
    var c =
      K.document.querySelector(
        'script[src*="/pagead/js/adsbygoogle.js?client="]:not([data-checked-head])'
      ) ||
      K.document.querySelector(
        'script[src*="/pagead/js/adsbygoogle.js"][data-ad-client]:not([data-checked-head])'
      );
    if (c) {
      c.setAttribute("data-checked-head", "true");
      var d = N(window);
      if (d.head_tag_slot_vars)
        throw new M(
          "Only one AdSense head tag supported per page. The second tag is ignored."
        );
      var e = {};
      Kn(c, e);
      eo(e);
      var f = $a(e);
      d.head_tag_slot_vars = f;
      c = { google_ad_client: e.google_ad_client, enable_page_level_ads: e };
      K.adsbygoogle || (K.adsbygoogle = []);
      d = K.adsbygoogle;
      d.loaded ? d.push(c) : d.splice(0, 0, c);
      var g;
      e.google_adbreak_test ||
      ((null == (g = Kb(b, ke, 13, He)) ? 0 : xb(g, 3)) && S(lg))
        ? go(f, a)
        : od(function () {
            go(f, a);
          });
    }
  }
  function ho(a) {
    if ("object" === typeof a && null != a) {
      if ("string" === typeof a.type) return 2;
      if ("string" === typeof a.sound || "string" === typeof a.preloadAdBreaks)
        return 3;
    }
    return 0;
  }
  function co(a, b, c, d) {
    if (null == a) throw new M("push() called with no parameters.");
    io(a, I(d, 7), I(d, 2));
    var e = ho(a);
    if (0 !== e)
      null == Pn
        ? (jo(a), Qn.push(a))
        : 3 === e
        ? Zd(787, function () {
            Pn.handleAdConfig(a);
          })
        : Pn.handleAdBreak(a).catch(be(730));
    else {
      Ha = new Date().getTime();
      xn(c, d, ko(a));
      lo();
      a: {
        if (void 0 != a.enable_page_level_ads) {
          if ("string" === typeof a.google_ad_client) {
            c = !0;
            break a;
          }
          throw new M("'google_ad_client' is missing from the tag config.");
        }
        c = !1;
      }
      if (c) mo(a, d, b);
      else if (
        ((c = a.params) &&
          bd(c, function (g, h) {
            b[h] = g;
          }),
        "js" === b.google_ad_output)
      )
        console.warn(
          "Ads with google_ad_output='js' have been deprecated and no longer work. Contact your AdSense account manager or switch to standard AdSense ads."
        );
      else {
        c = no(a.element);
        Kn(c, b);
        e = N(w).head_tag_slot_vars || {};
        Dc(e, function (g, h) {
          b.hasOwnProperty(h) || (b[h] = g);
        });
        if (c.hasAttribute("data-require-head") && !N(w).head_tag_slot_vars)
          throw new M(
            "AdSense head tag is missing. AdSense body tags don't work without the head tag. You can copy the head tag from your account on https://adsense.com."
          );
        if (!b.google_ad_client)
          throw new M("Ad client is missing from the slot.");
        b.google_apsail = Rg(b.google_ad_client);
        var f = (e = 0 === (N(K).first_tag_on_page || 0) && nl(b)) && ol(e);
        e && !f && (mo(e, d), (N(K).skip_next_reactive_tag = !0));
        0 === (N(K).first_tag_on_page || 0) && (N(K).first_tag_on_page = 2);
        b.google_pause_ad_requests = !!N(K).pause_ad_requests;
        Un(c, b, d);
        e && f && oo(e);
      }
    }
  }
  var po = !1;
  function io(a, b, c) {
    S(cg) &&
      !po &&
      ((po = !0),
      (a = ko(a)) || (a = Bn()),
      ae("predictive_abg", { a_c: a, p_c: b, b_v: c }, 1));
  }
  function ko(a) {
    return a.google_ad_client
      ? a.google_ad_client
      : (a = a.params) && a.google_ad_client
      ? a.google_ad_client
      : "";
  }
  function lo() {
    if (S(Wf)) {
      var a = Ie(K);
      if (!(a = a && a.Fa)) {
        try {
          var b = K.localStorage;
        } catch (c) {
          b = null;
        }
        b = b ? Hk(b) : null;
        a = !(b && cl(b) && b);
      }
      a || Ke(K, 1);
    }
  }
  function oo(a) {
    Sc(function () {
      zd(w).wasPlaTagProcessed || (w.adsbygoogle && w.adsbygoogle.push(a));
    });
  }
  function mo(a, b, c) {
    N(K).skip_next_reactive_tag
      ? (N(K).skip_next_reactive_tag = !1)
      : (0 === (N(K).first_tag_on_page || 0) && (N(K).first_tag_on_page = 1),
        c && a.tag_partner && (Je(w, a.tag_partner), Je(c, a.tag_partner)),
        (c = xb(b, 6)),
        N(K).ama_ran_on_page || ql(new pl(a, c)),
        bo(a, b));
  }
  function no(a) {
    if (a) {
      if (!Tn(a) && (a.id ? (a = Xn(a.id)) : (a = null), !a))
        throw new M("'element' has already been filled.");
      if (!("innerHTML" in a))
        throw new M("'element' is not a good DOM element.");
    } else if (((a = Xn()), !a))
      throw new M(
        "All ins elements in the DOM with class=adsbygoogle already have ads in them."
      );
    return a;
  }
  function qo() {
    var a = new wf(K),
      b = new Nn(K),
      c = new On(K),
      d = K.__cmp ? 1 : 0;
    a = xf(a) ? 1 : 0;
    var e, f;
    (f =
      "function" ===
      typeof (null === (e = b.i) || void 0 === e ? void 0 : e.__uspapi)) ||
      (b.h ? (b = b.h) : ((b.h = Lc(b.i, "__uspapiLocator")), (b = b.h)),
      (f = null != b));
    c.l ||
      (c.h || (c.i.googlefc ? (c.h = c.i) : (c.h = Lc(c.i, "googlefcPresent"))),
      (c.l = !0));
    ae(
      "cmpMet",
      { tcfv1: d, tcfv2: a, usp: f ? 1 : 0, fc: c.h ? 1 : 0, ptt: 9 },
      Kg(Rf)
    );
  }
  function ro(a) {
    mf().S[of(26)] = !!Number(a);
  }
  function so(a) {
    Number(a)
      ? (N(K).pause_ad_requests = !0)
      : ((N(K).pause_ad_requests = !1),
        (a = function () {
          if (!N(K).pause_ad_requests) {
            var b = hd(),
              c = hd();
            try {
              if (Tc.createEvent) {
                var d = Tc.createEvent("CustomEvent");
                d.initCustomEvent(
                  "adsbygoogle-pub-unpause-ad-requests-event",
                  !1,
                  !1,
                  ""
                );
                b.dispatchEvent(d);
              } else if (cd(c.CustomEvent)) {
                var e = new c.CustomEvent(
                  "adsbygoogle-pub-unpause-ad-requests-event",
                  { bubbles: !1, cancelable: !1, detail: "" }
                );
                b.dispatchEvent(e);
              } else if (cd(c.Event)) {
                var f = new Event("adsbygoogle-pub-unpause-ad-requests-event", {
                  bubbles: !1,
                  cancelable: !1,
                });
                b.dispatchEvent(f);
              }
            } catch (g) {}
          }
        }),
        w.setTimeout(a, 0),
        w.setTimeout(a, 1e3));
  }
  function to(a) {
    ae("adsenseGfpKnob", { value: a, ptt: 9 }, 0.1);
    switch (a) {
      case 0:
      case 2:
        a = !0;
        break;
      case 1:
        a = !1;
        break;
      default:
        throw Error("Illegal value of cookieOptions: " + a);
    }
    K._gfp_a_ = a;
  }
  function uo(a) {
    cd(a) && window.setTimeout(a, 0);
  }
  function go(a, b) {
    ((aa = kl(cc(fc(hc(b.vb).toString()), Lg() ? { bust: Lg() } : {}))
      .then(function (c) {
        null == Pn && (c.init(a), (Pn = c), vo());
      })
      .catch(be(723))),
    q(aa, "finally")).call(aa, function () {
      Qn.length = 0;
      ae("slotcar", {
        event: "api_ld",
        time: Date.now() - Ha,
        time_pr: Date.now() - Sn,
      });
    });
  }
  function vo() {
    for (
      var a = t(q(Rn, "keys").call(Rn)), b = a.next();
      !b.done;
      b = a.next()
    ) {
      b = b.value;
      var c = Rn.get(b);
      -1 !== c && (w.clearTimeout(c), Rn.delete(b));
    }
    a = {};
    for (b = 0; b < Qn.length; a = { da: a.da, Z: a.Z }, b++)
      Rn.has(b) ||
        ((a.Z = Qn[b]),
        (a.da = ho(a.Z)),
        Zd(
          723,
          (function (d) {
            return function () {
              3 === d.da
                ? Pn.handleAdConfig(d.Z)
                : 2 === d.da && Pn.handleAdBreakBeforeReady(d.Z).catch(be(730));
            };
          })(a)
        ));
  }
  function jo(a) {
    var b = Qn.length;
    if (2 === ho(a) && "preroll" === a.type && null != a.adBreakDone) {
      -1 === Sn && (Sn = Date.now());
      var c = w.setTimeout(function () {
        try {
          (0, a.adBreakDone)({
            breakType: "preroll",
            breakName: a.name,
            breakFormat: "preroll",
            breakStatus: "timeout",
          }),
            Rn.set(b, -1),
            ae("slotcar", { event: "pr_to", source: "adsbygoogle" });
        } catch (d) {
          console.error(
            "[Ad Placement API] adBreakDone callback threw an error:",
            d instanceof Error ? d : Error(String(d))
          );
        }
      }, 1e3 * Kg(mg));
      Rn.set(b, c);
    }
  }
  (function (a, b, c, d) {
    d = void 0 === d ? function () {} : d;
    Vd.Ta(ce);
    Zd(166, function () {
      var e = Em(b);
      Ri(I(e, 2));
      Ig(xb(e, 6));
      d();
      nd(16, [1, e.toJSON()]);
      var f = ad($c(K)) || K,
        g = c(pm({ eb: a, rb: I(e, 2) }), e);
      Qi(f, e, null === K.document.currentScript ? 1 : Xg(g.Ab));
      if (
        (!ab() || 0 <= Ka(cb(), 11)) &&
        (null == (K.Prototype || {}).Version || !S(Zf))
      ) {
        Wd(S(sg));
        In(e);
        Tk();
        try {
          Ym();
        } catch (r) {}
        Hn();
        fo(g, e);
        f = window;
        var h = f.adsbygoogle;
        if (!h || !h.loaded) {
          if (S(Xf) && !xb(e, 16))
            try {
              if (
                K.document.querySelector(
                  'script[src*="/pagead/js/adsbygoogle.js?client="]'
                )
              )
                return;
            } catch (r) {}
          if (S(eg)) {
            var k = { value: xb(e, 16) },
              l = 0.01;
            Kg(Yf) && ((k.eid = Kg(Yf)), (l = 1));
            k.frequency = l;
            ae("new_abg_tag", k, l);
          }
          Kg(Rf) && qo();
          k = {
            push: function (r) {
              Zn(r, g, e);
            },
            loaded: !0,
          };
          try {
            Object.defineProperty(k, "requestNonPersonalizedAds", { set: ro }),
              Object.defineProperty(k, "pauseAdRequests", { set: so }),
              Object.defineProperty(k, "cookieOptions", { set: to }),
              Object.defineProperty(k, "onload", { set: uo });
          } catch (r) {}
          if (h) {
            l = t([
              "requestNonPersonalizedAds",
              "pauseAdRequests",
              "cookieOptions",
            ]);
            for (var m = l.next(); !m.done; m = l.next())
              (m = m.value), void 0 !== h[m] && (k[m] = h[m]);
          }
          "_gfp_a_" in window || (window._gfp_a_ = !0);
          Yn(h, g, e);
          f.adsbygoogle = k;
          h && (k.onload = h.onload);
          (f = Dn(g)) && document.documentElement.appendChild(f);
        }
      }
    });
  })("m202110050101", Dm, function (a, b) {
    var c = 2012 < D(b, 1, 0) ? "_fy" + D(b, 1, 0) : "",
      d = I(b, 3).replace(/^\//, "");
    b = I(b, 2);
    var e = a ? Zb(gm, a, c) : Zb(hm, b, d, c),
      f = Zb(im, b, d);
    return {
      vb: e,
      ub: a ? Zb(jm, a, c) : Zb(km, b, d, c),
      sb: a ? Zb(lm, a, c) : Zb(mm, b, d, c),
      tb: a ? Zb(nm, a, c) : Zb(om, b, d, c),
      Bb: f,
      Ab: /^(?:https?:)?\/\/(?:pagead2\.googlesyndication\.com|securepubads\.g\.doubleclick\.net)\/pagead\/(?:js\/)?(?:show_ads|adsbygoogle)\.js(?:[?#].*)?$/,
    };
  });
}.call(
  this,
  '[2012,"r20211007","r20190131",null,[],null,null,".google.co.id",null,null,[],[[[null,62,null,[null,0.001]],[383,null,null,[1]],[1094,null,null,[1]],[null,1010,null,[null,1]],[null,1017,null,[null,-1]],[1021,null,null,[1]],[null,66,null,[null,-1]],[null,65,null,[null,-1]],[1064,null,null,[1]],[null,1041,null,[null,50]],[1042,null,null,[1]],[1040,null,null,[1]],[1097,null,null,[1]],[1092,null,null,[1]],[205,null,null,[1]],[null,29,null,[null,2]],[null,30,null,[null,3]],[null,1056,null,[null,3000]],[null,1057,null,[null,650]],[1036,null,null,[1]],[1051,null,null,[1]],[325,null,null,[1]],[1007,null,null,[1]],[null,1008,null,[null,2]],[null,1085,null,[null,5]],[null,63,null,[null,30]],[null,1080,null,[null,5]],[1055,null,null,[1]],[1054,null,null,[1]],[null,1027,null,[null,10]],[null,57,null,[null,120]],[null,1079,null,[null,5]],[null,1050,null,[null,30]],[null,58,null,[null,120]],[null,64,null,[null,300]],[1074,null,null,[1]],[1059,null,null,[1]],[230,null,null,[1]],[1088,null,null,[1]],[1931,null,null,[1]],[null,null,null,[null,null,null,["A/OOU4XAFfeAV4kM4+W9WBwNAHqq/bvtrRcJ1wpnNyO/i076BSUy1d14l2kBEgVmEuvxojSpD23172C6hBg2AQYAAACWeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjM0MDgzMTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlLCJ1c2FnZSI6InN1YnNldCJ9","AwrB+XVH/KV6HfZNVtSEqlUJi3yUbtCp0/TJRj+38NDIw19/9P1h7ECTtdLdhIzG0Bsl4n/0rVmttJtGUCcewgAAAACceyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjM0MDgzMTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlLCJ1c2FnZSI6InN1YnNldCJ9","Ax15QOERqai2A5XWrDY38Eg07xh2T0pkhpDPJuDlxr7D2Ka8wHvklgK7tTPZOnT+8H31lwHto5JpvYV8jRn1WgIAAACceyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjM0MDgzMTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlLCJ1c2FnZSI6InN1YnNldCJ9"]],null,1934],[377431981,null,null,[1]],[1903,null,null,[1]],[1940,null,null,[1]],[1950,null,null,[1]],[1938,null,null,[1]],[null,1929,null,[null,50]],[null,null,null,[null,null,null,["AxujKG9INjsZ8/gUq8+dTruNvk7RjZQ1oFhhgQbcTJKDnZfbzSTE81wvC2Hzaf3TW4avA76LTZEMdiedF1vIbA4AAABueyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=","Azuce85ORtSnWe1MZDTv68qpaW3iHyfL9YbLRy0cwcCZwVnePnOmkUJlG8HGikmOwhZU22dElCcfrfX2HhrBPAkAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9","A16nvcdeoOAqrJcmjLRpl1I6f3McDD8EfofAYTt/P/H4/AWwB99nxiPp6kA0fXoiZav908Z8etuL16laFPUdfQsAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9","AxBHdr0J44vFBQtZUqX9sjiqf5yWZ/OcHRcRMN3H9TH+t90V/j3ENW6C8+igBZFXMJ7G3Pr8Dd13632aLng42wgAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9","A88BWHFjcawUfKU3lIejLoryXoyjooBXLgWmGh+hNcqMK44cugvsI5YZbNarYvi3roc1fYbHA1AVbhAtuHZflgEAAAB2eyJvcmlnaW4iOiJodHRwczovL2dvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IlRydXN0VG9rZW5zIiwiZXhwaXJ5IjoxNjUyNzc0NDAwLCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="]],null,1932],[396382471,null,null,[1]]],[[10,[[1,[[31063007,[[null,1098,null,[null,31063007]]],[1,[[12,null,null,null,2,null,"\\\\.wiki(dogs|how)(-fun)?\\\\."]]]],[31063008,[[1093,null,null,[1]],[null,1098,null,[null,31063008]]],[1,[[12,null,null,null,2,null,"\\\\.wiki(dogs|how)(-fun)?\\\\."]]]]]],[1000,[[31063046,[[1084,null,null,[1]],[1082,null,null,[1]]],[4,null,6,null,null,null,null,["31063044"]]],[31063047,[[1084,null,null,[1]],[1082,null,null,[1]]],[4,null,6,null,null,null,null,["31063045"]]]]],[1,[[21066108],[21066109,[[316,null,null,[1]]]]],null,null,null,34,18,1],[1,[[21066110],[21066111,[[316,null,null,[1]]]]],null,null,null,34,18,1],[1,[[42530528],[42530529,[[368,null,null,[1]]]],[42530530,[[369,null,null,[1]],[368,null,null,[1]]]]]],[1,[[42530887,[[290,null,null,[1]]]],[42530888,[[290,null,null,[1]]]],[42530889,[[290,null,null,[1]]]],[42530890,[[290,null,null,[1]]]],[42530891,[[290,null,null,[1]]]],[42530892,[[290,null,null,[1]]]],[42530893,[[290,null,null,[1]]]],[44750676,[[null,1072,null,[null,0.5]],[290,null,null,[1]]]],[44750677,[[null,1072,null,[null,0.75]],[290,null,null,[1]]]],[44750678,[[null,1072,null,[null,0.9]],[290,null,null,[1]]]]],null,null,null,53],[1,[[42531329],[42531330,[[1091,null,null,[1]]]]]],[1,[[44719338],[44719339,[[334,null,null,[1]],[null,54,null,[null,100]],[null,66,null,[null,10]],[null,65,null,[null,1000]]]]]],[1,[[44750099],[44750100,[[null,1072,null,[null,0.75]]]],[44750101,[[null,1072,null,[null,0.75]]]]],null,null,null,53,null,100],[1,[[44750102],[44750103,[[null,1072,null,[null,0.75]]]],[44750104,[[null,1072,null,[null,0.75]]]]],null,null,null,53,null,120],[1,[[44750105],[44750106,[[null,1072,null,[null,0.75]]]],[44750107,[[null,1072,null,[null,0.75]]]]],null,null,null,53,null,140],[50,[[44750344],[44750345,[[1089,null,null,[1]]]]]],[1,[[44750773],[44750774,[[1087,null,null,[1]]]]],null,null,null,57],[10,[[44750884],[44750885],[44750886]]],[10,[[44750572],[44750573,[[1033,null,null,[1]]]],[44750574,[[1033,null,null,[1]]]],[44750575,[[1033,null,null,[1]]]],[44750576,[[1033,null,null,[1]]]],[44750577,[[1033,null,null,[1]]]]]],[50,[[44751036],[44751037,[[1090,null,null,[1]]]]]],[1,[[44752093],[44752094,[[1084,null,null,[1]],[1082,null,null,[1]]]]]],[20,[[182982000,[[218,null,null,[1]]],[1,[[12,null,null,null,2,null,"\\\\.wiki(dogs|how)(-fun)?\\\\."]]]],[182982100,[[217,null,null,[1]]],[1,[[12,null,null,null,2,null,"\\\\.wiki(dogs|how)(-fun)?\\\\."]]]]],null,null,null,36,8,1],[20,[[182982200,null,[1,[[12,null,null,null,2,null,"\\\\.wiki(dogs|how)(-fun)?\\\\."]]]],[182982300,null,[1,[[12,null,null,null,2,null,"\\\\.wiki(dogs|how)(-fun)?\\\\."]]]]],null,null,null,36,8,1],[10,[[182984000,null,[4,null,23,null,null,null,null,["1"]]],[182984100,[[218,null,null,[1]]],[4,null,23,null,null,null,null,["1"]]]],null,null,null,37,10,1],[10,[[182984200,null,[4,null,23,null,null,null,null,["1"]]],[182984300,null,[4,null,23,null,null,null,null,["1"]]]],null,null,null,37,10,1],[10,[[21066428],[21066429]]],[10,[[21066430],[21066431],[21066432],[21066433]],null,null,null,44,22],[10,[[21066434],[21066435]],null,null,null,44,null,500],[50,[[31062369],[31062370,[[380254521,null,null,[1]]]]],null,null,null,56],[50,[[31062422],[31062423,[[381914117,null,null,[1]]]]]],[100,[[31062937],[31062938,[[1095,null,null,[1]]]]]],[100,[[31062944],[31062945,[[1096,null,null,[1]]]]]],[1000,[[31063075,[[null,null,14,[null,null,"31063075"]]],[6,null,null,null,6,null,"31063075"]],[31063076,[[null,null,14,[null,null,"31063076"]]],[6,null,null,null,6,null,"31063076"]]],[4,null,55]],[1000,[[31063088,[[null,null,14,[null,null,"31063088"]]],[6,null,null,null,6,null,"31063088"]],[31063089,[[null,null,14,[null,null,"31063089"]]],[6,null,null,null,6,null,"31063089"]]],[4,null,55]],[1000,[[31063101,[[null,null,14,[null,null,"31063101"]]],[6,null,null,null,6,null,"31063101"]],[31063102,[[null,null,14,[null,null,"31063102"]]],[6,null,null,null,6,null,"31063102"]]],[4,null,55]],[1,[[44736076],[44736077,[[null,1046,null,[null,0.01]]]]]],[1000,[[44750599,null,[4,null,6,null,null,null,null,["44750686"]]],[44750600,[[1086,null,null,[1]]],[4,null,6,null,null,null,null,["44750687"]]]]],[null,[[44751428,[[null,1077,null,[null,44750690]]]],[44751429,[[null,1077,null,[null,44751427]]]],[44751430,[[null,1077,null,[null,44750691]]]],[44751431,[[null,1077,null,[null,44750692]]]],[44751432,[[null,1077,null,[null,44750693]]]],[44751433,[[null,1077,null,[null,44750694]]]],[44751434,[[null,1077,null,[null,44750695]]]]]],[1,[[44751877,[[null,1077,null,[null,44751874]]]],[44751878,[[null,1077,null,[null,44751875]]]],[44751879,[[null,1077,null,[null,44751876]]]]]],[1,[[44752103],[44752104]]],[100,[[31061760],[31061761,[[null,1032,null,[null,200],[[[12,null,null,null,4,null,"Android",["navigator.userAgent"]],[null,500]]]]]]],[3,[[4,null,8,null,null,null,null,["gmaSdk.getQueryInfo"]],[4,null,8,null,null,null,null,["webkit.messageHandlers.getGmaQueryInfo.postMessage"]],[4,null,8,null,null,null,null,["webkit.messageHandlers.getGmaSig.postMessage"]]]]],[50,[[31062202,[[null,1032,null,[null,200],[[[12,null,null,null,4,null,"Android",["navigator.userAgent"]],[null,500]]]]]],[31062229]],[3,[[4,null,8,null,null,null,null,["gmaSdk.getQueryInfo"]],[4,null,8,null,null,null,null,["webkit.messageHandlers.getGmaQueryInfo.postMessage"]],[4,null,8,null,null,null,null,["webkit.messageHandlers.getGmaSig.postMessage"]]]]]]],[20,[[50,[[31062930],[31062931,[[380025941,null,null,[1]]]]],null,null,null,null,null,101,null,102],[50,[[31062948],[31062949,[[1950,null,null,[]]]]],null,null,null,null,null,null,null,108]]],[17,[[10,[[31060047]],null,null,null,44,null,900],[10,[[31060048],[31060049]],null,null,null,null,null,null,null,101],[10,[[31060566]]]]],[12,[[1,[[31061828],[31061829,[[null,1032,null,[null,200],[[[12,null,null,null,4,null,"Android",["navigator.userAgent"]],[null,500]]]],[null,360245595,null,[null,200],[[[12,null,null,null,4,null,"Android",["navigator.userAgent"]],[null,500]]]],[360245597,null,null,[1]],[null,494,null,[null,5000],[[[12,null,null,null,4,null,"Android",["navigator.userAgent"]],[null,5500]]]],[null,517,null,[null,1]]]]]],[20,[[21065724],[21065725,[[203,null,null,[1]]]]],[4,null,9,null,null,null,null,["LayoutShift"]]],[50,[[31060006,null,[2,[[12,null,null,null,4,null,"Android",["navigator.userAgent"]],[12,null,null,null,4,null,"Chrome/(89|9\\\\d|\\\\d{3,})",["navigator.userAgent"]],[4,null,9,null,null,null,null,["window.PeriodicSyncManager"]]]]],[31060007,[[1928,null,null,[1]]],[2,[[12,null,null,null,4,null,"Android",["navigator.userAgent"]],[12,null,null,null,4,null,"Chrome/(89|9\\\\d|\\\\d{3,})",["navigator.userAgent"]],[4,null,9,null,null,null,null,["window.PeriodicSyncManager"]]]]]]],[10,[[31060032],[31060033,[[1928,null,null,[1]]]]]],[10,[[31061690],[31061691,[[83,null,null,[1]],[84,null,null,[1]]]]]],[10,[[31062524],[31062525,[[null,360245595,null,[null,200]],[379841917,null,null,[1]],[null,397907552,null,[null,200]]]],[31062526,[[null,360245595,null,[null,500]],[379841917,null,null,[1]],[null,397907552,null,[null,500]]]]]],[1,[[31062646,null,[2,[[12,null,null,null,4,null,"Android",["navigator.userAgent"]],[12,null,null,null,4,null,"Chrome/(89|9\\\\d|\\\\d{3,})",["navigator.userAgent"]],[4,null,9,null,null,null,null,["window.PeriodicSyncManager"]]]]],[31062647,[[1928,null,null,[1]],[393546021,null,null,[1]]],[2,[[12,null,null,null,4,null,"Android",["navigator.userAgent"]],[12,null,null,null,4,null,"Chrome/(89|9\\\\d|\\\\d{3,})",["navigator.userAgent"]],[4,null,9,null,null,null,null,["window.PeriodicSyncManager"]]]]]]],[1,[[31062657],[31062658,[[1954,null,null,[1]]]]]],[10,[[31062662],[31062663,[[null,360245595,null,[null,200]],[379841917,null,null,[1]],[397079674,null,null,[1]],[null,397907552,null,[null,200]]]],[31062664,[[null,360245595,null,[null,500]],[379841917,null,null,[1]],[397079674,null,null,[1]],[null,397907552,null,[null,500]]]]]],[100,[[31063103],[31063104,[[395496599,null,null,[1]]]]]],[50,[[44748552],[44748553,[[1948,null,null,[1]]]]]]]],[13,[[1,[[31062554,null,[2,[[6,null,null,3,null,0],[12,null,null,null,4,null,"Chrome/(9[23456789]|\\\\d{3,})",["navigator.userAgent"]]]]],[31062555,[[395842139,null,null,[1]]],[2,[[6,null,null,3,null,0],[12,null,null,null,4,null,"Chrome/(9[23456789]|\\\\d{3,})",["navigator.userAgent"]]]]]]],[10,[[21065726,null,[4,null,6,null,null,null,null,["21065725"]]],[21065727,[[240,null,null,[1]]],[4,null,6,null,null,null,null,["21065725"]]],[21065728,[[241,null,null,[1]]],[4,null,6,null,null,null,null,["21065725"]]]],[4,null,9,null,null,null,null,["LayoutShift"]]],[100,[[21067087],[21067088,[[78,null,null,[1]]]]],[2,[[4,null,6,null,null,null,null,["31061691"]]]]],[1000,[[21067496]],[4,null,9,null,null,null,null,["document.hasTrustToken"]]],[10,[[21067664,null,[4,null,6,null,null,null,null,["21065725"]]],[21067665,[[null,1905,null,[null,30]]],[4,null,6,null,null,null,null,["21065725"]]],[21067666,[[null,1905,null,[null,60]]],[4,null,6,null,null,null,null,["21065725"]]],[21067667,[[null,1905,null,[null,120]]],[4,null,6,null,null,null,null,["21065725"]]]],[4,null,9,null,null,null,null,["LayoutShift"]]],[10,[[21069888,[[null,1929,null,[null,50]]],[4,null,6,null,null,null,null,["21065725"]]],[21069889,[[null,1929,null,[null,25]]],[4,null,6,null,null,null,null,["21065725"]]],[21069890,[[null,1929,null,[null,1]]],[4,null,6,null,null,null,null,["21065725"]]],[21069891,[[null,1929,null,[null,75]]],[4,null,6,null,null,null,null,["21065725"]]],[21069892,[[null,1929,null,[null,100]]],[4,null,6,null,null,null,null,["21065725"]]]],[4,null,9,null,null,null,null,["LayoutShift"]]],[1000,[[31060475,null,[2,[[1,[[4,null,9,null,null,null,null,["window.PeriodicSyncManager"]]]],[12,null,null,null,4,null,"Android",["navigator.userAgent"]]]]]]],[500,[[31061692],[31061693,[[77,null,null,[1]],[78,null,null,[1]],[85,null,null,[1]],[80,null,null,[1]],[76,null,null,[1]]]]],[4,null,6,null,null,null,null,["31061691"]]],[1,[[31062890],[31062891,[[397841828,null,null,[1]]]]]],[1,[[31062946]],[4,null,27,null,null,null,null,["document.prerendering"]]],[1,[[31062947]],[1,[[4,null,27,null,null,null,null,["document.prerendering"]]]]]]]],null,null,[0.001,"1000",null,"1000"]],[],null,null,null,null,-1]'
));
