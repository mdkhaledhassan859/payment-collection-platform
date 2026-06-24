# Payment Flow

## Step 1

Student enters bill information.

```text
Student ID
Month
Year
Mobile Number
```

---

## Step 2

System generates bill amount.

```text
Bill Amount = 840 BDT
```

---

## Step 3

Laravel Application sends request to bKash API.

```php
$response = Http::post($gatewayUrl, [
    'student_id' => $studentId,
    'amount' => $amount
]);
```

---

## Step 4

 processes payment.

Possible status:

- SUCCESS
- FAILED
- PENDING

---

## Step 5

Platform verifies transaction.

```text
Transaction ID
Result Code
Payment Time
```

---

## Step 6

Transaction stored in MariaDB.

---

## Step 7

Reports updated automatically.
