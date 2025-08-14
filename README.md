# Online Randevu Yönetim Sistemi

Bu proje, kullanıcıların çeşitli hizmet sağlayıcılarından (**doktorlar, danışmanlar, eğitmenler vb.**) kolayca online randevu almasını sağlayan kapsamlı bir platformdur.  
Kullanıcılar, hizmet sağlayıcıların profillerini inceleyebilir, uygun saatlerde randevu oluşturabilir ve geçmiş randevularını takip edebilir.

---

## Özellikler

- **Kullanıcı Yönetimi:** Müşteriler ve hizmet sağlayıcılar için ayrı rollerle kayıt ve giriş sistemi.
- **Profil Yönetimi:** Hizmet sağlayıcıların uzmanlık alanlarını, hizmet detaylarını ve çalışma saatlerini listeleyen profiller.
- **Randevu Yönetimi:** Kullanıcıların kolayca randevu alabilmesi, iptal edebilmesi ve geçmiş randevularını görüntüleyebilmesi.
- **Bildirim Sistemi:** Randevu onayı, hatırlatmaları ve iptal bilgileri için e-posta ve bildirim gönderimi.

---

## Kurulum ve Çalıştırma

Bu projeyi yerel ortamınızda kurmak ve çalıştırmak için aşağıdaki adımları izleyin:

### 1. Proje Klonlama
```bash
git clone [proje_deposu_adresiniz]
```

### 2. Bağımlılıkları Yükleme
```bash
cd [proje_adi]
composer install
```

### 3. Çevre Dosyası (Environment File) Ayarları
```bash
cp .env.example .env
```
`.env` dosyasını açarak **DB_DATABASE**, **DB_USERNAME** ve **DB_PASSWORD** bilgilerini güncelleyin.

### 4. Uygulama Anahtarı Oluşturma
```bash
php artisan key:generate
```

### 5. Veritabanı Oluşturma
```bash
php artisan migrate
```

### 6. Sunucuyu Başlatma
```bash
php artisan serve
```
Artık projeniz [http://localhost:8000](http://localhost:8000) adresinden erişilebilir durumda olacaktır.

---

## Gelecekteki Geliştirmeler

Bu proje, temel özelliklerin yanı sıra aşağıdaki geliştirmelerle daha da zenginleştirilebilir:

- **API Geliştirme:** Mobil uygulamalarla entegrasyonu sağlamak için RESTful API oluşturulabilir.  
  Böylece iOS ve Android cihazlar üzerinden randevu işlemleri kolayca yönetilebilir.

- **Ödeme Entegrasyonu:** Randevu ödemelerinin sistem üzerinden yapılabilmesi için ödeme altyapısı (örn. Stripe, Iyzico) eklenebilir.  
  Bu sayede finansal işlemler otomatik hale gelir.

- **Gerçek Zamanlı Bildirimler:** Randevu güncellemeleri veya hatırlatmaları gibi anlık bilgiler için gerçek zamanlı bildirimler (WebSockets) eklenebilir.  
  Bu, kullanıcı deneyimini önemli ölçüde artırır.
