@extends('layouts.app')

@section('content')


    <!--^--------------- Article pic in directs start -->
    <section class="container-xxl mx-auto  wow fadeInUp  px-lg-5 px-4 my-lg-5">
        <div class="row">
            <!-- breadcramp Start -->
            <div class="d-flex justify-content- card-small-text  gap-2 align-items-center mb-3">
                <a href="#" class="bread-cramp mb-0">مركز الأبحاث المتقدمة</a>
                <p class="bread-cramp  mb-0">/</p>
                <a href="#" class="bread-cramp mb-0">مركز الأبحاث المتقدمة</a>
            </div>
            <!-- breadcramp End -->
            <div class="col-lg-8">

                <div class="large-card position-relative">
                    <img class="large-card-img" src="{{'asset//img/cards/article.png')}}" alt="">

                    <div class=" card-cotent-ct z-1 position-absolute pt-3 px-3">
                        <div class="d-flex align-items-center justify-content-between gap-3 author-ct pb-3">
                            <div class="d-flex align-items-center gap-3">
                                <img class="author-avatar" src="{{'asset//img/cards/circle.png')}}" alt="">
                                <div class="d-flex flex-column ">
                                    <p class="sub-titles text-white mb-0">مركز الأبحاث المتقدمة</p>
                                    <p class="card-small-text mb-0">19 أغسطس، 2024</p>
                                </div>
                            </div>
                            <a href="#" class="custom-popUpOpen" data-link="https://yourwebsite.com/article-link">

                                <img src="{{'asset//img/icons/share.svg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!--~ Article Details start  -->
                <div class=" row">
                    <div class=" gap-2 align-items-center py-2 mt-4">
                        <div>
                            <h2 class="article-tit  mb-2 py-0"> حرية الإنسان: </h2>
                            <p class="article-sub pb-4">رفض الفقهاء وعقلانية القراءة المعاصرة</p>
                        </div>

                        <div class="article-contetnt-ct">
                            <div class="summary d-flex mt-4 py-4 px-3">
                                <div>
                                    <h2 class="main-headers">ملخص
                                    </h2>
                                    <div class="w-100 divider2 my-3 "></div>
                                    <p class="article-content">العولمة ليست مجرد عملية اقتصادية بل تشمل جوانب ثقافية عبر تبادل الأفكار والقيم بين المجتمعات
                                        المختلفة وأخرى سياسية وفيها تسعى الدول إلى التعاون وحل النزاعات عبر المنظمات الدولية.

                                    </p>
                                </div>
                            </div>

                            <p class="article-content">
                                “وَإِنۡ خِفۡتُمۡ أَلَّا تُقۡسِطُوا۟ فِی ٱلۡیَتَـٰمَىٰ فَٱنكِحُوا۟ مَا طَابَ لَكُم مِّنَ ٱلنِّسَاۤءِ مَثۡنَىٰ وَثُلَـٰثَ وَرُبَـٰعَۖ فَإِنۡ خِفۡتُمۡ أَلَّا تَعۡدِلُوا۟ فَوَ ٰحِدَةً أَوۡ مَا مَلَكَتۡ أَیۡمَـٰنُكُمۡۚ ذَ ٰلِكَ أَدۡنَىٰۤ أَلَّا تَعُولُوا۟” [النساء: 3].
                            </p>
                            <p class="article-content">
                                وبالتالي، كان من الطبيعي أن تنظر المنظومة الفقهية لمؤسسة الرق، ذلك أنّ بنيتها لم تكن
                                لتنتصر أبداً
                                للحرية الإنسانية، حيث مارست دعوتها كل أشكال التأويل؛ لنفي القدرة الإنسانية على الفعل،
                                وأرجعت الأمر
                                كله للإله الواحد “ٱلۡقَاهِرُ فَوۡقَ عِبَادِهِۦۚ”.
                            </p>
                            <p class="article-content">
                                كان أبو حنيفة ممّن قالوا بالجبر، حيث أحال على رواية لابن مسعود تقول: “تكون النطفة في
                                الرحم أربعين
                                يوماً، ثم تكون علقة أربعين يوماً، ثم تكون مضغة أربعين يوماً، ثم ينشأ خلقه… فيقول يا
                                رب(!)، ذكر أو
                                أنثى؟ شقي أو سعيد؟ ما رزقه؟”. وهو ما قرره الطحاوي، فيما نقله عن أبي حنيفة وأتباعه،
                                قائلاً: “والسعيد
                                من سعد بقضاء الله تعالى، والشقي من شقي بقضائه”. وأكد ابن تيمية ذلك قائلاً:” إنّ أبا
                                حنيفة من المقرين
                                بالقدر، باتفاق أهل المعرفة به وبمذهبه، وكلامه في الرد على القدرية معروف في الفقه الأكبر،
                                الذي بسط
                                فيه الحجج في الرد عليهم بما لم يفعله غيره”.
                            </p>
                            <P class="article-content">
                                وبالاشتباك مع جملة المقولات التي تبدو متضاربة عند أبي حنيفة، يمكن القول إنّه يقول
                                بالإرادة المجازية
                                للإنسان، وهو قول يتفق فيه مع الأشاعرة، والدليل على ذلك قوله: “إنّ الاستطاعة التي يعمل
                                بها العبد
                                المعصية، هي بعينها تصلح لأن يعمل بها الطاعة، وهو معاقب في صرف الاستـطاعــة التي
                                أحــدثـها الله فيـه،
                                وأمـــره أن يستـعمـلها في الطـاعـة دون المعصية”. لكنّه سرعان ما يرتد إلى القول بالجبر
                                المطلق، فحين
                                سُئل: “هل يسع أحد من المخلوقين، أن يجري في ملك الله ما لم يقض. فقال لا، إلّا أنّ القضاء
                                على وجهين
                                منه أمر، والآخر قدرة. فأمّا القدرة فإنّه لا يقضى عليهم ويقدر لهم الكفر ولم يأمر به. بل
                                نهى عنه.
                                والأمر أمران أمر الكينونة، إذا أمر شيئاً كان، وهو على غير أمر الوحي”.
                            </P>
                            <P class="article-content">
                                ثم يذهب أبو حنيفة في نهاية الأمر إلى إغلاق باب التفكير في المسألة برمتها، حيث يقول: “أما
                                علمتم أنّ
                                الناظر في القدر كالناظر في شعاع الشمس، كلما ازداد نظراً ازداد حيرة”. وحين سأله أحدهم:
                                “كيف يقضي الله
                                الأمور كلها، ويجري على مقتضى قدره وقضائه، ويحاسب الناس على ما يجيء على أيديهم من عمل؟”؛
                                قال: “هذه
                                مسألة استصعبت على الناس فأنى يطيقونها(!)، هذه مسألة مقفلة، قد ضل مفتاحها، فإن وجد
                                مفتاحها علم ما
                                فيها، ولم يفتح إلّا بمخبر من الله يأتي بما عنده ويأتي ببينة وبرهان”.
                            </P>
                            <p class="article-content">من جهته، استدعى الإمام مالك مصطلح “علم الله الأزلي” الناتج عن
                                إرادة الله
                                ومشيئته؛ التي تؤطر كل شيء،
                                لينفي حرية الإنسان وقدرته على خلق أفعاله. وبدوره يقول الشافعي إنّ “مشيئة العباد هي إلى
                                الله تعالى،
                                ولا يشاؤون إلا أن يشاء الله رب العالمين، فإنّ الناس لم يخلقوا أعمالهم، وهي من خلق الله
                                تعالى”.
                            </p>
                            <p class="article-content">
                                ويُعد الإمام أحمد بن حنبل نموذجاً لنزوع أهل الحديث تجاه الجبر، وكان يؤمن بالقدر خيره
                                وشره، وأنّ ما
                                يفعله الإنسان بقدرة الله وإرادته، فلا يقع في ملكه إلّا ما يريد، ولا يصدر عن العبد شيء لم
                                يهيئه الله
                                له؛ لذلك كان يحمل بقسوة على القدرية، ولا يقر الصلاة معهم.
                            </p>
                            <p class="article-content">
                                ويقر الإمام أحمد بالجبرية المطلقة، التي تجلّت بوضوح في كتابه “عقيدة أهل السنة”، الذي
                                أملاه على
                                القاضي أبي الحسين محمد بن أبي يعلى؛ “فالقدر خيره وشره، وقليله وكثيره، وظاهره وباطنه، من
                                اللّه، قضاء
                                قضاه، وقدر قدّره، وكل الناس صائرون إلى ما خلقه الله لهم، فالزنى والسرقة وشرب الخمر، وقتل
                                النفس وأكل
                                المال الحرام، والشرك باللّه والمعاصي كلّها بقضاء وقدر، من غير أن يكون لأحد من الخلق على
                                اللّه حجّة،
                                بل للّه الحجّة البالغة على خلقه. فالله علم الطاعة من أهل الطاعة وخلقهم لها. وكلّ يعمل
                                لما خلق له،
                                وصائر لما قضى عليه وعلم منه، واللّه الفاعل لما يريد، الفعّال لما يشاء”.
                            </p>
                            <p class="article-content">
                                ويؤكد ابن حنبل بإصرار على أنّ الإنسان مجبر على الشر، قائلاً: “من زعم أنّ الزنى ليس بقدر،
                                قيل له:
                                أرأيت هذه المرأة، حملت من الزنى وجاءت بولد، هل شاء اللّه عزّ وجلّ أن يخلق هذا الولد؟ وهل
                                مضى في سابق
                                علمه؟ فإن قال: لا. فقد زعم أنّ مع اللّه خالقاً وهذا هو الشرك صراحاً. ومن زعم أنّ السرقة
                                وشرب الخمر
                                وأكل المال الحرام، ليس بقضاء وقدر، فقد زعم أنّ هذا الإنسان قادر على أن يأكل رزق غيره،
                                وهذا صراح قول
                                المجوسية”.
                            </p>
                        </div>
                    </div>

                </div>
                <!--~ Article Details   End-->
            </div>
            <div class="col-lg-4 ">
                <!--~ section title  -->
                <div class="d-flex gap-1 align-items-start py-2 pt-0">
                    <!-- <div class="yellow-col"> <img src="{{'asset//img/icons/yellow.svg')}}" alt="">
                    </div> -->
                    <div>
                        <h2 class="sec-headers  mb-2 py-0"> الاكثر قراءة</h2>
                    </div>
                </div>
                <!--~ section title  End-->

                <div class="small-cards-ct-in- d-flex flex-column">
                    <div class="small-cards-interviews  pe-2 pt-0 mb-3 row">
                        <div class="col-lg-4 col-5 px-0">
                            <img src="{{'asset//img/cards/small.png')}}" class="small-cards-inter-img" alt="">
                        </div>
                        <div class="col-lg-8 col-7 px-2">
                            <!-- <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a> -->
                            <p class="sub-titles pe-0 mb-0 d-flex flex-column"><a href="./article.html"
                                    class="side-card-title">
                                    الذكرى العشرون:
                                </a>
                                <span class="side-card-sub-title mt-3">
                                    كيف تأثّر العراق جتماعياً بالغزو الأمريكي عام 2003؟

                                </span>
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex w-100  gap-2 align-items-center">
                                    <p class="card-small-text mb-0 fw-bold">الحائط العربي</p>
                                    <p class="card-small-text mb-0">25 مارس ، 2024 </p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="small-cards-interviews  pe-2 pt-0 mb-3 row">
                        <div class="col-lg-4 col-5 px-0">
                            <img src="{{'asset//img/cards/small.png')}}" class="small-cards-inter-img" alt="">
                        </div>
                        <div class="col-lg-8 col-7 px-2">
                            <!-- <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a> -->
                            <p class="sub-titles pe-0 mb-0 d-flex flex-column"><a href="./article.html"
                                    class="side-card-title">
                                    الذكرى العشرون:
                                </a>
                                <span class="side-card-sub-title mt-3">
                                    كيف تأثّر العراق جتماعياً بالغزو الأمريكي عام 2003؟

                                </span>
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex w-100  gap-2 align-items-center">
                                    <p class="card-small-text mb-0 fw-bold">الحائط العربي</p>
                                    <p class="card-small-text mb-0">25 مارس ، 2024 </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="small-cards-interviews  pe-2 pt-0 mb-3 row">
                        <div class="col-lg-4 col-5 px-0">
                            <img src="{{'asset//img/cards/small.png')}}" class="small-cards-inter-img" alt="">
                        </div>
                        <div class="col-lg-8 col-7 px-2">
                            <!-- <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a> -->
                            <p class="sub-titles pe-0 mb-0 d-flex flex-column"><a href="./article.html"
                                    class="side-card-title">
                                    الذكرى العشرون:
                                </a>
                                <span class="side-card-sub-title mt-3">
                                    كيف تأثّر العراق جتماعياً بالغزو الأمريكي عام 2003؟

                                </span>
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex w-100  gap-2 align-items-center">
                                    <p class="card-small-text mb-0 fw-bold">الحائط العربي</p>
                                    <p class="card-small-text mb-0">25 مارس ، 2024 </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="small-cards-interviews  pe-2 pt-0 mb-3 row">
                        <div class="col-lg-4 col-5 px-0">
                            <img src="{{'asset//img/cards/small.png')}}" class="small-cards-inter-img" alt="">
                        </div>
                        <div class="col-lg-8 col-7 px-2">
                            <!-- <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a> -->
                            <p class="sub-titles pe-0 mb-0 d-flex flex-column"><a href="./article.html"
                                    class="side-card-title">
                                    الذكرى العشرون:
                                </a>
                                <span class="side-card-sub-title mt-3">
                                    كيف تأثّر العراق جتماعياً بالغزو الأمريكي عام 2003؟

                                </span>
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex w-100  gap-2 align-items-center">
                                    <p class="card-small-text mb-0 fw-bold">الحائط العربي</p>
                                    <p class="card-small-text mb-0">25 مارس ، 2024 </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="small-cards-interviews  pe-2 pt-0 mb-3 row">
                        <div class="col-lg-4 col-5 px-0">
                            <img src="{{'asset//img/cards/small.png')}}" class="small-cards-inter-img" alt="">
                        </div>
                        <div class="col-lg-8 col-7 px-2">
                            <!-- <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a> -->
                            <p class="sub-titles pe-0 mb-0 d-flex flex-column"><a href="./article.html"
                                    class="side-card-title">
                                    الذكرى العشرون:
                                </a>
                                <span class="side-card-sub-title mt-3">
                                    كيف تأثّر العراق جتماعياً بالغزو الأمريكي عام 2003؟

                                </span>
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex w-100  gap-2 align-items-center">
                                    <p class="card-small-text mb-0 fw-bold">الحائط العربي</p>
                                    <p class="card-small-text mb-0">25 مارس ، 2024 </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 mb-5">
                    <!--~ section title  -->
                    <div class="d-flex gap-1 align-items-start py-2 pt-0">
                        <!-- <div class="yellow-col"> <img src="{{'asset//img/icons/yellow.svg')}}')}}" alt="">
                        </div> -->
                        <div>
                            <h2 class="sec-headers  mb-2 py-0"> اقرأ ايضاً </h2>
                        </div>
                    </div>
                    <!--~ section title  End-->

                    <div class="small-cards-ct-in-article d-flex flex-column">
                        <div class="small-cards-in-article   px-3  d-flex flex-column justify-content-center">
                            <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a>
                            <p class="sub-titles mb-1"><a class="side-card-title" href="./article.html">دوافع سياسية : </a>سباب الإعلان
                                عن
                                إجراء
                                انتخابات رئاسية مُبكرة في الجزائر</p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex w-100  gap-2 align-items-center justify-content-between pe-5">
                                    <p class="card-small-text mb-0">حسين معلوم</p>
                                    <p class="card-small-text mb-0">25 مارس ، 2024 </p>
                                </div>
                                <a href="#" class="custom-popUpOpen" data-link="https://yourwebsite.com/article-link">

                                    <img src="{{'asset//img/icons/share.svg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="small-cards-in-article   px-3  d-flex flex-column justify-content-center">
                            <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a>
                            <p class="sub-titles mb-1"><a class="side-card-title" href="./article.html">دوافع سياسية : </a>سباب الإعلان
                                عن
                                إجراء
                                انتخابات رئاسية مُبكرة في الجزائر</p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex w-100  gap-2 align-items-center justify-content-between pe-5">
                                    <p class="card-small-text mb-0">حسين معلوم</p>
                                    <p class="card-small-text mb-0"> 25 مارس ، 2024</p>
                                </div>
                                <a href="#" class="custom-popUpOpen" data-link="https://yourwebsite.com/article-link">

                                    <img src="{{'asset//img/icons/share.svg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="small-cards-in-article   px-3  d-flex flex-column justify-content-center">
                            <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a>
                            <p class="sub-titles mb-1"><a class="side-card-title" href="./article.html">دوافع سياسية : </a>سباب الإعلان
                                عن
                                إجراء
                                انتخابات رئاسية مُبكرة في الجزائر</p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex w-100  gap-2 align-items-center justify-content-between pe-5">
                                    <p class="card-small-text mb-0">حسين معلوم</p>
                                    <p class="card-small-text mb-0"> 25 مارس ، 2024</p>
                                </div>
                                <a href="#" class="custom-popUpOpen" data-link="https://yourwebsite.com/article-link">

                                    <img src="{{'asset//img/icons/share.svg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="small-cards-in-article   px-3  d-flex flex-column justify-content-center">
                            <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a>
                            <p class="sub-titles mb-1"><a class="side-card-title" href="./article.html">دوافع سياسية : </a>سباب الإعلان
                                عن
                                إجراء
                                انتخابات رئاسية مُبكرة في الجزائر</p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex w-100  gap-2 align-items-center justify-content-between pe-5">
                                    <p class="card-small-text mb-0">حسين معلوم</p>
                                    <p class="card-small-text mb-0">25 مارس ، 2024 </p>
                                </div>
                                <a href="#" class="custom-popUpOpen" data-link="https://yourwebsite.com/article-link">

                                    <img src="{{'asset//img/icons/share.svg')}}" alt="">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


    </section>
    <!--^--------------- Article pic in directs End -->

    <!--& share pop up start-->
    <div class="custom-popup" id="custom-popup">
        <span class="custom-close-btn" onclick="closeCustomPopup()"><i class="bi bi-x-lg"></i></span>
        <!-- Popup content here -->
        <p class="comingSoon text-center"> ارسل بواسطة</p>
        <div class="d-flex share-input-ct">
            <button onclick="copy()" class="border-0 copy-btn"> <svg xmlns="http://www.w3.org/2000/svg" width="20"
                    height="20" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
                </svg></button>
            <input class="link-share" value="dgfuy" type="text" name="" id="myInput">
        </div>
        <div class="d-flex justify-content-around gap-1 mt-3">
            <a class="share-icon-ct" href="#" target="_blank"><i class="share-icons bi bi-facebook"></i></a>
            <a class="share-icon-ct" href="#" target="_blank"><i class="share-icons bi bi-messenger"></i></a>
            <a class="share-icon-ct" href="#" target="_blank"><i class="share-icons bi bi-whatsapp"></i></a>
            <a class="share-icon-ct" href="#" target="_blank"><i class="share-icons bi bi-instagram"></i></a>
            <a class="share-icon-ct" href="#" target="_blank"><svg class="twit" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path
                        d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                </svg></a>

        </div>


    </div>
    <!--& share pop up end-->

@endsection
