<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" type="image/svg+xml" href="images/MSU%20Seal%20New%20%28Official%29.png" />
    <meta name="generator" content="Astro v5.2.5" />
    <title>MSU | Tawi-Tawi College of Technology and Oceanography</title>
    <link rel="stylesheet" href="_astro/Stories.BHyCaqd7.css" />
    <link rel="stylesheet" href="_astro/_slug_.C34xQFnk.css" />
    <link rel="stylesheet" href="_astro/index.BT5yEVqp.css" />
    <link rel="stylesheet" href="sharepoint-integration/style.css">
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
                        <a href="" class="flex items-center xl:py-0 xs:py-2"><img
                                src="images/MSU%20Seal%20New%20%28Official%29.png" alt=""
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
                                <img src="images/menuicon.png" />
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
                                                <a href="about/campus.php">Brief History</a>
                                            </li>
                                            <li class="py-[15px] px-5">
                                                <a href="about/mission-vision.php">Mission/Vision</a>
                                            </li>
                                            <li class="pt-[15px] px-5">
                                                <a href="about/university-hymn.php">University
                                                    Hymn</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-[15px] dropdown dropdown-1">
                                        <a href="#" class="flex xs:justify-center xl:justify-start">Admissions
                                            <img src="../../public/down-arrow2-svgrepo-com.svg" class="ml-2 float-right"
                                                width="16" alt="" /></a>
                                        <ul class="mt-[15px] dropdown-menu lvl-one">
                                            <li class="py-[15px] px-5">
                                                <a href="admissions/admissions.php">Admission
                                                    Procedures</a>
                                            </li>
                                            <li class="pt-[15px] px-5">
                                                <a href="admissions/scholarship-and-grants.php">Scholarship
                                                    and
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
                                                <a href="programs/cas.php">College of Arts and
                                                    Sciences</a>
                                            </li>
                                            <li class="py-[15px] px-5">
                                                <a href="programs/cias.php">College of Islamic
                                                    &amp; Arabic Studies</a>
                                            </li>
                                            <li class="py-[15px] px-5">
                                                <a href="programs/coed.php">College of
                                                    Education</a>
                                            </li>
                                            <li class="py-[15px] px-5">
                                                <a href="programs/cof.php">College of
                                                    Fisheries</a>
                                            </li>
                                            <li class="py-[15px] px-5">
                                                <a href="programs/iict.php">Institute of
                                                    Information and
                                                    Communication
                                                    Technology</a>
                                            </li>
                                            <li class="pt-[15px] px-5">
                                                <a href="programs/ioes.php">Institute of
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
                                                <a href="offices/offices.php">Administrative
                                                    Offices</a>
                                            </li>
                                            <li class="pt-[15px] px-5">
                                                <a href="offices/academic-offices.php">Academic
                                                    Offices</a>
                                            </li>
                                            <li class="pt-[15px] px-5">
                                                <a href="offices/faculty-staff.php">Faculty
                                                    &amp; Staff</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-[15px] dropdown dropdown-1">
                                        <a href="#" class="flex xs:justify-center xl:justify-start">Publications
                                            <img src="../../public/down-arrow2-svgrepo-com.svg" class="ml-2 float-right"
                                                width="16" alt="" /></a>
                                        <ul class="mt-[15px] dropdown-menu lvl-one">
                                            <li class="py-[15px] px-5">
                                                <a href="publications/articles.php">Articles</a>
                                            </li>
                                            <li class="py-[15px] px-5">
                                                <a href="publications/sulimbang.php">Sulimbang</a>
                                            </li>
                                            <li class="py-[15px] px-5">
                                                <a href="publications/gazette.php">Gazettes</a>
                                            </li>
                                            <!-- <li class="py-[15px] px-5">
                                                <a href="bidding.php">Bidding</a>
                                            </li> -->
                                            <li class="pt-[15px] px-5">
                                                <a href="publications/annual-reports.php">Annual
                                                    Reports</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="py-[15px] dropdown dropdown-1">
                                        <a href="#" class="flex xs:justify-center xl:justify-start">Job Opening
                                            <img src="../../public/down-arrow2-svgrepo-com.svg" class="ml-2 float-right"
                                                width="16" alt="" /></a>
                                        <ul class="mt-[15px] dropdown-menu lvl-one">
                                            <li class="py-[15px] px-5">
                                                <a href="careers.php">Open Positions</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="relative xl:mt-0 xs:mt-[15px] xl:w-fit xs:w-full">
                                    <form action="/search/" method="post">
                                        <input type="search" autocomplete="off" name="" id="search"
                                            class="bg-transparent border rounded-[20px] 3xl:w-[360px] xl:w-[240px] xs:w-full h-10 pl-12 pr-4 text-center" /><img
                                            src="images/search.png" alt="" class="absolute top-[6px] left-3"
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
        <div
            class="flex xl:flex-row xs:flex-col justify-center xl:px-[240px] xs:px-[15px] xl:mb-[140px] xs:mb-[58px] xl:gap-[40px] xs:gap-[10px]">
            <!-- PLACE CONTENT HERE -->
            <div class="content-container" id="news-container" data-sharepoint-list="News"
                data-sort="Created:desc">
                <script type="text/template" class="content-template">
                                <!-- Place your HTML code here -->
                <div class="news-content">
                    <div class="image-container news-image">
                        <img src="{{ ImageURL.Url }}" />
                    </div>
                    <div class="news-content-text">
                        <h1 class="show-popup" id="ID:{{ ID }}" data-popup-target="news-popup">{{ Title }}</h1>
                        <p>{{ Description }}</p>
                    </div>
                </div>
                </script>
            </div>
            <div id="news-popup" class="popup">
                <div class="popup-content">
                    <span class="close-btn" onclick="closePopup('news-popup')">&times;</span>
                    <script type="text/template" class="popup-template">
                        <div class="popup-image">
                            <img src="{{ ImageURL.Url }}">
                        </div>
                        <div class="popup-text">
                            <h1>{{ Title }}</h1>
                            <p>{{ BodyText }}</p>
                        </div>
                    </script>
                    <div class="popup-main-content"></div>
                </div>
            </div>
            <style>
                #news-container {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    gap: 16px;
                }

                .news-content {
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    gap: 10px;
                }

                .news-image img {
                    width: 200px;
                    height: 200px;
                    object-fit: cover;
                }

                .news-content-text h1 {
                    font-size: 26px;
                    line-height: normal;
                    display: -webkit-box;
                    -webkit-line-clamp: 3;
                    /* Limit to 3 lines */
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    width: 100%;
                    color: #fff;
                }

                .news-content-text p {
                    font-size: 16px;
                    color: #999999;
                    line-height: normal;
                    display: -webkit-box;
                    -webkit-line-clamp: 5;
                    /* Limit to 3 lines */
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    width: 100%;
                }

                @media (max-width: 992px) {
                    #news-container {
                        grid-template-columns: repeat(1, 1fr);
                    }

                    .news-content {
                        grid-template-columns: repeat(2, 1fr);
                    }

                    .news-image img {
                        margin: auto;
                    }
                }

                /* POPUP */
                #news-popup .popup-content {
                    background: #fff;
                    padding: 0px 30px 25px 30px;
                    text-align: left;
                    width: 800px;
                    max-height: 80vh;
                    overflow-y: auto;
                    border-radius: 10px;
                }

                #news-popup .popup-image img {
                    width: 100%;
                    height: 400px;
                    object-fit: cover;
                    object-position: center;
                    margin-bottom: 20px;
                }

                #news-popup .popup-text h1 {
                    font-family: Merchant;
                    font-size: 25px;
                    font-weight: bold;
                    color: #0c1c59;
                    margin-bottom: 15px;
                }

                .popup {
                    display: none;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.9);
                    justify-content: center;
                    align-items: center;
                    z-index: 9999;
                }

                .popup-content {
                    background: #fff;
                    text-align: left;
                    width: 800px;
                    max-height: 95vh;
                    overflow-y: auto;
                }

                .close-btn {
                    position: relative;
                    cursor: pointer;
                    font-size: 24px;
                    right: 10px;
                    text-align: left;
                    display: flex;
                    align-items: end;
                    justify-content: end;
                }
            </style>

            <!-- END CONTENT -->
        </div>



        <!-- FooterNaV -->
        <div class="bg-msu-deep-ocean text-white-pure">
            <div class="mb-[60px] xl:mt-[80px] xs:mt-[40px]">
                <div
                    class="flex xl:flex-row xs:flex-col justify-center xl:px-[240px] xs:px-[15px] xl:mb-[140px] xs:mb-[58px] xl:gap-[40px] xs:gap-[10px]">
                    <!-- NEWS SHAREPOINT LIST -->


                    <img src="images/rectangle.png" alt="" class="max-w-full h-[20px] absolute xs:hidden 3xl:block" />
                    <div
                        class="flex xl:flex-row gap-[25px] xs:flex-col justify-center xl:items-stretch xs:items-center xl:mx-[12.5%] xs:mx-[3.85%]">
                        <div class="flex xl:mt-0 xs:mt-10 xl:ml-[70px] xs:ml-0 xl:gap-[25px]">
                            <ul class="xl:min-w-[170px]">
                                <li>
                                    <h5 class="headings h5 w-200 mb-2">
                                        University
                                    </h5>
                                </li>
                                <li>
                                    <a href="/campus" class="paragraph p2 text-titanium mb-1">History
                                    </a>
                                </li>
                                <li>
                                    <a href="/campus#mv" class="paragraph p2 text-titanium mb-1">Mission / Vision
                                    </a>
                                </li>
                                <li>
                                    <a href="/campus#hymn" class="paragraph p2 text-titanium mb-1">University Hymn
                                    </a>
                                </li>
                                <li>
                                    <a href="/articles" class="paragraph p2 text-titanium mb-1">Articles
                                    </a>
                                </li>
                                <li>
                                    <a href="/gazette" class="paragraph p2 text-titanium mb-1">Gazette
                                    </a>
                                </li>
                                <li>
                                    <a href="academic-calendar.html" class="paragraph p2 text-titanium mb-1">Events
                                    </a>
                                </li>
                                <li>
                                    <a href="/annual-reports" class="paragraph p2 text-titanium mb-1">Annual Report
                                    </a>
                                </li>
                            </ul>
                            <ul class="xl:ml-[70px] xs:ml-[52px] xl:min-w-[170px]">
                                <li>
                                    <h5 class="headings h5 w-200 mb-2">
                                        Admissions
                                    </h5>
                                </li>
                                <!-- <li><a href="#" class="paragraph p2 text-titanium mb-1">MSU SASE </a></li>	 -->
                                <li>
                                    <a href="/admissions#freshmen" class="paragraph p2 text-titanium mb-1">Freshmen
                                    </a>
                                </li>
                                <li>
                                    <a href="/admissions#transferee" class="paragraph p2 text-titanium mb-1">Transferee
                                    </a>
                                </li>
                                <li>
                                    <a href="/admissions#shifting" class="paragraph p2 text-titanium mb-1">Returning /
                                        Shifting
                                    </a>
                                </li>
                                <li>
                                    <a href="/admissions#remedial" class="paragraph p2 text-titanium mb-1">Remedial
                                        Program
                                    </a>
                                </li>
                                <li>
                                    <a href="/admissions#fees" class="paragraph p2 text-titanium mb-1">Student Fees
                                    </a>
                                </li>
                                <li>
                                    <a href="/admissions#scholarship"
                                        class="paragraph p2 text-titanium mb-1">Scholarships &
                                        Grants
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="flex xl:mt-0 xs:mt-10 xl:ml-[70px] xs:ml-0 xl:gap-[25px]">
                            <ul class="xl:min-w-[170px]">
                                <li>
                                    <h5 class="headings h5 w-200 mb-2">
                                        Programs
                                    </h5>
                                </li>
                                <li>
                                    <a href="/cas" class="paragraph p2 text-titanium mb-1">CAS
                                    </a>
                                </li>
                                <li>
                                    <a href="/cias" class="paragraph p2 text-titanium mb-1">CIAS
                                    </a>
                                </li>
                                <li>
                                    <a href="/cof" class="paragraph p2 text-titanium mb-1">COF
                                    </a>
                                </li>
                                <li>
                                    <a href="/coed" class="paragraph p2 text-titanium mb-1">COED
                                    </a>
                                </li>
                                <li>
                                    <a href="/iict" class="paragraph p2 text-titanium mb-1">IICT
                                    </a>
                                </li>
                                <li>
                                    <a href="/ioes" class="paragraph p2 text-titanium mb-1">IOES
                                    </a>
                                </li>
                            </ul>
                            <ul class="xl:ml-[70px] xs:ml-[52px] xl:min-w-[170px]">
                                <li>
                                    <h5 class="headings h5 w-200 mb-2">
                                        Offices
                                    </h5>
                                </li>
                                <li>
                                    <a href="/offices#administrative"
                                        class="paragraph p2 text-titanium mb-1">Administrative</a>
                                </li>
                                <li>
                                    <a href="/offices#academic" class="paragraph p2 text-titanium mb-1">Academic</a>
                                </li>
                                <!-- <li><a href="/offices#facultyStaff" class="paragraph p2 text-titanium mb-1">Faculty and Staff </a></li> -->
                                <li>
                                    <a href="/cas" class="paragraph p2 text-titanium mb-1">CAS
                                    </a>
                                </li>
                                <li>
                                    <a href="/cias" class="paragraph p2 text-titanium mb-1">CIAS
                                    </a>
                                </li>
                                <li>
                                    <a href="/cof" class="paragraph p2 text-titanium mb-1">COF
                                    </a>
                                </li>
                                <li>
                                    <a href="/coed" class="paragraph p2 text-titanium mb-1">COED
                                    </a>
                                </li>
                                <li>
                                    <a href="/iict" class="paragraph p2 text-titanium mb-1">IICT
                                    </a>
                                </li>
                                <li>
                                    <a href="/ioes" class="paragraph p2 text-titanium mb-1">IOES
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="xl:mt-0 xs:mt-10 xl:ml-[70px] xs:ml-0 xl:gap-[25px] xl:min-w-[170px]">
                            <h5 class="headings h5 w-200 mb-2 xl:text-left xs:text-center">
                                Legal
                            </h5>
                            <div
                                class="flex xl:flex-col xs:flex-row xl:items-start xs:items-center xl:gap-0 xs:gap-[137px]">
                                <div class="flex flex-col min-w-[70px]">
                                    <!-- <a href="#" class="paragraph p2 text-titanium mb-1">Terms </a>
                        <a href="#" class="paragraph p2 text-titanium mb-1">Privacy </a> -->
                                    <a href="ra-6060.html" class="paragraph p2 text-titanium mb-1">RA 6060
                                    </a>
                                </div>
                                <div class="flex flex-col min-w-[70px]">
                                    <a href="kra2.html" class="paragraph p2 text-titanium mb-1">KRA2
                                    </a>
                                    <a href="https://drive.google.com/file/d/1-5n1f8z0ax3PJh9Lip8AI6FrHGgG4u-X/view"
                                        class="paragraph p2 text-titanium mb-1">Citizen's Charter
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end FooterNaV -->
            <!-- Footer -->
            <div class="bg-msu-deep-ocean text-white-pure justify-center xl:px-[12.5%] xs:px-[3.85%] xl:pt-20 xs:pt-10">
                <div class="flex flex-col justify-center items-center text-center">
                    <img src="images/MSU%20Seal%20New%20%28Official%29.png" alt=""
                        class="xl:h-[170px] xs:h-[127px] mb-10" />
                    <div>
                        <h4 class="headings xl:h4 xs:h5">
                            Mindanao State University
                        </h4>
                        <p class="paragraph xl:p1 xs:p2">
                            Tawi-Tawi College of Technology and Oceanography
                        </p>
                    </div>
                </div>
                <div id="govlogo"
                    class="flex xl:gap-5 xs:gap-3 xl:mt-20 xs:mt-9 xl:mb-[70px] xs:mb-[80px] justify-center">
                    <img src="<?php echo $base_url; ?>images/Republika%20ng%20pilipinas.png" alt=""
                        class="xl:h-[100px] xs:h-[75px]" />
                    <a href="transparency-seal.html"><img src="<?php echo $base_url; ?>images/transparency_seal.png"
                            alt="" class="xl:h-[100px] xs:h-[75px]" /></a>
                    <a href="https://www.foi.gov.ph/" target="_blank"><img
                            src="<?php echo $base_url; ?>images/FOI-logo.png" alt=""
                            class="xl:h-[100px] xs:h-[75px]" /></a>
                    <a href="https://pia.gov.ph/news/2023/07/16/pbbm-promotes-bagong-pilipinas-brand-of-governance-leadership-campaign"
                        target="_blank"><img src="<?php echo $base_url; ?>images/Bagong-Pilipinas.png" alt=""
                            class="xl:h-[100px] xs:h-[75px]" /></a>
                </div>
                <div
                    class="flex xl:flex-row xs:flex-col justify-center xl:text-left xs:text-center xl:items-start xs:items-center">
                    <div
                        class="flex flex-col max-w-[300px] xl:mr-[174px] xs:mr-0 xl:gap-[30px] xs:gap-[30px] xs:mb-[50px]">
                        <div class="xs:mb-10">
                            <div class="headings h5 mb-[10px]">
                                University Address
                            </div>
                            <div class="paragraph p2 text-titanium">
                                Boheh Sallang, Sanga-Sanga Bongao, Tawi-Tawi
                                7500
                            </div>
                        </div>
                        <div class="" id="mainoffice_contact">
                            <div class="headings h5 mb-[10px]">
                                Manila Office
                            </div>
                            <div class="paragraph p2 text-titanium">
                                MSU Manila Information and Liaison Office Rm
                                203, Leticia Bldg. 1804 Taft Avenue Corner J.
                                Nakpil St. Malate, Manila
                            </div>
                        </div>
                    </div>
                    <div class="flex xl:gap-[54px] xs:gap-[20px]">
                        <div class="flex flex-col xl:mr-10 xs:mr-0">
                            <div class="mb-[50px]" id="chancellor_contact">
                                <div class="headings xl:h5 xs:h6 xl:mb-[10px] xs:mb-[5px]">
                                    Chancellor
                                </div>
                                <div class="paragraph xl:p2 xs:p3 text-titanium">
                                    +63 917 310 7843 <br /><br />
                                    chancellor@msutawi-tawi.edu.ph
                                </div>
                            </div>
                            <div id="admission_contact">
                                <div class="headings xl:h5 xs:h6 xl:mb-[10px] xs:mb-[5px]">
                                    Admissions
                                </div>
                                <div class="paragraph xl:p2 xs:p3 text-titanium">
                                    +63 909 982 6063<br /><br />
                                    msutctoao@msutawi-tawi.edu.ph
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col xs:mr-0">
                            <div class="mb-[50px]" id="registrar_contact">
                                <div class="headings xl:h5 xs:h6 xl:mb-[10px] xs:mb-[5px]">
                                    Registrar
                                </div>
                                <div class="paragraph xl:p2 xs:p3 text-titanium">
                                    +63 951 064 5611 <br /><br />
                                    registraroffice@msutawi-tawi.edu.ph
                                </div>
                            </div>
                            <div id="guidance_contact">
                                <div class="headings xl:h5 xs:h6 xl:mb-[10px] xs:mb-[5px]">
                                    Guidance
                                </div>
                                <div class="paragraph xl:p2 xs:p3 text-titanium">
                                    +63 905 792 5924 <br /><br />
                                    guidanceoffice@msutawi-tawi.edu.ph
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col xl:max-w-[360px] xs:max-w-[240px] xl:mt-0 xs:mt-10 xl:ml-14 xs:ml-0">
                        <div class="paragraph xl:p1 xs:p2 text-titanium mb-5">
                            For other inquiries regarding biddings for projects
                            and other business transactions please visit the
                            link below
                        </div>
                        <a href="bidding.html"
                            class="bg-msu-maroon text-white-pure xl:py-[14.5px] xs:py-5 xl:px-[85.5px] xs:px-[61.5px] rounded-[40px] paragraph xl:p1 xs:p2">Project
                            Biddings</a>
                    </div>
                </div>
                <div class="flex gap-[33.33px] mt-8 justify-center">
                    <!-- <a href="#"><img src="/images/social media/linkin.png" alt=""></img></a>
            <a href="#"><img src="/images/social media/instagram.png" alt=""></img></a> -->
                    <a href="https://web.facebook.com/msutcto"><img
                            src="<?php echo $base_url; ?>images/social%20media/facebook.png" alt="" /></a>
                    <!-- <a href="#"><img src="/images/social media/tweeter.png" alt=""></img></a> -->
                    <a href="https://www.youtube.com/@oippmsu-tcto7771"><img
                            src="<?php echo $base_url; ?>images/social%20media/youtube.png" alt="" /></a>
                </div>
                <div class="flex flex-col justify-center items-center xl:mt-[55px] xs:mt-[45px] pb-10">
                    <div class="flex xl:flex-row xs:flex-col">
                        <p class="paragraph p2 text-center text-white">
                            <a href="https://www.facebook.com/msutcto">© 2023 Mindanao State University Tawi-Tawi
                                College of Technology and Oceanography All
                                rights reserved.</a>
                        </p>
                    </div>
                    <div>
                        <!-- <p class="paragraph p2 text-center text-charcoal mt-3">All rights reserved.</p> -->
                    </div>
                </div>
            </div>
            <!-- end Footer -->
    </main>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="sharepoint-integration/sharepoint-script.js"></script>
</body>

</html>