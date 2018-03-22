# OMUSiber | Ondokuz Mayıs Üniversitesi Siber Güvenlik Topluluğu

OMUSiber, 2015 yılında Ondokuz Mayıs Üniversitesi'nden birkaç arkadaşın toplanıp kurduğu Karadeniz'in en büyük Siber Güvenlik Topluluğudur.

Biz, OMUSiber olarak üniversitemizde, şehrimizde ve ülkemizde insanların bilgi güvenliği konusunda bilinç kazanması için uğraşıyoruz.

Bunun için seminerler, konferanslar, eğitimler, yarışmalar düzenliyoruz.

Asıl gayemiz olan daha güvenli bir sanal ortam sağlamak fikrinde, bizi yolda yalnız bırakmayan değerli kardeş topluluklarımıza, firmalara ve öğretmenlerimize teşekkür ederiz.

Organizasyonlarımızda aktif görev almak ve hep beraber daha güçlü bir topluluk olma yolunda bize katılmak istersen, [twitter](https://twitter.com/omusiber) hesabımızdan bize ulaşabilirsin.

### Hata bildirirseniz seviniriz! :)

Biz kâr amacı gütmeyen gönüllü bir topluluğuz. Kodu açma sebebimiz gözümüzden kaçan yerleri düzeltmenizdir. Bu konuda yardımcı olursanız çok seviniriz.

> omusiber.org adresi güncel değildir. Çünkü proje geliştirilme aşamasında, stabil sürüme ulaşmadıkça omusiber.org güncellenmeyecektir.

# Projeyi Edinme

Öncelikle repository'yi indirmek için:

    $ git clone https://github.com/ozmu/omusiber.org
    $ cd omusiber.org

Composer ve npm bağımlılıklarını kurmak için

    $ composer install
    $ npm install
    $ npm run dev

.env dosyası oluşturma ve veritabanı ayarlarını kaydetme

    $ cp .env.example .env
    $ vi .env

Örnek veritabanı ayarı:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=veritabanim
    DB_USERNAME=kullaniciadim
    DB_PASSWORD=sifrem
    
Migrate etmek için:

    $ php artisan migrate
    
Artisan kullanarak projeyi ayaklandırmak:

    $ php artisan serve
    
Herhangi bir sorunda sosyal medya üzerinden veya mail yoluyla ulaşabilirsiniz.

Twitter: [@omusiber](https://twitter.com/omusiber)
Instagram: [omusiber](https://instagram.com/omusiber)
Mail : siber@omu.edu.tr
