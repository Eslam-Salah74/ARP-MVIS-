-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2025 at 04:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arp`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content1` text DEFAULT NULL,
  `content2` text DEFAULT NULL,
  `content3` text DEFAULT NULL,
  `features` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `content1`, `content2`, `content3`, `features`, `image`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"The Advanced Research Center (ARP), a research center specializing in the issues of “dialogue of cultures,” was established in Frankfurt, Germany, in 2024, in light of the growing importance of cultural interactions across the world, with the aim of:\",\"ar\":\"مركز الأبحاث المتقدمة\\\" ARP، مركز دراسات متخصص في طرح قضايا \\\"حوار الثقافات\\\"، تم تأسيسه في فرانكفورت، ألمانيا الاتحادية، عام 2024، على ضوء تصاعد أهمية التفاعلات الثقافية عبر العالم، بهدف:\"}', '{\"en\":\"It seems that the Kurdistan Region is heading towards a new political crisis. The Kurdistan Democratic Party (the ruling party in the Kurdistan Region) announced on March 19,\",\"ar\":\"يبدو أن إقليم كردستان مقبل على أزمة سياسية جديدة. إذ أعلن الحزب الديمقراطي الكردستاني (الحزب الحاكم في إقليم كردستان)، في 19 مارس الجاري،\"}', '{\"en\":\"It seems that the Kurdistan Region is heading towards a new political crisis. The Kurdistan Democratic Party (the ruling party in the Kurdistan Region) announced on March 19,\",\"ar\":\"يبدو أن إقليم كردستان مقبل على أزمة سياسية جديدة. إذ أعلن الحزب الديمقراطي الكردستاني (الحزب الحاكم في إقليم كردستان)، في 19 مارس الجاري،\"}', '{\"en\":[{\"title\":\"Our vision\",\"content\":\"It seems that the Kurdistan Region is heading towards a new political crisis. The Kurdistan Democratic Party (the ruling party in the Kurdistan Region) announced on March 19,\"},{\"title\":\"Our goal\",\"content\":\"It seems that the Kurdistan Region is heading towards a new political crisis. The Kurdistan Democratic Party (the ruling party in the Kurdistan Region) announced on March 19,\"},{\"title\":\"Our message\",\"content\":\"It seems that the Kurdistan Region is heading towards a new political crisis. The Kurdistan Democratic Party (the ruling party in the Kurdistan Region) announced on March 19,\"}],\"ar\":{\"68eb3025-d804-4222-a551-05617e7da5aa\":{\"title\":\"رؤيتنا\",\"content\":\"يبدو أن إقليم كردستان مقبل على أزمة سياسية جديدة. إذ أعلن الحزب الديمقراطي الكردستاني (الحزب الحاكم في إقليم كردستان)، في 19 مارس الجاري،\"},\"8608b907-948b-43a4-9a57-cc1fb58e940f\":{\"title\":\"هدفنا\",\"content\":\"يبدو أن إقليم كردستان مقبل على أزمة سياسية جديدة. إذ أعلن الحزب الديمقراطي الكردستاني (الحزب الحاكم في إقليم كردستان)، في 19 مارس الجاري،\"},\"cbd14530-6052-490e-949b-6f7b22dc9d82\":{\"title\":\"رسالتنا\",\"content\":\"يبدو أن إقليم كردستان مقبل على أزمة سياسية جديدة. إذ أعلن الحزب الديمقراطي الكردستاني (الحزب الحاكم في إقليم كردستان)، في 19 مارس الجاري،\"}}}', '01JGK7V86N5FR655DXW6RXY897.png', '2025-01-02 08:11:23', '2025-01-02 08:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `homepage` tinyint(1) NOT NULL DEFAULT 0,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `author_id`, `title`, `slug`, `subtitle`, `featured_image`, `image`, `summary`, `content`, `views`, `homepage`, `order`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '{\"en\":\"Open paths:\",\"ar\":\"مسارات مفتوحة:\"}', '{\"en\":\"Open-paths\",\"ar\":\"مسارات-مفتوحة\"}', '{\"en\":\"Possible trends for local elections in Ankara Municipality\",\"ar\":\"الاتجاهات المحتملة للانتخابات المحلية في بلدية أنقرة\"}', '01JGH3CFN0XFTYR1JVB6Q142PA.png', '01JGH3CFN3ZHB1QAEDA81BCKVA.png', '{\"en\":\"Globalization is not just an economic process, but includes cultural aspects through the exchange of ideas and values ​​between different societies, and other political aspects, in which countries seek to cooperate and resolve conflicts through international organizations.\",\"ar\":\"العولمة ليست مجرد عملية اقتصادية بل تشمل جوانب ثقافية عبر تبادل الأفكار والقيم بين المجتمعات المختلفة وأخرى سياسية وفيها تسعى الدول إلى التعاون وحل النزاعات عبر المنظمات الدولية.\"}', '{\"en\":\"<p>“And if you fear that you will not be able to deal justly with the orphan girls, then marry such women as seem good to you, two, a third, or four; but if you fear that you will not be able to deal justly, then one or those your right hands possess. That is more suitable that you may not incur injustice.” [An-Nisa’: 3].<br><br>Therefore, it was natural for the jurisprudential system to look at the institution of slavery, since its structure would never support human freedom, as its call practiced all forms of interpretation; to deny human ability to act, and attributed the whole matter to the one God “The Dominant over His servants”. Abu Hanifa was one of those who believed in compulsion, as he referred to a narration by Ibn Masoud that says: “The sperm remains in the womb for forty days, then it becomes a clot for forty days, then it becomes a lump of flesh for forty days, then its creation arises… and it says, O Lord (!), Male or female? Wretched or happy? What is his provision?” This is what Al-Tahawi decided, in what he transmitted from Abu Hanifa and his followers, saying: “And the happy one is the one who is happy with the decree of God Almighty, and the wretched one is the one who is wretched with His decree.” Ibn Taymiyyah confirmed this by saying: “Abu Hanifa is one of those who acknowledge predestination, according to the consensus of those who know him and his school of thought, and his words in response to the Qadarites are well-known in Al-Fiqh Al-Akbar, in which he elaborated the arguments in response to them in a way that no one else did.”<br><br>By engaging with the set of statements that appear to be contradictory in Abu Hanifa, it can be said that he believes in the metaphorical will of man, a statement in which he agrees with the Ash’aris, and the evidence for that is his saying: “The ability with which the servant commits sin is the same as being suitable for him to commit obedience, and he is punished for using the ability that God created in him and commanded him to use it in obedience rather than disobedience.” However, he quickly reverts to the belief in absolute compulsion, when he was asked: “Is it possible for any of the creatures to do in God’s kingdom what He has not decreed?” He said: “No, except that decree has two aspects, one of which is a command and the other is power.” As for the ability, He does not decree or prescribe disbelief for them, nor did He command it. Rather, He forbade it. And the command is of two types: the command of being, if He commands something, it will be, and it is not according to the command of revelation.<br><br>Then Abu Hanifa goes on to finally close the door to thinking about the entire issue, where he says: “Did you not know that the one who looks into destiny is like the one who looks into the sun’s rays, the more he looks, the more confused he becomes.” And when someone asked him: “How does God decree all matters, and proceed according to His destiny and decree, and hold people accountable for the work that comes through their hands?”; He said: “This is an issue that is difficult for people, so how can they bear it (!), this is a locked issue, the key to which has been lost, so if its key is found, he will know what is in it, and it will not be opened except by an informant from God who brings what he has and brings evidence and proof.”<br><br>For his part, Imam Malik invoked the term “the eternal knowledge of God” resulting from God’s will and desire; which frames everything, to deny the freedom of man and his ability to create his actions. In turn, Al-Shafi’i says that “the will of the servants is up to God Almighty, and they do not will except that God, Lord of the Worlds, wills, for people did not create their actions, and they are created by God Almighty.”<br><br>Imam Ahmad ibn Hanbal is an example of the tendency of the people of Hadith towards determinism, and he believed in destiny, good and bad, and that what a person does is by the power and will of God, so nothing falls into his possession except what he wants, and nothing comes from the servant that God did not prepare for him; therefore, he was harsh on the Qadarites, and did not approve of praying with them.<br><br>Imam Ahmad approves of absolute determinism, which was clearly manifested in his book “The Creed of the People of the Sunnah,” which he dictated to Judge Abu Al-Hussein Muhammad ibn Abi Ya’la; “Fate, whether good or bad, little or much, apparent or hidden, is from Allah, a decree that He decreed and a destiny that He ordained. All people will end up as Allah created them. Adultery, theft, drinking alcohol, killing a soul, eating unlawful money, associating partners with Allah and sins are all by decree and destiny, without any of the creation having an argument against Allah. Rather, Allah has the conclusive argument against His creation. Allah knows the obedience of the obedient and created them for it. Everyone works for what he was created for, and ends up as He decreed and knew from him. Allah is the doer of what He wills, the doer of what He wills.” Ibn Hanbal insists that man is compelled to do evil, saying: “Whoever claims that adultery is not predestination, it is said to him: Have you seen this woman, who became pregnant from adultery and gave birth to a child? Did Allah, the Almighty and Majestic, will to create this child? And did it occur in His prior knowledge? If he says: No, then he has claimed that there is a creator with Allah, and this is explicit polytheism.” Whoever claims that stealing, drinking alcohol, and eating unlawful money are not a matter of fate and destiny has claimed that this person is able to eat the livelihood of others, and this is the clear statement of the Zoroastrianism.</p>\",\"ar\":\"<p dir=\\\"rtl\\\">“وَإِنۡ خِفۡتُمۡ أَلَّا تُقۡسِطُوا۟ فِی ٱلۡیَتَـٰمَىٰ فَٱنكِحُوا۟ مَا طَابَ لَكُم مِّنَ ٱلنِّسَاۤءِ مَثۡنَىٰ وَثُلَـٰثَ وَرُبَـٰعَۖ فَإِنۡ خِفۡتُمۡ أَلَّا تَعۡدِلُوا۟ فَوَ ٰحِدَةً أَوۡ مَا مَلَكَتۡ أَیۡمَـٰنُكُمۡۚ ذَ ٰلِكَ أَدۡنَىٰۤ أَلَّا تَعُولُوا۟” [النساء: 3].</p><p dir=\\\"rtl\\\">وبالتالي، كان من الطبيعي أن تنظر المنظومة الفقهية لمؤسسة الرق، ذلك أنّ بنيتها لم تكن لتنتصر أبداً للحرية الإنسانية، حيث مارست دعوتها كل أشكال التأويل؛ لنفي القدرة الإنسانية على الفعل، وأرجعت الأمر كله للإله الواحد “ٱلۡقَاهِرُ فَوۡقَ عِبَادِهِۦۚ”.</p><p dir=\\\"rtl\\\">كان أبو حنيفة ممّن قالوا بالجبر، حيث أحال على رواية لابن مسعود تقول: “تكون النطفة في الرحم أربعين يوماً، ثم تكون علقة أربعين يوماً، ثم تكون مضغة أربعين يوماً، ثم ينشأ خلقه… فيقول يا رب(!)، ذكر أو أنثى؟ شقي أو سعيد؟ ما رزقه؟”. وهو ما قرره الطحاوي، فيما نقله عن أبي حنيفة وأتباعه، قائلاً: “والسعيد من سعد بقضاء الله تعالى، والشقي من شقي بقضائه”. وأكد ابن تيمية ذلك قائلاً:” إنّ أبا حنيفة من المقرين بالقدر، باتفاق أهل المعرفة به وبمذهبه، وكلامه في الرد على القدرية معروف في الفقه الأكبر، الذي بسط فيه الحجج في الرد عليهم بما لم يفعله غيره”.</p><p dir=\\\"rtl\\\">وبالاشتباك مع جملة المقولات التي تبدو متضاربة عند أبي حنيفة، يمكن القول إنّه يقول بالإرادة المجازية للإنسان، وهو قول يتفق فيه مع الأشاعرة، والدليل على ذلك قوله: “إنّ الاستطاعة التي يعمل بها العبد المعصية، هي بعينها تصلح لأن يعمل بها الطاعة، وهو معاقب في صرف الاستـطاعــة التي أحــدثـها الله فيـه، وأمـــره أن يستـعمـلها في الطـاعـة دون المعصية”. لكنّه سرعان ما يرتد إلى القول بالجبر المطلق، فحين سُئل: “هل يسع أحد من المخلوقين، أن يجري في ملك الله ما لم يقض. فقال لا، إلّا أنّ القضاء على وجهين منه أمر، والآخر قدرة. فأمّا القدرة فإنّه لا يقضى عليهم ويقدر لهم الكفر ولم يأمر به. بل نهى عنه. والأمر أمران أمر الكينونة، إذا أمر شيئاً كان، وهو على غير أمر الوحي”.</p><p dir=\\\"rtl\\\">ثم يذهب أبو حنيفة في نهاية الأمر إلى إغلاق باب التفكير في المسألة برمتها، حيث يقول: “أما علمتم أنّ الناظر في القدر كالناظر في شعاع الشمس، كلما ازداد نظراً ازداد حيرة”. وحين سأله أحدهم: “كيف يقضي الله الأمور كلها، ويجري على مقتضى قدره وقضائه، ويحاسب الناس على ما يجيء على أيديهم من عمل؟”؛ قال: “هذه مسألة استصعبت على الناس فأنى يطيقونها(!)، هذه مسألة مقفلة، قد ضل مفتاحها، فإن وجد مفتاحها علم ما فيها، ولم يفتح إلّا بمخبر من الله يأتي بما عنده ويأتي ببينة وبرهان”.</p><p dir=\\\"rtl\\\">من جهته، استدعى الإمام مالك مصطلح “علم الله الأزلي” الناتج عن إرادة الله ومشيئته؛ التي تؤطر كل شيء، لينفي حرية الإنسان وقدرته على خلق أفعاله. وبدوره يقول الشافعي إنّ “مشيئة العباد هي إلى الله تعالى، ولا يشاؤون إلا أن يشاء الله رب العالمين، فإنّ الناس لم يخلقوا أعمالهم، وهي من خلق الله تعالى”.</p><p dir=\\\"rtl\\\">ويُعد الإمام أحمد بن حنبل نموذجاً لنزوع أهل الحديث تجاه الجبر، وكان يؤمن بالقدر خيره وشره، وأنّ ما يفعله الإنسان بقدرة الله وإرادته، فلا يقع في ملكه إلّا ما يريد، ولا يصدر عن العبد شيء لم يهيئه الله له؛ لذلك كان يحمل بقسوة على القدرية، ولا يقر الصلاة معهم.</p><p dir=\\\"rtl\\\">ويقر الإمام أحمد بالجبرية المطلقة، التي تجلّت بوضوح في كتابه “عقيدة أهل السنة”، الذي أملاه على القاضي أبي الحسين محمد بن أبي يعلى؛ “فالقدر خيره وشره، وقليله وكثيره، وظاهره وباطنه، من اللّه، قضاء قضاه، وقدر قدّره، وكل الناس صائرون إلى ما خلقه الله لهم، فالزنى والسرقة وشرب الخمر، وقتل النفس وأكل المال الحرام، والشرك باللّه والمعاصي كلّها بقضاء وقدر، من غير أن يكون لأحد من الخلق على اللّه حجّة، بل للّه الحجّة البالغة على خلقه. فالله علم الطاعة من أهل الطاعة وخلقهم لها. وكلّ يعمل لما خلق له، وصائر لما قضى عليه وعلم منه، واللّه الفاعل لما يريد، الفعّال لما يشاء”.</p><p dir=\\\"rtl\\\">ويؤكد ابن حنبل بإصرار على أنّ الإنسان مجبر على الشر، قائلاً: “من زعم أنّ الزنى ليس بقدر، قيل له: أرأيت هذه المرأة، حملت من الزنى وجاءت بولد، هل شاء اللّه عزّ وجلّ أن يخلق هذا الولد؟ وهل مضى في سابق علمه؟ فإن قال: لا. فقد زعم أنّ مع اللّه خالقاً وهذا هو الشرك صراحاً. ومن زعم أنّ السرقة وشرب الخمر وأكل المال الحرام، ليس بقضاء وقدر، فقد زعم أنّ هذا الإنسان قادر على أن يأكل رزق غيره، وهذا صراح قول المجوسية”.</p>\"}', 0, 0, NULL, '2025-01-01 12:17:49', '2025-01-05 06:21:24');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Hussein Maalom\",\"ar\":\"حسين معلوم\"}', '01JGH1D4KWRDKXQ1TZCDHB9Y8E.png', '2025-01-01 11:38:12', '2025-01-01 11:38:12'),
