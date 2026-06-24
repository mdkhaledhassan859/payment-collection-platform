# Database Design

## bill_payment_transactions

```sql
CREATE TABLE bill_payment_transactions (

    id BIGINT AUTO_INCREMENT PRIMARY KEY,

    student_id VARCHAR(100) NOT NULL,

    clientip VARCHAR(50) NOT NULL,

    bill_amount DECIMAL(12,2) NOT NULL,

    bill_amount_bank_charge DECIMAL(12,2) NOT NULL,

    trans_start_date DATETIME NOT NULL,

    month_id INT NOT NULL,

    year INT NOT NULL,

    trans_id VARCHAR(100) NOT NULL UNIQUE,

    result VARCHAR(50) NOT NULL,

    result_code VARCHAR(20) NOT NULL,

    trans_date DATETIME NOT NULL,

    user_mobile_no VARCHAR(20) NOT NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    INDEX idx_student(student_id),

    INDEX idx_trans(trans_id),

    INDEX idx_mobile(user_mobile_no)

);
```

---

## Transaction Status

| Status | Description |
|----------|------------|
| SUCCESS | Payment Completed |
| FAILED | Payment Failed |
| PENDING | Awaiting Confirmation |
