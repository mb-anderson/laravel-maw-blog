-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 15 Nis 2023, 01:56:08
-- Sunucu sürümü: 8.0.32-0ubuntu0.22.04.2
-- PHP Sürümü: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mawblog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int NOT NULL,
  `publish_date` datetime NOT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1: Pending 2: Published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `url`, `featured_image`, `featured_text`, `category_id`, `publish_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Özel Web Uygulamalarının Avantajları', '<div>Özel uygulama geliştirme, hazır çözümlerle savaşını basit bir nedenden dolayı kazanır, özel bir uygulama oluşturduğunuzda, onun sahibi olursunuz. Kullanıma hazır çözüm, size hiçbir zaman tüm dizginleri ve özel yazılımın verdiği kontrol düzeyini vermez. Ismarlama uygulama, işinizle birlikte gelişebilir ve artan iş gereksinimlerine göre ölçeklenebilir. Özel bir uygulama satın almak, bir işletmenin kendisine yatırım yaptığı anlamına gelir. İşletmelerin özel uygulama oluşturmaktan elde ettiği bariz faydalar arasında ölçeklenebilirlik, kolay devreye alma ve artan üretkenlik yer alır. Hiç şüphe yok ki, mobil geliştiricilerin geleceği özel uygulamalara ait. IDC analistlerinin yaptığı araştırmaya göre, 2019\'un mobil uygulamaların benimsenmesinin belirli iş gereksinimlerini karşılayacak şekilde artacağı yıl olması bekleniyor. Bazen kullanıma hazır uygulamaları kullanırken bir soruna geçici bir çözüm bulmak için o kadar çok zaman harcayabiliriz ki, uzun vadede özel bir yazılıma sahip olmak daha uygun maliyetli ve daha hızlı olurdu. Ayrıca kullanıma hazır uygulamalarda, üzerine yeni ve çok özel bir özelliğin eklenmesi daha maliyetli olabilir veya bazı durumlarda mümkün olmayabilir. Burada, webApps4u\'da çözüm bulabildiğimiz birkaç örnek</div><div><br></div><div>Verileri şirket içi yazılımdan CSV olarak dışa aktarmak için bir program belirleyin ve günde birkaç kez ürünleri, fiyatları ve açıklamaları güncelleyen web sitesine yükleyin. Posta kodu listesinde olmayan müşteriler için kullanıcı kayıtlarını ve teslimatları kısıtlayın. Oluşturulan banner\'lar ve tıklandığında banner veya tekliflerle ilgili tüm ürünleri döndürür. Ayrıca, personelin ihtiyaç duyulduğunda banner\'larda değişiklik yapabileceği kolay erişimli bir yönetici sayfası oluşturuldu. Sipariş verirken belirli ürün miktarını sınırlayın.</div><div><br></div><div>Mevcut tüm müşterilere önceden oluşturulmuş şifreler, herkesi ilk girişlerinde şifre değiştirme sayfasına yönlendirdi. Liste devam ediyor. Özel bir web uygulaması ile elde edilemeyecek neredeyse hiçbir şey yoktur.</div>', 'ozel-web-uygulamalarnn-avantajlar', '1681511926.png', 'Özel uygulama geliştirme, hazır çözümlerle savaşını basit bir nedenden dolayı kazanır, özel bir uygulama oluşturduğunuzda, onun sahibi olursunuz.', 1, '2023-04-09 12:30:39', 2, '2023-04-08 21:30:39', '2023-04-14 19:38:46'),
(2, 'Web Tasarım', '<div>Yeni ve basit bir web sitesi tasarlamak kolay bir iş değildir. Dikkate alınması gereken birçok faktör var. Görsellerin kaliteli ve temiz olması, kullanıcı dostu olması, menü tasarımının sade olması, logonun dikkat çekmesi, içerik açısından zengin olması ve hızı unutmamamız gerekiyor.Sitenin hızlı yüklenmesi gerekiyor. Tüm web siteleri duyarlı olmalıdır. Günümüzde bilgisayarlardan çok mobil cihazlarda çok daha fazla zaman geçiriyoruz. webApps4u\'da önce mobil cihazlar için tasarlamaya başlıyoruz, ardından masaüstü ekranlara geçiyoruz. Renkler de önemlidir. Her rengin farklı bir sektörü veya karakteri temsil ettiğini biliyor muydunuz? bazı renkler ve anlamları.</div><div><br></div><div>Yeşil: Zenginliği, sağlığı, huzuru ve doğayı temsil eder. Gözün işlemesi en kolay renk olduğu için rahatlatıcı etkileri vardır. Yeşil kullanan şirketlerden bazıları BP, Whole Foods, Animal Planet ve Tropicana\'dır.</div><div><br></div><div>Sarı: Gençliği, iyimserliği ve neşeyi temsil eder. Genellikle dikkat çekmek için kullanılır. Sarı gözleri zorlayabilir, bu yüzden idareli kullanmak istersiniz. Sarı kullanan şirketler McDonalds, Hertz, National Geographics ve Best Buy\'dur.</div><div><br></div><div>Turuncu: Arkadaşlığı, coşkuyu ve yaratıcılığı temsil eder. İnsanları SATIN AL ve Abone Ol gibi işlemler yapmaya teşvik eder. Turuncu, anlık alışveriş yapanları da cezbeder. Şirketlerden bazıları Amazon, Payless, Harley Davidson ve Crush Orange\'dır.</div><div><br></div><div>Kırmızı: Tutkuyu, enerjiyi, aciliyeti, heyecanı, canlılığı ve tehlikeyi temsil eder. Genellikle insanların satın alması veya harekete geçmesi için aciliyet yaratmak için kullanılır. Güçlü duygusal tepkileri tetiklemede etkilidir. Restoranlar iştahı artırmak için kullanır. Kırmızı kullanan şirketler Kmart, H&amp;M, Coca-Cola ve Heinz\'dir.</div><div><br></div><div>Pembe: Dişilliği, tatlılığı, masumiyeti, doğurganlığı ve romantizmi temsil eder. Genellikle kadınlara ve genç kızlara hizmet ve ürün pazarlamak için kullanılır. Pembe kullanan şirketler PINK, Barbie ve T Mobile\'dır.</div><div><br></div><div>Mor: Kraliyeti, zenginliği, başarıyı ve bilgeliği temsil eder. Genellikle güzellik veya yaşlanma karşıtı ürünlerde kullanılır. Morun insanlar üzerinde çekici ve sakinleştirici bir etkisi vardır. Mor kullanan şirketler Crown Royal, Qatar ve Cadbury\'dir.</div><div><br></div><div>Mavi: Güveni, güvenliği, istikrarı, huzuru ve sakinliği temsil eder. Genellikle işletmelerde ve bankalarda markaya karşı bir güvenlik ve güven duygusu yaratmak için kullanılır. Mavi, hem erkeklerin hem de kadınların bir numaralı tercih ettiği renktir. Oral-B, American Express ve Dell gibi şirketler mavi rengi kullanır.</div><div><br></div><div>Gri: Tarafsızlığı, sadeliği, sakinliği, fütüristik ve mantığı temsil eder. Duygudan yoksundur ve teknoloji, endüstri, hassasiyet, kontrol, yeterlilik ve hatta karmaşıklık ile ilişkilendirilir. Gri kullanan şirketler arasında Apple, Mercedes ve Tesla bulunur.</div><div><br></div><div>Siyah: Gücü, lüksü, sofistike ve zarafeti temsil eder. Profesyonelliği, gücü ve hassasiyeti çağrıştırmak için genellikle lüks markaları pazarlamak için kullanılır. Siyah kullanan şirketler Rolls Roys, Chanel ve Loreal Paris\'tir.</div><div><br></div><div>Belirli metin veya düğmeleri daha görünür hale getirerek ziyaretçilerinizi istediğiniz yöne yönlendirmek için renkleri kullanabilirsiniz. Her tasarımcının kendi stili olacaktır, bu yüzden doğru bir ifade şekli yoktur, ancak acemi iseniz kullanabileceğiniz birkaç yöntem vardır.</div><div><br></div><div>- Yöntem 1- Bir görüntü ile başlayın. Bir görselden ilham alabilir, görseldeki renk düzenini de kullanabilirsiniz.</div><div><br></div><div>- Yöntem 2 - İş hedefiyle başlayın. İstediğiniz müşteri tipini çekecek rengi seçin ve ardından her şeyi bu renkle inşa edin.</div><div><br></div><div>- Yöntem 3 - Boş bir sayfa ile başlayın. Renkli bir plaka oluşturmanız gerekecek. Bir renk plakasında genellikle 3 renk bulunur ve iyi bir kural, %60, %30 ve %10\'u kullanmaktır. Birincil renk %60, ikincil renk %30 ve birincil ve ikincil renginizi tamamlamak için kullanılan üçüncü renk %10 olmalıdır.</div>', 'web-tasarm', '1681512030.png', 'Yeni ve basit bir web sitesi tasarlamak kolay bir iş değildir. Dikkate alınması gereken birçok faktör var.', 2, '2023-04-09 12:30:39', 2, '2023-04-08 21:30:39', '2023-04-14 19:40:30'),
(3, 'Aşamalı Web Uygulamaları', '<div>Yerel bir mobil uygulamaya mı yoksa duyarlı bir web uygulamasına mı sahip olmak arasında karar vermek zorunda kalabileceğiniz bir zaman olabilir. Yerel mobil uygulamanın, duyarlı web sitenizin sağlamadığı birkaç hoş ekstra özelliğe sahip olduğunu görebilirsiniz. Örneğin, bir kullanıcıya bildirim göndermek veya internet yokken çevrimdışı çalışmak. Ancak, sadece bu birkaç ekstra özelliğe sahip olmak için binlerce zor kazanılmış parayı harcamaya değer mi? Uygulamanızın bir Apple cihazında, Android cihazında ve ayrıca bir Windows cihazında çalışması gerektiğinde, bu maliyetin kolayca ikiye veya üçe katlanacağını unutmayın. Muhtemelen Aşamalı Web Uygulamalarının neden her yerde kullanılmadığını merak etmeye başladınız. Teknoloji bir süredir ortalıkta olmasına rağmen, tanıtılan yeni HTML5 ile uygulanması daha kolay hale geldi. Aşamalı bir web uygulaması nedir?</div><div><br></div><div>Aşamalı bir web uygulaması, en iyi web ve mobil uygulamaları birleştirmek için en son teknolojilerden yararlanır. Bunu web teknolojileri kullanılarak oluşturulmuş ancak bir uygulama gibi davranan ve hissettiren bir web sitesi olarak düşünün. Tarayıcıda ve hizmet çalışanlarının kullanılabilirliği ile Cache ve Push API\'lerindeki son gelişmeler, web geliştiricilerinin, kullanıcıların web uygulamalarını ana ekranlarına yüklemesine, anında iletme bildirimleri almasına ve hatta çevrimdışı çalışmasına olanak sağlamıştır.</div><div><br></div><div>Aşamalı Web Uygulamalarının (PWA\'lar) en iyi özelliklerinden bazıları; - Kurulabilir. Cihazın ana ekranına progresif bir web uygulaması yüklenebilir ve bu da cihazı kullanıma hazır hale getirir.</div><div>- İlerici. Tanım gereği, aşamalı bir web uygulaması herhangi bir cihazda çalışmalı ve kullanıcının cihazında ve tarayıcısında bulunan tüm özelliklerden yararlanarak aşamalı olarak geliştirilmelidir.</div><div>- Keşfedilebilir. Aşamalı bir web uygulaması bir web sitesi olduğu için arama motorlarında keşfedilebilir olmalıdır. Bu, aranabilirlik açısından web sitelerinin gerisinde kalan yerel uygulamalara göre büyük bir avantajdır.</div><div>- Uygulama benzeri. Aşamalı bir web uygulaması, yerel bir uygulama gibi görünmeli ve minimum sayfa yenilemesiyle uygulama kabuğu modeli üzerine inşa edilmelidir.</div><div>- Çevrimdışı. Çevrimdışı çalışır.</div><div>- Bildirim almak. Mobil uygulama kullanıcılarının uygulamalarını yeniden kullanma olasılığı daha yüksektir ve aşamalı web uygulamaları, push bildirimleri gibi özellikler aracılığıyla aynı hedeflere ulaşmayı amaçlar.</div><div>- Kurulabilir. Cihazın ana ekranına progresif bir web uygulaması yüklenebilir ve bu da cihazı kullanıma hazır hale getirir.</div><div>- Her Şey Güncel. Her yeni içerik yayınlandığında, kullanıcı internet bağlantısı olur olmaz en son içeriği alacaktır.</div><div>- Güvenli. Aşamalı web uygulamaları, tüm ağ isteklerinin hizmet çalışanları tarafından yakalanabilmesi ve ayrıca HTTPS üzerinden barındırılması gerektiğinden, ortadaki adam saldırılarını önler.</div><div><br></div><div>Bence, aşamalı web uygulamaları tüm web sitelerinin ve uygulamaların geleceği olacak çünkü hiçbir zaman web sitesi ve uygulamaları ayrı ayrı geliştirmenize gerek kalmayacak, bu da zamandan ve paradan tasarruf etmenizi sağlayacaktır. Şu anda WPA}\'ları desteklemeyen birkaç tarayıcı var. Bu tarayıcılar Safari ve Microsoft Edge\'dir. Microsoft Edge şu anda geliştirme modunda ancak tüm Apple cihazlarında ana tarayıcı olan Safari\'nin henüz bir planı yok..</div>', 'asamal-web-uygulamalar', '1681512052.png', 'Yerel bir mobil uygulamaya mı yoksa duyarlı bir web uygulamasına mı sahip olmak arasında karar vermek zorunda kalabileceğiniz bir zaman olabilir.', 1, '2023-04-09 12:30:39', 2, '2023-04-08 21:30:39', '2023-04-14 19:40:52'),
(4, 'Web Uygulamalarımız ile işinizi nasıl büyütebilirsiniz?', '<div>Hepimizin her gün yapmak zorunda olduğu, günü meşgul hissettiren ve bize yararlı olma hissini veren o kadar çok küçük görev var ki, ama gerçekte bu üretken olmak değil. Yeni müşteriler bulmak, yeni stratejiler uygulamak ve gerçek bir fark yaratan kararlar almak için zamanınız olduğunu hayal edin. Doğru yazılım, web uygulaması ve hatta bir uygulama ile bu küçük görevlerin çoğunu otomatik hale getirebiliriz.</div><div><br></div><div>Meşgul Birkaç örnek</div><div>Tüm personelin bir saatli cihaz kullanarak çalışmak üzere oturum açmasını sağlamak ve bu bilgilerin size programlanmış bir zamanda gönderilmesini sağlamak. Bir e-ticaretiniz veya herhangi bir satış yazılımınız varsa, en çok kullanılan raporları otomatik olarak oluşturun ve belirli bir zamanda size e-posta gönderin. Mühendislerinizin tüm işi günlüğe kaydetmek için çevrimiçi iş sayfasını kullanmasını ve ardından web uygulamasının size kimin hangi işi ne zaman tamamladığını gösteren bir raporu e-postayla göndermesini sağlayabilirsiniz. Bu, hafta boyunca çok zaman kazandıracak. Potansiyel müşterilerin saatler sonra fiyat teklifi almasına yardımcı olan web uygulamanıza sahip olmak.</div><div><br></div><div>Amazon, Uber, JustEat ve her şeyi çevrimiçi hale getiren diğer birçok şirkete baktığımızda görebileceğimiz gibi, tüm işi gece gündüz yapan insanlara ihtiyaç duymadıkları için çok büyümelerine izin verdiler. Sadece bir taksi rezervasyonu yapmak için bir aramayı cevaplayan insanlara ihtiyaçları yok, sadece basit bir yemek siparişi almak için birinin telefona cevap vermesine ihtiyaçları yok. Web Uygulamaları hayatı kolaylaştırmakla kalmaz, aynı zamanda insan hatalarını da azaltır. Telefonla yemek siparişi verdiğimiz ve kuzu şiş yerine kuzu döner aldığımız günleri hatırlayın. Şimdi bu kimin suçu :)</div><div><br></div><div>Eskiden sadece teslimatımızın nerede olduğunu sormak için saatlerce sırada beklerdik, şimdi Alexa\'ya \"teslimatım nerede\" diye sorabiliyoruz.</div><div><br></div><div>Bir düşünün, günlük olarak yaptığınız veya her gün yapmanız gereken zaman alıcı işler nelerdir? Çalışanlarınızı hangi görevler uzun süre meşgul ediyor?</div><div><br></div><div>Şimdi, sorunlarınıza özel bir çözüm tasarladıysanız, şimdi nasıl ilerlemeye ve ilerlemeye başlayabileceğinizi görmek zor değil. En kötü durum senaryosu, hataları durdurmaktan, çalışanların daha üretken olmasını ve gerçekten önemli olan şeylere konsantre olmasını sağlamaktan tasarruf edebilirsiniz.</div><div><br></div><div>Benim favorim, bu yazılım çözümlerinin siz uyurken işi yapması. Satış yapın, fatura oluşturun, ödeme alın, zaman çizelgeleri oluşturun, müşterilerin ihtiyaç duydukları tüm bilgileri almak için hesaplarında oturum açmasına olanak tanır. Uyandığınızda zaten bir günlük işi bitirmiş olursunuz.</div>', 'web-uygulamalarmz-ile-isinizi-nasl-buyutebilirsiniz', '1681512077.png', 'Hepimizin her gün yapmak zorunda olduğu ve günü meşgul hissettiren o kadar çok küçük görev var ki...', 4, '2023-04-09 12:30:39', 2, '2023-04-08 21:30:39', '2023-04-14 19:41:17'),
(5, 'Müşterimizin zamandan ve paradan tasarruf etmesine nasıl yardımcı olduk?', '<div>Bir asansör montaj şirketi bizimle temasa geçti ve 90 taşeronu olduğunu ve mühendislerinin yerini ve yaptıkları çalışma saatlerini takip etmekte zorlandıklarını vurguladı. 10\'dan fazla aktif sahaları vardı ve bazen mühendisler farklı Siteler. Çoğu site şantiyeydi ve bu da çoğu durumda internet ve hatta elektrik olmadığı anlamına geliyordu. Ayrıca, bazı mühendisler kurulum için belirlenmiş bir fiyat üzerinde anlaştılar ve işin %\'sini fatura edecekler ve bazı mühendisler, hangi siteleri ziyaret ettiklerini, varış zamanını ve bitiş zamanını açıklayan bir zaman çizelgesini dolduracakları saat başına ödeme alacaklar. Tüm bunlar, mühendisler ve muhasebe departmanı için çok sayıda e-posta ve evrak işi oluşturdu, burada her ay 90 fatura alacaklardı ve hepsi bir an önce ödeme talep ettiler, bu da hesap ekibine zaman çizelgelerinin ve faturaların ayrıntılarını kontrol etmeleri için biraz zaman verdi. Üstelik şirket, mühendislerin satın aldığı aletlerin bir kısmını da sattı ve her ayın sonunda ödeme yapmak zorunda kaldılar. Çoğu durumda mühendisler, hangi araçları aldıklarını özetleyen muhasebe departmanı için notlar bırakırdı. WebApps4u, mühendislerin çalışmak için oturum açabilecekleri ve ardından bulundukları siteyi seçebilecekleri bir web uygulaması geliştirme fikrini ortaya attı. Web uygulamasını mühendisler için kullanıcı dostu hale getirmek istedik, böylece bir site seçsinler ve ardından \"çalışmak için oturum aç\" düğmesine tıklasınlar, ancak telefonun rakımını ve enlemini veritabanına kaydettik, böylece düğmeye basıldığında nerede olduklarını biliyorduk. tıklandı. Ofis personeli, günün etkinliğini yükleyebilir ve elektronik tablo benzeri bir düzende kimin nerede olduğunu görebilir. Mühendisin nerede olduğunu bulmak için harita üzerinde görüntülemek üzere mühendisin konumuna daha fazla tıklayabilirler. Mühendis, oturumu kapatmamışsa, ertesi gün başka bir yerde ve hatta aynı yerde uygulamada oturum açamaz. Oturumu kapatmayı unuturlarsa, ofis ekibini arayıp açıklamak zorunda kalacaklardı, bu durumda web uygulaması, ofis personelinin çıkış saatini düzenlemesine izin verdi. Mühendisler ayrıca web uygulaması aracılığıyla ihtiyaç duydukları tüm araçlara göz atabilir, ardından ofis personelinin bir e-posta alacağı siparişi verebilir ve siparişi teslim almak için hazırlayabilir. Bu, mühendislerin sahadayken organize olmalarına ve hatta listelerine öğe eklemeye başlamalarına olanak sağladı. Tabii ki, ofisteyken de listelerine daha fazlasını ekleyebilirler.</div><div><br></div><div>Mühendisler, işin ne kadar için anlaşıldığı da dahil olmak üzere tüm bilgileri otomatik olarak dolduran yeni bir faturayı tıklayabilecekleri ve basitçe ücretlendirecekleri yüzdeyi girebilecekleri veya devam edebilecekleri fatura bölümünü seçebilmelerine bayıldılar. daha önce kısmen faturalandırdıkları işi faturalandırıyorlar. Saatlik ücret alıyorlarsa, mühendisler henüz faturalamadıkları haftaları seçebilir ve zaman çizelgelerinden faturayı oluşturabilirler. Bazı mühendisler 5 haftada bir, bazıları 2 haftada bir ve bazı mühendisler çoğunlukla 4 haftada bir fatura kestiği için bu da çok kullanışlıydı. Bunun yanı sıra, satın alınan tüm araçları da faturaya ekledi.</div><div><br></div><div>Ofis ekibi her faturayı ödeme yaptıktan sonra açılır menü üzerinden Ödendi / Ödenmedi / Kısmen ödendi şeklinde gerekçeli olarak işaretledi. Mühendislerin ödeme alıp almadıklarını sormak için aramalarına gerek yoktu, ÜCRETLİ DEĞİL seçeneğinin ÖDENDİ olarak değiştirilip değiştirilmediğini kontrol etmek için web uygulamasında oturum açmaları yeterli :)</div><div><br></div><div>O sırada asansör mühendisleri için ortalama saatlik ücret 90 Sterlin\'di ve her gün işten 1 saat erken ayrılsalardı bu web uygulaması şirketi sadece maaş bordrosunda yaklaşık 2000 Sterlin tasarruf ettirirdi. Muhasebe departmanı için kazanılan süre paha biçilemezdi. Her ayın sonundan korkarlardı. Mühendisler artık tüm ay için faturalarını oluşturmak için mandıralarını incelemek zorunda kalmadılar ve bu onlara saatler kazandırdı. Genel olarak işler çok daha sorunsuz ilerliyordu ve yönetici ekibi için birçok stresli iş yükünün üstesinden geliyordu.</div>', 'musterimizin-zamandan-ve-paradan-tasarruf-etmesine-nasl-yardmc-olduk', '1681512094.png', 'Bir asansör montaj şirketi bizimle iletişime geçerek 90 taşeronları olduğunu ve ...', 4, '2023-04-09 12:30:39', 2, '2023-04-08 21:30:39', '2023-04-14 19:41:34'),
(6, 'Fikirleri Hayata Geçirmek', '<div>Hiç çok para kazandırabilecek bir uygulama, yazılım veya hatta bir web sitesi fikriniz oldu mu? Veya belki de pek çok kişiye yardımcı olabilecek, ancak fikirlerinizle kime gideceğini ve kime güveneceğini bilemeyen bir fikir. Günün sonunda bu senin fikrin senin vizyonun ve başka kimsenin onu çalmasını istemiyorsun. Muhtemelen ne kadara mal olacak, ne kadar sürecek, vizyonunuzu hayata geçirmek için ne gerekiyor gibi birçok sorunuz var. Bunu oldukça sık duyuyoruz ve burada Web Apps 4 U\'da gizlilik bizim önceliğimizdir. Biz bir yazılım şirketiyiz ve bu bizim işimiz ve insanların ve şirketlerin fikirlerini hayata geçirmelerine yardımcı olmak için buradayız, fikir alıp kendimiz yapmak için değil. İnşaat, asansör kurulumu, finans, catering, çamaşırhane, toptan satış, dövüş sanatları, sanat portföyü, yazar ve daha pek çok sektör için web siteleri, web uygulamaları ve uygulamalar oluşturduk, bu nedenle vizyona ve bilgiye sahip olduğunuzu biliyoruz. - Fikrinizi nasıl hayata geçirebilirsiniz. Sahip olduğumuz deneyimle, size işinizi başarmanız ve geliştirmeniz için en iyi şansı vermek için sadece teknoloji tarafında yardım ve tavsiyelerde bulunuyoruz.</div><div><br></div><div>Ayrıntıları dinleyip tartışacağız ve size bir fiyat ve zaman çizelgesi vereceğiz, böylece matematiğinizi yaptıktan sonra başlamaya değip değmeyeceğine karar verebilirsiniz.</div>', 'fikirleri-hayata-gecirmek', '1681512114.png', 'Hiç çok para kazandırabilecek bir uygulama, yazılım veya hatta bir web sitesi fikriniz oldu mu?', 1, '2023-04-09 12:30:39', 2, '2023-04-08 21:30:39', '2023-04-14 19:41:54'),
(7, 'blog test', '<p>Content blog</p>', 'blog-test', '1681347424.png', 'TEST BLOG FEATURE', 1, '2023-04-10 03:48:43', 2, '2023-04-10 12:49:31', '2023-04-13 12:38:03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Teknoloji', '2023-04-08 21:30:39', '2023-04-08 21:30:39'),
(2, 'Oyun', '2023-04-08 21:30:39', '2023-04-08 21:30:39'),
(3, 'Araba', '2023-04-08 21:30:39', '2023-04-08 21:30:39'),
(4, 'Eğlece', '2023-04-08 21:30:39', '2023-04-08 21:30:39'),
(5, 'Kitap', '2023-04-08 21:30:39', '2023-04-08 21:30:39');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_21_171559_create_blogs_table', 1),
(5, '2021_03_21_171615_create_blog_categories_table', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mustafa Burak', 'Yücel', 'mburakyucel38@gmail.com', 'admin', '$2y$10$FSrQ0etD6u5zg4itGIpXTOc2hT/Jm7FyvVGfMu27Rq4czx8q1xwmq', NULL, '2023-04-08 21:30:39', '2023-04-08 23:57:31'),
(2, 'Murat Baki', 'Yücel', 'bakiyucel38@gmail.com', 'admin', '$2y$10$PpIO6TRa/v48hdYWjtOfoe1pJSiGTJxXl6rRfVJtEWn0LdJpX.6lK', NULL, '2023-04-08 21:30:40', '2023-04-13 12:51:45'),
(23, 'Thomas Anderson', 'Yücel', 'mburakyucel@hotmail.com', 'admin', '$2y$10$xknNsy27J5gwC1X6GS1dAuWTW.y13QV2G3cIdKB3dvWYXutu5.JAq', NULL, '2023-04-09 20:40:44', '2023-04-13 12:52:21');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_url_unique` (`url`);

--
-- Tablo için indeksler `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