(2, '{\"ar\":\"حسين معلوم\",\"en\":\"Hussein Maalom\"}', '01JGH1E57A22K283PE1VTRZHV0.png', '2025-01-01 11:38:45', '2025-01-01 11:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `order` int(11) DEFAULT NULL,
  `homepage` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `order`, `homepage`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Technological challenges\",\"ar\":\"التحديات التكنولوجية\"}', 'Technological-challenges', NULL, 0, '2025-01-01 11:34:34', '2025-01-01 11:34:34'),
(2, '{\"en\":\"Open paths\",\"ar\":\"مسارات مفتوحة\"}', 'Open-paths', NULL, 0, '2025-01-01 11:35:26', '2025-01-01 11:35:26'),
(3, '{\"en\":\"Economic challenges\",\"ar\":\"التحديات الاقتصادية\"}', 'Economic-challenges', NULL, 0, '2025-01-01 11:36:12', '2025-01-01 11:36:12'),
(4, '{\"en\":\"Global discussions\",\"ar\":\"نقاشات عالمية\"}', 'Global-discussions', NULL, 0, '2025-01-01 11:37:07', '2025-01-01 11:37:07'),
(5, '{\"en\":\"What Next?\",\"ar\":\"What Next?\"}', 'What-Next', NULL, 0, '2025-01-05 06:13:27', '2025-01-05 06:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `address`, `email`, `location`, `created_at`, `updated_at`) VALUES
(1, '[{\"phone\":\"01110731636\"}]', '[{\"addressAr\":\"+49 1578 \\u0623\\u0644\\u0645\\u0627\\u0646\\u064a\\u0627\\u060c \\u0641\\u0631\\u0627\\u0646\\u0643\\u0641\\u0648\\u0631\\u062a\\u060c \\u0627\\u0644\\u0628\\u0631\\u062c \\u0627\\u0644\\u0623\\u0648\\u0644\\u060c Br\\u00fcsseler Strasse 1-3\\u060c \\u0627\\u0644\\u0631\\u0645\\u0632 \\u0627\\u0644\\u0628\\u0631\\u064a\\u062f\\u064a: 60327 \\u0641\\u0631\\u0627\\u0646\\u0643\\u0641\\u0648\\u0631\\u062a.\",\"addressEn\":\"+49 1578 Germany, Frankfurt, Tower One, Brusseler Strasse 1-3, Postal code: 60327 Frankfurt.\"}]', '[{\"email\":\"eslamsalah20003000@gmail.com\"}]', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.780684226712!2d31.27167452564375!3d30.04314921863425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f9bc14c4e13%3A0xc867bbdbf699cfb0!2z2LnZhdin2LHYp9iqINin2YTYudio2YjYsSDYudmF2KfYsdmHIDE52KM!5e0!3m2!1sar!2seg!4v1736177593748!5m2!1sar!2seg', '2025-01-06 12:34:44', '2025-01-06 13:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(3, '{\"en\":\"Council of Advisors\",\"ar\":\"مجلس المستشارين\"}', '\"Council-of-Advisors\"', '2025-01-02 06:31:19', '2025-01-02 06:31:19'),
(4, '{\"en\":\"Center Director\",\"ar\":\"مدير المركز\"}', '\"Center-Director\"', '2025-01-02 06:31:57', '2025-01-02 06:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `experts`
--

CREATE TABLE `experts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experts`
--

INSERT INTO `experts` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Ghassan Al-Nabhan\",\"ar\":\"غسان النبهان\"}', '{\"en\":\"Ghassan-Al-Nabhan\",\"ar\":\"غسان-النبهان\"}', '01JGH6BDJXSN2A8412YYEF3N9F.png', '2025-01-01 13:04:57', '2025-01-06 08:25:51'),
(2, '{\"ar\":\"اسلام صلاح\",\"en\":\"Eslam Salah\"}', '{\"en\":\"Eslam-Salah\",\"ar\":\"اسلام-صلاح\"}', '01JGXFGF54HC4STFA0A6WMVH4H.jpeg', '2025-01-06 06:29:18', '2025-01-06 08:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `expert_articles`
--

CREATE TABLE `expert_articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expert_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `order` int(11) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `homepage` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expert_articles`
--

INSERT INTO `expert_articles` (`id`, `expert_id`, `category_id`, `title`, `slug`, `content`, `order`, `views`, `homepage`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '{\"ar\":\"دوافع سياسية\",\"en\":\"Political motives\"}', '{\"ar\":\"دوافع-سياسية\",\"en\":\"Political-motives\"}', '{\"ar\":\"<p dir=\\\"rtl\\\">كانت استقلالية قدرة الإنسان الحر عن قدرة الله، في المخيال الفقهي، تعني بالضرورة خروج الإنسان من تحت وصاية رجال الدين؛ وعليه استندت الجبرية اللاهوتية إلى القدرة الإلهية المطلقة، لإنكار وجود حرية الإرادة الإنسانية بشكل ينفي، في بعض الأحيان، إرادة الإنسان بشكل كلي، بداعي أنّ المشيئة الإلهية لا بد أن تتحقق بالضرورة، ذلك أنّ كل ما يفعله الإنسان محتوم. وهو ما يتماهى مع توصيف حسن حنفي: “الإنسان هنا مُتلقٍّ ومُتلقٍّ فقط، وفق مبدأ عبودية الإرادة”.</p><p dir=\\\"rtl\\\">وبالتالي، كان من الطبيعي أن تنظر المنظومة الفقهية لمؤسسة الرق، ذلك أنّ بنيتها لم تكن لتنتصر أبداً للحرية الإنسانية، حيث مارست دعوتها كل أشكال التأويل؛ لنفي القدرة الإنسانية على الفعل، وأرجعت الأمر كله للإله الواحد “ٱلۡقَاهِرُ فَوۡقَ عِبَادِهِۦۚ”.</p><p dir=\\\"rtl\\\">كان أبو حنيفة ممّن قالوا بالجبر، حيث أحال على رواية لابن مسعود تقول: “تكون النطفة في الرحم أربعين يوماً، ثم تكون علقة أربعين يوماً، ثم تكون مضغة أربعين يوماً، ثم ينشأ خلقه… فيقول يا رب(!)، ذكر أو أنثى؟ شقي أو سعيد؟ ما رزقه؟”. وهو ما قرره الطحاوي، فيما نقله عن أبي حنيفة وأتباعه، قائلاً: “والسعيد من سعد بقضاء الله تعالى، والشقي من شقي بقضائه”. وأكد ابن تيمية ذلك قائلاً:” إنّ أبا حنيفة من المقرين بالقدر، باتفاق أهل المعرفة به وبمذهبه، وكلامه في الرد على القدرية معروف في الفقه الأكبر، الذي بسط فيه الحجج في الرد عليهم بما لم يفعله غيره”.</p><p dir=\\\"rtl\\\">وبالاشتباك مع جملة المقولات التي تبدو متضاربة عند أبي حنيفة، يمكن القول إنّه يقول بالإرادة المجازية للإنسان، وهو قول يتفق فيه مع الأشاعرة، والدليل على ذلك قوله: “إنّ الاستطاعة التي يعمل بها العبد المعصية، هي بعينها تصلح لأن يعمل بها الطاعة، وهو معاقب في صرف الاستـطاعــة التي أحــدثـها الله فيـه، وأمـــره أن يستـعمـلها في الطـاعـة دون المعصية”. لكنّه سرعان ما يرتد إلى القول بالجبر المطلق، فحين سُئل: “هل يسع أحد من المخلوقين، أن يجري في ملك الله ما لم يقض. فقال لا، إلّا أنّ القضاء على وجهين منه أمر، والآخر قدرة. فأمّا القدرة فإنّه لا يقضى عليهم ويقدر لهم الكفر ولم يأمر به. بل نهى عنه. والأمر أمران أمر الكينونة، إذا أمر شيئاً كان، وهو على غير أمر الوحي”.</p><p dir=\\\"rtl\\\">ثم يذهب أبو حنيفة في نهاية الأمر إلى إغلاق باب التفكير في المسألة برمتها، حيث يقول: “أما علمتم أنّ الناظر في القدر كالناظر في شعاع الشمس، كلما ازداد نظراً ازداد حيرة”. وحين سأله أحدهم: “كيف يقضي الله الأمور كلها، ويجري على مقتضى قدره وقضائه، ويحاسب الناس على ما يجيء على أيديهم من عمل؟”؛ قال: “هذه مسألة استصعبت على الناس فأنى يطيقونها(!)، هذه مسألة مقفلة، قد ضل مفتاحها، فإن وجد مفتاحها علم ما فيها، ولم يفتح إلّا بمخبر من الله يأتي بما عنده ويأتي ببينة وبرهان”.</p><p dir=\\\"rtl\\\">من جهته، استدعى الإمام مالك مصطلح “علم الله الأزلي” الناتج عن إرادة الله ومشيئته؛ التي تؤطر كل شيء، لينفي حرية الإنسان وقدرته على خلق أفعاله. وبدوره يقول الشافعي إنّ “مشيئة العباد هي إلى الله تعالى، ولا يشاؤون إلا أن يشاء الله رب العالمين، فإنّ الناس لم يخلقوا أعمالهم، وهي من خلق الله تعالى”.</p><p dir=\\\"rtl\\\">ويُعد الإمام أحمد بن حنبل نموذجاً لنزوع أهل الحديث تجاه الجبر، وكان يؤمن بالقدر خيره وشره، وأنّ ما يفعله الإنسان بقدرة الله وإرادته، فلا يقع في ملكه إلّا ما يريد، ولا يصدر عن العبد شيء لم يهيئه الله له؛ لذلك كان يحمل بقسوة على القدرية، ولا يقر الصلاة معهم.</p><p dir=\\\"rtl\\\">ويقر الإمام أحمد بالجبرية المطلقة، التي تجلّت بوضوح في كتابه “عقيدة أهل السنة”، الذي أملاه على القاضي أبي الحسين محمد بن أبي يعلى؛ “فالقدر خيره وشره، وقليله وكثيره، وظاهره وباطنه، من اللّه، قضاء قضاه، وقدر قدّره، وكل الناس صائرون إلى ما خلقه الله لهم، فالزنى والسرقة وشرب الخمر، وقتل النفس وأكل المال الحرام، والشرك باللّه والمعاصي كلّها بقضاء وقدر، من غير أن يكون لأحد من الخلق على اللّه حجّة، بل للّه الحجّة البالغة على خلقه. فالله علم الطاعة من أهل الطاعة وخلقهم لها. وكلّ يعمل لما خلق له، وصائر لما قضى عليه وعلم منه، واللّه الفاعل لما يريد، الفعّال لما يشاء”.</p><p dir=\\\"rtl\\\">ويؤكد ابن حنبل بإصرار على أنّ الإنسان مجبر على الشر، قائلاً: “من زعم أنّ الزنى ليس بقدر، قيل له: أرأيت هذه المرأة، حملت من الزنى وجاءت بولد، هل شاء اللّه عزّ وجلّ أن يخلق هذا الولد؟ وهل مضى في سابق علمه؟ فإن قال: لا. فقد زعم أنّ مع اللّه خالقاً وهذا هو الشرك صراحاً. ومن زعم أنّ السرقة وشرب الخمر وأكل المال الحرام، ليس بقضاء وقدر، فقد زعم أنّ هذا الإنسان قادر على أن يأكل رزق غيره، وهذا صراح قول المجوسية”.</p>\",\"en\":\"<p>The independence of the free human being\'s ability from God\'s ability, in the jurisprudential imagination, necessarily meant that man would emerge from under the guardianship of the clergy; and accordingly, theological determinism relied on the absolute divine power, to deny the existence of human freedom of will in a way that sometimes negates human will completely, on the grounds that the divine will must necessarily be fulfilled, since everything that man does is inevitable. This is consistent with Hassan Hanafi\'s description: \\\"Man here is a recipient and a recipient only, according to the principle of the slavery of the will.\\\"<br><br>Therefore, it was natural for the jurisprudential system to look at the institution of slavery, since its structure would never triumph for human freedom, as its call practiced all forms of interpretation; to deny human ability to act, and attributed the whole matter to the one God \\\"the Dominant over His servants.\\\"<br><br>Abu Hanifa was one of those who believed in predestination, as he referred to a narration by Ibn Masoud that says: “The sperm remains in the womb for forty days, then it becomes a clot for forty days, then it becomes a lump of flesh for forty days, then its creation is created… and it says, O Lord (!), male or female? Wretched or happy? What is his provision?” This is what Al-Tahawi decided, in what he transmitted from Abu Hanifa and his followers, saying: “And the happy one is the one who is happy with the decree of Allah Almighty, and the wretched one is the one who is wretched with His decree.” Ibn Taymiyyah confirmed this, saying: “Abu Hanifa is one of those who acknowledge predestination, according to the consensus of those who know it and its doctrine, and his words in refuting the Qadarites are well-known in Al-Fiqh Al-Akbar, in which he elaborated the arguments in refuting them in a way that no one else did.” In dealing with the set of statements that seem to contradict Abu Hanifa, it can be said that he believes in the metaphorical will of man, a statement in which he agrees with the Ash\'aris, and the evidence for that is his saying: \\\"The ability with which the servant commits sin is the same as being suitable for him to commit obedience, and he is punished for spending the ability that God created in him, and ordered him to use it in obedience and not in disobedience.\\\" But he quickly reverts to the saying of absolute compulsion, when he was asked: \\\"Is it possible for any of the creatures to do in God\'s kingdom what He has not decreed? He said: No, except that the decree has two aspects, one of which is a command, and the other is power. As for power, He does not decree or predestine them to disbelieve and He did not command it. Rather, He forbade it. The command is of two types: the command of being, if He commands something, it will be, and it is not the command of revelation.\\\" Then Abu Hanifa finally goes on to close the door of thinking about the entire issue, where he says: “Did you not know that the one who looks into destiny is like the one who looks into the sun’s rays, the more he looks the more confused he becomes.” When someone asked him: “How does God decree all matters, and proceed according to His destiny and decree, and hold people accountable for the work they do?”; He said: “This is an issue that is difficult for people, so how can they bear it (!), this is a locked issue, the key to which has been lost, and if its key is found, he will know what is in it, and it will not be opened except by an informant from God who brings what he has and brings evidence and proof.”<br><br>For his part, Imam Malik invoked the term “God’s eternal knowledge” resulting from God’s will and desire; which frames everything, to deny the freedom of man and his ability to create his actions. In turn, Al-Shafi’i says that “the will of the servants is up to God Almighty, and they do not will except that God, Lord of the Worlds, wills, for people did not create their actions, and they are from the creation of God Almighty.”<br><br>Imam Ahmad ibn Hanbal is an example of the tendency of the people of Hadith towards determinism. He believed in destiny, both good and evil, and that what a person does is by the power and will of Allah. Nothing falls into his possession except what he wants, and nothing comes from the servant that Allah did not prepare for him. Therefore, he was harsh on the Qadarites and did not approve of praying with them. Imam Ahmad acknowledged absolute determinism, which was clearly demonstrated in his book “The Creed of the People of the Sunnah,” which he dictated to Judge Abu al-Husayn Muhammad ibn Abi Ya’la. “Decree, good and evil, little and much, apparent and hidden, is from Allah, a decree that He decreed and a destiny that He ordained. All people will end up with what Allah created for them. Adultery, theft, drinking alcohol, killing a person, eating unlawful money, associating partners with Allah, and all sins are by destiny and fate, without any of the creation having an argument against Allah. Rather, Allah has the conclusive argument against His creation. Allah knew obedience from the people of obedience and created them for it. And everyone works for what he was created for, and will become what he was decreed and known for, and Allah is the doer of what He wills, the doer of what He wills.” Ibn Hanbal insists that man is compelled to evil, saying: “Whoever claims that adultery is not predestination, it is said to him: Have you seen this woman, she became pregnant from adultery and gave birth to a child, did Allah the Almighty will to create this child? And did it occur in His foreknowledge? If he says: No, then he has claimed that there is a creator with Allah, and this is explicit polytheism. Whoever claims that theft, drinking alcohol, and eating unlawful money are not predestination, then he has claimed that this person is able to eat the sustenance of another, and this is the explicit statement of the Zoroastrians.”</p>\"}', NULL, 18, 0, '2025-01-01 13:58:29', '2025-01-06 13:36:19'),
(2, 1, 3, '{\"ar\":\"دوافع اقتصادية\",\"en\":\"Economic motives\"}', '{\"ar\":\"دوافع-اقتصادية\",\"en\":\"Economic-motives\"}', '{\"ar\":\"<p dir=\\\"rtl\\\">كانت استقلالية قدرة الإنسان الحر عن قدرة الله، في المخيال الفقهي، تعني بالضرورة خروج الإنسان من تحت وصاية رجال الدين؛ وعليه استندت الجبرية اللاهوتية إلى القدرة الإلهية المطلقة، لإنكار وجود حرية الإرادة الإنسانية بشكل ينفي، في بعض الأحيان، إرادة الإنسان بشكل كلي، بداعي أنّ المشيئة الإلهية لا بد أن تتحقق بالضرورة، ذلك أنّ كل ما يفعله الإنسان محتوم. وهو ما يتماهى مع توصيف حسن حنفي: “الإنسان هنا مُتلقٍّ ومُتلقٍّ فقط، وفق مبدأ عبودية الإرادة”.</p><p dir=\\\"rtl\\\">وبالتالي، كان من الطبيعي أن تنظر المنظومة الفقهية لمؤسسة الرق، ذلك أنّ بنيتها لم تكن لتنتصر أبداً للحرية الإنسانية، حيث مارست دعوتها كل أشكال التأويل؛ لنفي القدرة الإنسانية على الفعل، وأرجعت الأمر كله للإله الواحد “ٱلۡقَاهِرُ فَوۡقَ عِبَادِهِۦۚ”.</p><p dir=\\\"rtl\\\">كان أبو حنيفة ممّن قالوا بالجبر، حيث أحال على رواية لابن مسعود تقول: “تكون النطفة في الرحم أربعين يوماً، ثم تكون علقة أربعين يوماً، ثم تكون مضغة أربعين يوماً، ثم ينشأ خلقه… فيقول يا رب(!)، ذكر أو أنثى؟ شقي أو سعيد؟ ما رزقه؟”. وهو ما قرره الطحاوي، فيما نقله عن أبي حنيفة وأتباعه، قائلاً: “والسعيد من سعد بقضاء الله تعالى، والشقي من شقي بقضائه”. وأكد ابن تيمية ذلك قائلاً:” إنّ أبا حنيفة من المقرين بالقدر، باتفاق أهل المعرفة به وبمذهبه، وكلامه في الرد على القدرية معروف في الفقه الأكبر، الذي بسط فيه الحجج في الرد عليهم بما لم يفعله غيره”.</p><p dir=\\\"rtl\\\">وبالاشتباك مع جملة المقولات التي تبدو متضاربة عند أبي حنيفة، يمكن القول إنّه يقول بالإرادة المجازية للإنسان، وهو قول يتفق فيه مع الأشاعرة، والدليل على ذلك قوله: “إنّ الاستطاعة التي يعمل بها العبد المعصية، هي بعينها تصلح لأن يعمل بها الطاعة، وهو معاقب في صرف الاستـطاعــة التي أحــدثـها الله فيـه، وأمـــره أن يستـعمـلها في الطـاعـة دون المعصية”. لكنّه سرعان ما يرتد إلى القول بالجبر المطلق، فحين سُئل: “هل يسع أحد من المخلوقين، أن يجري في ملك الله ما لم يقض. فقال لا، إلّا أنّ القضاء على وجهين منه أمر، والآخر قدرة. فأمّا القدرة فإنّه لا يقضى عليهم ويقدر لهم الكفر ولم يأمر به. بل نهى عنه. والأمر أمران أمر الكينونة، إذا أمر شيئاً كان، وهو على غير أمر الوحي”.</p><p dir=\\\"rtl\\\">ثم يذهب أبو حنيفة في نهاية الأمر إلى إغلاق باب التفكير في المسألة برمتها، حيث يقول: “أما علمتم أنّ الناظر في القدر كالناظر في شعاع الشمس، كلما ازداد نظراً ازداد حيرة”. وحين سأله أحدهم: “كيف يقضي الله الأمور كلها، ويجري على مقتضى قدره وقضائه، ويحاسب الناس على ما يجيء على أيديهم من عمل؟”؛ قال: “هذه مسألة استصعبت على الناس فأنى يطيقونها(!)، هذه مسألة مقفلة، قد ضل مفتاحها، فإن وجد مفتاحها علم ما فيها، ولم يفتح إلّا بمخبر من الله يأتي بما عنده ويأتي ببينة وبرهان”.</p><p dir=\\\"rtl\\\">من جهته، استدعى الإمام مالك مصطلح “علم الله الأزلي” الناتج عن إرادة الله ومشيئته؛ التي تؤطر كل شيء، لينفي حرية الإنسان وقدرته على خلق أفعاله. وبدوره يقول الشافعي إنّ “مشيئة العباد هي إلى الله تعالى، ولا يشاؤون إلا أن يشاء الله رب العالمين، فإنّ الناس لم يخلقوا أعمالهم، وهي من خلق الله تعالى”.</p><p dir=\\\"rtl\\\">ويُعد الإمام أحمد بن حنبل نموذجاً لنزوع أهل الحديث تجاه الجبر، وكان يؤمن بالقدر خيره وشره، وأنّ ما يفعله الإنسان بقدرة الله وإرادته، فلا يقع في ملكه إلّا ما يريد، ولا يصدر عن العبد شيء لم يهيئه الله له؛ لذلك كان يحمل بقسوة على القدرية، ولا يقر الصلاة معهم.</p><p dir=\\\"rtl\\\">ويقر الإمام أحمد بالجبرية المطلقة، التي تجلّت بوضوح في كتابه “عقيدة أهل السنة”، الذي أملاه على القاضي أبي الحسين محمد بن أبي يعلى؛ “فالقدر خيره وشره، وقليله وكثيره، وظاهره وباطنه، من اللّه، قضاء قضاه، وقدر قدّره، وكل الناس صائرون إلى ما خلقه الله لهم، فالزنى والسرقة وشرب الخمر، وقتل النفس وأكل المال الحرام، والشرك باللّه والمعاصي كلّها بقضاء وقدر، من غير أن يكون لأحد من الخلق على اللّه حجّة، بل للّه الحجّة البالغة على خلقه. فالله علم الطاعة من أهل الطاعة وخلقهم لها. وكلّ يعمل لما خلق له، وصائر لما قضى عليه وعلم منه، واللّه الفاعل لما يريد، الفعّال لما يشاء”.</p><p dir=\\\"rtl\\\">ويؤكد ابن حنبل بإصرار على أنّ الإنسان مجبر على الشر، قائلاً: “من زعم أنّ الزنى ليس بقدر، قيل له: أرأيت هذه المرأة، حملت من الزنى وجاءت بولد، هل شاء اللّه عزّ وجلّ أن يخلق هذا الولد؟ وهل مضى في سابق علمه؟ فإن قال: لا. فقد زعم أنّ مع اللّه خالقاً وهذا هو الشرك صراحاً. ومن زعم أنّ السرقة وشرب الخمر وأكل المال الحرام، ليس بقضاء وقدر، فقد زعم أنّ هذا الإنسان قادر على أن يأكل رزق غيره، وهذا صراح قول المجوسية”.</p>\",\"en\":\"<p>The independence of the free human being\'s ability from God\'s ability, in the jurisprudential imagination, necessarily meant that man would emerge from under the guardianship of the clergy; and accordingly, theological determinism relied on the absolute divine power, to deny the existence of human freedom of will in a way that sometimes negates human will completely, on the grounds that the divine will must necessarily be fulfilled, since everything that man does is inevitable. This is consistent with Hassan Hanafi\'s description: \\\"Man here is a recipient and a recipient only, according to the principle of the slavery of the will.\\\"<br><br>Therefore, it was natural for the jurisprudential system to look at the institution of slavery, since its structure would never triumph for human freedom, as its call practiced all forms of interpretation; to deny human ability to act, and attributed the whole matter to the one God \\\"the Dominant over His servants.\\\"<br><br>Abu Hanifa was one of those who believed in predestination, as he referred to a narration by Ibn Masoud that says: “The sperm remains in the womb for forty days, then it becomes a clot for forty days, then it becomes a lump of flesh for forty days, then its creation is created… and it says, O Lord (!), male or female? Wretched or happy? What is his provision?” This is what Al-Tahawi decided, in what he transmitted from Abu Hanifa and his followers, saying: “And the happy one is the one who is happy with the decree of Allah Almighty, and the wretched one is the one who is wretched with His decree.” Ibn Taymiyyah confirmed this, saying: “Abu Hanifa is one of those who acknowledge predestination, according to the consensus of those who know it and its doctrine, and his words in refuting the Qadarites are well-known in Al-Fiqh Al-Akbar, in which he elaborated the arguments in refuting them in a way that no one else did.” In dealing with the set of statements that seem to contradict Abu Hanifa, it can be said that he believes in the metaphorical will of man, a statement in which he agrees with the Ash\'aris, and the evidence for that is his saying: \\\"The ability with which the servant commits sin is the same as being suitable for him to commit obedience, and he is punished for spending the ability that God created in him, and ordered him to use it in obedience and not in disobedience.\\\" But he quickly reverts to the saying of absolute compulsion, when he was asked: \\\"Is it possible for any of the creatures to do in God\'s kingdom what He has not decreed? He said: No, except that the decree has two aspects, one of which is a command, and the other is power. As for power, He does not decree or predestine them to disbelieve and He did not command it. Rather, He forbade it. The command is of two types: the command of being, if He commands something, it will be, and it is not the command of revelation.\\\" Then Abu Hanifa finally goes on to close the door of thinking about the entire issue, where he says: “Did you not know that the one who looks into destiny is like the one who looks into the sun’s rays, the more he looks the more confused he becomes.” When someone asked him: “How does God decree all matters, and proceed according to His destiny and decree, and hold people accountable for the work they do?”; He said: “This is an issue that is difficult for people, so how can they bear it (!), this is a locked issue, the key to which has been lost, and if he finds its key, he will know what is in it, and it will not be opened except by an informant from God who brings what he has and brings evidence and proof.”<br><br>For his part, Imam Malik invoked the term “God’s eternal knowledge” resulting from God’s will and desire; which frames everything, to deny the freedom of man and his ability to create his actions. In turn, Al-Shafi’i says that “the will of the servants is up to God Almighty, and they do not will except that God, Lord of the Worlds, wills, for people did not create their actions, and they are from the creation of God Almighty.”<br><br>Imam Ahmad ibn Hanbal is an example of the tendency of the people of Hadith towards determinism. He believed in destiny, both good and evil, and that what a person does is by the power and will of Allah. Nothing falls into his possession except what he wants, and nothing comes from the servant that Allah did not prepare for him. Therefore, he was harsh on the Qadarites and did not approve of praying with them. Imam Ahmad acknowledged absolute determinism, which was clearly demonstrated in his book “The Creed of the People of the Sunnah,” which he dictated to Judge Abu al-Husayn Muhammad ibn Abi Ya’la. “Decree, good and evil, little and much, apparent and hidden, is from Allah, a decree that He decreed and a destiny that He ordained. All people will end up with what Allah created for them. Adultery, theft, drinking alcohol, killing a person, eating unlawful money, associating partners with Allah, and all sins are by destiny and fate, without any of the creation having an argument against Allah. Rather, Allah has the conclusive argument against His creation. Allah knew obedience from the people of obedience and created them for it. And everyone works for what he was created for, and will become what he was decreed and known for, and Allah is the doer of what He wills, the doer of what He wills.” Ibn Hanbal insists that man is compelled to evil, saying: “Whoever claims that adultery is not predestination, it is said to him: Have you seen this woman, she became pregnant from adultery and gave birth to a child, did Allah the Almighty will to create this child? And did it occur in His foreknowledge? If he says: No, then he has claimed that there is a creator with Allah, and this is explicit polytheism. Whoever claims that theft, drinking alcohol, and eating unlawful money are not predestination, then he has claimed that this person is able to eat the sustenance of another, and this is the explicit statement of the Zoroastrians.”</p>\"}', NULL, 5, 0, '2025-01-06 06:30:47', '2025-01-06 13:37:34'),
(3, 1, 4, '{\"ar\":\"دوافع علمية\",\"en\":\"Scientific motives\"}', '{\"ar\":\"دوافع-علمية\",\"en\":\"Scientific-motives\"}', '{\"ar\":\"<p dir=\\\"rtl\\\">كانت استقلالية قدرة الإنسان الحر عن قدرة الله، في المخيال الفقهي، تعني بالضرورة خروج الإنسان من تحت وصاية رجال الدين؛ وعليه استندت الجبرية اللاهوتية إلى القدرة الإلهية المطلقة، لإنكار وجود حرية الإرادة الإنسانية بشكل ينفي، في بعض الأحيان، إرادة الإنسان بشكل كلي، بداعي أنّ المشيئة الإلهية لا بد أن تتحقق بالضرورة، ذلك أنّ كل ما يفعله الإنسان محتوم. وهو ما يتماهى مع توصيف حسن حنفي: “الإنسان هنا مُتلقٍّ ومُتلقٍّ فقط، وفق مبدأ عبودية الإرادة”.<br><br>وبالتالي، كان من الطبيعي أن تنظر المنظومة الفقهية لمؤسسة الرق، ذلك أنّ بنيتها لم تكن لتنتصر أبداً للحرية الإنسانية، حيث مارست دعوتها كل أشكال التأويل؛ لنفي القدرة الإنسانية على الفعل، وأرجعت الأمر كله للإله الواحد “ٱلۡقَاهِرُ فَوۡقَ عِبَادِهِۦۚ”.<br><br>كان أبو حنيفة ممّن قالوا بالجبر، حيث أحال على رواية لابن مسعود تقول: “تكون النطفة في الرحم أربعين يوماً، ثم تكون علقة أربعين يوماً، ثم تكون مضغة أربعين يوماً، ثم ينشأ خلقه… فيقول يا رب(!)، ذكر أو أنثى؟ شقي أو سعيد؟ ما رزقه؟”. وهو ما قرره الطحاوي، فيما نقله عن أبي حنيفة وأتباعه، قائلاً: “والسعيد من سعد بقضاء الله تعالى، والشقي من شقي بقضائه”. وأكد ابن تيمية ذلك قائلاً:” إنّ أبا حنيفة من المقرين بالقدر، باتفاق أهل المعرفة به وبمذهبه، وكلامه في الرد على القدرية معروف في الفقه الأكبر، الذي بسط فيه الحجج في الرد عليهم بما لم يفعله غيره”.<br><br>وبالاشتباك مع جملة المقولات التي تبدو متضاربة عند أبي حنيفة، يمكن القول إنّه يقول بالإرادة المجازية للإنسان، وهو قول يتفق فيه مع الأشاعرة، والدليل على ذلك قوله: “إنّ الاستطاعة التي يعمل بها العبد المعصية، هي بعينها تصلح لأن يعمل بها الطاعة، وهو معاقب في صرف الاستـطاعــة التي أحــدثـها الله فيـه، وأمـــره أن يستـعمـلها في الطـاعـة دون المعصية”. لكنّه سرعان ما يرتد إلى القول بالجبر المطلق، فحين سُئل: “هل يسع أحد من المخلوقين، أن يجري في ملك الله ما لم يقض. فقال لا، إلّا أنّ القضاء على وجهين منه أمر، والآخر قدرة. فأمّا القدرة فإنّه لا يقضى عليهم ويقدر لهم الكفر ولم يأمر به. بل نهى عنه. والأمر أمران أمر الكينونة، إذا أمر شيئاً كان، وهو على غير أمر الوحي”.<br><br>ثم يذهب أبو حنيفة في نهاية الأمر إلى إغلاق باب التفكير في المسألة برمتها، حيث يقول: “أما علمتم أنّ الناظر في القدر كالناظر في شعاع الشمس، كلما ازداد نظراً ازداد حيرة”. وحين سأله أحدهم: “كيف يقضي الله الأمور كلها، ويجري على مقتضى قدره وقضائه، ويحاسب الناس على ما يجيء على أيديهم من عمل؟”؛ قال: “هذه مسألة استصعبت على الناس فأنى يطيقونها(!)، هذه مسألة مقفلة، قد ضل مفتاحها، فإن وجد مفتاحها علم ما فيها، ولم يفتح إلّا بمخبر من الله يأتي بما عنده ويأتي ببينة وبرهان”.<br><br>من جهته، استدعى الإمام مالك مصطلح “علم الله الأزلي” الناتج عن إرادة الله ومشيئته؛ التي تؤطر كل شيء، لينفي حرية الإنسان وقدرته على خلق أفعاله. وبدوره يقول الشافعي إنّ “مشيئة العباد هي إلى الله تعالى، ولا يشاؤون إلا أن يشاء الله رب العالمين، فإنّ الناس لم يخلقوا أعمالهم، وهي من خلق الله تعالى”.<br><br>ويُعد الإمام أحمد بن حنبل نموذجاً لنزوع أهل الحديث تجاه الجبر، وكان يؤمن بالقدر خيره وشره، وأنّ ما يفعله الإنسان بقدرة الله وإرادته، فلا يقع في ملكه إلّا ما يريد، ولا يصدر عن العبد شيء لم يهيئه الله له؛ لذلك كان يحمل بقسوة على القدرية، ولا يقر الصلاة معهم.<br><br>ويقر الإمام أحمد بالجبرية المطلقة، التي تجلّت بوضوح في كتابه “عقيدة أهل السنة”، الذي أملاه على القاضي أبي الحسين محمد بن أبي يعلى؛ “فالقدر خيره وشره، وقليله وكثيره، وظاهره وباطنه، من اللّه، قضاء قضاه، وقدر قدّره، وكل الناس صائرون إلى ما خلقه الله لهم، فالزنى والسرقة وشرب الخمر، وقتل النفس وأكل المال الحرام، والشرك باللّه والمعاصي كلّها بقضاء وقدر، من غير أن يكون لأحد من الخلق على اللّه حجّة، بل للّه الحجّة البالغة على خلقه. فالله علم الطاعة من أهل الطاعة وخلقهم لها. وكلّ يعمل لما خلق له، وصائر لما قضى عليه وعلم منه، واللّه الفاعل لما يريد، الفعّال لما يشاء”.<br><br>ويؤكد ابن حنبل بإصرار على أنّ الإنسان مجبر على الشر، قائلاً: “من زعم أنّ الزنى ليس بقدر، قيل له: أرأيت هذه المرأة، حملت من الزنى وجاءت بولد، هل شاء اللّه عزّ وجلّ أن يخلق هذا الولد؟ وهل مضى في سابق علمه؟ فإن قال: لا. فقد زعم أنّ مع اللّه خالقاً وهذا هو الشرك صراحاً. ومن زعم أنّ السرقة وشرب الخمر وأكل المال الحرام، ليس بقضاء وقدر، فقد زعم أنّ هذا الإنسان قادر على أن يأكل رزق غيره، وهذا صراح قول المجوسية”.</p>\",\"en\":\"<p>The independence of the free human being\'s ability from God\'s ability, in the jurisprudential imagination, necessarily meant that man would emerge from under the guardianship of the clergy; and accordingly, theological determinism relied on the absolute divine power, to deny the existence of human freedom of will in a way that sometimes negates human will completely, on the grounds that the divine will must necessarily be fulfilled, since everything that man does is inevitable. This is consistent with Hassan Hanafi\'s description: \\\"Man here is a recipient and a recipient only, according to the principle of the slavery of the will.\\\"<br><br>Therefore, it was natural for the jurisprudential system to look at the institution of slavery, since its structure would never triumph for human freedom, as its call practiced all forms of interpretation; to deny human ability to act, and attributed the whole matter to the one God \\\"the Dominant over His servants.\\\"<br><br>Abu Hanifa was one of those who believed in predestination, as he referred to a narration by Ibn Masoud that says: “The sperm remains in the womb for forty days, then it becomes a clot for forty days, then it becomes a lump of flesh for forty days, then its creation is created… and it says, O Lord (!), male or female? Wretched or happy? What is his provision?” This is what Al-Tahawi decided, in what he transmitted from Abu Hanifa and his followers, saying: “And the happy one is the one who is happy with the decree of Allah Almighty, and the wretched one is the one who is wretched with His decree.” Ibn Taymiyyah confirmed this, saying: “Abu Hanifa is one of those who acknowledge predestination, according to the consensus of those who know it and its doctrine, and his words in refuting the Qadarites are well-known in Al-Fiqh Al-Akbar, in which he elaborated the arguments in refuting them in a way that no one else did.” In dealing with the set of statements that seem to contradict Abu Hanifa, it can be said that he believes in the metaphorical will of man, a statement in which he agrees with the Ash\'aris, and the evidence for that is his saying: \\\"The ability with which the servant commits sin is the same as being suitable for him to commit obedience, and he is punished for spending the ability that God created in him, and ordered him to use it in obedience and not in disobedience.\\\" But he quickly reverts to the saying of absolute compulsion, when he was asked: \\\"Is it possible for any of the creatures to do in God\'s kingdom what He has not decreed? He said: No, except that the decree has two aspects, one of which is a command, and the other is power. As for power, He does not decree or predestine them to disbelieve and He did not command it. Rather, He forbade it. The command is of two types: the command of being, if He commands something, it will be, and it is not the command of revelation.\\\" Then Abu Hanifa finally goes on to close the door of thinking about the entire issue, where he says: “Did you not know that the one who looks into destiny is like the one who looks into the sun’s rays, the more he looks the more confused he becomes.” When someone asked him: “How does God decree all matters, and proceed according to His destiny and decree, and hold people accountable for the work they do?”; He said: “This is an issue that is difficult for people, so how can they bear it (!), this is a locked issue, the key to which has been lost, and if he finds its key, he will know what is in it, and it will not be opened except by an informant from God who brings what he has and brings evidence and proof.”<br><br>For his part, Imam Malik invoked the term “God’s eternal knowledge” resulting from God’s will and desire; which frames everything, to deny the freedom of man and his ability to create his actions. In turn, Al-Shafi’i says that “the will of the servants is up to God Almighty, and they do not will except that God, Lord of the Worlds, wills, for people did not create their actions, and they are from the creation of God Almighty.”<br><br>Imam Ahmad ibn Hanbal is an example of the tendency of the people of Hadith towards determinism. He believed in destiny, both good and evil, and that what a person does is by the power and will of Allah. Nothing falls into his possession except what he wants, and nothing comes from the servant that Allah did not prepare for him. Therefore, he was harsh on the Qadarites and did not approve of praying with them. Imam Ahmad acknowledged absolute determinism, which was clearly demonstrated in his book “The Creed of the People of the Sunnah,” which he dictated to Judge Abu al-Husayn Muhammad ibn Abi Ya’la. “Decree, good and evil, little and much, apparent and hidden, is from Allah, a decree that He decreed and a destiny that He ordained. All people will end up with what Allah created for them. Adultery, theft, drinking alcohol, killing a person, eating unlawful money, associating partners with Allah, and all sins are by destiny and fate, without any of the creation having an argument against Allah. Rather, Allah has the conclusive argument against His creation. Allah knew obedience from the people of obedience and created them for it. And everyone works for what he was created for, and will become what he was decreed and known for, and Allah is the doer of what He wills, the doer of what He wills.” Ibn Hanbal insists that man is compelled to evil, saying: “Whoever claims that adultery is not predestination, it is said to him: Have you seen this woman, she became pregnant from adultery and gave birth to a child, did Allah the Almighty will to create this child? And did it occur in His foreknowledge? If he says: No, then he has claimed that there is a creator with Allah, and this is explicit polytheism. Whoever claims that theft, drinking alcohol, and eating unlawful money are not predestination, then he has claimed that this person is able to eat the sustenance of another, and this is the explicit statement of the Zoroastrians.”</p>\"}', NULL, 19, 0, '2025-01-06 06:52:51', '2025-01-06 12:51:00'),
(4, 2, 4, '{\"en\":\"Scientific discussions\",\"ar\":\"نقاشات علمية\"}', '{\"en\":\"Scientific-discussions\",\"ar\":\"نقاشات-علمية\"}', '{\"en\":\"<p>The independence of the free human being\'s ability from God\'s ability, in the jurisprudential imagination, necessarily meant that man would emerge from under the guardianship of the clergy; and accordingly, theological determinism relied on the absolute divine power, to deny the existence of human freedom of will in a way that sometimes negates human will completely, on the grounds that the divine will must necessarily be fulfilled, since everything that man does is inevitable. This is consistent with Hassan Hanafi\'s description: \\\"Man here is a recipient and a recipient only, according to the principle of the slavery of the will.\\\"<br><br>Therefore, it was natural for the jurisprudential system to look at the institution of slavery, since its structure would never triumph for human freedom, as its call practiced all forms of interpretation; to deny human ability to act, and attributed the whole matter to the one God \\\"the Dominant over His servants.\\\"<br><br>Abu Hanifa was one of those who believed in predestination, as he referred to a narration by Ibn Masoud that says: “The sperm remains in the womb for forty days, then it becomes a clot for forty days, then it becomes a lump of flesh for forty days, then its creation is created… and it says, O Lord (!), male or female? Wretched or happy? What is his provision?” This is what Al-Tahawi decided, in what he transmitted from Abu Hanifa and his followers, saying: “And the happy one is the one who is happy with the decree of Allah Almighty, and the wretched one is the one who is wretched with His decree.” Ibn Taymiyyah confirmed this, saying: “Abu Hanifa is one of those who acknowledge predestination, according to the consensus of those who know it and its doctrine, and his words in refuting the Qadarites are well-known in Al-Fiqh Al-Akbar, in which he elaborated the arguments in refuting them in a way that no one else did.” In dealing with the set of statements that seem to contradict Abu Hanifa, it can be said that he believes in the metaphorical will of man, a statement in which he agrees with the Ash\'aris, and the evidence for that is his saying: \\\"The ability with which the servant commits sin is the same as being suitable for him to commit obedience, and he is punished for spending the ability that God created in him, and ordered him to use it in obedience and not in disobedience.\\\" But he quickly reverts to the saying of absolute compulsion, when he was asked: \\\"Is it possible for any of the creatures to do in God\'s kingdom what He has not decreed? He said: No, except that the decree has two aspects, one of which is a command, and the other is power. As for power, He does not decree or predestine them to disbelieve and He did not command it. Rather, He forbade it. The command is of two types: the command of being, if He commands something, it will be, and it is not the command of revelation.\\\" Then Abu Hanifa finally goes on to close the door of thinking about the entire issue, where he says: “Did you not know that the one who looks into destiny is like the one who looks into the sun’s rays, the more he looks the more confused he becomes.” When someone asked him: “How does God decree all matters, and proceed according to His destiny and decree, and hold people accountable for the work they do?”; He said: “This is an issue that is difficult for people, so how can they bear it (!), this is a locked issue, the key to which has been lost, and if he finds its key, he will know what is in it, and it will not be opened except by an informant from God who brings what he has and brings evidence and proof.”<br><br>For his part, Imam Malik invoked the term “God’s eternal knowledge” resulting from God’s will and desire; which frames everything, to deny the freedom of man and his ability to create his actions. In turn, Al-Shafi’i says that “the will of the servants is up to God Almighty, and they do not will except that God, Lord of the Worlds, wills, for people did not create their actions, and they are from the creation of God Almighty.”<br><br>Imam Ahmad ibn Hanbal is an example of the tendency of the people of Hadith towards determinism. He believed in destiny, both good and evil, and that what a person does is by the power and will of Allah. Nothing falls into his possession except what he wants, and nothing comes from the servant that Allah did not prepare for him. Therefore, he was harsh on the Qadarites and did not approve of praying with them. Imam Ahmad acknowledged absolute determinism, which was clearly demonstrated in his book “The Creed of the People of the Sunnah,” which he dictated to Judge Abu al-Husayn Muhammad ibn Abi Ya’la. “Decree, good and evil, little and much, apparent and hidden, is from Allah, a decree that He decreed and a destiny that He ordained. All people will end up with what Allah created for them. Adultery, theft, drinking alcohol, killing a person, eating unlawful money, associating partners with Allah, and all sins are by destiny and fate, without any of the creation having an argument against Allah. Rather, Allah has the conclusive argument against His creation. Allah knew obedience from the people of obedience and created them for it. And everyone works for what he was created for, and will become what he was decreed and known for, and Allah is the doer of what He wills, the doer of what He wills.” Ibn Hanbal insists that man is compelled to evil, saying: “Whoever claims that adultery is not predestination, it is said to him: Have you seen this woman, she became pregnant from adultery and gave birth to a child, did Allah the Almighty will to create this child? And did it occur in His foreknowledge? If he says: No, then he has claimed that there is a creator with Allah, and this is explicit polytheism. Whoever claims that theft, drinking alcohol, and eating unlawful money are not predestination, then he has claimed that this person is able to eat the sustenance of another, and this is the explicit statement of the Zoroastrians.”</p>\",\"ar\":\"<p dir=\\\"rtl\\\">كانت استقلالية قدرة الإنسان الحر عن قدرة الله، في المخيال الفقهي، تعني بالضرورة خروج الإنسان من تحت وصاية رجال الدين؛ وعليه استندت الجبرية اللاهوتية إلى القدرة الإلهية المطلقة، لإنكار وجود حرية الإرادة الإنسانية بشكل ينفي، في بعض الأحيان، إرادة الإنسان بشكل كلي، بداعي أنّ المشيئة الإلهية لا بد أن تتحقق بالضرورة، ذلك أنّ كل ما يفعله الإنسان محتوم. وهو ما يتماهى مع توصيف حسن حنفي: “الإنسان هنا مُتلقٍّ ومُتلقٍّ فقط، وفق مبدأ عبودية الإرادة”.</p><p dir=\\\"rtl\\\">وبالتالي، كان من الطبيعي أن تنظر المنظومة الفقهية لمؤسسة الرق، ذلك أنّ بنيتها لم تكن لتنتصر أبداً للحرية الإنسانية، حيث مارست دعوتها كل أشكال التأويل؛ لنفي القدرة الإنسانية على الفعل، وأرجعت الأمر كله للإله الواحد “ٱلۡقَاهِرُ فَوۡقَ عِبَادِهِۦۚ”.</p><p dir=\\\"rtl\\\">كان أبو حنيفة ممّن قالوا بالجبر، حيث أحال على رواية لابن مسعود تقول: “تكون النطفة في الرحم أربعين يوماً، ثم تكون علقة أربعين يوماً، ثم تكون مضغة أربعين يوماً، ثم ينشأ خلقه… فيقول يا رب(!)، ذكر أو أنثى؟ شقي أو سعيد؟ ما رزقه؟”. وهو ما قرره الطحاوي، فيما نقله عن أبي حنيفة وأتباعه، قائلاً: “والسعيد من سعد بقضاء الله تعالى، والشقي من شقي بقضائه”. وأكد ابن تيمية ذلك قائلاً:” إنّ أبا حنيفة من المقرين بالقدر، باتفاق أهل المعرفة به وبمذهبه، وكلامه في الرد على القدرية معروف في الفقه الأكبر، الذي بسط فيه الحجج في الرد عليهم بما لم يفعله غيره”.</p><p dir=\\\"rtl\\\">وبالاشتباك مع جملة المقولات التي تبدو متضاربة عند أبي حنيفة، يمكن القول إنّه يقول بالإرادة المجازية للإنسان، وهو قول يتفق فيه مع الأشاعرة، والدليل على ذلك قوله: “إنّ الاستطاعة التي يعمل بها العبد المعصية، هي بعينها تصلح لأن يعمل بها الطاعة، وهو معاقب في صرف الاستـطاعــة التي أحــدثـها الله فيـه، وأمـــره أن يستـعمـلها في الطـاعـة دون المعصية”. لكنّه سرعان ما يرتد إلى القول بالجبر المطلق، فحين سُئل: “هل يسع أحد من المخلوقين، أن يجري في ملك الله ما لم يقض. فقال لا، إلّا أنّ القضاء على وجهين منه أمر، والآخر قدرة. فأمّا القدرة فإنّه لا يقضى عليهم ويقدر لهم الكفر ولم يأمر به. بل نهى عنه. والأمر أمران أمر الكينونة، إذا أمر شيئاً كان، وهو على غير أمر الوحي”.</p><p dir=\\\"rtl\\\">ثم يذهب أبو حنيفة في نهاية الأمر إلى إغلاق باب التفكير في المسألة برمتها، حيث يقول: “أما علمتم أنّ الناظر في القدر كالناظر في شعاع الشمس، كلما ازداد نظراً ازداد حيرة”. وحين سأله أحدهم: “كيف يقضي الله الأمور كلها، ويجري على مقتضى قدره وقضائه، ويحاسب الناس على ما يجيء على أيديهم من عمل؟”؛ قال: “هذه مسألة استصعبت على الناس فأنى يطيقونها(!)، هذه مسألة مقفلة، قد ضل مفتاحها، فإن وجد مفتاحها علم ما فيها، ولم يفتح إلّا بمخبر من الله يأتي بما عنده ويأتي ببينة وبرهان”.</p><p dir=\\\"rtl\\\">من جهته، استدعى الإمام مالك مصطلح “علم الله الأزلي” الناتج عن إرادة الله ومشيئته؛ التي تؤطر كل شيء، لينفي حرية الإنسان وقدرته على خلق أفعاله. وبدوره يقول الشافعي إنّ “مشيئة العباد هي إلى الله تعالى، ولا يشاؤون إلا أن يشاء الله رب العالمين، فإنّ الناس لم يخلقوا أعمالهم، وهي من خلق الله تعالى”.</p><p dir=\\\"rtl\\\">ويُعد الإمام أحمد بن حنبل نموذجاً لنزوع أهل الحديث تجاه الجبر، وكان يؤمن بالقدر خيره وشره، وأنّ ما يفعله الإنسان بقدرة الله وإرادته، فلا يقع في ملكه إلّا ما يريد، ولا يصدر عن العبد شيء لم يهيئه الله له؛ لذلك كان يحمل بقسوة على القدرية، ولا يقر الصلاة معهم.</p><p dir=\\\"rtl\\\">ويقر الإمام أحمد بالجبرية المطلقة، التي تجلّت بوضوح في كتابه “عقيدة أهل السنة”، الذي أملاه على القاضي أبي الحسين محمد بن أبي يعلى؛ “فالقدر خيره وشره، وقليله وكثيره، وظاهره وباطنه، من اللّه، قضاء قضاه، وقدر قدّره، وكل الناس صائرون إلى ما خلقه الله لهم، فالزنى والسرقة وشرب الخمر، وقتل النفس وأكل المال الحرام، والشرك باللّه والمعاصي كلّها بقضاء وقدر، من غير أن يكون لأحد من الخلق على اللّه حجّة، بل للّه الحجّة البالغة على خلقه. فالله علم الطاعة من أهل الطاعة وخلقهم لها. وكلّ يعمل لما خلق له، وصائر لما قضى عليه وعلم منه، واللّه الفاعل لما يريد، الفعّال لما يشاء”.</p><p dir=\\\"rtl\\\">ويؤكد ابن حنبل بإصرار على أنّ الإنسان مجبر على الشر، قائلاً: “من زعم أنّ الزنى ليس بقدر، قيل له: أرأيت هذه المرأة، حملت من الزنى وجاءت بولد، هل شاء اللّه عزّ وجلّ أن يخلق هذا الولد؟ وهل مضى في سابق علمه؟ فإن قال: لا. فقد زعم أنّ مع اللّه خالقاً وهذا هو الشرك صراحاً. ومن زعم أنّ السرقة وشرب الخمر وأكل المال الحرام، ليس بقضاء وقدر، فقد زعم أنّ هذا الإنسان قادر على أن يأكل رزق غيره، وهذا صراح قول المجوسية”.</p>\"}', NULL, 4, 0, '2025-01-06 07:33:59', '2025-01-06 10:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_01_01_132854_create_categories_table', 2),
(6, '2025_01_01_133033_create_authors_table', 2),
(7, '2025_01_01_133138_create_articles_table', 2),
(8, '2025_01_01_145410_create_experts_table', 3),
(9, '2025_01_01_152502_create_expert_articles_table', 4),
(10, '2025_01_01_152647_create_expert_articles_table', 5),
(11, '2025_01_01_155610_create_expert_articles_table', 6),
(13, '2025_01_02_081432_create_departments_table', 7),
(14, '2025_01_02_082604_create_team_members_table', 8),
(15, '2025_01_02_085638_create_subscriptions_table', 9),
(16, '2025_01_02_092307_create_abouts_table', 10),
(20, '2025_01_03_212652_create_settings_table', 11),
(21, '2025_01_06_134835_create_contacts_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sitename` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `headerTitle` text DEFAULT NULL,
  `headerSubtitle` text DEFAULT NULL,
  `headerBackground` text DEFAULT NULL,
  `footerBackground` text DEFAULT NULL,
  `footerLogo` text DEFAULT NULL,
  `socialmedia` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sitename`, `logo`, `favicon`, `headerTitle`, `headerSubtitle`, `headerBackground`, `footerBackground`, `footerLogo`, `socialmedia`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"ARP\",\"ar\":\"مركز البحوث المتقدمة\"}', '01JGTSB8MSJWZ9MTW06KW5RT5Y.jpg', '01JGTSB8NM44PNBS0E1DCAKHFZ.png', '{\"en\":\"Leading strategic thinking towards a more conscious future\",\"ar\":\"نقود الفكر الاستراتيجي نحو مستقبـل أكثر وعيًـا\"}', '{\"en\":\"At ARP, we combine strategic thinking with deep analysis to address growing global challenges. Join us on our journey towards a deeper understanding of the world.\",\"ar\":\"في ARP، نجمع بين الفكر العالمي والتحليل العميق لمواجهة التحديات المتزايدة. اتصلوا بنا في رحلتنا نحو فهم للجميع.\"}', '01JGTSB8NQQJGRNX7G2KBNM3Q8.png', '01JGTSB8NY900PPV8T9APN2VCN.png', '01JGTSB8P553KBWEGEHP0W41HV.svg', '[{\"url\":\"fhgfh\",\"img1\":\"01JGTSB8P9QZV9EAGET1JZ7HT0.svg\",\"img2\":\"01JGTSB8PBS96WMNFVKHS0JVCP.svg\"}]', '2025-01-05 06:29:46', '2025-01-05 06:29:46');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `department_id`, `image`, `name`, `title`, `created_at`, `updated_at`) VALUES
(1, 3, '01JGK2YX1ZWAME59C7QP7GXXGS.png', '{\"en\":\"Hussein Maalom\",\"ar\":\"حسين معلوم\"}', '{\"en\":\"Writer and researcher\",\"ar\":\"كاتب وباحث\"}', '2025-01-02 06:44:27', '2025-01-02 06:44:27'),
(2, 3, '01JGK34NAS292ZE8NJ0249KVTH.png', '{\"en\":\"Hussein Maalom\",\"ar\":\"حسين معلوم\"}', '{\"en\":\"Writer and researcher\",\"ar\":\"كاتب وباحث\"}', '2025-01-02 06:47:00', '2025-01-02 06:47:00'),
(3, 3, '01JGK35HAMQ9BPBCBV5G07E5SH.png', '{\"ar\":\"حسين معلوم\",\"en\":\"Hussein Maalom\"}', '{\"ar\":\"كاتب وباحث\",\"en\":\"Writer and researcher\"}', '2025-01-02 06:47:29', '2025-01-02 06:47:29'),
(4, 4, '01JGK375TH4A0KNWW78P22KTV2.png', '{\"en\":\"Hussein Maalom\",\"ar\":\"حسين معلوم\"}', '{\"en\":\"Writer and researcher\",\"ar\":\"كاتب وباحث\"}', '2025-01-02 06:48:22', '2025-01-02 06:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Eslam Salah', 'eslamsalah@gmail.com', NULL, '$2y$12$q079hWKBEn2rFjCCTtOGXO2Mtez8aqsS64c9puA809MZvqVyd9f9S', 'lP4QtdUN5JfE5Gn9dx4YXYwGSIfsMFHvhBlaqYjzTZ6tliJZ0cvNzixiVkbh', '2025-01-01 11:26:50', '2025-01-01 11:26:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_title_unique` (`title`),
  ADD KEY `articles_category_id_foreign` (`category_id`),
  ADD KEY `articles_author_id_foreign` (`author_id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experts`
--
ALTER TABLE `experts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expert_articles`
--
ALTER TABLE `expert_articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `expert_articles_title_unique` (`title`),
  ADD KEY `expert_articles_expert_id_foreign` (`expert_id`),
  ADD KEY `expert_articles_category_id_foreign` (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_members_department_id_foreign` (`department_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experts`
--
ALTER TABLE `experts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expert_articles`
--
ALTER TABLE `expert_articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `expert_articles`
--
ALTER TABLE `expert_articles`
  ADD CONSTRAINT `expert_articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `expert_articles_expert_id_foreign` FOREIGN KEY (`expert_id`) REFERENCES `experts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team_members`
--
ALTER TABLE `team_members`
  ADD CONSTRAINT `team_members_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
