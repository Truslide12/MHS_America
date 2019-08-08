var topContext = this,
    pony = {
        _offset: 0,
        _queue: [],
        lessons: {},
        _length: function() {
            return this._queue.length - this._offset;
        },
        add: function(fn, context) {
            this._queue.push(function() {
                fn.apply(context || topContext);
            });
        },
        step: function() {
            if (this._queue.length == 0) {
                return false
            }
            var f = this._queue[this._offset];
            if (++this._offset * 2 >= this._queue.length) {
                this._queue = this._queue.slice(this._offset);
                this._offset = 0;
            }
            f();
        },
        process: function() {
            while (this._length() > 0) {
                this.step();
            }
        },
        init: function() {
            (typeof topContext.addEventListener === "function") ? topContext.addEventListener('load', function() { pony.process(); }) : topContext.attachEvent('onload', function() { pony.process(); });
        },
        tame: function(fn, delay, ctxt) {
            var timer = null;
            return function() {
                var context = (ctxt || this),
                    args = arguments;
                clearTimeout(timer);
                timer = setTimeout(function() {
                    fn.apply(context, args);
                }, delay);
            };
        },
        bind: function() {
            if (arguments[1].startsWith('#')) {
                $(arguments[1]).on(arguments[0], arguments[2]);
            } else {
                $(topContext).on(arguments[0], arguments[1], arguments[2]);
            }
        },
        unbind: function() {
            if (arguments[1].startsWith('#')) {
                $(arguments[1]).off(arguments[0], arguments[2]);
            } else {
                $(topContext).off(arguments[0], arguments[1], arguments[2]);
            }
        },
        lesson: function(key, fn) {
            if (typeof fn === 'function') {
                pony.lessons[key] = fn;
            }
            return pony.lessons[key] || (function() {});
        },
        fetch: function(route, parcel, callback, fallback, failback) {
            var output, get_reqt = false, parcel = parcel || {};
            parcel['_token'] = $('meta[name=formtoken]').attr('content');
            if(route.indexOf('GET ') == 0) {
                route = route.substr(4);
                get_reqt = true;
            }
            (get_reqt ? $.get : $.post)(route, parcel).done(function(data) {
                if (data.success) {
                    callback.call(this, data.data);
                } else {
                    (fallback || (function(data) {})).call(this, data.data);
                }
            }).fail(function(data) {
                (failback || (function(data) {})).call(this, data.data);
            });
        },
    };

pony.init();