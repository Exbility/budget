
# Kouosl Yii > Budget Modulü

  


Kocaeli Üniversitesi Bilişim Sistemleri Mühendisliği Web Programlama dersi iöin PHP frameworklerinden biri olan Yii2 framework kullanarak yazdığım Budget modülü ile bütçe yönetimi için bütçesel verilerimizi tutan modülümüzdür.

## Ana Projemiz

[github.com/kouosl/portal](https://github.com/kouosl/portal)
  

## Budget Modulü Kurulumu

  

Ana dizinde bulunan "composer.json" dosyasını açıyoruz ve "repositories" kısmına

  

> {

>

> "type": "vcs",

>

> "url": "https://github.com/exbility/budget.git"

>

> }

  

"require" bölümüne ise

  

> "kouosl/budget": "dev-master"

  

kodlarını yazın. Ardından Vagrant linux sunucumuza SSH ile bağlanıp ana dizinimize geliyoruz ve aşağıdaki kodu uyguluyoruz. (/var/www/portal)

  

> php yii migrate

  

bu komut ile veri tabanınımızı oluşturduk.

  

## Bütçe verisi Oluşturma

  

Modülümüzü http://portal.kouosl/admin/budget/budgets sayfasından yönetebiliriz. (Sizde budget kısmından öncesi değişkenlik gösterebilir.)

**Modül anasayfası**na giriyoruz ve üzeirnde **Create Budget** yazan yeşil butona tıklıyoruz. Açılan sayfada yeni bütçe oluşturabilirsiniz. Eklediğimiz veriler aynı sayfada gözükecektir. Eklenen veriyi silmek veya değiştirmek için verinin sağında bulunan **Düzenle veya Sil** butonlarını kullanabilirsiniz.

Gösterim yani **view** sayfasından modülümüzün içerik sayfasına giderek eklenen verileri görebilirsiniz.

Üye girişi dışında ziyaretçilerde **http://portal.kouosl/budget/budget** sayfasından verileri görebilir ama düzenleme yapamaz.

