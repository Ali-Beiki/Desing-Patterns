# Adapter Pattern (Structural)

در این دایرکتوری، یک نمونه ساده و واقعی از **الگوی Adapter** (آداپتر) رو پیاده‌سازی کردیم که مربوط به سیستم پرداخت میشه. این الگو کمک می‌کنه تا بتونیم **کدهایی با رابط ناسازگار** رو بدون تغییر در ساختار اصلی، به راحتی به سیستممون وصل کنیم.

---

## 🔍 Adapter Pattern چیه؟

- **هدفش** چیه؟ تبدیل رابط (interface) یه کلاس به یه رابط دیگه که کد ما انتظارشو داره.
- **چه مشکلی حل می‌کنه؟** وقتی یه کلاس داریم (مثلاً کتابخونه‌ای خارجی یا کد قدیمی) که متدهاش با چیزی که ما می‌خوایم فرق داره.
- **راه‌حلش؟** یه کلاس وسطی (Adapter) می‌سازیم که رابط مورد نظر ما رو پیاده‌سازی کنه، ولی در پشت صحنه متدهای اون کلاس ناسازگار (Adaptee) رو صدا بزنه.

### ساختار ساده‌ش:

```
Client ---> Adapter ---> Adaptee
       \              /
        \--> Target --/
```

- **Target**: اینترفیس مورد انتظار کلاینت (مثلاً `Payment`)
- **Adaptee**: کلاس ناسازگار (مثلاً `PaymentGateway`)
- **Adapter**: پل بین اون دو تا (مثلاً `PaymentGatewayAdapter`)

---

## 🛠 مثال: سیستم درگاه پرداخت

ما توی این مثال، یک سناریوی ساده‌ی پرداخت طراحی کردیم:

- کلاینت فقط با `Payment` کار می‌کنه که یه متد داره: `pay(int $amount)`
- اما درگاه پرداخت (`PaymentGateway`) متدی داره به اسم `makePayment()`
- برای اینکه این دو رو بهم وصل کنیم، از `PaymentGatewayAdapter` استفاده کردیم.

---

## 📁 فایل‌ها و کدها

### 1. `payment.php` - اینترفیس مورد انتظار (Target)

```php
<?php
interface Payment {
    public function pay(int $amount);
}
```

---

### 2. `paymentGateway.php` - کلاس اصلی درگاه (Adaptee)

```php
<?php
class PaymentGateway {
    public function makePayment(int $amount): void {
        echo "paymentGateway: payment $ $amount successfuly!";
    }
}
```

---

### 3. `paymentGatewayAdapter.php` - کلاس آداپتر (Adapter)

```php
<?php
require_once(__DIR__ . DIRECTORY_SEPARATOR . "payment.php");

class PaymentGatewayAdapter implements Payment {
    private PaymentGateway $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway) {
        $this->paymentGateway = $paymentGateway;
    }

    public function pay(int $amount): void {
        $this->paymentGateway->makePayment($amount);
    }
}
```

---

### 4. `paymentProcess.php` - کلاس کلاینت (Client)

```php
<?php
class PaymentProcess {
    public function __construct(private Payment $payment) {}

    public function process(int $amount): void {
        $this->payment->pay($amount);
    }
}
```

---

### 5. `index.php` - اجرای کد

```php
<?php
require_once(__DIR__ . DIRECTORY_SEPARATOR . "paymentGateway.php");
require_once(__DIR__ . DIRECTORY_SEPARATOR . "paymentGatewayAdapter.php");
require_once(__DIR__ . DIRECTORY_SEPARATOR . "paymentProcess.php");

$gateway = new PaymentGateway();
$adapter = new PaymentGatewayAdapter($gateway);
$process = new PaymentProcess($adapter);

$process->process(3000);
```

---

## ✅ جمع‌بندی

- الگوی Adapter به ما کمک می‌کنه تا کلاس‌هایی با رابط متفاوت رو، بدون تغییر در کدشون، به کد خودمون متصل کنیم.
- با این روش، کدمون قابل استفاده‌تر، تست‌پذیرتر و توسعه‌پذیرتر می‌شه.
- مخصوصاً برای کار با APIهای خارجی یا کدهای قدیمی (Legacy Code) خیلی مفیده.

---

## ✍️ نویسنده

Ali Beiki - [GitHub](https://github.com/Ali-Beiki)
