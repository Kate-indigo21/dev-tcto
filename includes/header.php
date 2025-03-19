<?php $base_url = 'http://localhost/msutcto/'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" type="image/svg+xml" href="<?php echo $base_url; ?>images/MSU%20Seal%20New%20%28Official%29.png" />
    <meta name="generator" content="Astro v5.2.5" />
    <title>MSU | Tawi-Tawi College of Technology and Oceanography</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>_astro/Stories.BHyCaqd7.css" />
    <link rel="stylesheet" href="<?php echo $base_url; ?>_astro/_slug_.C34xQFnk.css" />
    <link rel="stylesheet" href="<?php echo $base_url; ?>_astro/index.BT5yEVqp.css" />
    <link rel="stylesheet" href="<?php echo $base_url; ?>sharepoint-integration/style.css">
</head>
<body>
    
    <main>
        <style>
            astro-island,
            astro-slot,
            astro-static-slot {
                display: contents;
            }
        </style>
        <script>
            (() => {
                var a = (s, i, o) => {
                    let r = async () => {
                        await (
                            await s()
                        )();
                    },
                        t = typeof i.value == "object" ? i.value : void 0,
                        c = {
                            rootMargin: t == null ? void 0 : t.rootMargin,
                        },
                        n = new IntersectionObserver((e) => {
                            for (let l of e)
                                if (l.isIntersecting) {
                                    n.disconnect(), r();
                                    break;
                                }
                        }, c);
                    for (let e of o.children) n.observe(e);
                };
                (self.Astro || (self.Astro = {})).visible = a;
                window.dispatchEvent(new Event("astro:visible"));
            })();
            (() => {
                var A = Object.defineProperty;
                var g = (i, o, a) =>
                    o in i
                        ? A(i, o, {
                            enumerable: !0,
                            configurable: !0,
                            writable: !0,
                            value: a,
                        })
                        : (i[o] = a);
                var d = (i, o, a) =>
                    g(i, typeof o != "symbol" ? o + "" : o, a);
                {
                    let i = {
                        0: (t) => m(t),
                        1: (t) => a(t),
                        2: (t) => new RegExp(t),
                        3: (t) => new Date(t),
                        4: (t) => new Map(a(t)),
                        5: (t) => new Set(a(t)),
                        6: (t) => BigInt(t),
                        7: (t) => new URL(t),
                        8: (t) => new Uint8Array(t),
                        9: (t) => new Uint16Array(t),
                        10: (t) => new Uint32Array(t),
                        11: (t) => (1 / 0) * t,
                    },
                        o = (t) => {
                            let [l, e] = t;
                            return l in i ? i[l](e) : void 0;
                        },
                        a = (t) => t.map(o),
                        m = (t) =>
                            typeof t != "object" || t === null
                                ? t
                                : Object.fromEntries(
                                    Object.entries(t).map(([l, e]) => [
                                        l,
                                        o(e),
                                    ])
                                );
                    class y extends HTMLElement {
                        constructor() {
                            super(...arguments);
                            d(this, "Component");
                            d(this, "hydrator");
                            d(this, "hydrate", async () => {
                                var b;
                                if (!this.hydrator || !this.isConnected)
                                    return;
                                let e =
                                    (b = this.parentElement) == null
                                        ? void 0
                                        : b.closest("astro-island[ssr]");
                                if (e) {
                                    e.addEventListener(
                                        "astro:hydrate",
                                        this.hydrate,
                                        { once: !0 }
                                    );
                                    return;
                                }
                                let c = this.querySelectorAll("astro-slot"),
                                    n = {},
                                    h = this.querySelectorAll(
                                        "template[data-astro-template]"
                                    );
                                for (let r of h) {
                                    let s = r.closest(this.tagName);
                                    s != null &&
                                        s.isSameNode(this) &&
                                        ((n[
                                            r.getAttribute(
                                                "data-astro-template"
                                            ) || "default"
                                        ] = r.innerHTML),
                                            r.remove());
                                }
                                for (let r of c) {
                                    let s = r.closest(this.tagName);
                                    s != null &&
                                        s.isSameNode(this) &&
                                        (n[
                                            r.getAttribute("name") ||
                                            "default"
                                        ] = r.innerHTML);
                                }
                                let p;
                                try {
                                    p = this.hasAttribute("props")
                                        ? m(
                                            JSON.parse(
                                                this.getAttribute("props")
                                            )
                                        )
                                        : {};
                                } catch (r) {
                                    let s =
                                        this.getAttribute(
                                            "component-url"
                                        ) || "<unknown>",
                                        v =
                                            this.getAttribute(
                                                "component-export"
                                            );
                                    throw (
                                        (v && (s += ` (export ${v})`),
                                            console.error(
                                                `[hydrate] Error parsing props for component ${s}`,
                                                this.getAttribute("props"),
                                                r
                                            ),
                                            r)
                                    );
                                }
                                let u;
                                await this.hydrator(this)(
                                    this.Component,
                                    p,
                                    n,
                                    { client: this.getAttribute("client") }
                                ),
                                    this.removeAttribute("ssr"),
                                    this.dispatchEvent(
                                        new CustomEvent("astro:hydrate")
                                    );
                            });
                            d(this, "unmount", () => {
                                this.isConnected ||
                                    this.dispatchEvent(
                                        new CustomEvent("astro:unmount")
                                    );
                            });
                        }
                        disconnectedCallback() {
                            document.removeEventListener(
                                "astro:after-swap",
                                this.unmount
                            ),
                                document.addEventListener(
                                    "astro:after-swap",
                                    this.unmount,
                                    { once: !0 }
                                );
                        }
                        connectedCallback() {
                            if (
                                !this.hasAttribute("await-children") ||
                                document.readyState === "interactive" ||
                                document.readyState === "complete"
                            )
                                this.childrenConnectedCallback();
                            else {
                                let e = () => {
                                    document.removeEventListener(
                                        "DOMContentLoaded",
                                        e
                                    ),
                                        c.disconnect(),
                                        this.childrenConnectedCallback();
                                },
                                    c = new MutationObserver(() => {
                                        var n;
                                        ((n = this.lastChild) == null
                                            ? void 0
                                            : n.nodeType) ===
                                            Node.COMMENT_NODE &&
                                            this.lastChild.nodeValue ===
                                            "astro:end" &&
                                            (this.lastChild.remove(), e());
                                    });
                                c.observe(this, { childList: !0 }),
                                    document.addEventListener(
                                        "DOMContentLoaded",
                                        e
                                    );
                            }
                        }
                        async childrenConnectedCallback() {
                            let e = this.getAttribute(
                                "before-hydration-url"
                            );
                            e && (await import(e)), this.start();
                        }
                        async start() {
                            let e = JSON.parse(this.getAttribute("opts")),
                                c = this.getAttribute("client");
                            if (Astro[c] === void 0) {
                                window.addEventListener(
                                    `astro:${c}`,
                                    () => this.start(),
                                    { once: !0 }
                                );
                                return;
                            }
                            try {
                                await Astro[c](
                                    async () => {
                                        let n =
                                            this.getAttribute(
                                                "renderer-url"
                                            ),
                                            [h, { default: p }] =
                                                await Promise.all([
                                                    import(
                                                        this.getAttribute(
                                                            "component-url"
                                                        )
                                                    ),
                                                    n
                                                        ? import(n)
                                                        : () => () => { },
                                                ]),
                                            u =
                                                this.getAttribute(
                                                    "component-export"
                                                ) || "default";
                                        if (!u.includes("."))
                                            this.Component = h[u];
                                        else {
                                            this.Component = h;
                                            for (let f of u.split("."))
                                                this.Component =
                                                    this.Component[f];
                                        }
                                        return (
                                            (this.hydrator = p),
                                            this.hydrate
                                        );
                                    },
                                    e,
                                    this
                                );
                            } catch (n) {
                                console.error(
                                    `[astro-island] Error hydrating ${this.getAttribute(
                                        "component-url"
                                    )}`,
                                    n
                                );
                            }
                        }
                        attributeChangedCallback() {
                            this.hydrate();
                        }
                    }
                    d(y, "observedAttributes", ["props"]),
                        customElements.get("astro-island") ||
                        customElements.define("astro-island", y);
                }
            })();
        </script>
        <astro-island uid="23yKHE" prefix="r0" component-url="/_astro/Navbar.CTLVxraA.js" component-export="default"
            renderer-url="/_astro/client.C6KyQvCx.js" props='{"path":[0,"/"]}' ssr="" client="visible"
            opts='{"name":"Navbar","value":true}' await-children="">
            <div class="headroom-wrapper">
                <div style="
                            position: relative;
                            top: 0;
                            left: 0;
                            right: 0;
                            z-index: 1;
                            -webkit-transform: translate3D(0, 0, 0);
                            -ms-transform: translate3D(0, 0, 0);
                            transform: translate3D(0, 0, 0);
                        " class="headroom headroom--unfixed">
                    <div
                        class="3xl:h-[100px] xl:h-[80px] xs:h-[60px] w-full bg-msu-deep-ocean text-white-pure flex justify-between items-center xl:px-[12.5%] xs:px-[3.85%] relative">
                        <a href="<?php echo $base_url; ?>" class="flex items-center xl:py-0 xs:py-2"><img
                                src="<?php echo $base_url; ?>images/MSU%20Seal%20New%20%28Official%29.png" alt=""
                                class="3xl:h-[72.99px] xs:h-[43.79px] mr-5" />
                            <div>
                                <h4 class="headings xl:h5 block xl:block xs:hidden">
                                    Mindanao State University
                                </h4>
                                <p class="paragraph xl:p2 block xl:block xs:hidden">
                                    Tawi-Tawi College of Technology and
                                    Oceanography
                                </p>
                            </div>
                        </a>
                        <div>
                            <p class="paragraph xl:p2 xl:block xs:hidden pb-1">
                                +63 909 982 6063
                            </p>
                            <p class="paragraph xl:p2 xl:block xs:hidden">
                                admissions@msutawi-tawi.edu.ph
                            </p>
                            <button class="headings h5 xl:hidden xs:block">
                                <img src="<?php echo $base_url; ?>images/menuicon.png" />
                            </button>
                        </div>
                    </div>
                    <div class="relative z-99">
                        <div class="relative z-99">
                            <div
                                class="xs:bg-msu-deep-ocean xl:bg-transparent xl:bg-gradient-ocean flex xl:flex-row xs:flex-col justify-between items-center text-white-pure xl:px-[12.5%] xs:px-[3.85%] nav false">
                                <ul
                                    class="flex 3xl:flex-row xl:flex-row sm:flex-col xs:flex-col xl:gap-14 xl:text-left xs:text-center paragraph p2 w-full">
                                    <li class="py-[15px] dropdown dropdown-1">
                                        <a href="#" class="flex xs:justify-center xl:justify-start">About
                                            <img src="../../public/down-arrow2-svgrepo-com.svg" class="ml-2 float-right"
                                                width="16" alt="" /></a>
                                        <ul class="mt-[15px] dropdown-menu lvl-one">
                                            <li class="py-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>about/campus.php">Brief History</a>
                                            </li>
                                            <li class="py-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>about/mission-vision.php">Mission/Vision</a>
                                            </li>
                                            <li class="pt-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>about/university-hymn.php">University Hymn</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-[15px] dropdown dropdown-1">
                                        <a href="#" class="flex xs:justify-center xl:justify-start">Admissions
                                            <img src="../../public/down-arrow2-svgrepo-com.svg" class="ml-2 float-right"
                                                width="16" alt="" /></a>
                                        <ul class="mt-[15px] dropdown-menu lvl-one">
                                            <li class="py-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>admissions/admissions.php">Admission Procedures</a>
                                            </li>
                                            <li class="pt-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>admissions/scholarship-and-grants.php">Scholarship and
                                                    Grants</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-[15px] dropdown dropdown-1">
                                        <a href="#" class="flex xs:justify-center xl:justify-start">Programs
                                            <img src="../../public/down-arrow2-svgrepo-com.svg" class="ml-2 float-right"
                                                width="16" alt="" /></a>
                                        <ul class="mt-[15px] dropdown-menu lvl-one">
                                            <li class="py-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>programs/cas.php">College of Arts and
                                                    Sciences</a>
                                            </li>
                                            <li class="py-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>programs/cias.php">College of Islamic
                                                    &amp; Arabic Studies</a>
                                            </li>
                                            <li class="py-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>programs/coed.php">College of Education</a>
                                            </li>
                                            <li class="py-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>programs/cof.php">College of Fisheries</a>
                                            </li>
                                            <li class="py-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>programs/iict.php">Institute of
                                                    Information and
                                                    Communication
                                                    Technology</a>
                                            </li>
                                            <li class="pt-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>programs/ioes.php">Institute of
                                                    Oceanography and
                                                    Environmental Science</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-[15px] dropdown dropdown-1">
                                        <a href="#" class="flex xs:justify-center xl:justify-start">Offices
                                            <img src="../../public/down-arrow2-svgrepo-com.svg" class="ml-2 float-right"
                                                width="16" alt="" /></a>
                                        <ul class="mt-[15px] dropdown-menu lvl-one">
                                            <li class="py-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>offices/offices.php">Administrative
                                                    Offices</a>
                                            </li>
                                            <li class="pt-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>offices/academic-offices.php">Academic Offices</a>
                                            </li>
                                            <li class="pt-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>offices/faculty-staff.php">Faculty &amp; Staff</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-[15px] dropdown dropdown-1">
                                        <a href="#" class="flex xs:justify-center xl:justify-start">Publications
                                            <img src="../../public/down-arrow2-svgrepo-com.svg" class="ml-2 float-right"
                                                width="16" alt="" /></a>
                                        <ul class="mt-[15px] dropdown-menu lvl-one">
                                            <li class="py-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>publications/articles.php">Articles</a>
                                            </li>
                                            <li class="py-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>publications/sulimbang.php">Sulimbang</a>
                                            </li>
                                            <li class="py-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>publications/gazette.php">Gazettes</a>
                                            </li>
                                            <!-- <li class="py-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>bidding.php">Bidding</a>
                                            </li> -->
                                            <li class="pt-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>publications/annual-reports.php">Annual Reports</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-[15px] dropdown dropdown-1">
                                        <a href="#" class="flex xs:justify-center xl:justify-start">Job Opening
                                            <img src="../../public/down-arrow2-svgrepo-com.svg" class="ml-2 float-right"
                                                width="16" alt="" /></a>
                                        <ul class="mt-[15px] dropdown-menu lvl-one">
                                            <li class="py-[15px] px-5">
                                                <a href="<?php echo $base_url; ?>careers.php">Open Positions</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="relative xl:mt-0 xs:mt-[15px] xl:w-fit xs:w-full">
                                    <form action="/search/" method="post">
                                        <input type="search" autocomplete="off" name="" id="search"
                                            class="bg-transparent border rounded-[20px] 3xl:w-[360px] xl:w-[240px] xs:w-full h-10 pl-12 pr-4 text-center" /><img
                                            src="<?php echo $base_url; ?>images/search.png" alt="" class="absolute top-[6px] left-3"
                                            label="search" />
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gradient-ocean h-[60px] xl:hidden xs:block"></div>
                    </div>
                </div>
            </div>
            <div class="downsize"></div>
            <!--astro:end-->
        </astro-island>