# Database ERD

```mermaid
erDiagram

MERCHANTS ||--o{ PAYMENTS : creates
PAYMENTS ||--o{ TRANSACTIONS : has
TRANSACTIONS ||--o{ SETTLEMENTS : generates

MERCHANTS {
    int id
    string name
    string api_key
}

PAYMENTS {
    int id
    string student_id
    decimal amount
    string status
}

TRANSACTIONS {
    int id
    string trans_id
    string result
}

SETTLEMENTS {
    int id
    decimal amount
    date settlement_date
}
