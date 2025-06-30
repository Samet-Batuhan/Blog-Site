# PHP Blog Sitesi 📝

Bu proje, PHP ve MySQL kullanılarak geliştirilmiş basit bir blog platformudur. Kullanıcıların kaydolup giriş yapabildiği, adminlerin ise blog yazılarını yönetebildiği bir sistem içerir.

## Hakkında ℹ️

Bu proje, dinamik bir web sitesi oluşturma pratiği olarak geliştirilmiştir. Kullanıcı ve admin rolleri ile temel blog işlevselliklerini içerir. Amaç, PHP ile veritabanı işlemleri, oturum yönetimi ve temel CRUD (Create, Read, Update, Delete) operasyonlarını göstermektir.

## Özellikler ✨

- **Kullanıcı Sistemi:**
  - Kullanıcı kaydı
  - Kullanıcı girişi
- **Admin Paneli:**
  - Ayrı admin giriş sayfası
  - Yeni blog yazısı ekleme ✍️
  - Mevcut yazıları düzenleme ve silme 🗑️
- **Blog Arayüzü:**
  - Anasayfada tüm blog yazılarını listeleme
  - Yazılara tıklandığında detaylarını görme 📖

## Kullanılan Teknolojiler 💻

- **Backend:** PHP 🐘
- **Veritabanı:** MySQL 🗄️
- **Frontend:** HTML, CSS, JavaScript 🌐
- **Veritabanı Bağlantısı:** PDO

## Kurulum 🚀

Projeyi yerel makinenizde çalıştırmak için aşağıdaki adımları izleyin:

1.  **Projeyi Klonlayın:**
    ```sh
    git clone https://github.com/kullanici-adiniz/proje-adiniz.git
    ```

2.  **Veritabanını Kurun:**
    -   `phpMyAdmin` veya benzeri bir araca gidin.
    -   `kayit` adında yeni bir veritabanı oluşturun.
    -   Proje dosyaları içerisinde bir `.sql` dosyası varsa, bu dosyayı oluşturduğunuz veritabanına içe aktarın. Eğer yoksa, aşağıdaki tablolara benzer yapıları manuel olarak oluşturmanız gerekebilir. (Projenin yapısına göre tahmin edilen tablo yapısıdır, kendi yapınıza göre düzenlemeniz gerekebilir.)

3.  **Veritabanı Bağlantısını Yapılandırın:**
    -   `baglan.php` dosyasını açın.
    -   Kendi veritabanı sunucu bilgilerinize göre aşağıdaki satırı güncelleyin:
        ```php
        $db = new PDO("mysql:host=localhost; dbname=kayit; charset=utf8; ", 'kullanici_adiniz', 'sifreniz');
        ```
        *Not: Orijinal projede port (`3309`) ve şifresiz (`''`) bağlantı kullanılmıştır. Kendi yapılandırmanıza göre düzenleyin.*

4.  **Projeyi Çalıştırın:**
    -   Projeyi `XAMPP`, `WAMP` gibi bir yerel sunucunun `htdocs` veya `www` klasörüne taşıyın.
    -   Apache ve MySQL servislerini başlatın.
    -   Tarayıcınızdan `http://localhost/proje-klasor-adiniz` adresine gidin.

## Kullanım ▶️

-   **Admin olarak giriş yapmak için:** `http://localhost/proje-klasor-adiniz/admin-login.php` adresine gidin ve admin bilgilerinizle giriş yapın.
-   **Kullanıcı olarak:** Anasayfadaki kayıt ol veya giriş yap seçeneklerini kullanın. 
