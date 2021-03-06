<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/ar.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media.css">
    <link rel="stylesheet" href="assets/css/animation.css">
    <link rel="stylesheet" href="assets/css/register.css">
    <link rel="stylesheet" href="assets/css/details.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>E-library</title>
</head>

<body>
    <?php require("includes/pop.php"); ?>
    <?php require("includes/header.php"); ?>

    <div class="container center">
        <ul class="row path">
            <li><a href="">الرئيسية</a></li>
            <li><a href="">الكتب العربية</a></li>
            <li><a href="">كتب الكترونية</a></li>
            <li><a href="">لأنك الله (كتاب الكتروني)</a></li>
        </ul>
    </div>

    <div class="container row center book-info">
        <div class="book-logo" id="open-books">
            <img src="assets/images/books.jpg" alt="" class="large-book">
            <img src="assets/images/books.jpg" alt="" class="thumb">
        </div>
        <div>
            <h2>لأنك الله (كتاب إلكتروني)</h2>
            <p class="more"><a href="">عرض المزيد ↓</a></p>
            <p class="book-price"><b>12.99</b>ر.س</p>
            <span class="black-gray">شامل الضريبة</span>
            <div class="left">
                <p>Each: وحدة البيع</p>
                <div class="row">
                    <a href="">(16 المراجعات)</a>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>رقم الصنف JBB410156
                    رقم المنتج 4</p>
            </div>
            <span>الصيغ المتوفرة:</span>
            <form action="">
                <div class="format row space-between">
                    <div class="row base">
                        <input type="radio" name="blue" id="blue" checked>
                        <p>كتاب الكتروني </p>
                        <i class="fa fa-question"></i>
                    </div>
                    <div class="red-price">
                        <p><b>12.99 </b> ر.س</p>
                        <span class="black-gray">شامل الضريبة</span>
                    </div>
                </div>

                <div class="format row space-between">
                    <div class="row base">
                        <input type="radio" name="blue" id="blue">
                        <p>كتاب الكتروني </p>
                    </div>
                    <div class="red-price">
                        <p><b>12.99 </b> ر.س</p>
                        <span class="black-gray">شامل الضريبة</span>
                    </div>
                </div>
            </form>

        </div>
        <div>
            <div class="add-cart">
                <div class="note">
                    <b>ملاحظة: </b><span>سيتم إضافة هذا الكتاب الإلكتروني إلى مكتبتك في قارئ جرير.</span>
                    <p><a href="">اقرأ المزيد</a></p>
                </div>
                <div class="row space-between">
                    <form action="">
                        <select name="" id="">
                            <option value="">1</option>
                        </select>
                    </form>
                    <button class="row cart-btn"><i class="fa fa-shopping-cart">اضف الى
                            السلة</i></button>
                </div>
                <div class="features">
                    <a href=""><i class="fa fa-lock"></i><b> تسوق أمن </b><i class="fa fa-question"></i></a>
                    <a href=""><i class="fa fa-shield-check"></i><b> أصلي ومضمون </b><i class="fa fa-question"></i></a>
                    <a href=""><i class="fa fa-truck"></i><b> شحن مجاني وسريع </b><i class="fa fa-question"></i></a>
                </div>
                <div class="extra-btn row ">
                    <button><i class="fa fa-share-alt"></i><b> مشاركة </b></button>
                    <button><i class="fa fa-star"></i><b> المفضلة </b></button>
                    <button><i class="fa fa-exchange"></i><b> مشاركة </b></button>
                </div>
            </div>
        </div>
    </div>

    <div id="book-slider">
        <button class="close" id="close-books">X</button>
        <div class="container center">
            <div class="mySlides">
                <img src="assets/images/book1.jpg">
            </div>

            <div class="mySlides">
                <img src="assets/images/book2.jpg">
            </div>

            <div class="mySlides">
                <img src="assets/images/book3.jpg">
            </div>

            <div class="mySlides">
                <img src="assets/images/book4.jpg">
            </div>

            <div class="mySlides">
                <img src="assets/images/book5.jpg">
            </div>

            <div class="mySlides">
                <img src="assets/images/book6.jpg">
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

            <div class="caption-container">
                <p id="caption"></p>
            </div>

            <div class="row">
                <div class="column">
                    <img class="demo cursor" src="assets/images/book1.jpg" onclick="currentSlide(1)" alt="The Woods">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/images/book2.jpg" onclick="currentSlide(2)" alt="Cinque Terre">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/images/book3.jpg" onclick="currentSlide(3)" alt="Mountains and fjords">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/images/book4.jpg" onclick="currentSlide(4)" alt="Northern Lights">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/images/book5.jpg" onclick="currentSlide(5)" alt="Nature and sunrise">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/images/book6.jpg" onclick="currentSlide(6)" alt="Snowy Mountains">
                </div>
            </div>
        </div>
    </div>

    <div class="desc">
        <p class="description-text">كتاب يتحدث عن بعض أسماء الله الحسنى وكيف نعيشها في حياتنا حرص المؤلف أن يكون المؤلف
            أن
            يكون الكتاب مناسبلمن هم متوسطي الثقافة ويكون مناسبا للمحتاج والمريض والسليم</p>
    </div>

    <div class="container center">
        <h2>المواصفات</h2>
        <ul class="specifications">
            <li><span> رقم الصنف </span><b>JBB410156</b></li>
            <li><span> رقم المنتج </span><b>4</b></li>
            <li><span> المؤلف </span><b>علي جابر الفيفي</b></li>
            <li><span> الناشر </span><b>دار الحضارة للنشر والتوزيع</b></li>
            <li><span> تاريخ النشر </span><b>2016</b></li>
            <li><span> صيغة الكتاب </span><b>Ebook</b></li>
            <li><span> عدد الصفحات </span><b>182</b></li>
            <li><span> وزن الشحن (كجم) </span><b>0.0100</b></li>
            <li><span> صيغة الملف </span><b>ePub</b></li>
            <li><span> اللغة </span><b>عربي</b></li>
        </ul>
    </div>

    <div class="container center">
        <div class="row rev-head">
            <h2 class="rev-title">مراجعات العملاء</h2>
            <button>+ اكتب مراجعتك</button>
        </div>
        <ul class="reviews">
            <li>
                <div class="back-review">
                    <p>good</p>
                    <div class="row space-between">
                        <span>من قبل reem</span>
                        <span>2021/11/16</span>
                    </div>
                </div>
                <span>Good</span>
            </li>

            <li>
                <div class="back-review">
                    <p>good</p>
                    <div class="row space-between">
                        <span>من قبل reem</span>
                        <span>2021/11/16</span>
                    </div>
                </div>
                <span>Good</span>
            </li>

            <li>
                <div class="back-review">
                    <p>good</p>
                    <div class="row space-between">
                        <span>من قبل reem</span>
                        <span>2021/11/16</span>
                    </div>
                </div>
                <span>Good</span>
            </li>
        </ul>
        <p><a href="" class="more-rev">اظهار جميع المراجعات (15) ></a></p>
    </div>

    <div class="break"></div>

    <div class="container center">
        <h2>منتجات مشابهة</h2>
        <div class="slider row">
            <a href="" class="book">
                <img src="assets/images/book1.jpg" alt="">
                <h3>كتاب الكتروني</h3>
                <span>كبرياء وهوى (كتاب الكتروني)</span>
                <p><b>17.99</b>ر.س.</p>
                <small>شامل الضريبة</small>
                <div class="extra"></div>
            </a>

            <a href="" class="book">
                <img src="assets/images/book2.jpg" alt="">
                <h3>كتاب الكتروني</h3>
                <span>كبرياء وهوى (كتاب الكتروني)</span>
                <p><b>17.99</b>ر.س.</p>
                <small>شامل الضريبة</small>
                <div class="extra"></div>
            </a>

            <a href="" class="book">
                <img src="assets/images/book3.jpg" alt="">
                <h3>كتاب الكتروني</h3>
                <span>كبرياء وهوى (كتاب الكتروني)</span>
                <p><b>17.99</b>ر.س.</p>
                <small>شامل الضريبة</small>
                <div class="extra"></div>
            </a>

            <a href="" class="book">
                <img src="assets/images/book4.jpg" alt="">
                <h3>كتاب الكتروني</h3>
                <span>كبرياء وهوى (كتاب الكتروني)</span>
                <p><b>17.99</b>ر.س.</p>
                <small>شامل الضريبة</small>
                <div class="extra"></div>
            </a>

            <a href="" class="book">
                <img src="assets/images/book5.jpg" alt="">
                <h3>كتاب الكتروني</h3>
                <span>كبرياء وهوى (كتاب الكتروني)</span>
                <p><b>17.99</b>ر.س.</p>
                <small>شامل الضريبة</small>
            </a>

            <a href="" class="book">
                <img src="assets/images/book6.jpg" alt="">
                <h3>كتاب الكتروني</h3>
                <span>كبرياء وهوى (كتاب الكتروني)</span>
                <p><b>17.99</b>ر.س.</p>
                <small>شامل الضريبة</small>
            </a>

            <a href="" class="book">
                <img src="assets/images/book.jpg" alt="">
                <h3>كتاب الكتروني</h3>
                <span>كبرياء وهوى (كتاب الكتروني)</span>
                <p><b>17.99</b>ر.س.</p>
                <small>شامل الضريبة</small>
            </a>

            <a href="" class="book">
                <img src="assets/images/book1.jpg" alt="">
                <h3>كتاب الكتروني</h3>
                <span>كبرياء وهوى (كتاب الكتروني)</span>
                <p><b>17.99</b>ر.س.</p>
                <small>شامل الضريبة</small>
            </a>

            <a href="" class="book">
                <img src="assets/images/book2.jpg" alt="">
                <h3>كتاب الكتروني</h3>
                <span>كبرياء وهوى (كتاب الكتروني)</span>
                <p><b>17.99</b>ر.س.</p>
                <small>شامل الضريبة</small>
            </a>
        </div>
        <i class="fa fa-arrow-right right-arrow slideRight"></i>
        <i class="fa fa-arrow-left left-arrow slideLeft"></i>
    </div>

    <div class="break"></div>

    <footer>
        <div class="top-footer">
            <div class="top-links row container center">
                <div id="news">
                    <h3>انضم إلى نشرتنا البريدية</h3>
                    <form action="">
                        <input type="text" name="" id="" placeholder="ادخل بريدك الالكتروني">
                        <button>اشتراك</button>
                    </form>
                </div>
                <div class="footer-lists row">
                    <div>
                        <h3>خدمة العملاء</h3>
                        <ul>
                            <li><a href="">مبيعات الشركات </a></li>
                            <li><a href="">الأسئلة المتكررة</a></li>
                            <li><a href="">دليل التسوق والمطبوعات</a></li>
                            <li><a href="">مواقع المعارض</a></li>
                            <li><a href="">سياسة الضمان</a></li>
                            <li><a href=""> سياسة الاسترجاع والاستبدال</a></li>
                            <li><a href="">اتصل بنا > <br><b>920000089</b></a></li>
                        </ul>
                    </div>
                    <div>
                        <h3>خدمات جرير</h3>
                        <ul>
                            <li><a href="">تذاكر جرير</a></li>
                            <li><a href="">خدمة تقسيط المشتريات</a></li>
                            <li><a href="">خدمات ما بعد البيع</a></li>
                            <li><a href="">خدمة الحماية الشاملة</a></li>
                            <li><a href="">خدمة تمديد الضمان</a></li>
                            <li><a href="">حماية أجهزة آبل</a></li>
                            <li><a href="">بطاقة خصم جرير</a></li>
                            <li><a href="">بطاقة جرير للهدايا</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3>روابط سريعة</h3>
                        <ul>
                            <li><a href="">إصدارات جرير</a></li>
                            <li><a href="">قارئ جرير</a></li>
                            <li><a href="">شركاء برامج المكافئات</a></li>
                            <li><a href="">خدمات شركات الإتصالات</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3>روابط سريعة</h3>
                        <ul>
                            <li><a href="">عن جرير</a></li>
                            <li><a href="">من نحن</a></li>
                            <li><a href="">الحوكمة</a></li>
                            <li><a href="">علاقات المستثمرين والتقارير</a></li>
                            <li><a href="">الاستدامة</a></li>
                            <li><a href="">الأخبار</a></li>
                            <li><a href="">
                                    <h3>فرص العمل</h3>
                                </a></li>
                        </ul>
                    </div>
                </div>

                <div class="contact">
                    <h3>تواصل معنا</h3>
                    <ul class="row">
                        <li><a href=""><i class="fab fa-facebook"></i></a></li>
                        <li><a href=""><i class="fab fa-youtube"></i></a></li>
                        <li><a href=""><i class="fab fa-snapchat"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom row items-center">
            <ul class="row">
                <li><img src="assets/images/american-express.png" alt=""></li>
                <li><img src="assets/images/master.png" alt=""></li>
                <li><img src="assets/images/visa.png" alt=""></li>
                <li><img src="assets/images/mada.jpg" alt=""></li>
                <li><img src="assets/images/qitaf.png" alt=""></li>
            </ul>

            <div class="end-text">
                <div><a href="">سياسة الخصوصية</a> | <a href="">شروط الخدمة</a></div>
                <p>.جميع الحقوق محفوظة لمكتبة جرير © 2015. س.ت. 1010032264. اونلاين س.ت. 1010654213</p>
            </div>
        </div>
    </footer>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/timer.js"></script>
    <script src="assets/js/slider.js"></script>
</body>

</html>