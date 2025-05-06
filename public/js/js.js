if (localStorage.getItem('intellimize_data_tracking_type') !== 'optOut') {
    localStorage.removeItem('intellimize_opt_out_117624266');
}
if (localStorage.getItem('intellimize_data_tracking_type') !== 'optOut') {
    localStorage.setItem('intellimize_data_tracking_type', 'optOut');
}

(function (e) {
    var s = {
        r: []
    };
    e.wf = {
        r: s.r,
        ready: t => {
            s.r.push(t)
        }
    }
})(window)

    (function (e, t, p) {
        var n = document.documentElement,
            s = {
                p: [],
                r: []
            },
            u = {
                p: s.p,
                r: s.r,
                push: function (e) {
                    s.p.push(e)
                },
                ready: function (e) {
                    s.r.push(e)
                }
            };
        e.intellimize = u, n.className += " " + p, setTimeout(function () {
            n.className = n.className.replace(RegExp(" ?" + p), "")
        }, t)
    })(window, 4000, 'anti-flicker')

var wfClientScript = document.createElement("script");
wfClientScript.src = "https://cdn.intellimize.co/snippet/117624266.js", wfClientScript.async = !0, wfClientScript
    .onerror = function () {
        document.documentElement.className = document.documentElement.className.replace(RegExp(" ?anti-flicker"),
            "")
    }, document.head.appendChild(wfClientScript);

! function (f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function () {
        n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.agent = 'plwebflow';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
}(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '939211577266251');
fbq('track', 'PageView');

(function (h, o, t, j, a, r) {
    h.hj = h.hj || function () {
        (h.hj.q = h.hj.q || []).push(arguments)
    };
    h._hjSettings = {
        hjid: 3273102,
        hjsv: 6
    };
    a = o.getElementsByTagName('head')[0];
    r = o.createElement('script');
    r.async = 1;
    r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
    a.appendChild(r);
})(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');

window.plausible = window.plausible || function () {
    (window.plausible.q = window.plausible.q || []).push(arguments)
}

! function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() {
        n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
}(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '939211577266251');
fbq('track', 'PageView');


_linkedin_partner_id = "4615588";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);

(function(l) {
    if (!l) {
        window.lintrk = function(a, b) {
            window.lintrk.q.push([a, b])
        };
        window.lintrk.q = []
    }
    var s = document.getElementsByTagName("script")[0];
    var b = document.createElement("script");
    b.type = "text/javascript";
    b.async = true;
    b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
    s.parentNode.insertBefore(b, s);
})(window.lintrk);

