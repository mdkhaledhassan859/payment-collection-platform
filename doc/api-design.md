# API Design

## Bill Payment API

### Endpoint

POST /api/bill-payment

### Request

```json
{
  "student_id": "20210001",
  "bill_month": "052022",
  "bill_amount": 840,
  "mobile_number": "017XXXXXXXX"
}
```

### Response

```json
{
  "status": "SUCCESS",
  "transaction_id": "TXN123456"
}
```

---

## Transaction Status API

### Endpoint

GET /api/payment-status/{transactionId}

### Response

```json
{
  "transaction_id": "TXN123456",
  "status": "SUCCESS"
}
```

---

## Collection Report API

### Endpoint

GET /api/reports/collections
